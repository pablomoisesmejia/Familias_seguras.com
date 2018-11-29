-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 05:56:15
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
-- Base de datos: `tienda`
--
CREATE DATABASE IF NOT EXISTS `fs_tienda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
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
(1, 'Pablo Mejia', 'Bouelevard Constitucion, Pasaje Salazar, Casa 3', 'pablo', 1, 7, 1, 'San Salvador', 'San Salvador', 22745360, 78633433, 78633433, 'pablomoisesmejia@gmail.com', '123456789', 'hey.com', 'hey.com', 'hey.com', 1, 'Desarrollador weby manejo de lenguaje C# y Java.', 'Un programador es aquella persona que escribe, depura y mantiene el código fuente de un programa informático, es decir, el conjunto de instrucciones que ejecuta el hardware de una computadora, para realizar una tarea determinada.'),
(2, 'Familias Sefuras', 'edificios metro 200', '5bf5ff2fe9359.jpg', 1, 7, 1, 'Sivar', 'Sivar', 22222222, 77777777, 12345678, 'ositohot@gmail.com', '87654321', 'face.com', 'insta.com', 'hola.com', 2, '', '');

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
(1, 'Karla', 'Reyes', 'pablomoisesmejia@gmail.com', 'pablomoisesmejia', '$2y$10$Qn3ExGUjBQ0esOzADJfceu38CUD8FfKl59Mt3IhZe/E94Jja3.mgu');

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
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `alias` (`alias_usuario`),
  ADD UNIQUE KEY `correo` (`correo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
