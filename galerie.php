<?php
$pageTitle  = 'Galerie — Zítra začnu!';
$bodyClass  = 'page-galerie';
$activePage = 'galerie';
require 'includes/header.php';

// Fotogalerie — přidej sem cesty k obrázkům
// 'src' = náhled (thumbs/, max 1200px), 'full' = originál pro lightbox
$photos = [
    ['src' => '/images/gallery/thumbs/0.jpg',  'full' => '/images/gallery/0.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/1.jpg',  'full' => '/images/gallery/1.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/2.jpg',  'full' => '/images/gallery/2.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/3.jpg',  'full' => '/images/gallery/3.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/4.jpg',  'full' => '/images/gallery/4.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/5.jpg',  'full' => '/images/gallery/5.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/6.jpg',  'full' => '/images/gallery/6.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/7.jpg',  'full' => '/images/gallery/7.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/8.jpg',  'full' => '/images/gallery/8.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/9.jpg',  'full' => '/images/gallery/9.jpg',  'alt' => ''],
    ['src' => '/images/gallery/thumbs/10.jpg', 'full' => '/images/gallery/10.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/11.jpg', 'full' => '/images/gallery/11.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/12.jpg', 'full' => '/images/gallery/12.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/13.jpg', 'full' => '/images/gallery/13.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/14.jpg', 'full' => '/images/gallery/14.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/15.jpg', 'full' => '/images/gallery/15.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/16.jpg', 'full' => '/images/gallery/16.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/17.jpg', 'full' => '/images/gallery/17.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/18.jpg', 'full' => '/images/gallery/18.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/19.jpg', 'full' => '/images/gallery/19.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/20.jpg', 'full' => '/images/gallery/20.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/21.jpg', 'full' => '/images/gallery/21.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/22.jpg', 'full' => '/images/gallery/22.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/23.jpg', 'full' => '/images/gallery/23.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/24.jpg', 'full' => '/images/gallery/24.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/25.jpg', 'full' => '/images/gallery/25.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/26.jpg', 'full' => '/images/gallery/26.jpg', 'alt' => ''],
    ['src' => '/images/gallery/thumbs/27.jpg', 'full' => '/images/gallery/27.jpg', 'alt' => ''],
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
