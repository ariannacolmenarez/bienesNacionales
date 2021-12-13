<?php 
	class Controllers
	{ protected $views;
		public function __construct()
		{
			$this->loadModel();
		}

		public function loadModel()
		{
			$model = get_class($this)."Model";
			$routClass = "models/".$model.".php";
			if (file_exists($routClass)) {
				require_once($routClass);
			}
		}
		function getView($controller, $view, $data="")
		{
			$controller = get_class($controller);
			if ($controller == "login") {
				
				$view = "views/".$view.".php";
			}else
			{
				$view = "views/".$controller."/".$view.".php";
			}
			require_once($view);
		}
	}
	
?>