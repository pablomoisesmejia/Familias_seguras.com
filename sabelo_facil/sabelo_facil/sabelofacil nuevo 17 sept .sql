-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2018 a las 16:06:46
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabelofacil`
--
CREATE DATABASE IF NOT EXISTS `sabelofacil` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `sabelofacil`;

DELIMITER $$
--
-- Procedimientos
--
$$

CREATE DEFINER=`sabeloeasy`@`localhost` PROCEDURE `mostar_clientes_con_menbresia` ()  NO SQL
SELECT *
From cliente WHERE FK_ID_membresia != ""$$

CREATE DEFINER=`sabeloeasy`@`localhost` PROCEDURE `new_Membresia` ()  NO SQL
INSERT INTO membresia (ID_membresia,fecha_inicio,fecha_vencimiento) VALUES (NULL,CURRENT_DATE,(select DATE_ADD(CURRENT_DATE,INTERVAL 1 YEAR)))$$

$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_admin` int(11) NOT NULL,
  `FK_ID_tipousuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ID_tipo_doc` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_contrasena` date NOT NULL,
  `fecha_bloqueo` date NOT NULL,
  `login_id` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigo_auth` varchar(18) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_admin`, `FK_ID_tipousuario`, `nombre`, `apellido`, `fecha_nac`, `correo`, `contrasena`, `imagen_url`, `direccion`, `documento`, `username`, `FK_ID_tipo_doc`, `estado`, `fecha_contrasena`, `fecha_bloqueo`, `login_id`, `codigo_auth`) VALUES
(2, 1, 'alejandro Ernesto', 'Mejia Rodriguez', '1999-10-18', 'alenetoo1999@gmail.com', '$2y$10$xohIPgA6624B9NJ00rqJDeCWnTe/LHZsNpCJCMUfiZiObVjFWqGCS', 'hola.jpg', 'mi casa', 123456789, 'Alejo99', 1, 1, '2018-09-03', '0000-00-00', '0', ''),
(4, 2, 'ernesto', 'ccoraso', '1999-05-29', 'alejandro@gmail.com', '$2y$10$9RdkY2zIG1lGXn6ZErre3uXoKv89MgYx4bKCl19rhuLvDQ2KMyRGe', 'no hay imagen', 'su casita', 12345678, 'koko', 2, 1, '2018-07-10', '2018-09-04', '0', ''),
(7, 1, 'carmelo', 'juliaon', '2018-08-06', 'alenetoo1999@outlook.com', '$2y$10$8BLUyFOZ3v9yTeXImv3xsemotPr2kwd7h/nm94i7AGVu1kvYRbR9.', '5b878b23aaf2d.jpg', 'urbanizacion 2', 1234567891, 'Carmelooi123', 3, 1, '2018-09-03', '2018-09-02', 'jc2br82a8if5o83m0qi6idi704', 'M2TUN6E2B6TOLKDA'),
(11, 2, 'Daniel', 'Mejia', '2004-09-02', 'pablomoisesmejia@gmail.com', '$2y$10$8BLUyFOZ3v9yTeXImv3xsemotPr2kwd7h/nm94i7AGVu1kvYRbR9.', '5b8d8a4091416.jpg', 'avenida dos', 124526789, 'daniel1234', 1, 1, '2018-09-03', '0000-00-00', 'oba7jmibefvrk1vvvn0o2mj5kt', 'DLOWPDGNMVPE3IOW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `ID_anuncio` int(11) NOT NULL,
  `nombre_anunciante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `empresa_url` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `ID_bitacora` int(11) NOT NULL,
  `FK_ID_admin` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `Accion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_categoria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_categoria`, `nombre_categoria`, `imagen_url`, `descripcion_categoria`, `Estado`) VALUES
