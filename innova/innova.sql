-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 09:53 AM
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
-- Database: `innova`
--

-- --------------------------------------------------------

--
-- Table structure for table `innova_registration`
--

CREATE TABLE `innova_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `innova_registration`
--

INSERT INTO `innova_registration` (`id`, `name`, `email`, `phone`, `password`, `dob`) VALUES
(2, 'prince1k96 ', 'Mprince2k16@gmail.com', '01825731327', '1234', '1996-12-26'),
(3, 'prince1k96 ', 'Mprince2k16@gmail.com', '01825731327', '1234', '1996-12-26'),
(5, 'dahooq ', 'dahooq@gmail.com', '01825731327', '1234', '1996-02-06'),
(6, 'Prince ', 'shawon.gamer@gmail.com', '01825731327', '1234', '1358-01-25'),
(7, 'Prince ', 'shawon.gamer@gmail.com', '01825731327', '1234', '1358-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `innova_table`
--

CREATE TABLE `innova_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `innova_table`
--

INSERT INTO `innova_table` (`id`, `name`, `email`, `message`, `photo`) VALUES
(21, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'herllo', '21.png'),
(22, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'ryt', '22.png'),
(27, '   hann   ', 'hann@gmail.com', '   hello', '27.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `innova_registration`
--
ALTER TABLE `innova_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innova_table`
--
ALTER TABLE `innova_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `innova_registration`
--
ALTER TABLE `innova_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `innova_table`
--
ALTER TABLE `innova_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
