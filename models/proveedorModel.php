<?php 
	
	class proveedorModel extends Conexion
	{		
    private $id_proveedor;
    private $proveedores;
    private $rif;
    private $direccion;

    public function __construct(){
        parent::conect();
    }

    public function getproveedores(){
        return $this->proveedores;
    }

    public function setproveedores( $proveedores){
        $this->proveedores=$proveedores;
    }

    public function getrif(){
        return $this->rif;
    }

    public function setrif( $rif){
        $this->rif=$rif;
    }

    public function getid_proveedor(){
        return $this->id_proveedor;
    }

    public function setid_proveedor( $id_proveedor ){
        $this->id_proveedor=$id_proveedor;
    }

    public function getdireccion(){
        return $this->direccion;
    }

    public function setdireccion( $direccion){
        $this->direccion=$direccion;
    }

    public function insertar(proveedorModel $p){
        try {

            $result = $p->getrif();
            $verificar= builder::duplicados("rif","proveedor","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡RIF duplicado!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Proveedor registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
                $estado=1;
            $consulta="INSERT INTO proveedor(nombre_prov,rif,direccion,estado)
            VALUES (?,?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getproveedores(),
                $p->getrif(),
                $p->getdireccion(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Proveedor registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

            

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM proveedor WHERE estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificar(proveedorModel $p){
        try {
            
            $consulta="UPDATE proveedor SET 
                nombre_prov=?,
                rif=?,
                direccion=?
                WHERE id_proveedor=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                
                $p->getproveedores(),
                $p->getrif(),
                $p->getdireccion(),
                $p->getid_proveedor()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= parent::conect()->prepare("SELECT * FROM proveedor WHERE id_proveedor=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new proveedorModel();
            $p->setproveedores($r->nombre_prov);
            $p->setrif($r->rif);
            $p->setdireccion($r->direccion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE proveedor SET estado=? WHERE id_proveedor=?;";
            parent::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }
		
	}

?>