<?php 
	
	class rolesModel extends Conexion
	{		
    private $id_rol;
    private $rol;
    private $descripcion;
    private $permisos;

    public function __construct(){
        parent::conect();
    }

    public function getid_rol(){
        return $this->id_rol;
    }

    public function setid_rol( $id_rol){
        $this->id_rol=$id_rol;
    }

    public function getrol(){
        return $this->rol;
    }

    public function setrol( $rol){
        $this->rol=$rol;
    }

    public function getdescripcion(){
        return $this->descripcion;
    }

    public function setdescripcion( $descripcion){
        $this->descripcion=$descripcion;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT * FROM rol WHERE estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(rolesModel $p){
        try {
            $estado=1;
            $consulta="INSERT INTO rol(rol,descripcion,estado)
            VALUES (?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getrol(),
                $p->getdescripcion(),
                $estado
                
            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtenerPermisos($rol_id){
        try {

            $sql="SELECT p.nombre as permiso FROM rol r 
            INNER JOIN rol_permiso rp ON r.id_rol=rp.rol_id INNER JOIN permisos p ON rp.permiso_id=p.id 
            WHERE r.id_rol = ? 
            ORDER BY rp.permiso_id";
            $consulta = parent::conect()->prepare($sql);
            $consulta->execute(array(
                $rol_id
            ));
            $perm = $consulta->fetchAll(PDO::FETCH_OBJ);
            $permisos = [];
            $i = 0;
            foreach($perm as $p){
                $permisos[$i] = ucwords($p->permiso);
                $i++;
            }
            return $permisos;
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }
    public function insertarRol_Permiso($rol_id, $permiso_id){
        try {

            $consulta="INSERT INTO rol_permiso(rol_id, permiso_id)
            VALUES (?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $rol_id,
                $permiso_id
            ));
            
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }
    public function eliminarRol_Permiso($rol_id){
        try {

            $consulta="DELETE FROM rol_permiso WHERE rol_id = ?";
            $resp = parent::conect()->prepare($consulta)->execute(array(
                $rol_id
            ));
            return $resp;
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function modificar(rolesModel $p){
        try {
            
            $consulta="UPDATE rol SET 
                rol=?,
                descripcion=?
                WHERE id_rol=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getrol(),
                $p->getdescripcion(),
                $p->getid_rol()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= parent::conect()->prepare("SELECT * FROM rol WHERE id_rol=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new rolesModel();
            
            $p->setrol($r->rol);
            $p->setdescripcion($r->descripcion);
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE rol SET estado=? WHERE id_rol=?;";
            parent::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function insertarpermiso($id_rol,$id_modulo,$crear,$ver,$actualizar,$eliminar){
        var_dump($id_modulo,$crear);
    }

		
	}

?>