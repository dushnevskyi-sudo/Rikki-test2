<?php
require_once __DIR__ . '/config.php';
$projects = require __DIR__ . '/data/projects.php';
$slug = $_GET['slug'] ?? '';
$project = null;
foreach ($projects as $p) {
    if ($p['slug'] === $slug) { $project = $p; break; }
}

if (!$project) {
    http_response_code(404);
    $pageTitle = 'Not found';
    require __DIR__ . '/includes/header.php';
    echo '<div class="section container text-center"><h2>Project not found</h2><p><a href="/">Back to home</a></p></div>';
    require __DIR__ . '/includes/footer.php';
    exit;
}

$pageTitle = $project['name'] . ' (' . $project['ticker'] . ')';
$pageDescription = $project['tagline'];
$headerTransparent = true;
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="mark" style="background: <?= htmlspecialchars($project['color']) ?>; width:64px; height:64px; border-radius:16px; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; font-size:26px; font-weight:700;">
      <?= htmlspecialchars(mb_substr($project['name'], 0, 1)) ?>
    </div>
    <h1><?= htmlspecialchars($project['name']) ?> (<?= htmlspecialchars($project['ticker']) ?>)</h1>
    <p><?= htmlspecialchars($project['tagline']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container container--narrow">
    <h2>About <?= htmlspecialchars($project['name']) ?></h2>
    <p><?= htmlspecialchars($project['description']) ?></p>
    <p class="u-gray">Listed on <?= htmlspecialchars($project['date']) ?>.</p>
    <div class="text-center" style="margin-top:30px;">
      <a href="/register.php" class="btn btn--large">Trade <?= htmlspecialchars($project['ticker']) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
