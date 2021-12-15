<?php 

	class tipoReasignacion extends Load{
		private $model; 
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new tipoReasignacionModel;
		}

		public function tipoReasignacion()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Tipo Reasignación | UPTAEB";
			$data['page_title'] = "Tipo Reasignación";
			parent::getView($this,"tipoReasignacion", $data);
		}

		static public function listar(){

            foreach (tipoReasignacionModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_tipo.'</td>
                   <td>'.$r->tipo.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
                       <a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'tipoReasignacion/modificartipoReasignacion?c='.$r->id_tipo.'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
                           <i class="fas fa-pencil-alt"></i>
                       </button></a>
					   ':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'tipoReasignacion/eliminar?c='.$r->id_tipo.'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
							<i class="fas fa-trash-alt"></i>
						</button></a>
						':'').'
						</div>	';
           }
       }

       public function registrartipoReasignacion()
		{
			$data['page_tag'] = "Registrar tipoReasignacion | UPTAEB";
			$data['page_title'] = "Registrar tipoReasignacion";
			parent::getView($this,"registrartipoReasignacion", $data);
		}

        public function guardar(){

			if (!empty($_POST['tipo'])) {
				$p=new tipoReasignacionModel();
				$p->setid_tipo($_GET['c']);
            	$p->settipo(strtoupper($_POST['tipo']));          

            	$this->model->insertar($p);

				header("location:".BASE_URL."tipoReasignacion");
			}
		}

        public function actualizar(){
			if (!empty($_POST['tipoReasignacion'] )) {
				$p=new tipoReasignacionModel();
				$p->setid_tipo($_GET['c']);
            	$p->settipo(strtoupper($_POST['tipoReasignacion']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Tipo de Reasignación actualizado correctamente!";
			   $_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."tipoReasignacion");
			}

		}

		public function modificartipoReasignacion(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar tipoReasignacion | UPTAEB";
			$data['page_title'] = "Modificar tipoReasignacion";
			parent::getView($this,"modificartipoReasignacion", $data);
		}


		public function eliminar(){
             echo $_GET['c'] ;
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Tipo de Reasignación eliminado correctamente!";
		   $_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."tipoReasignacion");

   		}

		
	}

?>