<?php

namespace Coderoacademy\SimpleCliLog;

class Log
{
    public static function success(string $message): void
    {
        self::log($message, 'success');
    }

    public static function error(string $message): void
    {
        self::log($message, 'error');
    }

    public static function info(string $message): void
    {
        self::log($message, 'info');
    }

    public static function warning(string $message): void
    {
        self::log($message, 'warning');
    }

    private static function log(string $message, string $type): void
    {
        $types = [
            'warning' => "\033[33;33m%s\033[0m",
            'info'    => "\033[0;34m%s\033[0m",
            'success' => "\033[0;32m%s\033[0m",
            'error'   => "\033[31;31m%s\033[0m"
        ];

        printf($types[$type] . PHP_EOL, $message);
    }
}