-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 08:11 AM
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
-- Database: `cit_1806`
--

-- --------------------------------------------------------

--
-- Table structure for table `cit_table`
--

CREATE TABLE `cit_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Hobbies` text NOT NULL,
  `Favourites` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cit_table`
--

INSERT INTO `cit_table` (`id`, `name`, `email`, `password`, `Phone`, `DOB`, `Gender`, `Hobbies`, `Favourites`, `Message`) VALUES
(5, 'Prince', '1234', 'Mprince2k16@gmail.co', '', '0000-00-00', '', '', '', ''),
(6, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-12', 'Male', 'Playing', 'Array', 'Hello Prince'),
(7, 'Mohammad Prince', 'Mprince2k16@gmail.com', '', '01825731327', '2019-02-12', 'Male', 'Playing', 'Array', 'Hello Prince'),
(8, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-12', 'Male', 'Reading', 'Array', 'Hello'),
(9, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-12', 'Male', 'Traveling', 'Array', 'Hello'),
(10, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-12', 'Male', 'Traveling', 'Array', 'Hello'),
(11, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-12', 'Male', 'Traveling', 'Array', 'Hello'),
(12, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-13', 'Male', 'Reading', 'Array', 'hello prince'),
(13, 'Mohammad Prince', 'Mprince2k16@gmail.com', 'Prince2019!', '01825731327', '2019-02-13', 'Male', 'Reading', 'Array', 'Hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cit_table`
--
ALTER TABLE `cit_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cit_table`
--
ALTER TABLE `cit_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
