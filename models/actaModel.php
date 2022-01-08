<?php 
	
	class actaModel extends Conexion
	{
		private $num_acta;
        private $fecha;
		private $num_factura;
		private $fecha_factura;
		private $factura;
		private $num_ordenC;
		private $fecha_ordenC;
		private $num_ordenP;
		private $id_proveedor;
	
		public function __construct(){
			 parent::conect();
		}
	
		public function getnum_acta(){
			return $this->num_acta;
		}
	
		public function setnum_acta($num_acta){
			$this->num_acta=$num_acta;
		}

        public function getfecha(){
			return $this->fecha;
		}
	
		public function setfecha($fecha){
			$this->fecha=$fecha;
		}

		public function getnum_factura(){
			return $this->num_factura;
		}
	
		public function setnum_factura( $num_factura){
			$this->num_factura=$num_factura;
		}

		public function getfecha_factura(){
			return $this->fecha_factura;
		}
	
		public function setfecha_factura( $fecha_factura){
			$this->fecha_factura=$fecha_factura;
		}

		public function getfactura(){
			return $this->factura;
		}
	
		public function setfactura( $factura){
			$this->factura=$factura;
		}

		public function getnum_ordenC(){
			return $this->num_ordenC;
		}
	
		public function setnum_ordenC( $num_ordenC){
			$this->num_ordenC=$num_ordenC;
		}

		public function getfecha_ordenC(){
			return $this->fecha_ordenC;
		}
	
		public function setfecha_ordenC( $fecha_ordenC){
			$this->fecha_ordenC=$fecha_ordenC;
		}
		public function getnum_ordenP(){
			return $this->num_ordenP;
		}
	
		public function setnum_ordenP( $num_ordenP){
			$this->num_ordenP=$num_ordenP;
		}

		public function getid_proveedor(){
			return $this->id_proveedor;
		}
	
		public function setid_proveedor( $id_proveedor){
			$this->id_proveedor=$id_proveedor;
		}
	
		public function insertar(actaModel $p){
			try {

				$consulta="INSERT INTO acta(num_acta,fecha, num_factura,fecha_factura,factura, num_ordenC,fecha_ordenC,num_ordenP
				, id_proveedor)
				VALUES (?,?,?,?,?,?,?,?,?)";
				parent::conect()->prepare($consulta)->execute(array(
					
					$p->getnum_acta(),
                    $p->getfecha(),
					$p->getnum_factura(),
					$p->getfecha_factura(),
					$p->getfactura(),
					$p->getnum_ordenC(),
					$p->getfecha_ordenC(),
					$p->getnum_ordenP(),
					$p->getid_proveedor()
				));
                $consulta=" SELECT *
                FROM acta 
                ORDER BY num_acta DESC 
                LIMIT 1";
               $consulta = parent::conect()->prepare($consulta);
               $consulta->execute();
               $id = $consulta->fetch(PDO::FETCH_OBJ);
               $id= $id->num_acta;
            	return $id;
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

		public function obtener($id){
			try {
				$id=builder::desencriptar($id);
				$consulta= parent::conect()->prepare("SELECT * FROM acta  WHERE num_acta=?;");
				$consulta->execute(array($id));
				$r=$consulta->fetch(PDO::FETCH_OBJ);
				$p= new actaModel();
				$p->setfecha($r->fecha);
				$p->setnum_factura($r->num_factura);
				$p->setfecha_factura($r->fecha_factura);
				$p->setfactura($r->factura);
				$p->setnum_ordenC($r->num_ordenC);
				$p->setfecha_ordenC($r->fecha_ordenC);
				$p->setnum_ordenP($r->num_ordenP);
				$p->setid_proveedor($r->id_proveedor);
				
				return $p;
	
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		public function select($tabla){
			$consulta= parent::conect()->prepare("SELECT * FROM $tabla");
			$consulta->execute();
			return $consulta->fetchALL(PDO::FETCH_OBJ);
		}

		public function modificar(actaModel $p){
			try {
				
				$consulta="UPDATE acta SET 
					
					fecha=?,
					num_factura=?,
					fecha_factura=?,
					factura=?,
					num_ordenC=?,
					fecha_ordenC=?,
					num_ordenP=?,
					id_proveedor=?
					WHERE num_acta=?;
				
				";
				parent::conect()->prepare($consulta)->execute(array(
				$p->getfecha(),
				$p->getnum_factura(),
				$p->getfecha_factura(),
				$p->getfactura(),
				$p->getnum_ordenC(),
				$p->getfecha_ordenC(),
				$p->getnum_ordenP(),
				$p->getid_proveedor(),
				$p->getnum_acta()
				));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}

		public function eliminar($id){
			try {
				$id=builder::desencriptar($id);
				$estado=0;
            	$consulta="UPDATE acta SET estado=? WHERE num_acta=?;";
				parent::conect()->prepare($consulta)->execute(array($estado,$id));
	
			} catch (Exception $e) {
	
				die($e->getMessage());
			}
		}
	
		
	}

?>