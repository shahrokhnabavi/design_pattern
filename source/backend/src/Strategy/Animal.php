<?php

namespace App\Strategy;

use App\Strategy\FlyBehavior\Fly;

class Animal
{
    /** @var string */
    private $name;

    /** @var string */
    protected $sound;

    /** @var double */
    private $height;

    /** @var int */
    private $weigh;

    /** @var float */
    protected $speed;

    /** @var string */
    protected $food;

    /** @var Fly */
    private $flyType;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeigh(): int
    {
        return $this->weigh;
    }

    /**
     * @param int $weigh
     */
    public function setWeigh(int $weigh)
    {
        $this->weigh = $weigh;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * here we can change behavior
     * @return Fly
     */
    public function getFlyType(): Fly
    {
        return $this->flyType;
    }

    /**
     * here we can change behavior
     * @param Fly $flyType
     */
    public function setFlyType(Fly $flyType): void
    {
        $this->flyType = $flyType;
    }

    public function tryTofly(): string
    {
        return $this->flyType->fly();
    }

    public function getInfo(): void
    {
        echo '<br/>Name: '.$this->getName();
        echo '<br/>Sound: '.$this->getSound();
        echo '<br/>Fly: '.$this->tryTofly();
    }
}
