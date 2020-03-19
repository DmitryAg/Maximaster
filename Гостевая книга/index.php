<?php require_once "DB.php" ;
$stmt = DB::getConnection()->prepare("SELECT * FROM `records`");
$stmt->execute();
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="messages">
		<?php foreach($stmt as $item) { ?>
		<div class="message__item">
			<div class="message__top">
				<span class="message__date"><?php echo $item['date']?></span>
				<span class="message__name"><?php echo $item['name']?></span>
			</div>
			<p class="message__text"><?php echo $item['message']?></p>
		</div>
		<?php } ?>
		<form class="form" action="create.php" method="POST">
			<input class="form__name" name="name" type="text" placeholder="Имя">
			<textarea class="form__message" name="message" placeholder="Ваше сообщение"></textarea>
			<input class="form__submit" type="submit" value="Отправить">
		</form>
	</div>
	<div class="err"><?php if (isset($_GET['err'])) {
			echo 'Заполните поле "Сообщение"!';}?>
	</div>
</body>
</html>
