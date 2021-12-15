<?php 

	class desincorporar extends load{
		public function __construct()
		{
			if(!in_array("Consultar Desincorporar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
		}

		public function desincorporar()
		{
			$data['page_tag'] = "Desincorporaciones | UPTAEB";
			$data['page_title'] = "Desincorporaciones";
			parent::getView($this,"desincorporar", $data);
		}

		public function registrarDesincorporaciones()
		{
			if(!in_array("Crear Desincorporar Bien", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			$data['page_tag'] = "Registrar Desincorporaciones | UPTAEB";
			$data['page_title'] = "Registrar Desincorporaciones";
			parent::getView($this,"registrarDesincorporacion", $data);
		}

		public function guardar(){
			$_POST['movimiento']="";
			if (!empty($_POST['fecha'] && $_POST['codigo_dependencia'] && $_POST['codigo_bien'] && $_POST['conservacion'])) {
				
				$p=new desincorporarModel();
            	$p->setmovimiento(intval($_POST['movimiento']));
            	$p->setfecha($_POST['fecha']);            
            	$p->setcodigo_bien($_POST['codigo_bien']);
				$p->setconservacion(strtoupper($_POST['conservacion']));
				$p->setcodigo_dependencia($_POST['codigo_dependencia']);
				if (isset($_POST['denuncia'])) {
					$p->setdenuncia(strtoupper($_POST['denuncia']));
				}
				if (isset($_POST['fecha_denuncia'])) {
					$p->setfecha_denuncia($_POST['fecha_denuncia']);
				}
				if (isset($_POST['oficio'])) {
					$p->setoficio(strtoupper($_POST['oficio']));
				}
					$p->desincorporar($_POST['codigo_bien']);
					$p->insertar($p);
					$_SESSION["mensaje"] = "¡Desincorporación de bien registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
					header("location:".BASE_URL."desincorporar");
				
            	
			}
		}

		public static function listar(){

            foreach (desincorporarModel::listar() as $r){
           echo '	<tr class="text-center">
                   <td>'.$r->num_movimiento.'</td>
                   <td>'.$r->num_acta.'</td>
				   <td>'.$r->nombre.'</td>
				   <td>'.$r->dependencia.'</td>
                   <td>'.$r->concepto.'</td>
				   <td>'.$r->denuncia.'</td>
				   <td>'.$r->fecha_denuncia.'</td>
				   <td>'.$r->fecha.'</td>
                       </tr>	';
           }
       }

		public function selectDependencias($codBien){
			$p=new desincorporarModel;
		
			$res = $p->buscarDependencia($codBien);
			
			echo json_encode([
				'data' => $res
			]);
		}

		public function select_Bienes(){
			$p=new desincorporarModel;

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