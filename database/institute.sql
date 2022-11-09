-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 01:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_details`
--

CREATE TABLE `admin_login_details` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_details`
--

INSERT INTO `admin_login_details` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `course-details`
--

CREATE TABLE `course-details` (
  `id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `course_name` text NOT NULL,
  `stating_date` varchar(100) NOT NULL,
  `total_course_time` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course-details`
--

INSERT INTO `course-details` (`id`, `price`, `course_name`, `stating_date`, `total_course_time`, `file_name`) VALUES
(1, 'Free', 'Java - Foundation', '21st Octob', '6 months', ''),
(2, '$100', 'c++ course', '14 | 08 | ', '8 months ', 'new.img'),
(3, 'Free', 'java\'course', '14|08|2022', '6 months', '3.png'),
(4, '$13', 'Javascript course', '10 | jan |', '9 months', 'Virtual (2).png'),
(5, '$13', 'Javascript course', '10 | jan |', '9 months', 'Virtual (2).png'),
(6, '$13', 'Javascript course', '10 | jan |', '9 months', 'Virtual (2).png'),
(7, '$13', 'Javascript course', '10 | jan |', '12 months', 'Virtual (2).png'),
(8, 'Free', 'NEw DSA', '10 | jan | 2022', '12 months', 'Virtual (2).png'),
(9, '10$', 'new Dsa ', '10', '10 months', 'Virtual (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `otp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `contactno`, `otp`) VALUES
(1, '1satyam', '9005946009', 1234),
(2, 'satyam', '9005948007', 7954),
(3, 'satyam', '9005948007', 2142),
(4, 'satyam mishra ', '9005948007', 9382),
(5, 'satyam', '9005948007', 8911),
(6, 'satyam', '9009876123', 6856),
(7, 'satyam', '9005888889', 9732),
(8, 'hero', '9005948007', 4166),
(9, 'satyam', '9005948007', 2059),
(10, 'satyam2222', '9005948007', 8913),
(11, 'satyam', '9005948077', 3857),
(12, 'atbhay', '9005948007', 4801),
(13, 'satyam', '9005940088', 4252),
(14, 'Abhay Mishra', '8318400344', 1819),
(15, 'Abhay Mishra', '8318400344', 6401),
(16, 'Abhay Mishra', '8318400344', 2192),
(17, 'Abhay ', '8318400344', 8129),
(18, 'sa', '9005938007', 7252),
(19, 'sa', '9005938007', 7252),
(20, 'newuser', '9005948667', 4986),
(21, 'newuser', '9005948667', 4986),
(22, 'newuser', '9005948667', 4986),
(23, 'newuser', '9005948667', 4986),
(24, 'newuser', '9005948667', 4986),
(25, 'newuser', '9005948667', 4986),
(26, 'newuser', '9005948667', 4986),
(27, 'newuser', '9005948667', 4986),
(28, 'satyam ', '9936205436', 8729),
(29, 'satyam ', '9005948007', 1094);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course-details`
--
ALTER TABLE `course-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_details`
--
ALTER TABLE `admin_login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course-details`
--
ALTER TABLE `course-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
