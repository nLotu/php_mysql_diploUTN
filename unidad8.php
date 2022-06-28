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
		<h2>Paginador</h2>

		<?php  

			include("librerias/pagination_class.php");
			include("conexion.php");

		?>
		<script>

			function pagination(page) {
				
				window.location = "unidad8.php?search_text=" + document.form1.search_text.value + "&starting=" + page + "#librerias";

			}
		
		</script>
		<?php

			$qry = "SELECT * FROM productos";
			
			if(isset($_REQUEST['search_text'])) {

				$searchText = $_REQUEST['search_text'];
				$qry .=" where producto like '%$searchText%' OR descripcion like '%$searchText%'";
			
			} else {

				$searchText = '';
			
			}

			if(isset($_GET['starting'])&& !isset($_REQUEST['submit'])) {
			
				$starting=$_GET['starting'];
			
			} else {

				$starting=0;
			
			}

			$recpage = 5;
			$obj = new Pagination_class($qry,$base,$starting,$recpage);		
			$result = $obj->result;

		?>

		<form name="form1" action="unidad8.php#librerias" method="POST" id="form_pagination">			
			<table border="1" width="40%">
				<tr>
				  	<td colspan="3">
						<input id="busqueda" type="text" name="search_text" placeholder="Buscar..." value="<?php echo $searchText;?>">
						<input type="submit" value="Buscar">
				  	</td> 
				</tr>
				<tr><th>Nro.</th><th>Producto</th><th>Descripción</th></tr>
				
				<?php

					if(mysqli_num_rows($result)!=0){
						$counter = $starting + 1;
						while($data = mysqli_fetch_array($result)) {

				?>
				
							<tr>
							<td><?php echo $counter; ?></td>
							<td><?php echo $data['producto']; ?></td>
							<td><?php echo $data['descripcion']; ?></td>                    
							</tr>
				
				<?php

							$counter ++;
						}//cierre while 

				?>

				<tr><td align="center" colspan="3"><?php echo $obj->anchors; ?></td></tr>
				<tr><td align="center" colspan="3"><?php echo $obj->total; ?></td></tr>

				<?php 

					} else {
						echo "No Data Found";
					}
				
				?>

			</td></tr></table>
		</form>

	</section>
	<aside>
		<h2>Ingresar</h2>

		<?php

			if(isset($_GET['verif_ok'])) {

				echo "<h3> Bienvenido/a ". $_GET['user']."<h3>";

			} else {

		?>

				<form method="POST" action="verificar.php">
					<input type="text" name="user" placeholder="Usuario" maxlength="20">
					<input type="password" name="password" placeholder="Contraseña" minlength="6" maxlength="10">
					<input type="submit" value="Ingresar">
				</form>
				<br>
				Aún no creo su cuenta? Registrese <a id="vinculo_registro" href="unidad8.php?registrarse">aqui</a>

		<?php

					if(isset($_GET['verif_error'])) {

						echo "<h3>Usuario o contraseña incorrecto<h3>";

					}

					if(isset($_GET['registrarse'])) {

		?>
				<br><br>
				<form method="POST" action="registrar.php">
					<input type="text" name="user" placeholder="Usuario" maxlength="20">
					<input type="password" name="password" placeholder="Contraseña" minlength="6" maxlength="10">
					<input type="submit" value="Registrarse">
				</form>

		<?php

					}//cierre if

					if(isset($_GET['registro_ok'])) {

						echo "<h3>Usuario registrado correctamente</h3>";

					}

					if(isset($_GET['registro_error'])) {

						echo "<h3>Usuario ya registrado</h3>";

					}

			}//cierre else

		?>

    
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>