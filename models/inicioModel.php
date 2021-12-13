<?php 
	
	class inicioModel extends Conexion
	{
		
		public function __construct()
		{
			parent::conect();
		}

		public static function contarencargados(){
			try {
	
				$consulta="SELECT Count(id_encargado) AS cantidad FROM encargados where estado =1";
				$consulta= parent::conect()->prepare($consulta);
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
 
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
		public function contarbien(){
			try {
	
				$consulta="SELECT Count(num_acta) AS cantidad FROM bienes where estado = 1";
				$consulta= parent::conect()->prepare($consulta);
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
 
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
		public function contarcategorias(){
			try {
	
				$consulta="SELECT Count(codigo_categoria) AS cantidad FROM categoria_sigecof where estado =1";
				$consulta= parent::conect()->prepare($consulta);
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
 
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

		public function contardependencias(){
			try {
	
				$consulta="SELECT Count(codigo_dependencia) AS cantidad FROM dependencias where estado =1";
				$consulta= parent::conect()->prepare($consulta);
                $consulta->execute();
                return $consulta->fetch(PDO::FETCH_OBJ);
 
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

	}

?>