-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 07:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `ID` int(11) NOT NULL,
  `Duration` varchar(70) NOT NULL,
  `Lesson` text NOT NULL,
  `GName` varchar(6) NOT NULL,
  `Teacher` varchar(35) NOT NULL,
  `Room` varchar(10) NOT NULL,
  `WeekDay` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`ID`, `Duration`, `Lesson`, `GName`, `Teacher`, `Room`, `WeekDay`) VALUES
(9, '08:00 - 09:00', 'Physics 1', '1EN04C', 'Yerbol Bugibayev', 'LT : A2', 'Monday'),
(10, '09:00 - 10:00', 'Physics 1', '1EN04C', 'Yerbol Bugibayev', 'LT : A2', 'Monday'),
(11, '10:00 - 11:00', 'Mathematics for Computer Science', '1EN04C', 'Larisa Bazarbayeva', 'LT: C2', 'Monday'),
(12, '11:00 - 12:00', 'Mathematics for Computer Science', '1EN04C', 'Larisa Bazarbayeva', 'LT: C2', 'Monday'),
(13, '12:00 - 13:00', 'Mathematics for Computer Science', '1EN04C', 'Samat Kassabek', 'LT : E3', 'Monday'),
(14, '13:00 - 14:00', 'Mathematics for Computer Science', '1EN04C', 'Samat Kassabek', 'LT : E3', 'Monday'),
(15, '14:00 - 15:00', 'Russian Language ', '1EN04C', 'Dilnara Kassymova', 'R: EN-302', 'Monday'),
(16, '09:00 - 10:00', 'Mathematics for Computer Science', '1EN04D', 'Samat Kassabek', 'R: EN-203', 'Monday'),
(17, '10:00 - 11:00', 'Mathematics for Computer Science', '1EN04D', 'Samat Kassabek', 'R: EN-203', 'Monday'),
(18, '11:00 - 12:00', 'Programming Technologies', '1EN04D', 'Andrey Bogdanchikov', 'LT : A2', 'Monday'),
(19, '12:00 - 13:00', 'Lunch', '1EN04D', 'Apai', 'Canteen', 'Monday'),
(20, '13:00 - 14:00', 'Foundation of WEB Programming', '1EN04D', 'Ardak Shalkarbayuly', 'LAB: EN-1', 'Monday'),
(22, '14:00 - 15:00', 'Foundation of WEB Programming', '1EN04D', 'Ardak Shalkarbayuly', 'LAB: EN-1', 'Monday'),
(23, '15:00 - 16:00', 'Russian Language', '1EN04D', 'Dilnara Kassymova', 'R: EN-302', 'Monday'),
(26, '09:00 - 10:00', 'Meeting with adviser', '1EN04C', 'Sergazy Nurbavliyev', 'Free to ch', 'Tuesday'),
(27, '10:00 - 11:00', 'Foundation of WEB Programming', '1EN04C', 'Ardak Shalkarbayuly', 'LT: C2', 'Tuesday'),
(28, '11:00 - 12:00', 'Turkish Language', '1EN04C', 'Senim Yuchel', 'R: EN-202', 'Tuesday'),
(29, '12:00 - 13:00', 'Turkish Language', '1EN04C', 'Senim Yuchel', 'R: EN-202', 'Tuesday'),
(30, '13:00 - 14:00', 'Lunch', '1EN04C', 'Apai', 'Canteen', 'Tuesday'),
(31, '14:00 - 15:00', 'Foundation of WEB Programming', '1EN04C', 'Ardak Shalkarbayuly', 'LAB : LAW', 'Tuesday'),
(32, '15:00 - 16:00', 'Foundation of WEB Programming', '1EN04C', 'Ardak Shalkarbayuly', 'LAB : LAW', 'Tuesday'),
(33, '09:00 - 10:00', 'Physics 1', '1EN04D', 'Yerbol Bugibayev', 'LAB : PHYS', 'Tuesday'),
(34, '10:00 - 11:00', 'Physics 1', '1EN04D', 'Yerbol Bugibayev', 'LAB : PHYS', 'Tuesday'),
(35, '11:00 - 12:00', 'Turkish Language', '1EN04D', 'Yuchel Ozyasar', 'R: EN-203', 'Tuesday'),
(36, '12:00 - 13:00', 'Turkish Language', '1EN04D', 'Yuchel Ozyasar', 'R: EN-203', 'Tuesday'),
(38, '14:00 - 15:00', 'Programming Technologies', '1EN04D', 'Andrey Bogdanchikov', 'LAB : EN-3', 'Tuesday'),
(39, '15:00 - 16:00', 'Programming Technologies', '1EN04C', 'Andrey Bogdanchikov', 'LAB : EN-3', 'Tuesday'),
(40, '17:00 - 18:00', 'Meeting with adviser', '1EN04D', 'Ibragim Junussov', 'NO ROOM', 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `GName` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `GName`) VALUES
(1, '1EN03A'),
(2, '1EN03B'),
(3, '1EN03C'),
(5, '1EN04C'),
(7, '1EN04D');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID` int(11) NOT NULL,
  `Teacher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`ID`, `Teacher`) VALUES
(1, 'Andrey Bogdanchikov'),
(2, 'Ardak Shalkarbayuly'),
(5, 'Larisa Bazarbayeva'),
(6, 'Yerbol Bugibayev'),
(7, 'Samat Kassabek'),
(8, 'Dilnara Kassymova'),
(9, 'Apai'),
(10, 'Sergazy Nurbavliyev'),
(11, 'Senim Yuchel'),
(12, 'Darmen Kariboz'),
(13, 'Aidynbek Nugmanov'),
(14, 'Ibragim Junussov'),
(15, 'Bakhytbek Zhumanov'),
(16, 'Yuchel Ozyasar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Login` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Login`, `Password`) VALUES
('admin', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duration`
--
ALTER TABLE `duration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duration`
--
ALTER TABLE `duration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
