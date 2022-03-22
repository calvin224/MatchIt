-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 12:27 PM
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
-- Database: `test1`
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
-- Table structure for table `matching table`
--

CREATE TABLE `matching table` (
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

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `Timestamp`, `msg`, `IsFrosty`, `IsFirstMessage`) VALUES
(1, 158227308, 1646076043, NULL, 'hello', NULL, NULL),
(2, 158227308, 1646076043, NULL, 'hello2', NULL, NULL),
(3, 158227308, 1646076043, NULL, 'hello31234', NULL, NULL),
(4, 158227308, 1646076043, NULL, 'helelrewqr', NULL, NULL),
(5, 158227308, 1646076043, NULL, 'wrerwe2342342', NULL, NULL),
(6, 1646076043, 974279347, NULL, 'hllo', NULL, NULL),
(7, 1646076043, 974279347, NULL, 'hi', NULL, NULL),
(8, 974279347, 1646076043, NULL, 'ha ha', NULL, NULL),
(9, 1646076043, 974279347, NULL, 'wewewewew', NULL, NULL),
(10, 1646076043, 974279347, NULL, 'wq12312313', NULL, NULL),
(11, 1646076043, 974279347, NULL, '312wdwsdq', NULL, NULL),
(12, 1646076043, 974279347, NULL, '12asfwe2qwe', NULL, NULL),
(13, 1646076043, 974279347, NULL, 'weqweeqwe', NULL, NULL);

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
-- Table structure for table `profile table`
--

CREATE TABLE `profile table` (
  `UserID` int(255) NOT NULL,
  `Age` int(255) DEFAULT NULL,
  `Gender` enum('male','female','other','') DEFAULT NULL,
  `Seeking` enum('male','female',' all','') DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Banned` binary(1) NOT NULL DEFAULT '\0',
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Completed` binary(1) NOT NULL DEFAULT '\0',
  `status` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `Admin`, `Completed`, `status`, `img`) VALUES
(0, 158227308, 'Calvin', 'Power', 'p@gmail.com', '202cb962ac59075b964b07152d234b70', 0x00, 0x00, 'Offline now', '1647910298download (2).jpg'),
(0, 1646076043, 'Jack', 'Boland', 'Jack@jack.com', '40687c8206d15373954d8b27c6724f62', 0x00, 0x00, 'Active now', '1647922005Untitled222.png'),
(0, 974279347, 'Jack2', 'Boland', 'Jack@jack2.com', '5f1a99e81e562a86869b223f79c51f16', 0x00, 0x00, 'Offline now', '1647926195Untitled123132.png');

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
-- Indexes for table `matching table`
--
ALTER TABLE `matching table`
  ADD PRIMARY KEY (`MatchID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