(1, 'Instrumentos de Escritura', 'escritura.jpg', 'colores y pintura', 1),
(3, 'Instrumentos de Precision', '5b0b9bfe392b6.jpg', '', 1),
(4, 'Instrumentos de Coloreo', '5b0ba32146db1.jpg', '', 1),
(6, 'Instrumentos de papeleria', '5b0ba411e895b.jpg', 'papeles y hojas', 1),
(7, 'uniformes', 'uni.jpg', 'uniformes variados', 1),
(8, 'zapateria', '5b0c45384e76b.jpg', 'buensod', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL,
  `FK_ID_membresia` int(11) DEFAULT NULL,
  `FK_ID_tipo_doc` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `FK_ID_membresia`, `FK_ID_tipo_doc`, `nombre`, `apellido`, `fecha_nacimiento`, `direccion`, `documento`, `correo`, `username`, `contrasena`, `imagen_url`, `estado`) VALUES
(1, 1, 1, 'Roberto', 'Moran', '1999-05-03', 'su casita', 1245231254, 'willy@gmail.com', '', 'buenas tardes ', 'wiliito.jpg', 1),
(2, 4, 1, 'Andres', 'Gomez', '1999-05-03', 'su casita', 12452314, 'alenetoo1999@outlook.com', 'andres21', '$2y$10$8BLUyFOZ3v9yTeXImv3xsemotPr2kwd7h/nm94i7AGVu1kvYRbR9.', 'wiliito.jpg', 1),
(3, NULL, 2, 'alejandro', 'mejia', '2004-09-10', 'mi  casa', 123456789, 'alenetoo1999@gmail.com', 'alejo99', '$2y$10$lQTQDn5iOTYTiDXeL6wzg.UQUuPrGaCv7xHyyy8zWeeWYQnz/Gybi', '', 1),
(4, NULL, 1, 'Daniel', 'Carranza', '2004-09-16', 'avenida', 12345678, 'alenetoo1999@outloook.com', 'carranza', '$2y$10$8BLUyFOZ3v9yTeXImv3xsemotPr2kwd7h/nm94i7AGVu1kvYRbR9.', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercio`
--

CREATE TABLE `comercio` (
  `ID_comercio` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `responsable` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ID_estado_comercio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comercio`
--

INSERT INTO `comercio` (`ID_comercio`, `nombre`, `Producto`, `correo`, `telefono`, `responsable`, `imagen_url`, `FK_ID_estado_comercio`) VALUES
(1, 'ZAPATOS CHULI', 'variedad de zapatos', 'chuli_ctact@gmail.com', 22301542, 'Raul bolaños', 'chuli_shoes.jpg', 1),
(2, 'Uniformes alvarado', 'variedad de uniformes', 'alvarado@gmail.com', 22301542, 'Raul Castro', 'alvarado.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `ID_cupon` int(11) NOT NULL,
  `nombre_cupon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ID_comercio` int(11) NOT NULL,
  `FK_ID_categoria` int(11) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `limitado` tinyint(1) NOT NULL,
  `existencia` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cupones`
--

INSERT INTO `cupones` (`ID_cupon`, `nombre_cupon`, `FK_ID_comercio`, `FK_ID_categoria`, `precio`, `limitado`, `existencia`, `fecha_inicio`, `fecha_final`, `descripcion`, `estado`) VALUES
(1, '', 2, 7, '5.00', 1, 20, '2018-05-10', '2018-05-31', 'descuento en uniformes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `ID_detalle` int(11) NOT NULL,
  `FK_ID_venta` int(11) DEFAULT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `sub_total` decimal(6,2) NOT NULL,
  `estadoventa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`ID_detalle`, `FK_ID_venta`, `FK_ID_producto`, `FK_ID_cliente`, `descuento`, `cantidad`, `sub_total`, `estadoventa`) VALUES
(1, 1, 1, 2, 1, 2, '6.00', 1),
(2, 2, 6, 2, 2, 6, '50.00', 1),
(3, 6, 1, 2, 0, 12, '60.00', 1),
(4, 6, 6, 2, 0, 1, '2.00', 1),
(5, 6, 3, 2, 0, 3, '6.00', 1),
(6, 6, 5, 2, 0, 22, '44.00', 1),
(7, 7, 3, 2, 0, 22, '44.00', 1),
(8, 7, 5, 2, 0, 40, '80.00', 1),
(9, 8, 6, 2, 0, 1, '2.00', 1),
(10, 9, 7, 2, 0, 1, '2.00', 1),
(11, 10, 2, 2, 0, 11, '33.00', 1),
(12, 11, 3, 2, 0, 2, '4.00', 1),
(13, 11, 1, 2, 0, 3, '15.00', 1),
(14, 12, 7, 2, 0, 5, '10.00', 1),
(15, 12, 2, 2, 0, 5, '15.00', 1),
(16, 13, 6, 2, 0, 80, '160.00', 1),
(17, 14, 6, 2, 0, 33, '66.00', 1),
(18, 14, 3, 2, 0, 2, '4.00', 1),
(19, 15, 7, 2, 0, 33, '66.00', 1),
(20, 16, 7, 2, 0, 12, '24.00', 1),
(21, 17, 7, 2, 0, 12, '24.00', 1),
(22, 18, 1, 2, 0, 4, '20.00', 1),
(23, 18, 3, 2, 0, 4, '8.00', 1),
(24, 18, 5, 2, 0, 2, '4.00', 1),
(25, 19, 6, 2, 0, 10, '20.00', 1),
(26, 19, 2, 2, 0, 5, '15.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_comercio`
--

CREATE TABLE `estado_comercio` (
  `ID_estadoC` int(11) NOT NULL,
  `EstadoC` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_comercio`
--

INSERT INTO `estado_comercio` (`ID_estadoC`, `EstadoC`) VALUES
(1, 'Disponible'),
(2, 'Pendiente'),
(3, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_cupones`
--

CREATE TABLE `imagenes_cupones` (
  `ID_imgcupon` int(11) NOT NULL,
  `url_imagen` int(11) NOT NULL,
  `FK_ID_cupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_marca`, `nombre_marca`, `correo`, `telefono`, `direccion`, `imagen_url`, `estado`) VALUES
(1, 'Faber-Castell', 'marketing@faber-castell.com', 22710218, 'Paseo Gral. EscalÃ³n 4646, San Salvador', NULL, 1),
(2, 'Facela', 'info@facela.com', 22417100, 'Km. 11 Carretera al Puerto de La Libertad.\r\nAntiguo CuscatlÃ¡n, El Salvador, C.A.', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_materia` int(11) NOT NULL,
  `nombre_materia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_materia`, `nombre_materia`, `descripcion`, `estado`) VALUES
(1, 'Matematicas', 'Calculos y procesos de resolucion de problemas', 1),
(10, 'Estudios Sociales ', 'Vista de cerca la realidad social en el paÃ­s', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `ID_membresia` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`ID_membresia`, `fecha_inicio`, `fecha_vencimiento`, `estado`) VALUES
(1, '2018-05-17', '2019-05-17', 1),
(2, '2018-04-17', '2019-04-17', 1),
(3, '2018-03-17', '2019-03-17', 1),
(4, '2018-08-16', '2019-05-16', 1),
(5, '2018-08-16', '2019-05-16', 1),
(18, '2018-06-16', '2019-05-16', 1),
(19, '2018-05-16', '2019-05-16', 1),
(20, '2018-05-16', '2019-05-16', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL,
  `FK_ID_marca` int(11) NOT NULL,
  `FK_ID_Categoria` int(11) NOT NULL,
  `FK_ID_proveedor` int(11) NOT NULL,
  `nombre_producto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_producto`, `FK_ID_marca`, `FK_ID_Categoria`, `FK_ID_proveedor`, `nombre_producto`, `precio`, `imagen_url`, `descripcion`, `estado`) VALUES
(1, 2, 4, 1, 'Colores ', '5.00', 'facela_colors.jpg', '12 unidades brillantes', 1),
(2, 1, 1, 1, 'Lapiz ', '3.00', 'lapiz.jpg', 'caja de 12 unidades ', 1),
(3, 1, 3, 1, 'Compas 12mm', '2.00', 'compas_faber.jpg', 'compas de presicion de 12mm', 1),
(5, 2, 1, 2, 'Plumas', '2.00', 'plumas.jpg', 'caja de 10 unidades ', 1),
(6, 1, 4, 1, 'Colores chidos', '2.00', 'colores.jpg', '12 unidades ', 1),
(7, 1, 4, 1, 'Colores ', '2.00', 'colores.jpg', '12 unidades', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_proveedor`, `nombre_proveedor`, `correo`, `telefono`, `direccion`, `estado`) VALUES
(1, 'ARANDA', 'aranda@gmail.com', 22325645, 'avenida aranda ', 1),
(2, 'LA LUZ', 'la_luz@gmail.com', 23154268, 'avenida la cruz #4457', 1),
(3, 'IBERICA', 'iberica_contact.2018@gmail.com', 22301524, 'al lado del puesto de chorys', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `ID_tipo_doc` int(11) NOT NULL,
  `nombre_tipo_doc` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`ID_tipo_doc`, `nombre_tipo_doc`) VALUES
(1, 'DUI'),
(2, 'NIT'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `Administradores` int(1) NOT NULL DEFAULT '0',
  `Categorias` int(1) NOT NULL DEFAULT '0',
  `Productos` int(1) NOT NULL DEFAULT '0',
  `Comercios` int(1) NOT NULL DEFAULT '0',
  `Materias` int(1) NOT NULL DEFAULT '0',
  `Proveedores` int(1) NOT NULL DEFAULT '0',
  `Marcas` int(1) NOT NULL DEFAULT '0',
  `TiposUsuarios` int(1) NOT NULL DEFAULT '0',
  `Permisos` int(1) NOT NULL DEFAULT '0',
  `Clientes` int(1) NOT NULL DEFAULT '0',
  `Estadisticas` int(1) NOT NULL DEFAULT '0',
  `Reportes` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_tipo_usuario`, `nombre_tipo`, `estado`, `Administradores`, `Categorias`, `Productos`, `Comercios`, `Materias`, `Proveedores`, `Marcas`, `TiposUsuarios`, `Permisos`, `Clientes`, `Estadisticas`, `Reportes`) VALUES
(1, 'Administrador', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Maestro', 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(3, 'Secretario', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Superior', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `ID_valoracion` int(11) NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`ID_valoracion`, `FK_ID_cliente`, `FK_ID_producto`, `valoracion`, `comentario`, `fecha`) VALUES
(1, 1, 6, 3, 'buenos dias gracias por este producto', '2018-06-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ID_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ID_venta`, `fecha`, `FK_ID_cliente`, `estado`) VALUES
(1, '2018-05-14', 1, 1),
(2, '2017-06-18', 2, 1),
(3, '2018-05-18', 2, 1),
(4, '2018-05-18', 2, 1),
(5, '2018-05-18', 2, 1),
(6, '2018-07-15', 2, 1),
(7, '2018-08-15', 2, 1),
(8, '2018-09-15', 2, 1),
(9, '2018-07-16', 2, 1),
(10, '2018-07-16', 2, 1),
(11, '2018-07-16', 2, 1),
(12, '2018-07-16', 2, 1),
(13, '2018-07-16', 2, 1),
(14, '2018-07-16', 2, 1),
(15, '2018-07-16', 2, 1),
(16, '2018-07-16', 2, 1),
(17, '2018-07-16', 2, 1),
(18, '2018-07-16', 2, 1),
(19, '2018-07-16', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `imagen_url` (`imagen_url`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`),
  ADD KEY `FK_ID_tipousuario` (`FK_ID_tipousuario`);

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`ID_anuncio`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`ID_bitacora`),
  ADD KEY `FK_ID_usuario` (`FK_ID_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`),
  ADD UNIQUE KEY `imagen_url` (`imagen_url`),
  ADD UNIQUE KEY `nombre_categoria` (`nombre_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD KEY `FK_ID_membresia` (`FK_ID_membresia`),
  ADD KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`);

--
-- Indices de la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`ID_comercio`),
  ADD KEY `FK_ID_estado_comercio` (`FK_ID_estado_comercio`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`ID_cupon`),
  ADD KEY `FK_ID_categoria` (`FK_ID_categoria`),
  ADD KEY `FK_ID_comercio` (`FK_ID_comercio`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`ID_detalle`),
  ADD KEY `FK_ID_carrito` (`FK_ID_venta`),
  ADD KEY `FK_ID_producto` (`FK_ID_producto`),
  ADD KEY `FK_ID_cliente` (`FK_ID_cliente`);

--
-- Indices de la tabla `estado_comercio`
--
ALTER TABLE `estado_comercio`
  ADD PRIMARY KEY (`ID_estadoC`);

--
-- Indices de la tabla `imagenes_cupones`
--
ALTER TABLE `imagenes_cupones`
  ADD PRIMARY KEY (`ID_imgcupon`),
  ADD KEY `FK_ID_cupon` (`FK_ID_cupon`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_marca`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_materia`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`ID_membresia`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `FK_ID_Categoria` (`FK_ID_Categoria`),
  ADD KEY `FK_ID_marca` (`FK_ID_marca`),
  ADD KEY `FK_ID_proveedor` (`FK_ID_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_proveedor`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`ID_tipo_doc`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_tipo_usuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`ID_valoracion`),
  ADD KEY `FK_ID_cliente` (`FK_ID_cliente`),
  ADD KEY `FK_ID_producto` (`FK_ID_producto`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_venta`),
  ADD KEY `FK_ID_cliente` (`FK_ID_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `ID_anuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `ID_bitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comercio`
--
ALTER TABLE `comercio`
  MODIFY `ID_comercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `ID_cupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `ID_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `estado_comercio`
--
ALTER TABLE `estado_comercio`
  MODIFY `ID_estadoC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes_cupones`
--
ALTER TABLE `imagenes_cupones`
  MODIFY `ID_imgcupon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `ID_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `ID_membresia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `ID_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ID_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `ID_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ID_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`FK_ID_tipousuario`) REFERENCES `tipo_usuario` (`ID_tipo_usuario`),
  ADD CONSTRAINT `administrador_ibfk_2` FOREIGN KEY (`FK_ID_tipo_doc`) REFERENCES `tipo_doc` (`ID_tipo_doc`);

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`FK_ID_admin`) REFERENCES `administrador` (`ID_admin`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`FK_ID_membresia`) REFERENCES `membresia` (`ID_membresia`),
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`FK_ID_tipo_doc`) REFERENCES `tipo_doc` (`ID_tipo_doc`);

--
-- Filtros para la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD CONSTRAINT `comercio_ibfk_1` FOREIGN KEY (`FK_ID_estado_comercio`) REFERENCES `estado_comercio` (`ID_estadoC`);

--
-- Filtros para la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD CONSTRAINT `cupones_ibfk_1` FOREIGN KEY (`FK_ID_categoria`) REFERENCES `categoria` (`ID_categoria`),
  ADD CONSTRAINT `cupones_ibfk_2` FOREIGN KEY (`FK_ID_comercio`) REFERENCES `comercio` (`ID_comercio`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`),
  ADD CONSTRAINT `detalle_factura_ibfk_3` FOREIGN KEY (`FK_ID_venta`) REFERENCES `venta` (`ID_venta`);

--
-- Filtros para la tabla `imagenes_cupones`
--
ALTER TABLE `imagenes_cupones`
  ADD CONSTRAINT `imagenes_cupones_ibfk_1` FOREIGN KEY (`FK_ID_cupon`) REFERENCES `cupones` (`ID_cupon`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`FK_ID_Categoria`) REFERENCES `categoria` (`ID_categoria`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`FK_ID_marca`) REFERENCES `marca` (`ID_marca`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`FK_ID_proveedor`) REFERENCES `proveedor` (`ID_proveedor`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
