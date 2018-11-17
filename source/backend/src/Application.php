<?php

namespace App;

use App\Factory\ShapeFactory;
use App\Singleton\DatabaseConnection;
use App\Strategy\Bird;
use App\Strategy\Dog;
use App\Strategy\FlyBehavior\FlyHigh;

class Application
{
    private static $validAppType = [
        'singleton' => [self::class, 'singleton'],
        'factory' => [self::class, 'factory'],
        'strategy' => [self::class, 'strategy'],
    ];

    public static function run(string $type): Application
    {
        $app = new Application();

        if (!isset(static::$validAppType[$type])) {
            echo file_get_contents(__DIR__.'/index.html');
            return $app;
        }

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

    private function factory(): void
    {
        echo file_get_contents(__DIR__.'/Factory/info.html');

        $shape = new ShapeFactory();

        $rect1 = $shape->create('rect');
        $rect2 = $shape->create('rect');
        $circle = $shape->create('circle');

        var_dump($rect1, $rect2, $circle);

        $rect1->draw();
        $circle->draw();
    }

    private function Strategy(): void
    {
        echo file_get_contents(__DIR__.'/Strategy/info.html');

        $tedi = new Dog('Tedy');
        $jack = new Bird('Jack');

        $tedi->getInfo();
        echo '<br/>';
        $jack->getInfo();
        echo '<br/>';

        $jack->setFlyType(new FlyHigh());
        $jack->getInfo();
    }

}
