-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2025 at 03:26 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlite`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `image`, `created_at`, `updated_at`) VALUES
(6, 'IT &bjhhbghgfihith', 'it-&bjhhbghgfihith', 'upload/category/1821936746734683.png', NULL, '2025-01-22 05:25:00'),
(4, 'Development', 'development', 'upload/category/1790624218355073.png', NULL, NULL),
(5, 'Business', 'business', 'upload/category/1790624251070209.jpg', NULL, NULL),
(7, 'Design', 'design', 'upload/category/1790624311350844.png', NULL, NULL),
(8, 'Personal Development', 'personal-development', 'upload/category/1790624352089217.jpg', NULL, NULL),
(9, 'Software Engineering', 'software-engineering', 'upload/category/1792215707443279.png', NULL, NULL),
(10, 'gdkgk', 'gdkgk', 'upload/category/1799576606636646.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_validity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AFMJN', '100', '2024-08-16', 1, '2024-08-13 14:03:57', '2024-08-13 14:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `subcategory_id` int NOT NULL,
  `instructor_id` int NOT NULL,
  `course_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `course_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `course_name_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resources` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` int DEFAULT NULL,
  `discount_price` int DEFAULT NULL,
  `prerequisite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bestseller` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highestrated` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `subcategory_id`, `instructor_id`, `course_image`, `course_title`, `course_name`, `course_name_slug`, `description`, `video`, `label`, `duration`, `resources`, `certificate`, `selling_price`, `discount_price`, `prerequisite`, `bestseller`, `featured`, `highestrated`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 5, 2, 'upload/course/thumbnail1809700015499527.png', 'Laravel Basics', 'Learn how to create a basic website', 'learn-how-to-create-a-basic-website', '<p>In this course, we will create a basic website from scratch</p>', 'upload/course/video/1709283722.mp4', 'Begginer', '40', '4', 'Yes', 200, 50, 'HTML \r\nCss\r\nJavascript', '1', NULL, '1', 1, '2024-02-26 09:18:15', '2024-09-09 03:47:08'),
(3, 7, 6, 2, 'upload/course/thumbnail1793866989453498.png', 'Lms', 'Learning management system', 'learning-management-system', '<p>ysdgy8fhu8dshufhshd78fdsf</p>', 'upload/course/video/1710309513.mp4', 'Begginer', '4', '6', 'Yes', 500, 200, 'wfteyuhfoiusdhuuyu8dhuygsa', '1', '1', '1', 1, '2024-03-13 02:58:33', '2024-03-18 09:27:56'),
(4, 4, 1, 2, 'upload/course/thumbnail1822314248957409.png', 'This is a test', 'test', 'test', '<p>Another test</p>', 'upload/course/video/1737896685.mp4', 'Begginer', '3', '3', 'Yes', 500, 50, 'Non', '1', NULL, NULL, 1, '2025-01-26 09:24:55', '2025-01-26 10:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `course_goals`
--

DROP TABLE IF EXISTS `course_goals`;
CREATE TABLE IF NOT EXISTS `course_goals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `goal_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_goals`
--

