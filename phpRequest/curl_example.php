<?php

CONST URL = "http://localhost/test";
CONST POST_VALUES = [
	"key1" => "value1",
	"key2" => "value2"
];
$POST_VALUE = json_encode(POST_VALUES);

$ch = curl_init();
curl_setopt_array($ch, [
	CURLOPT_URL => URL,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POST => true,
	CURLOPT_POSTFIELDS => $POST_VALUE,
	CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Content-Length: '.strlen($POST_VALUE)]
]);

$result = curl_exec($ch);
curl_close($ch);

if(is_bool($result) and !$result) throw new Exception(URL." Response is failed.");
else echo($result);