-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2018 a las 05:22:58
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
-- Base de datos: `fs_db`
--
CREATE DATABASE IF NOT EXISTS `fs_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `fs_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anuncio` int(11) NOT NULL,
  `nombre_anuncio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_producto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_anuncio` int(11) NOT NULL DEFAULT '1',
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `municipio` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tel_fijo` int(12) NOT NULL,
  `celular` int(12) NOT NULL,
  `whatsapp` int(12) NOT NULL,
  `email_anuncio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_identidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `pagina_web` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_plan` int(11) NOT NULL,
  `especialidad` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `experiencia` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `nombre_anuncio`, `direccion`, `imagen_producto`, `estado_anuncio`, `id_categoria`, `id_usuario`, `municipio`, `departamento`, `tel_fijo`, `celular`, `whatsapp`, `email_anuncio`, `numero_identidad`, `facebook`, `instagram`, `pagina_web`, `id_plan`, `especialidad`, `experiencia`) VALUES
(1, 'Droga', 'mi casa', '5bf5ff2fe9359.jpg', 1, 7, 1, 'San Salvador', 'San Salvador', 22014477, 78633433, 61486499, 'fernanxavi58@gmail.com', '45678', 'https://www.facebook.com/xavier.Mcanjura', 'https://www.instagram.com/xavi_canjura6/?hl=es-la', 'https://www.youtube.com/watch?v=eHD-D81O1Xc', 3, 'Yo soy la mera ......', 'Mas experiencia que vos tengo'),
(2, 'fghfg', 'hfghfgh', '5c0726dd484a4.jpg', 1, 7, 1, 'hfgh', 'hfgh', 12345678, 12345678, 123456, 'fernanxavi58@hotmail.com', '123746578', 'gfdf', 'gdfg', 'gdfg', 1, 'fssd', 'fsdf'),
(3, 'fghfg', 'hfghfgh', '5c0727c264c5f.jpg', 1, 7, 1, 'hfgh', 'hfgh', 12345678, 12345678, 123456, 'fernanxavi58@hotmail.com', '123746578', 'gfdf', 'gdfg', 'gdfg', 2, 'fssd', 'fsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE `aseguradoras` (
  `PK_id_aseguradora` int(11) NOT NULL,
  `nombre_aseguradora` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aseguradoras`
--

INSERT INTO `aseguradoras` (`PK_id_aseguradora`, `nombre_aseguradora`) VALUES
(1, 'Asesuisa');

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

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`PK_id_banner`, `imagen`, `FK_id_intervalo_fecha`, `cant_intervalo_fecha`, `fecha_inicio`, `hora_inicio`, `estado_banner`, `dia_especifico`) VALUES
(1, '5bf5ff2fe9359.jpg', 1, 1, '2018-12-05', '03:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_solicitud_dias`
--

CREATE TABLE `cantidad_solicitud_dias` (
  `PK_id_cantidad_solicitud_dias` int(11) NOT NULL,
  `lunes` int(11) NOT NULL DEFAULT '0',
  `martes` int(11) NOT NULL DEFAULT '0',
  `miercoles` int(11) NOT NULL DEFAULT '0',
  `jueves` int(11) NOT NULL DEFAULT '0',
  `viernes` int(11) NOT NULL DEFAULT '0',
  `sabado` int(11) NOT NULL DEFAULT '0',
  `domingo` int(11) NOT NULL DEFAULT '0',
  `cant_lunes` int(11) DEFAULT '0',
  `cant_martes` int(11) DEFAULT '0',
  `cant_miercoles` int(11) DEFAULT '0',
  `cant_jueves` int(11) DEFAULT '0',
  `cant_viernes` int(11) DEFAULT '0',
  `cant_sabado` int(11) DEFAULT '0',
  `cant_domingo` int(11) DEFAULT '0',
  `cant_castigo_lunes` int(11) DEFAULT '0',
  `cant_castigo_martes` int(11) DEFAULT '0',
  `cant_castigo_miercoles` int(11) DEFAULT '0',
  `cant_castigo_jueves` int(11) DEFAULT '0',
  `cant_castigo_viernes` int(11) DEFAULT '0',
  `cant_castigo_sabado` int(11) DEFAULT '0',
  `cant_castigo_domingo` int(11) DEFAULT '0',
  `fecha_castigo_lunes` date DEFAULT NULL,
  `fecha_castigo_martes` date DEFAULT NULL,
  `fecha_castigo_miercoles` date DEFAULT NULL,
  `fecha_castigo_jueves` date DEFAULT NULL,
  `fecha_castigo_viernes` date DEFAULT NULL,
  `fecha_castigo_sabado` date DEFAULT NULL,
  `fecha_castigo_domingo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cantidad_solicitud_dias`
--

INSERT INTO `cantidad_solicitud_dias` (`PK_id_cantidad_solicitud_dias`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `cant_lunes`, `cant_martes`, `cant_miercoles`, `cant_jueves`, `cant_viernes`, `cant_sabado`, `cant_domingo`, `cant_castigo_lunes`, `cant_castigo_martes`, `cant_castigo_miercoles`, `cant_castigo_jueves`, `cant_castigo_viernes`, `cant_castigo_sabado`, `cant_castigo_domingo`, `fecha_castigo_lunes`, `fecha_castigo_martes`, `fecha_castigo_miercoles`, `fecha_castigo_jueves`, `fecha_castigo_viernes`, `fecha_castigo_sabado`, `fecha_castigo_domingo`) VALUES
(1, 2, 1, 0, 3, 2, 0, 0, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 2, 2, 3, 1, 0, 0, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 0, 3, 2, 0, 0, NULL, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 1, 2, 3, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_gerencias`
--

CREATE TABLE `cargos_gerencias` (
  `PK_id_cargo_gerencia` int(11) NOT NULL,
  `nombre_cargo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_gerencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargos_gerencias`
--

INSERT INTO `cargos_gerencias` (`PK_id_cargo_gerencia`, `nombre_cargo`, `FK_id_gerencia`) VALUES
(1, 'gerente general', 1),
(2, 'asistente general', 1),
(3, 'gerente comercial', 2),
(4, 'asistente comercial', 2),
(5, 'gerente de cobros', 3),
(6, 'ejecutivo de cobros', 3),
(7, 'gerente de ventas', 5),
(8, 'asistente de ventas', 5),
(9, 'ejecutivo de ventas', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `imagen`) VALUES
(1, 'Asesoría Legal', 'legal'),
(7, 'Asesoría de seguros', 'seguros'),
(8, 'Odontología y Ortodoncistas', 'odontologia'),
(9, 'Educación y Cuido ', 'educacion'),
(10, 'Entretenimiento y Diversión ', 'entretenimiento'),
(11, 'Asesoría inmobiliaria', 'inmobiliaria'),
(12, 'Medicos', 'medico'),
(14, 'Psicologos', 'psicologo'),
(15, 'Academias Especializadas', 'academias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_prospectos`
--

CREATE TABLE `clientes_prospectos` (
  `PK_id_cliente_prospecto` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `FK_id_tipo_seguro` int(11) NOT NULL,
  `hora_contactarle` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_pagos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `forma_pago` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` time DEFAULT NULL,
  `fecha_aceptacion` date DEFAULT NULL,
  `asignacion` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes_prospectos`
--

INSERT INTO `clientes_prospectos` (`PK_id_cliente_prospecto`, `FK_id_usuario`, `FK_id_tipo_seguro`, `hora_contactarle`, `cantidad_pagos`, `forma_pago`, `fecha_cita`, `hora_cita`, `fecha_aceptacion`, `asignacion`) VALUES
(1, 1, 2, '7:00 - 9:00am', '2', NULL, NULL, NULL, NULL, 1),
(10, 19, 2, '7:00 - 9:00am', '6', NULL, NULL, NULL, NULL, 1),
(11, 21, 1, '1:00 - 3:00pm', '3', NULL, NULL, NULL, NULL, 1),
(12, 22, 1, '1:00 - 3:00pm', '3', NULL, NULL, NULL, NULL, 1),
(13, 23, 1, '1:00 - 3:00pm', '3', NULL, NULL, NULL, NULL, 1),
(14, 24, 1, '1:00 - 3:00pm', '3', NULL, NULL, NULL, NULL, 1),
(15, 28, 3, '10:00 - 12:00pm', '2', NULL, NULL, NULL, NULL, 1),
(16, 29, 3, '10:00 - 12:00pm', '2', NULL, NULL, NULL, NULL, 1),
(17, 30, 3, '10:00 - 12:00pm', '2', NULL, NULL, NULL, NULL, 1),
(18, 33, 2, '1:00 - 3:00pm', '2', NULL, NULL, NULL, NULL, 1),
(19, 34, 2, '10:00 - 12:00pm', '2', NULL, NULL, NULL, NULL, 1),
(20, 33, 2, '1:00 - 3:00pm', '2', NULL, NULL, NULL, NULL, 1),
(21, 36, 4, '4:00 - 7:00pm', '4', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisiones_pactadas`
--

CREATE TABLE `comisiones_pactadas` (
  `PK_id_comision_pactada` int(11) NOT NULL,
  `fecha_comision` date NOT NULL,
  `comision` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companias_interes`
--

CREATE TABLE `companias_interes` (
  `PK_id_compania_interes` int(11) NOT NULL,
  `compania_interes` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_seleccion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `companias_interes`
--

INSERT INTO `companias_interes` (`PK_id_compania_interes`, `compania_interes`, `numero_seleccion`, `FK_id_cliente_prospecto`) VALUES
(1, 'ACSA', '1', 11),
(2, 'ACSA', '1', 12),
(3, 'ACSA', '1', 13),
(4, 'ACSA', '1', 14),
(5, 'ACSA', '1', 15),
(6, 'ACSA', '1', 16),
(7, 'ACSA', '1', 17),
(8, 'MAPFRE', '1', 18),
(9, 'ASESUISA', '2', 18),
(10, 'ASESUISA', '1', 19),
(11, 'ACSA', '2', 19),
(12, 'QUALITAS', '1', 21),
(13, 'MAPFRE', '2', 21),
(14, 'ASSA', '3', 21),
(15, 'ASESUISA', '4', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrataciones`
--

CREATE TABLE `contrataciones` (
  `PK_id_contratacion` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `estado_civil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_trabajo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `ingresos` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_incendios`
--

CREATE TABLE `cotizaciones_incendios` (
  `PK_id_cotizacion_incendio` int(11) NOT NULL,
  `tipo_inmueble` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `asegurado_calidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `valor_construccion` double(9,2) NOT NULL,
  `valor_contenido` double(9,2) NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cotizaciones_incendios`
--

INSERT INTO `cotizaciones_incendios` (`PK_id_cotizacion_incendio`, `tipo_inmueble`, `direccion`, `asegurado_calidad`, `valor_construccion`, `valor_contenido`, `FK_id_cliente_prospecto`) VALUES
(1, 'Casa de Habitación', 'dasd', 'Propietario', 1000.00, 1000.00, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_medico_hosp`
--

CREATE TABLE `cotizaciones_medico_hosp` (
  `PK_id_cotizacion_medico` int(11) NOT NULL,
  `nombre_conyugue` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento_conyugue` date NOT NULL,
  `cantidad_hijo` int(3) NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cotizaciones_medico_hosp`
--

INSERT INTO `cotizaciones_medico_hosp` (`PK_id_cotizacion_medico`, `nombre_conyugue`, `fecha_nacimiento_conyugue`, `cantidad_hijo`, `FK_id_cliente_prospecto`) VALUES
(1, 'dasd', '2000-11-06', 0, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_vehiculos`
--

CREATE TABLE `cotizaciones_vehiculos` (
  `PK_id_cotizacion_vehiculo` int(11) NOT NULL,
  `FK_id_modelo_vehiculo` int(11) NOT NULL,
  `anio` int(4) NOT NULL,
  `FK_id_origen_vehiculo` int(11) NOT NULL,
  `valor` double(9,2) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cotizaciones_vehiculos`
--

INSERT INTO `cotizaciones_vehiculos` (`PK_id_cotizacion_vehiculo`, `FK_id_modelo_vehiculo`, `anio`, `FK_id_origen_vehiculo`, `valor`, `placa`, `FK_id_cliente_prospecto`) VALUES
(1, 46, 2014, 1, 6000.00, '123456', 21),
(2, 45, 2015, 1, 6500.00, '123457', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_vida`
--

CREATE TABLE `cotizaciones_vida` (
  `PK_id_cotizacion_vida` int(11) NOT NULL,
  `fumador` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `suma_asegurada` double(9,2) NOT NULL,
  `cesion_bancaria` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cotizaciones_vida`
--

INSERT INTO `cotizaciones_vida` (`PK_id_cotizacion_vida`, `fumador`, `suma_asegurada`, `cesion_bancaria`, `FK_id_cliente_prospecto`) VALUES
(1, 'Si', 1000.00, 'No', 10),
(2, 'Si', 1000.00, 'Si', 18),
(3, 'Si', 1000.00, 'Si', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadro_comparativo`
--

CREATE TABLE `cuadro_comparativo` (
  `PK_id_cuadro_comparativo` int(11) NOT NULL,
  `FK_id_aseguradora` int(11) NOT NULL,
  `plan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `oferta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL,
  `valor_recuperacion_50` double(9,2) DEFAULT NULL,
  `valor_recuperacion_60` double(9,2) DEFAULT NULL,
  `valor_recuperacion_70` double(9,2) DEFAULT NULL
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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `PK_id_empleado` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `FK_id_cargo_gerencia` int(11) NOT NULL,
  `activo_reparticion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`PK_id_empleado`, `FK_id_usuario`, `FK_id_cargo_gerencia`, `activo_reparticion`) VALUES
(1, 31, 9, 0),
(2, 31, 9, 0),
(3, 35, 1, 0),
(4, 42, 9, 0),
(5, 43, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `PK_id_estado` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`PK_id_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Suspendido'),
(3, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_correo`
--

CREATE TABLE `estados_correo` (
  `PK_id_estado_correo` int(11) NOT NULL,
  `estado_correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estados_correo`
--

INSERT INTO `estados_correo` (`PK_id_estado_correo`, `estado_correo`) VALUES
(1, 'pendiente'),
(2, 'enviado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_solicitud`
--

CREATE TABLE `estado_solicitud` (
  `PK_id_estado_solicitud` int(11) NOT NULL,
  `estado_solicitud` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado_solicitud`
--

INSERT INTO `estado_solicitud` (`PK_id_estado_solicitud`, `estado_solicitud`) VALUES
(1, 'pendiente'),
(2, 'procesada'),
(3, 'no se puede procesar'),
(4, 'urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

CREATE TABLE `gerencias` (
  `PK_id_gerencia` int(11) NOT NULL,
  `nombre_gerencia` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gerencias`
--

INSERT INTO `gerencias` (`PK_id_gerencia`, `nombre_gerencia`) VALUES
(1, 'Gerencia General'),
(2, 'Gerencia Comercial'),
(3, 'Gerencia de Cobros'),
(4, 'Gerencia de Reclamos'),
(5, 'Gerencia de Ventas'),
(6, 'Gerencia de Mercadeo'),
(7, 'Gerencia Administrativa'),
(8, 'Gerencia de Recursos Humanos'),
(9, 'Gerencia de Atención al Cliente'),
(10, 'Gerencia de IT'),
(11, 'Gerencia de Comunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_propiedad`
--

CREATE TABLE `imagenes_propiedad` (
  `PK_id_imagen_propiedad` int(11) NOT NULL,
  `nombre_imagen_prop` int(11) NOT NULL,
  `FK_id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_vehiculo`
--

CREATE TABLE `imagenes_vehiculo` (
  `PK_id_imagen_vehiculo` int(11) NOT NULL,
  `nombre_imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FK_id_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_vehiculos`
--

CREATE TABLE `marcas_vehiculos` (
  `PK_id_marca_vehiculo` int(11) NOT NULL,
  `marca_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcas_vehiculos`
--

INSERT INTO `marcas_vehiculos` (`PK_id_marca_vehiculo`, `marca_vehiculo`) VALUES
(1, 'Acura'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Chevrolet'),
(5, 'Dodge'),
(6, 'Ford'),
(7, 'GMC'),
(8, 'Honda'),
(9, 'Hyundai'),
(10, 'Isuzu'),
(11, 'Jaguar'),
(12, 'Jeep'),
(13, 'Kia'),
(14, 'Land Rover'),
(15, 'Lexus'),
(16, 'Mazda'),
(17, 'Mercedez-Benz'),
(18, 'Mercury'),
(19, 'Mitsubishi'),
(20, 'Nissan'),
(21, 'Pontiac'),
(22, 'Scion'),
(23, 'Subaru'),
(24, 'Suzuki'),
(25, 'Toyota'),
(26, 'Volkswagen'),
(27, 'Volvo'),
(28, 'Hummer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_vehiculos`
--

CREATE TABLE `modelos_vehiculos` (
  `PK_id_modelo_vehiculo` int(11) NOT NULL,
  `modelos_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_marca_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modelos_vehiculos`
--

INSERT INTO `modelos_vehiculos` (`PK_id_modelo_vehiculo`, `modelos_vehiculo`, `FK_id_marca_vehiculo`) VALUES
(44, 'Lancer Evolution', 19),
(45, 'Lancer', 19),
(46, 'Civic', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origenes_vehiculo`
--

CREATE TABLE `origenes_vehiculo` (
  `PK_id_origen_vehiculo` int(11) NOT NULL,
  `origen_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `origenes_vehiculo`
--

INSERT INTO `origenes_vehiculo` (`PK_id_origen_vehiculo`, `origen_vehiculo`) VALUES
(1, 'Agencia'),
(2, 'Importado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id_plan` int(11) NOT NULL,
  `nombre_plan` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id_plan`, `nombre_plan`) VALUES
(1, 'Plan Cooper'),
(2, 'Plan Silver'),
(3, 'Plan Gold');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `primas`
--

CREATE TABLE `primas` (
  `PK_id_prima` int(11) NOT NULL,
  `prima` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cuadro_comparativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `PK_id_propiedad` int(11) NOT NULL,
  `FK_id_tipo_propiedad` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `FK_id_transaccion` int(11) NOT NULL,
  `colonia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `terreno` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `construccion` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `niveles` int(11) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `baños` int(11) NOT NULL,
  `cochera` int(11) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `amenidades` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referidos`
--

CREATE TABLE `referidos` (
  `PK_id_referido` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `parentesco` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `PK_id_solicitud` int(11) NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL,
  `fecha_reparticion` date NOT NULL,
  `hora_reparticion` time NOT NULL,
  `FK_id_estado_solicitud` int(11) NOT NULL,
  `FK_id_estado_correo` int(11) NOT NULL,
  `fecha_envio` date DEFAULT NULL,
  `hora_envio` time DEFAULT NULL,
  `observasiones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `interpretacion_recomendacion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FK_id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`PK_id_solicitud`, `FK_id_cliente_prospecto`, `fecha_reparticion`, `hora_reparticion`, `FK_id_estado_solicitud`, `FK_id_estado_correo`, `fecha_envio`, `hora_envio`, `observasiones`, `comentario`, `interpretacion_recomendacion`, `FK_id_empleado`) VALUES
(61, 11, '2018-11-13', '23:50:20', 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(62, 1, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(63, 10, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL, 2),
(64, 18, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL, 2),
(65, 20, '2018-11-15', '15:28:30', 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(66, 20, '2018-11-15', '15:30:49', 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(67, 20, '2018-11-15', '20:42:50', 1, 1, NULL, NULL, NULL, NULL, NULL, 1),
(68, 20, '2018-11-15', '20:46:46', 1, 1, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_atencion_cliente`
--

CREATE TABLE `solicitudes_atencion_cliente` (
  `PK_id_solicitud_atencion_cliente` int(11) NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL,
  `fecha_reparticion` date NOT NULL,
  `hora_reparticion` time NOT NULL,
  `FK_id_estado_correo` int(11) NOT NULL,
  `FK_id_estado_solicitud` int(11) NOT NULL,
  `fecha_envio` date DEFAULT NULL,
  `hora_envio` time DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `interpretacion_recomendacion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudes_atencion_cliente`
--

INSERT INTO `solicitudes_atencion_cliente` (`PK_id_solicitud_atencion_cliente`, `FK_id_cliente_prospecto`, `fecha_reparticion`, `hora_reparticion`, `FK_id_estado_correo`, `FK_id_estado_solicitud`, `fecha_envio`, `hora_envio`, `observaciones`, `comentario`, `interpretacion_recomendacion`) VALUES
(53, 12, '2018-11-13', '23:50:20', 1, 1, NULL, NULL, NULL, NULL, NULL),
(54, 13, '2018-11-13', '23:50:20', 1, 1, NULL, NULL, NULL, NULL, NULL),
(55, 14, '2018-11-13', '23:50:20', 1, 1, NULL, NULL, NULL, NULL, NULL),
(56, 19, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL),
(57, 20, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL),
(58, 15, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL),
(59, 16, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL),
(60, 17, '2018-11-13', '23:50:21', 1, 1, NULL, NULL, NULL, NULL, NULL),
(61, 10, '2018-11-15', '15:08:19', 1, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_procesadas`
--

CREATE TABLE `solicitudes_procesadas` (
  `PK_id_solicitud_procesada` int(11) NOT NULL,
  `FK_id_tipo_seguro` int(11) NOT NULL,
  `FK_id_empleado` int(11) NOT NULL,
  `FK_id_cantidad_solicitud_dia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudes_procesadas`
--

INSERT INTO `solicitudes_procesadas` (`PK_id_solicitud_procesada`, `FK_id_tipo_seguro`, `FK_id_empleado`, `FK_id_cantidad_solicitud_dia`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 3),
(3, 2, 2, 2),
(28, 1, 4, 38),
(29, 2, 4, 39),
(30, 3, 4, 40),
(31, 4, 4, 41),
(32, 1, 5, 42),
(33, 2, 5, 43),
(34, 3, 5, 44),
(35, 4, 5, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_seguro`
--

CREATE TABLE `tipos_seguro` (
  `PK_id_tipo_seguro` int(11) NOT NULL,
  `tipo_seguro` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos_seguro`
--

INSERT INTO `tipos_seguro` (`PK_id_tipo_seguro`, `tipo_seguro`) VALUES
(1, 'Seguro Medico'),
(2, 'Seguro de Vida'),
(3, 'Seguro de Incendios'),
(4, 'Seguro de Vehiculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_team`
--

CREATE TABLE `tipos_team` (
  `PK_id_tipo_team` int(11) NOT NULL,
  `tipo_team` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos_team`
--

INSERT INTO `tipos_team` (`PK_id_tipo_team`, `tipo_team`) VALUES
(1, 'FamiliasSeguras.com'),
(2, 'Minus Risk'),
(3, 'SeguroDeAutomotores.com'),
(4, 'Agente Independiente'),
(5, 'Corredor de Seguros'),
(6, 'Compañia de Seguros'),
(7, 'Prospecto'),
(8, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_propiedad`
--

CREATE TABLE `tipo_propiedad` (
  `PK_id_tipo_propiedad` int(11) NOT NULL,
  `tipo_propiedad` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `PK_id_transaccion` int(11) NOT NULL,
  `transaccion` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `PK_id_usuario` int(11) NOT NULL,
  `fecha_inclusion` date NOT NULL,
  `hora_inclusion` time NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FK_id_tipo_team` int(11) NOT NULL,
  `FK_id_estado` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) DEFAULT NULL,
  `celular` int(8) DEFAULT NULL,
  `whatsapp` int(8) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `dui_frontal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dui_reverso` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit_frontal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit_reverso` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nrc` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `giro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `motivo_finalizacion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`PK_id_usuario`, `fecha_inclusion`, `hora_inclusion`, `nombres`, `apellidos`, `FK_id_tipo_team`, `FK_id_estado`, `fecha_inicio`, `direccion`, `departamento`, `ciudad`, `pais`, `correo`, `telefono`, `celular`, `whatsapp`, `fecha_nacimiento`, `dui_frontal`, `dui_reverso`, `nit_frontal`, `nit_reverso`, `nrc`, `giro`, `usuario`, `clave`, `observaciones`, `fecha_finalizacion`, `motivo_finalizacion`) VALUES
(1, '2018-11-10', '11:34:06', 'Xavier', 'Canjura', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018-11-10', '16:07:04', 'Xavier', 'Canjura', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-11-10', '23:16:13', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2018-11-10', '23:18:28', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-11-10', '23:19:06', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2018-11-10', '23:20:30', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-11-10', '23:21:51', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-11-11', '00:06:16', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2018-11-11', '00:07:14', 'das', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-11-11', '00:09:40', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '2018-11-11', '00:11:20', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XaviCaM', '12345678', NULL, NULL, NULL),
(29, '2018-11-11', '00:13:01', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018-11-11', '00:14:27', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '2018-11-11', '10:00:00', 'Fernando', 'Maldonado', 1, 1, '2018-11-11', NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XaviCaM', '$2y$10$uqFrowMVNj.bOGFhi6G/Q.oWSJCNNOqrBGbvJQtHBZ0BPgslcYQwm', NULL, NULL, NULL),
(32, '2018-11-11', '22:51:34', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 1234578, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2018-11-11', '22:55:46', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '2018-11-11', '22:57:36', 'dasd', 'dasd', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 1234578, NULL, NULL, '2000-11-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '2018-11-13', '11:00:00', 'Xavier', 'Canjura', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi59@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XaviCaM', '$2y$10$k29zpFMznTm1pZHjbeSpeulm4j1yY...o/QTDaffDp5MfWn/u0y8i', NULL, NULL, NULL),
(36, '2018-11-15', '13:16:41', 'Don ', 'Vergas', 7, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '2018-11-16', '13:24:12', 'Larry', 'Kapiga', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi6@gmail.com', 78456132, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'XaviCaM', '12345678', NULL, NULL, NULL),
(38, '2018-11-16', '13:25:36', 'Larry', 'fsdf', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi8@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'FerMal', '12345679', NULL, NULL, NULL),
(39, '2018-11-16', '13:26:24', 'dasd', 'dasd', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', '4567896544', NULL, NULL, NULL),
(40, '2018-11-16', '13:27:51', 'dasd', 'dasd', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', '4567896544', NULL, NULL, NULL),
(41, '2018-11-16', '13:28:22', 'dasd', 'dasd', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', '4567896544', NULL, NULL, NULL),
(42, '2018-11-16', '13:28:56', 'dasd', 'dasd', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'dasd', '4567896544', NULL, NULL, NULL),
(43, '2018-11-16', '14:34:15', 'Juan Carlos', 'Najarro', 1, 1, NULL, NULL, NULL, NULL, NULL, 'fernanxavi58@gmail.com', 12345678, NULL, NULL, '2000-11-06', NULL, NULL, NULL, NULL, NULL, NULL, 'JuanDominguez', '123456789', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_anuncios`
--

CREATE TABLE `usuarios_anuncios` (
  `id_usuario` int(11) NOT NULL,
  `nombres_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_anuncios`
--

INSERT INTO `usuarios_anuncios` (`id_usuario`, `nombres_usuario`, `apellidos_usuario`, `correo_usuario`, `alias_usuario`, `clave_usuario`) VALUES
(1, 'Fernando Xavier', 'Maldonado Canjura', 'fernanxavi58@gmail.com', 'XaviCaM', '$2y$10$p3rLJ1UwXiAydrwHGJeyTu9Xt.NXqhwoq.T1bgEcoHQfOaM4gb0NG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `PK_id_vehiculo` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `FK_id_modelo` int(11) NOT NULL,
  `anio` int(4) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kilometraje` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `transmision` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `motor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `vidrios_electricos` int(11) NOT NULL,
  `sistema_eco` int(11) NOT NULL,
  `mandos_timon` int(11) NOT NULL,
  `rines_especiales` int(11) NOT NULL,
  `camara_trasera` int(11) NOT NULL,
  `sensores_parqueo` int(11) NOT NULL,
  `bluetooth` int(11) NOT NULL,
  `combustible` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sunroof` int(11) NOT NULL,
  `luces_xenon` int(11) NOT NULL,
  `cruise_control` int(11) NOT NULL,
  `mando_distancia` int(11) NOT NULL,
  `gps` int(11) NOT NULL,
  `tapiceria_cuero` int(11) NOT NULL,
  `dvd_trasero` int(11) NOT NULL,
  `valor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anuncio`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  ADD PRIMARY KEY (`PK_id_aseguradora`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`PK_id_banner`),
  ADD KEY `FK_id_intervalo_fecha` (`FK_id_intervalo_fecha`);

--
-- Indices de la tabla `cantidad_solicitud_dias`
--
ALTER TABLE `cantidad_solicitud_dias`
  ADD PRIMARY KEY (`PK_id_cantidad_solicitud_dias`);

--
-- Indices de la tabla `cargos_gerencias`
--
ALTER TABLE `cargos_gerencias`
  ADD PRIMARY KEY (`PK_id_cargo_gerencia`),
  ADD KEY `FK_id_gerencia` (`FK_id_gerencia`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nombre` (`nombre_categoria`);

--
-- Indices de la tabla `clientes_prospectos`
--
ALTER TABLE `clientes_prospectos`
  ADD PRIMARY KEY (`PK_id_cliente_prospecto`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`),
  ADD KEY `FK_id_tipo_seguro` (`FK_id_tipo_seguro`);

--
-- Indices de la tabla `comisiones_pactadas`
--
ALTER TABLE `comisiones_pactadas`
  ADD PRIMARY KEY (`PK_id_comision_pactada`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`);

--
-- Indices de la tabla `companias_interes`
--
ALTER TABLE `companias_interes`
  ADD PRIMARY KEY (`PK_id_compania_interes`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  ADD PRIMARY KEY (`PK_id_contratacion`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`);

--
-- Indices de la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  ADD PRIMARY KEY (`PK_id_cotizacion_incendio`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `cotizaciones_medico_hosp`
--
ALTER TABLE `cotizaciones_medico_hosp`
  ADD PRIMARY KEY (`PK_id_cotizacion_medico`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `cotizaciones_vehiculos`
--
ALTER TABLE `cotizaciones_vehiculos`
  ADD PRIMARY KEY (`PK_id_cotizacion_vehiculo`),
  ADD KEY `FK_id_modelo_vehiculo` (`FK_id_modelo_vehiculo`),
  ADD KEY `FK_id_origen_vehiculo` (`FK_id_origen_vehiculo`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  ADD PRIMARY KEY (`PK_id_cotizacion_vida`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `cuadro_comparativo`
--
ALTER TABLE `cuadro_comparativo`
  ADD PRIMARY KEY (`PK_id_cuadro_comparativo`),
  ADD KEY `FK_id_aseguradora` (`FK_id_aseguradora`),
  ADD KEY `FK_id_solicitud` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  ADD PRIMARY KEY (`PK_id_dia_predeterminado`),
  ADD KEY `FK_id_banner` (`FK_id_banner`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`PK_id_empleado`),
  ADD KEY `FK_id_cargo_gerencia` (`FK_id_cargo_gerencia`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`PK_id_estado`);

--
-- Indices de la tabla `estados_correo`
--
ALTER TABLE `estados_correo`
  ADD PRIMARY KEY (`PK_id_estado_correo`);

--
-- Indices de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  ADD PRIMARY KEY (`PK_id_estado_solicitud`);

--
-- Indices de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  ADD PRIMARY KEY (`PK_id_gerencia`);

--
-- Indices de la tabla `imagenes_propiedad`
--
ALTER TABLE `imagenes_propiedad`
  ADD PRIMARY KEY (`PK_id_imagen_propiedad`),
  ADD KEY `FK_id_propiedad` (`FK_id_propiedad`);

--
-- Indices de la tabla `imagenes_vehiculo`
--
ALTER TABLE `imagenes_vehiculo`
  ADD PRIMARY KEY (`PK_id_imagen_vehiculo`),
  ADD KEY `FK_id_vehiculo` (`FK_id_vehiculo`);

--
-- Indices de la tabla `intervalos_fecha`
--
ALTER TABLE `intervalos_fecha`
  ADD PRIMARY KEY (`PK_id_intervalo_fecha`);

--
-- Indices de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  ADD PRIMARY KEY (`PK_id_marca_vehiculo`);

--
-- Indices de la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  ADD PRIMARY KEY (`PK_id_modelo_vehiculo`),
  ADD KEY `FK_id_marca_vehiculo` (`FK_id_marca_vehiculo`);

--
-- Indices de la tabla `origenes_vehiculo`
--
ALTER TABLE `origenes_vehiculo`
  ADD PRIMARY KEY (`PK_id_origen_vehiculo`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `primas`
--
ALTER TABLE `primas`
  ADD PRIMARY KEY (`PK_id_prima`),
  ADD KEY `PK_id_cuadro_comparativo` (`FK_id_cuadro_comparativo`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`PK_id_propiedad`),
  ADD KEY `FK_id_tipo_propiedad` (`FK_id_tipo_propiedad`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`),
  ADD KEY `FK_id_transaccion` (`FK_id_transaccion`);

--
-- Indices de la tabla `referidos`
--
ALTER TABLE `referidos`
  ADD PRIMARY KEY (`PK_id_referido`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`PK_id_solicitud`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`),
  ADD KEY `FK_id_empleado` (`FK_id_empleado`),
  ADD KEY `FK_id_estado_solicitud` (`FK_id_estado_solicitud`),
  ADD KEY `FK_id_estado_correo` (`FK_id_estado_correo`);

--
-- Indices de la tabla `solicitudes_atencion_cliente`
--
ALTER TABLE `solicitudes_atencion_cliente`
  ADD PRIMARY KEY (`PK_id_solicitud_atencion_cliente`),
  ADD KEY `FK_id_estado_solicitud` (`FK_id_estado_solicitud`),
  ADD KEY `FK_id_estado_correo` (`FK_id_estado_correo`),
  ADD KEY `FK_id_cliente_prospecto` (`FK_id_cliente_prospecto`);

--
-- Indices de la tabla `solicitudes_procesadas`
--
ALTER TABLE `solicitudes_procesadas`
  ADD PRIMARY KEY (`PK_id_solicitud_procesada`),
  ADD KEY `FK_id_cantidad_solicitud_dia` (`FK_id_cantidad_solicitud_dia`),
  ADD KEY `FK_id_empleado` (`FK_id_empleado`),
  ADD KEY `FK_id_tipo_seguro` (`FK_id_tipo_seguro`);

--
-- Indices de la tabla `tipos_seguro`
--
ALTER TABLE `tipos_seguro`
  ADD PRIMARY KEY (`PK_id_tipo_seguro`);

--
-- Indices de la tabla `tipos_team`
--
ALTER TABLE `tipos_team`
  ADD PRIMARY KEY (`PK_id_tipo_team`);

--
-- Indices de la tabla `tipo_propiedad`
--
ALTER TABLE `tipo_propiedad`
  ADD PRIMARY KEY (`PK_id_tipo_propiedad`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`PK_id_transaccion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`PK_id_usuario`),
  ADD KEY `FK_id_estado` (`FK_id_estado`),
  ADD KEY `FK_id_tipo_team` (`FK_id_tipo_team`);

--
-- Indices de la tabla `usuarios_anuncios`
--
ALTER TABLE `usuarios_anuncios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `alias` (`alias_usuario`),
  ADD UNIQUE KEY `correo` (`correo_usuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`PK_id_vehiculo`),
  ADD KEY `FK_id_modelo` (`FK_id_modelo`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  MODIFY `PK_id_aseguradora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `PK_id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cantidad_solicitud_dias`
--
ALTER TABLE `cantidad_solicitud_dias`
  MODIFY `PK_id_cantidad_solicitud_dias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `cargos_gerencias`
--
ALTER TABLE `cargos_gerencias`
  MODIFY `PK_id_cargo_gerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `clientes_prospectos`
--
ALTER TABLE `clientes_prospectos`
  MODIFY `PK_id_cliente_prospecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `comisiones_pactadas`
--
ALTER TABLE `comisiones_pactadas`
  MODIFY `PK_id_comision_pactada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `companias_interes`
--
ALTER TABLE `companias_interes`
  MODIFY `PK_id_compania_interes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  MODIFY `PK_id_contratacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  MODIFY `PK_id_cotizacion_incendio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_medico_hosp`
--
ALTER TABLE `cotizaciones_medico_hosp`
  MODIFY `PK_id_cotizacion_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_vehiculos`
--
ALTER TABLE `cotizaciones_vehiculos`
  MODIFY `PK_id_cotizacion_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  MODIFY `PK_id_cotizacion_vida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cuadro_comparativo`
--
ALTER TABLE `cuadro_comparativo`
  MODIFY `PK_id_cuadro_comparativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  MODIFY `PK_id_dia_predeterminado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `PK_id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `PK_id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estados_correo`
--
ALTER TABLE `estados_correo`
  MODIFY `PK_id_estado_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  MODIFY `PK_id_estado_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `PK_id_gerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `imagenes_propiedad`
--
ALTER TABLE `imagenes_propiedad`
  MODIFY `PK_id_imagen_propiedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_vehiculo`
--
ALTER TABLE `imagenes_vehiculo`
  MODIFY `PK_id_imagen_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intervalos_fecha`
--
ALTER TABLE `intervalos_fecha`
  MODIFY `PK_id_intervalo_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  MODIFY `PK_id_marca_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  MODIFY `PK_id_modelo_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `origenes_vehiculo`
--
ALTER TABLE `origenes_vehiculo`
  MODIFY `PK_id_origen_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `primas`
--
ALTER TABLE `primas`
  MODIFY `PK_id_prima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `PK_id_propiedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referidos`
--
ALTER TABLE `referidos`
  MODIFY `PK_id_referido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `PK_id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `solicitudes_atencion_cliente`
--
ALTER TABLE `solicitudes_atencion_cliente`
  MODIFY `PK_id_solicitud_atencion_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `solicitudes_procesadas`
--
ALTER TABLE `solicitudes_procesadas`
  MODIFY `PK_id_solicitud_procesada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tipos_seguro`
--
ALTER TABLE `tipos_seguro`
  MODIFY `PK_id_tipo_seguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_team`
--
ALTER TABLE `tipos_team`
  MODIFY `PK_id_tipo_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_propiedad`
--
ALTER TABLE `tipo_propiedad`
  MODIFY `PK_id_tipo_propiedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `PK_id_transaccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `PK_id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `PK_id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios_anuncios` (`id_usuario`),
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `anuncio_ibfk_3` FOREIGN KEY (`id_plan`) REFERENCES `planes` (`id_plan`);

--
-- Filtros para la tabla `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`FK_id_intervalo_fecha`) REFERENCES `intervalos_fecha` (`PK_id_intervalo_fecha`);

--
-- Filtros para la tabla `cargos_gerencias`
--
ALTER TABLE `cargos_gerencias`
  ADD CONSTRAINT `cargos_gerencias_ibfk_1` FOREIGN KEY (`FK_id_gerencia`) REFERENCES `gerencias` (`PK_id_gerencia`);

--
-- Filtros para la tabla `clientes_prospectos`
--
ALTER TABLE `clientes_prospectos`
  ADD CONSTRAINT `clientes_prospectos_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`PK_id_usuario`),
  ADD CONSTRAINT `clientes_prospectos_ibfk_2` FOREIGN KEY (`FK_id_tipo_seguro`) REFERENCES `tipos_seguro` (`PK_id_tipo_seguro`);

--
-- Filtros para la tabla `comisiones_pactadas`
--
ALTER TABLE `comisiones_pactadas`
  ADD CONSTRAINT `comisiones_pactadas_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`PK_id_usuario`);

--
-- Filtros para la tabla `companias_interes`
--
ALTER TABLE `companias_interes`
  ADD CONSTRAINT `companias_interes_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  ADD CONSTRAINT `contrataciones_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`PK_id_usuario`);

--
-- Filtros para la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  ADD CONSTRAINT `cotizaciones_incendios_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `cotizaciones_medico_hosp`
--
ALTER TABLE `cotizaciones_medico_hosp`
  ADD CONSTRAINT `cotizaciones_medico_hosp_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `cotizaciones_vehiculos`
--
ALTER TABLE `cotizaciones_vehiculos`
  ADD CONSTRAINT `cotizaciones_vehiculos_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`),
  ADD CONSTRAINT `cotizaciones_vehiculos_ibfk_2` FOREIGN KEY (`FK_id_origen_vehiculo`) REFERENCES `origenes_vehiculo` (`PK_id_origen_vehiculo`),
  ADD CONSTRAINT `cotizaciones_vehiculos_ibfk_3` FOREIGN KEY (`FK_id_modelo_vehiculo`) REFERENCES `modelos_vehiculos` (`PK_id_modelo_vehiculo`);

--
-- Filtros para la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  ADD CONSTRAINT `cotizaciones_vida_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `cuadro_comparativo`
--
ALTER TABLE `cuadro_comparativo`
  ADD CONSTRAINT `cuadro_comparativo_ibfk_1` FOREIGN KEY (`FK_id_aseguradora`) REFERENCES `aseguradoras` (`PK_id_aseguradora`),
  ADD CONSTRAINT `cuadro_comparativo_ibfk_2` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `dias_predeterminados`
--
ALTER TABLE `dias_predeterminados`
  ADD CONSTRAINT `dias_predeterminados_ibfk_1` FOREIGN KEY (`FK_id_banner`) REFERENCES `banners` (`PK_id_banner`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`PK_id_usuario`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`FK_id_cargo_gerencia`) REFERENCES `cargos_gerencias` (`PK_id_cargo_gerencia`);

--
-- Filtros para la tabla `imagenes_propiedad`
--
ALTER TABLE `imagenes_propiedad`
  ADD CONSTRAINT `imagenes_propiedad_ibfk_1` FOREIGN KEY (`FK_id_propiedad`) REFERENCES `propiedades` (`PK_id_propiedad`);

--
-- Filtros para la tabla `imagenes_vehiculo`
--
ALTER TABLE `imagenes_vehiculo`
  ADD CONSTRAINT `imagenes_vehiculo_ibfk_1` FOREIGN KEY (`FK_id_vehiculo`) REFERENCES `vehiculos` (`PK_id_vehiculo`);

--
-- Filtros para la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  ADD CONSTRAINT `modelos_vehiculos_ibfk_1` FOREIGN KEY (`FK_id_marca_vehiculo`) REFERENCES `marcas_vehiculos` (`PK_id_marca_vehiculo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `primas`
--
ALTER TABLE `primas`
  ADD CONSTRAINT `primas_ibfk_1` FOREIGN KEY (`FK_id_cuadro_comparativo`) REFERENCES `cuadro_comparativo` (`PK_id_cuadro_comparativo`);

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios_anuncios` (`id_usuario`),
  ADD CONSTRAINT `propiedades_ibfk_2` FOREIGN KEY (`FK_id_tipo_propiedad`) REFERENCES `tipo_propiedad` (`PK_id_tipo_propiedad`),
  ADD CONSTRAINT `propiedades_ibfk_3` FOREIGN KEY (`FK_id_transaccion`) REFERENCES `transaccion` (`PK_id_transaccion`);

--
-- Filtros para la tabla `referidos`
--
ALTER TABLE `referidos`
  ADD CONSTRAINT `referidos_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`),
  ADD CONSTRAINT `solicitudes_ibfk_2` FOREIGN KEY (`FK_id_empleado`) REFERENCES `empleados` (`PK_id_empleado`),
  ADD CONSTRAINT `solicitudes_ibfk_3` FOREIGN KEY (`FK_id_estado_correo`) REFERENCES `estados_correo` (`PK_id_estado_correo`),
  ADD CONSTRAINT `solicitudes_ibfk_4` FOREIGN KEY (`FK_id_estado_solicitud`) REFERENCES `estado_solicitud` (`PK_id_estado_solicitud`);

--
-- Filtros para la tabla `solicitudes_atencion_cliente`
--
ALTER TABLE `solicitudes_atencion_cliente`
  ADD CONSTRAINT `solicitudes_atencion_cliente_ibfk_1` FOREIGN KEY (`FK_id_cliente_prospecto`) REFERENCES `clientes_prospectos` (`PK_id_cliente_prospecto`),
  ADD CONSTRAINT `solicitudes_atencion_cliente_ibfk_2` FOREIGN KEY (`FK_id_estado_solicitud`) REFERENCES `estado_solicitud` (`PK_id_estado_solicitud`),
  ADD CONSTRAINT `solicitudes_atencion_cliente_ibfk_3` FOREIGN KEY (`FK_id_estado_correo`) REFERENCES `estados_correo` (`PK_id_estado_correo`);

--
-- Filtros para la tabla `solicitudes_procesadas`
--
ALTER TABLE `solicitudes_procesadas`
  ADD CONSTRAINT `solicitudes_procesadas_ibfk_1` FOREIGN KEY (`FK_id_empleado`) REFERENCES `empleados` (`PK_id_empleado`),
  ADD CONSTRAINT `solicitudes_procesadas_ibfk_2` FOREIGN KEY (`FK_id_cantidad_solicitud_dia`) REFERENCES `cantidad_solicitud_dias` (`PK_id_cantidad_solicitud_dias`),
  ADD CONSTRAINT `solicitudes_procesadas_ibfk_3` FOREIGN KEY (`FK_id_tipo_seguro`) REFERENCES `tipos_seguro` (`PK_id_tipo_seguro`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`FK_id_estado`) REFERENCES `estados` (`PK_id_estado`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`FK_id_tipo_team`) REFERENCES `tipos_team` (`PK_id_tipo_team`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`FK_id_modelo`) REFERENCES `modelos_vehiculos` (`PK_id_modelo_vehiculo`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios_anuncios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
