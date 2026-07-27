<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'For Companies';
$pageDescription = 'List your token or digital asset on ' . SITE_SHORT_NAME . ' and reach thousands of vetted investors.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Launch your token with <?= htmlspecialchars(SITE_SHORT_NAME) ?></h1>
    <p>Raise capital and build a community of long-term holders through a compliant, well-tested offering process.</p>
    <div style="margin-top:26px;"><a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SALES) ?>" class="btn btn--large">Talk to our team</a></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="photo-block">
      <img src="https://picsum.photos/id/180/1200/500" alt="Team reviewing a token launch plan" loading="lazy">
    </div>
    <h2>Why issuers choose <?= htmlspecialchars(SITE_SHORT_NAME) ?></h2>
    <div class="feature-grid">
      <div class="feature-card">
        <h4>Vetted investor network</h4>
        <p>Reach a network of thousands of accredited and retail investors who actively look for early-stage digital asset opportunities.</p>
      </div>
      <div class="feature-card">
        <h4>Compliance-first process</h4>
        <p>Our legal and compliance team works with your counsel to structure an offering that fits your jurisdiction and token model.</p>
      </div>
      <div class="feature-card">
        <h4>Post-sale support</h4>
        <p>From token distribution to secondary trading, we support your community long after the raise closes.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container container--narrow">
    <h2>How it works</h2>
    <div class="steps">
      <div class="step">
        <span class="num"></span>
        <div><h4>Apply</h4><p>Tell us about your project, token model and target jurisdictions.</p></div>
      </div>
      <div class="step">
        <span class="num"></span>
        <div><h4>Structure &amp; review</h4><p>We work with your team to structure a compliant offering and complete due diligence.</p></div>
      </div>
      <div class="step">
        <span class="num"></span>
        <div><h4>Launch</h4><p>Your offering goes live to our investor network with full marketing and support.</p></div>
      </div>
      <div class="step">
        <span class="num"></span>
        <div><h4>Trade</h4><p>Enable liquidity for your token holders through listing on the <?= htmlspecialchars(SITE_SHORT_NAME) ?> exchange.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="lower-cta">
  <div class="container">
    <h2>Ready to get started?</h2>
    <p>Reach out and our team will follow up within one business day.</p>
    <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SALES) ?>" class="btn btn--large">Contact sales</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
