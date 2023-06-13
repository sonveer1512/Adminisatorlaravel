-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 08:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axesell`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `favicon` varchar(155) DEFAULT NULL,
  `address` text NOT NULL,
  `role` varchar(15) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `info` text DEFAULT NULL,
  `website` varchar(155) DEFAULT NULL,
  `c_name` varchar(55) NOT NULL,
  `c_address` text NOT NULL,
  `c_gst` varchar(100) NOT NULL,
  `city` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL,
  `facebook` varchar(55) DEFAULT NULL,
  `twitter` varchar(55) DEFAULT NULL,
  `linkedin` varchar(55) DEFAULT NULL,
  `youtube` varchar(55) DEFAULT NULL,
  `instagram` varchar(55) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `url`, `name`, `password`, `mobile`, `image`, `favicon`, `address`, `role`, `added_by`, `info`, `website`, `c_name`, `c_address`, `c_gst`, `city`, `state`, `country`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `email`, `flag`, `created_at`, `updated_at`) VALUES
(1, 1, 'axesell.com', 'axesell', '$2y$10$eUCXWuVx1TEDYK6uP5XY3O0Pth16iuzGPMUAOHimnrro61fxw3UfO', 9555084255, '1681807104.milky-way-2695569_960_720.jpg', '', 'sHMvKwC7Mx', 'Admin', 1, '', NULL, 'axepert Exhibits', 'Dp3Rgyxnyq', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mail@axesell.com', 0, '2022-12-24 13:13:34', '2023-04-26 06:43:41'),
(42, 1, 'axesell.com', 'sholu', '$2y$10$eUCXWuVx1TEDYK6uP5XY3O0Pth16iuzGPMUAOHimnrro61fxw3UfO', 8976543210, '1681805251.PNG', '', 'colony', '', 1, '', NULL, 'axepert', 'test colny', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 1, '2023-04-18 08:07:31', '2023-04-26 06:43:41'),
(43, 1, 'axesell.com', 'raju', '$2y$10$ROyjVf4MJfLsFR8CeTQDcutoSvW8X0ToMZuCuyjKUzDyh80.HmDFK', 9876543211, '1681812793.milky-way-2695569_960_720.jpg', '', 'trest', 'distributor', 1, '', NULL, 'tester', 'SHzvjczoyG', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 2, '2023-04-18 10:13:13', '2023-04-26 06:43:41'),
(44, 1, 'axesell.com', '1Y8EN20qXA', '$2y$10$z0AoU7Z7XAxu7imagbNBBe8DNGsuJ/Xbshs/8gNPfbl6CtsrdQsUq', 1373642674, 'uploads/distributor/202304191735oil2.jpg', 'uploads/favicon/202304201026milky-way-2695569_960_720.jpg', 'EedVwaILXi', 'distributor', 1, 'AUKym8D8JO', 'DGXcpE4vmK', '9tmj07RIPx', 'afjhgdshfjdgfjah', '23AAVCA3963G1ZF', 'jksdklajflkjsd', 'XVDJstGZD', 'lkfjaklsdfjlks', '1Y8EN20qXA', 'VJEPh4yd14', 'ztY5vdQz1K', 'ezIBQQDCKM', 'FRuAXgb2AI', 'sp@gmail.com', 0, '2023-04-18 12:35:45', '2023-04-26 06:43:41'),
(45, 1, 'axesell.com', 'testing testere', '$2y$10$qLdlbgK0z6J7bNV50X6/9.XqM75X9axeC8zpAGUl9mkkZJ7V5vID6', 8976543210, 'C:\\xampp2\\tmp\\php1319.tmp', '', 'tester', 'distributor', 1, '', NULL, 'test', 'tester', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 2, '2023-04-19 05:07:17', '2023-04-26 06:43:41'),
(46, 1, 'axesell.com', 'Alfa', '$2y$10$blF1vWx2mgIpyo5El18cnOiun.w3xZ53/kfYcKfMG5GKOUyQT1pl.', 8976543210, '202304191102milky-way-2695569_960_720.jpg', '', 'E31GrgGaaG', 'distributor', 1, '', NULL, 'jfhsdjkhffhsdkfh', 'P6hsMziAgZ', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 2, '2023-04-19 05:14:44', '2023-04-26 06:43:41'),
(47, 1, 'axesell.com', 'NewEntery', '$2y$10$bnAyaDaZa3ADgdFjXHpR3urvBXxESJIB/PAmrx87OsjEU8YWmTEY2', 8976543210, '202304191106oil2.jpg', '', 'FqkQziRLPx', 'distributor', 1, '', NULL, 'jfhsdjkhffhsdkfh', 'P4pVNG1WvD', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 2, '2023-04-19 05:36:16', '2023-04-26 06:43:41'),
(48, 1, 'axesell.com', 'NewEntery', '$2y$10$MBA2X0IllfpeXnwmQ2qkLeUmsYvoXv46HydRWvdQZhUyJ9TKXH/qC', 8976543210, 'C:\\xampp2\\tmp\\php82EF.tmp', '', 'FqkQziRLPx', 'distributor', 1, '', NULL, 'jfhsdjkhffhsdkfh', 'P4pVNG1WvD', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 2, '2023-04-19 05:37:33', '2023-04-26 06:43:41'),
(49, 1, 'axesell.com', 'NewEntery', '$2y$10$UsUZORlLp9.i1C.A7D7Vb.xhJlnZLTZaDOvhB7l7UNkPGDgIS4XR2', 8976543210, 'uploads/distributor/202304191118banner-fff.png', '', 'FqkQziRLPx j 12345', 'distributor', 1, '', NULL, 'jfhsdjkhffhsdkfh', 'P4pVNG1WvD 435', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 0, '2023-04-19 05:48:48', '2023-04-26 06:43:41'),
(50, 1, 'axesell.com', 'NewEntery', '$2y$10$OwAnG9bTLwD6ulSAAin37OrA2KAtWu8DVXM8VgTHiTYcwNcS/wbhi', 8976543210, 'uploads/distributor/202304211030milky-way-2695569_960_720.jpg', NULL, 'tFwmjcKIuM', 'distributor', 1, NULL, NULL, 'jfhsdjkhffhsdkfh', 'mkEjMIti8t', '23AAVCA3963G1ZF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@gmail.com', 0, '2023-04-21 05:00:39', '2023-04-26 06:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `vendor_url` varchar(80) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `description` longtext NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `vendor_url`, `title`, `subtitle`, `image`, `url`, `description`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/', 'testing', 'fdsfs', '1681121759.png', 'asdfsdfs', 'asdfasfs', 2, '2023-04-10 10:15:59', '2023-04-10 12:28:13'),
(2, 'http://127.0.0.1:8000/', 'testing report', 'xZypgfmrdq', '1681123581.png', 'r4mQcU6aRT', 'kXeaQnvzRk', 2, '2023-04-10 10:46:21', '2023-04-10 10:50:58'),
(3, 'http://127.0.0.1:8000/', 'cvxcvxc', 'xcvxcvxcxc', '1681284236.png', 'vxczv', 'xczvzxc', 0, '2023-04-12 07:23:56', '2023-04-12 07:44:21'),
(4, 'http://127.0.0.1:8000/', 'new product test', 'test product', '1681285311.png', 'zczxczxzx', 'czxczZC', 0, '2023-04-12 07:41:51', '2023-04-12 02:12:06'),
(5, 'http://127.0.0.1:8000/', 'testing', 'shbashdsb', '1682493285.png', 'adasjkdasd', 'asdahjdkasddddA', 1, '2023-04-26 07:14:45', '2023-04-26 07:14:54'),
(6, 'axesell.com', 'testing report', 'tRfHAEOg', '1682509548.png', 'SU6juq8RGH', 'WrlgMLgAir', 0, '2023-04-26 11:45:48', '2023-04-26 11:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `vendor_url` varchar(80) NOT NULL,
  `image` varchar(300) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `meta_desc` varchar(500) NOT NULL,
  `meta_key` varchar(500) NOT NULL,
  `meta_tags` varchar(500) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `vendor_url`, `image`, `heading`, `slug`, `meta_desc`, `meta_key`, `meta_tags`, `page_title`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/', '1681112321.png', 'test', '', 'ds', 'sdfsd', 'ds', 'sdsd', 2, '2023-04-10 06:11:31', '2023-04-10 08:03:20'),
(2, 'http://127.0.0.1:8000/', '1681112897.png', 'testing report', 'tWs09lHfyH', 'hLgedFOqOA', 'tg3ClOiKAj', 'NOf02ALCon', 'WUMEHwwN9k', 0, '2023-04-10 07:48:17', '2023-04-10 08:03:07'),
(3, 'http://127.0.0.1:8000/', '1681209744.png', 'dsfsdfasfsd', 'dsfsdfasfsd', 'fsdfa', 'sdsd', 'sd', 'asd', 2, '2023-04-11 10:42:24', '2023-04-12 07:20:52'),
(4, 'http://127.0.0.1:8000/', '1681283326.png', 'testing', 'testing', 'zxXZXZ', 'ZXZXZX', 'zXZXZX', 'ZXZXZ', 0, '2023-04-12 07:08:46', '2023-04-12 07:20:43'),
(5, 'http://127.0.0.1:8000/', '1681284070.png', 'kjijijijijijijijij', '', 'czXz', 'zXCzx', 'xczC', 'zCZ', 0, '2023-04-12 07:21:10', '2023-04-12 01:53:15'),
(6, 'http://127.0.0.1:8000/', '1682493160.png', 'blog', 'blog', 'asdksasaksaj', 'sdskadkas', 'sdksajkd', 'sadjksadask', 0, '2023-04-26 07:12:40', '2023-04-26 07:12:40'),
(7, 'axesell.com', '1682509442.PNG', 'testing report', 'MVa1WIvELk', '8WRO90cau1', 'jJLpZGghxz', 'lqTxCzGJC8', 'mM2H49KZI7', 0, '2023-04-26 11:44:02', '2023-04-26 11:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `metatitle` varchar(150) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metatags` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `icon`, `metatitle`, `metakey`, `metatags`, `description`, `flag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'test brand 1', '1680503349.PNG', 'sdfsdf', 'dfsd', 'tetstusadhhdkj', 'sdfsd', 0, 'test-brand', '2023-04-03 06:29:09', '2023-04-03 07:45:08'),
(2, 'scccasd', '1682503870.PNG', 'dassd', 'sadas', 'asdasd', 'sadas', 0, 'scccasd', '2023-04-26 10:11:10', '2023-04-26 10:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `code` varchar(150) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `metatitle` varchar(150) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metatags` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `flag` int(11) DEFAULT 0,
  `slug` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `product_id`, `code`, `title`, `cat_icon`, `metatitle`, `metakey`, `metatags`, `description`, `flag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, '0', 'dsfsdfsdf', '1680252394.png', 'fsdd', 'fdssd', '', 'fsd', 1, 'sdfsdfsd', '2023-03-31 08:46:34', '2023-04-03 08:09:03'),
(2, 0, '0', 'cscsd', '1680252663.png', 'xczxc', 'xcvx', '', 'xcvx', 0, 'sdf', '2023-03-31 08:51:03', '2023-03-31 08:51:03'),
(3, 0, '0', 'asdsa', '1680252748.png', 'asd', 'das', '', 'asdass', 0, 'dasdas', '2023-03-31 08:52:28', '2023-03-31 08:52:28'),
(4, 0, '0', 'test', '1680252850.png', 'sad', 'sa', '', 'sdassa', 0, 'dsfas', '2023-03-31 08:54:10', '2023-03-31 08:54:10'),
(5, 0, '0', 'dasdsd', '1680252916.png', 'as', 'sds', '', 'adsa', 0, 'sdas', '2023-03-31 08:55:16', '2023-03-31 08:55:16'),
(6, 0, '0', 'cascsas', '1680252948.png', 'asc', 'saas', '', 'sac', 0, 'csa', '2023-03-31 08:55:48', '2023-03-31 08:55:48'),
(7, 0, '0', 'asdasds', '1680253015.png', 'sadas', 'd', '', 'sdas', 0, 'ad', '2023-03-31 08:56:55', '2023-03-31 08:56:55'),
(8, 0, '0', 'rajkumar K', '1680253218.png', 'fnAXTOWQFX', 'sp0RicDBXF', '', 'cAGn9wG67k', 0, 'RGuR1jHUp2', '2023-03-31 09:00:18', '2023-03-31 09:00:18'),
(9, 0, '0', 'rajkumar K', '1680253367.png', 'XdrvZbzOFU', 'HLaB6MCizk', '', 'JCTQ50p6Mc', 0, 'Y98KenwssQ', '2023-03-31 09:02:47', '2023-04-04 13:03:30'),
(10, 0, '0', 'suryasdadad', '1680253565.png', 'Z9YCYdfIFFsdssaa', '11WEt4o7rQdasas', 'asdasdsa', '8l3nYJ6Tjndas', 1, 'hi8PkLMZwi', '2023-03-31 09:06:05', '2023-04-05 06:27:49'),
(11, 0, '0', 'rahul1', '1680254264.png', 'kokokoksdas', 'okoksdas', 'dfhsdkhfkjshfsadas', 'okokoasdas', 0, 'rahul1', '2023-03-31 09:17:44', '2023-04-05 06:20:10'),
(12, 0, '0', 'SURYA', '1682494151.png', 'SDFJKFJLSK', 'mlb67UuKNC', 'nzbh8iwNBO', 'nY5G8qlysP', 0, 'surya', '2023-04-26 07:29:11', '2023-04-26 07:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_bar`
--

