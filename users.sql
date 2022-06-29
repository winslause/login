-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 27, 2022 at 12:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(3, 282147908, 'wenbusale383@gmail.com', 'Shisoso2019', '2022-03-14 19:41:59'),
(4, 435247, 'joy', '1234', '2022-03-14 19:42:36'),
(5, 35091834, 'john', 'john12', '2022-03-14 19:44:18'),
(6, 746976, 'wenbusale383@gmail.com', 'Shisoso2019', '2022-03-14 19:45:29'),
(7, 8942997926493842829, 'job', '1234', '2022-03-15 15:12:46'),
(8, 639489058968658148, 'kale', '1234', '2022-03-21 10:55:30'),
(9, 3362655093462, 'k', '123', '2022-03-21 11:08:39'),
(10, 47626980308930, 'P', 'PPPP', '2022-03-21 11:13:47'),
(11, 344607301470, 'j', '1234', '2022-03-21 11:22:21'),
(12, 33223162528, 'kevin', '12345', '2022-03-21 12:16:41'),
(13, 9223372036854775807, 'kevin', '12345', '2022-03-21 18:49:02'),
(14, 8133882537243235, 'kevin', '12345', '2022-03-21 18:49:03'),
(15, 8567442609147009799, 'kevin', '12345', '2022-03-21 18:50:50'),
(16, 2954105728915254, 'kevin', '12345', '2022-03-21 19:37:38'),
(17, 850126134050494, 'kevin', '12345', '2022-03-21 19:39:33'),
(18, 154765521604159317, 'kevin', '12345', '2022-03-21 19:46:27'),
(19, 320927987608835, 'kevin', '12345', '2022-03-21 19:53:56'),
(20, 98394008531, 'kevin', '12345', '2022-03-21 19:55:39'),
(21, 577482767769616726, 'kevin', '12345', '2022-03-21 19:59:08'),
(22, 51537148373, 'kevin', '12345', '2022-03-23 14:51:33'),
(23, 87814700, 'kevin', '12345', '2022-03-23 14:51:37'),
(24, 5489111588924302, 'kevin', '12345', '2022-03-23 15:17:17'),
(25, 3522107948298, 'kevin', '12345', '2022-03-23 15:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
