<?php

declare(strict_types=1);

function getPDO(): PDO
{
    $host = getenv('DB_HOST') ?: '';
    $port = getenv('DB_PORT') ?: '3306';
    $dbName = getenv('DB_NAME') ?: '';
    $user = getenv('DB_USER') ?: '';
    $pass = getenv('DB_PASS') ?: '';
    $charset = 'utf8mb4';

    if (!$host || !$dbName || !$user) {
        throw new RuntimeException('Database configuration is missing');
    }

    $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset={$charset}";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // cần để bắt lỗi chuẩn
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false, // tránh SQL injection edge cases
        PDO::ATTR_TIMEOUT => 5, // tránh treo connection
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        error_log('[DB ERROR] ' . $e->getMessage()); // log nội bộ (CloudWatch)
        throw new RuntimeException('Database connection failed');
    }
}