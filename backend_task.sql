-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2019 at 08:47 AM
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
-- Database: `backend_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `bt_tbl`
--

DROP TABLE IF EXISTS `bt_tbl`;
CREATE TABLE IF NOT EXISTS `bt_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `particulars` varchar(20) DEFAULT NULL,
  `previous_year` year(4) DEFAULT NULL,
  `latest_year` year(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bt_tbl`
--

INSERT INTO `bt_tbl` (`id`, `particulars`, `previous_year`, `latest_year`) VALUES
(1, 'horlicks', 2020, 2020),
(2, 'Complan', 1998, 2013);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
