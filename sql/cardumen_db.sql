/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : cardumen_db

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-17 21:53:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_usuario
-- ----------------------------
DROP TABLE IF EXISTS `admin_usuario`;
CREATE TABLE `admin_usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `imagen` varchar(80) DEFAULT NULL,
  `estado` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_usuario
-- ----------------------------
INSERT INTO `admin_usuario` VALUES ('1', 'Raul Ramirez', 'raul.ramirez@imagenwebhq.com', '35077063093736d9c00a46b7325ebc968179dab0dea4c8387ff65a9b4848c15e', null, '1');

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('14', 'Guerrilla', 'guerrilla', '1');
INSERT INTO `categoria` VALUES ('15', 'Categoria', 'categoria', '1');
INSERT INTO `categoria` VALUES ('16', 'Categoria 2', 'categoria2', '1');

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'ABC', 'abc.png', null, '1');
INSERT INTO `clientes` VALUES ('2', 'Budweiser', 'budweiser.png', null, '1');
INSERT INTO `clientes` VALUES ('3', 'Camel', 'camel.png', null, '1');
INSERT INTO `clientes` VALUES ('4', 'Cervepar', 'cervepar.png', null, '1');
INSERT INTO `clientes` VALUES ('5', 'Cuevas Hnos.', 'cuevas.png', null, '1');
INSERT INTO `clientes` VALUES ('6', 'Western Union', 'western-union.png', null, '1');
INSERT INTO `clientes` VALUES ('7', 'Financiera El Comercio', 'elcomercio.png', null, '1');
INSERT INTO `clientes` VALUES ('8', 'Giro País', 'giro_pais.png', null, '1');
INSERT INTO `clientes` VALUES ('9', 'Iman S.A.', 'iman.png', null, '1');
INSERT INTO `clientes` VALUES ('10', 'Johnson& Johnson', 'johnson&johnson.png', null, '1');
INSERT INTO `clientes` VALUES ('11', 'Kia', 'kia.png', null, '1');
INSERT INTO `clientes` VALUES ('12', 'La Consolidada', 'la-consolidada.png', null, '1');
INSERT INTO `clientes` VALUES ('13', 'Nestle', 'nestle.png', null, '1');
INSERT INTO `clientes` VALUES ('14', 'Pro Canal de la Produccion', 'pro_canal.png', null, '1');
INSERT INTO `clientes` VALUES ('15', 'RPC', 'rpc.png', null, '1');
INSERT INTO `clientes` VALUES ('16', 'Tigo Sports', 'tigo_sports.png', null, '1');

-- ----------------------------
-- Table structure for config_redes
-- ----------------------------
DROP TABLE IF EXISTS `config_redes`;
CREATE TABLE `config_redes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) DEFAULT NULL,
  `fontawesome` varchar(60) DEFAULT NULL,
  `url` varchar(180) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_redes
-- ----------------------------
INSERT INTO `config_redes` VALUES ('1', 'behance', 'fa fa-behance-square', '#', '1');
INSERT INTO `config_redes` VALUES ('2', 'digg', 'fa fa-digg', '#', '1');
INSERT INTO `config_redes` VALUES ('3', 'facebook', 'fa fa-facebook', '#', '1');
INSERT INTO `config_redes` VALUES ('4', 'flickr', '	fa fa-flickr', '#', '1');
INSERT INTO `config_redes` VALUES ('5', 'google-plus', 'fa fa-google-plus', '#', '1');
INSERT INTO `config_redes` VALUES ('6', 'linkedin', 'fa fa-linkedin', '#', '1');
INSERT INTO `config_redes` VALUES ('7', 'pinterest', 'fa fa-pinterest-p', '#', '1');
INSERT INTO `config_redes` VALUES ('8', 'skype', 'fa fa-skype', '#', '1');
INSERT INTO `config_redes` VALUES ('9', 'spotify', 'fa fa-spotify', '#', '1');
INSERT INTO `config_redes` VALUES ('10', 'twitter', 'fa fa-twitter', '#', '1');
INSERT INTO `config_redes` VALUES ('11', 'vimeo', 'fa fa-vimeo', '#', '1');
INSERT INTO `config_redes` VALUES ('12', 'vine', 'fa fa-vine', '#', '1');
INSERT INTO `config_redes` VALUES ('13', 'youtube', 'fa fa-youtube', '#', '1');

