-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 03:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siffa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 1, 'username', 'text', 'Username', 0, 1, 1, 1, 1, 1, '{}', 3),
(23, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(35, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(36, 5, 'shipping_methods', 'text', 'Shipping Methods', 1, 1, 1, 1, 1, 1, '{}', 3),
(37, 5, 'shipping_modes', 'text', 'Shipping Modes', 1, 1, 1, 1, 1, 1, '{}', 4),
(38, 5, 'sources_destinations', 'text', 'Sources Destinations', 1, 1, 1, 1, 1, 1, '{}', 5),
(39, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 6),
(40, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(41, 5, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(42, 5, 'shipping_service_belongsto_user_relationship', 'relationship', 'User', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"username\",\"pivot_table\":\"application_details\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(43, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(44, 6, 'fullname', 'text', 'Fullname', 0, 1, 1, 1, 1, 1, '{}', 4),
(45, 6, 'father_name', 'text', 'Father Name', 0, 1, 1, 1, 1, 1, '{}', 5),
(46, 6, 'mother_name', 'text', 'Mother Name', 0, 1, 1, 1, 1, 1, '{}', 6),
(47, 6, 'phone_number', 'text', 'Phone Number', 0, 1, 1, 1, 1, 1, '{}', 7),
(48, 6, 'mobile_number', 'text', 'Mobile Number', 0, 1, 1, 1, 1, 1, '{}', 8),
(49, 6, 'website', 'text', 'Website', 0, 1, 1, 1, 1, 1, '{}', 9),
(50, 6, 'date_of_birth', 'text', 'Date Of Birth', 0, 1, 1, 1, 1, 1, '{}', 10),
(51, 6, 'place_of_birth', 'text', 'Place Of Birth', 0, 1, 1, 1, 1, 1, '{}', 11),
(52, 6, 'record', 'text', 'Record', 0, 1, 1, 1, 1, 1, '{}', 12),
(53, 6, 'nationality', 'text', 'Nationality', 0, 1, 1, 1, 1, 1, '{}', 13),
(54, 6, 'address', 'text', 'Address', 0, 1, 1, 1, 1, 1, '{}', 14),
(55, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 15),
(56, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(57, 6, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 6, 'user_detail_belongsto_user_relationship', 'relationship', 'User', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"username\",\"pivot_table\":\"application_details\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(59, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(60, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(61, 7, 'addresses', 'text', 'Addresses', 1, 1, 1, 1, 1, 1, '{}', 5),
(62, 7, 'shipping_services', 'text', 'Shipping Services', 1, 1, 1, 1, 1, 1, '{}', 6),
(63, 7, 'position_title', 'text', 'Position Title', 1, 1, 1, 1, 1, 1, '{}', 7),
(64, 7, 'chamber_of_commerce', 'number', 'Chamber Of Commerce', 1, 1, 1, 1, 1, 1, '{}', 8),
(65, 7, 'commerical_registry', 'number', 'Commerical Registry', 1, 1, 1, 1, 1, 1, '{}', 9),
(66, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 10),
(67, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(68, 7, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(69, 7, 'shipping_office_belongsto_user_relationship', 'relationship', 'User', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"username\",\"pivot_table\":\"application_details\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
