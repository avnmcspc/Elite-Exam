-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: sample
-- ------------------------------------------------------
-- Server version	8.0.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artists`
--

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;
INSERT INTO `artists` VALUES (1,'AB6IX',NULL,NULL),(2,'aespa',NULL,NULL),(3,'Apink',NULL,NULL),(4,'ATEEZ',NULL,NULL),(5,'BAE173',NULL,NULL),(6,'BamBam',NULL,NULL),(7,'Bang Yongguk',NULL,NULL),(8,'Billlie',NULL,NULL),(9,'Blitzers',NULL,NULL),(10,'Bolbbalgan4',NULL,NULL),(11,'Brave Girls',NULL,NULL),(12,'BTOB',NULL,NULL),(13,'Choi Yena',NULL,NULL),(14,'Cravity',NULL,NULL),(15,'Cherry Bullet',NULL,NULL),(16,'Def.',NULL,NULL),(17,'DKZ',NULL,NULL),(18,'Dreamcatcher',NULL,NULL),(19,'Drippin',NULL,NULL),(20,'E\'LAST',NULL,NULL),(21,'Enhypen',NULL,NULL),(22,'Enhypen',NULL,NULL),(23,'Epex',NULL,NULL),(24,'Epik High',NULL,NULL),(25,'Eric Nam',NULL,NULL),(26,'Everglow',NULL,NULL),(27,'fromis_9',NULL,NULL),(28,'(G)I-dle',NULL,NULL),(29,'Ghost9',NULL,NULL),(30,'Ha Sungwoon',NULL,NULL),(31,'Highlight',NULL,NULL),(32,'ILY:1',NULL,NULL),(33,'IVE',NULL,NULL),(34,'IVE',NULL,NULL),(35,'Jinjin & Rocky',NULL,NULL),(36,'Just B',NULL,NULL),(37,'Kai',NULL,NULL),(38,'Kang Hyewon',NULL,NULL),(39,'Kep1er',NULL,NULL),(40,'Kihyun',NULL,NULL),(41,'Kim Jaehwan',NULL,NULL),(42,'Kim Junsu',NULL,NULL),(43,'Kim Sungkyu',NULL,NULL),(44,'Kim Wooseok',NULL,NULL),(45,'Kim Yohan',NULL,NULL),(46,'Kingdom',NULL,NULL),(47,'Kwon Eunbi',NULL,NULL),(48,'Kyuhyun',NULL,NULL),(49,'Lee Seokhoon',NULL,NULL),(50,'Lee Seungyoon',NULL,NULL),(51,'Lisa',NULL,NULL),(52,'LUNA',NULL,NULL),(53,'Max Changmin',NULL,NULL),(54,'Mirae',NULL,NULL),(55,'Miyeon',NULL,NULL),(56,'Monsta X',NULL,NULL),(57,'Monsta X',NULL,NULL),(58,'Moonbin & Sanha',NULL,NULL),(59,'Moonbyul',NULL,NULL),(60,'Moonbyul',NULL,NULL),(61,'NCT 127',NULL,NULL),(62,'NCT 127',NULL,NULL),(63,'NCT 2021',NULL,NULL),(64,'NCT Dream',NULL,NULL),(65,'NINE.i',NULL,NULL),(66,'NMIXX',NULL,NULL),(67,'NU\'EST',NULL,NULL),(68,'Oh My Girl',NULL,NULL),(69,'Omega X',NULL,NULL),(70,'Onew',NULL,NULL),(71,'ONEWE',NULL,NULL),(72,'ONF',NULL,NULL),(73,'OnlyOneOf',NULL,NULL),(74,'P1Harmony',NULL,NULL),(75,'Pentagon',NULL,NULL),(76,'Purple Kiss',NULL,NULL),(77,'Ravi',NULL,NULL),(78,'Red Velvet',NULL,NULL),(79,'Rocket Punch',NULL,NULL),(80,'Seventeen',NULL,NULL),(81,'Solar',NULL,NULL),(82,'SMTOWN',NULL,NULL),(83,'SMTOWN',NULL,NULL),(84,'SMTOWN',NULL,NULL),(85,'SMTOWN',NULL,NULL),(86,'SMTOWN',NULL,NULL),(87,'SMTOWN',NULL,NULL),(88,'SMTOWN',NULL,NULL),(89,'SMTOWN',NULL,NULL),(90,'SMTOWN',NULL,NULL),(91,'SMTOWN',NULL,NULL),(92,'Suho',NULL,NULL),(93,'StayC',NULL,NULL),(94,'Stray Kids',NULL,NULL),(95,'Stray Kids',NULL,NULL),(96,'Super Junior',NULL,NULL),(97,'Super Junior - D&E',NULL,NULL),(98,'Taeyeon',NULL,NULL),(99,'Tempest',NULL,NULL),(100,'Tan',NULL,NULL),(101,'The Boyz',NULL,NULL),(102,'The Boyz',NULL,NULL),(103,'Treasure',NULL,NULL),(104,'Trendz',NULL,NULL),(105,'Twice',NULL,NULL),(106,'UP10TION',NULL,NULL),(107,'Verivery',NULL,NULL),(108,'Victon',NULL,NULL),(109,'Viviz',NULL,NULL),(110,'Weeekly',NULL,NULL),(111,'WEi',NULL,NULL),(112,'Wheein',NULL,NULL),(113,'Wonho',NULL,NULL),(114,'Wonpil',NULL,NULL),(115,'WJSN Chocome',NULL,NULL),(116,'Younha',NULL,NULL),(117,'Yoon Jisung',NULL,NULL),(118,'Younite',NULL,NULL),(119,'Yuju',NULL,NULL);
/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-29 19:11:09
