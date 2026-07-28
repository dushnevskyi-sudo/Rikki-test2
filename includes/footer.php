<?php require_once __DIR__ . '/../config.php'; ?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-links">
        <a href="/jobs.php">Jobs</a>
        <a href="/help.php">Help</a>
        <a href="/contact.php">Contact</a>
        <a href="/privacy.php">Privacy</a>
        <a href="/terms.php">Terms</a>
        <a href="/legal.php">Legal</a>
        <?php if (SITE_BLOG_URL): ?><a href="<?= htmlspecialchars(SITE_BLOG_URL) ?>" target="_blank" rel="noopener">Blog</a><?php endif; ?>
        <?php if (SITE_TWITTER_URL): ?><a href="<?= htmlspecialchars(SITE_TWITTER_URL) ?>" target="_blank" rel="noopener">Twitter</a><?php endif; ?>
      </div>
      <a href="/" class="footer-logo"><img src="<?= SITE_LOGO_WHITE ?>" alt="<?= htmlspecialchars(SITE_SHORT_NAME) ?>" height="24"></a>
    </div>

    <div class="footer-disclaimer">
      <p>
        This site is operated by <?= htmlspecialchars(SITE_COMPANY_NAME) ?> ("<?= htmlspecialchars(SITE_SHORT_NAME) ?>").
        <?= htmlspecialchars(SITE_SHORT_NAME) ?> does not give investment advice, endorsement, analysis or
        recommendations with respect to any digital asset, and does not provide legal or tax advice. All digital
        assets listed here are offered by, and all information included on this site is the responsibility of,
        the applicable issuer. Neither <?= htmlspecialchars(SITE_SHORT_NAME) ?> nor any of its officers, directors,
        agents or employees makes any warranty, express or implied, regarding the adequacy, accuracy or
        completeness of any information on this site.
      </p>
      <p>
        Digital asset trading and related services are provided by <?= htmlspecialchars(SITE_SHORT_NAME) ?>
        (registration no. <?= htmlspecialchars(SITE_REG_NUMBER) ?>), registered at
        <?= htmlspecialchars(SITE_LEGAL_ADDRESS) ?>. Investing in digital assets is highly risky and may lead to
        total loss of investment; potential investors must conduct their own due diligence before participating
        in any offering.
      </p>
      <p>
        All activity on this site is governed by our <a href="/terms.php">Terms of Service</a> and
        <a href="/privacy.php">Privacy Policy</a>, which you agree to by using this site. Additional
        jurisdiction-specific disclosures are <a href="/legal.php">available here</a>.
      </p>
    </div>

    <div class="footer-bottom">
      <span><?= SITE_COPYRIGHT ?></span>
      <span><?= htmlspecialchars(SITE_DOMAIN) ?></span>
    </div>
  </div>
</footer>
<script src="/assets/js/main.js"></script>
</body>
</html>
