<?php 
	
	class locacionModel extends Conexion
	{		
    private $id_locacion;
    private $locacion;

    public function __construct(){
        parent::conect();
    }

    public function getid_locacion(){
        return $this->id_locacion;
    }

    public function setid_locacion( $id_locacion){
        $this->id_locacion=$id_locacion;
    }

    public function getlocacion(){
        return $this->locacion;
    }

    public function setlocacion( $locacion){
        $this->locacion=$locacion;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT * FROM locacion WHERE estado !=0";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(locacionModel $p){
        try {
            $result = $p->getlocacion();
            $verificar= builder::duplicados("locacion","locacion","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Locacion duplicada!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Locacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

            else{
            $estado=1;
            $consulta="INSERT INTO locacion(locacion,estado)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getlocacion(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Locacion registrada correctamente!";
            $_SESSION["tipo_mensaje"] = "success";
        }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(locacionModel $p){
        try {
            
            $consulta="UPDATE locacion SET 
                locacion=?
                WHERE id_locacion=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getlocacion(),
                $p->getid_locacion()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM locacion WHERE id_locacion=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new locacionModel();
            $p->setid_locacion($r->id_locacion);
            $p->setlocacion($r->locacion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE locacion SET estado=? WHERE id_locacion=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>