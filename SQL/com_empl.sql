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
-- Table structure for table `com_empl`
--

CREATE TABLE `com_empl` (
  `company_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `com_empl`
--

INSERT INTO `com_empl` (`company_id`, `employee_id`) VALUES
(1, 3),
(1, 5),
(2, 2),
(3, 1),
(3, 5),
(3, 6),
(4, 2),
(4, 6),
(4, 7),
(5, 6),
(6, 1),
(6, 2),
(6, 4),
(6, 8),
(7, 1),
(8, 1),
(8, 5),
(8, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_empl`
--
ALTER TABLE `com_empl`
  ADD PRIMARY KEY (`company_id`,`employee_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `com_empl`
--
ALTER TABLE `com_empl`
  ADD CONSTRAINT `com_empl_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `com_empl_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
