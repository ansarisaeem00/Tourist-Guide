-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2018 at 08:00 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mumbai_darshan`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` varchar(100) NOT NULL,
  `tm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `image`, `image_text`, `tm`, `dt`) VALUES
(1, 0, 'ga1.jpg', 'uuhkugk', '2018-03-16 00:20:07', '2018-03-15 17:20:07'),
(2, 0, 'dark.png', 'kjsdfjsdk', '2018-03-16 00:20:29', '2018-03-15 17:20:29'),
(3, 0, 'ga6.jpg', 'khshs', '2018-03-16 00:26:32', '2018-03-15 17:26:32'),
(5, 0, 'button_convert.gif', '', '2018-03-17 01:17:19', '2018-03-16 18:17:19'),
(6, 0, 'button_convert.gif', '', '2018-03-17 01:18:10', '2018-03-16 18:18:10'),
(7, 0, 'button_convert.gif', '', '2018-03-17 01:18:29', '2018-03-16 18:18:29'),
(8, 0, 'button_convert.gif', '', '2018-03-17 01:19:57', '2018-03-16 18:19:57'),
(9, 0, 'button_convert.gif', '', '2018-03-17 01:21:54', '2018-03-16 18:21:54'),
(10, 0, 'button_convert.gif', '', '2018-03-17 01:22:48', '2018-03-16 18:22:48'),
(11, 0, 'button_convert.gif', '', '2018-03-17 01:22:56', '2018-03-16 18:22:56'),
(12, 0, 'button_convert.gif', '', '2018-03-17 01:23:07', '2018-03-16 18:23:07'),
(13, 0, 'button_convert.gif', '', '2018-03-17 01:23:30', '2018-03-16 18:23:30'),
(22, 17, 'hosp.jpg', 'upload', '2018-03-17 07:52:49', '2018-03-17 00:52:49'),
(21, 17, 'tourist.jpg', 'mumbai', '2018-03-17 06:29:59', '2018-03-16 23:29:59'),
(18, 14, 'restro.jpg', 'hey', '2018-03-17 03:30:51', '2018-03-16 20:30:51'),
(19, 14, 'hosp.jpg', 'hey', '2018-03-17 03:36:39', '2018-03-16 20:36:39'),
(20, 14, 'mumbai.jpg', 'wqegfybgweqy', '2018-03-17 03:37:17', '2018-03-16 20:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `int` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `password`) VALUES
(17, 'mansoor', 'mansoor@manz', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'yusuf', 'yusuf@admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'saeem', 'saeem@www', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'emir', 'emir@gmail', 'user', '962012d09b8170d912f0669f6d7d9d07'),
(6, 'abdullah', 'abdullah8bpyt6846@gmail.com', 'user', '2b7c135c67bc08372c0df75f8cd65ece'),
(15, 'owi', 'owi@admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'emirsk', 'emirsk@gmail', 'admin', '58260cf7ebba2adf4806b03bf134bb43'),
(9, 'owais', 'owasi@gmail', 'user', '962012d09b8170d912f0669f6d7d9d07'),
(10, 'umair', 'umair@admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'humair', 'admin@asd', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'humair', 'admin@asdi', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'main', 'main@admin', 'user', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
