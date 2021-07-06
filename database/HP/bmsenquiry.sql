-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 05:01 AM
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
-- Table structure for table `bmsenquiry`
--

CREATE TABLE `bmsenquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projecttitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenderno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiryreceiveddate` date NOT NULL,
  `projectname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailid` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endclient` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopeofactivities` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentterms` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anyothercustomerdetails` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiryduedate` date NOT NULL,
  `projectdetails` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bmsenquiry`
--

INSERT INTO `bmsenquiry` (`id`, `projecttitle`, `tenderno`, `offerno`, `enquiryreceiveddate`, `projectname`, `clientname`, `contactperson`, `mailid`, `branch`, `endclient`, `scopeofactivities`, `paymentterms`, `anyothercustomerdetails`, `enquiryduedate`, `projectdetails`, `created_at`, `updated_at`) VALUES
(1, '500 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA  (Relay setting Calculation for 11kV HT Existing panels).', 'TE-1320111', '555', '2019-11-04', '500 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA', 'Siemens', 'Mr.Siemens', 'siemem13@gmail.com', 'ayyapanthangal', 'ADANI WILMER LIMITED', 'Relay setting Calculation & Coordination', 'Nil', 'Nil', '2019-11-04', 'Relay setting Calculation for 11kV HT Existing panels', '2020-10-30 01:32:04', '2020-10-30 04:48:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmsenquiry`
--
ALTER TABLE `bmsenquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmsenquiry`
--
ALTER TABLE `bmsenquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
