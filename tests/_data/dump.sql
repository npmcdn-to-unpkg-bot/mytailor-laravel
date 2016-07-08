-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 08:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytailor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_07_211417_create_pages_Table', 2),
('2016_05_14_123355_create_shots_table', 3),
('2016_05_27_102834_add_source_url_to_shots_table', 4),
('2016_05_31_124708_alter_pages_add_role', 5),
('2016_06_02_140739_create_tags_table', 6),
('2016_06_02_142033_create_shots_tags_table', 7),
('2016_06_07_011622_create_media_table', 8),
('2016_06_15_010640_alter_users_add_last_login', 9),
('2016_06_27_014314_create_tag_shot', 10),
('2016_06_27_121338_alter_users_table_add_name_last_columns', 11),
('2016_06_27_122749_create_roles_table', 11),
('2016_06_27_125210_create_role_user_table', 12),
('2016_06_27_130543_create_user_profile__table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mt_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_uri_unique` (`uri`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `uri`, `mt_group`, `content`, `created_at`, `updated_at`, `template`) VALUES
(1, 'shots.index', 'Shots', 'shots', '', 'Welcome to the shots page', NULL, NULL, 'shots'),
(2, 'brands.index', 'Brands', 'brands', '', 'You just reached brands', NULL, NULL, 'brands'),
(3, '', 'biness', 'biness', '', 'find your biness', NULL, NULL, NULL),
(4, 'home', 'Home', '/', '', '', NULL, NULL, 'home'),
(5, 'shots.latest', 'Shots', 'shots/{sort}', '', '', NULL, NULL, 'shots'),
(12, 'designers.index', 'designers', 'designers', '', 'you are with the designers', NULL, NULL, 'designers');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_index` (`user_id`),
  KEY `role_user_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shots`
--

CREATE TABLE IF NOT EXISTS `shots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `featured` smallint(1) NOT NULL DEFAULT '0',
  `published` smallint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `source_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_name` (`file_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=60 ;

--
-- Dumping data for table `shots`
--

INSERT INTO `shots` (`id`, `title`, `description`, `file_name`, `category`, `featured`, `published`, `views`, `created_at`, `updated_at`, `user_id`, `source_url`) VALUES
(1, 'ohh look at that legg', 'Featured', 'mt_23ab622e68b0f1baf45eea85c4b6068c.jpg', 'fm', 1, 1, 0, '2016-06-09 20:19:33', '2016-06-27 10:45:30', 1, ''),
(2, '', 'hahaa', 'mt_e47e0784a2c293374b8f7435fe8a0095.jpg', 'fm', 1, 1, 0, '2016-06-09 20:19:33', '2016-06-26 14:31:33', 1, ''),
(14, '', '', 'mt_b4a81620c16372eacaa5fd7e86f5bef0.jpg', 'fm', 1, 0, 0, '2016-06-09 20:19:35', '2016-06-26 14:31:18', 1, ''),
(16, '', '', 'mt_f2c25666964a0026a15bdbf418cef203.jpg', 'fm', 1, 1, 0, '2016-06-09 20:19:35', '2016-06-26 14:31:23', 1, ''),
(20, '', '', 'mt_8137e488d6377554913565ef8829ba15.jpg', 'fm', 1, 1, 0, '2016-06-14 23:25:17', '2016-06-26 14:31:12', 1, ''),
(22, '', '', 'mt_1f47f1b1c03be888483908070563b5a7.jpg', 'fm', 0, 0, 0, '2016-06-14 23:45:20', '2016-06-26 14:31:04', 1, ''),
(23, '', '', 'mt_b9043f23bae6a8347de8f1e23386bee2.jpg', 'ma', 1, 1, 0, '2016-06-14 23:46:39', '2016-06-26 14:31:00', 1, ''),
(24, '', '', 'mt_04bf74c38c95c22a7ca7061e0a65b15b.jpg', 'cu', 1, 0, 0, '2016-06-18 01:21:42', '2016-06-27 21:31:23', 1, ''),
(25, '', '', 'mt_e7034a4ae0f4c4ab8be940138df8e3da.jpg', 'fm', 1, 0, 0, '2016-06-18 01:23:55', '2016-06-26 14:30:44', 1, ''),
(27, '', '', 'mt_0ff3a4b8191335436d9832e5b5caa959.jpg', 'ki', 1, 0, 0, '2016-06-18 01:23:55', '2016-06-26 14:30:48', 1, ''),
(28, '', '', 'mt_4512f1a2f8f28479fc15d383ae86f403.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:15', 1, ''),
(29, '', '', 'mt_96aa58440b3df9412f0113db68736638.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:20', 1, ''),
(30, '', '', 'mt_83c017d3294aafe89e5300f300661238.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:29', 1, ''),
(31, '', '', 'mt_eca76e6ddda44ce3ba515a7c6d5670a5.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:35', 1, ''),
(32, '', '', 'mt_20f881497ae3b9ea7bf44c12f2050a2e.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:42', 1, ''),
(33, '', '', 'mt_98731bb196ef08bc15df3af7ab8e23c8.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:54', 1, ''),
(34, '', '', 'mt_99e88975fc707d3621f972e5d04ac962.jpg', 'fm', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:44:59', 1, ''),
(35, '', '', 'mt_d7d1f2d6e3b5ea95d50f2adc8a944549.jpg', 'ac', 0, 0, 0, '2016-06-27 13:54:23', '2016-06-27 21:45:12', 1, ''),
(36, '', '', 'mt_48673acf0556a6f2a19b9200449a70ea.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:02', '2016-06-27 21:43:31', 1, ''),
(37, '', '', 'mt_ffe3a9a631cde06ccdaecdc053e5859b.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:02', '2016-06-27 21:43:40', 1, ''),
(38, '', '', 'mt_591eea80f606106aea7857e9793a0e8a.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:02', '2016-06-27 21:43:50', 1, ''),
(40, '', '', 'mt_93c556f9f2f4ac33433054edf084e05b.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:02', '2016-06-27 21:44:00', 1, ''),
(41, '', '', 'mt_d7227a0c05c21576b0b9c4fd2be46e80.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:02', '2016-06-27 21:44:08', 1, ''),
(42, '', '', 'mt_a6f9ff3dc0e39f016965b70e67829ce4.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:03', '2016-06-27 21:42:08', 1, ''),
(43, '', '', 'mt_58dd0b71d671f645e3aa6b578c75e5ab.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:03', '2016-06-27 21:42:14', 1, ''),
(45, '', '', 'mt_313dc30dbe2cd86b80dc54f5e9d113e1.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:03', '2016-06-27 21:42:58', 1, ''),
(46, '', '', 'mt_7d4e08c8cf36ec5d17373f01dfb9bf75.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:03', '2016-06-27 21:43:24', 1, ''),
(47, '', '', 'mt_9b2ee3a0ffa82fca856966caac0f4cf3.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:39:42', 1, ''),
(48, '', '', 'mt_1e874469833b2c08cb907177cec963b9.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:39:48', 1, ''),
(49, '', '', 'mt_5c8df135e7c78699308b05f49429f594.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:39:52', 1, ''),
(50, '', '', 'mt_481f2199a61fefd95a3e7772d64482b6.jpg', 'cu', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:40:00', 1, ''),
(51, '', '', 'mt_382ae255576edbce2076c76171d4e927.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:49:04', 1, ''),
(52, '', '', 'mt_1ae08485d0f3efd1032711711467764a.jpg', '', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:39:04', 1, ''),
(53, '', '', 'mt_96eb3b1cadbc585e6c2daf4c48c8e4c4.jpg', '', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:39:04', 1, ''),
(55, '', '', 'mt_2275d7761f8b303144c061c3c87f2e8b.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:41:41', 1, ''),
(56, '', '', 'mt_0ccc34531868371481e83dce3a773590.jpg', 'fm', 0, 0, 0, '2016-06-27 21:39:04', '2016-06-27 21:41:58', 1, ''),
(57, '', '', 'mt_e2237df2e55364d07d4547d7e7d51217.jpg', 'ma', 0, 0, 0, '2016-06-27 21:39:05', '2016-06-27 21:39:28', 1, ''),
(58, '', '', 'mt_9165fffd261f8b2be96fb915a78b6e84.jpg', '', 0, 0, 0, '2016-06-30 10:26:01', '2016-06-30 10:26:01', 1, ''),
(59, '', '', 'mt_d8f41ff582c4f6499467853bd7568011.jpg', '', 0, 0, 0, '2016-06-30 10:26:01', '2016-06-30 10:26:01', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `shot_tag`
--

CREATE TABLE IF NOT EXISTS `shot_tag` (
  `shot_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `shot_tag_shot_id_index` (`shot_id`),
  KEY `shot_tag_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(1, 'boooty'),
(2, 'hot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `last_login_at`, `first_name`, `last_name`, `username`, `bio`, `website`, `location`, `role_id`) VALUES
(1, 'jobizzness@gmail.com', '$2y$10$/CmdKny1TpLvJNel6Ujqe.8Zpn8z5lN2gRNRpQ4hXZe9Fm8AN0rDK', 'X4fHyPFwBohmucZUbZb6G5hO66F8zHSvL4uKNnf2k3YSCYIesQ1Qxc3r8Hu9', NULL, '2016-06-15 00:13:32', NULL, 'matarr', 'jobe', 'Jobizzness Watumad', '', '', '', 0),
(2, 'miss_penda@yahoo.com', '$2y$10$SYVB7xzh.jceb9eRdp78B.FpOpgPpKoowK3Xeh5cw5eE4UiPDJQUG', NULL, NULL, NULL, NULL, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shot_tag`
--
ALTER TABLE `shot_tag`
  ADD CONSTRAINT `shot_tag_shot_id_foreign` FOREIGN KEY (`shot_id`) REFERENCES `shots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shot_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
