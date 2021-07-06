-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 08:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `lods`
--

CREATE TABLE `lods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenderno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiryreceiveddate` date NOT NULL,
  `projectname` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serialno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dehour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dmhour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qmhour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalhour` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lods`
--

INSERT INTO `lods` (`id`, `tenderno`, `enquiryreceiveddate`, `projectname`, `clientname`, `type`, `heading`, `serialno`, `subheading`, `designno`, `description`, `dehour`, `dmhour`, `qmhour`, `totalhour`, `revision`, `created_at`, `updated_at`) VALUES
(4, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'dff', 'f', 'f', 'f', 'f', 'f', '10', '10', '10', '30', 'R0', '2020-11-06 04:40:15', '2020-11-06 04:40:15'),
(5, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'gfdgfd', 'dfg', 'dfg', 'dfg', 'dfg', 'dfg', '20', '20', '20', '60', 'R0', '2020-11-06 06:20:23', '2020-11-06 06:20:23'),
(6, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'ghgfghj', 'fgh', 'fgh', 'fgh', 'fgh', 'fgh', '10', '10', '10', '30', 'R0', '2020-11-07 00:35:44', '2020-11-07 00:35:44'),
(7, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'fgh', 'fgh', 'fgh', 'fgh', 'fgh', 'fgh', '10', '10', '10', '30', 'R0', '2020-11-07 00:41:47', '2020-11-07 00:41:47'),
(8, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'gfg', 'fgf', 'gfgf', 'gfgfg', 'fgfg', 'fgfg', '10', '10', '10', '30', 'R0', '2020-11-07 00:42:22', '2020-11-07 00:42:22'),
(9, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'gfh', 'gfh', 'fgh', 'fgh', 'fgh', 'fgh', '10', '10', '10', '30', 'R0', '2020-11-07 00:44:19', '2020-11-07 00:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lods`
--
ALTER TABLE `lods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lods`
--
ALTER TABLE `lods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
