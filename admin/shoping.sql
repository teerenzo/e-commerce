-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2021 at 02:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(13, 'Shop', 'earbuds shop', '2021-04-04 09:15:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', 'in Process'),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 4, '4', 1, '2020-09-17 08:06:51', 'Debit / Credit card', 'Delivered'),
(8, 4, '1', 4, '2020-09-17 09:49:39', 'COD', NULL),
(9, 4, '1', 4, '2020-09-17 09:50:40', 'COD', NULL),
(10, 4, '1', 1, '2020-09-17 10:27:15', 'COD', NULL),
(11, 4, '2', 1, '2020-09-17 11:24:56', 'COD', NULL),
(12, 4, '1', 1, '2020-09-18 09:35:37', 'COD', 'Delivered'),
(13, 4, '3', 1, '2020-09-21 18:41:22', 'COD', NULL),
(14, 4, '1', 2, '2020-09-22 08:34:04', 'COD', NULL),
(15, 4, '3', 1, '2020-09-22 08:34:05', 'COD', NULL),
(16, 4, '1', 2, '2020-09-23 08:20:03', 'COD', NULL),
(17, 4, '1', 1, '2020-09-23 08:24:10', 'COD', NULL),
(18, 4, '1', 1, '2020-09-23 08:24:27', 'COD', NULL),
(19, 4, '1', 1, '2020-09-23 08:24:56', 'COD', NULL),
(20, 4, '1', 1, '2020-09-23 08:25:29', 'COD', NULL),
(21, 4, '1', 1, '2020-09-23 09:01:47', 'COD', NULL),
(22, 6, '25', 1, '2021-04-07 21:15:45', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'in Process', 'wait', '2020-09-17 08:08:00'),
(6, 7, 'Delivered', 'delived', '2020-09-17 08:08:47'),
(7, 1, 'in Process', 'wait', '2020-09-17 11:48:04'),
(8, 12, 'Delivered', 'delivered\r\n', '2020-09-18 09:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(25, 13, 22, 'earbuds plus', 'ink', 90000, 100000, 'hvyfyfyhh<div>gggygu</div><div>yfy</div><div>ffyy</div>', '71XmaVatm2L._SL1500_.jpg', 'xiaomi_mi_true_wireless_earbuds_basic_2_01_l.jpg', '329257_1.jpg', 0, 'In Stock', '2021-04-04 10:28:03', NULL),
(26, 13, 22, 'earbuds plus', 'ink', 90000, 100000, 'hvyfyfyhh<div>gggygu</div><div>yfy</div><div>ffyy</div>', '71XmaVatm2L._SL1500_.jpg', 'xiaomi_mi_true_wireless_earbuds_basic_2_01_l.jpg', '329257_1.jpg', 0, 'In Stock', '2021-04-04 10:32:08', NULL),
(27, 13, 22, 'earbuds plus', 'ink', 90000, 100000, 'hvyfyfyhh<div>gggygu</div><div>yfy</div><div>ffyy</div>', '71XmaVatm2L._SL1500_.jpg', 'xiaomi_mi_true_wireless_earbuds_basic_2_01_l.jpg', '329257_1.jpg', 0, 'In Stock', '2021-04-04 10:32:13', NULL),
(28, 13, 22, 'earbuds plus', 'ink', 90000, 100000, 'hvyfyfyhh<div>gggygu</div><div>yfy</div><div>ffyy</div>', '71XmaVatm2L._SL1500_.jpg', 'xiaomi_mi_true_wireless_earbuds_basic_2_01_l.jpg', '329257_1.jpg', 0, 'In Stock', '2021-04-04 10:33:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 4, 'Iphones', '2017-01-26 16:24:52', '26-01-2017 11:03:40 PM'),
(3, 4, 'Samsungs', '2017-01-26 16:29:09', ''),
(8, 3, 'Laptops', '2017-02-04 04:13:54', '17-09-2020 01:40:23 PM'),
(9, 3, 'Desktops', '2017-02-04 04:36:45', ''),
(10, 5, 'Charges', '2017-02-04 04:37:02', ''),
(11, 5, 'HeadPhone', '2017-02-04 04:37:51', ''),
(13, 7, 'iphones', '2020-09-18 09:51:05', NULL),
(14, 8, 'watches', '2020-09-18 10:35:56', NULL),
(15, 5, 'screen protectors', '2020-09-22 09:49:47', NULL),
(16, 4, 'huawei', '2020-09-27 10:47:06', NULL),
(17, 10, 'protectors', '2020-09-27 16:24:08', NULL),
(18, 11, 'computer', '2020-09-29 09:54:55', NULL),
(19, 11, 'accessories', '2020-09-29 10:28:42', NULL),
(20, 11, 'speakers', '2020-09-29 11:14:35', NULL),
(21, 12, 'UBL', '2020-10-01 09:25:58', NULL),
(22, 13, 'ink', '2021-04-04 10:27:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:18:50', '', 1),
(2, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:29:33', '', 1),
(3, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:30:11', '', 1),
(4, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 15:00:23', '26-02-2017 11:12:06 PM', 1),
(5, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:08:58', '', 0),
(6, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:09:41', '', 0),
(7, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:04', '', 0),
(8, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:31', '', 0),
(9, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:13:43', '', 1),
(10, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:52:58', '', 0),
(11, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:53:07', '', 1),
(12, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:09', '', 0),
(13, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:15', '', 1),
(14, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-06 18:10:26', '', 1),
(15, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 12:28:16', '', 1),
(16, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:43:27', '', 1),
(17, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:55:33', '', 1),
(18, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 19:44:29', '', 1),
(19, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-08 19:21:15', '', 1),
(20, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:19:38', '', 1),
(21, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:20:36', '15-03-2017 10:50:39 PM', 1),
(22, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-16 01:13:57', '', 1),
(23, 'hgfhgf@gmass.com', 0x3a3a3100000000000000000000000000, '2018-04-29 09:30:40', '', 1),
(24, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-17 08:06:05', '17-09-2020 02:16:34 PM', 1),
(25, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-17 09:49:08', NULL, 1),
(26, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-17 10:27:11', '17-09-2020 04:40:07 PM', 1),
(27, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-17 11:24:51', '17-09-2020 05:18:26 PM', 1),
(28, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-17 11:48:40', '18-09-2020 03:03:19 PM', 1),
(29, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-18 09:35:06', NULL, 0),
(30, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-18 09:35:18', '18-09-2020 03:25:45 PM', 1),
(31, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-18 10:46:18', NULL, 1),
(32, 'patty@gmail.com', 0x3a3a3100000000000000000000000000, '2020-09-23 08:19:45', '23-09-2020 03:45:58 PM', 1),
(33, 'nshimiyimanaamani2@gmail.com', 0x3a3a3100000000000000000000000000, '2021-04-07 21:15:29', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingCity`, `shippingPincode`, `regDate`, `updationDate`) VALUES
(1, 'Anuj Kumar', 'anuj.lpu1@gmail.com', 9009857868, 'f925916e2754e5e03f75dd58a5733251', 'kigali', 'nyamirambo', 8993939, '2017-02-04 19:30:50', ''),
(2, 'Amit ', 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '', '', 0, '2017-03-15 17:21:22', ''),
(3, 'hg', 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '', '', 0, '2018-04-29 09:30:32', ''),
(4, 'patrick ishimwe', 'patty@gmail.com', 782214140, '827ccb0eea8a706c4c34a16891f84e7b', 'kgl', 'nnn', 123, '2020-09-17 08:05:34', NULL),
(5, 'nshimiyimana', 'fabricedmniyonshuti@gmail.com', 782002755, '123456789', 'nyamirambo', NULL, NULL, '2020-10-18 16:24:03', NULL),
(6, 'nshimiyimana amani', 'nshimiyimanaamani2@gmail.com', 8765, '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, '2021-04-07 21:15:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17'),
(4, 1, 3, '2020-09-17 12:45:59'),
(7, 4, 15, '2020-09-21 18:14:02'),
(8, 4, 16, '2020-09-21 18:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
