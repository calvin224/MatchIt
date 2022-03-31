-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 03:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchit`
--

-- --------------------------------------------------------

--
-- Table structure for table `about table`
--

CREATE TABLE `about table` (
  `UserID` int(255) NOT NULL,
  `AboutID` int(255) DEFAULT NULL,
  `Rank` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `available about table`
--

CREATE TABLE `available about table` (
  `AboutID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `available hobbies table`
--

CREATE TABLE `available hobbies table` (
  `InterestID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist table`
--

CREATE TABLE `blacklist table` (
  `ID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat table`
--

CREATE TABLE `chat table` (
  `ChatID` int(255) NOT NULL,
  `UserA_ID` int(255) NOT NULL,
  `UserB_ID` int(255) NOT NULL,
  `PreviouslyViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery pictures table`
--

CREATE TABLE `gallery pictures table` (
  `UserID` int(255) DEFAULT NULL,
  `GalleryPicture1` varchar(255) DEFAULT NULL,
  `GalleryPicture2` varchar(255) DEFAULT NULL,
  `GalleryPicture3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies table`
--

CREATE TABLE `hobbies table` (
  `UserID` int(255) DEFAULT NULL,
  `InterestID` int(255) DEFAULT NULL,
  `Rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location information`
--

CREATE TABLE `location information` (
  `UserID` int(255) NOT NULL,
  `Address Line 1` varchar(255) DEFAULT NULL,
  `Address Line 2` varchar(255) DEFAULT NULL,
  `Address Line 3` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `County` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `LAT_Coord` varchar(255) DEFAULT NULL,
  `LNG_Coord` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matchingtable`
--

CREATE TABLE `matchingtable` (
  `MatchID` int(255) NOT NULL,
  `UserA_ID` int(255) DEFAULT NULL,
  `UserB_ID` int(255) DEFAULT NULL,
  `ConnectionTimestamp` datetime DEFAULT NULL,
  `Status` enum('accepted','declined','pending','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `msg` varchar(1000) NOT NULL,
  `IsFrosty` bit(1) DEFAULT NULL,
  `IsFirstMessage` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `potential matches table`
--

CREATE TABLE `potential matches table` (
  `ID` int(255) NOT NULL,
  `UserA_ID` int(255) NOT NULL,
  `UserB_ID` int(255) NOT NULL,
  `IsMatched` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profiletable`
--

CREATE TABLE `profiletable` (
  `unique_id` int(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Gender` enum('male','female','other','') NOT NULL,
  `Seeking` enum('male','female',' all','') DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Banned` binary(1) NOT NULL DEFAULT '\0',
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiletable`
--

INSERT INTO `profiletable` (`unique_id`, `Age`, `Gender`, `Seeking`, `Description`, `Photo`, `Banned`, `Location`) VALUES
(868689853, 12, 'male', 'female', '123', NULL, 0x00, '123'),
(0, 0, '', NULL, NULL, NULL, 0x00, NULL),
(821030718, 21, 'male', 'female', 'other yung fellas', NULL, 0x00, 'ireland'),
(471034307, 22, 'male', 'female', 'lol', NULL, 0x00, 'ireland'),
(714322596, 20, 'male', 'female', '123', NULL, 0x00, 'limerick'),
(679056926, 0, 'male', NULL, NULL, NULL, 0x00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Admin` binary(1) NOT NULL DEFAULT '\0',
  `Completed` tinyint(1) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `Admin`, `Completed`, `status`, `img`) VALUES
(4, 868689853, 'Calvin', 'Power', 'calvin@gmail.com', '202cb962ac59075b964b07152d234b70', 0x00, 1, 'Offline now', '1648043840raccoon-1.jpg'),
(9, 679056926, 'Peter', 'Jack', 'calvin22@gmail.com', '202cb962ac59075b964b07152d234b70', 0x00, 1, 'Active now', '1648424266gqpcwg5r0y051.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about table`
--
ALTER TABLE `about table`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `AboutID` (`AboutID`);

--
-- Indexes for table `available about table`
--
ALTER TABLE `available about table`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `available hobbies table`
--
ALTER TABLE `available hobbies table`
  ADD PRIMARY KEY (`InterestID`);

--
-- Indexes for table `blacklist table`
--
ALTER TABLE `blacklist table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chat table`
--
ALTER TABLE `chat table`
  ADD PRIMARY KEY (`ChatID`);

--
-- Indexes for table `gallery pictures table`
--
ALTER TABLE `gallery pictures table`
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `hobbies table`
--
ALTER TABLE `hobbies table`
  ADD KEY `UserID` (`UserID`),
  ADD KEY `InterestID` (`InterestID`);

--
-- Indexes for table `location information`
--
ALTER TABLE `location information`
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `matchingtable`
--
ALTER TABLE `matchingtable`
  ADD PRIMARY KEY (`MatchID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;