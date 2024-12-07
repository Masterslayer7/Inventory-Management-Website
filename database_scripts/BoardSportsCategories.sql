-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Dec 07, 2024 at 03:23 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yp325`
--

-- --------------------------------------------------------

--
-- Table structure for table `BoardSportsCategories`
--

CREATE TABLE IF NOT EXISTS `BoardSportsCategories` (
  `BoardCategoryID` int(11) NOT NULL,
  `BoardCategoryCode` varchar(255) NOT NULL,
  `BoardCategoryName` varchar(255) NOT NULL,
  `BoardCategoryAisleNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `BoardSportsCategories`
--

INSERT INTO `BoardSportsCategories` (`BoardCategoryID`, `BoardCategoryCode`, `BoardCategoryName`, `BoardCategoryAisleNumber`, `DateCreated`) VALUES
(100, 'WTS', 'Wetsuit', 1, '2024-10-17 19:56:13'),
(200, 'SKBS', 'Skateboarding shoes', 2, '2024-10-17 19:56:14'),
(300, 'RG', 'Rash Guard', 3, '2024-10-18 21:07:12'),
(400, 'SNBP', 'Snowboarding pants', 4, '2024-10-18 21:07:13'),
(500, 'MTBH', 'Mountain Biking Helmet', 5, '2024-12-06 21:54:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BoardSportsCategories`
--
ALTER TABLE `BoardSportsCategories`
 ADD PRIMARY KEY (`BoardCategoryID`), ADD UNIQUE KEY `BoardCategoryCode` (`BoardCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
