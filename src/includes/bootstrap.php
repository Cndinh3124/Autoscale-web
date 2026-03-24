<?php

declare(strict_types=1);

// Central bootstrap for the application
// - start session
// - load config + functions
// - set error display based on APP_ENV
// - instantiate $pdo via getPDO()

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require __DIR__ . '/../config/app.php';
require __DIR__ . '/../config/database.php';
require __DIR__ . '/functions.php';

// Error display: enable only in development
$appEnv = getenv('APP_ENV') ?: 'production';
if ($appEnv === 'development') {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
}

// Instantiate PDO (global variable used across functions)
try {
    $pdo = getPDO(); // getPDO() is defined in config/database.php
} catch (RuntimeException $e) {
    // Log details but show friendly message
    error_log('[DB CONNECT] ' . $e->getMessage());
    http_response_code(500);
    exit('Service temporarily unavailable.');
}
