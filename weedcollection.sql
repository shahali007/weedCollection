-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 02:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weedcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `amount` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `address`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Rakib Siddiquee', 'Kishoreganj', '5000', '2018-07-13 00:47:18', '2018-07-13 00:47:18'),
(2, 'Al Helal', 'Singapore', '10000', '2018-07-13 00:48:09', '2018-07-13 00:48:09'),
(3, 'Rasel', 'Narayangonj', '5000', '2018-07-13 00:48:25', '2018-07-13 00:48:25'),
(4, 'Saiful Islam', 'Narayangonj', '2000', '2018-07-13 00:48:39', '2018-07-13 00:48:39'),
(5, 'Kiron', 'Narayangonj', '5000', '2018-07-13 00:48:49', '2018-07-13 00:48:49'),
(6, 'Jabbar', 'Rasulpur', '5000', '2018-07-13 00:49:03', '2018-07-13 00:49:03'),
(7, 'A. Kayum', 'Nischintpur', '2500', '2018-07-13 00:49:22', '2018-07-13 00:49:22'),
(8, 'Tajul Islam', 'Golapbag', '3000', '2018-07-13 00:49:42', '2018-07-13 00:49:42'),
(9, 'Rohmot Vi', 'Dhaka', '5000', '2018-07-13 00:49:54', '2018-07-13 00:49:54'),
(10, 'Rasel Rasulpur', 'Rasulpur', '2000', '2018-07-13 00:51:19', '2018-07-13 00:51:19'),
(11, 'Habib', 'Narayangonj', '3000', '2018-07-13 00:51:30', '2018-07-13 00:51:30'),
(12, 'Jalil', 'Narayangonj', '1000', '2018-07-13 00:51:41', '2018-07-13 00:51:41'),
(13, 'Mintu', 'Rasulpur', '1000', '2018-07-13 00:51:50', '2018-07-13 00:51:50'),
(14, 'Mamun', 'Jagonews', '2000', '2018-07-13 00:52:07', '2018-07-13 00:52:07'),
(15, 'Ashik Vi', 'Jagonews', '2000', '2018-07-13 00:52:17', '2018-07-13 00:52:17'),
(16, 'Nasir', 'Sahimaholla', '2200', '2018-07-13 00:58:56', '2018-07-13 00:58:56'),
(17, 'Rupa apa', 'Narayangonj', '2000', '2018-07-13 00:59:10', '2018-07-13 00:59:10'),
(18, 'Malek Kaka', 'Narayangonj', '2000', '2018-07-13 00:59:23', '2018-07-13 00:59:23'),
(19, 'Musa kaka', 'Sahimaholla', '500', '2018-07-13 00:59:38', '2018-07-13 00:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
