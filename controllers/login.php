<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

	require ('./assets/phpmailer/Exception.php');
	require ('./assets/phpmailer/PHPMailer.php');
	require ('./assets/phpmailer/SMTP.php');

	class login extends Load{
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
					if(!verificarContrasena($clave, $resp->clave)){
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
					$_SESSION['bn_imagen'] = $resp->imagen;
					$_SESSION['bn_permisos'] = $permisos;
					$_SESSION['bn_rol'] = $resp->id_rol;
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
		public function recuperar(){

			$logitudPass = 6;
			$miPassword = substr( md5(microtime()), 1, $logitudPass);
			$clave = strtoupper($miPassword);

			$correo = trim($_POST['email']);
			$sql= "SELECT COUNT(*) FROM usuarios where correo = '$correo' and estado = '1'";
            $desc=Conexion::conect()->prepare($sql);
            $desc->execute();
            $cantidad=$desc->fetchColumn();

            if ($cantidad == 0) {
				$data = null;
			}else{
				$pass=encriptarContrasena($clave);   
				$updateClave = ("UPDATE usuarios SET clave ='$pass' WHERE correo ='$correo' ");
				$res=Conexion::conect()->prepare($updateClave);
            	$res->execute();
				$mail = new PHPMailer(true);
            
				try {
					
					$mail->SMTPDebug = 0;                      
					$mail->isSMTP();                                           
					$mail->Host       = 'smtp.gmail.com';                    
					$mail->SMTPAuth   = true;                                  
					$mail->Username   = 'aripaocol@gmail.com';                    
					$mail->Password   = 'ksyxohbvrsuqfqms';                               
					$mail->SMTPSecure = 'ssl';         
					$mail->Port       = 465;   
					$mail->CharSet = 'UTF-8';                              

					$mail->setFrom($mail->Username, 'Bienes Nacionales');
					$mail->addAddress($correo);     
					$mail->addReplyTo($mail->Username, 'Información');
					$mail->isHTML(true);                                  
					$mail->Subject = 'Recuperación de Acceso - Bienes Nacionales';
					$mail->Body    = '<h1>Recuperar Contraseña</h1><br>
							<h3>Tu nueva clave de acceso al sistema es: </h3><h5>'.$clave.'</h5>
							<p> Regresa al Login del sistema para iniciar sesión utilizando la nueva clave proporcionada</p><br>
							<h3><a href="'.BASE_URL.'">Iniciar Sesión</a></h3>';
					$mail->send();

				} catch (Exception $e) {
					
					echo $e;
				}
				$data=true;
            } 
			
			print json_encode($data);
		}

		
	}

?>