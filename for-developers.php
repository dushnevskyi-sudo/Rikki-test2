<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'For Developers';
$pageDescription = 'Build on the ' . SITE_SHORT_NAME . ' API — market data, trading and account endpoints.';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Build with the <?= htmlspecialchars(SITE_SHORT_NAME) ?> API</h1>
    <p>Market data, order placement and account endpoints for teams building on digital assets.</p>
    <div style="margin-top:26px;"><a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>" class="btn btn--large">Request API access</a></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>What you can build</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <h4>Market data</h4>
        <p>Real-time and historical price feeds for every asset listed on <?= htmlspecialchars(SITE_SHORT_NAME) ?>.</p>
      </div>
      <div class="feature-card">
        <h4>Trading</h4>
        <p>Programmatic order placement, cancellation and portfolio management via a REST API.</p>
      </div>
      <div class="feature-card">
        <h4>Webhooks</h4>
        <p>Subscribe to account and order events instead of polling — get notified the moment something changes.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container container--narrow">
    <h2>Example request</h2>
    <p>Fetch the latest indicative price for an asset:</p>
    <pre style="background:#10162B; color:#B7C0D6; padding:20px; border-radius:10px; overflow-x:auto; font-size:13px;">curl <?= htmlspecialchars(SITE_URL) ?>/api/v1/prices/AUR \
  -H "Authorization: Bearer YOUR_API_KEY"</pre>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
