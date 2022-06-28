<?php

	class Carrito {

		private $bd;


		function __construct($base) {

			$this->bd = $base;

		}

		public function cargarProducto($prod, $desc, $pre) {

			$query = $this->bd->manipularBase("INSERT INTO compras VALUES(DEFAULT, '$prod', '$desc', $pre)");
			return $query;

		}

		public function eliminarProducto($cod) {

			$query = $this->bd->manipularBase("DELETE FROM compras WHERE codigo = $cod");
			return $query;

		}

		public function mostrarCarrito() {

			$query = $this->bd->manipularBase("SELECT * FROM compras");
			return $query;

		}

	}

?>