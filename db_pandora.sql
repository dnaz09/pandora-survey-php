-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 10:27 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pandora`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) NOT NULL,
  `category` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `category`) VALUES
(1, 'Newspaper'),
(2, 'Magazine'),
(3, 'Social Media'),
(4, 'Billboard'),
(5, 'Friend/Family'),
(6, 'Store Visit');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_branches`
--

CREATE TABLE `company_branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `branch_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` double NOT NULL,
  `imei` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_branches`
--

INSERT INTO `company_branches` (`id`, `company_id`, `branch_code`, `branch`, `area`, `imei`, `created_at`, `updated_at`) VALUES
(1, 1, '00060001', 'WAREHOUSE', 0, NULL, '2017-06-02 09:25:30', '2017-06-02 09:25:30'),
(2, 1, '00060002', 'SM MEGAMALL', 0, NULL, '2017-06-02 09:25:54', '2017-06-02 09:25:54'),
(3, 1, '00060003', 'ESTANCIA', 0, NULL, '2017-06-22 10:17:56', '2017-06-22 10:17:56'),
(4, 1, '00060004', 'U.P TOWN CENTER', 0, NULL, '2017-06-30 08:56:56', '2017-06-30 08:56:56'),
(6, 1, '00060005', 'UPTOWN MALL BGC', 0, NULL, '2017-08-01 20:04:58', '2017-08-01 20:04:58'),
(7, 1, '00060006', 'ROBINSON MAGNOLIA', 0, NULL, '2017-08-23 16:40:06', '2017-08-23 16:40:06'),
(8, 1, '00060007', 'ALABANG TOWN CENTER', 0, NULL, '2017-08-31 12:46:42', '2017-10-17 09:29:51'),
(9, 1, '00060008', 'SM PAMPANGA', 0, NULL, '2017-09-07 13:10:16', '2017-09-07 13:10:16'),
(10, 1, '00060009', 'FESTIVAL', 0, NULL, '2017-09-28 14:43:05', '2017-10-17 09:29:57'),
(11, 2, '00060010', 'VERTIS NORTH', 0, NULL, '2017-10-26 12:00:51', '2017-10-26 16:34:45'),
(12, 2, '00060011', 'AYALA CEBU', 0, NULL, '2017-10-26 16:37:59', '2017-10-26 16:37:59'),
(13, 1, '00060012', 'LANDMARK TRINOMA', 0, NULL, '2017-11-02 11:58:49', '2017-11-02 11:58:49'),
(14, 1, '00060013', 'SM AURA', 0, NULL, '2017-11-03 09:35:42', '2017-11-03 09:35:42'),
(15, 3, '00060014', 'SM MOA', 0, NULL, '2017-12-01 16:48:44', '2017-12-01 16:49:15'),
(16, 3, '00060015', 'ROBINSON ERMITA', 0, NULL, '2017-12-01 16:49:55', '2017-12-01 16:49:55'),
(17, 1, '00060016', 'SM NORTH EDSA', 0, NULL, '2017-12-07 10:44:31', '2017-12-07 10:57:52'),
(18, 3, '00060017', 'CLOVER LEAF', 0, NULL, '2017-12-22 12:03:47', '2017-12-22 12:03:47'),
(19, 3, '00060018', 'LEGATO UPTOWN', 0, NULL, '2017-12-22 12:04:14', '2017-12-22 12:04:14'),
(20, 3, '00060019', 'EVIA MALL', 0, '359175060426795', '2018-01-20 15:30:35', '2018-01-20 15:31:50'),
(21, 2, '00060020', 'SM SOUTHMALL', 0, NULL, '2018-01-26 11:08:26', '2018-01-26 11:08:26'),
(22, 3, '00060021', 'SHANGRILA ', 0, NULL, '2018-02-16 16:26:34', '2018-02-16 16:26:34'),
(23, 3, '00060022', 'GREENBELT 5', 0, NULL, '2018-03-07 13:19:57', '2018-03-07 13:19:57'),
(24, 1, '00060023', 'DAMAGE ITEMS', 0, NULL, '2018-03-13 17:55:20', '2018-03-13 17:55:20'),
(25, 2, '00060024', 'AYALA FELIZ', 0, NULL, '2018-03-13 18:04:51', '2018-03-13 18:04:51'),
(26, 3, '00060025', 'CENTURY MALL', 0, NULL, '2018-04-16 10:10:36', '2018-04-16 10:10:36'),
(27, 3, '00060026', 'PROMENADE', 0, NULL, '2018-04-20 11:14:12', '2018-04-20 11:14:12'),
(28, 3, '00060027', 'AYALA ABREEZA ', 0, NULL, '2018-05-10 15:46:17', '2018-05-10 15:46:17'),
(29, 3, '00060028', 'VENICE', 0, NULL, '2018-05-10 15:47:41', '2018-05-10 15:47:41'),
(30, 3, '00060029', 'SM TELASBASTAGAN', 0, NULL, '2018-05-10 15:48:24', '2018-05-30 13:11:27'),
(31, 3, '00060030', 'SM FAIRVIEW', 0, NULL, '2018-05-24 10:05:55', '2018-05-24 10:05:55'),
(32, 3, '00060031', 'SM CEBU', 0, NULL, '2018-06-08 12:20:26', '2018-06-08 12:20:26'),
(33, 3, '00060032', 'LEGATO TRINOMA', 0, NULL, '2018-06-08 12:21:00', '2018-06-08 12:21:00'),
(34, 3, '00060033', 'GLORIETTA 3', 0, NULL, '2018-07-04 16:48:17', '2018-07-04 16:48:17'),
(35, 3, '00060034', 'CIRCUIT MALL', 0, NULL, '2018-07-24 18:26:59', '2018-07-24 18:26:59'),
(36, 1, '00060035', 'FORA TAGAYTAY', 0, NULL, '2018-08-22 12:31:01', '2018-08-22 12:31:01'),
(37, 2, '00060036', 'OKADA', 0, NULL, '2018-09-17 14:12:38', '2018-09-17 14:12:38'),
(38, 2, '00060037', 'SM LEGASPI', 0, NULL, '2018-09-17 14:13:05', '2018-09-17 14:13:05'),
(39, 1, '00060038', 'SM BACOOR', 0, NULL, '2018-09-17 14:13:38', '2018-09-17 14:13:38'),
(40, 1, '00060039', 'SM DASMA', 0, NULL, '2018-10-19 16:14:34', '2018-10-19 16:14:34'),
(41, 3, '00060040', 'SM CLARK', 0, NULL, '2018-11-06 14:04:05', '2019-01-10 17:11:06'),
(42, 2, '00060041', 'SM VALENZUELA', 0, NULL, '2018-11-15 13:20:50', '2018-11-15 13:20:50'),
(43, 1, '00060042', '@TOKYO BGC', 0, NULL, '2018-12-05 15:40:48', '2018-12-05 15:40:48'),
(44, 1, '00060043', 'EASTWOOD', 0, NULL, '2018-12-05 15:41:11', '2018-12-05 15:41:11'),
(45, 1, '00060044', '@TOKYO MARKET MARKET', 1, NULL, '2019-05-07 12:38:56', '2019-06-07 12:02:05'),
(46, 1, '00060045', 'ONE BONIFACIO', 1, NULL, '2019-05-07 12:39:14', '2019-05-07 12:39:14'),
(47, 1, '00060046', 'ANELLO SM CDO', 1, NULL, '2019-05-07 12:39:43', '2019-05-07 12:39:43'),
(48, 1, '00060047', 'ANELLO SM SAN LAZARO', 1, NULL, '2019-05-07 12:40:02', '2019-05-07 12:40:02'),
(49, 3, '00060048', 'SOUTHWOODS', 0, NULL, '2019-06-28 09:49:41', '2019-06-28 09:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `buying_for_others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_ads`
--

CREATE TABLE `customer_ads` (
  `id` bigint(20) NOT NULL,
  `cust_id` varchar(191) NOT NULL,
  `ads_id` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_ads`
--

INSERT INTO `customer_ads` (`id`, `cust_id`, `ads_id`) VALUES
(1, '2', '2'),
(2, '2', ' 6'),
(3, '2', ' 3'),
(4, '2', ' 4'),
(5, '1', '2'),
(6, '1', ' 6');

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` bigint(20) NOT NULL,
  `cust_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_products`
--

INSERT INTO `customer_products` (`id`, `cust_id`, `product_id`) VALUES
(1, '2', '3'),
(2, '2', ' 2'),
(3, '2', ' 4'),
(4, '1', '1'),
(5, '1', ' 2');

-- --------------------------------------------------------

--
-- Table structure for table `customer_social_media`
--

CREATE TABLE `customer_social_media` (
  `id` bigint(20) NOT NULL,
  `cust_id` varchar(191) NOT NULL,
  `social_media_id` varchar(191) NOT NULL,
  `others` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_social_media`
--

INSERT INTO `customer_social_media` (`id`, `cust_id`, `social_media_id`, `others`) VALUES
(1, '2', '2', ''),
(2, '2', ' 1', ''),
(3, '2', ' 3', ''),
(4, '2', ' 4', ''),
(5, '1', '2', ''),
(6, '1', ' 4', ''),
(7, '1', ' 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(30) NOT NULL,
  `email_subject` varchar(191) NOT NULL,
  `email_body` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `category` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`) VALUES
(1, 'Bracelet'),
(2, 'Charm'),
(3, 'Necklace'),
(4, 'Ring'),
(5, 'Earrings');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) NOT NULL,
  `category` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `category`) VALUES
(1, 'Facebook'),
(2, 'Instagram'),
(3, 'Twitter'),
(4, 'Snapchat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_branches`
--
ALTER TABLE `company_branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_branches_company_id_index` (`company_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ads`
--
ALTER TABLE `customer_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_social_media`
--
ALTER TABLE `customer_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_ads`
--
ALTER TABLE `customer_ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_social_media`
--
ALTER TABLE `customer_social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
