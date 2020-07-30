-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2019 at 07:58 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `firstname`, `lastname`, `email`, `password`, `mobile`, `address`, `pincode`, `city`, `state`) VALUES
(47, 'bob', 'den', 'abc@gmail.com', '12345678123', NULL, NULL, NULL, NULL, NULL),
(48, 'bob', 'den', 'abc@gmail.com', '123456789', NULL, NULL, NULL, NULL, NULL),
(46, 'bob', 'den', 'aastha@gmail.com', '123', NULL, NULL, NULL, NULL, NULL),
(45, 'bob', 'den', 'aastha@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL),
(44, 'bob', 'sinha', 'abc@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL),
(43, 'bob', 'sinha', 'abc@gmail.com', '1234', NULL, NULL, NULL, NULL, NULL),
(42, 'bob', 'sinha', 'asdrt@gamil.com', '1234', NULL, NULL, NULL, NULL, NULL),
(41, 'bob', 'den', 'qwer', '1234', NULL, NULL, NULL, NULL, NULL),
(40, 'qw', 'qw', 'qw', '12', NULL, NULL, NULL, NULL, NULL),
(37, '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(38, '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(39, '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(29, 'bob', 'den', 'asdf', '1234', NULL, NULL, NULL, NULL, NULL),
(28, 'abc', 'def', 'abc@gmail.com', '123', 123456789, '324 palam', 110010, 'south delhi', 'Delhi-NCR'),
(49, 'bob', 'den', 'abc@gmail.com', '12345678', NULL, NULL, NULL, NULL, NULL),
(50, 'bob', 'den', 'abc@gmail.com', '12345678', NULL, NULL, NULL, NULL, NULL),
(51, 'bob', 'den', 'bob@gmail.com', '12345678', NULL, NULL, NULL, NULL, NULL),
(52, 'bob', 'sinha', 'abc@gmail.com', '1234567', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artlover`
--

DROP TABLE IF EXISTS `artlover`;
CREATE TABLE IF NOT EXISTS `artlover` (
  `artLover_id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`artLover_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artlover`
--

INSERT INTO `artlover` (`artLover_id`, `firstname`, `lastname`, `password`, `email`, `mobile`, `address`, `pincode`, `city`, `state`) VALUES
(1, 'hemant', 'sinha', '123', 'hemant@gmail.com', NULL, NULL, NULL, NULL, NULL),
(7, 'bob', '', '', '', NULL, NULL, NULL, NULL, NULL),
(6, '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(8, 'bob', 'den', '12345678', 'hemant@gmail.com', NULL, NULL, NULL, NULL, NULL),
(9, 'bob', 'den', '12345678', 'hemant@gmail.com', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
