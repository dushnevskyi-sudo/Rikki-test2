<?php
/**
 * Shared helper functions.
 */

/**
 * Build an absolute-from-root URL that respects the configured base path.
 */
function url(string $path = '/'): string
{
    global $SITE;
    $base = rtrim($SITE['base'] ?? '', '/');
    if ($path === '' || $path === '/') {
        return $base . '/';
    }
    return $base . '/' . ltrim($path, '/');
}

/**
 * Path to an asset inside /assets, cache-busted by file mtime.
 */
function asset(string $path): string
{
    $rel  = 'assets/' . ltrim($path, '/');
    $full = __DIR__ . '/../' . $rel;
    $ver  = is_file($full) ? filemtime($full) : time();
    return url($rel) . '?v=' . $ver;
}

/** Escape output for HTML context. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Return the current request path (route), normalised without base or query.
 */
function current_route(): string
{
    global $SITE;
    $uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    $base = rtrim($SITE['base'] ?? '', '/');
    if ($base !== '' && strpos($uri, $base) === 0) {
        $uri = substr($uri, strlen($base));
    }
    return '/' . trim($uri, '/');
}

/** Is the given nav path the active page? */
function is_active(string $path): bool
{
    $route   = current_route();
    $path    = '/' . trim($path, '/');
    if ($path === '/') {
        return $route === '/';
    }
    return $route === $path || strpos($route, $path . '/') === 0;
}

/** Full formatted company address on one line. */
function company_address(): string
{
    global $COMPANY;
    return sprintf(
        '%s, %s, %s %s, %s',
        $COMPANY['address_line'],
        $COMPANY['address_city'],
        $COMPANY['address_state'],
        $COMPANY['address_zip'],
        $COMPANY['address_country']
    );
}

/**
 * Connect to database (cached).
 */
function db_connect() {
    global $DB;
    if (!$DB['enabled'] || empty($DB['host'])) return null;
    static $conn = null;
    if ($conn === null) {
        $conn = mysqli_connect($DB['host'], $DB['user'], $DB['pass'], $DB['database']);
        if (!$conn) return null;
        mysqli_set_charset($conn, 'utf8mb4');
    }
    return $conn;
}

/**
 * Minimal inline SVG icon set (stroke style, currentColor).
 */
function icon(string $name, int $size = 24): string
{
    $paths = [
        'ship'      => '<path d="M2 20a6 6 0 0 0 10 0 6 6 0 0 0 10 0"/><path d="M4 18l-2-6h20l-2 6"/><path d="M12 12V4l6 4"/><path d="M8 8h4"/>',
        'plane'     => '<path d="M17.8 19.2 16 11l3.5-3.5a2.1 2.1 0 0 0-3-3L13 8 4.8 6.2a1 1 0 0 0-.9 1.7l6.1 3-2 2-3-1a1 1 0 0 0-.9 1.7L7 16l1.4 3.1a1 1 0 0 0 1.7-.1l1-3 2-2 3 6.1a1 1 0 0 0 1.7-.9Z"/>',
        'train'     => '<rect x="4" y="4" width="16" height="12" rx="2"/><path d="M4 11h16"/><path d="M12 4v7"/><path d="M8 20l-2 2"/><path d="M16 20l2 2"/><circle cx="8" cy="15" r="0.5"/><circle cx="16" cy="15" r="0.5"/>',
        'truck'     => '<path d="M1 3h15v13H1z"/><path d="M16 8h4l3 3v5h-7z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
        'warehouse' => '<path d="M3 21V8l9-4 9 4v13"/><path d="M3 21h18"/><rect x="7" y="12" width="10" height="9"/><path d="M7 16h10"/>',
        'shield'    => '<path d="M12 2 4 5v6c0 5 3.5 8.5 8 11 4.5-2.5 8-6 8-11V5z"/><path d="m9 12 2 2 4-4"/>',
        'clock'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'globe'     => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18Z"/>',
        'eye'       => '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>',
        'headset'   => '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><path d="M4 14a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2Z"/><path d="M20 14a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2Z"/><path d="M20 18a4 4 0 0 1-4 4h-2"/>',
        'phone'     => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/>',
        'mail'      => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 6 10 7 10-7"/>',
        'pin'       => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
        'check'     => '<path d="M20 6 9 17l-5-5"/>',
        'arrow'     => '<path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>',
    ];
    $inner = $paths[$name] ?? '<circle cx="12" cy="12" r="9"/>';
    return sprintf(
        '<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">%2$s</svg>',
        $size,
        $inner
    );
}
