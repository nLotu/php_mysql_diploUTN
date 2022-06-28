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
		<?php 

		include("botonera.php"); 
		include("conexion.php");

		?>
	</nav>
	</header>
	<section>
		<h2>Agenda de clases</h2>
			<table id="tabla_clases">
				<tr>
					<th>Clase</th>
					<th>Unidad</th>
					<th>Fecha</th>
				</tr>	
			<?php
				
				$datos = mysqli_query($base,"SELECT * FROM clases");
				
				while($row = mysqli_fetch_array($datos)){

			?>
				<tr>
					<td>
						<?php echo $row['id_clase']?>
					</td>
					<td>
						<?php echo $row['unidad']?>
					</td>
					<td>
						<?php echo $row['fecha']?>
					</td>
				</tr>
				

			<?php

				}//cierre while

			?>

		</table>
	</section>
	<aside>
		<h2 class="h2_aside">Agendar case</h2>
		<form method="POST" action="insertar_clase.php">
			<label>Unidad: </label><br>
			<input type="text" name="unidad" maxlength="30" required><br>
			<label>Fecha: </label><br>
			<input type="date" name="fecha" required><br>
			<input type="submit" value="Agendar" id="boton_u1"><br>
		</form>
		<?php

			if(isset($_GET['ok'])) {
				echo "<p> Clase cargada correctamente!</p>";
			}

		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>