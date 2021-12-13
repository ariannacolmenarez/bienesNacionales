<?php 
	
	class reasignarModel extends Conexion
	{		
    private $movimiento;
    private $codigo_bien;
	private $fecha;
	private $concepto;
	private $nueva_dependencia;
	private $id_tipo;
	private $id_reasignacion;
	private $codigo_dependencia;

    public function __construct(){
        parent::conect();
    }

    public function getmovimiento(){
        return $this->movimiento;
    }

    public function setmovimiento( $movimiento){
        $this->movimiento=$movimiento;
    }

    public function getcodigo_bien(){
        return $this->codigo_bien;
    }

    public function setcodigo_bien( $codigo_bien){
        $this->codigo_bien=$codigo_bien;
    }
	public function getfecha(){
        return $this->fecha;
    }

    public function setfecha( $fecha){
        $this->fecha=$fecha;
    }
	public function getconcepto(){
        return $this->concepto;
    }

    public function setconcepto( $concepto){
        $this->concepto=$concepto;
    }

	public function getnueva_dependencia(){
        return $this->nueva_dependencia;
    }

    public function setnueva_dependencia( $nueva_dependencia){
        $this->nueva_dependencia=$nueva_dependencia;
    }

	public function getid_tipo(){
        return $this->id_tipo;
    }

    public function setid_tipo( $id_tipo){
        $this->id_tipo=$id_tipo;
    }

	public function getid_reasignacion(){
        return $this->id_reasignacion;
    }

    public function setid_reasignacion( $id_reasignacion){
        $this->id_reasignacion=$id_reasignacion;
    }
	public function getcodigo_dependencia(){
        return $this->codigo_dependencia;
    }

    public function setcodigo_dependencia( $codigo_dependencia){
        $this->codigo_dependencia=$codigo_dependencia;
    }


    public static function listar(){
        try {
             
                $sql= "SELECT *
				FROM reasignar
				INNER JOIN reasignar_descripcion ON reasignar_descripcion.num_movimiento = reasignar.num_movimiento
				INNER JOIN tipo_reasignacion ON tipo_reasignacion.id_tipo = reasignar_descripcion.id_tipo
                INNER JOIN bienes ON bienes.codigo = reasignar.codigo_bien
                INNER JOIN dependencias ON dependencias.codigo_dependencia = reasignar.nueva_dependencia";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(reasignarModel $p){
        try {

            $consulta="INSERT INTO reasignar_descripcion( fecha, concepto, id_tipo, codigo_dependencia)
            VALUES (?,?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
				$p->getfecha(),
				$p->getconcepto(),
				$p->getid_tipo(),
				$p->getnueva_dependencia()
            ));
            $consulta=" SELECT *
                FROM reasignar_descripcion 
                ORDER BY num_movimiento DESC 
                LIMIT 1";
               $consulta = parent::conect()->prepare($consulta);
               $consulta->execute();
               $movimiento = $consulta->fetch(PDO::FETCH_OBJ);
               $movimiento= $movimiento->num_movimiento;

            $consulta="INSERT INTO reasignar(codigo_bien,num_movimiento, nueva_dependencia)
            VALUES (?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
				$p->getcodigo_bien(),
				$movimiento,
				$p->getnueva_dependencia()
            ));
			
			
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

	public function reasignar($id, $depN,$depA){
		   	$consulta="UPDATE asignacion SET codigo_dependencia=?
		   	WHERE codigo_bien=? and codigo_dependencia = ?;";
		   	parent::conect()->prepare($consulta)->execute(array( $depN, $id,$depA ));
	}

    public function select($tabla){
        $consulta= parent::conect()->prepare("SELECT * FROM $tabla WHERE estado=1;");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }

	public function buscarDependencia($codigo){
        $consulta= parent::conect()->prepare("select d.* from dependencias d
            join asignacion a 
                on d.codigo_dependencia = a.codigo_dependencia 
            join bienes b 
                on b.codigo = a.codigo_bien
        where b.codigo = '$codigo' and  a.estado = '1' limit 1;");
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_OBJ);
    }

    public function selectBien(){
        $estado="ASIGNADO";
        $consulta= parent::conect()->prepare("SELECT * FROM bienes where estados = '$estado' and estado = 1;");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }
		
	}

?>