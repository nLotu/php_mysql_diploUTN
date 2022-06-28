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
		<h2>Eventos</h2>
			<h3>Ingrese una fecha: </h3>
			<form method="POST" action="calcular_dias_faltantes.php">
				<label>Dia: </label><br>
				<input class="input_num" type="number" name="dia" min = 1 max=31 required><br><br>
				<label>Mes: </label><br>
				<input class="input_num" type="number" name="mes" min = 1 max=12 required><br><br>
				<label>Año: </label><br>
				<input class="input_num" type="number" name="anho" min=2022 required><br><br>
				<input type="submit" value="Calcular"><br>
			</form>
			<?php

				if(isset($_GET['fecha'])){
					$fecha_ingresada = $_GET['fecha'];
					$dias_faltantes = $_GET[ 'dias'];
					if($dias_faltantes == 0) {
						echo "<p>Ingesaste la fecha de hoy!!</p>";
					} else if($dias_faltantes<0) {
						echo "<p>La fecha ingresada es anterior al dia de hoy</p>";
					} else {
						echo "<p>Falta/n ".$dias_faltantes." dia/s para el ".$fecha_ingresada."</p>";
					}
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