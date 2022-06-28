<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>

	<?php
		
		function txt_captcha(){
			$texto = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#%&*";
			$codigo = '';
			for ($i=0; $i < 6; $i++){
				$codigo .= $texto[rand(0,67)];				
			}
			return $codigo;
		}

		$_SESSION['captcha'] = txt_captcha();
	
	?>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<form method="POST" action="cargar.php">
				<label>Nombre:</label><br>
				<input class="input_text" type="text" name="nombre" maxlength="30" required><br><br>
				<label>Apellido:</label><br>
				<input class="input_text" type="text" name="apellido" maxlength="40" required><br><br>
				<label>Email:</label><br>
				<input class="input_text" type="email" name="email" maxlength="70" required><br><br>
				<label>Consulta:</label><br>
				<textarea class="input_text" name="consulta" rows="10" maxlength="800" required></textarea><br><br>
				<img id="captcha" src="captcha.php"><br><br>
				<label>Codigo de verificacion: </label>
				<input type="text" name="codigo_captcha"><br><br>
				<input class="boton_form" type="submit" value="Enviar Consulta"><br>
		</form>
		<?php
			if(isset($_GET['ok'])){
				echo "<p>Consulta cargada correctamente</p><br>";
			}

			if(isset($_GET['error'])){
				echo "<p>El codigo de verifcacion es incorrecto</p><br>";
			}
		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>