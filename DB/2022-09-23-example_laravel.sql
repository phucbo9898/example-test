-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2022 at 09:51 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1:active,0:inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `user_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', NULL, NULL, 6, 1, NULL, '2022-09-23 04:43:52', '2022-09-23 06:36:59'),
(2, 'Máy tính bảng', 'may-tinh-bang', NULL, NULL, 6, 1, NULL, '2022-09-23 04:43:52', '2022-09-23 06:37:10'),
(3, 'PC', 'pc', NULL, NULL, 6, 0, NULL, '2022-09-23 04:43:52', '2022-09-23 06:37:21'),
(4, 'Laptop', 'laptop', NULL, NULL, 6, 1, NULL, '2022-09-23 04:43:52', '2022-09-23 06:37:49'),
(5, 'Linh kiện, phụ kiện', 'linh-kien-phu-kien', NULL, NULL, 6, 0, NULL, '2022-09-23 04:43:52', '2022-09-23 06:37:56'),
(6, 'tê', 'te', NULL, NULL, 6, NULL, '2022-09-23 06:36:31', '2022-09-23 06:25:37', '2022-09-23 06:36:31'),
(7, 'test transaction', 'test-transaction', NULL, NULL, 6, NULL, '2022-09-26 02:07:46', '2022-09-26 01:59:31', '2022-09-26 02:07:46'),
(8, 'test transaction test', 'test-transaction-test', NULL, NULL, 6, NULL, '2022-09-26 02:21:32', '2022-09-26 02:08:59', '2022-09-26 02:21:32'),
(9, 'test transaction', 'test-transaction', NULL, NULL, 6, NULL, '2022-09-26 02:24:43', '2022-09-26 02:24:24', '2022-09-26 02:24:43'),
(10, 'test 27/09/2022 123', 'test-27092022-123', NULL, NULL, 6, NULL, '2022-09-27 02:23:12', '2022-09-27 02:16:02', '2022-09-27 02:23:12'),
(11, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:34', '2022-09-27 07:38:08', '2022-09-27 07:39:34'),
(12, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:40:55', '2022-09-27 07:38:11', '2022-09-27 07:40:55'),
(13, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:40:47', '2022-09-27 07:38:14', '2022-09-27 07:40:47'),
(14, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:45', '2022-09-27 07:38:19', '2022-09-27 07:39:45'),
(15, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:44', '2022-09-27 07:38:23', '2022-09-27 07:39:44'),
(16, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:44', '2022-09-27 07:38:30', '2022-09-27 07:39:44'),
(17, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:43', '2022-09-27 07:38:36', '2022-09-27 07:39:43'),
(18, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:42', '2022-09-27 07:38:39', '2022-09-27 07:39:42'),
(19, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:42', '2022-09-27 07:38:42', '2022-09-27 07:39:42'),
(20, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:41', '2022-09-27 07:38:45', '2022-09-27 07:39:41'),
(21, 'test 22/09/2022', 'test-22092022', NULL, NULL, 6, NULL, '2022-09-27 07:39:40', '2022-09-27 07:38:47', '2022-09-27 07:39:40'),
(22, 'test 280922 test', 'test-280922-test', NULL, NULL, 8, NULL, '2022-09-28 02:24:46', '2022-09-28 02:23:11', '2022-09-28 02:24:46'),
(23, 'test transaction', 'test-transaction', NULL, NULL, 6, NULL, '2022-09-29 04:52:56', '2022-09-29 04:52:32', '2022-09-29 04:52:56'),
(24, 'test 22/09/2022 123', 'test-22092022-123', NULL, NULL, 6, NULL, '2022-09-29 06:54:44', '2022-09-29 06:54:32', '2022-09-29 06:54:44'),
(25, 'test 22/09/2022 123', 'test-22092022-123', NULL, NULL, 6, NULL, '2022-09-29 09:18:26', '2022-09-29 09:17:25', '2022-09-29 09:18:26');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2019_08_19_000000_create_failed_jobs_table', 1),
(56, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(57, '2022_08_02_015452_create_categories_table', 1),
(58, '2022_08_02_020213_create_products_table', 1),
(59, '2022_08_02_020352_create_orders_table', 1),
(60, '2022_08_04_044625_create_order_detait_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0:new,1:In progress,2:buyer cancel,3:admin cancel,4:done',
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `fullname`, `address`, `phone`, `note`, `status`, `total`, `created_at`, `updated_at`) VALUES
(1, 'DH288', 'Julien Lockman', NULL, '(866) 386-2584', NULL, 3, 334704, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(2, 'DH375', 'Jacklyn McClure', NULL, '877.506.7650', NULL, 2, 414673, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(3, 'DH671', 'Dr. Alessandra Schulist I', NULL, '(855) 735-3768', NULL, 1, 156223, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(4, 'DH617', 'Max Bednar', NULL, '(877) 601-3086', NULL, 4, 990338, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(5, 'DH845', 'Mrs. Carissa Champlin DVM', NULL, '(800) 934-3696', NULL, 0, 276635, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(6, 'DH592', 'Helene Bartoletti', NULL, '1-855-394-1648', NULL, 0, 139394, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(7, 'DH914', 'Vicky Carroll', NULL, '844-906-6754', NULL, 3, 463743, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(8, 'DH260', 'Miss Lera Ritchie I', NULL, '844-726-0712', NULL, 0, 812558, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(9, 'DH774', 'Ernestine Quigley', NULL, '888.655.3751', NULL, 3, 289366, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(10, 'DH481', 'Mr. Arturo Fay', NULL, '1-877-528-4124', NULL, 4, 374757, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(11, 'DH730', 'Rebeka Wilkinson', NULL, '888.826.9824', NULL, 1, 641997, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(12, 'DH025', 'Dr. Lesley Brakus DDS', NULL, '1-800-851-5710', NULL, 1, 84995, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(13, 'DH060', 'Prof. Geraldine Bartell', NULL, '866.635.3861', NULL, 1, 191426, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(14, 'DH105', 'Demetris Huels', NULL, '1-888-741-5186', NULL, 1, 924787, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(15, 'DH984', 'Lamar Smitham', NULL, '844.536.4204', NULL, 3, 119170, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(16, 'DH309', 'Kirk Collins', NULL, '1-800-471-4223', NULL, 2, 992988, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(17, 'DH890', 'Geovany Anderson', NULL, '(888) 902-9579', NULL, 1, 636065, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(18, 'DH052', 'Margie Turcotte', NULL, '855-572-4198', NULL, 2, 543343, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(19, 'DH597', 'Donnell Becker', NULL, '1-877-819-1777', NULL, 3, 954062, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(20, 'DH484', 'Dr. Rossie Gottlieb', NULL, '888-842-2278', NULL, 4, 667500, '2022-09-23 04:44:41', '2022-09-23 04:44:41'),
(28, 'DH28', 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, NULL, 3, 5968460, '2022-09-23 07:14:47', '2022-09-23 07:15:09'),
(29, 'DH29', 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, NULL, 4, 120000000, '2022-09-23 07:33:07', '2022-09-23 08:30:02'),
(30, 'DH30', 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, NULL, 4, 120000000, '2022-09-23 07:34:23', '2022-09-23 08:29:52'),
(31, 'DH31', 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, NULL, 4, 292917, '2022-09-23 07:40:14', '2022-09-29 07:02:18'),
(32, 'DH32', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 1, 9909340, '2022-09-23 08:55:51', '2022-09-27 09:33:09'),
(33, 'DH33', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 180000000, '2022-09-27 07:08:00', '2022-09-28 02:34:20'),
(34, 'DH34', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 3, 18000000, '2022-09-27 07:51:47', '2022-09-28 02:32:34'),
(35, 'DH35', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 18000000, '2022-09-27 10:21:20', '2022-09-28 02:32:14'),
(36, 'DH36', 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, NULL, 4, 180000000, '2022-09-28 02:13:55', '2022-09-28 02:29:31'),
(37, 'DH37', 'Admin', 'admin@gmail.com', NULL, NULL, 2, 180000000, '2022-09-28 04:32:50', '2022-09-29 07:01:36'),
(38, 'DH38', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 12000000, '2022-09-29 09:36:18', '2022-09-29 09:36:18'),
(39, 'DH39', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 292917, '2022-09-29 09:36:43', '2022-09-29 09:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `name_product`, `image`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'in', 'https://via.placeholder.com/400x500.png/006611?text=cats+enim', 1, 40, 13, 627096, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(2, 'perspiciatis', 'https://via.placeholder.com/400x500.png/001199?text=cats+quod', 2, 38, 16, 619484, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(3, 'incidunt', 'https://via.placeholder.com/400x500.png/000088?text=cats+velit', 3, 36, 15, 567558, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(4, 'enim', 'https://via.placeholder.com/400x500.png/008899?text=cats+saepe', 4, 34, 1, 397812, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(5, 'quod', 'https://via.placeholder.com/400x500.png/0099ee?text=cats+placeat', 5, 32, 2, 146523, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(6, 'odit', 'https://via.placeholder.com/400x500.png/0033bb?text=cats+velit', 6, 30, 1, 19861, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(7, 'labore', 'https://via.placeholder.com/400x500.png/009988?text=cats+molestiae', 7, 28, 14, 979370, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(8, 'voluptatem', 'https://via.placeholder.com/400x500.png/0088ff?text=cats+nobis', 8, 26, 7, 149239, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(9, 'at', 'https://via.placeholder.com/400x500.png/00bb55?text=cats+fugit', 9, 24, 16, 965290, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(10, 'voluptate', 'https://via.placeholder.com/400x500.png/009999?text=cats+fuga', 10, 22, 3, 225917, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(11, 'dignissimos', 'https://via.placeholder.com/400x500.png/0088cc?text=cats+et', 11, 20, 15, 938423, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(12, 'voluptatem', 'https://via.placeholder.com/400x500.png/000088?text=cats+vel', 12, 18, 1, 48421, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(13, 'voluptas', 'https://via.placeholder.com/400x500.png/007788?text=cats+error', 15, 14, 20, 703329, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(14, 'alias', 'https://via.placeholder.com/400x500.png/001100?text=cats+dolorem', 13, 12, 4, 376226, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(15, 'voluptas', 'https://via.placeholder.com/400x500.png/004499?text=cats+consequatur', 14, 8, 10, 481982, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(16, 'voluptatibus', 'https://via.placeholder.com/400x500.png/00aa55?text=cats+aliquam', 16, 16, 3, 412671, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(17, 'ut', 'https://via.placeholder.com/400x500.png/000000?text=cats+ut', 18, 10, 10, 319606, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(18, 'architecto', 'https://via.placeholder.com/400x500.png/005522?text=cats+nam', 17, 6, 8, 568205, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(19, 'blanditiis', 'https://via.placeholder.com/400x500.png/009911?text=cats+libero', 19, 4, 7, 591953, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(20, 'unde', 'https://via.placeholder.com/400x500.png/00ee99?text=cats+fuga', 20, 2, 7, 143094, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(26, 'voluptas', 'https://via.placeholder.com/400x500.png/00ffee?text=cats+sapiente', 28, 1, 10, 596846, '2022-09-23 07:14:47', '2022-09-23 07:14:47'),
(27, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-23_2022-08-26_iphone-xi-tim-200x200.jpg', 29, 21, 10, 12000000, '2022-09-23 07:33:07', '2022-09-23 07:33:07'),
(28, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-23_2022-08-26_iphone-xi-tim-200x200.jpg', 30, 21, 10, 12000000, '2022-09-23 07:34:23', '2022-09-23 07:34:23'),
(29, 'dolores', 'https://via.placeholder.com/400x500.png/001166?text=cats+natus', 31, 2, 1, 292917, '2022-09-23 07:40:14', '2022-09-23 07:40:14'),
(30, 'non', 'https://via.placeholder.com/400x500.png/0055cc?text=cats+sint', 32, 4, 10, 990934, '2022-09-23 08:55:51', '2022-09-23 08:55:51'),
(31, 'Iphone 13 128Gb', 'http://127.0.0.1:8000/upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 33, 1, 10, 18000000, '2022-09-27 07:08:00', '2022-09-27 07:08:00'),
(32, 'Iphone 13 128Gb', 'http://127.0.0.1:8000/upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 34, 1, 1, 18000000, '2022-09-27 07:51:47', '2022-09-27 07:51:47'),
(33, 'Iphone 13 128Gb', 'http://127.0.0.1:8000/upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 35, 1, 1, 18000000, '2022-09-27 10:21:20', '2022-09-27 10:21:20'),
(34, 'Iphone 13 128Gb', 'http://127.0.0.1:8000/upload/product/2022-09-27_2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 36, 1, 10, 18000000, '2022-09-28 02:13:55', '2022-09-28 02:13:55'),
(35, 'Iphone 13 128Gb', 'http://127.0.0.1:8000/upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 37, 1, 10, 18000000, '2022-09-28 04:32:50', '2022-09-28 04:32:50'),
(36, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 38, 21, 1, 12000000, '2022-09-29 09:36:18', '2022-09-29 09:36:18'),
(37, 'dolores', 'https://via.placeholder.com/400x500.png/001166?text=cats+natus', 39, 2, 1, 292917, '2022-09-29 09:36:43', '2022-09-29 09:36:43');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1:active,0:inactive',
  `quantity` int(11) DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `category_id`, `price`, `sale`, `status`, `quantity`, `summary`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 13 128Gb', NULL, 'upload/product/2022-09-29_2022-08-26_iphone-xi-tim-200x200.jpg', 1, 18000000, NULL, 1, 11, NULL, 'Iphone 13 128Gb new chính hãng', NULL, '2022-09-23 04:44:31', '2022-09-29 08:09:14'),
(2, 'dolores', NULL, 'https://via.placeholder.com/400x500.png/001166?text=cats+natus', 3, 292917, NULL, 1, 9, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(3, 'facere', NULL, 'https://via.placeholder.com/400x500.png/00ffdd?text=cats+modi', 4, 926171, NULL, 1, 2, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(4, 'non', NULL, 'https://via.placeholder.com/400x500.png/0055cc?text=cats+sint', 3, 990934, NULL, 1, 15, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(5, 'hic', NULL, 'https://via.placeholder.com/400x500.png/007766?text=cats+aut', 2, 494008, NULL, 1, 5, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(6, 'vel', NULL, 'https://via.placeholder.com/400x500.png/00ee99?text=cats+non', 2, 759002, NULL, 0, 15, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(7, 'sed', NULL, 'https://via.placeholder.com/400x500.png/0011ee?text=cats+laudantium', 2, 535771, NULL, 1, 20, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(8, 'voluptas', NULL, 'https://via.placeholder.com/400x500.png/00aadd?text=cats+saepe', 3, 529210, NULL, 1, 10, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(9, 'qui', NULL, 'https://via.placeholder.com/400x500.png/006688?text=cats+harum', 4, 681895, NULL, 0, 9, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(10, 'ea', NULL, 'https://via.placeholder.com/400x500.png/0088ff?text=cats+dolorem', 5, 359461, NULL, 0, 9, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(11, 'omnis', NULL, 'https://via.placeholder.com/400x500.png/00cc99?text=cats+velit', 3, 628274, NULL, 0, 15, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(12, 'quo', NULL, 'https://via.placeholder.com/400x500.png/009955?text=cats+et', 5, 520476, NULL, 0, 4, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(13, 'distinctio', NULL, 'https://via.placeholder.com/400x500.png/00eeee?text=cats+similique', 3, 810688, NULL, 1, 4, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(14, 'quo', NULL, 'https://via.placeholder.com/400x500.png/00ee11?text=cats+aut', 5, 59711, NULL, 0, 7, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(15, 'aut', NULL, 'https://via.placeholder.com/400x500.png/00bb44?text=cats+eos', 4, 970459, NULL, 0, 5, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(16, 'nobis', NULL, 'https://via.placeholder.com/400x500.png/008811?text=cats+et', 5, 273368, NULL, 1, 15, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(17, 'at', NULL, 'https://via.placeholder.com/400x500.png/0000bb?text=cats+fugit', 4, 511965, NULL, 0, 0, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(18, 'quis', NULL, 'https://via.placeholder.com/400x500.png/00cc77?text=cats+corrupti', 5, 17687, NULL, 0, 3, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(19, 'fugiat', NULL, 'https://via.placeholder.com/400x500.png/0099bb?text=cats+dolorem', 2, 555989, NULL, 0, 20, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(20, 'expedita', NULL, 'https://via.placeholder.com/400x500.png/002200?text=cats+voluptas', 4, 966903, NULL, 0, 8, NULL, NULL, NULL, '2022-09-23 04:44:31', '2022-09-23 04:44:31'),
(21, 'Iphone 11 64Gb', NULL, 'upload/product/2022-09-28_2022-08-26_iphone-xi-tim-200x200.jpg', 1, 12000000, NULL, 1, 19, NULL, 'Iphone 11 64Gb chính hãng', NULL, '2022-09-23 04:44:47', '2022-09-28 03:52:49'),
(22, 'in', NULL, 'https://via.placeholder.com/400x500.png/000099?text=cats+quia', 4, 627096, NULL, 0, 2, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(23, 'perspiciatis', NULL, 'https://via.placeholder.com/400x500.png/00aa11?text=cats+rerum', 2, 268295, NULL, 0, 1, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(24, 'facere', NULL, 'https://via.placeholder.com/400x500.png/003311?text=cats+non', 1, 613096, NULL, 1, 18, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(25, 'incidunt', NULL, 'https://via.placeholder.com/400x500.png/006633?text=cats+dolor', 3, 43935, NULL, 1, 17, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(26, 'natus', NULL, 'https://via.placeholder.com/400x500.png/0000ee?text=cats+dolor', 3, 567558, NULL, 1, 6, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(27, 'enim', NULL, 'https://via.placeholder.com/400x500.png/0077ff?text=cats+odio', 2, 64662, NULL, 1, 14, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(28, 'doloremque', NULL, 'https://via.placeholder.com/400x500.png/0022aa?text=cats+sapiente', 4, 397812, NULL, 1, 7, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(29, 'quod', NULL, 'https://via.placeholder.com/400x500.png/0077ff?text=cats+velit', 1, 613096, NULL, 0, 1, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(30, 'culpa', NULL, 'https://via.placeholder.com/400x500.png/0022ee?text=cats+consequatur', 5, 146523, NULL, 1, 14, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(31, 'odit', NULL, 'https://via.placeholder.com/400x500.png/0000cc?text=cats+veritatis', 2, 258019, NULL, 0, 3, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(32, 'asperiores', NULL, 'https://via.placeholder.com/400x500.png/00ffaa?text=cats+est', 3, 19861, NULL, 0, 5, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(33, 'labore', NULL, 'https://via.placeholder.com/400x500.png/00cc00?text=cats+soluta', 1, 67476, NULL, 0, 0, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(34, 'dolores', NULL, 'https://via.placeholder.com/400x500.png/0000dd?text=cats+aliquid', 5, 979370, NULL, 1, 16, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(35, 'voluptatem', NULL, 'https://via.placeholder.com/400x500.png/00bbdd?text=cats+omnis', 5, 807892, NULL, 0, 14, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(36, 'repudiandae', NULL, 'https://via.placeholder.com/400x500.png/00ff99?text=cats+in', 2, 149239, NULL, 0, 3, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(37, 'at', NULL, 'https://via.placeholder.com/400x500.png/006677?text=cats+voluptatem', 2, 401076, NULL, 0, 11, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(38, 'illum', NULL, 'https://via.placeholder.com/400x500.png/00ee66?text=cats+nulla', 4, 965290, NULL, 1, 9, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(39, 'voluptate', NULL, 'https://via.placeholder.com/400x500.png/004422?text=cats+rerum', 2, 247218, NULL, 0, 4, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(40, 'ratione', NULL, 'https://via.placeholder.com/400x500.png/00ff88?text=cats+at', 2, 225917, NULL, 0, 6, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(41, 'dignissimos', NULL, 'https://via.placeholder.com/400x500.png/00cc88?text=cats+dolore', 3, 964103, NULL, 1, 16, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(42, 'et', NULL, 'https://via.placeholder.com/400x500.png/005533?text=cats+laborum', 3, 938423, NULL, 1, 1, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(43, 'voluptatem', NULL, 'https://via.placeholder.com/400x500.png/0033ee?text=cats+distinctio', 2, 945150, NULL, 0, 4, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(44, 'accusantium', NULL, 'https://via.placeholder.com/400x500.png/001177?text=cats+enim', 1, 48421, NULL, 0, 20, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(45, 'voluptas', NULL, 'https://via.placeholder.com/400x500.png/002277?text=cats+assumenda', 1, 231783, NULL, 0, 13, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(46, 'impedit', NULL, 'https://via.placeholder.com/400x500.png/00dd66?text=cats+inventore', 3, 703329, NULL, 0, 16, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(47, 'alias', NULL, 'https://via.placeholder.com/400x500.png/00bb22?text=cats+in', 3, 155297, NULL, 1, 18, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(48, 'aliquam', NULL, 'https://via.placeholder.com/400x500.png/00eecc?text=cats+sed', 1, 376226, NULL, 1, 2, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(49, 'voluptas', NULL, 'https://via.placeholder.com/400x500.png/00bb55?text=cats+nostrum', 5, 387690, NULL, 1, 13, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(50, 'est', NULL, 'https://via.placeholder.com/400x500.png/00ee00?text=cats+est', 4, 481982, NULL, 0, 2, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(51, 'voluptatibus', NULL, 'https://via.placeholder.com/400x500.png/00ddff?text=cats+quis', 5, 632879, NULL, 0, 13, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(52, 'fuga', NULL, 'https://via.placeholder.com/400x500.png/008800?text=cats+molestias', 3, 412671, NULL, 1, 12, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(53, 'ut', NULL, 'https://via.placeholder.com/400x500.png/00ffaa?text=cats+autem', 3, 151777, NULL, 0, 1, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(54, 'ducimus', NULL, 'https://via.placeholder.com/400x500.png/00bbff?text=cats+debitis', 3, 319606, NULL, 0, 13, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(55, 'architecto', NULL, 'https://via.placeholder.com/400x500.png/0022aa?text=cats+nemo', 4, 206384, NULL, 0, 10, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(56, 'omnis', NULL, 'https://via.placeholder.com/400x500.png/00bb66?text=cats+laudantium', 5, 568205, NULL, 0, 10, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(57, 'blanditiis', NULL, 'https://via.placeholder.com/400x500.png/0088bb?text=cats+culpa', 5, 871508, NULL, 0, 1, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(58, 'earum', NULL, 'https://via.placeholder.com/400x500.png/00bb22?text=cats+cupiditate', 1, 591953, NULL, 1, 14, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(59, 'unde', NULL, 'https://via.placeholder.com/400x500.png/00aaee?text=cats+consequatur', 1, 734939, NULL, 1, 6, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(60, 'dolorem', NULL, 'https://via.placeholder.com/400x500.png/0088ee?text=cats+dignissimos', 2, 143094, NULL, 0, 19, NULL, NULL, NULL, '2022-09-23 04:44:47', '2022-09-23 04:44:47'),
(63, 'test 22/09/2022', NULL, 'upload/2022-09-26_2022-08-04_naruto.jpg', 9, 10000000, NULL, 1, NULL, NULL, '123', '2022-09-26 02:27:18', '2022-09-26 02:24:39', '2022-09-26 02:27:18'),
(64, 'test 22/09/2022 123', NULL, 'upload/product/2022-09-27_2022-08-04_1.jpg', 1, 10000000, NULL, 1, NULL, NULL, 'test', '2022-09-27 02:25:20', '2022-09-27 02:24:11', '2022-09-27 02:25:20'),
(65, 'test 280922 test', NULL, 'upload/product/2022-09-28_2022-08-30_2022-08-23_test.jpg', 1, 10000000, NULL, 1, NULL, NULL, 'test', '2022-09-28 02:27:03', '2022-09-28 02:26:18', '2022-09-28 02:27:03'),
(66, 'test 22/09/2022 123', NULL, 'upload/product/2022-09-29_2022-08-04_naruto.jpg', 1, 10000000, NULL, 1, NULL, NULL, 'test', '2022-09-29 06:58:41', '2022-09-29 06:57:32', '2022-09-29 06:58:41'),
(67, 'test 22/09/2022 123', NULL, 'upload/product/2022-09-29_2022-08-12_1.jpg', 3, 10000000, NULL, 1, NULL, NULL, 'test 123', '2022-09-29 09:19:09', '2022-09-29 09:18:50', '2022-09-29 09:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL COMMENT '0:CMS user,1:Front-end user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `password`, `remember_token`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Leonie Bernier', 'koch.nikita@example.org', '2022-09-23 04:42:05', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BBGabhZCfn', 1, '2022-09-23 04:42:05', '2022-09-29 06:52:21', '2022-09-29 06:52:21'),
(2, 'Prof. Noel Goodwin', 'hprosacco@example.org', '2022-09-23 04:42:05', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bUhk6uK8Te', 1, '2022-09-23 04:42:05', '2022-09-23 04:42:05', NULL),
(3, 'Edmond O\'Conner', 'elenora.armstrong@example.org', '2022-09-23 04:42:05', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4fqKrVLqUI', 0, '2022-09-23 04:42:05', '2022-09-23 04:42:05', NULL),
(4, 'Prof. Gaylord Pollich', 'mhermann@example.org', '2022-09-23 04:42:05', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jqXNOULUFw', 1, '2022-09-23 04:42:05', '2022-09-23 04:42:05', NULL),
(5, 'Nico Dooley', 'fidel19@example.com', '2022-09-23 04:42:05', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VG2qKE9TYt', 0, '2022-09-23 04:42:05', '2022-09-23 04:42:05', NULL),
(6, 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, 'upload/2022-09-23_DSC_1007.JPG', '$2y$10$9D0z8L/3k3x5FIyXgHo4n.iLBq2xOnF2LN2z9rK.3r38.oQK6O2PO', NULL, 0, '2022-09-23 04:50:07', '2022-09-23 06:39:02', NULL),
(7, 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, 'upload/2022-09-23_DSC_1064.JPG', '$2y$10$rZDmQunqdLLy7Q/gBsWhL.iq/6J.G6G55NmkTGysaMy6FY1jB/RKy', NULL, 1, '2022-09-23 04:50:25', '2022-09-23 04:50:25', NULL),
(8, 'Admin', 'admin@gmail.com', NULL, 'upload/2022-09-23_DSC_1008.JPG', '$2y$10$kuh1rL.eCnm0Iq3nxCBR5u4Gxa9tkOvTpCnqsvqKOSuWmVkji6P/S', NULL, 0, '2022-09-23 06:38:32', '2022-09-27 02:16:28', NULL),
(12, 'test 22/09/2022 123', 'test220922@gmail.com', NULL, 'upload/2022-09-29_2022-08-04_naruto.jpg', '$2y$10$YtwnCdStgpOuHJIYkUql2.NCKTBbxoab9XAOYrEPQXIdarAVwJmzy', NULL, 0, '2022-09-29 09:16:36', '2022-09-29 09:16:56', '2022-09-29 09:16:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

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
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
