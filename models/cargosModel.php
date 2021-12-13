<?php 
	
	class cargosModel extends Conexion
	{		
    private $id_cargo;
    private $cargo;

    public function __construct(){
        parent::conect();
        $duplicado= new builder;
    }

    public function getid_cargo(){
        return $this->id_cargo;
    }

    public function setid_cargo( $id_cargo){
        $this->id_cargo=$id_cargo;
    }

    public function getcargo(){
        return $this->cargo;
    }

    public function setcargo( $cargo){
        $this->cargo=$cargo;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT * FROM cargo WHERE estado !=0";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(cargosModel $p){
        try {
            $result = $p->getcargo();
            $verificar= builder::duplicados("cargo","cargo","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Cargo duplicado!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Cargo registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
                $estado=1;
                $consulta="INSERT INTO cargo(cargo,estado)
                VALUES (?,?)";
                Conexion::conect()->prepare($consulta)->execute(array(
                $p->getcargo(),$estado
            ));
            $_SESSION["mensaje"] = "¡Cargo registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(cargosModel $p){
        try {
            
            $consulta="UPDATE cargo SET 
                cargo=?
                WHERE id_cargo=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getcargo(),
                $p->getid_cargo()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM cargo WHERE id_cargo=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new cargosModel();
            $p->setid_cargo($r->id_cargo);
            $p->setcargo($r->cargo);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE cargo SET estado=? WHERE id_cargo=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>