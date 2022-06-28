<?php
	
	include("recursos.php");
	
	$codigo = $_GET['cod'];

	$carrito->eliminarProducto($codigo);
	$datos = $carrito->mostrarCarrito();
	
	if ($datos[0]['codigo'] > 0) {

		header("Location: unidad7.php?ok");

	} else {

		header("Location: unidad7.php");

	}
	

?>