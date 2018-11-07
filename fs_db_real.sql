-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 00:51:56
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
-- Estructura de tabla para la tabla `aseguradoras`
--

CREATE TABLE `aseguradoras` (
  `PK_id_aseguradora` int(11) NOT NULL,
  `nombre_aseguradora` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_solicitud_dias`
--

CREATE TABLE `cantidad_solicitud_dias` (
  `PK_id_cantidad_solicitud_dias` int(11) NOT NULL,
  `lunes` int(11) NOT NULL,
  `martes` int(11) NOT NULL,
  `miercoles` int(11) NOT NULL,
  `jueves` int(11) NOT NULL,
  `viernes` int(11) NOT NULL,
  `sabado` int(11) NOT NULL,
  `domingo` int(11) NOT NULL,
  `cant_lunes` int(11) DEFAULT NULL,
  `cant_martes` int(11) DEFAULT NULL,
  `cant_miercoles` int(11) DEFAULT NULL,
  `cant_jueves` int(11) DEFAULT NULL,
  `cant_viernes` int(11) DEFAULT NULL,
  `cant_sabado` int(11) DEFAULT NULL,
  `cant_domingo` int(11) DEFAULT NULL,
  `cant_castigo_lunes` int(11) DEFAULT NULL,
  `cant_castigo_martes` int(11) DEFAULT NULL,
  `cant_castigo_miercoles` int(11) DEFAULT NULL,
  `cant_castigo_jueves` int(11) DEFAULT NULL,
  `cant_castigo_viernes` int(11) DEFAULT NULL,
  `cant_castigo_sabado` int(11) DEFAULT NULL,
  `cant_castigo_domingo` int(11) DEFAULT NULL,
  `fecha_castigo_lunes` date DEFAULT NULL,
  `fecha_castigo_martes` date DEFAULT NULL,
  `fecha_castigo_miercoles` date DEFAULT NULL,
  `fecha_castigo_jueves` date DEFAULT NULL,
  `fecha_castigo_viernes` date DEFAULT NULL,
  `fecha_castigo_sabado` date DEFAULT NULL,
  `fecha_castigo_domingo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_gerencias`
--

CREATE TABLE `cargos_gerencias` (
  `PK_id_cargo_gerencia` int(11) NOT NULL,
  `nombre_cargo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_gerencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `fecha_aceptacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_medico_hosp`
--

CREATE TABLE `cotizaciones_medico_hosp` (
  `PK_id_cotizacion_medico` int(11) NOT NULL,
  `nombre_asegurado_ppal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombre_conyugue` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento_conyugue` date NOT NULL,
  `cantidad_hijo` int(3) NOT NULL,
  `cobertura` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones_vida`
--

CREATE TABLE `cotizaciones_vida` (
  `PK_id_cotizacion_vida` int(11) NOT NULL,
  `nombre_asegurado_ppal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fumador` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `suma_asegurado` double(9,2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cesion_bancaia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `PK_id_empleado` int(11) NOT NULL,
  `FK_id_usuario` int(11) NOT NULL,
  `FK_id_cargo_gerencia` int(11) NOT NULL,
  `activo_reparticion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `PK_id_estado` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_correo`
--

CREATE TABLE `estados_correo` (
  `PK_id_estado_correo` int(11) NOT NULL,
  `estado_correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_solicitud`
--

CREATE TABLE `estado_solicitud` (
  `PK_id_estado_solicitud` int(11) NOT NULL,
  `estado_solicitud` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencias`
--

CREATE TABLE `gerencias` (
  `PK_id_gerencia` int(11) NOT NULL,
  `nombre_gerencia` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_vehiculos`
--

CREATE TABLE `marcas_vehiculos` (
  `PK_id_marca_vehiculo` int(11) NOT NULL,
  `marca_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_vehiculos`
--

CREATE TABLE `modelos_vehiculos` (
  `PK_id_modelo_vehiculo` int(11) NOT NULL,
  `modelos_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FK_id_marca_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origenes_vehiculo`
--

CREATE TABLE `origenes_vehiculo` (
  `PK_id_origen_vehiculo` int(11) NOT NULL,
  `origen_vehiculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `FK_id_empleado` int(11) NOT NULL,
  `fecha_reparticion` date NOT NULL,
  `hora_reparticion` time NOT NULL,
  `FK_id_estado_solicitud` int(11) NOT NULL,
  `FK_id_estado_correo` int(11) NOT NULL,
  `fecha_envio` date DEFAULT NULL,
  `hora_envio` time DEFAULT NULL,
  `observasiones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `interpretacion_recomendacion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_atencion_cliente`
--

CREATE TABLE `solicitudes_atencion_cliente` (
  `PK_id_solicitud_atencion_cliente` int(11) NOT NULL,
  `FK_id_cliente_prospecto` int(11) NOT NULL,
  `fecha_reparticion` date NOT NULL,
  `hora_reparticion` time NOT NULL,
  `FK_id_estado_solicitud` int(11) NOT NULL,
  `FK_id_estado_correo` int(11) NOT NULL,
  `fecha_envio` date DEFAULT NULL,
  `hora_envio` time DEFAULT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `interpretacion_recomendacion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes_procesadas`
--

CREATE TABLE `solicitudes_procesadas` (
  `PK_id_solicitud_procesada` int(11) NOT NULL,
  `FK_id_cantidad_solicitud_dia` int(11) NOT NULL,
  `FK_id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_seguro`
--

CREATE TABLE `tipos_seguro` (
  `PK_id_tipo_seguro` int(11) NOT NULL,
  `tipo_seguro` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_team`
--

CREATE TABLE `tipos_team` (
  `PK_id_tipo_team` int(11) NOT NULL,
  `tipo_team` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `fecha_nacimiento` date NOT NULL,
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  ADD PRIMARY KEY (`PK_id_aseguradora`);

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
-- Indices de la tabla `primas`
--
ALTER TABLE `primas`
  ADD PRIMARY KEY (`PK_id_prima`),
  ADD KEY `PK_id_cuadro_comparativo` (`FK_id_cuadro_comparativo`);

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
  ADD KEY `FK_id_empleado` (`FK_id_empleado`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`PK_id_usuario`),
  ADD KEY `FK_id_estado` (`FK_id_estado`),
  ADD KEY `FK_id_tipo_team` (`FK_id_tipo_team`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aseguradoras`
--
ALTER TABLE `aseguradoras`
  MODIFY `PK_id_aseguradora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cantidad_solicitud_dias`
--
ALTER TABLE `cantidad_solicitud_dias`
  MODIFY `PK_id_cantidad_solicitud_dias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargos_gerencias`
--
ALTER TABLE `cargos_gerencias`
  MODIFY `PK_id_cargo_gerencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes_prospectos`
--
ALTER TABLE `clientes_prospectos`
  MODIFY `PK_id_cliente_prospecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comisiones_pactadas`
--
ALTER TABLE `comisiones_pactadas`
  MODIFY `PK_id_comision_pactada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `companias_interes`
--
ALTER TABLE `companias_interes`
  MODIFY `PK_id_compania_interes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrataciones`
--
ALTER TABLE `contrataciones`
  MODIFY `PK_id_contratacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_incendios`
--
ALTER TABLE `cotizaciones_incendios`
  MODIFY `PK_id_cotizacion_incendio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_medico_hosp`
--
ALTER TABLE `cotizaciones_medico_hosp`
  MODIFY `PK_id_cotizacion_medico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_vehiculos`
--
ALTER TABLE `cotizaciones_vehiculos`
  MODIFY `PK_id_cotizacion_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cotizaciones_vida`
--
ALTER TABLE `cotizaciones_vida`
  MODIFY `PK_id_cotizacion_vida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuadro_comparativo`
--
ALTER TABLE `cuadro_comparativo`
  MODIFY `PK_id_cuadro_comparativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `PK_id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `PK_id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados_correo`
--
ALTER TABLE `estados_correo`
  MODIFY `PK_id_estado_correo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_solicitud`
--
ALTER TABLE `estado_solicitud`
  MODIFY `PK_id_estado_solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gerencias`
--
ALTER TABLE `gerencias`
  MODIFY `PK_id_gerencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  MODIFY `PK_id_marca_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  MODIFY `PK_id_modelo_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `origenes_vehiculo`
--
ALTER TABLE `origenes_vehiculo`
  MODIFY `PK_id_origen_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `primas`
--
ALTER TABLE `primas`
  MODIFY `PK_id_prima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referidos`
--
ALTER TABLE `referidos`
  MODIFY `PK_id_referido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `PK_id_solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_atencion_cliente`
--
ALTER TABLE `solicitudes_atencion_cliente`
  MODIFY `PK_id_solicitud_atencion_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes_procesadas`
--
ALTER TABLE `solicitudes_procesadas`
  MODIFY `PK_id_solicitud_procesada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_seguro`
--
ALTER TABLE `tipos_seguro`
  MODIFY `PK_id_tipo_seguro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_team`
--
ALTER TABLE `tipos_team`
  MODIFY `PK_id_tipo_team` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `PK_id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

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
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`PK_id_usuario`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`FK_id_cargo_gerencia`) REFERENCES `cargos_gerencias` (`PK_id_cargo_gerencia`);

--
-- Filtros para la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  ADD CONSTRAINT `modelos_vehiculos_ibfk_1` FOREIGN KEY (`FK_id_marca_vehiculo`) REFERENCES `marcas_vehiculos` (`PK_id_marca_vehiculo`);

--
-- Filtros para la tabla `primas`
--
ALTER TABLE `primas`
  ADD CONSTRAINT `primas_ibfk_1` FOREIGN KEY (`FK_id_cuadro_comparativo`) REFERENCES `cuadro_comparativo` (`PK_id_cuadro_comparativo`);

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
  ADD CONSTRAINT `solicitudes_procesadas_ibfk_2` FOREIGN KEY (`FK_id_cantidad_solicitud_dia`) REFERENCES `cantidad_solicitud_dias` (`PK_id_cantidad_solicitud_dias`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`FK_id_estado`) REFERENCES `estados` (`PK_id_estado`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`FK_id_tipo_team`) REFERENCES `tipos_team` (`PK_id_tipo_team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
