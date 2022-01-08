<?php 

	class clasificacionDep extends Load{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new clasificacionDepModel;
		}

		public function clasificacionDep()
		{
			$data['page_tag'] = "Clasificacion de la dependencia | UPTAEB";
			$data['page_title'] = "Clasificacion de la dependencia";
			parent::getView($this,"clasificacionDep", $data);
		}

		public static function listar(){

            foreach (clasificacionDepModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_clasificacion.'</td>
                   <td>'.$r->clasificacion.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'clasificacionDep/modificarClasificacionDep?c='.builder::encriptar($r->id_clasificacion).'" >
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
						':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'clasificacionDep/eliminar?c='.builder::encriptar($r->id_clasificacion).'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
						':'').'
						</div>	';
           }
       }

       public function registrarClasificacionDep()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Clasificación | UPTAEB";
			$data['page_title'] = "Registrar Clasificación";
			parent::getView($this,"registrarClasificacionDep", $data);
		}

        public function guardar(){

			if (!empty($_POST['clasificacionDep'])) {
			
				$p=new clasificacionDepModel();
            	$p->setclasificacionDep(strtoupper($_POST['clasificacionDep']));          

            	$this->model->insertar($p);

				header("location:".BASE_URL."clasificacionDep");
			}
		}

        public function actualizar(){
			if (!empty($_POST['clasificacionDep'] )) {

				$p=new clasificacionDepModel();
				$id=builder::desencriptar($_GET['c']);
				$p->setid_clasificacionDep($id);
            	$p->setclasificacionDep(strtoupper($_POST['clasificacionDep']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Clasificación de Dependencia actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."clasificacionDep");
			}

		}

		public function modificarClasificacionDep(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Clasificación | UPTAEB";
			$data['page_title'] = "Modificar Clasificación";
			parent::getView($this,"modificarClasificacionDep", $data);
		}


		public function eliminar(){
             
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Clasificación de Dependencia eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."clasificacionDep");
   		}

		
	}

?>