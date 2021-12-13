<?php 
	
	class encargadosModel extends Conexion
	{		
    private $id_encargado;
    private $cedula;
    private $nombre;
    private $apellido;
    private $cargo;
    private $telefono;

    public function __construct(){
        parent::conect();
    }

    public function getid_encargado(){
        return $this->id_encargado;
    }

    public function setid_encargado( $id_encargado){
        $this->id_encargado=$id_encargado;
    }

    public function getcedula(){
        return $this->cedula;
    }

    public function setcedula( $cedula){
        $this->cedula=$cedula;
    }

    public function getnombre(): ?string{
        return $this->nombre;
    }

    public function setnombre( string $nombre ){
        $this->nombre=$nombre;
    }

    public function getapellido(): ?string{
        return $this->apellido;
    }

    public function setapellido(string $apellido){
        $this->apellido=$apellido;
    }

    public function getid_cargo(): ?int{
        return $this->id_cargo;
    }

    public function setid_cargo(string $id_cargo){
        $this->id_cargo=$id_cargo;
    }

    public function gettelefono(){
        return $this->telefono;
    }

    public function settelefono( $telefono){
        $this->telefono=$telefono;
    }

    public function insertar(encargadosModel $p){
        try {
            $result = $p->getcedula();
            $verificar= builder::duplicados("cedula","encargados","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Cedula duplicada!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Encargado registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

            else{
            $estado=1;
            $consulta="INSERT INTO encargados(cedula,nombre,apellido,telefono,id_cargo,estado)
            VALUES (?,?,?,?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getcedula(),
                $p->getnombre(),
                $p->getapellido(),
                $p->gettelefono(),
                $p->getid_cargo(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Encargado registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM encargados e inner join cargo c
                on c.id_cargo=e.id_cargo WHERE e.estado !=0";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificar(encargadosModel $p){
        try {
            
            $consulta="UPDATE encargados SET 
                cedula=?,
                nombre=?,
                apellido=?,
                telefono=?,
                id_cargo=?
                WHERE id_encargado=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getcedula(),
                $p->getnombre(),
                $p->getapellido(),
                $p->gettelefono(),
                $p->getid_cargo(),
                $p->getid_encargado()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            
            $consulta= parent::conect()->prepare("SELECT * FROM encargados WHERE id_encargado=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new encargadosModel();
            $p->setcedula($r->cedula);
            $p->setnombre($r->nombre);
            $p->setapellido($r->apellido);
            $p->setid_cargo($r->id_cargo);
            $p->settelefono($r->telefono);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select(){
        $consulta= parent::conect()->prepare("SELECT * FROM cargo WHERE estado !=0");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }

    public function eliminar($id){
        try {
            $estado=0;
            $consulta="UPDATE encargados SET estado=? WHERE id_encargado=?;";
            parent::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    
		
	}

?>