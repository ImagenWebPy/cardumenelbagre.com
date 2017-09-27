/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : cardumen_db

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-26 22:10:06
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_unique_email` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_usuario
-- ----------------------------
INSERT INTO `admin_usuario` VALUES ('1', 'Raul Ramirez', 'raul.ramirez@imagenwebhq.com', '35077063093736d9c00a46b7325ebc968179dab0dea4c8387ff65a9b4848c15e', null, '1');
INSERT INTO `admin_usuario` VALUES ('2', 'Marco Gauto', 'marco@cardumenelbagre.com', '034869b3cc2fbbd18714278de6d57a7507dccecba18b0876ed351bb62fc31444', null, '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('14', 'Guerrilla', 'guerrilla', '1');
INSERT INTO `categoria` VALUES ('17', 'Televisión', 'TV', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'ABC', 'abc.png', '', '1');
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
INSERT INTO `clientes` VALUES ('38', 'telefuturo', '38_logo-telefuturo.png', '', '1');
INSERT INTO `clientes` VALUES ('15', 'RPC', 'rpc.png', null, '1');
INSERT INTO `clientes` VALUES ('16', 'Tigo Sports', 'tigo_sports.png', null, '1');
INSERT INTO `clientes` VALUES ('25', 'Garden', '25_logo-garden2.png', '', '1');
INSERT INTO `clientes` VALUES ('24', 'Shopping Mariano', '24_marianoportada.png', '', '1');
INSERT INTO `clientes` VALUES ('26', 'Pinedo Shopping', '26_pinedoportada.png', '', '1');
INSERT INTO `clientes` VALUES ('27', 'Frigorífico Guaraní', '27_logo-frigo-guarani.png', '', '1');
INSERT INTO `clientes` VALUES ('28', 'Mitsubishi', '28_logo-mitsubishi.png', '', '1');
INSERT INTO `clientes` VALUES ('29', 'Shopping Mariscal', '29_shopping-mariscal.png', '', '1');
INSERT INTO `clientes` VALUES ('30', 'urba inmobiliaria', '30_urba-logo.png', '', '1');
INSERT INTO `clientes` VALUES ('31', 'Shopping Multiplaza', '31_logo-multiplaza.png', '', '1');
INSERT INTO `clientes` VALUES ('32', 'Lácteos trebol', '32_lacteos-trebol-logo.png', '', '1');
INSERT INTO `clientes` VALUES ('34', 'SNT', '34_SNT_LOGO.jpg', '', '1');
INSERT INTO `clientes` VALUES ('35', 'Banco Regional', '35_regional.png', '', '1');
INSERT INTO `clientes` VALUES ('36', 'Tonina', '36_logo-tonina.png', '', '1');
INSERT INTO `clientes` VALUES ('37', 'Canal Pro', '37_canal_pro_icono.jpg', '', '1');

-- ----------------------------
-- Table structure for config_colores
-- ----------------------------
DROP TABLE IF EXISTS `config_colores`;
CREATE TABLE `config_colores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seccion` varchar(60) DEFAULT NULL,
  `tipo` enum('Titulo','Contenido') DEFAULT NULL,
  `hex` varchar(30) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_colores
-- ----------------------------
INSERT INTO `config_colores` VALUES ('1', 'Quienes Somos', 'Titulo', '#ccc', '1');
INSERT INTO `config_colores` VALUES ('2', 'Quienes Somos', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('3', 'El Equipo', 'Titulo', '#444649', '1');
INSERT INTO `config_colores` VALUES ('4', 'El Equipo', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('5', 'Demo Reel', 'Titulo', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('6', 'Servicios', 'Titulo', '#444649', '1');
INSERT INTO `config_colores` VALUES ('7', 'Servicios ', 'Contenido', '#333', '1');
INSERT INTO `config_colores` VALUES ('8', 'Frase', 'Titulo', '#fff', '1');
INSERT INTO `config_colores` VALUES ('9', 'Frase', 'Contenido', '#fff', '1');
INSERT INTO `config_colores` VALUES ('10', 'Trabajos', 'Titulo', '#C54C7B', '1');
INSERT INTO `config_colores` VALUES ('11', 'Trabajos', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('12', 'Clientes', 'Titulo', '#444649', '1');
INSERT INTO `config_colores` VALUES ('13', 'Clientes', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('14', 'Trabaja', 'Titulo', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('15', 'Trabaja', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('16', 'Contacto', 'Titulo', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('17', 'Contacto', 'Contenido', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('18', 'Footer', 'Titulo', '#8e9095', '1');
INSERT INTO `config_colores` VALUES ('19', 'Footer', 'Contenido', '#8e9095', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_redes
-- ----------------------------
INSERT INTO `config_redes` VALUES ('1', 'behance', 'fa fa-behance-square', '#', '0');
INSERT INTO `config_redes` VALUES ('2', 'digg', 'fa fa-digg', '#', '0');
INSERT INTO `config_redes` VALUES ('3', 'facebook', 'fa fa-facebook', 'https://www.facebook.com/cardumenelbagre/', '1');
INSERT INTO `config_redes` VALUES ('4', 'flickr', '	fa fa-flickr', '#', '1');
INSERT INTO `config_redes` VALUES ('5', 'google-plus', 'fa fa-google-plus', '#', '1');
INSERT INTO `config_redes` VALUES ('6', 'linkedin', 'fa fa-linkedin', '#', '1');
INSERT INTO `config_redes` VALUES ('7', 'pinterest', 'fa fa-pinterest-p', '#', '1');
INSERT INTO `config_redes` VALUES ('8', 'skype', 'fa fa-skype', '#', '0');
INSERT INTO `config_redes` VALUES ('9', 'spotify', 'fa fa-spotify', '#', '0');
INSERT INTO `config_redes` VALUES ('10', 'twitter', 'fa fa-twitter', '#', '1');
INSERT INTO `config_redes` VALUES ('11', 'vimeo', 'fa fa-vimeo', '#', '0');
INSERT INTO `config_redes` VALUES ('12', 'vine', 'fa fa-vine', '#', '0');
INSERT INTO `config_redes` VALUES ('13', 'youtube', 'fa fa-youtube', 'https://www.youtube.com/user/ProductoraBagre', '1');

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
  `texto_cliente` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_sitio
-- ----------------------------
INSERT INTO `config_sitio` VALUES ('1', 'info@cardumenelbagre.com', '-25.304984', '-57.596620', '(595 21) 214 353', 'Tenemos mucho tiempo por delante para crear los sueños que aún ni siquiera imaginamos soñar.', 'Steven Spielberg', 'pez-marker.png', 'frase1.jpg', 'camera-lens.jpg', '¿Estás list@ para trabajar con nosotros?', 'Estamos felices de saber que querés ser parte de nuestro equipo!. Envíanos tus datos y adjuntanos tu CV.', 'Para nosotros los clientes se convierten en nuestros amigos porque más allá de una relación comercial, queremos asesorarlos, ayudarlos a crecer y acompañarlos en todo su proceso. ¡Acá le dejamos una muestra de nuestros amigos!');

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
INSERT INTO `config_videos` VALUES ('1', 'Video de la Portada', 'hYTAyqz2dGg');
INSERT INTO `config_videos` VALUES ('2', 'Reel', '9lvptGdodCA');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacto
-- ----------------------------
INSERT INTO `contacto` VALUES ('1', 'Raul', 'raul.chuky@gmail.com', 'Prueba', 'Esto es una prueba', '2017-09-05 21:05:44', '1');
INSERT INTO `contacto` VALUES ('2', '', '', '', '', '2017-09-26 13:36:03', '0');
INSERT INTO `contacto` VALUES ('3', '', '', null, '', '2017-09-26 13:37:22', '0');
INSERT INTO `contacto` VALUES ('4', '', '', '', '', '2017-09-26 14:52:26', '0');
INSERT INTO `contacto` VALUES ('5', '', '', null, '', '2017-09-26 14:53:48', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of locales
-- ----------------------------
INSERT INTO `locales` VALUES ('1', 'Oficina Adminitrativa', '<p>Teniente Mart&iacute;nez Ramella n&ordm; 1080</p>\r\n\r\n<p>y Herminio Gim&eacute;nez</p>\r\n\r\n<p>Barrio Mburicao. Asunci&oacute;n</p>\r\n', '(+595)21 214 353', 'info@cardumenelbagre.com', '1', '1');
INSERT INTO `locales` VALUES ('2', 'Estudio 1', '<p>Urundey n&ordm; 920</p>\r\n\r\n<p>casi Paso de Patria</p>\r\n\r\n<p>Barrio Hip&oacute;dromo. Asunci&oacute;n</p>\r\n', '(+595)21 214 353', '', '0', '1');
INSERT INTO `locales` VALUES ('3', 'Estudio 2', '<p>Teniente Mart&iacute;nez Ramella n&ordm; 1080</p>\r\n\r\n<p>y Herminio Gim&eacute;nez</p>\r\n\r\n<p>B&ordm; Mburicao. Asunci&oacute;n</p>\r\n', '(+595)21 214 353', '', '0', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('10', 'Hinchas de Resistencia', '<p>Cliente: Oniria<br />\r\nMarca: Resistencia Sport Club<br />\r\nAgencia: Oniria TBWA<br />\r\nProductora: #CardumenElBagre</p>\r\n\r\n<p>Director / DF / Editor: Rojo Uhl<br />\r\nC&aacute;mara 2: Joe Barcovich<br />\r\nAC1: Augusto Flecha Paredes<br />\r\nJefa de Producci&oacute;n: Natilu Aguilar Alarc&oacute;n<br />\r\nEjecutivo de Cuentas: Antonino V&aacute;zquez<br />\r\nEjecutiva Comercial: Eva Rodr&iacute;guez<br />\r\nLocuci&oacute;n: Benicio Mart&iacute;nez<br />\r\nCaptura de Locuci&oacute;n / Post Producci&oacute;n de Sonido: Juan Guerrero<br />\r\nColorimetr&iacute;a: Marcelo Guido</p>\r\n', 'hinchas de resistencia,futbol,estadio,arbol,resistencia', '2017-08-16 15:33:51', '1');
INSERT INTO `post` VALUES ('11', 'Institucional ADM', '', 'ADM', '2015-10-08 15:42:09', '1');
INSERT INTO `post` VALUES ('12', 'Mundo Cerro', '', 'TV', '2017-09-01 15:39:27', '1');
INSERT INTO `post` VALUES ('13', 'Olimpia TV', '', 'Olimpia TV', '2017-09-14 15:38:36', '1');
INSERT INTO `post` VALUES ('14', 'Spot KÄSE', '', 'spot trebol', '2015-11-17 15:45:05', '1');
INSERT INTO `post` VALUES ('15', 'NEGRONI - #MOZÓGRAFOS', '', 'negroni', '2017-07-04 15:48:42', '1');
INSERT INTO `post` VALUES ('16', 'Sueñolar', '', 'Sueñolar', '2015-10-14 00:00:00', '1');
INSERT INTO `post` VALUES ('17', 'Sonidos de la Tierra', '', 'sonidos de la tierra', '2015-10-13 00:00:00', '1');
INSERT INTO `post` VALUES ('18', 'Fundación Club Cerro Porteño // Telebingo', '', 'Cerro Porteño', '2015-06-08 00:00:00', '1');
INSERT INTO `post` VALUES ('19', 'Rohayhu Paraguay', '', 'rohayhu paraguay', '2016-10-11 00:00:00', '1');
INSERT INTO `post` VALUES ('20', 'Promo Gamers', '', 'gamers', '2017-09-16 00:00:00', '1');
INSERT INTO `post` VALUES ('21', 'Promo Overtime', '', 'overtime', '2017-05-09 00:00:00', '1');
INSERT INTO `post` VALUES ('22', 'Promo Followers', '', 'followers', '2017-06-21 00:00:00', '1');
INSERT INTO `post` VALUES ('23', 'Pro documentales Bloque 1', '', 'agricultura,pro documentales,prodocumentales', '2016-07-11 00:00:00', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_archivo
-- ----------------------------
INSERT INTO `post_archivo` VALUES ('1', '10', '2', 'Ig_2m2MBjSs', '0', '1');
INSERT INTO `post_archivo` VALUES ('2', '10', '1', 'hinchas_resistencia.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('3', '11', '1', '11_', '0', '1');
INSERT INTO `post_archivo` VALUES ('4', '11', '2', 'yTbzrsRJ2IQ', '0', '1');
INSERT INTO `post_archivo` VALUES ('5', '12', '1', '12_', '0', '1');
INSERT INTO `post_archivo` VALUES ('6', '12', '2', 'dtHx9FtVKEs', '0', '1');
INSERT INTO `post_archivo` VALUES ('7', '13', '1', '13_', '0', '1');
INSERT INTO `post_archivo` VALUES ('8', '13', '2', 'pMVyWpCOIM0', '0', '1');
INSERT INTO `post_archivo` VALUES ('9', '13', '1', '13_Logo_Programa_Olimpia.png', '1', '1');
INSERT INTO `post_archivo` VALUES ('10', '12', '1', '12_Mundo_Cerro_logo.png', '1', '1');
INSERT INTO `post_archivo` VALUES ('11', '11', '1', '11_adm.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('12', '14', '1', '14_', '0', '1');
INSERT INTO `post_archivo` VALUES ('13', '14', '2', 'iRCacxextgE', '0', '1');
INSERT INTO `post_archivo` VALUES ('14', '14', '1', '14_KASE.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('15', '15', '1', '15_mozografos.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('16', '15', '2', 'MW8UOXjbB3o', '0', '1');
INSERT INTO `post_archivo` VALUES ('17', '16', '1', '16_suenolar.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('18', '16', '2', 'J878dHJaJi8', '0', '1');
INSERT INTO `post_archivo` VALUES ('19', '17', '1', '17_sonidos.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('20', '17', '2', 'v3nooQjBVNk', '0', '1');
INSERT INTO `post_archivo` VALUES ('21', '18', '1', '18_Fundacion_Cerro.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('22', '18', '2', 'w8i2rtaVNEQ', '0', '1');
INSERT INTO `post_archivo` VALUES ('23', '19', '1', '19_rohayhu.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('24', '19', '2', 'SG3Oigvzb4g', '0', '1');
INSERT INTO `post_archivo` VALUES ('25', '20', '1', '20_gamers.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('26', '20', '2', 'DpT6CGXMQiw', '0', '1');
INSERT INTO `post_archivo` VALUES ('27', '21', '1', '21_overtime.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('28', '21', '2', 'zA2NGAMu6jw', '0', '1');
INSERT INTO `post_archivo` VALUES ('29', '22', '1', '22_followers.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('30', '22', '2', 'bQe-tUbANgc', '0', '1');
INSERT INTO `post_archivo` VALUES ('31', '23', '1', '23_producus.jpg', '1', '1');
INSERT INTO `post_archivo` VALUES ('32', '23', '2', '1WbSmSVlvlo', '0', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post_categoria
-- ----------------------------
INSERT INTO `post_categoria` VALUES ('1', '10', '14');
INSERT INTO `post_categoria` VALUES ('2', '11', '14');
INSERT INTO `post_categoria` VALUES ('3', '12', '17');
INSERT INTO `post_categoria` VALUES ('4', '13', '17');
INSERT INTO `post_categoria` VALUES ('5', '14', '14');
INSERT INTO `post_categoria` VALUES ('6', '15', '14');
INSERT INTO `post_categoria` VALUES ('7', '16', '14');
INSERT INTO `post_categoria` VALUES ('8', '17', '14');
INSERT INTO `post_categoria` VALUES ('9', '18', '14');
INSERT INTO `post_categoria` VALUES ('10', '19', '14');
INSERT INTO `post_categoria` VALUES ('11', '20', '17');
INSERT INTO `post_categoria` VALUES ('12', '21', '17');
INSERT INTO `post_categoria` VALUES ('13', '22', '17');
INSERT INTO `post_categoria` VALUES ('14', '23', '17');

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
INSERT INTO `quienes_somos` VALUES ('1', '<p><strong>Cardumen el bagre</strong>&nbsp;es una compa&ntilde;&iacute;a dedicada a la realizaci&oacute;n de las m&aacute;s diversas producciones audiovisuales incluyendo programas de TV, institucionales, comerciales publicitarios, postproducci&oacute;n y postaudio para m&uacute;ltiples plataformas (radio, TV, digital, etc.)</p>\r\n\r\n<p>Nos desarrollamos con &eacute;xito desde el a&ntilde;o 2008 y producimos desde entonces para los canales m&aacute;s importantes de Paraguay.</p>\r\n\r\n<p>En publicidad y TV, la creatividad de un equipo humano liderado por j&oacute;venes realizadores y generadores de contenidos audiovisuales nos han permitido contar con importantes reconocimientos tanto a nivel nacional como internacional en el &aacute;mbito p&uacute;blico y privado.</p>\r\n\r\n<p>Tenemos 2 estudios de cine y TV con los cuales brindamos servicios publicitarios y televisivos y en los que trabajamos con los m&aacute;s importantes medios de comunicaci&oacute;n del pa&iacute;s.</p>\r\n\r\n<p>Con un estilo fresco y descontracturado en&nbsp;<strong>Cardumen el Bagre</strong>&nbsp;trabajamos incansablemente en ofrecer cada vez mayores productos audiovisuales, entretenidos y &oacute;ptimos para un mercado global cada vez m&aacute;s competitivo.</p>\r\n\r\n<p>Para el a&ntilde;o 2018 se vienen nuevos desaf&iacute;os fieles a nuestra principal caracter&iacute;stica: la innovaci&oacute;n constante, y en ese camino VAMOS CONTRA CORRIENTE.</p>\r\n', '<p>Apostamos por los nuevos formatos y buscamos nuevas experiencias para el espectador. De esta manera nuestro staff integrado por productores, realizadores y guionistas trabaja en la puesta en marcha de nuevos formatos audiovisuales atentos a las innovaciones artísticas y tecnológicas para seguir conquistando al público. Aprovechamos todos los formatos y todas las pantallas disponibles para contar historias, experiencias y emociones.</p>', 'equipo.jpg', 'estudio_2bcd.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of unidades_negocio
-- ----------------------------
INSERT INTO `unidades_negocio` VALUES ('1', 'PUBLICIDAD', '<ul>\r\n	<li>Spots de TV</li>\r\n	<li>Spots radiales</li>\r\n	<li>Documentales</li>\r\n	<li>Institucionales</li>\r\n	<li>Virales digitales</li>\r\n	<li>Adaptaciones de productos</li>\r\n	<li>Cobertura de eventos</li>\r\n	<li>Streaming</li>\r\n	<li>Servicios de producci&oacute;n</li>\r\n	<li>Postproducci&oacute;n</li>\r\n	<li>Postaudio</li>\r\n</ul>\r\n', '1');
INSERT INTO `unidades_negocio` VALUES ('2', 'TELEVISIÓN', '<ul>\r\n	<li>Desarrollo integral de contenidos</li>\r\n	<li>Servicios de Producci&oacute;n</li>\r\n	<li>Adaptaci&oacute;n de formatos</li>\r\n	<li>Producci&oacute;n integral de programas de televisi&oacute;n</li>\r\n	<li>Streaming</li>\r\n	<li>Estudio de TV 1 --&nbsp;400 metros cuadrados</li>\r\n	<li>Estudio de TV 2 -- 200 metros cuadrados</li>\r\n</ul>\r\n', '1');
SET FOREIGN_KEY_CHECKS=1;
