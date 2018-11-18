<?php

namespace App\Adapter;

class TweeterAdapter implements SocialMedia
{
    /** @var Tweeter */
    private $adaptee;

    public function connect(string $username, string $password): void
    {
        $this->adaptee = new Tweeter($username, $password);
    }

    public function post(string $message): void
    {
        $this->adaptee->postToWall($message);
    }
}
