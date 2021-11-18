-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 01:26 PM
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
(1, 'admin', 'admin@gmail.com', '123'),
(2, 'kajal', 'kajalpanchal2776@gma', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` bigint(100) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_id`, `p_name`, `p_price`, `p_image`) VALUES
(111, '20', 'Esprit Ruffle Shirt', 17, '../images/product-01.jpg'),
(113, '18', 'T-shirt', 20, '../images/gallery-06.jpg'),
(114, '27', 'Eco-Drive Classic', 100, '../images/watch3.jpg'),
(115, '24', 'shirt in stretch', 50, '../images/product-07.jpg');

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
(7, 'Electronics');

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
(15, 'Shirts', 20, 'Slim Fit | Mid Rise | Ankle Length Wide waistband with soft knitted elastic offers comfortable waist support Two invisible zipper pockets to keep your essentials safe	', '../images/blog-02.jpg', 'Men', 1),
(16, 'watch', 700, 'Care Instructions: machine Wash Fit Type: Slim Fabric: Stretch french terry Care Instructions: Machine Wash Fit Type: Slim Fabric: Stretch french terry	', '../images/watch1.webp', 'Accessories', 1),
(18, 'T-shirt', 20, 'Slim Fit | Mid Rise | Ankle Length Wide waistband with soft knitted elastic offers comfortable waist support Two invisible zipper pockets to keep your essentials safe	', '../images/gallery-06.jpg', 'Women', 1),
(19, 'suit', 80, 'Suits  comfort wash', '../images/banner-02.jpg', 'Men', 1),
(20, 'Esprit Ruffle Shirt', 17, 'Suits comfort wash', '../images/product-01.jpg', 'Women', 1),
(21, 'Herschel Supply', 35, 'soft knitted elastic offers comfortable waist', '../images/product-02.jpg', 'Women', 1),
(22, 'Classic Trench Coat', 75, 'Two invisible zipper pockets to keep your essentials safe', '../images/product-04.jpg', 'Women', 1),
(24, 'shirt in stretch', 50, ' zipper pockets to keep your essentials safe', '../images/product-07.jpg', 'Women', 1),
(25, 'Fossil', 80, 'Whether youâ€™re looking to track key health metrics, ', '../images/watch1.jpg', 'Accessories', 1),
(26, 'samsung', 90, 'Super AMOLED display with customizable Always on Watchfaces\r\nConnectivity - Bluetooth 5.0\r\n39 built in trackers with 50m Water Resistance', '../images/watch2.jpg', 'Accessories', 1),
(27, 'Eco-Drive Classic', 100, 'The pink-gold stainless steel bracelet is embellished with crystals, with additional crystals', '../images/watch3.jpg', 'Accessories', 1),
(28, 'Rado', 90, ' This Citizen watch is water resistantIn general, suitable for short periods of recreational swimming', '../images/watch5.jpg', 'Accessories', 1),
(29, 'plane shirts', 70, 'Slightly stretchy\r\nThickness:\r\nLightweight\r\n', '../images/product-03.jpg', 'Men', 1),
(30, 'casual', 90, 'Casual,Summer,Winter,All Season,Spring', '../images/product-min-02.jpg', 'Men', 1),
(31, 'printed', 90, 'Left chest pocket with pencil slot and button closure\r\nDouble pleat back for ease of movement', '../images/shirt1.jpg', 'Men', 1);

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
  ADD PRIMARY KEY (`cart_id`);

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
  MODIFY `a_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `p_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
