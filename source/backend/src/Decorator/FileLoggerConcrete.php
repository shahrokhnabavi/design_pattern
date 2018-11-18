<?php

namespace App\Decorator;

// Concrete Component
class FileLoggerConcrete implements Logger
{
    public function log(string $msg)
    {
        echo "<br/>Logging into the file: {$msg}";
    }
}
