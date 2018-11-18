<?php

namespace App\Decorator\Behavior;

use App\Decorator\LoggerDecorator;

class EmailLogger extends LoggerDecorator
{
    public function log(string $msg)
    {
        parent::log($msg);
        echo "<br/>Logging to the Emial: {$msg}";
    }
}
