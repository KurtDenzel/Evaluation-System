-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(250) NOT NULL,
  `AdminPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`AdminID`, `AdminName`, `AdminPassword`) VALUES
(1, 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answers`
--

CREATE TABLE `tbl_answers` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `poll` int(11) NOT NULL,
  `choice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_answers`
--

INSERT INTO `tbl_answers` (`id`, `user`, `poll`, `choice`) VALUES
(1, 1, 1, 4),
(19, 2, 2, 6),
(20, 2, 3, 11),
(21, 2, 5, 22),
(22, 3, 5, 24),
(23, 3, 9, 42),
(24, 3, 10, 47),
(25, 4, 10, 48),
(26, 4, 1, 2),
(27, 5, 1, 2),
(28, 5, 2, 7),
(29, 5, 3, 12),
(30, 5, 4, 17),
(31, 5, 5, 22),
(32, 5, 6, 27),
(33, 5, 7, 32),
(34, 5, 8, 37),
(35, 5, 9, 42),
(36, 5, 10, 50),
(37, 5, 11, 55),
(38, 5, 12, 60),
(39, 5, 13, 65),
(40, 5, 14, 70),
(41, 5, 15, 75),
(42, 6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_choices`
--

CREATE TABLE `tbl_choices` (
  `id` int(11) NOT NULL,
  `poll` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_choices`
--

INSERT INTO `tbl_choices` (`id`, `poll`, `name`) VALUES
(1, 1, '5 - Outstanding'),
(2, 1, '4 - Very Good'),
(3, 1, '3 - Good'),
(4, 1, '2 - Fair'),
(5, 1, '1 - Poor'),
(6, 2, '5 - Outstanding'),
(7, 2, '4 - Very Good'),
(8, 2, '3 - Good'),
(9, 2, '2 - Fair'),
(10, 2, '1 - Poor'),
(11, 3, '5 - Outstanding'),
(12, 3, '4 - Very Good'),
(13, 3, '3 - Good'),
(14, 3, '2 - Fair'),
(15, 3, '1 - Poor'),
(16, 4, '5 - Outstanding'),
(17, 4, '4 - Very Good'),
(18, 4, '3 - Good'),
(19, 4, '2 - Fair'),
(20, 4, '1 - Poor'),
(21, 5, '5 - Outstanding'),
(22, 5, '4 - Very Good'),
(23, 5, '3 - Good'),
(24, 5, '2 - Fair'),
(25, 5, '1 - Poor'),
(26, 6, '5 - Outstanding'),
(27, 6, '4 - Very Good'),
(28, 6, '3 - Good'),
(29, 6, '2 - Fair'),
(30, 6, '1 - Poor'),
(31, 7, '5 - Outstanding'),
(32, 7, '4 - Very Good'),
(33, 7, '3 - Good'),
(34, 7, '2 - Fair'),
(35, 7, '1 - Poor'),
(36, 8, '5 - Outstanding'),
(37, 8, '4 - Very Good'),
(38, 8, '3 - Good'),
(39, 8, '2 - Fair'),
(40, 8, '1 - Poor'),
(41, 9, '5 - Outstanding'),
(42, 9, '4 - Very Good'),
(43, 9, '3 - Good'),
(44, 9, '2 - Fair'),
(45, 9, '1 - Poor'),
(46, 10, '5 - Outstanding'),
(47, 10, '4 - Very Good'),
(48, 10, '3 - Good'),
(49, 10, '2 - Fair'),
(50, 10, '1 - Poor'),
(51, 11, '5 - Outstanding'),
(52, 11, '4 - Very Good'),
(53, 11, '3 - Good'),
(54, 11, '2 - Fair'),
(55, 11, '1 - Poor'),
(56, 12, '5 - Outstanding'),
(57, 12, '4 - Very Good'),
(58, 12, '3 - Good'),
(59, 12, '2 - Fair'),
(60, 12, '1 - Poor'),
(61, 13, '5 - Outstanding'),
(62, 13, '4 - Very Good'),
(63, 13, '3 - Good'),
(64, 13, '2 - Fair'),
(65, 13, '1 - Poor'),
(66, 14, '5 - Outstanding'),
(67, 14, '4 - Very Good'),
(68, 14, '3 - Good'),
(69, 14, '2 - Fair'),
(70, 14, '1 - Poor'),
(71, 15, '5 - Outstanding'),
(72, 15, '4 - Very Good'),
(73, 15, '3 - Good'),
(74, 15, '2 - Fair'),
(75, 15, '1 - Poor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `starts` date NOT NULL,
  `ends` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_poll`
--

INSERT INTO `tbl_poll` (`id`, `question`, `starts`, `ends`) VALUES
(1, '1. How would you rate the condition and appearance of your building\'s interior?', '2022-05-18', '2022-05-26'),
(2, '2. How do you rate the condition and appearance of your building\'s exterior?', '2022-05-18', '2022-05-26'),
(3, '3. How do you rate the timeliness of maintenance repairs?', '2022-05-18', '2022-05-26'),
(4, '4. How do you rate the professionalism and expertise of maintenance personnel?', '2022-05-18', '2022-05-26'),
(5, '5. How do you rate the attitude, courtesy and appearance of maintenance personnel?', '2022-05-18', '2022-05-26'),
(6, '6. How do you rate the attitude, professionalism and courtesy of administrative personnel?', '2022-05-18', '2022-05-26'),
(7, '7. How do you rate the timeliness & professionalism of administrative response to customer inquiries?', '2022-05-18', '2022-05-26'),
(8, '8. How do you rate the appearance and cleanliness of the College\'s lawns, landscaping and walkways?\r\n', '2022-05-18', '2022-05-26'),
(9, '9. How do you rate the attitude, professionalism and courtesy of the Facilities Maintenance help desk?', '2022-05-18', '2022-05-26'),
(10, '10. How do you rate your familiarity with and user-friendliness of Facilities in the University?\r\n', '2022-05-18', '2022-05-26'),
(11, '11. How do you rate the other information available on the Facilities Management website?', '2022-05-18', '2022-05-26'),
(12, '12. How do you rate the appearance & cleanliness of the office areas, classrooms, common areas, & restrooms in your facility?', '2022-05-18', '2022-05-26'),
(13, '13. How do you rate the condition and adequacy of indoor lighting and electrical systems within your building?\r\n', '2022-05-18', '2022-05-26'),
(14, '14. How do you rate the lighting conditions for all outdoor areas around your facility?', '2022-05-18', '2022-05-26'),
(15, '15. How do you rate your familiarity with, user-friendliness & effectiveness of Facilities Management\'s recycling program?\r\n', '2022-05-18', '2022-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `StudentID` int(11) NOT NULL,
  `StudentName` varchar(250) NOT NULL,
  `StudentNumber` varchar(250) NOT NULL,
  `StudentPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`StudentID`, `StudentName`, `StudentNumber`, `StudentPassword`) VALUES
(1, 'Kurt Denzel', '20201125780', '123'),
(2, 'Carlo', '12122345678', '123'),
(3, 'Keannu', '20201457431', '123'),
(4, 'Elisha', '12345678912', '123'),
(22, 'Aronn', '20201756234', '123'),
(23, 'Jerricke', '20214571234', '123'),
(27, 'naruto', '20206587543', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `tbl_answers`
--
ALTER TABLE `tbl_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_choices`
--
ALTER TABLE `tbl_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_answers`
--
ALTER TABLE `tbl_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_choices`
--
ALTER TABLE `tbl_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
