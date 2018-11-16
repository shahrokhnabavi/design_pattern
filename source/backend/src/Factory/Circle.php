<?php

namespace App\Factory;

class Circle implements Shape
{
    /** @var int */
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function draw(): void
    {
        echo sprintf('<br/>A Circle is drawn with radius %spx', $this->radius);
    }
}
