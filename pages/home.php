<?php /** Home page */ ?>

<!-- HERO -->
<section class="hero">
    <div class="hero__bg" style="background-image:url('<?= asset('images/hero-bg.jpg') ?>')"></div>
    <div class="container hero__inner">
        <div class="hero__content reveal">
            <span class="eyebrow">Global freight since <?= e($COMPANY['founded']) ?></span>
            <h1>Move your cargo <span class="grad">smarter</span>, faster, worldwide.</h1>
            <p class="hero__lead"><?= e($COMPANY['name']) ?> connects your business to 48 countries with ocean, air, rail and road freight — all tracked in real time under one roof.</p>
            <div class="hero__actions">
                <a class="btn btn--primary btn--lg" href="<?= url('/quote') ?>">Get a Free Quote</a>
                <a class="btn btn--ghost btn--lg" href="<?= url('/services') ?>">Explore Services</a>
            </div>
        </div>

        <!-- Quick track card -->
        <div class="track-card reveal">
            <h3>Track your shipment</h3>
            <p>Enter your tracking number for a live status update.</p>
            <form action="<?= url('/track') ?>" method="get" class="track-card__form">
                <input type="text" name="ref" placeholder="e.g. NVX-4821-XT" aria-label="Tracking number">
                <button class="btn btn--primary" type="submit"><?= icon('arrow', 18) ?></button>
            </form>
            <div class="track-card__note"><?= icon('clock', 16) ?> <?= e($COMPANY['hours_note']) ?></div>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="stats">
    <div class="container stats__grid">
        <?php foreach ($STATS as $stat): ?>
            <div class="stat reveal">
                <div class="stat__value" data-count="<?= e($stat['value']) ?>" data-suffix="<?= e($stat['suffix']) ?>">0</div>
                <div class="stat__label"><?= e($stat['label']) ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- SERVICES -->
<section class="section">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">What we do</span>
            <h2>End-to-end logistics services</h2>
            <p>One partner for every mode of transport, from first mile to final delivery.</p>
        </div>
        <div class="grid grid--3">
            <?php foreach ($SERVICES as $slug => $s): ?>
                <a class="service-card reveal" href="<?= url('/services/' . $slug) ?>">
                    <span class="service-card__icon"><?= icon($s['icon'], 26) ?></span>
                    <h3><?= e($s['title']) ?></h3>
                    <p><?= e($s['excerpt']) ?></p>
                    <span class="service-card__link">Learn more <?= icon('arrow', 16) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ABOUT / IMAGE SPLIT -->
<section class="section section--alt">
    <div class="container split">
        <div class="split__media reveal">
            <img src="<?= asset('images/about-warehouse.jpg') ?>" alt="Logistics team reviewing shipments" loading="lazy">
            <div class="split__badge">
                <strong><?= date('Y') - $COMPANY['founded'] ?>+</strong>
                <span>years of experience</span>
            </div>
        </div>
        <div class="split__body reveal">
            <span class="eyebrow">Why <?= e($COMPANY['brand']) ?></span>
            <h2>Logistics without the guesswork</h2>
            <p>Since <?= e($COMPANY['founded']) ?>, we've helped growing companies ship with confidence. We combine a global carrier network with clear pricing, live tracking and a support team that actually answers.</p>
            <ul class="check-list">
                <?php foreach ($FEATURES as $f): ?>
                    <li><span class="check-list__icon"><?= icon('check', 16) ?></span>
                        <span><strong><?= e($f['title']) ?></strong> — <?= e($f['text']) ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a class="btn btn--primary" href="<?= url('/about') ?>">More about us</a>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">Simple process</span>
            <h2>How it works</h2>
            <p>From quote to doorstep in four transparent steps.</p>
        </div>
        <div class="grid grid--4 steps">
            <?php foreach ($STEPS as $step): ?>
                <div class="step reveal">
                    <span class="step__num"><?= e($step['num']) ?></span>
                    <h3><?= e($step['title']) ?></h3>
                    <p><?= e($step['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section--dark">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">Client stories</span>
            <h2>Trusted by teams that ship a lot</h2>
        </div>
        <div class="grid grid--3">
            <?php foreach ($TESTIMONIALS as $t): ?>
                <figure class="quote reveal">
                    <blockquote>“<?= e($t['text']) ?>”</blockquote>
                    <figcaption>
                        <img src="<?= e($t['avatar']) ?>" alt="<?= e($t['name']) ?>" loading="lazy">
                        <span><strong><?= e($t['name']) ?></strong><em><?= e($t['role']) ?></em></span>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
