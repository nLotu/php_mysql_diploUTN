<?php
	
	class Productos	{

		public $codigo;
		public $producto;
		public $descripcion;
		public $precio;
		
		function __construct($cod, $prod, $desc, $pre) {
			
			$this->codigo = $cod;
			$this->producto = $prod;
			$this->descripcion = $desc;
			$this->precio = $pre;

		}

	}

?>