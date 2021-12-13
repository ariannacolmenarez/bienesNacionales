<?php 
	
	class bitacoraModel extends Conexion
	{		

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM bitacora WHERE fecha >= current_date - 7";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
		
	}

?>