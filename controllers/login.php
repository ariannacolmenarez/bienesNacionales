<?php 

	class login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			if(isset($_SESSION['bn_usuario'])){
				header("location:".BASE_URL."inicio");
			}
            if($_POST){
				require_once('models/usuariosModel.php');
				$iniciar = true;
				$mensaje = "";
				$p = new usuariosModel;
				$p->setnombre(strtoupper($_POST['usuario']));
				$p->setclave(strtoupper($_POST['clave']));  
				$clave = $p->getclave();
				$resp = $p->verificarUsuario();
				if($resp){
					if($clave != $resp->clave){
						$mensaje = "La Contraseña es incorrecta";
						$iniciar = false;
					}
				}
				else{
					$mensaje = "El Usuario o Correo es incorrecto";
					$iniciar = false;
				}
				if($iniciar){
					require_once('models/rolesModel.php');
					$r = new rolesModel;
					$permisos = $r->obtenerPermisos($resp->id_rol);
					$_SESSION['bn_id_usuario'] = $resp->id_usuario;
					$_SESSION['bn_usuario'] = $resp->nombre;
					$_SESSION['bn_correo'] = $resp->correo;
					$_SESSION['bn_permisos'] = $permisos;
					header("location:".BASE_URL."inicio");
				}
				else{
					$data['page_tag'] = "Login";
					$data['page_title'] = "Bienvenido(a)";
					$data['message'] = $mensaje;
					parent::getView($this,"login", $data);
				}
			}
			else{
				$data['page_tag'] = "Login";
				$data['page_title'] = "Bienvenido(a)";
				parent::getView($this,"login", $data);
			}
		}
	}

?>