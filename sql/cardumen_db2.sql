-- MySQL dump 10.13  Distrib 5.6.37, for Linux (x86_64)
--
-- Host: localhost    Database: cardumen_db
-- ------------------------------------------------------
-- Server version	5.6.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_usuario`
--

DROP TABLE IF EXISTS `admin_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `imagen` varchar(80) DEFAULT NULL,
  `estado` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_usuario`
--

LOCK TABLES `admin_usuario` WRITE;
/*!40000 ALTER TABLE `admin_usuario` DISABLE KEYS */;
INSERT INTO `admin_usuario` VALUES (1,'Raul Ramirez','raul.ramirez@imagenwebhq.com','35077063093736d9c00a46b7325ebc968179dab0dea4c8387ff65a9b4848c15e',NULL,1),(2,'Marco Gauto','marco@cardumenelbagre.com','034869b3cc2fbbd18714278de6d57a7507dccecba18b0876ed351bb62fc31444',NULL,1);
/*!40000 ALTER TABLE `admin_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (14,'Guerrilla','guerrilla',1),(17,'Televisión','TV',1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'ABC','abc.png','',1),(2,'Budweiser','budweiser.png',NULL,1),(3,'Camel','camel.png',NULL,1),(4,'Cervepar','cervepar.png',NULL,1),(5,'Cuevas Hnos.','cuevas.png',NULL,1),(6,'Western Union','western-union.png',NULL,1),(7,'Financiera El Comercio','elcomercio.png',NULL,1),(8,'Giro País','giro_pais.png',NULL,1),(9,'Iman S.A.','iman.png',NULL,1),(10,'Johnson& Johnson','johnson&johnson.png',NULL,1),(11,'Kia','kia.png',NULL,1),(12,'La Consolidada','la-consolidada.png',NULL,1),(13,'Nestle','nestle.png',NULL,1),(14,'Pro Canal de la Produccion','pro_canal.png',NULL,1),(15,'RPC','rpc.png',NULL,1),(16,'Tigo Sports','tigo_sports.png',NULL,1),(22,'BBVA','22_bbva.png','',1);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_redes`
--

DROP TABLE IF EXISTS `config_redes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config_redes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) DEFAULT NULL,
  `fontawesome` varchar(60) DEFAULT NULL,
  `url` varchar(180) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_redes`
--

LOCK TABLES `config_redes` WRITE;
/*!40000 ALTER TABLE `config_redes` DISABLE KEYS */;
INSERT INTO `config_redes` VALUES (1,'behance','fa fa-behance-square','#',0),(2,'digg','fa fa-digg','#',0),(3,'facebook','fa fa-facebook','https://www.facebook.com/cardumenelbagre/',1),(4,'flickr','	fa fa-flickr','#',1),(5,'google-plus','fa fa-google-plus','#',1),(6,'linkedin','fa fa-linkedin','#',1),(7,'pinterest','fa fa-pinterest-p','#',1),(8,'skype','fa fa-skype','#',0),(9,'spotify','fa fa-spotify','#',0),(10,'twitter','fa fa-twitter','#',1),(11,'vimeo','fa fa-vimeo','#',0),(12,'vine','fa fa-vine','#',0),(13,'youtube','fa fa-youtube','https://www.youtube.com/user/ProductoraBagre',1);
/*!40000 ALTER TABLE `config_redes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_sitio`
--

DROP TABLE IF EXISTS `config_sitio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_sitio`
--

LOCK TABLES `config_sitio` WRITE;
/*!40000 ALTER TABLE `config_sitio` DISABLE KEYS */;
INSERT INTO `config_sitio` VALUES (1,'info@cardumenelbagre.com','-25.304984','-57.596620','(595 21) 214 353','Tenemos mucho tiempo por delante para crear los sueños que aún ni siquiera imaginamos soñar.','Steven Spielberg','pez-marker.png','frase1.jpg','camera-lens.jpg','¿Estás list@ para trabajar con nosotros?','Estamos felices de saber que querés ser parte de nuestro equipo!. Envíanos tus datos y adjuntanos tu CV.');
/*!40000 ALTER TABLE `config_sitio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_videos`
--

DROP TABLE IF EXISTS `config_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config_videos` (
  `id` int(11) unsigned NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_videos`
