<?php

namespace App\Adapter;

class Tweeter
{
    public function __construct(string $user, string $pass)
    {
        echo 'You are connecting to Tweeter server.<br/>';
    }

    public function postToWall(string $msg): void
    {
        echo 'Tweet the message: '.$msg.'<br/>';
    }
}
