<?php /** Contact page (handles POST via _form-handler.php) */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Contact</span>
        <h1>Let's talk logistics</h1>
        <p>Questions, quotes or support — our team is ready to help.</p>
    </div>
</section>

<section class="section">
    <div class="container split split--form">
        <div class="split__body reveal">
            <?php if (!empty($form_done) && ($form_type ?? '') === 'contact'): ?>
                <div class="alert alert--success">
                    <?= icon('check', 20) ?>
                    <div><strong>Message sent!</strong> Thanks for reaching out — we'll reply as soon as possible.</div>
                </div>
            <?php else: ?>
                <form method="post" action="<?= url('/contact') ?>" class="form" novalidate>
                    <input type="hidden" name="form_type" value="contact">
                    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <div class="form__row">
                        <div class="form__field">
                            <label for="name">Full name *</label>
                            <input id="name" name="name" type="text" value="<?= e($_POST['name'] ?? '') ?>" required>
                            <?php if (!empty($form_errors['name'])): ?><span class="form__error"><?= e($form_errors['name']) ?></span><?php endif; ?>
                        </div>
                        <div class="form__field">
                            <label for="email">Email *</label>
                            <input id="email" name="email" type="email" value="<?= e($_POST['email'] ?? '') ?>" required>
                            <?php if (!empty($form_errors['email'])): ?><span class="form__error"><?= e($form_errors['email']) ?></span><?php endif; ?>
                        </div>
                    </div>
                    <div class="form__field">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required><?= e($_POST['message'] ?? '') ?></textarea>
                        <?php if (!empty($form_errors['message'])): ?><span class="form__error"><?= e($form_errors['message']) ?></span><?php endif; ?>
                    </div>
                    <button class="btn btn--primary btn--lg" type="submit">Send message</button>
                </form>
            <?php endif; ?>
        </div>

        <aside class="split__aside reveal">
            <div class="side-card">
                <h3>Head office</h3>
                <ul class="footer__contacts">
                    <li><?= icon('pin', 18) ?> <span><?= e(company_address()) ?></span></li>
                    <li><?= icon('phone', 18) ?> <a href="tel:<?= e($COMPANY['phone_raw']) ?>"><?= e($COMPANY['phone']) ?></a></li>
                    <li><?= icon('mail', 18) ?> <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a></li>
                    <li><?= icon('clock', 18) ?> <span><?= e($COMPANY['hours']) ?></span></li>
                </ul>
            </div>
            <div class="map-embed">
                <iframe
                    title="Office location map"
                    width="100%" height="240" style="border:0" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://maps.google.com/maps?q=<?= urlencode(company_address()) ?>&output=embed"></iframe>
            </div>
        </aside>
    </div>
</section>
