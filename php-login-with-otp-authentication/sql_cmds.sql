-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: emails
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fee_struct_mgmt`
--

DROP TABLE IF EXISTS `fee_struct_mgmt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fee_struct_mgmt` (
  `pcm_perc` int DEFAULT NULL,
  `eql_fee` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fee_struct_mgmt`
--

LOCK TABLES `fee_struct_mgmt` WRITE;
/*!40000 ALTER TABLE `fee_struct_mgmt` DISABLE KEYS */;
INSERT INTO `fee_struct_mgmt` VALUES (90,100000),(88,500000),(70,600000);
/*!40000 ALTER TABLE `fee_struct_mgmt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fee_struct_nri`
--

DROP TABLE IF EXISTS `fee_struct_nri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fee_struct_nri` (
  `pcm_perc` int DEFAULT NULL,
  `eql_fee` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fee_struct_nri`
--

LOCK TABLES `fee_struct_nri` WRITE;
/*!40000 ALTER TABLE `fee_struct_nri` DISABLE KEYS */;
INSERT INTO `fee_struct_nri` VALUES (80,50000);
/*!40000 ALTER TABLE `fee_struct_nri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_colll`
--

DROP TABLE IF EXISTS `info_colll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_colll` (
  `hashval` int DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `PCM_percentage` float NOT NULL,
  `admi_type` varchar(20) NOT NULL,
  `prefered_batch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_colll`
--

LOCK TABLES `info_colll` WRITE;
/*!40000 ALTER TABLE `info_colll` DISABLE KEYS */;
INSERT INTO `info_colll` VALUES (69931,'Abay Sevi',71.2,'MGMT','CSE'),(74015,'Yoyo Freak ',70,'MGMT','CSE'),(42355,'ronak warrior',80,'MGMT','CSE'),(96638,'ronak warrior',80,'NRI','CSE'),(77891,'ronak warrior',88,'MGMT','CSE'),(42443,'ronak warrior',90,'MGMT','CSE'),(28032,'ronak warrior',88,'MGMT','CSE'),(13477,'Abay Sevi',40,'MGMT','CSE'),(26173,'Abay Sevi',70,'MGMT','CSE'),(78232,'test name yo',88,'MGMT','CSE'),(63664,'Test nameTaa',95.4,'MGMT','CSE'),(95288,'Test nameTaa',95.4,'MGMT','CSE'),(79951,'Test nameTaa',95.4,'MGMT','CSE'),(68228,'yoboy',88.5,'MGMT','CSE'),(58093,'yoboyrock',88.5,'MGMT','CSE'),(13660,'yoboyrock',88.5,'MGMT','CSE'),(38688,'yoboyrock',88.5,'MGMT','CSE'),(93176,'yoyboooooy',88.5,'MGMT','CSE'),(43053,'basicboy',88.5,'MGMT','ME'),(12599,'facetime',88.5,'MGMT','CSE'),(35560,'facetimeyo',88.5,'MGMT','CSE'),(69153,'yvvyghgh',88,'MGMT','CSE'),(90114,'yvvyghgh',88,'MGMT','CSE'),(33123,'Abay Sevi',88,'MGMT','CSE'),(30129,'Abay Sevi',88,'MGMT','CSE'),(17652,'Abay Sevi',88,'MGMT','CSE'),(81464,'bob rock',88,'NRI','ME'),(20585,'Sreejith',70,'MGMT','CSE');
/*!40000 ALTER TABLE `info_colll` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otp_expiry`
--

DROP TABLE IF EXISTS `otp_expiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otp_expiry` (
  `otp` varchar(10) NOT NULL,
  `is_expired` int NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otp_expiry`
--

LOCK TABLES `otp_expiry` WRITE;
/*!40000 ALTER TABLE `otp_expiry` DISABLE KEYS */;
INSERT INTO `otp_expiry` VALUES ('338192',0,'2022-04-11 03:39:12'),('145218',0,'2022-04-11 03:39:38'),('704128',1,'2022-04-11 03:41:35'),('130192',1,'2022-04-11 03:47:01'),('310502',1,'2022-04-11 04:15:07'),('390051',1,'2022-04-11 04:27:58'),('838026',1,'2022-04-11 04:51:16'),('255632',1,'2022-04-11 05:05:49'),('164983',0,'2022-04-11 05:35:13'),('122093',0,'2022-04-11 05:35:42'),('881932',1,'2022-04-11 05:59:51'),('447679',1,'2022-04-11 06:52:26'),('225801',1,'2022-04-11 16:02:32'),('895500',1,'2022-04-11 16:09:05'),('958718',1,'2022-04-11 16:16:37'),('610205',1,'2022-04-11 16:21:22'),('180635',1,'2022-04-12 03:49:47'),('413012',1,'2022-04-19 04:35:11'),('852307',1,'2022-04-19 04:44:25'),('161299',1,'2022-04-19 06:08:06'),('587020',1,'2022-04-19 06:16:58'),('374478',1,'2022-04-19 10:40:22'),('681670',1,'2022-04-19 11:16:10'),('123466',1,'2022-04-20 03:55:31'),('886475',1,'2022-04-22 05:29:20'),('534328',1,'2022-04-22 05:42:57'),('983996',1,'2022-04-27 11:15:14'),('429708',1,'2022-04-27 17:07:20'),('624034',1,'2022-04-28 11:11:16'),('418033',0,'2022-04-28 17:05:07'),('911843',0,'2022-04-28 17:05:35'),('899882',0,'2022-04-28 17:05:45'),('402198',0,'2022-04-28 17:09:48'),('831645',1,'2022-04-28 17:30:37'),('258654',1,'2022-04-28 17:41:10'),('355660',1,'2022-04-28 17:42:07'),('669935',1,'2022-04-29 05:37:37'),('212500',1,'2022-04-29 05:43:32'),('936581',1,'2022-04-29 06:39:38'),('463777',1,'2022-04-29 15:15:19'),('656153',1,'2022-05-03 03:49:00'),('201408',1,'2022-05-21 12:00:43'),('120061',1,'2022-05-26 07:06:20'),('731093',1,'2022-05-26 07:14:18'),('817462',1,'2022-05-26 07:57:01'),('828528',0,'2022-06-01 07:40:28'),('923088',1,'2022-06-01 07:41:41'),('522009',1,'2022-06-01 07:49:25');
/*!40000 ALTER TABLE `otp_expiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registerd_users`
--

DROP TABLE IF EXISTS `registerd_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registerd_users` (
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registerd_users`
--

LOCK TABLES `registerd_users` WRITE;
/*!40000 ALTER TABLE `registerd_users` DISABLE KEYS */;
INSERT INTO `registerd_users` VALUES ('abaysevi012@gmail.com'),('sreejiker2000@gmail.com');
/*!40000 ALTER TABLE `registerd_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-17 16:33:54
