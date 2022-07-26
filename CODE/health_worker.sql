-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 10:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_worker`
--

CREATE TABLE `health_worker` (
  `DID` varchar(5) NOT NULL,
  `NAME` varchar(40) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL,
  `CONTACT` bigint(10) DEFAULT NULL,
  `EXPERIENCE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_worker`
--

INSERT INTO `health_worker` (`DID`, `NAME`, `TYPE`, `CONTACT`, `EXPERIENCE`) VALUES
('1', 'Joshua', 'Doctor', 1231231231, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_worker`
--
ALTER TABLE `health_worker`
  ADD PRIMARY KEY (`DID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
