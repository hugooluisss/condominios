CREATE DATABASE  IF NOT EXISTS `coachusa_armonihouse` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `coachusa_armonihouse`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: armoni.house    Database: coachusa_armonihouse
-- ------------------------------------------------------
-- Server version	5.5.50-cll

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
-- Table structure for table `infraccion`
--

DROP TABLE IF EXISTS `infraccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infraccion` (
  `idInfraccion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idDepartamento` int(10) unsigned NOT NULL,
  `idEstado` smallint(5) unsigned NOT NULL,
  `idUsuario` bigint(20) unsigned NOT NULL,
  `idArea` int(10) unsigned NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `servidor` smallint(5) unsigned DEFAULT NULL,
  `camara` smallint(5) unsigned DEFAULT NULL,
  `descripcion` text,
  `inciso` char(10) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT '0.00',
  `ocasion` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`idInfraccion`),
  KEY `i_departamento` (`idDepartamento`),
  KEY `i_estado` (`idEstado`),
  KEY `i_usuario` (`idUsuario`),
  KEY `i_area` (`idArea`),
  CONSTRAINT `fk_areainfraccion` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_departamentoinfraccion` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estadoinfraccion` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_estadousuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infraccion`
--

LOCK TABLES `infraccion` WRITE;
/*!40000 ALTER TABLE `infraccion` DISABLE KEYS */;
INSERT INTO `infraccion` VALUES (19,5,4,4,6,'2016-06-23','14:19:00',2,13,'EL NIÑO ESTABA JUGANDO PELOTA AKJBFKJABF','9',750.00,1),(20,50,3,4,9,'2016-06-20','15:51:00',1,8,'Niños jugando con patines en área de vestibulo','2',750.00,1),(21,50,2,4,9,'2016-06-20','15:56:00',1,8,'Niños jugando con patines en área de motor lobby corriendo','2',750.00,1),(22,50,2,6,9,'2016-06-20','17:38:00',1,8,'Niños jugando con patines en lobby','2',7500.00,5),(23,50,2,6,9,'2016-06-21','16:28:00',1,8,'Niños jugando con balón en vestibulo','2',7500.00,4),(24,50,2,6,9,'2016-06-22','16:30:00',1,8,'Niños brincando en los sillones del área de vestíbulos','2',7500.00,3),(25,50,2,6,9,'2016-06-24','17:39:00',1,8,'Niños jugando con trompos en área de motor lobby','2',3750.00,2),(26,50,2,6,8,'2016-06-08','17:54:00',3,1,'personal de servicio domestico departamento 605  baja en elevador principal estando en función el de servicio. sin compañía de residente ','11',750.00,1),(27,50,2,6,8,'2016-06-14','17:56:00',3,1,'Personal de servicio baja por elevador principal sin compañía de residente','1',750.00,1),(28,50,2,6,8,'2016-06-17','17:57:00',3,1,'Chófer sube por elevador principal sin compañía de residente','11',3750.00,2),(29,50,2,6,8,'2016-06-20','17:58:00',3,1,'personal de servicio baja por elevador principal sin compañía de residente estando en uso elevador de servicio','11',7500.00,3),(30,50,2,6,9,'2016-06-25','13:41:00',1,29,'se observa a menor con patineta, en el lobby fuego','2',750.00,1),(31,50,1,6,9,'2016-06-25','13:40:00',1,29,'se observa a niño jugando en patineta','2',750.00,1),(32,50,1,6,9,'2016-06-25','13:40:00',1,29,'se observa amenores jugando en bicicleta en vestibulo','2',750.00,1),(33,50,2,6,9,'2016-06-25','13:41:00',1,29,'niños jugando en patines ','2',3750.00,2);
/*!40000 ALTER TABLE `infraccion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-26  0:43:30
