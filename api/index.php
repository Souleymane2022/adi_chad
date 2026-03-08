<?php

/**
 * Vercel entry point for Laravel.
 *
 * Vercel's filesystem is read-only except for /tmp.
 * We redirect storage to /tmp and clear stale bootstrap cache
 * to prevent "Target class [view] does not exist" and similar errors.
 */

// Set the application base path
define('LARAVEL_START', microtime(true));

// Point Laravel storage to /tmp (the only writable dir on Vercel)
$_ENV['APP_STORAGE_PATH'] = '/tmp/storage';
putenv('APP_STORAGE_PATH=/tmp/storage');

// Create required storage directories if they don't exist
$storagePath = '/tmp/storage';
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

// Clear stale bootstrap cache files that cause service provider errors
$bootstrapCache = __DIR__ . '/../bootstrap/cache';
$cacheFiles = ['services.php', 'packages.php', 'config.php', 'routes-v7.php', 'events.php'];
foreach ($cacheFiles as $file) {
    $path = $bootstrapCache . '/' . $file;
    if (file_exists($path)) {
        @unlink($path);
    }
}

// Now forward to the standard public/index.php
require __DIR__ . '/../public/index.php';
