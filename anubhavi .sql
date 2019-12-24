-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 03:45 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anubhavi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `ID` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`ID`, `email`, `password`) VALUES
(1, 'admin@admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE `company_master` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `com_email` varchar(30) NOT NULL,
  `com_pass` varchar(10) NOT NULL,
  `com_phone` varchar(10) NOT NULL,
  `com_loc` varchar(30) NOT NULL,
  `com_website` varchar(20) NOT NULL,
  `com_no_exp` int(11) NOT NULL,
  `com_pay_willing` varchar(10) NOT NULL,
  `com_expertise` varchar(30) NOT NULL,
  `com_descp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_master`
--

INSERT INTO `company_master` (`com_id`, `com_name`, `com_email`, `com_pass`, `com_phone`, `com_loc`, `com_website`, `com_no_exp`, `com_pay_willing`, `com_expertise`, `com_descp`) VALUES
(1, 'WEB', 'webdharmaa@gmail.com', 'web123', '7045591602', 'Pune', 'webdharmaa.com', 2, '100000', 'SOFTWARE', 'olelelele');

-- --------------------------------------------------------

--
-- Table structure for table `engineer_master`
--

CREATE TABLE `engineer_master` (
  `engg_id` int(11) NOT NULL,
  `engg_name` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `no_exp` int(11) DEFAULT NULL,
  `pay_looking` varchar(10) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `expertise` varchar(30) DEFAULT NULL,
  `descp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineer_master`
--

INSERT INTO `engineer_master` (`engg_id`, `engg_name`, `email`, `pass`, `age`, `no_exp`, `pay_looking`, `location`, `expertise`, `descp`) VALUES
(1, 'SMIT SHAH', 'sms@gmail.com', 'sms', 21, 10, '100000', 'Mumbai', 'SOFTWARE', 'description lol'),
(2, 'smit', 'sms@gmail.com', 'sms123', 21, 5, '30000', 'mumbai', 'SOFTWARE', 'description lol hahahaha'),
(3, 'test', 'test@gmail.com', 'test', 21, 5, '10000', 'mumbai', 'MECHANICAL', 'test description'),
(4, 'chet', 'chet@gmail.com', '12', 12, 12, '50000', 'mumbai', 'SOFTWARE', 'hfgf'),
(5, 'Noddy', 'Noddy@gmail.com', 'Pikachu', 20, 0, '50k', 'mumbai', 'HARDWARE', 'worst experience');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_master`
--
ALTER TABLE `company_master`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `engineer_master`
--
ALTER TABLE `engineer_master`
  ADD PRIMARY KEY (`engg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_master`
--
ALTER TABLE `company_master`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `engineer_master`
--
ALTER TABLE `engineer_master`
  MODIFY `engg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
