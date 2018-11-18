<?php

namespace App;

use App\Adapter\Facebook;
use App\Adapter\Tweeter;
use App\Adapter\TweeterAdapter;
use App\Decorator\Behavior\EmailLogger;
use App\Decorator\Behavior\SMSLogger;
use App\Decorator\FileLoggerConcrete;
use App\Facade\PageFacade;
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
        'adapter' => [self::class, 'adapter'],
        'facade' => [self::class, 'facade'],
        'decorator' => [self::class, 'decorator'],
        'command' => [self::class, 'command'],
        'observer' => [self::class, 'observer'],
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

    private function strategy(): void
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

    private function adapter(): void
    {
        echo file_get_contents(__DIR__.'/Adapter/info.html');

        $facebook = new Facebook();
        $facebook->connect('shahrokh', '123');
        $facebook->post('Hi my friends');

        echo '<br/>';
        $tweeter = new Tweeter('shahrokh', '123');
        $tweeter->postToWall('happy new year');

        echo '<br/><b>Using Adapter</b><br/>';
        $tweeterAdapter = new TweeterAdapter();
        $tweeterAdapter->connect('shahrokh', '123');
        $tweeterAdapter->post('This message come from adapter');
    }

    private function facade(): void
    {
        echo file_get_contents(__DIR__.'/Facade/info.html');

        $facade = new PageFacade();
        $facade->createAndServe(12, 'Test for Wrong user ID');
        echo '<br/>';
        $facade->createAndServe(2, 'Fetch user ID');
    }

    private function decorator(): void
    {
        echo file_get_contents(__DIR__.'/Decorator/info.html');

        $log = new FileLoggerConcrete();
        $log = new EmailLogger($log);
        $log = new SMSLogger($log);

        $log->log('Saving User');
    }

    private function command(): void
    {
        echo file_get_contents(__DIR__.'/Command/info.html');
    }

    private function observer(): void
    {
        echo file_get_contents(__DIR__.'/Observer/info.html');
    }
}
