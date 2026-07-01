<?php
/** Track shipment page. */
$ref = trim($_GET['ref'] ?? '');
$searched = $ref !== '';
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Tracking</span>
        <h1>Track a shipment</h1>
        <p>Enter your reference number to see the latest status.</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <form method="get" action="<?= url('/track') ?>" class="track-form reveal">
            <input type="text" name="ref" value="<?= e($ref) ?>" placeholder="e.g. NVX-4821-XT" aria-label="Tracking number">
            <button class="btn btn--primary" type="submit">Track <?= icon('arrow', 18) ?></button>
        </form>

        <?php if ($searched): ?>
            <div class="track-empty reveal">
                <span class="track-empty__icon"><?= icon('shield', 30) ?></span>
                <h2>Tracking number not found</h2>
                <p>We couldn't find a shipment matching <strong><?= e(strtoupper($ref)) ?></strong>. Please double-check the reference number and try again.</p>
                <p class="muted">Still need help? <a href="<?= url('/contact') ?>">Contact our support team</a> and we'll locate your shipment.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
