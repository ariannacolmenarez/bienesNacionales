-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2022 a las 15:16:10
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(46, '2021-10-13', 2147483647, '0000-00-00', '', 0, 0, 0, 0, 0),
(47, '2021-10-12', 22222, '0000-00-00', '', 0, 0, 0, 0, 0),
(48, '2021-10-01', 2342343, '0000-00-00', '', 0, 0, 0, 0, 0),
(49, '2021-10-06', 11111111, '0000-00-00', '', 0, 0, 0, 0, 0),
(50, '2021-10-12', 3434444, '0000-00-00', '', 0, 0, 0, 0, 0),
(51, '2021-10-12', 3434444, '0000-00-00', '', 0, 0, 0, 0, 0),
(52, '2021-10-20', 1111111112, '0000-00-00', '', 0, 0, 0, 0, 0),
(53, '2021-10-07', 33333, '0000-00-00', '', 0, 0, 0, 0, 0),
(54, '2021-10-20', 234234, '0000-00-00', '', 0, 0, 0, 0, 0),
(55, '2021-10-11', 5555555, '0000-00-00', '', 0, 0, 0, 0, 0),
(56, '2021-10-02', 5555555, '0000-00-00', '', 0, 0, 0, 0, 0),
(59, '2021-10-14', 23423411, '0000-00-00', '', 0, 0, 0, 0, 0),
(60, '2021-10-18', 2342342, '0000-00-00', '', 0, 0, 0, 0, 0),
(61, '2021-10-05', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(62, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(63, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(64, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(65, '2021-10-12', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(66, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(67, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(68, '2021-10-11', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(69, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(70, '2021-10-05', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(74, '2021-11-24', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(75, '2021-11-17', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(76, '2021-11-09', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(77, '2021-11-10', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(78, '2021-11-10', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(79, '2021-11-10', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(80, '2021-11-10', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(81, '2021-11-16', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(82, '2021-10-07', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(83, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(84, '2021-10-14', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(85, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(86, '2021-10-05', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(87, '2021-10-05', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(88, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(89, '2021-10-12', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(90, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(91, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(92, '2021-10-12', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(93, '2021-10-07', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(94, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(95, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(96, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(97, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(98, '2021-10-07', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(99, '2021-10-21', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(100, '2021-10-13', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(101, '2021-10-07', 0, '0000-00-00', '', 0, 0, 0, 0, 0),
(102, '2021-10-06', 0, '0000-00-00', '', 0, 0, 0, 0, 0);

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
(28, 55454665, 28, 1232226, 1),
(29, 55454665, 29, 1231, 1),
(30, 55454665, 30, 12322, 0),
(32, 55454665, 32, 333333, 1),
(33, 55454666, 33, 1232224, 1),
(34, 55454665, 34, 1232227, 1),
(35, 55454665, 35, 1232222, 0);

--
-- Disparadores `asignacion`
--
DELIMITER $$
CREATE TRIGGER `asignacion_ai` AFTER INSERT ON `asignacion` FOR EACH ROW BEGIN
    SET @bien_nombre = (SELECT nombre FROM bienes WHERE codigo = NEW.codigo_bien);
    SET @dependencia_nombre = (SELECT dependencia FROM dependencias WHERE codigo_dependencia = NEW.codigo_dependencia);
    SET @fecha = (SELECT Date_format(fecha,'%d-%m-%Y') AS fecha FROM asignacion_descripcion WHERE num_movimiento = NEW.num_movimiento);
    INSERT INTO notificaciones(titulo, mensaje) VALUES('Bien Asignado',
        CONCAT('El Bien "', @bien_nombre, '" ha sido asignado a la Dependencia "', 
        @dependencia_nombre,'" <br>', @fecha));
    INSERT INTO bitacora(usuario, modulo, accion) 
        VALUES (@usuario_id,"Asignación ",CONCAT('Registro de asignacion de "',NEW.num_movimiento,'"'));
END
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
(25, '2021-11-19', '88990', 12312, 0),
(26, '2021-11-11', '88990', 3462, 1),
(27, '2021-11-10', '213123', 212, 0),
(28, '2021-10-09', '33231', 222, 1),
(29, '2021-11-07', '63454', 4689, 1),
(30, '2022-01-04', '13131', 1212, 0),
(31, '2022-01-05', '1313111', 1212555, 1),
(32, '2022-01-05', '131310', 20030, 1),
(33, '2022-01-04', '123123', 43432, 1),
(34, '2022-01-02', '22', 12, 1),
(35, '2022-01-03', '14234', 12344, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
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
(1231, 'pantalla', 'bueno', 2, 1235, 75, 'ASIGNADO', 1),
(12322, 'cornetas', '', 2, 1234, 88, 'SIN ASIGNAR', 1),
(12345, 'raton', 'werwer', 2, 1234, 76, 'SIN ASIGNAR', 1),
(44444, 'caballo', '', 3, 1234, 102, 'SIN ASIGNAR', 1),
(112223, 'corneta', '', 1, 9, 83, '', 0),
(123123, 'wsqewqe', 'qweqwe', 2, 1235, 74, 'SIN ASIGNAR', 0),
(123223, 'corneta', '', 1, 1234, 84, '', 0),
(123224, 'disco', '', 3, 1234, 88, 'SIN ASIGNAR', 1),
(222222, 'cornetao', '', 2, 1234, 91, 'SIN ASIGNAR', 1),
(333333, 'platos', '', 2, 1235, 101, 'ASIGNADO', 1),
(1232222, 'pintura', '', 2, 1234, 90, 'SIN ASIGNAR', 1),
(1232223, 'plato', '', 3, 1235, 90, 'SIN ASIGNAR', 1),
(1232224, 'pinturas', '', 2, 1234, 91, 'ASIGNADO', 1),
(1232225, 'cornetau', '', 2, 1234, 92, 'SIN ASIGNAR', 1),
(1232226, 'cornetas', '', 2, 1234, 93, 'ASIGNADO', 1),
(1232227, 'vaso', '', 2, 1235, 94, 'ASIGNADO', 1);

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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(205, '2021-11-07 22:13:04', 'Registro de asignacion de \"29\"', 'Asignación ', 1),
(206, '2021-11-07 22:13:04', 'Actualización de \"75 - 1231\"', 'Bienes', 1),
(207, '2021-12-15 13:22:12', 'Actualización de \"9 - SECRETARIA\"', 'Roles', 1),
(208, '2021-12-15 13:23:20', 'Registro de \"19 - PAOLA\"', 'Usuarios', 1),
(209, '2021-12-15 15:57:20', 'Registro de \"10 - ADMINISTRADOR\"', 'Roles', 1),
(210, '2021-12-15 16:04:09', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(211, '2021-12-15 16:11:31', 'Actualización de \"16 - DANIELA\"', 'Usuarios', 1),
(212, '2021-12-15 16:16:37', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(213, '2021-12-15 16:17:03', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(214, '2021-12-15 16:19:47', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(215, '2021-12-15 16:20:32', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(216, '2021-12-15 16:28:42', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(217, '2021-12-15 16:28:59', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(218, '2021-12-15 16:31:47', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(219, '2021-12-15 16:32:25', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(220, '2021-12-15 16:36:14', 'Actualización de \"13 - ARIANNA\"', 'Usuarios', 1),
(221, '2021-12-15 16:41:45', 'Registro de \"20 - ARIANNA\"', 'Usuarios', 1),
(222, '2021-12-15 16:43:26', 'Registro de \"36 - ARIANNA\"', 'Encargados', 1),
(223, '2021-12-15 16:43:45', 'Actualización de \"36 - ARIANNA\"', 'Encargados', 1),
(279, '2021-12-30 14:57:45', 'Actualización de \"20 - SUPERUSER\"', 'Usuarios', 1),
(280, '2021-12-30 16:32:07', 'Registro de \"21 - ARIANNA\"', 'Usuarios', 1),
(281, '2021-12-30 17:59:48', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(282, '2021-12-30 18:08:03', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(283, '2021-12-30 18:12:27', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(284, '2021-12-30 18:15:44', 'Actualización de \"16 - DANIELA\"', 'Usuarios', 1),
(285, '2021-12-30 18:15:53', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(286, '2021-12-30 19:00:09', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(287, '2021-12-30 19:18:22', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(288, '2022-01-03 13:45:37', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(289, '2022-01-03 13:58:06', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(290, '2022-01-03 15:07:51', 'Registro de \"22 - MARIAS\"', 'Usuarios', 1),
(291, '2022-01-03 15:24:30', 'Registro de \"23 - MARISOL\"', 'Usuarios', 1),
(292, '2022-01-03 16:30:10', 'Actualización de \"23 - MARISOL\"', 'Usuarios', 1),
(293, '2022-01-03 16:42:49', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(294, '2022-01-03 16:43:22', 'Actualización de \"22 - MARIAS\"', 'Usuarios', 1),
(295, '2022-01-03 16:51:53', 'Actualización de \"4 - AQUIFUEX2\"', 'Tipo Reasignación', 1),
(296, '2022-01-03 17:20:23', 'Actualización de \"3 - ARI\"', 'Tipo Reasignación', 1),
(297, '2022-01-03 17:20:40', 'Actualización de \"2 - DANI\"', 'Tipo Bien', 1),
(298, '2022-01-03 17:23:07', 'Actualización de \"9 - SECRETARIA\"', 'Roles', 1),
(299, '2022-01-03 17:24:10', 'Actualización de \"9 - SECRETARIA\"', 'Roles', 1),
(300, '2022-01-04 13:28:00', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(301, '2022-01-04 13:28:23', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(302, '2022-01-04 13:49:46', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(303, '2022-01-04 13:51:45', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(304, '2022-01-04 13:53:20', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(305, '2022-01-04 13:54:47', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(306, '2022-01-04 14:03:03', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(307, '2022-01-04 14:04:34', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(308, '2022-01-04 14:05:33', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(309, '2022-01-04 14:06:14', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(310, '2022-01-04 14:06:36', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(311, '2022-01-04 14:29:36', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(312, '2022-01-04 15:16:03', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(313, '2022-01-04 15:18:41', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(314, '2022-01-04 15:19:24', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(315, '2022-01-04 15:22:06', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(316, '2022-01-04 15:24:43', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(317, '2022-01-04 15:25:30', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(318, '2022-01-04 15:29:21', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(319, '2022-01-04 15:36:42', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(320, '2022-01-04 15:38:10', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(321, '2022-01-04 16:12:50', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(322, '2022-01-04 16:13:07', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(323, '2022-01-04 16:14:34', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(324, '2022-01-04 16:15:50', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(325, '2022-01-04 16:21:17', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(326, '2022-01-04 16:27:38', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(327, '2022-01-04 16:29:49', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(328, '2022-01-04 16:31:36', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(329, '2022-01-04 16:34:13', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(330, '2022-01-04 16:35:19', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(331, '2022-01-04 16:43:57', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(332, '2022-01-04 16:47:31', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(333, '2022-01-04 16:59:04', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(334, '2022-01-04 17:00:58', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(335, '2022-01-04 17:12:28', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(336, '2022-01-04 17:13:43', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(337, '2022-01-04 17:16:44', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(338, '2022-01-04 17:25:43', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(339, '2022-01-04 17:27:34', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(340, '2022-01-04 17:30:26', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(341, '2022-01-04 17:32:48', 'Actualización de \"19 - PAOLA\"', 'Usuarios', 1),
(342, '2022-01-05 20:43:17', 'Actualización de \"16 - DANIELA\"', 'Usuarios', 1),
(343, '2022-01-05 20:44:16', 'Registro de \"24 - JOSE\"', 'Usuarios', 1),
(344, '2022-01-05 20:50:03', 'Actualización de \"21 - ARIANNA\"', 'Usuarios', 1),
(345, '2022-01-06 00:00:33', 'Registro de asignacion de \"30\"', 'Asignación ', 1),
(346, '2022-01-06 00:00:34', 'Actualización de \"88 - 12322\"', 'Bienes', 1),
(347, '2022-01-07 01:17:26', 'Registro de asignacion de \"32\"', 'Asignación ', 1),
(348, '2022-01-07 01:17:26', 'Actualización de \"101 - 333333\"', 'Bienes', 1),
(349, '2022-01-07 01:46:49', 'Registro de asignacion de \"33\"', 'Asignación ', 1),
(350, '2022-01-07 01:46:49', 'Actualización de \"91 - 1232224\"', 'Bienes', 1),
(351, '2022-01-07 01:49:34', 'Registro de asignacion de \"34\"', 'Asignación ', 1),
(352, '2022-01-07 01:49:34', 'Actualización de \"94 - 1232227\"', 'Bienes', 1),
(353, '2022-01-07 01:51:27', 'Registro de asignacion de \"35\"', 'Asignación ', 1),
(354, '2022-01-07 01:51:28', 'Actualización de \"90 - 1232222\"', 'Bienes', 1),
(355, '2022-01-07 01:58:17', 'Actualización de \"88 - 12322\"', 'Bienes', 1),
(356, '2022-01-07 01:58:17', 'Actualización \"30\"', 'Asignación', 1),
(357, '2022-01-07 01:58:18', 'Registro de \"1\"', 'Desincorporar', 1),
(358, '2022-01-07 12:26:27', 'Actualización de \"90 - 1232222\"', 'Bienes', 1),
(359, '2022-01-07 12:26:27', 'Actualización \"35\"', 'Asignación', 1),
(360, '2022-01-07 12:26:27', 'Registro de \"2\"', 'Desincorporar', 1);

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
(6, 'ADMINISTRADOR', 0),
(11, 'SECRETARIA', 0),
(24, 'SADCADA', 0),
(25, 'OPERADOR', 0),
(26, 'CAJERA', 0),
(27, 'PERSONA', 0),
(28, 'GENTE', 1),
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
  `id_denominacion` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_sigecof`
--

INSERT INTO `categoria_sigecof` (`codigo_categoria`, `presupuestaria`, `id_clasificacion`, `id_denominacion`, `estado`) VALUES
(1, '123123', 1, 1, 0),
(4, '31223120', 1, 1, 0),
(5, '31223123', 1, 4, 0),
(6, '54154', 1, 1, 0),
(7, '5454', 1, 1, 0),
(8, '5454654', 1, 1, 0),
(9, '234234', 1, 1, 0),
(10, '123213', 1, 1, 0),
(1234, '123456', 1, 1, 1),
(1235, '5678', 2, 5, 1);

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
(1, 'mueble', 0),
(2, 'MUEBLE', 1),
(3, 'CALL', 0);

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
(10, 'DEPARTAMENTO 2', 0),
(11, 'ALVAREZ', 1),
(12, 'DOCE', 0);

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
(1, 'INGRESOS ORDINARIOS', 0),
(4, 'OTROS', 0),
(5, 'TRECE', 1),
(6, 'UNO', 0);

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
  `observacion` text,
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
(55454665, 'JOSEE', '', '', '', '', '2021-10-09', 10, 13, 33, 1),
(55454666, 'DANI', '', '', '', '', '2021-10-13', 11, 13, 35, 1);

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
(1, '2022-01-02', 'JAJA', '2022-01-03', 'JAJAA', 55454665, 'BCXBVBD', 12322, 0),
(2, '2022-01-05', 'JAJA', '2022-01-04', 'JAJAA', 55454665, 'NA', 1232222, 0);

--
-- Disparadores `desincorporar`
--
DELIMITER $$
CREATE TRIGGER `desincorporar_ai` AFTER INSERT ON `desincorporar` FOR EACH ROW BEGIN
    SET @bien_nombre = (SELECT nombre FROM bienes WHERE codigo = NEW.codigo_bien);
    SET @dependencia_nombre = (SELECT dependencia FROM dependencias WHERE codigo_dependencia = NEW.codigo_dependencia);
    SET @fecha = Date_format(NEW.fecha,'%d-%m-%Y');
    INSERT INTO notificaciones(titulo, mensaje) VALUES('Bien Desincorporado',
        CONCAT('El Bien "', @bien_nombre, '" ha sido desincorporado de la Dependencia "', 
        @dependencia_nombre,'" <br>', @fecha));
    INSERT INTO bitacora(usuario, modulo, accion) 
        VALUES (@usuario_id,"Desincorporar",CONCAT('Registro de "',NEW.num_movimiento,'"'));
END
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
(33, 12245789, 'DANNI', 'PARRA', 414000752, 26, 0),
(34, 12245788, 'MARIA', 'RAMONES', 426789453, 29, 1),
(35, 12245648, 'DANI', 'GARCIA', 424356748, 28, 1),
(36, 27629581, 'ARIANNA', 'COLMENAREZ', 345353, 29, 0);

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
(13, 'GIRALUNA', 1);

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
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `titulo`, `mensaje`, `estado`, `created_at`) VALUES
(1, 'Bien Asignado', 'El Bien \"platos\" ha sido asignado a la Dependencia \"JOSEE\"', 0, '2022-01-07 01:17:26'),
(2, 'Bien Asignado', 'El Bien \"pinturas\" ha sido asignado a la Dependencia \"DANI\" <br>2022-01-04', 1, '2022-01-07 01:46:49'),
(3, 'Bien Asignado', 'El Bien \"vaso\" ha sido asignado a la Dependencia \"JOSEE\" <br>02/01/2022', 1, '2022-01-07 01:49:34'),
(4, 'Bien Asignado', 'El Bien \"pintura\" ha sido asignado a la Dependencia \"JOSEE\" <br>03-01-2022', 1, '2022-01-07 01:51:27'),
(5, 'Bien Desincorporado', 'El Bien \"cornetas\" ha sido desincorporado de la Dependencia \"JOSEE\" <br>02-01-2022', 1, '2022-01-07 01:58:18'),
(6, 'Bien Desincorporado', 'El Bien \"pintura\" ha sido desincorporado de la Dependencia \"JOSEE\" <br>05-01-2022', 1, '2022-01-07 12:26:27');

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
(36, 'Consultar mantenimiento'),
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
(2, 'DANIELA', '5656576', 'DUACA LARA', 0),
(4, 'MARIA', '12365459', 'LARA BARQUISIMETO', 0),
(5, 'CARLOS', '1234567', 'BARQUISIMETO', 1);

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
(9, 'SECRETARIA', 'REGISTRADOR', 1),
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
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(9, 8),
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
(10, 35),
(10, 36);

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
(1, 'DSFSDFSDFEEE', 0),
(2, 'DANI', 0),
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
(1, 'ASDASDASEEE', 0),
(2, 'AQUIFUE', 1),
(3, 'ARI', 0),
(4, 'AQUIFUEX2', 0);

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
  `clave` varchar(255) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `clave`, `imagen`, `id_rol`, `estado`) VALUES
(16, 'DANIELA', 'daniela@gmail.com', '$2y$06$WWam3FK/3L.nycKH/iPBAu0Z3BHcmcwP.IcXA7hQzBO4Tc9bUQWSG', 'imagenes/Pizza para colorear.jpg', 9, 1),
(17, 'MARIANA', 'Mariana@gmail.com', 'HOLA12', 'imagenes/IMG-20210809-WA0001.jpg', 2, 0),
(18, 'MARIANIS', 'Marianis@gmail.com', 'HOLA13', 'imagenes/IMG-20210809-WA0001.jpg', 2, 0),
(19, 'PAOLA', 'aripaocol@gmail.com', '106329', 'imagenes/user.png', 9, 1),
(20, 'SUPERUSER', 'superUser@gmail.com', '123456', 'imagenes/user.png', 10, 1),
(21, 'ARIANNA', 'arianna@gmail.com', '$2y$06$3a9Nb1BHCaOa2e41j1Oo1.XZtWR7sxc1ajNrauJBV7vIt7eXhPsIa', 'imagenes/Catedral-BArquisimeto635.jpg', 9, 1),
(22, 'MARIAS', 'marias@goam.com', 'ba3253876aed6bc22d4a', 'imagenes/user.png', 9, 0),
(23, 'MARISOL', 'Maror@gmail.com', '$2y$10$z6q7Mwkm1d6GP', 'imagenes/BASE.png', 9, 0),
(24, 'JOSE', 'jose@gmail.com', '$2y$06$GMhBqA28ASzBW523GxFAqOc.TLi10Oe8NbYCBnDtcoei90ISPQLl.', 'imagenes/televisor 2.png', 10, 1);

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
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `num_acta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `asignacion_descripcion`
--
ALTER TABLE `asignacion_descripcion`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `bienes`
--
ALTER TABLE `bienes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1232228;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `categoria_sigecof`
--
ALTER TABLE `categoria_sigecof`
  MODIFY `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236;

--
-- AUTO_INCREMENT de la tabla `clasificacion_cat`
--
ALTER TABLE `clasificacion_cat`
  MODIFY `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clasificacion_dep`
--
ALTER TABLE `clasificacion_dep`
  MODIFY `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `denominacion`
--
ALTER TABLE `denominacion`
  MODIFY `id_denominacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `codigo_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55454667;

--
-- AUTO_INCREMENT de la tabla `desincorporar`
--
ALTER TABLE `desincorporar`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `encargados`
--
ALTER TABLE `encargados`
  MODIFY `id_encargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `locacion`
--
ALTER TABLE `locacion`
  MODIFY `id_locacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reasignar`
--
ALTER TABLE `reasignar`
  MODIFY `id_reasignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reasignar_descripcion`
--
ALTER TABLE `reasignar_descripcion`
  MODIFY `num_movimiento` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`codigo_dependencia`) REFERENCES `dependencias` (`codigo_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`num_movimiento`) REFERENCES `asignacion_descripcion` (`num_movimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_3` FOREIGN KEY (`codigo_bien`) REFERENCES `bienes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
