-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2021 at 08:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c-19vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `dregister`
--

DROP TABLE IF EXISTS `dregister`;
CREATE TABLE IF NOT EXISTS `dregister` (
  `firstName` varchar(200) NOT NULL,
  `niccontact` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `DOB` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`niccontact`)
) ENGINE=MyISAM AUTO_INCREMENT=43334347 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`firstName`, `niccontact`, `contact`, `email`, `gender`, `DOB`, `address`) VALUES
('kavidu karunasena', '199923242346', 768756456, 'kavidu@gmail.com', 'm', 2021, 'kaduganawa'),
('madushan', '123456789', 768746987, 'madushan@gmail.com', 'm', 2021, 'kandy'),
('thusitha', '199923242346234', 716567667, 'thusitha@gmail.com', 'm', 2021, 'kandy'),
('pubudud Deepamal', '2000202721304', 713456874, 'pubududeepamal2@gmail.com', 'm', 2021, 'pilimatalawa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