CREATE TABLE `navigation_bar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL,
  `icon` varchar(55) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_bar`
--

INSERT INTO `navigation_bar` (`id`, `menu`, `slug`, `icon`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Project management', 'access_management', '<i class=\"feather icon-settings\"></i>', 0, '2022-12-26 13:31:56', NULL),
(2, 'Product Management', 'product_management', '<i class=\"feather icon-slack\"></i>', 0, '2022-12-28 12:28:43', NULL),
(3, 'Cash Management', 'cash_management', '<i class=\"feather icon-briefcase\"></i>', 2, '2022-12-30 12:11:37', NULL),
(4, 'HSN Management', 'hsn_management', '<i class=\"feather icon-settings\"></i>', 0, '2023-01-04 10:56:34', NULL),
(5, 'Report Management', 'report_category', '<i class=\"feather icon-file-text\"></i>', 0, '2023-01-04 13:00:56', NULL),
(6, 'Vehicle Management', 'vehicle_management', '<i class=\"fas fa-shuttle-van\"></i>', 0, '2023-01-09 11:21:20', NULL),
(7, 'Settings', 'settings', '<i class=\"feather icon-settings\"></i>', 0, '2023-01-12 08:46:08', NULL),
(8, 'Master', 'master', '<i class=\"feather icon-settings\"></i>', 0, '2023-01-12 08:46:08', NULL),
(9, 'Profit / Loss Analysis', 'profit_loss', '<i class=\"feather icon-activity\"></i>', 0, '2023-01-12 08:46:08', NULL),
(24, 'Google Login', 'google_login', '<i class=\"feather icon-log-in\"></i>', 0, '2023-01-12 08:46:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_inner_menu`
--

CREATE TABLE `navigation_inner_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navigation_id` int(11) NOT NULL,
  `inner_menu` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_inner_menu`
--

INSERT INTO `navigation_inner_menu` (`id`, `navigation_id`, `inner_menu`, `slug`, `flag`, `created_at`, `updated_at`) VALUES
(1, 1, 'User', 'user', 0, NULL, NULL),
(2, 2, 'Category', 'category', 0, '2022-12-28 12:29:59', NULL),
(3, 2, 'Sub Category', 'sub_category', 0, '2022-12-28 12:29:59', NULL),
(4, 2, 'Sub Sub Category', 'sub_sub_category', 0, '2022-12-28 12:29:59', NULL),
(5, 2, 'Product', 'product', 0, '2023-01-02 14:09:25', NULL),
(6, 5, 'Expense Account', 'expense_account', 0, '2023-01-04 13:19:39', NULL),
(7, 5, 'Sale', 'sale', 0, '2023-01-04 13:19:39', NULL),
(8, 5, 'Rental Truck', 'rental_truck', 0, '2023-01-04 13:19:39', NULL),
(9, 6, 'Vehicle List', 'vehicle_list', 0, NULL, NULL),
(11, 20, 'List', 'list', 0, NULL, NULL),
(12, 8, 'Client', 'client', 0, '2023-03-13 05:38:54', NULL),
(13, 8, 'Service type', 'service_type', 0, '2023-03-13 05:38:54', NULL),
(14, 5, 'Cash Report', 'cash_report', 0, NULL, NULL),
(15, 8, 'Site', 'site', 0, '2023-03-13 05:38:54', NULL),
(16, 5, 'Transpotation Service', 'transport_service', 0, '2023-04-02 18:30:00', NULL),
(17, 9, 'Expense & Sale P/L', 'expense_sale_pl', 2, '2023-03-13 05:38:54', NULL),
(18, 9, 'Sale P/L', 'sale_pl', 2, '2023-03-13 05:38:54', NULL),
(19, 9, 'Rental Truck P/L', 'rental_truck_pl', 2, '2023-03-13 05:38:54', NULL),
(20, 9, 'Cash Report P/L', 'cash_report_pl', 2, '2023-03-13 05:38:54', NULL),
(21, 9, 'Transpotation P/L', 'transpotation_pl', 2, '2023-03-13 05:38:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `vendor_url` varchar(80) NOT NULL,
  `offer_name` varchar(500) NOT NULL,
  `offer_by_name` varchar(55) NOT NULL,
  `offer_by_id` int(55) NOT NULL,
  `flat_dis_amount` int(55) NOT NULL,
  `flat` varchar(55) NOT NULL,
  `flat_id` int(11) DEFAULT NULL,
  `per_dis_amt` int(55) NOT NULL,
  `per_dissount` varchar(55) NOT NULL,
  `percentage_id` int(11) DEFAULT NULL,
  `flat_cat_desc` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `end_date` varchar(15) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `vendor_url`, `offer_name`, `offer_by_name`, `offer_by_id`, `flat_dis_amount`, `flat`, `flat_id`, `per_dis_amt`, `per_dissount`, `percentage_id`, `flat_cat_desc`, `created_by`, `start_date`, `end_date`, `flag`) VALUES
(5, 'orangeapes.com', 'sub test123', 'Product', 1, 0, '', NULL, 11, 'Product Per', 2, 'brand test', 0, '2022-05-25', '2022-05-29', 0),
(9, 'orangeapes.com', 'subtest1', 'Sub Category', 1, 100, 'Category Flat', 1, 0, '', 0, 'ndsfkd', 0, '2022-05-25', '2022-05-27', 0),
(14, 'orangeapes.com', 'test3br', 'Brand', 1, 10, 'Brand Flat', 1, 0, '', 0, 'hello', 0, '2022-05-26', '2022-05-11', 0),
(15, 'orangeapes.com', 'dsfs', 'Brand', 1, 121, 'Brand Flat', 1, 0, '', 0, 'cvxcvxc', 0, '2022-05-27', '2022-05-28', 0),
(16, 'orangeapes.com', 'w', 'Brand', 1, 0, 'Brand Flat', 1, 0, '', 0, 'dss', 0, '2022-05-26', '2022-05-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `vendor_url` varchar(155) NOT NULL,
  `title` varchar(155) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` longtext DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `admin_id`, `vendor_url`, `title`, `type`, `value`, `flag`, `created_at`, `updated_at`) VALUES
(1, 12, 'http://127.0.0.1:8000/', '', 'about', '<p>test sdcdcsdf cxcZXcxz</p>', 0, '2023-04-07 10:21:48', '2023-04-11 23:41:56'),
(6, 12, 'http://127.0.0.1:8000/', 'Terms & Condition', 'about', '<p>sajdjhasdadh asdsak djskhjksc ids cjsd cjd cjkd</p>', 0, '2023-04-08 05:36:32', '2023-04-26 01:22:23'),
(7, 12, 'http://127.0.0.1:8000/', 'privacy policy', 'Privacy_Policy', '<p>privacy test</p>', 0, '2023-04-08 07:37:24', '2023-04-26 01:31:13'),
(8, 12, 'http://127.0.0.1:8000/', 'Refund Policy', 'Refund_Policy', '<p>Refund&nbsp;</p>', 0, '2023-04-08 10:44:39', '2023-04-26 01:39:54'),
(9, 12, 'http://127.0.0.1:8000/', 'faqs test', 'faqs', '<p>faqs</p>', 0, '2023-04-08 11:11:20', '2023-04-26 01:41:37'),
(10, 1, '', '', 'contact_address', 'wkIvL1QlQ2', 0, '2023-04-17 13:47:36', '2023-04-17 13:47:36'),
(11, NULL, 'http://127.0.0.1:8000/', 'test', 'Terms_condition', '<p>test</p>', 0, '2023-04-26 06:47:08', '2023-04-26 01:19:25'),
(12, NULL, 'axesell.com', 'test test', 'Terms_condition', '<p>tests asda asd&nbsp;</p>', 0, '2023-04-26 11:25:37', '2023-04-26 11:25:37'),
(13, NULL, 'axesell.com', 'privacy polic1', 'Privacy_Policy', '<p>privacy policy 1</p>', 0, '2023-04-26 11:29:52', '2023-04-26 06:00:01'),
(14, NULL, 'axesell.com', 'refund', 'Refund_Policy', '<p>refund</p>', 0, '2023-04-26 11:41:45', '2023-04-26 06:13:37'),
(15, NULL, 'axesell.com', 'faqs', 'faqs', '<p>faqs</p>', 0, '2023-04-26 11:42:54', '2023-04-26 06:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `code` varchar(150) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `sub_cat_icon` varchar(255) NOT NULL,
  `metatitle` varchar(150) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metatags` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cate_id`, `code`, `title`, `sub_cat_icon`, `metatitle`, `metakey`, `metatags`, `description`, `flag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, '0', 'himanshu', '1680520983.PNG', 'kokosdas', 'kokodasdas', 'asdasd', 'okoksadasda', 0, 'himanshu', '2023-03-31 09:18:23', '2023-04-03 11:34:51'),
(2, 2, '0', 'himanshu', '1680254303.png', 'kokosdasd', 'kokoasdas', 'asdasdas', 'okokasdas', 0, 'himanshu', '2023-03-31 09:18:23', '2023-04-04 13:15:29'),
(3, 10, '0', 'jijijiji', '1680254398.png', 'kjijij', 'ijiji', 'fgsdjhgfsdhgf', 'jijiji', 0, 'jijijiji', '2023-03-31 09:19:58', '2023-04-05 06:18:10'),
(4, 10, '0', 'jijijiji', '1680254399.png', 'kjijij', 'ijiji', 'hsdfhskjfhksjdh', 'jijiji', 1, 'jijijiji', '2023-03-31 09:19:59', '2023-04-05 05:51:24'),
(5, 5, '0', 'himanshu', '1680254579.png', 'asdass', 'adasas', '', 'd', 0, 'himanshu', '2023-03-31 09:22:59', '2023-04-03 05:56:06'),
(6, 6, '0', 'himanshu', '1680254579.png', 'asdasstest', 'test', 'test', 'test', 0, 'himanshu', '2023-03-31 09:22:59', '2023-04-03 05:58:35'),
(7, 7, '0', 'ravi', '1680254692.png', 'ravi', 'ravi', 'ravi', 'ravi', 1, 'ravi', '2023-03-31 09:24:52', '2023-04-04 13:09:48'),
(8, 11, '0', 'Test Cat 2', '1680521751.PNG', 'Test Cat', 'Test Cat', 'Test Cat', 'Test Cat', 0, 'test-cat-2', '2023-04-03 11:35:51', '2023-04-05 06:20:40'),
(9, 11, '0', 'sdaasdasd', '1680610575.PNG', 'zXCZXC', 'czXC', 'xzcZXC', 'zxczXC', 1, 'sdaasdasd', '2023-04-04 12:16:15', '2023-04-12 08:01:14'),
(10, 12, '0', 'raju', '1682494330.png', 'sdjfk', 'sdfhjkashd', 'akasjdf', 'asdfkhksj', 0, 'raju', '2023-04-26 07:32:10', '2023-04-26 07:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_catrgory`
--

CREATE TABLE `sub_sub_catrgory` (
  `id` int(11) NOT NULL,
  `sub_cate_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` varchar(150) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `sub_cat_icon` varchar(255) NOT NULL,
  `metatitle` varchar(150) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metatags` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_sub_catrgory`
--

INSERT INTO `sub_sub_catrgory` (`id`, `sub_cate_id`, `category_id`, `code`, `title`, `sub_cat_icon`, `metatitle`, `metakey`, `metatags`, `description`, `flag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '0', 'sda', '1680254611.png', 'sd', 'asdas', '', 'das', 1, 'sd', '2023-03-31 09:23:31', '2023-04-03 08:10:58'),
(2, 1, 0, '0', 'sda', '1680254611.png', 'sd', 'asdas', '', 'das', 0, 'sd', '2023-03-31 09:23:31', '2023-03-31 09:23:31'),
(3, 1, 0, '0', 'tsest', '1680254717.png', 'assd', 'a', '', 'asdsd', 0, 'tsest', '2023-03-31 09:25:17', '2023-03-31 09:25:17'),
(4, 7, 10, '0', 'sp singh', '1680584063.PNG', 'zX', 'testszZ', 'saSDzxZxz', 'testSDazx', 0, 'sp-singh', '2023-04-03 11:49:49', '2023-04-03 23:24:23'),
(5, 1, 11, '0', 'sub cat test342', '1680583828.PNG', 'asdaasdasd', 'sdasasdasd', 'asdasasdasd', 'sdsasadasd', 0, 'sub-cat-test342', '2023-04-04 04:41:43', '2023-04-03 23:20:28'),
(6, 7, 10, '0', 'yash singh', '1680584197.PNG', 'asdaszxc', 'dasdxc', 'daszx', 'asdasasx', 0, 'yash-singh', '2023-04-04 04:56:05', '2023-04-03 23:26:37'),
(7, 8, 8, '0', 'test', '1680584392.PNG', 'fsdfsd', 'fsdfsd', 'fsdfd', 'fsdfd', 0, 'test', '2023-04-04 04:59:52', '2023-04-05 06:22:25'),
(8, 8, 8, '0', 'czxczcxczZ', '1680672544.PNG', 'xczC', 'zcZXC', 'xczCz', 'zxcz', 1, 'czxczcxczz', '2023-04-05 05:29:04', '2023-04-05 06:22:03'),
(9, 10, 10, '0', 'himanshu', '1682494488.png', 'sadc', 'xzczzxczx', 'zxczxcx', 'sdacx', 0, 'himanshu', '2023-04-26 07:33:51', '2023-04-26 02:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `vendor_url` varchar(80) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(70) NOT NULL,
  `designation` varchar(70) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `vendor_url`, `image`, `name`, `designation`, `description`, `flag`, `created_at`, `updated_at`) VALUES
(3, 'http://127.0.0.1:8000/', '1681211732.Screenshot (4).png', 'kumar test', 'xjscbs', 'dscscd', 0, '2023-04-11 11:15:32', '2023-04-11 23:42:29'),
(4, 'http://127.0.0.1:8000/', '1681211732.p2.PNG', 'raj lumar', 'cdasd', 'ssd', 0, '2023-04-11 11:15:32', '2023-04-11 12:42:14'),
(5, 'http://127.0.0.1:8000/', '1681216362.Capture.PNG', 'dfhfjkhasdhf', 'sfkhjksdhfk', 'sdfjksdhf', 1, '2023-04-11 12:32:42', '2023-04-11 12:35:46'),
(6, 'http://127.0.0.1:8000/', '1681216977.Capture.PNG', 'testing report', 'testing', '3M69nwjHT5', 0, '2023-04-11 12:42:57', '2023-04-11 12:42:57'),
(7, 'http://127.0.0.1:8000/', '1681217048.p2.PNG', 'fhduhdubc', 'sdasas', 'dasdasdas', 0, '2023-04-11 12:44:08', '2023-04-11 07:15:00'),
(8, 'http://127.0.0.1:8000/', '1681217248.Screenshot (4).png', 'testing report', 'testing', 'SwHApjUpmn', 0, '2023-04-11 12:47:28', '2023-04-11 12:47:28'),
(9, 'http://127.0.0.1:8000/', '1681217376.Screenshot (3).png', 'testing report', 'testing', 'rZAmJd5bWQ', 0, '2023-04-11 12:49:36', '2023-04-11 12:49:36'),
(10, 'http://127.0.0.1:8000/', '1681218172.p2.PNG', 'sksdljasdkljflkasdd', 'sdjfaskdd', 'fnasjknfjksadn', 0, '2023-04-11 13:02:52', '2023-04-11 13:02:52'),
(11, 'http://127.0.0.1:8000/', '1681218251.p2.PNG', 'sksdljasdkljflkasdd', 'sdjfaskdd', 'fnasjknfjksadn', 0, '2023-04-11 13:04:11', '2023-04-11 13:04:11'),
(12, 'http://127.0.0.1:8000/', '1681218251.p1.PNG', 'test', 'main', 'stesg', 0, '2023-04-11 13:04:11', '2023-04-11 13:04:11'),
(13, 'http://127.0.0.1:8000/', '1681276382.Capture.PNG', 'postman', 'dsfsd', 'sdfds', 0, '2023-04-12 05:13:02', '2023-04-12 05:13:02'),
(14, 'http://127.0.0.1:8000/', '1681276387.Capture.PNG', 'postman', 'dsfsd', 'sdfds', 1, '2023-04-12 05:13:07', '2023-04-26 11:47:24'),
(15, 'http://127.0.0.1:8000/', '1682493430.Robust-Running-Shoes.jpg', 'ASDASD', 'SDAD', 'SDSAD', 1, '2023-04-26 07:17:10', '2023-04-26 11:47:29'),
(16, 'http://127.0.0.1:8000/', '1682493430.oil2.jpg', 'SADSAD', 'ASDASD', 'SADSASD', 0, '2023-04-26 07:17:10', '2023-04-26 07:17:10'),
(17, 'axesell.com', '1682509625.Screenshot (4).png', 'testing report', 'testing', 'AIhWqb9zb7', 0, '2023-04-26 11:47:05', '2023-04-26 11:47:05'),
(18, 'axesell.com', '1682509625.Screenshot (6).png', 'report', 'testing', 'Dh54IZlodA', 0, '2023-04-26 11:47:05', '2023-04-26 11:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu` varchar(10) NOT NULL,
  `nav_id` varchar(11) NOT NULL,
  `read_per` int(11) DEFAULT 0,
  `write_per` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `user_id`, `menu`, `nav_id`, `read_per`, `write_per`, `flag`) VALUES
(1, 25, 'main', '3', 1, 0, 0),
(2, 25, 'main', '7', 1, 0, 0),
(3, 25, 'inner', '2', 1, 0, 0),
(4, 25, 'inner', '5', 1, 0, 0),
(5, 25, 'inner', '14', 1, 0, 0),
(6, 25, 'inner', '13', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `vendor_url` varchar(155) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `role` varchar(55) DEFAULT NULL,
  `vendor_logo` varchar(250) DEFAULT NULL,
  `vendor_staff_image` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `c_name` varchar(60) DEFAULT NULL,
  `c_address` varchar(250) DEFAULT NULL,
  `c_gst` varchar(20) DEFAULT NULL,
  `fb_link` varchar(155) DEFAULT NULL,
  `twitter_link` varchar(155) DEFAULT NULL,
  `insta_link` varchar(155) DEFAULT NULL,
  `youtube_link` varchar(155) DEFAULT NULL,
  `website` varchar(155) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(55) DEFAULT NULL,
  `state` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL,
  `flag` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `distributor_id`, `vendor_url`, `name`, `mobile`, `address`, `role`, `vendor_logo`, `vendor_staff_image`, `favicon`, `c_name`, `c_address`, `c_gst`, `fb_link`, `twitter_link`, `insta_link`, `youtube_link`, `website`, `email`, `password`, `city`, `state`, `country`, `flag`, `created_at`, `updated_at`) VALUES
(6, 12, 'axesell.com', 'himanshu', 8976543210, '4Kx3a1AkzT', 'vendor', '1682574959.png', NULL, '1682575086.png', 'report', '9LXRY3tBEy', '06AATCA0110F1Z6', 'bJyUB03xhB', '9yaoyA5O9S', 'jtJNu51CLa', 'yh4MkHr5Ny', 'aSVkZFkKDC', 'surya@gmail.com', '$2y$10$Des2Ua0ENtJ2dHT5ueNT3.HCL5SN/7/.qCNcP0KJzBK.rteErDKIK', 'jksdklajflkjsd', 'XVDJstGZD', 'lkfjaklsdfjlks', 0, '2023-03-23 11:57:04', '2023-04-27 00:33:19'),
(26, 12, 'http://127.0.0.1:8000/', 'sanjeev', 8976543210, '1RXpSczahh', NULL, '1681287797.png', NULL, NULL, 'jfhsdjkhffhsdkfh', 'zXYbCrzzOf', '06AATCA0110F1Z6', '', NULL, NULL, NULL, NULL, 'czcfe@ebmg.com', '$2y$10$mazMd5ets2qjDOlXLPMGEe6guf3Zu5YrBi5HRQUUXX8EaP7EFGAEW', '', '', '', 1, '2023-04-12 08:23:17', '2023-04-19 04:40:49'),
(27, 12, 'http://127.0.0.1:8000/', 'rajkumar', 8976543210, 'gwlr3M4mia', NULL, '1681292825.png', NULL, NULL, 'jfhsdjkhffhsdkfh', 'VAeGMQSwn4', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'eueua@vfav.com', '$2y$10$HiP9ZE6ZMRNKEo3kweD6teIuJMVkNUfllAi0onvyZHraIn6oh0RHe', '', '', '', 1, '2023-04-12 09:47:05', '2023-04-19 04:40:47'),
(28, 12, 'http://127.0.0.1:8000/', 'khimesh pandit', 8976543210, 'IcyyGD8nzF', NULL, '1681293799.png', NULL, NULL, 'jfhsdjkhffhsdkfh', 'PwAwOLu7wR', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, '2ou3f@em9y.com', '$2y$10$kaFSkQtptZlfMsuAT8/ESuwQQMH4L.U4Sb1cYjdo1obZg6dLR3ryu', '', '', '', 1, '2023-04-12 10:03:19', '2023-04-19 04:40:44'),
(29, 12, 'http://127.0.0.1:8000/', 'back', 8976543210, '36cadPFYgE', NULL, '1681295315.png', NULL, NULL, 'jfhsdjkhffhsdkfh', 'LmSQPBfURZ', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'mail@himanshu.com', '$2y$10$R4qdTnjAm2M4CrnmWtHW1uBXh6/nScHeyyAOteDbQaHdVRe.oz7Ua', '', '', '', 1, '2023-04-12 10:28:35', '2023-04-19 04:40:40'),
(50, 1, NULL, 'backtoback', 8976543210, 'LhkvN8c6bA', NULL, '1681817751.milky-way-2695569_960_720.jpg', NULL, NULL, 'jfhsdjkhffhsdkfh', 'VM8jOmHzqO', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'test@gmail.com', '$2y$10$yl2CCgy/Vu6hhzQnRvKOjewg1NYJaPq0g0qFOXrs2HOm32SWvxTre', '', '', '', 1, '2023-04-18 11:35:51', '2023-04-19 04:41:00'),
(51, 1, '', 'Alfa', 8976543210, 'lk2VGpRDGT', NULL, '1681818259.milky-way-2695569_960_720.jpg', NULL, NULL, 'jfhsdjkhffhsdkfh', '50hsnEx8Aa', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'alfa@gmail.com', '$2y$10$CEwXOQ6Eqar1qTcb1rHIbOi/4M/hn/LZ1UqcNTFdZfhiOmGqoQOMG', '', '', '', 0, '2023-04-18 11:44:19', '2023-04-19 04:42:15'),
(52, 1, 'http://127.0.0.1:8000', 'tillu', 8976543210, '6PAFopphgs', 'vendor', '1681820532.jpg', NULL, NULL, 'jfhsdjkhffhsdkfh', 'NmceUAviri', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'alfa@gmail.com', '$2y$10$SPj7dr5u5sool2Z6KikrjeK920yCrRL85bZo4unZcl7Vuy47MyiEm', '', '', '', 2, '2023-04-18 11:54:56', '2023-04-18 12:24:58'),
(53, 44, 'http://127.0.0.1:8000', 'TATA', 8976543210, '6ZP01pUtBE', 'vendor', '1681905544.milky-way-2695569_960_720.jpg', NULL, NULL, 'jfhsdjkhffhsdkfh', '4SSGOjK2Ws', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'test@gmail.com', '$2y$10$FNFSSX4YLn7/5klWYFGwpuhSDhw0iOSLMVBqRQJjIr1AQWZLSOy6O', '', '', '', 0, '2023-04-19 11:59:04', '2023-04-21 00:21:44'),
(54, 44, 'http://127.0.0.1:8000', 'tsting', 9876543210, 'asdfsafsdfsd', 'vendor', 'uploads/vendor/202304201134icons8-edit-24.png', NULL, NULL, 'resffts', 'sadasdas', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'sdaad@gmail.com', '$2y$10$ZTqK1qg71nAlnj.1wTQ8/.3MquRPkwsnLMSkC7xvv0yszrOffH.1q', '', '', '', 0, '2023-04-20 06:04:46', '2023-04-20 06:04:46'),
(55, 44, 'http://127.0.0.1:8000', 'sadasd', 1234567890, 'dfdfasd', 'vendor', 'uploads/vendor/202304201140milky-way-2695569_960_720.jpg', NULL, NULL, 'asdadfsff', 'zxc', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'jk@gmail.com', '$2y$10$eUCXWuVx1TEDYK6uP5XY3O0Pth16iuzGPMUAOHimnrro61fxw3UfO', '', '', '', 0, '2023-04-20 06:10:50', '2023-04-22 11:46:04'),
(56, 1, 'http://127.0.0.1:8000', 'NewEntery', 8976543210, 'ZKWFfZC0fY', 'vendor', 'uploads/vendor/202304211027milky-way-2695569_960_720.jpg', NULL, NULL, 'jfhsdjkhffhsdkfh', '6lKgniDDei', '23AAVCA3963G1ZF', '', NULL, NULL, NULL, NULL, 'test@gmail.com', '$2y$10$BNFzn7gUwWmq6raPcSY5JeNt13pPtAL.MhhjKryIjL1/b7MKcJyly', '', '', '', 2, '2023-04-21 04:57:49', '2023-04-21 04:58:48'),
(57, NULL, 'axesell.com', 'sewwt', 123456790, NULL, 'vendor', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'ew786ryui', '$2y$10$03lBX0dEHEeuWwXNC8jHoOQxrJrAyuPMI8DtQS3InI5G7.U86VPzu', '', '', '', 0, '2023-04-26 09:53:46', '2023-04-26 10:52:03'),
(58, NULL, 'axesell.com', 'sewwt', 123456790, NULL, 'vendor', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'surya1@gmail.com', '$2y$10$c1sleLlukMlPCfXSXh6ZMuk3z5D8wVmragetTMDx0cDS5ohpCzru.', '', '', '', 0, '2023-04-26 11:22:32', '2023-04-27 06:05:45'),
(59, NULL, 'axesell.com', 'sewwt', 123456790, NULL, 'tester', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sp@gmail.com', '$2y$10$oUxqoOp30ooKGd4koGJ3d.V/sTjm8Mxv2RhzUbpsc1lPedVy2vghC', NULL, NULL, NULL, 0, '2023-04-27 06:09:07', '2023-04-27 06:09:07'),
(60, NULL, 'axesell.com', 'sewwt', 123456790, NULL, 'tester', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'spseo@gmail.com', '$2y$10$pehSWltOua.6hIYB6/NSheYC33vYonCkOt7SJzzQlPnpdXUbjzMli', NULL, NULL, NULL, 0, '2023-04-27 06:10:36', '2023-04-27 06:10:36'),
(61, NULL, 'axesell.com', 'sewwt', 123456790, NULL, 'tester', NULL, 'uploads/staff/202304271217Screenshot (6).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'spse@gmail.com', '$2y$10$/QdaXgKr73lE/lY7tOZnuO.u0gtsju.tAnko2IfwbLbi4jb3wroVW', NULL, NULL, NULL, 0, '2023-04-27 06:47:02', '2023-04-27 07:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_staff_access`
--

CREATE TABLE `vendor_staff_access` (
  `v_staff_access_id` int(11) NOT NULL,
  `vendor_staff_id` int(11) NOT NULL,
  `module` int(11) NOT NULL DEFAULT 0,
  `read` int(55) DEFAULT 0,
  `write_permission` int(55) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updared_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_staff_access`
--

INSERT INTO `vendor_staff_access` (`v_staff_access_id`, `vendor_staff_id`, `module`, `read`, `write_permission`, `flag`, `created_at`, `updared_at`) VALUES
(1, 49, 1, 1, 1, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(2, 49, 2, 0, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(3, 49, 3, 1, 1, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(4, 49, 4, 1, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(5, 49, 5, 0, 1, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(6, 49, 6, 1, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(7, 49, 7, 0, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(8, 49, 9, 0, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(9, 49, 10, 0, 0, 0, '2023-04-14 10:59:57', '2023-04-14 10:59:57'),
(10, 58, 1, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(11, 58, 2, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(12, 58, 3, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(13, 58, 4, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(14, 58, 5, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(15, 58, 6, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(16, 58, 7, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(17, 58, 9, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(18, 58, 10, 0, 0, 0, '2023-04-26 11:22:32', '2023-04-26 11:22:32'),
(19, 60, 1, 0, 0, 0, '2023-04-27 06:10:36', '2023-04-27 06:10:36'),
(20, 60, 2, 0, 0, 0, '2023-04-27 06:10:36', '2023-04-27 06:10:36'),
(21, 60, 3, 1, 0, 0, '2023-04-27 06:10:36', '2023-04-27 06:10:36'),
(22, 60, 4, 1, 0, 0, '2023-04-27 06:10:36', '2023-04-27 06:10:36'),
(23, 60, 5, 1, 1, 0, '2023-04-27 06:10:37', '2023-04-27 06:10:37'),
(24, 60, 6, 1, 0, 0, '2023-04-27 06:10:37', '2023-04-27 06:10:37'),
(25, 60, 7, 0, 1, 0, '2023-04-27 06:10:37', '2023-04-27 06:10:37'),
(26, 60, 9, 0, 0, 0, '2023-04-27 06:10:37', '2023-04-27 06:10:37'),
(27, 60, 10, 0, 1, 0, '2023-04-27 06:10:37', '2023-04-27 06:10:37'),
(28, 61, 1, 0, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(29, 61, 2, 1, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(30, 61, 3, 0, 1, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(31, 61, 4, 0, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(32, 61, 5, 1, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(33, 61, 6, 0, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(34, 61, 7, 0, 1, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(35, 61, 9, 0, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02'),
(36, 61, 10, 1, 0, 0, '2023-04-27 06:47:02', '2023-04-27 06:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `webdetails`
--

CREATE TABLE `webdetails` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_url` varchar(50) NOT NULL,
  `favicon` varchar(300) NOT NULL,
  `thumb_favicon` varchar(500) NOT NULL,
  `thumb_logo` varchar(500) NOT NULL,
  `logo` text NOT NULL,
  `title` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(55) NOT NULL,
  `terms` text NOT NULL,
  `privacy` text NOT NULL,
  `return` text NOT NULL,
  `refund` text NOT NULL,
  `disclaimer` text NOT NULL,
  `wallet_policy` text NOT NULL,
  `faqs` text NOT NULL,
  `about` text NOT NULL,
  `fb_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `insta_link` text NOT NULL,
  `youtube_link` text NOT NULL,
  `minimum_amount` int(11) NOT NULL,
  `shipping_charge` int(11) NOT NULL,
  `gst_number` text NOT NULL,
  `city` varchar(55) NOT NULL,
  `country` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `twakto` varchar(1500) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_bar`
--
ALTER TABLE `navigation_bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_inner_menu`
--
ALTER TABLE `navigation_inner_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_catrgory`
--
ALTER TABLE `sub_sub_catrgory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_staff_access`
--
ALTER TABLE `vendor_staff_access`
  ADD PRIMARY KEY (`v_staff_access_id`);

--
-- Indexes for table `webdetails`
--
ALTER TABLE `webdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `navigation_bar`
--
ALTER TABLE `navigation_bar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `navigation_inner_menu`
--
ALTER TABLE `navigation_inner_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_sub_catrgory`
--
ALTER TABLE `sub_sub_catrgory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `vendor_staff_access`
--
ALTER TABLE `vendor_staff_access`
  MODIFY `v_staff_access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `webdetails`
--
ALTER TABLE `webdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
