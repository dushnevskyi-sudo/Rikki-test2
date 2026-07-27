<?php
/**
 * Shared page header: <head>, meta tags and site navigation.
 * Calling page may set, before including this file:
 *   $pageTitle        (string)  appended to the site name in <title>
 *   $pageDescription  (string)  meta description
 *   $headerTransparent (bool)   true = transparent nav over a dark hero (home page)
 */
require_once __DIR__ . '/../config.php';

$pageTitle        = $pageTitle ?? '';
$pageDescription  = $pageDescription ?? SITE_SLOGAN;
$headerTransparent = $headerTransparent ?? false;

$fullTitle = $pageTitle !== '' ? "$pageTitle - " . SITE_SHORT_NAME : SITE_SHORT_NAME . ' - ' . SITE_SLOGAN;
$currentPage = basename($_SERVER['PHP_SELF']);

function nav_active($page, $current) {
    return $page === $current ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($fullTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="icon" type="image/svg+xml" href="<?= SITE_FAVICON ?>">
<link rel="stylesheet" href="/assets/css/style.css">
<style>
  :root {
    --color-primary: <?= SITE_COLOR_PRIMARY ?>;
    --color-primary-dark: <?= SITE_COLOR_PRIMARY_DARK ?>;
    --color-accent: <?= SITE_COLOR_ACCENT ?>;
    --color-dark: <?= SITE_COLOR_DARK ?>;
    --color-gray: <?= SITE_COLOR_GRAY ?>;
  }
</style>
</head>
<body>
<header class="site-header<?= $headerTransparent ? ' site-header--transparent' : '' ?>">
  <div class="container header-inner">
    <a href="/" class="logo"><img src="<?= $headerTransparent ? SITE_LOGO_WHITE : SITE_LOGO ?>" alt="<?= htmlspecialchars(SITE_SHORT_NAME) ?> logo" height="28"></a>
    <nav class="main-nav">
      <a href="/index.php" class="nav-link<?= nav_active('index.php', $currentPage) ?>">Home</a>
      <a href="/for-companies.php" class="nav-link<?= nav_active('for-companies.php', $currentPage) ?>">For Companies</a>
      <a href="/for-developers.php" class="nav-link<?= nav_active('for-developers.php', $currentPage) ?>">For Developers</a>
      <?php if (SITE_TWITTER_URL): ?>
      <a href="<?= htmlspecialchars(SITE_TWITTER_URL) ?>" class="nav-link icon-link" target="_blank" rel="noopener" aria-label="Twitter">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.44 4.83c-.8.37-1.66.62-2.56.73a4.48 4.48 0 0 0 1.96-2.48 8.9 8.9 0 0 1-2.83 1.08 4.45 4.45 0 0 0-7.58 4.06A12.63 12.63 0 0 1 3.02 3.6a4.45 4.45 0 0 0 1.38 5.93 4.4 4.4 0 0 1-2.02-.56v.06a4.45 4.45 0 0 0 3.57 4.36 4.5 4.5 0 0 1-2 .08 4.46 4.46 0 0 0 4.15 3.09A8.93 8.93 0 0 1 1 18.58a12.6 12.6 0 0 0 6.83 2c8.2 0 12.68-6.79 12.68-12.68 0-.19 0-.39-.02-.58a9.1 9.1 0 0 0 2.24-2.32z"/></svg>
      </a>
      <?php endif; ?>
    </nav>
    <div class="header-actions">
      <a href="/login.php" class="link-action">Log in</a>
      <a href="/register.php" class="btn btn--small">Get started</a>
    </div>
    <button class="nav-toggle" aria-label="Toggle menu" onclick="document.querySelector('.main-nav').classList.toggle('is-open')">&#9776;</button>
  </div>
</header>
