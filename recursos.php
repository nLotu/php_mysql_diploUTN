<?php

	include("class/base_de_datos.php");
	include("class/carrito.php");

	define("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("CLAVE", "");
	define("BASE", "phpavanzado");

	$base = new Base_Datos(SERVIDOR, USUARIO, CLAVE, BASE);
	$carrito = new Carrito ($base);

?>