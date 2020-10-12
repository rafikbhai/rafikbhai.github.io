-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 12:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
  `cart_qun` int(55) NOT NULL,
  `cart_name` varchar(50) NOT NULL,
  `cart_img` varchar(100) NOT NULL,
  `price` int(55) NOT NULL,
  `cart_price` int(55) NOT NULL,
  `sess` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sess` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `p_war` varchar(30) NOT NULL,
  `p_img` longtext NOT NULL,
  `p_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_nm`, `p_cat`, `p_desc`, `p_price`, `p_war`, `p_img`, `p_time`) VALUES
(15, 'Dell', 1, 'good', 5000, '5 Month', '1511409069_laptop.jpg', '1511409069'),
(16, 'HP LAPTOP', 1, 'Good', 2500, 'Life Time', '1511409172_HP_Pavilion_models.jpg', '1511409172'),
(17, 'T_Shirts', 6, 'GOOD', 200, '3 Month', '1511409205_1432074641179.jpg', '1511409205'),
(18, 'BABY SHIRT', 6, 'GOOD', 300, 'No Warrenty', '1511409246_1432074641512.jpg', '1511409246'),
(19, 'Nokia Camera', 2, 'GOOD', 200, 'No Warrenty', '1511409280_3310-pureview-in-line2.jpg', '1511409280'),
(20, 'Samsung_Tv', 3, 'GOOD', 2500, '6 Year', '1511409322_samsung-la40d503-multisystem-lcd-tv.jpg', '1511409322'),
(21, 'BATA SHOES', 4, 'GOOD', 1500, '7 Year', '1511409372_1432080074210.jpg', '1511409372');

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
(7, 'Kumar Sanu', 'Sanu', '261111', '0792550921', '\r\n			rafikbhai@yahoo.co.in', '1490701992');

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
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
