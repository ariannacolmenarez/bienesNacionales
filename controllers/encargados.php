<?php 

	class encargados extends Load{
		
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Encargados", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new encargadosModel;
		}

		public function encargados()
		{
			$data['page_tag'] = "Encargados | UPTAEB";
			$data['page_title'] = "Encargados";
			parent::getView($this,"encargados", $data);
			
		}

		public static function listar(){

			 foreach (encargadosModel::listar() as $r){
			echo '	<tr>
					<td>'.$r->nombre.'</td>
					<td>'.$r->apellido.'</td>
					<td>'.$r->cargo.'</td>
					<td>'.$r->cedula.'</td>
					<td>'.$r->telefono.'</td>
					<td><div class="row">
						'. (in_array("Modificar Encargados", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'encargados/modificarEncargado?c='.$r->id_encargado.'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
							<i class="fas fa-pencil-alt"></i>
						</button></a>
						
						':'').'
					   
					   	'. (in_array("Eliminar Encargados", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'encargados/eliminar?c='.$r->id_encargado.'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Editar" >
							<i class="fas fa-trash-alt"></i>
						</button></a>
						
						':'').'
						</div>	';
			}
		}

		public function registrarEncargados()
		{
			if(!in_array("Crear Encargados", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Encargados | UPTAEB";
			$data['page_title'] = "Registrar Encargados";
			parent::getView($this,"registrarEncargado", $data);
		}

		public function guardar(){

			if (!empty($_POST['nombre'] && $_POST['apellido'] && $_POST['cedula'] && $_POST['cargo'])) {
			
				$p=new encargadosModel();
            	$p->setnombre(strtoupper($_POST['nombre']));
            	$p->setapellido(strtoupper($_POST['apellido']));            
            	$p->setid_cargo($_POST['cargo']);
            	$p->setcedula($_POST['cedula']);
				if (isset($_POST['telefono'])) {
					$p->settelefono($_POST['telefono']);
				}
            	
            	$this->model->insertar($p);

				header("location:".BASE_URL."encargados");
			}
		}

		public function actualizar(){
			if (!empty($_POST['nombre'] || $_POST['apellido'] || $_POST['cedula'] || $_POST['cargo'] || $_POST['telefono'])) {

				$p=new encargadosModel();
				$p->setid_encargado($_GET['c']);
            	$p->setnombre(strtoupper($_POST['nombre']));
            	$p->setapellido(strtoupper($_POST['apellido']));            
            	$p->setid_cargo($_POST['cargo']);
            	$p->setcedula($_POST['cedula']);
				if (isset($_POST['telefono'])) {
					$p->settelefono($_POST['telefono']);
				}
            	
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Encargado actualizado correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."encargados");
			}

		}

		public function modificarEncargado(){
			if(!in_array("Modificar Encargados", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Encargados | UPTAEB";
			$data['page_title'] = "Modificar Encargados";
			parent::getView($this,"modificarEncargado", $data);
		}

		public function selected($id){
			$p=new encargadosModel;
			foreach ($p->select() as $r){
				if ($r->id_cargo == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->cargo.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_cargo.'">'.$r->cargo.'</option>';
				}
			};
		}

		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Encargado eliminado correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."encargados");
			
   		}

	}

?>