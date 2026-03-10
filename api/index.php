<?php

/**
 * Vercel entry point for Laravel.
 *
 * Vercel's filesystem is read-only except for /tmp.
 * We redirect storage to /tmp and clear stale bootstrap cache.
 */

// ── 1. Storage & Cache paths ────────────────────────────────────────────────
$storagePath = '/tmp/storage';
$cachePath = $storagePath . '/bootstrap/cache';

// Load composer to access Illuminate\Support\Env
require __DIR__ . '/../vendor/autoload.php';

// Force environment variables in Laravel's internal repository
// This ensures that env('LARAVEL_PACKAGES_CACHE') etc. return the /tmp paths
$envRepo = \Illuminate\Support\Env::getRepository();

$vars = [
    'APP_STORAGE_PATH'       => $storagePath,
    'LARAVEL_SERVICES_CACHE' => $cachePath . '/services.php',
    'LARAVEL_PACKAGES_CACHE' => $cachePath . '/packages.php',
    'LARAVEL_CONFIG_CACHE'   => $cachePath . '/config.php',
    'LARAVEL_ROUTES_CACHE'   => $cachePath . '/routes-v7.php',
    'LARAVEL_EVENTS_CACHE'   => $cachePath . '/events.php',
    'VIEW_COMPILED_PATH'     => $storagePath . '/framework/views',
];

foreach ($vars as $key => $value) {
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
    putenv("{$key}={$value}");
    $envRepo->set($key, $value);
}

// Create all required writable directories
$dirs = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
    $cachePath,
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// ── 2. Check for stale bootstrap cache (should be empty in the read-only repo)
$bootstrapCache = __DIR__ . '/../bootstrap/cache';
$cacheFiles = ['services.php', 'packages.php', 'config.php', 'routes-v7.php', 'events.php'];
foreach ($cacheFiles as $file) {
    $path = $bootstrapCache . '/' . $file;
    if (file_exists($path) && is_writable($path)) {
        @unlink($path);
    }
}

// ── 3. SQLite: create the database file in /tmp if needed ─────────────────
$sqlitePath = '/tmp/database.sqlite';
if (!file_exists($sqlitePath)) {
    touch($sqlitePath);
}

// ── 4. Forward to standard Laravel entrypoint ──────────────────────────────
// (Autoload already loaded above)
require_once __DIR__ . '/../public/index.php';
