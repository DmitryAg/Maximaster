<?php
class DB
{
	private static  $connect;

	
	public static function getConnection()
	{
		if (self::$connect === null) {
			$dbInfo = array(
				"dbHost" => "localhost",
				"dbUser" => "root",
				"dbPass" => "",
				"dbName" => "guest",
				"dbCharset" => "UTF-8");
			try
			{
				self::$connect = new PDO("mysql:host=".$dbInfo['dbHost'].';dbname='.$dbInfo['dbName'], $dbInfo['dbUser'], $dbInfo['dbPass']);
				self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
				self::$connect->query('SET NAMES utf8');
				self::$connect->query('SET CHARACTER SET utf8');
			} 
			catch(PDOException $error) 
			{
				echo $error->getMessage();
			}
		}
		return self::$connect;
	}
}