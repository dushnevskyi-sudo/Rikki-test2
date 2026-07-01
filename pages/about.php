<?php /** About page */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">About us</span>
        <h1>Meet <?= e($COMPANY['name']) ?></h1>
        <p><?= e($COMPANY['slogan']) ?></p>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div class="split__media reveal">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80" alt="Warehouse operations" loading="lazy">
        </div>
        <div class="split__body reveal">
            <span class="eyebrow">Our story</span>
            <h2>Built to make freight feel simple</h2>
            <p>Founded in <?= e($COMPANY['founded']) ?>, <?= e($COMPANY['legal_name']) ?> started with a simple belief: shipping shouldn't be a black box. Today we manage ocean, air, rail and road freight for companies across 48 countries — with the same obsession for clarity and on-time delivery.</p>
            <p>We invest in visibility, in real people who know your account, and in a carrier network that gives you options instead of excuses.</p>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">What drives us</span>
            <h2>Our values</h2>
        </div>
        <div class="grid grid--4">
            <?php foreach ($FEATURES as $f): ?>
                <div class="feature reveal">
                    <span class="feature__icon"><?= icon($f['icon'], 24) ?></span>
                    <h3><?= e($f['title']) ?></h3>
                    <p><?= e($f['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="stats stats--inline">
            <div class="stats__grid">
                <?php foreach ($STATS as $stat): ?>
                    <div class="stat reveal">
                        <div class="stat__value" data-count="<?= e($stat['value']) ?>" data-suffix="<?= e($stat['suffix']) ?>">0</div>
                        <div class="stat__label"><?= e($stat['label']) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
