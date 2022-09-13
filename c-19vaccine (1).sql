-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2021 at 03:03 AM
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
  `niccontact` int(11) NOT NULL AUTO_INCREMENT,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `DOB` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`niccontact`)
) ENGINE=MyISAM AUTO_INCREMENT=2001202714 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`firstName`, `niccontact`, `contact`, `email`, `gender`, `DOB`, `address`) VALUES
('kavudu karunarthna', 2000343433, 765434765, 'kavudukarunarthna@gmail.com', 'm', 2000, 'kaduganawa'),
('selani aliwa', 2000202719, 775434775, 'selanialiwa@gmail.com', 'f', 2000, 'manikhinna'),
('kavidu rathnayaka', 2001202713, 775434765, 'kavidu@gmail.com', 'm', 2000, 'kandy'),
('Dineshi wattwa', 1998202704, 774345234, 'Dineshiwattwa@gmail.com', 'f', 1998, 'kandy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
