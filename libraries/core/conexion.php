<?php 

	class Conexion{

	
		public static function conect(){
			
			$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
			try{
				$conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
				$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conect->exec("SET @usuario_id = 1;");
				return $conect;
			}catch(PDOException $e){
				$conect = 'Error de conexión';
				echo "ERROR: " . $e->getMessage();
			}
		}
		
	}

 ?>