<?php 
	
	class desincorporarModel extends Conexion
	{		
        private $movimiento;
        private $codigo_bien;
        private $fecha;
        private $conservacion;
        private $codigo_dependencia;
        private $denuncia;
        private $fecha_denuncia;
        private $oficio;

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
        public function getconservacion(){
            return $this->conservacion;
        }

        public function setconservacion( $conservacion){
            $this->conservacion=$conservacion;
        }
        public function getcodigo_dependencia(){
            return $this->codigo_dependencia;
        }

        public function setcodigo_dependencia( $codigo_dependencia){
            $this->codigo_dependencia=$codigo_dependencia;
        }

        public function getdenuncia(){
            return $this->denuncia;
        }

        public function setdenuncia( $denuncia){
            $this->denuncia=$denuncia;
        }

        public function getfecha_denuncia(){
            return $this->fecha_denuncia;
        }

        public function setfecha_denuncia( $fecha_denuncia){
            $this->fecha_denuncia=$fecha_denuncia;
        }

        public function getoficio(){
            return $this->oficio;
        }

        public function setoficio( $oficio){
            $this->oficio=$oficio;
        }


        public static function listar(){
            try {
                
                    $sql= "SELECT *
                    FROM desincorporar
                    INNER JOIN dependencias ON dependencias.codigo_dependencia = desincorporar.codigo_dependencia
                    INNER JOIN bienes ON bienes.codigo = desincorporar.codigo_bien";
                    $consulta= parent::conect()->prepare($sql);
                    $consulta->execute();
                    return $consulta->fetchALL(PDO::FETCH_OBJ);

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function obtenerDesincorporadosDependecias($desde, $hasta){
            try {
                
                    $sql= "SELECT COUNT(b.nombre) as bienes, d.dependencia FROM desincorporar de inner join bienes b on b.codigo=de.codigo_bien
                    inner join dependencias d on d.codigo_dependencia=de.codigo_dependencia   
                    WHERE de.fecha >= '$desde' AND de.fecha <=  '$hasta'
                    GROUP BY d.codigo_dependencia ORDER BY bienes DESC LIMIT 10;";
                    $consulta= parent::conect()->prepare($sql);
                    $consulta->execute();
                    $resp = $consulta->fetchALL(PDO::FETCH_OBJ);
                    $resultD = [];
                    $resultB = [];
                    for ($i=0; $i < count($resp) ; $i++) { 
                        $resultD[$i] = $resp[$i]->dependencia;
                        $resultB[$i] = $resp[$i]->bienes;
                    }
                    return ["dependencias" => $resultD, "bienes" => $resultB];
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function insertar(desincorporarModel $p){
            try {

                $consulta="INSERT INTO desincorporar( fecha, denuncia,
                fecha_denuncia, oficio, codigo_dependencia, concepto, codigo_bien)
                VALUES (?,?,?,?,?,?,?)";
                parent::conect()->prepare($consulta)->execute(array(
                    $p->getfecha(),
                    $p->getdenuncia(),
                    $p->getfecha_denuncia(),
                    $p->getoficio(),
                    $p->getcodigo_dependencia(),
                    $p->getconservacion(),
                    $p->getcodigo_bien()
                ));
                
                
            } catch (Exception $e) {

                die($e->getMessage());
            }
        }

        public function desincorporar($id){
            try {
                $estado="SIN ASIGNAR";
                $consulta="UPDATE bienes SET estados = '$estado' WHERE codigo = $id;";
                parent::conect()->prepare($consulta)->execute();
                $estados=0;
                $consulta="UPDATE asignacion SET estado = '$estados' WHERE codigo_bien = $id;";
                parent::conect()->prepare($consulta)->execute();
                $consulta="UPDATE asignacion_descripcion ad inner join asignacion a on
                a.num_movimiento=ad.num_movimiento SET ad.estado=a.estado
                WHERE a.codigo_bien = $id;";
                parent::conect()->prepare($consulta)->execute();
            } catch (Exception $e) {

                die($e->getMessage());
            }
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
            $consulta= parent::conect()->prepare("SELECT * FROM bienes where estados = '$estado' and estado=1 ;");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);
        }
		
	}

?>