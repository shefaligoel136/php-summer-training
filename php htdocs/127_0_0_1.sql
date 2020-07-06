-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 09:29 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firdatabase`
--
DROP DATABASE `firdatabase`;
CREATE DATABASE IF NOT EXISTS `firdatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `firdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--
-- Creation: Jul 19, 2018 at 01:53 PM
--

DROP TABLE IF EXISTS `logininfo`;
CREATE TABLE IF NOT EXISTS `logininfo` (
  `username` varchar(30) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `logininfo`
--

TRUNCATE TABLE `logininfo`;
--
-- Dumping data for table `logininfo`
--

INSERT DELAYED IGNORE INTO `logininfo` (`username`, `password`) VALUES
('shefali136', 12345),
('akash101', 67891),
('mayanksina', 0),
('mahakshukla@gmail.com', 12345678),
('nainagarg123@gmail.com', 1234567),
('nainagarg123@gmail.com', 1234567),
('nainagarg123@gmail.com', 678907),
('maria123@gmail.com', 34567),
('imthis@gmail.com', 12345),
('imthis@gmail.com', 1123),
('imthis@gmail.com', 123),
('imthis@gmail.com', 123456),
('ghb@gmail.com', 123),
('imthis@gmail.com', 123),
('imthis@gmail.com', 4567),
('ayushi', 0),
('ayushi', 0),
('ghsja', 123),
('y', 98);

-- --------------------------------------------------------

--
-- Table structure for table `reviewit`
--
-- Creation: Jul 29, 2018 at 08:48 AM
--

DROP TABLE IF EXISTS `reviewit`;
CREATE TABLE IF NOT EXISTS `reviewit` (
`id` int(100) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Truncate table before insert `reviewit`
--

TRUNCATE TABLE `reviewit`;
--
-- Dumping data for table `reviewit`
--

INSERT DELAYED IGNORE INTO `reviewit` (`id`, `reviews`, `LAST_NAME`) VALUES
(84, '', ''),
(85, '', ''),
(86, '', 'goel'),
(87, '', ''),
(88, '', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--
-- Creation: Jul 19, 2018 at 02:07 PM
--

DROP TABLE IF EXISTS `signin`;
CREATE TABLE IF NOT EXISTS `signin` (
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWORD` int(8) NOT NULL,
  `PHONE_NO` int(10) NOT NULL,
  `AADHAR` int(10) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PINCODE` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `signin`
--

TRUNCATE TABLE `signin`;
--
-- Dumping data for table `signin`
--

INSERT DELAYED IGNORE INTO `signin` (`FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `PHONE_NO`, `AADHAR`, `ADDRESS`, `PINCODE`) VALUES
('mehere', 'sign', 'meheresign@gmail.com', 0, 91, 2233445, ' kidwai nagar', 208011),
('mehere', 'sign', 'meheresign@gmail.com', 2344567, 2147483647, 2233445, ' kidwai nagar', 208011),
('mayank', 'sinah', 'mayanksinah@gmail.com', 2345678, 2147483647, 2236344, ' govind nagar', 208001),
('mayank', 'sinah', 'mayanksinah@gmail.com', 0, 2147483647, 2236344, ' govind nagar', 208001),
('mayank', 'sinah', 'mayanksinah@gmail.com', 0, 2147483647, 2236344, ' govind nagar', 208001),
('mahak', 'shukla', 'mahakshukla@gmail.com', 12345678, 2147483647, 2236344, ' govind nagar', 208001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviewit`
--
ALTER TABLE `reviewit`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviewit`
--
ALTER TABLE `reviewit`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;--
-- Database: `mydb`
--
DROP DATABASE `mydb`;
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Creation: Jul 15, 2019 at 02:56 PM
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `login`
--

TRUNCATE TABLE `login`;
--
-- Dumping data for table `login`
--

INSERT DELAYED IGNORE INTO `login` (`id`, `username`, `password`) VALUES
(1, 'shefali', 'shefaligoel');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--
-- Creation: Jul 13, 2019 at 12:00 PM
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
`id` int(6) unsigned NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Truncate table before insert `myguests`
--

TRUNCATE TABLE `myguests`;
--
-- Dumping data for table `myguests`
--

INSERT DELAYED IGNORE INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'shefali', 'goel', 'shefali136@gmail.com', '2019-07-13 12:41:53'),
(2, 'akash', 'goel', 'akash101@gmail.com', '2019-07-13 13:12:36'),
(3, 'akash', 'goel', 'akash101@gmail.com', '2019-07-13 13:21:52'),
(4, 'Mary', 'Moe', 'mary@example.com', '2019-07-13 13:21:52'),
(5, 'Julie', 'Dooley', 'julie@example.com', '2019-07-13 13:21:52'),
(6, 'John', 'Doe', 'john@example.com', '2019-07-14 11:53:33'),
(7, 'Mary', 'Moe', 'mary@example.com', '2019-07-14 11:53:33'),
(8, 'Julie', 'Dooley', 'julie@example.com', '2019-07-14 11:53:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;--
-- Database: `test`
--
DROP DATABASE `test`;
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `test_multi_sets`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- Database: `thefir`
--
DROP DATABASE `thefir`;
CREATE DATABASE IF NOT EXISTS `thefir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thefir`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutfir`
--
-- Creation: Oct 16, 2019 at 03:26 PM
--

DROP TABLE IF EXISTS `aboutfir`;
CREATE TABLE IF NOT EXISTS `aboutfir` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Unsolved',
  `subject` varchar(50) NOT NULL,
  `documents` text NOT NULL,
  `date` date NOT NULL,
  `nps` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `fir` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- RELATIONS FOR TABLE `aboutfir`:
--   `uid`
--       `signup` -> `Id`
--

--
-- Truncate table before insert `aboutfir`
--

TRUNCATE TABLE `aboutfir`;
--
-- Dumping data for table `aboutfir`
--

INSERT DELAYED IGNORE INTO `aboutfir` (`id`, `uid`, `status`, `subject`, `documents`, `date`, `nps`, `type`, `fir`) VALUES
(10, 16, 'Solved', 'regarding roberry', 'uploads/5db1756f6301e2.50003450.jpg', '2018-12-31', 'kidwai nagar', 'robbery', '            Write your FIR here...\r\n    ');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--
-- Creation: Oct 17, 2019 at 01:28 PM
--

DROP TABLE IF EXISTS `loginadmin`;
CREATE TABLE IF NOT EXISTS `loginadmin` (
`id` int(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nps` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `loginadmin`
--

TRUNCATE TABLE `loginadmin`;
--
-- Dumping data for table `loginadmin`
--

INSERT DELAYED IGNORE INTO `loginadmin` (`id`, `email`, `pass`, `nps`) VALUES
(1, 'shefali@gmail.com', 'shefali', 'kidwai nagar');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--
-- Creation: Oct 14, 2019 at 08:05 PM
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
`Id` int(11) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `PHONE` int(10) NOT NULL,
  `AADHAR` int(12) NOT NULL,
  `address` varchar(40) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Truncate table before insert `signup`
--

TRUNCATE TABLE `signup`;
--
-- Dumping data for table `signup`
--

INSERT DELAYED IGNORE INTO `signup` (`Id`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `PHONE`, `AADHAR`, `address`, `PINCODE`) VALUES
(4, 'akash', 'goek', 'ak@gmail.com', '12345', 1234567890, 12345, 'kanpur', 208011),
(14, 'shefali', 'goel', 'goel136shefali@gmail.com', '1234', 2147483647, 11, '128/1254, y block kidwai nagar', 208011),
(15, 'anju', 'goel', 'ag@gmail.com', '2411', 9898, 123445, 'kanpur', 208011),
(16, 'ashok', 'goel', 'aa@gmail.com', '0508', 9336, 121, 'kanpur', 208011);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutfir`
--
ALTER TABLE `aboutfir`
 ADD PRIMARY KEY (`id`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutfir`
--
ALTER TABLE `aboutfir`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aboutfir`
--
ALTER TABLE `aboutfir`
ADD CONSTRAINT `user_fk` FOREIGN KEY (`uid`) REFERENCES `signup` (`Id`);
--
-- Database: `webauth`
--
DROP DATABASE `webauth`;
CREATE DATABASE IF NOT EXISTS `webauth` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `webauth`;

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--
-- Creation: Oct 25, 2005 at 07:47 AM
-- Last update: Apr 16, 2012 at 05:30 PM
--

DROP TABLE IF EXISTS `user_pwd`;
CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Truncate table before insert `user_pwd`
--

TRUNCATE TABLE `user_pwd`;
--
-- Dumping data for table `user_pwd`
--

INSERT DELAYED IGNORE INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
