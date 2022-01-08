<?php 
	
	class clasificacionCatModel extends Conexion
	{		
    private $id_clasificacion;
    private $clasificacion;


    public function __construct(){
        parent::conect();
    }

    public function getid_clasificacion(){
        return $this->id_clasificacion;
    }

    public function setid_clasificacion( $id_clasificacion){
        $this->id_clasificacion=$id_clasificacion;
    }

    public function getclasificacion(){
        return $this->clasificacion;
    }

    public function setclasificacion( $clasificacion){
        $this->clasificacion=$clasificacion;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT * FROM clasificacion_cat WHERE estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(clasificacionCatModel $p){
        try {
            $result = $p->getclasificacion();
            $verificar= builder::duplicados("clasificacion","clasificacion_cat","$result");
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
            $consulta="INSERT INTO clasificacion_cat(clasificacion,estado)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getclasificacion(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Clasificacion registrada correctamente!";
            $_SESSION["tipo_mensaje"] = "success";
    }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(clasificacionCatModel $p){
        try {
            
            $consulta="UPDATE clasificacion_cat SET 
                clasificacion=?
                WHERE id_clasificacion=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getclasificacion(),
                $p->getid_clasificacion()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= Conexion::conect()->prepare("SELECT * FROM clasificacion_cat WHERE id_clasificacion=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new clasificacionCatModel();
            $p->setid_clasificacion($r->id_clasificacion);
            $p->setclasificacion($r->clasificacion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE clasificacion_cat SET estado=? WHERE id_clasificacion=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>