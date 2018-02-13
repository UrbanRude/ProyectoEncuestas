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

		public function registrarUsuarioModel($nombre,$app,$ocupacion,$correo,$password){
			$sql = "INSERT INTO en_usuarios(nombre,app,ocupacion,correo,password) VALUES (:p1,:p2,:p3,:p4,:p5)";
			$stmt = Conexion::conectar()->prepare($sql);
			$stmt->bindParam(":p1",$nombre,PDO::PARAM_STR);
			$stmt->bindParam(":p2",$app,PDO::PARAM_STR);
			// CAMBIAR EL VALOR DE OCUPACION SI SE CAMBIA A LLAVE FORANEA
			$stmt->bindParam(":p3",$ocupacion,PDO::PARAM_STR);
			// ===========================================================
			$stmt->bindParam(":p4",$correo,PDO::PARAM_STR);
			$stmt->bindParam(":p5",$password,PDO::PARAM_STR);
			if ($stmt->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function validarEmailModel($emailModel){
			$sql = "SELECT correo FROM en_usuarios WHERE correo = :p1";
			$stmt = Conexion::conectar()->prepare($sql);
			$stmt->bindParam(":p1",$emailModel,PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch();	
		}
	}
 ?>