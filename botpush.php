<?php



require "vendor/autoload.php";

$access_token = 'pi5OudyPWj0bEJKDRP1leiaxra4EdDiSjHr40Oyf0p3yeq+6AuY1xLrRsM1XTD5aBBVSXcyPTHzSq2uGkZCjcsKdsHGB6hCDlV/XKXfM+lGetZoD6zhSNiajIeNWdFCg8khfKlyWpYfnz9zZ/KRkaQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a7a63d18d667493da2bfc3682bcf92df';

$pushID = 'U27ee68113824d1534d65d770f94ee4e1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







