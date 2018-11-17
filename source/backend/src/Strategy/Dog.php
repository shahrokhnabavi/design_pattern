<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\CanNotFly;

class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->setName($name . ' [Dog]');

        $this->sound = 'WOOF';
        $this->food = 'Meet';
        $this->speed = '60KM';
        $this->setFlyType(new CanNotFly());
    }
}
