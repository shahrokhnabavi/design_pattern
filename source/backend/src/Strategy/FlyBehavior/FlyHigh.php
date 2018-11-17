<?php

namespace App\Strategy\FlyBehavior;

use Libraries\Log;

class FlyHigh implements Fly
{
    public function fly(): string
    {
        Log::getInstance()->info('Fly Behavior. This animal flies high');
        return 'I can fly high.';
    }
}
