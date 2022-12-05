<?php
    define("BASE_URL", "http://localhost/ClinicaDentista/");
    class Conexion{
		public function get_conexion(){
			$user = "root";
			$pass = "";
			$host = "localhost";
			$db = "soporte_sistemas";
			$conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
			return $conexion;
		}
	}
?>