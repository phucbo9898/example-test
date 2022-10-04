-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2022 at 08:38 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1:active,0:inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'officia', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(2, 'quia', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(3, 'et', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(4, 'sed', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(5, 'delectus', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(6, 'repellendus', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(7, 'repellat', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(8, 'quasi', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(9, 'modi', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(10, 'quia', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(11, 'voluptas', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(12, 'praesentium', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(13, 'architecto', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(14, 'recusandae', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(15, 'magni', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(16, 'quos', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(17, 'eligendi', NULL, NULL, 0, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(18, 'ad', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(19, 'est', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(20, 'non', NULL, NULL, 1, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(21, 'sit', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(22, 'excepturi', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(23, 'impedit', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(24, 'nisi', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(25, 'omnis', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(26, 'eius', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(27, 'dolor', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(28, 'accusantium', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(29, 'reiciendis', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(30, 'mollitia', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(31, 'esse', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(32, 'autem', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(33, 'temporibus', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(34, 'nesciunt', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(35, 'asperiores', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(36, 'quia', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(37, 'est', NULL, NULL, 0, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(38, 'voluptas', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(39, 'consequatur', NULL, NULL, 1, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(40, 'libero', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(41, 'est', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(42, 'blanditiis', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(43, 'cupiditate', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(44, 'nihil', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(45, 'esse', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(46, 'ut', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(47, 'quas', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(48, 'ipsa', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(49, 'aut', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(50, 'et', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(51, 'est', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(52, 'doloribus', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(53, 'officiis', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(54, 'id', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(55, 'sint', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(56, 'ut', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(57, 'et', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(58, 'aliquam', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(59, 'ducimus', NULL, NULL, 0, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(60, 'placeat', NULL, NULL, 1, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33');

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
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1:active,0:inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `created_by`, `user_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Điện Thoại', 'dien-thoai', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, NULL, '2022-09-06 06:33:12', '2022-09-06 07:19:00'),
(2, 'PC', 'pc', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, NULL, '2022-09-06 06:33:12', '2022-09-06 07:19:09'),
(3, 'Máy tính bảng', 'may-tinh-bang', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, NULL, '2022-09-06 06:33:12', '2022-09-06 07:19:16'),
(4, 'Laptop', 'laptop', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, NULL, '2022-09-06 06:33:12', '2022-09-06 07:19:34'),
(5, 'Linh kiện, phụ kiện', 'linh-kien-phu-kien', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, NULL, '2022-09-06 06:33:12', '2022-09-06 07:19:51'),
(6, 'Điện Thoại 123 123', 'dien-thoai-123-123', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, '2022-09-06 07:48:02', '2022-09-06 07:44:17', '2022-09-06 07:48:02'),
(7, 'Máy tính bảng 123', 'may-tinh-bang-123', NULL, NULL, 'Vũ Ngọc Phúc', 0, NULL, '2022-09-06 07:48:06', '2022-09-06 07:47:52', '2022-09-06 07:48:06'),
(8, 'Máy tính bảng test 123', 'may-tinh-bang-test-123', NULL, NULL, 'Vũ Ngọc Phúc', 0, 0, '2022-09-14 03:29:50', '2022-09-14 03:29:35', '2022-09-14 03:29:50'),
(9, 'Linh kiện, phụ kiện', 'linh-kien-phu-kien', NULL, NULL, 'Vũ Ngọc Phúc', 0, NULL, '2022-09-14 06:14:58', '2022-09-14 06:14:50', '2022-09-14 06:14:58'),
(10, 'test 22/09/2022', 'test-22092022', NULL, NULL, 'test 22/09/2022', 0, NULL, '2022-09-22 04:08:44', '2022-09-22 04:08:13', '2022-09-22 04:08:44'),
(11, 'test 22/09/2022', 'test-22092022', NULL, NULL, 'test 22/09/2022', 0, NULL, '2022-09-22 04:08:46', '2022-09-22 04:08:38', '2022-09-22 04:08:46'),
(12, 'test 22/09/2022 123', 'test-22092022-123', NULL, NULL, 'test 22/09/2022', 0, NULL, '2022-09-22 04:18:52', '2022-09-22 04:08:49', '2022-09-22 04:18:52'),
(13, 'test te 123', 'test-te-123', NULL, NULL, 'Vũ Ngọc Phúc', 0, NULL, '2022-09-22 07:46:48', '2022-09-22 07:46:37', '2022-09-22 07:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2019_08_19_000000_create_failed_jobs_table', 1),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(50, '2022_08_02_015452_create_categories_table', 1),
(51, '2022_08_02_020016_create_brands_table', 1),
(52, '2022_08_02_020213_create_products_table', 1),
(53, '2022_08_02_020352_create_orders_table', 1),
(54, '2022_08_02_020608_create_articles_table', 1),
(55, '2022_08_02_020738_create_contacts_table', 1),
(56, '2022_08_02_063252_create_roles_table', 1),
(57, '2022_08_04_044625_create_order_detait_table', 1);

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
(1, 'DH010', 'Lexie Braun', NULL, '1-866-268-4820', NULL, 4, 913625, '2022-08-17 06:33:27', '2022-09-06 06:33:27'),
(2, 'DH336', 'Brooklyn Weimann', NULL, '(855) 539-5106', NULL, 4, 794463, '2022-08-16 17:00:00', '2022-09-06 06:33:27'),
(3, 'DH570', 'Miss Aditya Hills', NULL, '1-844-632-5710', NULL, 4, 929888, '2022-08-06 06:33:27', '2022-09-06 06:33:27'),
(4, 'DH250', 'Alexandro Reilly', NULL, '(844) 632-4992', NULL, 4, 754085, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(5, 'DH691', 'Dylan Beier', NULL, '(844) 956-5110', NULL, 4, 398913, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(6, 'DH762', 'Federico Raynor', NULL, '(855) 451-1090', NULL, 4, 264454, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(7, 'DH305', 'Miss Maribel Gislason', NULL, '844.979.4846', NULL, 4, 717851, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(8, 'DH240', 'Lacy Doyle', NULL, '877.569.1795', NULL, 1, 184597, '2022-08-06 06:33:27', '2022-09-06 06:33:27'),
(9, 'DH927', 'Prof. Jakob Pagac', NULL, '866-934-0455', NULL, 4, 650899, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(10, 'DH150', 'Janice Wuckert', NULL, '800.367.2325', NULL, 2, 125161, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(11, 'DH449', 'Bobby Rice', NULL, '(888) 868-7357', NULL, 1, 520396, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(12, 'DH760', 'Barton Beahan III', NULL, '(877) 543-5170', NULL, 2, 959706, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(13, 'DH035', 'Ms. Lera Schroeder II', NULL, '1-866-690-9051', NULL, 4, 972603, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(14, 'DH370', 'Macey Schaefer', NULL, '866.689.1664', NULL, 3, 317123, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(15, 'DH527', 'Kevon Jast', NULL, '800.529.8030', NULL, 2, 666369, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(16, 'DH261', 'Alf Murphy PhD', NULL, '(800) 410-8184', NULL, 2, 367910, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(17, 'DH010', 'Wayne Durgan IV', NULL, '1-800-753-7737', NULL, 3, 783380, '2022-09-06 06:33:27', '2022-09-13 10:27:24'),
(18, 'DH335', 'Jules Haley IV', NULL, '844-386-8055', NULL, 4, 289592, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(19, 'DH070', 'Dorothy Mosciski', NULL, '800.703.8727', NULL, 0, 606085, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(20, 'DH923', 'Lucas Bergstrom', NULL, '1-844-551-5733', NULL, 3, 171027, '2022-09-06 06:33:27', '2022-09-06 06:33:27'),
(21, 'DH21', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 142328, '2022-09-06 06:41:15', '2022-09-06 06:41:15'),
(22, 'DH22', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 142328, '2022-09-06 09:22:48', '2022-09-06 09:22:48'),
(23, 'DH23', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 2908990, '2022-09-06 09:32:48', '2022-09-06 09:32:48'),
(24, 'DH24', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 415570, '2022-09-06 09:32:58', '2022-09-06 09:32:58'),
(25, 'DH25', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 1243482, '2022-09-06 09:37:40', '2022-09-06 09:37:40'),
(26, 'DH26', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 3024910, '2022-09-06 09:39:59', '2022-09-06 09:39:59'),
(27, 'DH27', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 845601, '2022-09-06 09:56:56', '2022-09-06 09:56:56'),
(28, 'DH28', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 220000, '2022-09-06 10:08:50', '2022-09-06 10:08:50'),
(31, 'DH31', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 284656, '2022-09-07 03:31:54', '2022-09-07 03:31:54'),
(32, 'DH32', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 284656, '2022-09-07 03:33:10', '2022-09-07 03:33:10'),
(33, 'DH33', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 284656, '2022-09-07 03:33:24', '2022-09-07 03:33:24'),
(34, 'DH34', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 284656, '2022-09-07 03:33:46', '2022-09-07 03:33:46'),
(35, 'DH35', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 142328, '2022-09-07 03:36:54', '2022-09-07 03:36:54'),
(36, 'DH36', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 142328, '2022-09-07 03:41:09', '2022-09-07 03:41:09'),
(37, 'DH37', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 0, 142328, '2022-09-07 03:43:50', '2022-09-07 03:43:50'),
(38, 'DH38', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 1, 142328, '2022-09-07 03:45:43', '2022-09-09 02:50:11'),
(39, 'DH39', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 4, 8456010, '2022-09-07 03:50:57', '2022-09-08 06:45:51'),
(40, 'DH40', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 2, 120000000, '2022-09-07 03:52:49', '2022-09-14 08:06:53'),
(41, 'DH41', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 4, 120000000, '2022-09-07 06:28:18', '2022-09-08 06:41:46'),
(42, 'DH42', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 3, 142328, '2022-09-07 07:43:35', '2022-09-07 08:12:10'),
(43, 'DH43', 'Vũ Ngọc Phúc', NULL, NULL, NULL, 2, 142328, '2022-09-07 07:49:06', '2022-09-07 08:02:17'),
(44, 'DH44', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 2, 142328, '2022-09-07 07:59:18', '2022-09-07 08:09:33'),
(45, 'DH45', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 4155700, '2022-09-07 08:43:17', '2022-09-08 06:39:17'),
(46, 'DH46', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 142328, '2022-09-08 06:49:13', '2022-09-09 02:49:22'),
(47, 'DH47', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 142328, '2022-09-08 06:49:31', '2022-09-09 02:45:01'),
(48, 'DH48', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 3, 142328, '2022-09-09 06:26:53', '2022-09-13 06:59:03'),
(49, 'DH49', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 3, 142328, '2022-09-09 06:27:46', '2022-09-13 06:57:06'),
(50, 'DH50', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 2, 142328, '2022-09-09 06:31:58', '2022-09-13 06:51:49'),
(51, 'DH51', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 142328, '2022-09-09 06:32:14', '2022-09-13 06:48:35'),
(52, 'DH52', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 5720100, '2022-09-14 01:45:36', '2022-09-14 01:45:36'),
(53, 'DH53', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 4571270, '2022-09-14 01:53:19', '2022-09-14 01:53:19'),
(54, 'DH54', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 415570, '2022-09-14 02:05:36', '2022-09-14 02:05:36'),
(55, 'DH55', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 415570, '2022-09-14 02:05:53', '2022-09-14 02:05:53'),
(56, 'DH56', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 879643, '2022-09-14 02:06:21', '2022-09-14 02:06:21'),
(57, 'DH57', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 4084770, '2022-09-14 02:06:56', '2022-09-14 02:06:56'),
(58, 'DH58', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 9271110, '2022-09-14 02:10:37', '2022-09-21 10:33:48'),
(59, 'DH59', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 3, 7325180, '2022-09-14 02:16:11', '2022-09-14 03:25:29'),
(60, 'DH60', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 142328, '2022-09-14 02:17:02', '2022-09-14 02:24:46'),
(61, 'DH61', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 415570, '2022-09-14 03:37:20', '2022-09-21 10:32:35'),
(62, 'DH62', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 0, 142328, '2022-09-21 10:37:01', '2022-09-21 10:37:01'),
(63, 'DH63', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 142328, '2022-09-21 10:39:38', '2022-09-21 10:39:59'),
(64, 'DH64', 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, NULL, 4, 415570, '2022-09-21 10:42:44', '2022-09-21 10:42:52');

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
(1, 'rerum', 'https://via.placeholder.com/400x500.png/00cc11?text=cats+natus', 2, 59, 9, 375518, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(2, 'esse', 'https://via.placeholder.com/400x500.png/00dd55?text=cats+corrupti', 1, 35, 17, 338004, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(3, 'voluptas', 'https://via.placeholder.com/400x500.png/0044cc?text=cats+numquam', 11, 29, 3, 732518, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(4, 'totam', 'https://via.placeholder.com/400x500.png/007755?text=cats+quidem', 12, 18, 6, 678737, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(5, 'est', 'https://via.placeholder.com/400x500.png/00ee44?text=cats+doloremque', 3, 23, 10, 940641, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(6, 'quam', 'https://via.placeholder.com/400x500.png/006622?text=cats+ut', 5, 21, 18, 979681, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(7, 'necessitatibus', 'https://via.placeholder.com/400x500.png/009900?text=cats+ut', 10, 45, 19, 838911, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(8, 'temporibus', 'https://via.placeholder.com/400x500.png/007722?text=cats+sint', 4, 19, 9, 636260, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(9, 'tempora', 'https://via.placeholder.com/400x500.png/006699?text=cats+et', 17, 17, 16, 884529, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(10, 'ut', 'https://via.placeholder.com/400x500.png/00aa44?text=cats+quis', 9, 25, 5, 302491, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(11, 'corporis', 'https://via.placeholder.com/400x500.png/00bb55?text=cats+nihil', 20, 15, 17, 12875, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(12, 'totam', 'https://via.placeholder.com/400x500.png/0044cc?text=cats+modi', 19, 13, 0, 119483, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(13, 'omnis', 'https://via.placeholder.com/400x500.png/004400?text=cats+ad', 8, 11, 19, 377612, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(14, 'iure', 'https://via.placeholder.com/400x500.png/00bbee?text=cats+laudantium', 14, 17, 3, 638166, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(15, 'numquam', 'https://via.placeholder.com/400x500.png/00bbdd?text=cats+aliquid', 6, 9, 9, 455909, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(16, 'fugit', 'https://via.placeholder.com/400x500.png/00bbcc?text=cats+ullam', 15, 8, 18, 27566, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(17, 'voluptate', 'https://via.placeholder.com/400x500.png/004444?text=cats+repudiandae', 7, 7, 0, 193614, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(18, 'quas', 'https://via.placeholder.com/400x500.png/0033cc?text=cats+excepturi', 13, 5, 1, 563054, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(19, 'praesentium', 'https://via.placeholder.com/400x500.png/0099dd?text=cats+quia', 18, 3, 18, 40679, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(20, 'consequatur', 'https://via.placeholder.com/400x500.png/0066cc?text=cats+eos', 16, 1, 19, 586728, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(21, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 21, 1, 1, 142328, '2022-09-06 06:41:15', '2022-09-06 06:41:15'),
(22, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 22, 1, 1, 142328, '2022-09-06 09:22:48', '2022-09-06 09:22:48'),
(23, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 23, 2, 7, 415570, '2022-09-06 09:32:48', '2022-09-06 09:32:48'),
(24, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 24, 2, 1, 415570, '2022-09-06 09:32:58', '2022-09-06 09:32:58'),
(25, 'autem', 'https://via.placeholder.com/400x500.png/006699?text=cats+delectus', 25, 3, 2, 621741, '2022-09-06 09:37:40', '2022-09-06 09:37:40'),
(26, 'nihil', 'http://127.0.0.1:8000/upload/product/2022-09-06_0-16.jpg', 26, 40, 10, 302491, '2022-09-06 09:39:59', '2022-09-06 09:39:59'),
(27, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 27, 39, 1, 845601, '2022-09-06 09:56:56', '2022-09-06 09:56:56'),
(28, 'test', 'http://127.0.0.1:8000/upload/product/2022-09-06_2022-08-16_naruto.jpg', 28, 62, 11, 20000, '2022-09-06 10:08:50', '2022-09-06 10:08:50'),
(29, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 31, 1, 2, 142328, '2022-09-07 03:31:54', '2022-09-07 03:31:54'),
(30, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 32, 1, 2, 142328, '2022-09-07 03:33:10', '2022-09-07 03:33:10'),
(31, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 33, 1, 2, 142328, '2022-09-07 03:33:24', '2022-09-07 03:33:24'),
(32, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 34, 1, 2, 142328, '2022-09-07 03:33:46', '2022-09-07 03:33:46'),
(33, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 35, 1, 1, 142328, '2022-09-07 03:36:54', '2022-09-07 03:36:54'),
(34, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 36, 1, 1, 142328, '2022-09-07 03:41:09', '2022-09-07 03:41:09'),
(35, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 37, 1, 1, 142328, '2022-09-07 03:43:50', '2022-09-07 03:43:50'),
(36, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 38, 1, 1, 142328, '2022-09-07 03:45:43', '2022-09-07 03:45:43'),
(37, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 39, 39, 10, 845601, '2022-09-07 03:50:57', '2022-09-07 03:50:57'),
(38, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 40, 39, 10, 12000000, '2022-09-07 03:52:49', '2022-09-07 03:52:49'),
(39, 'Iphone 11 64Gb', 'http://127.0.0.1:8000/upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 41, 39, 10, 12000000, '2022-09-07 06:28:18', '2022-09-07 06:28:18'),
(40, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 42, 1, 1, 142328, '2022-09-07 07:43:35', '2022-09-07 07:43:35'),
(41, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 43, 1, 1, 142328, '2022-09-07 07:49:06', '2022-09-07 07:49:06'),
(42, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 44, 1, 1, 142328, '2022-09-07 07:59:18', '2022-09-07 07:59:18'),
(43, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 45, 2, 10, 415570, '2022-09-07 08:43:17', '2022-09-07 08:43:17'),
(44, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 46, 1, 1, 142328, '2022-09-08 06:49:13', '2022-09-08 06:49:13'),
(45, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 47, 1, 1, 142328, '2022-09-08 06:49:31', '2022-09-08 06:49:31'),
(46, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 48, 1, 1, 142328, '2022-09-09 06:26:53', '2022-09-09 06:26:53'),
(47, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 49, 1, 1, 142328, '2022-09-09 06:27:46', '2022-09-09 06:27:46'),
(48, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 50, 1, 1, 142328, '2022-09-09 06:31:58', '2022-09-09 06:31:58'),
(49, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 51, 1, 1, 142328, '2022-09-09 06:32:14', '2022-09-09 06:32:14'),
(50, 'itaque', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+cum', 52, 6, 10, 572010, '2022-09-14 01:45:36', '2022-09-14 01:45:36'),
(51, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 53, 2, 11, 415570, '2022-09-14 01:53:19', '2022-09-14 01:53:19'),
(52, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 54, 2, 1, 415570, '2022-09-14 02:05:36', '2022-09-14 02:05:36'),
(53, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 55, 2, 1, 415570, '2022-09-14 02:05:53', '2022-09-14 02:05:53'),
(54, 'assumenda', 'https://via.placeholder.com/400x500.png/0011cc?text=cats+architecto', 56, 4, 1, 879643, '2022-09-14 02:06:21', '2022-09-14 02:06:21'),
(55, 'sed', 'https://via.placeholder.com/400x500.png/00bb66?text=cats+in', 57, 7, 10, 408477, '2022-09-14 02:06:56', '2022-09-14 02:06:56'),
(56, 'doloribus', 'https://via.placeholder.com/400x500.png/00cc99?text=cats+magni', 58, 10, 10, 927111, '2022-09-14 02:10:37', '2022-09-14 02:10:37'),
(57, 'repudiandae', 'https://via.placeholder.com/400x500.png/007733?text=cats+magni', 59, 26, 10, 732518, '2022-09-14 02:16:11', '2022-09-14 02:16:11'),
(58, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 60, 1, 1, 142328, '2022-09-14 02:17:02', '2022-09-14 02:17:02'),
(59, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 61, 2, 1, 415570, '2022-09-14 03:37:20', '2022-09-14 03:37:20'),
(60, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 62, 1, 1, 142328, '2022-09-21 10:37:01', '2022-09-21 10:37:01'),
(61, 'consequatur', 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 63, 1, 1, 142328, '2022-09-21 10:39:38', '2022-09-21 10:39:38'),
(62, 'ut', 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 64, 2, 1, 415570, '2022-09-21 10:42:44', '2022-09-21 10:42:44');

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
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `category_id`, `brand_id`, `price`, `sale`, `status`, `quantity`, `summary`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'consequatur', NULL, 'https://via.placeholder.com/400x500.png/001133?text=cats+doloremque', 5, 1, 142328, NULL, 1, 4, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(2, 'ut', NULL, 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 5, 2, 415570, NULL, 1, 8, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(3, 'autem', NULL, 'https://via.placeholder.com/400x500.png/006699?text=cats+delectus', 2, 3, 621741, NULL, 1, 7, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(4, 'assumenda', NULL, 'https://via.placeholder.com/400x500.png/0011cc?text=cats+architecto', 1, 4, 879643, NULL, 1, 8, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(5, 'recusandae', NULL, 'https://via.placeholder.com/400x500.png/003388?text=cats+dolor', 3, 5, 434151, NULL, 1, 15, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(6, 'itaque', NULL, 'https://via.placeholder.com/400x500.png/00cc22?text=cats+cum', 5, 6, 572010, NULL, 1, 20, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(7, 'sed', NULL, 'https://via.placeholder.com/400x500.png/00bb66?text=cats+in', 1, 7, 408477, NULL, 1, 20, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(8, 'labore', NULL, 'https://via.placeholder.com/400x500.png/005511?text=cats+illum', 3, 8, 541787, NULL, 0, 1, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(9, 'officia', NULL, 'https://via.placeholder.com/400x500.png/00dd11?text=cats+quia', 3, 9, 453820, NULL, 1, 15, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(10, 'doloribus', NULL, 'https://via.placeholder.com/400x500.png/00cc99?text=cats+magni', 5, 10, 927111, NULL, 1, 12, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(11, 'et', NULL, 'https://via.placeholder.com/400x500.png/00bb00?text=cats+sunt', 1, 11, 224608, NULL, 0, 3, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(12, 'est', NULL, 'https://via.placeholder.com/400x500.png/002288?text=cats+quas', 3, 12, 239194, NULL, 0, 15, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(13, 'eum', NULL, 'https://via.placeholder.com/400x500.png/00ff55?text=cats+vero', 4, 13, 269092, NULL, 0, 0, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(14, 'sint', NULL, 'https://via.placeholder.com/400x500.png/0000ee?text=cats+deleniti', 5, 14, 147390, NULL, 0, 13, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(15, 'accusamus', NULL, 'https://via.placeholder.com/400x500.png/00ee22?text=cats+porro', 3, 15, 941265, NULL, 1, 16, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(16, 'explicabo', NULL, 'https://via.placeholder.com/400x500.png/00cc22?text=cats+amet', 4, 16, 722883, NULL, 0, 16, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(17, 'voluptatem', NULL, 'https://via.placeholder.com/400x500.png/0055aa?text=cats+sit', 1, 17, 663034, NULL, 0, 19, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(18, 'earum', NULL, 'https://via.placeholder.com/400x500.png/0022aa?text=cats+eos', 1, 18, 365648, NULL, 0, 19, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(19, 'officiis', NULL, 'https://via.placeholder.com/400x500.png/003300?text=cats+maxime', 3, 19, 844349, NULL, 0, 5, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(20, 'non', NULL, 'https://via.placeholder.com/400x500.png/0044ff?text=cats+iure', 2, 20, 499581, NULL, 0, 6, NULL, NULL, NULL, '2022-09-06 06:33:20', '2022-09-06 06:33:20'),
(21, 'rerum', NULL, 'https://via.placeholder.com/400x500.png/0000dd?text=cats+itaque', 5, 21, 504021, NULL, 1, 16, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(22, 'pariatur', NULL, 'https://via.placeholder.com/400x500.png/0088cc?text=cats+fuga', 1, 22, 375518, NULL, 0, 1, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(23, 'esse', NULL, 'https://via.placeholder.com/400x500.png/0011dd?text=cats+aspernatur', 1, 23, 279123, NULL, 1, 1, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(24, 'dolorem', NULL, 'https://via.placeholder.com/400x500.png/007711?text=cats+enim', 5, 24, 338004, NULL, 0, 14, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(25, 'voluptas', NULL, 'https://via.placeholder.com/400x500.png/0088aa?text=cats+iste', 5, 25, 805441, NULL, 1, 18, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(26, 'repudiandae', NULL, 'https://via.placeholder.com/400x500.png/007733?text=cats+magni', 5, 26, 732518, NULL, 1, 10, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(27, 'totam', NULL, 'https://via.placeholder.com/400x500.png/00dddd?text=cats+occaecati', 3, 27, 998437, NULL, 0, 16, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(28, 'accusantium', NULL, 'https://via.placeholder.com/400x500.png/004422?text=cats+blanditiis', 2, 28, 678737, NULL, 1, 8, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(29, 'est', NULL, 'https://via.placeholder.com/400x500.png/0066dd?text=cats+reiciendis', 1, 29, 793725, NULL, 0, 1, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(30, 'voluptate', NULL, 'https://via.placeholder.com/400x500.png/00bb77?text=cats+enim', 4, 30, 940641, NULL, 0, 12, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(31, 'quam', NULL, 'https://via.placeholder.com/400x500.png/00cc00?text=cats+temporibus', 5, 31, 185124, NULL, 0, 6, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(32, 'quae', NULL, 'https://via.placeholder.com/400x500.png/004411?text=cats+laboriosam', 2, 32, 979681, NULL, 0, 20, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(33, 'necessitatibus', NULL, 'https://via.placeholder.com/400x500.png/0033ee?text=cats+vel', 4, 33, 793249, NULL, 0, 0, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(34, 'accusamus', NULL, 'https://via.placeholder.com/400x500.png/00ee33?text=cats+ullam', 3, 34, 838911, NULL, 1, 6, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(35, 'temporibus', NULL, 'https://via.placeholder.com/400x500.png/000011?text=cats+cum', 3, 35, 917152, NULL, 1, 2, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(36, 'autem', NULL, 'https://via.placeholder.com/400x500.png/005511?text=cats+et', 2, 36, 636260, NULL, 1, 14, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(37, 'tempora', NULL, 'https://via.placeholder.com/400x500.png/005566?text=cats+omnis', 5, 37, 188619, NULL, 1, 19, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(38, 'molestiae', NULL, 'https://via.placeholder.com/400x500.png/001111?text=cats+incidunt', 4, 38, 884529, NULL, 1, 11, NULL, NULL, NULL, '2022-09-06 06:33:32', '2022-09-06 06:33:32'),
(39, 'Iphone 11 64Gb', NULL, 'upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 5, 39, 12000000, NULL, 1, 9, NULL, 'test product by kaiser kid', NULL, '2022-09-06 06:33:33', '2022-09-07 03:52:35'),
(40, 'Apple  seri 3', NULL, 'upload/product/2022-09-06_0-16.jpg', 5, 40, 302491, NULL, 1, 0, NULL, 'test', NULL, '2022-09-06 06:33:33', '2022-09-14 03:31:04'),
(41, 'corporis', NULL, 'https://via.placeholder.com/400x500.png/00bb77?text=cats+et', 1, 41, 385723, NULL, 0, 4, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(42, 'nostrum', NULL, 'https://via.placeholder.com/400x500.png/00aa77?text=cats+sit', 4, 42, 12875, NULL, 0, 20, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(43, 'totam', NULL, 'https://via.placeholder.com/400x500.png/00aaaa?text=cats+et', 2, 43, 172887, NULL, 1, 17, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(44, 'est', NULL, 'https://via.placeholder.com/400x500.png/0055ff?text=cats+molestiae', 5, 44, 119483, NULL, 1, 17, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(45, 'omnis', NULL, 'https://via.placeholder.com/400x500.png/00bbee?text=cats+quas', 2, 45, 164493, NULL, 1, 13, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(46, 'incidunt', NULL, 'https://via.placeholder.com/400x500.png/000077?text=cats+delectus', 3, 46, 377612, NULL, 0, 2, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(47, 'iure', NULL, 'https://via.placeholder.com/400x500.png/00dd11?text=cats+repellat', 4, 47, 649908, NULL, 0, 8, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(48, 'debitis', NULL, 'https://via.placeholder.com/400x500.png/0099ff?text=cats+non', 1, 48, 638166, NULL, 1, 9, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(49, 'numquam', NULL, 'https://via.placeholder.com/400x500.png/004433?text=cats+quis', 5, 49, 964543, NULL, 1, 11, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(50, 'earum', NULL, 'https://via.placeholder.com/400x500.png/00dd66?text=cats+dolorem', 2, 50, 455909, NULL, 0, 1, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(51, 'fugit', NULL, 'https://via.placeholder.com/400x500.png/007733?text=cats+fugiat', 3, 51, 335765, NULL, 1, 2, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(52, 'temporibus', NULL, 'https://via.placeholder.com/400x500.png/0055cc?text=cats+culpa', 5, 52, 27566, NULL, 0, 14, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(53, 'voluptate', NULL, 'https://via.placeholder.com/400x500.png/00cc22?text=cats+voluptatem', 3, 53, 369021, NULL, 0, 15, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(54, 'ea', NULL, 'https://via.placeholder.com/400x500.png/00dd00?text=cats+autem', 1, 54, 193614, NULL, 0, 11, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(55, 'quas', NULL, 'https://via.placeholder.com/400x500.png/005511?text=cats+mollitia', 5, 55, 107459, NULL, 0, 9, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(56, 'aliquid', NULL, 'https://via.placeholder.com/400x500.png/000000?text=cats+quis', 3, 56, 563054, NULL, 0, 11, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(57, 'praesentium', NULL, 'https://via.placeholder.com/400x500.png/0044cc?text=cats+quos', 4, 57, 560118, NULL, 0, 13, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(58, 'perspiciatis', NULL, 'https://via.placeholder.com/400x500.png/0055ee?text=cats+et', 1, 58, 40679, NULL, 0, 8, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(59, 'numquam', NULL, 'https://via.placeholder.com/400x500.png/00ccff?text=cats+et', 2, 59, 397317, NULL, 1, 6, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(60, 'alias', NULL, 'https://via.placeholder.com/400x500.png/00ffbb?text=cats+provident', 3, 60, 586728, NULL, 0, 7, NULL, NULL, NULL, '2022-09-06 06:33:33', '2022-09-06 06:33:33'),
(61, 'Vũ Ngọc Phúc', NULL, 'upload/product/2022-09-06_2022-08-26_iphone-xi-tim-200x200.jpg', 1, NULL, 10000000, NULL, 1, NULL, NULL, 'test', '2022-09-06 07:54:03', '2022-09-06 07:49:25', '2022-09-06 07:54:03'),
(62, 'test', NULL, 'upload/product/2022-09-06_2022-08-16_naruto.jpg', 1, NULL, 20000, NULL, 1, NULL, NULL, 'test', NULL, '2022-09-06 10:08:37', '2022-09-06 10:08:37'),
(63, 'Apple watch 123', NULL, 'upload/product/2022-09-14_0-16.jpg', 5, NULL, 10000000, NULL, 1, NULL, NULL, 'test', '2022-09-14 03:31:17', '2022-09-14 03:30:41', '2022-09-14 03:31:17'),
(64, 'test 22/09/2022', NULL, 'upload/product/2022-09-22_DSC_1008.JPG', 1, NULL, 10000000, NULL, 1, NULL, NULL, 'test 22/09/2022', '2022-09-22 04:31:09', '2022-09-22 04:24:16', '2022-09-22 04:31:09'),
(65, 'test 22/09/2022 123 123', NULL, 'upload/product/2022-09-22_DSC_1023.JPG', 1, NULL, 10000000, NULL, 1, NULL, NULL, '123123123123', '2022-09-22 07:49:30', '2022-09-22 07:47:25', '2022-09-22 07:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Hipolito Murray', 'gmitchell@example.net', '2022-09-06 06:33:04', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NJv1OnLUD5', 0, '2022-09-06 06:33:04', '2022-09-06 06:33:04', NULL),
(2, 'Miss Rossie Weissnat PhD', 'konopelski.ewell@example.net', '2022-09-06 06:33:04', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3YrkmepSBB', 0, '2022-09-06 06:33:04', '2022-09-06 06:33:04', NULL),
(3, 'Joanne Grady', 'sjakubowski@example.com', '2022-09-06 06:33:04', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4DFza3Z0NN', 1, '2022-09-06 06:33:04', '2022-09-06 06:33:04', NULL),
(4, 'Rhett Kovacek DVM', 'sylvia34@example.org', '2022-09-06 06:33:04', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AeYghLjHkj', 0, '2022-09-06 06:33:04', '2022-09-06 06:33:04', NULL),
(5, 'Candice Bailey', 'queenie95@example.net', '2022-09-06 06:33:04', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jRGBzFIfxu', 0, '2022-09-06 06:33:04', '2022-09-06 06:33:04', NULL),
(6, 'Vũ Ngọc Phúc', 'phucbo9898@gmail.com', NULL, 'upload/user/2022-09-06_2022-08-23_test.jpg', '$2y$10$lCloX1wHz3ciG6xR3sPfNe8YVPhlge83h597XrmjSdFx3ST9s9g/O', NULL, 0, '2022-09-06 06:34:17', '2022-09-14 10:56:04', NULL),
(7, 'Nguyễn Thị Huyền', 'higirl0303@gmail.com', NULL, 'upload/user/2022-09-06_2022-08-04_naruto.jpg', '$2y$10$7gfjXan0aGkO1VLr7Uzr2.GeFfYd9FNlp3HoWTZViJ2TFV/Lv.lsW', NULL, 1, '2022-09-06 06:34:32', '2022-09-06 07:51:32', NULL),
(8, 'test', 'kise160198@gmail.com', NULL, 'upload/user/2022-09-06_2022-08-05_naruto.jpg', '$2y$10$k3BvQOdExdpstaeLnQw2z.495NxV6NhrLsNfc6uBLmyZwf4MoPFL6', NULL, 0, '2022-09-06 07:46:36', '2022-09-06 07:47:14', '2022-09-06 07:47:14'),
(9, 'test', 'admin@vnua.edu.vn', NULL, 'upload/user/2022-09-13_0-16.jpg', '$2y$10$K/dPd.FIy4UV3bZPiWyXH.r/T5BYYU6byB8qxsGY2UvGkgY0z0Ij2', NULL, 0, '2022-09-13 03:48:24', '2022-09-13 03:48:49', '2022-09-13 03:48:49'),
(10, 'Máy tính bảng 123', 'admintesst@gmail.com', NULL, 'upload/user/2022-09-14_0-16.jpg', '$2y$10$9P3C8vdlLZ0iJaiGJIBfZu6TT7UZvIwYX0j5PuRaVLWqTYyzAgIY2', NULL, 0, '2022-09-14 03:29:03', '2022-09-14 03:29:23', '2022-09-14 03:29:23'),
(11, 'Vũ Ngọc Phúc 123123', 'admin123@gmail.com', NULL, 'upload/user/2022-09-21_DSC_1008.JPG', '$2y$10$aP7EdGyl3F15AoBul0n3A.WMQB4yHJWaxhMVHcw5Gn3Iz7ZmUMeOS', NULL, 0, '2022-09-21 10:21:39', '2022-09-21 10:21:39', NULL),
(15, 'test 22/09/2022', 'test220922@gmail.com', NULL, 'upload/2022-09-22_DSC_1007.JPG', '$2y$10$t1iS7M0rS1NyCTuSYAD8QeyC9w4a6V0zQp0.B84WJTdONRkakqZ7C', NULL, 0, '2022-09-22 02:55:28', '2022-09-22 02:55:28', NULL),
(16, 'test 1601', 'test1601@gmail.com', NULL, 'upload/2022-09-22_DSC_1007.JPG', '$2y$10$8Cb6RGduGAvllVkTGnRU6eUZQXoHe7swtEpEOBpV/zyOA6AEdqhV6', NULL, 0, '2022-09-22 03:10:18', '2022-09-22 03:52:16', '2022-09-22 03:52:16'),
(17, 'teteetet 123', 'test16011212@gmail.com', NULL, 'upload/2022-09-22_DSC_1007.JPG', '$2y$10$zRFlp9BJu8kXi/oYbzEj/Ot0mcBwmiGSUUyoLyyST1XqvxXrmdUo.', NULL, 0, '2022-09-22 07:45:43', '2022-09-22 07:46:20', '2022-09-22 07:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
