<?php
	
	$usuario = $_POST['user'];
	$password = $_POST['password'];

	include("class/base_de_datos.php");

	$base = new Base_Datos("localhost", "root", "", "phpavanzado");

	$datos = $base ->manipularBase("SELECT * FROM usuarios WHERE user = '$usuario'");

	if($_POST['user'] != $datos[0]['user']) {

		header("location: unidad8.php?verif_error");

	}

	$verificar_pass = password_verify($password, $datos[0]['password']);

	if($verificar_pass) {

		header("location: unidad8.php?verif_ok&user=$usuario");

	} else {

		header("location: unidad8.php?verif_error");		

	}

?>