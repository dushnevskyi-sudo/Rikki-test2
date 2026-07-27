<?php
/**
 * Dynamically generated wordmark logo: SITE_SHORT_NAME as spaced-out
 * uppercase letters, styled from the brand colors in config.php.
 * Pass ?white=1 to get the all-white variant used on dark/hero backgrounds.
 */
require __DIR__ . '/../../config.php';

header('Content-Type: image/svg+xml');
header('Cache-Control: public, max-age=3600');

$white = isset($_GET['white']);
$name  = htmlspecialchars(mb_strtoupper(SITE_SHORT_NAME), ENT_QUOTES);
$color = $white ? '#FFFFFF' : SITE_COLOR_DARK;

$charWidth = 15;
$width = (mb_strlen($name) * $charWidth) + 10;
?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?= $width ?>" height="28" viewBox="0 0 <?= $width ?> 28">
  <text x="0" y="20" font-family="'Space Grotesk', Arial, Helvetica, sans-serif" font-weight="500" font-size="18" letter-spacing="4" fill="<?= $color ?>"><?= $name ?></text>
</svg>
