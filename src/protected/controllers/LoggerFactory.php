<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoggerFactory
{
    public static function createLogger($name, $logFilePath)
    {
        $logger = new Logger($name);
        $handler = new StreamHandler($logFilePath, Logger::DEBUG);
        $logger->pushHandler($handler);

        return $logger;
    }
}