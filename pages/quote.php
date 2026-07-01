<?php /** Quote request page (handles POST via _form-handler.php) */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Get a quote</span>
        <h1>Request a shipping quote</h1>
        <p>Tell us what you're moving. A specialist replies with transparent pricing.</p>
    </div>
</section>

<section class="section">
    <div class="container split split--form">
        <div class="split__body reveal">
            <?php if (!empty($form_done) && ($form_type ?? '') === 'quote'): ?>
                <div class="alert alert--success">
                    <?= icon('check', 20) ?>
                    <div><strong>Thank you!</strong> Your quote request has been received. Our team will be in touch shortly.</div>
                </div>
            <?php else: ?>
                <form method="post" action="<?= url('/quote') ?>" class="form" novalidate>
                    <input type="hidden" name="form_type" value="quote">
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
                    <div class="form__row">
                        <div class="form__field">
                            <label for="company">Company</label>
                            <input id="company" name="company" type="text" value="<?= e($_POST['company'] ?? '') ?>">
                        </div>
                        <div class="form__field">
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" type="tel" value="<?= e($_POST['phone'] ?? '') ?>">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__field">
                            <label for="origin">Origin</label>
                            <input id="origin" name="origin" type="text" placeholder="City / port" value="<?= e($_POST['origin'] ?? '') ?>">
                        </div>
                        <div class="form__field">
                            <label for="destination">Destination</label>
                            <input id="destination" name="destination" type="text" placeholder="City / port" value="<?= e($_POST['destination'] ?? '') ?>">
                        </div>
                    </div>
                    <div class="form__field">
                        <label for="service">Service needed</label>
                        <select id="service" name="service">
                            <?php foreach ($SERVICES as $s): ?>
                                <option><?= e($s['title']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form__field">
                        <label for="message">Cargo details</label>
                        <textarea id="message" name="message" rows="4" placeholder="Weight, dimensions, commodity, timelines…"><?= e($_POST['message'] ?? '') ?></textarea>
                    </div>
                    <button class="btn btn--primary btn--lg" type="submit">Send request</button>
                </form>
            <?php endif; ?>
        </div>

        <aside class="split__aside reveal">
            <div class="side-card side-card--cta">
                <h3>Prefer to talk?</h3>
                <p>Reach our team directly during business hours.</p>
                <ul class="footer__contacts">
                    <li><?= icon('phone', 18) ?> <a href="tel:<?= e($COMPANY['phone_raw']) ?>"><?= e($COMPANY['phone']) ?></a></li>
                    <li><?= icon('mail', 18) ?> <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a></li>
                    <li><?= icon('clock', 18) ?> <span><?= e($COMPANY['hours']) ?></span></li>
                </ul>
            </div>
        </aside>
    </div>
</section>
