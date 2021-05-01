-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2021 at 07:49 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_autoparts`
--
CREATE DATABASE `db_autoparts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_autoparts`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_autopart`
--

CREATE TABLE IF NOT EXISTS `tb_autopart` (
  `ProductNo` int(6) NOT NULL DEFAULT '0',
  `ProductName` varchar(25) DEFAULT NULL,
  `Code` varchar(10) DEFAULT NULL,
  `NetPrice` float DEFAULT NULL,
  `Price` float DEFAULT NULL,
  PRIMARY KEY (`ProductNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_autopart`
--

INSERT INTO `tb_autopart` (`ProductNo`, `ProductName`, `Code`, `NetPrice`, `Price`) VALUES
(4, 'Hydraulic Cup', 'DT.CH', 28.8, 40),
(1, 'Ball Joint', 'TKN.JH', 123.45, 300),
(2, 'Flasher Relay', 'TH', 88.75, 100),
(3, 'Brake Shoe', 'DTR.GH', 345.6, 700),
(5, 'Delo Gold', 'NVH', 198, 210),
(6, 'Brake Hose 1 ft', 'SD.SH', 45.6, 70),
(7, 'Fuel Filter', 'BSC', 189, 300),
(8, 'Epoxy Steel', 'VR.TL', 68.5, 80);
