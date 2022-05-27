-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 06:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `userrecord`
--

CREATE TABLE `userrecord` (
  `UserID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Pass` text NOT NULL,
  `Gender` text NOT NULL,
  `Phone` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Date_Of_Reg` text NOT NULL,
  `dr_name` text NOT NULL,
  `dr_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrecord`
--

INSERT INTO `userrecord` (`UserID`, `Name`, `Email`, `Pass`, `Gender`, `Phone`, `Age`, `Date_Of_Reg`, `dr_name`, `dr_date`) VALUES
(1, 'datta', 'datta@mail.com', 'l', 'male', '9090909090', 9, '8/9/9000', '', ''),
(2, 'vedantraje nimbalkar', 'data@mail.com', '$2y$10$z5DhoZ2q6Cb6rQKYELKR.ujpHACvBwX4oldPs9HrHZwyGhbgChlAe', 'Male', '7743853994', 9, '24/05/22', 'u', '4/5/2022'),
(3, 'datta', 'dat@mail.com', '$2y$10$Ph2kbUX0t8wtpFv3.OdBRe3oDh6UEEFKlpyE.DIBty8R1rE0.FMSy', 'Male', '1234567890', 1, '24/05/22', '', ''),
(4, 'h1', 'h1@mail.com', '$2y$10$eSbf0WYBnJPV9W82JPMCZOim6WConlQAGuD5Y7GDU12teBaZz9gwq', 'Male', '1234567890', 23, '24/05/22', 'Dr.Shona Milog Nag', ''),
(5, 'tejash Nimbalkar', 'tejash@mail.com', '$2y$10$Bx/w3D9A0lTWqtkyi1D.8enjSqMK7b2j/wNhZmxfBqxOybcNZ3t1q', 'Male', '1234567890', 22, '26/05/22', '', ''),
(6, 'Mr.vivo', 'mr.vivo@gmail.com', '$2y$10$23Udf2J3Ll6XAZ3SMKjNWOQZfNP1kn4yOWf8dW4zo1ddvBRPZVmcG', 'Male', '34526272828', 18, '27/05/22', 'Dr.Rajesh Kaushish', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userrecord`
--
ALTER TABLE `userrecord`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userrecord`
--
ALTER TABLE `userrecord`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
