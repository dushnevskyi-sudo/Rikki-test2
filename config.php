<?php
/**
 * =====================================================================
 *  SITE CONFIGURATION
 * ---------------------------------------------------------------------
 *  Everything specific to a company lives here. To rebrand this site
 *  for another logistics company, edit ONLY the values in this file.
 *  No other file needs to be touched for a basic setup.
 * =====================================================================
 */

// ---------------------------------------------------------------------
// 1. COMPANY IDENTITY
// ---------------------------------------------------------------------
$COMPANY = [
    // Public brand name shown in the header, hero and footer
    'name'        => 'Norvexa Logistics',
    // Short brand word (used for the logo mark)
    'brand'       => 'Norvexa',
    // Full registered legal entity name (used on legal pages / invoices)
    'legal_name'  => 'Norvexa Logistics LLC',
    // Employer Identification Number (US tax ID)
    'ein'         => '88-3947261',
    // Year the company was founded (used for "since" and copyright)
    'founded'     => 2013,
    // One-line tagline / slogan
    'slogan'      => 'Smarter freight. Delivered on time, worldwide.',

    // ----- Contact -----
    'phone'       => '+1 (312) 555-0182',
    'phone_raw'   => '+13125550182',            // used for tel: links
    'email'       => 'info@norvexa-logistics.com',
    'support_email' => 'support@norvexa-logistics.com',

    // ----- Address -----
    'address_line'  => '1120 W Cermak Rd, Suite 400',
    'address_city'  => 'Chicago',
    'address_state' => 'IL',
    'address_zip'   => '60608',
    'address_country' => 'United States',

    // ----- Working hours -----
    'hours'       => 'Mon – Fri: 8:00 AM – 6:00 PM',
    'hours_note'  => '24/7 shipment tracking & emergency support',

    // ----- Social media (add 'network' => 'https://…' to show icons) -----
    'social' => [],
];

// ---------------------------------------------------------------------
// 2. SITE / TECHNICAL SETTINGS
// ---------------------------------------------------------------------
$SITE = [
    // Absolute base URL WITHOUT trailing slash (used for canonical/OG tags)
    'url'         => 'https://norvexa-logistics.com',
    // Base path if the site lives in a sub-folder, e.g. '/site'. '' = root.
    'base'        => '',
    'lang'        => 'en',
    'timezone'    => 'America/Chicago',
    // Default meta values (per-page values can override these)
    'meta_title'  => 'Norvexa Logistics — Global Freight & Supply Chain Solutions',
    'meta_desc'   => 'Norvexa Logistics delivers fast, reliable ocean, air, rail and road freight, warehousing and customs brokerage for businesses worldwide.',
    // Google Analytics / GTM id (leave '' to disable)
    'analytics'   => '',
];

// ---------------------------------------------------------------------
// 3. HERO STATISTICS (animated counters)
// ---------------------------------------------------------------------
$STATS = [
    ['value' => 12,    'suffix' => 'k+', 'label' => 'Shipments delivered'],
    ['value' => 48,    'suffix' => '',   'label' => 'Countries served'],
    ['value' => 26,    'suffix' => '',   'label' => 'Distribution centers'],
    ['value' => 99.4,  'suffix' => '%',  'label' => 'On-time delivery'],
];

// ---------------------------------------------------------------------
// 4. SERVICES
//    The array KEY is the URL slug -> /services/{slug}
// ---------------------------------------------------------------------
$SERVICES = [
    'ocean-freight' => [
        'title'   => 'Ocean Freight',
        'icon'    => 'ship',
        'excerpt' => 'Cost-effective FCL & LCL sea shipping across every major trade lane.',
        'image'   => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'Move large volumes at the best cost per unit with our global ocean network. We handle full-container (FCL) and less-than-container (LCL) loads with real-time visibility from port to port.',
        'features' => [
            'FCL & LCL consolidation on all major lanes',
            'Port-to-port and door-to-door options',
            'Live container tracking and ETA alerts',
            'Reefer and out-of-gauge cargo handling',
        ],
    ],
    'air-freight' => [
        'title'   => 'Air Freight',
        'icon'    => 'plane',
        'excerpt' => 'Time-critical air cargo with priority space on trusted carriers.',
        'image'   => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'When speed matters most, our air freight desk secures priority capacity worldwide, clears customs fast and keeps your urgent cargo moving.',
        'features' => [
            'Next-flight-out and consolidated options',
            'Temperature-controlled & pharma-grade handling',
            'Priority customs clearance',
            'Airport-to-door final-mile delivery',
        ],
    ],
    'rail-freight' => [
        'title'   => 'Rail Freight',
        'icon'    => 'train',
        'excerpt' => 'A greener, budget-friendly link between continents and hubs.',
        'image'   => 'https://images.unsplash.com/photo-1474487548417-781cb71495f3?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'Rail balances cost and speed while cutting emissions. We connect inland hubs to seaports and cross-border corridors with scheduled block trains.',
        'features' => [
            'Intermodal rail-road-sea connections',
            'Scheduled block-train departures',
            'Lower carbon footprint per ton-mile',
            'Bonded and customs-cleared transit',
        ],
    ],
    'road-transport' => [
        'title'   => 'Road Transport',
        'icon'    => 'truck',
        'excerpt' => 'Regional and cross-border trucking with full-load & LTL options.',
        'image'   => 'https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'Our vetted carrier fleet covers first-mile pickup to final-mile delivery, with GPS-tracked FTL and LTL services across the region.',
        'features' => [
            'Full-truckload (FTL) & less-than-truckload (LTL)',
            'GPS-tracked fleet with live ETAs',
            'Cross-border documentation handled',
            'Dedicated and express lanes',
        ],
    ],
    'warehousing' => [
        'title'   => 'Warehousing & Fulfillment',
        'icon'    => 'warehouse',
        'excerpt' => 'Smart storage, inventory control and order fulfillment at scale.',
        'image'   => 'https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'Store, pick, pack and ship from our strategically located distribution centers with real-time inventory dashboards and automated fulfillment.',
        'features' => [
            'Bonded & climate-controlled storage',
            'Real-time inventory management portal',
            'Pick, pack & e-commerce fulfillment',
            'Cross-docking and kitting services',
        ],
    ],
    'customs-brokerage' => [
        'title'   => 'Customs Brokerage',
        'icon'    => 'shield',
        'excerpt' => 'Clear customs faster with licensed, error-free documentation.',
        'image'   => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?auto=format&fit=crop&w=1200&q=80',
        'intro'   => 'Our licensed brokers manage duties, tariffs and compliance so your shipments clear borders without costly delays.',
        'features' => [
            'Licensed customs brokers in key ports',
            'Duty, tariff & HS-code classification',
            'Trade compliance & documentation',
            'Bonded warehousing coordination',
        ],
    ],
];

