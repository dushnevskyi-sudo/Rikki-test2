<?php /** Global <head> + site header/navigation */ ?>
<!DOCTYPE html>
<html lang="<?= e($SITE['lang']) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <link rel="canonical" href="<?= e($SITE['url'] . current_route()) ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($page_desc) ?>">
    <meta property="og:url" content="<?= e($SITE['url'] . current_route()) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <?php if (!empty($SITE['analytics'])): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($SITE['analytics']) ?>"></script>
    <?php endif; ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>

<!-- Top utility bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__contacts">
            <a href="tel:<?= e($COMPANY['phone_raw']) ?>"><?= icon('phone', 16) ?> <?= e($COMPANY['phone']) ?></a>
            <a href="mailto:<?= e($COMPANY['email']) ?>"><?= icon('mail', 16) ?> <?= e($COMPANY['email']) ?></a>
        </div>
        <div class="topbar__meta">
            <span><?= icon('clock', 16) ?> <?= e($COMPANY['hours']) ?></span>
        </div>
    </div>
</div>

<!-- Main header -->
<header class="header" id="header">
    <div class="container header__inner">
        <a class="logo" href="<?= url('/') ?>">
            <span class="logo__mark"><?= icon('ship', 22) ?></span>
            <span class="logo__text"><?= e($COMPANY['brand']) ?><b>.</b></span>
        </a>

        <nav class="nav" id="nav" aria-label="Main navigation">
            <?php foreach ($NAV as $label => $path): ?>
                <a class="nav__link <?= is_active($path) ? 'is-active' : '' ?>" href="<?= url($path) ?>"><?= e($label) ?></a>
            <?php endforeach; ?>
        </nav>

        <a class="btn btn--primary header__cta" href="<?= url('/quote') ?>">Get a Quote</a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<main id="main">
