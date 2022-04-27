-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:22 PM
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
(857574117, 1, 1);

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
(1, 'Brown Hair', '50');

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
(1, 'Cycling', '50'),
(2, 'Running', '55');

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
(576326227, '', 2323),
(669511953, '', 33123),
(1545844848, 'banned@account.com', 0);

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
(857574117, '1650934334unknown.png', '1650934729IMG_2549.jpg', '1650934334Untitled123132.png');

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
(360432798, 1, 1),
(360432798, 2, 2),
(497396746, 1, 1),
(857574117, 1, 1),
(857574117, 2, 2);

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

--
-- Dumping data for table `matchingtable`
--

INSERT INTO `matchingtable` (`MatchID`, `UserA_ID`, `UserB_ID`, `ConnectionTimestamp`, `Status`) VALUES
(178261710, 538264511, 1022157090, NULL, 'accepted'),
(180244712, 1249584011, 1022157090, NULL, 'pending'),
(207718808, 364563527, 1484749785, NULL, 'pending'),
(249776063, 1435685844, 1484749785, NULL, 'accepted'),
(258812994, 364563527, 1484749785, NULL, 'pending'),
(264977816, 619218455, 1249584011, NULL, 'accepted'),
(308357405, 1249584011, 1237501525, NULL, 'accepted'),
(348901379, 364563527, 1484749785, NULL, 'pending'),
(385944140, 1435685844, 1249584011, NULL, 'accepted'),
(448991638, 518996865, 1484749785, NULL, 'pending'),
(503955223, 619218455, 1466193977, NULL, 'accepted'),
(570408629, 364563527, 1484749785, NULL, 'pending'),
(585570205, 1484749785, 1435685844, NULL, 'accepted'),
(589611604, 518996865, 1022157090, NULL, 'pending'),
(624543172, 1022157090, 538264511, NULL, 'accepted'),
(631680343, 518996865, 1022157090, NULL, 'pending'),
(685773777, 518996865, 1022157090, NULL, 'pending'),
(691992709, 518996865, 1435685844, NULL, 'pending'),
(729443041, 518996865, 1435685844, NULL, 'pending'),
(731119445, 1520320573, 267614633, NULL, 'pending'),
(738278718, 1249584011, 1022157090, NULL, 'pending'),
(756544370, 1249584011, 619218455, NULL, 'accepted'),
(769356556, 1237501525, 1249584011, NULL, 'accepted'),
(782238414, 1249584011, 1435685844, NULL, 'accepted'),
(812144425, 1249584011, 1435685844, NULL, 'accepted'),
(825127972, 1237501525, 1435685844, NULL, 'pending'),
(836482297, 1237501525, 1484749785, NULL, 'pending'),
(838986124, 576326227, 1435685844, NULL, 'pending'),
(864760995, 518996865, 1435685844, NULL, 'pending'),
(897660647, 1249584011, 1022157090, NULL, 'pending'),
(913878993, 1466193977, 619218455, NULL, 'accepted'),
(933108600, 1249584011, 1435685844, NULL, 'accepted'),
(934827779, 1249584011, 1022157090, NULL, 'pending'),
(990880504, 1237501525, 1435685844, NULL, 'pending'),
(1006006229, 497396746, 669511953, NULL, 'accepted'),
(1007400731, 497396746, 538883710, NULL, 'accepted'),
(1079303833, 1237501525, 1435685844, NULL, 'pending'),
(1138574761, 364563527, 1484749785, NULL, 'pending'),
(1194347855, 1237501525, 1249584011, NULL, 'accepted'),
(1250059283, 907081927, 1484749785, NULL, 'pending'),
(1251836738, 419263115, 1022157090, NULL, 'pending'),
(1402180014, 619218455, 1237501525, NULL, 'pending'),
(1453524054, 907081927, 1484749785, NULL, 'pending'),
(1466715214, 1249584011, 1022157090, NULL, 'pending'),
(1492577731, 364563527, 1484749785, NULL, 'pending'),
(1556943983, 1237501525, 1435685844, NULL, 'pending'),
(1602297415, 864903232, 669511953, NULL, 'pending'),
(1612152662, 518996865, 1435685844, NULL, 'pending');

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
(1, 1249584011, 1435685844, NULL, '4', NULL, NULL),
(2, 1435685844, 1249584011, NULL, 'Hey', NULL, NULL),
(3, 1249584011, 1237501525, NULL, 'hiiiiiiiiii :3333333333', NULL, NULL),
(4, 1237501525, 1249584011, NULL, 'Hey', NULL, NULL),
(5, 1237501525, 1249584011, NULL, 'U got snap ?', NULL, NULL),
(6, 1249584011, 1237501525, NULL, 'are you bart cos you smell like a fart', NULL, NULL),
(7, 1237501525, 1249584011, NULL, 'Wink', NULL, NULL),
(8, 1466193977, 619218455, NULL, 'hello peter', NULL, NULL),
(9, 538264511, 576326227, NULL, 'hello ', NULL, NULL),
(10, 538264511, 576326227, NULL, 'do you like to talk?', NULL, NULL),
(11, 1249584011, 619218455, NULL, 'hello cian', NULL, NULL),
(12, 619218455, 267614633, NULL, 'Hi', NULL, NULL),
(13, 419263115, 267614633, NULL, 'Hi', NULL, NULL),
(14, 267614633, 1520320573, NULL, 'Hi', NULL, NULL),
(15, 864903232, 669511953, NULL, 'HI', NULL, NULL),
(16, 660239811, 872836859, NULL, '1212', NULL, NULL),
(17, 660239811, 872836859, NULL, '121212', NULL, NULL),
(18, 660239811, 872836859, NULL, '1111', NULL, NULL),
(19, 660239811, 872836859, NULL, '1111', NULL, NULL),
(20, 660239811, 872836859, NULL, '111', NULL, NULL);

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
  `Gender` enum('male','female','other','') DEFAULT NULL,
  `Seeking` enum('male','female',' all','') DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Banned` binary(1) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiletable`
