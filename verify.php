<?php
$access_token = 'kNJGXCKYIisd4amHHJNh02uphTz1rEhAXTwosmNakm1P/mv/bS1myaet9Q8t4GlmVkoBDDARcvH0unrkLlUgPX4tnCwBogcaC9j7NbKTLtqHRFC1vZEVSvloP47e2KPkBYPnh3WXozJ2f+EKIAHzYwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
