/* ── Nav scroll background ───────────────────── */

(function () {
    const nav = document.querySelector('.nav');
    if (!nav) return;

    function onScroll() {
        nav.classList.toggle('nav--scrolled', window.scrollY > 0);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
 
/* ── Lightbox ────────────────────────────────── */

(function () {
    const lightbox = document.getElementById('lightbox');
    if (!lightbox) return;

    const img     = lightbox.querySelector('.lightbox__img');
    const btnClose = lightbox.querySelector('.lightbox__close');
    const btnPrev  = lightbox.querySelector('.lightbox__prev');
    const btnNext  = lightbox.querySelector('.lightbox__next');

    let images  = [];
    let current = 0;

    function open(index) {
        current = index;
        img.src = images[current].src;
        img.alt = images[current].alt;
        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        lightbox.classList.remove('is-open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        img.src = '';
    }

    function prev() { open((current - 1 + images.length) % images.length); }
    function next() { open((current + 1) % images.length); }

    document.querySelectorAll('.photo-grid__item').forEach(function (item, i) {
        const el = item.querySelector('img');
        images.push({ src: item.dataset.full || el.src, alt: el.alt });
        item.addEventListener('click', function () { open(i); });
    });

    if (!images.length) return;

    btnClose.addEventListener('click', close);
    btnPrev.addEventListener('click', prev);
    btnNext.addEventListener('click', next);

    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) close();
    });

    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('is-open')) return;
        if (e.key === 'Escape')     close();
        if (e.key === 'ArrowLeft')  prev();
        if (e.key === 'ArrowRight') next();
    });
})();

/* ── Gallery tab switching ─────────────────── */

(function () {
    const buttons = document.querySelectorAll('.gallery-tabs__btn');
    if (!buttons.length) return;

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const target = btn.dataset.tab;

            // Update active button
            buttons.forEach(function (b) {
                b.classList.toggle('gallery-tabs__btn--active', b === btn);
            });

            // Show target panel, hide others
            document.querySelectorAll('.tab-panel').forEach(function (panel) {
                panel.classList.toggle('tab-panel--active', panel.id === 'tab-' + target);
            });
        });
    });
})();

/* ── Hero video mute toggle ──────────────────── */

(function () {
    const btn   = document.querySelector('.hero__mute');
    const video = document.querySelector('.hero__video');
    if (!btn || !video) return;

    const iconOff = btn.querySelector('.hero__mute-icon--off');
    const iconOn  = btn.querySelector('.hero__mute-icon--on');

    btn.addEventListener('click', function () {
        video.muted = !video.muted;
        iconOff.style.display = video.muted ? '' : 'none';
        iconOn.style.display  = video.muted ? 'none' : '';
    });
})();
