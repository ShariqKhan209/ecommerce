-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 04:06 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Shirts', '2023-03-23 16:48:11', '2023-03-23 16:48:11'),
(2, 'Shoes', '2023-03-23 16:48:17', '2023-03-23 16:48:17'),
(3, 'Pants', '2023-03-23 16:48:22', '2023-03-23 16:48:22'),
(4, 'Ties', '2023-03-23 16:48:26', '2023-03-23 16:48:26'),
(6, 'Car', '2023-03-23 17:20:22', '2023-03-23 17:20:22'),
(7, 'Pantry', '2023-04-04 10:30:08', '2023-04-04 10:30:08'),
(8, 'Services', '2023-05-05 02:34:54', '2023-05-05 02:34:54');

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(16, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_03_08_082303_create_sessions_table', 1),
(20, '2023_03_14_091917_create_categories_table', 1),
(21, '2023_03_23_185838_create_products_table', 2),
(22, '2023_04_03_212724_create_carts_table', 3),
(23, '2023_04_17_214401_create_orders_table', 4),
(24, '2023_04_17_215438_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `email`, `user_id`, `product_id`, `product_title`, `product_price`, `quantity`, `total_price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'shariq', '1294859403', 'house #, Street #, Block#, Housing Society, Lahore, Punjab, Pakistan.', 'shariq@gmail.com', '3', '8', 'T-Shirt', '18', '4', '72', '1680213167-jpg', 'processing', '2023-04-17 18:35:00', '2023-04-17 18:35:00'),
(2, 'shariq', '1294859403', 'house #, Street #, Block#, Housing Society, Lahore, Punjab, Pakistan.', 'shariq@gmail.com', '3', '3', 'Black Shirttt', '10', '3', '30', '1679610328-webp', 'delivered', '2023-04-17 18:35:00', '2023-04-17 18:44:38'),
(3, 'shariq', '1294859403', 'house #, Street #, Block#, Housing Society, Lahore, Punjab, Pakistan.', 'shariq@gmail.com', '3', '6', 'Red Shirt', '35', '5', '175', '1680213030-webp', 'delivered', '2023-04-17 18:35:00', '2023-04-17 18:44:25'),
(4, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '4', 'Gray Sweater', '195', '3', '585', '1680030100-jpg', 'canceled', '2023-04-28 10:15:55', '2023-04-28 10:41:25'),
(5, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '7', 'Blue Shirt', '45', '2', '90', '1680213088-jpg', 'canceled', '2023-04-28 10:15:55', '2023-04-28 10:43:09'),
(6, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '4', 'Gray Sweater', '195', '4', '780', '1680030100-jpg', 'canceled', '2023-04-28 10:15:55', '2023-04-28 10:45:15'),
(7, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '8', 'T-Shirt', '18', '1', '18', '1680213167-jpg', 'processing', '2023-04-28 10:15:55', '2023-04-28 10:15:55'),
(8, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '4', 'Gray Sweater', '195', '9', '1755', '1680030100-jpg', 'processing', '2023-05-17 12:11:28', '2023-05-17 12:11:28'),
(9, 'user', '12345677', 'home street town', 'user@gmail.com', '2', '3', 'Black Shirttt', '10', '2', '20', '1679610328-webp', 'processing', '2023-05-17 12:11:28', '2023-05-17 12:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discounted_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `category`, `image`, `price`, `discounted_price`, `quantity`, `created_at`, `updated_at`) VALUES
(3, 'Black Shirt', 'New Black Shirt', 'Ties', '1679610328-webp', '10', NULL, '9', '2023-03-23 17:25:28', '2023-05-05 06:25:09'),
(4, 'Gray Sweater', 'A new gray sweater with a sleek fashion. This design is new in the market plus the sweater is extremely warm. The price is pretty normal as well.', 'Shirts', '1680030100-jpg', '250', '195', '5', '2023-03-28 14:01:40', '2023-05-05 06:28:28'),
(5, 'Black Tie', 'A beautiful black tie', 'Ties', '1680034368-webp', '40', '27', '4', '2023-03-28 15:12:48', '2023-03-28 15:12:48'),
(6, 'Red Shirt', 'A nice red shirt with buttons', 'Select a category', '1680213030-webp', '40', '35', '5', '2023-03-30 16:50:30', '2023-03-30 16:50:30'),
(7, 'Blue Shirt', 'A nice blue shirt', 'Select a category', '1680213088-jpg', '50', '45', '10', '2023-03-30 16:51:28', '2023-03-30 16:51:28'),
(8, 'T-Shirt', 'Good T-Shirts Pair', 'Select a category', '1680213167-jpg', '20', '18', '10', '2023-03-30 16:52:48', '2023-03-30 16:52:48'),
(9, 'Polo', 'Polo shirt', 'Select a category', '1680213222-jpg', '34', '29', '20', '2023-03-30 16:53:42', '2023-03-30 16:53:42'),
(10, 'Tie', 'This is a tie', 'Select a category', '1680622276-jpg', '50', '45', '67', '2023-04-04 10:31:16', '2023-04-04 10:31:16'),
(11, 'Exclusive Access', 'We will give you exclusive access', 'Services', '1683272172-png', '200', NULL, '100', '2023-05-05 02:36:12', '2023-05-05 02:36:12'),
(12, 'Lifestyle Services', 'We will give you lifestyle services', 'Services', '1683272216-png', '200', NULL, '3', '2023-05-05 02:36:56', '2023-05-05 02:36:56'),
(13, 'Luxury Travel', 'We will take you on a luxury travel', 'Services', '1683272254-png', '500', '400', '100', '2023-05-05 02:37:34', '2023-05-05 02:37:34'),
(14, 'Restaurants and Clubs', 'We will book a nice restaurant or club for you', 'Services', '1683272298-png', '300', '250', '8', '2023-05-05 02:38:18', '2023-05-05 02:38:18'),
(15, 'Unique Experience', 'We can arrange unique experiences for you', 'Services', '1683272344-png', '400', NULL, '400', '2023-05-05 02:39:04', '2023-05-05 02:39:04'),
(16, 'Luxury Accomodation', 'We will book a luxury accomodation for you', 'Services', '1683272401-png', '400', '390', '40', '2023-05-05 02:40:02', '2023-05-05 02:40:02'),
(17, 'Private Jet & Yacth', 'We hire a private jet and yacth', 'Services', '1683273125-png', '1000', '900', NULL, '2023-05-05 02:52:05', '2023-05-05 02:52:05'),
(18, 'hainvsah', 'haincae', 'Select a category', '1683273425-png', '30', NULL, '3', '2023-05-05 02:57:05', '2023-05-05 02:57:05'),
(19, 'rewww', 'ewqqq', 'Pantry', '1683273897-png', '21', NULL, '2', '2023-05-05 03:04:57', '2023-05-05 03:04:57');

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
('NL48hMTf58gp1Fkptl9H5iQawpHGDQAVUqAgwRK8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY01MdnZWcmNaZk1ZeTRsQ3N4d0pDdWQxOUJpbVdjQjlMRkdJNVVvTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1684954905);

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
(1, 'Admin', 'admin@gmail.com', '1', '1234567', 'asdfgh', NULL, '$2y$10$Y63E/kP5suSV/dQiEgmE5ulP8UfWkac2QLE0b96/3GN03U3Q0uWtq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-23 14:20:10', '2023-03-23 14:20:10'),
(2, 'user', 'user@gmail.com', '0', '12345677', 'home street town', NULL, '$2y$10$YQKn8CM4mz9M5uU6YAkBIO8Rijka8HgkEm6gXU5BKp3RIm/.1iT8m', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-31 18:54:32', '2023-03-31 18:54:32'),
(3, 'shariq', 'shariq@gmail.com', '0', '1294859403', 'house #, Street #, Block#, Housing Society, Lahore, Punjab, Pakistan.', NULL, '$2y$10$rkAYtHC5t5fw4GtUkD8BBOQYpr6WdtRpCjv9Zy/Jdb2HdjKqPNHV.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-16 15:23:49', '2023-04-16 15:23:49');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
