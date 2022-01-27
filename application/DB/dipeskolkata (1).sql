-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 12:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dipeskolkata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adqry`
--

CREATE TABLE `adqry` (
  `adq_id` int(100) NOT NULL,
  `adq_name` varchar(255) NOT NULL,
  `adq_ph` varchar(255) NOT NULL,
  `adq_crs` varchar(255) NOT NULL,
  `adq_msg` varchar(255) NOT NULL,
  `adq_updt_at` datetime NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adqry`
--

INSERT INTO `adqry` (`adq_id`, `adq_name`, `adq_ph`, `adq_crs`, `adq_msg`, `adq_updt_at`, `slug`) VALUES
(1, 'Abc', '0123456789', 'xyzghrthrhr', 'rhrhrhhghrthrth', '2022-01-27 14:34:26', 'gfregergere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adqry`
--
ALTER TABLE `adqry`
  ADD PRIMARY KEY (`adq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adqry`
--
ALTER TABLE `adqry`
  MODIFY `adq_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
