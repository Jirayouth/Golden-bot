<?php
if( $_GET["name"] & $_GET["signal"] & $_GET["price"]) {
	$name = $_GET['name'];
	$signal = $_GET['signal'];
	$price = $_GET['price'];


	$access_token = 'qtfW2whmIBLG4ui5DO1+wIB2vxRW8dUX7t6ksc4ZtYnL6Y/4ZDShhwB0fk03JUkdyStOJ183vPL4oRD9ZEfuHT0eQ4jVw6oBt8+QxNnh4YzFxgSSWoFU+t9JYRBOXk2cwHW0YtzJsQVKVxpOGVhCCgdB04t89/1O/w1cDnyilFU=';
// Get POST body content
//$content = file_get_contents('php://input');
// Parse JSON

			
			// PUSH Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$send_message = $signal." ".$name." : ".$price;
			$messages_push = [
				'type' => 'text',
				'text' => $send_message
			];
			$data = [
				'to' => "C7b6f92fef09462cb0942c24b33820ceb",
				'messages' => [$messages_push],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
}
echo "OK";
