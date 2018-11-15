<?php

namespace App;

use App\Singleton\DatabaseConnection;

class Application
{
    private static $validAppType = [
        'singleton' => [self::class, 'singleton']
    ];

    public static function run(string $type): Application
    {
        $app = new Application();
        call_user_func(static::$validAppType[$type]);

        echo '<hr/>Done';
        return $app;
    }

    private function singleton(): void
    {
        echo file_get_contents(__DIR__.'/Singleton/info.html');


        $db1 = DatabaseConnection::getInstance();
        $db2 = DatabaseConnection::getInstance();

        var_dump($db1, $db2);
        var_dump($db1->connect());

    }
}
