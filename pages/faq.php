<?php /** FAQ page */ ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Support</span>
        <h1>Frequently asked questions</h1>
        <p>Everything you need to know about shipping with <?= e($COMPANY['name']) ?>.</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="accordion reveal">
            <?php foreach ($FAQS as $i => $faq): ?>
                <div class="accordion__item">
                    <button class="accordion__head" aria-expanded="false">
                        <span><?= e($faq['q']) ?></span>
                        <span class="accordion__icon"></span>
                    </button>
                    <div class="accordion__body">
                        <p><?= e($faq['a']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="faq-cta reveal">
            <p>Still have questions?</p>
            <a class="btn btn--primary" href="<?= url('/contact') ?>">Contact our team</a>
        </div>
    </div>
</section>
