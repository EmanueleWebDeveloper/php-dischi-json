<?php
// recupero i dati json
$string = file_get_contents("datas.json");
// var_dump($string);

// tresformo stringa in array
$list = json_decode($string, true);
// var_dump($list);

header('Content-Type: application/json');

echo  json_encode($list);