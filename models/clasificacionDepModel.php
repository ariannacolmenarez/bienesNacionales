<?php 
	
	class clasificacionDepModel extends Conexion
	{		
    private $id_clasificacionDep;
    private $clasificacionDep;

    public function __construct(){
        parent::conect();
    }

    public function getid_clasificacionDep(){
        return $this->id_clasificacionDep;
    }

    public function setid_clasificacionDep( $id_clasificacionDep){
        $this->id_clasificacionDep=$id_clasificacionDep;
    }

    public function getclasificacionDep(){
        return $this->clasificacionDep;
    }

    public function setclasificacionDep( $clasificacionDep){
        $this->clasificacionDep=$clasificacionDep;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT * FROM clasificacion_dep WHERE estado !=0";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(clasificacionDepModel $p){
        try {
            $result = $p->getclasificacionDep();
            $verificar= builder::duplicados("clasificacion","clasificacion_dep","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Clasificacion duplicada!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Clasificacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
            $estado=1;
            $consulta="INSERT INTO clasificacion_dep(clasificacion,estado)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getclasificacionDep(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Clasificacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }


        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(clasificacionDepModel $p){
        try {
            
            $consulta="UPDATE clasificacion_dep SET 
                clasificacion=?
                WHERE id_clasificacion=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getclasificacionDep(),
                $p->getid_clasificacionDep()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM clasificacion_dep WHERE id_clasificacion=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new clasificacionDepModel();
            $p->setid_clasificacionDep($r->id_clasificacion);
            $p->setclasificacionDep($r->clasificacion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0; 
            $consulta="UPDATE clasificacion_dep SET estado=? WHERE id_clasificacion=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>