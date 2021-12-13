<?php 

	class clasificacionCat extends Controllers{
		private $model; 
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new clasificacionCatModel;
		}

		public function clasificacionCat()
		{
			$data['page_tag'] = "Clasificacion de la categoria | UPTAEB";
			$data['page_title'] = "Clasificacion de la categoria SIGECOF";
			parent::getView($this,"clasificacionCat", $data);
		}
	     public static function listar(){

            foreach (clasificacionCatModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_clasificacion.'</td>
                   <td>'.$r->clasificacion.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'clasificacionCat/modificarClasificacionCat?c='.$r->id_clasificacion.'">
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
						':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'clasificacionCat/eliminar?c='.$r->id_clasificacion.'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
						':'').'
						</div>	';
           }
       }

       public function registrarClasificacionCat()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Clasificación | UPTAEB";
			$data['page_title'] = "Registrar Clasificación";
			parent::getView($this,"registrarClasificacionCat", $data);
		}

        public function guardar(){

			if (!empty($_POST['clasificacion'])) {
				$p=new clasificacionCatModel();
				$p->setid_clasificacion($_GET['c']);
            	$p->setclasificacion(strtoupper($_POST['clasificacion']));          

            	$this->model->insertar($p);

				header("location:".BASE_URL."clasificacionCat");
			}
		}

        public function actualizar(){
			if (!empty($_POST['clasificacion'] )) {
				$p=new clasificacionCatModel();
				$p->setid_clasificacion($_GET['c']);
            	$p->setclasificacion(strtoupper($_POST['clasificacion']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Clasificación de Categoría actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."clasificacionCat");
			}

		}

		public function modificarClasificacionCat(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Clasificación | UPTAEB";
			$data['page_title'] = "Modificar Clasificación";
			parent::getView($this,"modificarClasificacionCat", $data);
		}


		public function eliminar(){
             echo $_GET['c'] ;
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Clasificación de Categoría eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."clasificacionCat");
			#header("location:".BASE_URL."clasificacionCat);
   		}

		
	}

?>