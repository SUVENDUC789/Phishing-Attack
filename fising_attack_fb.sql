-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `fising_attack_fb`
--

CREATE TABLE `fising_attack_fb` (
  `SL` int(11) NOT NULL,
  `Email_or_Phone` text NOT NULL,
  `Password` text NOT NULL,
  `IP` text NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fising_attack_fb`
--

INSERT INTO `fising_attack_fb` (`SL`, `Email_or_Phone`, `Password`, `IP`, `date_and_time`) VALUES
(1, 'suvenduc696@gmail.com', 'tormakeami', '::1', '2022-05-22 20:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fising_attack_fb`
--
ALTER TABLE `fising_attack_fb`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fising_attack_fb`
--
ALTER TABLE `fising_attack_fb`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
