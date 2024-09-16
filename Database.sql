-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- DROP DATABASE project;
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdonationdetails`
--

CREATE TABLE `bookdonationdetails` (
  `bookdonationid` int(11) NOT NULL,
  `bookdonationquantity` int(11) NOT NULL,
  `bookdonationtype` varchar(30) NOT NULL,
  `bookdonationaddress` varchar(50) NOT NULL,
  `bookdonationdate` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookdonationdetails`
--

INSERT INTO `bookdonationdetails` (`bookdonationid`, `bookdonationquantity`, `bookdonationtype`, `bookdonationaddress`, `bookdonationdate`, `name`, `contact`) VALUES
(1, 20, 'Knowledge Book', '58,pancvati', '2024-06-28', 'Dharmik', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookdonor`
--

CREATE TABLE `bookdonor` (
  `bookdonationid` int(11) DEFAULT NULL,
  `donorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clothedonationdetails`
--

CREATE TABLE `clothedonationdetails` (
  `clothedonationid` int(11) NOT NULL,
  `clothedonationquantity` int(11) NOT NULL,
  `clothedonationsize` varchar(20) NOT NULL,
  `clothedonationaddress` varchar(50) NOT NULL,
  `clothedonationdate` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothedonationdetails`
--

INSERT INTO `clothedonationdetails` (`clothedonationid`, `clothedonationquantity`, `clothedonationsize`, `clothedonationaddress`, `clothedonationdate`, `name`, `contact`) VALUES
(1, 50, '1-8 years', 'dfghjkl', '2024-07-01', 'Dharmik', '');

-- --------------------------------------------------------

--
-- Table structure for table `clothedonor`
--

CREATE TABLE `clothedonor` (
  `clothedonationid` int(11) DEFAULT NULL,
  `donorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactId` int(11) NOT NULL,
  `contactName` varchar(10) NOT NULL,
  `contactEmail` varchar(50) NOT NULL,
  `contactPhone` bigint(20) NOT NULL,
  `contactAddress` varchar(15) NOT NULL,
  `contactNote` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donationallocationdetails`
--

CREATE TABLE `donationallocationdetails` (
  `dAllocationId` int(11) NOT NULL,
  `pickupMenId` int(11) DEFAULT NULL,
  `donorRequestApprovalId` int(11) DEFAULT NULL,
  `pickupManRequestApprovalId` int(11) DEFAULT NULL,
  `clothedonationaddress` varchar(50) DEFAULT NULL,
  `bookdonationaddress` varchar(50) DEFAULT NULL,
  `picupmenDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donormaster`
--

CREATE TABLE `donormaster` (
  `donorId` int(11) NOT NULL,
  `donorUserName` varchar(30) NOT NULL,
  `donorContact` bigint(20) NOT NULL,
  `donorDob` date NOT NULL,
  `donorEmail` varchar(50) NOT NULL,
  `donorStreet` varchar(50) NOT NULL,
  `donorArea` varchar(50) NOT NULL,
  `donorCity` varchar(50) NOT NULL,
  `donorPincode` int(11) NOT NULL,
  `donorPassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donormaster`
--

INSERT INTO `donormaster` (`donorId`, `donorUserName`, `donorContact`, `donorDob`, `donorEmail`, `donorStreet`, `donorArea`, `donorCity`, `donorPincode`, `donorPassword`) VALUES
(111, 'kenil', 9574517681, '2005-06-22', 'hopefulherts@gmail.com', '58,Panchvati Soc.', 'shyamdham', 'Surat', 395006, '$2y$10$W5nGTbfbVdi8bQaYpG1QFec6Qd2t.bZd.XEQgWMn6Cf5GEmRf6VC6'),
(112, 'kenil', 9574517681, '2005-06-22', '22bmiit010@gmail.com', '58,pancvti', 'shaymdham', 'surat', 395006, '$2y$10$muwjc/UKiu8JcYG2Mfzu2e94S2t0fRuDhMKFIypY2MmFrx5qEnQKS');

-- --------------------------------------------------------

--
-- Table structure for table `donorrequestapprovaldetail`
--

CREATE TABLE `donorrequestapprovaldetail` (
  `drApprovalid` int(11) NOT NULL,
  `donorId` int(11) DEFAULT NULL,
  `drApprovalStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventorganizer`
--

CREATE TABLE `eventorganizer` (
  `eventId` int(11) NOT NULL,
  `eventDate` date NOT NULL,
  `eventPlace` varchar(10) NOT NULL,
  `eventHandler` varchar(10) NOT NULL,
  `eventType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moneydonationdetails`
--

CREATE TABLE `moneydonationdetails` (
  `moneydonationid` int(11) NOT NULL,
  `donationamount` int(11) NOT NULL,
  `donorfirstname` varchar(30) NOT NULL,
  `donorlastname` varchar(50) NOT NULL,
  `donoremail` varchar(50) NOT NULL,
  `donoraddress` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `cardholdername` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moneydonor`
--

CREATE TABLE `moneydonor` (
  `moneydonationid` int(11) DEFAULT NULL,
  `donorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizermaster`
--

CREATE TABLE `organizermaster` (
  `orgId` int(11) NOT NULL,
  `orgUserName` varchar(30) NOT NULL,
  `orgEmail` varchar(50) NOT NULL,
  `orgStreet` varchar(50) NOT NULL,
  `orgArea` varchar(50) NOT NULL,
  `orgCity` varchar(50) NOT NULL,
  `orgPincode` int(11) NOT NULL,
  `orgPassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizermaster`
--

INSERT INTO `organizermaster` (`orgId`, `orgUserName`, `orgEmail`, `orgStreet`, `orgArea`, `orgCity`, `orgPincode`, `orgPassword`) VALUES
(1, 'dd', 'dd@gmail.com', 'a', 's', 'd', 12, 'dd1234567');

-- --------------------------------------------------------

--
-- Table structure for table `pickupmanrequestapprovaldetail`
--

CREATE TABLE `pickupmanrequestapprovaldetail` (
  `drApprovalid` int(11) NOT NULL,
  `pickupMenId` int(11) DEFAULT NULL,
  `drApprovalStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickupmenmaster`
--

CREATE TABLE `pickupmenmaster` (
  `pickupMenId` int(11) NOT NULL,
  `pickupMenUserName` varchar(10) NOT NULL,
  `pickupMenContact` bigint(20) NOT NULL,
  `pickupMenDob` date NOT NULL,
  `pickupMenEmail` varchar(50) NOT NULL,
  `pickupMenStreet` varchar(50) NOT NULL,
  `pickupMenArea` varchar(50) NOT NULL,
  `pickupMenCity` varchar(50) NOT NULL,
  `pickupMenPincode` int(11) NOT NULL,
  `pickupMenPassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pickupmenmaster`
--

INSERT INTO `pickupmenmaster` (`pickupMenId`, `pickupMenUserName`, `pickupMenContact`, `pickupMenDob`, `pickupMenEmail`, `pickupMenStreet`, `pickupMenArea`, `pickupMenCity`, `pickupMenPincode`, `pickupMenPassword`) VALUES
(44, 'kenil', 9574517681, '2005-06-22', 'hopefulherts@gmail.com', '58,pancvti', 'shaymdham', 'surat', 395006, '$2y$10$O7XCslH35msZwQqTsE0BVeQb2OMhM92VcC9d0ZdqNuV1p5K7ATae6'),
(57, 'dharmik', 9574517681, '2005-06-22', 'hopefulherts@gmail.com', '58,pancvti', 'shaymdham', 'surat', 395006, '$2y$10$Hw4Xd06BQgeegG0Qm/vKYeqCf3Jsr37tKcNs2vpOoMhQVuXzIJiU.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdonationdetails`
--
ALTER TABLE `bookdonationdetails`
  ADD PRIMARY KEY (`bookdonationid`);

--
-- Indexes for table `bookdonor`
--
ALTER TABLE `bookdonor`
  ADD KEY `bookdonationid` (`bookdonationid`),
  ADD KEY `donorId` (`donorId`);

--
-- Indexes for table `clothedonationdetails`
--
ALTER TABLE `clothedonationdetails`
  ADD PRIMARY KEY (`clothedonationid`);

--
-- Indexes for table `clothedonor`
--
ALTER TABLE `clothedonor`
  ADD KEY `clothedonationid` (`clothedonationid`),
  ADD KEY `donorId` (`donorId`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `donationallocationdetails`
--
ALTER TABLE `donationallocationdetails`
  ADD PRIMARY KEY (`dAllocationId`),
  ADD KEY `pickupMenId` (`pickupMenId`),
  ADD KEY `donorRequestApprovalId` (`donorRequestApprovalId`),
  ADD KEY `pickupManRequestApprovalId` (`pickupManRequestApprovalId`);

--
-- Indexes for table `donormaster`
--
ALTER TABLE `donormaster`
  ADD PRIMARY KEY (`donorId`),
  ADD UNIQUE KEY `donorEmail` (`donorEmail`);

--
-- Indexes for table `donorrequestapprovaldetail`
--
ALTER TABLE `donorrequestapprovaldetail`
  ADD PRIMARY KEY (`drApprovalid`),
  ADD KEY `donorId` (`donorId`);

--
-- Indexes for table `eventorganizer`
--
ALTER TABLE `eventorganizer`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `moneydonationdetails`
--
ALTER TABLE `moneydonationdetails`
  ADD PRIMARY KEY (`moneydonationid`);

--
-- Indexes for table `moneydonor`
--
ALTER TABLE `moneydonor`
  ADD KEY `moneydonationid` (`moneydonationid`),
  ADD KEY `donorId` (`donorId`);

--
-- Indexes for table `organizermaster`
--
ALTER TABLE `organizermaster`
  ADD PRIMARY KEY (`orgId`);

--
-- Indexes for table `pickupmanrequestapprovaldetail`
--
ALTER TABLE `pickupmanrequestapprovaldetail`
  ADD PRIMARY KEY (`drApprovalid`),
  ADD KEY `pickupMenId` (`pickupMenId`);

--
-- Indexes for table `pickupmenmaster`
--
ALTER TABLE `pickupmenmaster`
  ADD PRIMARY KEY (`pickupMenId`),
  ADD UNIQUE KEY `pickupMenUserName` (`pickupMenUserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdonationdetails`
--
ALTER TABLE `bookdonationdetails`
  MODIFY `bookdonationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clothedonationdetails`
--
ALTER TABLE `clothedonationdetails`
  MODIFY `clothedonationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donationallocationdetails`
--
ALTER TABLE `donationallocationdetails`
  MODIFY `dAllocationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donormaster`
--
ALTER TABLE `donormaster`
  MODIFY `donorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `donorrequestapprovaldetail`
--
ALTER TABLE `donorrequestapprovaldetail`
  MODIFY `drApprovalid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventorganizer`
--
ALTER TABLE `eventorganizer`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moneydonationdetails`
--
ALTER TABLE `moneydonationdetails`
  MODIFY `moneydonationid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizermaster`
--
ALTER TABLE `organizermaster`
  MODIFY `orgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pickupmanrequestapprovaldetail`
--
ALTER TABLE `pickupmanrequestapprovaldetail`
  MODIFY `drApprovalid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickupmenmaster`
--
ALTER TABLE `pickupmenmaster`
  MODIFY `pickupMenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookdonor`
--
ALTER TABLE `bookdonor`
  ADD CONSTRAINT `bookdonor_ibfk_1` FOREIGN KEY (`bookdonationid`) REFERENCES `bookdonationdetails` (`bookdonationid`),
  ADD CONSTRAINT `bookdonor_ibfk_2` FOREIGN KEY (`donorId`) REFERENCES `donormaster` (`donorId`);

--
-- Constraints for table `clothedonor`
--
ALTER TABLE `clothedonor`
  ADD CONSTRAINT `clothedonor_ibfk_1` FOREIGN KEY (`clothedonationid`) REFERENCES `clothedonationdetails` (`clothedonationid`),
  ADD CONSTRAINT `clothedonor_ibfk_2` FOREIGN KEY (`donorId`) REFERENCES `donormaster` (`donorId`);

--
-- Constraints for table `donationallocationdetails`
--
ALTER TABLE `donationallocationdetails`
  ADD CONSTRAINT `donationallocationdetails_ibfk_1` FOREIGN KEY (`pickupMenId`) REFERENCES `pickupmenmaster` (`pickupMenId`),
  ADD CONSTRAINT `donationallocationdetails_ibfk_2` FOREIGN KEY (`donorRequestApprovalId`) REFERENCES `donorrequestapprovaldetail` (`drApprovalid`),
  ADD CONSTRAINT `donationallocationdetails_ibfk_3` FOREIGN KEY (`pickupManRequestApprovalId`) REFERENCES `pickupmanrequestapprovaldetail` (`drApprovalid`);

--
-- Constraints for table `donorrequestapprovaldetail`
--
ALTER TABLE `donorrequestapprovaldetail`
  ADD CONSTRAINT `donorrequestapprovaldetail_ibfk_1` FOREIGN KEY (`donorId`) REFERENCES `donormaster` (`donorId`);

--
-- Constraints for table `moneydonor`
--
ALTER TABLE `moneydonor`
  ADD CONSTRAINT `moneydonor_ibfk_1` FOREIGN KEY (`moneydonationid`) REFERENCES `moneydonationdetails` (`moneydonationid`),
  ADD CONSTRAINT `moneydonor_ibfk_2` FOREIGN KEY (`donorId`) REFERENCES `donormaster` (`donorId`);

--
-- Constraints for table `pickupmanrequestapprovaldetail`
--
ALTER TABLE `pickupmanrequestapprovaldetail`
  ADD CONSTRAINT `pickupmanrequestapprovaldetail_ibfk_1` FOREIGN KEY (`pickupMenId`) REFERENCES `pickupmenmaster` (`pickupMenId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
