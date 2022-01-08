<?php 

	class denominacion extends Load{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new denominacionModel;
		}

		public function denominacion()
		{
			$data['page_tag'] = "Denominación | UPTAEB";
			$data['page_title'] = "Denominación";
			parent::getView($this,"denominacion", $data);
		}
		
		static public function listar(){
			
            foreach (denominacionModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_denominacion.'</td>
                   <td>'.$r->denominacion.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
                       <a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'denominacion/modificardenominacion?c='.builder::encriptar($r->id_denominacion).'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
                           <i class="fas fa-pencil-alt"></i>
                       </button></a>
					   ':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'denominacion/eliminar?c='.builder::encriptar($r->id_denominacion).'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
							<i class="fas fa-trash-alt"></i>
						</button></a>
						':'').'
						</div>	';
           }
       }

       public function registrardenominacion()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar denominacion | UPTAEB";
			$data['page_title'] = "Registrar denominacion";
			parent::getView($this,"registrardenominacion", $data);
		}

        public function guardar(){

			if (!empty($_POST['denominacion'])) {
				$p=new denominacionModel();
				$p->setid_denominacion($_GET['c']);
            	$p->setdenominacion(strtoupper($_POST['denominacion']));          
            	$this->model->insertar($p);

				header("location:".BASE_URL."denominacion");
			}
		}

        public function actualizar(){
			if (!empty($_POST['denominacion'] )) {
				$p=new denominacionModel();
				$id=builder::desencriptar($_GET['c']);
				$p->setid_denominacion($id);
            	$p->setdenominacion(strtoupper($_POST['denominacion']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Denominación actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."denominacion");
			}

		}

		public function modificardenominacion(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificardenominacion | UPTAEB";
			$data['page_title'] = "Modificar denominacion";
			parent::getView($this,"modificardenominacion", $data);
		}


		public function eliminar(){
             echo $_GET['c'] ;
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Denominación eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."denominacion");
			#header("location:".BASE_URL."denominacion);
   		}

		
	}

?>