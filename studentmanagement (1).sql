-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2019 at 07:29 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaningchart`
--

DROP TABLE IF EXISTS `cleaningchart`;
CREATE TABLE IF NOT EXISTS `cleaningchart` (
  `Mon` varchar(30) NOT NULL,
  `Tus` varchar(30) NOT NULL,
  `Wen` varchar(30) NOT NULL,
  `Thus` varchar(30) NOT NULL,
  `Fri` varchar(30) NOT NULL,
  `Grade` varchar(30) NOT NULL,
  `createdDate` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cleaningcharts`
--

DROP TABLE IF EXISTS `cleaningcharts`;
CREATE TABLE IF NOT EXISTS `cleaningcharts` (
  `Day` varchar(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Grade` varchar(11) NOT NULL,
  `Year` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaningcharts`
--

INSERT INTO `cleaningcharts` (`Day`, `Name`, `Grade`, `Year`) VALUES
('Monday', 'Udari', '12-B', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(30) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BOD` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Father_name`, `Address`, `Sex`, `id`, `BOD`) VALUES
('Udari', 'H.B', '', 'female', 1, ''),
('1sasa', 'asdfas', 'asdas', 'male', 2, '2019-09-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
