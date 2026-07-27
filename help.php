<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Help Center';
require __DIR__ . '/includes/header.php';

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
    <h1>Help Center</h1>
    <p>Answers to common questions about your <?= htmlspecialchars(SITE_SHORT_NAME) ?> account.</p>
  </div>
</section>

<section class="section">
  <div class="container container--narrow">
    <?php foreach ($faqs as $faq): ?>
    <div class="faq-item">
      <h4><?= htmlspecialchars($faq['q']) ?></h4>
      <p><?= $faq['a'] ?></p>
    </div>
    <?php endforeach; ?>

    <p style="margin-top:30px;">Can't find what you're looking for? Email <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a> or call <?= htmlspecialchars(SITE_PHONE) ?>.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
