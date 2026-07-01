<?php
/**
 * Referral signup page: /sign/{code}
 * Looks up referral code, generates token, redirects to sign-form.
 */

$db = db_connect();
$ref_code = $ref_code ?? '';
$redirect = null;
$error = false;

// Parse from URL path or POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ref_code = trim($_POST['ref'] ?? '');
}

// Verify referral code and generate token
if (!empty($ref_code) && $db) {
    $stmt = $db->prepare('SELECT id, project FROM users WHERE ref = ? LIMIT 1');
    if ($stmt) {
        $stmt->bind_param('s', $ref_code);
        $stmt->execute();
        $result = $stmt->get_result();
        $referral = $result->fetch_assoc();
        $stmt->close();

        if ($referral) {
            // Generate secure token
            $token = bin2hex(random_bytes(25));
            $time = date('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'];
            $sup_id = $referral['id'];
            $project = $referral['project'];

            // Insert contract record
            $stmt = $db->prepare('INSERT INTO contracts (support, project, date, token, ip) VALUES (?, ?, ?, ?, ?)');
            if ($stmt) {
                $stmt->bind_param('issss', $sup_id, $project, $time, $token, $ip);
                if ($stmt->execute()) {
                    $redirect = url('/sign-form/?token=' . $token);
                }
                $stmt->close();
            }
        } else {
            $error = true;
        }
    }
}
?>
<?php if (!empty($redirect)): ?>
    <script>
        // Save token to localStorage
        localStorage.setItem('sign_token', '<?= e($redirect) ?>');
        const expirationDate = new Date().getTime() + (7 * 24 * 60 * 60 * 1000);
        localStorage.setItem('sign_token_expiration', expirationDate.toString());
        window.location.href = '<?= e($redirect) ?>';
    </script>
<?php else: ?>
    <section class="page-hero">
        <div class="container">
            <span class="eyebrow">Join us</span>
            <h1>Enter your support code</h1>
            <p>You've been invited to join our network.</p>
        </div>
    </section>

    <section class="section">
        <div class="container container--narrow">
            <?php if ($error): ?>
                <div class="alert alert--error reveal">
                    <?= icon('shield', 20) ?>
                    <div><strong>Invalid code.</strong> The support code you entered is not valid. Please check and try again.</div>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= url('/sign') ?>" class="form" novalidate>
                <div class="form__field">
                    <label for="ref">Support Code *</label>
                    <input id="ref" name="ref" type="text" value="<?= e($_POST['ref'] ?? '') ?>" placeholder="Enter your code" required autofocus>
                </div>
                <button class="btn btn--primary btn--lg" type="submit">Continue</button>
            </form>
        </div>
    </section>
<?php endif; ?>
