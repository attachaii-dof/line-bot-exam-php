<?php



require "vendor/autoload.php";

$access_token = 'jWz6HSrFBg7+KDwK6cO+mYjAwiY+lz0x+Gvdz/rNyilbvnlTUuOQmMXJX1+5K6O9nun1p2okrBgiKptyjqa7XSk1A7dDd8JV4X9Y4uZ5Ia4+YSLRiuFELwLOnbr8YG6RPsKGl9noszt1c24pEIeNEgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f504b1fa4134f2924a935f07f8248c4e';

$pushID = 'U11ff30ef7b8fd40bcd3731c86c16ecbd';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







