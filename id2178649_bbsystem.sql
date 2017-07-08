-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2017 at 12:03 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2178649_bbsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_blood`
--

CREATE TABLE `add_blood` (
  `rec_id` int(2) NOT NULL,
  `donar_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `unit` int(3) NOT NULL,
  `hosname` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_blood`
--

INSERT INTO `add_blood` (`rec_id`, `donar_name`, `blood_group`, `unit`, `hosname`) VALUES
(5, 'swap', 'B-', 12, 'Shubham hospital'),
(6, 'abc', 'A-', 10, 'Shivani hospital');

-- --------------------------------------------------------

--
-- Table structure for table `hos_reg`
--

CREATE TABLE `hos_reg` (
  `hosname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hos_unique_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hos_key` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hos_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hos_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hos_reg`
--

INSERT INTO `hos_reg` (`hosname`, `hos_unique_id`, `hos_key`, `hos_address`, `hos_mobile`) VALUES
('Shubham hospital', '12345', '9926', 'Varanasi', 1234567890),
('Shivam hospital', '9900', '12345', 'Bareilly', 2147483647),
('Shivani hospital', '9090', '1231', 'Mumbai', 1231331313);

-- --------------------------------------------------------

--
-- Table structure for table `recreg`
--

CREATE TABLE `recreg` (
  `recname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rec_uname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rec_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rec_pass` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rec_mobile` int(10) NOT NULL,
  `rec_blood` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recreg`
--

INSERT INTO `recreg` (`recname`, `rec_uname`, `rec_email`, `rec_pass`, `rec_mobile`, `rec_blood`) VALUES
('Swapnil Kumar', 'Swapnil13cs56', 'Swapnil13cs56@gmail.', '1234', 2147483647, 'B+'),
('Sonam', 'sonam123', 'sonam@gmail.com', '123456', 2147483647, 'A+'),
('Soup', 'soup13cs56', 'soup@gmail.com', 'soup', 2147483647, 'B+'),
('Shiv', 'shiv@1234', 'shiv@yahoo.com', '1234', 2147483647, 'O+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_blood`
--
ALTER TABLE `add_blood`
  ADD PRIMARY KEY (`rec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_blood`
--
ALTER TABLE `add_blood`
  MODIFY `rec_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
