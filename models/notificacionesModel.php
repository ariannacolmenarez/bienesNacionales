<?php 
	
	class notificacionesModel extends Conexion
	{
	
		public function __construct(){
			 parent::conect();
		}

		public static function listar($limit){
			try {
					$sql= "SELECT * FROM notificaciones WHERE estado = 1 ORDER BY created_at DESC LIMIT $limit";
					$consulta= parent::conect()->prepare($sql);
					$consulta->execute();
					return $consulta->fetchALL(PDO::FETCH_OBJ);
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try {
            	$consulta="UPDATE notificaciones SET estado=0 WHERE id=?;";
				parent::conect()->prepare($consulta)->execute(array($id));
				return true;
			} catch (Exception $e) {
				return false;
			}
		}
	
		
	}

?>