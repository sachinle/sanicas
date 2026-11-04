/* SANICAS — site interactions */
(function () {
    'use strict';

    var body = document.body;

    /* ---------- Mobile navigation ---------- */
    var toggle = document.getElementById('navToggle');
    if (toggle) {
        toggle.addEventListener('click', function () {
            var open = body.classList.toggle('nav-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        });
        document.querySelectorAll('#siteNav a').forEach(function (a) {
            a.addEventListener('click', function () { body.classList.remove('nav-open'); });
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') body.classList.remove('nav-open');
        });
    }

    /* ---------- Sticky header: pin after hero, hide on scroll down ---------- */
    var header = document.getElementById('siteHeader');
    if (header) {
        var lastY = window.scrollY;
        var onScroll = function () {
            var y = window.scrollY;
            var pinned = y > 140;
            header.classList.toggle('is-fixed', pinned);
            header.classList.toggle('is-hidden', pinned && y > lastY && y > 400 && !body.classList.contains('nav-open'));
            lastY = y;
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ---------- Reveal on scroll ----------
       Measured live on every scroll frame rather than with an
       IntersectionObserver. An observer only samples at frame boundaries, so a
       fast wheel flick, a scrollbar drag or an in-page #anchor jump can carry a
       section past the viewport without it ever being sampled as intersecting —
       and it then stays invisible for good. Re-measuring cannot miss anything:
       the test is "has this element's top passed the fold line", which stays
       true once it has scrolled by. Each element is dropped from the list as it
       is shown, so the per-frame cost falls away as the page is read. */
    // Tells the stylesheet its failsafe is not needed: this script is running.
    document.documentElement.classList.add('reveal-js');

    var pending = [].slice.call(document.querySelectorAll('.reveal'));
    var queued = false;

    var sweep = function () {
        queued = false;
        var fold = window.innerHeight + 120;
        var batch = 0;
        for (var i = 0; i < pending.length; i++) {
            var el = pending[i];
            if (el.getBoundingClientRect().top >= fold) continue;
            // Stagger only what appears together, so a jump never queues a
            // long cascade of delays.
            el.style.transitionDelay = (Math.min(batch++, 2) * 60) + 'ms';
            el.classList.add('is-in');
            pending.splice(i--, 1);
        }
    };

    var requestSweep = function () {
        if (queued || !pending.length) return;
        queued = true;
        requestAnimationFrame(sweep);
    };

    if (pending.length) {
        window.addEventListener('scroll', requestSweep, { passive: true });
        window.addEventListener('resize', requestSweep, { passive: true });
        // Images and fonts settling can move an element across the fold.
        window.addEventListener('load', requestSweep);
        // Restored from the back/forward cache, or returning to a background
        // tab: no scroll event follows, so sweep on the way back in.
        window.addEventListener('pageshow', requestSweep);
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) requestSweep();
        });
        // Landing on a #section jumps past everything above it without a
        // scroll event firing first.
        window.addEventListener('hashchange', requestSweep);
        sweep();
        // Last resort: whatever has happened, nothing on screen stays blank.
        setTimeout(sweep, 1000);
    }

    /* ---------- Count-up stats ---------- */
    var counters = [].slice.call(document.querySelectorAll('[data-count]'));
    var runCount = function (el) {
        var target = parseInt(el.getAttribute('data-count'), 10);
        var suffix = el.getAttribute('data-suffix') || '';
        var start = null;
        var step = function (ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / 1200, 1);
            el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
            if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    if (counters.length) {
        // Same reasoning as the reveals: a skipped counter would be stuck at its
        // placeholder, so this is measured live too.
        var countQueued = false;
        var countSweep = function () {
            countQueued = false;
            var vh = window.innerHeight;
            for (var i = 0; i < counters.length; i++) {
                var r = counters[i].getBoundingClientRect();
                if (r.top >= vh) continue;
                runCount(counters[i]);
                counters.splice(i--, 1);
            }
        };
        var requestCount = function () {
            if (countQueued || !counters.length) return;
            countQueued = true;
            requestAnimationFrame(countSweep);
        };
        window.addEventListener('scroll', requestCount, { passive: true });
        window.addEventListener('resize', requestCount, { passive: true });
        window.addEventListener('load', requestCount);
        countSweep();
    }

    /* ---------- Filter tabs (data-filter-group -> data-filter-target) ---------- */
    document.querySelectorAll('[data-filter-group]').forEach(function (group) {
        var name = group.getAttribute('data-filter-group');
        var target = document.querySelector('[data-filter-target="' + name + '"]');
        if (!target) return;
        group.querySelectorAll('[data-filter]').forEach(function (tab) {
            tab.addEventListener('click', function () {
                var f = tab.getAttribute('data-filter');
                group.querySelectorAll('[data-filter]').forEach(function (t) {
                    var on = t === tab;
                    t.classList.toggle('is-active', on);
                    t.setAttribute('aria-selected', on ? 'true' : 'false');
                });
                Array.prototype.forEach.call(target.children, function (item) {
                    var cat = (item.getAttribute('data-level') || item.getAttribute('data-cat') || '').split(' ');
                    var show = f === 'all' || cat.indexOf(f) !== -1;
                    item.classList.toggle('is-hidden', !show);
                    if (show) item.classList.add('is-in');
                });
            });
        });
    });

    /* ---------- Video modal (YouTube links or local mp4) ---------- */
    var modal = null;
    function openVideo(src) {
        if (!modal) {
            modal = document.createElement('div');
            modal.className = 'video-modal';
            modal.setAttribute('role', 'dialog');
            modal.setAttribute('aria-modal', 'true');
            modal.innerHTML = '<button class="video-modal__close" aria-label="Close video"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><path d="M6 6l12 12M18 6 6 18"/></svg></button><div class="video-modal__frame"></div>';
            body.appendChild(modal);
            modal.addEventListener('click', function (e) {
                if (e.target === modal || e.target.closest('.video-modal__close')) closeVideo();
            });
            document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeVideo(); });
        }
        var frame = modal.querySelector('.video-modal__frame');
        var yt = src.match(/(?:youtu\.be\/|v=|embed\/|shorts\/)([\w-]{11})/);
        if (yt) {
            frame.innerHTML = '<iframe src="https://www.youtube.com/embed/' + yt[1] + '?autoplay=1&rel=0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen title="Video"></iframe>';
        } else {
            frame.innerHTML = '<video src="' + src + '" controls autoplay playsinline></video>';
        }
        modal.classList.add('is-open');
        body.style.overflow = 'hidden';
    }
    function closeVideo() {
        if (!modal) return;
        modal.classList.remove('is-open');
        modal.querySelector('.video-modal__frame').innerHTML = '';
        body.style.overflow = '';
    }
    document.addEventListener('click', function (e) {
        var trigger = e.target.closest('[data-video]');
        if (!trigger) return;
        e.preventDefault();
        openVideo(trigger.getAttribute('data-video'));
    });

    /* ---------- Horizontal carousels ---------- */
    document.querySelectorAll('[data-carousel]').forEach(function (wrap) {
        var track = wrap.querySelector('[data-carousel-track]');
        var prev = wrap.querySelector('[data-carousel-prev]');
        var next = wrap.querySelector('[data-carousel-next]');
        if (!track) return;
        var stepBy = function (dir) {
            var card = track.firstElementChild;
            var gap = parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap) || 16;
            var w = card ? card.getBoundingClientRect().width + gap : track.clientWidth * 0.8;
            track.scrollBy({ left: dir * w, behavior: 'smooth' });
        };
        if (prev) prev.addEventListener('click', function () { stepBy(-1); });
        if (next) next.addEventListener('click', function () { stepBy(1); });
    });

    /* ---------- Tabs (generic: [data-tabs] > [data-tab] + [data-panel]) ---------- */
    document.querySelectorAll('[data-tabs]').forEach(function (tabs) {
        var buttons = tabs.querySelectorAll('[data-tab]');
        buttons.forEach(function (b) {
            b.addEventListener('click', function () {
                var id = b.getAttribute('data-tab');
                buttons.forEach(function (x) {
                    x.classList.toggle('is-active', x === b);
                    x.setAttribute('aria-selected', x === b ? 'true' : 'false');
                });
                tabs.querySelectorAll('[data-panel]').forEach(function (p) {
                    p.hidden = p.getAttribute('data-panel') !== id;
                });
            });
        });
    });

    /* ---------- Photo slider with dots, arrows, counter & autoplay ---------- */
    document.querySelectorAll('[data-slider]').forEach(function (slider) {
        var slides = slider.querySelectorAll('.slider__slide');
        var dots = slider.querySelectorAll('[data-slider-dot]');
        var counter = slider.querySelector('[data-slider-counter]');
        var delay = parseInt(slider.getAttribute('data-autoplay'), 10) || 0;
        var index = 0, timer = null;
        var pad = function (n) { return (n < 10 ? '0' : '') + n; };
        var go = function (i) {
            index = (i + slides.length) % slides.length;
            slides.forEach(function (s, k) { s.classList.toggle('is-active', k === index); });
            dots.forEach(function (d, k) { d.classList.toggle('is-active', k === index); });
            if (counter) counter.textContent = pad(index + 1) + ' / ' + pad(slides.length);
        };
        var restart = function () {
            if (!delay || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            clearInterval(timer);
            timer = setInterval(function () { go(index + 1); }, delay);
        };
        var prev = slider.querySelector('[data-slider-prev]');
        var next = slider.querySelector('[data-slider-next]');
        if (prev) prev.addEventListener('click', function () { go(index - 1); restart(); });
        if (next) next.addEventListener('click', function () { go(index + 1); restart(); });
        dots.forEach(function (d) {
            d.addEventListener('click', function () { go(parseInt(d.getAttribute('data-slider-dot'), 10)); restart(); });
        });
        // Swipe support
        var startX = null;
        slider.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
        slider.addEventListener('touchend', function (e) {
            if (startX === null) return;
            var dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 40) { go(index + (dx < 0 ? 1 : -1)); restart(); }
            startX = null;
        });
        slider.addEventListener('mouseenter', function () { clearInterval(timer); });
        slider.addEventListener('mouseleave', restart);
        restart();
    });

    /* ---------- Drag to scroll (horizontal strips) ---------- */
    document.querySelectorAll('[data-drag-scroll]').forEach(function (el) {
        var down = false, moved = false, sx = 0, sl = 0;
        el.addEventListener('mousedown', function (e) {
            down = true; moved = false; sx = e.pageX; sl = el.scrollLeft;
        });
        window.addEventListener('mouseup', function () {
            down = false;
            setTimeout(function () { el.classList.remove('is-dragging'); }, 0);
        });
        el.addEventListener('mousemove', function (e) {
            if (!down) return;
            var dx = e.pageX - sx;
            if (Math.abs(dx) > 5) { moved = true; el.classList.add('is-dragging'); }
            el.scrollLeft = sl - dx;
        });
        el.addEventListener('click', function (e) {
            if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; }
        }, true);
    });

    /* ---------- Lightbox for photo galleries ---------- */
    var lb = null, lbItems = [], lbIndex = 0;
    function lbShow(i) {
        lbIndex = (i + lbItems.length) % lbItems.length;
        lb.querySelector('img').src = lbItems[lbIndex].getAttribute('data-src');
        lb.querySelector('.lightbox__count').textContent = (lbIndex + 1) + ' / ' + lbItems.length;
    }
    function lbClose() {
        if (!lb) return;
        lb.classList.remove('is-open');
        body.style.overflow = '';
    }
    document.addEventListener('click', function (e) {
        var item = e.target.closest('[data-lightbox]');
        if (!item) return;
        e.preventDefault();
        if (!lb) {
            lb = document.createElement('div');
            lb.className = 'lightbox';
            lb.setAttribute('role', 'dialog');
            lb.setAttribute('aria-modal', 'true');
            lb.innerHTML = '<img alt="">' +
                '<button class="lightbox__btn lightbox__close" aria-label="Close">&times;</button>' +
                '<button class="lightbox__btn lightbox__prev" aria-label="Previous">&#8592;</button>' +
                '<button class="lightbox__btn lightbox__next" aria-label="Next">&#8594;</button>' +
                '<span class="lightbox__count"></span>';
            body.appendChild(lb);
            lb.addEventListener('click', function (ev) {
                if (ev.target.closest('.lightbox__prev')) return lbShow(lbIndex - 1);
                if (ev.target.closest('.lightbox__next')) return lbShow(lbIndex + 1);
                if (ev.target === lb || ev.target.closest('.lightbox__close')) lbClose();
            });
            document.addEventListener('keydown', function (ev) {
                if (!lb.classList.contains('is-open')) return;
                if (ev.key === 'Escape') lbClose();
                if (ev.key === 'ArrowLeft') lbShow(lbIndex - 1);
                if (ev.key === 'ArrowRight') lbShow(lbIndex + 1);
            });
        }
        var group = item.getAttribute('data-lightbox');
        lbItems = Array.prototype.slice.call(document.querySelectorAll('[data-lightbox="' + group + '"]'));
        lbShow(lbItems.indexOf(item));
        lb.classList.add('is-open');
        body.style.overflow = 'hidden';
    });

    /* ---------- Courses: department filter across UG + PG sections ---------- */
    var deptTabs = document.querySelector('[data-dept-tabs]');
    if (deptTabs) {
        var applyDept = function (dept) {
            deptTabs.querySelectorAll('[data-dept]').forEach(function (t) {
                var on = t.getAttribute('data-dept') === dept;
                t.classList.toggle('is-active', on);
                t.setAttribute('aria-selected', on ? 'true' : 'false');
            });
            document.querySelectorAll('[data-dept-item]').forEach(function (el) {
                var show = dept === 'all' || el.getAttribute('data-dept-item') === dept;
                el.classList.toggle('is-hidden', !show);
                if (show) el.classList.add('is-in');
            });
            document.querySelectorAll('[data-dept-section]').forEach(function (sec) {
                sec.classList.toggle('is-hidden', !sec.querySelector('[data-dept-item]:not(.is-hidden)'));
            });
        };
        deptTabs.addEventListener('click', function (e) {
            var tab = e.target.closest('[data-dept]');
            if (!tab) return;
            applyDept(tab.getAttribute('data-dept'));
            var first = document.querySelector('[data-dept-item]:not(.is-hidden)');
            if (first && tab.getAttribute('data-dept') !== 'all') {
                first.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    /* ---------- Map: swap photo for live Google Map on demand ---------- */
    document.querySelectorAll('[data-map-toggle]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var card = btn.closest('[data-map]');
            var frame = card.querySelector('[data-map-frame]');
            if (!frame.firstChild) {
                frame.innerHTML = '<iframe src="' + frame.getAttribute('data-src') + '" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="SANICAS location map"></iframe>';
            }
            var live = card.classList.toggle('is-live');
            btn.textContent = live ? 'Show campus photo' : 'View map here';
        });
    });

    /* ---------- "On this page" tabs: highlight the section in view ---------- */
    document.querySelectorAll('[data-scrollspy]').forEach(function (nav) {
        var links = Array.prototype.slice.call(nav.querySelectorAll('a[href^="#"]'));
        var targets = links.map(function (a) { return document.getElementById(a.getAttribute('href').slice(1)); });
        function setActive(i) {
            links.forEach(function (a, j) {
                a.classList.toggle('is-active', i === j);
                if (i === j) a.setAttribute('aria-current', 'location'); else a.removeAttribute('aria-current');
            });
        }
        function onScroll() {
            var line = window.innerHeight * 0.35, current = 0;
            targets.forEach(function (t, i) {
                if (t && t.getBoundingClientRect().top <= line) current = i;
            });
            setActive(current);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    });

    /* ---------- Admission enquiry: show only the courses of the chosen programme ---------- */
    document.querySelectorAll('[data-programme-form]').forEach(function (form) {
        var prog = form.querySelector('select[name="programme"]');
        var course = form.querySelector('select[name="course"]');
        if (!prog || !course) return;
        function sync() {
            var p = prog.value;
            course.querySelectorAll('optgroup').forEach(function (g) {
                var on = !p || g.getAttribute('data-programme') === p;
                g.hidden = !on;
                g.disabled = !on;
            });
            var sel = course.selectedOptions[0];
            if (sel && sel.parentNode.disabled) course.value = '';
            course.disabled = !p;
        }
        prog.addEventListener('change', sync);
        sync();
    });

    /* ---------- Contact form (client-side validation feedback) ---------- */
    document.querySelectorAll('form[data-validate]').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                form.classList.add('was-validated');
                var first = form.querySelector(':invalid');
                if (first) first.focus();
            }
        });
    });
})();
