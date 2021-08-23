-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 10:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`) VALUES
(1, 'Computers'),
(2, 'Phones'),
(3, 'Camera');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetailId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `price` float NOT NULL,
  `profile` varchar(1000) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `year`, `price`, `profile`, `categoryId`) VALUES
(41, 'Mac_x_11', 2020, 2334, 'post-61213e05e69640.68812811.png', 1),
(42, 'iphone x-pro', 2021, 589, 'post-61213ede98c7b1.32516034.png', 2),
(45, 'Mac_x_13', 2021, 2343, 'post-612145dd51da97.90236633.jpg', 1),
(46, 'Mac_12', 2021, 3433, 'post-61214621f2e762.11133877.jpg', 1),
(47, 'Mac_xe-pro', 2021, 2432, 'post-61214640f01bd9.51299905.jpg', 1),
(48, 'Mac_x_11_pro', 2021, 4543, 'post-612146622ef299.06272990.png', 1),
(49, 'Mac_x2_fx', 2021, 5423, 'post-612146809aa0e2.36821936.png', 1),
(50, 'Mac_pro_mix', 2021, 4323, 'post-612146c7c468e1.69634534.png', 1),
(51, 'Mac_xe_pro_11', 2021, 3543, 'post-612146e9c17cd2.32110737.png', 1),
(52, 'lap_pro3456', 2018, 8761, 'post-61214720d82af8.62329431.png', 1),
(54, 'Mac_x_lap-11', 2021, 987, 'post-612147832e1485.03579434.jpg', 1),
(56, 'iphone xr-plus', 2021, 875, 'post-612147c9a0c443.13762894.jpg', 2),
(57, 'Iphone_x_plus+', 2020, 532, 'post-612147ef800187.72394335.png', 2),
(59, 'IphoneX_11_plus+', 2021, 654, 'post-61214863d5bc12.22593689.png', 2),
(60, 'iphoneXR_prise', 2021, 876, 'post-612148937474b6.35825899.png', 2),
(61, 'IphoneX-11_ plus+', 2020, 543, 'post-612148c6208262.10851487.jpg', 2),
(62, 'iphone xr_minimax', 2020, 543, 'post-612148ee7a6972.52067571.png', 2),
(63, 'iphone x-pro', 2020, 345, 'post-612149146e01f1.62184133.png', 2),
(64, 'IphoneX_11_plus+', 2021, 687, 'post-61214948ac9825.08501699.png', 2),
(65, 'IphoneX_11_plus+', 2021, 865, 'post-6121497b395ad9.56271342.png', 2),
(66, 'iphone x', 2019, 452, 'post-612149a873b883.20692690.png', 2),
(67, 'IphoneX_11_plus+', 2021, 876, 'post-612149df52fa75.59057586.jpg', 2),
(68, 'Mac_x_11', 2021, 433, 'post-61214de39dbed3.69737894.png', 1),
(69, 'Cam_HD', 2020, 1354, 'post-61214e0a8aa4e7.77183220.png', 3),
(70, 'Cam_HD-x', 2021, 1389, 'post-61214e3e62a5e7.05929792.jpg', 3),
(71, 'Cam_HD-x-Mac', 2020, 1533, 'post-61214e6d318529.19129103.png', 3),
(72, 'Cam_HD-beauty-plus', 2021, 237, 'post-61214e9c3fc049.60296802.jpg', 3),
(73, 'Cam_HD-beauty-plus', 2021, 2477, 'post-61214ec7c4b6c5.17751337.jpg', 3),
(74, 'Cam_HD-beauty-x', 2021, 2875, 'post-61214f030b3be8.98470497.jpg', 3),
(78, 'Cam_HD-x-Macssdssd', 2020, 1453, './assets/post_images/post-612223b055a706.93830873.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleId` int(11) NOT NULL,
  `function` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `function`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `roleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `roleId`) VALUES
(54, 'phearak eng', 'phearak@gmail.com', '$2y$10$4zQvbAIGtg.2B9GP.RZ/S.XCFSc0QmqVcnOxkbmvkzGHnhc8vi3vW', 2),
(55, 'phally chun', 'phally.chun@gmail.com', '$2y$10$4LyDW9lYMnzqYwLVhNV1p.RrF4s7ldfa04uMhenvVSzWy4fIhqF.G', 1),
(56, 'pros nob', 'pros.nub@student.passerellesnumeriques.org', '$2y$10$y7lb2P3LzYgMOaSu1QzPHuAZRVRePDTgi0c1nRqvvEb6zxusDi7zK', 2),
(57, 'rady y', 'rady.y@gmail.com', '$2y$10$JLZqxt2s3MSfQMPqU.4TCuL7LfYNauk7/ac04ohSD7zS2GKIKexeO', 1),
(58, 'bunsal hul', 'bunsal@gmail.com', '$2y$10$RxA6N.UJIhP8yGKmN6gE2uodY5InId/fo8Pnwy9N1ivU6MVMJsASy', 2),
(59, 'ronan', 'ronan@gmail.com', '$2y$10$U5e5NxUVuGAkL1Rs3XKqYuN/IYQRPoKKWBLsmHu0vxx/7bEQBqcue', 2),
(60, 'vuthy yib', 'vuthy.yib@gmail.com', '$2y$10$vvjau9UJ/XY5WfzlLOK3xu9i6RlkxdDwTrv0O19y3AFaFq0WgI3Je', 2),
(61, 'phearak eng', 'lock.lak@student.passerellesnumeriques.org', '$2y$10$zaRWnTupaJNACYt2/9Q57ub6qmp9mpOHLt94PV7gZ4/td8/9s2iDW', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetailId`),
  ADD KEY `productId` (`productId`,`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetailId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
