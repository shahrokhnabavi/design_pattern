<?php

namespace App\Strategy\FlyBehavior;

use Libraries\Log;

class CanNotFly implements Fly
{
    public function fly(): string
    {
        Log::getInstance()->info('Fly Behavior. This animal can NOT flying');
        return 'I can not flying.';
    }
}
