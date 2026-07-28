<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Legal & Risk Disclosures';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero" style="padding-bottom:50px;">
  <div class="container"><h1>Legal &amp; Risk Disclosures</h1></div>
</section>

<section class="section">
  <div class="container legal-layout">
    <nav class="legal-toc">
      <a href="#entity">Entity Information</a>
      <a href="#advice">No Investment Advice</a>
      <a href="#risk">Risk of Loss</a>
      <a href="#jurisdiction">Jurisdictional Restrictions</a>
      <a href="#third-party">Third-Party Content</a>
      <a href="#insurance">Custody Insurance</a>
      <a href="#contact">Contact</a>
    </nav>

    <div class="legal-content">
      <p class="updated">Last updated: <?= date('F j, Y') ?></p>

      <h2 id="entity">Entity Information</h2>
      <p>The Site is operated by <?= htmlspecialchars(SITE_COMPANY_NAME) ?>, registration number
      <?= htmlspecialchars(SITE_REG_NUMBER) ?>, registered at <?= htmlspecialchars(SITE_LEGAL_ADDRESS) ?>.
      Update this section with your actual registration details and applicable licenses before operating
      in any jurisdiction.</p>

      <h2 id="advice">No Investment Advice</h2>
      <p><?= htmlspecialchars(SITE_SHORT_NAME) ?> does not provide investment, legal or tax advice. Any content on
      the Site is for informational purposes only and should not be construed as a recommendation to buy, sell
      or hold any digital asset.</p>

      <h2 id="risk">Risk of Loss</h2>
      <p>Digital assets are highly volatile and largely unregulated in many jurisdictions. You could lose your
      entire investment. Past performance of any asset is not indicative of future results. Only invest funds
      you can afford to lose.</p>

      <h2 id="jurisdiction">Jurisdictional Restrictions</h2>
      <p>The Site's services may not be available to residents of certain countries or regions due to local
      law and regulation. It is your responsibility to determine whether your use of the Site is permitted in
      your jurisdiction.</p>

      <h2 id="third-party">Third-Party Content</h2>
      <p>The Site may link to third-party websites or content not affiliated with <?= htmlspecialchars(SITE_SHORT_NAME) ?>.
      We make no representations about the accuracy or reliability of any third-party content.</p>

      <h2 id="insurance">No Guarantee of Custody Insurance</h2>
      <p>Digital assets held on the Site are not covered by government deposit or investor-protection insurance
      programs unless explicitly stated otherwise for a specific product.</p>

      <h2 id="contact">Contact</h2>
      <p>For questions about these disclosures, contact us at
      <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>
      or <?= htmlspecialchars(SITE_PHONE) ?>.</p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
