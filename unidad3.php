<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Comentarios</h2>
		<form method="POST" action="guardar_comentario.php" enctype="multipart/form-data" id="form_comentarios">
			<label>Nombre: </label><br>
			<input class="input_text" type="text" name="nombre" maxlength="30" required><br><br>
			<label>Apellido: </label><br>
			<input class="input_text" type="text" name="apellido" maxlength="40" required><br><br>		
			<label>Correo Electronico: </label><br>
			<input class="input_text" type="email" name="email" maxlength="60" required><br><br><br>
			<textarea class="input_text" name="comentario" placeholder="Escriba su comentario aqui..." rows="10" maxlength="800" required></textarea><br><br>
			<input class="boton_form" type="submit" value="Enviar" ><br>
		</form>
		<?php

			if(isset($_GET['ok'])){

				echo "<br><p>Comentario guardado correctamente</p>";
			
			}
		
		?>
	</section>
	<aside>
    	<?php
			
				$archivoLectura = fopen("comentarios.txt", "r");
				fpassthru($archivoLectura);
				fclose($archivoLectura);
				
		?>    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>