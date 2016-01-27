-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 04:05 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codepinp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `email`, `date`) VALUES
(1, 'nasirdipu', 'Md.Nasir', 'Uddin', 'nasirdipu@gmail.com', '2016-01-27 00:44:30'),
(2, 'Dipunasir', 'Md.NasirMollah', 'Rohoman', 'nasiruddindipu@gmail.com', '2016-01-26 14:35:32'),
(3, 'Irsandipu', 'Md.Irsan', 'Talukder', 'irsandipu@gmail.com', '2016-01-26 14:35:46'),
(5, 'nasima', 'Nasima', 'Begaum', 'nasirma@gmail.com', '2016-01-27 00:42:30'),
(7, 'ranidipu', 'Asma ', 'Rani', 'asmarani@gmail.com', '2016-01-27 01:38:33'),
(9, 'alluddin', 'Md.Alluddin', 'mollah', 'alluddin@gmail.com', '2016-01-27 03:26:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
