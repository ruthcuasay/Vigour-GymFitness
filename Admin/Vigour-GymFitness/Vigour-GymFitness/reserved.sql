-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2022 at 09:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE IF NOT EXISTS `reserved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `pnum` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `timee` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`id`, `fname`, `lname`, `age`, `pnum`, `email`, `gender`, `timee`, `type`) VALUES
(1, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(2, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(3, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(4, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(5, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(6, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(7, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(8, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(9, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(10, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(11, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(12, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(13, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(14, 'sadfasdf', 'dfasd', 12, 2147483647, 'dsfnaskfnaksj', 'male', '12pm-2pm', 'Full Session'),
(15, 'SDAKFNKJAS', 'SDFNASKJFN', 12, 2147483647, 'NSJDFNSKDJFNK', 'male', '12pm-2pm', 'Full Session'),
(16, '', '', 0, 0, '', '', '', ''),
(17, '', '', 0, 0, '', '', '', ''),
(18, '', '', 0, 0, '', '', '', ''),
(19, '', '', 0, 0, '', '', '', ''),
(20, 'pedro', 'sherwin', 12, 123214214, 'sadfnjfn', 'male', '9am-11am', 'Half Session'),
(21, 'pedro', 'sherwin', 12, 123214214, 'sadfnjfn', 'male', '9am-11am', 'Half Session'),
(22, '', '', 0, 0, '', '', '', ''),
(23, 'sherwin', 'pedro', 12, 973468798, 'sdkfnsjkf', 'male', '12pm-2pm', 'Full Session'),
(24, '', '', 0, 0, '', '', '', ''),
(25, '', '', 0, 0, '', '', '', ''),
(26, '', '', 0, 0, '', '', '', ''),
(27, 'she', 'pedro', 12, 34325235, 'dfadfadsf', 'male', '12pm-2pm', 'Full Session'),
(28, 'she', 'pedro', 12, 34325235, 'dfadfadsf', 'male', '12pm-2pm', 'Full Session'),
(29, '', '', 0, 0, '', '', '', ''),
(30, '', '', 0, 0, '', '', '', ''),
(31, '', '', 0, 0, '', '', '', ''),
(32, '', '', 0, 0, '', '', '', ''),
(33, 'she', 'pedro', 12, 34325235, 'dfadfadsf', 'male', '12pm-2pm', 'Full Session'),
(34, '', '', 0, 0, '', '', '', ''),
(35, '', '', 0, 0, '', '', '', ''),
(36, '', '', 0, 0, '', '', '', ''),
(37, '', '', 0, 0, '', '', '', ''),
(38, '', '', 0, 0, '', '', '', ''),
(39, '', '', 0, 0, '', '', '', ''),
(40, 'pedro', 'sherwin', 12, 3234234, 'sdfsdsdf', 'male', '2pm-5pm', 'Full Session'),
(41, 'pedro', 'sherwin', 12, 3234234, 'sdfsdsdf', 'male', '2pm-5pm', 'Full Session'),
(42, 'pedro', 'sherwin', 12, 3234234, 'sdfsdsdf', 'male', '2pm-5pm', 'Full Session'),
(43, '', '', 0, 0, '', '', '', ''),
(44, '', '', 0, 0, '', '', '', ''),
(45, '', '', 0, 0, '', '', '', ''),
(46, '', '', 0, 0, '', '', '', ''),
(47, '', '', 0, 0, '', '', '', ''),
(48, '', '', 0, 0, '', '', '', ''),
(49, '', '', 0, 0, '', '', '', ''),
(50, '', '', 0, 0, '', '', '', ''),
(51, '', '', 0, 0, '', '', '', ''),
(52, '', '', 0, 0, '', '', '', ''),
(53, '', '', 0, 0, '', '', '', ''),
(54, '', '', 0, 0, '', '', '', ''),
(55, '', '', 0, 0, '', '', '', ''),
(56, '', '', 0, 0, '', '', '', ''),
(57, '', '', 0, 0, '', '', '', ''),
(58, '', '', 0, 0, '', '', '', ''),
(59, '', '', 0, 0, '', '', '', ''),
(60, '', '', 0, 0, '', '', '', ''),
(61, '', '', 0, 0, '', '', '', ''),
(62, '', '', 0, 0, '', '', '', ''),
(63, '', '', 0, 0, '', '', '', ''),
(64, '', '', 0, 0, '', '', '', ''),
(65, '', '', 0, 0, '', '', '', ''),
(66, '', '', 0, 0, '', '', '', ''),
(67, '', '', 0, 0, '', '', '', ''),
(68, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(69, '', '', 0, 0, '', '', '', ''),
(70, '', '', 0, 0, '', '', '', ''),
(71, '', '', 0, 0, '', '', '', ''),
(72, '', '', 0, 0, '', '', '', ''),
(73, '', '', 0, 0, '', '', '', ''),
(74, '', '', 0, 0, '', '', '', ''),
(75, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(76, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(77, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(78, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(79, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(80, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(81, 'win', 'she', 12, 3423423, 'asdkfnsakdfnj', 'male', '2pm-5pm', 'Full Session'),
(82, 'sherwin', 'pedro', 123, 2343534, 'fjnasdkjbfk', 'male', '12pm-2pm', 'Full Session'),
(83, 'sherwin', 'pedro', 123, 2343534, 'fjnasdkjbfk', 'male', '12pm-2pm', 'Full Session'),
(84, 'ruth', 'quacy', 12, 4324234, 'jfbjdfbghjdsfbg', 'male', '9am-11am', 'Half Session'),
(85, 'ruth', 'quacy', 12, 4324234, 'jfbjdfbghjdsfbg', 'male', '9am-11am', 'Half Session');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
