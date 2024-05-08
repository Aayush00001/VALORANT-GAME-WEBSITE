-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 04:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'AAYUSH01', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `putfeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `putfeedback`) VALUES
(6, 'GAMER', 'NICE WEBSITE BRO');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(29, 'AAYUSH', 'GAMER', 'AAYUSH01', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `wallpapers`
--

CREATE TABLE `wallpapers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallpapers`
--

INSERT INTO `wallpapers` (`id`, `title`, `image_url`) VALUES
(15, 'JETT', '1.jpg'),
(16, 'RAZE', '2.jpg'),
(17, 'YORU', '3.jpg'),
(18, 'YORU', '4.jpg'),
(19, 'REYNA', '5.jpg'),
(20, 'FADE', '6.jpg'),
(21, 'JETT', '7.jpg'),
(22, 'CUTE', '8.jpg'),
(23, 'CUTE1', '9.jpg'),
(24, 'JETT', '10.jpg'),
(25, '11', '11.jpg'),
(26, 'SAGE', '12.jpg'),
(27, 'POSTER', '13.jpg'),
(28, 'POSTER', '14.jpg'),
(29, 'VCT', '15.jpg'),
(30, 'CHAMPION', '16.jpg'),
(31, 'MOTIVATION', '17.jpg'),
(32, 'POSTER', '18.jpg'),
(33, 'HARBOUR', '19.jpg'),
(34, 'KJ', '20.jpg'),
(35, 'VIPER', '21.png'),
(36, 'JETT', '22.jpg'),
(37, 'FADE', '23.png'),
(38, 'CHAMBER', '24.jpg'),
(39, 'HEROHINE', '25.jpg'),
(40, 'AWWWW', '26.jpeg'),
(41, 'CUTE', '27.jpg'),
(42, 'HOT', '28.jpeg'),
(43, 'CRISP', '29.jpeg'),
(44, 'CUTE', '30.jpg'),
(45, 'DANGER', '31.jpg'),
(46, 'NICE', '32.jpg'),
(47, 'HOT', '33.jpg'),
(48, 'NATURE', '34.jpg'),
(49, 'HOT', '35.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallpapers`
--
ALTER TABLE `wallpapers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `wallpapers`
--
ALTER TABLE `wallpapers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
