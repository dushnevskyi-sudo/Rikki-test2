<?php
/**
 * Sign form page: /sign-form/?token=...
 * User fills registration/contract details with their token.
 */

$token = trim($_GET['token'] ?? '');
$db = db_connect();
$contract = null;
$form_done = false;
$form_errors = [];

// Verify token
if (!empty($token) && $db) {
    $stmt = $db->prepare('SELECT id, support, project FROM contracts WHERE token = ? AND DATE_ADD(date, INTERVAL 7 DAY) > NOW() LIMIT 1');
    if ($stmt) {
        $stmt->bind_param('s', $token);
        $stmt->execute();
        $result = $stmt->get_result();
        $contract = $result->fetch_assoc();
        $stmt->close();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($contract) && $db) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Honeypot
    if (!empty($_POST['website'])) {
        $form_done = true;
        return;
    }

    // Validate
    if ($name === '') $form_errors['name'] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $form_errors['email'] = 'Please enter a valid email.';

    if (empty($form_errors)) {
        // Save form data to contracts record
        $stmt = $db->prepare('UPDATE contracts SET name = ?, email = ?, phone = ?, company = ?, message = ?, status = "submitted", submitted_at = NOW() WHERE id = ?');
        if ($stmt) {
            $stmt->bind_param('sssssi', $name, $email, $phone, $company, $message, $contract['id']);
            if ($stmt->execute()) {
                $form_done = true;
            }
            $stmt->close();
        }
    }
}
?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Registration</span>
        <h1>Complete your information</h1>
        <p>Please fill out the form below to proceed.</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <?php if (empty($contract)): ?>
            <div class="alert alert--error reveal">
                <?= icon('shield', 20) ?>
                <div><strong>Invalid or expired token.</strong> This link is no longer valid. Please start over.</div>
            </div>
        <?php elseif ($form_done): ?>
            <div class="alert alert--success reveal">
                <?= icon('check', 20) ?>
                <div><strong>Thank you!</strong> Your information has been received. We'll be in touch shortly.</div>
            </div>
        <?php else: ?>
            <form method="post" action="<?= url('/sign-form/?token=' . e($token)) ?>" class="form" novalidate>
                <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">

                <div class="form__row">
                    <div class="form__field">
                        <label for="name">Full Name *</label>
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
                        <label for="phone">Phone</label>
                        <input id="phone" name="phone" type="tel" value="<?= e($_POST['phone'] ?? '') ?>">
                    </div>
                    <div class="form__field">
                        <label for="company">Company</label>
                        <input id="company" name="company" type="text" value="<?= e($_POST['company'] ?? '') ?>">
                    </div>
                </div>

                <div class="form__field">
                    <label for="message">Additional Information</label>
                    <textarea id="message" name="message" rows="4"><?= e($_POST['message'] ?? '') ?></textarea>
                </div>

                <button class="btn btn--primary btn--lg" type="submit">Submit</button>
            </form>
        <?php endif; ?>
    </div>
</section>
