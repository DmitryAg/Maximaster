<?php
$filename = 'counter.txt';
$file_container = file($filename);
$count = $file_container[0];
for ($i=0; $i <sizeof($file_container) ; $i++) { 
	unset($file_container[$i]);
}
$count++;
$fp = fopen($filename,'r+');
$fw = fwrite($fp,$count);
fclose($fp);
echo 'Страница была заружена ' . $count . ' раз. Текущее время ' . date('H:m');