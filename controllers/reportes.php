<?php 
	require_once('./models/pdfModel.php');
	require_once('./models/incorporarModel.php');
	class reportes extends Controllers{

		public function __construct()
		{
			if(!in_array("Consultar Reportes", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			
		}

		public function reportesAsignacion()
		{
			$data['page_tag'] = "Reportes Asignacion | UPTAEB";
			$data['page_title'] = "Reportes de Asignacion";
			parent::getView($this,"reportesAsignacion", $data);
		}
		public static function pdfAsignacion(){
			pdfModel::pdfAsignacion();
		}

		public function estadisticasBienes()
		{
			$data['page_tag'] = "Estadísticas de Bienes | UPTAEB";
			$data['page_title'] = "Estadísticas de Asignación y Desincorporación de Bienes";
			parent::getView($this,"estadisticasBienes", $data);
		}
		public function estadisticaBienesDependencias()
		{
			require_once('models/incorporarModel.php');
			require_once('models/desincorporarModel.php');
			$i = new incorporarModel;
			$d = new desincorporarModel;
			$desde = $_POST['desde'];
			$hasta = $_POST['hasta'];
			$incor = $i->obtenerAsignadosDependecias($desde, $hasta);
			$incorD = $incor["dependencias"];
			$incorB = $incor["bienes"];
			$desin = $d->obtenerDesincorporadosDependecias($desde, $hasta);
			$desinD = $desin["dependencias"];
			$desinB = $desin["bienes"];
			
			$data['page_tag'] = "Estadísticas de Bienes | UPTAEB";
			$data['page_title'] = "Estadísticas de Asignación y Desincorporación de Bienes";
			$data['incorD'] = $incorD;
			$data['incorB'] = $incorB;
			$data['desinD'] = $desinD;
			$data['desinB'] = $desinB;
			$data['desde'] = $desde;
			$data['hasta'] = $hasta;
			parent::getView($this,"estadisticaBienesDependencias", $data);
		}

		public function reportesDesincorporar()
		{
			$data['page_tag'] = "Reportes Desincorporar | UPTAEB";
			$data['page_title'] = "Reportes de Desincorporar";
			parent::getView($this,"reportesDesincorporar", $data);
		}
		public static function pdfDesincorporar(){
			pdfModel::pdfDesincorporar();
		}

		public function reportesReasignar()
		{
			$data['page_tag'] = "Reportes Reasignar | UPTAEB";
			$data['page_title'] = "Reportes de Reasignar";
			parent::getView($this,"reportesReasignar", $data);
		}
		public static function pdfReasignar(){
			pdfModel::pdfReasignar();
		}

		public function reportesInventarioDep()
		{
			$data['page_tag'] = "Reportes Inventario por Dependencia | UPTAEB";
			$data['page_title'] = "Reportes de Inventario por Dependencia";
			parent::getView($this,"reportesInventarioDep", $data);
		}
		public static function pdfInventarioDep(){
			pdfModel::pdfInventarioDep();
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

		public function reportesInventario()
		{
			$data['page_tag'] = "Reportes de Inventario  | UPTAEB";
			$data['page_title'] = "Reportes de Inventario General";
			parent::getView($this,"reportesInventario", $data);
		}
		public static function pdfInventario(){
			pdfModel::pdfInventario();
		}

	}

?>