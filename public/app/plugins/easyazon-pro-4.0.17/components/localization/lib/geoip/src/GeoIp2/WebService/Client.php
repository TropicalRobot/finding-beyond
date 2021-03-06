<?php

namespace GeoIp2\WebService;

use GeoIp2\Exception\AddressNotFoundException;
use GeoIp2\Exception\AuthenticationException;
use GeoIp2\Exception\GeoIp2Exception;
use GeoIp2\Exception\HttpException;
use GeoIp2\Exception\InvalidRequestException;
use GeoIp2\Exception\OutOfQueriesException;
use GeoIp2\ProviderInterface;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Client as GuzzleClient;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Guzzle\Http\Exception\ServerErrorResponseException;































class Client implements ProviderInterface
{
private $userId;
private $licenseKey;
private $locales;
private $host;
private $guzzleClient;












public function __construct(
$userId,
$licenseKey,
$locales = array('en'),
$host = 'geoip.maxmind.com',
$guzzleClient = null
) {
$this->userId = $userId;
$this->licenseKey = $licenseKey;
$this->locales = $locales;
$this->host = $host;

$this->guzzleClient = $guzzleClient;
}




























public function city($ipAddress = 'me')
{
return $this->responseFor('city', 'City', $ipAddress);
}




























public function country($ipAddress = 'me')
{
return $this->responseFor('country', 'Country', $ipAddress);
}




























public function insights($ipAddress = 'me')
{
return $this->responseFor('insights', 'Insights', $ipAddress);
}

private function responseFor($endpoint, $class, $ipAddress)
{
$uri = implode('/', array($this->baseUri(), $endpoint, $ipAddress));

$client = $this->guzzleClient ?
$this->guzzleClient : new GuzzleClient();
$request = $client->get($uri, array('Accept' => 'application/json'));
$request->setAuth($this->userId, $this->licenseKey);
$this->setUserAgent($request);

try {
$response = $request->send();
} catch (ClientErrorResponseException $e) {
$this->handle4xx($e->getResponse(), $uri);
} catch (ServerErrorResponseException $e) {
$this->handle5xx($e->getResponse(), $uri);
}

if ($response && $response->isSuccessful()) {
$body = $this->handleSuccess($response, $uri);
$class = "GeoIp2\\Model\\" . $class;
return new $class($body, $this->locales);
} else {
$this->handleNon200($response, $uri);
}
}

private function handleSuccess($response, $uri)
{
if ($response->getContentLength() == 0) {
throw new GeoIp2Exception(
"Received a 200 response for $uri but did not " .
"receive a HTTP body."
);
}

try {
return $response->json();
} catch (RuntimeException $e) {
throw new GeoIp2Exception(
"Received a 200 response for $uri but could not decode " .
"the response as JSON: " . $e->getMessage()
);

}
}

private function handle4xx($response, $uri)
{
$status = $response->getStatusCode();

if ($response->getContentLength() > 0) {
if (strstr($response->getContentType(), 'json')) {
try {
$body = $response->json();
if (!isset($body['code']) || !isset($body['error'])) {
throw new GeoIp2Exception(
'Response contains JSON but it does not specify ' .
'code or error keys: ' . $response->getBody()
);
}
} catch (RuntimeException $e) {
throw new HttpException(
"Received a $status error for $uri but it did not " .
"include the expected JSON body: " .
$e->getMessage(),
$status,
$uri
);
}
} else {
throw new HttpException(
"Received a $status error for $uri with the " .
"following body: " . $response->getBody(),
$status,
$uri
);
}
} else {
throw new HttpException(
"Received a $status error for $uri with no body",
$status,
$uri
);
}
$this->handleWebServiceError(
$body['error'],
$body['code'],
$status,
$uri
);
}

private function handleWebServiceError($message, $code, $status, $uri)
{
switch ($code) {
case 'IP_ADDRESS_NOT_FOUND':
case 'IP_ADDRESS_RESERVED':
throw new AddressNotFoundException($message);
case 'AUTHORIZATION_INVALID':
case 'LICENSE_KEY_REQUIRED':
case 'USER_ID_REQUIRED':
throw new AuthenticationException($message);
case 'OUT_OF_QUERIES':
throw new OutOfQueriesException($message);
default:
throw new InvalidRequestException(
$message,
$code,
$status,
$uri
);
}
}

private function handle5xx($response, $uri)
{
$status = $response->getStatusCode();

throw new HttpException(
"Received a server error ($status) for $uri",
$status,
$uri
);
}

private function handleNon200($response, $uri)
{
$status = $response->getStatusCode();

throw new HttpException(
"Received a very surprising HTTP status " .
"($status) for $uri",
$status,
$uri
);
}

private function setUserAgent($request)
{
$userAgent = $request->getHeader('User-Agent');
$userAgent = "GeoIP2 PHP API ($userAgent)";
$request->setHeader('User-Agent', $userAgent);
}

private function baseUri()
{
return 'https://' . $this->host . '/geoip/v2.1';
}
}
