-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 11:45 PM
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
-- Table structure for table `contact_persons`
--

CREATE TABLE `contact_persons` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_persons`
--

INSERT INTO `contact_persons` (`id`, `name`, `email`, `phone`, `company_id`) VALUES
(3, 'Adam Jeż', 'a.jeżyk@wp.pl', 633333222, 1),
(4, 'Beata Janik', 'b.janik@wp.pl', 723432432, 2),
(5, 'Natan Bajer', 'n.bajer@gmail.com', 666555444, 3),
(6, 'Tadeusz K', 't.k@gmail.com', 653109231, 4),
(7, 'Kamila Wąż', 'j.waz@gmail.com', 699823123, 5),
(8, 'Cezary Pazura', 'c.pazur@gmail.com', 659878654, 6),
(9, 'Edward Paw', 'e.paw@gmail.com', 603445123, 7),
(10, 'Grażyna Lis', 'g.lis@gmail.com', 507897666, 1),
(11, 'Mateusz Konar', 'm.konar@gmail.com', 603222548, 2),
(12, 'Robert Janowski', 'r.jan@gmail.com', 603558995, 3),
(14, 'Julian Tuwim', 'j.tuwim@gmail.com', 999888777, 1),
(16, 'Jan Łoś', 'j.los@gmail.com', 507332912, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_persons`
--
ALTER TABLE `contact_persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_persons`
--
ALTER TABLE `contact_persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
