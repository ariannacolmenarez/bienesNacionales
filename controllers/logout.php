<?php 

	class logout extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function logout()
		{
			session_destroy();
			header("location:".BASE_URL);
		}
	}

?>