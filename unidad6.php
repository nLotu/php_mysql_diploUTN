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
		<h2>Usuarios</h2>
		<form method="POST" action="unidad6.php">
			<label>Nombre:</label><br>
			<input class="input_text" type="text" name="nombre" maxlength="30" required><br><br>
			<label>Apellido:</label><br>
			<input class="input_text" type="text" name="apellido" maxlength="40" required><br><br>
			<label>Edad:</label><br>
			<input class="input_num" type="number" name="edad" min="16" max="99" required><br><br>
			<input class="boton_form"type="submit" value="Enviar"><br>
		</form>
	</section>
	<aside>
		<h2>Usuario Cargado:</h2>

    	<?php
    	
    		if($_POST){
    	
    			include("class/usuarios.php");
    			$usuario = new Usuarios($_POST['nombre'], $_POST['apellido'], $_POST['edad']);
    			$usuario->imprime_caracteristicas();
    	
    		}	
    	
    	?>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>