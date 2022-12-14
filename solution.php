<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$api = 'https://jsonplaceholder.typicode.com/posts';
$data = json_decode(file_get_contents($api));
print_r($data[0]);
?>