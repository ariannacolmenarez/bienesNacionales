<?php 

	class notificaciones extends load{
		public function __construct()
		{
			parent::__construct();
		}

		public function listar(){
			$noti = new notificacionesModel;
			$res = $noti->listar(12);
			header('Content-Type: application/json');
        	http_response_code(200);
			echo json_encode([
				'data' => $res
			]);
		}

		public function eliminar(){
			$noti = new notificacionesModel;
			$res = $noti->eliminar($_POST['id']);
			echo json_encode($res);
		}
	}

?>