<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Help Center';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';

$categories = [
    ['icon' => '<path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3z"/>', 'title' => 'Getting Started', 'desc' => 'Create an account, verify your identity and make your first deposit.'],
    ['icon' => '<circle cx="12" cy="8" r="4"/><path d="M4 21v-1c0-4 3.6-6 8-6s8 2 8 6v1"/>', 'title' => 'Account & Verification', 'desc' => 'Update your profile, manage verification levels and security settings.'],
    ['icon' => '<path d="m3 17 6-6 4 4 8-8"/><path d="M15 7h6v6"/>', 'title' => 'Trading', 'desc' => 'Placing orders, understanding fees, and reading the order book.'],
    ['icon' => '<path d="M12 2v14"/><path d="m6 12 6 6 6-6"/><path d="M4 20h16"/>', 'title' => 'Deposits & Withdrawals', 'desc' => 'Funding your account and moving assets on and off the platform.'],
    ['icon' => '<path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"/>', 'title' => 'Digital Asset Offerings', 'desc' => 'How token sales work, eligibility, and allocation timelines.'],
    ['icon' => '<path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/>', 'title' => 'Security', 'desc' => 'Two-factor authentication, phishing protection and account recovery.'],
];

$faqs = [
    ['q' => 'How do I create an account?', 'a' => 'Click "Get started" in the top navigation, enter your name, email and a password, then verify your email to activate your account.'],
    ['q' => 'What digital assets can I trade?', 'a' => 'You can trade any asset currently listed on the platform. Check the homepage for the full list of tokens available for trading.'],
    ['q' => 'What are the risks of investing in digital assets?', 'a' => 'Digital asset prices are highly volatile and investments can lose value quickly, including the total loss of your investment. Only invest what you can afford to lose and review our ' . '<a href="/legal.php">risk disclosures</a> before trading.'],
    ['q' => 'How is my account secured?', 'a' => 'We use industry-standard encryption, two-factor authentication and store the majority of digital assets in offline (cold) storage.'],
    ['q' => 'How do I contact support?', 'a' => 'Email us at <a href="mailto:' . htmlspecialchars(SITE_EMAIL_SUPPORT) . '">' . htmlspecialchars(SITE_EMAIL_SUPPORT) . '</a> and our team will respond within one business day.'],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>How can we help?</h1>
    <p>Search our help center or browse a topic below.</p>
    <form class="help-search" action="/help.php" method="get" onsubmit="return false;">
      <input type="text" placeholder="Search for an article&hellip;" aria-label="Search help center">
      <button type="submit">Search</button>
    </form>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="help-category-grid">
      <?php foreach ($categories as $cat): ?>
      <a class="help-category" href="#">
        <span class="icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $cat['icon'] ?></svg></span>
        <h4><?= htmlspecialchars($cat['title']) ?></h4>
        <p><?= htmlspecialchars($cat['desc']) ?></p>
      </a>
      <?php endforeach; ?>
    </div>

    <h2 style="margin-bottom:20px;">Popular questions</h2>
    <div class="container--narrow" style="padding:0;">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item">
        <h4><?= htmlspecialchars($faq['q']) ?></h4>
        <p><?= $faq['a'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="lower-cta">
  <div class="container">
    <h2>Still need help?</h2>
    <p>Our support team typically responds within one business day.</p>
    <a href="/contact.php" class="btn btn--large">Contact support</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
