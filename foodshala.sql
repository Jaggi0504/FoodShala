-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 04:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `boston`
--

CREATE TABLE `boston` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boston`
--

INSERT INTO `boston` (`id`, `email`, `password`) VALUES
(1, 'boston@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bostonmenu`
--

CREATE TABLE `bostonmenu` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bostonmenu`
--

INSERT INTO `bostonmenu` (`id`, `item`, `price`, `type`) VALUES
(1, 'burger', 40, 1),
(2, 'Arabiata Pasta', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `burgasta`
--

CREATE TABLE `burgasta` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgasta`
--

INSERT INTO `burgasta` (`id`, `email`, `password`) VALUES
(1, 'burgasta@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `burgastamenu`
--

CREATE TABLE `burgastamenu` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgastamenu`
--

INSERT INTO `burgastamenu` (`id`, `item`, `price`, `type`) VALUES
(1, 'burger', 40, 1),
(2, 'Red Sauce Pasta', 140, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cakehouse`
--

CREATE TABLE `cakehouse` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakehouse`
--

INSERT INTO `cakehouse` (`id`, `email`, `password`) VALUES
(1, 'cakehouse@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cakehousemenu`
--

CREATE TABLE `cakehousemenu` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakehousemenu`
--

INSERT INTO `cakehousemenu` (`id`, `item`, `price`, `type`) VALUES
(3, 'Doughnuts', 220, 1),
(4, 'Cinnamon rolls', 200, 1),
(5, 'Brownies', 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Jagdeep ', 'jagdeep@gmail.com', '12345', 0),
(11, 'Harry', 'harry@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grillinn`
--

CREATE TABLE `grillinn` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grillinn`
--

INSERT INTO `grillinn` (`id`, `email`, `password`) VALUES
(1, 'grillinn@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `grillinnmenu`
--

CREATE TABLE `grillinnmenu` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grillinnmenu`
--

INSERT INTO `grillinnmenu` (`id`, `item`, `price`, `type`) VALUES
(3, 'chicken tikka', 325, 0),
(4, 'tandoori chicken', 350, 0),
(7, 'malai chaap', 350, 1),
(8, 'shahi paneer ', 250, 1),
(9, 'chaap roll', 75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `restname` varchar(50) NOT NULL,
  `dishes` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`id`, `email`, `restname`, `dishes`, `quantity`, `amount`) VALUES
(9, 'jagdeep@gmail.com', 'Boston', '', 1, 240),
(10, 'jagdeep@gmail.com', 'Burgasta', '', 1, 180),
(11, 'jagdeep@gmail.com', 'Burgasta', '', 1, 180),
(12, 'jagdeep@gmail.com', 'Burgasta', '', 1, 180),
(13, 'jagdeep@gmail.com', 'Burgasta', '', 1, 180),
(14, 'jagdeep@gmail.com', 'GrillInn', '', 0, 1050),
(20, 'jagdeep@gmail.com', 'cakehouse', '', 1, 420);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boston`
--
ALTER TABLE `boston`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bostonmenu`
--
ALTER TABLE `bostonmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burgasta`
--
ALTER TABLE `burgasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burgastamenu`
--
ALTER TABLE `burgastamenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakehouse`
--
ALTER TABLE `cakehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakehousemenu`
--
ALTER TABLE `cakehousemenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grillinn`
--
ALTER TABLE `grillinn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grillinnmenu`
--
ALTER TABLE `grillinnmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boston`
--
ALTER TABLE `boston`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bostonmenu`
--
ALTER TABLE `bostonmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `burgasta`
--
ALTER TABLE `burgasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `burgastamenu`
--
ALTER TABLE `burgastamenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cakehouse`
--
ALTER TABLE `cakehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cakehousemenu`
--
ALTER TABLE `cakehousemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grillinn`
--
ALTER TABLE `grillinn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grillinnmenu`
--
ALTER TABLE `grillinnmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
