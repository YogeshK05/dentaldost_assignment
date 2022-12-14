<?php

// API 
$api_url = 'https://jsonplaceholder.typicode.com/posts';

//Get data
$data = file_get_contents($api_url);

//Converting JSON to Assoc. Arrays
$result = json_decode($data);
$entries = sizeof($result);
// for ($i = 0; $i < $entries; $i++) {
//     echo $result[$i]->id . " \n";
// }

foreach ($result as $key => $value) {
    echo $value->id . " \n";
    echo $value->userId . " \n";
    echo $value->title . " \n";
    echo $value->body . " \n";
}
