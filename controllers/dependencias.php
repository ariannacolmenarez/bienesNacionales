<?php 

	class dependencias extends Load{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new dependenciasModel;
		}

		public function dependencias()
		{
			$data['page_tag'] = "Dependencias | UPTAEB";
			$data['page_title'] = "Dependencias";
			parent::getView($this,"dependencias", $data);
		}

		public static function listar(){

			foreach (dependenciasModel::listar() as $r){
		   echo '	<tr>
				   <td>'.$r->codigo_dependencia.'</td>
				   <td>'.$r->clasificacion.'</td>
				   <td>'.$r->dependencia.'</td>
				   <td>'.$r->locacion.'</td>
				   <td>'.$r->fecha_chequeo.'</td>
				   <td>'.$r->cedula.'</td>
				   <td><div class="row">
				   		'. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'dependencias/modificarDependencias?c='.$r->codigo_dependencia.'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
							<i class="fas fa-pencil-alt"></i>
						</button></a>
						':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
						   <a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'dependencias/eliminar?c='.$r->codigo_dependencia.'" onclick="return confirmar();"><button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
						   		<i class="fas fa-trash-alt"></i>
					   		</button></a>
						   ':'').'
				   		</div>
					';
		   }
	   }

		public function registrarDependencias()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Dependencias | UPTAEB";
			$data['page_title'] = "Registrar Dependencias";
			parent::getView($this,"registrarDependencias", $data);
		}

		public function guardar(){
			if (!empty($_POST['nombre'] && $_POST['clasificacion'] && $_POST['cedula'] && $_POST['chequeo'])) {

			$p=new dependenciasModel();
            $p->setcodigo(intval($_POST['codigo']));
            $p->setclasificacion($_POST['clasificacion']);            
            $p->setnombre(strtoupper($_POST['nombre']));
            $p->setlocacion($_POST['locacion']);
            $p->setobservacion(strtoupper($_POST['observacion']));
			if (isset($_POST['tomaFisica'])) {
				$p->settomaFisica(strtoupper($_POST['tomaFisica']));
			}
			if (isset($_POST['edicion'])) {
				$p->setedicion(strtoupper($_POST['edicion']));
			}
			if (isset($_POST['documentacion'])) {
				$p->setdocumentacion(strtoupper($_POST['documentacion']));
			}
			$p->setid_encargado($_POST['cedula']);
			$p->setchequeo($_POST['chequeo']);
            $this->model->insertar($p);

			header("location:".BASE_URL."dependencias");
		}

		}

		public function modificarDependencias(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Dependencias | UPTAEB";
			$data['page_title'] = "Modificar Dependencias";
			parent::getView($this,"modificarDependencias", $data);
		}

		public function actualizar(){
			if (!empty($_POST['clasificacion'] || $_POST['nombre'] || $_POST['locacion'] || $_POST['observacion'] || $_POST['cedula'])) {

				$p=new dependenciasModel();
				$p->setcodigo($_GET['c']);
            	$p->setclasificacion($_POST['clasificacion']);
            	$p->setnombre(strtoupper($_POST['nombre']));            
            	$p->setobservacion(strtoupper($_POST['observacion']));
            	$p->setlocacion($_POST['locacion']);
            	$p->setid_encargado($_POST['cedula']);
				if (isset($_POST['tomaFisica'])) {
					$p->settomaFisica(strtoupper($_POST['tomaFisica']));
				}
				if (isset($_POST['edicion'])) {
					$p->setedicion(strtoupper($_POST['edicion']));
				}
				if (isset($_POST['documentacion'])) {
					$p->setdocumentacion(strtoupper($_POST['documentacion']));
				} 
				$p->setchequeo($_POST['chequeo']); 

				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Dependencia actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."dependencias");
			}

		}

		public function select_encargado($id){
			$p=new dependenciasModel;
			foreach ($p->select("encargados") as $r){
				if ($r->id_encargado == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->nombre.' '.$r->apellido.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_encargado.'">'.$r->nombre.' '.$r->apellido.'</option>';
				}
			};
		}

		public function select_clasificacion($id){
			$p=new dependenciasModel;
			foreach ($p->select("clasificacion_dep") as $r){
				if ($r->id_clasificacion == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->clasificacion.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_clasificacion.'">'.$r->clasificacion.'</option>';
				}
			};
		}

		public function select_locacion($id){
			$p=new dependenciasModel;
			foreach ($p->select("locacion") as $r){
				if ($r->id_locacion == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->locacion.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_locacion.'">'.$r->locacion.'</option>';
				}
			};
		}

		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Dependencia eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."dependencias");
			
   		}

	}

?>