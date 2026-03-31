<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Zítra začnu! — Vánoční festival zlozvyků') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!-- Neue Haas Grotesk je komerční font. Přidej vlastní kopii přes @font-face v style.css. -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="<?= htmlspecialchars($bodyClass ?? '') ?>">

<nav class="nav">
    <a href="/index.php" class="nav__link <?= ($activePage ?? '') === 'o-projektu' ? 'nav__link--active' : '' ?>">O&nbsp;projektu</a>
    <a href="/galerie.php" class="nav__link <?= ($activePage ?? '') === 'galerie' ? 'nav__link--active' : '' ?>">Galerie</a>
</nav>
