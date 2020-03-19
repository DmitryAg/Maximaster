<?php require_once 'api/config/DB.php';
$stmt = DB::getConnection()->prepare("SELECT * FROM `restapi`");
		$stmt->execute();
		while ($artGetRows = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$art[$i] = $artGetRows;
			$i++;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="list">
			<h1 class="list__h1">Список товаров(GET)</h1>
			<div class="list__button-container">
				<p>Вывести список всех товаров:</p>
				<div id="list__button" class="button">Подтвердить</div>
			</div>
		</div>
		<div class="item">
			<h1 class="item__h1">Описание товара(GET)</h1>
			<div class="item__button-container">
				<p>Выберите элемент из списка: </p>
				<select name="select" id="select-item">
					<?php foreach ($art as $per) { ?>
				<option value="<?php echo $per['id'];?>"><?php echo $per['id'];?></option>
						<? } ?>
				</select>
				<div id="item__button" class="button">Подтвердить</div>
			</div>
		</div>
		<div class="add">
			<h1 class="add__h1">Добавить новый товар(POST, JSON)</h1>
			<div class="add__button-container">
					<table class="table" >
						<tr>
							<th>ID</th>
							<th>Название</th>
							<th>Количество</th>
							<th>Цена за единицу</th>
						</tr>
						<?php foreach($art as $per) { ?>
						<tr>
							<td><?php echo $per['id']?></td>
							<td><?php echo $per['name']?></td>
							<td><?php echo $per['count']?></td>
							<td><?php echo $per['price']?></td>
						</tr>
						<?php } ?>
						<tr>
							<td><?php echo count($art);?></td>
							<td><input id="add_name" type="text"></td>
							<td><input id="add_price" type="text"></td>
							<td><input id="add_count" type="text"></td>
						</tr>
					</table>
					<div id="add__button" class="button">Подтвердить</div>
			</div>
		</div>
		<div class="update">
			<h1 class="update__h1">Обновить существующий товар(PUT, JSON)</h1>
			<div class="update__button-container">
					<p>Выберите элемент из списка: </p>
					<select name="select" id="select-update">
					<?php foreach ($art as $per) { ?>
					<option value="<?php echo $per['id'];?>"><?php echo $per['id'];?></option>
						<? } ?>
					</select>
					<div class="update__item">
						<input id="upd_name" type="text">
						<input id="upd_count"  type="text">
						<input id="upd_price"  type="text">
					</div>
					<div id="update__button" class="button">Подтвердить</div>
			</div>
			</div>
		</div>
		<div class="delete">
			<h1 class="delete__h1">Удалить товар(DELETE)</h1>
			<div class="delete__button-container">
					<p>Выберите элемент из списка: </p>
					<select name="id" id="select-delete">
					<?php foreach ($art as $per) { ?>
					<option value="<?php echo $per['id'];?>"><?php echo $per['id'];?></option>
						<? } ?>
					</select>
					<div id="delete__button" class="button">Подтвердить</div>
			</div>
		</div>
		</div>
	</div>
	<script>
		/****************---------Список товаров---------*****************/
		let url = 'http://domen/api/products/';
		let listB = document.getElementById('list__button');
		let xhr = new XMLHttpRequest();
		listB.onclick = async function(){
			document.location.href = url;
		};
		/********************---------Детальный просмотр товара---------******************/
		let itemB = document.getElementById('item__button');
			itemB.onclick = function(){
			let select = document.getElementById('select-item');
			item_url = url + select.value;
			document.location.href = item_url;
		}
		/******************---------Добавление товара-----------********************/
		let addB = document.getElementById('add__button');
		addB.onclick = async function(){
			let inpName = document.getElementById('add_name');
			let inpCount = document.getElementById('add_count');
			let inpPrice = document.getElementById('add_price');
			let mass = {name: '' + inpName.value + '', count: '' + inpCount.value + '',price: '' + inpPrice.value + ''};			
			let res = await fetch(url,{
			method: 'POST',
			headers: {
				 'Content-Type': 'application/json'
			},
			body: JSON.stringify(mass)
			});
			let json = await res.json();
			//json = JSON.stringify(json);
			location.reload();
		}
		/*---------------------Обновление товара-----------------------*/
		let updB = document.getElementById('update__button');
		updB.onclick = async function(){
			let inpName = document.getElementById('upd_name');
			let inpCount = document.getElementById('upd_count');
			let inpPrice = document.getElementById('upd_price');
			let select = document.getElementById('select-update')
			let mass = {name: '' + inpName.value + '', count: '' + inpCount.value + '',price: '' + inpPrice.value + ''};	
			url_update = url + select.value; 		
			let res = await fetch(url_update,{
			method: 'PUT',
			headers: {
				 'Content-Type': 'application/json'
			},
			body: JSON.stringify(mass)
			});
			let json = await res.json();
			//json = JSON.stringify(json);
			location.reload();
		}
		/**************----------Удаление товара--------------***********/
		let delB = document.getElementById('delete__button');
		delB.onclick = async function(){
			let select = document.getElementById('select-delete');	
			let url_delete = url + select.value; 		
			let res = await fetch(url_delete,{
			method: 'DELETE'
			});
			let json = await res.json();
			//json = JSON.stringify(json);
			location.reload();
		}
	</script>
</body>
</html>