-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2012 at 05:14 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

﻿--
-- Database: `imenik`
--
﻿CREATE DATABASE `imenik` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
﻿USE `imenik`;
﻿
-- --------------------------------------------------------

--
-- Table structure for table `imenik`
--

CREATE TABLE IF NOT EXISTS `imenik` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `grad` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `datum` date NOT NULL,
  `kategorija` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
﻿
--
-- Dumping data for table `imenik`
--

﻿INSERT INTO `imenik` (`ID`, `ime`, `prezime`, `adresa`, `grad`, `telefon`, `datum`, `kategorija`) VALUES
(8, 'aasd', 'asg', 'dsfgdsfg', 'dsfgdfsgds', 'gdsg', '2012-01-27', 1)﻿,
(6, 'wa', 'rweterw', 'tewrewrt', 'tewrerwt', 'erwtewrt', '2012-01-27', 1)﻿,
(5, 'weaf', 'rwtewr', 'tewr', 'tewr', 'ewrterwt', '2012-01-27', 2)﻿,
(9, 'sgsfdgdsfg', 'sdfg', 'dsfgdsgdfs', 'dsgdg', 'gdsgdsg', '2012-01-27', 1)﻿;
﻿
-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE IF NOT EXISTS `kategorija` (
  `sifra` int(11) NOT NULL AUTO_INCREMENT,
  `delatnost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;
﻿
--
-- Dumping data for table `kategorija`
--

﻿INSERT INTO `kategorija` (`sifra`, `delatnost`) VALUES
(1, 'Obucar')﻿,
(2, 'Metalostrugar')﻿;
