-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'admin@gmail.com', 'CLFA5B6ED7');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkedout` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_email`, `quantity`, `checkedout`) VALUES
(51, 4, 'ram@gmail.com', 1, 0),
(75, 27, 'bishal.dmarketer@gmail.com', 1, 0),
(76, 26, 'bishal.dmarketer@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Flu & Cold', '1'),
(2, 'Vitamins & Supplements', '1'),
(3, 'Chickenpox', '0'),
(4, 'hello', '1');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `deal_name` varchar(50) NOT NULL,
  `deal_cost` int(15) NOT NULL,
  `deal_count` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`deal_name`, `deal_cost`, `deal_count`) VALUES
('smartdeal', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `full_name`, `phone_number`) VALUES
('bishal.dmarketer@gmail.com', '$2y$10$fGWucO0aANaG0svs2MS65e1MgtnHGoWlvN18lp1kT8dL8Kp7es6x6', 'Cisco Aryal', '9867718913'),
('bishal@gmail.com', '$2y$10$nE3VGZM6bT3wSCsRM3kApO.zEAr6zokEJO45ujsjSBRXuV2g72ZqW', 'Bishal Aryal', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `state_country` varchar(50) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `order_id` int(5) NOT NULL,
  `customer_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_cost` float NOT NULL,
  `product_description` varchar(512) NOT NULL,
  `product_image` varchar(10000) NOT NULL,
  `product_count` int(10) NOT NULL,
  `product_characteristic` varchar(8096) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_cost`, `product_description`, `product_image`, `product_count`, `product_characteristic`, `product_category`, `product_status`) VALUES
(20, 'Crocin', 10, 'Crocin is a carotenoid chemical compound that is found in the flowers crocus and gardenia. Crocin is the chemical primarily responsible for the color of saffron. Chemically, crocin is the diester formed from the disaccharide gentiobiose and the dicarboxylic acid crocetin.', 'crocin.jpg', 296, 'Citerpenoids', 1, '1'),
(21, 'Paracetamol', 10, 'Paracetamol is a common painkiller used to treat aches and pain. It can also be used to reduce a high temperature.', 'paracetamol-tablet.jpg', 12, 'Analgesics and Antipyretics', 1, '1'),
(22, 'Mylod', 11, 'MYLOD belongs to a class of Calcium Channel Blocker. It is used with or without other medications to treat high blood pressure and chest pain.  It works by relaxing blood vessels, so blood can flow more easily.', 'mylod-25_320x200.jpg', 10, 'Calcium Channel Blocker', 2, '1'),
(23, 'TELSARTAN', 13, 'TELSARTAN belongs to a class of angiotensin II receptor blocker (ARB). It works by relaxing blood vessels, which helps to lower blood pressure. It is also used to reduce the risk of heart attack, stroke, or death due to heart problems in certain patients.', 'Telsartan-1.jpg', 23, 'Angiotensin receptor blockers', 1, '1'),
(24, 'ATENOL', 14, 'ATENOL belongs to a class of beta-blocker which affects the heart and circulation (blood flow through arteries and veins). This drug is used to treat chest pain, reduces high blood pressure and lowers the risk of death after heart attack.', 'Atenol-1.jpg', 24, 'Beta blockers', 1, '1'),
(25, 'Terbinafine Cream', 15, 'Terbinafine is an antifungal medication that fights infections caused by fungus. Terbinafine cream is used to treat infections caused by fungus that affect the fingernails or toenails.\r\n', 'terbinafine.jpg', 24, 'Antifungals', 3, '1'),
(26, 'Metronidazole ', 17, 'Metronidazole is an antibiotic that is used to treat a wide variety of infections. It works by stopping the growth of certain bacteria and parasites. This antibiotic treats only certain bacterial and parasitic infections.', '10098_420.jpg', 9, 'Nitroimidazole Antimicrobials', 3, '1'),
(27, 'Pantoprazole ', 17, 'Pantoprazole is used to treat certain stomach and esophagus problems (such as acid reflux). It works by decreasing the amount of acid your stomach makes.', 'pantoprazole-40mg.jpg', 23, 'Proton-Pump Inhibitors', 2, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`deal_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`product_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
