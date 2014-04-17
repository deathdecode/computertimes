-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2014 at 04:40 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctlsite`
--
CREATE DATABASE IF NOT EXISTS `ctlsite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ctlsite`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `pdesc` varchar(500) NOT NULL,
  `pprice` varchar(10) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `imagename` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdesc`, `pprice`, `ptype`, `imagename`) VALUES
(15, 'Dell Inspiron N 3421 Dual Core', 'Dell Inspiron N3421 BLK, PDC2127 (1.9GHz),4GB-500GB,14.0",DVDRW,BT,Cam,DOS,6Cell,Case,1yr', '32000', 'laptop', 'laptop3236695.jpg'),
(11, 'pn2', 'pd2', '58000', 'laptop', 'laptop6029358.jpg'),
(10, 'pn1', 'pd1', '1254', 'networking', 'networking291443.jpg'),
(13, 'HP 14-d010tu', 'Intel Core i3-3110m (2.4GHz) 4 GB DDR3, 500 GB HDD Free DOS, DVD+R/RW, FP 14.0"LED Display 1 Year Warranty', '37000', 'notebook', 'notebook4799805.jpg'),
(14, 'HP 242 G1 i5 ', 'Intel Core i5-3230M (2.6 GHz) 4 GB DDR3, 750 GB HDD Free DOS, DVD+R/RW 14.0” LED Display 1 Year Warranty ', '50000', 'notebook', 'notebook9446106.jpg'),
(16, 'Dell Inspiron 3421 Core-i3', 'Dell Inspiron N3421 BLK, Core-i3 3217(1.8GHz),2GB-500GB,14.1"-DVDRW,BT,Cam,DOS,4 Cell,Case,1yr', '35300', 'laptop', 'laptop6879578.jpg'),
(17, 'Dell Inspiron N3521 Core i3', 'Dell Inspiron N3521 BLACK, Core-i3-3217(1.8GHz) 2GB-500GB,15.6"-DVDRW,BT,Cam,DOS,4Cell,Case,1yr', '37800', 'laptop', 'laptop5047608.jpg'),
(18, 'Dell Inspiron N3421 Core i5 (Touch Screen)', 'Dell Inspiron N3421 BLK, Core-i5 3337(1.8GHz) 4GB-500GB,14.1HD TOUCH,DVDRW,BT,Cam,1GB GRA,DOS,6C', '65000', 'laptop', 'laptop4581605.jpg'),
(19, 'Dell Dell Inspiron 3421 (Touch Screen)', 'Dell Inspiron N3421 BLK, Core-i5 3337(1.8GHz) 4GB-500GB,14.1HD TOUCH,DVDRW,BT,Cam,1GB GRA,DOS,6C', '65500', 'laptop', 'laptop8630982.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
