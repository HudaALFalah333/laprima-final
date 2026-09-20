-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 06:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laprimawebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `design_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fabric` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `jewelry` varchar(50) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `overall_length` float DEFAULT NULL,
  `arm_length` float DEFAULT NULL,
  `waist_circumference` float DEFAULT NULL,
  `bust_circumference` float DEFAULT NULL,
  `hip_circumference` float DEFAULT NULL,
  `neck_circumference` float DEFAULT NULL,
  `upload_design` longblob DEFAULT NULL,
  `appointment_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`design_id`, `user_id`, `name`, `fabric`, `color`, `jewelry`, `weight`, `size`, `overall_length`, `arm_length`, `waist_circumference`, `bust_circumference`, `hip_circumference`, `neck_circumference`, `upload_design`, `appointment_time`) VALUES
(5, 1, 'test3', 'chiffon', 'gold', 'specific-areas', 23, '23', 12, 23, 32, 32, 23, 12, '', '2025-01-21 14:00:00'),
(8, 1, 'test75', 'silk', 'silver', 'specific-areas', 23, '23', 12, 23, 32, 32, 23, 12, '', '2025-01-21 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `birth_year` int(11) NOT NULL,
  `birth_month` text NOT NULL,
  `birth_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `birth_year`, `birth_month`, `birth_day`) VALUES
(1, 'test', 'test', 'test@test.com', '1234', '098654', 'asdfg', 2009, 'december', 2),
(7, 'hhh', 'hhh', 'hh7h@test.com', '123456', '23456788', 'rty', 1938, 'October', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`design_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designs`
--
ALTER TABLE `designs`
  ADD CONSTRAINT `designs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
