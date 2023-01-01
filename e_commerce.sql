-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 11:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutUs` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `title`, `aboutUs`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Phasellus vel interdum elit', 'Aliquam erat volutpat. Pellentesque fringilla, ligula consectetur cursus scelerisque, leo elit pellentesque sapien, et pharetra arcu elit vitae sem. Suspendisse erat dui, condimentum in mi ac, varius tempor sapien. Donec in justo sit amet ex aliquet maximus ac quis erat.\r\n\r\n\r\n            Donec fermentum tincidunt tellus quis fermentum. Proin eget imperdiet purus. Nulla facilisi. Aliquam tincidunt porttitor dui sed euismod. Duis est libero, rhoncus fermentum turpis id, tempus fringilla ipsum. Nullam venenatis tincidunt neque vel hendrerit. Suspendisse porta pretium porttitor.\r\n            \r\n            \r\n            Sed purus quam, ultricies eu leo in, sollicitudin varius quam. Proin dictum urna ac diam fermentum tempus. Pellentesque urna urna, ullamcorper a tincidunt dignissim, venenatis in nisi. Vivamus in volutpat tellus. Etiam fermentum luctus posuere.', '1664884044-php44CA.tmp.jpg', NULL, '2022-10-04 08:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$iQr8sqpBaDi8.80EzA0A5e.lQVDao0y69Mom4WjLhnIfwayFCUTLy');

-- --------------------------------------------------------

--
-- Table structure for table `cartstable`
--

CREATE TABLE `cartstable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productID` int(11) NOT NULL,
  `productQty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd', 'asdasd', 'qweqweqwe', '2022-11-17 15:52:53', '2022-11-17 15:52:53');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_28_080252_admins', 1),
(3, '2022_07_28_102955_contact', 1),
(4, '2022_07_28_110024_about_page', 1),
(5, '2022_07_28_120040_products', 1),
(6, '2022_07_29_120151_carts_table', 1),
(7, '2022_08_01_124341_orders', 1),
(8, '2022_10_15_123130_samet', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderNumber` int(11) NOT NULL,
  `productID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productQty` int(11) NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderType` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNumber`, `productID`, `productQty`, `address`, `orderType`, `created_at`, `updated_at`) VALUES
(20, 8213298, '4', 1, 'deneme', 'Credit Card', '2023-01-01 18:58:28', '2023-01-01 18:58:28'),
(21, 3812452, '6', 1, 'asdfghjkl', 'Money Order', '2023-01-01 19:06:18', '2023-01-01 19:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutProduct` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `coverPhoto`, `aboutProduct`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'deneme urun', 'item-01.jpg', 'Proin commodo, diam a ultricies sagittis, erat odio rhoncus metus, eu feugiat lorem lacus aliquet arcu. Curabitur in gravida nisi, non placerat nibh. Praesent sit amet diam ultrices, commodo turpis id, dignissim leo. Suspendisse mauris massa, porttitor non fermentum vel, ullamcorper scelerisque velit.', 59.99, 3, '2022-09-25 19:41:06', '2022-11-17 15:52:17'),
(3, 'tshirt', '1665836168-phpABB.tmp.jpg', 'harika tshirt', 29.99, 41, '2022-10-15 09:16:08', '2023-01-01 09:48:51'),
(4, 'Eşofman', '1665836569-php2B18.tmp.jpg', 'efsane aşurtman', 40, 12, '2022-10-15 09:22:49', '2023-01-01 18:58:28'),
(5, 'Puma Sweatshirt', '1665836618-phpE773.tmp.webp', 'Ali Çelik Puma Sweatshirt acsx', 31, 27, '2022-10-15 09:23:38', '2023-01-01 09:46:11'),
(6, 'Puma Ayakkabı', '1665836692-phpA88.tmp.webp', 'lebron james ayakkabı', 79.99, 1, '2022-10-15 09:24:52', '2023-01-01 19:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartstable`
--
ALTER TABLE `cartstable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cartstable`
--
ALTER TABLE `cartstable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
