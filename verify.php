<?php
$access_token = '2aCqScEbnWGwCosBsOB0tOW/lfOL0JvNfefZEFP37YGZzoCuahuLAV5gG64UBX1u/Ep2AZTkNtySLct/kZZ5qoNVcTLjpssO/M6TIa+8jeXVMv6Ob7cSMn9vZIKeXCXpVzBf1v47996SsJHzDOvqsgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
