<?php

// 1. Prepare writable storage directories in /tmp for Vercel's read-only filesystem
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/bootstrap/cache',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// 2. Redirect all Laravel bootstrap cache files to /tmp/storage/bootstrap/cache/
putenv('APP_STORAGE_PATH=' . $storagePath);
$_ENV['APP_STORAGE_PATH'] = $storagePath;

putenv('APP_SERVICES_CACHE=' . $storagePath . '/bootstrap/cache/services.php');
$_ENV['APP_SERVICES_CACHE'] = $storagePath . '/bootstrap/cache/services.php';

putenv('APP_PACKAGES_CACHE=' . $storagePath . '/bootstrap/cache/packages.php');
$_ENV['APP_PACKAGES_CACHE'] = $storagePath . '/bootstrap/cache/packages.php';

putenv('APP_CONFIG_CACHE=' . $storagePath . '/bootstrap/cache/config.php');
$_ENV['APP_CONFIG_CACHE'] = $storagePath . '/bootstrap/cache/config.php';

putenv('APP_ROUTES_CACHE=' . $storagePath . '/bootstrap/cache/routes.php');
$_ENV['APP_ROUTES_CACHE'] = $storagePath . '/bootstrap/cache/routes.php';

putenv('APP_EVENTS_CACHE=' . $storagePath . '/bootstrap/cache/events.php');
$_ENV['APP_EVENTS_CACHE'] = $storagePath . '/bootstrap/cache/events.php';

putenv('VIEW_COMPILED_PATH=' . $storagePath . '/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

// 3. Set default environment variables for Vercel Serverless if missing
if (!getenv('APP_KEY')) {
    putenv('APP_KEY=base64:SgE22naQZwWTFThw6dmOgBXkXRWlYvLiZix3KVYD+yk=');
    $_ENV['APP_KEY'] = 'base64:SgE22naQZwWTFThw6dmOgBXkXRWlYvLiZix3KVYD+yk=';
}

if (getenv('APP_DEBUG') === false) {
    putenv('APP_DEBUG=true');
    $_ENV['APP_DEBUG'] = 'true';
}

if (!getenv('SESSION_DRIVER')) {
    putenv('SESSION_DRIVER=cookie');
    $_ENV['SESSION_DRIVER'] = 'cookie';
}

if (!getenv('CACHE_STORE')) {
    putenv('CACHE_STORE=array');
    $_ENV['CACHE_STORE'] = 'array';
}

if (!getenv('APP_MAINTENANCE_DRIVER')) {
    putenv('APP_MAINTENANCE_DRIVER=file');
    $_ENV['APP_MAINTENANCE_DRIVER'] = 'file';
}

// Ensure SQLite database exists in /tmp if using sqlite default
$dbConnection = getenv('DB_CONNECTION') ?: 'sqlite';
if ($dbConnection === 'sqlite') {
    $dbFile = '/tmp/database.sqlite';
    if (!file_exists($dbFile)) {
        @touch($dbFile);
    }
    putenv('DB_DATABASE=' . $dbFile);
    $_ENV['DB_DATABASE'] = $dbFile;
}

try {
    define('LARAVEL_START', microtime(true));

    // 4. Register Composer autoloader
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new \Exception("Composer vendor directory missing. vendor/autoload.php not found.");
    }
    require __DIR__ . '/../vendor/autoload.php';

    // 5. Bootstrap Laravel application
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 6. Direct Laravel to use /tmp for storage
    $app->useStoragePath($storagePath);

    // 7. Handle HTTP Request
    $app->handleRequest(\Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/html; charset=utf-8');
    echo "<!DOCTYPE html><html><head><title>Vercel Laravel Error</title><style>body{font-family:sans-serif;padding:30px;background:#18181b;color:#f4f4f5;}h1{color:#ef4444;}pre{background:#27272a;padding:15px;border-radius:8px;overflow-x:auto;}</style></head><body>";
    echo "<h1>Laravel Runtime Exception</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " <strong>(Line " . $e->getLine() . ")</strong></p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</body></html>";
}

