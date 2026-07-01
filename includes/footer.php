</main>

<!-- CTA strip -->
<section class="cta-strip">
    <div class="container cta-strip__inner">
        <div>
            <h2>Ready to move your cargo smarter?</h2>
            <p>Get a transparent quote from a real logistics specialist — usually within hours.</p>
        </div>
        <a class="btn btn--light" href="<?= url('/quote') ?>">Request a Quote <?= icon('arrow', 18) ?></a>
    </div>
</section>

<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__col footer__brand">
            <a class="logo logo--light" href="<?= url('/') ?>">
                <span class="logo__mark"><?= icon('ship', 22) ?></span>
                <span class="logo__text"><?= e($COMPANY['brand']) ?><b>.</b></span>
            </a>
            <p><?= e($COMPANY['slogan']) ?></p>
            <div class="social">
                <?php foreach ($COMPANY['social'] as $network => $link): ?>
                    <?php if ($link !== ''): ?>
                        <a href="<?= e($link) ?>" aria-label="<?= e(ucfirst($network)) ?>" target="_blank" rel="noopener"><?= e(strtoupper(substr($network, 0, 1))) ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="footer__col">
            <h4>Company</h4>
            <ul>
                <li><a href="<?= url('/about') ?>">About Us</a></li>
                <li><a href="<?= url('/services') ?>">Services</a></li>
                <li><a href="<?= url('/faq') ?>">FAQ</a></li>
                <li><a href="<?= url('/contact') ?>">Contact</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <h4>Services</h4>
            <ul>
                <?php foreach (array_slice($SERVICES, 0, 5, true) as $slug => $s): ?>
                    <li><a href="<?= url('/services/' . $slug) ?>"><?= e($s['title']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer__col">
            <h4>Get in touch</h4>
            <ul class="footer__contacts">
                <li><?= icon('pin', 18) ?> <span><?= e(company_address()) ?></span></li>
                <li><?= icon('phone', 18) ?> <a href="tel:<?= e($COMPANY['phone_raw']) ?>"><?= e($COMPANY['phone']) ?></a></li>
                <li><?= icon('mail', 18) ?> <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a></li>
            </ul>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <p>&copy; <?= date('Y') ?> <?= e($COMPANY['legal_name']) ?>. All rights reserved. EIN: <?= e($COMPANY['ein']) ?></p>
            <nav class="footer__legal">
                <a href="<?= url('/terms') ?>">Terms of Service</a>
                <a href="<?= url('/privacy') ?>">Privacy Policy</a>
            </nav>
        </div>
    </div>
</footer>

<script src="<?= asset('js/main.js') ?>" defer></script>
</body>
</html>
