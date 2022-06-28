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
			include("recursos.php");

		?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
			<table id ="tabla_productos">
				<tr>
					<th>Código</th>
					<th>Producto</th>
					<th>Descripción</th>
					<th>Precio</th>
					<th></th>
				</tr>
				<?php

			    	$productos = $base->manipularBase("SELECT * FROM productos");
					for($i = 0; $i < count($productos); $i++){
				
				?>

						<tr>
							<td>
								<?php echo $productos[$i]['codigo'];?>	
							</td>
							<td>
								<?php echo $productos[$i]['producto'];?>
							</td>
							<td>
								<?php echo $productos[$i]['descripcion'];?>
							</td>
							<td>
								<?php echo "$".$productos[$i]['precio'];?>
							</td>
							<td><a href="agregar_carrito.php?cod=<?php echo $productos[$i]['codigo'];?>" class = "vinculo_tabla">Agregar al carrito</td>
						</tr>

				<?php

					}//cierre for

				?>
		</table>
	</section>
	<aside>
		<h2>Carrito</h2>
		<?php

			$total = 0;

			if(isset($_GET['ok'])){

			?>
				<table id="tabla_carrito">
					<tr>
						<th>Código</th>
						<th>Producto</th>
						<th>Precio</th>
						<th></th>
					</tr>
			<?php

					$datos = $carrito->mostrarCarrito();
					for($i = 0; $i < count($datos); $i++){

			?>
						<tr>
							<td>
								<?php echo $datos[$i]['codigo'];?>	
							</td>
							<td>
								<?php echo $datos[$i]['producto'];?>
							</td>
							<td>
								<?php echo "$".$datos[$i]['precio'];?>
							</td>
							<td><a href="eliminar_carrito.php?cod=<?php echo $datos[$i]['codigo'];?>" class="vinculo_carrito">Eliminar</td>
						</tr>

						
			<?php
					$total = $total + $datos[$i]['precio'];	
					}//cierre for
			?>
				</table>
		<?php

			}//cierre if

		?>

		<p><strong>Total: </strong><?php echo "$".$total ?></p>    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>