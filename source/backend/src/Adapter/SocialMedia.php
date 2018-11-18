<?php

namespace App\Adapter;

interface SocialMedia
{
    public function connect(string $username, string $password): void;
    public function post(string $message): void;
}
