CREATE DATABASE  IF NOT EXISTS `procesos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `procesos`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: procesos
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

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
-- Table structure for table `pc_formulario`
--

DROP TABLE IF EXISTS `pc_formulario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pc_formulario` (
  `idformulario` int(11) NOT NULL AUTO_INCREMENT,
  `numeroproceso` varchar(100) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `fechacreacion` date NOT NULL,
  `sede` varchar(120) DEFAULT NULL,
  `presupuesto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idformulario`),
  UNIQUE KEY `numeroproceso_UNIQUE` (`numeroproceso`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc_formulario`
--

LOCK TABLES `pc_formulario` WRITE;
/*!40000 ALTER TABLE `pc_formulario` DISABLE KEYS */;
INSERT INTO `pc_formulario` VALUES (1,'00000000','Descripcion','2018-09-22','México',100.00),(2,'00000001','Descripcion','2018-09-22','México',200.00),(3,'00000002','AAAA','2018-09-22','Peru',200000.00),(4,'00000003','sfdas','2018-09-22','México',100.00),(5,'00000004','Descripcion','2018-09-23','México',5000.00),(6,'00000005','Descriopcio','2018-09-23','México',200000.00),(7,'00000006','Decripción','2018-09-23','Bogotá',158420.00),(8,'00000007','Descripcion','2018-09-23','México',200000.00);
/*!40000 ALTER TABLE `pc_formulario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-23 16:26:31
