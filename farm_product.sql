-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 07:53 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` varchar(36) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `firstName`, `lastName`, `email`, `password`, `createdAt`) VALUES
('3538a541-d0fa-4e34-9180-5a42846b11c5', 'Emmanuel', 'Tejumola', 'olaemma4213@yahoo.com', 'a422ad8ec142d7f7bc1f3eec73727289fc14770e', '2024-02-24 20:15:40'),
('5c2db37b-bbf3-4ca5-a41c-313b2774db90', 'Emmanuel', 'Tejumola', 'olaemma4213@gmail.com', 'a422ad8ec142d7f7bc1f3eec73727289fc14770e', '2024-02-24 20:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` varchar(36) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDescription` text,
  `productPrice` decimal(10,0) DEFAULT NULL,
  `productPicture` blob,
  `createdAt` datetime DEFAULT NULL,
  `isAvailable` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productDescription`, `productPrice`, `productPicture`, `createdAt`, `isAvailable`) VALUES
('a1b2c3d4', 'Cardinal Watch', 'Elegant timepiece with leather strap', '130', 0x68747470733a2f2f77702d7075626c69632d66732e73332e61702d736f7574682d312e616d617a6f6e6177732e636f6d2f7461736b732f313566393961616432356461666430646131643235646362393532393335303865313064376264393865326231652f696d616765732f6f7267616e69632d6661726d696e672d356639616666386536356132382e6a7067, '2024-02-24 23:10:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
