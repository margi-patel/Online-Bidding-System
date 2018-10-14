-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 02:58 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biddingsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adloginfo`
--

CREATE TABLE IF NOT EXISTS `adloginfo` (
  `ip` varchar(30) NOT NULL,
  `browser` varchar(70) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adloginfo`
--

INSERT INTO `adloginfo` (`ip`, `browser`, `date`) VALUES
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-01 17:09:45'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:13:28'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:20:06'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:21:48'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:51:31'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:52:07'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:54:59'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:56:01'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 01:57:40'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 02:30:56'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 04:45:20'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 04:46:43'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 04:51:02'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-16 04:54:56'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 01:05:36'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 01:06:58'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 01:11:40'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 01:46:09'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 02:14:43'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 02:15:54'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-03 09:36:40'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-08 11:24:57'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-08 13:23:16'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-09 14:42:48'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-04 18:30:17'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-04 20:57:39'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-05 20:05:07'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-05 21:27:16'),
('127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-04-05 22:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bidreport`
--

CREATE TABLE IF NOT EXISTS `bidreport` (
  `bidid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `bidder` varchar(60) NOT NULL,
  `biddatetime` varchar(60) NOT NULL,
  `bidamount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bidid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bidreport`
--

INSERT INTO `bidreport` (`bidid`, `productid`, `bidder`, `biddatetime`, `bidamount`, `status`) VALUES
(1, 2, '3', '2016-04-01 17:03:22', 10001, 0),
(2, 2, '2', '2016-04-01 17:08:14', 10002, 0),
(3, 1, '2', '2016-04-01 17:48:50', 25500, 1),
(4, 2, '2', '2016-04-02 18:54:11', 10003, 1),
(5, 3, '3', '2016-04-03 01:52:56', 17201, 1),
(6, 1, '3', '2016-04-03 11:22:57', 25501, 1),
(7, 5, '7', '2016-04-04 20:57:01', 49905, 0),
(8, 4, '8', '2016-04-05 22:08:13', 59902, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `memberid` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(60) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`memberid`, `ip`, `browser`, `date`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0.2) Gecko/20100101 Firefo', '2011-09-20 19:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `verification` varchar(5) NOT NULL,
  `memberimg` varchar(100) NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberid`, `lastname`, `firstname`, `gender`, `userid`, `password`, `email`, `contactno`, `birthdate`, `address`, `verification`, `memberimg`) VALUES
(1, 'Payal', 'Parekh', 'Female', 'payal', '123456', 'payal@yahoo.com', 9998711223, '4 July 1987', 'Bharuch 12, Hari Om Society', 'no', 'default.jpg'),
(2, 'Kapil', 'Dev', 'Male', 'kapil', '123456', 'kapil@yahoo.com', 9990955555, '7 June 1990', 'Bharuch 12, Hari Om Society', 'yes', 'default.jpg'),
(3, 'Sunil', 'Kohli', 'Male', 'sunilkohli', 'sunil1234', 'sunil@yahoo.com', 9990000111, '7 Febuary 1982', '23, Hari Om Building, M G Road, Ahmedabad', 'yes', 'sunil.jpeg'),
(4, 'Suresh', 'Chelwani', 'Male', 'suresh1234', 'suresh1234', 'sunil@yahoo.com', 8898800111, '2 January 1984', 'Bharuch 23, Hari Har Building, M G Road', 'yes', 'default.jpg'),
(5, 'Priya', 'Patel', 'Female', 'priya1234', 'priya1234', 'priya@yahoo.com', 8898800345, '1 January 1980', 'Ahmedabad 23, Hari Om Building, M G Road, Ahmedabad', 'yes', 'priya.jpeg'),
(6, 'Priyanka', 'Chopra', 'Female', 'priyankachopra', 'priyankachopra', 'priyanka@gmail.com', 8898888221, '1 January 1985', 'Anand F-303, RK Casta, Bharuch', 'yes', 'default.jpg'),
(7, 'chelwani', 'tony', 'Male', 'tony1234', 'tony1234', 'tony@gmail.com', 8898800111, '2 January 1981', 'Ahmedabad 23, Hari Om Building, M G Road, Ahmedabad', 'yes', 'default.jpg'),
(8, 'Pratiksha', 'Parekh', 'Female', 'thepratiksha', '123456', 'pratiksha@hotmail.com', 9876011567, '8 July 1980', 'Bharuch A-101, Marina Heights, Station Road', 'yes', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `msgnotifs`
--

CREATE TABLE IF NOT EXISTS `msgnotifs` (
  `msgnotifsid` int(11) NOT NULL AUTO_INCREMENT,
  `toid` varchar(11) NOT NULL,
  `fromid` varchar(11) NOT NULL,
  `msgnotif` varchar(300) NOT NULL,
  `datecreated` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`msgnotifsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `msgnotifs`
--

INSERT INTO `msgnotifs` (`msgnotifsid`, `toid`, `fromid`, `msgnotif`, `datecreated`, `status`) VALUES
(1, 'admin', '1', 'bwahahahahaha', 'ddfdfdfdfdf', 1),
(2, 'sunilkohli', 'Admin', 'Your product is not approved', '', 1),
(3, 'sunilkohli', 'Admin', 'Your Product approved', '09-9977=098', 0),
(4, 'priya1234', 'Admin', 'Your Product Dell Inspiron is Approved', '2016-04-05 21:30:16', 1),
(5, 'priya1234', 'Admin', 'Your Product Moto X Play is Not Approved', '2016-04-05 21:32:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `needtopay`
--

CREATE TABLE IF NOT EXISTS `needtopay` (
  `needtopayid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `declined` int(11) NOT NULL,
  `dateadded` varchar(40) NOT NULL,
  PRIMARY KEY (`needtopayid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `needtopay`
--

INSERT INTO `needtopay` (`needtopayid`, `memberid`, `productid`, `status`, `payment`, `declined`, `dateadded`) VALUES
(1, 2, 1, 1, 25500, 0, '2016-04-05'),
(2, 2, 2, 1, 10003, 1, '2016-04-16'),
(3, 2, 1, 0, 25500, 0, '2016-04-16'),
(4, 3, 3, 1, 17201, 0, '2016-05-03'),
(5, 2, 1, 0, 25500, 0, '2016-05-03'),
(6, 2, 2, 0, 10003, 0, '2016-04-08'),
(7, 3, 1, 1, 25501, 0, '2016-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE IF NOT EXISTS `pcategories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(50) NOT NULL,
  `catimage` varchar(100) NOT NULL,
  `categorydes` varchar(250) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pcategories`
--

INSERT INTO `pcategories` (`categoryid`, `categoryname`, `catimage`, `categorydes`) VALUES
(1, 'Laptop Computers', 'HP.jpeg', 'All kinds of laptop from various companies'),
(2, 'Cellphones', 'p1.png', 'Different Cellphones of various companies'),
(3, 'Computer Accessories', 'Dell_external.jpeg', 'It contains all accessories related to computer'),
(4, 'Desktop Computers', 'desktop.jpeg', 'Collection of quality desktop computers'),
(5, 'Jewellery', 'jwellery.jpg', 'Quality jwellery collection at one place'),
(6, 'Consumer Electronics', 'consumer_electronic.jpg', 'All electronics products');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `prodname` varchar(30) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `prodescription` varchar(300) NOT NULL,
  `startingbid` int(11) NOT NULL,
  `prodimage` varchar(100) NOT NULL,
  `regularprice` int(11) NOT NULL,
  `dateposted` date NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `sellername` varchar(30) NOT NULL,
  `sellerpayaccount` varchar(30) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `prodname`, `categoryid`, `prodescription`, `startingbid`, `prodimage`, `regularprice`, `dateposted`, `duedate`, `status`, `sellername`, `sellerpayaccount`) VALUES
(1, 'Dell', 1, 'Dell i3 processor, 3GB RAM, 1TB HDD, 15" Flat Monitor', 25000, 'Dell_external.jpeg', 20000, '2016-03-07', '2016-04-07', '1', '', ''),
(2, 'Gold Bangles', 5, 'Gold bangles of 24 carat', 10000, '1.jpg', 9500, '2016-04-01', '2016-04-15', '1', '', ''),
(3, 'Samsung MC288TVTCSQ', 6, 'Microwave Capacity: 28 Litres, Control Type: Tact + Dial, Cavity Type: Ceramic Enamel, Variable Cooking Power Levels: 6', 17200, 'oven.jpg', 17100, '2016-04-03', '2016-05-03', '0', '', ''),
(4, 'Samsung Galaxy S6 Edge', 2, '1 Year Manufacturer Warranty', 59901, 'Samsung-Galaxy-S6-Edge.jpg', 59900, '2016-04-04', '2016-05-05', '0', 'tony1234', 'tony@gmail.com'),
(5, 'Samsung Galaxy S6', 2, '1 Year Manufacturer Warranty,16 MP Rear & 5 MP Front Camera', 49901, 'Samsung-Galaxy-S6-Edge.jpg', 49900, '2016-04-04', '2016-05-05', '0', 'tony1234', 'tony@gmail.com'),
(6, 'Dell Inspiron', 4, 'i3 cpu, 4GB Ram, 1TB HDD', 39999, 'Dell-Inspiron-3647.jpg', 39990, '2016-04-05', '2016-05-06', '0', 'priya1234', 'priya@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `productsforapproval`
--

CREATE TABLE IF NOT EXISTS `productsforapproval` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `prodname` varchar(30) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `prodescription` varchar(300) NOT NULL,
  `startingbid` int(11) NOT NULL,
  `prodimage` varchar(100) NOT NULL,
  `regularprice` int(11) NOT NULL,
  `dateposted` date NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `sellername` varchar(30) NOT NULL,
  `sellerpayaccount` varchar(30) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productsforapproval`
--

INSERT INTO `productsforapproval` (`productid`, `prodname`, `categoryid`, `prodescription`, `startingbid`, `prodimage`, `regularprice`, `dateposted`, `duedate`, `status`, `sellername`, `sellerpayaccount`) VALUES
(1, 'Samsung Galaxy S6 Edge', 2, '1 Year Manufacturer Warranty,16 MP Rear & 5 MP Front Camera', 59901, 'Samsung-Galaxy-S6-Edge.jpg', 59900, '2016-04-04', '2016-05-05', '1', 'tony1234', 'tony@gmail.com'),
(2, 'Samsung Galaxy S6', 2, '1 Year Manufacturer Warranty,16 MP Rear & 5 MP Front Camera', 49901, 'Samsung-Galaxy-S6-Edge.jpg', 49900, '2016-04-04', '2016-05-05', '1', 'tony1234', 'tony@gmail.com'),
(3, 'Dell Inspiron', 4, 'i3 cpu, 4GB Ram, 1TB HDD', 39999, 'Dell-Inspiron-3647.jpg', 39990, '2016-04-05', '2016-05-06', '1', 'priya1234', 'priya@yahoo.com'),
(4, 'Moto X Play', 2, '3630 mAh Battery, Camera: 21 MP | 5 MP, Octa-core Processor, 5.5 inch FHD Screen', 19000, 'MotoX.jpeg', 18999, '2016-04-05', '2016-05-06', '2', 'priya1234', 'priya@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `secretquestions`
--

CREATE TABLE IF NOT EXISTS `secretquestions` (
  `memberid` int(11) NOT NULL,
  `question` varchar(60) NOT NULL,
  `answer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretquestions`
--

INSERT INTO `secretquestions` (`memberid`, `question`, `answer`) VALUES
(2, 'Am I Gorgeous?', 'yes'),
(3, 'Am I Gorgeous?', 'Yes'),
(6, 'Am I Gorgeous?', 'yes'),
(8, 'Am I Gorgeous?', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE IF NOT EXISTS `watchlist` (
  `memberid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`memberid`, `productid`) VALUES
(1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
