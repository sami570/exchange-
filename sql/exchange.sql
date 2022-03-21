-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 05:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Xiaomi', '1', '2022-03-16 23:31:06', '2022-03-20 09:59:44'),
(3, 'Oppo', '1', '2022-03-16 23:31:16', '2022-03-16 23:31:16'),
(4, 'iphone', '1', '2022-03-17 09:05:09', '2022-03-17 09:05:09'),
(5, 'iphone  zero', '1', '2022-03-20 09:26:27', '2022-03-20 09:26:27'),
(6, 'Oppo', '1', '2022-03-20 09:59:54', '2022-03-20 09:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_14_100624_create_product_table', 1),
(2, '2022_03_16_012355_create_slides_table', 2),
(3, '2022_03_17_052022_create_brands_table', 3),
(4, '2022_03_17_065006_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slide_image`, `brand_name`, `Condition`, `camera`, `processor`, `ram`, `sim`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin/assets/imagedigital_05.jpg', '3', 'used', '13mega pxel', 'core 3', '8gb', 'dual', '1', '2022-03-17 09:18:19', '2022-03-17 09:18:19'),
(2, 'admin/assets/imagedigital_09.jpg', '2', 'used', '13mega pxel', 'core 3', '8gb', 'dual', '1', '2022-03-17 09:41:40', '2022-03-17 09:41:40'),
(3, 'admin/assets/imagedigital_05.jpg', '3', 'used', '13mega pxel', 'core 3', '8gb', 'dual', '1', '2022-03-18 06:27:34', '2022-03-18 06:27:34'),
(4, 'admin/assets/imagefurniture_05.jpg', '2', 'used', '13/5 mega pxcal', 'dual core', '4&8', 'single /dual', '1', '2022-03-20 08:20:54', '2022-03-20 08:20:54'),
(5, 'admin/assets/imagekidtoy_08.jpg', '2', 'used', '13/5 mega pxcal', 'core 3', '4&8', 'dual', '1', '2022-03-20 09:22:33', '2022-03-20 09:22:33'),
(6, 'admin/assets/imagedigital_06.jpg', '2', 'used', '13mega pxel', 'core 3', '8gb', 'dual', '1', '2022-03-20 10:21:18', '2022-03-20 10:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_image`, `slide_title`, `slide_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(18, 'admin/assets/imagedigital_04.jpg', 'laptop', 'laptop new', '1', '2022-03-16 19:36:05', '2022-03-17 09:05:41'),
(19, 'admin/assets/imagedigital_08.jpg', 'monitor', 'Monitor update', '1', '2022-03-16 19:36:23', '2022-03-16 19:36:23'),
(20, 'admin/assets/imagedigital_04.jpg', 'laptop', 'disp', '1', '2022-03-17 09:03:57', '2022-03-17 09:03:57'),
(22, 'admin/assets/imagedigital_08.jpg', 'monitor', 'bdd', '1', '2022-03-18 06:28:24', '2022-03-18 06:28:24'),
(23, 'admin/assets/imagedigital_07.jpg', 'monitor', 'dfsdfds', '1', '2022-03-18 06:28:35', '2022-03-18 06:28:35'),
(24, 'admin/assets/imagedigital_14.jpg', 'monitor', 'laptop new', '1', '2022-03-18 06:28:45', '2022-03-18 06:28:45'),
(25, 'admin/assets/imagefashion_01.jpg', 'mobile', 'dfsdfds', '1', '2022-03-18 07:17:47', '2022-03-18 07:17:47'),
(26, 'admin/assets/imagedigital_02.jpg', 'Mobile', 'oppo mobile andorod version 11', '1', '2022-03-21 10:10:22', '2022-03-21 10:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
