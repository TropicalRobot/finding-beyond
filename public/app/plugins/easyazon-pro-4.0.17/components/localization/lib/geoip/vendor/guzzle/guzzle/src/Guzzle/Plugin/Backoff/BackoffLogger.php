<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Common\Event;
use Guzzle\Log\LogAdapterInterface;
use Guzzle\Log\MessageFormatter;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;










class BackoffLogger implements EventSubscriberInterface
{

const DEFAULT_FORMAT = '[{ts}] {method} {url} - {code} {phrase} - Retries: {retries}, Delay: {delay}, Time: {connect_time}, {total_time}, cURL: {curl_code} {curl_error}';


protected $logger;


protected $formatter;





public function __construct(LogAdapterInterface $logger, MessageFormatter $formatter = null)
{
$this->logger = $logger;
$this->formatter = $formatter ?: new MessageFormatter(self::DEFAULT_FORMAT);
}

public static function getSubscribedEvents()
{
return array(BackoffPlugin::RETRY_EVENT => 'onRequestRetry');
}








public function setTemplate($template)
{
$this->formatter->setTemplate($template);

return $this;
}






public function onRequestRetry(Event $event)
{
$this->logger->log($this->formatter->format(
$event['request'],
$event['response'],
$event['handle'],
array(
'retries' => $event['retries'],
'delay' => $event['delay']
)
));
}
}
