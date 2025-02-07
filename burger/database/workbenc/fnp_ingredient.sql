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
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `imgfile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredient`
--

LOCK TABLES `ingredient` WRITE;
/*!40000 ALTER TABLE `ingredient` DISABLE KEYS */;
INSERT INTO `ingredient` VALUES (1,'bun',10,100,'bread','image/bun.jpg'),(2,'wholewheat',15,100,'bread','image/whole wheat bun.jpg'),(3,'donut',20,100,'bread','image/donut.jpg'),(4,'beef',25,100,'meat','image/beef.png'),(5,'pork',15,100,'meat','image/pork.png'),(6,'salmon',25,100,'meat','image/salmon.png'),(7,'plant-base',20,100,'meat','image/plant-base meat.png'),(8,'bacon',15,100,'topping','image/bacon.jpg'),(9,'cheese',10,100,'topping','image/cheese.jpg'),(10,'doublecheese',15,100,'topping','image/cheese.jpg'),(11,'kimchi',10,100,'topping','image/kimchi.jpg'),(12,'lettuce',5,100,'vegetable','image/lettuce.jpg'),(13,'tomato',5,100,'vegetable','image/tomato.jpg'),(14,'onion',5,100,'vegetable','image/onion.jpg'),(15,'avocado',10,100,'vegetable','image/avocado.jpg'),(16,'sprouts',5,100,'vegetable','image/sprouts.jpg'),(17,'pickle-cucumbers',5,100,'vegetable','image/pickle cucumbers.png'),(18,'ketchup',0,100,'sauce','image/ketchup.jpg'),(19,'mustard',0,100,'sauce','image/mustard.avif'),(20,'mayonnaise',0,100,'sauce','image/mayonnaise.jpg');
/*!40000 ALTER TABLE `ingredient` ENABLE KEYS */;
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
