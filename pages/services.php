<?php /** Services listing */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Services</span>
        <h1>Every mode of transport, one partner</h1>
        <p>Explore how <?= e($COMPANY['name']) ?> keeps your supply chain moving.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid--3">
            <?php foreach ($SERVICES as $slug => $s): ?>
                <a class="service-card service-card--full reveal" href="<?= url('/services/' . $slug) ?>">
                    <div class="service-card__img" style="background-image:url('<?= e($s['image']) ?>')"></div>
                    <div class="service-card__body">
                        <span class="service-card__icon"><?= icon($s['icon'], 24) ?></span>
                        <h3><?= e($s['title']) ?></h3>
                        <p><?= e($s['excerpt']) ?></p>
                        <span class="service-card__link">Learn more <?= icon('arrow', 16) ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
