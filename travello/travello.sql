-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 02:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travello`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `tags` int(8) NOT NULL,
  `date_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `price`, `image`, `tags`, `date_`) VALUES
(7, 'Bali', 'New York', 'From $2000', '-1067384000.jpg', 8000, 'March 2020'),
(12, 'New York', '20 days', 'From #4000', '1404766940.jpg', 4000, 'November 2020'),
(13, 'California', 'Full cruise', 'From #6000', '-1635917821.jpg', 6000, 'September 2020'),
(14, 'Abuja', '20 days', 'From #1000', '2023712209.jpg', 1000, 'January 2020'),
(15, 'England', 'Full cruise', 'From #10000', '-1067384000.jpg', 10000, 'January 2020'),
(16, 'Lagos', '14 days', '$500', '-1993198701.jpg', 500, 'November 2020');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `departure` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_email`, `user_fullname`, `destination`, `budget`, `departure`, `arrival`) VALUES
(9, 'admin@gmail.com', 'Admin.', 'Bali', 'From $2000', '2020-09-19', '2020-09-30'),
(10, 'praiseadedokun.pa@gmail.com', 'PraiseAdedokun', 'London', '2000', '2020-09-30', '2020-09-30'),
(11, 'praiseadedokun.pa@gmail.com', 'PraiseAdedokun', '', '', '2020-09-16', '2020-09-16'),
(12, 'admin@gmail.com', 'Admin.', 'Lagos', '500', '2020-09-17', '2020-09-30'),
(13, 'praiseadedokun.pa@gmail.com', 'PraiseAdedokun', 'New York', '4000', '2020-09-30', '2020-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_password`, `user_email`) VALUES
(45, 'Praise', 'Adedokun', '$2y$12$WQCxGzBLxqmnThvAXvfkmuHRQdWmQ33G1fMk4izkMdNTAMuBboAEG', 'praiseadedokun.pa@gmail.com'),
(46, 'Admin', '.', '$2y$12$90s2lQW0YlhC0jbSL6f7buOlvDmC2n/Agwg1UDUsQ5YN012TPREYK', 'admin@gmail.com'),
(47, 'User', '1', '$2y$12$IasNz9tk/3lfhEzqRRcE/uU4YI0NOsCYX8F9SSYDhX5TfpWETMXvm', 'user1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
