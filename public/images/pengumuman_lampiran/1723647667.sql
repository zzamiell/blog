-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 12, 2024 at 05:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `digilog_username` varchar(255) DEFAULT NULL,
  `digilog_password` varchar(255) DEFAULT NULL,
  `fms_token` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `last_login` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) NOT NULL DEFAULT 'Asia/Jakarta',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `max_speed_limit` int(11) DEFAULT NULL,
  `unilever_token` text DEFAULT NULL,
  `app_version` int(11) NOT NULL DEFAULT 1,
  `last_sync` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `digilog_username`, `digilog_password`, `fms_token`, `role`, `last_login`, `timezone`, `remember_token`, `created_at`, `updated_at`, `max_speed_limit`, `unilever_token`, `app_version`, `last_sync`) VALUES
(1, 'Admin', 'info@transtrack.id', NULL, '$2y$10$.9M0Xzp0krtOjAE/C79WUeYam28rXqhOD8LWelzMc45UNUWjLbdlO', 'COZAbZP05dcq6mUM65y57D9HOpf8u1Di2hpqpIwWMRmL3CrQMYASF4eUR4eYSte6ynm8rXst0kQVc3MXoVxKNIBGuD8462VlSspc', '', '', NULL, 'admin', NULL, 'Asia/Jakarta', 'Ng6nJlHSps2shHrSE1ESRLbIihk7IYGcz5gD8D5EMGTi12VKO4J24UzdcAN2', '2024-06-20 06:40:06', '2024-06-20 06:40:06', NULL, NULL, 1, NULL),
(2, 'ARK Logistics & Transportation', 'ark@transtrack.id', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'P93KGohKaCiZXJigKUSNhhArhzCfyWSDGsHLvhTEH7TU2witxkZ1wUy2uHxep5yw7PdZYioNPiPJhW5YVeOtj5r21lVQMNY24Uy2', 'ARK', '29705bc5f25b00b3fe9b4e1579d72727', '$2y$10$83VB7sW6vqHObou3EAIhOe9FA65u5CnfJmlpEqVqPTA2pAP8kwQkS', 'user', '2024-08-04T14:48:35.722Z', 'Asia/Jakarta', '5p7S7BVHFsL1Jcu6jCPw770yK2OXZ6t7QRVoKChv9NSxfBjXlsCdeg9ZXRtS', '2024-06-20 06:41:59', '2024-08-07 00:17:12', 80, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy54bWxzb2FwLm9yZy93cy8yMDA1LzA1L2lkZW50aXR5L2NsYWltcy9zaWQiOiIzIiwidW5pcXVlX25hbWUiOiJBUksiLCJuYmYiOjE3MjI3ODI5MDgsImV4cCI6MTcyMjg2OTMwOCwiaWF0IjoxNzIyNzgyOTA4fQ.IZlCfz2cDMbSJqPpjONgy7MKWmTxSp0dV1tY3oaCgOc', 2, '2024-08-07 14:17:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
