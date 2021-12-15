<?php 

	class incorporar extends Load{
		public function __construct()
		{
			if(!in_array("Consultar Asignar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
		}

		public function incorporar()
		{
			$data['page_tag'] = "Asignaciones | UPTAEB";
			$data['page_title'] = "Asignaciones";
			parent::getView($this,"incorporar", $data);
		}

		public function registrarIncorporaciones()
		{
			if(!in_array("Crear Asignar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Asignación | UPTAEB";
			$data['page_title'] = "Registrar Asignación";
			parent::getView($this,"registrarIncorporacion", $data);
		}

		public function guardar(){
			$_POST['movimiento']="";
			if (!empty($_POST['fecha'] && $_POST['num_entrega'] && $_POST['codigo_dependencia']&& $_POST['codigo_bien'])) {
				
				$p=new incorporarModel();
            	$p->setmovimiento(intval($_POST['movimiento']));
            	$p->setfecha($_POST['fecha']);            
            	$p->setcodigo_bien($_POST['codigo_bien']);
            	$p->setnum_entrega($_POST['num_entrega']);
				if(!empty($_POST['prestamo'])){
				$p->setprestamo($_POST['prestamo']);
				}
				$p->setcodigo_dependencia($_POST['codigo_dependencia']);
				if($p->insertar($p)==true){
            		$p->asignar($_POST['codigo_bien']);
				}

				header("location:".BASE_URL."incorporar");
			}
		}

		public static function listar(){

            foreach (incorporarModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->num_movimiento.'</td>
                   <td>'.$r->dependencia.'</td>
                   <td>'.$r->num_acta.'</td>
				   <td>'.$r->nombre.'</td>
				   <td>'.$r->fecha.'</td>
				   <td>'.$r->num_entrega.'</td>
				   <td>'.$r->prestamo.'</td>
                       </tr>	';
           }
       }

		public function select_dependencias($id){
			$p=new incorporarModel;
			var_dump($p);
			foreach ($p->select("dependencias") as $r){
				if ($r->codigo_dependencia == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->dependencia.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->codigo_dependencia.'">'.$r->dependencia.'</option>';
				}
			};
		}

		public function select_bienes($id){
			$p=new incorporarModel;

			foreach ($p->selectBien() as $r){
				if ($r->codigo == $id) {
					echo'  <option value="'.$id.'" selected>
					'.$r->codigo.' -'.$r->nombre.'
					</option>';
				}else{
				echo'  
				<option value="'.$r->codigo.'">'.$r->codigo.' -'.$r->nombre.'</option>';
				}
			};
		}

	}

?>