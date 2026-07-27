<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Jobs';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';

$openRoles = [
    ['title' => 'Senior Backend Engineer', 'meta' => 'Remote · Engineering · Full-time'],
    ['title' => 'Compliance Analyst', 'meta' => 'San Francisco, CA · Legal & Compliance · Full-time'],
    ['title' => 'Product Designer', 'meta' => 'Remote · Design · Full-time'],
    ['title' => 'Customer Support Specialist', 'meta' => 'Remote · Support · Full-time'],
    ['title' => 'Growth Marketing Manager', 'meta' => 'San Francisco, CA · Marketing · Full-time'],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>Join our team</h1>
    <p>We're building the platform where early adopters invest in the future of digital assets.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="photo-block">
      <img src="https://picsum.photos/id/1015/1200/500" alt="Team collaborating in an office" loading="lazy">
    </div>
    <h2>Open roles</h2>
    <?php foreach ($openRoles as $role): ?>
    <div class="job-row">
      <span class="title"><?= htmlspecialchars($role['title']) ?></span>
      <span class="meta"><?= htmlspecialchars($role['meta']) ?></span>
    </div>
    <?php endforeach; ?>
    <p style="margin-top:26px;">Don't see a role that fits? Send your resume to <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
