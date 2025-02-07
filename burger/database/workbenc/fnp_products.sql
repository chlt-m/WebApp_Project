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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bread` varchar(255) NOT NULL,
  `meat` varchar(255) NOT NULL,
  `topping` varchar(255) NOT NULL,
  `vegetable` varchar(255) NOT NULL,
  `sauce` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fileimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Bacon Cheese Burger','bun','pork','bacon,cheese','lettuce,tomato','mustard',60,'image/Bacon Cheese Burger.jpg'),(2,'California Burger','bun','pork','-','lettuce,tomato','mayonnaise',35,'image/California burger.jpg'),(3,'Cheese Burger','bun','pork','cheese','tomato,onion,pickle-cucumbers','mayonnaise',50,'image/Cheese Burger.jpg'),(9,'Custom Burger','-','-','-','-','-',0,'image/custom-burger.png'),(4,'Double Cheese Burger','bun','pork','doublecheese','lettuce,tomato,pickle-cucumbers','-',55,'image/Double Cheese Burger.jpeg'),(5,'Kimchi Burger','bun','pork','kimchi','lettuce','mayonnaise',40,'image/Kimchi burger.jpg'),(6,'Luther Burger','donut','beef','bacon','lettuce,tomato','-',70,'image/Luther Burger.jpg'),(7,'Salmon Burger','bun','salmon','-','lettuce,tomato,sprouts','mayonnaise',50,'image/Salmon burger.jpg'),(8,'Veggie Burger','bun','plant-base','-','lettuce,tomato,onion,sprouts','-',50,'image/Veggie burger.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
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
