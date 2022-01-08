<?php 

	class mantenimiento extends Load{
		private $model;
		public function __construct(){
			if(!in_array("Consultar Mantenimiento", $_SESSION['bn_permisos'])){
				header("location:".BASE_URL);
			}
			parent::__construct();
			$this->model=new mantenimientoModel;
		}

		public function mantenimiento(){
			$data['page_tag'] = "Mantenimiento | UPTAEB";
			$data['page_title'] = "Mantenimiento del sistema";
			parent::getView($this,"mantenimiento", $data);
		}

		public function respaldo(){
			$this->model->respaldo();
			header("location:".BASE_URL."mantenimiento");
		}

		public function form(){
			$data['page_tag'] = "Mantenimiento | UPTAEB";
			$data['page_title'] = "Mantenimiento del sistema";
			parent::getView($this,"restaurar", $data);
		}

		public function select(){
			$directorio = "./database/";
			$dir=opendir($directorio);
			while (($file = readdir($dir))!== false)
			 {
			   if ($file != '.' && $file != '..')       
				   echo '<option value="'.$directorio.$file.'">'.$directorio.$file.'</option>';      
			 }				
		}

		public function restaurar(){
			$this->model->restaurar();
			header("location:".BASE_URL."mantenimiento");
		}

	}

?>