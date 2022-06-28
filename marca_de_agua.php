<?php
	$base="images/unidad4.jpg";
	$marca="images/marca.png";
	$img_base=imagecreatefromjpeg($base);
	$img_marca=imagecreatefrompng($marca);
	imagecopy($img_base,$img_marca,312,352,0,0,imagesx($img_marca),imagesy($img_marca));
	header("Content-type: images/jpeg");
	imagejpeg($img_base);
?>