<?php
	
	include("recursos.php");
	include("class/productos.php");

	$codigo = $_GET['cod'];

	$datos = $base->manipularBase("SELECT * FROM productos WHERE codigo = $codigo");

	$producto = new Productos($datos[0]['codigo'], $datos[0]['producto'], $datos[0]['descripcion'], $datos[0]['precio']);

	$carrito->cargarProducto($producto->producto, $producto->descripcion, $producto->precio);

	header("Location: unidad7.php?ok");

?>