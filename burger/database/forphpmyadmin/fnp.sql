-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 04:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `imgfile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`, `price`, `stock`, `type`, `imgfile`) VALUES
(1, 'bun', 10, 100, 'bread', 'image/bun.jpg'),
(2, 'wholewheat', 15, 100, 'bread', 'image/whole wheat bun.jpg'),
(3, 'donut', 20, 100, 'bread', 'image/donut.jpg'),
(4, 'beef', 25, 100, 'meat', 'image/beef.png'),
(5, 'pork', 15, 100, 'meat', 'image/pork.png'),
(6, 'salmon', 25, 100, 'meat', 'image/salmon.png'),
(7, 'plant-base', 20, 100, 'meat', 'image/plant-base meat.png'),
(8, 'bacon', 15, 100, 'topping', 'image/bacon.jpg'),
(9, 'cheese', 10, 100, 'topping', 'image/cheese.jpg'),
(10, 'doublecheese', 15, 100, 'topping', 'image/cheese.jpg'),
(11, 'kimchi', 10, 100, 'topping', 'image/kimchi.jpg'),
(12, 'lettuce', 5, 100, 'vegetable', 'image/lettuce.jpg'),
(13, 'tomato', 5, 100, 'vegetable', 'image/tomato.jpg'),
(14, 'onion', 5, 100, 'vegetable', 'image/onion.jpg'),
(15, 'avocado', 10, 100, 'vegetable', 'image/avocado.jpg'),
(16, 'sprouts', 5, 100, 'vegetable', 'image/sprouts.jpg'),
(17, 'pickle-cucumbers', 5, 100, 'vegetable', 'image/pickle cucumbers.png'),
(18, 'ketchup', 0, 100, 'sauce', 'image/ketchup.jpg'),
(19, 'mustard', 0, 100, 'sauce', 'image/mustard.avif'),
(20, 'mayonnaise', 0, 100, 'sauce', 'image/mayonnaise.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `custom_ingredient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `detail_id`, `name`, `custom_ingredient`) VALUES
(1, 1, 'Bacon Cheese Burger', '-'),
(1, 2, 'Cheese Burger', '-'),
(1, 3, 'California Burger', '-'),
(2, 1, 'Double Cheese Burger', '-'),
(2, 2, 'Custom Burger', 'bun/beef/tomato,onion/bacon,cheese/mustard'),
(3, 1, 'Luther Burger', '-'),
(4, 1, 'Salmon Burger', '-'),
(4, 2, 'Double Cheese Burger', '-'),
(4, 3, 'Custom Burger', 'bun/beef/lettuce,tomato,onion/bacon,doublecheese/ketchup,mayonnaise'),
(5, 1, 'California Burger', '-'),
(5, 2, 'Cheese Burger', '-'),
(6, 1, 'California Burger', '-'),
(6, 2, 'Cheese Burger', '-'),
(6, 3, 'California Burger', '-'),
(7, 1, 'Bacon Cheese Burger', '-'),
(7, 2, 'California Burger', '-'),
(7, 3, 'Custom Burger', 'bun/beef/avocado/bacon,cheese/mayonnaise'),
(8, 1, 'Custom Burger', 'wholewheat/plant-base/lettuce,tomato,onion,avocado,sprouts,pickle-cucumbers/bacon,cheese,doublecheese,kimchi/ketchup,mustard,mayonnaise'),
(9, 1, 'California Burger', '-'),
(9, 2, 'Cheese Burger', '-'),
(11, 1, 'California Burger', '-'),
(11, 2, 'Cheese Burger', '-'),
(12, 1, 'Bacon Cheese Burger', '-'),
(12, 2, 'California Burger', '-'),
(13, 1, 'Cheese Burger', '-'),
(13, 2, 'Custom Burger', 'bun/pork/lettuce/bacon,cheese/mustard');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `total` double NOT NULL,
  `pay_status` int(2) NOT NULL,
  `serve_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `price`, `discount`, `total`, `pay_status`, `serve_status`) VALUES
(1, 145, 14.5, 130.5, 1, 1),
(2, 125, 12.5, 112.5, 1, 1),
(3, 70, 0, 70, 1, 1),
(4, 185, 18.5, 166.5, 1, 1),
(5, 85, 0, 85, 1, 1),
(6, 120, 12, 108, 1, 1),
(7, 165, 16.5, 148.5, 1, 1),
(8, 120, 12, 108, 1, 1),
(9, 85, 0, 85, 1, 1),
(10, 0, 0, 0, 1, 1),
(11, 85, 0, 85, 1, 1),
(12, 95, 0, 95, 0, 0),
(13, 105, 10.5, 94.5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bread` varchar(255) NOT NULL,
  `meat` varchar(255) NOT NULL,
  `topping` varchar(255) NOT NULL,
  `vegetable` varchar(255) NOT NULL,
  `sauce` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fileimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `bread`, `meat`, `topping`, `vegetable`, `sauce`, `price`, `fileimg`) VALUES
(1, 'Bacon Cheese Burger', 'bun', 'pork', 'bacon,cheese', 'lettuce,tomato', 'mustard', 60, 'image/Bacon Cheese Burger.jpg'),
(2, 'California Burger', 'bun', 'pork', '-', 'lettuce,tomato', 'mayonnaise', 35, 'image/California burger.jpg'),
(3, 'Cheese Burger', 'bun', 'pork', 'cheese', 'tomato,onion,pickle-cucumbers', 'mayonnaise', 50, 'image/Cheese Burger.jpg'),
(9, 'Custom Burger', '-', '-', '-', '-', '-', 0, 'image/custom-burger.png'),
(4, 'Double Cheese Burger', 'bun', 'pork', 'doublecheese', 'lettuce,tomato,pickle-cucumbers', '-', 55, 'image/Double Cheese Burger.jpeg'),
(5, 'Kimchi Burger', 'bun', 'pork', 'kimchi', 'lettuce', 'mayonnaise', 40, 'image/Kimchi burger.jpg'),
(6, 'Luther Burger', 'donut', 'beef', 'bacon', 'lettuce,tomato', '-', 70, 'image/Luther Burger.jpg'),
(7, 'Salmon Burger', 'bun', 'salmon', '-', 'lettuce,tomato,sprouts', 'mayonnaise', 50, 'image/Salmon burger.jpg'),
(8, 'Veggie Burger', 'bun', 'plant-base', '-', 'lettuce,tomato,onion,sprouts', '-', 50, 'image/Veggie burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `queue` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`queue`, `id`) VALUES
(1, 10),
(2, 11),
(3, 12),
(4, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queue`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`name`) REFERENCES `products` (`name`);

--
-- Constraints for table `queue`
--
ALTER TABLE `queue`
  ADD CONSTRAINT `queue_ibfk_1` FOREIGN KEY (`id`) REFERENCES `order_list` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
