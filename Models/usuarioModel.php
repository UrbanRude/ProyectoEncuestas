<?php 
	require_once 'conexion.php';

	/**
	*  MODELO DEL USUARIO
	*/
	class UsuarioModel extends Conexion
	{
		public function consultarUsuarioModel($usuarioLogin,$passLogin){
			$sql = "SELECT correo,password FROM en_usuarios WHERE correo = :p1 AND password = :p2 ";
			$stmt = Conexion::conectar()->prepare($sql);
			$stmt->bindParam(":p1",$usuarioLogin);
			$stmt->bindParam(":p2",$passLogin);
			$stmt->execute();
			return $stmt->fetch();	
		}
	}
 ?>