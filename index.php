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
        <span class="btn btn--small">Learn more</span>
      </a>
      <?php endforeach; ?>
      <a class="promo-card" href="/register.php">
        <span class="tag">Wrapped Bitcoin</span>
        <h3>WBTC</h3>
        <p>Instantly wrap your Bitcoin &middot; Unlock decentralized finance</p>
        <span class="btn btn--small">Learn more</span>
      </a>
    </div>
  </div>
</section>

<section class="price-ticker">
  <div class="container">
    <div class="ticker-grid">
      <div class="ticker-item">
        <span class="symbol-badge" style="background:#F7931A">B</span>
        <div class="ticker-label">BTC</div>
        <svg class="sparkline" viewBox="0 0 100 30" preserveAspectRatio="none"><polyline points="0,22 10,20 20,23 30,18 40,19 50,14 60,16 70,10 80,12 90,6 100,4" fill="none" stroke="#1BA672" stroke-width="2"/></svg>
        <div class="ticker-price">$61,200</div>
        <div class="ticker-change">+3.24%</div>
      </div>
      <div class="ticker-item">
        <span class="symbol-badge" style="background:#627EEA">E</span>
        <div class="ticker-label">ETH</div>
        <svg class="sparkline" viewBox="0 0 100 30" preserveAspectRatio="none"><polyline points="0,18 10,19 20,15 30,17 40,12 50,14 60,9 70,11 80,7 90,9 100,5" fill="none" stroke="#1BA672" stroke-width="2"/></svg>
        <div class="ticker-price">$3,412.50</div>
        <div class="ticker-change">+2.10%</div>
      </div>
      <div class="ticker-item">
        <span class="symbol-badge" style="background:#000000">A</span>
        <div class="ticker-label">ALGO</div>
        <svg class="sparkline" viewBox="0 0 100 30" preserveAspectRatio="none"><polyline points="0,10 10,14 20,12 30,17 40,15 50,20 60,17 70,21 80,18 90,15 100,17" fill="none" stroke="#E5484D" stroke-width="2"/></svg>
        <div class="ticker-price">$0.1842</div>
        <div class="ticker-change down">-1.35%</div>
      </div>
      <div class="ticker-item">
        <span class="symbol-badge" style="background:#7B5CFA">O</span>
        <div class="ticker-label">OXT</div>
        <svg class="sparkline" viewBox="0 0 100 30" preserveAspectRatio="none"><polyline points="0,20 10,17 20,19 30,14 40,16 50,11 60,13 70,8 80,10 90,6 100,8" fill="none" stroke="#1BA672" stroke-width="2"/></svg>
        <div class="ticker-price">$0.1955</div>
        <div class="ticker-change">+1.46%</div>
      </div>
    </div>
    <p style="text-align:center; font-size:11px; color:var(--color-gray); margin-top:14px;">Indicative prices for illustration only.</p>
  </div>
</section>

<section class="value-props">
  <div class="container">
    <h2>It's not too late to be an early adopter in crypto</h2>
    <p class="lead">And early adopters deserve a secure, trusted platform &ndash; that's why we built <?= htmlspecialchars(SITE_SHORT_NAME) ?></p>
    <div class="value-grid">
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"/></svg>
        </div>
        <h4>Early</h4>
        <p>Get access to the best new tokens before they list on other exchanges.</p>
      </div>
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3z"/></svg>
        </div>
        <h4>Secure</h4>
        <p>Your funds are secure. We only work with reputable custodians and the vast majority of funds are stored offline.</p>
      </div>
      <div class="value-item">
        <div class="icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M12 3v18M5 8l7-5 7 5M4 21h16M6 21V10M18 21V10"/></svg>
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
    <p>Buy Bitcoin, Ether, Algos, and Orchid with more to come</p>
    <a href="/register.php" class="btn btn--large">Get Started</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
