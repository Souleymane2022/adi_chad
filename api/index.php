<?php

/**
 * Vercel entry point for Laravel.
 *
 * Vercel's filesystem is read-only except for /tmp.
 * We redirect storage to /tmp and clear stale bootstrap cache.
 */

// ── 1. Storage & Cache paths ────────────────────────────────────────────────
$storagePath = '/tmp/storage';
$cachePath = '/tmp/storage/bootstrap/cache';

$_ENV['APP_STORAGE_PATH'] = $storagePath;
putenv("APP_STORAGE_PATH={$storagePath}");

// Redirect Laravel cache files to /tmp
$_ENV['LARAVEL_SERVICES_CACHE'] = $cachePath . '/services.php';
$_ENV['LARAVEL_PACKAGES_CACHE'] = $cachePath . '/packages.php';
$_ENV['LARAVEL_CONFIG_CACHE'] = $cachePath . '/config.php';
$_ENV['LARAVEL_ROUTES_CACHE'] = $cachePath . '/routes-v7.php';
$_ENV['LARAVEL_EVENTS_CACHE'] = $cachePath . '/events.php';

putenv("LARAVEL_SERVICES_CACHE={$cachePath}/services.php");
putenv("LARAVEL_PACKAGES_CACHE={$cachePath}/packages.php");
putenv("LARAVEL_CONFIG_CACHE={$cachePath}/config.php");
putenv("LARAVEL_ROUTES_CACHE={$cachePath}/routes-v7.php");
putenv("LARAVEL_EVENTS_CACHE={$cachePath}/events.php");

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

// ── 2. Clear stale bootstrap cache (if any exists in the read-only repo) ──
$bootstrapCache = __DIR__ . '/../bootstrap/cache';
$cacheFiles = ['services.php', 'packages.php', 'config.php', 'routes-v7.php', 'events.php'];
foreach ($cacheFiles as $file) {
    $path = $bootstrapCache . '/' . $file;
    if (file_exists($path)) {
        @unlink($path);
    }
}

// ── 3. SQLite: create the database file in /tmp if needed ─────────────────
$sqlitePath = '/tmp/database.sqlite';
if (!file_exists($sqlitePath)) {
    touch($sqlitePath);
}

// ── 4. Forward to standard Laravel entrypoint ──────────────────────────────
require __DIR__ . '/../public/index.php';
