<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Get Started';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom:150px;">
  <div class="container">
    <h1 class="hero__title" style="font-size:32px;">Create your account</h1>
    <p class="hero__subtitle">Join <?= htmlspecialchars(SITE_SHORT_NAME) ?> and get early access to new digital assets.</p>
  </div>
</section>

<div class="container">
  <div class="form-wrap">
    <h1>Sign up</h1>
    <p class="sub">It only takes a minute.</p>
    <form data-demo-form>
      <div class="field">
        <label for="full_name">Full name</label>
        <input type="text" id="full_name" name="full_name" required>
      </div>
      <div class="field">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required minlength="8">
      </div>
      <button type="submit" class="btn">Create account</button>
      <p class="form-note">This is a template form — no data is sent or stored.</p>
    </form>
    <p class="form-alt-link">Already have an account? <a href="/login.php">Log in</a></p>
  </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
