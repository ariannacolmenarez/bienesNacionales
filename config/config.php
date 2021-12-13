<?php 
	
	//define("BASE_URL", "http://localhost/bienes_nacionales/")
	const BASE_URL = "http://localhost/bienes_nacionales/";

	//Zona horaria
	date_default_timezone_set('America/Caracas');
	
	//Datos de conexion a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "bienes_nacionales";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";
	
	//Delimitadores decimal y millar Ej. 14.4547,00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Bs.";
	
?>