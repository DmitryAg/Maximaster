<?php
require_once 'ProductApi.php';
$json = file_get_contents('php://input');
	try {
		$api = new ProductApi($json);
    	echo $api->run();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}
