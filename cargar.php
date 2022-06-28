<?php
	
	session_start();
	//traemos las variables por post
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$consulta = $_POST['consulta'];
	$codigo_captcha = $_POST['codigo_captcha'];


	if($codigo_captcha == $_SESSION['captcha']) {

		include("conexion.php");
		mysqli_query($base, "INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$apellido', '$email', '$consulta')");
		header("Location: unidad5.php?ok");

	} else {
		
		header("Location: unidad5.php?error");
	
	}

?>