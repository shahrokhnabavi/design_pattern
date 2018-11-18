<?php

namespace App\Decorator\Behavior;

use App\Decorator\LoggerDecorator;

class SMSLogger extends LoggerDecorator
{
    public function log(string $msg)
    {
        parent::log($msg);
        echo "<br/>Logging to the SMS: {$msg}";
    }
}
