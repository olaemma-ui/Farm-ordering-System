-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 07:42 PM
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
-- Database: `farm_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` varchar(255) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productDescription` text DEFAULT NULL,
  `productPrice` varchar(255) DEFAULT NULL,
  `productPicture` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isAvailable` tinyint(1) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productDescription`, `productPrice`, `productPicture`, `createdAt`, `isAvailable`, `category`) VALUES
('1', 'Wheelbarrow', 'This product is an imported wheelbarrow, \r\nIt is ideal for lifting heavy loads', '13000.00', 'http://the_photo_url', '2024-02-28 16:25:59', 1, 'tools'),
('101f39e8-7a0a-49d6-b6a9-a5669067dde7', 'Oreoluwa', 's', '6,763', 'some_url', '2024-03-01 12:24:35', 1, 'Food'),
('438c3221-64f7-4b08-90f2-1dd891a854c2', 'as', 'a', '46', 'some_url', '2024-03-01 10:39:47', 1, 'a'),
('4618b69d-4443-4046-bd5e-7ad3ac83334f', 'dsd', 'd', '6,763', 'some_url', '2024-03-01 10:40:18', 1, 'clothes'),
('528e9a1b-d7e9-492f-949e-ede295bdf2dd', 'a', 'o', '6,763', 'some_url', '2024-03-01 11:17:55', 1, 'clothes'),
('60c3f3f4-35a2-4b79-9283-67813d0ff13e', 'Oreoluwa', 's', '6,763', 'some_url', '2024-03-01 12:11:38', 1, 'tools'),
('613c0582-4a62-402a-8efa-161d90b96705', 'Oreoluwa', 'asasc', '6,763', 'some_url', '2024-03-01 12:18:38', 1, 'tools'),
('63b05338-bb0a-4110-83da-fbca6a0958f3', 'Oreoluwa', 'qw', '6,763', 'some_url', '2024-03-01 14:12:14', 1, 'tools'),
('6cd9f145-5932-4b2c-9907-63abd5bc68ed', 'Oreoluwa', 'as', '6,763', 'some_url', '2024-03-01 12:20:34', 1, 'tools'),
('7eaeebb5-25c4-48fd-a7ca-997da531cfad', 'Oreoluwa', 'as', '6,763', 'some_url', '2024-03-01 10:43:06', 1, 'clothes'),
('800972a1-9af0-4be8-bedd-6597776db33f', 'Oreoluwa', 'sd', '6,763', 'some_url', '2024-03-01 12:29:35', 1, 'tools'),
('918e7429-5ec7-427f-a999-4e2d2b98f001', 'Oreoluwa', 'x', '6,763', 'some_url', '2024-03-01 14:00:52', 1, 'tools'),
('c3ccf370-7ce4-47c8-8d01-f936833ed265', 'Oreoluwa', 'sd', '1', 'some_url', '2024-03-01 12:21:52', 1, 'tools');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
