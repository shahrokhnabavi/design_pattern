<?php

namespace App\Singleton;

use Libraries\Log;

class DatabaseConnection
{
    /** @var DatabaseConnection */
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new DatabaseConnection();
        }
        return static::$instance;
    }

    public function connect(): bool {
        Log::getInstance()->info('Db is connected.');
        return true;
    }
}
