-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchshopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(65, 0, 2),
(69, 1, 15),
(71, 1, 3),
(72, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `Category`, `item_image`, `item_register`) VALUES
(1, 'Rolex ', 'DateJust 41', 152.00, 'Mens', './Assests/Rolex1.jpg', '2020-03-28 11:08:57'),
(2, 'Tudo ', 'Yellow gold bezel', 122.00, 'Mens', './Assests/Tudo 1.jpg', '2020-03-28 11:08:57'),
(3, 'Tudo ', 'Bronze bezel', 122.00, 'Mens', './Assests/Tudo 2 .jpg', '2020-03-28 11:08:57'),
(4, 'Rolex ', 'Submariner', 122.00, 'Mens', './Assests/Rolex4.jpg', '2020-03-28 11:08:57'),
(5, 'Tudo ', 'Diamond-set dial', 122.00, 'Mens', './Assests/Tudo 3.jpg', '2020-03-28 11:08:57'),
(6, 'Rolex ', 'GMT_Master II', 122.00, 'Mens', './Assests/Rolex2.jpg', '2020-03-28 11:08:57'),
(7, 'Rolex ', 'Day-Date 40', 122.00, 'Mens', './Assests/Rolex3.jpg', '2020-03-28 11:08:57'),
(8, 'Piaget', 'Piaget', 122.00, 'Mens', './Assests/piaget3.jpg', '2020-03-28 11:08:57'),
(9, 'Omega', 'Omega', 152.00, 'Mens', './Assests/Omega 1.jpg', '2020-03-28 11:08:57'),
(10, 'Omega', 'Omega', 152.00, 'Mens', './Assests/Omega 2.jpg', '2020-03-28 11:08:57'),
(11, 'Tudo ', 'Diamond-set dial', 152.00, 'Mens', './Assests/Tudo 4.jpg', '2020-03-28 11:08:57'),
(12, 'Western', 'Western', 152.00, 'Mens', './Assests/Western 1.jpg', '2020-03-28 11:08:57'),
(13, 'Piaget', 'Piaget', 152.00, 'Mens', './Assests/piaget2.jpg', '2020-03-28 11:08:57'),
(14, 'Omega', 'Omega', 152.00, 'Mens', './Assests/Omega 5.jpg', '2020-03-28 11:08:57'),
(15, 'Western', 'Western', 152.00, 'Mens', './Assests/Western 3.jpg', '2020-03-28 11:08:57'),
(16, 'Omega', 'Omega', 152.00, 'Mens', './Assests/Omega 7.jpg', '2020-03-28 11:08:57'),
(17, 'Omega', 'Omega', 152.00, 'Mens', './Assests/Omega 6.jpg', '2020-03-28 11:08:57'),
(18, 'Western', 'Western', 152.00, 'Mens', './Assests/Western 4.jpg', '2020-03-28 11:08:57'),
(19, 'Samsung', 'Smart watch', 330.00, 'Digital  Watch', './Assests/samsung 1.jpg', '2021-01-11 12:38:47'),
(20, 'Samsung', 'Smart watch', 224.00, 'Digital watch', './Assests/samsung 3.jpg', '2021-01-11 12:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(11) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `Mobile`, `Email`, `Pass`, `register_date`) VALUES
(1, 'Moazam', 'Ali', '03066651908', 'moazamshahid555@gmail.com', 'asdf0987', '2020-03-28 13:07:17'),
(2, 'Rana', 'Wassay', '030000000', 'ranaWassay666@gmail.com', '1234asfd', '2021-01-13 11:22:30'),
(3, 'Hammad', 'Ali', '030000001', 'MuhammadHammadAli555@gmail.com', '1234asfd', '2021-01-13 11:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `PhoneNo` (`Mobile`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
