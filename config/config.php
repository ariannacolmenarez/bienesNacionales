<?php 
	
	//define("BASE_URL", "http://localhost/bienes_nacionales/")
	define("BASE_URL", "http://localhost/bienes_nacionales/");

	//Zona horaria
	date_default_timezone_set('America/Caracas');
	
	//Datos de conexion a Base de Datos
	define("DB_HOST", "localhost");
	define("DB_NAME" ,"bienes_nacionales");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_CHARSET","charset=utf8");
	
	//Delimitadores decimal y millar Ej. 14.4547,00
	define("SPD", ".");
	define("SPM", ",");

	//Simbolo de moneda
	define("METHOD", "AES-256-CBC");
	define("SECRET_KEY","bienesNacionales$1");
	define("SECRET_IV","101712");

	
	
?>