<?php
$json = file_get_contents('php://input');
$json = json_decode($json,true);
$str = 'http://exercise.develop.maximaster.ru/service/delivery/?city='.$json['city'].'&weight='.$json['weight'];
$response = curl_init($str);
$response = curl_exec($response);





