<?php /** Single service page — expects $service and $service_slug */ ?>

<section class="page-hero page-hero--media" style="background-image:url('<?= e($service['image']) ?>')">
    <div class="page-hero__overlay"></div>
    <div class="container">
        <nav class="breadcrumbs">
            <a href="<?= url('/') ?>">Home</a> / <a href="<?= url('/services') ?>">Services</a> / <span><?= e($service['title']) ?></span>
        </nav>
        <span class="eyebrow eyebrow--light">Service</span>
        <h1><?= e($service['title']) ?></h1>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="split__body reveal">
            <span class="service-card__icon service-card__icon--lg"><?= icon($service['icon'], 30) ?></span>
            <h2>Overview</h2>
            <p><?= e($service['intro']) ?></p>
            <ul class="check-list">
                <?php foreach ($service['features'] as $feat): ?>
                    <li><span class="check-list__icon"><?= icon('check', 16) ?></span> <span><?= e($feat) ?></span></li>
                <?php endforeach; ?>
            </ul>
            <div class="hero__actions">
                <a class="btn btn--primary" href="<?= url('/quote') ?>">Request a Quote</a>
                <a class="btn btn--ghost" href="<?= url('/contact') ?>">Talk to an expert</a>
            </div>
        </div>
        <aside class="split__aside reveal">
            <div class="side-card">
                <h3>Other services</h3>
                <ul class="side-nav">
                    <?php foreach ($SERVICES as $slug => $s): ?>
                        <li>
                            <a class="<?= $slug === $service_slug ? 'is-active' : '' ?>" href="<?= url('/services/' . $slug) ?>">
                                <?= icon($s['icon'], 18) ?> <?= e($s['title']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="side-card side-card--cta">
                <h3>Need help fast?</h3>
                <p>Our team is available for time-critical shipments.</p>
                <a class="btn btn--light btn--block" href="tel:<?= e($COMPANY['phone_raw']) ?>"><?= icon('phone', 18) ?> <?= e($COMPANY['phone']) ?></a>
            </div>
        </aside>
    </div>
</section>
