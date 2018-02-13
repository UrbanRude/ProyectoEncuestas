<?php 
	//require_once '../Models/usuarioModel.php';
	/**
	* 	CONTROLADOR PARA EL LOGIN DEL USUARIO
	*/
	//SDLFKDFK
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

		public function resgistarUsuarioController($nombreController,$appController,$ocupacionController,$correoController,$passwordController){
			$respuestaModel = usuarioModel::registrarUsuarioModel($nombreController,$appController,$ocupacionController,$correoController,$passwordController);
			return $respuestaModel;
		}

		public function validarUsuarioController($emailController){
			$respuestaModel = usuarioModel::validarEmailModel($emailController);
			if (count($respuestaModel['correo'])>0) {
					echo 0;
				}else{
					echo 1;
				}
		}
	}

	class loginAjax	extends UsuarioController
	{
		public function consultarUsuario($usuarioLogin,$passLogin){
			$respuestaController = UsuarioController::consularUsuarioController($usuarioLogin,$passLogin);
			echo $respuestaController;
		}

		public function resgistarUsuario($nombre,$app,$ocupacion,$correo,$password){
			$respuestaController = UsuarioController::resgistarUsuarioController($nombre,$app,$ocupacion,$correo,$password);
			echo $respuestaController;
		}

		public function validarEmail($email){
			$respuestaController = UsuarioController::validarUsuarioController($email);
			echo $respuestaController;
		}

	}

	switch ($_GET['action']) {
		case '1':
				if (isset($_POST['p1']) && isset($_POST['p2'])) {
					$loginAjax = new loginAjax();
					$loginAjax->consultarUsuario($_POST['p1'],$_POST['p2']);
				}
			break;
		case '2':
					$loginAjax = new loginAjax();
					$loginAjax->resgistarUsuario($_POST['nameUser'],$_POST['appUser'],$_POST['ocupacionUser'],$_POST['emailUser'],$_POST['passUser']);
			break;
		case '3':	
					$loginAjax = new loginAjax();
					$loginAjax->validarEmail($_POST['p1']);
			break;
		default:
			# code...
			break;
	}
 ?>