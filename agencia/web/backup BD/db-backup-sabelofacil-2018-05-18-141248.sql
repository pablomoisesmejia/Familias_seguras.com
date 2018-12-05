

CREATE DATABASE IF NOT EXISTS sabelofacil;

USE sabelofacil;

SET FOREIGN_KEY_CHECKS=false;

DROP TABLE IF EXISTS administrador;

CREATE TABLE `administrador` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
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
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_admin`),
  KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`),
  KEY `FK_ID_tipousuario` (`FK_ID_tipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO administrador VALUES('3','1','alejandro Ernesto','Mejia Rodriguez','1999-10-18','alejo@gmail.com','$2y$10$jwjcY5bW77tWJ97yKvNN7OTOSUkNX6wKw695FQIKae704lNypCshG','no hay imagen','mi casa','123456789','Alejo99','1','1');



DROP TABLE IF EXISTS bitacora_empleados;

CREATE TABLE `bitacora_empleados` (
  `ID_bitacora_empl` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `Accion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_bitacora_empl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS bitacora_login;

CREATE TABLE `bitacora_login` (
  `ID_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  PRIMARY KEY (`ID_bitacora`),
  KEY `FK_ID_usuario` (`FK_ID_usuario`),
  CONSTRAINT `bitacora_login_ibfk_1` FOREIGN KEY (`FK_ID_usuario`) REFERENCES `usuario` (`ID_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS bitacora_productos;

CREATE TABLE `bitacora_productos` (
  `ID_bitacora_pro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `Accion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_bitacora_pro`),
  KEY `FK_ID_producto` (`FK_ID_producto`),
  CONSTRAINT `bitacora_productos_ibfk_1` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO bitacora_productos VALUES('1','2018-05-18 00:00:00','5','INSERTO PRODUCTO');
INSERT INTO bitacora_productos VALUES('2','2018-05-18 13:19:26','6','INSERTO PRODUCTO');
INSERT INTO bitacora_productos VALUES('3','2018-05-18 14:08:44','7','INSERTO PRODUCTO');



DROP TABLE IF EXISTS categoria;

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO categoria VALUES('1','Instrumentos de Escritura','1');
INSERT INTO categoria VALUES('2','Instrumentos de Escriturra','1');
INSERT INTO categoria VALUES('3','Instrumentos de Precisión','1');
INSERT INTO categoria VALUES('4','Instrumentos de Coloreo','1');



DROP TABLE IF EXISTS cliente;

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_membresia` int(11) DEFAULT NULL,
  `FK_ID_curso` int(11) DEFAULT NULL,
  `FK_ID_tipo_doc` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_cliente`),
  KEY `FK_ID_curso` (`FK_ID_curso`),
  KEY `FK_ID_membresia` (`FK_ID_membresia`),
  KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`FK_ID_curso`) REFERENCES `curso` (`ID_curso`),
  CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`FK_ID_membresia`) REFERENCES `membresia` (`ID_membresia`),
  CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`FK_ID_tipo_doc`) REFERENCES `tipo_doc` (`ID_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO cliente VALUES('1','1','1','1','Roberto','Moran','0','1999-05-03','su casita','1245231254','willy@gmail.com','buenas tardes ','wiliito.jpg','1');
INSERT INTO cliente VALUES('2',NULL,NULL,'1','Andres','Gomez','0','1999-05-03','su casita','1245231254','anres@gmail.com','buenos dias ','wiliito.jpg','1');



DROP TABLE IF EXISTS comercio;

CREATE TABLE `comercio` (
  `ID_comercio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `responsable` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `FK_ID_estado_comercio` int(11) NOT NULL,
  PRIMARY KEY (`ID_comercio`),
  KEY `FK_ID_estado_comercio` (`FK_ID_estado_comercio`),
  CONSTRAINT `comercio_ibfk_1` FOREIGN KEY (`FK_ID_estado_comercio`) REFERENCES `estado_comercio` (`ID_estadoC`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO comercio VALUES('1','ZAPATOS CHULI','variedad de zapatos','chuli_ctact@gmail.com','22301542','Raul bolaños','chuli_shoes.jpg','1');
INSERT INTO comercio VALUES('2','Uniformes alvarado','variedad de uniformes','alvarado@gmail.com','22301542','Raul Castro','alvarado.jpg','2');



DROP TABLE IF EXISTS curso;

CREATE TABLE `curso` (
  `ID_curso` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_curso` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  PRIMARY KEY (`ID_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO curso VALUES('1','1','2018-05-19','2018-06-19');
INSERT INTO curso VALUES('2','2','2018-08-19','2018-09-19');



DROP TABLE IF EXISTS detalle_factura;

CREATE TABLE `detalle_factura` (
  `ID_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_venta` int(11) DEFAULT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `sub_total` decimal(6,2) NOT NULL,
  `estadoventa` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_detalle`),
  KEY `FK_ID_carrito` (`FK_ID_venta`),
  KEY `FK_ID_producto` (`FK_ID_producto`),
  KEY `FK_ID_cliente` (`FK_ID_cliente`),
  CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  CONSTRAINT `detalle_factura_ibfk_2` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`),
  CONSTRAINT `detalle_factura_ibfk_3` FOREIGN KEY (`FK_ID_venta`) REFERENCES `venta` (`ID_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO detalle_factura VALUES('1',NULL,'1','2','1','2','6.00','0');
INSERT INTO detalle_factura VALUES('2','2','1','2','2','6','50.00','0');



DROP TABLE IF EXISTS estado_comercio;

CREATE TABLE `estado_comercio` (
  `ID_estadoC` int(11) NOT NULL AUTO_INCREMENT,
  `EstadoC` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_estadoC`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO estado_comercio VALUES('1','Disponible');
INSERT INTO estado_comercio VALUES('2','Pendiente');
INSERT INTO estado_comercio VALUES('3','Rechazado');



DROP TABLE IF EXISTS marca;

CREATE TABLE `marca` (
  `ID_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO marca VALUES('1','Faber-Castell','marketing@faber-castell.com','22710218','Paseo Gral. Escalón 4646, San Salvador','1');
INSERT INTO marca VALUES('2','Facela','info@facela.com','22417100','Km. 11 Carretera al Puerto de La Libertad.\r\nAntiguo Cuscatlán, El Salvador, C.A.','1');



DROP TABLE IF EXISTS materia;

CREATE TABLE `materia` (
  `ID_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO materia VALUES('1','Matematicas','Calculos y procesos de resolucion de problemas','1');
INSERT INTO materia VALUES('10','Estudios Sociales ','Vista de cerca la realidad social en el país','1');



DROP TABLE IF EXISTS membresia;

CREATE TABLE `membresia` (
  `ID_membresia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_membresia`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO membresia VALUES('1','2018-05-17','2019-05-17','1');
INSERT INTO membresia VALUES('2','2018-04-17','2019-04-17','1');
INSERT INTO membresia VALUES('3','2018-03-17','2019-03-17','1');
INSERT INTO membresia VALUES('4','2018-05-16','2019-05-16','1');
INSERT INTO membresia VALUES('5','2018-05-16','2019-05-16','1');
INSERT INTO membresia VALUES('18','2018-05-16','2019-05-16','1');
INSERT INTO membresia VALUES('19','2018-05-16','2019-05-16','1');
INSERT INTO membresia VALUES('20','2018-05-16','2019-05-16','1');



DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_marca` int(11) NOT NULL,
  `FK_ID_Categoria` int(11) NOT NULL,
  `FK_ID_proveedor` int(11) NOT NULL,
  `nombre_producto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_producto`),
  KEY `FK_ID_Categoria` (`FK_ID_Categoria`),
  KEY `FK_ID_marca` (`FK_ID_marca`),
  KEY `FK_ID_proveedor` (`FK_ID_proveedor`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`FK_ID_Categoria`) REFERENCES `categoria` (`ID_categoria`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`FK_ID_marca`) REFERENCES `marca` (`ID_marca`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`FK_ID_proveedor`) REFERENCES `proveedor` (`ID_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO producto VALUES('1','2','4','1','Colores ','5.00','facela_colors.jpg','12 unidades brillantes','1');
INSERT INTO producto VALUES('2','1','1','1','Lapiz ','3.00','lapiz.jpg','caja de 12 unidades ','1');
INSERT INTO producto VALUES('3','1','3','1','Compas 12mm','2.00','compas_faber.jpg','compas de presicion de 12mm','1');
INSERT INTO producto VALUES('5','2','1','2','Plumas','2.00','plumas.jpg','caja de 10 unidades ','1');
INSERT INTO producto VALUES('6','1','4','1','Colores ','2.00','colores.jpg','12 unidades ','1');
INSERT INTO producto VALUES('7','1','4','1','Colores ','2.00','colores.jpg','12 unidades','1');



DROP TABLE IF EXISTS proveedor;

CREATE TABLE `proveedor` (
  `ID_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO proveedor VALUES('1','ARANDA','aranda@gmail.com','22325645','avenida aranda ','1');
INSERT INTO proveedor VALUES('2','LA LUZ','la_luz@gmail.com','23154268','avenida la cruz #4457','1');



DROP TABLE IF EXISTS tipo_doc;

CREATE TABLE `tipo_doc` (
  `ID_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_doc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tipo_doc VALUES('1','DUI');
INSERT INTO tipo_doc VALUES('2','NIT');
INSERT INTO tipo_doc VALUES('3','Pasaporte');



DROP TABLE IF EXISTS tipo_usuario;

CREATE TABLE `tipo_usuario` (
  `ID_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tipo_usuario VALUES('1','Administrador','1');
INSERT INTO tipo_usuario VALUES('2','Maestro','1');
INSERT INTO tipo_usuario VALUES('3','Secretario','1');



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_tipo_usuario` int(11) NOT NULL,
  `FK_ID_tipo_doc` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `documento` int(11) NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contraseÃ±a` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_usuario`),
  KEY `FK_ID_tipo_doc` (`FK_ID_tipo_doc`),
  KEY `FK_ID_tipo_usuario` (`FK_ID_tipo_usuario`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`FK_ID_tipo_doc`) REFERENCES `tipo_doc` (`ID_tipo_doc`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`FK_ID_tipo_usuario`) REFERENCES `tipo_usuario` (`ID_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS valoracion;

CREATE TABLE `valoracion` (
  `ID_valoracion` int(11) NOT NULL AUTO_INCREMENT,
  `FK_ID_cliente` int(11) NOT NULL,
  `FK_ID_producto` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_valoracion`),
  KEY `FK_ID_cliente` (`FK_ID_cliente`),
  KEY `FK_ID_producto` (`FK_ID_producto`),
  CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`FK_ID_producto`) REFERENCES `producto` (`ID_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




DROP TABLE IF EXISTS venta;

CREATE TABLE `venta` (
  `ID_venta` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `FK_ID_cliente` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_venta`),
  KEY `FK_ID_cliente` (`FK_ID_cliente`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`FK_ID_cliente`) REFERENCES `cliente` (`ID_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO venta VALUES('1','2018-05-14','1','1');
INSERT INTO venta VALUES('2','2018-05-18','2','1');
INSERT INTO venta VALUES('3','2018-05-18','2','1');
INSERT INTO venta VALUES('4','2018-05-18','2','1');
INSERT INTO venta VALUES('5','2018-05-18','2','1');



