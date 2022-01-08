<?php 
	
	class modulosModel extends Conexion
	{		
    private $id_modulo;
    private $modulo;

    public function __construct(){
        parent::conect();
    }

    public function getid_modulo(){
        return $this->id_modulo;
    }

    public function setid_modulo( $id_modulo){
        $this->id_modulo=$id_modulo;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function setnombre( $nombre){
        $this->nombre=$nombre;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }

    public function setdescripcion( $descripcion){
        $this->descripcion=$descripcion;
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM modulos";
                $consulta= Conexion::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(modulosModel $p){
        try {

            $consulta="INSERT INTO modulos(nombre,descripcion)
            VALUES (?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getdescripcion()
            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(modulosModel $p){
        try {
            
            $consulta="UPDATE modulos SET 
                nombre=?,
                descripcion=?
                WHERE id_modulo=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getdescripcion(),
                $p->getid_modulo()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= Conexion::conect()->prepare("SELECT * FROM modulos WHERE id_modulo=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new modulosModel();
            $p->setnombre($r->nombre);
            $p->setdescripcion($r->descripcion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $consulta="DELETE FROM modulos WHERE id_modulo=?;";
            Conexion::conect()->prepare($consulta)->execute(array($id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

		
	}

?>