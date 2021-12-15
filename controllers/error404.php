<?php 

	class error404 extends Load{
		public function __construct()
		{
			parent::__construct();
		}

		public function notFound()
		{
			$data['page_tag'] = "Error | Página no encontrada";
			parent::getView($this,"404", $data);
		}
	}

	$notFound = new error404();
	$notFound->notFound();
?>