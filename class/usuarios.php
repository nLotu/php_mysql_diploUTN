<?php

	class Usuarios {
		
		private $nombre;
		private $apellido;
		private $edad;

		function __construct($nom, $ape, $ed) {
			
			$this->nombre = $nom;
			$this->apellido = $ape;
			$this->edad = $ed;
		
		}

		function imprime_caracteristicas() {
			
			echo "<p><strong>Nombre: </strong>".$this->nombre."</p>";
			echo "<p><strong>Apellido: </strong>".$this->apellido."</p>";
			echo "<p><strong>Edad: </strong>".$this->edad."</p>";
		
		}
	
	}

?>