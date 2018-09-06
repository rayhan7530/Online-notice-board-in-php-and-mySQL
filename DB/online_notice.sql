-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 05:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(9, 'admin@gmail.com', 'test', 'wyeuiwyeriqwyirtq', '2018-09-04 21:35:14'),
(10, 'this@gmail.com', 'test', 'wyeuiwyeriqwyirtq11111', '2018-09-04 21:35:14'),
(11, 'this@gmail.com', 'hello this', 'noticebyusertypeHide', '2018-09-05 21:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `noticebyusertype`
--

CREATE TABLE `noticebyusertype` (
  `id` int(11) NOT NULL,
  `noticeSubject` varchar(200) NOT NULL,
  `noticeDetails` text NOT NULL,
  `date` datetime NOT NULL,
  `userAccess` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticebyusertype`
--

INSERT INTO `noticebyusertype` (`id`, `noticeSubject`, `noticeDetails`, `date`, `userAccess`) VALUES
(3, 'test 2', 'test data 222', '2018-09-05 10:20:45', '1'),
(4, 'test admin', 'admin notice', '2018-09-05 10:21:01', '4'),
(5, 'staff notice', 'staff notice test', '2018-09-05 10:21:30', '2'),
(6, 'faculty test notice', 'test faculty', '2018-09-05 10:21:46', '3'),
(7, 'test 666', 'uQ7ITRI', '2018-09-05 10:41:41', '0'),
(8, 'general notice for all users test', 'Decoding Annie Parker', '2018-09-05 20:39:01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `usertyp` varchar(40) NOT NULL,
  `opt` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `Student_ID`, `usertyp`, `opt`) VALUES
(14, 'limon miah', 'limon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 456374574684, 'm', 'reading,singin,playing', 'IMG_20140210_173401.jpg', '1966-11-19 00:00:00', '13143103083', '1', 1),
(18, 'This Admin', 'this@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 12345, 'm', 'reading', 'avatar.png', '1985-12-18 00:00:00', '123400', '4', 1),
(19, 'Faculty CSE', 'cse@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 123456, 'f', 'reading', '8c305974ae2cbf0cc0f24ecf3cb10414.png', '1981-11-15 00:00:00', '009', '3', 1),
(20, 'Master Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 18989698, 'm', 'reading,singin', 'limon.png', '1966-12-17 00:00:00', '120000', '4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `noticebyusertype`
--
ALTER TABLE `noticebyusertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `noticebyusertype`
--
ALTER TABLE `noticebyusertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
