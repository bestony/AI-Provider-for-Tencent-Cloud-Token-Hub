<?php

/**
 * Minimal PSR-4 autoloader.
 *
 * The PHP AI Client SDK is supplied by WordPress core or the AI plugin. This
 * plugin only autoloads its own classes.
 *
 * @package TencentCloudTokenHub\AiProvider
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

spl_autoload_register(static function (string $class): void {
    $prefix = 'TencentCloudTokenHub\\AiProvider\\';
    $length = strlen($prefix);

    if (strncmp($class, $prefix, $length) !== 0) {
        return;
    }

    $file = __DIR__ . '/' . str_replace('\\', '/', substr($class, $length)) . '.php';
    if (is_file($file)) {
        require $file;
    }
});
