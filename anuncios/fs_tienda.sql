-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2018 a las 05:17:56
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
-- Base de datos: `fs_tienda`
--
CREATE DATABASE IF NOT EXISTS `fs_tienda` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `fs_tienda`;

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
(1, 'Droga', 'mi casa', '5bf5ff2fe9359.jpg', 1, 7, 1, 'San Salvador', 'San Salvador', 22014477, 78633433, 61486499, 'fernanxavi58@gmail.com', '45678', 'https://www.facebook.com/xavier.Mcanjura', 'https://www.instagram.com/xavi_canjura6/?hl=es-la', 'https://www.youtube.com/watch?v=eHD-D81O1Xc', 3, 'Yo soy la mera ......', 'Mas experiencia que vos tengo');

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
-- Estructura de tabla para la tabla `marcas_vehiculos`
--

CREATE TABLE `marcas_vehiculos` (
  `PK_id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_vehiculos`
--

CREATE TABLE `modelos_vehiculos` (
  `PK_id_modelo` int(11) NOT NULL,
  `nombre_modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `FK_id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Estructura de tabla para la tabla `tipo_propiedad`
--

CREATE TABLE `tipo_propiedad` (
  `PK_id_tipo_propiedad` int(11) NOT NULL,
  `tipo_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `PK_id_transaccion` int(11) NOT NULL,
  `transaccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres_usuario`, `apellidos_usuario`, `correo_usuario`, `alias_usuario`, `clave_usuario`) VALUES
(1, 'Fernando Xavier', 'Maldonado Canjura', 'fernanxavi58@gmail.com', 'XaviCaM', '$2y$10$jOC59Pq57dIL.K4Vlt2Q6uV4oFLwXUMS1iGQWtjpbkbLLm3YtcKBC');

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
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL
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
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nombre` (`nombre_categoria`);

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
-- Indices de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  ADD PRIMARY KEY (`PK_id_marca`);

--
-- Indices de la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  ADD PRIMARY KEY (`PK_id_modelo`),
  ADD KEY `FK_id_marca` (`FK_id_marca`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`PK_id_propiedad`),
  ADD KEY `FK_id_tipo_propiedad` (`FK_id_tipo_propiedad`),
  ADD KEY `FK_id_usuario` (`FK_id_usuario`),
  ADD KEY `FK_id_transaccion` (`FK_id_transaccion`);

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
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT de la tabla `marcas_vehiculos`
--
ALTER TABLE `marcas_vehiculos`
  MODIFY `PK_id_marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_vehiculos`
--
ALTER TABLE `modelos_vehiculos`
  MODIFY `PK_id_modelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `PK_id_propiedad` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `anuncio_ibfk_3` FOREIGN KEY (`id_plan`) REFERENCES `planes` (`id_plan`);

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
  ADD CONSTRAINT `modelos_vehiculos_ibfk_1` FOREIGN KEY (`FK_id_marca`) REFERENCES `marcas_vehiculos` (`PK_id_marca`);

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `propiedades_ibfk_2` FOREIGN KEY (`FK_id_tipo_propiedad`) REFERENCES `tipo_propiedad` (`PK_id_tipo_propiedad`),
  ADD CONSTRAINT `propiedades_ibfk_3` FOREIGN KEY (`FK_id_transaccion`) REFERENCES `transaccion` (`PK_id_transaccion`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`FK_id_modelo`) REFERENCES `modelos_vehiculos` (`PK_id_modelo`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`FK_id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
