<?php

	$usuario = $_POST['user'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array("cost" => 4));

	include("class/base_de_datos.php");
	$base = new Base_Datos("localhost", "root", "", "phpavanzado");

	$datos = $base ->manipularBase("SELECT * FROM usuarios");

	$user_valido = true;


	if($datos != null) {

		for($i = 0; $i < count($datos); $i++) {

			if($datos[$i]['user'] == $usuario) {

				$user_valido = false;

			}
			
		}

	}

	if($user_valido) {

		$base -> manipularBase("INSERT INTO usuarios VALUES('$usuario', '$password')");
		header("location: unidad8.php?registro_ok");

	}else {

		header("location: unidad8.php?registro_error");

	}

?>