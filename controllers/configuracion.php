<?php 

	class configuracion extends Controllers{
		public function __construct()
		{
			if(!in_array("Consultar Configuracion", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
		}

		public function configuracion()
		{
			$data['page_tag'] = "Configuración";
			$data['page_title'] = "Configuración";
			parent::getView($this,"configuracion", $data);
		}
	}

?>