/*
Navicat MySQL Data Transfer

Source Server         : localhot
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : cardumen_db

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-05 21:34:56
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
SET FOREIGN_KEY_CHECKS=1;
