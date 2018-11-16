<?php

namespace App\Factory;

class ShapeFactory
{
    public function create(string $type): ?Shape
    {
        $obj = null;

        switch($type) {
            case 'rect':
                $obj = new Rectangle(100, 60);
                break;
            case 'circle':
                $obj = new Circle(40);
                break;
        }

        return $obj;
    }
}
