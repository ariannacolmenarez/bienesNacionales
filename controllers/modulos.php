<?php 

	class modulos extends Controllers{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new modulosModel;
		}

		public function modulos()
		{
			$data['page_tag'] = "Módulos | UPTAEB";
			$data['page_title'] = "Módulos";
			parent::getView($this,"modulos", $data);
		}

		public static function listar(){

            foreach (modulosModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->nombre.'</td>
                   <td>'.$r->descripcion.'</td>
                       ';
        //    echo '	<tr class="text-center">
        //            <td>'.$r->nombre.'</td>
        //            <td>'.$r->descripcion.'</td>
        //                <td><div class="row">
        //                <div class="col-2">
        //                <a  href="#"><button disabled class=" btn btn-warning btn-sm mx-1" title="Editar" >
        //                    <i class="fas fa-pencil-alt"></i>
        //                </button></a>
        //                </div>
        //                <div class="col-2">
		// 				<a  href="#"><button disabled class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
		// 					<i class="fas fa-trash-alt"></i>
		// 				</button></a>
		// 				</div>
		// 				</div>	';
           }
       }

       public function registrarModulos()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Modulos | UPTAEB";
			$data['page_title'] = "Registrar Modulos";
			parent::getView($this,"registrarModulos", $data);
		}

        public function guardar(){

			if (!empty($_POST['nombre'] && $_POST['descripcion'] )) {
			
				$p=new modulosModel();
            	$p->setnombre(strtoupper($_POST['nombre']));
            	$p->setdescripcion(strtoupper($_POST['descripcion']));            

            	$this->model->insertar($p);
				header("location:".BASE_URL."modulos");
			}
		}

        public function actualizar(){
			if (!empty($_POST['nombre'] || $_POST['descripcion'] )) {

				$p=new modulosModel();
				$p->setid_modulo($_GET['c']);
            	$p->setnombre(strtoupper($_POST['nombre']));
            	$p->setdescripcion(strtoupper($_POST['descripcion']));            

				$this->model->modificar($p);
				header("location:".BASE_URL."modulos");
			}

		}

		public function modificarModulos(){
			
			$data['page_tag'] = "Modificar Módulos | UPTAEB";
			$data['page_title'] = "Modificar Módulos";
			parent::getView($this,"modificarModulos", $data);
		}


		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			header("location:".BASE_URL."modulos");
   		}


	}

?>