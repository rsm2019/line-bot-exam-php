<?php
require "vendor/autoload.php";
$access_token = 'U5skBY8gaVKoQFD+Fxs7IYBoTVwRSCerypoLb3vKgME53+f3zdiJtq4mbh73rABgfAp45jbdiyRYdBtI1gossvJ8ZG2X7yaFGVOWnCtkM2nlCyBIpKAIRVGphL/MauZCCMQ+nY0GgxwIE5smSGgelwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '2595bf30f16f545938fc6d02c7cf0547';
$idPush = 'U605ecc90528cb022e562066c556074a3';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();