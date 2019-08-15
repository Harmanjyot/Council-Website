-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 07:37 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `branchdata`
--

CREATE TABLE `branchdata` (
  `branchID` int(11) NOT NULL,
  `branchName` varchar(255) NOT NULL,
  `branchYear` int(11) NOT NULL,
  `branchStrength` varchar(255) NOT NULL,
  `branchRegistration` int(11) NOT NULL,
  `branchCriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchdata`
--

INSERT INTO `branchdata` (`branchID`, `branchName`, `branchYear`, `branchStrength`, `branchRegistration`, `branchCriteria`) VALUES
(1, 'Comps', 1, '65', 0, 0),
(2, 'Comps', 2, '60', 0, 0),
(3, 'Comps', 3, '60', 0, 0),
(4, 'Comps', 4, '65', 0, 0),
(7, 'IT', 1, '65', 0, 0),
(8, 'IT', 2, '65', 0, 0),
(9, 'IT', 3, '60', 1, 1),
(10, 'IT', 4, '0', 0, 0),
(11, 'Mechanical', 1, '0', 0, 0),
(12, 'Mechanical', 2, '0', 0, 0),
(13, 'Mechanical', 3, '0', 0, 0),
(14, 'Mechanical', 4, '0', 0, 0),
(15, 'EXTC', 1, '0', 0, 0),
(16, 'EXTC', 2, '0', 0, 0),
(17, 'EXTC', 3, '0', 0, 0),
(18, 'EXTC', 4, '0', 0, 0),
(19, 'Electrical', 1, '0', 0, 0),
(20, 'Electrical', 2, '0', 0, 0),
(21, 'Electrical', 3, '0', 0, 0),
(22, 'Electrical', 4, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branchscore`
--

CREATE TABLE `branchscore` (
  `SrNo` int(11) NOT NULL,
  `branchName` varchar(255) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchscore`
--

INSERT INTO `branchscore` (`SrNo`, `branchName`, `Score`) VALUES
(1, 'IT', 0),
(2, 'Mechanical', 0),
(3, 'Computers', 0),
(4, 'EXTC', 0),
(5, 'Electrical', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eventlist`
--

CREATE TABLE `eventlist` (
  `SrNo` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDate` varchar(255) NOT NULL,
  `eventTime` varchar(255) NOT NULL,
  `eventDescription` varchar(255) NOT NULL,
  `eventCapacity` int(11) NOT NULL,
  `eventImage` longblob NOT NULL,
  `eventType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlist`
--

INSERT INTO `eventlist` (`SrNo`, `eventName`, `eventDate`, `eventTime`, `eventDescription`, `eventCapacity`, `eventImage`, `eventType`) VALUES
(29, 'e1', '1', '1', '1', 12, '', 'Cultural'),
(30, 'tjh', 'rth', 'rtj', 'rtjh', 33, '', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `eventregistrations`
--

CREATE TABLE `eventregistrations` (
  `SrNo` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `studentRoll` varchar(6) NOT NULL,
  `eventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventregistrations`
--

INSERT INTO `eventregistrations` (`SrNo`, `studentID`, `studentRoll`, `eventID`) VALUES
(10, 18, '501746', 29);

-- --------------------------------------------------------

--
-- Table structure for table `sponsordata`
--

CREATE TABLE `sponsordata` (
  `SrNo` int(11) NOT NULL,
  `sponsorName` varchar(255) NOT NULL,
  `sponsorImage` longblob NOT NULL,
  `sponsorLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcriteria`
--

CREATE TABLE `studentcriteria` (
  `studentID` int(6) NOT NULL,
  `branchName` varchar(255) NOT NULL,
  `culturalEvent` tinyint(1) NOT NULL,
  `sport_technicalEvent` tinyint(1) NOT NULL,
  `criteriaStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `userID` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentRoll` varchar(6) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `studentYear` varchar(1) NOT NULL,
  `studentBranch` varchar(255) NOT NULL,
  `studentPass` varchar(255) NOT NULL,
  `studentGender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`userID`, `studentName`, `studentRoll`, `studentEmail`, `studentYear`, `studentBranch`, `studentPass`, `studentGender`) VALUES
(18, 'Harman', '501746', 'harmanrayat@gmail.com', '3', 'IT', '$2y$10$ud2iRzfkn9Wse/z91EPm6uZsJSiKfEuVuLN/B7rTOtA719G1JuH7e', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `studentverification`
--

CREATE TABLE `studentverification` (
  `SrNo` int(11) NOT NULL,
  `studentRoll` varchar(6) NOT NULL,
  `studentEmail` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `studentPassword` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentBranch` varchar(255) NOT NULL,
  `studentYear` varchar(1) NOT NULL,
  `studentGender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentverification`
--

INSERT INTO `studentverification` (`SrNo`, `studentRoll`, `studentEmail`, `verified`, `studentPassword`, `vkey`, `studentName`, `studentBranch`, `studentYear`, `studentGender`) VALUES
(0, '501746', 'harmanrayat@gmail.com', 1, '$2y$10$ud2iRzfkn9Wse/z91EPm6uZsJSiKfEuVuLN/B7rTOtA719G1JuH7e', '29f10695bd12aa79bb2c8a44fb6da87a', 'Harman', 'IT', '3', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchdata`
--
ALTER TABLE `branchdata`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `branchscore`
--
ALTER TABLE `branchscore`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `eventlist`
--
ALTER TABLE `eventlist`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `eventName` (`eventName`);

--
-- Indexes for table `eventregistrations`
--
ALTER TABLE `eventregistrations`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `sponsordata`
--
ALTER TABLE `sponsordata`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `studentcriteria`
--
ALTER TABLE `studentcriteria`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `studentRoll` (`studentRoll`),
  ADD UNIQUE KEY `studentEmail` (`studentEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchdata`
--
ALTER TABLE `branchdata`
  MODIFY `branchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `branchscore`
--
ALTER TABLE `branchscore`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `eventregistrations`
--
ALTER TABLE `eventregistrations`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sponsordata`
--
ALTER TABLE `sponsordata`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
