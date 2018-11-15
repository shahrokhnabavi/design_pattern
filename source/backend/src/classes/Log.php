<?php

namespace Libraries;

use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log
{
    /** @var Logger */
    private $logger;

    /** @var Log */
    private static $instance;

    private function __construct(string $scope)
    {
        $path = sprintf('%s/../data/logs/%s.log', __DIR__, $scope);

        // Create the logger
        $this->logger = new Logger($scope);

        // Now add some handlers
        $this->logger->pushHandler(new StreamHandler($path, Logger::DEBUG));
        $this->logger->pushHandler(new FirePHPHandler());
    }

    /**
     * @param string $scope
     *
     * @return Log
     */
    public static function getInstance(string $scope = 'global-log'): Log
    {
        if (empty(static::$instance)) {
            static::$instance = new Log($scope);
        }

        return static::$instance;
    }

    /**
     * @param string $message
     * @param array  $data
     *
     * @return bool
     */
    public function info(string $message, array $data = []): bool
    {
        return $this->logger->info($message, $data);
    }
}
