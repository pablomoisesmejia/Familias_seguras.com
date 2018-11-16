-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2018 a las 21:23:13
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
-- Base de datos: `mister_robot`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cambiar_estado` ()  NO SQL
UPDATE producto SET estado=0 WHERE precio<=0.0$$

CREATE DEFINER=`sabeloeasy`@`localhost` PROCEDURE `mostar_clientes_con_menbresia` ()  NO SQL
SELECT *
From cliente WHERE FK_ID_membresia != ""$$

CREATE DEFINER=`sabeloeasy`@`localhost` PROCEDURE `new_Membresia` ()  NO SQL
INSERT INTO membresia (ID_membresia,fecha_inicio,fecha_vencimiento) VALUES (NULL,CURRENT_DATE,(select DATE_ADD(CURRENT_DATE,INTERVAL 1 YEAR)))$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ver_activos` (IN `estadop` INT(1))  NO SQL
SELECT * FROM administrador WHERE estado = (estadop)$$

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
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ID_tipo_doc` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_admin`, `FK_ID_tipousuario`, `nombre`, `apellido`, `fecha_nac`, `correo`, `contrasena`, `imagen_url`, `direccion`, `documento`, `username`, `FK_ID_tipo_doc`, `estado`) VALUES
(4, 0, 'Pablo Moises', 'Mejia Salazar', '2018-06-04', 'pablomoisesmejia@gmail.com', '$2y$10$gea86T8NAwbzbW0JxxxwOOtXZGnGaFNK7p7aKRdc86XNO/p6clq1C', 'pablo.jpg', 'Boulevard Constitucion, pasaje salazar, casa #3, frente a colonia miralvalle', 20160909, 'pablomoisesmejia', 1, 1),
(5, 0, 'Carlos Eduardo', 'Nuñez Urrutia', '2018-07-08', 'carlos@hotmail.com', '$2y$10$yOWgkbWcIKJW.Uw0cxeALeSLmBmOvHpC.3vFWDBC//ERKkD/TjWoe', '5b5f829869ab8.jpg', 'Planes de Rendero, calle principal', 12548798, 'carlos', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_categoria`, `nombre_categoria`) VALUES
(1, 'Hardware'),
(2, 'Mouse'),
(3, 'Antivirus'),
(4, 'Office'),
(5, 'Sistemas Operativos');

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
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `FK_ID_membresia`, `FK_ID_tipo_doc`, `nombre`, `apellido`, `fecha_nacimiento`, `direccion`, `documento`, `correo`, `username`, `contrasena`, `imagen_url`, `estado`) VALUES
(1, 1, 1, 'Roberto', 'Moran', '1999-05-03', 'su casita', 1245231254, 'willy@gmail.com', 'yg', 'buenas tardes ', 'wiliito.jpg', 0),
(2, NULL, 1, 'Andres', 'Gomez', '1999-05-03', 'su casita', 1245231254, 'anres@gmail.com', 'we', 'buenos dias ', 'wiliito.jpg', 0),
(4, NULL, 2, 'Pablo', 'Mejía', '2018-07-03', 'Calle principal', 12345678, 'pablo@gmail.com', 'pablomoisesmejia', '$2y$10$LUzxyoPzVjDoyO5qtpd9mOsToPf/wnHio3sQ5G41Ap8K02WvSRAPm', '5b43c20e8d209.jpg', 1),
(5, NULL, 2, 'Daniel', 'Carranza', '2018-07-02', 'Calle secundaria', 20160909, 'dani@hot.com', 'stanley', '$2y$10$PPbqPw2aZaq89hCFiJw4wePZwrF1P7qn/8BTcbUZbk8SYf5WgM9cm', '5b43d668e96a9.jpg', 1),
(6, NULL, 2, 'Kaled', 'Villagran', '2018-07-01', 'Calle principal', 20160909, 'bla@g.com', 'dq', '$2y$10$oVLSNwayXOz9rPKRBIB8k.TmAibv3XGFBxvq4g2.RHVB4Jt1sgI/q', '5b43d842a4d61.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `ID_cupon` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_marca`, `nombre_marca`, `correo`, `telefono`) VALUES
(1, 'HP', 'marketing@hp.com.sv', 22710218),
(2, 'Dell', 'dell.sv@dell.com', 22417100),
(3, 'Nokia', 'Nokia@nokia.com', 21457865);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL,
  `FK_ID_marca` int(11) NOT NULL,
  `FK_ID_Categoria` int(11) NOT NULL,
  `nombre_producto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_producto`, `FK_ID_marca`, `FK_ID_Categoria`, `nombre_producto`, `precio`, `imagen_url`, `estado`) VALUES
(9, 1, 3, 'Dildo', '78.50', '5b69a69d5669f.jpg', 1);

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
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `ID_valoracion` int(11) NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(2, '2018-05-18', 2, 1),
(3, '2018-05-18', 2, 1),
(4, '2018-05-18', 2, 1),
(5, '2018-05-18', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_admin`),
  ADD KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`),
  ADD KEY `FK_ID_tipousuario` (`FK_ID_tipousuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`),
  ADD KEY `FK_ID_membresia` (`FK_ID_membresia`),
  ADD KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`ID_cupon`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`ID_detalle`),
  ADD KEY `FK_ID_carrito` (`FK_ID_venta`),
  ADD KEY `FK_ID_producto` (`FK_ID_producto`),
  ADD KEY `FK_ID_cliente` (`FK_ID_cliente`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `FK_ID_Categoria` (`FK_ID_Categoria`),
  ADD KEY `FK_ID_marca` (`FK_ID_marca`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`ID_tipo_doc`);

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
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cupones`
--
ALTER TABLE `cupones`
  MODIFY `ID_cupon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `ID_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `ID_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `ID_valoracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ID_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`FK_ID_tipo_doc`) REFERENCES `tipo_doc` (`ID_tipo_doc`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`),
  ADD CONSTRAINT `detalle_factura_ibfk_3` FOREIGN KEY (`FK_ID_venta`) REFERENCES `venta` (`ID_venta`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`FK_ID_Categoria`) REFERENCES `categoria` (`ID_categoria`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`FK_ID_marca`) REFERENCES `marca` (`ID_marca`);

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
