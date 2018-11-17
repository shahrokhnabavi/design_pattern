<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\CanFly;

class Bird extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->setName($name . ' [Bird]');

        $this->sound = 'Jik';
        $this->food = 'Seed';
        $this->speed = '20KM';
        $this->setFlyType(new CanFly());
    }
}
