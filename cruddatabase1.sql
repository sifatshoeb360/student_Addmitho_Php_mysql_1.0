-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2022 at 03:23 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddatabase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_information`
--

CREATE TABLE `students_information` (
  `Id` int(11) NOT NULL,
  `Student_Name` varchar(80) NOT NULL,
  `Student_Email` varchar(80) NOT NULL,
  `Phone_Number` varchar(80) NOT NULL,
  `Departmen` varchar(80) NOT NULL,
  `Semester` varchar(80) NOT NULL,
  `Roll_Number` varchar(20) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Creat_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_information`
--

INSERT INTO `students_information` (`Id`, `Student_Name`, `Student_Email`, `Phone_Number`, `Departmen`, `Semester`, `Roll_Number`, `Section`, `Password`, `Creat_At`) VALUES
(3, 'Shoeb Arefin Sifat', 'lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Civil', '2nd semester', ' 77777', 'A2', 'skingFX13@44444', '2022-07-25 23:33:08'),
(8, 'Shoeb Arefin Sifat', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Civil', '7th semester', '443291', 'B1', 'skingFX13@', '2022-07-26 00:14:01'),
(9, 'Shoeb Arefin Sifat', 'lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Tourism & Hospitality', '4th semester', ' 9999999', 'B1', 'skingFX13@', '2022-07-26 08:56:53'),
(11, 'Apurba', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Computer', '5th semester', '443233', 'A2', 'skingFX13@3333333', '2022-07-26 08:59:17'),
(14, 'Ruman', ' lsdlfsdlfjaslfaldf@gmlail.com', '+88055555555555', 'Computer', '6th semester', '443666', 'B2', 'skingFX13@444444444444', '2022-07-26 09:02:13'),
(23, 'Shoeb Arefin Sifat', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Computer', '1st semester', '4432955', 'A2', 'skingFX13@', '2022-07-26 09:12:10'),
(25, 'Shoeb Arefin Sifat', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Power', '8th semester', '44329122222', 'A1', 'skingFX13@', '2022-07-26 11:59:00'),
(27, 'Shoeb Arefin Sifat ', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Civil', '3rd semester', ' 44329155556', 'A2', 'skingFX13@', '2022-07-26 12:00:02'),
(28, 'Shoeb Arefin Sifat', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Tourism & Hospitality', '7th semester', '443291457', 'A1', 'skingFX13@', '2022-07-26 12:00:31'),
(29, 'Shoeb Arefin Sifat', ' lsdlfsdlfjaslfaldf@gmlail.com', '+8801905088728', 'Electro Medical', '5th semester', '445666', 'A1', 'skingFX13@', '2022-07-26 12:00:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_information`
--
ALTER TABLE `students_information`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Roll_Number` (`Roll_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_information`
--
ALTER TABLE `students_information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
