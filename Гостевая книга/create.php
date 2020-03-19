<?php
require_once "DB.php";
$name = $_POST['name'];
$message = $_POST['message'];
$date = date('H:m');
if (!$message) {
	header("Location: index.php?err=1");
	return false;
}
if (!$name) {
	$name = 'Анонимно';
}
$message = htmlspecialchars($message, ENT_QUOTES);
$stmt = DB::getConnection()->prepare("INSERT INTO `records` (`name`,`message`,`date`) VALUES (:name,:message,:dat)");
$stmt->bindParam(':name',$name);
$stmt->bindParam(':message',$message);
$stmt->bindParam(':dat',$date);
$stmt->execute();
header("Location: index.php");


