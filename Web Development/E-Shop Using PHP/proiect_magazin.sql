-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 01:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiect_magazin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_member`, `product_id`, `quantity`) VALUES
(35, 1, 104, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `fulldesc` varchar(2550) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `deal` int(1) NOT NULL,
  `news` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `category`, `description`, `fulldesc`, `manufacturer`, `room`, `color`, `material`, `code`, `deal`, `news`) VALUES
(101, 'Portable Table with Collapsible Legs', 46.80, 'https://m.media-amazon.com/images/I/91dXsw-3P-S._AC_SL1500_.jpg', '', 'Create more room for guests instantly with this convenient square black folding card table. It&#039;s the perfect way to provide extra seating when you need it. This table is perfect for everything from weddings, baby showers and banquets to game nig', '', 'fff', 'living', 'fff', 'ffff', 1, 0, 0),
(102, 'Big Joe Classic Beanbag Smartmax', 33.32, 'https://m.media-amazon.com/images/I/71+WFY9wrOL._AC_SL1500_.jpg', '', 'Sometimes you just need a classic! This is the bean bag you remember from childhood but way more awesome. Ours is covered in our durable, stain-resistant SmartMax fabric that can be spot cleaned as needed.', '', 'Big Joe', 'bedroom', 'black', 'textile', 2, 0, 0),
(103, 'HOMHUM Adjustable Standing Desk', 209.99, 'https://m.media-amazon.com/images/I/61YpyEvjZgL._AC_SL1500_.jpg', '', 'HOMHUM has been summarizing customer feedback, listening, researching and innovating every products. HOMHUM Height Adjustable Desk provide humanized design and ample room for your work area.', '', 'HOMHUM', 'study', 'white', 'wood', 3, 1, 1),
(104, 'Roundhill Furniture Habit', 144.82, 'https://m.media-amazon.com/images/I/91U6p29KjsL._AC_SL1500_.jpg', '', 'Bring a touch of elegance into your home with the Roundhill Furniture Habit Solid Wood Tufted Parsons Dining Chair Set.This soft, cushioned chair features an extraordinary design with a tufted back and cushioned seat to aid comfort.', '', 'Roundhill', 'kitchen', 'white', 'textile', 4, 1, 1),
(106, 'HTTYYX Bamboo Bedside Shelf for Bed', 46.99, 'https://m.media-amazon.com/images/I/71FD6ikhnuL._AC_SL1500_.jpg', '', ' Have you ever thought about how nice it would be to reach the things within arm&#039;s reach? Now everything you need is achieved and right by your side with our beside shelf.', '', 'HTTYYX', 'bedroom', 'brown', 'wood', 6, 0, 0),
(107, 'Set of 2 Counter Height Bar Stools', 139.99, 'https://m.media-amazon.com/images/I/71V8ytPePLL._AC_SL1500_.jpg', '', '2 x Bar Stool1 x Set of Tools1 x Instructions', '', 'fds', 'kitchen', 'black', 'leather', 7, 0, 0),
(108, 'HOMHUM 32 Inch LED Bathroom Mirror', 179.99, 'https://m.media-amazon.com/images/I/71sfLN-II6L._AC_SL1500_.jpg', '', 'Ajustable toneAdjust the warm and cold tones at willDurable and safe LED strip', '', 'HOMHUM', 'bathroom', 'white', 'glass', 8, 0, 0),
(100132, 'laptop', 123.00, 'dsa', '512312', 'aherswfads', 'fas', 'dsasda', 'sda', 'dfg', '', 560196, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(3, 'costel', 'costel@yahoo.com', '$2y$10$DtlAbtpHDBjy.EoW8m4X2ezRLppO5GfLb08dXmZgvbnKO6KQQPKDW', 0),
(4, 'ancuta', 'ancuta@yahoo.com', '$2y$10$Sez0MMQCu6SsIM6HIO6/sejZR8hVu4hPE60lkUzz8jjZOFbJYH4/m', 0),
(5, 'petruta', 'petruta@yahoo.com', '$2y$10$PeMw/qGo1t88N2T7/aah.ey3o4inr8ynGqQWAtG9SeKLCqcSPC19C', 0),
(6, 'petunia', 'petunia@yahoo.com', '$2y$10$ArQbxHqxI.GuOPnV.ApNue3MSSI4cU.1BsCPtY6ga88kC9GOMT4ra', 0),
(7, 'admin', 'admin@yahoo.com', '$2y$10$dObomn8g1zYj5rkKskVtL.pWzootTNA7k4x07Vbe2DUlixM2.6kc2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`id_member`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100133;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
