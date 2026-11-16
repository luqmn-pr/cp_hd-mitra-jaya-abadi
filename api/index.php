<?php

// Setup writable temporary storage paths for Laravel in Vercel serverless environment
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL'])) {
    $dirs = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/cache',
        '/tmp/storage/logs',
        '/tmp/bootstrap/cache',
    ];

    foreach ($dirs as $dir) {
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    // Copy bundled SQLite database to writable /tmp if present
    $sqliteSource = __DIR__.'/../database/database.sqlite';
    $sqliteTarget = '/tmp/database.sqlite';
    if (! file_exists($sqliteTarget) && file_exists($sqliteSource)) {
        copy($sqliteSource, $sqliteTarget);
    }
}

// Forward to Laravel public/index.php
require __DIR__.'/../public/index.php';
