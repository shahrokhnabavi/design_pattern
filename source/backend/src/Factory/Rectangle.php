<?php

namespace App\Factory;

class Rectangle implements Shape
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    public function __construct(
        int $width,
        int $height
    ) {
        $this->width = $width;
        $this->height = $height;
    }

    public function draw(): void
    {
        echo sprintf('<br/>A Rectangle is drawn with WIDTH: %spx by HEIGHT:%spx', $this->width, $this->height);
    }
}
