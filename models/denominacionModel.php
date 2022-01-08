<?php 
	
	class denominacionModel extends Conexion
	{		
    private $id_denominacion;
    private $denominacion;

    public function __construct(){
        parent::conect();
    }

    public function getid_denominacion(){
        return $this->id_denominacion;
    }

    public function setid_denominacion( $id_denominacion){
        $this->id_denominacion=$id_denominacion;
    }

    public function getdenominacion(){
        return $this->denominacion;
    }

    public function setdenominacion( $denominacion){
        $this->denominacion=$denominacion;
    }


    static public function listar(){
        try {
                $sql= "SELECT * FROM denominacion WHERE estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(denominacionModel $p){
        try {
            $result = $p->getdenominacion();
            $verificar= builder::duplicados("denominacion","denominacion","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡denominacion duplicada!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡denominacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
            $estado=1;
            $consulta="INSERT INTO denominacion(denominacion,estado)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getdenominacion(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Denominacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(denominacionModel $p){
        try {
            
            $consulta="UPDATE denominacion SET 
                denominacion=?
                WHERE id_denominacion=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getdenominacion(),
                $p->getid_denominacion()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= Conexion::conect()->prepare("SELECT * FROM denominacion WHERE id_denominacion=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new denominacionModel();
            $p->setid_denominacion($r->id_denominacion);
            $p->setdenominacion($r->denominacion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE denominacion SET estado=? WHERE id_denominacion=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>