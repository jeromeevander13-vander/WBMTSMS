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

// 2. Set default environment variables for Vercel Serverless if missing
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

putenv('VIEW_COMPILED_PATH=' . $storagePath . '/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = $storagePath . '/framework/views';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

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

define('LARAVEL_START', microtime(true));

// 3. Register Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Bootstrap Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 5. Direct Laravel to use /tmp for storage
$app->useStoragePath($storagePath);

// 6. Handle HTTP Request
$app->handleRequest(\Illuminate\Http\Request::capture());