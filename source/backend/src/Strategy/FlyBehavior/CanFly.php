<?php

namespace App\Strategy\FlyBehavior;

use Libraries\Log;

class CanFly implements Fly
{
    public function fly(): string
    {
        Log::getInstance()->info('Fly Behavior. This animal can flying');
        return 'I am flying.';
    }
}
