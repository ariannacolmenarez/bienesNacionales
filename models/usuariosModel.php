
<?php 
	
	class usuariosModel extends Conexion
	{		
    private $id_usuario;
    private $correo;
    private $nombre;
    private $clave;
    private $imagen;
    private $id_rol;

    public function __construct(){
        parent::conect();
    }

    public function getid_usuario(){
        return $this->id_usuario;
    }

    public function setid_usuario( $id_usuario){
        $this->id_usuario=$id_usuario;
    }

    public function getcorreo(){
        return $this->correo;
    }

    public function setcorreo( $correo){
        $this->correo=$correo;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function setnombre(  $nombre ){
        $this->nombre=$nombre;
    }

    public function getclave(){
        return $this->clave;
    }

    public function setclave( $clave){
        $this->clave=$clave;
    }

    public function getimagen(){
        return $this->imagen;
    }

    public function setimagen( $imagen){
        $this->imagen=$imagen;
    }

    public function getid_rol(){
        return $this->id_rol;
    }

    public function setid_rol( $id_rol){
        $this->id_rol=$id_rol;
    }

    public function insertar(usuariosModel $p){
        try {
            $result = $p->getnombre();
            $result2 = $p->getcorreo();
            $verificar= builder::duplicados("nombre","usuarios","$result");
            $verificar2= builder::duplicados("correo","usuarios","$result2");
            var_dump($verificar);
            var_dump($verificar2);
            if( $verificar === false || $verificar2 === false ){
                
                if($verificar === false){
                    $nombre="Nombre";
                }else{
                    $nombre="Correo";
                }
                $_SESSION["mensaje"] = "¡$nombre duplicado!";
				$_SESSION["tipo_mensaje"] = "error";
                
                
            }
            elseif($verificar === NULL){
                echo"elseif";
                $_SESSION["mensaje"] = "¡Usuario registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
                $estado=1;
            $consulta="INSERT INTO usuarios(nombre,correo,clave,imagen,id_rol,estado)
            VALUES (?,?,?,?,?,?)";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getnombre(),
                $p->getcorreo(),
                $p->getclave(),
                $p->getimagen (),
                $p->getid_rol(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Usuario registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

            

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM usuarios u inner join rol r
                on r.id_rol=u.id_rol WHERE u.estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificar(usuariosModel $p){
        try {
            
            $consulta="UPDATE usuarios SET 
                correo=?,
                nombre=?,
                clave=?,
                imagen=?,
                id_rol=?
                WHERE id_usuario=?;
            
            ";
            Conexion::conect()->prepare($consulta)->execute(array(
                $p->getcorreo(),
                $p->getnombre(),
                $p->getclave(),
                $p->getimagen(),
                $p->getid_rol(),
                $p->getid_usuario()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            
            $consulta= Conexion::conect()->prepare("SELECT * FROM usuarios WHERE id_usuario=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new usuariosModel();
            $p->setcorreo($r->correo);
            $p->setnombre($r->nombre);
            $p->setclave($r->clave);
            if (isset($r->id_rol)) {
                $p->setid_rol($r->id_rol);
            }
            $p->setimagen($r->imagen);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select(){
        $consulta= Conexion::conect()->prepare("SELECT * FROM rol WHERE estado !=0");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE usuarios SET estado=? WHERE id_usuario=?;";
            Conexion::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function verificarUsuario(){
        try {
            $nombre = $this->nombre;
            $sql="SELECT * FROM usuarios WHERE nombre = ? OR correo = ? and estado = '1';";
            $consulta = Conexion::conect()->prepare($sql);
            $consulta->execute(array($nombre,$nombre));
            $result = $consulta->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
	
    

	}

?>