<?php
require_once 'config/DB.php';
require_once 'ProductApi.php';

class Action
{
	public static function getAll(){
		$stmt = DB::getConnection()->prepare("SELECT * FROM `restapi`");
		$stmt->execute();
		while ($prodItems = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$prodMass[$i] = $prodItems;
			$i++;
		}
		return $prodMass;
	}

	static function getById($id){
		$stmt = DB::getConnection()->prepare("SELECT * FROM `restapi` WHERE `id`=?");
		$stmt->execute([$id]);
		$prodItem = $stmt->fetch(PDO::FETCH_ASSOC);
		return $prodItem;
	}

	static function createItem($mass){
		$stmt = DB::getConnection()->prepare("INSERT INTO `restapi` (`name`,`count`,`price`) VALUES (:name,:count,:price)");
		$stmt->bindValue(':name',$mass['name'],PDO::PARAM_STR_CHAR);
		$stmt->bindValue(':count',$mass['price'],PDO::PARAM_INT);
		$stmt->bindValue(':price',$mass['price'],PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt) {
			return 'Create Item?';
		}
		else{
			return false;
		}
	}

	static function updateItem($mass,$id){
		$stmt = DB::getConnection()->prepare("UPDATE `restapi` SET `name` = :name, `count` = :count, `price` = :price WHERE `id`=:id");
		$stmt->bindValue(':id',$id,PDO::PARAM_INT);
		$stmt->bindValue(':name',$mass['name'],PDO::PARAM_STR_CHAR);
		$stmt->bindValue(':count',$mass['price'],PDO::PARAM_INT);
		$stmt->bindValue(':price',$mass['price'],PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt) {
			return 'Update Item?';
		}
		else{
			return false;
		}
	}
	
	static function deleteItem($id){
		$stmt = DB::getConnection()->prepare("DELETE FROM `restapi` WHERE `id`=:id");
		$stmt->bindValue(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt) {
			return 'Delete Item?';
		}
		else{
			return false;
		}
	}

}