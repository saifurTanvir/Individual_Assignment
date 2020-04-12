-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 07:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atp3assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `busId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `seat_row` varchar(50) NOT NULL,
  `seat_column` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`busId`, `name`, `operator`, `location`, `seat_row`, `seat_column`, `company`) VALUES
(1, 'Great Turag', 'Md.Abul', 'Nodda', '12', '12', 'Turag3'),
(2, 'Anabil', 'Md. Babul', 'Notun Bazar', '12', '4', 'Anabil2'),
(3, 'BRTC', 'Md. Kashem', 'Kuril', '10', '8', 'brts');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `scheduleId` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `route` varchar(80) NOT NULL,
  `fare` varchar(80) NOT NULL,
  `deparature` varchar(80) NOT NULL,
  `arrival` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`scheduleId`, `name`, `route`, `fare`, `deparature`, `arrival`) VALUES
(1, 'Great Turag', 'Gazipur - Jatrabari', '80', '09:00 am', '11:00 am'),
(9, 'sf', 'sdf', '354', '435', '453');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Saifur', 'saifur@gmail.com', 'Saifur', 'admin'),
(2, 'Tanvir', 'tanvir@gmail.com', 'Tanvir', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`busId`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `busId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `scheduleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
