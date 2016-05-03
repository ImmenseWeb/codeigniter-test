-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 07:02 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `storeys` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `price`, `bedrooms`, `bathrooms`, `storeys`, `garages`) VALUES
(1, 'The Victoria', 374662, 4, 2, 2, 2),
(2, 'The Xavier', 513268, 4, 2, 1, 2),
(3, 'The Como', 454990, 4, 3, 2, 3),
(4, 'The Aspen', 384356, 4, 2, 2, 2),
(5, 'The Lucretia ', 572002, 4, 3, 2, 2),
(6, 'The Toorak', 521951, 5, 2, 1, 2),
(7, 'The Skyscape', 263604, 3, 2, 2, 2),
(8, 'The Clifton', 386103, 3, 2, 1, 1),
(9, 'The Geneva', 390600, 4, 3, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
