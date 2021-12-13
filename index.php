<?php 
	
	require_once("config/config.php");
	require_once("helpers/helpers.php");
	require_once("libraries/core/conexion.php");
	require_once("libraries/core/controllers.php");
	require_once("libraries/core/builder.php");

	if(!isset($_SESSION)) {
		session_start();
	}

	if(!empty($_GET['url']) && isset($_SESSION['bn_usuario'])){
		$controlador = $_GET['url'];
		$arr = explode("/", $controlador);
		$controller = $arr[0];
		$method = $arr[0]; 
		$params = "";

		if (!empty($arr[1]))
		{
			if ($arr[1] != "") {
				$method = $arr[1];
			}	
		}

		if (!empty($arr[2])) 
		{
			if ($arr[2] != "") {
				$params = $arr[2];
			}
		}

		
		$controllerFile = "controllers/".$controller.".php";
		require_once($controllerFile);
		$controller = new $controller();
		if (method_exists($controller, $method)) {
			$controller->{$method}($params);
		}else{
			require_once("controllers/error.php");
		}

    }
    else{
		require_once "controllers/login.php";
        $controlador= new login();
        call_user_func(array($controlador,"login"));
    }

	
	
?>