<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Terms of Service';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero" style="padding-bottom:50px;">
  <div class="container"><h1>Terms of Service</h1></div>
</section>

<section class="section">
  <div class="container container--narrow legal-content">
    <p class="updated">Last updated: <?= date('F j, Y') ?></p>

    <p>These Terms of Service ("Terms") govern your access to and use of <?= htmlspecialchars(SITE_URL) ?>
    (the "Site") operated by <?= htmlspecialchars(SITE_COMPANY_NAME) ?> ("<?= htmlspecialchars(SITE_SHORT_NAME) ?>",
    "we", "us"). By creating an account or using the Site, you agree to these Terms.</p>

    <h2>1. Eligibility</h2>
    <p>You must be at least 18 years old and able to form a legally binding contract to use the Site. By
    using the Site, you represent that you meet these requirements and that your use complies with all
    applicable laws.</p>

    <h2>2. Account Registration</h2>
    <p>You are responsible for maintaining the confidentiality of your account credentials and for all
    activity that occurs under your account. Notify us immediately at
    <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a> of any unauthorized use.</p>

    <h2>3. Digital Asset Risks</h2>
    <p>Digital assets are volatile and speculative. Prices can fluctuate significantly and you may lose your
    entire investment. Nothing on the Site constitutes investment, legal, or tax advice. You are solely
    responsible for evaluating the merits and risks of any transaction. See our
    <a href="/legal.php">Legal &amp; Risk Disclosures</a> for more detail.</p>

    <h2>4. Fees</h2>
    <p>We may charge fees for trades, withdrawals, or other services. Current fees are disclosed on the Site
    prior to you completing a transaction.</p>

    <h2>5. Prohibited Conduct</h2>
    <ul>
      <li>Using the Site for any unlawful purpose, including money laundering or fraud.</li>
      <li>Attempting to interfere with or disrupt the Site's operation or security.</li>
      <li>Circumventing identity-verification or geographic restrictions.</li>
    </ul>

    <h2>6. Suspension and Termination</h2>
    <p>We may suspend or terminate your access to the Site at any time if we reasonably believe you have
    violated these Terms or applicable law, or to comply with a legal or regulatory obligation.</p>

    <h2>7. Disclaimers</h2>
    <p>The Site is provided "as is" without warranties of any kind, express or implied. We do not guarantee
    the Site will be uninterrupted, error-free, or secure.</p>

    <h2>8. Limitation of Liability</h2>
    <p>To the fullest extent permitted by law, <?= htmlspecialchars(SITE_SHORT_NAME) ?> will not be liable for
    any indirect, incidental, special, or consequential damages arising from your use of the Site.</p>

    <h2>9. Governing Law</h2>
    <p>These Terms are governed by the laws applicable at <?= htmlspecialchars(SITE_LEGAL_ADDRESS) ?>, without
    regard to conflict-of-law principles.</p>

    <h2>10. Changes to These Terms</h2>
    <p>We may update these Terms from time to time. Continued use of the Site after changes take effect
    constitutes acceptance of the revised Terms.</p>

    <h2>11. Contact</h2>
    <p>Questions about these Terms can be sent to <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
