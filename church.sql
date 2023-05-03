-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 05:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `usertype` text DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `position`, `usertype`, `username`, `password`, `status`) VALUES
(1, 'jerald saculinggan', 'secretary', 'admin', 'user1', 'user1', 1),
(10, 'jerald', 'vice', 'dffdgdf', 'user2', 'user2', 1),
(11, 'jerald', 'vice', 'dffdgdf', 'user2', '', 1),
(12, 'jerald', 'vice', 'dffdgdf', 'user2', 'user1', 1),
(13, 'ddddd', '', '', 'dance', 'gang', 1),
(18, 'ddddd', 'iron man', 'dffdgdf', 'officialfilipino.lodge@gmail.com', 'dfdsdsdsf', 1),
(19, 'Jerald Saculinggan ', 'iron man', 'EWRWER', 'sakaa', 'dfdsdsdsf', 1),
(20, 'badong', 'kayap', 'member', 'hazelfaithsuarez@gmail.com', 'userq', 1),
(21, 'jerald saculinggan', 'secretary', 'admin', 'user1', 'user1', 1),
(22, 'jerald', 'vice', 'dffdgdf', 'user2', 'user2', 1),
(23, 'jerald', 'vice', 'dffdgdf', 'user2', '', 1),
(24, 'jerald', 'vice', 'dffdgdf', 'user2', 'user1', 1),
(25, 'ddddd', '', '', 'dance', 'gang', 1),
(26, 'ddddd', 'iron man', 'dffdgdf', 'officialfilipino.lodge@gmail.com', 'dfdsdsdsf', 1),
(27, 'Jerald Saculinggan ', 'iron man', 'EWRWER', 'sakaa', 'dfdsdsdsf', 1),
(28, 'badong', 'kayap', 'member', 'hazelfaithsuarez@gmail.com', 'userq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `event` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `approve` int(11) DEFAULT 0,
  `created` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phonenumber`, `event`, `date`, `time`, `status`, `approve`, `created`) VALUES
(27, 'fdgdgg', 'diplahanchurch@gmail.com', 943094039, '', '', '', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(28, 'Search ...fdffddf', 'diplahanchurch@gmail.com', 943094039, '', '', '', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(29, 'Search ...fdffddf', 'diplahanchurch@gmail.com', 943094039, '', '', '', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(31, 'oo', 'diplahanchurch@gmail.com', 943094039, '', '2022-12-02T01:27', '1669940820', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(32, 'oo', 'diplahanchurch@gmail.com', 943094039, '', '2022-12-02T01:27', '1669940820', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(33, 'kkk', 'diplahanchurch@gmail.com', 943094039, '', '2022-12-12T14:33', '12/12/22', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(34, 'OO', 'diplahanchurch@gmail.com', 943094039, '', '31/12/22', '15:st', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(35, 'p', 'diplahanchurch@gmail.com', 943094039, '', '31/12/22', '14:37', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(36, 'l', 'diplahanchurch@gmail.com', 943094039, '', '31/12/22', '06:43', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(37, 'p', 'diplahanchurch@gmail.com', 943094039, '14', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(38, 'OO', 'diplahanchurch@gmail.com', 943094039, '16', '31/12/22', '02:45pm', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(39, 'Searcgrg', 'diplahanchurch@gmail.com', 943094039, '14', '21/02/23', '10:36pm', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(41, 'Search ...fdffddf', 'diplahanchurch@gmail.com', 943094039, '14', '1970-01-01', '1:00 am', 'Requested', 1, '0000-00-00 00:00:00.000000'),
(42, 'Searcgrg', 'diplahanchurch@gmail.com', 943094039, '14', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(46, 'jaypee', 'admin@gmail.com', 2147483647, '18', '2023-04-10', '9:04 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(48, 'DR.SMITH', 'admin@gmail.com', 2147483647, '18', '10/04/23', '05:13am', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(49, 'DR. Soner', 'jpquintana01@gmail.com', 2147483647, '15', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(52, 'jaypee', 'jpquintana01@gmail.com', 2147483647, '14', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(53, 'jaypee', 'jpquintana01@gmail.com', 2147483647, '15', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(54, 'Billy', 'jpquintana01@gmail.com', 2147483647, '15', '1970-01-01', '1:00 am', 'Approved', 1, '0000-00-00 00:00:00.000000'),
(55, 'ChatroomIT', 'ad.east2021@gmail.com', 2147483647, '15', '11/04/23', '12:06pm', 'Requested', 0, '0000-00-00 00:00:00.000000'),
(56, 'jaypee', 'ad.east2021@gmail.com', 2147483647, '23', '1970-01-01', '1:00 am', 'Declined', 2, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `message`) VALUES
(9, '', 'myfilipinolodge@gmail.com', 'tertreyytyhtr'),
(10, '', 'diplahanchurch@gmail.com', 'deegrgs');

-- --------------------------------------------------------

--
-- Table structure for table `dashtab`
--

CREATE TABLE `dashtab` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `grade` text DEFAULT NULL,
  `religion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `picontainer` varchar(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `picontainer`, `amount`, `status`) VALUES
(42, 'Search ...fdffddf', 'diplahanchurch@gmail.com', '21.jpg', 1433, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `title`, `description`, `start`, `end`) VALUES
(1, 'NEW SEMINAR SCHEDULE', 'Lorem Ipsum', '2023-04-08', '1212:0404 PMApr/+02:00Apr'),
(2, 'hdjawkdwadwad', 'Lorem Ipsum', '2023-04-18', '12:57 pm'),
(3, 'NEW WEDDING SCHEDULES', 'Lorem Ipsum', '2023-04-18', '2:00 pm'),
(4, 'NEW EVENT HERE', 'Lorem Ipsum', '2023-05-01', '6:00 am'),
(5, 'NEW EVENTS TEST', 'Lorem Ipsum', '2023-04-12', '6:11 am'),
(6, 'JAYPEE', 'Lorem Ipsum', '2023-04-29', '5:51 pm'),
(7, 'NEW SCHEDULE OF MASS', 'Lorem Ipsum', '2023-04-09', '6:47 am'),
(8, 'NEW TEST', 'Lorem Ipsum', '2023-05-08', '6:48 pm'),
(9, 'New EVENT FOR today', 'lorem ipxum', '2023-06-10', '3:26 pm');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `schedule` text DEFAULT NULL,
  `picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services`, `detail`, `schedule`, `picture`) VALUES
