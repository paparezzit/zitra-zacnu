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
