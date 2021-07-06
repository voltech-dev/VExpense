-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 05:02 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ecode` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doj` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessunit` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailid` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intercom` int(10) NOT NULL,
  `experience` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ecode`, `ename`, `doj`, `dob`, `qualification`, `designation`, `businessunit`, `contactnumber`, `emailid`, `address`, `intercom`, `experience`, `created_at`, `updated_at`) VALUES
(1, 's549', 'Ashok', '2020-10-12', '1993-01-25', 'B.Tech(Civil)', 'Engineer', 'Level VI', '9632587410', 'ashok@gmail.com', 'NO: 2, Rathnam Nagar, Aagaram Main Road, Selaiyur. pincode 600073', 545, '5 and Above', '2020-10-29 06:19:42', '2020-10-29 06:19:42'),
(2, 's546', 'Krishnavel G', '2020-10-06', '1963-04-07', 'B.E', 'Engineer', 'Level X', '9632587410', 'Krish@gmail.com', 'NO: 2, Rathnam Nagar, Aagaram Main Road, Selaiyur. pincode 600073', 545, '5 and Above', '2020-10-29 06:31:30', '2020-10-29 06:31:30'),
(3, 's543', 'Hema Preethi K', '2020-10-12', '1992-10-30', 'B.Tech(IT), MBA', 'Sr. Developer', 'Level VI', '9632587410', 'preethi2@gmail.com', 'NO: 2, Rathnam Nagar, Aagaram Main Road, Selaiyur. pincode 600073', 545, '3 to 5', '2020-10-29 06:32:24', '2020-10-29 06:33:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
