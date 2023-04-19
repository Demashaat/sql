-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19 أبريل 2023 الساعة 00:27
-- إصدار الخادم: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `gend` int(55) NOT NULL,
  `imag` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`name`, `email`, `pass`, `gend`, `imag`) VALUES
('mdmk', 'kjndhb@gmail.com', '123', 2, 'namw');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