--

LOCK TABLES `config_videos` WRITE;
/*!40000 ALTER TABLE `config_videos` DISABLE KEYS */;
INSERT INTO `config_videos` VALUES (1,'Video de la Portada','hYTAyqz2dGg'),(2,'Reel','9lvptGdodCA');
/*!40000 ALTER TABLE `config_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'Raul','raul.chuky@gmail.com','Prueba','Esto es una prueba','2017-09-05 21:05:44',1);
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locales`
--

DROP TABLE IF EXISTS `locales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locales`
--

LOCK TABLES `locales` WRITE;
/*!40000 ALTER TABLE `locales` DISABLE KEYS */;
INSERT INTO `locales` VALUES (1,'Oficina Adminitrativa','<p>Teniente Mart&iacute;nez Ramella n&ordm; 1080</p>\r\n\r\n<p>y Herminio Gim&eacute;nez</p>\r\n\r\n<p>Barrio Mburicao. Asunci&oacute;n</p>\r\n','(+595)21 214 353','info@cardumenelbagre.com',1,1),(2,'Estudio 1','<p>Urundey n&ordm; 920</p>\r\n\r\n<p>casi Paso de Patria</p>\r\n\r\n<p>Barrio Hip&oacute;dromo. Asunci&oacute;n</p>\r\n','(+595)21 214 353','',0,1),(3,'Estudio 2','<p>Teniente Mart&iacute;nez Ramella n&ordm; 1080</p>\r\n\r\n<p>y Herminio Gim&eacute;nez</p>\r\n\r\n<p>B&ordm; Mburicao. Asunci&oacute;n</p>\r\n','(+595)21 214 353','',0,1);
/*!40000 ALTER TABLE `locales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` text,
  `keywords` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,'Cardumen el Bagre','Cardumen el bagre es una compañía dedicada a la realización de las más diversas producciones audiovisuales incluyendo programas de TV, institucionales, comerciales y storytelling.','el bagre productora, cardumen el bagre, el bagre, productora, tv, television');
/*!40000 ALTER TABLE `metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `contenido` text,
  `tags` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (10,'Hinchas de Resistencia','<p>Cliente: Oniria<br />\r\nMarca: Resistencia Sport Club<br />\r\nAgencia: Oniria TBWA<br />\r\nProductora: #CardumenElBagre</p>\r\n\r\n<p>Director / DF / Editor: Rojo Uhl<br />\r\nC&aacute;mara 2: Joe Barcovich<br />\r\nAC1: Augusto Flecha Paredes<br />\r\nJefa de Producci&oacute;n: Natilu Aguilar Alarc&oacute;n<br />\r\nEjecutivo de Cuentas: Antonino V&aacute;zquez<br />\r\nEjecutiva Comercial: Eva Rodr&iacute;guez<br />\r\nLocuci&oacute;n: Benicio Mart&iacute;nez<br />\r\nCaptura de Locuci&oacute;n / Post Producci&oacute;n de Sonido: Juan Guerrero<br />\r\nColorimetr&iacute;a: Marcelo Guido</p>\r\n','hinchas de resistencia,futbol,estadio,arbol,resistencia','2017-08-16 15:33:51',1),(11,'Institucional ADM','','ADM','2015-10-08 15:42:09',1),(12,'Mundo Cerro','','TV','2017-09-01 15:39:27',1),(13,'Olimpia TV','','Olimpia TV','2017-09-14 15:38:36',1),(14,'Spot KÄSE','','spot trebol','2015-11-17 15:45:05',1),(15,'NEGRONI - #MOZÓGRAFOS','','negroni','2017-07-04 15:48:42',1),(16,'Sueñolar','','Sueñolar','2015-10-14 00:00:00',1),(17,'Sonidos de la Tierra','','sonidos de la tierra','2015-10-13 00:00:00',1),(18,'Fundación Club Cerro Porteño // Telebingo','','Cerro Porteño','2015-06-08 00:00:00',1),(19,'Rohayhu Paraguay','','rohayhu paraguay','2016-10-11 00:00:00',1),(20,'Promo Gamers','','gamers','2017-09-16 00:00:00',1),(21,'Promo Overtime','','overtime','2017-05-09 00:00:00',1),(22,'Promo Followers','','followers','2017-06-21 00:00:00',1),(23,'Pro documentales Bloque 1','','agricultura,pro documentales,prodocumentales','2016-07-11 00:00:00',1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_archivo`
--

DROP TABLE IF EXISTS `post_archivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_archivo`
--

LOCK TABLES `post_archivo` WRITE;
/*!40000 ALTER TABLE `post_archivo` DISABLE KEYS */;
INSERT INTO `post_archivo` VALUES (1,10,2,'Ig_2m2MBjSs',0,1),(2,10,1,'hinchas_resistencia.jpg',1,1),(3,11,1,'11_',0,1),(4,11,2,'yTbzrsRJ2IQ',0,1),(5,12,1,'12_',0,1),(6,12,2,'dtHx9FtVKEs',0,1),(7,13,1,'13_',0,1),(8,13,2,'pMVyWpCOIM0',0,1),(9,13,1,'13_Logo_Programa_Olimpia.png',1,1),(10,12,1,'12_Mundo_Cerro_logo.png',1,1),(11,11,1,'11_adm.jpg',1,1),(12,14,1,'14_',0,1),(13,14,2,'iRCacxextgE',0,1),(14,14,1,'14_KASE.jpg',1,1),(15,15,1,'15_mozografos.jpg',1,1),(16,15,2,'MW8UOXjbB3o',0,1),(17,16,1,'16_suenolar.jpg',1,1),(18,16,2,'J878dHJaJi8',0,1),(19,17,1,'17_sonidos.jpg',1,1),(20,17,2,'v3nooQjBVNk',0,1),(21,18,1,'18_Fundacion_Cerro.jpg',1,1),(22,18,2,'w8i2rtaVNEQ',0,1),(23,19,1,'19_rohayhu.jpg',1,1),(24,19,2,'SG3Oigvzb4g',0,1),(25,20,1,'20_gamers.jpg',1,1),(26,20,2,'DpT6CGXMQiw',0,1),(27,21,1,'21_overtime.jpg',1,1),(28,21,2,'zA2NGAMu6jw',0,1),(29,22,1,'22_followers.jpg',1,1),(30,22,2,'bQe-tUbANgc',0,1),(31,23,1,'23_producus.jpg',1,1),(32,23,2,'1WbSmSVlvlo',0,1);
/*!40000 ALTER TABLE `post_archivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categoria`
--

DROP TABLE IF EXISTS `post_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categoria`
--

LOCK TABLES `post_categoria` WRITE;
/*!40000 ALTER TABLE `post_categoria` DISABLE KEYS */;
INSERT INTO `post_categoria` VALUES (1,10,14),(2,11,14),(3,12,17),(4,13,17),(5,14,14),(6,15,14),(7,16,14),(8,17,14),(9,18,14),(10,19,14),(11,20,17),(12,21,17),(13,22,17),(14,23,17);
/*!40000 ALTER TABLE `post_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quienes_somos`
--

DROP TABLE IF EXISTS `quienes_somos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quienes_somos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quienes_somos` text,
  `el_equipo` text,
  `img_equipo` varchar(120) DEFAULT NULL,
  `img_background` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quienes_somos`
--

LOCK TABLES `quienes_somos` WRITE;
/*!40000 ALTER TABLE `quienes_somos` DISABLE KEYS */;
INSERT INTO `quienes_somos` VALUES (1,'<p><strong>Cardumen el bagre</strong>&nbsp;es una compa&ntilde;&iacute;a dedicada a la realizaci&oacute;n de las m&aacute;s diversas producciones audiovisuales incluyendo programas de TV, institucionales, comerciales publicitarios, postproducci&oacute;n y postaudio para m&uacute;ltiples plataformas (radio, TV, digital, etc.)</p>\r\n\r\n<p>Nos desarrollamos con &eacute;xito desde el a&ntilde;o 2008 y producimos desde entonces para los canales m&aacute;s importantes de Paraguay.</p>\r\n\r\n<p>En publicidad y TV, la creatividad de un equipo humano liderado por j&oacute;venes realizadores y generadores de contenidos audiovisuales nos han permitido contar con importantes reconocimientos tanto a nivel nacional como internacional en el &aacute;mbito p&uacute;blico y privado.</p>\r\n\r\n<p>Tenemos 2 estudios de cine y TV con los cuales brindamos servicios publicitarios y televisivos y en los que trabajamos con los m&aacute;s importantes medios de comunicaci&oacute;n del pa&iacute;s.</p>\r\n\r\n<p>Con un estilo fresco y descontracturado en&nbsp;<strong>Cardumen el Bagre</strong>&nbsp;trabajamos incansablemente en ofrecer cada vez mayores productos audiovisuales, entretenidos y &oacute;ptimos para un mercado global cada vez m&aacute;s competitivo.</p>\r\n\r\n<p>Para el a&ntilde;o 2018 se vienen nuevos desaf&iacute;os fieles a nuestra principal caracter&iacute;stica: la innovaci&oacute;n constante, y en ese camino VAMOS CONTRA CORRIENTE.</p>\r\n','<p>Apostamos por los nuevos formatos y buscamos nuevas experiencias para el espectador. De esta manera nuestro staff integrado por productores, realizadores y guionistas trabaja en la puesta en marcha de nuevos formatos audiovisuales atentos a las innovaciones artísticas y tecnológicas para seguir conquistando al público. Aprovechamos todos los formatos y todas las pantallas disponibles para contar historias, experiencias y emociones.</p>','equipo.jpg','FACHADA2.jpg');
/*!40000 ALTER TABLE `quienes_somos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_archivo`
--

DROP TABLE IF EXISTS `tipo_archivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_archivo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_archivo`
--

LOCK TABLES `tipo_archivo` WRITE;
/*!40000 ALTER TABLE `tipo_archivo` DISABLE KEYS */;
INSERT INTO `tipo_archivo` VALUES (1,'Imagen',NULL,1),(2,'Video',NULL,1),(3,'Word',NULL,1),(4,'Excel',NULL,1),(5,'Power Point',NULL,1);
/*!40000 ALTER TABLE `tipo_archivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabaja`
--

DROP TABLE IF EXISTS `trabaja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabaja`
--

LOCK TABLES `trabaja` WRITE;
/*!40000 ALTER TABLE `trabaja` DISABLE KEYS */;
INSERT INTO `trabaja` VALUES (1,'Raul','raul.chuky@gmail.com','0976901801','ñhola','1_publicacion-nissan.jpg','2017-08-05 07:55:05',1),(2,'Raul 2','raul.chuky@gmail.com','123456','Esto es otro CV adjuntado. Archivo PDF','2_Propuesta-cadiem-Administrador1.pdf','2017-08-05 07:56:29',1),(3,'Raul word','raul.chuky@gmail.com','987654','Archivo WORD','3_Presupuesto-Cadiem-Cambios.docx','2017-08-05 07:59:14',1);
/*!40000 ALTER TABLE `trabaja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidades_negocio`
--

DROP TABLE IF EXISTS `unidades_negocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidades_negocio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidades_negocio`
--

LOCK TABLES `unidades_negocio` WRITE;
/*!40000 ALTER TABLE `unidades_negocio` DISABLE KEYS */;
INSERT INTO `unidades_negocio` VALUES (1,'PUBLICIDAD','<p>Un equipo de realizadores trabaja en la producción de varias propuestas publicitarias en anuencia con las agencias más importantes de la región.</p>',1),(2,'TELEVISIÓN','<p>Las posibilidades en televisión al contar con estudios han maximizado las oportunidades de productos televisivos de la productora. En campo nuestros programas traen la frescura que por lo general lo canales no tienen y estos productos marcan una diferencia, una mirada distinta y arriesgada que atrapa.</p>',1);
/*!40000 ALTER TABLE `unidades_negocio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-18 23:50:13
