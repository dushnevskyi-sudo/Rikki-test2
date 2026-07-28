<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Jobs';
$headerTransparent = true;
require __DIR__ . '/includes/header.php';

$values = [
    ['icon' => '<path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z"/>', 'title' => 'Move with urgency', 'desc' => 'Digital assets move fast, and so do we. We ship, learn and iterate quickly.'],
    ['icon' => '<path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3z"/>', 'title' => 'Compliance first', 'desc' => 'We build durable products by taking regulation seriously from day one.'],
    ['icon' => '<circle cx="12" cy="8" r="4"/><path d="M4 21v-1c0-4 3.6-6 8-6s8 2 8 6v1"/>', 'title' => 'Own the outcome', 'desc' => 'Everyone here has real ownership over the problems they work on.'],
];

$departments = [
    'Engineering' => [
        ['title' => 'Senior Backend Engineer', 'meta' => 'Remote · Full-time'],
        ['title' => 'Frontend Engineer', 'meta' => 'Remote · Full-time'],
        ['title' => 'Site Reliability Engineer', 'meta' => 'San Francisco, CA · Full-time'],
    ],
    'Legal & Compliance' => [
        ['title' => 'Compliance Analyst', 'meta' => 'San Francisco, CA · Full-time'],
        ['title' => 'Associate General Counsel', 'meta' => 'Remote · Full-time'],
    ],
    'Design & Product' => [
        ['title' => 'Product Designer', 'meta' => 'Remote · Full-time'],
        ['title' => 'Product Manager', 'meta' => 'Remote · Full-time'],
    ],
    'Operations & Support' => [
        ['title' => 'Customer Support Specialist', 'meta' => 'Remote · Full-time'],
        ['title' => 'Growth Marketing Manager', 'meta' => 'San Francisco, CA · Full-time'],
    ],
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
    <div class="placeholder-photo">
      <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"/><path d="M2 20c0-3.3 3.1-5 7-5s7 1.7 7 5"/><circle cx="17" cy="7" r="2.5"/><path d="M15.5 15.2c2.9.4 5.5 1.9 5.5 4.8"/></svg>
    </div>

    <div class="value-props" style="padding:60px 0 10px;">
      <h2>Life at <?= htmlspecialchars(SITE_SHORT_NAME) ?></h2>
      <p class="lead">A small, distributed team working on some of the hardest problems in crypto.</p>
      <div class="value-grid">
        <?php foreach ($values as $v): ?>
        <div class="value-item">
          <div class="icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><?= $v['icon'] ?></svg></div>
          <h4><?= htmlspecialchars($v['title']) ?></h4>
          <p><?= htmlspecialchars($v['desc']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <h2 style="margin-top:70px;">Open roles</h2>
    <?php foreach ($departments as $dept => $roles): ?>
    <div class="dept-group">
      <h3><?= htmlspecialchars($dept) ?></h3>
      <?php foreach ($roles as $role): ?>
      <div class="job-row">
        <span>
          <span class="title"><?= htmlspecialchars($role['title']) ?></span><br>
          <span class="meta"><?= htmlspecialchars($role['meta']) ?></span>
        </span>
        <a class="apply" href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>?subject=<?= urlencode($role['title'] . ' application') ?>">Apply &rarr;</a>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

    <p style="margin-top:30px;">Don't see a role that fits? Send your resume to <a href="mailto:<?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?>"><?= htmlspecialchars(SITE_EMAIL_SUPPORT) ?></a>.</p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
