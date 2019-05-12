-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 03:37 PM
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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(2, 'browse_bread', NULL, '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(3, 'browse_database', NULL, '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(4, 'browse_media', NULL, '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(5, 'browse_compass', NULL, '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(6, 'browse_menus', 'menus', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(7, 'read_menus', 'menus', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(8, 'edit_menus', 'menus', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(9, 'add_menus', 'menus', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(10, 'delete_menus', 'menus', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(11, 'browse_roles', 'roles', '2019-05-12 09:27:09', '2019-05-12 09:27:09'),
(12, 'read_roles', 'roles', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(13, 'edit_roles', 'roles', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(14, 'add_roles', 'roles', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(15, 'delete_roles', 'roles', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(16, 'browse_users', 'users', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(17, 'read_users', 'users', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(18, 'edit_users', 'users', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(19, 'add_users', 'users', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(20, 'delete_users', 'users', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(21, 'browse_settings', 'settings', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(22, 'read_settings', 'settings', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(23, 'edit_settings', 'settings', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(24, 'add_settings', 'settings', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(25, 'delete_settings', 'settings', '2019-05-12 09:27:10', '2019-05-12 09:27:10'),
(26, 'browse_hooks', NULL, '2019-05-12 09:27:13', '2019-05-12 09:27:13'),
(32, 'browse_shipping_services', 'shipping_services', '2019-05-12 10:29:24', '2019-05-12 10:29:24'),
(33, 'read_shipping_services', 'shipping_services', '2019-05-12 10:29:24', '2019-05-12 10:29:24'),
(34, 'edit_shipping_services', 'shipping_services', '2019-05-12 10:29:24', '2019-05-12 10:29:24'),
(35, 'add_shipping_services', 'shipping_services', '2019-05-12 10:29:24', '2019-05-12 10:29:24'),
(36, 'delete_shipping_services', 'shipping_services', '2019-05-12 10:29:24', '2019-05-12 10:29:24'),
(37, 'browse_user_details', 'user_details', '2019-05-12 10:31:21', '2019-05-12 10:31:21'),
(38, 'read_user_details', 'user_details', '2019-05-12 10:31:21', '2019-05-12 10:31:21'),
(39, 'edit_user_details', 'user_details', '2019-05-12 10:31:21', '2019-05-12 10:31:21'),
(40, 'add_user_details', 'user_details', '2019-05-12 10:31:21', '2019-05-12 10:31:21'),
(41, 'delete_user_details', 'user_details', '2019-05-12 10:31:21', '2019-05-12 10:31:21'),
(42, 'browse_shipping_offices', 'shipping_offices', '2019-05-12 10:32:51', '2019-05-12 10:32:51'),
(43, 'read_shipping_offices', 'shipping_offices', '2019-05-12 10:32:51', '2019-05-12 10:32:51'),
(44, 'edit_shipping_offices', 'shipping_offices', '2019-05-12 10:32:51', '2019-05-12 10:32:51'),
(45, 'add_shipping_offices', 'shipping_offices', '2019-05-12 10:32:51', '2019-05-12 10:32:51'),
(46, 'delete_shipping_offices', 'shipping_offices', '2019-05-12 10:32:51', '2019-05-12 10:32:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
