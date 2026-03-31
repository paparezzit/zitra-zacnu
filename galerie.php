<?php
$pageTitle  = 'Galerie — Zítra začnu!';
$bodyClass  = 'page-galerie';
$activePage = 'galerie';
require 'includes/header.php';

// Fotogalerie — přidej sem cesty k obrázkům
$photos = [
    // ['src' => '/images/gallery/foto-01.jpg', 'alt' => 'Popis fotky'],
];

// Zúčtenky — přidej sem cesty k obrázkům účtenek
$zuctenky = [
    // ['src' => '/images/zuctenky/zuctenka-01.jpg', 'alt' => 'Zúčtenka č. 1'],
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
            <div class="photo-grid__item">
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

<?php require 'includes/footer.php'; ?>