// ---------------------------------------------------------------------
// 5. WHY-CHOOSE-US FEATURES
// ---------------------------------------------------------------------
$FEATURES = [
    ['icon' => 'clock',   'title' => 'On-Time, Every Time', 'text' => 'A 99.4% on-time record backed by proactive ETA monitoring and rerouting.'],
    ['icon' => 'globe',   'title' => 'Truly Global Reach',  'text' => 'One partner, 48 countries and every mode of transport under one roof.'],
    ['icon' => 'eye',     'title' => 'Full Visibility',     'text' => 'Track every shipment in real time from a single, clean dashboard.'],
    ['icon' => 'headset', 'title' => '24/7 Human Support',  'text' => 'Real logistics experts on call around the clock — no bots, no queues.'],
];

// ---------------------------------------------------------------------
// 6. HOW-IT-WORKS STEPS
// ---------------------------------------------------------------------
$STEPS = [
    ['num' => '01', 'title' => 'Request a Quote',   'text' => 'Tell us the origin, destination and cargo. Get transparent pricing fast.'],
    ['num' => '02', 'title' => 'We Plan the Route', 'text' => 'Our team designs the optimal multimodal route for cost and speed.'],
    ['num' => '03', 'title' => 'Track in Real Time','text' => 'Follow your shipment live with automated milestone alerts.'],
    ['num' => '04', 'title' => 'Delivered Safely',  'text' => 'Cargo arrives on schedule, with proof of delivery and full support.'],
];

// ---------------------------------------------------------------------
// 7. TESTIMONIALS
// ---------------------------------------------------------------------
$TESTIMONIALS = [
    ['name' => 'Sarah Whitfield', 'role' => 'Ops Director, Meridian Retail', 'text' => 'Norvexa took over our cross-border freight and cut transit times by a third. Visibility is finally something we can trust.', 'avatar' => 'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=200&q=80'],
    ['name' => 'David Marno',     'role' => 'Founder, Cobalt Goods',        'text' => 'Their warehousing and fulfillment let us scale into three new markets without hiring a single logistics person. Superb team.', 'avatar' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=200&q=80'],
    ['name' => 'Elena Torres',    'role' => 'Supply Chain Lead, Aveline',    'text' => 'Customs used to be our biggest headache. With Norvexa brokers, clearance is fast and paperwork is flawless.', 'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=200&q=80'],
];

// ---------------------------------------------------------------------
// 8. FAQ
// ---------------------------------------------------------------------
$FAQS = [
    ['q' => 'How do I get a shipping quote?',            'a' => 'Use our online quote form with your origin, destination and cargo details. A specialist replies with transparent pricing, usually within a few business hours.'],
    ['q' => 'Which regions do you cover?',               'a' => 'We operate across 48 countries with ocean, air, rail and road networks, plus distribution centers on major trade lanes.'],
    ['q' => 'Can I track my shipment in real time?',     'a' => 'Yes. Every shipment gets a tracking number you can follow live, with automated milestone and ETA alerts.'],
    ['q' => 'Do you handle customs clearance?',          'a' => 'Absolutely. Our licensed brokers manage duties, tariffs, HS classification and all compliance paperwork for you.'],
    ['q' => 'Is my cargo insured?',                      'a' => 'We offer comprehensive cargo insurance options tailored to the value and nature of your goods. Ask your account manager for details.'],
];

// ---------------------------------------------------------------------
// 9. NAVIGATION MENU  (label => path relative to base)
// ---------------------------------------------------------------------
$NAV = [
    'Home'     => '/',
    'About'    => '/about',
    'Services' => '/services',
    'Track'    => '/track',
    'FAQ'      => '/faq',
    'Contact'  => '/contact',
];

// ---------------------------------------------------------------------
// 10. LEGAL PAGES — effective date shown on Terms & Privacy
// ---------------------------------------------------------------------
$LEGAL = [
    'effective_date' => 'January 1, 2026',
];

// ---------------------------------------------------------------------
// Runtime setup — do not edit below unless you know what you are doing.
// ---------------------------------------------------------------------
date_default_timezone_set($SITE['timezone']);
