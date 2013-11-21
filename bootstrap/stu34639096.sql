-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2013 年 11 月 21 日 05:36
-- 伺服器版本: 5.5.34
-- PHP 版本: 5.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `stu34639096`
--

-- --------------------------------------------------------

--
-- 表的結構 `annualReport1`
--

CREATE TABLE IF NOT EXISTS `annualReport1` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `annualReport2`
--

CREATE TABLE IF NOT EXISTS `annualReport2` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `annualReport3`
--

CREATE TABLE IF NOT EXISTS `annualReport3` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `annualReport4`
--

CREATE TABLE IF NOT EXISTS `annualReport4` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `annualReport5`
--

CREATE TABLE IF NOT EXISTS `annualReport5` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `annualReport6`
--

CREATE TABLE IF NOT EXISTS `annualReport6` (
  `studentID` int(8) NOT NULL,
  `due` date NOT NULL,
  `submitting` date NOT NULL,
  `submitted` date DEFAULT NULL,
  `resent` date DEFAULT NULL,
  `gradID` int(8) NOT NULL,
  `annualReportDate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `annualReport` blob NOT NULL,
  `ScheduledDefenseDate` date NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的結構 `feeling`
--

CREATE TABLE IF NOT EXISTS `feeling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `feeling` varchar(100) NOT NULL,
  `spmething2` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1983714 ;

--
-- 轉存資料表中的資料 `feeling`
--

INSERT INTO `feeling` (`id`, `userid`, `feeling`, `spmething2`) VALUES
(22, 12, 'Not bad', ''),
(1983713, 91827, 'happy', 'j2i');

-- --------------------------------------------------------

--
-- 表的結構 `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `studentID` varchar(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `degree` char(3) NOT NULL,
  `super1FirstName` varchar(20) NOT NULL,
  `super1LastName` varchar(20) NOT NULL,
  `super1mail` varchar(40) NOT NULL,
  `super2FirstName` varchar(20) NOT NULL,
  `super2LastName` varchar(20) NOT NULL,
  `super2mail` varchar(40) NOT NULL,
  `program` varchar(4) NOT NULL,
  `room` varchar(10) NOT NULL,
  `annualReport1` tinyint(1) DEFAULT NULL,
  `annualReport2` tinyint(1) DEFAULT NULL,
  `annualReport3` tinyint(1) DEFAULT NULL,
  `annualReport4` tinyint(1) DEFAULT NULL,
  `annualReport5` tinyint(1) DEFAULT NULL,
  `annualReport6` tinyint(1) DEFAULT NULL,
  `scholarship` varchar(5) DEFAULT NULL,
  `gta` decimal(3,0) DEFAULT NULL,
  `note` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `form`
--

INSERT INTO `form` (`studentID`, `firstName`, `lastName`, `degree`, `super1FirstName`, `super1LastName`, `super1mail`, `super2FirstName`, `super2LastName`, `super2mail`, `program`, `room`, `annualReport1`, `annualReport2`, `annualReport3`, `annualReport4`, `annualReport5`, `annualReport6`, `scholarship`, `gta`, `note`) VALUES
('16372635', 'some', 'one', 'PHD', 'super', 'one', '1@mail,com', 'super', 'two', '2@mail.com', 'IGSO', 'EME123', 1, 1, 1, 1, 1, 1, 'none', 3, 'something here'),
('17382938', 'another', 'person', 'MSC', 'super', 'one', '1@mail,com', 'super', 'two', '2@mail.com', 'IGSO', 'EME2345', 1, 1, NULL, NULL, NULL, NULL, NULL, 3, NULL),
('87654321', 'last', 'person', 'PHD', 'super', 'one', '1@mail,com', 'super', 'two', '2@mail.com', 'IGSO', 'EME123', 1, 1, 1, 1, 1, 1, 'none', 3, NULL);

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `studentID` varchar(8) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `picture` blob,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`ID`, `password`, `studentID`, `role`, `picture`) VALUES
('id123', 'pass123', '12345678', 1, ''),
('student2', 'pass123', '16372635', 0, NULL),
('student3', 'pass123', '17382938', 0, NULL),
('student', 'pass123', '87654321', 0, NULL);

-- --------------------------------------------------------

--
-- 表的結構 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 轉存資料表中的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `pwd`) VALUES
(12, 'vahid', '$2y$10$qKb21RfQkImYSTUEBsoGgObThWKHnZpCA7b9SBznWElV9.L2YXPsm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
