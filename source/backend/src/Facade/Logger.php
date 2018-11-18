<?php

namespace App\Facade;

class Logger
{
    public function log(string $msg)
    {
        echo 'Logger: '.$msg.'<br/>';
    }
}