INSERT INTO `course_goals` (`id`, `course_id`, `goal_name`, `created_at`, `updated_at`) VALUES
(6, 1, 'Understand common error handling methods', '2024-03-01 07:22:48', '2024-03-01 07:22:48'),
(5, 1, 'Create  a basic website', '2024-03-01 07:22:48', '2024-03-01 07:22:48'),
(4, 1, 'Learn how to use php from scratch', '2024-03-01 07:22:48', '2024-03-01 07:22:48'),
(16, 3, 'Become a business expert', '2024-03-18 09:28:05', '2024-03-18 09:28:05'),
(17, 4, 'none', '2025-01-26 09:24:55', '2025-01-26 09:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `course_lectures`
--

DROP TABLE IF EXISTS `course_lectures`;
CREATE TABLE IF NOT EXISTS `course_lectures` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `section_id` bigint UNSIGNED NOT NULL,
  `lecture_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_lectures`
--

INSERT INTO `course_lectures` (`id`, `course_id`, `section_id`, `lecture_title`, `video`, `url`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'The first lesson', NULL, 'https://player.vimeo.com/video/918659709?h=3709333ae5', 'this was a test sample', '2024-03-02 11:10:28', '2025-01-26 10:59:32'),
(5, 3, 4, 'Lecture 1', NULL, 'https://vimeo.com/918659709', 'In this lecture we are going to set up all the required components in order to run php in your local machine', '2024-03-19 05:46:05', '2025-01-26 10:25:45'),
(4, 1, 1, 'Intro to laravel', NULL, 'https://player.vimeo.com/video/918659709?h=3709333ae5', 'Why Laravel is important', '2024-03-02 11:34:49', '2025-01-26 10:59:50'),
(6, 3, 4, 'Lecture 2', NULL, 'https://vimeo.com/918659709', 'Creating database', '2024-03-19 05:46:43', '2025-01-26 10:26:01'),
(7, 3, 5, 'Lecture 3', NULL, 'https://vimeo.com/918659709', 'You are gion to learn how to create migration file. \r\nmigration files are used to insert sample data into the database', '2024-03-19 05:49:22', '2025-01-26 10:26:30'),
(8, 4, 6, 'Lecture 1', NULL, 'https://vimeo.com/918659709', 'This is a test content', '2025-01-26 09:57:58', '2025-01-26 09:57:58'),
(9, 3, 5, 'Lecture 4', NULL, 'https://vimeo.com/918659709', 'This is just a test', '2025-01-26 10:27:00', '2025-01-26 10:27:00'),
(10, 1, 7, 'Lecture 3', NULL, 'https://player.vimeo.com/video/918659709?h=3709333ae5', 'While existing LMS platforms provide a strong foundation for digital education, gaps remain in their ability to support flexible, student-centered learning models like CBC. Research has shown that there is a need for an LMS that can offer customized learning paths, seamless communication tools, and efficient user role management tailored to CBC. This project aims to bridge these gaps by developing an LMS using Laravel 10 that includes specific features for CBC, such as competency tracking, progress-based assessments, and user-friendly interfaces.\r\n\r\nThis review underscores the importance of aligning technological solutions with educational goals and highlights the unique opportunity for developing an LMS that can make a significant impact on how CBC is implemented in educational institutions.', '2025-01-26 10:40:29', '2025-01-26 11:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `course_sections`
--

DROP TABLE IF EXISTS `course_sections`;
CREATE TABLE IF NOT EXISTS `course_sections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `section_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sections`
--

INSERT INTO `course_sections` (`id`, `course_id`, `section_title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Section 1: Setting up Laravel environment', NULL, NULL),
(4, 3, 'setting up laravel environment', NULL, NULL),
(5, 3, 'Creating Migration files', NULL, NULL),
(6, 4, 'Introduction', NULL, NULL),
(7, 1, 'Getting started', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_09_141439_create_categories_table', 2),
(6, '2024_02_11_173538_create_sub_categories_table', 3),
(7, '2024_02_13_142300_create_course_goals_table', 4),
(8, '2024_02_13_144818_create_courses_table', 4),
(9, '2024_03_01_144616_create_course_sections_table', 5),
(10, '2024_03_01_144659_create_course_lectures_table', 5),
(11, '2024_04_08_053901_create_wishlists_table', 6),
(12, '2024_07_08_135143_create_coupons_table', 7),
(13, '2024_08_16_191345_create_payments_table', 8),
(14, '2024_08_16_191408_create_orders_table', 8),
(15, '2024_08_20_082439_create_smtp_settings_table', 9),
(16, '2025_01_27_101406_create_questions_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `instructor_id` int DEFAULT NULL,
  `course_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_delivery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `address`, `cash_delivery`, `total_amount`, `payment_type`, `invoice_no`, `order_date`, `order_month`, `order_year`, `status`, `created_at`, `updated_at`) VALUES
(53, 'User', 'user@gmail.com', '0712345678', 'Embu', NULL, '200', 'Direct Payment', 'EOS93826867', '03 February 2025', 'February', '2025', 'pending', '2025-02-03 06:39:25', '2025-02-03 06:39:25'),
(52, 'User', 'user@gmail.com', NULL, NULL, NULL, '50', 'Direct Payment', 'EOS73170572', '30 January 2025', 'January', '2025', 'pending', '2025-01-30 09:21:48', '2025-01-30 09:21:48'),
(51, 'User', 'user@gmail.com', NULL, NULL, NULL, '100', 'Direct Payment', 'EOS86002103', '30 January 2025', 'January', '2025', 'pending', '2025-01-30 09:18:47', '2025-01-30 09:18:47'),
(50, 'User', 'user@gmail.com', NULL, NULL, NULL, '50', 'Direct Payment', 'EOS34093256', '30 January 2025', 'January', '2025', 'pending', '2025-01-30 09:18:00', '2025-01-30 09:18:00'),
(47, 'User', 'user@gmail.com', NULL, NULL, NULL, '200', 'Direct Payment', 'EOS61837301', '28 January 2025', 'January', '2025', 'pending', '2025-01-28 07:07:41', '2025-01-28 07:07:41'),
(48, 'User', 'user@gmail.com', NULL, NULL, NULL, '50', 'Direct Payment', 'EOS47800729', '30 January 2025', 'January', '2025', 'pending', '2025-01-30 09:14:00', '2025-01-30 09:14:00'),
(49, 'User', 'user@gmail.com', NULL, NULL, NULL, '50', 'Direct Payment', 'EOS19901293', '30 January 2025', 'January', '2025', 'pending', '2025-01-30 09:15:23', '2025-01-30 09:15:23'),
(46, 'User', 'user@gmail.com', NULL, NULL, NULL, '50', 'Direct Payment', 'EOS60303795', '28 January 2025', 'January', '2025', 'pending', '2025-01-28 07:06:55', '2025-01-28 07:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `instructor_id` int DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `question` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `course_id`, `user_id`, `instructor_id`, `parent_id`, `subject`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 2, NULL, 'new', 'I want to learn', '2025-01-27 07:55:36', NULL),
(2, 1, 9, 2, NULL, 'Two', 'I want to check updated at', '2025-01-27 07:57:47', '2025-01-27 07:57:47'),
(3, 1, 9, 2, NULL, 'tst', 'checking toaster', '2025-01-27 08:01:26', '2025-01-27 08:01:26'),
(4, 1, 9, 2, NULL, 'Checking toaster', 'Toaster again', '2025-01-27 08:02:20', '2025-01-27 08:02:20'),
(5, 1, 9, 2, NULL, 'test', 'just a test', '2025-01-27 10:08:03', '2025-01-27 10:08:03'),
(6, 1, 9, 2, 4, NULL, 'Did it work?', '2025-01-27 11:14:36', NULL),
(7, 1, 9, 2, 5, NULL, 'What are you testing', '2025-01-27 11:38:29', NULL),
(8, 1, 9, 2, 2, NULL, 'What is two', '2025-01-27 11:39:56', NULL),
(9, 1, 9, 2, 2, NULL, 'I will be waiting to hear from you', '2025-01-27 11:40:36', NULL),
(10, 1, 9, 2, 2, NULL, 'I will be waiting to hear from you', '2025-01-27 11:40:36', NULL),
(11, 1, 9, 2, 2, NULL, NULL, '2025-01-27 11:40:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

DROP TABLE IF EXISTS `smtp_settings`;
CREATE TABLE IF NOT EXISTS `smtp_settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `mailer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `mailer`, `host`, `port`, `username`, `password`, `encryption`, `from_address`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'sandbox.smtp.mailtrap.io', '2525', 'cd1022370357e4', 'c5f9a1341d1f0f', 'tls', 'hello@gmail.com.com', NULL, '2024-08-23 02:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `subcategory_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 4, 'Web Development', 'web-development', NULL, NULL),
(2, 4, 'Web Development', 'web-development', NULL, NULL),
(3, 5, 'Finance', 'finance', NULL, NULL),
(4, 7, 'Graphic Design', 'graphic-design', NULL, NULL),
(5, 7, 'Web Design', 'web-design', NULL, NULL),
(6, 7, 'Design Tools', 'design-tools', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','instructor','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$HexXL3YS3pINYVNGtZnLrenydoWfJZHH344LcLXozUAMY2gBBl78u', '202402051531favicon.png', '132324', 'usa', 'admin', '1', NULL, '2014-03-03 15:59:45', '2024-02-05 12:31:05'),
(2, 'Instructor', 'instructor', 'instructor@gmail.com', NULL, '$2y$12$z7siLbQ.BWt.mNnFscX9G.7Hv2dAdS1OJIgcTMmDMGkYKODcWW/Ku', '202501220814avatar-2.png', NULL, NULL, 'instructor', '1', NULL, '2016-03-02 15:59:56', '2025-01-22 05:27:14'),
(9, 'User', 'Mwatheka', 'user@gmail.com', NULL, '$2y$12$DJrgYKZQCXFj.NhG3lbo8eeeBAOmJg.BIp1p6IFEkkl3gvBga8qWm', '202501272008avatar-21.png', '0712345678', 'Embu', 'user', '1', NULL, '2025-01-21 07:07:43', '2025-01-31 04:07:33'),
(5, 'Mwatheka', 'John', 'mwatheka@gmail.com', NULL, '$2y$12$CF7Laod14jUKVCVowxpVXObiEnOvHkrBHDdrmyuDx3GGo4dj5OUDC', NULL, '1234567', 'usa', 'instructor', '1', NULL, NULL, '2025-01-22 05:26:24'),
(6, 'john', 'mwatheka', 'qwerty@gmail.com', NULL, '$2y$12$BFdjX.bbNbJ5gJCeAZIRaenaWa4Pl1TzO40IuQlI2N63DYbuhpTu.', NULL, '123', 'usa', 'instructor', '1', NULL, NULL, '2024-09-09 08:45:59'),
(7, 'Mwatheeeka', NULL, 'mwatheeeka@gmail.com', '2018-03-14 15:57:51', '$2y$12$dZ7tGtwRyouVrKhw9TkUX.WmJCl8eOr0M85zXo4x0IoSnTdOA541O', NULL, NULL, NULL, 'user', '1', NULL, '2024-03-13 03:17:23', '2024-03-13 03:17:23'),
(8, 'Abraham Mwatheka', 'john', 'mwathekaj@gmail.com', NULL, '$2y$12$TcUAPzMMMuG2EOGI.O5Nm.YZAPO7/LVDHjC0kWthEvGmCvM2ivLc6', '202408230658avatar-1.png', '0757909044', '438', 'user', '1', NULL, '2024-08-20 04:12:41', '2024-08-23 03:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(4, 3, 1, '2024-05-20 09:55:51', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
