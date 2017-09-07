/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : cardumen_db

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-06 22:16:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_usuario`
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
-- Table structure for `contacto`
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
-- Table structure for `quienes_somos`
-- ----------------------------
DROP TABLE IF EXISTS `quienes_somos`;
CREATE TABLE `quienes_somos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `quienes_somos` text,
  `el_equipo` text,
  `img_equipo` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quienes_somos
-- ----------------------------
INSERT INTO `quienes_somos` VALUES ('1', '&lt;p&gt;&lt;strong&gt;Lorem ipsum dolor&lt;/strong&gt; sit amet, consectetur adipiscing elit. Nulla finibus tincidunt lorem, viverra consectetur libero consequat a. Pellentesque finibus ac neque a efficitur. Pellentesque tortor purus, tempor ut massa non, ultrices blandit felis. Etiam porta orci sapien, vitae auctor augue sollicitudin quis. Nam a metus et leo pharetra feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi vitae mollis ligula. Praesent elit purus, dapibus non iaculis et, convallis quis enim. Vivamus eu est turpis. Vivamus posuere, purus laoreet malesuada sodales, felis magna pharetra massa, ac aliquet erat lacus a felis. Integer euismod urna vel quam iaculis, ac convallis tortor consequat.&lt;/p&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus tincidunt lorem, viverra consectetur libero consequat a. Pellentesque finibus ac neque a efficitur. Pellentesque tortor purus, tempor ut massa non, ultrices blandit felis. Etiam porta orci sapien, vitae auctor augue sollicitudin quis. Nam a metus et leo pharetra feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi vitae mollis ligula. Praesent elit purus, dapibus non iaculis et, convallis quis enim. Vivamus eu est turpis. Vivamus posuere, purus laoreet malesuada sodales, felis magna pharetra massa, ac aliquet erat lacus a felis. Integer euismod urna vel quam iaculis, ac convallis tortor consequat.&lt;/p&gt;', '&lt;p&gt;&lt;strong&gt;Lorem &lt;/strong&gt;ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus tincidunt lorem, viverra consectetur libero consequat a. Pellentesque finibus ac neque a efficitur. Pellentesque tortor purus, tempor ut massa non, ultrices blandit felis. Etiam porta orci sapien, vitae auctor augue sollicitudin quis. Nam a metus et leo pharetra feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi vitae mollis ligula. Praesent elit purus, dapibus non iaculis et, convallis quis enim. Vivamus eu est turpis. Vivamus posuere, purus laoreet malesuada sodales, felis magna pharetra massa, ac aliquet erat lacus a felis. Integer euismod urna vel quam iaculis, ac convallis tortor consequat.&lt;/p&gt;', 'equipo.jpg');
