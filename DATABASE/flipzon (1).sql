-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 08:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipzon`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(250) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `visible`) VALUES
(1, 'HP', 1),
(2, 'DELL', 1),
(3, 'LG', 1),
(4, 'Samsung', 1),
(5, 'Sony', 1),
(6, 'Toshiba', 1),
(7, 'Lenovo', 1),
(8, 'Apple', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_title`, `ip_address`, `quantity`) VALUES
(3, 1, 'nikon z500', '::1', 1),
(4, 3, 'Toshiba Camera', '::1', 0),
(5, 7, 'Canon Camera', '::1', 0),
(6, 2, 'Samsung camera', '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `visible`) VALUES
(1, 'Laptops', 1),
(2, 'Cameras', 1),
(3, 'Mobiles', 1),
(4, 'Computers', 1),
(5, 'Iphones', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `views`, `visible`, `date`) VALUES
(1, 1, 1, 'nikon z500', 500, 'Good laptop', 'hp laptop.jpeg', 'HP LAPTOP', 0, 0, ''),
(2, 2, 4, 'Samsung camera', 600, 'Nice camera', 'samsung camera.jpg', 'Samsung Cameras', 0, 1, ''),
(3, 2, 6, 'Toshiba Camera', 850, 'TOshiba Camera', 'toshibo camera.jpg', 'Toshiba Camera', 0, 1, ''),
(4, 4, 7, 'Lenovo Desktop', 456, 'NIce Desktop', 'lenovo desktop.png', 'Lenovo Desktop', 0, 1, ''),
(5, 1, 8, 'Apple Laptop', 1235, 'Apple Laptop', 'laptop apple.jpg', 'Apple LAptop', 0, 1, ''),
(6, 4, 2, 'DELL DESKTOP', 398, 'GOOD DESKTOP', 'dell desktop.jpg', 'DELL DESKTOP', 0, 1, ''),
(7, 2, 3, 'Canon Camera', 8754, 'GOOD CAMERA', 'canon camera.jpeg', 'Canon Camera', 0, 1, ''),
(8, 5, 8, 'Apple Tablet', 859, 'Apple Tablet', 'apple tablet.jpg', 'Apple Tablet', 0, 1, ''),
(9, 4, 8, 'Apple Desktop', 5963, 'Apple Desktop', '81XI2xLLjYL._SL1500_.jpg', 'Apple Desktop', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `user_address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'guest',
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `name`, `email`, `password`, `country`, `city`, `contact`, `user_address`, `image`, `role`, `visible`) VALUES
(1, '', 'admin', 'admin@gmail.com', 'admin', '', '', '', '', '', 'admin', 1),
(3, '::1', 'hjfyj', '123', '202cb962ac59075b964b07152d234b70', 'Barbados', 'vgc', 'vjh', 'vgh', '', 'admin', 1),
(5, '::1', 'Sandeep', 'sandeep', '202cb962ac59075b964b07152d234b70', 'Antigua & Barbuda', '123', '123', '123', '', 'guest', 1),
(6, '::1', 'Goutham', 'Goutham', '202cb962ac59075b964b07152d234b70', 'India', 'Tirupati', '123', 'IIT TIRUPATI', '', 'guest', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
