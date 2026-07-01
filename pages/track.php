<?php
/** Track shipment page — demo tracking with a deterministic mock status. */
$ref = trim($_GET['ref'] ?? '');
$statuses = ['Picked up', 'In transit', 'At customs', 'Out for delivery', 'Delivered'];
$has_result = $ref !== '';
if ($has_result) {
    // Deterministic pseudo-status based on the reference, for a realistic demo.
    $step = abs(crc32($ref)) % count($statuses);
}
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

        <?php if ($has_result): ?>
            <div class="track-result reveal">
                <div class="track-result__head">
                    <div>
                        <span class="muted">Reference</span>
                        <strong><?= e(strtoupper($ref)) ?></strong>
                    </div>
                    <span class="badge badge--<?= $step === count($statuses) - 1 ? 'green' : 'blue' ?>"><?= e($statuses[$step]) ?></span>
                </div>
                <ol class="timeline">
                    <?php foreach ($statuses as $i => $st): ?>
                        <li class="<?= $i <= $step ? 'is-done' : '' ?> <?= $i === $step ? 'is-current' : '' ?>">
                            <span class="timeline__dot"><?= $i <= $step ? icon('check', 14) : '' ?></span>
                            <span class="timeline__label"><?= e($st) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <p class="muted track-result__note">This is a demonstration status. Connect your carrier or TMS API in <code>pages/track.php</code> to show live data.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
