<?php 

	class proveedor  extends Load{
		
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new proveedorModel;
		}

		public function proveedor()
		{
			$data['page_tag'] = "proveedor | UPTAEB";
			$data['page_title'] = "Proveedor";
			parent::getView($this,"proveedor", $data);
		}

		public static function listar(){
			
            foreach (proveedorModel::listar() as $r){

           echo '	<tr class="text-center">
                   <td>'.$r->id_proveedor.'</td>
                   <td>'.$r->nombre_prov.'</td>
                   <td>'.$r->rif.'</td>
                   <td>'.$r->direccion.'</td>
                       <td><div class="row">
					   '. (in_array("Modificar Configuracion", $_SESSION['bn_permisos']) ? '
                       <a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'proveedor/modificarproveedores?c='.builder::encriptar($r->id_proveedor).'"><button class=" btn btn-warning btn-sm mx-1" title="Editar" >
                           <i class="fas fa-pencil-alt"></i>
                       </button></a>
					   ':'').'
					   
					   	'. (in_array("Eliminar Configuracion", $_SESSION['bn_permisos']) ? '
						<a class="col-lg-2 col-md-2 col-xs-6" href="'.BASE_URL.'proveedor/eliminar?c='.builder::encriptar($r->id_proveedor).'" onclick="return confirmar();" ><button  class=" btn btn-danger btn-sm mx-1" title="Editar" >
							<i class="fas fa-trash-alt"></i>
						</button></a>
						':'').'
						</div>	';
           }
       }

       public function registrarproveedores()
		{
			if(!in_array("Crear Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "proveedores | UPTAEB";
			$data['page_title'] = "proveedores";
			parent::getView($this,"registrarproveedores", $data);
		}

        public function guardar(){
            
			if (!empty($_POST['proveedores'] && $_POST['rif'] && $_POST['direccion'])) {
				
				$p=new proveedorModel();
				
            	$p->setproveedores(strtoupper($_POST['proveedores']));
                $p->setrif(strtoupper($_POST['rif']));
                $p->setdireccion(strtoupper($_POST['direccion']));      
            	$this->model->insertar($p);

				header("location:".BASE_URL."proveedor");
			}
		}

        public function actualizar(){
			
			if (!empty( $_POST['rif'] && $_POST['direccion'] )) {
				
				$p=new proveedorModel();
				$id=builder::desencriptar($_GET['c']);
				$p->setid_proveedor($id);
            	$p->setproveedores(strtoupper($_POST['proveedores']));
                $p->setrif(strtoupper($_POST['rif']));
                $p->setdireccion(strtoupper($_POST['direccion']));
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Proveedor actualizado correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."proveedor");
			}

		}

		public function modificarproveedores(){
			if(!in_array("Modificar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificarproveedores | UPTAEB";
			$data['page_title'] = "Modificar proveedores";
			parent::getView($this,"modificarproveedores", $data);
		}


		public function eliminar(){
             echo $_GET['c'] ;
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Proveedor eliminado correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."proveedor");
   		}
		
	}

?>