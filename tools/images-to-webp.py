"""Generate the WebP images the site serves, from the full-resolution originals.

Layout
------
    _originals/assets/...   full-resolution JPEG/PNG masters (never deployed)
    assets/...              the .webp the site actually serves

Workflow: drop new photos anywhere under assets/ and run this script. Each one
is encoded to WebP beside itself and the original is filed away under
_originals/, so assets/ only ever holds web-sized files.

Sizing
------
Every file has to land in the 50-100 KB band. Quality is held at a level that
still looks clean (WebP q70) and the pixel dimensions float to fill the byte
budget, so the budget buys resolution instead of compression artefacts. Images
that already fit well under the band keep their own size and have their quality
raised into the headroom instead.

Requires Pillow:  python -m pip install Pillow
"""
import io
import os
import shutil
from PIL import Image, ImageOps, ImageFilter

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
ASSETS = os.path.join(ROOT, "assets")
ORIGINALS = os.path.join(ROOT, "_originals")
SRC_EXT = {".jpg", ".jpeg", ".png", ".gif"}

MAX_EDGE = 1800
TARGET_MAX = 100 * 1024
TARGET_MIN = 50 * 1024
Q_PHOTO = 70
Q_CEIL = 92

Image.MAX_IMAGE_PIXELS = None


def encode(im, q):
    buf = io.BytesIO()
    im.save(buf, "WEBP", quality=q, method=6, alpha_quality=92)
    return buf.getvalue()


def at_edge(im, edge):
    w, h = im.size
    if max(w, h) <= edge:
        return im
    s = edge / max(w, h)
    out = im.resize((max(1, round(w * s)), max(1, round(h * s))), Image.LANCZOS)
    return out.filter(ImageFilter.UnsharpMask(radius=0.5, percent=30, threshold=4))


def build(src, out_path):
    with Image.open(src) as raw:
        im = ImageOps.exif_transpose(raw)
        has_alpha = im.mode in ("RGBA", "LA") or (im.mode == "P" and "transparency" in im.info)
        im = im.convert("RGBA" if has_alpha else "RGB")
        im = at_edge(im, MAX_EDGE)

        data = encode(im, Q_PHOTO)
        if len(data) <= TARGET_MAX:
            size, q = im.size, Q_PHOTO
            # Headroom left at full size: spend it on quality, not on nothing.
            while q < Q_CEIL and len(data) < TARGET_MIN:
                trial = encode(im, q + 4)
                if len(trial) > TARGET_MAX:
                    break
                data, q = trial, q + 4
        else:
            # Too big at full size: find the largest long edge that fits.
            lo, hi = 320, max(im.size)
            data, size = None, None
            while lo <= hi:
                mid = (lo + hi) // 2
                cand = at_edge(im, mid)
                blob = encode(cand, Q_PHOTO)
                if len(blob) <= TARGET_MAX:
                    data, size = blob, cand.size
                    lo = mid + 16
                else:
                    hi = mid - 16
            if data is None:
                cand = at_edge(im, 320)
                data, size = encode(cand, 55), cand.size

    os.makedirs(os.path.dirname(out_path), exist_ok=True)
    with open(out_path, "wb") as fh:
        fh.write(data)
    return len(data), size


def sources():
    """(source file, served .webp path, original's resting place)."""
    for base in (ORIGINALS, ASSETS):
        if not os.path.isdir(base):
            continue
        for dirpath, _, names in os.walk(base):
            for n in names:
                if os.path.splitext(n)[1].lower() not in SRC_EXT:
                    continue
                src = os.path.join(dirpath, n)
                rel = os.path.relpath(src, base)
                if base is ORIGINALS:
                    # _originals/assets/x/y.jpg -> assets/x/y.webp
                    served = os.path.join(ROOT, os.path.splitext(rel)[0] + ".webp")
                    yield src, served, src
                else:
                    # A new photo dropped straight into assets/.
                    served = os.path.splitext(src)[0] + ".webp"
                    yield src, served, os.path.join(ORIGINALS, "assets", rel)


def main():
    jobs = sorted(sources(), key=lambda j: j[1].lower())

    clash = {}
    for _, served, _ in jobs:
        clash.setdefault(served.lower(), 0)
        clash[served.lower()] += 1
    for served, n in clash.items():
        if n > 1:
            print("COLLISION: %d sources want %s — rename one" % (n, served))

    before = after = 0
    built = skipped = 0
    for src, served, resting in jobs:
        fresh = os.path.exists(served) and os.path.getmtime(served) >= os.path.getmtime(src)
        try:
            if fresh:
                out_size, size = os.path.getsize(served), Image.open(served).size
                skipped += 1
            else:
                out_size, size = build(src, served)
                built += 1
                print("  %s  %.0fKB -> %.0fKB  %dx%d" % (
                    os.path.relpath(served, ROOT), os.path.getsize(src) / 1024,
                    out_size / 1024, size[0], size[1]))
        except Exception as exc:
            print("FAIL %s -> %s" % (src, exc))
            continue

        before += os.path.getsize(src)
        after += out_size

        # File the original away so assets/ only holds web-sized images.
        if os.path.abspath(src) != os.path.abspath(resting):
            os.makedirs(os.path.dirname(resting), exist_ok=True)
            shutil.move(src, resting)
            print("  filed original -> %s" % os.path.relpath(resting, ROOT))

    print("\n%d built, %d already current" % (built, skipped))
    print("originals %.1f MB  ->  served %.1f MB" % (before / 1048576, after / 1048576))


if __name__ == "__main__":
    main()
