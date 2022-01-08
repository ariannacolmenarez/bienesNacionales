<?php 
	
	class categoriasModel extends Conexion
	{		
    private $codigo;
    private $presupuestaria;
    private $id_clasificacion;
    private $id_denominacion;

    public function __construct(){
        parent::conect();
    }

    public function getcodigo(){
        return $this->codigo;
    }

    public function setcodigo( $codigo){
        $this->codigo=$codigo;
    }

    public function getpresupuestaria(){
        return $this->presupuestaria;
    }

    public function setpresupuestaria( $presupuestaria){
        $this->presupuestaria=$presupuestaria;
    }

    public function getid_clasificacion(){
        return $this->id_clasificacion;
    }

    public function setid_clasificacion( $id_clasificacion ){
        $this->id_clasificacion=$id_clasificacion;
    }

    public function getid_denominacion(){
        return $this->id_denominacion;
    }

    public function setid_denominacion( $id_denominacion){
        $this->id_denominacion=$id_denominacion;
    }

    public function insertar(categoriasModel $p){
        try {
            $result = $p->getcodigo();
            $result2 = $p->getpresupuestaria();
            $verificar= builder::duplicados("codigo_categoria","categoria_sigecof","$result");
            $verificar2= builder::duplicados("presupuestaria","categoria_sigecof","$result2");
            var_dump($verificar);
            var_dump($verificar2);
            if( $verificar === false || $verificar2 === false ){
                
                if($verificar === false){
                    $nombre="codigo_categoria";
                }else{
                    $nombre="presupuestaria";
                }
                $_SESSION["mensaje"] = "¡$nombre duplicado!";
				$_SESSION["tipo_mensaje"] = "error";

            }
            elseif($verificar === NULL){
                echo"elseif";
                $_SESSION["mensaje"] = "¡Categoria sigecof registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
            else{
            $estado=1;
            $consulta="INSERT INTO categoria_sigecof(codigo_categoria,presupuestaria,id_clasificacion,id_denominacion,estado)
            VALUES (?,?,?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getcodigo(),
                $p->getpresupuestaria(),
                $p->getid_clasificacion(),
                $p->getid_denominacion(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Categoria sigecof registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public static function listar(){
        try {
             
                $sql= "SELECT * FROM categoria_sigecof s inner join clasificacion_cat c
                on s.id_clasificacion=c.id_clasificacion
				inner join denominacion d
                on s.id_denominacion=d.id_denominacion WHERE s.estado =1 ";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificar(categoriasModel $p){
        try {
            
            $consulta="UPDATE categoria_sigecof SET 
                presupuestaria=?,
                id_denominacion=?,
                id_clasificacion=?
                WHERE codigo_categoria=?;
            
            ";
            parent::conect()->prepare($consulta)->execute(array(
                $p->getpresupuestaria(),
                $p->getid_denominacion(),
                $p->getid_clasificacion(),
                $p->getcodigo()

            ));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

    public function obtener($id){
        try {
            $id=builder::desencriptar($id);
            $consulta= parent::conect()->prepare("SELECT * FROM categoria_sigecof WHERE codigo_categoria=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p= new categoriasModel();
            $p->setpresupuestaria($r->presupuestaria);
            $p->setid_denominacion($r->id_denominacion);
            $p->setid_clasificacion($r->id_clasificacion);
            
            return $p;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select($tabla){
        $consulta= parent::conect()->prepare("SELECT * FROM $tabla WHERE estado !=0");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }

    public function eliminar($id){
        try {
            $id=builder::desencriptar($id);
            $estado=0;
            $consulta="UPDATE categoria_sigecof SET estado=? WHERE codigo_categoria=?;";
            parent::conect()->prepare($consulta)->execute(array($estado,$id));

        } catch (Exception $e) {

            die($e->getMessage());
        }
    }
		
	}

?>