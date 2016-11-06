-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2016 at 09:49 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hw`
--

-- --------------------------------------------------------

--
-- Table structure for table `chair`
--

CREATE TABLE IF NOT EXISTS `chair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `chair`
--

INSERT INTO `chair` (`id`, `name`) VALUES
(1, 'СП'),
(2, 'ІТП'),
(4, 'СКС');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`),
  KEY `id_5` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `city`, `link`) VALUES
(56, 'ЧДТУ', 'Черкаси', 'www.chiti.ck.ua'),
(57, 'ЧНУ ім. Богдана Хмельницького', 'Черкаси', 'www.chnu.ck.ua');

-- --------------------------------------------------------

--
-- Table structure for table `univesity_chair`
--

CREATE TABLE IF NOT EXISTS `univesity_chair` (
  `unisersity_id` int(11) NOT NULL,
  `chair_id` int(11) NOT NULL,
  PRIMARY KEY (`unisersity_id`,`chair_id`),
  KEY `univesity_chair_ibfk_2` (`chair_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `univesity_chair`
--

INSERT INTO `univesity_chair` (`unisersity_id`, `chair_id`) VALUES
(56, 1),
(56, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `univesity_chair`
--
ALTER TABLE `univesity_chair`
  ADD CONSTRAINT `univesity_chair_ibfk_2` FOREIGN KEY (`chair_id`) REFERENCES `chair` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `univesity_chair_ibfk_1` FOREIGN KEY (`unisersity_id`) REFERENCES `university` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
