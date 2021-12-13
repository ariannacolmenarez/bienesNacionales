<?php 
	
	class incorporarModel extends Conexion
	{		
    private $movimiento;
    private $num_entrega;
    private $codigo_bien;
	private $fecha;
	private $prestamo;
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

    public function getnum_entrega(){
        return $this->num_entrega;
    }

    public function setnum_entrega( $num_entrega){
        $this->num_entrega=$num_entrega;
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
	public function getprestamo(){
        return $this->prestamo;
    }

    public function setprestamo( $prestamo){
        $this->prestamo=$prestamo;
    }
	public function getcantidad(){
        return $this->cantidad;
    }

    public function setcantidad( $cantidad){
        $this->cantidad=$cantidad;
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
				FROM asignacion
				INNER JOIN dependencias ON dependencias.codigo_dependencia = asignacion.codigo_dependencia
				INNER JOIN bienes ON bienes.codigo = asignacion.codigo_bien
                INNER JOIN asignacion_descripcion a ON a.num_movimiento = asignacion.num_movimiento
                where a.estado=1";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                return $consulta->fetchALL(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function obtenerAsignadosDependecias($desde, $hasta){
        try {
             
                $sql= "SELECT COUNT(b.nombre) as bienes, d.dependencia FROM asignacion a 
                    inner join bienes b on b.codigo=a.codigo_bien 
                    inner join dependencias d on d.codigo_dependencia=a.codigo_dependencia 
                    inner join asignacion_descripcion ad on ad.num_movimiento=a.num_movimiento 
                    WHERE ad.fecha >= '$desde' AND ad.fecha <=  '$hasta'
                    GROUP BY d.codigo_dependencia ORDER BY bienes DESC LIMIT 10;";
                $consulta= parent::conect()->prepare($sql);
                $consulta->execute();
                $resp = $consulta->fetchALL(PDO::FETCH_OBJ);
                $resultD = [];
                $resultB = [];
                for ($i=0; $i < 10 ; $i++) { 
                    $resultD[$i] = "";
                    $resultB[$i] = "";
                }
                for ($i=0; $i < count($resp) ; $i++) { 
                    $resultD[$i] = $resp[$i]->dependencia;
                    $resultB[$i] = $resp[$i]->bienes;
                }
                return ["dependencias" => $resultD, "bienes" => $resultB];
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(incorporarModel $p){
        try {
            $result = $p->getnum_entrega();
            $verificar= builder::duplicados("num_entrega","asignacion_descripcion","$result");
            var_dump($verificar);
            if( $verificar === false ){
                $_SESSION["mensaje"] = "¡Numero de entrega duplicada!";
				$_SESSION["tipo_mensaje"] = "error";
                
            }elseif($verificar === NULL){
                $_SESSION["mensaje"] = "¡Incorporacion registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
                    return true;
            }

            else{
                $estado=1;
            $consulta="INSERT INTO asignacion_descripcion(fecha, prestamo, num_entrega,estado)
            VALUES (?,?,?,?)";
            parent::conect()->prepare($consulta)->execute(array(
				$p->getfecha(),
				$p->getprestamo(),
				$p->getnum_entrega(),
                $estado
            ));
                $consulta=" SELECT *
                FROM asignacion_descripcion 
                ORDER BY num_movimiento DESC 
                LIMIT 1";
               $consulta = parent::conect()->prepare($consulta);
               $consulta->execute();
               $movimiento = $consulta->fetch(PDO::FETCH_OBJ);
               $movimiento= $movimiento->num_movimiento;
                $consulta="INSERT INTO asignacion(  num_movimiento,codigo_bien, codigo_dependencia,estado)
                    VALUES (?,?,?,?)";
                parent::conect()->prepare($consulta)->execute(array(
                
				$movimiento,
                $p->getcodigo_bien(),
				$p->getcodigo_dependencia(),
                $estado
            ));
            $_SESSION["mensaje"] = "¡Incorporacion registrada correctamente!";
            $_SESSION["tipo_mensaje"] = "success";
            return true;
        }
				
        } catch (Exception $e) {

            die($e->getMessage());
        }
    }

	public function asignar($id){
        try {
            $estado="ASIGNADO";
            $consulta="UPDATE bienes SET 
            estados=?
            WHERE codigo=?;";
            parent::conect()->prepare($consulta)->execute(array( $estado, $id ));
        }catch (Exception $e) {

            die($e->getMessage());
        }
			
	}

    public function select($tabla){
        $consulta= parent::conect()->prepare("SELECT * FROM $tabla where estado=1");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }

	public function selectBien(){
        $estado="SIN ASIGNAR";
        $consulta= parent::conect()->prepare("SELECT * FROM bienes where estados = '$estado' and estado=1;");
        $consulta->execute();
        return $consulta->fetchALL(PDO::FETCH_OBJ);
    }



		
	}

?>