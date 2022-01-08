<?php 
	
	class tipoBienModel extends Conexion
	{		
    private $id_tipo;
    private $tipo;


    public function __construct(){
        parent::conect();
    }

    public function getid_tipo(){
        return $this->id_tipo;
    }

    public function setid_tipo( $id_tipo){
        $this->id_tipo=$id_tipo;
    }

    public function gettipo(){
        return $this->tipo;
    }

    public function settipo( $tipo){
        $this->tipo=$tipo;
    }


    static public function listar(){
        try {
                $sql= "SELECT * FROM tipo_bien WHERE estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(tipoBienModel $p){
        try {
            $result = $p->gettipo();
            $verificar= builder::duplicados("tipo","tipo_bien","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Tipo de bien duplicado!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Tipo de bien registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

            else{
            $estado=1;
            $consulta="INSERT INTO tipo_bien(tipo,estado)
            VALUES (?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $p->gettipo(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Tipo de bien registrado correctamente!";
            $_SESSION["tipo_mensaje"] = "success";
        }
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(tipoBienModel $p){
        try {
            
            $consulta="UPDATE tipo_bien SET 
                tipo=?
                WHERE id_tipo=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->gettipo(),
                $p->getid_tipo()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= parent::conect()->prepare("SELECT * FROM tipo_bien WHERE id_tipo=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new tipoBienModel();
            $p->setid_tipo($r->id_tipo);
            $p->settipo($r->tipo);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE tipo_bien SET estado=? WHERE id_tipo=?;";
            parent::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>