<?php 

	class reasignar extends Load{
		public function __construct()
		{
			if(!in_array("Consultar Reasignar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
		}

		public function reasignar()
		{
			$data['page_tag'] = "Reasignaciones | UPTAEB";
			$data['page_title'] = "Reasignaciones";
			parent::getView($this,"reasignar", $data);
		}

		public function registrarReasignaciones()
		{
			if(!in_array("Crear Reasignar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Reasignaciones | UPTAEB";
			$data['page_title'] = "Registrar Reasignaciones";
			parent::getView($this,"registrarReasignacion", $data);
		}

		public function guardar(){
			$_POST['movimiento']="";
			if (!empty($_POST['fecha'] && $_POST['codigo_bien'] && $_POST['codigo_dependencia'] && $_POST['dependenciaN'] && $_POST['tipo'])) {
				
				$p=new reasignarModel();
            	$p->setmovimiento(intval($_POST['movimiento']));
            	$p->setfecha($_POST['fecha']);            
            	$p->setcodigo_bien($_POST['codigo_bien']);
            	$p->setcodigo_dependencia($_POST['codigo_dependencia']);
				$p->setid_tipo($_POST['tipo']);
				$p->setnueva_dependencia($_POST['dependenciaN']);
				if (isset($_POST['concepto'])) {
					$p->setconcepto($_POST['concepto']);
				}
				
				$p->reasignar($_POST['codigo_bien'],$_POST['dependenciaN'],$_POST['codigo_dependencia']);
					$p->insertar($p);
					$_SESSION["mensaje"] = "¡Reasignación registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
					header("location:".BASE_URL."reasignar");			
            	
			}
		}

		public static function listar(){

            foreach (reasignarModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->num_movimiento.'</td>
                   <td>'.$r->fecha.'</td>
				   <td>'.$r->tipo.'</td>
				   <td>'.$r->dependencia.'</td>
				   <td>'.$r->nombre.'</td>
                       </tr>	';
           }
       }

	   	public function selectDependencias($codBien){
			$p=new reasignarModel;
		
			$res = $p->buscarDependencia($codBien);
			
			echo json_encode([
				'data' => $res
			]);
		}

		public function select_bienes($id){
			$p=new reasignarModel;

			foreach ($p->selectBien() as $r){
				echo'  
				<option value="'.$r->codigo.'">'.$r->codigo.' -'.$r->nombre.'</option>';
				
			};
		}

		public function select_tipo($id){
			$p=new reasignarModel;

			foreach ($p->select("tipo_reasignacion") as $r){
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

		public function select_dependencias($id){
			$p=new reasignarModel;

			foreach ($p->select("dependencias") as $r){
				echo'  
				<option value="'.$r->codigo_dependencia.'">'.$r->dependencia.'</option>';
			};
		}

	}

?>