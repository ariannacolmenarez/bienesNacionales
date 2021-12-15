<?php 

	class inicio extends Load{
		
		public function __construct()
		{
			parent::__construct();
			
		}

		public function inicio()
		{
			$data['page_tag'] = "Inicio";
			$data['page_title'] = "Bienvenido(a)";
			parent::getView($this,"inicio", $data);
		}

		public static function  contarencargados(){
			$model = new inicioModel;
	
			$result=$model->contarencargados(); 
			if($result == false ){
				echo"0";
			}else{ 
				echo $result->cantidad;
			}
		}
		public static function  contardependencias(){
			$model = new inicioModel;
	
			$result=$model->contardependencias(); 
			if($result == false ){
				echo"0";
			}else{ 
				echo $result->cantidad;
			}
		}
		public static function  contarbien(){
			$model = new inicioModel;
	
			$result=$model->contarbien(); 
			if($result == false ){
				echo"0";
			}else{ 
				echo $result->cantidad;
			}
		}
		public static function  contarcategorias(){
			$model = new inicioModel;
	
			$result=$model->contarcategorias(); 
			if($result == false ){
				echo"0";
			}else{ 
				echo $result->cantidad;
			}
		}
	}

?>