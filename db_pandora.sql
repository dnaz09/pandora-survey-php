-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 11:44 AM
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

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_code`, `company`, `created_at`, `updated_at`) VALUES
(1, '0001', 'PANDORA', NULL, NULL);

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
(1, 1, '00010001', 'WAREHOUSE', 0, NULL, '2017-03-03 10:47:15', '2017-03-03 10:47:15'),
(2, 1, '00010002', 'SM CLARK', 0, NULL, '2017-03-03 10:47:41', '2017-03-03 10:47:41'),
(3, 1, '00010003', 'AYALA CEBU', 0, NULL, '2017-03-03 10:48:01', '2017-03-03 10:48:01'),
(4, 1, '00010004', 'ROBINSONS ERMITA', 0, NULL, '2017-03-03 10:48:25', '2017-03-03 10:48:25'),
(5, 1, '00010005', 'UPTOWN MALL', 0, NULL, '2017-03-03 10:49:03', '2017-03-03 10:49:03'),
(6, 1, '00010006', 'FESTIVAL MALL', 0, NULL, '2017-03-03 10:49:32', '2017-03-03 10:49:32'),
(7, 1, '00010007', 'SMAISON CONRAD', 0, NULL, '2017-03-03 10:49:59', '2017-03-03 10:49:59'),
(8, 1, '00010008', 'ESTANCIA', 0, NULL, '2017-03-03 10:50:29', '2017-03-03 10:50:29'),
(9, 1, '00010009', 'U.P. TOWN CENTER', 0, NULL, '2017-03-03 10:51:03', '2017-03-03 10:51:03'),
(10, 1, '00010010', 'CENTURY MALL', 0, NULL, '2017-03-20 15:04:10', '2017-03-20 15:04:10'),
(11, 1, '00010011', 'GREENBELT', 0, NULL, '2017-05-02 17:55:50', '2017-05-02 17:55:50'),
(12, 1, '00010012', 'SM AURA', 0, NULL, '2017-05-02 17:56:09', '2017-05-02 17:56:09'),
(13, 1, '00010013', 'PODIUM', 0, NULL, '2017-05-15 15:05:08', '2017-05-15 15:05:08'),
(14, 1, '00010014', 'BONI HIGH STREET', 0, NULL, '2017-05-15 15:05:31', '2017-05-15 15:05:31'),
(16, 1, '00010016', 'SHANGRI-LA', 0, NULL, '2017-05-17 12:13:27', '2017-05-17 12:13:27'),
(17, 1, '00010017', 'MEGAMALL', 0, NULL, '2017-05-17 12:13:47', '2017-05-17 12:13:47'),
(18, 1, '00010018', 'GLORIETTA 4', 0, NULL, '2017-05-17 12:14:12', '2017-05-17 12:14:12'),
(19, 1, '00010019', 'TRINOMA', 0, NULL, '2017-05-17 12:14:44', '2017-05-17 12:14:44'),
(20, 1, '00010020', 'ROBINSON GALLERIA', 0, NULL, '2017-06-30 13:09:37', '2017-06-30 13:09:37'),
(21, 1, '00010021', 'VERTIS NORTH', 0, NULL, '2017-07-12 10:31:48', '2017-07-12 10:31:48'),
(22, 1, '00010015', 'NEWPORT', 0, NULL, '2017-07-18 17:06:51', '2017-07-18 17:06:51'),
(23, 1, '00010022', 'ALABANG TOWN CENTER', 0, NULL, '2017-09-18 15:02:15', '2017-09-18 15:02:15'),
(24, 1, '00010023', 'SM MAKATI', 0, NULL, '2017-09-25 15:00:29', '2017-09-25 15:00:29'),
(25, 1, '00010024', 'EASTWOOD', 0, NULL, '2017-10-25 15:59:36', '2017-11-02 11:59:21'),
(26, 1, '00010025', 'SOLAIRE', 0, NULL, '2017-10-25 15:59:55', '2017-11-02 11:59:42'),
(27, 1, '00010026', 'SM FAIRVIEW', 0, NULL, '2017-11-10 16:19:05', '2017-11-10 16:19:05'),
(28, 1, '00010027', 'GATEWAY MALL', 0, NULL, '2018-03-05 17:30:11', '2018-03-05 17:30:11'),
(29, 1, '00010028', 'AYALA CLOVERLEAF', 0, NULL, '2018-04-11 12:55:11', '2018-04-11 12:55:11'),
(30, 1, '00010029', 'SM PAMPANGA', 0, NULL, '2018-04-11 12:55:54', '2018-04-11 12:55:54'),
(31, 1, '00010030', 'AYALA FELIZ', 0, NULL, '2018-04-20 09:04:26', '2018-04-20 09:04:26'),
(32, 1, '00010031', 'SM SOUTHMALL', 0, NULL, '2018-05-23 14:50:40', '2018-05-23 14:50:40'),
(33, 1, '00010032', 'PROMENADE GREENHILLS', 0, NULL, '2018-06-19 15:42:08', '2018-06-19 17:15:49'),
(34, 1, '00010033', 'SM NORTH EDSA', 0, NULL, '2018-09-07 13:29:26', '2018-09-18 11:00:36'),
(35, 1, '00010034', 'POWER PLANT', 0, NULL, '2018-09-27 14:53:47', '2018-09-27 14:53:47'),
(36, 1, '00010035', 'OKADA', 0, NULL, '2018-11-09 11:33:28', '2018-11-21 14:05:39'),
(37, 1, '00010036', 'DAMAGE ITEMS', 0, NULL, '2018-11-09 11:33:54', '2018-11-09 11:33:54'),
(38, 1, '00010037', 'PANDORA EVENT', 0, '357943073469314', '2018-11-09 11:34:22', '2018-11-09 11:34:22');

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

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` bigint(20) NOT NULL,
  `cust_id` varchar(191) NOT NULL,
  `product_id` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_social_media`
--

CREATE TABLE `customer_social_media` (
  `id` bigint(20) NOT NULL,
  `cust_id` varchar(191) NOT NULL,
  `social_media_id` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) NOT NULL,
  `category` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey_collections`
--

CREATE TABLE `survey_collections` (
  `cust_id` varchar(191) NOT NULL,
  `newspaper` varchar(191) NOT NULL,
  `magazine` varchar(191) NOT NULL,
  `social_media` varchar(191) NOT NULL,
  `billboard` varchar(191) NOT NULL,
  `friend_family` varchar(191) NOT NULL,
  `store_visit` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey_gifts`
--

CREATE TABLE `survey_gifts` (
  `cust_id` varchar(191) NOT NULL,
  `gifts` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey_products`
--

CREATE TABLE `survey_products` (
  `cust_id` varchar(191) NOT NULL,
  `bracelet` varchar(191) NOT NULL,
  `charm` varchar(191) NOT NULL,
  `necklace` varchar(191) NOT NULL,
  `ring` varchar(191) NOT NULL,
  `earrings` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey_socials`
--

CREATE TABLE `survey_socials` (
  `cust_id` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `snapchat` varchar(191) NOT NULL,
  `others` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_ads`
--
ALTER TABLE `customer_ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
