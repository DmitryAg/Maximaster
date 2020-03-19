<?php 
header('Content-Type: text/html; charset=utf-8');
	function getJson($filename,$fp){
		$response = file_get_contents('http://exercise.develop.maximaster.ru/service/city/');
		$json = json_decode($response);
		foreach ($json as $value) {
			$string .= $value .' '; 

		}
		$fw = fwrite($fp,$string);
	}
	$filename = 'cash.txt';
	if (!file_exists($filename)) {
		$fp = fopen($filename,'w+');
		getJson($filename,$fp);

	}
	else{
		$fp = fopen($filename,'r+');
		$dateTimeFile = new DateTime();
		$dateTimeToday = new DateTime();
		$time_file = filemtime($filename);
		$dateTimeFile->setTimestamp($time_file);
		$dateTimeToday->setTimestamp(time());
		if ($dateTimeToday->format('d.m.Y') != $dateTimeFile->format('d.m.Y') ) { 
			$file = file($filename);
			for ($i=0; $i < sizeof($file) ; $i++) 
			{ 
				unset($file[$i]);
			}
			getJson($filename,$fp);

		 }
		 else{

		 }
	}
	$fp = fopen($filename,'r+');
	$cities = fgets($fp);
	fclose($fp);
	$cities = substr($cities,0,-1);
	$cities = explode(' ',$cities);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form">
		<select id="select-city" name ="city" size="1">
			<?php foreach ($cities as $value) { 
				if ($value == 'Москва') { ?>
			<option selected value="<? echo $value;?>"><? echo $value; ?></option>
			<? } else {?>
			<option name ="city" value="<? echo $value;?>"><? echo $value; ?></option>
			<?php } } ?>
  	 	</select>
  	 	<input id="weight" name="weight" type="text" placeholder="Вес, кг">
  	 	<input id="button" type="submit" value="Отправить">
  	 	<div id="info"></div>
	</div>
	<script>
		let button = document.getElementById('button');
		button.onclick = async function(){
			let city = document.getElementById('select-city');
			let weight = document.getElementById('weight');
			let json = {city:'' + city.value + '', weight: '' + weight.value + ''};
			let response = await fetch('post.php',{
				method: 'POST',
				headers: {
					'Content-Type': 'application/json;charset=utf-8'
				},
				body: JSON.stringify(json)
			});
			json = await response.json();
			json = JSON.stringify(json);
			json = JSON.parse(json);
			let str = '';
			let info = document.getElementById('info');
			if (json.status == 'error') {
				str+='<p class="error">' + json['message'] +'</p>';			
			}else{
				str+='<p class="ok">' + json['message'] +'</p>';
			}
			info.innerHTML = str;
		};
		
	</script>
</body>
</html>