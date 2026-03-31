<?php
$pageTitle  = 'Galerie — Zítra začnu!';
$bodyClass  = 'page-galerie';
$activePage = 'galerie';
require 'includes/header.php';

// Fotogalerie — přidej sem cesty k obrázkům
// 'src' = náhled (thumbs/, max 1200px), 'full' = originál pro lightbox
$photos = [
    ['src' => '/images/gallery/thumbs/foto-01.jpg', 'full' => '/images/gallery/foto-01.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-02.jpg', 'full' => '/images/gallery/foto-02.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-03.jpg', 'full' => '/images/gallery/foto-03.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-04.jpg', 'full' => '/images/gallery/foto-04.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-05.jpg', 'full' => '/images/gallery/foto-05.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-06.jpg', 'full' => '/images/gallery/foto-06.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-07.jpg', 'full' => '/images/gallery/foto-07.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-08.jpg', 'full' => '/images/gallery/foto-08.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-09.jpg', 'full' => '/images/gallery/foto-09.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/foto-10.jpg', 'full' => '/images/gallery/foto-10.jpg', 'alt' => ''],
];

$zuctenky = [
    ['src' => '/images/zuctenky/zuctenka-01.png', 'alt' => 'Zúčtenka č. 1'],
    ['src' => '/images/zuctenky/zuctenka-02.png', 'alt' => 'Zúčtenka č. 2'],
    ['src' => '/images/zuctenky/zuctenka-03.png', 'alt' => 'Zúčtenka č. 3'],
];
?>

<div class="gallery-tabs">
    <button class="gallery-tabs__btn gallery-tabs__btn--active" data-tab="fotogalerie">Fotogalerie</button>
    <button class="gallery-tabs__btn" data-tab="zuctenky">Zúčtenky</button>
</div>

<main class="gallery-content">

    <div class="tab-panel tab-panel--active" id="tab-fotogalerie">
        <?php if (!empty($photos)): ?>
        <div class="photo-grid">
            <?php foreach ($photos as $photo): ?>
            <div class="photo-grid__item" data-full="<?= htmlspecialchars($photo['full']) ?>">
                <img src="<?= htmlspecialchars($photo['src']) ?>" alt="<?= htmlspecialchars($photo['alt']) ?>" loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p class="gallery-placeholder">Fotografie budou brzy přidány.</p>
        <?php endif; ?>
    </div>

    <div class="tab-panel" id="tab-zuctenky">
        <?php if (!empty($zuctenky)): ?>
        <div class="zuctenky-grid">
            <?php foreach ($zuctenky as $z): ?>
            <img src="<?= htmlspecialchars($z['src']) ?>" alt="<?= htmlspecialchars($z['alt']) ?>" loading="lazy">
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p class="gallery-placeholder">Zúčtenky budou brzy přidány.</p>
        <?php endif; ?>
    </div>

</main>

<div class="lightbox" id="lightbox" aria-hidden="true" aria-modal="true" role="dialog">
    <button class="lightbox__btn lightbox__close" aria-label="Zavřít">✕</button>
    <button class="lightbox__btn lightbox__prev" aria-label="Předchozí">←</button>
    <button class="lightbox__btn lightbox__next" aria-label="Další">→</button>
    <img class="lightbox__img" src="" alt="">
</div>

<?php require 'includes/footer.php'; ?>
