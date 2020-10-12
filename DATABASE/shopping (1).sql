-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 06:00 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `a_unm` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(50) NOT NULL,
  `cart_id` int(55) NOT NULL,
  `cart_pid` int(50) NOT NULL,
  `cart_qun` int(55) NOT NULL,
  `cart_name` varchar(50) NOT NULL,
  `cart_img` varchar(100) NOT NULL,
  `price` int(55) NOT NULL,
  `cart_price` int(55) NOT NULL,
  `sess` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `cart_id`, `cart_pid`, `cart_qun`, `cart_name`, `cart_img`, `price`, `cart_price`, `sess`) VALUES
(10, 0, 26, 4, 'Dell', '1590576395_1491967499_Dell Inspiron i17RN-2929BK 17-Inch Laptop (Diamond Black).jpg', 2500, 10000, 'camiqhm201rnjf1uu4chjtfhg4'),
(11, 0, 27, 4, 'Nokia', '1590576434_1492107155_3310-pureview-in-line2.jpg', 500, 2000, 'camiqhm201rnjf1uu4chjtfhg4'),
(12, 0, 0, 0, '', '', 0, 0, 'd6ua5138rr58r7j1rgid0tnv65'),
(13, 0, 5, 5, '5', '5', 5, 25, 'cg9j26k16d1fogfhp7h1abv1vv'),
(14, 0, 2, 2, '2', '2', 2, 4, 'cg9j26k16d1fogfhp7h1abv1vv');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_nm` varchar(50) NOT NULL,
  `cat_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`, `cat_time`) VALUES
(1, 'Laptop', '1491038096'),
(2, 'Mobile', '1491039049'),
(3, 'LCD', '1491133914'),
(4, 'Shoes', '1491133937'),
(5, 'Jewelary', '1491133971'),
(6, 'Cloth', '1491133989'),
(7, 'Computer Accessory', '1491134043');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(4) NOT NULL,
  `c_fnm` varchar(100) NOT NULL,
  `c_mno` varchar(10) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_msg` longtext NOT NULL,
  `c_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_fnm`, `c_mno`, `c_email`, `c_msg`, `c_time`) VALUES
(1, '', '', '', '', '1490858702'),
(2, '', '', '', '', '1490858706'),
(3, '', '', '', '', '1490858712');

-- --------------------------------------------------------

--
-- Table structure for table `cus_order`
--

CREATE TABLE `cus_order` (
  `id` int(50) NOT NULL,
  `cus_id` int(50) NOT NULL,
  `cus_proid` int(25) NOT NULL,
  `cp_name` varchar(50) NOT NULL,
  `cp_img` varchar(100) NOT NULL,
  `cp_qty` int(50) NOT NULL,
  `cp_price` int(55) NOT NULL,
  `cp_rate` int(55) NOT NULL,
  `instock` int(50) NOT NULL,
  `outstock` int(50) NOT NULL,
  `sess` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_order`
--

INSERT INTO `cus_order` (`id`, `cus_id`, `cus_proid`, `cp_name`, `cp_img`, `cp_qty`, `cp_price`, `cp_rate`, `instock`, `outstock`, `sess`) VALUES
(6, 8, 26, 'Delll', '1590576395_1491967499_Dell Inspiron i17RN-2929BK 17-Inch Laptop (Diamond Black).jpg', 100, 2500, 250000, 0, 0, 'mf0c7ssghr7oj9c67dvriuhabj');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_nm` varchar(100) NOT NULL,
  `p_cat` int(6) NOT NULL,
  `p_desc` longtext NOT NULL,
  `p_price` bigint(10) NOT NULL,
  `instock` int(50) NOT NULL,
  `stockout` int(50) NOT NULL,
  `p_war` varchar(30) NOT NULL,
  `p_img` longtext NOT NULL,
  `p_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_nm`, `p_cat`, `p_desc`, `p_price`, `instock`, `stockout`, `p_war`, `p_img`, `p_time`) VALUES
(26, 'Dell', 1, 'good', 2500, 4, 4, '1 Year', '1590576395_1491967499_Dell Inspiron i17RN-2929BK 17-Inch Laptop (Diamond Black).jpg', '1590576395'),
(27, 'Nokia', 2, 'good', 500, 95, 95, '5 Month', '1590576434_1492107155_3310-pureview-in-line2.jpg', '1590576434');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(8) NOT NULL,
  `r_fnm` varchar(100) NOT NULL,
  `r_unm` varchar(50) NOT NULL,
  `r_pwd` varchar(30) NOT NULL,
  `r_cno` varchar(10) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_unm`, `r_pwd`, `r_cno`, `r_email`, `r_time`) VALUES
(7, 'Kumar Sanu', 'Sanu', '261111', '0792550921', '\r\n			rafikbhai@yahoo.co.in', '1490701992'),
(8, 'MO.RAFIK', 'rafik', '2211', '9824838695', 'xyz@xyz.com', ''),
(9, 'MO.RAFIK', 'vikas', '261111', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `cart_name` (`cart_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cus_order`
--
ALTER TABLE `cus_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cus_order`
--
ALTER TABLE `cus_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
