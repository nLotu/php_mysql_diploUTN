<?php
	$ruta = "images/unidad4.jpg";
	$img_base = imagecreatefromjpeg($ruta);
	$ancho_base = imagesx($img_base);
	$alto_base = imagesy($img_base);
	$ancho_min = $ancho_base/3;
	$alto_min = $alto_base/3;
	$img_min = imagecreate($ancho_min, $alto_min);
	imagecopyresized($img_min, $img_base, 0, 0, 0, 0, $ancho_min, $alto_min, $ancho_base, $alto_base);
	imagejpeg($img_min,"images/imagen_mini.jpg");
?>