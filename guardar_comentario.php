<?php
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];

	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha = date('d-m-Y H:i:s', time());
	$contenido = "<h3>".$apellido.", ".$nombre."</h3><p><strong>".$fecha."</strong></p><p><em>".$email."</em></p><p>".$comentario."</p><br><hr><br>";
	//cargar archivo
	$archivo = fopen("comentarios.txt", "c");
	$txtAnterior = file_get_contents("comentarios.txt");
	$txtFinal = $contenido.$txtAnterior;
	fwrite($archivo, $txtFinal);
	fclose($archivo);

	header("Location: unidad3.php?ok");
?>