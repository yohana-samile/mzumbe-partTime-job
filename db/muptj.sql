-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 11:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muptj`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL,
  `jobTitle` text NOT NULL,
  `jobDiscription` text NOT NULL,
  `jobSalary` int(11) NOT NULL,
  `datePosted` date NOT NULL,
  `endOfApllication` date NOT NULL,
  `postedBy` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'noPublish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `jobTitle`, `jobDiscription`, `jobSalary`, `datePosted`, `endOfApllication`, `postedBy`, `status`) VALUES
(2, 'Software Developer', 'Experienced ui designer skilled in Photoshop and Illustrator', 50000, '2023-04-29', '2023-05-06', 10, 'noPublish'),
(3, 'UI Designer', 'We are looking for energetic developers who like to code in JavaScript', 600000, '2023-04-29', '2023-05-01', 10, 'yesPublish'),
(4, 'Data Scientist', 'We need a hard working data scientist', 20000, '2023-05-01', '2023-06-10', 10, 'yesPublish');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `appId` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateApplied` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statusResult` varchar(20) NOT NULL DEFAULT 'pending',
  `interviewDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`appId`, `jobId`, `userId`, `dateApplied`, `statusResult`, `interviewDate`) VALUES
(1, 2, 1, '2023-05-01 05:30:59', 'accepted', '2023-06-10'),
(2, 1, 1, '2023-04-30 18:56:41', 'pending', '0000-00-00'),
(3, 1, 1, '2023-05-04 13:26:28', 'pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerprofile`
--

CREATE TABLE `jobseekerprofile` (
  `seekerId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `seekerCv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseekerprofile`
--

INSERT INTO `jobseekerprofile` (`seekerId`, `uId`, `seekerCv`) VALUES
(1, 1, 'Group-04.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `syestemsetting`
--

CREATE TABLE `syestemsetting` (
  `settingId` int(11) NOT NULL,
  `aboutUs` text NOT NULL,
  `phoneNo1` int(20) NOT NULL,
  `phoneNo2` int(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syestemsetting`
--

INSERT INTO `syestemsetting` (`settingId`, `aboutUs`, `phoneNo1`, `phoneNo2`, `email`) VALUES
(1, 'NI NINI UISLAM?\r\nUislam ndio dini aliyoichagua Allah, unamtaka mtu\r\namuabudu yeye peke yake na kumtii mtume wake\r\nMuhammad- Rehema na Amani za Allah ziwe juu\r\nyake.\r\nNa hatomkubalia Allah mtu yeyote mwenye kufuata\r\ndini isiyokuwa ya kiislam, na Uislam si dini maalum\r\nkwa baadhi ya watu tu, bali ndio dini ya watu wote.\r\nNa amewaamrisha Allah waja wake amri nyingi, na\r\namewakataza mambo ya haram, atakaemtii atafaulu,\r\nna atakemuasi ataangamia na kupata hasara.\r\nNa Uislam sio dini mpya, bali ni dini\r\naliyowachagulia Allah waja wake tokea aumbe hii\r\ndunia, na ndio dini iliyolinganiwa na mitume wake\r\nwote- Rehema na amani ziwe juu yao.', 620350083, 745668527, 'yohanasamile@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'is_staff',
  `gender` enum('male','female') NOT NULL,
  `complationStatus` varchar(20) NOT NULL DEFAULT 'notFinish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `fullName`, `email`, `password`, `role`, `gender`, `complationStatus`) VALUES
(1, 'yohana samile', 'yohanasamile@gmail.com', '1234', 'is_staff', 'male', 'yesFinish'),
(10, 'alice samile', 'alicesamile@gmail.com', '1234', 'is_admin', 'female', 'notFinish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`appId`);

--
-- Indexes for table `jobseekerprofile`
--
ALTER TABLE `jobseekerprofile`
  ADD PRIMARY KEY (`seekerId`);

--
-- Indexes for table `syestemsetting`
--
ALTER TABLE `syestemsetting`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `appId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobseekerprofile`
--
ALTER TABLE `jobseekerprofile`
  MODIFY `seekerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syestemsetting`
--
ALTER TABLE `syestemsetting`
  MODIFY `settingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
