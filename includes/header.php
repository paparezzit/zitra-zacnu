<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Zítra začnu! — Vánoční festival zlozvyků') ?></title>
    <link rel="stylesheet" href="/css/style.css?v=0.3">
</head>
<body class="<?= htmlspecialchars($bodyClass ?? '') ?>">

<nav class="nav">
    <h1 class="nav__logo">
        <?php if (($bodyClass ?? '') === 'page-home'): ?>
            <div class="hero__logo">
                <img src="/images/logo.png" alt="Zítra začnu!">
            </div>
        <?php else: ?>
            <a href="/index.php" class="nav__logo">Zítra začnu!</a>
        <?php endif; ?>
    </h1>
    <div class="nav__links">
        <a href="/about.php" class="nav__link <?= ($activePage ?? '') === 'o-projektu' ? 'nav__link--active' : '' ?>">O&nbsp;projektu</a>
        <a href="/galerie.php" class="nav__link <?= ($activePage ?? '') === 'galerie' ? 'nav__link--active' : '' ?>">Galerie</a>
    </div>
</nav>
