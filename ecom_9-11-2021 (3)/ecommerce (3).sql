-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 01:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` bigint(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` bigint(10) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Accessories'),
(7, 'Electronic');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `p_id` bigint(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` bigint(50) NOT NULL,
  `p_desc` text NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `is_active` bigint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`p_id`, `p_name`, `p_price`, `p_desc`, `p_image`, `c_name`, `is_active`) VALUES
(15, 'Shirt', 800, 'Slim Fit | Mid Rise | Ankle Length Wide waistband with soft knitted elastic offers comfortable waist support Two invisible zipper pockets to keep your essentials safe	', '../images/blog-05.jpg', 'Men', 1),
(16, 'watch', 700, 'Care Instructions: machine Wash Fit Type: Slim Fabric: Stretch french terry Care Instructions: Machine Wash Fit Type: Slim Fabric: Stretch french terry	', '../images/banner-07.jpg', 'Accessories', 1),
(18, 'T-shirts', 300, 'Slim Fit | Mid Rise | Ankle Length Wide waistband with soft knitted elastic offers comfortable waist support Two invisible zipper pockets to keep your essentials safe	', '../images/product-08.jpg', 'Women', 1),
(19, 'Tshirts', 800, 'Tshirts suits  ', '../images/product-detail-02.jpg', 'Men', 1),
(21, 'Watch', 999, 'bngfnf', '../images/w.jpg', 'Accessories', 1),
(22, 'c Watch', 40, 'jkfbsdjkf', '../images/w1.jpg', 'Accessories', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `p_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
