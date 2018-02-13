<?php 
	/**
	*  CLASE PARA GENERAR CONEXION
	*/
	class Conexion
	{
		public function Conectar(){
			$link = new PDO("mysql:host=localhost;dbname=db_encuestas","root","R00tCer*");
		}
	}

 ?>