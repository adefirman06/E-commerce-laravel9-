-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 01:01 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `quantity`, `price`, `image`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', 'jam', '1', '300000', '1667033561.jpeg', '5', '2', '2022-11-02 20:49:18', '2022-11-02 20:49:18'),
(23, 'admin', 'admin@gmail.com', '088822', 'depok', 'smartwatch', '1', '220000', '1667035999.jpeg', '8', '1', '2022-11-03 22:53:42', '2022-11-03 22:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Baju', '2022-10-27 01:53:48', '2022-10-27 01:53:48'),
(2, 'Sepatu', '2022-10-27 02:02:47', '2022-10-27 02:02:47'),
(3, 'Celana', '2022-10-27 02:03:22', '2022-10-27 02:03:22'),
(4, 'Jam', '2022-10-27 02:05:52', '2022-10-27 02:05:52'),
(5, 'Topi', '2022-10-27 02:06:30', '2022-10-27 02:06:30'),
(6, 'Kalung', '2022-10-27 02:09:18', '2022-10-27 02:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_26_125639_create_sessions_table', 1),
(7, '2022_10_27_084159_create_categories_table', 2),
(8, '2022_10_27_135618_create_products_table', 3),
(9, '2022_10_31_072143_create_carts_table', 4),
(10, '2022_10_31_144750_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Cash on Delivery', 'Terkirim', '2022-11-01 00:29:53', '2022-11-02 02:41:18'),
(2, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'smartwatch', '1', '200000', '1667035930.jpeg', '6', 'Cash on Delivery', 'Terkirim', '2022-11-01 00:29:53', '2022-11-02 02:43:16'),
(3, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '400000', '1667222117.jpeg', '7', 'Lunas', 'Terkirim', '2022-11-01 00:29:53', '2022-11-02 20:22:26'),
(4, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'smartwatch', '1', '220000', '1667035999.jpeg', '8', 'Cash on Delivery', 'Proses', '2022-11-01 00:29:53', '2022-11-01 00:29:53'),
(5, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Cash on Delivery', 'Proses', '2022-11-01 00:29:53', '2022-11-01 00:29:53'),
(6, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'smartwatch', '1', '200000', '1667035930.jpeg', '6', 'Cash on Delivery', 'Proses', '2022-11-01 00:29:53', '2022-11-01 00:29:53'),
(7, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'Nike 90 FJD', '1', '950000', '1667276092.jpeg', '11', 'Cash on Delivery', 'Proses', '2022-11-01 20:43:31', '2022-11-01 20:43:31'),
(8, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Cash on Delivery', 'Proses', '2022-11-01 20:43:31', '2022-11-01 20:43:31'),
(9, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'smartwatch', '1', '200000', '1667035930.jpeg', '6', 'Terbayar', 'Proses', '2022-11-01 23:59:12', '2022-11-01 23:59:12'),
(10, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Terbayar', 'Proses', '2022-11-01 23:59:12', '2022-11-01 23:59:12'),
(11, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Terbayar', 'Proses', '2022-11-02 00:26:34', '2022-11-02 00:26:34'),
(12, 'Tanaman', 'tanaman@gmail.com', '55534534', 'depok', '2', 'Nike Max 90', '1', '800000', '1667275347.jpeg', '10', 'Terbayar', 'Proses', '2022-11-02 00:26:34', '2022-11-02 00:26:34'),
(13, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '088298114903', 'Depok, Pondok Terong', '3', 'Nike Max 90', '5', '4000000', '1667275347.jpeg', '10', 'Lunas', 'Terkirim', '2022-11-02 23:47:28', '2022-11-02 23:48:22'),
(14, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '088298114903', 'Depok, Pondok Terong', '3', 'Nike Air Force', '4', '3400000', '1667275239.jpeg', '9', 'Terbayar', 'Proses', '2022-11-02 23:47:28', '2022-11-02 23:47:28'),
(15, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '088298114903', 'Depok, Pondok Terong', '3', 'smartwatch', '5', '1000000', '1667035930.jpeg', '6', 'Terbayar', 'Proses', '2022-11-02 23:47:28', '2022-11-02 23:47:28'),
(16, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '088298114903', 'Depok, Pondok Terong', '3', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Cash on Delivery', 'Dalam Proses', '2022-11-03 07:51:48', '2022-11-03 07:51:48'),
(17, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '088298114903', 'Depok, Pondok Terong', '3', 'jam', '1', '300000', '1667033561.jpeg', '5', 'Cash on Delivery', 'Dalam Proses', '2022-11-03 07:54:43', '2022-11-03 07:54:43'),
(18, 'admin', 'admin@gmail.com', '088822', 'depok', '1', 'smartwatch', '1', '200000', '1667035930.jpeg', '6', 'Cash on Delivery', 'Orderan dibatalkan', '2022-11-03 20:58:13', '2022-11-03 21:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `quantity`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(5, 'jam', 'Smartwatch masa kini', '1667033561.jpeg', 'Jam', '50655', '500000', '300000', '2022-10-29 00:11:30', '2022-10-31 06:14:36'),
(6, 'smartwatch', 'smartwatch tercanggih dari samsang', '1667035930.jpeg', 'Kalung', '555', '200000', NULL, '2022-10-29 02:32:10', '2022-10-29 02:32:10'),
(7, 'jam', 'Smartwatch masa kini', '1667222117.jpeg', 'Jam', '555', '550000', '400000', '2022-10-29 02:32:55', '2022-10-31 06:15:17'),
(8, 'smartwatch', 'Smartwatch masa kini', '1667035999.jpeg', 'Jam', '22', '330000', '220000', '2022-10-29 02:33:19', '2022-10-31 06:15:34'),
(9, 'Nike Air Force', 'Sepatu nike terbaru keluaran terbatas', '1667275239.jpeg', 'Sepatu', '30', '900000', '850000', '2022-10-31 21:00:39', '2022-10-31 21:00:39'),
(10, 'Nike Max 90', 'sepatu lari ', '1667275347.jpeg', 'Sepatu', '25', '800000', NULL, '2022-10-31 21:02:27', '2022-10-31 21:02:27'),
(11, 'Nike 90 FJD', 'sepatu lari', '1667276092.jpeg', 'Sepatu', '11', '1200000', '950000', '2022-10-31 21:14:52', '2022-10-31 21:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FYTcBrjubCq8a6Wqd0Txtyz5WtrpIFAfq1C3crWE', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTGRORzhXMWJIQmF1ZnI0RTlyc2ZjNzBicEZTNHBxMDFOMU9MUlpacCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hbGxwcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1667541269);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1\r\n', '088822', 'depok', '2022-11-16 09:05:29', '$2y$10$r5lXQsJJVVhOeUxN69WFp.HRpDCNR2Qwsx2LWeLMFH667oKbUFrQe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-26 06:35:21', '2022-10-26 06:35:21'),
(2, 'Tanaman', 'tanaman@gmail.com', '0', '55534534', 'depok', '2022-11-10 17:00:00', '$2y$10$orZ8gkoU3laOZOUuIFP7wOGvwbx332JW9cEu75IR0/Qfx0k/NZ.jK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-26 06:47:48', '2022-10-26 06:47:48'),
(3, 'Ade Firmansyah', 'ade.firmansyah06062@gmail.com', '1', '088298114903', 'Depok, Pondok Terong', '2022-11-08 09:05:00', '$2y$10$bSiIj3VUTzhEoxnee8eU7.h0hDkxW1YhZLm2555BU.xUskKKPYVf2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-02 23:45:50', '2022-11-02 23:46:09'),
(4, 'Ade Turangan', 'torang.firman@gmail.com', '0', '088298114903', 'Cipayung,Depok', '2022-11-03 00:22:23', '$2y$10$kyEM4XSGEGjb.IB.O9voAeJZCxm8MFq/SiMcpI5sX/J/q/Zf.oC4y', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-03 00:21:22', '2022-11-03 00:22:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
