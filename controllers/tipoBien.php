<?php 

	class tipoBien extends Load{
		
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new tipoBienModel;
		}

		public function tipoBien()
		{
			$data['page_tag'] = "Tipo Bien | UPTAEB";
			$data['page_title'] = "Tipo Bien";
			parent::getView($this,"tipoBien", $data);
		}
		static public function listar(){
			
            foreach (tipoBienModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->id_tipo.'</td>
                   <td>'.$r->tipo.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
                       <a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'tipoBien/modificartipoBien?c='.builder::encriptar($r->id_tipo).'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
                           <i class="fas fa-pencil-alt"></i>
                       </button></a>
					   ':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'tipoBien/eliminar?c='.builder::encriptar($r->id_tipo).'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Editar" >
							<i class="fas fa-trash-alt"></i>
						</button></a>
						':'').'
						</div>	';
           }
       }

       public function registrartipoBien()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar tipo | UPTAEB";
			$data['page_title'] = "Registrar tipo";
			parent::getView($this,"registrartipoBien", $data);
		}

        public function guardar(){
echo "if";
			if (!empty($_POST['tipo'])) {
				
				$p=new tipoBienModel();
				
            	$p->settipo(strtoupper($_POST['tipo']));          
            	$this->model->insertar($p);

				header("location:".BASE_URL."tipoBien");
			}
		}

        public function actualizar(){
			
			if (!empty($_POST['tipo'] )) {
				
				$p=new tipoBienModel();
				$id=builder::desencriptar($_GET['c']);
				$p->setid_tipo($id);
            	$p->settipo(strtoupper($_POST['tipo']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Tipo de Bien actualizado correctamente!";
			   $_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."tipoBien");
			}

		}

		public function modificartipoBien(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "ModificartipoBien | UPTAEB";
			$data['page_title'] = "Modificar tipo de Bien";
			parent::getView($this,"modificartipoBien", $data);
		}


		public function eliminar(){
             echo $_GET['c'] ;
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Tipo de Bien eliminado correctamente!";
		   $_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."tipoBien");
			#header("location:".BASE_URL."tipoBien);
   		}
		
	}

?>