<?php 

	class logout extends Load{
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