-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 07:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kind_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `office_kind` int(11) DEFAULT NULL,
  `rooms` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `space` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `building_floor_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `mortgage` int(11) DEFAULT NULL,
  `regions` int(11) DEFAULT NULL,
  `hashtags` int(11) DEFAULT NULL,
  `settlements` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `end_date` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `kind_id`, `type_id`, `city_id`, `office_kind`, `rooms`, `area`, `space`, `floor_no`, `building_floor_no`, `price`, `payment_method`, `mortgage`, `regions`, `hashtags`, `settlements`, `address`, `description`, `seen`, `images`, `status`, `end_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, 8, NULL, '5', '150', 'null', '5', '16', 95100, NULL, NULL, 1, 3, 1, 'address', 'description', 0, '1644746488-1_org_zoom.jpg\r\n,1644746488-10-number-png-free-commercial-use-image_6021d8d00dec1.png\r\n,1644746489-100_manat_obv.jpg\r\n,1644746489-200_Azerbaijani_manat_in_2018_Reverse.jpg', 1, '2022-03-15 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ads_users`
--

CREATE TABLE `ads_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads_users`
--

INSERT INTO `ads_users` (`id`, `name`, `surname`, `email`, `phone_number`, `avatar`, `username`, `user_type`, `password`, `status`) VALUES
(2, 'Ağakərim', 'Kərimov', 'aghakarim.karimov@gmail.com', '0998812999', 'avatar911.jpg', 'aghakarim.karimov', 1, '6d03726ad97d615c1f57a7bc285b21947bca5390d98bcf92768f5ea393a46cbd', 1),
(3, 'null', '', 'null', 'null', 'default.png', 'null', 0, 'e37251a10023b8e61f787db56d3aa8bb3ea3b9c8a6c61597db1ee128e9141269', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apis_settings`
--

CREATE TABLE `apis_settings` (
  `id` int(11) NOT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci NOT NULL,
  `google_site_verification` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_map` text COLLATE utf8_unicode_ci NOT NULL,
  `live_support` text COLLATE utf8_unicode_ci NOT NULL,
  `left_shortcut_icons` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apis_settings`
--

INSERT INTO `apis_settings` (`id`, `google_analytics`, `google_site_verification`, `contact_map`, `live_support`, `left_shortcut_icons`, `updated_at`) VALUES
(1, '&lt;script&gt;\r\n	  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n	  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');\r\n\r\n	  ga(\'create\', \'UA-54503473-1\', \'auto\');\r\n	  ga(\'send\', \'pageview\');\r\n&lt;/script&gt;', '&lt;meta name=&quot;google-site-verification&quot; content=&quot;77AqeY3dAjxcbc8sDqaDE7lhn0D2e9Babqrzn6I6Bsk&quot; /&gt;\r\n\r\n', '&lt;iframe width=&quot;100%&quot; height=&quot;390&quot;  frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; src=&quot;https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=Samsun,+T%C3%BCrkiye&amp;aq=0&amp;oq=samsun&amp;sll=37.0625,-95.677068&amp;sspn=42.901912,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Samsun,+T%C3%BCrkiye&amp;t=m&amp;z=12&amp;ll=41.292782,36.33128&amp;output=embed&quot;&gt;&lt;/iframe&gt;', '&lt;html&gt;malas&lt;/html&gt;', '&lt;div class=&quot;telefon&quot;&gt;\r\n	&lt;a href=&quot;tel:900000000000&quot; title=&quot;Telefon&quot; alt=&quot;Telefon&quot;&gt;&lt;i class=&quot;fa fa-phone&quot;&gt;&lt;/i&gt;&lt;/a&gt;\r\n	&lt;span class=&quot;tooltiptext&quot;&gt;Telefon&lt;/span&gt;\r\n&lt;/div&gt;', '2022-02-06 08:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `background_images`
--

CREATE TABLE `background_images` (
  `id` int(11) NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `background_images`
--

INSERT INTO `background_images` (`id`, `page`, `photo`) VALUES
(1, 'login', 'login473.jpg'),
(2, 'contact', 'contact936.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `status`, `seo_link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ağcabədi', 1, 'agcabedi', NULL, '2022-01-27 14:47:06', '2022-02-06 09:47:46'),
(2, 'Ağdam', 1, 'agdam', NULL, '2022-01-27 14:47:07', '2022-01-27 14:47:07'),
(3, 'Ağdaş', 1, 'agdas', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:11'),
(4, 'Ağdərə', 1, 'agdere', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:27'),
(5, 'Ağstafa', 1, 'agstafa', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:46'),
(6, 'Ağsu', 1, 'agsu', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:50'),
(7, 'Astara', 1, 'astara', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:53'),
(8, 'Bakı', 1, 'baki', NULL, '2022-01-27 14:47:07', '2022-02-02 02:28:56'),
(9, 'Balakən', 1, 'balaken', NULL, '2022-01-27 14:47:08', '2022-02-02 02:28:57'),
(10, 'Beyləqan', 1, 'beyleqan', NULL, '2022-01-27 14:47:08', '2022-02-02 02:28:59'),
(11, 'Bərdə', 1, 'berde', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:23'),
(12, 'Biləsuvar', 1, 'bilesuvar', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:25'),
(13, 'Cəbrayıl', 1, 'cebrayil', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:27'),
(14, 'Cəlilabad', 1, 'celilabad', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:30'),
(15, 'Daşkəsən', 1, 'daskesen', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:32'),
(16, 'Füzuli', 1, 'fuzuli', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:34'),
(17, 'Gədəbəy', 1, 'gedebey', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:37'),
(18, 'Gəncə', 1, 'gence', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:39'),
(19, 'Goranboy', 1, 'goranboy', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:41'),
(20, 'Göyçay', 1, 'goycay', NULL, '2022-01-27 14:47:08', '2022-02-02 02:29:44'),
(21, 'Göygöl', 1, 'goygol', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:42'),
(22, 'Göytəpə', 1, 'goytepe', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:34'),
(23, 'Hacıqabul', 1, 'haciqabul', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:33'),
(24, 'Xaçmaz', 1, 'xacmaz', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:31'),
(25, 'Xankəndi', 1, 'xankendi', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:30'),
(26, 'Xırdalan', 1, 'xirdalan', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:29'),
(27, 'Xızı', 1, 'xizi', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:27'),
(28, 'Xocalı', 1, 'xocali', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:26'),
(29, 'Xocavənd', 1, 'xocavend', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:16'),
(30, 'Xudat', 1, 'xudat', NULL, '2022-01-27 14:47:08', '2022-02-02 02:30:14'),
(31, 'İmişli', 1, '', NULL, '2022-01-27 14:47:08', '2022-01-27 14:47:08'),
(32, 'İsmayıllı', 1, '', NULL, '2022-01-27 14:47:08', '2022-01-27 14:47:08'),
(33, 'Kəlbəcər', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(34, 'Kürdəmir', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(35, 'Qax', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(36, 'Qazax', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(37, 'Qəbələ', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(38, 'Quba', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(39, 'Qubadlı', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(40, 'Qusar', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(41, 'Laçın', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(42, 'Lerik', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(43, 'Lənkəran', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(44, 'Masallı', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(45, 'Mingəçevir', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(46, 'Naftalan', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(47, 'Naxçıvan', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(48, 'Neftçala', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(49, 'Oğuz', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(50, 'Saatlı', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(51, 'Sabirabad', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(52, 'Salyan', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(53, 'Samux', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(54, 'Siyəzən', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(55, 'Sumqayıt', 1, '', NULL, '2022-01-27 14:47:09', '2022-01-27 14:47:09'),
(56, 'Şabran', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(57, 'Şamaxı', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(58, 'Şəki', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(59, 'Şəmkir', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(60, 'Şirvan', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(61, 'Şuşa', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(62, 'Tərtər', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(63, 'Tovuz', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(64, 'Ucar', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(65, 'Yardımlı', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(66, 'Yevlax', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(67, 'Zaqatala', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(68, 'Zəngilan', 1, '', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(70, 'Zərdab', 1, 'zerdab', NULL, '2022-01-29 04:28:20', '2022-01-29 01:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_settings`
--

CREATE TABLE `contact_settings` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_settings`
--

INSERT INTO `contact_settings` (`id`, `address`, `phone`, `mobile_phone`, `fax`, `email`, `updated_at`) VALUES
(1, 'Adress sətri 2', '012-456-12-34', '(+994)552000002', 'Fax adresi', 'info@blablabla.bla', '2022-01-27 07:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(11) NOT NULL,
  `floor_number` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floor_number`, `status`, `updated_at`) VALUES
(1, '1', 1, '0000-00-00 00:00:00'),
(2, '2', 1, '0000-00-00 00:00:00'),
(3, '3', 1, '0000-00-00 00:00:00'),
(4, '4', 1, '0000-00-00 00:00:00'),
(5, '5', 1, '0000-00-00 00:00:00'),
(6, '6', 1, '0000-00-00 00:00:00'),
(7, '7', 1, '0000-00-00 00:00:00'),
(8, '8', 1, '0000-00-00 00:00:00'),
(9, '9', 1, '0000-00-00 00:00:00'),
(10, '10', 1, '0000-00-00 00:00:00'),
(11, '11', 1, '0000-00-00 00:00:00'),
(12, '12', 1, '0000-00-00 00:00:00'),
(13, '13', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `floor_numbers`
--

CREATE TABLE `floor_numbers` (
  `id` int(11) NOT NULL,
  `located_floor_number` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `floor_numbers`
--

INSERT INTO `floor_numbers` (`id`, `located_floor_number`, `status`, `updated_at`) VALUES
(1, '1', 1, '0000-00-00 00:00:00'),
(2, '2', 1, '0000-00-00 00:00:00'),
(3, '3', 1, '0000-00-00 00:00:00'),
(4, '4', 1, '0000-00-00 00:00:00'),
(5, '5', 1, '0000-00-00 00:00:00'),
(6, '6', 1, '0000-00-00 00:00:00'),
(7, '7', 1, '0000-00-00 00:00:00'),
(8, '8', 1, '0000-00-00 00:00:00'),
(9, '9', 1, '0000-00-00 00:00:00'),
(10, '10', 1, '0000-00-00 00:00:00'),
(11, '11', 1, '0000-00-00 00:00:00'),
(12, '12', 1, '0000-00-00 00:00:00'),
(13, '13', 1, '0000-00-00 00:00:00'),
(14, '14', 1, '0000-00-00 00:00:00'),
(15, '15', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `watermark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dash_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_type` int(11) NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dashboard_footer_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frontend_footer_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `translation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `logo`, `mail_logo`, `favicon`, `watermark`, `color_1`, `color_2`, `color_3`, `color_4`, `site_url`, `dash_url`, `site_title`, `slider_type`, `seo_keywords`, `seo_description`, `dashboard_footer_text`, `frontend_footer_text`, `timezone`, `translation`, `date_format`, `currency_symbol`, `updated_at`) VALUES
(1, 'logo354.png', 'mail_logo810.png', 'favicon421.png', 'signature496.png', '#000000', '#f99b65', '#c15b30', '#6070f9', 'http://127.0.0.1:8080/estate2/', 'auth_dash', 'Frame', 1, 'keywords,metin,kerim', 'description', 'Copyright © 2021. Hazırladı Ağakərim Kərimov', 'Copyright © 2021. Bütün hüquqlar qorunur. Kopyalama, çoxaltma və yayma halında qanuni hüquqlarımız həyata keçiriləcəkdir.', 'Asia/Baku', 'azerbaijan', 'd.m.Y', '₼', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hashtags`
--

CREATE TABLE `hashtags` (
  `id` int(11) UNSIGNED NOT NULL,
  `region_id` int(11) UNSIGNED NOT NULL,
  `hashtag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hashtags`
--

INSERT INTO `hashtags` (`id`, `region_id`, `hashtag_name`, `seo_link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 'fsdfsdfsdfsdf1995', 'fsdfsdfsdfsdf1995', 1, NULL, '2022-02-01 17:31:18', '2022-02-02 02:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `word` text COLLATE utf8_unicode_ci NOT NULL,
  `english` text COLLATE utf8_unicode_ci NOT NULL,
  `azerbaijan` text COLLATE utf8_unicode_ci NOT NULL,
  `turkish` text COLLATE utf8_unicode_ci NOT NULL,
  `russian` text COLLATE utf8_unicode_ci NOT NULL,
  `french` text COLLATE utf8_unicode_ci NOT NULL,
  `germany` text COLLATE utf8_unicode_ci NOT NULL,
  `italy` text COLLATE utf8_unicode_ci NOT NULL,
  `saudia_arabian` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `word`, `english`, `azerbaijan`, `turkish`, `russian`, `french`, `germany`, `italy`, `saudia_arabian`) VALUES
(1, 'dashboard', 'Dashboard', 'İstifadəçi paneli', 'Yönetim paneli', '', '', '', '', ''),
(2, 'username', 'Username', 'İstifadəçi adı', 'Kullanıcı adı', '', '', '', '', ''),
(3, 'password', 'Password', 'Şifrə', 'Şifre', '', '', '', '', ''),
(4, 'remember_me', 'Remember me', 'Məni xatırla', 'Beni hatırla', '', '', '', '', ''),
(5, 'forgot_password', 'Forgot password', 'Şifrəmi unutdum', 'Şifremi unutdum', '', '', '', '', ''),
(6, 'login', 'Login', 'Giriş et', 'Giriş yap', '', '', '', '', ''),
(7, 'dont_forget_to_close_me', 'Dont forget to close me', 'Məni bağlamağı unutma', 'Beni kapatmayı unutma', '', '', '', '', ''),
(8, 'system_language', 'System language', 'Sistem dili', 'Sistem dili', '', '', '', '', ''),
(9, 'show_site', 'Show site', 'Saytı göstər', 'Siteyi göster', '', '', '', '', ''),
(10, 'show_profile', 'Show profile', 'Profili göstər', 'Profili göster', '', '', '', '', ''),
(11, 'settings', 'Settings', 'Tənzimləmələr', 'Ayarlar', '', '', '', '', ''),
(12, 'logout', 'Logout', 'Çıxış et', 'Çıkış yap', '', '', '', '', ''),
(13, 'menu', 'Menu', 'Menu', 'Menü', '', '', '', '', ''),
(14, 'home', 'Home', 'Ana Səhifə', 'Ana sayfa', '', '', '', '', ''),
(15, 'site_configuration', 'Site configuration', 'Sayt tənzimləmələri', 'Site ayarları', '', '', '', '', ''),
(16, 'global_settings', 'Global settings', 'Ümumi tənzimləmələr', 'Genel ayarlar', '', '', '', '', ''),
(17, 'social_network_settings', 'Social network settings', 'Sosial şəbəkə tənzimləmələri', 'Sosyal ağ ayarları', '', '', '', '', ''),
(18, 'contact_settings', 'Contact settings', 'Əlaqə tənzimləmələri', 'İletişim ayarları', '', '', '', '', ''),
(19, 'smtp_mail_settings', 'Smtp mail settings', 'SMTP mail tənzimləmələri', 'SMTP mail ayarları', '', '', '', '', ''),
(20, 'site_maintenance_mode', 'Site maintenance mode', 'Sayt təmir modu', 'Site bakım modu', '', '', '', '', ''),
(21, 'api_settings', 'Api settings', 'API tənzimləmələri', 'API ayarları', '', '', '', '', ''),
(22, 'background_images', 'Background images', 'Arxa fon şəkilləri', 'Arka fon resimleri', '', '', '', '', ''),
(23, 'theme_settings', 'Theme settings', 'Dizayn tənzimləmələri', 'Tema ayarları', '', '', '', '', ''),
(24, 'modules_settings', 'Modules settings', 'Modul tənzimləmələri', 'Modül ayarları', '', '', '', '', ''),
(25, 'sort_of_home_modules', 'Sort of home modules', '', '', '', '', '', '', ''),
(26, 'modal_message', 'Modal message', 'Modal mesaj', 'Modal mesaj', '', '', '', '', ''),
(27, 'language_configuration', 'Language configuration', 'Dil tənzimləmələri', 'Dil ayarları', '', '', '', '', ''),
(28, 'language_list', 'Language list', 'Dil siyahısı', 'Dil listesi', '', '', '', '', ''),
(29, 'password_blacklist', 'Password blacklist', 'Şifrələrin qara siyahısı', 'Şifrelerin kara listesi', '', '', '', '', ''),
(30, 'system_logs', 'System logs', 'Sistem loqları', 'Sistem geçmişi', '', '', '', '', ''),
(31, 'menu_management', 'Menu management', 'Menu idarəetməsi', '', '', '', '', '', ''),
(32, 'menu_list', 'Menu list', 'Menu siyahısı', '', '', '', '', '', ''),
(33, 'content_management', 'Content management', '', '', '', '', '', '', ''),
(34, 'ads_credentials', 'Ads credentials', 'Elan kriteriyaları', 'İlan bilgileri', '', '', '', '', ''),
(35, 'cities', 'Cities', 'Şəhərlər', 'Şehirler', '', '', '', '', ''),
(36, 'regions', 'Regions', 'Rayonlar', 'Bölgeler', '', '', '', '', ''),
(37, 'settlements', 'Settlements', 'Qəsəbələr', 'Yerleşmeler', '', '', '', '', ''),
(38, 'metro_stations', 'Metro stations', 'Metro stansiyaları', 'Metro istasyonları', '', '', '', '', ''),
(39, 'hashtags', 'Hashtags', 'Nişangahlar', 'Heşteqler', '', '', '', '', ''),
(40, 'ads_type', 'Ads type', 'Elan növü', 'İlan türü', '', '', '', '', ''),
(41, 'realty_kind', 'Realty kind', 'Elan növü', 'Emlak tipi', '', '', '', '', ''),
(42, 'advertisements', 'Advertisements', 'Elanlar', 'İlanlar', '', '', '', '', ''),
(43, 'add_advertisements', 'Add advertisements', 'Elan əlavə et', 'İlan ekle', '', '', '', '', ''),
(44, 'all_advertisements', 'All advertisements', 'Bütün elanlar', 'Tüm ilanlar', '', '', '', '', ''),
(45, 'blog_list', 'Blog list', '', '', '', '', '', '', ''),
(46, 'slider_management', 'Slider management', '', '', '', '', '', '', ''),
(47, 'add_new_slide', 'Add new slide', '', '', '', '', '', '', ''),
(48, 'slide_list', 'Slide list', '', '', '', '', '', '', ''),
(49, 'add_new_video_slide', 'Add new video slide', '', '', '', '', '', '', ''),
(50, 'video_slide_list', 'Video slide list', '', '', '', '', '', '', ''),
(51, 'photo_gallery', 'Photo gallery', '', '', '', '', '', '', ''),
(52, 'create_new_album', 'Create new album', '', '', '', '', '', '', ''),
(53, 'albums_list', 'Albums list', '', '', '', '', '', '', ''),
(54, 'video_gallery', 'Video gallery', '', '', '', '', '', '', ''),
(55, 'add_new_video', 'Add new video', '', '', '', '', '', '', ''),
(56, 'videos_list', 'Videos list', '', '', '', '', '', '', ''),
(57, 'staff', 'Staff', '', '', '', '', '', '', ''),
(58, 'add_new_staff', 'Add new staff', '', '', '', '', '', '', ''),
(59, 'staff_list', 'Staff list', '', '', '', '', '', '', ''),
(60, 'services', 'Services', '', '', '', '', '', '', ''),
(61, 'add_new_service', 'Add new service', '', '', '', '', '', '', ''),
(62, 'services_list', 'Services list', '', '', '', '', '', '', ''),
(63, 'page_management', 'Page management', '', '', '', '', '', '', ''),
(64, 'add_new_page', 'Add new page', '', '', '', '', '', '', ''),
(65, 'page_list', 'Page list', '', '', '', '', '', '', ''),
(66, 'another', 'Another', 'Digər', 'Diger', '', '', '', '', ''),
(67, 'visitor', 'Visitor', 'Ziyarətçilər', 'Ziyaretçiler', '', '', '', '', ''),
(68, 'statistics', 'Statistics', '', '', '', '', '', '', ''),
(69, 'your_device', 'Your device', 'Cihazınız', 'Cihazınız', '', '', '', '', ''),
(70, 'your_ip', 'Your ip', 'Sizin IP adresi', '', '', '', '', '', ''),
(71, 'last_visited_page', 'Last visited page', 'Son ziyarət edilən səhifə', '', '', '', '', '', ''),
(72, 'helpful_explanations_about_administrative_panel', 'Helpful explanations about administrative panel', 'İdarə paneli haqqında köməkçi izahatlar', '', '', '', '', '', ''),
(73, 'dont_use_easy_passwords_like', 'Dont use easy passwords like', 'Bu kimi asan şifrələr istifadə etməyin', '', '', '', '', '', ''),
(74, 'database', 'Database', 'Verilənlər bazası', '', '', '', '', '', ''),
(75, 'optimized', 'Optimized', 'Optimallaşdırılıb', '', '', '', '', '', ''),
(76, 'table', 'Table', 'cədvəl', '', '', '', '', '', ''),
(77, 'today', 'Today', 'Bu gün', '', '', '', '', '', ''),
(78, 'site_show', 'Site show', 'Saytı göstər', '', '', '', '', '', ''),
(79, 'yesterday', 'Yesterday', 'Dünən', '', '', '', '', '', ''),
(80, 'sum', 'Sum', 'Cəmi', '', '', '', '', '', ''),
(81, 'all_ads_count', 'All ads count', 'Elanların sayı', '', '', '', '', '', ''),
(82, 'all_waiting_ads_count', 'All waiting ads count', 'Gözləmədəki elanlar', '', '', '', '', '', ''),
(83, 'all_agent_count', 'All agent count', 'Vasitəçilərin sayı', '', '', '', '', '', ''),
(84, 'today_new_ads', 'Today new ads', 'Bu gün yeni elanlar', '', '', '', '', '', ''),
(85, 'Copyright © 2021. Hazırladı Ağakərim Kərimov', 'Copyright © 2021. Hazırladı Ağakərim Kərimov', '', '', '', '', '', '', ''),
(86, 'apply_to_selected', 'Apply to selected', 'Seçilənlərə tətbiq et', '', '', '', '', '', ''),
(87, 'activate_selected', 'Activate selected', 'Seçilənləri aktiv et', '', '', '', '', '', ''),
(88, 'deactivate_selected', 'Deactivate selected', 'Seçilənləri deaktiv et', '', '', '', '', '', ''),
(89, 'language_name', 'Language name', 'Dil adı', '', '', '', '', '', ''),
(90, 'flag', 'Flag', 'Bayraq', '', '', '', '', '', ''),
(91, 'status', 'Status', 'Status', '', '', '', '', '', ''),
(92, 'operation', 'Operation', 'Əməliyyat', '', '', '', '', '', ''),
(93, 'there_is_no_information_in_the_table', 'There is no information in the table', 'Cədvəldə heçbir məlumat tapılmadı', '', '', '', '', '', ''),
(94, 'there_is_no_result', 'There is no result', 'Nəticə yoxdur', '', '', '', '', '', ''),
(95, 'loading', 'Loading', 'Yüklənir', '', '', '', '', '', ''),
(96, 'the_request_sending', 'The request sending', 'Sorğu göndərilir', '', '', '', '', '', ''),
(97, 'search', 'Search', 'Axtarış', '', '', '', '', '', ''),
(98, 'first', 'First', 'Birinci', '', '', '', '', '', ''),
(99, 'last', 'Last', 'Sonuncu', '', '', '', '', '', ''),
(100, 'next', 'Next', 'Növbəti', '', '', '', '', '', ''),
(101, 'previous', 'Previous', 'Əvvəlki', '', '', '', '', '', ''),
(102, 'language_edit', 'Language edit', 'Dil dəyişikliyi', '', '', '', '', '', ''),
(103, 'azerbaijan', 'Azerbaijan', 'Azərbaycan', '', '', '', '', '', ''),
(104, 'edit_the_words', 'Edit the words', 'Sözlərə düzəliş et', '', '', '', '', '', ''),
(105, 'key', 'Key', 'Açar', '', '', '', '', '', ''),
(106, 'explanation', 'Explanation', 'İzahat', '', '', '', '', '', ''),
(107, 'please_wait', 'Please wait', 'Zəhmət olmasa gözləyin', '', '', '', '', '', ''),
(108, 'add_new_type', 'Add new type', 'Yeni növ əlavə et', '', '', '', '', '', ''),
(109, 'select_all', 'Select all', 'Hamısını seç', '', '', '', '', '', ''),
(110, 'name', 'Name', 'Ad', '', '', '', '', '', ''),
(111, 'created_at', 'Created at', 'Yaradılma tarixi', '', '', '', '', '', ''),
(112, 'updated_at', 'Updated at', 'Yenilənmə tarixi', '', '', '', '', '', ''),
(113, 'edit', 'Edit', 'Düzəliş et', '', '', '', '', '', ''),
(114, 'active', 'Active', 'Aktiv', '', '', '', '', '', ''),
(115, 'delete', 'Delete', 'Sil', '', '', '', '', '', ''),
(116, 'ads_type_list', 'Ads type list', 'Elan növü siyahısı', '', '', '', '', '', ''),
(117, 'cities_list', 'Cities list', 'Şəhərlərin siyahısı', '', '', '', '', '', ''),
(118, 'add_new_city', 'Add new city', 'Yeni şəhər əlavə et', '', '', '', '', '', ''),
(119, 'city_name', 'City name', 'Şəhər adı', '', '', '', '', '', ''),
(120, 'regions_list', 'Regions list', 'Rayonların siyahısı', '', '', '', '', '', ''),
(121, 'add_new_region', 'Add new region', 'Yeni rayon əlavə et', '', '', '', '', '', ''),
(122, 'region_name', 'Region name', 'Rayon adı', '', '', '', '', '', ''),
(123, 'city', 'City', 'Şəhər', '', '', '', '', '', ''),
(124, 'settlements_list', 'Settlements list', 'Qəsəbələrin siyahısı', '', '', '', '', '', ''),
(125, 'add_new_settlement', 'Add new settlement', 'Yeni qəsəbə əlavə et', '', '', '', '', '', ''),
(126, 'add_new_metro_station', 'Add new metro station', 'Yeni metro əlavə et', '', '', '', '', '', ''),
(127, 'metro_name', 'Metro name', 'Metro adı', '', '', '', '', '', ''),
(128, 'settlement_name', 'Settlement name', 'Qəsəbə adı', '', '', '', '', '', ''),
(129, 'hashtags_list', 'Hashtags list', '', '', '', '', '', '', ''),
(130, 'add_new_hashtag', 'Add new hashtag', 'Yeni heştəq əlavə et', '', '', '', '', '', ''),
(131, 'hashtag_name', 'Hashtag name', 'Nişangah adı', '', '', '', '', '', ''),
(132, 'region', 'Region', 'Rayon', '', '', '', '', '', ''),
(133, 'add', 'Add', 'Əlavə et', '', '', '', '', '', ''),
(134, 'all', 'All', '', '', '', '', '', '', ''),
(135, 'deactive', 'Deactive', '', '', '', '', '', '', ''),
(136, 'edit_ads_type', 'Edit ads type', '', '', '', '', '', '', ''),
(137, 'kind_name', 'Kind name', '', '', '', '', '', '', ''),
(138, 'do_not_write_a_capital_letter_in_the_name_of_the_blog_headings_longer_than_70_characters_will_not_be_displayed_or_evaluated_in_google_index_for_this_reason_do_not_use_long_headers_do_not_use_double_and_single_quote_in_the_headers', 'Do not write a capital letter in the name of the blog headings longer than 70 characters will not be displayed or evaluated in google index for this reason do not use long headers do not use double and single quote in the headers', '', '', '', '', '', '', ''),
(139, 'update', 'Update', '', '', '', '', '', '', ''),
(140, 'success', 'Success', '', '', '', '', '', '', ''),
(141, 'successfully_inserted', 'Successfully inserted', '', '', '', '', '', '', ''),
(142, 'upload_logo', 'Upload logo', '', '', '', '', '', '', ''),
(143, 'logo', 'Logo', '', '', '', '', '', '', ''),
(144, 'select_photo_file', 'Select photo file', '', '', '', '', '', '', ''),
(145, 'select_file', 'Select file', '', '', '', '', '', '', ''),
(146, 'logo_for_mail', 'Logo for mail', '', '', '', '', '', '', ''),
(147, 'upload_favicon', 'Upload favicon', '', '', '', '', '', '', ''),
(148, 'favicon', 'Favicon', '', '', '', '', '', '', ''),
(149, 'watermark', 'Watermark', '', '', '', '', '', '', ''),
(150, 'upload_signature', 'Upload signature', '', '', '', '', '', '', ''),
(151, 'color', 'Color', '', '', '', '', '', '', ''),
(152, 'main_color', 'Main color', '', '', '', '', '', '', ''),
(153, 'site_url', 'Site url', '', '', '', '', '', '', ''),
(154, 'site_title', 'Site title', '', '', '', '', '', '', ''),
(155, 'timezone', 'Timezone', '', '', '', '', '', '', ''),
(156, 'date_format', 'Date format', '', '', '', '', '', '', ''),
(157, 'currency_symbol', 'Currency symbol', '', '', '', '', '', '', ''),
(158, 'text_for_copyright', 'Text for copyright', '', '', '', '', '', '', ''),
(159, 'dashboard_copyright_text', 'Dashboard copyright text', '', '', '', '', '', '', ''),
(160, 'light_theme', 'Light theme', '', '', '', '', '', '', ''),
(161, 'dark_theme', 'Dark theme', '', '', '', '', '', '', ''),
(162, 'facebook', 'Facebook', '', '', '', '', '', '', ''),
(163, 'instagram', 'Instagram', '', '', '', '', '', '', ''),
(164, 'linkedin', 'Linkedin', '', '', '', '', '', '', ''),
(165, 'youtube', 'Youtube', '', '', '', '', '', '', ''),
(166, 'twitter', 'Twitter', '', '', '', '', '', '', ''),
(167, 'address', 'Address', '', '', '', '', '', '', ''),
(168, 'phone', 'Phone', '', '', '', '', '', '', ''),
(169, 'mobile_phone', 'Mobile phone', '', '', '', '', '', '', ''),
(170, 'fax', 'Fax', '', '', '', '', '', '', ''),
(171, 'email', 'Email', '', '', '', '', '', '', ''),
(172, 'smtp_config', 'Smtp config', '', '', '', '', '', '', ''),
(173, 'certificate', 'Certificate', '', '', '', '', '', '', ''),
(174, 'message_from_e-mail_address', 'Message from e-mail address', '', '', '', '', '', '', ''),
(175, 'site_opening_date', 'Site opening date', '', '', '', '', '', '', ''),
(176, 'site_opening_time', 'Site opening time', '', '', '', '', '', '', ''),
(177, 'title', 'Title', '', '', '', '', '', '', ''),
(178, 'content', 'Content', '', '', '', '', '', '', ''),
(179, 'left_side_shortcuts_code', 'Left side shortcuts code', '', '', '', '', '', '', ''),
(180, 'google_analytics_code', 'Google analytics code', '', '', '', '', '', '', ''),
(181, 'google_site_verification_code', 'Google site verification code', '', '', '', '', '', '', ''),
(182, 'google_map_code', 'Google map code', '', '', '', '', '', '', ''),
(183, 'live_support_code', 'Live support code', '', '', '', '', '', '', ''),
(184, 'successfully_updated', 'Successfully updated', '', '', '', '', '', '', ''),
(185, 'estate_az', 'Estate az', '', '', '', '', '', '', ''),
(186, 'cp_policy', 'Cp policy', '', '', '', '', '', '', ''),
(187, 'select_language', 'Select language', 'Dil seçin', '', '', '', '', '', ''),
(188, 'language', 'Language', 'Dil', '', '', '', '', '', ''),
(189, 'add_listing', 'Add listing', 'Elan yerləşdir', '', '', '', '', '', ''),
(190, 'recent_announcements', 'Recent announcements', '', '', '', '', '', '', ''),
(191, 'terms_of_use', 'Terms of use', '', '', '', '', '', '', ''),
(192, 'privacy_policy', 'Privacy policy', '', '', '', '', '', '', ''),
(193, 'contacts_info', 'Contacts info', '', '', '', '', '', '', ''),
(194, 'mail', 'Mail', '', '', '', '', '', '', ''),
(195, 'show_filters', 'Show filters', '', '', '', '', '', '', ''),
(196, 'search_filters', 'Search filters', '', '', '', '', '', '', ''),
(197, 'any', 'Any', '', '', '', '', '', '', ''),
(198, 'Alış', 'Alış', '', '', '', '', '', '', ''),
(199, 'Kirayə', 'Kirayə', '', '', '', '', '', '', ''),
(200, 'not_found', 'Not found', '', '', '', '', '', '', ''),
(201, 'back_to_home_page', 'Back to home page', '', '', '', '', '', '', ''),
(202, 'page_you_were_looking_for_could_not_be_found', 'Page you were looking for, couldn\'t be found', 'Axtardığınız səhifə tapılmadı', '', '', '', '', '', ''),
(203, 'english', 'English', '', '', '', '', '', '', ''),
(204, 'please_select_one_item', 'Please select one item', '', '', '', '', '', '', ''),
(205, 'contact_information', 'Contact information', '', '', '', '', '', '', ''),
(206, 'ad_type', 'Ad type', '', '', '', '', '', '', ''),
(207, 'property_type', 'Property type', 'Elan tipi', '', '', '', '', '', ''),
(208, 'Mənzil', 'Mənzil', '', '', '', '', '', '', ''),
(209, 'Yeni tikili', 'Yeni tikili', '', '', '', '', '', '', ''),
(210, 'Köhnə tikili', 'Köhnə tikili', '', '', '', '', '', '', ''),
(211, 'Ev / Villa', 'Ev / Villa', '', '', '', '', '', '', ''),
(212, 'Bağ', 'Bağ', '', '', '', '', '', '', ''),
(213, 'Ofis', 'Ofis', '', '', '', '', '', '', ''),
(214, 'Qaraj', 'Qaraj', '', '', '', '', '', '', ''),
(215, 'Torpaq', 'Torpaq', '', '', '', '', '', '', ''),
(216, 'Obyekt', 'Obyekt', '', '', '', '', '', '', ''),
(217, 'edit_city', 'Edit city', '', '', '', '', '', '', ''),
(218, 'Ağcabədi', 'Ağcabədi', '', '', '', '', '', '', ''),
(219, 'Ağdam', 'Ağdam', '', '', '', '', '', '', ''),
(220, 'Ağdaş', 'Ağdaş', '', '', '', '', '', '', ''),
(221, 'Ağdərə', 'Ağdərə', '', '', '', '', '', '', ''),
(222, 'Ağstafa', 'Ağstafa', '', '', '', '', '', '', ''),
(223, 'Ağsu', 'Ağsu', '', '', '', '', '', '', ''),
(224, 'Astara', 'Astara', '', '', '', '', '', '', ''),
(225, 'Bakı', 'Bakı', '', '', '', '', '', '', ''),
(226, 'Balakən', 'Balakən', '', '', '', '', '', '', ''),
(227, 'Beyləqan', 'Beyləqan', '', '', '', '', '', '', ''),
(228, 'Bərdə', 'Bərdə', '', '', '', '', '', '', ''),
(229, 'Biləsuvar', 'Biləsuvar', '', '', '', '', '', '', ''),
(230, 'Cəbrayıl', 'Cəbrayıl', '', '', '', '', '', '', ''),
(231, 'Cəlilabad', 'Cəlilabad', '', '', '', '', '', '', ''),
(232, 'Daşkəsən', 'Daşkəsən', '', '', '', '', '', '', ''),
(233, 'Füzuli', 'Füzuli', '', '', '', '', '', '', ''),
(234, 'Gədəbəy', 'Gədəbəy', '', '', '', '', '', '', ''),
(235, 'Gəncə', 'Gəncə', '', '', '', '', '', '', ''),
(236, 'Goranboy', 'Goranboy', '', '', '', '', '', '', ''),
(237, 'Göyçay', 'Göyçay', '', '', '', '', '', '', ''),
(238, 'Göygöl', 'Göygöl', '', '', '', '', '', '', ''),
(239, 'Göytəpə', 'Göytəpə', '', '', '', '', '', '', ''),
(240, 'Hacıqabul', 'Hacıqabul', '', '', '', '', '', '', ''),
(241, 'Xaçmaz', 'Xaçmaz', '', '', '', '', '', '', ''),
(242, 'Xankəndi', 'Xankəndi', '', '', '', '', '', '', ''),
(243, 'Xırdalan', 'Xırdalan', '', '', '', '', '', '', ''),
(244, 'Xızı', 'Xızı', '', '', '', '', '', '', ''),
(245, 'Xocalı', 'Xocalı', '', '', '', '', '', '', ''),
(246, 'Xocavənd', 'Xocavənd', '', '', '', '', '', '', ''),
(247, 'Xudat', 'Xudat', '', '', '', '', '', '', ''),
(248, 'İmişli', 'İmişli', '', '', '', '', '', '', ''),
(249, 'İsmayıllı', 'İsmayıllı', '', '', '', '', '', '', ''),
(250, 'Kəlbəcər', 'Kəlbəcər', '', '', '', '', '', '', ''),
(251, 'Kürdəmir', 'Kürdəmir', '', '', '', '', '', '', ''),
(252, 'Qax', 'Qax', '', '', '', '', '', '', ''),
(253, 'Qazax', 'Qazax', '', '', '', '', '', '', ''),
(254, 'Qəbələ', 'Qəbələ', '', '', '', '', '', '', ''),
(255, 'Quba', 'Quba', '', '', '', '', '', '', ''),
(256, 'Qubadlı', 'Qubadlı', '', '', '', '', '', '', ''),
(257, 'Qusar', 'Qusar', '', '', '', '', '', '', ''),
(258, 'Laçın', 'Laçın', '', '', '', '', '', '', ''),
(259, 'Lerik', 'Lerik', '', '', '', '', '', '', ''),
(260, 'Lənkəran', 'Lənkəran', '', '', '', '', '', '', ''),
(261, 'Masallı', 'Masallı', '', '', '', '', '', '', ''),
(262, 'Mingəçevir', 'Mingəçevir', '', '', '', '', '', '', ''),
(263, 'Naftalan', 'Naftalan', '', '', '', '', '', '', ''),
(264, 'Naxçıvan', 'Naxçıvan', '', '', '', '', '', '', ''),
(265, 'Neftçala', 'Neftçala', '', '', '', '', '', '', ''),
(266, 'Oğuz', 'Oğuz', '', '', '', '', '', '', ''),
(267, 'Saatlı', 'Saatlı', '', '', '', '', '', '', ''),
(268, 'Sabirabad', 'Sabirabad', '', '', '', '', '', '', ''),
(269, 'Salyan', 'Salyan', '', '', '', '', '', '', ''),
(270, 'Samux', 'Samux', '', '', '', '', '', '', ''),
(271, 'Siyəzən', 'Siyəzən', '', '', '', '', '', '', ''),
(272, 'Sumqayıt', 'Sumqayıt', '', '', '', '', '', '', ''),
(273, 'Şabran', 'Şabran', '', '', '', '', '', '', ''),
(274, 'Şamaxı', 'Şamaxı', '', '', '', '', '', '', ''),
(275, 'Şəki', 'Şəki', '', '', '', '', '', '', ''),
(276, 'Şəmkir', 'Şəmkir', '', '', '', '', '', '', ''),
(277, 'Şirvan', 'Şirvan', '', '', '', '', '', '', ''),
(278, 'Şuşa', 'Şuşa', '', '', '', '', '', '', ''),
(279, 'Tərtər', 'Tərtər', '', '', '', '', '', '', ''),
(280, 'Tovuz', 'Tovuz', '', '', '', '', '', '', ''),
(281, 'Ucar', 'Ucar', '', '', '', '', '', '', ''),
(282, 'Yardımlı', 'Yardımlı', '', '', '', '', '', '', ''),
(283, 'Yevlax', 'Yevlax', '', '', '', '', '', '', ''),
(284, 'Zaqatala', 'Zaqatala', '', '', '', '', '', '', ''),
(285, 'Zəngilan', 'Zəngilan', '', '', '', '', '', '', ''),
(286, 'Zərdab', 'Zərdab', '', '', '', '', '', '', ''),
(287, 'Abşeron', 'Abşeron', '', '', '', '', '', '', ''),
(288, 'Binəqədi', 'Binəqədi', '', '', '', '', '', '', ''),
(289, 'Xətai', 'Xətai', '', '', '', '', '', '', ''),
(290, 'Xəzər', 'Xəzər', '', '', '', '', '', '', ''),
(291, 'Qaradağ', 'Qaradağ', '', '', '', '', '', '', ''),
(292, 'Nərimanov', 'Nərimanov', '', '', '', '', '', '', ''),
(293, 'Nəsimi', 'Nəsimi', '', '', '', '', '', '', ''),
(294, 'Nizami', 'Nizami', '', '', '', '', '', '', ''),
(295, 'Pirallahı', 'Pirallahı', '', '', '', '', '', '', ''),
(296, 'Sabunçu', 'Sabunçu', '', '', '', '', '', '', ''),
(297, 'Səbail', 'Səbail', '', '', '', '', '', '', ''),
(298, 'Suraxanı', 'Suraxanı', '', '', '', '', '', '', ''),
(299, 'Yasamal', 'Yasamal', '', '', '', '', '', '', ''),
(300, 'settlement', 'Settlement', '', '', '', '', '', '', ''),
(301, 'Ceyranbatan', 'Ceyranbatan', '', '', '', '', '', '', ''),
(302, 'Çiçək', 'Çiçək', '', '', '', '', '', '', ''),
(303, 'Digah', 'Digah', '', '', '', '', '', '', ''),
(304, 'Fatmayi', 'Fatmayi', '', '', '', '', '', '', ''),
(305, 'Görədil', 'Görədil', '', '', '', '', '', '', ''),
(306, 'Hökməli', 'Hökməli', '', '', '', '', '', '', ''),
(307, 'Köhnə Corat', 'Köhnə Corat', '', '', '', '', '', '', ''),
(308, 'Qobu', 'Qobu', '', '', '', '', '', '', ''),
(309, 'Masazır', 'Masazır', '', '', '', '', '', '', ''),
(310, 'Mehdiabad', 'Mehdiabad', '', '', '', '', '', '', ''),
(311, 'Müşviqabad', 'Müşviqabad', '', '', '', '', '', '', ''),
(312, 'Novxanı', 'Novxanı', '', '', '', '', '', '', ''),
(313, 'Pirəkəşkül', 'Pirəkəşkül', '', '', '', '', '', '', ''),
(314, 'Saray', 'Saray', '', '', '', '', '', '', ''),
(315, 'Yeni Corat', 'Yeni Corat', '', '', '', '', '', '', ''),
(316, 'Zağulba', 'Zağulba', '', '', '', '', '', '', ''),
(317, 'hashtag', 'Hashtag', '', '', '', '', '', '', ''),
(318, 'fsdfsdfsdfsdf1995', 'Fsdfsdfsdfsdf1995', '', '', '', '', '', '', ''),
(319, 'number_of_rooms', 'Number of rooms', '', '', '', '', '', '', ''),
(320, 'number_of_floors', 'Number of floors', '', '', '', '', '', '', ''),
(321, 'located_on_the_floor', 'Located on the floor', '', '', '', '', '', '', ''),
(322, 'area', 'Area', '', '', '', '', '', '', ''),
(323, 'rules', 'Rules', '', '', '', '', '', '', ''),
(324, 'space', 'Space', '', '', '', '', '', '', ''),
(325, 'price', 'Price', '', '', '', '', '', '', ''),
(326, 'payment_method', 'Payment method', '', '', '', '', '', '', ''),
(327, 'more', 'More', '', '', '', '', '', '', ''),
(328, 'images', 'Images', '', '', '', '', '', '', ''),
(329, 'shared_on_homepage', 'Shared on homepage', '', '', '', '', '', '', ''),
(330, 'realty_type', 'Realty type', 'Əmlak tipi', '', '', '', '', '', ''),
(331, 'motrgage', 'Motrgage', '', '', '', '', '', '', ''),
(332, 'purchase_method', 'Purchase method', '', '', '', '', '', '', ''),
(333, 'register', 'Register', 'Qeydiyyatdan keç', '', '', '', '', '', ''),
(334, 'surname', 'Surname', 'Soyad', '', '', '', '', '', ''),
(335, 'phone_number', 'Phone number', '', '', '', '', '', '', ''),
(336, 'avatar', 'Avatar', '', '', '', '', '', '', ''),
(337, 'terms_and_conditions', 'Terms and conditions', '', '', '', '', '', '', ''),
(338, 'registration_success', 'Registration success', '', '', '', '', '', '', ''),
(339, 'error', 'Error', '', '', '', '', '', '', ''),
(340, 'this_email_already_used', 'This email already used', '', '', '', '', '', '', ''),
(341, 'username_or_email', 'Username or email', '', '', '', '', '', '', ''),
(342, 'enter_your_username_or_email', 'Enter your username or email', '', '', '', '', '', '', ''),
(343, 'enter_your_password', 'Enter your password', '', '', '', '', '', '', ''),
(344, 'lose_your_password', 'Lose your password', '', '', '', '', '', '', ''),
(345, 'all_area_is_required', 'All area is required', '', '', '', '', '', '', ''),
(346, 'profile_settings', 'Profile settings', '', '', '', '', '', '', ''),
(347, 'my_listings', 'My listings', '', '', '', '', '', '', ''),
(348, 'add_new_listing', 'Add new listing', '', '', '', '', '', '', ''),
(349, 'all_rights_reserved', 'All rights reserved', '', '', '', '', '', '', ''),
(350, 'all_listings', 'All listings', '', '', '', '', '', '', ''),
(351, 'printed', 'Printed', '', '', '', '', '', '', ''),
(352, 'expired', 'Expired', '', '', '', '', '', '', ''),
(353, 'under_inspection', 'Under inspection', '', '', '', '', '', '', ''),
(354, 'unacceptable', 'Unacceptable', '', '', '', '', '', '', ''),
(355, 'upload_new_photo', 'Upload new photo', '', '', '', '', '', '', ''),
(356, 'personal_info', 'Personal info', '', '', '', '', '', '', ''),
(357, 'first_name', 'First name', '', '', '', '', '', '', ''),
(358, 'unexpected_error', 'Unexpected error', '', '', '', '', '', '', ''),
(359, 'save', 'Save', '', '', '', '', '', '', ''),
(360, 'change_password', 'Change password', '', '', '', '', '', '', ''),
(361, 'current_password', 'Current password', '', '', '', '', '', '', ''),
(362, 'new_password', 'New password', '', '', '', '', '', '', ''),
(363, 'confirm_new_password', 'Confirm new password', '', '', '', '', '', '', ''),
(364, 'please_insert_old_password', 'Please insert old password', '', '', '', '', '', '', ''),
(365, 'please_insert_new_password', 'Please insert new password', '', '', '', '', '', '', ''),
(366, 'please_insert_confirm_password', 'Please insert confirm password', '', '', '', '', '', '', ''),
(367, 'all_input_is_required', 'All input is required', '', '', '', '', '', '', ''),
(368, 'password_does_not_match', 'Password does not match', '', '', '', '', '', '', ''),
(369, 'hello', 'Hello', '', '', '', '', '', '', ''),
(370, 'password_not_updated', 'Password not updated', '', '', '', '', '', '', ''),
(371, 'password_updated', 'Password updated', '', '', '', '', '', '', ''),
(372, 'user_credentials', 'User credentials', '', '', '', '', '', '', ''),
(373, 'enter_your_phone_number', 'Enter your phone number', '', '', '', '', '', '', ''),
(374, 'men', 'Men', '', '', '', '', '', '', ''),
(375, 'enter_your_name', 'Enter your name', '', '', '', '', '', '', ''),
(376, 'enter_your_email', 'Enter your email', '', '', '', '', '', '', ''),
(377, 'I', 'I', '', '', '', '', '', '', ''),
(378, 'I_am', 'I am', '', '', '', '', '', '', ''),
(379, 'share_my_listing', 'Share my listing', '', '', '', '', '', '', ''),
(380, 'a_moderator', 'A moderator', '', '', '', '', '', '', ''),
(381, 'continue', 'Continue', '', '', '', '', '', '', ''),
(382, 'listing', 'Listing', '', '', '', '', '', '', ''),
(383, 'realty_kinds', 'Realty kinds', '', '', '', '', '', '', ''),
(384, 'realty_types', 'Realty types', '', '', '', '', '', '', ''),
(385, 'office_kind', 'Office kind', '', '', '', '', '', '', ''),
(386, 'rooms', 'Rooms', '', '', '', '', '', '', ''),
(387, 'enter_room_number', 'Enter room number', '', '', '', '', '', '', ''),
(388, 'enter_area', 'Enter area', '', '', '', '', '', '', ''),
(389, 'enter_space', 'Enter space', '', '', '', '', '', '', ''),
(390, 'floor', 'Floor', '', '', '', '', '', '', ''),
(391, 'enter_floor', 'Enter floor', '', '', '', '', '', '', ''),
(392, 'building_floor', 'Building floor', '', '', '', '', '', '', ''),
(393, 'enter_building_floor', 'Enter building floor', '', '', '', '', '', '', ''),
(394, 'enter_price', 'Enter price', '', '', '', '', '', '', ''),
(395, 'daily', 'Daily', '', '', '', '', '', '', ''),
(396, 'monthly', 'Monthly', '', '', '', '', '', '', ''),
(397, 'mortgage', 'Mortgage', '', '', '', '', '', '', ''),
(398, 'ipoteka', 'Ipoteka', '', '', '', '', '', '', ''),
(399, 'kupcha', 'Kupcha', '', '', '', '', '', '', ''),
(400, 'enter_address', 'Enter address', '', '', '', '', '', '', ''),
(401, 'listing_description', 'Listing description', '', '', '', '', '', '', ''),
(402, 'add_images', 'Add images', '', '', '', '', '', '', ''),
(403, 'add_image', 'Add image', '', '', '', '', '', '', ''),
(404, 'a_rielitor', 'A rielitor', '', '', '', '', '', '', ''),
(405, 'home_modules', 'Home modules', '', '', '', '', '', '', ''),
(406, 'another_modules', 'Another modules', '', '', '', '', '', '', ''),
(407, 'email_is_not_valid_email_address', 'Email is not valid email address', '', '', '', '', '', '', ''),
(408, 'log_out', 'Log out', '', '', '', '', '', '', ''),
(409, 'please_provide_a_valid_email', 'Please provide a valid email', '', '', '', '', '', '', ''),
(410, 'enter_email_address', 'Enter email address', '', '', '', '', '', '', ''),
(411, 'enter_phone_number', 'Enter phone number', '', '', '', '', '', '', ''),
(412, 'enter_your_name_and_surname', 'Enter your name and surname', '', '', '', '', '', '', ''),
(413, 'enter_room_count', 'Enter room count', '', '', '', '', '', '', ''),
(414, 'please_select_language', 'Please select language', '', '', '', '', '', '', ''),
(415, 'contact', 'Contact', '', '', '', '', '', '', ''),
(416, 'login_page_background', 'Login page background', '', '', '', '', '', '', ''),
(417, 'cookies_page', 'Cookies page', '', '', '', '', '', '', ''),
(418, 'contact_page', 'Contact page', '', '', '', '', '', '', ''),
(419, 'about_page', 'About page', '', '', '', '', '', '', ''),
(420, 'photo_gallery_page', 'Photo gallery page', '', '', '', '', '', '', ''),
(421, 'homepage_why_us', 'Homepage why us', '', '', '', '', '', '', ''),
(422, 'contact_in_homepage', 'Contact in homepage', '', '', '', '', '', '', ''),
(423, 'office_information', 'Office information', '', '', '', '', '', '', ''),
(424, 'real_estate_agency', 'Real estate agency', '', '', '', '', '', '', ''),
(425, 'contact_form', 'Contact form', '', '', '', '', '', '', ''),
(426, 'contact_description', 'Contact description', '', '', '', '', '', '', ''),
(427, 'enter_name', 'Enter name', '', '', '', '', '', '', ''),
(428, 'message', 'Message', '', '', '', '', '', '', ''),
(429, 'enter_message', 'Enter message', '', '', '', '', '', '', ''),
(430, 'send_message', 'Send message', '', '', '', '', '', '', ''),
(431, 'about_us', 'About us', '', '', '', '', '', '', ''),
(432, 'sale', 'Sale', '', '', '', '', '', '', ''),
(433, 'rent', 'Rent', '', '', '', '', '', '', ''),
(434, 'phone_number_or_email', 'Phone number or email', '', '', '', '', '', '', ''),
(435, 'forgot_your_password', 'Forgot your password', '', '', '', '', '', '', ''),
(436, 'contac', 'Contac', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `language_list`
--

CREATE TABLE `language_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `sira` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language_list`
--

INSERT INTO `language_list` (`id`, `name`, `lang_field`, `flag_key`, `status`, `sira`, `created_at`, `updated_at`) VALUES
(1, 'English', 'english', 'us', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Azerbaijan', 'azerbaijan', 'az', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Turkish', 'turkish', 'tr', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Russian', 'russian', 'ru', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'French', 'french', 'fr', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Germany', 'germany', 'de', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Italy', 'italy', 'it', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Arabian', 'saudia_arabian', 'sa', 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `try_count` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `try_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `login`, `try_count`, `ip`, `soft`, `try_date`, `status`) VALUES
(2, 'demo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', '2022-02-03 11:54:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `last_visited_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `recovery_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`id`, `name`, `surname`, `email`, `username`, `password`, `second_password`, `avatar`, `last_login`, `last_visited_page`, `ip`, `soft`, `status`, `recovery_text`) VALUES
(1, 'Ağakərim', 'Kərimov', 'admin@gmail.com', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'bf2c47223aeab03eb14749cc1a07fddffaa208f4158ca9a486a30f36118f83e0', 'avatar686.png', '2022-02-15 21:25:49', 'http://127.0.0.1:8080/estate2//auth_dash/background_images', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 1, '2DDF575071031B4BAE68F0BF76AF7703D55489542A31873483374EBBE8C04366C0B779C9583B4CC0377EE8FD57C4116321BD5F341E92052D0AE6EF74F9D8A3C9');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_number` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metros`
--

CREATE TABLE `metros` (
  `id` int(11) UNSIGNED NOT NULL,
  `metro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metros`
--

INSERT INTO `metros` (`id`, `metro_name`, `status`, `seo_link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Həzi Aslanov', 1, 'hezi-aslanov', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(2, 'Əhmədli', 1, 'ehmedli', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(3, 'Xalqlar dostluğu', 1, 'xalqlar-dostlugu', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(4, 'Neftçilər', 1, 'neftciler', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(5, 'Qara Qarayev', 1, 'qara-qarayev', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(6, 'Ulduz', 1, 'ulduz', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(7, 'Koroğlu', 1, 'koroglu', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(8, 'Nəriman Nərimanov', 1, 'neriman-nerimanov', NULL, '2022-01-27 14:47:10', '2022-01-27 14:47:10'),
(9, 'Gənclik', 1, 'genclik', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(10, '28 may', 1, '28-may', NULL, '2022-01-27 14:47:11', '2022-02-01 17:03:06'),
(11, 'Nizami', 1, 'nizami', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(12, 'Elmlər akademiyası', 1, 'elmler-akademiyasi', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(13, 'İnşaatcılar', 1, 'insaatcilar', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(14, '20 yanvar', 1, '20-yanvar', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(15, 'Memar Əcəmi', 1, 'memar-ecemi', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(16, 'Nəsimi', 1, 'nesimi', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(17, 'Azadlıq', 1, 'azadliq', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(18, 'Dərnəgül', 1, 'dernegul', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(19, '8 noyabr', 1, '8-noyabr', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(20, 'Avtovağzal', 1, 'avtovagzal', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(21, 'Xətai', 1, 'xetai', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(22, 'Bakmil', 1, 'bakmil', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(23, 'Cəfər Cabbarlı', 1, 'cefer-cabbarli', NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `modul_functionalities`
--

CREATE TABLE `modul_functionalities` (
  `id` int(11) NOT NULL,
  `module_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modul_functionalities`
--

INSERT INTO `modul_functionalities` (`id`, `module_keyword`, `module_title`, `module_text`, `module_status`) VALUES
(1, 'loader', 'Yükləmə animasıyası', 'Səhifə yüklənərkən gözlətmə animasiyasını aktiv/deaktiv edir.', 0),
(2, 'security', 'Saytın kopyalanması', 'Saytın kopyalanmasının müdafiəsini aktiv/deaktiv edir.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passwords_changes`
--

CREATE TABLE `passwords_changes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `old_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `change_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `passwords_changes`
--

INSERT INTO `passwords_changes` (`id`, `user_id`, `old_password`, `change_date`) VALUES
(1, 1, '3b612c75a7b5048a435fb6ec81e52ff92d6d795a8b5a9c17070f6a63c97a53b2', '2022-01-26 12:19:27'),
(2, 1, '60fe74406e7f353ed979f350f2fbb6a2e8690a5fa7d1b0c32983d1d8b3f95f67', '2022-01-26 14:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_blacklist`
--

CREATE TABLE `password_blacklist` (
  `id` int(11) NOT NULL,
  `bad_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_blacklist`
--

INSERT INTO `password_blacklist` (`id`, `bad_pass`, `status`) VALUES
(1, '123456', 1),
(2, '1234567', 1),
(3, '12345678', 1),
(4, '123456789', 1),
(5, '12345678910', 1),
(6, '1098765', 1),
(7, '10987654', 1),
(8, '109876543', 1),
(9, '1098765432', 1),
(10, '10987654321', 1),
(11, '012345', 1),
(12, '0123456', 1),
(13, '01234567', 1),
(14, '012345678', 1),
(15, '0123456789', 1),
(16, 'password', 1),
(17, 'administrator', 1),
(18, 'Password', 1),
(20, 'qwerty123', 1),
(21, '123123', 1),
(22, '1234567890', 1),
(23, '1qaz2wsx', 1),
(24, '121212', 1),
(25, '696969', 1),
(26, '969696', 1),
(27, '123qwe', 1),
(28, '1111111', 1),
(29, '111111', 1),
(30, '11111111', 1),
(31, '111111111', 1),
(32, 'qwer1234', 1),
(33, '123456', 1),
(34, '654321', 1),
(35, 'admin', 1),
(36, 'administrator', 1),
(37, '987654321', 1),
(38, '987654', 1),
(39, '00000000', 1),
(40, '000000', 1),
(41, '1111111', 1),
(42, '111111', 1),
(43, '11111111', 1),
(44, 'qwerty', 1),
(45, 'qwertyuio', 1),
(46, 'qwertyu', 1),
(47, 'qwertyui', 1),
(48, 'asdfgh', 1),
(49, 'asdfghj', 1),
(50, 'asdfghjk', 1),
(51, 'asdfghjkl', 1),
(52, '1990', 1),
(53, '1991', 1),
(54, '1992', 1),
(55, '1993', 1),
(56, '1994', 1),
(57, '1995', 1),
(58, '1996', 1),
(59, '1997', 1),
(60, '1998', 1),
(61, '1999', 1),
(62, '2000', 1),
(63, '2001', 1),
(64, '2002', 1),
(65, '2003', 1),
(66, '2004', 1),
(67, '69696969', 1),
(68, '159159159', 1),
(69, '0123456', 1),
(70, '012345', 1),
(71, '01234567', 1),
(72, '0123456789', 1),
(73, '012345678', 1),
(74, '12345689', 1),
(75, '1234568', 1),
(76, '654654654', 1),
(77, 'lkjhgf', 1),
(78, 'lkjhgfd', 1),
(79, 'lkjhgfds', 1),
(80, 'lkjhgfdsa', 1),
(81, 'zxcvbn', 1),
(82, 'zxcvbnm', 1),
(83, 'mnbvcx', 1),
(84, 'mnbvc', 1),
(85, 'mnbvcxz', 1),
(86, '06041995', 1),
(87, '12345qwert', 1),
(88, '123456qwert', 1),
(89, '111111', 1),
(90, '123456789a', 1),
(91, '1234554321', 1),
(92, '1111111111', 1),
(93, '123456789q', 1),
(94, 'password123', 1),
(95, '1234512345', 1),
(96, '1122334455', 1),
(97, '123456789z', 1),
(98, 'a123456789', 1),
(99, 'qwerty1234', 1),
(100, 'qwertyqwerty', 1),
(101, '123456654321', 1),
(102, '1357924680', 1),
(103, '135792468', 1),
(104, '246813579', 1),
(105, '246813', 1),
(106, 'playstation', 1),
(107, 'password', 1),
(108, 'demo', 1),
(109, '123', 1),
(110, '1234', 1),
(111, '1', 1),
(112, 'user', 1),
(113, 'username', 1),
(114, 'demopass', 1),
(115, 'poiuyt', 1),
(116, '9876543', 1),
(117, '98765432', 1),
(118, '98765', 1),
(119, '12344', 1),
(120, '12345', 1),
(121, '12346', 1),
(122, '', 1),
(123, 'samra', 1),
(124, 'senem', 1),
(125, '000000', 1),
(126, '0000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realty_kinds`
--

CREATE TABLE `realty_kinds` (
  `id` int(11) UNSIGNED NOT NULL,
  `kind_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `realty_kinds`
--

INSERT INTO `realty_kinds` (`id`, `kind_name`, `seo_link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Alış', 'alis', 1, NULL, '2022-01-27 14:47:11', '2022-02-03 10:03:45'),
(2, 'Kirayə', 'kiraye', 1, NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `realty_types`
--

CREATE TABLE `realty_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `realty_types`
--

INSERT INTO `realty_types` (`id`, `type_name`, `seo_link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mənzil', 'menzil', 1, NULL, '2022-01-27 14:47:11', '2022-01-27 14:47:11'),
(2, 'Yeni tikili', 'yeni-tikili', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(3, 'Köhnə tikili', 'kohne-tikili', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(4, 'Ev / Villa', 'ev-villa', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(5, 'Bağ', 'bag', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(6, 'Ofis', 'ofis', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(7, 'Qaraj', 'qaraj', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(8, 'Torpaq', 'torpaq', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12'),
(9, 'Obyekt', 'obyekt', 1, NULL, '2022-01-27 14:47:12', '2022-01-27 14:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `region_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `city_id`, `region_name`, `seo_link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 8, 'Abşeron', 'abseron', 1, NULL, '2022-01-27 10:47:12', '2022-02-01 16:57:00'),
(2, 8, 'Binəqədi', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(3, 8, 'Xətai', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(4, 8, 'Xəzər', 'xezer', 1, NULL, '2022-01-27 10:47:13', '2022-01-30 09:05:51'),
(5, 8, 'Qaradağ', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(6, 8, 'Nərimanov', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(7, 8, 'Nəsimi', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(8, 8, 'Nizami', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(9, 8, 'Pirallahı', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(10, 8, 'Sabunçu', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(11, 8, 'Səbail', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(12, 8, 'Suraxanı', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13'),
(13, 8, 'Yasamal', '', 1, NULL, '2022-01-27 10:47:13', '2022-01-27 10:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_count` int(11) NOT NULL,
  `room_status` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settlements`
--

CREATE TABLE `settlements` (
  `id` int(11) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `settlement_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settlements`
--

INSERT INTO `settlements` (`id`, `region_id`, `settlement_name`, `seo_link`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ceyranbatan', 'ceyranbatan', 1, NULL, '2022-01-27 10:47:14', '2022-02-01 16:58:35'),
(2, 1, 'Çiçək', '', 1, NULL, '2022-01-27 10:47:14', '2022-01-27 10:47:14'),
(3, 1, 'Digah', '', 1, NULL, '2022-01-27 10:47:14', '2022-01-27 10:47:14'),
(4, 1, 'Fatmayi', '', 1, NULL, '2022-01-27 10:47:14', '2022-01-27 10:47:14'),
(5, 1, 'Görədil', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(6, 1, 'Hökməli', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(7, 1, 'Köhnə Corat', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(8, 1, 'Qobu', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(9, 1, 'Masazır', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(10, 1, 'Mehdiabad', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(11, 1, 'Müşviqabad', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(12, 1, 'Novxanı', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(13, 1, 'Pirəkəşkül', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(14, 1, 'Saray', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(15, 1, 'Yeni Corat', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15'),
(16, 1, 'Zağulba', '', 1, NULL, '2022-01-27 10:47:15', '2022-01-27 10:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `site_status`
--

CREATE TABLE `site_status` (
  `id` int(11) NOT NULL,
  `open_date` date NOT NULL,
  `open_time` time NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_status`
--

INSERT INTO `site_status` (`id`, `open_date`, `open_time`, `title`, `content`, `status`) VALUES
(1, '2022-04-06', '22:10:00', 'Sayt təmirə bağlıdır.', 'Hazırda təmir işləri aparılır. Qısa müddət ərzində geri qayıdacayıq. Daha sonra yenidən cəhd edin.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_visitor`
--

CREATE TABLE `site_visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visit_date` datetime NOT NULL DEFAULT current_timestamp(),
  `visitor_info` text COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_visitor`
--

INSERT INTO `site_visitor` (`id`, `ip`, `soft`, `visit_date`, `visitor_info`, `count`) VALUES
(1, '127.0.0.1', '', '2022-01-26 15:14:11', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(2, '127.0.0.1', '', '2022-01-26 15:14:18', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(3, '127.0.0.1', '', '2022-01-26 15:14:25', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(4, '127.0.0.1', '', '2022-01-26 15:22:24', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(5, '127.0.0.1', '', '2022-01-26 15:26:46', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(6, '127.0.0.1', '', '2022-01-26 15:26:49', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(7, '127.0.0.1', '', '2022-01-26 15:26:56', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(8, '127.0.0.1', '', '2022-01-26 15:27:49', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(9, '127.0.0.1', '', '2022-01-26 15:28:15', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(10, '127.0.0.1', '', '2022-01-26 15:36:39', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(11, '127.0.0.1', '', '2022-01-26 15:36:44', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(12, '127.0.0.1', '', '2022-01-26 15:37:04', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(13, '127.0.0.1', '', '2022-01-26 15:37:22', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(14, '127.0.0.1', '', '2022-01-26 15:38:12', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(15, '127.0.0.1', '', '2022-01-26 15:42:59', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(16, '127.0.0.1', '', '2022-01-26 15:45:02', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(17, '127.0.0.1', '', '2022-01-26 15:45:12', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(18, '127.0.0.1', '', '2022-01-26 15:46:53', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(19, '127.0.0.1', '', '2022-01-26 15:46:54', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(20, '127.0.0.1', '', '2022-01-26 15:46:55', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(21, '127.0.0.1', '', '2022-01-26 15:47:17', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(22, '127.0.0.1', '', '2022-01-26 15:47:18', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(23, '127.0.0.1', '', '2022-01-26 15:47:19', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(24, '127.0.0.1', '', '2022-01-26 16:00:05', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(25, '127.0.0.1', '', '2022-01-27 09:53:19', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185),
(26, '127.0.0.1', '', '2022-01-27 15:41:26', '{\"success\":false,\"error\":{\"code\":104,\"type\":\"usage_limit_reached\",\"info\":\"Your monthly usage limit has been reached. Please upgrade your Subscription Plan.\"}}', 3185);

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` int(11) NOT NULL,
  `smtp_server` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_port` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_certificate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smtp_email_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `receiver_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `smtp_server`, `smtp_port`, `mail_certificate`, `smtp_email`, `smtp_email_password`, `status`, `receiver_email`, `updated_at`) VALUES
(1, 'mail.sitename.com', '587', 'ssl', 'info@sitename.com', 'shifreniburayazin', 1, 'info@sitename.com', '2022-01-27 10:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_settings`
--

CREATE TABLE `social_media_settings` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_media_settings`
--

INSERT INTO `social_media_settings` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`) VALUES
(1, 'https://facebook.com', '#', 'https://instagram.com', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `system_bans`
--

CREATE TABLE `system_bans` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ban_date` datetime NOT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_logs`
--

CREATE TABLE `system_logs` (
  `id` int(11) NOT NULL,
  `log_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_content` text COLLATE utf8_unicode_ci NOT NULL,
  `log_type` int(11) NOT NULL,
  `log_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_soft` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `log_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme_settings`
--

CREATE TABLE `theme_settings` (
  `id` int(11) NOT NULL,
  `theme_mode` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theme_settings`
--

INSERT INTO `theme_settings` (`id`, `theme_mode`, `updated_at`) VALUES
(1, 'light', '2022-01-31 09:21:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_users`
--
ALTER TABLE `ads_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apis_settings`
--
ALTER TABLE `apis_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background_images`
--
ALTER TABLE `background_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_settings`
--
ALTER TABLE `contact_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_numbers`
--
ALTER TABLE `floor_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashtags`
--
ALTER TABLE `hashtags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hashtags_region_id_foreign` (`region_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_list`
--
ALTER TABLE `language_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metros`
--
ALTER TABLE `metros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul_functionalities`
--
ALTER TABLE `modul_functionalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwords_changes`
--
ALTER TABLE `passwords_changes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_blacklist`
--
ALTER TABLE `password_blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realty_kinds`
--
ALTER TABLE `realty_kinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realty_types`
--
ALTER TABLE `realty_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_status`
--
ALTER TABLE `site_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_visitor`
--
ALTER TABLE `site_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_settings`
--
ALTER TABLE `social_media_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_bans`
--
ALTER TABLE `system_bans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_logs`
--
ALTER TABLE `system_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_settings`
--
ALTER TABLE `theme_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads_users`
--
ALTER TABLE `ads_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apis_settings`
--
ALTER TABLE `apis_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background_images`
--
ALTER TABLE `background_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `contact_settings`
--
ALTER TABLE `contact_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `floor_numbers`
--
ALTER TABLE `floor_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hashtags`
--
ALTER TABLE `hashtags`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `language_list`
--
ALTER TABLE `language_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_credentials`
--
ALTER TABLE `login_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metros`
--
ALTER TABLE `metros`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `modul_functionalities`
--
ALTER TABLE `modul_functionalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passwords_changes`
--
ALTER TABLE `passwords_changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_blacklist`
--
ALTER TABLE `password_blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `realty_kinds`
--
ALTER TABLE `realty_kinds`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `realty_types`
--
ALTER TABLE `realty_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `site_status`
--
ALTER TABLE `site_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_visitor`
--
ALTER TABLE `site_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_settings`
--
ALTER TABLE `social_media_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_bans`
--
ALTER TABLE `system_bans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_logs`
--
ALTER TABLE `system_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme_settings`
--
ALTER TABLE `theme_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
