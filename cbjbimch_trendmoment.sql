-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 12:42 AM
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
-- Database: `cbjbimch_trendmoment`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Ayam Bakar', '2021-12-31 17:00:00', NULL),
(2, 'Ayam Penyet', '2021-12-31 17:00:00', NULL),
(3, 'Ayam Goreng', '2021-12-31 17:00:00', NULL),
(4, 'Sop Ayam', '2021-12-31 17:00:00', NULL),
(5, 'Ayam Geprek', '2021-12-31 17:00:00', NULL),
(6, 'Tahu', '2021-12-31 17:00:00', NULL),
(7, 'Tempe', '2021-12-31 17:00:00', NULL),
(8, 'Ati Ampela', '2021-12-31 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang_tahun_bulan`
--

CREATE TABLE `barang_tahun_bulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `satuan` varchar(128) NOT NULL,
  `tahun_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bulan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang_tahun_bulan`
--

INSERT INTO `barang_tahun_bulan` (`id`, `barang_id`, `satuan`, `tahun_id`, `bulan_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(201, 1, 'Porsi', 2, 6, 155, '2023-05-31 17:00:00', NULL),
(202, 2, 'Porsi', 2, 6, 175, '2023-05-31 17:00:00', NULL),
(203, 3, 'Porsi', 2, 6, 195, '2023-05-31 17:00:00', NULL),
(204, 4, 'Porsi', 2, 6, 110, '2023-05-31 17:00:00', NULL),
(205, 5, 'Porsi', 2, 6, 125, '2023-05-31 17:00:00', NULL),
(206, 6, 'Porsi', 2, 6, 85, '2023-05-31 17:00:00', NULL),
(207, 7, 'Porsi', 2, 6, 80, '2023-05-31 17:00:00', NULL),
(208, 8, 'Porsi', 2, 6, 65, '2023-05-31 17:00:00', NULL),
(209, 1, 'Porsi', 2, 7, 165, '2023-06-30 17:00:00', NULL),
(210, 2, 'Porsi', 2, 7, 185, '2023-06-30 17:00:00', NULL),
(211, 3, 'Porsi', 2, 7, 205, '2023-06-30 17:00:00', NULL),
(212, 4, 'Porsi', 2, 7, 120, '2023-06-30 17:00:00', NULL),
(213, 5, 'Porsi', 2, 7, 135, '2023-06-30 17:00:00', NULL),
(214, 6, 'Porsi', 2, 7, 90, '2023-06-30 17:00:00', NULL),
(215, 7, 'Porsi', 2, 7, 75, '2023-06-30 17:00:00', NULL),
(216, 8, 'Porsi', 2, 7, 70, '2023-06-30 17:00:00', NULL),
(217, 1, 'Porsi', 2, 8, 170, '2023-07-31 17:00:00', NULL),
(218, 2, 'Porsi', 2, 8, 180, '2023-07-31 17:00:00', NULL),
(219, 3, 'Porsi', 2, 8, 210, '2023-07-31 17:00:00', NULL),
(220, 4, 'Porsi', 2, 8, 115, '2023-07-31 17:00:00', NULL),
(221, 5, 'Porsi', 2, 8, 130, '2023-07-31 17:00:00', NULL),
(222, 6, 'Porsi', 2, 8, 88, '2023-07-31 17:00:00', NULL),
(223, 7, 'Porsi', 2, 8, 78, '2023-07-31 17:00:00', NULL),
(224, 8, 'Porsi', 2, 8, 68, '2023-07-31 17:00:00', NULL),
(225, 1, 'Porsi', 2, 9, 160, '2023-08-31 17:00:00', NULL),
(226, 2, 'Porsi', 2, 9, 190, '2023-08-31 17:00:00', NULL),
(227, 3, 'Porsi', 2, 9, 200, '2023-08-31 17:00:00', NULL),
(228, 4, 'Porsi', 2, 9, 125, '2023-08-31 17:00:00', NULL),
(229, 5, 'Porsi', 2, 9, 140, '2023-08-31 17:00:00', NULL),
(230, 6, 'Porsi', 2, 9, 92, '2023-08-31 17:00:00', NULL),
(231, 7, 'Porsi', 2, 9, 82, '2023-08-31 17:00:00', NULL),
(232, 8, 'Porsi', 2, 9, 72, '2023-08-31 17:00:00', NULL),
(233, 1, 'Porsi', 2, 10, 175, '2023-09-30 17:00:00', NULL),
(234, 2, 'Porsi', 2, 10, 195, '2023-09-30 17:00:00', NULL),
(235, 3, 'Porsi', 2, 10, 215, '2023-09-30 17:00:00', NULL),
(236, 4, 'Porsi', 2, 10, 130, '2023-09-30 17:00:00', NULL),
(237, 5, 'Porsi', 2, 10, 145, '2023-09-30 17:00:00', NULL),
(238, 6, 'Porsi', 2, 10, 95, '2023-09-30 17:00:00', NULL),
(239, 7, 'Porsi', 2, 10, 85, '2023-09-30 17:00:00', NULL),
(240, 8, 'Porsi', 2, 10, 75, '2023-09-30 17:00:00', NULL),
(241, 1, 'Porsi', 2, 11, 180, '2023-10-31 17:00:00', NULL),
(242, 2, 'Porsi', 2, 11, 185, '2023-10-31 17:00:00', NULL),
(243, 3, 'Porsi', 2, 11, 220, '2023-10-31 17:00:00', NULL),
(244, 4, 'Porsi', 2, 11, 135, '2023-10-31 17:00:00', NULL),
(245, 5, 'Porsi', 2, 11, 150, '2023-10-31 17:00:00', NULL),
(246, 6, 'Porsi', 2, 11, 97, '2023-10-31 17:00:00', NULL),
(247, 7, 'Porsi', 2, 11, 88, '2023-10-31 17:00:00', NULL),
(248, 8, 'Porsi', 2, 11, 78, '2023-10-31 17:00:00', NULL),
(249, 1, 'Porsi', 2, 12, 185, '2023-11-30 17:00:00', NULL),
(250, 2, 'Porsi', 2, 12, 195, '2023-11-30 17:00:00', NULL),
(251, 3, 'Porsi', 2, 12, 225, '2023-11-30 17:00:00', NULL),
(252, 4, 'Porsi', 2, 12, 140, '2023-11-30 17:00:00', NULL),
(253, 5, 'Porsi', 2, 12, 155, '2023-11-30 17:00:00', NULL),
(254, 6, 'Porsi', 2, 12, 100, '2023-11-30 17:00:00', NULL),
(255, 7, 'Porsi', 2, 12, 90, '2023-11-30 17:00:00', NULL),
(256, 8, 'Porsi', 2, 12, 80, '2023-11-30 17:00:00', NULL),
(257, 1, 'Porsi', 3, 1, 190, '2023-12-31 17:00:00', NULL),
(258, 2, 'Porsi', 3, 1, 200, '2023-12-31 17:00:00', NULL),
(259, 3, 'Porsi', 3, 1, 230, '2023-12-31 17:00:00', NULL),
(260, 4, 'Porsi', 3, 1, 145, '2023-12-31 17:00:00', NULL),
(261, 5, 'Porsi', 3, 1, 160, '2023-12-31 17:00:00', NULL),
(262, 6, 'Porsi', 3, 1, 102, '2023-12-31 17:00:00', NULL),
(263, 7, 'Porsi', 3, 1, 92, '2023-12-31 17:00:00', NULL),
(264, 8, 'Porsi', 3, 1, 82, '2023-12-31 17:00:00', NULL),
(265, 1, 'Porsi', 3, 2, 195, '2024-01-31 17:00:00', NULL),
(266, 2, 'Porsi', 3, 2, 205, '2024-01-31 17:00:00', NULL),
(267, 3, 'Porsi', 3, 2, 235, '2024-01-31 17:00:00', NULL),
(268, 4, 'Porsi', 3, 2, 150, '2024-01-31 17:00:00', NULL),
(269, 5, 'Porsi', 3, 2, 165, '2024-01-31 17:00:00', NULL),
(270, 6, 'Porsi', 3, 2, 105, '2024-01-31 17:00:00', NULL),
(271, 7, 'Porsi', 3, 2, 95, '2024-01-31 17:00:00', NULL),
(272, 8, 'Porsi', 3, 2, 85, '2024-01-31 17:00:00', NULL),
(273, 1, 'Porsi', 3, 3, 200, '2024-02-29 17:00:00', NULL),
(274, 2, 'Porsi', 3, 3, 210, '2024-02-29 17:00:00', NULL),
(275, 3, 'Porsi', 3, 3, 240, '2024-02-29 17:00:00', NULL),
(276, 4, 'Porsi', 3, 3, 155, '2024-02-29 17:00:00', NULL),
(277, 5, 'Porsi', 3, 3, 170, '2024-02-29 17:00:00', NULL),
(278, 6, 'Porsi', 3, 3, 108, '2024-02-29 17:00:00', NULL),
(279, 7, 'Porsi', 3, 3, 98, '2024-02-29 17:00:00', NULL),
(280, 8, 'Porsi', 3, 3, 88, '2024-02-29 17:00:00', NULL),
(281, 1, 'Porsi', 3, 4, 205, '2024-03-31 17:00:00', NULL),
(282, 2, 'Porsi', 3, 4, 215, '2024-03-31 17:00:00', NULL),
(283, 3, 'Porsi', 3, 4, 245, '2024-03-31 17:00:00', NULL),
(284, 4, 'Porsi', 3, 4, 160, '2024-03-31 17:00:00', NULL),
(285, 5, 'Porsi', 3, 4, 175, '2024-03-31 17:00:00', NULL),
(286, 6, 'Porsi', 3, 4, 110, '2024-03-31 17:00:00', NULL),
(287, 7, 'Porsi', 3, 4, 100, '2024-03-31 17:00:00', NULL),
(288, 8, 'Porsi', 3, 4, 90, '2024-03-31 17:00:00', NULL),
(289, 1, 'Porsi', 3, 5, 210, '2024-04-30 17:00:00', NULL),
(290, 2, 'Porsi', 3, 5, 220, '2024-04-30 17:00:00', NULL),
(291, 3, 'Porsi', 3, 5, 250, '2024-04-30 17:00:00', NULL),
(292, 4, 'Porsi', 3, 5, 165, '2024-04-30 17:00:00', NULL),
(293, 5, 'Porsi', 3, 5, 180, '2024-04-30 17:00:00', NULL),
(294, 6, 'Porsi', 3, 5, 115, '2024-04-30 17:00:00', NULL),
(295, 7, 'Porsi', 3, 5, 102, '2024-04-30 17:00:00', NULL),
(296, 8, 'Porsi', 3, 5, 92, '2024-04-30 17:00:00', NULL),
(297, 1, 'Porsi', 3, 6, 215, '2024-05-31 17:00:00', NULL),
(298, 2, 'Porsi', 3, 6, 225, '2024-05-31 17:00:00', NULL),
(299, 3, 'Porsi', 3, 6, 255, '2024-05-31 17:00:00', NULL),
(300, 4, 'Porsi', 3, 6, 170, '2024-05-31 17:00:00', NULL),
(301, 5, 'Porsi', 3, 6, 185, '2024-05-31 17:00:00', NULL),
(302, 6, 'Porsi', 3, 6, 118, '2024-05-31 17:00:00', NULL),
(303, 7, 'Porsi', 3, 6, 105, '2024-05-31 17:00:00', NULL),
(304, 8, 'Porsi', 3, 6, 95, '2024-05-31 17:00:00', NULL),
(305, 1, 'Porsi', 3, 7, 220, '2024-06-30 17:00:00', NULL),
(306, 2, 'Porsi', 3, 7, 230, '2024-06-30 17:00:00', NULL),
(307, 3, 'Porsi', 3, 7, 260, '2024-06-30 17:00:00', NULL),
(308, 4, 'Porsi', 3, 7, 175, '2024-06-30 17:00:00', NULL),
(309, 5, 'Porsi', 3, 7, 190, '2024-06-30 17:00:00', NULL),
(310, 6, 'Porsi', 3, 7, 120, '2024-06-30 17:00:00', NULL),
(311, 7, 'Porsi', 3, 7, 108, '2024-06-30 17:00:00', NULL),
(312, 8, 'Porsi', 3, 7, 98, '2024-06-30 17:00:00', NULL),
(313, 1, 'Porsi', 3, 8, 225, '2024-07-31 17:00:00', NULL),
(314, 2, 'Porsi', 3, 8, 235, '2024-07-31 17:00:00', NULL),
(315, 3, 'Porsi', 3, 8, 265, '2024-07-31 17:00:00', NULL),
(316, 4, 'Porsi', 3, 8, 180, '2024-07-31 17:00:00', NULL),
(317, 5, 'Porsi', 3, 8, 195, '2024-07-31 17:00:00', NULL),
(318, 6, 'Porsi', 3, 8, 123, '2024-07-31 17:00:00', NULL),
(319, 7, 'Porsi', 3, 8, 110, '2024-07-31 17:00:00', NULL),
(320, 8, 'Porsi', 3, 8, 100, '2024-07-31 17:00:00', NULL),
(321, 1, 'Porsi', 3, 9, 230, '2024-08-31 17:00:00', NULL),
(322, 2, 'Porsi', 3, 9, 240, '2024-08-31 17:00:00', NULL),
(323, 3, 'Porsi', 3, 9, 270, '2024-08-31 17:00:00', NULL),
(324, 4, 'Porsi', 3, 9, 185, '2024-08-31 17:00:00', NULL),
(325, 5, 'Porsi', 3, 9, 200, '2024-08-31 17:00:00', NULL),
(326, 6, 'Porsi', 3, 9, 125, '2024-08-31 17:00:00', NULL),
(327, 7, 'Porsi', 3, 9, 112, '2024-08-31 17:00:00', NULL),
(328, 8, 'Porsi', 3, 9, 102, '2024-08-31 17:00:00', NULL),
(329, 1, 'Porsi', 3, 10, 235, '2024-09-30 17:00:00', NULL),
(330, 2, 'Porsi', 3, 10, 245, '2024-09-30 17:00:00', NULL),
(331, 3, 'Porsi', 3, 10, 275, '2024-09-30 17:00:00', NULL),
(332, 4, 'Porsi', 3, 10, 190, '2024-09-30 17:00:00', NULL),
(333, 5, 'Porsi', 3, 10, 205, '2024-09-30 17:00:00', NULL),
(334, 6, 'Porsi', 3, 10, 128, '2024-09-30 17:00:00', NULL),
(335, 7, 'Porsi', 3, 10, 115, '2024-09-30 17:00:00', NULL),
(336, 8, 'Porsi', 3, 10, 105, '2024-09-30 17:00:00', NULL),
(337, 1, 'Porsi', 3, 11, 240, '2024-10-31 17:00:00', NULL),
(338, 2, 'Porsi', 3, 11, 250, '2024-10-31 17:00:00', NULL),
(339, 3, 'Porsi', 3, 11, 280, '2024-10-31 17:00:00', NULL),
(340, 4, 'Porsi', 3, 11, 195, '2024-10-31 17:00:00', NULL),
(341, 5, 'Porsi', 3, 11, 210, '2024-10-31 17:00:00', NULL),
(342, 6, 'Porsi', 3, 11, 130, '2024-10-31 17:00:00', NULL),
(343, 7, 'Porsi', 3, 11, 118, '2024-10-31 17:00:00', NULL),
(344, 8, 'Porsi', 3, 11, 108, '2024-10-31 17:00:00', NULL),
(345, 1, 'Porsi', 3, 12, 245, '2024-11-30 17:00:00', NULL),
(346, 2, 'Porsi', 3, 12, 255, '2024-11-30 17:00:00', NULL),
(347, 3, 'Porsi', 3, 12, 285, '2024-11-30 17:00:00', NULL),
(348, 4, 'Porsi', 3, 12, 200, '2024-11-30 17:00:00', NULL),
(349, 5, 'Porsi', 3, 12, 215, '2024-11-30 17:00:00', NULL),
(350, 6, 'Porsi', 3, 12, 133, '2024-11-30 17:00:00', NULL),
(351, 7, 'Porsi', 3, 12, 120, '2024-11-30 17:00:00', NULL),
(352, 8, 'Porsi', 3, 12, 110, '2024-11-30 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Januari', '2023-10-27 15:56:39', '2023-10-27 15:57:25'),
(2, 'Februari', '2023-10-27 15:57:00', '2023-10-27 15:57:00'),
(3, 'Maret', '2023-10-27 15:57:15', '2023-10-27 15:57:15'),
(4, 'April', '2023-10-28 15:49:39', '2023-10-28 15:49:39'),
(5, 'Mei', '2023-10-28 15:49:45', '2023-10-28 15:49:45'),
(6, 'Juni', '2023-10-28 15:49:51', '2023-10-28 15:49:51'),
(7, 'Juli', '2023-10-28 15:49:58', '2023-10-28 15:49:58'),
(8, 'Agustus', '2023-10-28 15:50:04', '2023-10-28 15:50:04'),
(9, 'September', '2023-10-28 15:50:11', '2023-10-28 15:50:11'),
(10, 'Oktober', '2023-10-28 15:50:19', '2023-10-28 15:50:19'),
(11, 'November', '2023-10-28 15:50:33', '2023-10-28 15:50:33'),
(12, 'Desember', '2023-10-28 15:50:41', '2023-10-28 15:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_19_134504_make_kasus_table', 1),
(3, '2022_09_19_145703_create_puskesmas_table', 2),
(4, '2022_09_19_150923_create_kecamatan_table', 3),
(6, '2022_09_19_151045_create_kelurahan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '2022', '2021-12-31 17:00:00', NULL),
(2, '2023', '2022-12-31 17:00:00', NULL),
(3, '2024', '2023-12-31 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$1osEgIhf2VEoGaIfLKc/N.m48amKeGb3ODIdHKGr5Y2Wv1ppqLn2O', 1, NULL, '2023-11-13 08:16:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_tahun_bulan`
--
ALTER TABLE `barang_tahun_bulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_id` (`barang_id`,`tahun_id`,`bulan_id`),
  ADD KEY `tahun_id` (`tahun_id`),
  ADD KEY `bulan_id` (`bulan_id`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=554;

--
-- AUTO_INCREMENT for table `barang_tahun_bulan`
--
ALTER TABLE `barang_tahun_bulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1049;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_tahun_bulan`
--
ALTER TABLE `barang_tahun_bulan`
  ADD CONSTRAINT `barang_tahun_bulan_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_tahun_bulan_ibfk_3` FOREIGN KEY (`tahun_id`) REFERENCES `tahun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_tahun_bulan_ibfk_4` FOREIGN KEY (`bulan_id`) REFERENCES `bulan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
