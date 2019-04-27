-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2019 at 02:48 PM
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
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `op_answers`
--

DROP TABLE IF EXISTS `op_answers`;
CREATE TABLE IF NOT EXISTS `op_answers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question_no` int(10) NOT NULL,
  `answers` text NOT NULL,
  `votes` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_answers`
--

INSERT INTO `op_answers` (`id`, `question_no`, `answers`, `votes`) VALUES
(1, 1, 'JQuery', 0),
(2, 1, 'MooTools', 0),
(3, 1, 'YUI Library', 0),
(4, 1, 'Glow', 0);

-- --------------------------------------------------------

--
-- Table structure for table `op_pollsessions`
--

DROP TABLE IF EXISTS `op_pollsessions`;
CREATE TABLE IF NOT EXISTS `op_pollsessions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sessionid` text NOT NULL,
  `question_no` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `op_questions`
--

DROP TABLE IF EXISTS `op_questions`;
CREATE TABLE IF NOT EXISTS `op_questions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `questions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_questions`
--

INSERT INTO `op_questions` (`id`, `questions`) VALUES
(1, 'What is your favorite JavaScript?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
