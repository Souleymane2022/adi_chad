<?php

/**
 * Vercel entry point for Laravel.
 *
 * Vercel's filesystem is read-only except for /tmp.
 * We redirect storage to /tmp and clear stale bootstrap cache.
 */

// ── 1. Storage path ────────────────────────────────────────────────────────
$storagePath = '/tmp/storage';
$_ENV['APP_STORAGE_PATH'] = $storagePath;
putenv("APP_STORAGE_PATH={$storagePath}");

// Create all required writable directories
$dirs = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// ── 2. Clear stale bootstrap cache (causes "Target class does not exist") ──
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
