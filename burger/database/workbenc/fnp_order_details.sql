-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: fnp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `custom_ingredient` varchar(255) NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `name` (`name`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`order_id`),
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`name`) REFERENCES `products` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,'Bacon Cheese Burger','-'),(1,2,'Cheese Burger','-'),(1,3,'California Burger','-'),(2,1,'Double Cheese Burger','-'),(2,2,'Custom Burger','bun/beef/tomato,onion/bacon,cheese/mustard'),(3,1,'Luther Burger','-'),(4,1,'Salmon Burger','-'),(4,2,'Double Cheese Burger','-'),(4,3,'Custom Burger','bun/beef/lettuce,tomato,onion/bacon,doublecheese/ketchup,mayonnaise'),(5,1,'California Burger','-'),(5,2,'Cheese Burger','-'),(6,1,'California Burger','-'),(6,2,'Cheese Burger','-'),(6,3,'California Burger','-'),(7,1,'Bacon Cheese Burger','-'),(7,2,'California Burger','-'),(7,3,'Custom Burger','bun/beef/avocado/bacon,cheese/mayonnaise'),(8,1,'Custom Burger','wholewheat/plant-base/lettuce,tomato,onion,avocado,sprouts,pickle-cucumbers/bacon,cheese,doublecheese,kimchi/ketchup,mustard,mayonnaise'),(9,1,'California Burger','-'),(9,2,'Cheese Burger','-'),(11,1,'California Burger','-'),(11,2,'Cheese Burger','-'),(12,1,'Bacon Cheese Burger','-'),(12,2,'California Burger','-'),(13,1,'Cheese Burger','-'),(13,2,'Custom Burger','bun/pork/lettuce/bacon,cheese/mustard');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-08 21:20:37
