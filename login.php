<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Log in';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom:150px;">
  <div class="container">
    <h1 class="hero__title" style="font-size:32px;">Welcome back</h1>
    <p class="hero__subtitle">Log in to your <?= htmlspecialchars(SITE_SHORT_NAME) ?> account.</p>
  </div>
</section>

<div class="container">
  <div class="form-wrap">
    <h1>Log in</h1>
    <p class="sub">Enter your credentials to continue.</p>
    <form data-demo-form>
      <div class="field">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Log in</button>
      <p class="form-note">This is a template form — no data is sent or stored.</p>
    </form>
    <p class="form-alt-link">Don't have an account? <a href="/register.php">Sign up</a></p>
  </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
