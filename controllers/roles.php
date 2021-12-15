<?php 
	require_once('./models/modulosModel.php');
	class roles extends Load{
		private $model;
		
		public function __construct()
		{
			if(!in_array("Consultar Seguridad", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new rolesModel;
			
		}

		public function roles()
		{
			$data['page_tag'] = "Roles | UPTAEB";
			$data['page_title'] = " Gestionar Roles";
			parent::getView($this,"roles", $data);
		}
        public function permisos()
		{
			if(!in_array("Modificar Seguridad", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$p=new rolesModel();
			$rol_id = $_GET['c'];
			$permisos = $p->obtenerPermisos($rol_id);
			$data['page_tag'] = "Permisos | UPTAEB";
			$data['page_title'] = "Permisos";
			$data['rol_id'] = $rol_id;
			$data['permisos'] = $permisos;
			parent::getView($this,"permisos", $data);
		}

		public function registrarRoles()
		{
			if(!in_array("Crear Seguridad", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Roles | UPTAEB";
			$data['page_title'] = "Registrar Roles";
			parent::getView($this,"registrarRoles", $data);
		}

		public function listar(){

			foreach (rolesModel::listar() as $r){
		   echo '	<tr>
				   <td>'.$r->id_rol.'</td>
				   <td>'.$r->rol.'</td>
				   <td>'.$r->descripcion.'</td>
				   <td><div class="row">
				   '. (in_array("Modificar Seguridad", $_SESSION['bn_permisos']) ? '
					   <a class="col-lg-2 col-md-3 " href="'.BASE_URL.'roles/modificarRoles?c='.$r->id_rol.'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
						   <i class="fas fa-pencil-alt"></i>
					   </button></a>
					   <a class="col-lg-2 col-md-3" href="'.BASE_URL.'roles/eliminar?c='.$r->id_rol.'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
						   <i class="fas fa-trash-alt"></i>
					   </button></a>
					   ':'').'
					   
					   	'. (in_array("Eliminar Seguridad", $_SESSION['bn_permisos']) ? '
					   <a class="col-lg-2 col-md-3" href="'.BASE_URL.'roles/permisos?c='.$r->id_rol.'"  ><button  class=" btn btn-dark btn-sm mx-1" title="permisos" >
						   <i class="fas fa-key"></i>
					   </button></a>
					   </div>
					   ':'').'
					   </div>	';
		   }
	   }

	   public function guardar(){
			
		   if (!empty($_POST['nombre'])) {
			   $p=new rolesModel();
			   $p->setrol(strtoupper($_POST['nombre']));
			   if (isset($_POST['descripcion'])) {
				   $p->setdescripcion(strtoupper($_POST['descripcion']));
			   }
			   
			   $this->model->insertar($p);
			   $_SESSION["mensaje"] = "¡Rol registrado correctamente!";
				$_SESSION["tipo_mensaje"] = "success";
			   header("location:".BASE_URL."roles");
		   }
	   }

	   public function actualizar(){
		  
		   if (!empty($_POST['nombre'] )) {
 				
			   $p=new rolesModel();
			   $p->setid_rol($_GET['c']);
			   $p->setrol(strtoupper($_POST['nombre']));
			   if (isset($_POST['descripcion'])) {
				   $p->setdescripcion($_POST['descripcion']);
			   }
			   
			   $this->model->modificar($p);
			   $_SESSION["mensaje"] = "¡Rol actualizado correctamente!";
			   $_SESSION["tipo_mensaje"] = "success";
			   header("location:".BASE_URL."roles");
		   }

	   }

	   	public function modificarRoles(){
			if(!in_array("Modificar Seguridad", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
		   
		   $data['page_tag'] = "Modificar Roles | UPTAEB";
		   $data['page_title'] = "Modificar Roles";
		   parent::getView($this,"modificarRoles", $data);
	   	}

	   	public function eliminar(){
			 
		   $this->model->eliminar($_GET['c']);
		   $_SESSION["mensaje"] = "¡Rol eliminado correctamente!";
		   $_SESSION["tipo_mensaje"] = "success";
		   header("location:".BASE_URL."roles");
		   
		}

		public static function listar_permisos(){
            foreach (modulosModel::listar() as $r){
           echo '	<tr class="text-center">
                   		<td>'.$r->id_modulo.'</td>
                   		<td>'.$r->nombre.'</td>
				   		<td><input  type="hidden" name="id" value="'.$r->id_modulo.'">
				   			<label class="switchBtn">
					   			<input type="checkbox" name="permisos[]" value="1">
					   			<div class="slide round">ON</div>
				   			</label>
				   		</td>
				   		<td>
				   			<label class="switchBtn">
					   			<input type="checkbox" name"permisos[]" value="2">
					   			<div class="slide round">ON</div>
				   			</label>
				   		</td>
				   		<td>
				   			<label class="switchBtn">
					   			<input type="checkbox" name="permisos[]" value="3">
								<div class="slide round">ON</div>
				   			</label>
				   		</td>
				   		<td>
				   			<label class="switchBtn" name="permisos[]" value="4">
					   			<input type="checkbox">
					   			<div class="slide round">ON</div>
				   			</label>
				   		</td>
			   		</tr>	';
					   	   
           }
       	}

		public function guardarPermisos(){
			
			if(isset($_POST)){
				$p = new rolesModel();
				$rol_id = $_GET['c'];
				$p->eliminarRol_Permiso($rol_id);
				foreach ($_POST['permisos'] as $key => $permiso_id) {
					$p->insertarRol_Permiso($rol_id, $permiso_id);
				}
				header("location:".BASE_URL."roles");
			}
			else{
				header("location:".BASE_URL);
			}
			
		}

	}

?>