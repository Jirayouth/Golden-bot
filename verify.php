<?php
$access_token = 'qtfW2whmIBLG4ui5DO1+wIB2vxRW8dUX7t6ksc4ZtYnL6Y/4ZDShhwB0fk03JUkdyStOJ183vPL4oRD9ZEfuHT0eQ4jVw6oBt8+QxNnh4YzFxgSSWoFU+t9JYRBOXk2cwHW0YtzJsQVKVxpOGVhCCgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;