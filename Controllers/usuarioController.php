<?php 
	//require_once '../Models/usuarioModel.php';
	/**
	* 	CONTROLADOR PARA EL LOGIN DEL USUARIO
	*/
	require_once '../Models/usuarioModel.php';
	class UsuarioController
	{
		public function consularUsuarioController($userLogin,$passLogin){
			$respuestaModel = UsuarioModel::consultarUsuarioModel($userLogin,$passLogin);
			if($respuestaModel['correo'] == $userLogin && $respuestaModel['password'] == $passLogin){
				echo "1";
			}else{
				echo "2";
			}
		}
	}

	class loginAjax	extends UsuarioController
	{
		public function consultarUsuario($usuarioLogin,$passLogin){
			$respuestaController = UsuarioController::consularUsuarioController($usuarioLogin,$passLogin);
			echo $respuestaController;
		}
	}

	if (isset($_POST['p1']) && isset($_POST['p2'])) {
		$loginAjax = new loginAjax();
		$loginAjax->consultarUsuario($_POST['p1'],$_POST['p2']);
	}

 ?>