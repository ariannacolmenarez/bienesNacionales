<?php 
	
	class cargos extends Load{
        private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
            $this->model = new cargosModel;
		}

		public function cargos()
		{
			$data['page_tag'] = "Cargos | UPTAEB";
			$data['page_title'] = "Cargos";
			parent::getView($this,"cargos", $data);
		}

		public static function listar(){

            foreach (cargosModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_cargo.'</td>
                   <td>'.$r->cargo.'</td>
                       <td><div class="row">
						'. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'cargos/modificarCargos?c='.$r->id_cargo.'">
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
						':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'cargos/eliminar?c='.$r->id_cargo.'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
						':'').'
						</div>	';
           }
       }

       public function registrarCargos()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Cargos | UPTAEB";
			$data['page_title'] = "Registrar Cargos";
			parent::getView($this,"registrarCargos", $data);
		}

        public function guardar(){

			if (!empty($_POST['cargo'])) {
			
				$p=new cargosModel();
            	$p->setcargo(strtoupper($_POST['cargo']));          

            	$this->model->insertar($p);
				
				header("location:".BASE_URL."cargos");
			}
		}

        public function actualizar(){
			if (!empty($_POST['cargo'] )) {

				$p=new cargosModel();
				$p->setid_cargo($_GET['c']);
            	$p->setcargo(strtoupper($_POST['cargo']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Cargo actualizado correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."cargos");
			}

		}

		public function modificarCargos(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Cargos | UPTAEB";
			$data['page_title'] = "Modificar Cargos";
			parent::getView($this,"modificarCargos", $data);
		}


		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Cargo eliminado correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."cargos");
   		}

		
	}

?>