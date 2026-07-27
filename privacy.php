<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Privacy Policy';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero" style="padding-bottom:50px;">
  <div class="container"><h1>Privacy Policy</h1></div>
</section>

<section class="section">
  <div class="container container--narrow legal-content">
    <p class="updated">Last updated: <?= date('F j, Y') ?></p>

    <p><?= htmlspecialchars(SITE_COMPANY_NAME) ?> ("<?= htmlspecialchars(SITE_SHORT_NAME) ?>", "we", "us", or "our")
    respects your privacy. This Privacy Policy explains what information we collect, how we use it, and the
    choices you have regarding your information when you use <?= htmlspecialchars(SITE_URL) ?> (the "Site").</p>

    <h2>1. Information We Collect</h2>
    <ul>
      <li><strong>Account information:</strong> name, email address, password, and any identity-verification documents you submit.</li>
      <li><strong>Transaction information:</strong> details of trades, deposits and withdrawals you make on the Site.</li>
      <li><strong>Usage information:</strong> pages visited, device and browser type, and approximate location, collected automatically via cookies and similar technologies.</li>
    </ul>

    <h2>2. How We Use Information</h2>
    <ul>
      <li>To create and maintain your account and provide the services you request.</li>
      <li>To verify your identity and comply with applicable law.</li>
      <li>To detect, prevent and investigate fraud, security incidents and abuse.</li>
      <li>To communicate with you about your account, transactions, and updates to our services.</li>
      <li>To improve and personalize the Site.</li>
    </ul>

    <h2>3. Sharing of Information</h2>
    <p>We do not sell your personal information. We may share information with service providers who help us
    operate the Site (e.g. hosting, identity verification, payment processing), with regulators or law
    enforcement where required by law, and in connection with a merger, acquisition, or sale of assets.</p>

    <h2>4. Data Retention</h2>
    <p>We retain your information for as long as your account is active or as needed to comply with our legal
    and regulatory obligations, resolve disputes, and enforce our agreements.</p>

    <h2>5. Your Choices</h2>
    <p>You may access, correct or request deletion of your personal information, subject to our legal
    retention obligations, by contacting us at <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>.</p>

    <h2>6. Security</h2>
    <p>We use administrative, technical and physical safeguards designed to protect your information. No
    method of transmission or storage is completely secure, and we cannot guarantee absolute security.</p>

    <h2>7. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. We will post the updated version on this page
    with a new "Last updated" date.</p>

    <h2>8. Contact Us</h2>
    <p>Questions about this Privacy Policy can be sent to <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>
    or by mail to <?= htmlspecialchars(SITE_LEGAL_ADDRESS) ?>.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
