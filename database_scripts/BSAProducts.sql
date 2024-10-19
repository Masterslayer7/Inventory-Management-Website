-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 19, 2024 at 01:56 AM
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
-- Table structure for table `BSAProducts`
--

CREATE TABLE IF NOT EXISTS `BSAProducts` (
  `BSAProductID` int(11) NOT NULL,
  `BSAProductCode` varchar(10) NOT NULL,
  `BSAProductName` varchar(255) NOT NULL,
  `BSADescription` text NOT NULL,
  `BSACategoryID` int(11) NOT NULL,
  `BSAWholesalePrice` decimal(10,2) NOT NULL,
  `BSAListPrice` decimal(10,2) NOT NULL,
  `BSASize` varchar(2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `BSAProducts`
--

INSERT INTO `BSAProducts` (`BSAProductID`, `BSAProductCode`, `BSAProductName`, `BSADescription`, `BSACategoryID`, `BSAWholesalePrice`, `BSAListPrice`, `BSASize`, `DateCreated`) VALUES
(1001, 'PWTS', 'Premium Neo Wetsuit', 'This high-performance neoprene wetsuit offers enhanced flexibility and warmth. Great for sports like competitive surfing and diving.', 100, 120.00, 249.99, 'M', '2024-10-18 21:33:37'),
(1002, 'SWTS', 'Standard Neo Wetsuit', 'A versatile neoprene wetsuit suitable for recreational surfing and other water activities. This suit provides excellent thermal insulation and comfort.', 100, 90.00, 199.99, 'L', '2024-10-18 21:33:37'),
(1003, 'KWTS', 'Kids Neo Wetsuit', 'Designed for young surfers who are eager to get wet. This flexible neoprene wetsuit ensures comfort and warmth while learning to ride the waves.', 100, 70.00, 149.99, 'S', '2024-10-18 21:33:37'),
(2001, 'PSKTS', 'Pro Skate Shoes', 'These high-top skate shoes feature reinforced stitching and a padded collar for ultimate support during tricks. Best for olympic level Athletes and proffesionals.', 101, 40.00, 89.99, '10', '2024-10-18 21:33:38'),
(2002, 'CSKTS', 'Classic Skate Shoes', 'A timeless low-top design with a grippy sole, perfect for casual skating or daily wear. Great buy for those who want to use for recreational activities', 101, 25.00, 59.99, '9', '2024-10-18 21:33:38'),
(2003, 'LSKTS', 'Lightweight Skate Shoes', 'Designed for optimal performance, these lightweight shoes offer breathability and style for skaters of all levels. Excellent option for kids getting started with skating', 101, 30.00, 69.99, '11', '2024-10-18 21:33:38'),
(3001, 'LRSGD', 'Long Sleeve Rash Guard', 'This long sleeve rash guard offers UPF protection and is perfect for surfing in sunny conditions. Its comfortable fit reduces chafing, allowing you to focus on catching waves.', 102, 20.00, 39.99, 'M', '2024-10-18 21:33:38'),
(3002, 'SRSGD', 'Short Sleeve Rash Guard', 'A lightweight short sleeve option for water sports, designed to reduce chafing and provide comfort.  Its an essential piece for anyone looking to enjoy time in the water without worry.', 102, 15.00, 29.99, 'L', '2024-10-18 21:33:38'),
(3003, 'KRSGD', 'Kids Rash Guard', 'Fun and colorful, this kids rash guard protects against UV rays while they play in the water.  Its designed for comfort and flexibility, ensuring your little ones can enjoy their time at the beach or pool.', 102, 12.00, 24.99, 'S', '2024-10-18 21:33:38'),
(4001, 'ISBP', 'Insulated Snowboard Pants', 'hese insulated snowboard pants are perfect for keeping you warm and dry on the slopes, thanks to their waterproof outer layer. Designed for comfort, they allow for freedom of movement while you shred the mountain.', 103, 60.00, 139.99, 'M', '2024-10-18 21:33:39'),
(4002, 'SSBP', 'Shell Snowboard Pants', 'Lightweight and breathable, these shell pants provide excellent mobility and protection from the elements. They are a great choice for snowboarders looking to stay comfortable during long days on the mountain.', 103, 50.00, 109.99, 'L', '2024-10-18 21:33:39'),
(4003, 'YSBP', 'Youth Snowboard Pants', 'Stylish and functional, these youth snowboard pants provide warmth and comfort for young riders. With a focus on durability and protection, they are perfect for kids who love to hit the slopes.', 103, 40.00, 89.99, 'S', '2024-10-18 21:33:39'),
(5001, 'FMBH', 'Full Face Mountain Biking Helmet', 'Offering maximum protection and ventilation, this full face helmet is designed for aggressive downhill riding. It ensures you stay safe and comfortable while tackling challenging trails.', 104, 70.00, 149.99, 'L', '2024-10-18 21:33:40'),
(5002, 'HMBH', 'Half Shell Mountain Biking Helmet', 'Lightweight and breathable, this half shell helmet is ideal for cross-country biking. It provides essential protection without sacrificing comfort, making it a great choice for long rides.', 104, 30.00, 69.99, 'M', '2024-10-18 21:33:40'),
(5003, 'YMBH', 'Youth Mountain Biking Helmet', 'Designed for safety and comfort, this youth helmet features fun designs that appeal to young mountain bikers. It combines protection with style, ensuring kids can ride safely and confidently.', 104, 25.00, 49.99, 'S', '2024-10-18 21:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BSAProducts`
--
ALTER TABLE `BSAProducts`
 ADD PRIMARY KEY (`BSAProductID`), ADD UNIQUE KEY `BSAProductCode` (`BSAProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
