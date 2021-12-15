<?php 

	class bitacora extends Load{
		public function __construct()
		{
			parent::__construct();
		}

		public function bitacora()
		{
			$data['page_tag'] = "Bitácora";
			$data['page_title'] = "Bitácora";
			parent::getView($this,"bitacora", $data);
		}
		public function listar(){
			foreach (bitacoraModel::listar() as $r){
				echo '	<tr class="text-center">
						<td>'.$r->usuario.'</td>
						<td>'.$r->fecha.'</td>
						<td>'.$r->accion.'</td>
						<td>'.$r->modulo.'</td>	';
			}
		}
	}

?>