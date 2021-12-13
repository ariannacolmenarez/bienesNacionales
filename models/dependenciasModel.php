<?php 
	
	class dependenciasModel extends Conexion
	{

		private $codigo;
		private $clasificacion;
		private $nombre;
		private $locacion;
		private $observacion;
		private $tomaFisica;
		private $edicion;
		private $documentacion;
		private $id_encargado;
		private $chequeo;
	
		public function __construct(){
			 parent::conect();
		}
	
	
		public function getcodigo(): ?int{
			return $this->codigo;
		}
	
		public function setcodigo(int $codigo){
			$this->codigo=$codigo;
		}
	
		public function getclasificacion(): ?int{
			return $this->clasificacion;
		}
	
		public function setclasificacion( int $clasificacion ){
			$this->clasificacion=$clasificacion;
		}
	
		public function getnombre(): ?string{
			return $this->nombre;
		}
	
		public function setnombre(string $nombre){
			$this->nombre=$nombre;
		}
	
		public function getlocacion(): ?int{
			return $this->locacion;
		}
	
		public function setlocacion(int $locacion){
			$this->locacion=$locacion;
		}
	
		public function getobservacion(){
			return $this->observacion;
		}
	
		public function setobservacion( $observacion){
			$this->observacion=$observacion;
		}

		public function gettomaFisica(){
			return $this->tomaFisica;
		}
	
		public function settomaFisica( $tomaFisica){
			$this->tomaFisica=$tomaFisica;
		}

		public function getedicion(){
			return $this->edicion;
		}
	
		public function setedicion( $edicion){
			$this->edicion=$edicion;
		}

		public function getdocumentacion(){
			return $this->documentacion;
		}
	
		public function setdocumentacion( $documentacion){
			$this->documentacion=$documentacion;
		}

		public function getid_encargado(){
			return $this->id_encargado;
		}
	
		public function setid_encargado( $id_encargado){
			$this->id_encargado=$id_encargado;
		}

		public function getchequeo(){
			return $this->chequeo;
		}
	
		public function setchequeo( $chequeo){
			$this->chequeo=$chequeo;
		}
	
		public function insertar(dependenciasModel $p){
			try {
				$result = $p->getnombre();
				$verificar= builder::duplicados("dependencia","dependencias","$result");
				var_dump($verificar);
				if( $verificar === false ){
					$_SESSION["mensaje"] = "¡Dependencia duplicada!";
					$_SESSION["tipo_mensaje"] = "error";
					
				}elseif($verificar === NULL){
					$_SESSION["mensaje"] = "¡Dependencia registrada correctamente!";
						$_SESSION["tipo_mensaje"] = "success";
				}
	
				else{
				$estado=1;
				$consulta="INSERT INTO dependencias(codigo_dependencia,dependencia,observacion,toma_fisica,edicion,
				documentacion, fecha_chequeo, id_clasificacion,id_locacion,id_encargado,estado)
				VALUES (?,?,?,?,?,?,?,?,?,?,?)";
				parent::conect()->prepare($consulta)->execute(array(
					$p->getcodigo(),
					$p->getnombre(),
					$p->getobservacion(),
					$p->gettomaFisica(),
					$p->getedicion(),
					$p->getdocumentacion(),
					$p->getchequeo(),
					$p->getclasificacion(),
					$p->getlocacion(),
					$p->getid_encargado(),
					$estado
				));
				$_SESSION["mensaje"] = "¡Dependencia registrada correctamente!";
					$_SESSION["tipo_mensaje"] = "success";
            }
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
		
		public static function listar(){
			try {
				 
					$sql= "SELECT * FROM dependencias d inner join clasificacion_dep c
					on c.id_clasificacion=d.id_clasificacion
					INNER JOIN locacion on locacion.id_locacion=d.id_locacion
					INNER JOIN encargados e on e.id_encargado=d.id_encargado WHERE d.estado !=0";
					$consulta= parent::conect()->prepare($sql);
					$consulta->execute();
					return $consulta->fetchALL(PDO::FETCH_OBJ);
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function obtener($id){
			try {
				
				$consulta= parent::conect()->prepare("SELECT * FROM dependencias WHERE codigo_dependencia=?;");
				$consulta->execute(array($id));
				$r=$consulta->fetch(PDO::FETCH_OBJ);
				$p= new dependenciasModel();
				$p->setcodigo($r->codigo_dependencia);
				$p->setnombre($r->dependencia);
				$p->setobservacion($r->observacion);
				$p->settomaFisica($r->toma_fisica);
				$p->setedicion($r->edicion);
				$p->setdocumentacion($r->documentacion);
				$p->setchequeo($r->fecha_chequeo);
				$p->setclasificacion($r->id_clasificacion);
				$p->setlocacion($r->id_locacion);
				$p->setid_encargado($r->id_encargado);
				
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

		public function modificar(dependenciasModel $p){
			try {
				
				$consulta="UPDATE dependencias SET 
					
					dependencia=?,
					observacion=?,
					toma_fisica=?,
					edicion=?,
					documentacion=?,
					fecha_chequeo=?,
					id_clasificacion=?,
					id_locacion=?,
					id_encargado=?
					WHERE codigo_dependencia=?;
				
				";
				parent::conect()->prepare($consulta)->execute(array(
					$p->getnombre(),
					$p->getobservacion(),
					$p->gettomaFisica(),
					$p->getedicion(),
					$p->getdocumentacion(),
					$p->getchequeo(),
					$p->getclasificacion(),
					$p->getlocacion(),
					$p->getid_encargado(),
					$p->getcodigo()
	
				));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try {
	
				$consulta="UPDATE dependencias SET estado=? WHERE codigo_dependencia=?;";
				parent::conect()->prepare($consulta)->execute(array($estado,$id));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
	
		
	}

?>