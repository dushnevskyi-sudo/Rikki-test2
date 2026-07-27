<?php
require_once __DIR__ . '/config.php';
$projects = require __DIR__ . '/data/projects.php';
$featured = array_values(array_filter($projects, fn($p) => !empty($p['featured'])));

$pageTitle = '';
$pageDescription = SITE_SLOGAN . ' Buy digital assets and get early access to new token offerings.';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="container">
    <h1 class="hero__title"><?= htmlspecialchars(SITE_SHORT_NAME) ?></h1>
    <p class="hero__subtitle"><?= htmlspecialchars(SITE_SLOGAN) ?></p>
    <div class="hero__cta">
      <a href="/register.php" class="btn btn--large">Get Started</a>
    </div>
  </div>
</section>

<section class="promos">
  <div class="container">
    <div class="promo-grid">
      <?php foreach ($featured as $p): ?>
      <a class="promo-card" href="/asset.php?slug=<?= urlencode($p['slug']) ?>">
        <span class="tag">Trading</span>
        <h3><?= htmlspecialchars($p['name']) ?> (<?= htmlspecialchars($p['ticker']) ?>)</h3>
        <p><?= htmlspecialchars($p['tagline']) ?></p>
        <span class="btn btn--small"><?= 'Learn more' ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="value-props">
  <div class="container">
    <h2>It's not too late to be an early adopter</h2>
    <p class="lead">And early adopters deserve a secure, trusted platform — that's why we built <?= htmlspecialchars(SITE_SHORT_NAME) ?>.</p>
    <div class="value-grid">
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"/></svg>
        </div>
        <h4>Early</h4>
        <p>Get access to promising new tokens before they list on other exchanges.</p>
      </div>
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3z"/></svg>
        </div>
        <h4>Secure</h4>
        <p>Your funds are protected — we only work with reputable custodians and keep the vast majority of assets offline.</p>
      </div>
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M12 3v18M5 8l7-5 7 5M4 21h16M6 21V10M18 21V10"/></svg>
        </div>
        <h4>Compliant</h4>
        <p>You're investing on a platform that operates in compliance with applicable law, wherever it's headquartered.</p>
      </div>
    </div>
  </div>
</section>

<section class="previous-section">
  <div class="container">
    <h2>Previously on the <?= htmlspecialchars(SITE_SHORT_NAME) ?> Platform</h2>
    <p class="lead">$800M+ invested by over 10,000 investors</p>
    <div class="project-list">
      <?php foreach ($projects as $p): ?>
      <a class="project-row" href="/asset.php?slug=<?= urlencode($p['slug']) ?>">
        <span class="mark" style="background: <?= htmlspecialchars($p['color']) ?>"><?= htmlspecialchars(mb_substr($p['name'], 0, 1)) ?></span>
        <span class="info">
          <span class="name"><?= htmlspecialchars($p['name']) ?></span><br>
          <span class="tagline"><?= htmlspecialchars($p['tagline']) ?></span>
        </span>
        <span class="date"><?= htmlspecialchars($p['date']) ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="lower-cta">
  <div class="container">
    <h2>Create an account to get early access</h2>
    <p>Buy digital assets today, with more to come.</p>
    <a href="/register.php" class="btn btn--large">Get Started</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