(14, 'Christening', 'lorem ipsum', '12/17/2022', 'bunyag.jpg'),
(15, 'Seminar ', 'wednes', '12/01/2022', 'seminar.jpg'),
(19, 'TEST', 'dwadwawdwadwad', NULL, 'test.jpg'),
(24, 'new EVENT', 'dawwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 'PNG_transparency_demonstration_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staffname` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `picontainer` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffname`, `position`, `picontainer`, `status`, `type`) VALUES
(51, 'Clemen Plamiano', 'Secretary', 'wer.jpg', 1, 1),
(61, 'Julito A. Cabatoan', 'Priest', '21.jpg', 1, 0),
(62, 'Jessa Joy O. Villarete', 'Youth Leader', 'youth.jpg', 1, 1),
(63, 'Rogelyn C. Benigra', 'Coordinator', 'Coordinator.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `postingdate` datetime DEFAULT NULL,
  `sched` text DEFAULT NULL,
  `container` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `details`, `postingdate`, `sched`, `container`) VALUES
(25, 'Fiesta pillar', 'The grand procession for the feast of the Our Lady of the Pillar on October 12 will see a fewer number of worshipers due to the Covid-19 pandemic.  The Our Lady of the Pillar feast (Pilar Festival or Fiestas del Pilar) is the highlight of the Zamboanga Hermosa Festival that kicked off Friday.  Shestival.', '2023-03-03 16:27:10', '2023-03-03T11:26', 'Pilar.jpg'),
(26, 'Christmass', 'Here at The Pillar, we put together yesterday a comprehensive explainer, detailing the backstory, the canonical process, and the state of play — and it’s the most thorough, accurate, and clear coverage on Pavone that you’ll find, anywhere. ', '2023-03-03 16:32:04', '2023-03-03T11:31', 'GDHHJDD.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `dashtab`
--
ALTER TABLE `dashtab`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dashtab`
--
ALTER TABLE `dashtab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
