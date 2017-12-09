<?php
$access_token = 'qtfW2whmIBLG4ui5DO1+wIB2vxRW8dUX7t6ksc4ZtYnL6Y/4ZDShhwB0fk03JUkdyStOJ183vPL4oRD9ZEfuHT0eQ4jVw6oBt8+QxNnh4YzFxgSSWoFU+t9JYRBOXk2cwHW0YtzJsQVKVxpOGVhCCgdB04t89/1O/w1cDnyilFU=';
//$access_token = 'rB8mTotb8cqebrYNvDAwDwrKoePdRrM7f1q2gf93pAE4iplt1mnZ4UhD1/8yS9twsyM0ix5/01thdx3qM1ksKwTfATwQ+09gtoQ7wArCoKzpz2KkwFiQuT0C4D5irLZqkkXDIYsGnGLFaRTIe6DIzAdB04t89/1O/w1cDnyilFU=';
//$access_token = 'Cso4TRxOmCEF6VK0ON5sWEvNoerp8GKdYJmQL+ii8Zu4nMqa8M177eKdiSs22aMwuQMJDXSiw7BUP2Viozk0YiWotD41rN0XQSreS4+XREA92UDdtLfZUpzk9el7scM7wqpxTbrpm240zL4yxDClAgdB04t89/1O/w1cDnyilFU=';

//$url = 'https://api.line.me/v1/oauth/verify';
$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
