<?php
/**
 * Dynamically generated wordmark logo.
 * Renders SITE_SHORT_NAME as an SVG using the brand color from config.php.
 * Pass ?white=1 to get the all-white variant used on dark/hero backgrounds.
 */
require __DIR__ . '/../../config.php';

header('Content-Type: image/svg+xml');
header('Cache-Control: public, max-age=3600');

$white = isset($_GET['white']);
$name  = htmlspecialchars(SITE_SHORT_NAME, ENT_QUOTES);
$mark  = htmlspecialchars(mb_substr(SITE_SHORT_NAME, 0, 1), ENT_QUOTES);

$textColor = $white ? '#FFFFFF' : SITE_COLOR_PRIMARY_DARK;
$markBg    = $white ? '#FFFFFF' : SITE_COLOR_PRIMARY;
$markFg    = $white ? SITE_COLOR_PRIMARY : '#FFFFFF';

$width = 26 + (mb_strlen(SITE_SHORT_NAME) * 11) + 14;
?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?= $width ?>" height="32" viewBox="0 0 <?= $width ?> 32">
  <rect x="0" y="4" width="24" height="24" rx="6" fill="<?= $markBg ?>"/>
  <text x="12" y="21" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-weight="700" font-size="14" fill="<?= $markFg ?>"><?= $mark ?></text>
  <text x="34" y="22" font-family="Arial, Helvetica, sans-serif" font-weight="700" font-size="18" fill="<?= $textColor ?>"><?= $name ?></text>
</svg>
