<?php


$access_token = 'jWz6HSrFBg7+KDwK6cO+mYjAwiY+lz0x+Gvdz/rNyilbvnlTUuOQmMXJX1+5K6O9nun1p2okrBgiKptyjqa7XSk1A7dDd8JV4X9Y4uZ5Ia4+YSLRiuFELwLOnbr8YG6RPsKGl9noszt1c24pEIeNEgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

