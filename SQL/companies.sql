-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 07:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `sector` varchar(128) DEFAULT NULL,
  `plan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `sector`, `plan`) VALUES
(1, 'Kogucik S.A.', 'ul. Wiatraczna 17, 55-450 Wronki', 'dostarczanie energii', 'Podstawowy'),
(2, 'Wiarygodni Sp. z.o.o', 'ul. Woronicza 17, 43-099 Żmigród', NULL, 'Zaawansowany'),
(3, 'GRU12', 'ul. Woronicza 1, 43-099 Żmigród', NULL, 'Podstawowy'),
(4, 'GRU13', 'ul. Woronicza 19, 43-099 Żmigród', NULL, 'Podstawowy'),
(5, 'GRU15', 'ul. Woronicza 20, 43-099 Żmigród', NULL, 'Premium'),
(6, 'GRU18', 'ul. Woronicza 10, 43-099 Żmigród', NULL, 'Premium'),
(7, 'GRU122', 'ul. Woronicza 12, 43-099 Żmigród', NULL, 'Zaawansowany'),
(8, 'Zafiksowani Sp. J.', 'ul. Jagodowa 65, 61-880 Poznań', 'transport', 'Zaawansowany');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
