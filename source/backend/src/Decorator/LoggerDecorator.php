<?php

namespace App\Decorator;

abstract class LoggerDecorator implements Logger
{
    /**
     * @var Logger
     */
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $msg)
    {
        $this->logger->log($msg);
    }
}
