<?php

namespace App\Adapter;

class Facebook implements SocialMedia
{
    private $isLoggedIn = false;

    public function connect(string $username, string $password): void
    {
        echo 'You are connecting to facebook server.<br/>';
        if ($username === 'shahrokh' && $password === '123') {
            echo 'You are logged in.<br/>';
            $this->isLoggedIn = true;
            return;
        }
        echo 'Failed to log in.<br/>';
    }

    public function post(string $msg): void
    {
        if (!$this->isLoggedIn) {
            echo 'You are not logged in.<br/>';
            return;
        }

        echo 'Post to your wall: '.$msg.'<br/>';
    }
}
