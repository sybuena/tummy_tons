-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2013 at 07:46 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tummy`
--
CREATE DATABASE IF NOT EXISTS `tummy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tummy`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cart_user` int(11) NOT NULL,
  `cart_product` int(11) NOT NULL,
  `quantity` varchar(232) NOT NULL,
  `is_process` int(11) NOT NULL,
  PRIMARY KEY (`cart_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(232) NOT NULL,
  `category_description` varchar(232) NOT NULL,
  `category_enable` int(11) NOT NULL DEFAULT '1',
  `category_group` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `category_name`, `category_description`, `category_enable`, `category_group`) VALUES
(1, 'prito apss', 'prito apps', 1, 1),
(2, 'ulam sizzlings', 'ulam sizzlings', 1, 1),
(3, 'ihaw', 'ihaw', 1, 1),
(4, 'rice-2-sawa', 'rice-2-sawa', 1, 1),
(5, 'desserts', 'desserts', 1, 0),
(6, 'extras', 'extras', 1, 0),
(7, 'gulayan', 'gulayan', 1, 1),
(8, 'ulamansoup', 'ulamansoup', 1, 1),
(9, 'short order', 'short order', 1, 0),
(10, '49ers', '49ers', 1, 0),
(11, 'non-alcoholic', 'non-alcoholic', 1, 0),
(12, 'alcoholic', 'alcoholic', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_ID` int(11) NOT NULL AUTO_INCREMENT,
  `history_product` int(11) NOT NULL,
  `history_quantity` int(11) NOT NULL,
  `history_transaction` int(11) NOT NULL,
  PRIMARY KEY (`history_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_ID`, `history_product`, `history_quantity`, `history_transaction`) VALUES
(1, 5, 0, 0),
(2, 2, 0, 0),
(3, 6, 1, 3),
(4, 32, 10, 3),
(5, 6, 1, 4),
(6, 32, 10, 4),
(7, 1, 1, 5),
(8, 4, 10, 5),
(9, 1, 1, 6),
(10, 31, 7, 6),
(11, 29, 6, 6),
(12, 7, 1, 7),
(13, 9, 5, 7),
(14, 23, 1, 7),
(15, 24, 1, 7),
(16, 26, 1, 7),
(17, 23, 1, 8),
(18, 25, 10, 8),
(19, 27, 1, 8),
(20, 23, 5, 8),
(21, 25, 10, 9),
(22, 26, 1, 9),
(23, 22, 1, 9),
(24, 23, 1, 9),
(25, 31, 1, 9),
(26, 23, 1, 10),
(27, 1, 1, 10),
(28, 13, 1, 10),
(29, 9, 1, 11),
(30, 2, 1, 12),
(31, 3, 1, 12),
(32, 21, 1, 13),
(33, 24, 1, 13),
(34, 1, 1, 14),
(35, 8, 1, 14),
(36, 1, 1, 15),
(37, 5, 1, 15),
(38, 3, 1, 16),
(39, 1, 1, 17),
(40, 2, 1, 18),
(41, 1, 1, 19),
(42, 8, 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(232) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`ID`, `value`) VALUES
(1, 'process'),
(2, 'in delivery'),
(3, 'done'),
(4, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category_ID` int(11) NOT NULL,
  `name` varchar(232) NOT NULL,
  `description` varchar(232) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` varchar(232) NOT NULL,
  `enable` int(11) DEFAULT '1',
  `image` varchar(232) DEFAULT NULL,
  `promote` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category_ID`, `name`, `description`, `stock`, `price`, `enable`, `image`, `promote`) VALUES
(1, 1, 'calamares', 'calamares', 44, '130', 1, '/assets/img/prito/calamares.jpg', 1),
(2, 1, 'dynamite', 'dynamite', 5, '45', 1, '/assets/img/prito/dynamite.jpg', 0),
(3, 1, 'crispy crablets', 'crispy crablets', 100, '110', 1, '/assets/img/prito/c.crablets.jpg', 0),
(4, 1, 'Tokwa', 'Tokwa', 100, '25', 1, '/assets/img/prito/tokwa.jpg', 0),
(5, 1, 'tokwat baboy', 'tokwat baboy', 12, '39', 1, '/assets/img/prito/tokwatbaboy.jpg', 0),
(6, 1, 'onion ring', 'onion ring', 90, '50', 1, '/assets/img/prito/onionring.jpg', 0),
(7, 1, 'camaron rebusado', 'camaron rebusado', 12, '155', 1, '/assets/img/prito/camaron.jpg', 1),
(8, 1, 'crispy pata jr.', 'crispy pata jr.', 12, '205', 1, '/assets/img/prito/crispypatajr.jpg', 0),
(9, 1, 'lumpiang shanghai', 'lumpiang shanghai', 12, '55', 1, '/assets/img/prito/lumpia.jpg', 0),
(10, 1, 'BARAKO chix wings(spicy)', 'BARAKO chix wings(spicy)', 12, '105', 1, '/assets/img/prito/barakowings.jpg', 0),
(11, 1, 'LEMON chix wings', 'LEMON chix wings', 14, '125', 1, '', 0),
(12, 1, 'fish fingers', 'fish fingers', 55, '130', 1, '/assets/img/prito/fishfinger.jpg', 0),
(13, 2, 'sisig babi (pork)', 'sisig babi (pork)', 45, '145', 1, '', 1),
(14, 2, 'sisig ebon (chicken)', 'sisig ebon (chicken)', 34, '145', 1, '', 0),
(15, 2, 'adobe flakes', 'adobe flakes', 2, '140', 1, '', 0),
(16, 2, 'bistek flakes', 'bistek flakes', 4, '150', 1, '', 0),
(17, 2, 'shrimp gambas', 'shrimp gambas', 54, '160', 1, '', 1),
(18, 2, 'szzz-ling pusit', 'szzz-ling pusit', 23, '170', 1, '', 0),
(19, 2, 'dory ala pobre', 'dory ala pobre', 67, '140', 1, '', 0),
(20, 2, 'chicken bbq', 'chicken bbq san kapa masarap n masarap n masarap rice 2 sawa', 67, '89.00', 1, '', 1),
(21, 3, 'pork bbq', 'pork bbq', 67, '129', 1, '/assets/img/ihaw/porkbbq.jpg', 0),
(22, 3, 'liempo', 'liempo', 159, '159', 1, '/assets/img/ihaw/liempo.jpg', 0),
(23, 3, 'tuna belly', 'tuna belly tuna n tunay to''', 34, '159', 1, '/assets/img/ihaw/tunabelly.jpg', 1),
(24, 3, 'salmon belly', 'salmon belly', 34, '159', 1, '/assets/img/ihaw/salmonbelly.jpg', 1),
(25, 3, 'belly buster (tuna + salmon)', 'belly buster (tuna + salmon)', 6, '159', 1, '/assets/img/ihaw/tunaandsalmon.jpg', 0),
(26, 3, 'pusit', 'pusit', 56, '85', 1, '/assets/img/ihaw/grilledpusit.jpg', 0),
(27, 3, 'griller dory', 'griller dory', 14, '110', 1, '/assets/img/ihaw/grilleddory.jpg', 0),
(28, 4, 'chicken bbq', 'chicken bbq', 12, '99', 1, '', 0),
(29, 4, 'liempo', 'liempo', 123, '99', 1, '', 0),
(30, 4, 'pork bbq (2 stick)', 'pork bbq (2 stick)', 12, '88', 1, '', 0),
(31, 12, 'red horse', 'pulang kabayo', 0, '20', 1, NULL, 1),
(32, 12, 'gin bilog', 'bilog n bilog', 0, '120', 1, NULL, 1),
(33, 7, 'brocoli', 'asdasd', 0, '', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_ID` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_user` int(11) NOT NULL,
  `transaction_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaction_status` varchar(232) NOT NULL DEFAULT 'process',
  PRIMARY KEY (`transaction_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_ID`, `transaction_user`, `transaction_created`, `transaction_status`) VALUES
(1, 2, '2013-08-28 19:14:25', 'process'),
(2, 2, '2013-08-28 19:14:25', 'process'),
(3, 1, '2013-08-28 19:37:04', 'process'),
(4, 1, '2013-08-28 19:40:27', 'process'),
(5, 1, '2013-08-28 19:51:26', 'process'),
(6, 1, '2013-08-28 20:14:13', 'process'),
(7, 1, '2013-08-28 21:02:58', 'in delivery'),
(8, 1, '2013-08-28 23:34:34', 'process'),
(9, 1, '2013-08-29 00:04:24', 'in delivery'),
(10, 0, '2013-09-01 04:55:34', 'process'),
(11, 4, '2013-09-01 06:18:37', 'in delivery'),
(12, 4, '2013-09-01 07:03:43', 'process'),
(13, 1, '2013-09-02 11:50:39', 'process'),
(14, 1, '2013-09-02 12:42:48', 'process'),
(15, 1, '2013-09-03 15:04:53', 'process'),
(16, 1, '2013-09-04 12:34:12', 'process'),
(17, 6, '2013-09-04 12:38:41', 'process'),
(18, 1, '2013-09-04 14:34:11', 'process'),
(19, 1, '2013-10-02 06:42:25', 'process');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(232) NOT NULL,
  `email` varchar(232) NOT NULL,
  `usertype` varchar(232) NOT NULL DEFAULT 'C',
  `phone` varchar(232) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enable` int(11) NOT NULL DEFAULT '1',
  `password` varchar(232) NOT NULL,
  `address` varchar(232) NOT NULL,
  `city` varchar(232) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `name`, `email`, `usertype`, `phone`, `created`, `enable`, `password`, `address`, `city`) VALUES
(1, 'naruto', 'naruto@gmail.com', 'A', '09196677433', '2013-08-28 02:41:35', 1, 'pass', '883 rosario st. carmona, cavite', 'carmona, cavite'),
(2, 'sakura', 'sakura@gmail.com', 'C', '123456789', '2013-08-28 02:42:05', 1, '', '', ''),
(3, 'asdasda', 'asd@gmail.com', 'C', 'asdasdasdas', '2013-09-01 06:12:20', 1, 'asdasdasd', 'asdasd', 'sadas'),
(4, 'asdasda', 'asd@gmail.com', 'C', 'asdasdasdas', '2013-09-01 06:12:43', 1, 'asdasdasd', 'asdasd', 'sadas'),
(5, 'asdasd', 'asdasdasd@gmail.com', 'C', 'asdasdasdas', '2013-09-04 12:35:22', 1, 'password', 'asdasdasdasd', 'asdasdasdasdas'),
(6, 'asdasdasdasdasd', 'asdasd@gmail.com', 'C', '12345678', '2013-09-04 12:38:32', 1, 'password', 'asdhjagjhsvf', 'haskjdhasjkdha');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
