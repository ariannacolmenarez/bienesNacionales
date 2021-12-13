<?php 

	class categorias extends Controllers{
		
		private $model;
		public function __construct()
		{
			if(!in_array("Consultar Categorias", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model = new categoriasModel;
		}

		public function categorias()
		{
			$data['page_tag'] = "Categorias | UPTAEB";
			$data['page_title'] = "Categorias SIGECOF";
			parent::getView($this,"categorias", $data);
			
		}

		public static function listar(){
			
			 foreach (categoriasModel::listar() as $r){
			
			echo '	<tr>
					<td>'.$r->codigo_categoria.'</td>
					<td>'.$r->presupuestaria.'</td>
					<td>'.$r->clasificacion.'</td>
					<td>'.$r->denominacion.'</td>
					<td><div class="row">
						'. (in_array("Modificar Categorias", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-4 col-md-5 col-xs-6" href="'.BASE_URL.'categorias/modificarCategorias?c='.$r->codigo_categoria.'">
									<button class=" btn btn-warning btn-sm mx-1" title="Editar" >
										<i class="fas fa-pencil-alt"></i>
									</button>
								</a>
						':'').'
					   
					   	'. (in_array("Eliminar Categorias", $_SESSION['bn_permisos']) ? '
								<a class="col-lg-4 col-md-5 col-xs-6" href="'.BASE_URL.'categorias/eliminar?c='.$r->codigo_categoria.'" onclick="return confirmar();">
									<button class=" btn btn-danger btn-sm mx-1" title="Eliminar" >
										<i class="fas fa-trash-alt"></i>
									</button>
								</a>
						':'').'
						</div>	';
			}
		}

		public function registrarCategorias()
		{
			if(!in_array("Crear Categorias", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Categorias | UPTAEB";
			$data['page_title'] = "Registrar Categorias";
			parent::getView($this,"registrarCategorias", $data);
		}

		public function guardar(){

			if (!empty( $_POST['presupuestaria'] && $_POST['codigos'] && $_POST['clasificacion'])) {
			
				$p=new categoriasModel();
				$p->setcodigo($_POST['codigos']);
            	$p->setpresupuestaria($_POST['presupuestaria']);
            	$p->setid_clasificacion($_POST['clasificacion']); 
				if (!empty($_POST['denominacion'])) {
					$p->setid_denominacion($_POST['denominacion']);
				}           
            	$this->model->insertar($p);

				header("location:".BASE_URL."categorias");
			}
		}

		public function actualizar(){
			if (!empty( $_POST['presupuestaria'] || $_POST['clasificacion'] || $_POST['denominacion'])) {
				$p=new categoriasModel();
				$p->setcodigo($_GET['c']);
            	$p->setpresupuestaria(strtoupper($_POST['presupuestaria']));            
            	if (!empty($_POST['denominacion'])) {
					$p->setid_denominacion($_POST['denominacion']);
				}
            	$p->setid_clasificacion($_POST['clasificacion']);
            	
				$this->model->modificar($p);
				$_SESSION["mensaje"] = "¡Categoría actualizada correctamente!";
			   		$_SESSION["tipo_mensaje"] = "success";
				header("location:".BASE_URL."categorias");
			}

		}

		public function modificarCategorias(){
			if(!in_array("Modificar Categorias", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			
			$data['page_tag'] = "Modificar Categorias | UPTAEB";
			$data['page_title'] = "Modificar Categorias";
			parent::getView($this,"modificarCategorias", $data);
		}

		public function select_denominacion($id){
			$p=new categoriasModel;
			foreach ($p->select("denominacion") as $r){
				if ($r->id_denominacion == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->denominacion.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_denominacion.'">'.$r->denominacion.' </option>';
				}
			};
		}

		public function select_clasificacion($id){
			$p=new categoriasModel;
			foreach ($p->select("clasificacion_cat") as $r){
				if ($r->id_clasificacion == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->clasificacion.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->id_clasificacion.'">'.$r->clasificacion.'</option>';
				}
			};
		}

		public function eliminar(){
              
			$this->model->eliminar($_GET['c']);
			$_SESSION["mensaje"] = "¡Categoría eliminada correctamente!";
		   	$_SESSION["tipo_mensaje"] = "success";
			header("location:".BASE_URL."categorias");
			
   		}

	}

?>