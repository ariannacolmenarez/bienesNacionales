-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2021 a las 13:04:32
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienes_nacionales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `num_acta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `num_factura` int(11) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `factura` varchar(80) DEFAULT NULL,
  `num_ordenC` int(11) DEFAULT NULL,
  `fecha_ordenC` int(11) DEFAULT NULL,
  `num_ordenP` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`num_acta`, `fecha`, `num_factura`, `fecha_factura`, `factura`, `num_ordenC`, `fecha_ordenC`, `num_ordenP`, `id_proveedor`, `estado`) VALUES
(105, '2021-11-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(11) NOT NULL,
  `codigo_dependencia` int(11) NOT NULL,
  `num_movimiento` int(11) NOT NULL,
  `codigo_bien` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `codigo_dependencia`, `num_movimiento`, `codigo_bien`, `estado`) VALUES
(30, 55454666, 30, 123, 0);

--
-- Disparadores `asignacion`
--
DELIMITER $$
CREATE TRIGGER `asignacion_ai` AFTER INSERT ON `asignacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Asignación ",CONCAT('Registro de asignacion de "',NEW.num_movimiento,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `asignacion_bu` BEFORE UPDATE ON `asignacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Asignación",CONCAT('Actualización "',NEW.num_movimiento,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_descripcion`
--

CREATE TABLE `asignacion_descripcion` (
  `num_movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `prestamo` varchar(10) DEFAULT NULL,
  `num_entrega` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion_descripcion`
--

INSERT INTO `asignacion_descripcion` (`num_movimiento`, `fecha`, `prestamo`, `num_entrega`, `estado`) VALUES
(23, '2021-10-14', '88990', 12313, 0),
(24, '2021-11-11', '234234', 23423, 0),
(25, '2021-11-19', '88990', 12312, 1),
(26, '2021-11-11', '88990', 3462, 1),
(27, '2021-11-10', '213123', 212, 0),
(28, '2021-10-09', '33231', 222, 0),
(29, '2021-11-09', NULL, 12344, 1),
(30, '2021-11-02', NULL, 231, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `id_tipo` int(11) NOT NULL,
  `codigo_categoria` int(11) NOT NULL,
  `num_acta` int(11) NOT NULL,
  `estados` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`codigo`, `nombre`, `descripcion`, `id_tipo`, `codigo_categoria`, `num_acta`, `estados`, `estado`) VALUES
(123, 'MESAS', NULL, 2, 20002, 105, 'SIN ASIGNAR', 1);

--
-- Disparadores `bienes`
--
DELIMITER $$
CREATE TRIGGER `bienes_ai` AFTER INSERT ON `bienes` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Bienes",CONCAT('Registro de nuevo "',NEW.num_acta,' - ',NEW.codigo,' - ',NEW.nombre,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `bienes_bu` BEFORE UPDATE ON `bienes` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Bienes",CONCAT('Actualización de "',NEW.num_acta,' - ',NEW.codigo,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `accion` varchar(250) NOT NULL,
  `modulo` varchar(250) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `fecha`, `accion`, `modulo`, `usuario`) VALUES
