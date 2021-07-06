-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 06:34 AM
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
-- Table structure for table `costingsheets`
--

CREATE TABLE `costingsheets` (
  `id` bigint(20) NOT NULL,
  `tenderno` varchar(20) NOT NULL,
  `enquiryreceiveddate` date NOT NULL,
  `projectname` varchar(100) NOT NULL,
  `clientname` varchar(50) NOT NULL,
  `scope` varchar(1000) NOT NULL,
  `dem` int(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `det` varchar(50) NOT NULL,
  `deo` varchar(50) NOT NULL,
  `dea` varchar(50) NOT NULL,
  `demargin` varchar(50) NOT NULL,
  `dfm` int(50) NOT NULL,
  `dfp` varchar(50) NOT NULL,
  `dft` varchar(50) NOT NULL,
  `dfo` varchar(50) NOT NULL,
  `dfa` varchar(50) NOT NULL,
  `dfmargin` varchar(50) NOT NULL,
  `qem` int(50) NOT NULL,
  `qep` varchar(50) NOT NULL,
  `qet` varchar(50) NOT NULL,
  `qeo` varchar(50) NOT NULL,
  `qea` varchar(50) NOT NULL,
  `qemargin` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costingsheets`
--

INSERT INTO `costingsheets` (`id`, `tenderno`, `enquiryreceiveddate`, `projectname`, `clientname`, `scope`, `dem`, `dep`, `det`, `deo`, `dea`, `demargin`, `dfm`, `dfp`, `dft`, `dfo`, `dfa`, `dfmargin`, `qem`, `qep`, `qet`, `qeo`, `qea`, `qemargin`, `created_at`, `updated_at`) VALUES
(1, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 1, '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '2020-11-10 04:09:28', '2020-11-10 04:09:28'),
(2, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 2, '2', '2', '2', '2', '2', 2, '2', '2', '2', '2', '2', 2, '2', '2', '2', '2', '2', '2020-11-10 04:10:38', '2020-11-10 04:10:38'),
(18, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', '2020-11-10 05:44:40', '2020-11-10 05:44:40'),
(19, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 9, '9', '9', '9', '9', '9', 9, '9', '9', '9', '9', '9', 9, '9', '9', '9', '9', '9', '2020-11-10 05:45:14', '2020-11-10 05:45:14'),
(20, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 5, '5', '5', '5', '5', '5', 5, '5', '5', '5', '5', '5', 5, '5', '5', '5', '5', '5', '2020-11-10 05:46:43', '2020-11-10 05:46:43'),
(21, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 6, '6', '6', '6', '6', '6', 6, '6', '6', '6', '6', '6', 6, '6', '6', '6', '6', '6', '2020-11-10 05:50:41', '2020-11-10 05:50:41'),
(22, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 98989, '1', '2', '2', '2', '2', 2, '1', '2', '2', '2', '2', 2, '2', '2', '2', '2', '2', '2020-11-10 22:50:56', '2020-11-10 22:50:56'),
(23, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 5, '5', '5', '5', '5', '5', 5, '5', '5', '5', '5', '5', 5, '5', '5', '5', '5', '5', '2020-11-10 22:53:01', '2020-11-10 22:53:01'),
(24, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 3, '3', '3', '3', '3', '3', 3, '3', '3', '3', '3', '3', 3, '3', '3', '3', '3', '3', '2020-11-10 22:56:28', '2020-11-10 22:56:28'),
(25, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', '2020-11-10 22:57:26', '2020-11-10 22:57:26'),
(26, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', 0, '0', '0', '0', '0', '0', '2020-11-10 23:13:12', '2020-11-10 23:13:12'),
(27, 'TE-1320', '2020-11-18', '502 TPD EDIBLE OIL REFINERY PROJECT AT HAZIRA - 3', 'Siemens HONDA', 'Relay setting Calculation & Coordination', 3, '3', '3', '3', '3', '3', 3, '3', '3', '3', '3', '3', 3, '3', '3', '3', '3', '3', '2020-11-10 23:28:10', '2020-11-10 23:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costingsheets`
--
ALTER TABLE `costingsheets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costingsheets`
--
ALTER TABLE `costingsheets`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
