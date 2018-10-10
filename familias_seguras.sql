-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2018 a las 15:37:51
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
-- Base de datos: `familias_seguras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_cliente` int(11) NOT NULL,
  `nombre_completo` text NOT NULL,
  `FK_ID_tipo_cliente` int(11) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_incendios`
--

CREATE TABLE `cotizaciones_incendios` (
  `ID_cotizacion_IN` int(11) NOT NULL,
  `tipo_inmueble` int(11) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `tipo_asegurado` int(11) NOT NULL,
  `valor_construccion` int(4) NOT NULL,
  `valor_contenido` int(4) NOT NULL,
  `FK_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_medico`
--

CREATE TABLE `cotizaciones_medico` (
  `ID_cotizacion_MH` int(11) NOT NULL,
  `nombre_asegurado_ppal` varchar(200) NOT NULL,
  `fecha_nacimineto` date NOT NULL,
  `nombre_conyugue` varchar(200) NOT NULL,
  `fecha_nacimiento_conyuge` date NOT NULL,
  `cantidad_hijo` int(11) NOT NULL,
  `cobertura` int(11) NOT NULL,
  `FK_id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_vida`
--

CREATE TABLE `cotizaciones_vida` (
  `ID_cotizacion_VI` int(11) NOT NULL,
  `nombre_asegurado_ppal` varchar(200) NOT NULL,
  `fecha_nacimineto` date NOT NULL,
  `fumador` int(11) NOT NULL,
  `suma_asegurada` int(11) NOT NULL,
  `cesion_bancaria` int(11) NOT NULL,
  `FK_id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `ID_tipo_cliente` int(11) NOT NULL,
  `Tipo_cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`ID_tipo_cliente`, `Tipo_cliente`) VALUES
(1, 'Prospecto'),
(2, 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_cliente`),
  ADD KEY `FK_ID_tipo_cliente` (`FK_ID_tipo_cliente`);

--
-- Indices de la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  ADD PRIMARY KEY (`ID_cotizacion_IN`),
  ADD KEY `FK_id_tipo_cliente` (`FK_id_cliente`);

--
-- Indices de la tabla `cotizaciones_medico`
--
ALTER TABLE `cotizaciones_medico`
  ADD PRIMARY KEY (`ID_cotizacion_MH`),
  ADD KEY `FK_id_cliente` (`FK_id_cliente`);

--
-- Indices de la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  ADD PRIMARY KEY (`ID_cotizacion_VI`),
  ADD KEY `FK_id_cliente` (`FK_id_cliente`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`ID_tipo_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  MODIFY `ID_cotizacion_IN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_medico`
--
ALTER TABLE `cotizaciones_medico`
  MODIFY `ID_cotizacion_MH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  MODIFY `ID_cotizacion_VI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `ID_tipo_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`FK_ID_tipo_cliente`) REFERENCES `tipo_cliente` (`ID_tipo_cliente`);

--
-- Filtros para la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  ADD CONSTRAINT `cotizaciones_incendios_ibfk_1` FOREIGN KEY (`FK_id_tipo_cliente`) REFERENCES `clientes` (`ID_cliente`);

--
-- Filtros para la tabla `cotizaciones_medico`
--
ALTER TABLE `cotizaciones_medico`
  ADD CONSTRAINT `cotizaciones_medico_ibfk_1` FOREIGN KEY (`FK_id_cliente`) REFERENCES `clientes` (`ID_cliente`);

--
-- Filtros para la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  ADD CONSTRAINT `cotizaciones_vida_ibfk_1` FOREIGN KEY (`FK_id_cliente`) REFERENCES `clientes` (`ID_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
