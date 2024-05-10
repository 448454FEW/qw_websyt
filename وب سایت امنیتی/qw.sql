-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 10:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qw`
--

-- --------------------------------------------------------

--
-- Table structure for table `qw_security`
--

CREATE TABLE `qw_security` (
  `ip` varchar(39) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `paswword` mediumtext NOT NULL,
  `img_loc` varchar(250) NOT NULL,
  `time_of_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Captcha_input` int(11) NOT NULL,
  `Captcha_itself` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qw_security`
--

INSERT INTO `qw_security` (`ip`, `id`, `username`, `paswword`, `img_loc`, `time_of_log`, `Captcha_input`, `Captcha_itself`) VALUES
('5oFpIg2DRl+GN5l1WwdbFw==', 1, 'SpB90HNyylZHEOqfP1coFA==', 'dCfkmFQvwW8r+2uGp1HE1g==', 'lY634NEVep0ARdX5jKVhpH2f9D8nCKt/f+RbItOXcuYmofFnkHV6bhtcoTdwtyZG', '2024-05-10 19:57:26', 7, '7YsbTVLWjlbSpLvpcuEGCg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qw_security`
--
ALTER TABLE `qw_security`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qw_security`
--
ALTER TABLE `qw_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
