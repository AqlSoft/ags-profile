-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2025 at 01:19 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

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
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `order` tinyint DEFAULT NULL,
  `created_by` bigint UNSIGNED NOT NULL,
  `updated_by` bigint UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `partners_ibfk_1` (`created_by`),
  KEY `partners_ibfk_2` (`updated_by`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name_en`, `name_ar`, `position_en`, `position_ar`, `description_en`, `description_ar`, `image`, `email`, `phone`, `linkedin`, `website`, `is_active`, `order`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Ministry of Environment, water and Agriculture', 'وزارة البيئة والمياه والزراعة', NULL, NULL, 'Ministry of Environment, water and Agriculture', 'وزارة البيئة والمياه والزراعة', 'storage/partners/Sp8zNn3ep4mplcQcqxuE.png', NULL, NULL, NULL, NULL, 1, 1, 4, 4, '2025-02-13 10:20:14', '2025-02-13 10:20:14'),
(3, 'Buraydah Dates Festival', 'مهرجان بريدة للتمور', NULL, NULL, 'Buraydah Dates Festival', 'مهرجان بريدة للتمور', 'storage/partners/XYsEdbTFdASXz07E4xH6.webp', NULL, NULL, NULL, NULL, 1, 2, 4, 4, '2025-02-13 10:58:32', '2025-02-13 10:58:32'),
(4, 'ِAteequa Dates Season', 'موسم عتقية الرياض', NULL, NULL, 'Ateequa Dates Season', 'موسم عتقية الرياض', 'storage/partners/MceMuscFAOl3KfKQyBnc.jpg', NULL, NULL, NULL, NULL, 1, 3, 4, 4, '2025-02-13 11:18:12', '2025-02-13 11:18:12'),
(5, 'national center for palms & dates', 'المركز الوطنى للنخيل والتمور', NULL, NULL, 'national_center_for_palms_$_dates', 'المركز الوطنى للنخيل والتمور', 'storage/partners/GTfBeai9cHzATMyPfrMo.png', NULL, NULL, NULL, NULL, 1, 4, 4, 4, '2025-02-13 11:28:01', '2025-02-13 11:28:01'),
(6, 'Saudi Dates Mark', 'علامة التمور السعودية', NULL, NULL, 'Saudi Dates Mark', 'علامة التمور السعودية', 'storage/partners/XFs2CeuS6qe2o1nIEhWp.png', NULL, NULL, NULL, NULL, 1, 5, 4, 4, '2025-02-13 11:31:32', '2025-02-13 11:31:32'),
(7, 'Dates Festival Hael', 'مهرجان التمور منطقة حائل', NULL, NULL, 'Dates Festival Hael', 'مهرجان التمور منطقة حائل', 'storage/partners/GaBLHlA7DznZDs1VlDWG.jpg', NULL, NULL, NULL, NULL, 1, 6, 4, 4, '2025-02-13 11:35:23', '2025-02-13 11:35:23'),
(8, 'Aiuila Dates Festival', 'مهرجان العلا للتمور', NULL, NULL, 'Aiuila Dates Festival', 'مهرجان العلا للتمور', 'storage/partners/2aKj78jVfn3vHBkrfPNc.jpg', NULL, NULL, NULL, NULL, 1, 7, 4, 4, '2025-02-13 12:17:13', '2025-02-13 12:17:13'),
(9, 'Unaizah Intarnational Dates Festival', 'موسم عنيزة الدولي للتمور', NULL, NULL, 'Unaizah Intarnational Dates Festival', 'موسم عنيزة الدولي للتمور', 'storage/partners/s3bwm8U8hzvlsmIbRlLP.jpeg', NULL, NULL, NULL, NULL, 1, 8, 4, 4, '2025-02-13 12:21:54', '2025-02-13 12:21:54'),
(10, 'Tomorna Dates Seasons', 'مواسم تمورنا', NULL, NULL, 'Tomorna Dates Seasons', 'مواسم تمورنا', 'storage/partners/3H5Me2LMtMPxZzXGLlqL.jpeg', NULL, NULL, NULL, NULL, 1, 9, 4, 4, '2025-02-13 12:31:13', '2025-02-13 12:31:13'),
(11, 'Dates and palms Academy', 'أكاديمية النخيل والتمور', NULL, NULL, 'Dates and palms Academy', 'أكاديمية النخيل والتمور', 'storage/partners/WLk1kNOVEcFdO6HLFdx7.png', NULL, NULL, NULL, NULL, 1, 10, 4, 4, '2025-02-13 12:39:45', '2025-02-13 12:39:45'),
(12, 'Farmer E-Gate', 'بوابة مزارع الالكترونية', NULL, NULL, 'Farmer E-Gate', 'بوابة مزارع الالكترونية', 'storage/partners/DJSGHgiVP8OMM8c0xyAb.png', NULL, NULL, NULL, NULL, 1, 11, 4, 4, '2025-02-13 12:42:05', '2025-02-13 12:42:05');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `partners_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
