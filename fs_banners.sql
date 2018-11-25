-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2018 a las 20:02:21
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
-- Base de datos: `fs_banners`
--
CREATE DATABASE IF NOT EXISTS `fs_banners` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `fs_banners`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `PK_id_banner` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_intervalo_fecha` int(11) NOT NULL,
  `cant_intervalo_fecha` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `estado_banner` int(11) NOT NULL,
  `dia_especifico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_predeterminados`
--

CREATE TABLE `dias_predeterminados` (
  `PK_id_dia_predeterminado` int(11) NOT NULL,
  `lunes` int(11) NOT NULL,
  `martes` int(11) NOT NULL,
  `miercoles` int(11) NOT NULL,
  `jueves` int(11) NOT NULL,
  `viernes` int(11) NOT NULL,
  `sabado` int(11) NOT NULL,
  `domingo` int(11) NOT NULL,
  `FK_id_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervalos_fecha`
--

CREATE TABLE `intervalos_fecha` (
  `PK_id_intervalo_fecha` int(11) NOT NULL,
  `intervalos_fecha` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `intervalos_fecha`
--

INSERT INTO `intervalos_fecha` (`PK_id_intervalo_fecha`, `intervalos_fecha`) VALUES
(1, 'Dia/s'),
(2, 'Semana/s'),
(3, 'Mes/es'),
(4, 'Año/s');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`PK_id_banner`),
  ADD KEY `FK_id_intervalo_fecha` (`FK_id_intervalo_fecha`);

--
-- Indices de la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  ADD PRIMARY KEY (`PK_id_dia_predeterminado`),
  ADD KEY `FK_id_banner` (`FK_id_banner`);

--
-- Indices de la tabla `intervalos_fecha`
--
ALTER TABLE `intervalos_fecha`
  ADD PRIMARY KEY (`PK_id_intervalo_fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `PK_id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  MODIFY `PK_id_dia_predeterminado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intervalos_fecha`
--
ALTER TABLE `intervalos_fecha`
  MODIFY `PK_id_intervalo_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`FK_id_intervalo_fecha`) REFERENCES `intervalos_fecha` (`PK_id_intervalo_fecha`);

--
-- Filtros para la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  ADD CONSTRAINT `dias_predeterminados_ibfk_1` FOREIGN KEY (`FK_id_banner`) REFERENCES `banners` (`PK_id_banner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
