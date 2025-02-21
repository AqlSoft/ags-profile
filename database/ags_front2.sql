-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2025 at 07:15 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ags_front`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `profile_photo`, `is_super_admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Super Admin', 'super-super-admin@ags.com', 'super super admin', '$2y$12$JwjQo4ZiHBIbPY5YPfTHB./yXz9QCj55yqcdvrFE1./MJEoZ/nXZu', NULL, 1, 1, NULL, '2025-02-13 01:26:52', '2025-02-13 01:26:52'),
(2, 'Sub Admin', 'sub-admin@ags.com', 'sub admin', '$2y$12$JRn4Y9jieI6bUr1R.gkYbOJUwt7kVjhCZjUijTKXBERukNGMB2VYe', NULL, 1, 1, NULL, '2025-02-13 01:26:52', '2025-02-13 01:26:52'),
(3, 'Super Admin', 'super-admin@ags.com', 'super admin', '$2y$12$MhaNj/oDOoO4mVqYb4c.1u.6IeS4IYhFGWrze7ehQFnMuedpeEiMC', NULL, 1, 1, NULL, '2025-02-13 01:26:52', '2025-02-13 01:26:52'),
(4, 'Admin', 'admin@ags.com', 'admin', '$2y$12$44GWugb0AE8RWmdvqqmqk.IFV4AOcpc/m4PwSeSRaaUW1K4rG3scC', NULL, 1, 1, NULL, '2025-02-13 01:26:52', '2025-02-13 01:26:52'),
(5, 'Worker', 'worker@ags.com', 'worker', '$2y$12$ZR38GzAdyHvjPts7JLYlwe.SoYj9mllnXpGGDRaH09p8nAWoRZ0Ou', NULL, 0, 1, NULL, '2025-02-13 01:26:52', '2025-02-13 01:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('translations.en', 'a:0:{}', 1739451825),
('language.default', 'O:19:\"App\\Models\\Language\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"languages\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"ar\";s:4:\"name\";s:6:\"Arabic\";s:11:\"native_name\";s:14:\"العربية\";s:4:\"flag\";s:12:\"flags/sa.svg\";s:6:\"is_rtl\";i:1;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"ar\";s:4:\"name\";s:6:\"Arabic\";s:11:\"native_name\";s:14:\"العربية\";s:4:\"flag\";s:12:\"flags/sa.svg\";s:6:\"is_rtl\";i:1;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:2:{s:10:\"is_default\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"code\";i:1;s:4:\"name\";i:2;s:11:\"native_name\";i:3;s:9:\"direction\";i:4;s:10:\"is_default\";i:5;s:9:\"is_active\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}', 1739437501),
('languages.list', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:2:{i:0;O:19:\"App\\Models\\Language\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"languages\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"ar\";s:4:\"name\";s:6:\"Arabic\";s:11:\"native_name\";s:14:\"العربية\";s:4:\"flag\";s:12:\"flags/sa.svg\";s:6:\"is_rtl\";i:1;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"ar\";s:4:\"name\";s:6:\"Arabic\";s:11:\"native_name\";s:14:\"العربية\";s:4:\"flag\";s:12:\"flags/sa.svg\";s:6:\"is_rtl\";i:1;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:2:{s:10:\"is_default\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"code\";i:1;s:4:\"name\";i:2;s:11:\"native_name\";i:3;s:9:\"direction\";i:4;s:10:\"is_default\";i:5;s:9:\"is_active\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:19:\"App\\Models\\Language\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"languages\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:2;s:4:\"code\";s:2:\"en\";s:4:\"name\";s:7:\"English\";s:11:\"native_name\";s:7:\"English\";s:4:\"flag\";s:12:\"flags/us.svg\";s:6:\"is_rtl\";i:0;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:2;s:4:\"code\";s:2:\"en\";s:4:\"name\";s:7:\"English\";s:11:\"native_name\";s:7:\"English\";s:4:\"flag\";s:12:\"flags/us.svg\";s:6:\"is_rtl\";i:0;s:9:\"is_active\";i:1;s:10:\"is_default\";i:0;s:10:\"created_at\";s:19:\"2025-02-12 11:46:40\";s:10:\"updated_at\";s:19:\"2025-02-12 11:46:40\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:2:{s:10:\"is_default\";s:7:\"boolean\";s:9:\"is_active\";s:7:\"boolean\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:6:{i:0;s:4:\"code\";i:1;s:4:\"name\";i:2;s:11:\"native_name\";i:3;s:9:\"direction\";i:4;s:10:\"is_default\";i:5;s:9:\"is_active\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1739437501);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('new','read','replied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `read_at` timestamp NULL DEFAULT NULL,
  `replied_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `read_at`, `replied_at`, `created_at`, `updated_at`) VALUES
(1, 'Atef Aql', 'aqlsoftware@gmail.com', NULL, 'afgfds', 'ame: اسم المرسل\r\nemail: البريد الإلكتروني\r\nphone: رقم الهاتف (اختياري)\r\nsubject: موضوع الرسالة\r\nmessage: نص الرسالة\r\nstatus: حالة الرسالة (جديدة، مقروءة، تم الرد)\r\nread_at: تاريخ القراءة\r\nreplied_at: تاريخ الرد', 'new', NULL, NULL, '2025-02-18 04:09:35', '2025-02-18 04:09:35'),
(2, 'Atef Aql', 'atefakl80@gmail.com', NULL, 'afgfds', 'ame: اسم المرسل\r\nemail: البريد الإلكتروني\r\nphone: رقم الهاتف (اختياري)\r\nsubject: موضوع الرسالة\r\nmessage: نص الرسالة\r\nstatus: حالة الرسالة (جديدة، مقروءة، تم الرد)\r\nread_at: تاريخ القراءة\r\nreplied_at: تاريخ الرد', 'new', NULL, NULL, '2025-02-18 04:11:03', '2025-02-18 04:11:03'),
(3, 'Atef Aql', 'aqlsoftware@gmail.com', NULL, 'afgfds', 'ame: اسم المرسل\r\nemail: البريد الإلكتروني\r\nphone: رقم الهاتف (اختياري)\r\nsubject: موضوع الرسالة\r\nmessage: نص الرسالة\r\nstatus: حالة الرسالة (جديدة، مقروءة، تم الرد)\r\nread_at: تاريخ القراءة\r\nreplied_at: تاريخ الرد', 'new', NULL, NULL, '2025-02-18 04:21:08', '2025-02-18 04:21:08'),
(4, 'Atef Aql', 'atefakl80@gmail.com', NULL, 'afgfds', 'contactcontactcontactcontactcontactcontactcontactcontactcontactcontactcontactcontactcontactcontactcontact', 'new', NULL, NULL, '2025-02-18 04:23:07', '2025-02-18 04:23:07'),
(5, 'Atef Aql', 'aqlsoftware@gmail.com', NULL, '45564555', 'شركة مخازن أيمن الغماس للتخزين ، شركة متخصصة فى استيراد وتصدير وتجارة المواد الغذائية وتقديم الخدمات اللوجستية وخدمات الدعم والاستشارات الفنية فة مجال الغذاء', 'new', NULL, NULL, '2025-02-18 08:49:30', '2025-02-18 08:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_rtl` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_code_unique` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `code`, `name`, `native_name`, `flag`, `is_rtl`, `is_active`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'ar', 'Arabic', 'العربية', 'flags/sa.svg', 1, 1, 0, '2025-02-12 05:46:40', '2025-02-12 05:46:40'),
(2, 'en', 'English', 'English', 'flags/us.svg', 0, 1, 0, '2025-02-12 05:46:40', '2025-02-12 05:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_02_06_104600_create_translations_table', 1),
(5, '2024_02_06_105000_create_products_table', 1),
(6, '2024_02_11_000001_create_languages_table', 1),
(7, '2024_02_11_071110_create_services_table', 1),
(8, '2024_02_11_071111_create_messages_table', 1),
(9, '2025_02_06_083553_create_personal_access_tokens_table', 1),
(10, '2025_02_06_085308_create_newsletters_table', 1),
(11, '2025_02_11_062209_create_admins_table', 1),
(12, '2025_02_12_151921_create_partners_table', 1),
(13, '2025_02_18_070149_create_contact_messages_table', 2),
(14, '2025_02_18_072355_create_newsletter_subscribers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `verified_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletter_subscribers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `name`, `is_active`, `verified_at`, `verification_token`, `created_at`, `updated_at`) VALUES
(1, 'company@domain.com', NULL, 1, NULL, 'ci6rVJ964gXTi9PGFLhP7koFJSSwLf3i', '2025-02-18 04:27:15', '2025-02-18 04:27:15'),
(2, 'aqlsoftware@gmail.com', NULL, 1, NULL, 'OWCP35Ft8nYQznhE2tN1rZokLx7GhuJ2', '2025-02-18 04:43:19', '2025-02-18 04:43:19'),
(3, 'atefakl80@gmail.com', NULL, 1, NULL, 'PUesLbKexIRYZ5g7TN9V8oprp57Cxs69', '2025-02-18 04:51:34', '2025-02-18 04:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name_en`, `name_ar`, `position_en`, `position_ar`, `description_en`, `description_ar`, `image`, `email`, `website`, `phone`, `linkedin`, `twitter`, `is_active`, `order`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Ministry of Environment, water and Agriculture', 'وزارة البيئة والمياه والزراعة', NULL, NULL, 'Ministry of Environment, water and Agriculture', 'وزارة البيئة والمياه والزراعة', 'storage/partners/PSKiPOzkbPbFnrvsBFIK.png', NULL, NULL, NULL, NULL, NULL, 1, 1, 4, 2, '2025-02-13 07:20:14', '2025-02-18 03:59:27'),
(3, 'Buraydah Dates Festival', 'مهرجان بريدة للتمور', NULL, NULL, 'Buraydah Dates Festival', 'مهرجان بريدة للتمور', 'storage/partners/XYsEdbTFdASXz07E4xH6.webp', NULL, NULL, NULL, NULL, NULL, 1, 2, 4, 4, '2025-02-13 07:58:32', '2025-02-13 07:58:32'),
(4, 'ِAteequa Dates Season', 'موسم عتقية الرياض', NULL, NULL, 'Ateequa Dates Season', 'موسم عتقية الرياض', 'storage/partners/MceMuscFAOl3KfKQyBnc.jpg', NULL, NULL, NULL, NULL, NULL, 1, 3, 4, 4, '2025-02-13 08:18:12', '2025-02-13 08:18:12'),
(5, 'national center for palms & dates', 'المركز الوطنى للنخيل والتمور', NULL, NULL, 'national_center_for_palms_$_dates', 'المركز الوطنى للنخيل والتمور', 'storage/partners/GTfBeai9cHzATMyPfrMo.png', NULL, NULL, NULL, NULL, NULL, 1, 4, 4, 4, '2025-02-13 08:28:01', '2025-02-13 08:28:01'),
(6, 'Saudi Dates Mark', 'علامة التمور السعودية', NULL, NULL, 'Saudi Dates Mark', 'علامة التمور السعودية', 'storage/partners/XFs2CeuS6qe2o1nIEhWp.png', NULL, NULL, NULL, NULL, NULL, 1, 5, 4, 4, '2025-02-13 08:31:32', '2025-02-13 08:31:32'),
(7, 'Dates Festival Hael', 'مهرجان التمور منطقة حائل', NULL, NULL, 'Dates Festival Hael', 'مهرجان التمور منطقة حائل', 'storage/partners/GaBLHlA7DznZDs1VlDWG.jpg', NULL, NULL, NULL, NULL, NULL, 1, 6, 4, 4, '2025-02-13 08:35:23', '2025-02-13 08:35:23'),
(8, 'Aiuila Dates Festival', 'مهرجان العلا للتمور', NULL, NULL, 'Aiuila Dates Festival', 'مهرجان العلا للتمور', 'storage/partners/2aKj78jVfn3vHBkrfPNc.jpg', NULL, NULL, NULL, NULL, NULL, 1, 7, 4, 4, '2025-02-13 09:17:13', '2025-02-13 09:17:13'),
(9, 'Unaizah Intarnational Dates Festival', 'موسم عنيزة الدولي للتمور', NULL, NULL, 'Unaizah Intarnational Dates Festival', 'موسم عنيزة الدولي للتمور', 'storage/partners/s3bwm8U8hzvlsmIbRlLP.jpeg', NULL, NULL, NULL, NULL, NULL, 1, 8, 4, 4, '2025-02-13 09:21:54', '2025-02-13 09:21:54'),
(10, 'Tomorna Dates Seasons', 'مواسم تمورنا', NULL, NULL, 'Tomorna Dates Seasons', 'مواسم تمورنا', 'storage/partners/3H5Me2LMtMPxZzXGLlqL.jpeg', NULL, NULL, NULL, NULL, NULL, 1, 9, 4, 4, '2025-02-13 09:31:13', '2025-02-13 09:31:13'),
(11, 'Dates and palms Academy', 'أكاديمية النخيل والتمور', NULL, NULL, 'Dates and palms Academy', 'أكاديمية النخيل والتمور', 'storage/partners/WLk1kNOVEcFdO6HLFdx7.png', NULL, NULL, NULL, NULL, NULL, 1, 10, 4, 4, '2025-02-13 09:39:45', '2025-02-13 09:39:45'),
(12, 'Farmer E-Gate', 'بوابة مزارع الالكترونية', NULL, NULL, 'Farmer E-Gate', 'بوابة مزارع الالكترونية', 'storage/partners/DJSGHgiVP8OMM8c0xyAb.png', NULL, NULL, NULL, NULL, NULL, 1, 11, 4, 4, '2025-02-13 09:42:05', '2025-02-13 09:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` text COLLATE utf8mb4_unicode_ci,
  `e_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` json DEFAULT NULL,
  `meta_data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
CREATE TABLE IF NOT EXISTS `translations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` bigint UNSIGNED NOT NULL,
  `translation_key_id` bigint UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_language_id_translation_key_id_unique` (`language_id`,`translation_key_id`),
  KEY `translations_translation_key_id_foreign` (`translation_key_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation_groups`
--

DROP TABLE IF EXISTS `translation_groups`;
CREATE TABLE IF NOT EXISTS `translation_groups` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translation_groups_name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation_keys`
--

DROP TABLE IF EXISTS `translation_keys`;
CREATE TABLE IF NOT EXISTS `translation_keys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `group_id` bigint UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translation_keys_group_id_key_unique` (`group_id`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
