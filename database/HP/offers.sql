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
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenderno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessunit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiryreceiveddate` date NOT NULL,
  `projectname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopeofwork` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerdate` date NOT NULL,
  `offerprice` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentssupport` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revised0` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revised1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `tenderno`, `businessunit`, `enquiryreceiveddate`, `projectname`, `scopeofwork`, `clientname`, `contactperson`, `branch`, `offerdate`, `offerprice`, `documentssupport`, `revised0`, `revised1`, `created_at`, `updated_at`) VALUES
(1, 'TE-1320', '', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Relay setting Calculation & Coordination', 'Siemens HONDA', 'Mr.Siemens', 'ayyapanthangal', '2020-11-19', '5,12,500', 'LOD & Man Hour', 'R0', '', NULL, NULL),
(2, 'TE-1320', '', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Relay setting Calculation & Coordination', 'Siemens HONDA', 'Mr.Siemens', 'ayyapanthangal', '2020-11-19', '5,12,500', 'LOD & Man Hour', 'R0', '', NULL, NULL),
(3, 'TE-1320', '', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Relay setting Calculation & Coordination', 'Siemens HONDA', 'Mr.Siemens', 'ayyapanthangal', '2020-11-19', '5,12,500', 'LOD & Man Hour', 'R0', '', NULL, NULL),
(4, 'TE-1320', '', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Relay setting Calculation & Coordination', 'Siemens HONDA', 'Mr.Siemens', 'ayyapanthangal', '2020-11-19', '5,12,500', 'LOD & Man Hour', 'R0', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
