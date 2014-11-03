/*
Navicat MySQL Data Transfer

Source Server         : ConexionRoot
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : agenda

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-09-05 14:33:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datos_personales
-- ----------------------------
DROP TABLE IF EXISTS `datos_personales`;
CREATE TABLE `datos_personales` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `EDAD` int(11) NOT NULL,
  `TELEFONO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_REFERENCE_1` (`NOMBRE`),
  CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`NOMBRE`) REFERENCES `usuario` (`NOMBRE`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `NOMBRE` varchar(40) NOT NULL,
  `PASSWORD` varchar(500) NOT NULL,
  PRIMARY KEY (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
