-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB-1:10.4.11+maria~bionic-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Company`
--

DROP TABLE IF EXISTS `Company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Company` (
  `Company_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Company_Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Company`
--

LOCK TABLES `Company` WRITE;
/*!40000 ALTER TABLE `Company` DISABLE KEYS */;
INSERT INTO `Company` VALUES (1,'BeCode'),(2,'test'),(3,'Hotel');
/*!40000 ALTER TABLE `Company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Department`
--

DROP TABLE IF EXISTS `Department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Department` (
  `id_Department` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Department_Name` varchar(45) DEFAULT NULL,
  `Company_Company_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Department`),
  KEY `fk_Department_Company1_idx` (`Company_Company_id`),
  CONSTRAINT `fk_Department_Company1` FOREIGN KEY (`Company_Company_id`) REFERENCES `Company` (`Company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Department`
--

LOCK TABLES `Department` WRITE;
/*!40000 ALTER TABLE `Department` DISABLE KEYS */;
INSERT INTO `Department` VALUES (2,'General',1),(3,'test',2),(5,'Cleaning Service',3);
/*!40000 ALTER TABLE `Department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employees` (
  `id_Employees` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Employees_Name` varchar(45) DEFAULT NULL,
  `Department_id_Department` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Employees`),
  KEY `fk_Employees_Department1_idx` (`Department_id_Department`),
  CONSTRAINT `fk_Employees_Department1` FOREIGN KEY (`Department_id_Department`) REFERENCES `Department` (`id_Department`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` VALUES (2,'Jango',2),(3,'test',3),(4,'Johnny',5),(5,'Filip',2),(6,'Bernardo',2),(7,'Kevin',2);
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Review`
--

DROP TABLE IF EXISTS `Review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Review` (
  `id_Review` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Review_text` varchar(500) DEFAULT NULL,
  `Review_Rating` varchar(45) DEFAULT NULL,
  `Timestamp` timestamp(6) NULL DEFAULT current_timestamp(),
  `Employees_id_Employees` int(10) unsigned NOT NULL,
  `Department_id_Department` int(10) unsigned NOT NULL,
  `Company_Company_id` int(10) unsigned NOT NULL,
  `Tourist_id_Tourist` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_Review`),
  KEY `fk_Review_Employees1_idx` (`Employees_id_Employees`),
  KEY `fk_Review_Department1_idx` (`Department_id_Department`),
  KEY `fk_Review_Company1_idx` (`Company_Company_id`),
  KEY `fk_Review_Tourist1_idx` (`Tourist_id_Tourist`),
  CONSTRAINT `fk_Review_Company1` FOREIGN KEY (`Company_Company_id`) REFERENCES `Company` (`Company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Review_Department1` FOREIGN KEY (`Department_id_Department`) REFERENCES `Department` (`id_Department`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Review_Employees1` FOREIGN KEY (`Employees_id_Employees`) REFERENCES `Employees` (`id_Employees`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Review_Tourist1` FOREIGN KEY (`Tourist_id_Tourist`) REFERENCES `Tourist` (`id_Tourist`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Review`
--

LOCK TABLES `Review` WRITE;
/*!40000 ALTER TABLE `Review` DISABLE KEYS */;
INSERT INTO `Review` VALUES (2,'terrible','1','2019-11-27 10:46:47.000000',2,2,1,1),(4,'good','5','2019-11-29 09:21:37.000000',3,2,2,1),(6,'not so good','5','2019-12-11 13:31:59.000000',2,2,1,3),(7,'Room was clean','5','2019-12-12 08:19:06.000000',4,5,3,4),(8,'Goede Service','4','2019-12-12 08:40:21.000000',2,2,1,5),(9,'Room was very clean','5','2019-12-12 08:42:48.000000',4,5,3,6),(10,'jfjlsqjlsq','5','2019-12-12 08:46:51.000000',4,5,3,7),(11,'Great job!','5','2020-01-07 08:17:47.000000',4,5,3,8);
/*!40000 ALTER TABLE `Review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tourist`
--

DROP TABLE IF EXISTS `Tourist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Tourist` (
  `id_Tourist` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Tourist_Name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Tourist`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tourist`
--

LOCK TABLES `Tourist` WRITE;
/*!40000 ALTER TABLE `Tourist` DISABLE KEYS */;
INSERT INTO `Tourist` VALUES (1,'Jef'),(2,'gsd'),(3,'test'),(4,'Jef'),(5,'Jan'),(6,'Tony'),(7,'Tmmy'),(8,'Ricky');
/*!40000 ALTER TABLE `Tourist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-07 10:42:34
