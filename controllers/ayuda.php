<?php 

	class ayuda extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function ayuda()
		{
			$data['page_tag'] = "Ayuda | UPTAEB";
			$data['page_title'] = "Manual de ayuda";
			parent::getView($this,"ayuda", $data);
		}

	}

?>