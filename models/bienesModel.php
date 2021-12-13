<?php 
	
	class bienesModel extends Conexion
	{
		private $codigo;
		private $descripcion;
		private $nombre;
		private $fecha;
		private $id_tipo;
		private $codigo_categoria;
		private $num_acta;
	
		public function __construct(){
			 parent::conect();
		}

		public function getnum_acta(){
			return $this->num_acta;
		}
	
		public function setnum_acta( $num_acta){
			$this->num_acta=$num_acta;
		}
	

		public function getcodigo(){
			return $this->codigo;
		}
	
		public function setcodigo( $codigo){
			$this->codigo=$codigo;
		}
	
		public function getdescripcion(){
			return $this->descripcion;
		}
	
		public function setdescripcion( $descripcion ){
			$this->descripcion=$descripcion;
		}
	
		public function getnombre(){
			return $this->nombre;
		}
	
		public function setnombre( $nombre){
			$this->nombre=$nombre;
		}
	
		public function getfecha(){
			return $this->fecha;
		}
	
		public function setfecha( $fecha){
			$this->fecha=$fecha;
		}

		public function getid_tipo(){
			return $this->id_tipo;
		}
	
		public function setid_tipo( $id_tipo){
			$this->id_tipo=$id_tipo;
		}

		public function getcodigo_categoria(){
			return $this->codigo_categoria;
		}
	
		public function setcodigo_categoria( $codigo_categoria){
			$this->codigo_categoria=$codigo_categoria;
		}

		public function insertar(bienesModel $p){
			try {
				$result = $p->getcodigo();
				$verificar= builder::duplicados("codigo","bienes","$result");
				var_dump($verificar);
				if( $verificar === false ){
					$_SESSION["mensaje"] = "¡Codigo duplicado!";
					$_SESSION["tipo_mensaje"] = "error";
					
				}elseif($verificar === NULL){
					$_SESSION["mensaje"] = "¡Codigo registrado correctamente!";
						$_SESSION["tipo_mensaje"] = "success";
				}
	
				else{
				$estados="SIN ASIGNAR";
				$estado=1;
				$consulta="INSERT INTO bienes(codigo,nombre,descripcion, 
				id_tipo, codigo_categoria, num_acta,estados,estado)
				VALUES (?,?,?,?,?,?,?,?)";
				parent::conect()->prepare($consulta)->execute(array(
					
					$p->getcodigo(),
					$p->getnombre(),
					$p->getdescripcion(),
					$p->getid_tipo(),
					$p->getcodigo_categoria(),
					$p->getnum_acta(),
					$estados,
					$estado
				));
				$_SESSION["mensaje"] = "¡Bien registrado correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
		
		public static function listar(){
			try {
				 
					$sql= "SELECT * FROM bienes b INNER JOIN tipo_bien on tipo_bien.id_tipo = b.id_tipo
					INNER JOIN acta on acta.num_acta = b.num_acta 
					INNER JOIN categoria_sigecof on categoria_sigecof.codigo_categoria = b.codigo_categoria WHERE b.estado = 1";
					$consulta= parent::conect()->prepare($sql);
					$consulta->execute();
					return $consulta->fetchALL(PDO::FETCH_OBJ);
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function obtener($id){
			try {
				
				$consulta= parent::conect()->prepare("SELECT * FROM bienes WHERE num_acta=?;");
				$consulta->execute(array($id));
				$p=$consulta->fetchAll(PDO::FETCH_OBJ);
				
				return $p;
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function select($tabla){
			$consulta= parent::conect()->prepare("SELECT * FROM $tabla WHERE estado=1");
			$consulta->execute();
			return $consulta->fetchALL(PDO::FETCH_OBJ);
		}

		public function modificar(bienesModel $p){
			try {
				
				$consulta="UPDATE bienes SET 
					
					nombre=?,
					descripcion=?,
					id_tipo=?,
					codigo_categoria=?
					WHERE codigo=? AND num_acta=?;
				
				";
				parent::conect()->prepare($consulta)->execute(array(
				$p->getnombre(),
				$p->getdescripcion(),
				$p->getid_tipo(),
				$p->getcodigo_categoria(),
				$p->getcodigo(),
				$p->getnum_acta()
				));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try {
	
				$estado=0;
            	$consulta="UPDATE bienes SET estado=? WHERE codigo=?;";
				parent::conect()->prepare($consulta)->execute(array($estado,$id));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
	
		
	}

?>