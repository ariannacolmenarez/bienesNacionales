<?php 
	require_once('./models/actaModel.php');
	class bienes extends Controllers{
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Actas", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new bienesModel;
		}

		public function bienes()
		{
			$data['page_tag'] = "Bienes | UPTAEB";
			$data['page_title'] = "Bienes";
			parent::getView($this,"bienes", $data);
		}

		public static function listar(){
			
			foreach (bienesModel::listar() as $r){
			
		   echo '	<tr>
				   <td>'.$r->num_acta.'</td>
				   <td>'.$r->codigo.'</td>
				   <td>'.$r->nombre.'</td>
				   <td>'.$r->fecha.'</td>
				   <td>'.$r->codigo_categoria.'</td>
				   <td>'.$r->estados.'</td>
				   <td><div class="row">
						'. (in_array("Modificar Usuarios", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'bienes/modificarBienes?c='.$r->num_acta.'">
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
						':'').'
					   
					   	'. (in_array("Eliminar Usuarios", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-3 col-md-5 col-xs-6" href="'.BASE_URL.'bienes/eliminar?c='.$r->num_acta.'&a='.$r->codigo.'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
						':'').'
				   		</div>
					</td>
					</tr>
					';
		   }
	   }

		public function registrarBienes()
		{
			if(!in_array("Crear Actas", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Bienes | UPTAEB";
			$data['page_title'] = "Registrar Bienes";
			parent::getView($this,"registrarBienes", $data);
		}

		public function guardar(){
			if (!empty( $_POST['fecha'] )) {
				$p=new actaModel();
				$p->setnum_acta(intval($_POST['num_acta']));
                $p->setfecha($_POST['fecha']);
				if(!empty($_POST['num_factura'])){
					$p->setnum_factura($_POST['num_factura']);
				} 
				if(!empty($_POST['fecha_factura'])){
					$p->setfecha_factura($_POST['fecha_factura']);
				}         
				if(!empty($_POST['num_ordenC'])){
					$p->setnum_ordenC($_POST['num_ordenC']);
				}
				if(!empty($_POST['fecha_ordenC'])){
					$p->setfecha_ordenC($_POST['fecha_ordenC']);
				}
				if(!empty($_POST['num_ordenP'])){
					$p->setnum_ordenP($_POST['num_ordenP']);
				}
				if(!empty($_POST['id_proveedor'])){
					$p->setid_proveedor($_POST['id_proveedor']);
				}
				$filename = $_FILES["img"]["name"];
				$source   = $_FILES["img"]["tmp_name"];
				//Verificando si existe el directorio de lo contarios lo creamos el Directorio
				$directorio = "Facturas";
				if (!file_exists($directorio)) {
					mkdir($directorio, 0777, true);
				}
				$dir= opendir($directorio);
				$target_path = $directorio.'/'.$filename;
			
				if(move_uploaded_file($source, $target_path)) { 
					$p->setfactura($target_path);
				}
				else {
					echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
				}
				closedir($dir);
				$id=$p->insertar($p);
				
			for($i=0;$i<count($_POST['nombre']);$i++){
                if (!empty($_POST['nombre'][ $i ] && $_POST['id_tipo'][ $i ] && 
    	            $_POST['codigo_categoria'][ $i ])) {
						$p=new bienesModel;
                    $p->setcodigo($_POST['codigo'][$i]);
                    $p->setnombre(strtoupper($_POST['nombre'][$i]));
					if(!empty($_POST['descripcion'][$i])){
						 $p->setdescripcion($_POST['descripcion'][$i]);  
					}
                    $p->setid_tipo($_POST['id_tipo'][$i]);
                    $p->setcodigo_categoria($_POST['codigo_categoria'][$i]);
					$p->setnum_acta($id);
                      
                    $this->model->insertar($p);
					
                }
            }
			header("location:".BASE_URL."bienes");
		}

		}

		public function modificarBienes(){
			
			if(!in_array("Modificar Actas", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Modificar Bienes | UPTAEB";
			$data['page_title'] = "Modificar Bienes";
			parent::getView($this,"modificarBienes", $data);
		}

		public function actualizar(){
			if (!empty( $_POST['fecha'] )) {
				$p=new actaModel();
				$p->setnum_acta($_GET['c']);
                $p->setfecha($_POST['fecha']);
				if(!empty($_POST['num_factura'])){
					$p->setnum_factura($_POST['num_factura']);
				} 
				if(!empty($_POST['fecha_factura'])){
					$p->setfecha_factura($_POST['fecha_factura']);
				}          
				if(!empty($_POST['num_ordenC'])){
					$p->setnum_ordenC($_POST['num_ordenC']);
				}
				if(!empty($_POST['fecha_ordenC'])){
					$p->setfecha_ordenC($_POST['fecha_ordenC']);
				}
				if(!empty($_POST['num_ordenP'])){
					$p->setnum_ordenP($_POST['num_ordenP']);
				}
				if(!empty($_POST['id_proveedor'])){
					$p->setid_proveedor($_POST['id_proveedor']);
				}
				$name = $_FILES["img"]["name"];
    			$source = $_FILES["img"]["tmp_name"];

    			$directorio     = "Facturas";
    			$midir          = opendir($directorio);
    			$rutaLocal      = $directorio . '/' .$name;
    			if (move_uploaded_file($source, $rutaLocal)) {
					$p->setfactura($rutaLocal);
     			}
				$p->modificar($p);
			for($i=0;$i<count($_POST['nombre']);$i++){

                if (!empty($_POST['nombre'][ $i ] && $_POST['codigos'][ $i ] && $_POST['id_tipo'][ $i ] && 
    	            $_POST['codigo_categoria'][ $i ])) {
						$p=new bienesModel;
						
                    $p->setcodigo($_POST['codigos'][$i]);
                    $p->setnombre(strtoupper($_POST['nombre'][$i]));
					if(!empty($_POST['descripcion'][$i])){
						 $p->setdescripcion($_POST['descripcion'][$i]);  
					}
                    $p->setid_tipo($_POST['id_tipo'][$i]);
                    $p->setcodigo_categoria($_POST['codigo_categoria'][$i]);
					$p->setnum_acta($_GET['c']);
                        
                    $this->model->modificar($p);
					$_SESSION["mensaje"] = "¡Bien actualizado correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
                }
            }

				header("location:".BASE_URL."bienes");
			}

		}

		public function selectTipo(){
			$p=new bienesModel;
			foreach ($p->select("tipo_bien") as $r){
				if ($r->id_tipo == 0) {
					echo'  <option value="" selected>
					'.$r->tipo.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_tipo.'">'.$r->tipo.'</option>';
				}
			};
		}

		public function select_proveedor($id){
			$p=new bienesModel;
			foreach ($p->select("proveedor") as $r){
				if ($r->id_proveedor == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->proveedor.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_proveedor.'">'.$r->nombre_prov.'</option>';
				}
			};
		}

		public function selectcategoria(){
			$p=new bienesModel;
			foreach ($p->select("categoria_sigecof") as $r){
				if ($r->codigo_categoria == 0) {
					echo'  <option value="'.$id.'" selected>
					'.$r->codigo_categoria.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->codigo_categoria.'">'.$r->codigo_categoria.'</option>';
				}
			};
		}

		public function eliminar(){
			$p=new actaModel();
			$p->eliminar($_GET['c']);
			$this->model->eliminar($_GET['a']);
			$_SESSION["mensaje"] = "¡Bien eliminado correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."bienes");
			
   		}

	}

?>