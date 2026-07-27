<?php
/**
 * ============================================================
 *  SITE CONFIGURATION
 * ------------------------------------------------------------
 *  Edit the constants below to rebrand the entire website.
 *  Every page (header, footer, legal pages, forms) pulls its
 *  branding, contact details and legal info from this single
 *  file, so changing a value here updates it everywhere.
 * ============================================================
 */

// ---------------------------------------------------------
// Company
// ---------------------------------------------------------
define('SITE_COMPANY_NAME', 'Coravest Digital Assets Inc.');   // Full legal/company name
define('SITE_SHORT_NAME',   'Coravest');                       // Short brand name (nav, headings)
define('SITE_SLOGAN',       'Invest early. Trade smart. Build the future of digital assets.');

// ---------------------------------------------------------
// Branding
// ---------------------------------------------------------
// Logo/favicon are generated dynamically from SITE_SHORT_NAME + brand colors below,
// so they update automatically whenever the constants change — no image editing needed.
define('SITE_LOGO',         '/assets/img/logo.php');        // Dark logo (light backgrounds)
define('SITE_LOGO_WHITE',   '/assets/img/logo.php?white=1'); // White logo (dark/hero backgrounds)
define('SITE_FAVICON',      '/assets/img/favicon.php');

define('SITE_COLOR_PRIMARY',      '#2455FF'); // Main brand color (buttons, links, accents)
define('SITE_COLOR_PRIMARY_DARK', '#13309B'); // Hover / darker shade of primary
define('SITE_COLOR_ACCENT',       '#00D6B4'); // Secondary accent color
define('SITE_COLOR_DARK',         '#0B0F1E'); // Dark section backgrounds (hero, footer band)
define('SITE_COLOR_GRAY',         '#5B6472'); // Body copy gray

// ---------------------------------------------------------
// Contacts
// ---------------------------------------------------------
define('SITE_EMAIL_SUPPORT', 'support@coravest.io');
define('SITE_EMAIL_SALES',   'sales@coravest.io');
define('SITE_PHONE',         '+1 (415) 555-0173');
define('SITE_ADDRESS',       '548 Market Street, Suite 62910, San Francisco, CA 94104, USA');
define('SITE_URL',           'https://coravest.io');
define('SITE_DOMAIN',        'coravest.io');

// ---------------------------------------------------------
// Legal
// ---------------------------------------------------------
define('SITE_REG_NUMBER',     'DE-7741029');
define('SITE_LEGAL_ADDRESS',  '548 Market Street, Suite 62910, San Francisco, CA 94104, USA');
define('SITE_COPYRIGHT',      '&copy; ' . date('Y') . ' ' . SITE_COMPANY_NAME . '. All rights reserved.');

// ---------------------------------------------------------
// Social (optional — leave empty string to hide a link)
// ---------------------------------------------------------
define('SITE_TWITTER_URL', 'https://twitter.com/');
define('SITE_BLOG_URL',    '');
