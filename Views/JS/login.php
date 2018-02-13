<?php 
	/**
	* 
	*/
	class loginAjax	
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