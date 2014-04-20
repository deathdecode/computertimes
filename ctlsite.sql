-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2014 at 08:37 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ctlsite`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pdesc`, `pprice`, `ptype`, `imagename`) VALUES
(10, 'pn1', 'pd1', '1254', 'networking', 'networking291443.jpg'),
(11, 'pn2', 'pd2', '58000', 'laptop', 'laptop6029358.jpg'),
(15, 'Dell Inspiron N 3421 Dual Core', 'Dell Inspiron N3421 BLK, PDC2127 (1.9GHz),4GB-500GB,14.0",DVDRW,BT,Cam,DOS,6Cell,Case,1yr', '32000', 'laptop', 'laptop3236695.jpg'),
(13, 'HP 14-d010tu', 'Intel Core i3-3110m (2.4GHz) 4 GB DDR3, 500 GB HDD Free DOS, DVD+R/RW, FP 14.0"LED Display 1 Year Warranty', '37000', 'notebook', 'notebook4799805.jpg'),
(14, 'HP 242 G1 i5 ', 'Intel Core i5-3230M (2.6 GHz) 4 GB DDR3, 750 GB HDD Free DOS, DVD+R/RW 14.0” LED Display 1 Year Warranty ', '50000', 'notebook', 'notebook9446106.jpg'),
(16, 'Dell Inspiron 3421 Core-i3', 'Dell Inspiron N3421 BLK, Core-i3 3217(1.8GHz),2GB-500GB,14.1"-DVDRW,BT,Cam,DOS,4 Cell,Case,1yr', '35300', 'laptop', 'laptop6879578.jpg'),
(17, 'Dell Inspiron N3521 Core i3', 'Dell Inspiron N3521 BLACK, Core-i3-3217(1.8GHz) 2GB-500GB,15.6"-DVDRW,BT,Cam,DOS,4Cell,Case,1yr', '37800', 'laptop', 'laptop5047608.jpg'),
(18, 'Dell Inspiron N3421 Core i5 (Touch Screen)', 'Dell Inspiron N3421 BLK, Core-i5 3337(1.8GHz) 4GB-500GB,14.1HD TOUCH,DVDRW,BT,Cam,1GB GRA,DOS,6C', '65000', 'laptop', 'laptop4581605.jpg'),
(19, 'Dell Dell Inspiron 3421 (Touch Screen)', 'Dell Inspiron N3421 BLK, Core-i5 3337(1.8GHz) 4GB-500GB,14.1HD TOUCH,DVDRW,BT,Cam,1GB GRA,DOS,6C', '65500', 'laptop', 'laptop8630982.jpg'),
(20, 'HP HP 3330 Pro Business Desktop', 'Model : HP 3330 Pro MT PC CPU : Intel Core i3 3.30 GHz', '39500', 'desktop', 'desktop2611084.jpg'),
(21, 'HP HP Compaq Pro 6300 Business PC', 'HP Compaq Pro 6300 Business PC  i3 3220 3.30 GHz  4 GB  500 GB', '41000', 'desktop', 'desktop6500550.jpg'),
(22, 'HP HP Pro 6300 MT Business PC', 'Intel Core i5 3470  4 GB DDR3 SDRAM, 500-GB SATA 3.5 1st Hard Drive  HP 18.5'''' LED Backlit LCD Wide Screen  Free DOS', '48000', 'desktop', 'desktop5296021.jpg'),
(23, 'HP LaserJet Pro M251n Color', 'Print speed: black Up to 14 ppm, color Up to 14 ppm  First Page Out: 18.5 sec (Black), 19 sec (Color)  Processor: 750 MHz  Monthly Duty Cycle:Up to 30,000 pages  Connectivity: Hi-Speed USB; Host USB; Ethernet 10/100Base-TX network port;', '31000', 'printer', 'printer4179993.jpg'),
(24, 'HP LaserJet Pro Color M451nw', ' Short Specifications  Print Speed: Up to 21 ppm black (letter), Up to 21 ppm color (letter)  Print Resolution: Up to 600 x 600 dpi  Display: 2-line LCD (text)  Monthly Volume (Duty Cycle): Up to 40,000 pages', '65000', 'desktop', 'desktop5480347.jpg'),
(25, 'HP LaserJet PRO Color M451dn', 'Print Speed: Up to 21 ppm black (letter), Up to 21 ppm color (letter)  Print Resolution: Up to 600 x 600 dpi  Monthly Volume (Duty Cycle): Up to 40,000 pages  Memory: 384 MB  Processor: 600 MHz ', '77000', 'printer', 'printer4961243.jpg'),
(26, 'HP LaserJet Enterprise Color M551dn', 'Print Speed: Color and Black: Up to 33 ppm letter (up to 32 ppm A4)  First Page Out: Color and Black (A4, ready) As fast as 11 sec  Print Resolution: Black (best): Up to 1200 x 1200 dpi; Black (normal): Up to 600 x 600 dpi; Color (best): Up to 1200 x 1200 dp  Processor Type: ARM Cortex-A8, 800 MHz  Memory: 1GB ', '133,333', 'printer', 'printer5455628.jpg'),
(27, 'D-Link ADSL2 Router (DSL-2520U)', 'HIGH-SPEED ADSL2+ INTERNET CONNECTION  Up to 24 Mbps downstream,up to 2 Mbps Upstream  Ethernet and USB ports,  QoS and Firewall protection,  all in one single palm-sized box', '1800', 'networking', 'networking636597.jpg'),
(28, 'Prolink WNR1004/P', 'WiFi speed up to 300Mbps  Auto Setup  WiFi Protected Setup (WPS)  Automatic Energy Saving  Universal Repeater function', '1800', 'networking', 'networking6399537.jpg'),
(29, 'D-Link WiFI N 150 Cloud Router (DIR-600L)', 'Connect for Cloud Feature Mydlink  Fixed 5 dbi External Antennas  Monitor/control the network clients via Android', '2000', 'desktop', 'desktop2687684.jpg'),
(30, 'Prolink PRN3001', '300Mbps Wireless-N Broadband AP / Router Fast Transfer Speeds of up to 300Mbps High-Security encryption to protect network from threats Simple & Easy Setup Extra Guest Wireless Network PoE Ready', '2300', 'networking', 'networking4718934.jpg'),
(31, 'D-Link ADSL2 Wireless N 150 + 4-Port Router (DSL-2730U)', 'FAST INTERNET CONNECTION ADSL 2/2  Internet transmission of up to 24 Mbps downstream, 1 Mbps upstream  Wireless N 150', '2900', 'networking', 'networking4381104.jpg'),
(32, 'Cisco CISCO RV042', 'Four 10/100 Ethernet port and Two 10/100 WAN port  Full IPsec VPN capabilities for up to 50 remote connections', '16500', 'networking', 'networking3182679.jpg'),
(33, 'Cisco WRVS4400N', 'Cisco WRVS4400N Wireless-N Gigabit Security Router', '30000', 'networking', 'networking5787354.jpg'),
(34, 'Double A4 Paper', 'A4 (210 x 297mm) 40 sheets, 100 sheets and 500 sheets ', '414', 'printeraccessories', 'printeraccessories6463929.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
