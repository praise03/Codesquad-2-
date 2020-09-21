-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 02:00 PM
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
-- Database: `car_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `no_of_doors` varchar(255) NOT NULL,
  `year_made` int(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_name`, `type`, `no_of_doors`, `year_made`, `image`) VALUES
(1, 'Audi TT Roadster', 'Convertible', '2', 2019, 'audi-tt.jpg'),
(2, 'BMW 8-series', 'Convertible', '2', 2019, 'bmw-8.jpg'),
(3, 'Audi A5 Cabriolet', 'Convertible', '2', 2017, 'audi-a5.jpg'),
(4, 'BMW X1', 'SUV', '5', 2019, 'bmw-x1.jpg'),
(5, 'Hyundai Santa Fe', 'SUV', '5', 2019, 'hyundai-santafe.jpg'),
(6, 'Porsche 911 Coupe', 'Coupe', '2', 2016, 'porsche-911.jpg'),
(7, 'Aston Martin Vantage', 'Coupe', '2', 2018, 'aston-martin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `no_of_doors` varchar(255) NOT NULL,
  `year_made` int(4) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_name`, `type`, `no_of_doors`, `year_made`, `image`) VALUES
('Audi TT Roadster', 'convertible', '2', 2019, 'porshe-911.jpg'),
('BMW 8-serie Cabrio', 'convertible', '2', 2019, 'porshe-911.jpg'),
('Audi A5 Cabriolet', 'convertible', '2', 2017, 'porshe-911.jpg'),
('BMW X1', 'suv', '5', 2019, 'porshe-911.jpg'),
('Hyundai Santa Fe', 'suv', '5', 2019, 'porshe-911.jpg'),
('Porsche 911 Coupe', 'coupe', '2', 2019, 'porshe-911.jpg'),
('Aston Martin Vantage', 'coupe', '2', 2019, 'porshe-911.jpg'),
('', '', '', 0, 'porshe-911.jpg'),
('', '', '', 0, 'porshe-911.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
