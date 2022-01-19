SET FOREIGN_KEY_CHECKS=0;
SET @usuario_id=1;

SET CHARACTER SET utf8; 
TRUNCATE TABLE acta;
INSERT INTO acta VALUES("103","2022-01-17","23343","2022-01-12","","","","","5","0");



TRUNCATE TABLE asignacion;
INSERT INTO asignacion VALUES("37","55454667","37","3311","0");
INSERT INTO asignacion VALUES("38","55454667","38","3311","0");



TRUNCATE TABLE asignacion_descripcion;
INSERT INTO asignacion_descripcion VALUES("37","2022-01-12","no","3321","0");
INSERT INTO asignacion_descripcion VALUES("38","2022-01-13","si","221","0");



TRUNCATE TABLE bienes;
INSERT INTO bienes VALUES("3311","MONITORES","monitor nuevo","3","1235","103","SIN ASIGNAR","1");



TRUNCATE TABLE bitacora;
INSERT INTO bitacora VALUES("5","2021-10-27 23:26:37","Actualización de \"15 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("6","2021-10-28 00:33:53","Registro de \"9 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("7","2021-10-29 22:17:02","Registro de nuevo \"20 - 111 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("8","2021-10-29 22:17:02","Registro de nuevo \"20 - 222 - mouse\"","Bienes","1");
INSERT INTO bitacora VALUES("9","2021-10-29 22:18:13","Registro de nuevo \"21 - 1231232 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("10","2021-10-29 22:18:13","Registro de nuevo \"21 - 2323 - pantalla\"","Bienes","1");
INSERT INTO bitacora VALUES("11","2021-10-29 22:21:19","Registro de nuevo \"43 - 333 - monitor\"","Bienes","1");
INSERT INTO bitacora VALUES("12","2021-10-29 22:21:19","Registro de nuevo \"43 - 444 - cpu\"","Bienes","1");
INSERT INTO bitacora VALUES("13","2021-10-29 23:09:06","Registro de nuevo \"56 - 4444444 - telefono\"","Bienes","1");
INSERT INTO bitacora VALUES("14","2021-10-29 23:10:08","Registro de nuevo \"57 - 1212 - computador\"","Bienes","1");
INSERT INTO bitacora VALUES("15","2021-10-30 00:00:33","Registro de nuevo \"58 - 121233 - telefonoqqq\"","Bienes","1");
INSERT INTO bitacora VALUES("16","2021-10-30 00:00:33","Registro de nuevo \"58 - 3333 - monitor\"","Bienes","1");
INSERT INTO bitacora VALUES("17","2021-10-30 09:00:26","Actualización de \"58 - 3333\"","Bienes","1");
INSERT INTO bitacora VALUES("18","2021-10-30 09:00:26","Actualización de \"58 - 121233\"","Bienes","1");
INSERT INTO bitacora VALUES("19","2021-10-30 09:01:43","Actualización de \"56 - 4444444\"","Bienes","1");
INSERT INTO bitacora VALUES("20","2021-10-30 09:02:01","Actualización de \"58 - 3333\"","Bienes","1");
INSERT INTO bitacora VALUES("21","2021-10-30 09:02:01","Actualización de \"58 - 121233\"","Bienes","1");
INSERT INTO bitacora VALUES("22","2021-10-30 09:10:36","Registro de nuevo \"59 - 111222 - telefono\"","Bienes","1");
INSERT INTO bitacora VALUES("23","2021-10-30 10:07:15","Registro de nuevo \"60 - 2423 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("24","2021-10-30 11:06:02","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("25","2021-10-30 11:06:02","Registro de asignacion de \"10\"","Asignación ","1");
INSERT INTO bitacora VALUES("26","2021-10-30 11:15:12","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("27","2021-10-30 11:15:12","Registro de asignacion de \"11\"","Asignación ","1");
INSERT INTO bitacora VALUES("28","2021-10-30 11:16:16","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("29","2021-10-30 11:16:16","Registro de asignacion de \"12\"","Asignación ","1");
INSERT INTO bitacora VALUES("30","2021-10-30 11:23:17","Registro de nuevo \"61 - 21212 - computador\"","Bienes","1");
INSERT INTO bitacora VALUES("31","2021-10-30 11:24:10","Actualización de \"61 - 21212\"","Bienes","1");
INSERT INTO bitacora VALUES("32","2021-10-30 11:24:10","Registro de asignacion de \"13\"","Asignación ","1");
INSERT INTO bitacora VALUES("33","2021-10-30 12:16:15","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("34","2021-10-30 12:16:15","Registro de \"5\"","Desincorporar","1");
INSERT INTO bitacora VALUES("35","2021-10-30 12:47:47","Actualización \"13\"","Asignación","1");
INSERT INTO bitacora VALUES("36","2021-10-30 12:53:10","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("37","2021-10-30 12:53:10","Registro de asignacion de \"14\"","Asignación ","1");
INSERT INTO bitacora VALUES("38","2021-10-30 12:53:47","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("39","2021-10-30 12:53:47","Registro de \"6\"","Desincorporar","1");
INSERT INTO bitacora VALUES("40","2021-10-30 12:56:18","Actualización \"13\"","Asignación","1");
INSERT INTO bitacora VALUES("41","2021-10-30 15:17:28","Registro de \"16 - JAVIER\"","Usuarios","1");
INSERT INTO bitacora VALUES("42","2021-10-30 15:18:15","Actualización de \"16 - JAVIER\"","Usuarios","1");
INSERT INTO bitacora VALUES("43","2021-10-30 22:23:14","Actualización \"13\"","Asignación","1");
INSERT INTO bitacora VALUES("44","2021-10-30 22:24:26","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("45","2021-10-30 22:24:27","Registro de asignacion de \"15\"","Asignación ","1");
INSERT INTO bitacora VALUES("46","2021-10-31 22:09:01","Registro de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("47","2021-11-01 01:10:49","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("48","2021-11-01 02:45:54","Actualización de \"4 - ARIANNA23\"","Usuarios","1");
INSERT INTO bitacora VALUES("49","2021-11-01 02:47:46","Actualización de \"7 - ARIANNA23\"","Usuarios","1");
INSERT INTO bitacora VALUES("50","2021-11-01 02:53:27","Actualización de \"5\"","Categoría","1");
INSERT INTO bitacora VALUES("51","2021-11-01 03:14:45","Actualización de \"4 - ARIANNA00\"","Usuarios","1");
INSERT INTO bitacora VALUES("52","2021-11-01 10:08:50","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("53","2021-11-01 13:46:50","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("54","2021-11-01 13:46:50","Registro de \"7\"","Desincorporar","1");
INSERT INTO bitacora VALUES("55","2021-11-01 14:02:23","Actualización de \"60 - 2423\"","Bienes","1");
INSERT INTO bitacora VALUES("56","2021-11-01 14:02:23","Registro de asignacion de \"16\"","Asignación ","1");
INSERT INTO bitacora VALUES("57","2021-11-01 21:18:22","Actualización de \"6 - ADMINISTRADOR\"","Cargo","1");
INSERT INTO bitacora VALUES("58","2021-11-01 21:23:43","Actualización de \"10 - DEPARTAMENTO 1\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("59","2021-11-01 21:24:10","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("60","2021-11-01 21:24:44","Actualización de \"55454664 - ARIANNA\"","Dependencias","1");
INSERT INTO bitacora VALUES("61","2021-11-01 21:27:23","Actualización de \"1 - MUEBLE\"","Denominación","1");
INSERT INTO bitacora VALUES("62","2021-11-01 21:29:55","Actualización de \"1 - INGRESOS ORDINARIOS\"","Denominación","1");
INSERT INTO bitacora VALUES("63","2021-11-01 21:30:12","Actualización de \"4 - OTROS\"","Denominación","1");
INSERT INTO bitacora VALUES("64","2021-11-03 12:07:53","Registro de \"32 - ARIANNA\"","Encargados","1");
INSERT INTO bitacora VALUES("65","2021-11-03 12:08:19","Actualización de \"10 - DEPARTAMENTO 2\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("66","2021-11-03 12:08:37","Actualización de \"7 - BIENES\"","Roles","1");
INSERT INTO bitacora VALUES("67","2021-11-03 12:09:08","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("68","2021-11-03 17:16:07","Registro de \"10 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("69","2021-11-03 17:16:10","Registro de \"11 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("70","2021-11-03 17:16:33","Registro de \"12 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("71","2021-11-03 17:17:36","Registro de \"13 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("72","2021-11-03 17:18:05","Registro de \"14 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("73","2021-11-03 17:18:17","Registro de \"15 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("74","2021-11-03 17:22:30","Registro de \"16 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("75","2021-11-03 17:22:35","Registro de \"17 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("76","2021-11-03 17:29:52","Registro de \"18 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("77","2021-11-03 17:30:15","Registro de \"19 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("78","2021-11-03 17:30:56","Registro de \"20 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("79","2021-11-03 17:31:00","Registro de \"21 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("80","2021-11-03 17:41:43","Registro de \"22 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("81","2021-11-03 17:44:19","Registro de \"23 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("82","2021-11-03 17:55:09","Registro de \"24 - SADCADA\"","Cargo","1");
INSERT INTO bitacora VALUES("83","2021-11-03 17:55:40","Registro de \"25 - OPERADOR\"","Cargo","1");
INSERT INTO bitacora VALUES("84","2021-11-03 17:58:00","Registro de \"26 - CAJERA\"","Cargo","1");
INSERT INTO bitacora VALUES("85","2021-10-30 09:04:16","Actualización de \"26 - CAJERA\"","Cargo","1");
INSERT INTO bitacora VALUES("86","2021-10-30 09:05:12","Registro de \"27 - PERSONA\"","Cargo","1");
INSERT INTO bitacora VALUES("87","2021-10-30 09:05:38","Actualización de \"27 - PERSONA\"","Cargo","1");
INSERT INTO bitacora VALUES("88","2021-10-30 09:09:56","Registro de \"28 - GENTE\"","Cargo","1");
INSERT INTO bitacora VALUES("89","2021-10-30 09:39:36","Registro de \"17 - MARIANA\"","Usuarios","1");
INSERT INTO bitacora VALUES("90","2021-10-30 09:42:11","Registro de \"18 - MARIANIS\"","Usuarios","1");
INSERT INTO bitacora VALUES("91","2021-10-30 09:42:40","Actualización de \"18 - MARIANIS\"","Usuarios","1");
INSERT INTO bitacora VALUES("92","2021-10-30 09:50:35","Registro de \"33 - DANNI\"","Encargados","1");
INSERT INTO bitacora VALUES("93","2021-10-30 09:56:21","Actualización de \"33 - DANNI\"","Encargados","1");
INSERT INTO bitacora VALUES("94","2021-10-30 09:59:23","Registro de \"34 - MARIA\"","Encargados","1");
INSERT INTO bitacora VALUES("95","2021-10-30 10:07:35","Actualización de \"55454664 - ARIANNA\"","Dependencias","1");
INSERT INTO bitacora VALUES("96","2021-10-30 10:12:41","Registro de \"55454665 - JOSEE\"","Dependencias","1");
INSERT INTO bitacora VALUES("97","2021-10-30 10:24:19","Actualización de \"9\"","Categoría","1");
INSERT INTO bitacora VALUES("98","2021-10-30 10:32:06","Registro de \"1234\"","Categoria","1");
INSERT INTO bitacora VALUES("99","2021-10-30 10:53:08","Registro de \"9 - JOSUE\"","Roles","1");
INSERT INTO bitacora VALUES("100","2021-10-30 11:01:29","Registro de \"2 - AQUIFUE\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("101","2021-10-30 11:24:41","Registro de \"2 - DANI\"","Tipo Bien","1");
INSERT INTO bitacora VALUES("102","2021-10-30 11:32:23","Registro de \"11 - ALVAREZ\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("103","2021-10-30 11:38:57","Registro de \"14 - GIRALUNA\"","Locación","1");
INSERT INTO bitacora VALUES("104","2021-10-30 13:13:27","Registro de \"5 - TRECE\"","Denominación","1");
INSERT INTO bitacora VALUES("105","2021-10-30 13:30:36","Registro de \"2 - ALVAREZ\"","Clasificacion Categoría","1");
INSERT INTO bitacora VALUES("106","2021-10-30 13:31:03","Actualización de \"2 - MUEBLE\"","Clasificación Categoría","1");
INSERT INTO bitacora VALUES("107","2021-10-30 13:40:35","Registro de \"1234567 - CARLOS\"","Proveedores","1");
INSERT INTO bitacora VALUES("108","2021-10-30 13:41:54","Registro de \"29 - JEFE\"","Cargo","1");
INSERT INTO bitacora VALUES("109","2021-10-30 13:53:14","Actualización de \"34 - MARIA\"","Encargados","1");
INSERT INTO bitacora VALUES("110","2021-10-30 14:56:08","Registro de \"3 - ARI\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("111","2021-10-30 14:56:30","Registro de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("112","2021-10-30 14:56:36","Actualización de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("113","2021-10-30 14:56:44","Actualización de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("114","2021-10-30 14:58:32","Actualización de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("115","2021-10-30 14:58:37","Actualización de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("116","2021-10-30 15:07:26","Registro de \"3 - INMUEBLE\"","Tipo Bien","1");
INSERT INTO bitacora VALUES("117","2021-10-30 15:07:50","Actualización de \"3 - INMUEBLE\"","Tipo Bien","1");
INSERT INTO bitacora VALUES("118","2021-10-30 15:07:57","Actualización de \"3 - INMUEBLE\"","Tipo Bien","1");
INSERT INTO bitacora VALUES("119","2021-10-30 15:15:29","Registro de \"12 - DOCE\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("120","2021-10-30 15:15:50","Actualización de \"12 - DOCE\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("121","2021-10-30 15:24:01","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("122","2021-10-30 15:25:13","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("123","2021-10-30 15:25:19","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("124","2021-10-30 15:27:00","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("125","2021-10-30 15:27:04","Actualización de \"14 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("126","2021-10-30 15:27:10","Actualización de \"13 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("127","2021-10-30 15:27:10","Actualización de \"14 - GIRALUNA\"","Locacion","1");
INSERT INTO bitacora VALUES("128","2021-10-30 15:34:22","Registro de \"6 - UNO\"","Denominación","1");
INSERT INTO bitacora VALUES("129","2021-10-30 15:34:37","Actualización de \"6 - UNO\"","Denominación","1");
INSERT INTO bitacora VALUES("130","2021-10-30 15:37:52","Registro de \"3 - CALL\"","Clasificacion Categoría","1");
INSERT INTO bitacora VALUES("131","2021-10-30 15:38:03","Actualización de \"3 - CALL\"","Clasificación Categoría","1");
INSERT INTO bitacora VALUES("132","2021-10-31 09:47:38","Registro de \"35 - DANI\"","Encargados","1");
INSERT INTO bitacora VALUES("133","2021-10-31 10:00:02","Registro de \"55454666 - DANI\"","Dependencias","1");
INSERT INTO bitacora VALUES("134","2021-10-31 10:38:12","Registro de \"1235\"","Categoria","1");
INSERT INTO bitacora VALUES("135","2021-10-31 11:05:03","Registro de nuevo \"61 - 234 - hola\"","Bienes","1");
INSERT INTO bitacora VALUES("136","2021-10-31 11:34:50","Actualización de \"61 - 234\"","Bienes","1");
INSERT INTO bitacora VALUES("137","2021-10-31 11:34:50","Registro de asignacion de \"17\"","Asignación ","1");
INSERT INTO bitacora VALUES("138","2021-10-31 13:43:38","Registro de nuevo \"63 - 1231 - hola\"","Bienes","1");
INSERT INTO bitacora VALUES("139","2021-10-31 13:49:51","Actualización de \"63 - 1231\"","Bienes","1");
INSERT INTO bitacora VALUES("140","2021-10-31 14:11:34","Actualización de \"61 - 234\"","Bienes","1");
INSERT INTO bitacora VALUES("141","2021-10-31 14:19:53","Registro de nuevo \"66 - 2323 - dftrtrt\"","Bienes","1");
INSERT INTO bitacora VALUES("142","2021-10-31 14:20:26","Actualización de \"66 - 2323\"","Bienes","1");
INSERT INTO bitacora VALUES("143","2021-10-31 14:20:26","Registro de asignacion de \"18\"","Asignación ","1");
INSERT INTO bitacora VALUES("144","2021-10-31 14:30:35","Registro de nuevo \"67 - 12312 - paola\"","Bienes","1");
INSERT INTO bitacora VALUES("145","2021-10-31 14:31:28","Actualización de \"67 - 12312\"","Bienes","1");
INSERT INTO bitacora VALUES("146","2021-10-31 14:33:31","Registro de nuevo \"68 - 1232 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("147","2021-10-31 14:33:55","Actualización de \"68 - 1232\"","Bienes","1");
INSERT INTO bitacora VALUES("148","2021-10-31 14:35:41","Registro de nuevo \"69 - 123123 - raton\"","Bienes","1");
INSERT INTO bitacora VALUES("149","2021-10-31 14:36:06","Actualización de \"69 - 123123\"","Bienes","1");
INSERT INTO bitacora VALUES("150","2021-10-31 14:36:06","Registro de asignacion de \"21\"","Asignación ","1");
INSERT INTO bitacora VALUES("151","2021-10-31 14:36:47","Actualización de \"61 - 234\"","Bienes","1");
INSERT INTO bitacora VALUES("152","2021-10-31 14:44:57","Registro de nuevo \"70 - 213 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("153","2021-10-31 14:45:40","Actualización de \"70 - 213\"","Bienes","1");
INSERT INTO bitacora VALUES("154","2021-10-31 14:45:40","Registro de asignacion de \"22\"","Asignación ","1");
INSERT INTO bitacora VALUES("155","2021-10-31 14:50:28","Registro de nuevo \"71 - 1233 - teclado\"","Bienes","1");
INSERT INTO bitacora VALUES("156","2021-10-31 14:51:11","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("157","2021-10-31 14:51:12","Registro de asignacion de \"23\"","Asignación ","1");
INSERT INTO bitacora VALUES("158","2021-10-31 14:52:26","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("159","2021-11-05 16:24:53","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("160","2021-11-05 16:24:53","Actualización \"23\"","Asignación","1");
INSERT INTO bitacora VALUES("161","2021-11-05 16:24:53","Actualización \"23\"","Asignación","1");
INSERT INTO bitacora VALUES("162","2021-11-05 16:24:53","Registro de \"8\"","Desincorporar","1");
INSERT INTO bitacora VALUES("163","2021-11-05 16:37:20","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("164","2021-11-05 16:37:20","Registro de asignacion de \"24\"","Asignación ","1");
INSERT INTO bitacora VALUES("165","2021-11-05 16:37:43","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("166","2021-11-05 16:37:43","Actualización \"23\"","Asignación","1");
INSERT INTO bitacora VALUES("167","2021-11-05 16:37:43","Actualización \"24\"","Asignación","1");
INSERT INTO bitacora VALUES("168","2021-11-05 16:37:43","Registro de \"9\"","Desincorporar","1");
INSERT INTO bitacora VALUES("169","2021-11-05 16:39:52","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("170","2021-11-05 16:39:52","Registro de asignacion de \"25\"","Asignación ","1");
INSERT INTO bitacora VALUES("171","2021-11-05 16:40:12","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("172","2021-11-05 16:40:12","Actualización \"23\"","Asignación","1");
INSERT INTO bitacora VALUES("173","2021-11-05 16:40:12","Actualización \"24\"","Asignación","1");
INSERT INTO bitacora VALUES("174","2021-11-05 16:40:12","Actualización \"25\"","Asignación","1");
INSERT INTO bitacora VALUES("175","2021-11-05 16:40:12","Registro de \"10\"","Desincorporar","1");
INSERT INTO bitacora VALUES("176","2021-11-05 16:41:28","Actualización de \"71 - 1233\"","Bienes","1");
INSERT INTO bitacora VALUES("177","2021-11-05 16:41:28","Registro de asignacion de \"26\"","Asignación ","1");
INSERT INTO bitacora VALUES("178","2021-11-05 16:42:07","Registro de nuevo \"72 - 32444 - raton\"","Bienes","1");
INSERT INTO bitacora VALUES("179","2021-11-05 16:42:32","Actualización de \"72 - 32444\"","Bienes","1");
INSERT INTO bitacora VALUES("180","2021-11-05 16:54:48","Registro de nuevo \"73 - 12312 - hola\"","Bienes","1");
INSERT INTO bitacora VALUES("181","2021-11-05 16:58:04","Registro de asignacion de \"27\"","Asignación ","1");
INSERT INTO bitacora VALUES("182","2021-11-05 16:58:04","Actualización de \"73 - 12312\"","Bienes","1");
INSERT INTO bitacora VALUES("183","2021-11-05 16:58:52","Actualización de \"73 - 12312\"","Bienes","1");
INSERT INTO bitacora VALUES("184","2021-11-05 16:58:52","Actualización \"27\"","Asignación","1");
INSERT INTO bitacora VALUES("185","2021-11-05 16:58:52","Registro de \"11\"","Desincorporar","1");
INSERT INTO bitacora VALUES("186","2021-11-05 17:06:30","Registro de nuevo \"74 - 123123 - wsqewqe\"","Bienes","1");
INSERT INTO bitacora VALUES("187","2021-11-05 17:06:35","Actualización de \"74 - 123123\"","Bienes","1");
INSERT INTO bitacora VALUES("188","2021-11-05 17:08:11","Registro de nuevo \"75 - 1231 - pantalla\"","Bienes","1");
INSERT INTO bitacora VALUES("189","2021-11-05 17:09:33","Registro de nuevo \"76 - 12345 - raton\"","Bienes","1");
INSERT INTO bitacora VALUES("190","2021-10-31 09:44:10","Registro de nuevo \"83 - 112223 - corneta\"","Bienes","1");
INSERT INTO bitacora VALUES("191","2021-10-31 09:50:29","Registro de nuevo \"84 - 123223 - corneta\"","Bienes","1");
INSERT INTO bitacora VALUES("192","2021-10-31 10:20:40","Registro de nuevo \"88 - 12322 - cornetas\"","Bienes","1");
INSERT INTO bitacora VALUES("193","2021-10-31 10:20:40","Registro de nuevo \"88 - 123224 - disco\"","Bienes","1");
INSERT INTO bitacora VALUES("194","2021-10-31 10:23:38","Registro de nuevo \"90 - 1232222 - pintura\"","Bienes","1");
INSERT INTO bitacora VALUES("195","2021-10-31 10:23:38","Registro de nuevo \"90 - 1232223 - plato\"","Bienes","1");
INSERT INTO bitacora VALUES("196","2021-10-31 10:24:37","Registro de nuevo \"91 - 222222 - cornetao\"","Bienes","1");
INSERT INTO bitacora VALUES("197","2021-10-31 10:24:38","Registro de nuevo \"91 - 1232224 - pinturas\"","Bienes","1");
INSERT INTO bitacora VALUES("198","2021-10-31 10:25:29","Registro de nuevo \"92 - 1232225 - cornetau\"","Bienes","1");
INSERT INTO bitacora VALUES("199","2021-10-31 10:28:32","Registro de nuevo \"93 - 1232226 - cornetas\"","Bienes","1");
INSERT INTO bitacora VALUES("200","2021-10-31 10:30:13","Registro de nuevo \"94 - 1232227 - vaso\"","Bienes","1");
INSERT INTO bitacora VALUES("201","2021-10-31 10:41:14","Registro de nuevo \"101 - 333333 - platos\"","Bienes","1");
INSERT INTO bitacora VALUES("202","2021-10-31 10:42:32","Registro de nuevo \"102 - 44444 - caballo\"","Bienes","1");
INSERT INTO bitacora VALUES("203","2021-10-31 10:45:59","Registro de asignacion de \"28\"","Asignación ","1");
INSERT INTO bitacora VALUES("204","2021-10-31 10:46:00","Actualización de \"93 - 1232226\"","Bienes","1");
INSERT INTO bitacora VALUES("205","2021-11-07 18:13:04","Registro de asignacion de \"29\"","Asignación ","1");
INSERT INTO bitacora VALUES("206","2021-11-07 18:13:04","Actualización de \"75 - 1231\"","Bienes","1");
INSERT INTO bitacora VALUES("207","2021-12-15 09:22:12","Actualización de \"9 - SECRETARIA\"","Roles","1");
INSERT INTO bitacora VALUES("208","2021-12-15 09:23:20","Registro de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("209","2021-12-15 11:57:20","Registro de \"10 - ADMINISTRADOR\"","Roles","1");
INSERT INTO bitacora VALUES("210","2021-12-15 12:04:09","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("211","2021-12-15 12:11:31","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("212","2021-12-15 12:16:37","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("213","2021-12-15 12:17:03","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("214","2021-12-15 12:19:47","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("215","2021-12-15 12:20:32","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("216","2021-12-15 12:28:42","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("217","2021-12-15 12:28:59","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("218","2021-12-15 12:31:47","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("219","2021-12-15 12:32:25","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("220","2021-12-15 12:36:14","Actualización de \"13 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("221","2021-12-15 12:41:45","Registro de \"20 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("222","2021-12-15 12:43:26","Registro de \"36 - ARIANNA\"","Encargados","1");
INSERT INTO bitacora VALUES("223","2021-12-15 12:43:45","Actualización de \"36 - ARIANNA\"","Encargados","1");
INSERT INTO bitacora VALUES("279","2021-12-30 10:57:45","Actualización de \"20 - SUPERUSER\"","Usuarios","1");
INSERT INTO bitacora VALUES("280","2021-12-30 12:32:07","Registro de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("281","2021-12-30 13:59:48","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("282","2021-12-30 14:08:03","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("283","2021-12-30 14:12:27","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("284","2021-12-30 14:15:44","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("285","2021-12-30 14:15:53","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("286","2021-12-30 15:00:09","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("287","2021-12-30 15:18:22","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("288","2022-01-03 09:45:37","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("289","2022-01-03 09:58:06","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("290","2022-01-03 11:07:51","Registro de \"22 - MARIAS\"","Usuarios","1");
INSERT INTO bitacora VALUES("291","2022-01-03 11:24:30","Registro de \"23 - MARISOL\"","Usuarios","1");
INSERT INTO bitacora VALUES("292","2022-01-03 12:30:10","Actualización de \"23 - MARISOL\"","Usuarios","1");
INSERT INTO bitacora VALUES("293","2022-01-03 12:42:49","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("294","2022-01-03 12:43:22","Actualización de \"22 - MARIAS\"","Usuarios","1");
INSERT INTO bitacora VALUES("295","2022-01-03 12:51:53","Actualización de \"4 - AQUIFUEX2\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("296","2022-01-03 13:20:23","Actualización de \"3 - ARI\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("297","2022-01-03 13:20:40","Actualización de \"2 - DANI\"","Tipo Bien","1");
INSERT INTO bitacora VALUES("298","2022-01-03 13:23:07","Actualización de \"9 - SECRETARIA\"","Roles","1");
INSERT INTO bitacora VALUES("299","2022-01-03 13:24:10","Actualización de \"9 - SECRETARIA\"","Roles","1");
INSERT INTO bitacora VALUES("300","2022-01-04 09:28:00","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("301","2022-01-04 09:28:23","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("302","2022-01-04 09:49:46","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("303","2022-01-04 09:51:45","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("304","2022-01-04 09:53:20","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("305","2022-01-04 09:54:47","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("306","2022-01-04 10:03:03","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("307","2022-01-04 10:04:34","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("308","2022-01-04 10:05:33","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("309","2022-01-04 10:06:14","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("310","2022-01-04 10:06:36","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("311","2022-01-04 10:29:36","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("312","2022-01-04 11:16:03","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("313","2022-01-04 11:18:41","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("314","2022-01-04 11:19:24","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("315","2022-01-04 11:22:06","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("316","2022-01-04 11:24:43","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("317","2022-01-04 11:25:30","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("318","2022-01-04 11:29:21","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("319","2022-01-04 11:36:42","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("320","2022-01-04 11:38:10","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("321","2022-01-04 12:12:50","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("322","2022-01-04 12:13:07","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("323","2022-01-04 12:14:34","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("324","2022-01-04 12:15:50","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("325","2022-01-04 12:21:17","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("326","2022-01-04 12:27:38","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("327","2022-01-04 12:29:49","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("328","2022-01-04 12:31:36","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("329","2022-01-04 12:34:13","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("330","2022-01-04 12:35:19","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("331","2022-01-04 12:43:57","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("332","2022-01-04 12:47:31","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("333","2022-01-04 12:59:04","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("334","2022-01-04 13:00:58","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("335","2022-01-04 13:12:28","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("336","2022-01-04 13:13:43","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("337","2022-01-04 13:16:44","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("338","2022-01-04 13:25:43","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("339","2022-01-04 13:27:34","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("340","2022-01-04 13:30:26","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("341","2022-01-04 13:32:48","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("342","2022-01-05 16:43:17","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("343","2022-01-05 16:44:16","Registro de \"24 - JOSE\"","Usuarios","1");
INSERT INTO bitacora VALUES("344","2022-01-05 16:50:03","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("345","2022-01-05 20:00:33","Registro de asignacion de \"30\"","Asignación ","1");
INSERT INTO bitacora VALUES("346","2022-01-05 20:00:34","Actualización de \"88 - 12322\"","Bienes","1");
INSERT INTO bitacora VALUES("347","2022-01-06 21:17:26","Registro de asignacion de \"32\"","Asignación ","1");
INSERT INTO bitacora VALUES("348","2022-01-06 21:17:26","Actualización de \"101 - 333333\"","Bienes","1");
INSERT INTO bitacora VALUES("349","2022-01-06 21:46:49","Registro de asignacion de \"33\"","Asignación ","1");
INSERT INTO bitacora VALUES("350","2022-01-06 21:46:49","Actualización de \"91 - 1232224\"","Bienes","1");
INSERT INTO bitacora VALUES("351","2022-01-06 21:49:34","Registro de asignacion de \"34\"","Asignación ","1");
INSERT INTO bitacora VALUES("352","2022-01-06 21:49:34","Actualización de \"94 - 1232227\"","Bienes","1");
INSERT INTO bitacora VALUES("353","2022-01-06 21:51:27","Registro de asignacion de \"35\"","Asignación ","1");
INSERT INTO bitacora VALUES("354","2022-01-06 21:51:28","Actualización de \"90 - 1232222\"","Bienes","1");
INSERT INTO bitacora VALUES("355","2022-01-06 21:58:17","Actualización de \"88 - 12322\"","Bienes","1");
INSERT INTO bitacora VALUES("356","2022-01-06 21:58:17","Actualización \"30\"","Asignación","1");
INSERT INTO bitacora VALUES("357","2022-01-06 21:58:18","Registro de \"1\"","Desincorporar","1");
INSERT INTO bitacora VALUES("358","2022-01-07 08:26:27","Actualización de \"90 - 1232222\"","Bienes","1");
INSERT INTO bitacora VALUES("359","2022-01-07 08:26:27","Actualización \"35\"","Asignación","1");
INSERT INTO bitacora VALUES("360","2022-01-07 08:26:27","Registro de \"2\"","Desincorporar","1");
INSERT INTO bitacora VALUES("361","2022-01-08 10:05:07","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("362","2022-01-08 11:44:35","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("363","2022-01-08 11:48:32","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("364","2022-01-08 11:52:21","Actualización de \"19 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("365","2022-01-08 11:54:32","Actualización de \"19 - SUPERUSUARIO\"","Usuarios","1");
INSERT INTO bitacora VALUES("366","2022-01-08 12:05:32","Actualización de \"1234567 - CARLO\"","Proveedores","1");
INSERT INTO bitacora VALUES("367","2022-01-08 12:23:22","Actualización de \"24 - JOSES\"","Usuarios","1");
INSERT INTO bitacora VALUES("368","2022-01-08 12:32:23","Registro de \"25 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("369","2022-01-08 12:33:29","Actualización de \"25 - PAOLAS\"","Usuarios","1");
INSERT INTO bitacora VALUES("370","2022-01-08 12:33:57","Actualización de \"25 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("371","2022-01-08 12:34:16","Actualización de \"25 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("372","2022-01-08 12:35:21","Actualización de \"19 - SUPERUSUARIO\"","Usuarios","1");
INSERT INTO bitacora VALUES("373","2022-01-08 12:36:27","Actualización de \"19 - SUPERUSUARIO\"","Usuarios","1");
INSERT INTO bitacora VALUES("374","2022-01-08 12:38:06","Registro de asignacion de \"36\"","Asignación ","1");
INSERT INTO bitacora VALUES("375","2022-01-08 12:38:06","Actualización de \"102 - 44444\"","Bienes","1");
INSERT INTO bitacora VALUES("376","2022-01-08 12:44:51","Registro de \"55454667 - CONTADURIA\"","Dependencias","1");
INSERT INTO bitacora VALUES("377","2022-01-17 09:47:01","Actualización de \"25 - PAOLA\"","Usuarios","1");
INSERT INTO bitacora VALUES("378","2022-01-17 09:47:04","Actualización de \"16 - DANIELA\"","Usuarios","1");
INSERT INTO bitacora VALUES("379","2022-01-17 09:47:06","Actualización de \"21 - ARIANNA\"","Usuarios","1");
INSERT INTO bitacora VALUES("380","2022-01-17 09:51:39","Actualización de \"55454666 - DANI\"","Dependencias","1");
INSERT INTO bitacora VALUES("381","2022-01-17 09:51:41","Actualización de \"55454665 - JOSEE\"","Dependencias","1");
INSERT INTO bitacora VALUES("382","2022-01-17 09:53:02","Actualización de \"1234\"","Categoría","1");
INSERT INTO bitacora VALUES("383","2022-01-17 09:53:46","Actualización de \"93 - 1232226\"","Bienes","1");
INSERT INTO bitacora VALUES("384","2022-01-17 09:53:48","Actualización de \"94 - 1232227\"","Bienes","1");
INSERT INTO bitacora VALUES("385","2022-01-17 09:53:50","Actualización de \"101 - 333333\"","Bienes","1");
INSERT INTO bitacora VALUES("386","2022-01-17 09:53:53","Actualización de \"102 - 44444\"","Bienes","1");
INSERT INTO bitacora VALUES("387","2022-01-17 09:53:55","Actualización de \"92 - 1232225\"","Bienes","1");
INSERT INTO bitacora VALUES("388","2022-01-17 09:53:57","Actualización de \"91 - 1232224\"","Bienes","1");
INSERT INTO bitacora VALUES("389","2022-01-17 09:53:59","Actualización de \"91 - 222222\"","Bienes","1");
INSERT INTO bitacora VALUES("390","2022-01-17 09:54:02","Actualización de \"90 - 1232223\"","Bienes","1");
INSERT INTO bitacora VALUES("391","2022-01-17 09:54:04","Actualización de \"90 - 1232222\"","Bienes","1");
INSERT INTO bitacora VALUES("392","2022-01-17 09:54:06","Actualización de \"88 - 123224\"","Bienes","1");
INSERT INTO bitacora VALUES("393","2022-01-17 09:54:09","Actualización de \"88 - 12322\"","Bienes","1");
INSERT INTO bitacora VALUES("394","2022-01-17 10:12:44","Actualización de \"2 - POR DESCARGO\"","Tipo Reasignación","1");
INSERT INTO bitacora VALUES("395","2022-01-17 10:13:28","Actualización de \"11 - CONTADURIA\"","Clasificación Dependencia","1");
INSERT INTO bitacora VALUES("396","2022-01-17 10:14:01","Actualización de \"28 - SECRETARIA\"","Cargo","1");
INSERT INTO bitacora VALUES("397","2022-01-17 10:14:23","Actualización de \"1234567 - CARLOS\"","Proveedores","1");
INSERT INTO bitacora VALUES("398","2022-01-17 11:58:00","Registro de nuevo \"103 - 3311 - MONITORES\"","Bienes","1");
INSERT INTO bitacora VALUES("399","2022-01-17 11:58:41","Registro de asignacion de \"37\"","Asignación ","1");
INSERT INTO bitacora VALUES("400","2022-01-17 11:58:41","Actualización de \"103 - 3311\"","Bienes","1");
INSERT INTO bitacora VALUES("401","2022-01-17 11:59:19","Actualización de \"103 - 3311\"","Bienes","1");
INSERT INTO bitacora VALUES("402","2022-01-17 11:59:19","Actualización \"37\"","Asignación","1");
INSERT INTO bitacora VALUES("403","2022-01-17 11:59:19","Registro de \"3\"","Desincorporar","1");
INSERT INTO bitacora VALUES("404","2022-01-17 12:03:03","Registro de asignacion de \"38\"","Asignación ","1");
INSERT INTO bitacora VALUES("405","2022-01-17 12:03:03","Actualización de \"103 - 3311\"","Bienes","1");
INSERT INTO bitacora VALUES("406","2022-01-17 12:03:54","Actualización de \"103 - 3311\"","Bienes","1");
INSERT INTO bitacora VALUES("407","2022-01-17 12:03:54","Actualización \"37\"","Asignación","1");
INSERT INTO bitacora VALUES("408","2022-01-17 12:03:54","Actualización \"38\"","Asignación","1");
INSERT INTO bitacora VALUES("409","2022-01-17 12:03:54","Registro de \"4\"","Desincorporar","1");



TRUNCATE TABLE cargo;
INSERT INTO cargo VALUES("28","SECRETARIA","1");
INSERT INTO cargo VALUES("29","JEFE","1");



TRUNCATE TABLE categoria_sigecof;
INSERT INTO categoria_sigecof VALUES("1235","5678","2","5","1");



TRUNCATE TABLE clasificacion_cat;
INSERT INTO clasificacion_cat VALUES("2","MUEBLE","1");



TRUNCATE TABLE clasificacion_dep;
INSERT INTO clasificacion_dep VALUES("11","CONTADURIA","1");



TRUNCATE TABLE denominacion;
INSERT INTO denominacion VALUES("5","TRECE","1");



TRUNCATE TABLE dependencias;
INSERT INTO dependencias VALUES("55454667","CONTADURIA","BUEN ESTADO","SI","","","2022-01-06","11","13","34","1");



TRUNCATE TABLE desincorporar;
INSERT INTO desincorporar VALUES("3","2022-01-13","","2022-01-17","","55454667","MUY BUEN ESTADO","3311","0");
INSERT INTO desincorporar VALUES("4","2022-01-14","NO","2022-01-12","","55454667","MAL ESTADO","3311","1");



TRUNCATE TABLE encargados;
INSERT INTO encargados VALUES("34","12245788","MARIA","RAMONES","426789453","29","1");
INSERT INTO encargados VALUES("35","12245648","DANI","GARCIA","424356748","28","1");
INSERT INTO encargados VALUES("36","27629581","ARIANNA","COLMENAREZ","345353","29","0");



TRUNCATE TABLE locacion;
INSERT INTO locacion VALUES("13","GIRALUNA","1");



TRUNCATE TABLE modulos;
INSERT INTO modulos VALUES("1","Usuarios","Gestionar Usuarios");
INSERT INTO modulos VALUES("2","Encargados","Gestionar Encargados");
INSERT INTO modulos VALUES("3","Dependencias","Gestionar Dependencias");
INSERT INTO modulos VALUES("4","Categorias","Gestionar Categoria SIGECOF");
INSERT INTO modulos VALUES("5","Actas","Gestionar Actas de bienes");
INSERT INTO modulos VALUES("6","Asignar Bien","Asignar los Bienes a las dependencias");
INSERT INTO modulos VALUES("7","Desincorporar Bien","Desincorporar bienes de las dependencias");
INSERT INTO modulos VALUES("8","Reasignar Bien","Reasignar los bienes de las dependencias");
INSERT INTO modulos VALUES("9","Generar Reportes","Reportes ");
INSERT INTO modulos VALUES("10","Gestionar Seguridad","Roles de Usuario");
INSERT INTO modulos VALUES("11","Perfil","Informacion de perfil");
INSERT INTO modulos VALUES("12","Configuración","Configuracion de informacion del sistema");



TRUNCATE TABLE notificaciones;
INSERT INTO notificaciones VALUES("1","Bien Asignado","El Bien \"platos\" ha sido asignado a la Dependencia \"JOSEE\"","0","2022-01-06 21:17:26");
INSERT INTO notificaciones VALUES("2","Bien Asignado","El Bien \"pinturas\" ha sido asignado a la Dependencia \"DANI\" <br>2022-01-04","1","2022-01-06 21:46:49");
INSERT INTO notificaciones VALUES("3","Bien Asignado","El Bien \"vaso\" ha sido asignado a la Dependencia \"JOSEE\" <br>02/01/2022","1","2022-01-06 21:49:34");
INSERT INTO notificaciones VALUES("4","Bien Asignado","El Bien \"pintura\" ha sido asignado a la Dependencia \"JOSEE\" <br>03-01-2022","0","2022-01-06 21:51:27");
INSERT INTO notificaciones VALUES("5","Bien Desincorporado","El Bien \"cornetas\" ha sido desincorporado de la Dependencia \"JOSEE\" <br>02-01-2022","0","2022-01-06 21:58:18");
INSERT INTO notificaciones VALUES("6","Bien Desincorporado","El Bien \"pintura\" ha sido desincorporado de la Dependencia \"JOSEE\" <br>05-01-2022","0","2022-01-07 08:26:27");
INSERT INTO notificaciones VALUES("7","Bien Asignado","El Bien \"caballo\" ha sido asignado a la Dependencia \"JOSEE\" <br>20-01-2022","0","2022-01-08 12:38:06");
INSERT INTO notificaciones VALUES("8","Bien Asignado","El Bien \"MONITORES\" ha sido asignado a la Dependencia \"CONTADURIA\" <br>12-01-2022","1","2022-01-17 11:58:41");
INSERT INTO notificaciones VALUES("9","Bien Desincorporado","El Bien \"MONITORES\" ha sido desincorporado de la Dependencia \"CONTADURIA\" <br>13-01-2022","1","2022-01-17 11:59:19");
INSERT INTO notificaciones VALUES("10","Bien Asignado","El Bien \"MONITORES\" ha sido asignado a la Dependencia \"CONTADURIA\" <br>13-01-2022","1","2022-01-17 12:03:03");
INSERT INTO notificaciones VALUES("11","Bien Desincorporado","El Bien \"MONITORES\" ha sido desincorporado de la Dependencia \"CONTADURIA\" <br>14-01-2022","1","2022-01-17 12:03:54");



TRUNCATE TABLE permisos;
INSERT INTO permisos VALUES("17","Consultar Actas");
INSERT INTO permisos VALUES("21","Consultar Asignar Bien");
INSERT INTO permisos VALUES("13","Consultar Categorias");
INSERT INTO permisos VALUES("32","Consultar Configuracion");
INSERT INTO permisos VALUES("9","Consultar Dependencias");
INSERT INTO permisos VALUES("23","Consultar Desincorporar Bien");
INSERT INTO permisos VALUES("5","Consultar Encargados");
INSERT INTO permisos VALUES("36","Consultar mantenimiento");
INSERT INTO permisos VALUES("25","Consultar Reasignar Bien");
INSERT INTO permisos VALUES("27","Consultar Reportes");
INSERT INTO permisos VALUES("28","Consultar Seguridad");
INSERT INTO permisos VALUES("1","Consultar Usuarios");
INSERT INTO permisos VALUES("18","Crear Actas");
INSERT INTO permisos VALUES("22","Crear Asignar Bien");
INSERT INTO permisos VALUES("14","Crear Categorias");
INSERT INTO permisos VALUES("33","Crear Configuracion");
INSERT INTO permisos VALUES("10","Crear Dependencias");
INSERT INTO permisos VALUES("24","Crear Desincorporar Bien");
INSERT INTO permisos VALUES("6","Crear Encargados");
INSERT INTO permisos VALUES("26","Crear Reasignar Bien");
INSERT INTO permisos VALUES("29","Crear Seguridad");
INSERT INTO permisos VALUES("2","Crear Usuarios");
INSERT INTO permisos VALUES("20","Eliminar Actas");
INSERT INTO permisos VALUES("16","Eliminar Categorias");
INSERT INTO permisos VALUES("35","Eliminar Configuracion");
INSERT INTO permisos VALUES("12","Eliminar Dependencias");
INSERT INTO permisos VALUES("8","Eliminar Encargados");
INSERT INTO permisos VALUES("31","Eliminar Seguridad");
INSERT INTO permisos VALUES("4","Eliminar Usuarios");
INSERT INTO permisos VALUES("19","Modificar Actas");
INSERT INTO permisos VALUES("15","Modificar Categorias");
INSERT INTO permisos VALUES("34","Modificar Configuracion");
INSERT INTO permisos VALUES("11","Modificar Dependencias");
INSERT INTO permisos VALUES("7","Modificar Encargados");
INSERT INTO permisos VALUES("30","Modificar Seguridad");
INSERT INTO permisos VALUES("3","Modificar Usuarios");



TRUNCATE TABLE proveedor;
INSERT INTO proveedor VALUES("5","CARLOS","1234567","BARQUISIMETO","1");



TRUNCATE TABLE reasignar;



TRUNCATE TABLE reasignar_descripcion;



TRUNCATE TABLE rol;
INSERT INTO rol VALUES("9","SECRETARIA","REGISTRADOR","1");
INSERT INTO rol VALUES("10","ADMINISTRADOR","TODOS LOS PERMISOS","1");



TRUNCATE TABLE rol_permiso;
INSERT INTO rol_permiso VALUES("9","1");
INSERT INTO rol_permiso VALUES("9","2");
INSERT INTO rol_permiso VALUES("9","3");
INSERT INTO rol_permiso VALUES("9","4");
INSERT INTO rol_permiso VALUES("9","5");
INSERT INTO rol_permiso VALUES("9","6");
INSERT INTO rol_permiso VALUES("9","7");
INSERT INTO rol_permiso VALUES("9","8");
INSERT INTO rol_permiso VALUES("10","1");
INSERT INTO rol_permiso VALUES("10","2");
INSERT INTO rol_permiso VALUES("10","3");
INSERT INTO rol_permiso VALUES("10","4");
INSERT INTO rol_permiso VALUES("10","5");
INSERT INTO rol_permiso VALUES("10","6");
INSERT INTO rol_permiso VALUES("10","7");
INSERT INTO rol_permiso VALUES("10","8");
INSERT INTO rol_permiso VALUES("10","9");
INSERT INTO rol_permiso VALUES("10","10");
INSERT INTO rol_permiso VALUES("10","11");
INSERT INTO rol_permiso VALUES("10","12");
INSERT INTO rol_permiso VALUES("10","13");
INSERT INTO rol_permiso VALUES("10","14");
INSERT INTO rol_permiso VALUES("10","15");
INSERT INTO rol_permiso VALUES("10","16");
INSERT INTO rol_permiso VALUES("10","17");
INSERT INTO rol_permiso VALUES("10","18");
INSERT INTO rol_permiso VALUES("10","19");
INSERT INTO rol_permiso VALUES("10","20");
INSERT INTO rol_permiso VALUES("10","21");
INSERT INTO rol_permiso VALUES("10","22");
INSERT INTO rol_permiso VALUES("10","23");
INSERT INTO rol_permiso VALUES("10","24");
INSERT INTO rol_permiso VALUES("10","25");
INSERT INTO rol_permiso VALUES("10","26");
INSERT INTO rol_permiso VALUES("10","27");
INSERT INTO rol_permiso VALUES("10","28");
INSERT INTO rol_permiso VALUES("10","29");
INSERT INTO rol_permiso VALUES("10","30");
INSERT INTO rol_permiso VALUES("10","31");
INSERT INTO rol_permiso VALUES("10","32");
INSERT INTO rol_permiso VALUES("10","33");
INSERT INTO rol_permiso VALUES("10","34");
INSERT INTO rol_permiso VALUES("10","35");
INSERT INTO rol_permiso VALUES("10","36");



TRUNCATE TABLE tipo_bien;
INSERT INTO tipo_bien VALUES("3","INMUEBLE","1");



TRUNCATE TABLE tipo_reasignacion;
INSERT INTO tipo_reasignacion VALUES("2","POR DESCARGO","1");



TRUNCATE TABLE usuarios;
INSERT INTO usuarios VALUES("19","SUPERUSUARIO","aripaocol@gmail.com","$2y$06$euKoN6UP6PznY7HlhXqOteu9TQWlKfX.YkzlnhNTAevzRSH82Dm0S","imagenes/user.png","10","1");



SET FOREIGN_KEY_CHECKS=1;
DELETE FROM bitacora WHERE fecha > "2022-01-17 12:04:28";