(5, '2021-10-28 03:26:37', 'Actualización de \"15 - ARIANNA\"', 'Usuarios', 1),
(6, '2021-10-28 04:33:53', 'Registro de \"9 - SECRETARIA\"', 'Cargo', 1),
(7, '2021-10-30 02:17:02', 'Registro de nuevo \"20 - 111 - teclado\"', 'Bienes', 1),
(8, '2021-10-30 02:17:02', 'Registro de nuevo \"20 - 222 - mouse\"', 'Bienes', 1),
(9, '2021-10-30 02:18:13', 'Registro de nuevo \"21 - 1231232 - teclado\"', 'Bienes', 1),
(10, '2021-10-30 02:18:13', 'Registro de nuevo \"21 - 2323 - pantalla\"', 'Bienes', 1),
(11, '2021-10-30 02:21:19', 'Registro de nuevo \"43 - 333 - monitor\"', 'Bienes', 1),
(12, '2021-10-30 02:21:19', 'Registro de nuevo \"43 - 444 - cpu\"', 'Bienes', 1),
(13, '2021-10-30 03:09:06', 'Registro de nuevo \"56 - 4444444 - telefono\"', 'Bienes', 1),
(14, '2021-10-30 03:10:08', 'Registro de nuevo \"57 - 1212 - computador\"', 'Bienes', 1),
(15, '2021-10-30 04:00:33', 'Registro de nuevo \"58 - 121233 - telefonoqqq\"', 'Bienes', 1),
(16, '2021-10-30 04:00:33', 'Registro de nuevo \"58 - 3333 - monitor\"', 'Bienes', 1),
(17, '2021-10-30 13:00:26', 'Actualización de \"58 - 3333\"', 'Bienes', 1),
(18, '2021-10-30 13:00:26', 'Actualización de \"58 - 121233\"', 'Bienes', 1),
(19, '2021-10-30 13:01:43', 'Actualización de \"56 - 4444444\"', 'Bienes', 1),
(20, '2021-10-30 13:02:01', 'Actualización de \"58 - 3333\"', 'Bienes', 1),
(21, '2021-10-30 13:02:01', 'Actualización de \"58 - 121233\"', 'Bienes', 1),
(22, '2021-10-30 13:10:36', 'Registro de nuevo \"59 - 111222 - telefono\"', 'Bienes', 1),
(23, '2021-10-30 14:07:15', 'Registro de nuevo \"60 - 2423 - teclado\"', 'Bienes', 1),
(24, '2021-10-30 15:06:02', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(25, '2021-10-30 15:06:02', 'Registro de asignacion de \"10\"', 'Asignación ', 1),
(26, '2021-10-30 15:15:12', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(27, '2021-10-30 15:15:12', 'Registro de asignacion de \"11\"', 'Asignación ', 1),
(28, '2021-10-30 15:16:16', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(29, '2021-10-30 15:16:16', 'Registro de asignacion de \"12\"', 'Asignación ', 1),
(30, '2021-10-30 15:23:17', 'Registro de nuevo \"61 - 21212 - computador\"', 'Bienes', 1),
(31, '2021-10-30 15:24:10', 'Actualización de \"61 - 21212\"', 'Bienes', 1),
(32, '2021-10-30 15:24:10', 'Registro de asignacion de \"13\"', 'Asignación ', 1),
(33, '2021-10-30 16:16:15', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(34, '2021-10-30 16:16:15', 'Registro de \"5\"', 'Desincorporar', 1),
(35, '2021-10-30 16:47:47', 'Actualización \"13\"', 'Asignación', 1),
(36, '2021-10-30 16:53:10', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(37, '2021-10-30 16:53:10', 'Registro de asignacion de \"14\"', 'Asignación ', 1),
(38, '2021-10-30 16:53:47', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(39, '2021-10-30 16:53:47', 'Registro de \"6\"', 'Desincorporar', 1),
(40, '2021-10-30 16:56:18', 'Actualización \"13\"', 'Asignación', 1),
(41, '2021-10-30 19:17:28', 'Registro de \"16 - JAVIER\"', 'Usuarios', 1),
(42, '2021-10-30 19:18:15', 'Actualización de \"16 - JAVIER\"', 'Usuarios', 1),
(43, '2021-10-31 02:23:14', 'Actualización \"13\"', 'Asignación', 1),
(44, '2021-10-31 02:24:26', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(45, '2021-10-31 02:24:27', 'Registro de asignacion de \"15\"', 'Asignación ', 1),
(46, '2021-11-01 02:09:01', 'Registro de \"16 - DANIELA\"', 'Usuarios', 1),
(47, '2021-11-01 05:10:49', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(48, '2021-11-01 06:45:54', 'Actualización de \"4 - ARIANNA23\"', 'Usuarios', 1),
(49, '2021-11-01 06:47:46', 'Actualización de \"7 - ARIANNA23\"', 'Usuarios', 1),
(50, '2021-11-01 06:53:27', 'Actualización de \"5\"', 'Categoría', 1),
(51, '2021-11-01 07:14:45', 'Actualización de \"4 - ARIANNA00\"', 'Usuarios', 1),
(52, '2021-11-01 14:08:50', 'Actualización de \"16 - DANIELA\"', 'Usuarios', 1),
(53, '2021-11-01 17:46:50', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(54, '2021-11-01 17:46:50', 'Registro de \"7\"', 'Desincorporar', 1),
(55, '2021-11-01 18:02:23', 'Actualización de \"60 - 2423\"', 'Bienes', 1),
(56, '2021-11-01 18:02:23', 'Registro de asignacion de \"16\"', 'Asignación ', 1),
(57, '2021-11-02 01:18:22', 'Actualización de \"6 - ADMINISTRADOR\"', 'Cargo', 1),
(58, '2021-11-02 01:23:43', 'Actualización de \"10 - DEPARTAMENTO 1\"', 'Clasificación Dependencia', 1),
(59, '2021-11-02 01:24:10', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(60, '2021-11-02 01:24:44', 'Actualización de \"55454664 - ARIANNA\"', 'Dependencias', 1),
(61, '2021-11-02 01:27:23', 'Actualización de \"1 - MUEBLE\"', 'Denominación', 1),
(62, '2021-11-02 01:29:55', 'Actualización de \"1 - INGRESOS ORDINARIOS\"', 'Denominación', 1),
(63, '2021-11-02 01:30:12', 'Actualización de \"4 - OTROS\"', 'Denominación', 1),
(64, '2021-11-03 16:07:53', 'Registro de \"32 - ARIANNA\"', 'Encargados', 1),
(65, '2021-11-03 16:08:19', 'Actualización de \"10 - DEPARTAMENTO 2\"', 'Clasificación Dependencia', 1),
(66, '2021-11-03 16:08:37', 'Actualización de \"7 - BIENES\"', 'Roles', 1),
(67, '2021-11-03 16:09:08', 'Actualización de \"16 - DANIELA\"', 'Usuarios', 1),
(68, '2021-11-03 21:16:07', 'Registro de \"10 - SECRETARIA\"', 'Cargo', 1),
(69, '2021-11-03 21:16:10', 'Registro de \"11 - SECRETARIA\"', 'Cargo', 1),
(70, '2021-11-03 21:16:33', 'Registro de \"12 - SECRETARIA\"', 'Cargo', 1),
(71, '2021-11-03 21:17:36', 'Registro de \"13 - SECRETARIA\"', 'Cargo', 1),
(72, '2021-11-03 21:18:05', 'Registro de \"14 - SECRETARIA\"', 'Cargo', 1),
(73, '2021-11-03 21:18:17', 'Registro de \"15 - SECRETARIA\"', 'Cargo', 1),
(74, '2021-11-03 21:22:30', 'Registro de \"16 - SECRETARIA\"', 'Cargo', 1),
(75, '2021-11-03 21:22:35', 'Registro de \"17 - SECRETARIA\"', 'Cargo', 1),
(76, '2021-11-03 21:29:52', 'Registro de \"18 - SECRETARIA\"', 'Cargo', 1),
(77, '2021-11-03 21:30:15', 'Registro de \"19 - SECRETARIA\"', 'Cargo', 1),
(78, '2021-11-03 21:30:56', 'Registro de \"20 - SECRETARIA\"', 'Cargo', 1),
(79, '2021-11-03 21:31:00', 'Registro de \"21 - SECRETARIA\"', 'Cargo', 1),
(80, '2021-11-03 21:41:43', 'Registro de \"22 - SECRETARIA\"', 'Cargo', 1),
(81, '2021-11-03 21:44:19', 'Registro de \"23 - SECRETARIA\"', 'Cargo', 1),
(82, '2021-11-03 21:55:09', 'Registro de \"24 - SADCADA\"', 'Cargo', 1),
(83, '2021-11-03 21:55:40', 'Registro de \"25 - OPERADOR\"', 'Cargo', 1),
(84, '2021-11-03 21:58:00', 'Registro de \"26 - CAJERA\"', 'Cargo', 1),
(85, '2021-10-30 13:04:16', 'Actualización de \"26 - CAJERA\"', 'Cargo', 1),
(86, '2021-10-30 13:05:12', 'Registro de \"27 - PERSONA\"', 'Cargo', 1),
(87, '2021-10-30 13:05:38', 'Actualización de \"27 - PERSONA\"', 'Cargo', 1),
(88, '2021-10-30 13:09:56', 'Registro de \"28 - GENTE\"', 'Cargo', 1),
(89, '2021-10-30 13:39:36', 'Registro de \"17 - MARIANA\"', 'Usuarios', 1),
(90, '2021-10-30 13:42:11', 'Registro de \"18 - MARIANIS\"', 'Usuarios', 1),
(91, '2021-10-30 13:42:40', 'Actualización de \"18 - MARIANIS\"', 'Usuarios', 1),
(92, '2021-10-30 13:50:35', 'Registro de \"33 - DANNI\"', 'Encargados', 1),
(93, '2021-10-30 13:56:21', 'Actualización de \"33 - DANNI\"', 'Encargados', 1),
(94, '2021-10-30 13:59:23', 'Registro de \"34 - MARIA\"', 'Encargados', 1),
(95, '2021-10-30 14:07:35', 'Actualización de \"55454664 - ARIANNA\"', 'Dependencias', 1),
(96, '2021-10-30 14:12:41', 'Registro de \"55454665 - JOSEE\"', 'Dependencias', 1),
(97, '2021-10-30 14:24:19', 'Actualización de \"9\"', 'Categoría', 1),
(98, '2021-10-30 14:32:06', 'Registro de \"1234\"', 'Categoria', 1),
(99, '2021-10-30 14:53:08', 'Registro de \"9 - JOSUE\"', 'Roles', 1),
(100, '2021-10-30 15:01:29', 'Registro de \"2 - AQUIFUE\"', 'Tipo Reasignación', 1),
(101, '2021-10-30 15:24:41', 'Registro de \"2 - DANI\"', 'Tipo Bien', 1),
(102, '2021-10-30 15:32:23', 'Registro de \"11 - ALVAREZ\"', 'Clasificación Dependencia', 1),
(103, '2021-10-30 15:38:57', 'Registro de \"14 - GIRALUNA\"', 'Locación', 1),
(104, '2021-10-30 17:13:27', 'Registro de \"5 - TRECE\"', 'Denominación', 1),
(105, '2021-10-30 17:30:36', 'Registro de \"2 - ALVAREZ\"', 'Clasificacion Categoría', 1),
(106, '2021-10-30 17:31:03', 'Actualización de \"2 - MUEBLE\"', 'Clasificación Categoría', 1),
(107, '2021-10-30 17:40:35', 'Registro de \"1234567 - CARLOS\"', 'Proveedores', 1),
(108, '2021-10-30 17:41:54', 'Registro de \"29 - JEFE\"', 'Cargo', 1),
(109, '2021-10-30 17:53:14', 'Actualización de \"34 - MARIA\"', 'Encargados', 1),
(110, '2021-10-30 18:56:08', 'Registro de \"3 - ARI\"', 'Tipo Reasignación', 1),
(111, '2021-10-30 18:56:30', 'Registro de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(112, '2021-10-30 18:56:36', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(113, '2021-10-30 18:56:44', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(114, '2021-10-30 18:58:32', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(115, '2021-10-30 18:58:37', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(116, '2021-10-30 19:07:26', 'Registro de \"3 - INMUEBLE\"', 'Tipo Bien', 1),
(117, '2021-10-30 19:07:50', 'Actualización de \"3 - INMUEBLE\"', 'Tipo Bien', 1),
(118, '2021-10-30 19:07:57', 'Actualización de \"3 - INMUEBLE\"', 'Tipo Bien', 1),
(119, '2021-10-30 19:15:29', 'Registro de \"12 - DOCE\"', 'Clasificación Dependencia', 1),
(120, '2021-10-30 19:15:50', 'Actualización de \"12 - DOCE\"', 'Clasificación Dependencia', 1),
(121, '2021-10-30 19:24:01', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(122, '2021-10-30 19:25:13', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(123, '2021-10-30 19:25:19', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(124, '2021-10-30 19:27:00', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(125, '2021-10-30 19:27:04', 'Actualización de \"14 - GIRALUNA\"', 'Locacion', 1),
(126, '2021-10-30 19:27:10', 'Actualización de \"13 - GIRALUNA\"', 'Locacion', 1),
(127, '2021-10-30 19:27:10', 'Actualización de \"14 - GIRALUNA\"', 'Locacion', 1),
(128, '2021-10-30 19:34:22', 'Registro de \"6 - UNO\"', 'Denominación', 1),
(129, '2021-10-30 19:34:37', 'Actualización de \"6 - UNO\"', 'Denominación', 1),
(130, '2021-10-30 19:37:52', 'Registro de \"3 - CALL\"', 'Clasificacion Categoría', 1),
(131, '2021-10-30 19:38:03', 'Actualización de \"3 - CALL\"', 'Clasificación Categoría', 1),
(132, '2021-10-31 13:47:38', 'Registro de \"35 - DANI\"', 'Encargados', 1),
(133, '2021-10-31 14:00:02', 'Registro de \"55454666 - DANI\"', 'Dependencias', 1),
(134, '2021-10-31 14:38:12', 'Registro de \"1235\"', 'Categoria', 1),
(135, '2021-10-31 15:05:03', 'Registro de nuevo \"61 - 234 - hola\"', 'Bienes', 1),
(136, '2021-10-31 15:34:50', 'Actualización de \"61 - 234\"', 'Bienes', 1),
(137, '2021-10-31 15:34:50', 'Registro de asignacion de \"17\"', 'Asignación ', 1),
(138, '2021-10-31 17:43:38', 'Registro de nuevo \"63 - 1231 - hola\"', 'Bienes', 1),
(139, '2021-10-31 17:49:51', 'Actualización de \"63 - 1231\"', 'Bienes', 1),
(140, '2021-10-31 18:11:34', 'Actualización de \"61 - 234\"', 'Bienes', 1),
(141, '2021-10-31 18:19:53', 'Registro de nuevo \"66 - 2323 - dftrtrt\"', 'Bienes', 1),
(142, '2021-10-31 18:20:26', 'Actualización de \"66 - 2323\"', 'Bienes', 1),
(143, '2021-10-31 18:20:26', 'Registro de asignacion de \"18\"', 'Asignación ', 1),
(144, '2021-10-31 18:30:35', 'Registro de nuevo \"67 - 12312 - paola\"', 'Bienes', 1),
(145, '2021-10-31 18:31:28', 'Actualización de \"67 - 12312\"', 'Bienes', 1),
(146, '2021-10-31 18:33:31', 'Registro de nuevo \"68 - 1232 - teclado\"', 'Bienes', 1),
(147, '2021-10-31 18:33:55', 'Actualización de \"68 - 1232\"', 'Bienes', 1),
(148, '2021-10-31 18:35:41', 'Registro de nuevo \"69 - 123123 - raton\"', 'Bienes', 1),
(149, '2021-10-31 18:36:06', 'Actualización de \"69 - 123123\"', 'Bienes', 1),
(150, '2021-10-31 18:36:06', 'Registro de asignacion de \"21\"', 'Asignación ', 1),
(151, '2021-10-31 18:36:47', 'Actualización de \"61 - 234\"', 'Bienes', 1),
(152, '2021-10-31 18:44:57', 'Registro de nuevo \"70 - 213 - teclado\"', 'Bienes', 1),
(153, '2021-10-31 18:45:40', 'Actualización de \"70 - 213\"', 'Bienes', 1),
(154, '2021-10-31 18:45:40', 'Registro de asignacion de \"22\"', 'Asignación ', 1),
(155, '2021-10-31 18:50:28', 'Registro de nuevo \"71 - 1233 - teclado\"', 'Bienes', 1),
(156, '2021-10-31 18:51:11', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(157, '2021-10-31 18:51:12', 'Registro de asignacion de \"23\"', 'Asignación ', 1),
(158, '2021-10-31 18:52:26', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(159, '2021-11-05 20:24:53', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(160, '2021-11-05 20:24:53', 'Actualización \"23\"', 'Asignación', 1),
(161, '2021-11-05 20:24:53', 'Actualización \"23\"', 'Asignación', 1),
(162, '2021-11-05 20:24:53', 'Registro de \"8\"', 'Desincorporar', 1),
(163, '2021-11-05 20:37:20', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(164, '2021-11-05 20:37:20', 'Registro de asignacion de \"24\"', 'Asignación ', 1),
(165, '2021-11-05 20:37:43', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(166, '2021-11-05 20:37:43', 'Actualización \"23\"', 'Asignación', 1),
(167, '2021-11-05 20:37:43', 'Actualización \"24\"', 'Asignación', 1),
(168, '2021-11-05 20:37:43', 'Registro de \"9\"', 'Desincorporar', 1),
(169, '2021-11-05 20:39:52', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(170, '2021-11-05 20:39:52', 'Registro de asignacion de \"25\"', 'Asignación ', 1),
(171, '2021-11-05 20:40:12', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(172, '2021-11-05 20:40:12', 'Actualización \"23\"', 'Asignación', 1),
(173, '2021-11-05 20:40:12', 'Actualización \"24\"', 'Asignación', 1),
(174, '2021-11-05 20:40:12', 'Actualización \"25\"', 'Asignación', 1),
(175, '2021-11-05 20:40:12', 'Registro de \"10\"', 'Desincorporar', 1),
(176, '2021-11-05 20:41:28', 'Actualización de \"71 - 1233\"', 'Bienes', 1),
(177, '2021-11-05 20:41:28', 'Registro de asignacion de \"26\"', 'Asignación ', 1),
(178, '2021-11-05 20:42:07', 'Registro de nuevo \"72 - 32444 - raton\"', 'Bienes', 1),
(179, '2021-11-05 20:42:32', 'Actualización de \"72 - 32444\"', 'Bienes', 1),
(180, '2021-11-05 20:54:48', 'Registro de nuevo \"73 - 12312 - hola\"', 'Bienes', 1),
(181, '2021-11-05 20:58:04', 'Registro de asignacion de \"27\"', 'Asignación ', 1),
(182, '2021-11-05 20:58:04', 'Actualización de \"73 - 12312\"', 'Bienes', 1),
(183, '2021-11-05 20:58:52', 'Actualización de \"73 - 12312\"', 'Bienes', 1),
(184, '2021-11-05 20:58:52', 'Actualización \"27\"', 'Asignación', 1),
(185, '2021-11-05 20:58:52', 'Registro de \"11\"', 'Desincorporar', 1),
(186, '2021-11-05 21:06:30', 'Registro de nuevo \"74 - 123123 - wsqewqe\"', 'Bienes', 1),
(187, '2021-11-05 21:06:35', 'Actualización de \"74 - 123123\"', 'Bienes', 1),
(188, '2021-11-05 21:08:11', 'Registro de nuevo \"75 - 1231 - pantalla\"', 'Bienes', 1),
(189, '2021-11-05 21:09:33', 'Registro de nuevo \"76 - 12345 - raton\"', 'Bienes', 1),
(190, '2021-10-31 13:44:10', 'Registro de nuevo \"83 - 112223 - corneta\"', 'Bienes', 1),
(191, '2021-10-31 13:50:29', 'Registro de nuevo \"84 - 123223 - corneta\"', 'Bienes', 1),
(192, '2021-10-31 14:20:40', 'Registro de nuevo \"88 - 12322 - cornetas\"', 'Bienes', 1),
(193, '2021-10-31 14:20:40', 'Registro de nuevo \"88 - 123224 - disco\"', 'Bienes', 1),
(194, '2021-10-31 14:23:38', 'Registro de nuevo \"90 - 1232222 - pintura\"', 'Bienes', 1),
(195, '2021-10-31 14:23:38', 'Registro de nuevo \"90 - 1232223 - plato\"', 'Bienes', 1),
(196, '2021-10-31 14:24:37', 'Registro de nuevo \"91 - 222222 - cornetao\"', 'Bienes', 1),
(197, '2021-10-31 14:24:38', 'Registro de nuevo \"91 - 1232224 - pinturas\"', 'Bienes', 1),
(198, '2021-10-31 14:25:29', 'Registro de nuevo \"92 - 1232225 - cornetau\"', 'Bienes', 1),
(199, '2021-10-31 14:28:32', 'Registro de nuevo \"93 - 1232226 - cornetas\"', 'Bienes', 1),
(200, '2021-10-31 14:30:13', 'Registro de nuevo \"94 - 1232227 - vaso\"', 'Bienes', 1),
(201, '2021-10-31 14:41:14', 'Registro de nuevo \"101 - 333333 - platos\"', 'Bienes', 1),
(202, '2021-10-31 14:42:32', 'Registro de nuevo \"102 - 44444 - caballo\"', 'Bienes', 1),
(203, '2021-10-31 14:45:59', 'Registro de asignacion de \"28\"', 'Asignación ', 1),
(204, '2021-10-31 14:46:00', 'Actualización de \"93 - 1232226\"', 'Bienes', 1),
(205, '2021-11-05 22:37:36', 'Actualización de \"33 - DANNI\"', 'Encargados', 1),
(206, '2021-11-05 22:53:26', 'Actualización de \"17 - MARIANA\"', 'Usuarios', 1),
(207, '2021-11-06 00:37:16', 'Registro de \"19 - JOSUE12\"', 'Usuarios', 1),
(208, '2021-11-06 01:02:43', 'Registro de \"36 - MARIANA\"', 'Encargados', 1),
(209, '2021-11-06 01:43:42', 'Registro de \"55454667 - MARIANA\"', 'Dependencias', 1),
(210, '2021-11-06 02:01:53', 'Registro de \"1232\"', 'Categoria', 1),
(211, '2021-11-06 03:47:35', 'Registro de nuevo \"103 - 111 - paola\"', 'Bienes', 1),
(212, '2021-11-06 04:30:28', 'Actualización de \"93 - 1232226\"', 'Bienes', 1),
(213, '2021-11-06 04:30:28', 'Actualización \"28\"', 'Asignación', 1),
(214, '2021-11-06 04:30:28', 'Registro de \"12\"', 'Desincorporar', 1),
(215, '2021-11-06 07:20:06', 'Actualización de \"92 - 1232225\"', 'Bienes', 1),
(216, '2021-11-06 07:20:35', 'Registro de asignacion de \"29\"', 'Asignación ', 1),
(217, '2021-11-06 07:20:35', 'Actualización de \"90 - 1232222\"', 'Bienes', 1),
(218, '2021-11-06 07:36:04', 'Actualización \"29\"', 'Asignación', 1),
(219, '2021-11-06 08:13:46', 'Registro de \"10 - ADMINISTRADOR\"', 'Roles', 1),
(220, '2021-11-06 08:34:02', 'Registro de \"5 - MAL ESTADO\"', 'Tipo Reasignación', 1),
(221, '2021-11-06 08:35:42', 'Actualización de \"2 - PERDIDA\"', 'Tipo Reasignación', 1),
(222, '2021-11-06 08:38:55', 'Actualización de \"2 - MUEBLE\"', 'Tipo Bien', 1),
(223, '2021-11-06 08:41:17', 'Registro de \"13 - HIGIENE\"', 'Clasificación Dependencia', 1),
(224, '2021-11-06 08:41:34', 'Actualización de \"11 - INFORMATICA\"', 'Clasificación Dependencia', 1),
(225, '2021-11-06 08:43:44', 'Registro de \"15 - HILANDERA\"', 'Locación', 1),
(226, '2021-11-06 08:47:15', 'Actualización de \"11 - SECRETARIA\"', 'Cargo', 1),
(227, '2021-11-06 08:47:34', 'Actualización de \"28 - GERENTE\"', 'Cargo', 1),
(228, '2021-11-06 08:50:42', 'Registro de \"7 - PRIMERO\"', 'Denominación', 1),
(229, '2021-11-06 08:52:02', 'Actualización de \"5 - PLUTON\"', 'Denominación', 1),
(230, '2021-11-06 08:55:03', 'Registro de \"4 - CATEGORIA1\"', 'Clasificacion Categoría', 1),
(231, '2021-11-06 08:55:10', 'Actualización de \"2 - MU\"', 'Clasificación Categoría', 1),
(232, '2021-11-06 08:55:37', 'Actualización de \"2 - MU\"', 'Clasificación Categoría', 1),
(233, '2021-11-06 08:55:59', 'Actualización de \"2 - CATEGORIA 2\"', 'Clasificación Categoría', 1),
(234, '2021-11-06 09:40:43', 'Registro de \"55454668 - ADMINISTRACION\"', 'Dependencias', 1),
(235, '2021-11-06 09:45:36', 'Actualización de \"1232\"', 'Categoría', 1),
(236, '2021-11-06 09:53:12', 'Actualización de \"75 - 1231\"', 'Bienes', 1),
(237, '2021-11-06 09:55:59', 'Actualización de \"9 - REGISTRADOR\"', 'Roles', 1),
(238, '2021-11-06 10:12:12', 'Actualización de \"17 - MARIANA\"', 'Usuarios', 1),
(239, '2021-11-06 10:12:23', 'Actualización de \"19 - JOSUE12\"', 'Usuarios', 1),
(240, '2021-11-06 10:32:30', 'Registro de nuevo \"104 - 123221 - mesa\"', 'Bienes', 1),
(241, '2021-11-06 10:41:32', 'Actualización de \"75 - 1231\"', 'Bienes', 1),
(242, '2021-11-06 11:15:02', 'Actualización de \"75 - 1231\"', 'Bienes', 1),
(243, '2021-11-06 11:21:11', 'Actualización de \"75 - 1231\"', 'Bienes', 1),
(244, '2021-11-06 12:25:43', 'Actualización de \"3 - ARI\"', 'Tipo Reasignación', 1),
(245, '2021-11-06 12:25:47', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(246, '2021-11-06 12:28:25', 'Actualización de \"6 - ADMINISTRADOR\"', 'Cargo', 1),
(247, '2021-11-06 12:36:41', 'Actualización de \"5 - PLUTON\"', 'Denominación', 1),
(248, '2021-11-06 12:36:44', 'Actualización de \"7 - PRIMERO\"', 'Denominación', 1),
(249, '2021-11-06 12:38:08', 'Actualización de \"2 - MAQUINAS Y EQUIPOS ELECTRONICOS\"', 'Clasificación Categoría', 1),
(250, '2021-11-06 12:38:34', 'Actualización de \"4 - MAQUINAS Y EQUIPOS AGRíCOLAS Y PECUARIOS\"', 'Clasificación Categoría', 1),
(251, '2021-11-06 12:40:40', 'Actualización de \"v1234567 - CARLOS\"', 'Proveedores', 1),
(252, '2021-11-06 12:41:41', 'Actualización de \"v1234567 - CARLOS\"', 'Proveedores', 1),
(253, '2021-11-06 12:42:10', 'Actualización de \"v1234567 - CARLOS\"', 'Proveedores', 1),
(254, '2021-11-06 12:42:19', 'Actualización de \"v1234567 - CARLOS\"', 'Proveedores', 1),
(255, '2021-11-06 12:43:08', 'Actualización de \"V1234567 - CARLOS\"', 'Proveedores', 1),
(256, '2021-11-06 12:44:10', 'Actualización de \"19 - DANIELA29\"', 'Usuarios', 1),
(257, '2021-11-06 12:44:41', 'Actualización de \"17 - ARIANNA25\"', 'Usuarios', 1),
(258, '2021-11-06 12:45:17', 'Actualización de \"35 - DANIELA\"', 'Encargados', 1),
(259, '2021-11-06 12:49:28', 'Actualización de \"55454666 - ADMINISTRACION\"', 'Dependencias', 1),
(260, '2021-11-06 12:50:18', 'Actualización de \"55454667 - LABORATORIO\"', 'Dependencias', 1),
(261, '2021-11-06 12:50:44', 'Actualización de \"55454668 - SALON 31B\"', 'Dependencias', 1),
(262, '2021-11-06 12:57:03', 'Registro de \"20001\"', 'Categoria', 1),
(263, '2021-11-06 10:20:34', 'Registro de \"8 - MUEBLE\"', 'Denominación', 1),
(264, '2021-11-06 10:20:56', 'Registro de \"20002\"', 'Categoria', 1),
(265, '2021-11-06 10:38:59', 'Registro de nuevo \"105 - 123 - mesa\"', 'Bienes', 1),
(266, '2021-11-06 10:40:07', 'Registro de asignacion de \"30\"', 'Asignación ', 1),
(267, '2021-11-06 10:40:07', 'Actualización de \"105 - 123\"', 'Bienes', 1),
(268, '2021-11-06 10:44:44', 'Actualización \"30\"', 'Asignación', 1),
(269, '2021-11-06 10:47:05', 'Actualización de \"105 - 123\"', 'Bienes', 1),
(270, '2021-11-06 10:48:01', 'Actualización de \"105 - 123\"', 'Bienes', 1),
(271, '2021-11-06 10:48:01', 'Actualización \"30\"', 'Asignación', 1),
(272, '2021-11-06 10:48:01', 'Registro de \"13\"', 'Desincorporar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `cargo`, `estado`) VALUES
(6, 'ADMINISTRADOR', 1),
(11, 'SECRETARIA', 1),
(28, 'GERENTE', 1),
(29, 'JEFE', 1);

--
-- Disparadores `cargo`
--
DELIMITER $$
CREATE TRIGGER `cargo_ai` AFTER INSERT ON `cargo` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Cargo",CONCAT('Registro de "',NEW.id_cargo,' - ',NEW.cargo,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cargo_bu` BEFORE UPDATE ON `cargo` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Cargo",CONCAT('Actualización de "',NEW.id_cargo,' - ',NEW.cargo,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_sigecof`
--

CREATE TABLE `categoria_sigecof` (
  `codigo_categoria` int(11) NOT NULL,
  `presupuestaria` varchar(11) NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `id_denominacion` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_sigecof`
--

INSERT INTO `categoria_sigecof` (`codigo_categoria`, `presupuestaria`, `id_clasificacion`, `id_denominacion`, `estado`) VALUES
(20002, 'escaparates', 4, 8, 1);

--
-- Disparadores `categoria_sigecof`
--
DELIMITER $$
CREATE TRIGGER `categoria_sigecof_ai` AFTER INSERT ON `categoria_sigecof` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Categoria",CONCAT('Registro de "',NEW.codigo_categoria,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `categoria_sigecof_bu` BEFORE UPDATE ON `categoria_sigecof` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Categoría",CONCAT('Actualización de "',NEW.codigo_categoria,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion_cat`
--

CREATE TABLE `clasificacion_cat` (
  `id_clasificacion` int(11) NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion_cat`
--

INSERT INTO `clasificacion_cat` (`id_clasificacion`, `clasificacion`, `estado`) VALUES
(2, 'MAQUINAS Y EQUIPOS ELECTRONICOS', 1),
(4, 'MAQUINAS Y EQUIPOS AGRíCOLAS Y PECUARIOS', 1);

--
-- Disparadores `clasificacion_cat`
--
DELIMITER $$
CREATE TRIGGER `clasificacion_cat_ai` AFTER INSERT ON `clasificacion_cat` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Clasificacion Categoría",CONCAT('Registro de "',NEW.id_clasificacion,' - ',NEW.clasificacion,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `clasificacion_cat_bu` BEFORE UPDATE ON `clasificacion_cat` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Clasificación Categoría",CONCAT('Actualización de "',NEW.id_clasificacion,' - ',NEW.clasificacion,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion_dep`
--

CREATE TABLE `clasificacion_dep` (
  `id_clasificacion` int(11) NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion_dep`
--

INSERT INTO `clasificacion_dep` (`id_clasificacion`, `clasificacion`, `estado`) VALUES
(11, 'INFORMATICA', 1),
(13, 'HIGIENE', 1);

--
-- Disparadores `clasificacion_dep`
--
DELIMITER $$
CREATE TRIGGER `clasificacion_dep_ai` AFTER INSERT ON `clasificacion_dep` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Clasificación Dependencia",CONCAT('Registro de "',NEW.id_clasificacion,' - ',NEW.clasificacion,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `clasificacion_dep_bu` BEFORE UPDATE ON `clasificacion_dep` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Clasificación Dependencia",CONCAT('Actualización de "',NEW.id_clasificacion,' - ',NEW.clasificacion,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denominacion`
--

CREATE TABLE `denominacion` (
  `id_denominacion` int(11) NOT NULL,
  `denominacion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `denominacion`
--

INSERT INTO `denominacion` (`id_denominacion`, `denominacion`, `estado`) VALUES
(8, 'MUEBLE', 1);

--
-- Disparadores `denominacion`
--
DELIMITER $$
CREATE TRIGGER `denominacion_ai` AFTER INSERT ON `denominacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Denominación",CONCAT('Registro de "',NEW.id_denominacion,' - ',NEW.denominacion,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `denominacion_bu` BEFORE UPDATE ON `denominacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Denominación",CONCAT('Actualización de "',NEW.id_denominacion,' - ',NEW.denominacion,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `codigo_dependencia` int(11) NOT NULL,
  `dependencia` varchar(50) NOT NULL,
  `observacion` text DEFAULT NULL,
  `toma_fisica` varchar(2) DEFAULT NULL,
  `edicion` varchar(2) DEFAULT NULL,
  `documentacion` varchar(2) DEFAULT NULL,
  `fecha_chequeo` date NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `id_locacion` int(11) NOT NULL,
  `id_encargado` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`codigo_dependencia`, `dependencia`, `observacion`, `toma_fisica`, `edicion`, `documentacion`, `fecha_chequeo`, `id_clasificacion`, `id_locacion`, `id_encargado`, `estado`) VALUES
(55454666, 'ADMINISTRACION', '', NULL, NULL, NULL, '2021-10-13', 11, 13, 35, 1),
(55454667, 'LABORATORIO', '', NULL, NULL, NULL, '2021-11-18', 11, 13, 34, 1),
(55454668, 'SALON 31B', 'BUEN ESTADO', NULL, NULL, 'SI', '2021-11-25', 11, 15, 35, 1);

--
-- Disparadores `dependencias`
--
DELIMITER $$
CREATE TRIGGER `dependencias_ai` AFTER INSERT ON `dependencias` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Dependencias",CONCAT('Registro de "',NEW.codigo_dependencia,' - ',NEW.dependencia,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `dependencias_bu` BEFORE UPDATE ON `dependencias` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Dependencias",CONCAT('Actualización de "',NEW.codigo_dependencia,' - ',NEW.dependencia,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desincorporar`
--

CREATE TABLE `desincorporar` (
  `num_movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `denuncia` varchar(100) DEFAULT NULL,
  `fecha_denuncia` date DEFAULT NULL,
  `oficio` varchar(255) DEFAULT NULL,
  `codigo_dependencia` int(11) NOT NULL,
  `concepto` varchar(255) NOT NULL,
  `codigo_bien` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desincorporar`
--

INSERT INTO `desincorporar` (`num_movimiento`, `fecha`, `denuncia`, `fecha_denuncia`, `oficio`, `codigo_dependencia`, `concepto`, `codigo_bien`, `estado`) VALUES
(13, '2021-11-06', '', '2021-11-10', '', 55454666, 'mal estado', 123, 0);

--
-- Disparadores `desincorporar`
--
DELIMITER $$
CREATE TRIGGER `desincorporar_ai` AFTER INSERT ON `desincorporar` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Desincorporar",CONCAT('Registro de "',NEW.num_movimiento,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `desincorporar_bu` BEFORE UPDATE ON `desincorporar` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Desincorporar",CONCAT('Actualización de "',NEW.num_movimiento,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargados`
--

CREATE TABLE `encargados` (
  `id_encargado` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encargados`
--

INSERT INTO `encargados` (`id_encargado`, `cedula`, `nombre`, `apellido`, `telefono`, `id_cargo`, `estado`) VALUES
(34, 12245788, 'MARIA', 'RAMONES', 426789453, 29, 1),
(35, 12245648, 'DANIELA', 'GARCIA', 424356748, 28, 1),
(36, 1224000, 'MARIANA', 'PARRA', 0, 28, 1);

--
-- Disparadores `encargados`
--
DELIMITER $$
CREATE TRIGGER `encargados_ai` AFTER INSERT ON `encargados` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Encargados",CONCAT('Registro de "',NEW.id_encargado,' - ',NEW.nombre,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `encargados_bu` BEFORE UPDATE ON `encargados` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Encargados",CONCAT('Actualización de "',NEW.id_encargado,' - ',NEW.nombre,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locacion`
--

CREATE TABLE `locacion` (
  `id_locacion` int(11) NOT NULL,
  `locacion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `locacion`
--

INSERT INTO `locacion` (`id_locacion`, `locacion`, `estado`) VALUES
(13, 'GIRALUNA', 1),
(15, 'HILANDERA', 1);

--
-- Disparadores `locacion`
--
DELIMITER $$
CREATE TRIGGER `locacion_ai` AFTER INSERT ON `locacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Locación",CONCAT('Registro de "',NEW.id_locacion,' - ',NEW.locacion,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `locacion_bu` BEFORE UPDATE ON `locacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Locacion",CONCAT('Actualización de "',NEW.id_locacion,' - ',NEW.locacion,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `nombre`, `descripcion`) VALUES
(1, 'Usuarios', 'Gestionar Usuarios'),
(2, 'Encargados', 'Gestionar Encargados'),
(3, 'Dependencias', 'Gestionar Dependencias'),
(4, 'Categorias', 'Gestionar Categoria SIGECOF'),
(5, 'Actas', 'Gestionar Actas de bienes'),
(6, 'Asignar Bien', 'Asignar los Bienes a las dependencias'),
(7, 'Desincorporar Bien', 'Desincorporar bienes de las dependencias'),
(8, 'Reasignar Bien', 'Reasignar los bienes de las dependencias'),
(9, 'Generar Reportes', 'Reportes '),
(10, 'Gestionar Seguridad', 'Roles de Usuario'),
(11, 'Perfil', 'Informacion de perfil'),
(12, 'Configuración', 'Configuracion de informacion del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`) VALUES
(17, 'Consultar Actas'),
(21, 'Consultar Asignar Bien'),
(13, 'Consultar Categorias'),
(32, 'Consultar Configuracion'),
(9, 'Consultar Dependencias'),
(23, 'Consultar Desincorporar Bien'),
(5, 'Consultar Encargados'),
(25, 'Consultar Reasignar Bien'),
(27, 'Consultar Reportes'),
(28, 'Consultar Seguridad'),
(1, 'Consultar Usuarios'),
(18, 'Crear Actas'),
(22, 'Crear Asignar Bien'),
(14, 'Crear Categorias'),
(33, 'Crear Configuracion'),
(10, 'Crear Dependencias'),
(24, 'Crear Desincorporar Bien'),
(6, 'Crear Encargados'),
(26, 'Crear Reasignar Bien'),
(29, 'Crear Seguridad'),
(2, 'Crear Usuarios'),
(20, 'Eliminar Actas'),
(16, 'Eliminar Categorias'),
(35, 'Eliminar Configuracion'),
(12, 'Eliminar Dependencias'),
(8, 'Eliminar Encargados'),
(31, 'Eliminar Seguridad'),
(4, 'Eliminar Usuarios'),
(19, 'Modificar Actas'),
(15, 'Modificar Categorias'),
(34, 'Modificar Configuracion'),
(11, 'Modificar Dependencias'),
(7, 'Modificar Encargados'),
(30, 'Modificar Seguridad'),
(3, 'Modificar Usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_prov` varchar(50) NOT NULL,
  `rif` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_prov`, `rif`, `direccion`, `estado`) VALUES
(5, 'CARLOS', 'V1234567', 'BARQUISIMETO', 1);

--
-- Disparadores `proveedor`
--
DELIMITER $$
CREATE TRIGGER `proveedor_ai` AFTER INSERT ON `proveedor` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Proveedores",CONCAT('Registro de "',NEW.rif,' - ',NEW.nombre_prov,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `proveedor_bu` BEFORE UPDATE ON `proveedor` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Proveedores",CONCAT('Actualización de "',NEW.rif,' - ',NEW.nombre_prov,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reasignar`
--

CREATE TABLE `reasignar` (
  `id_reasignacion` int(11) NOT NULL,
  `codigo_bien` int(11) NOT NULL,
  `num_movimiento` int(11) NOT NULL,
  `nueva_dependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reasignar`
--

INSERT INTO `reasignar` (`id_reasignacion`, `codigo_bien`, `num_movimiento`, `nueva_dependencia`) VALUES
(2, 123, 6, 55454666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reasignar_descripcion`
--

CREATE TABLE `reasignar_descripcion` (
  `num_movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `concepto` text NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `codigo_dependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reasignar_descripcion`
--

INSERT INTO `reasignar_descripcion` (`num_movimiento`, `fecha`, `concepto`, `id_tipo`, `codigo_dependencia`) VALUES
(6, '2021-11-16', 'se reubico', 2, 55454666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`, `descripcion`, `estado`) VALUES
(1, 'ADMINISTRADOR', 'todos los permisosewrewr', 0),
(2, 'REGISTRADOR', 'permisos registro', 0),
(7, 'BIENES', 'GESTION DE BIENES', 0),
(9, 'REGISTRADOR', 'permiso basico', 1),
(10, 'ADMINISTRADOR', 'TODOS LOS PERMISOS', 1);

--
-- Disparadores `rol`
--
DELIMITER $$
CREATE TRIGGER `rol_ai` AFTER INSERT ON `rol` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Roles",CONCAT('Registro de "',NEW.id_rol,' - ',NEW.rol,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `rol_bu` BEFORE UPDATE ON `rol` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Roles",CONCAT('Actualización de "',NEW.id_rol,' - ',NEW.rol,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permiso`
--

CREATE TABLE `rol_permiso` (
  `rol_id` int(11) NOT NULL,
  `permiso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol_permiso`
--

INSERT INTO `rol_permiso` (`rol_id`, `permiso_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(2, 1),
(2, 5),
(2, 9),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 27),
(7, 5),
(7, 27),
(7, 32),
(7, 33),
(7, 34),
(7, 35),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7),
(10, 8),
(10, 9),
(10, 10),
(10, 11),
(10, 12),
(10, 13),
(10, 14),
(10, 15),
(10, 16),
(10, 17),
(10, 18),
(10, 19),
(10, 20),
(10, 21),
(10, 22),
(10, 23),
(10, 24),
(10, 25),
(10, 26),
(10, 27),
(10, 28),
(10, 29),
(10, 30),
(10, 31),
(10, 32),
(10, 33),
(10, 34),
(10, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bien`
--

CREATE TABLE `tipo_bien` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_bien`
--

INSERT INTO `tipo_bien` (`id_tipo`, `tipo`, `estado`) VALUES
(2, 'MUEBLE', 1),
(3, 'INMUEBLE', 1);

--
-- Disparadores `tipo_bien`
--
DELIMITER $$
CREATE TRIGGER `tipo_bien_ai` AFTER INSERT ON `tipo_bien` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Tipo Bien",CONCAT('Registro de "',NEW.id_tipo,' - ',NEW.tipo,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tipo_bien_bu` BEFORE UPDATE ON `tipo_bien` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Tipo Bien",CONCAT('Actualización de "',NEW.id_tipo,' - ',NEW.tipo,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reasignacion`
--

CREATE TABLE `tipo_reasignacion` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_reasignacion`
--

INSERT INTO `tipo_reasignacion` (`id_tipo`, `tipo`, `estado`) VALUES
(2, 'PERDIDA', 1),
(5, 'MAL ESTADO', 1);

--
-- Disparadores `tipo_reasignacion`
--
DELIMITER $$
CREATE TRIGGER `tipo_reasignacion_ai` AFTER INSERT ON `tipo_reasignacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Tipo Reasignación",CONCAT('Registro de "',NEW.id_tipo,' - ',NEW.tipo,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tipo_reasignacion_bu` BEFORE UPDATE ON `tipo_reasignacion` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Tipo Reasignación",CONCAT('Actualización de "',NEW.id_tipo,' - ',NEW.tipo,'"'))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `clave`, `imagen`, `id_rol`, `estado`) VALUES
(13, 'ARIANNA', 'aripaocol@gmaul.com', '123456', 'imagenes/8.jpg', 1, 0),
(17, 'ARIANNA25', 'arianna25@gmail.com', '123456', NULL, 10, 1),
(19, 'DANIELA29', 'daniela29@gmail.com', '123456', NULL, 9, 1);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuarios_ai` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Usuarios",CONCAT('Registro de "',NEW.id_usuario,' - ',NEW.nombre,'"'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuarios_bu` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO bitacora(usuario, modulo, accion) 
    VALUES (@usuario_id,"Usuarios",CONCAT('Actualización de "',NEW.id_usuario,' - ',NEW.nombre,'"'))
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`num_acta`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `codigo_dependencia` (`codigo_dependencia`),
  ADD KEY `num_movimiento` (`num_movimiento`),
  ADD KEY `codigo_bien` (`codigo_bien`);

--
-- Indices de la tabla `asignacion_descripcion`
--
ALTER TABLE `asignacion_descripcion`
  ADD PRIMARY KEY (`num_movimiento`),
  ADD UNIQUE KEY `num_entrega` (`num_entrega`);

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `codigo_categoria` (`codigo_categoria`),
  ADD KEY `num_acta` (`num_acta`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `id_usuario` (`usuario`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `categoria_sigecof`
--
ALTER TABLE `categoria_sigecof`
  ADD PRIMARY KEY (`codigo_categoria`),
  ADD KEY `id_clasificacion` (`id_clasificacion`),
  ADD KEY `id_denominacion` (`id_denominacion`);

--
-- Indices de la tabla `clasificacion_cat`
--
ALTER TABLE `clasificacion_cat`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `clasificacion_dep`
--
ALTER TABLE `clasificacion_dep`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `denominacion`
--
ALTER TABLE `denominacion`
  ADD PRIMARY KEY (`id_denominacion`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`codigo_dependencia`),
  ADD KEY `id_clasificacion` (`id_clasificacion`),
  ADD KEY `id_locacion` (`id_locacion`),
  ADD KEY `id_encargado` (`id_encargado`);

--
-- Indices de la tabla `desincorporar`
--
ALTER TABLE `desincorporar`
  ADD PRIMARY KEY (`num_movimiento`),
  ADD KEY `codigo_dependencia` (`codigo_dependencia`),
  ADD KEY `codigo_bien` (`codigo_bien`);

--
-- Indices de la tabla `encargados`
--
ALTER TABLE `encargados`
  ADD PRIMARY KEY (`id_encargado`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `locacion`
--
ALTER TABLE `locacion`
  ADD PRIMARY KEY (`id_locacion`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `reasignar`
--
ALTER TABLE `reasignar`
  ADD PRIMARY KEY (`id_reasignacion`),
  ADD KEY `codigo_bien` (`codigo_bien`),
  ADD KEY `num_movimiento` (`num_movimiento`),
  ADD KEY `nueva_dependencia` (`nueva_dependencia`);

--
-- Indices de la tabla `reasignar_descripcion`
--
ALTER TABLE `reasignar_descripcion`
  ADD PRIMARY KEY (`num_movimiento`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `codigo_dependencia` (`codigo_dependencia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  ADD PRIMARY KEY (`rol_id`,`permiso_id`),
  ADD KEY `fk_roles_has_permisos_permisos1` (`permiso_id`);

--
-- Indices de la tabla `tipo_bien`
--
ALTER TABLE `tipo_bien`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_reasignacion`
--
ALTER TABLE `tipo_reasignacion`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `num_acta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `asignacion_descripcion`
--
ALTER TABLE `asignacion_descripcion`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `bienes`
--
ALTER TABLE `bienes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232228;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `categoria_sigecof`
--
ALTER TABLE `categoria_sigecof`
  MODIFY `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20003;

--
-- AUTO_INCREMENT de la tabla `clasificacion_cat`
--
ALTER TABLE `clasificacion_cat`
  MODIFY `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clasificacion_dep`
--
ALTER TABLE `clasificacion_dep`
  MODIFY `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `denominacion`
--
ALTER TABLE `denominacion`
  MODIFY `id_denominacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `codigo_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55454669;

--
-- AUTO_INCREMENT de la tabla `desincorporar`
--
ALTER TABLE `desincorporar`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `encargados`
--
ALTER TABLE `encargados`
  MODIFY `id_encargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `locacion`
--
ALTER TABLE `locacion`
  MODIFY `id_locacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reasignar`
--
ALTER TABLE `reasignar`
  MODIFY `id_reasignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reasignar_descripcion`
--
ALTER TABLE `reasignar_descripcion`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_bien`
--
ALTER TABLE `tipo_bien`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_reasignacion`
--
ALTER TABLE `tipo_reasignacion`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`codigo_dependencia`) REFERENCES `dependencias` (`codigo_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`num_movimiento`) REFERENCES `asignacion_descripcion` (`num_movimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_3` FOREIGN KEY (`codigo_bien`) REFERENCES `bienes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD CONSTRAINT `bienes_ibfk_1` FOREIGN KEY (`codigo_categoria`) REFERENCES `categoria_sigecof` (`codigo_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_bien` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_3` FOREIGN KEY (`num_acta`) REFERENCES `acta` (`num_acta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoria_sigecof`
--
ALTER TABLE `categoria_sigecof`
  ADD CONSTRAINT `categoria_sigecof_ibfk_1` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion_cat` (`id_clasificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categoria_sigecof_ibfk_2` FOREIGN KEY (`id_denominacion`) REFERENCES `denominacion` (`id_denominacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD CONSTRAINT `dependencias_ibfk_1` FOREIGN KEY (`id_locacion`) REFERENCES `locacion` (`id_locacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dependencias_ibfk_2` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion_dep` (`id_clasificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dependencias_ibfk_3` FOREIGN KEY (`id_encargado`) REFERENCES `encargados` (`id_encargado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `desincorporar`
--
ALTER TABLE `desincorporar`
  ADD CONSTRAINT `desincorporar_ibfk_3` FOREIGN KEY (`codigo_dependencia`) REFERENCES `dependencias` (`codigo_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `desincorporar_ibfk_4` FOREIGN KEY (`codigo_bien`) REFERENCES `bienes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encargados`
--
ALTER TABLE `encargados`
  ADD CONSTRAINT `encargados_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reasignar`
--
ALTER TABLE `reasignar`
  ADD CONSTRAINT `reasignar_ibfk_1` FOREIGN KEY (`num_movimiento`) REFERENCES `reasignar_descripcion` (`num_movimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reasignar_ibfk_2` FOREIGN KEY (`nueva_dependencia`) REFERENCES `dependencias` (`codigo_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reasignar_ibfk_3` FOREIGN KEY (`codigo_bien`) REFERENCES `bienes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reasignar_descripcion`
--
ALTER TABLE `reasignar_descripcion`
  ADD CONSTRAINT `reasignar_descripcion_ibfk_1` FOREIGN KEY (`codigo_dependencia`) REFERENCES `dependencias` (`codigo_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reasignar_descripcion_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_reasignacion` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  ADD CONSTRAINT `fk_roles_has_permisos_permisos1` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_roles_has_permisos_roles1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
