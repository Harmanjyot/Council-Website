-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 10:04 AM
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
-- Database: `studentcouncil`
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
(1, 'Computers', 1, '65', 0, 0),
(2, 'Computers', 2, '60', 0, 0),
(3, 'Computers', 3, '60', 0, 0),
(4, 'Computers', 4, '65', 0, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `eventregistrations`
--

CREATE TABLE `eventregistrations` (
  `SrNo` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `festregistrations`
--

CREATE TABLE `festregistrations` (
  `SrNo` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentRollNo` varchar(6) NOT NULL,
  `studentEmailID` varchar(255) NOT NULL,
  `studentBranch` varchar(255) NOT NULL,
  `studentYear` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentcriteria`
--

CREATE TABLE `studentcriteria` (
  `studentID` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `culturalEvent` tinyint(1) NOT NULL,
  `sport_technicalEvent` tinyint(1) NOT NULL,
  `criteriaStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchdata`
--
ALTER TABLE `branchdata`
  ADD PRIMARY KEY (`branchID`);

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
-- Indexes for table `festregistrations`
--
ALTER TABLE `festregistrations`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `studentRollNo` (`studentRollNo`),
  ADD UNIQUE KEY `studentEmailID` (`studentEmailID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchdata`
--
ALTER TABLE `branchdata`
  MODIFY `branchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventlist`
--
ALTER TABLE `eventlist`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `eventregistrations`
--
ALTER TABLE `eventregistrations`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `festregistrations`
--
ALTER TABLE `festregistrations`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
