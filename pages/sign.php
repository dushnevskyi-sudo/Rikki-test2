<?php
/**
 * Referral signup page: /sign/{code}
 * Looks up referral code in DB, shows signup form if valid.
 */

$db = db_connect();
$ref_code = $ref_code ?? '';
$referral = null;
$form_done = false;
$form_errors = [];

// Verify referral code
if (!empty($ref_code) && $db) {
    $stmt = $db->prepare('SELECT id, name, project FROM users WHERE ref = ? LIMIT 1');
    if ($stmt) {
        $stmt->bind_param('s', $ref_code);
        $stmt->execute();
        $result = $stmt->get_result();
        $referral = $result->fetch_assoc();
        $stmt->close();
    }
}

// Handle POST (form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($referral) && $db) {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    // Honeypot
    if (!empty($_POST['website'])) {
        $form_done = true;
        return;
    }

    // Validate
    if ($name === '') $form_errors['name'] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $form_errors['email'] = 'Please enter a valid email.';
    if (strlen($password) < 6) $form_errors['password'] = 'Password must be at least 6 characters.';
    if ($password !== $confirm) $form_errors['confirm'] = 'Passwords do not match.';

    if (empty($form_errors)) {
        // Check if email already exists
        $stmt = $db->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            if ($stmt->get_result()->num_rows > 0) {
                $form_errors['email'] = 'This email is already registered.';
            }
            $stmt->close();
        }
    }

    if (empty($form_errors)) {
        // Insert new user
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $db->prepare('INSERT INTO users (name, email, password, referrer_id, project, created_at) VALUES (?, ?, ?, ?, ?, NOW())');
        if ($stmt) {
            $stmt->bind_param('sssis', $name, $email, $hash, $referral['id'], $referral['project']);
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
        <span class="eyebrow">Join us</span>
        <h1>Create your account</h1>
        <p>Welcome to our network.</p>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <?php if (empty($referral)): ?>
            <div class="alert alert--error reveal">
                <?= icon('shield', 20) ?>
                <div><strong>Invalid or expired code.</strong> This referral link is no longer valid.</div>
            </div>
        <?php elseif (!$db): ?>
            <div class="alert alert--error reveal">
                <?= icon('shield', 20) ?>
                <div><strong>Service unavailable.</strong> Please try again later.</div>
            </div>
        <?php elseif ($form_done): ?>
            <div class="alert alert--success reveal">
                <?= icon('check', 20) ?>
                <div><strong>Welcome!</strong> Your account has been created. You can now log in.</div>
            </div>
        <?php else: ?>
            <form method="post" action="<?= url('/sign/' . e($ref_code)) ?>" class="form" novalidate>
                <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">

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

                <div class="form__row">
                    <div class="form__field">
                        <label for="password">Password *</label>
                        <input id="password" name="password" type="password" required>
                        <?php if (!empty($form_errors['password'])): ?><span class="form__error"><?= e($form_errors['password']) ?></span><?php endif; ?>
                    </div>
                    <div class="form__field">
                        <label for="confirm">Confirm Password *</label>
                        <input id="confirm" name="confirm" type="password" required>
                        <?php if (!empty($form_errors['confirm'])): ?><span class="form__error"><?= e($form_errors['confirm']) ?></span><?php endif; ?>
                    </div>
                </div>

                <button class="btn btn--primary btn--lg" type="submit">Create Account</button>
            </form>
        <?php endif; ?>
    </div>
</section>
