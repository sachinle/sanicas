<?php
/**
 * Small view helpers shared by every page.
 */

function e($s)
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

/** Build a site-relative URL. */
function url($path = '')
{
    return BASE_URL . '/' . ltrim($path, '/');
}

/**
 * Asset URL (spaces and other characters encoded per path segment).
 *
 * Photos and graphics are shipped as WebP next to the original JPEG/PNG, so a
 * request for either extension is answered with the WebP whenever one exists.
 * Pages keep naming the file they were written against.
 */
function asset($path)
{
    static $swapped = [];

    $path = ltrim($path, '/');

    if (preg_match('/\.(jpe?g|png|gif)$/i', $path)) {
        if (!array_key_exists($path, $swapped)) {
            $webp = preg_replace('/\.(jpe?g|png|gif)$/i', '.webp', $path);
            $swapped[$path] = is_file(__DIR__ . '/../assets/' . $webp) ? $webp : $path;
        }
        $path = $swapped[$path];
    }

    $parts = array_map('rawurlencode', explode('/', $path));
    return BASE_URL . '/assets/' . implode('/', $parts);
}



/** Inline line icons (24px grid, 1.6 stroke) matching the Figma icon set. */
function icon($name, $class = 'icon')
{
    $paths = [
        'arrow-right'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-up-right' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'arrow-left'     => '<path d="M19 12H5M11 6l-6 6 6 6"/>',
        'play'           => '<path d="M7 4.5v15l12-7.5-12-7.5Z" fill="currentColor"/>',
        'phone'          => '<path d="M21 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 1.1 4.2 2 2 0 0 1 3.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L7.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/>',
        'mail'           => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        'instagram'      => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r=".8" fill="currentColor"/>',
        'map-pin'        => '<path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/>',
        'download'       => '<path d="M12 4v11M7 10l5 5 5-5M5 20h14"/>',
        'check'          => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
        'plus'           => '<path d="M12 5v14M5 12h14"/>',
        'menu'           => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'close'          => '<path d="M6 6l12 12M18 6 6 18"/>',
        'clock'          => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'calendar'       => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/>',
        'book'           => '<path d="M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2V5Z"/><path d="M4 19a2 2 0 0 1 2-2h13"/>',
        'users'          => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8M21.5 20a6.5 6.5 0 0 0-4-6"/>',
        'award'          => '<circle cx="12" cy="9" r="6"/><path d="m8.5 14-1.5 7 5-3 5 3-1.5-7"/>',
        'briefcase'      => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 13h18"/>',
        'globe'          => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/>',
        'star'           => '<path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1 6.2L12 17.3 6.5 20.2l1-6.2L3 9.6l6.2-.9L12 3Z"/>',
        'quote'          => '<path d="M9 7H5v6h4v4H5M19 7h-4v6h4v4h-4" />',
    ];
    $p = $paths[$name] ?? '';
    return '<svg class="' . e($class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
}

/**
 * Pill button with arrow disc.
 * Variants: primary (ochre), dark, glass (over imagery), light.
 */
function btn($label, $href = '#', $variant = 'primary', $attrs = '')
{
    return '<a class="btn btn--' . e($variant) . '" href="' . e($href) . '" ' . $attrs . '>'
        . '<span class="btn__label">' . e($label) . '</span>'
        . '<span class="btn__disc">' . icon('arrow-right') . '</span></a>';
}

/** Small chip with a dot. Tones: ochre, glass, light, dark. */
function chip($label, $tone = 'ochre')
{
    return '<span class="chip chip--' . e($tone) . '"><span class="chip__dot"></span>' . e($label) . '</span>';
}

/** Section heading: Plus Jakarta headline with an Instrument Serif italic accent. */
function headline($plain, $accent = '', $tag = 'h2', $class = 'h2', $after = '')
{
    $html = '<' . $tag . ' class="' . e($class) . '">' . e($plain);
    if ($accent !== '') {
        $html .= ' <em class="serif">' . e($accent) . '</em>';
    }
    if ($after !== '') {
        $html .= ' ' . e($after);
    }
    return $html . '</' . $tag . '>';
}

/**
 * Bento colour card. Tones: ochre, ink, terra, sage, ochre-soft, paper.
 */
function color_card($title, $body, $index = '', $tone = 'ochre', $extraClass = '')
{
    $html = '<article class="color-card color-card--' . e($tone) . ' ' . e($extraClass) . ' reveal">';
    $html .= '<div class="color-card__top"><span></span>';
    $html .= icon('arrow-up-right', 'icon color-card__arrow') . '</div>';
    $html .= '<div class="color-card__content"><h3 class="h3">' . e($title) . '</h3>';
    $html .= '<p class="body-s">' . e($body) . '</p></div></article>';
    return $html;
}

/** Photographic bento card with a glass tag. */
function image_card($title, $body, $tag, $img, $extraClass = '')
{
    $cleanTag = preg_replace('/^\d+\s*·\s*/u', '', (string) $tag);
    return '<article class="image-card ' . e($extraClass) . ' reveal">'
        . '<img class="image-card__bg" src="' . e($img) . '" alt="" loading="lazy">'
        . '<div class="image-card__top">' . ($cleanTag !== '' ? chip($cleanTag, 'glass') : '<span></span>') . '<span class="image-card__disc">' . icon('arrow-up-right') . '</span></div>'
        . '<div class="image-card__content"><h3 class="h3">' . e($title) . '</h3><p class="body-s">' . e($body) . '</p></div>'
        . '</article>';
}

function fig($file)
{
    if (str_starts_with($file, 'images (2)/') || str_starts_with($file, 'images/')) {
        return asset($file);
    }
    return asset('figma/' . $file);
}
