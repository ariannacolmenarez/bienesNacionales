<?php 

	class locacion extends Load{
		
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new locacionModel;
		}

		public function locacion()
		{
			$data['page_tag'] = "Locación | UPTAEB";
			$data['page_title'] = "Locación";
			parent::getView($this,"locacion", $data);
		}

		public static function listar(){

            foreach (locacionModel::listar() as $r){
           echo '	<tr>
		   <td>'.$r->id_locacion.'</td>
		   <td>'.$r->locacion.'</td>
		   <td><div class="row">
			'. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
			   <a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'locacion/modificarLocacion?c='.builder::encriptar($r->id_locacion).'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
				   <i class="fas fa-pencil-alt"></i>
			   </button></a>
			   ':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
				<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'locacion/eliminar?c='.builder::encriptar($r->id_locacion).'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Editar" >
					<i class="fas fa-trash-alt"></i>
				</button></a>
				':'').'
				</div>	';
           }
       }

       public function registrarLocacion()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Locación | UPTAEB";
			$data['page_title'] = "Registrar Locación";
			parent::getView($this,"registrarLocacion", $data);
		}

        public function guardar(){

			if (!empty($_POST['locacion'])) {
			
				$p=new locacionModel();
            	$p->setlocacion(strtoupper($_POST['locacion']));          

            	$this->model->insertar($p);

				header("location:".BASE_URL."locacion");
			}
		}

        public function actualizar(){
			if (!empty($_POST['locacion'] )) {

				$p=new locacionModel();
				$id=builder::desencriptar($_GET['c']);
				$p->setid_locacion($id);
            	$p->setlocacion(strtoupper($_POST['locacion']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Locación actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."locacion");
			}

		}

		public function modificarLocacion(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Locacion | UPTAEB";
			$data['page_title'] = "Modificar Locacion";
			parent::getView($this,"modificarLocacion", $data);
		}


		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Locación eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."locacion");
   		}
		
	}

?>