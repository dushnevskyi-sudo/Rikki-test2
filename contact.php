<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Contact';
$pageDescription = 'Get in touch with the ' . SITE_SHORT_NAME . ' team.';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';

$contacts = [
    ['title' => 'Support', 'desc' => 'Questions about your account, trading or verification.', 'email' => SITE_EMAIL_SUPPORT],
    ['title' => 'Press', 'desc' => 'Media inquiries and interview requests.', 'email' => 'press@' . SITE_DOMAIN],
    ['title' => 'Partnerships', 'desc' => 'List a token or partner with ' . SITE_SHORT_NAME . '.', 'email' => 'partnerships@' . SITE_DOMAIN],
    ['title' => 'Security', 'desc' => 'Report a vulnerability responsibly.', 'email' => 'security@' . SITE_DOMAIN],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>Get in touch</h1>
    <p>Reach the right team faster, or send us a message below.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">
      <?php foreach ($contacts as $c): ?>
      <div class="contact-card">
        <h4><?= htmlspecialchars($c['title']) ?></h4>
        <p><?= htmlspecialchars($c['desc']) ?></p>
        <a href="mailto:<?= htmlspecialchars($c['email']) ?>"><?= htmlspecialchars($c['email']) ?></a>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="contact-form-wrap">
      <h3>Send us a message</h3>
      <p class="sub">This is a demo form and does not send email &mdash; use the addresses above instead.</p>
      <form onsubmit="alert('This is a demo site — no message was sent.'); return false;">
        <div class="form-row">
          <div class="field">
            <label for="c-name">Name</label>
            <input id="c-name" type="text" required>
          </div>
          <div class="field">
            <label for="c-email">Email</label>
            <input id="c-email" type="email" required>
          </div>
        </div>
        <div class="field">
          <label for="c-topic">Topic</label>
          <select id="c-topic">
            <option>Support</option>
            <option>Press</option>
            <option>Partnerships</option>
            <option>Security</option>
            <option>Something else</option>
          </select>
        </div>
        <div class="field">
          <label for="c-message">Message</label>
          <textarea id="c-message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Send message</button>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
