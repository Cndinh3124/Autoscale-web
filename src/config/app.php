<?php

declare(strict_types=1);

// Application settings. Prefer environment variables in production.
define('APP_NAME', getenv('APP_NAME') ?: 'Hội Sinh Viên TDC');
define('APP_URL', getenv('APP_URL') ?: 'http://localhost/hoi_sinh_vien');
define('UPLOAD_POST_DIR', __DIR__ . '/../uploads/posts/');
define('UPLOAD_SLIDE_DIR', __DIR__ . '/../uploads/slides/');
define('UPLOAD_DOCUMENT_DIR', __DIR__ . '/../uploads/documents/');

// Optionally define environment
define('APP_ENV', getenv('APP_ENV') ?: 'production');
