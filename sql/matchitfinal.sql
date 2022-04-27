-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 04:00 PM
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
-- Database: `matchitfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouttable`
--

CREATE TABLE `abouttable` (
  `unique_id` int(255) NOT NULL,
  `AboutID` int(255) DEFAULT NULL,
  `Rank` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `availableabouttable`
--

CREATE TABLE `availableabouttable` (
  `AboutID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availableabouttable`
--

INSERT INTO `availableabouttable` (`AboutID`, `Name`, `Icon`) VALUES
(2, 'Blonde Hair', '1'),
(3, 'Black Hair', '1'),
(4, 'Red Hair', '1'),
(5, 'Dyed Hair', '1'),
(6, 'Short Hair', '1'),
(7, 'Medium Length Hair', '1'),
(8, 'Long Hair', '1'),
(9, 'Curly Hair', '1'),
(10, 'Straight Hair', '1'),
(11, 'Wavy Hair', '1'),
(12, 'Blue Eyes', '1'),
(13, 'Brown Eyes', '1'),
(14, 'Black Eyes', '1'),
(15, 'Hazel Eyes', '1'),
(16, 'Grey Eyes', '1'),
(17, 'Green Eyes', '1'),
(18, 'Amber Eyes', '1'),
(19, 'Violet Eyes', '1'),
(20, 'Short', '1'),
(21, 'Average', '1'),
(22, 'Tall', '1'),
(23, 'Skinny', '1'),
(24, 'Average', '1'),
(25, 'Full Figured', '1'),
(26, 'Dad Bod', '1'),
(27, 'Freckles', '1'),
(28, 'Facial Hair', '1'),
(29, 'Piercings', '1'),
(30, 'Tattoos', '1'),
(31, 'Introvert', '1'),
(32, 'Extrovert', '1');

-- --------------------------------------------------------

--
-- Table structure for table `availablehobbiestable`
--

CREATE TABLE `availablehobbiestable` (
  `InterestID` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availablehobbiestable`
--

INSERT INTO `availablehobbiestable` (`InterestID`, `Name`, `Icon`) VALUES
(1, 'Acting', NULL),
(2, 'American Football', NULL),
(3, 'Animals', NULL),
(4, 'Archery', NULL),
(5, 'Art', NULL),
(6, 'Badminton', NULL),
(7, 'Baseball', NULL),
(8, 'Basketball', NULL),
(9, 'Board Games', NULL),
(10, 'Boxing', NULL),
(11, 'Camogie', NULL),
(12, 'Camping', NULL),
(13, 'Carnivore', NULL),
(14, 'Cars', NULL),
(15, 'Cat Person', NULL),
(16, 'Coffee', NULL),
(17, 'Comedy', NULL),
(18, 'Cooking', NULL),
(19, 'Cricket', NULL),
(20, 'Crypto', NULL),
(21, 'Cycling', NULL),
(22, 'Dancing', NULL),
(23, 'Disney', NULL),
(24, 'Dog Person', NULL),
(25, 'Farming', NULL),
(26, 'Fashion', NULL),
(27, 'Fishing', NULL),
(28, 'Food', NULL),
(29, 'Formula 1', NULL),
(30, 'Gaelic Football', NULL),
(31, 'Gaming', NULL),
(32, 'Gardening', NULL),
(33, 'Golf', NULL),
(34, 'Gym', NULL),
(35, 'Handball', NULL),
(36, 'Hiking', NULL),
(37, 'Hockey', NULL),
(38, 'Hurling', NULL),
(39, 'MMA', NULL),
(40, 'Marvel', NULL),
(41, 'Movies', NULL),
(42, 'Music', NULL),
(43, 'NFTs', NULL),
(44, 'Netflix', NULL),
(45, 'Omnivore', NULL),
(46, 'Outdoors', NULL),
(47, 'Pescitarian', NULL),
(48, 'Photography', NULL),
(49, 'Reading', NULL),
(50, 'Rugby', NULL),
(51, 'Running', NULL),
(52, 'Sailing', NULL),
(53, 'Shopping', NULL),
(54, 'Singing', NULL),
(55, 'Soccer', NULL),
(56, 'Social Networking', NULL),
(57, 'Star Wars', NULL),
(58, 'Surfing', NULL),
(59, 'Swimming', NULL),
(60, 'Tea', NULL),
(61, 'Technology', NULL),
(62, 'Tennis', NULL),
(63, 'Vegan', NULL),
(64, 'Vegetarian', NULL),
(65, 'Volunteering', NULL),
(66, 'Walking', NULL),
(67, 'Writing', NULL),
(68, 'Yoga', NULL),
(69, 'Zumba', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blacklisttable`
--

CREATE TABLE `blacklisttable` (
  `ID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Timestamp` int(255) NOT NULL
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
-- Table structure for table `gallerypicturestable`
--

CREATE TABLE `gallerypicturestable` (
  `unique_id` int(255) DEFAULT NULL,
  `GalleryPicture1` varchar(255) DEFAULT NULL,
  `GalleryPicture2` varchar(255) DEFAULT NULL,
  `GalleryPicture3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hobbiestable`
--

CREATE TABLE `hobbiestable` (
  `unique_id` int(255) DEFAULT NULL,
  `InterestID` int(255) DEFAULT NULL,
  `Rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locationinformation`
--

CREATE TABLE `locationinformation` (
  `unique_id` int(255) NOT NULL,
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
  `Age` int(255) DEFAULT NULL,
  `Gender` enum('Male','Female','Other','') DEFAULT NULL,
  `Seeking` enum('Male','Female',' All','') DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `BackgroundColour` varchar(255) DEFAULT '#7E75B7',
  `Banned` binary(1) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `NewHatch` varchar(255) NOT NULL,
  `OnFire` varchar(255) NOT NULL,
  `TopUser` varchar(255) NOT NULL,
  `Ghost` varchar(255) NOT NULL,
  `isfrosty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `unique_id` int(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Admin` tinyint(1) DEFAULT NULL,
  `Completed` tinyint(1) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouttable`
--
ALTER TABLE `abouttable`
  ADD KEY `UserID` (`unique_id`),
  ADD KEY `AboutID` (`AboutID`);

--
-- Indexes for table `availableabouttable`
--
ALTER TABLE `availableabouttable`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `availablehobbiestable`
--
ALTER TABLE `availablehobbiestable`
  ADD PRIMARY KEY (`InterestID`);

--
-- Indexes for table `blacklisttable`
--
ALTER TABLE `blacklisttable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chat table`
--
ALTER TABLE `chat table`
  ADD PRIMARY KEY (`ChatID`);

--
-- Indexes for table `gallerypicturestable`
--
ALTER TABLE `gallerypicturestable`
  ADD KEY `UserID` (`unique_id`);

--
-- Indexes for table `hobbiestable`
--
ALTER TABLE `hobbiestable`
  ADD KEY `UserID` (`unique_id`),
  ADD KEY `InterestID` (`InterestID`);

--
-- Indexes for table `locationinformation`
--
ALTER TABLE `locationinformation`
  ADD KEY `UserID` (`unique_id`);

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
-- Indexes for table `profiletable`
--
ALTER TABLE `profiletable`
  ADD PRIMARY KEY (`unique_id`);

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
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