-- ----------------------------
-- Table structure for config_sitio
-- ----------------------------
DROP TABLE IF EXISTS `config_sitio`;
CREATE TABLE `config_sitio` (
  `id` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `latitud` varchar(80) DEFAULT NULL,
  `longitud` varchar(80) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `frase` text,
  `autor_frase` varchar(60) DEFAULT NULL,
  `map_marker` varchar(80) DEFAULT NULL,
  `img_frase` varchar(80) DEFAULT NULL,
  `img_contacto` varchar(80) DEFAULT NULL,
  `titulo_trabaja` varchar(60) DEFAULT NULL,
  `texto_trabaja` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_sitio
-- ----------------------------
INSERT INTO `config_sitio` VALUES ('1', 'info@cardumenelbagre.com', '-25.304984', '-57.596620', '(595 21) 214 353', 'Tenemos mucho tiempo por delante para crear los sueños que aún ni siquiera imaginamos soñar.', 'Steven Spielberg', 'pez-marker.png', 'frase1.jpg', 'camera-lens.jpg', '¿Estás list@ para trabajar con nosotros?', 'Estamos felices de saber que querés ser parte de nuestro equipo!. Envíanos tus datos y adjuntanos tu CV.');

-- ----------------------------
-- Table structure for config_videos
-- ----------------------------
DROP TABLE IF EXISTS `config_videos`;
CREATE TABLE `config_videos` (
  `id` int(11) unsigned NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_videos
-- ----------------------------
INSERT INTO `config_videos` VALUES ('1', 'Video de la Portada', 'w8KQmps-Sog');
INSERT INTO `config_videos` VALUES ('2', 'Reel', 'NMVBQ6C4iNA');

-- ----------------------------
-- Table structure for contacto
-- ----------------------------
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `asunto` varchar(60) DEFAULT NULL,
  `mensaje` text,
  `fecha` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacto
-- ----------------------------
INSERT INTO `contacto` VALUES ('1', 'Raul', 'raul.chuky@gmail.com', 'Prueba', 'Esto es una prueba', '2017-09-05 21:05:44', '1');

-- ----------------------------
-- Table structure for locales
-- ----------------------------
DROP TABLE IF EXISTS `locales`;
CREATE TABLE `locales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_oficina` varchar(40) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(80) DEFAULT NULL,
  `email` varchar(160) DEFAULT NULL,
  `casa_central` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of locales
-- ----------------------------
INSERT INTO `locales` VALUES ('1', 'Oficina Adminitrativa', '<p>Teniente Martínez Ramella nº 1080<br>\r\nc/ Herminio Giménez<br>\r\nBarrio Ciudad Nueva. Asunción</p>', '(+595)21 214 353', 'info@cardumenelbagre.com', '1', '1');
INSERT INTO `locales` VALUES ('2', 'Estudio 1', '<p>Direccion 2<br>\r\nc/ Direccion<br>\r\nUn Barrio. Asunción</p>', '(+595)21 214 353', null, '0', '1');
INSERT INTO `locales` VALUES ('3', 'Estudio 2', '<p>Direccion 2<br>\r\nc/ Direccion<br>\r\nUn Barrio. Asunción</p>', '(+595)21 214 353', null, '0', '1');

-- ----------------------------
-- Table structure for metas
-- ----------------------------
DROP TABLE IF EXISTS `metas`;
CREATE TABLE `metas` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` text,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of metas
-- ----------------------------
INSERT INTO `metas` VALUES ('1', 'Cardumen el Bagre', 'Cardumen el bagre es una compañía dedicada a la realización de las más diversas producciones audiovisuales incluyendo programas de TV, institucionales, comerciales y storytelling.', 'el bagre productora, cardumen el bagre, el bagre, productora, tv, television');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `contenido` text,
  `tags` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('10', 'Hinchas de Resistencia', '<p>Cliente: Oniria<br />\r\nMarca: Resistencia Sport Club<br />\r\nAgencia: Oniria TBWA<br />\r\nProductora: #CardumenElBagre</p>\r\n\r\n<p>Director / DF / Editor: Rojo Uhl<br />\r\nC&aacute;mara 2: Joe Barcovich<br />\r\nAC1: Augusto Flecha Paredes<br />\r\nJefa de Producci&oacute;n: Natilu Aguilar Alarc&oacute;n<br />\r\nEjecutivo de Cuentas: Antonino V&aacute;zquez<br />\r\nEjecutiva Comercial: Eva Rodr&iacute;guez<br />\r\nLocuci&oacute;n: Benicio Mart&iacute;nez<br />\r\nCaptura de Locuci&oacute;n / Post Producci&oacute;n de Sonido: Juan Guerrero<br />\r\nColorimetr&iacute;a: Marcelo Guido</p>\r\n', 'hinchas de resistencia,futbol,estadio,arbol,resistencia', '2017-08-16 23:16:55', '1');

-- ----------------------------
-- Table structure for post_archivo
-- ----------------------------
DROP TABLE IF EXISTS `post_archivo`;
CREATE TABLE `post_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_tipo_archivo` int(11) unsigned NOT NULL,
  `descripcion` varchar(80) NOT NULL,
  `img_principal` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pa` (`id_post`),
  KEY `fk_idtipoarchivo_pa` (`id_tipo_archivo`),
  CONSTRAINT `post_archivo_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `post_archivo_ibfk_2` FOREIGN KEY (`id_tipo_archivo`) REFERENCES `tipo_archivo` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_archivo
-- ----------------------------
INSERT INTO `post_archivo` VALUES ('1', '10', '2', 'Ig_2m2MBjSs', '0', '1');
INSERT INTO `post_archivo` VALUES ('2', '10', '1', 'hinchas_resistencia.jpg', '1', '1');

-- ----------------------------
-- Table structure for post_categoria
-- ----------------------------
DROP TABLE IF EXISTS `post_categoria`;
CREATE TABLE `post_categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_post` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idpost_pc` (`id_post`),
  KEY `fk_idcategoria_pc` (`id_categoria`),
  CONSTRAINT `post_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `post_categoria_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_categoria
-- ----------------------------
INSERT INTO `post_categoria` VALUES ('1', '10', '14');

-- ----------------------------
-- Table structure for quienes_somos
-- ----------------------------
DROP TABLE IF EXISTS `quienes_somos`;
CREATE TABLE `quienes_somos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quienes_somos` text,
  `el_equipo` text,
  `img_equipo` varchar(120) DEFAULT NULL,
  `img_background` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quienes_somos
-- ----------------------------
INSERT INTO `quienes_somos` VALUES ('1', '<p><strong>Cardumen el bagre</strong> es una compañía dedicada a la realización de las más diversas producciones audiovisuales incluyendo programas de TV, institucionales, comerciales y storytelling.</p>\r\n\r\n<p>Se desarrolla con éxito desde el año 2008 y ha producido desde ese entonces para los canales más importantes de Paraguay marcando hitos televisivos de gran despliegue como <strong>Desafío de Campeones</strong> en el 2014. De manera ininterrumpida y por 4 años (2011 al 2015) ha producido y emitido a través de Unicanal variados programas de televisión, que han recibido en el 2013 importantes nominaciones a los premios ATVC a las mejores producciones del cable de Latinoamérica así como la declaración de interés turístico nacional por la Secretaría Nacional de Turismo, SENATUR.</p>\r\n\r\n<p>Contamos con 2 estudios de TV con los cuales brindamos servicios publicitarios y televisivos y en los que trabajamos, entre otros, con los canales tigo sports y PRO de Asunción. Precisamente para éste último producimos a la fecha alrededor de 200 documentales sobre negocios exitosos del Paraguay en el programa “PRO DOCUMENTALES” emitido actualmente en su 2da. Temporada. Íntegramente grabados en 4K, semana a semana instala temas de gran interés recorriendo los escenarios más productivos del país.</p>\r\n\r\n<p>En publicidad, la originalidad y la creatividad de un equipo humano liderado por jóvenes realizadores que encaran diversos retos y trabajos de manera conjunta con las agencias más importantes de la región ha sido acreedor de importantes reconocimientos nacionales e internacionales.</p>\r\n\r\n<p>Con un estilo fresco y descontracturado <strong>Cardumen el Bagre</strong> trabaja incansablemente en ofrecer cada vez mayores productos audiovisuales, entretenidos y óptimos para un mercado global cada vez más competitivo. De cara a una nueva etapa de crecimiento apuesta al mercado internacional con la puesta en marcha en el 2018 del primer <strong>Centro integral de contenidos</strong> del país.</p>\r\n', '<p>Apostamos por los nuevos formatos y buscamos nuevas experiencias para el espectador. De esta manera nuestro staff integrado por productores, realizadores y guionistas trabaja en la puesta en marcha de nuevos formatos audiovisuales atentos a las innovaciones artísticas y tecnológicas para seguir conquistando al público. Aprovechamos todos los formatos y todas las pantallas disponibles para contar historias, experiencias y emociones.</p>', 'equipo.jpg', 'quienes-somos.jpg');

-- ----------------------------
-- Table structure for tipo_archivo
-- ----------------------------
DROP TABLE IF EXISTS `tipo_archivo`;
CREATE TABLE `tipo_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_archivo
-- ----------------------------
INSERT INTO `tipo_archivo` VALUES ('1', 'Imagen', null, '1');
INSERT INTO `tipo_archivo` VALUES ('2', 'Video', null, '1');
INSERT INTO `tipo_archivo` VALUES ('3', 'Word', null, '1');
INSERT INTO `tipo_archivo` VALUES ('4', 'Excel', null, '1');
INSERT INTO `tipo_archivo` VALUES ('5', 'Power Point', null, '1');

-- ----------------------------
-- Table structure for trabaja
-- ----------------------------
DROP TABLE IF EXISTS `trabaja`;
CREATE TABLE `trabaja` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `mensaje` text,
  `archivo` varchar(160) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trabaja
-- ----------------------------
INSERT INTO `trabaja` VALUES ('1', 'Raul', 'raul.chuky@gmail.com', '0976901801', 'ñhola', '1_publicacion-nissan.jpg', '2017-08-05 07:55:05', '1');
INSERT INTO `trabaja` VALUES ('2', 'Raul 2', 'raul.chuky@gmail.com', '123456', 'Esto es otro CV adjuntado. Archivo PDF', '2_Propuesta-cadiem-Administrador1.pdf', '2017-08-05 07:56:29', '1');
INSERT INTO `trabaja` VALUES ('3', 'Raul word', 'raul.chuky@gmail.com', '987654', 'Archivo WORD', '3_Presupuesto-Cadiem-Cambios.docx', '2017-08-05 07:59:14', '1');

-- ----------------------------
-- Table structure for unidades_negocio
-- ----------------------------
DROP TABLE IF EXISTS `unidades_negocio`;
CREATE TABLE `unidades_negocio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of unidades_negocio
-- ----------------------------
INSERT INTO `unidades_negocio` VALUES ('1', 'PUBLICIDAD', '<p>Un equipo de realizadores trabaja en la producción de varias propuestas publicitarias en anuencia con las agencias más importantes de la región.</p>', '1');
INSERT INTO `unidades_negocio` VALUES ('2', 'TELEVISIÓN', '<p>Las posibilidades en televisión al contar con estudios han maximizado las oportunidades de productos televisivos de la productora. En campo nuestros programas traen la frescura que por lo general lo canales no tienen y estos productos marcan una diferencia, una mirada distinta y arriesgada que atrapa.</p>', '1');
SET FOREIGN_KEY_CHECKS=1;
