<?php
/**
 * Dynamically generated favicon: first letter of SITE_SHORT_NAME on a
 * rounded square in the primary brand color.
 */
require __DIR__ . '/../../config.php';

header('Content-Type: image/svg+xml');
header('Cache-Control: public, max-age=3600');

$mark = htmlspecialchars(mb_substr(SITE_SHORT_NAME, 0, 1), ENT_QUOTES);
?>
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
  <rect width="32" height="32" rx="8" fill="<?= SITE_COLOR_PRIMARY ?>"/>
  <text x="16" y="22" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" font-weight="700" font-size="17" fill="#FFFFFF"><?= $mark ?></text>
</svg>
