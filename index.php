<?php
/**
 * =====================================================================
 *  FRONT CONTROLLER
 *  All clean-URL (ЧПУ) requests are routed through this file by .htaccess.
 * =====================================================================
 */

require __DIR__ . '/config.php';
require __DIR__ . '/includes/functions.php';

$route = current_route();

// Page metadata defaults (a page file may override $page_title / $page_desc).
$page_title = $COMPANY['name'] . ' — ' . $SITE['meta_title_suffix'];
$page_desc  = $COMPANY['name'] . ' delivers ' . $SITE['meta_desc'];

// ---- Routing table --------------------------------------------------
$segments = array_values(array_filter(explode('/', $route)));
$first    = $segments[0] ?? '';

// Handle the contact / quote form POST before any output.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . '/pages/_form-handler.php';
}

switch ($first) {
    case 'sign':
        // /sign/{code} or /sign (POST) — referral signup
        $view = 'sign';
        $ref_code = $segments[1] ?? '';
        break;

    case 'sign-form':
        // /sign-form/?token=... — registration form after sign page
        $view = 'sign-form';
        $page_title = 'Complete Registration — ' . $COMPANY['name'];
        break;

    case 'walkthrough':
        // /walkthrough — video tutorial (hidden from nav)
        $view = 'walkthrough';
        $page_title = 'How It Works — ' . $COMPANY['name'];
        break;

    case '':
        $view = 'home';
        break;

    case 'about':
        $view = 'about';
        $page_title = 'About Us — ' . $COMPANY['name'];
        break;

    case 'services':
        // /services/{slug} -> single service page
        if (!empty($segments[1])) {
            $slug = $segments[1];
            if (isset($SERVICES[$slug])) {
                $view = 'service';
                $service = $SERVICES[$slug];
                $service_slug = $slug;
                $page_title = $service['title'] . ' — ' . $COMPANY['name'];
                $page_desc  = $service['excerpt'];
            } else {
                $view = '404';
            }
        } else {
            $view = 'services';
            $page_title = 'Our Services — ' . $COMPANY['name'];
        }
        break;

    case 'track':
        $view = 'track';
        $page_title = 'Track a Shipment — ' . $COMPANY['name'];
        break;

    case 'quote':
        $view = 'quote';
        $page_title = 'Request a Quote — ' . $COMPANY['name'];
        break;

    case 'contact':
        $view = 'contact';
        $page_title = 'Contact Us — ' . $COMPANY['name'];
        break;

    case 'faq':
        $view = 'faq';
        $page_title = 'FAQ — ' . $COMPANY['name'];
        break;

    case 'terms':
        $view = 'terms';
        $page_title = 'Terms of Service — ' . $COMPANY['name'];
        break;

    case 'privacy':
        $view = 'privacy';
        $page_title = 'Privacy Policy — ' . $COMPANY['name'];
        break;

    default:
        $view = '404';
        break;
}

if ($view === '404') {
    http_response_code(404);
    $page_title = 'Page Not Found — ' . $COMPANY['name'];
}

// ---- Render ---------------------------------------------------------
require __DIR__ . '/includes/header.php';
require __DIR__ . '/pages/' . $view . '.php';
require __DIR__ . '/includes/footer.php';
