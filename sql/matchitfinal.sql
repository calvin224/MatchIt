-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 08:40 PM
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

--
-- Dumping data for table `abouttable`
--

INSERT INTO `abouttable` (`unique_id`, `AboutID`, `Rank`) VALUES
(1596368926, 29, 1),
(1596368926, 1, 1),
(1596368926, 6, 1),
(1596368926, 12, 1),
(1596368926, 21, 1),
(1596368926, 24, 1),
(157434744, 27, 1),
(157434744, 1, 1),
(157434744, 8, 1),
(157434744, 12, 1),
(157434744, 20, 1),
(157434744, 24, 1),
(380519091, 27, 1),
(380519091, 1, 1),
(380519091, 8, 1),
(380519091, 12, 1),
(380519091, 21, 1),
(380519091, 24, 1),
(918324180, 28, 1),
(918324180, 2, 1),
(918324180, 7, 1),
(918324180, 13, 1),
(918324180, 21, 1),
(918324180, 23, 1);

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
(1, 'Brown Hair', '1'),
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
(23, 'Thin', '1'),
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

--
-- Dumping data for table `blacklisttable`
--

INSERT INTO `blacklisttable` (`ID`, `Email`, `Timestamp`) VALUES
(157434744, 'sarah@gmail.com', 0);

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

--
-- Dumping data for table `gallerypicturestable`
--

INSERT INTO `gallerypicturestable` (`unique_id`, `GalleryPicture1`, `GalleryPicture2`, `GalleryPicture3`) VALUES
(1596368926, '1651254100galleryphoto1.png', '1651254100galleryphoto2.png', '1651254100galleryphoto3.png'),
(380519091, '1651254964galleryphoto1.png', '1651254964galleryphoto2.png', '1651254964galleryphoto3.png'),
(918324180, '1651254730galleryphoto1.png', '1651254730galleryphoto2.png', '1651254730galleryphoto3.png');

-- --------------------------------------------------------

--
-- Table structure for table `hobbiestable`
--

CREATE TABLE `hobbiestable` (
  `unique_id` int(255) DEFAULT NULL,
  `InterestID` int(255) DEFAULT NULL,
  `Rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobbiestable`
--

INSERT INTO `hobbiestable` (`unique_id`, `InterestID`, `Rank`) VALUES
(1553898402, 1, 1),
(1553898402, 26, 1),
(1553898402, 48, 1),
(1596368926, 14, 1),
(1596368926, 15, 1),
(1596368926, 28, 1),
(1596368926, 29, 1),
(1596368926, 39, 1),
(1596368926, 40, 1),
(1596368926, 60, 1),
(1596368926, 61, 1),
(1596368926, 62, 1),
(1596368926, 63, 1),
(157434744, 1, 1),
(157434744, 4, 1),
(157434744, 27, 1),
(157434744, 46, 1),
(157434744, 54, 1),
(380519091, 5, 1),
(380519091, 7, 1),
(380519091, 19, 1),
(380519091, 24, 1),
(380519091, 27, 1),
(380519091, 33, 1),
(380519091, 40, 1),
(380519091, 43, 1),
(380519091, 54, 1),
(380519091, 55, 1),
(380519091, 65, 1),
(918324180, 1, 1),
(918324180, 8, 1),
(918324180, 18, 1),
(918324180, 27, 1),
(918324180, 32, 1),
(918324180, 43, 1),
(918324180, 47, 1),
(918324180, 57, 1),
(918324180, 68, 1);

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

--
-- Dumping data for table `locationinformation`
--

INSERT INTO `locationinformation` (`unique_id`, `Address Line 1`, `Address Line 2`, `Address Line 3`, `City`, `County`, `Country`, `LAT_Coord`, `LNG_Coord`) VALUES
(918324180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `matchingtable`
--

INSERT INTO `matchingtable` (`MatchID`, `UserA_ID`, `UserB_ID`, `ConnectionTimestamp`, `Status`) VALUES
(265785407, 1596368926, 157434744, NULL, 'accepted'),
(758856944, 380519091, 1596368926, NULL, 'accepted'),
(785033114, 157434744, 1596368926, NULL, 'accepted'),
(1547064061, 1596368926, 380519091, NULL, 'accepted');

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
(1, 157434744, 1596368926, NULL, 'Hi', NULL, b'1'),
(2, 1596368926, 157434744, NULL, 'Hi', NULL, b'1');

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

--
-- Dumping data for table `profiletable`
--

INSERT INTO `profiletable` (`unique_id`, `Age`, `Gender`, `Seeking`, `Description`, `BackgroundColour`, `Banned`, `Location`, `NewHatch`, `OnFire`, `TopUser`, `Ghost`, `isfrosty`) VALUES
(157434744, 20, 'Female', 'Male', NULL, '#7E75B7', NULL, 'Limerick', '&#x1F423', '&#x1F525', '&#x1F947', '', ''),
(380519091, NULL, 'Female', 'Male', 'My bio', '#7E75B7', NULL, NULL, '&#x1F423', '', '', '', ''),
(871839920, NULL, NULL, NULL, NULL, '#7E75B7', NULL, NULL, '&#x1F423', '', '', '', ''),
(918324180, 22, 'Male', 'Male', 'This is my bio', '#7E75B7', NULL, 'Limerick', '&#x1F423', '', '', '', ''),
(1596368926, 20, 'Male', 'Female', 'My Bio', '#9696e4', NULL, 'Limerick', '&#x1F423', '', '&#x1F947', '', '');

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
  `Completed` tinyint(1) DEFAULT 1,
  `status` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `Admin`, `Completed`, `status`, `img`) VALUES
(3, 1596368926, 'Jack', 'Boland', 'jack@gmail.com', '4c6c9e650ce66e5726d95b13a60654bd', 1, 1, 'Active now', '1651070169download.png'),
(6, 380519091, 'Sarah', 'Smith', 'henry@gmail.com', '179909b745f81f03f177a3079e0ce5e3', NULL, 1, 'Offline now', '1651251753download.png'),
(7, 918324180, 'henry', 'jones', 'henryjones@gmail.com', '027e4180beedb29744413a7ea6b84a42', NULL, 1, 'Offline now', '1651254681download.png');

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
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
