-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 07:05 AM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` int(128) DEFAULT NULL,
  `position` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `position`) VALUES
(1, 'Jan Matura', 'j.matura@wp.pl', 603252497, 'Team Leader'),
(2, 'Adam Żabka', 'a.zabka@gmail.com', 123456789, 'Team Leader'),
(3, 'Beata Janicka', 'b.janicka90@gmail.com', 557866252, 'Senior Customer Success Specialist'),
(4, 'Robert Abramowicz', 'r.abramowicz@gmail.com', 602188745, 'Senior Customer Success Specialist'),
(5, 'Damian Woś', 'd.wos@gmail.com', 509417503, 'Senior Customer Success Specialist'),
(6, 'Szczepan Domagała', 's.domagala@wp.pl', 512806807, 'Senior Customer Success Specialist'),
(7, 'Artur Nowak', 'a.nowak@wp.pl', 603989231, 'Customer Success Specialist'),
(8, 'Karolina Bryndza', 'k.bryndza@gmail.com', 723191723, 'Customer Success Specialist'),
(14, 'Paweł Nowak', 'p.nowak@gmail.com', 512563465, 'Senior Customer Success Specialist'),
(15, 'Adam Żabka', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