--

INSERT INTO `profiletable` (`unique_id`, `Age`, `Gender`, `Seeking`, `Description`, `Photo`, `Banned`, `Location`) VALUES
(128605450, 1, 'male', 'male', '1', NULL, NULL, '1'),
(267614633, 0, 'female', 'male', '1', NULL, NULL, ''),
(274050938, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301519134, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(360432798, 0, '', '', '', NULL, NULL, ''),
(360506766, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(364563527, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(419263115, 24, 'male', 'female', '', NULL, NULL, 'limerick'),
(497396746, 18, 'male', 'female', 'FUnny', NULL, NULL, 'Limerick'),
(518996865, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(538264511, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(538883710, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(576326227, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(619218455, 19, 'male', 'female', '123', NULL, NULL, '123'),
(660239811, 77, 'male', '', '', NULL, NULL, ''),
(669511953, 28, 'female', 'female', '', NULL, NULL, ''),
(857574117, 12, 'male', 'female', '123', NULL, NULL, '123'),
(864903232, 31, 'female', '', '', NULL, NULL, ''),
(872836859, 1, 'male', 'male', '1', NULL, NULL, '1'),
(907081927, -18, 'male', 'female', 'yung fella ', NULL, NULL, 'ireland'),
(1022157090, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1033478598, 22, 'male', 'female', '', NULL, NULL, 'Limerick'),
(1170215635, 19, 'female', 'male', '123', NULL, NULL, '123'),
(1237501525, 20, 'male', 'female', 'Glasses', NULL, NULL, 'Limerick'),
(1249584011, 21, 'male', 'female', 'Fun', NULL, NULL, 'Kilkenny'),
(1349453480, 25, 'female', 'female', 'fvddfb', NULL, NULL, 'limerick'),
(1435685844, 20, 'male', 'male', 'Cycling', NULL, NULL, 'Limerick'),
(1466193977, 19, 'male', 'female', 'i like sandels', NULL, NULL, 'limerick'),
(1484749785, 21, 'male', 'male', 'Running', NULL, NULL, 'Clare'),
(1520320573, 28, 'female', '', '', NULL, NULL, ''),
(1545844848, 0, '', '', '', NULL, NULL, '');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `Admin`, `Completed`, `status`, `img`) VALUES
(14, 619218455, 'peter', 'cunningham', 'peter@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 1, 'Active now', '1648437006unnamed (11).jpg'),
(15, 1435685844, 'Jack', 'Patrick', 'jackp@gmail.com', '40687c8206d15373954d8b27c6724f62', NULL, 1, 'Active now', '1648442712logoplain.png'),
(16, 1484749785, 'Patrick', 'Jack', 'patrickj@gmail.com', 'f87567f2159b425795ebb7ba9bc406ec', NULL, 1, 'Active now', '1648442944logo.png'),
(17, 907081927, 'Peter', 'Jack', 'jack@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, 'Offline now', '1648491365E8xmmEPWUAMok_p.jpg'),
(18, 538264511, 'Jack', 'Boland', 'jackb@gmail.com', '40687c8206d15373954d8b27c6724f62', NULL, NULL, 'Active now', '1648491654frosty.png'),
(19, 1237501525, 'John', 'Smith', 'evanmckie@outlook.com', '3fc0a7acf087f549ac2b266baf94b8b1', NULL, 1, 'Active now', '1648499711photo-1600804889194-e6fbf08ddb39.jpg'),
(20, 1249584011, 'Cian', 'Shanahan', 'cian.shanahan@hotmail.com', '42f749ade7f9e195bf475f37a44cafcb', NULL, 1, 'Active now', '1648504106b7f057dd8f94143cb71ec86693def70f.jpg'),
(21, 1022157090, 'John', 'Smith', 'johns@gmail.com', '61409aa1fd47d4a5332de23cbf59a36f', NULL, 1, 'Active now', '1648553272onfire.png'),
(22, 364563527, 'KJWCBKJW', 'JHWBCXKJW', 'KJWEHCK@GMAIL.COM', '68c9852e8e2701386b382325b7b809c5', NULL, 1, 'Active now', '1648562915pink-blue-heart-assembled-two-puzzle-pieces-pink-blue-heart-assembled-two-puzzle-pieces-isolated-white-background-138169144.jpg'),
(23, 518996865, 'MAOLIN', 'WEI', '21217009@studentmail.ul.ie', 'b0262f94b43a6e2324a3f0d843b99213', NULL, NULL, 'Offline now', '1648650343截屏2021-10-28 下午4.30.27.png'),
(24, 1466193977, 'peter', 'jack', 'peterjack@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 1, 'Offline now', '1648755355socks-and-sandals15.jpg'),
(25, 576326227, 'Talking', 'Ben', 'abc@abc.com', 'c3c834e234cc4eef6291e60c3b3295af', NULL, 1, 'Offline now', '1648824908Bengame.png'),
(26, 267614633, 'Annie', 'Sun', '123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Offline now', '1648885088006WjPMuly1guf6qnw1vej62b81dz4qp02.jpg'),
(27, 419263115, 'Sam', 'Jones', '12345678@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', NULL, 1, 'Offline now', '1648885481038111855dea2400000015995f7a3d3.jpg'),
(28, 1033478598, 'Sam', 'Jones', '1111@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Active now', '1648885912timgILPSTPFU.jpg'),
(29, 1520320573, 'peter', 'Pan ', '12345@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Offline now', '1648889037B259B86E-0A99-4DBC-9930-CD1D7D1DCE02.jpeg'),
(30, 301519134, '111', '111', '111@qq.com', '6512bd43d9caa6e02c990b0a82652dca', NULL, 1, 'Active now', '16488903112.jpg'),
(31, 864903232, 'Irene', 'Bae', '1@rv.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1, 'Offline now', '1648993490Irene.jpg'),
(32, 669511953, 'Seulgi', 'Kang', '2@rv.com', 'c81e728d9d4c2f636f067f89cc14862c', NULL, 1, 'Active now', '1648996092Seulgi.jpg'),
(33, 274050938, 'Seulgi', 'Kang', '6@rv.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1, 'Offline now', '1649000112Seulgi.jpg'),
(34, 660239811, '11', '11', '11@11.com', '6512bd43d9caa6e02c990b0a82652dca', NULL, 1, 'Offline now', '1649000230Seulgi.jpg'),
(35, 1170215635, 'sarah', 'fin', 'sarah@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 1, 'Active now', '1649001018date.jpg'),
(36, 360506766, '23412sfgdd', 'fgdasf', '1106745429@qq.com', '308eb4ab297ba480183256a47b4b05a6', NULL, 1, 'Offline now', '1649009184uTools_1648984407595.png'),
(37, 128605450, '1', '1', 'cv@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1, 'Offline now', '1649010761b.png'),
(38, 872836859, '1', '1', 's@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1, 'Active now', '1649011069b.png'),
(39, 538883710, 'Nelly', 'Mc', 'nelly@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 1, 'Offline now', '1650551627istockphoto-1270067126-612x612.jpg'),
(40, 497396746, 'Test', 'Account', 'test@account.com', 'c1cd38d7323924110c01c2cb3b2e03d0', 1, 1, 'Offline now', '1650811007spititout.jpg'),
(41, 360432798, 'hungry', 'man', 'hungry@man.com', 'a6e43300cd419da1ffb3e8389919fa33', NULL, 1, 'Active now', '1650853737bog.png'),
(43, 857574117, 'Admin', 'Account', 'admin@account.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 'Active now', '1650897979spoons.jpg');

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
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
