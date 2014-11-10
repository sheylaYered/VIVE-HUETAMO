/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50529
Source Host           : 127.0.0.1:3307
Source Database       : vivehuetamo

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2014-11-10 13:29:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lugares
-- ----------------------------
DROP TABLE IF EXISTS `lugares`;
CREATE TABLE `lugares` (
  `ID_LUGARES` varchar(4) NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `DIRECCION` varchar(60) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  PRIMARY KEY (`ID_LUGARES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `ID_NOTICIAS` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `NOTICIA` varchar(300) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_NOTICIAS`),
  KEY `FK_NOTICIAS_REFERENCE_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `FK_NOTICIAS_REFERENCE_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for personajes_destacados
-- ----------------------------
DROP TABLE IF EXISTS `personajes_destacados`;
CREATE TABLE `personajes_destacados` (
  `ID_PERSONAJES` int(11) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `ANIO` int(11) NOT NULL,
  `OCUPACION` varchar(80) NOT NULL,
  `ANIO_NACIMIENTO` int(11) NOT NULL,
  PRIMARY KEY (`ID_PERSONAJES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tradiciones_costumbres
-- ----------------------------
DROP TABLE IF EXISTS `tradiciones_costumbres`;
CREATE TABLE `tradiciones_costumbres` (
  `ID_TRADICIONES` varchar(15) NOT NULL,
  `NOMBRE` varchar(40) DEFAULT NULL,
  `DESCRIPCION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ID_TRADICIONES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `CONTRASENA` varchar(50) NOT NULL,
  `NICK` varchar(20) NOT NULL,
  `DIRECCION` varchar(60) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `SEXO` char(1) DEFAULT NULL,
  `CORREO` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
