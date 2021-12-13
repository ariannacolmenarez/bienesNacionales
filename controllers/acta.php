<?php 

	class acta extends Controllers{
		private $model;
		public function __construct()
		{
			parent::__construct();
			$this->model = new actaModel;
		}

		public function bienes()
		{
			$data['page_tag'] = "Bienes | UPTAEB";
			$data['page_title'] = "Bienes";
			parent::getView($this,"bienes", $data);
		}

		public function listar(){
			
			foreach (bienesModel::listar() as $r){
			
		   echo '	<tr>
				   <td>'.$r->num_acta.'</td>
				   <td>'.$r->codigo.'</td>
				   <td>'.$r->nombre.'</td>
				   <td>'.$r->fecha.'</td>
				   <td>'.$r->codigo_categoria.'</td>
				   <td>'.$r->tipo.'</td>
				   <td>
					 	<div class="row">
						'. (in_array("Modificar Actas", $_SESSION['bn_permisos']) ? '
							<div class="col-3">
								<a  href="'.BASE_URL.'bienes/modificarBienes?c='.$r->num_acta.'">
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
							</div>
						':'').'
					   
					   	'. (in_array("Eliminar Actas", $_SESSION['bn_permisos']) ? '
						   <div class="col-3">
								<a  href="'.BASE_URL.'bienes/eliminar?c='.$r->num_acta.'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
							</div>
						':'').'
				   		</div>
					</td>
					</tr>
					';
		   }
	   }

		public function registrarBienes()
		{
			$data['page_tag'] = "Registrar Bienes | UPTAEB";
			$data['page_title'] = "Registrar Bienes";
			parent::getView($this,"registrarBienes", $data);
		}

		public function guardar(){
			if (!empty($_POST['codigo'] && $_POST['nombre'] && $_POST['fecha'] && $_POST['cantidad'] && $_POST['id_tipo'] && $_POST['codigo_categoria'])) {

			$p=new bienesModel();
            $p->setnum_acta(intval($_POST['num_acta']));
            $p->setcodigo($_POST['codigo']);            
            $p->setnombre(strtoupper($_POST['nombre']));
            $p->setcantidad($_POST['cantidad']);
			$p->setfecha($_POST['fecha']);
            $p->setid_tipo($_POST['id_tipo']);
			$p->setcodigo_categoria($_POST['codigo_categoria']);
			if (isset($_POST['descripcion'])) {
				$p->setdescripcion(strtoupper($_POST['descripcion']));
			}
			if (isset($_POST['num_factura'])) {
				$p->setnum_factura($_POST['num_factura']);
			}
			if (isset($_POST['fecha_factura'])) {
				$p->setfecha_factura($_POST['fecha_factura']);
			}
			if (isset($_POST['factura'])) {
				$p->setfactura($_POST['factura']);
			}
			if (isset($_POST['num_ordenC'])) {
				$p->setnum_ordenC($_POST['num_ordenC']);
			}
			if (isset($_POST['fecha_ordenC'])) {
				$p->setfecha_ordenC($_POST['fecha_ordenC']);
			}
			if (isset($_POST['num_ordenP'])) {
				$p->setnum_ordenP($_POST['num_ordenP']);
			}
			if (isset($_POST['id_proveedor'])) {
				$p->setid_proveedor($_POST['id_proveedor']);
			}
            $this->model->insertar($p);


			for($i=0;$i<count($_POST['codigo']);$i++){
                if ( isset($_POST['nombre'][ $i ]) && isset($_POST['tipo'][ $i ]) && 
                $_POST['apellido_pariente'][ $i ] != ""&& $_POST['fecha_pariente'][ $i ] != "" && 
                $_POST['parentesco'][ $i ] != "" ) {
                    $p=new Pariente();
                        
                    $p->setid_pariente(intval($_POST['id_pariente'][$i]));
                    $p->setid_jefe($_POST['id_jefe']);
                    $p->setnombre($_POST['nombre_parientes'][$i]);            
                    $p->setapellido($_POST['apellido_pariente'][$i]);
                    $p->setid_parentesco($_POST['parentesco'][$i]);
                    $p->setcedula_pariente($_POST['cedula_pariente'][$i]);
                    $p->setfecha_nacimiento($_POST['fecha_pariente'][$i]);
                    $p->setdiscapacidad($_POST['discapacidad_pariente'][$i]);
                        
                    $this->model3->insertar($p);
                }
            }
			header("location:".BASE_URL."bienes");
		}

		}

		public function modificarBienes(){
			
			$data['page_tag'] = "Modificar Bienes | UPTAEB";
			$data['page_title'] = "Modificar Bienes";
			parent::getView($this,"modificarBienes", $data);
		}

		public function actualizar(){
			if (!empty($_POST['codigo'] && $_POST['nombre'] && $_POST['fecha'] && $_POST['cantidad'] && $_POST['id_tipo'] && $_POST['codigo_categoria'])) {

				$p=new bienesModel();
				$p->setnum_acta($_GET['c']);
				$p->setcodigo($_POST['codigo']);            
				$p->setnombre(strtoupper($_POST['nombre']));
				$p->setcantidad($_POST['cantidad']);
				$p->setfecha($_POST['fecha']);
				$p->setid_tipo($_POST['id_tipo']);
				$p->setcodigo_categoria($_POST['codigo_categoria']);
				if (isset($_POST['descripcion'])) {
					$p->setdescripcion(strtoupper($_POST['descripcion']));
				}
				if (isset($_POST['num_factura'])) {
					$p->setnum_factura($_POST['num_factura']);
				}
				if (isset($_POST['fecha_factura'])) {
					$p->setfecha_factura($_POST['fecha_factura']);
				}
				if (isset($_POST['factura'])) {
					$p->setfactura($_POST['factura']);
				}
				if (isset($_POST['num_ordenC'])) {
					$p->setnum_ordenC($_POST['num_ordenC']);
				}
				if (isset($_POST['fecha_ordenC'])) {
					$p->setfecha_ordenC($_POST['fecha_ordenC']);
				}
				if (isset($_POST['num_ordenP'])) {
					$p->setnum_ordenP($_POST['num_ordenP']);
				}
				if (isset($_POST['id_proveedor'])) {
					$p->setid_proveedor($_POST['id_proveedor']);
				}

				$this->model->modificar($p);
				header("location:".BASE_URL."bienes");
			}

		}

		public function select_tipo($id){
			$p=new bienesModel;
			foreach ($p->select("tipo_bien") as $r){
				if ($r->id_tipo == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->tipo.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_tipo.'">'.$r->tipo.'</option>';
				}
			};
		}

		public function select_categoria($id){
			$p=new bienesModel;
			foreach ($p->select("categoria_sigecof") as $r){
				if ($r->codigo_categoria == $id) {
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
              
			$this->model->eliminar($_GET['c']);
			header("location:".BASE_URL."bienes");
			
   		}

	}

?>