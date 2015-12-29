-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: cs50genes
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1-log

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
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `id` int(10) unsigned NOT NULL,
  `so` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (8,'Offspring','Mendelian','','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Incomplete','Money','0% - , 0% - 0% - '),(8,'Offspring','Incomplete','Money','0% - red, 0% - pink0% - white'),(8,'Offspring','Incomplete','Money','0% - red, 0% - pink0% - white'),(8,'Offspring','Incomplete','Money','0% - red, 100% - pink0% - white'),(8,'Offspring','Incomplete','Money','0% - red, 100% - pink0% - white'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Incomplete','Money','0% - red, 100% - pink0% - white'),(8,'Offspring','Incomplete','Money','0% - red, 100% - pink0% - white'),(8,'Offspring','Incomplete','Money','0% - red, 50% - pink50% - white'),(8,'Offspring','Codominance','Money','50% - A blood type, 25% - AB blood type25% - , 0% - o blood type'),(8,'Offspring','Codominance','Money','25% - A blood type, 25% - AB Blood type25% - B blood type, 25% - O blood type'),(8,'Offspring','Mendelian','','0% - , 100% - '),(8,'Offspring','Mendelian','','0% - , 100% - '),(8,'Offspring','Mendelian','Money','0% - tall, 100% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Mendelian','Money','50% - tall, 50% - short'),(8,'Offspring','Incomplete','Money','0% - red, 50% - pink50% - white'),(8,'Offspring','Codominance','Money','25% - A blood type, 25% - AB blood type25% - B blood type , 25% - O blood type'),(8,'Offspring','Mendelian','Money','100% - tall, 0% - short'),(8,'Offspring','Mendelian','Money','100% - tall, 0% - short'),(8,'Offspring','Codominance','asff','0% - A blood type, 50% - AB blood type50% - B blood type, 0% - O blood type'),(8,'Offspring','Codominance','Money','0% - A blood type, 50% - AB blood type50% - B blood type, 0% - O blood type'),(8,'Offspring','Codominance','Money','0% - A blood type, 50% - AB blood type50% - B blood type, 0% - O blood type'),(8,'Spouse','Mendelian','Money1','AA, Aa, or aa'),(8,'Spouse','Mendelian','Money1','AA, Aa, or aa'),(8,'Spouse','Incomplete Dominance','Money1','RR, RW, or WW'),(8,'Spouse','Codominance','Money1','AA, AB, AO, BB, or BO'),(8,'Spouse','Mendelian','Money1','Aa, aa'),(8,'Spouse','Mendelian','Money1','Aa, aa'),(11,'Offspring','Incomplete','Money','25% - Red, 50% - pink25% - white'),(12,'Offspring','Incomplete','Money','25% - red, 50% - pink25% - white'),(12,'Spouse','Codominance','Money','ao, bo, or oo'),(13,'Offspring','Incomplete','Money','25% - red, 50% - pink25% - white'),(13,'Spouse','Codominance','Money1','ao, bo, or oo'),(16,'Offspring','Incomplete','Money','25% - red, 50% - pink25% - white'),(16,'Spouse','Codominance','Money1','ao, bo, or oo');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'adarsh','$1$1MdR4/gc$UnrnJBDfgZJTI87r2XSGV1','Adarsh Suresh'),(8,'chid','$1$.kWz80US$dPeA7G8Pb03EGnq0DAYKH1','Adarsh Suresh'),(9,'cs50','$1$IRCoZQNq$45E52GFbQaBTkgNydxj271','Adarsh S'),(10,'adarsh_s','$1$3WQ9L1cb$l9Xq.DVMAQZ7Gh9XXzqaK0','Adarsh S'),(11,'adarshs','$1$PaMjrZwB$C6xrRYCuGLU0fpKiSQwdP/','Adarsh S'),(12,'adarshsu','$1$H2BtUm3L$pjbZ5slg.0r1pPvb2hEXW0','Adarsh S'),(13,'Rand Bala','$1$IHfyRBi8$myZ2S4WVvxPjFq4fHGR0u.','rbal'),(16,'bcar','$1$VZKp2KzR$sFpUrGaSPGCueuOrJIv7s0','Donald T');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-19 11:51:49
