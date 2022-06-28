<?php
	class Base_Datos {

		private $conexion;


		function __construct($servidor, $usuario, $clave, $base) {

			$this->conexion = new mysqli($servidor, $usuario, $clave, $base);

		}

		public function manipularBase($codigo_sql) {

			$instruccion_sql = strtoupper(substr($codigo_sql, 0, 6));

			switch($instruccion_sql) {

				case 'INSERT':
				case 'DELETE':
				case 'UPDATE':
					$consulta = $this->conexion->query($codigo_sql);
					break;
				case 'SELECT':
					$consulta = $this->conexion->query($codigo_sql);
					
					while($registro = $consulta->fetch_assoc()){

						$listar_info[] = $registro;

					}

					return $listar_info;
					break;
			}

		}
	}

?>