<?php

namespace Guzzle\Log;

use Psr\Log\LogLevel;
use Psr\Log\LoggerInterface;






class PsrLogAdapter extends AbstractLogAdapter
{



private static $mapping = array(
LOG_DEBUG => LogLevel::DEBUG,
LOG_INFO => LogLevel::INFO,
LOG_WARNING => LogLevel::WARNING,
LOG_ERR => LogLevel::ERROR,
LOG_CRIT => LogLevel::CRITICAL,
LOG_ALERT => LogLevel::ALERT
);

public function __construct(LoggerInterface $logObject)
{
$this->log = $logObject;
}

public function log($message, $priority = LOG_INFO, $extras = array())
{
$this->log->log(self::$mapping[$priority], $message, $extras);
}
}
