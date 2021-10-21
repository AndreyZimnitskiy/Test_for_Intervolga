
<?php
	$image = "image.png";	//Исходный файл
	$srcSize = getimagesize($image);	//Размер исходного файла
	$src = imagecreatefrompng($image);	//Загрузка файла в ресурс
	$banner = imagecreatetruecolor(200, 100);	//Создание (ресурса) пустой картинки под баннер с нужными размерами
	
	imagecopyresampled($banner, $src, 0, 0, 0, 0, 200, 100, $srcSize[0], $srcSize[1]);	//Копирование исходника в баннер со сжатием (интерполяционным)
	imagepng($banner, "banner.png", 9);	//Создание временного файла-баннера из ресурса для отображения на странице
	
	// Освобождение памяти:
	imagedestroy($src);
	imagedestroy($banner);
	
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Banner from PNG</TITLE>
	</HEAD>
	
	<BODY>
		<img src='banner.png'>
	</BODY>
</HTML>