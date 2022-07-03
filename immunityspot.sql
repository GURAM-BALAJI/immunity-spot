-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2022 at 12:11 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immunityspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `admin_email` varchar(1100) NOT NULL,
  `admin_password` varchar(2000) NOT NULL,
  `admin_name` varchar(1100) NOT NULL,
  `admin_photo` varchar(5000) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` varchar(20) NOT NULL,
  `admin_updated_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_photo`, `admin_status`, `admin_delete`, `admin_added_date`, `admin_updated_date`) VALUES
(1, 'admin@admin.com', '$2y$10$tlJ7HiO6SfJcqzd0sztEgePf0Pl1GNHxcxkv36kppNjnesT8og7M.', 'Immunity Spot', '', 1, 0, '2021-01-04', '21-03-2022 03:31:31 ');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `galary_id` bigint(20) NOT NULL,
  `galary_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`galary_id`, `galary_name`) VALUES
(11, '1655390515.jpg'),
(12, '1655390529.jpg'),
(14, '1655390555.jpg'),
(15, '1655390570.jpg'),
(16, '1655390584.jpg'),
(17, '1655390598.jpg'),
(18, '1655390646.jpg'),
(20, '1655390785.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`galary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `galary_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
