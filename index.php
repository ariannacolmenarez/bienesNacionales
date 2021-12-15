<?php 

	if(file_exists("config/config.php")){
		require_once("config/config.php");
	}else{
		die("<script>document.location.href='error404';</script>");
	}

	if(file_exists("helpers/helpers.php")){
		require_once("helpers/helpers.php");
	}else{
		die("<script>document.location.href='error404';</script>");
	}

	if(file_exists("libraries/core/conexion.php")){
		require_once("libraries/core/conexion.php");
	}else{
		die("<script>document.location.href='error404';</script>");
	}

	if(file_exists("libraries/core/builder.php")){
		require_once("libraries/core/builder.php");
	}else{
		die("<script>document.location.href='error404';</script>");
	}
	if(!isset($_SESSION)) {
		session_start();
	}
	if(file_exists("controllers/frontcontroller.php")){
		require_once ("controllers/frontcontroller.php");
		$paola = new frontcontroller();
	}else{
		die("<script>document.location.href='error404';</script>");
	}
	

	
	
	
	
	
?>