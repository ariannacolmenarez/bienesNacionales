<?php 

	class usuarios extends Load{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Usuarios", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new usuariosModel;
		}

		public function usuarios()
		{
			$data['page_tag'] = "Usuarios | UPTAEB";
			$data['page_title'] = "Usuarios";
			parent::getView($this,"usuarios", $data);
		}

        public function registrarUsuarios()
		{
			if(!in_array("Crear Usuarios", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Usuarios | UPTAEB";
			$data['page_title'] = "Registrar Usuarios";
			parent::getView($this,"registrarUsuarios", $data);
		}
		
		public static function listar(){
			
			
			foreach (usuariosModel::listar() as $r){
				
				if (isset($r->rol)) {
					$s=$r->rol;
				}else{$s="";}
		   echo '	<tr>
				   <td>'.$r->nombre.'</td>
				   <td>'.$r->correo.'</td>
				   <td>'. $s.'</td>
				   <td class="text-center"><img src="'.BASE_URL.$r->imagen.'" alt="" style="width: 150px;"></td>
				   <td class="text-center"><div class="row">
				   		'. (in_array("Modificar Usuarios", $_SESSION['bn_permisos']) && $r->id_usuario != 19 ? '
							<div class="col-3">
								<a href="'.BASE_URL.'usuarios/modificarUsuarios?c='.builder::encriptar($r->id_usuario).'" >
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
							</div>
						':'').'
					   
					   	'. (in_array("Eliminar Usuarios", $_SESSION['bn_permisos']) && $r->id_usuario != 19 ? '
						   <div class="col-3">
								<a  href="'.BASE_URL.'usuarios/eliminar?c='.builder::encriptar($r->id_usuario).'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
							</div>
						':'').'
				   		
				   		</div>	';
		   }
	   }

	   public function guardar(){

		   if (!empty($_POST['nombre'] && $_POST['clave'] && $_POST['correo'] && $_FILES['fotos'] && $_POST['rol'])) {
		   
			   $p=new usuariosModel();
			   $p->setnombre(strtoupper($_POST['nombre']));
			   $p->setclave(encriptarContrasena(strtoupper($_POST['clave'])));            
			   $p->setcorreo($_POST['correo']);
			   $p->setid_rol($_POST['rol']);

			   $filename = $_FILES["fotos"]["name"];
                $source   = $_FILES["fotos"]["tmp_name"];
                
                //Verificando si existe el directorio de lo contarios lo creamos el Directorio
                $directorio = "imagenes";
                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }
            
            
                $dir= opendir($directorio);
                $target_path = $directorio.'/'.$filename;
            
                if(move_uploaded_file($source, $target_path)) { 
					$p->setimagen($target_path);
					$this->model->insertar($p);
                }
                else {
                    echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                }
                closedir($dir);
				
			   	header("location:".BASE_URL."usuarios");
		   }
	   }

	   public function actualizar(){
		   if (!empty($_POST['nombre'] || $_POST['clave'] || $_POST['correo'] || $_FILES['fotos'] || $_POST['rol'])) {
				if(isset($_POST['perfil'])){
					$p=new usuariosModel();
					$p->setid_usuario($_GET['c']);
					$p->setnombre(strtoupper($_POST['nombre']));
					$p->setid_rol($_SESSION['bn_rol']);
					if(isset($_POST['clave'])){
						$p->setclave(encriptarContrasena(strtoupper($_POST['clave'])));  
					}else{
						$p->setclave($p->clave($_GET['c']));
					}      
					$p->setcorreo($_POST['correo']);
					if(isset($_POST['fotos'])){
						$name = $_FILES["fotos"]["name"];
						$source = $_FILES["fotos"]["tmp_name"];

						$directorio     = "imagenes";
						$midir          = opendir($directorio);
						$rutaLocal      = $directorio . '/' .$name;
						if (move_uploaded_file($source, $rutaLocal)) {
							$p->setimagen($rutaLocal);
						}
					}else{
						$p->setimagen($_SESSION['bn_imagen']);
					}
					$this->model->modificar($p);
					$_SESSION["mensaje"] = "¡Usuario actualizado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
					
					header("location:".BASE_URL."usuarios/perfil");
				}else{
					$p=new usuariosModel();
					$id=builder::desencriptar($_GET['c']);
					$p->setid_usuario($id);
					$p->setnombre(strtoupper($_POST['nombre']));
					$p->setclave(encriptarContrasena(strtoupper($_POST['clave'])));            
					$p->setcorreo($_POST['correo']);
					$p->setid_rol($_POST['rol']);
					
					$name = $_FILES["fotos"]["name"];
					$source = $_FILES["fotos"]["tmp_name"];

					$directorio     = "imagenes";
					$midir          = opendir($directorio);
					$rutaLocal      = $directorio . '/' .$name;
					if (move_uploaded_file($source, $rutaLocal)) {
						$p->setimagen($rutaLocal);
					}
					
					$this->model->modificar($p);
					$_SESSION["mensaje"] = "¡Usuario actualizado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
					
					header("location:".BASE_URL."usuarios"); 
				}
				
			   
		   }

	   }

	   public function modificarUsuarios(){
			if(!in_array("Modificar Usuarios", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
		   $data['page_tag'] = "Modificar Usuarios | UPTAEB";
		   $data['page_title'] = "Modificar Usuarios";
		   parent::getView($this,"modificarUsuarios", $data);
	   }

	   public function selected($id){
		   $p=new usuariosModel;
		   foreach ($p->select() as $r){
			   if ($r->id_rol == $id) {
				   echo'  <option value="'.$id.'" selected>
				   '.$r->rol.'
				   </option>';
			   }else{
			   echo'  
			   <option value="'.$r->id_rol.'">'.$r->rol.'</option>';
			   }
		   };
	   }

	   	public function eliminar(){
			 
		   $this->model->eliminar($_GET['c']);
		   $_SESSION["mensaje"] = "¡Usuario eliminado correctamente!";
		   $_SESSION["tipo_mensaje"] = "success";
		   header("location:".BASE_URL."usuarios");
		   
		}

		public function perfil()
		{
			$data['page_tag'] = "Perfil";
			$data['page_title'] = "Perfil";
			parent::getView($this,"perfil", $data);
		}		

	}

?>