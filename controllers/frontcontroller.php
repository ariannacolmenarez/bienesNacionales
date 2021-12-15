<?php
    
    if(file_exists("libraries/core/load.php")){
		require_once("libraries/core/load.php");
	}else{
		die("<script>document.location.href='error404';</script>");
	}
	class frontController{

		private $url;
		private $direccion;
		private $controlador;

		public function __construct(){
			if (!empty($_GET)) {
                $this->url = $_GET["url"];
				$this->Validar_URL(); 
            }else{
                require_once "controllers/login.php";
                $controlador= new login();
                call_user_func(array($controlador,"login"));
            }	
		}

		private function Validar_URL(){
			$url = preg_match_all("/^[a-zA-Z0-9-@\/.=:_#$ ]{1,700}$/",$this->url);
			if($url == 1 && isset($_SESSION['bn_usuario'])){
                
                $controlador = $this->url;
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
				$this->Cargar_Pagina($controller,$method,$params); 
			}
		}

		private function Cargar_Pagina($controller,$method,$params){

            if(file_exists("controllers/".$controller.".php")){
                
                require_once("controllers/".$controller.".php");
                $controller = new $controller();
                if (method_exists($controller, $method)) {
                    $controller->{$method}($params);
                }
            }else{
                die("<script>document.location.href='error404';</script>");
            }	
		}

	}
	


?>