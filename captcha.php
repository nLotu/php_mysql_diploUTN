<?php 
	session_start();
	header("Content-type: image/jpeg");//cambiar formato a jpeg
	$imagen = imagecreate(100,40);//crear imagen
	imagecolorallocate($imagen, 240, 97, 86);//color de fondo
	$color_txt = imagecolorallocate($imagen, 51, 51, 51);//color texto
	imagestring($imagen, 5, 20, 10, $_SESSION['captcha'], $color_txt);//colocar txt en la imagen
	imagejpeg($imagen);
?>