-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2020 at 08:23 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `familiydetail`
--

DROP TABLE IF EXISTS `familiydetail`;
CREATE TABLE IF NOT EXISTS `familiydetail` (
  `std_rollno` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `fage` varchar(10) NOT NULL,
  `mage` varchar(10) NOT NULL,
  `sage` varchar(10) NOT NULL,
  `fqua` varchar(100) NOT NULL,
  `mqua` varchar(100) NOT NULL,
  `squa` varchar(100) NOT NULL,
  `focc` varchar(100) NOT NULL,
  `mocc` varchar(100) NOT NULL,
  `socc` varchar(100) NOT NULL,
  `fph` varchar(100) NOT NULL,
  `mph` varchar(100) NOT NULL,
  `sph` varchar(100) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `memail` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familiydetail`
--

INSERT INTO `familiydetail` (`std_rollno`, `fname`, `mname`, `sname`, `fage`, `mage`, `sage`, `fqua`, `mqua`, `squa`, `focc`, `mocc`, `socc`, `fph`, `mph`, `sph`, `femail`, `memail`, `semail`) VALUES
('1', 'abc', 'sss', 'dfd', '12', '10', '12', 'aa', 'ss', 'ww', 'aaa', 'sss', 'www', '102', '452', '452', 'a@gmail.com', 'a@gmail.com', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `futureplans`
--

DROP TABLE IF EXISTS `futureplans`;
CREATE TABLE IF NOT EXISTS `futureplans` (
  `std_rollno` varchar(100) NOT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `cet` varchar(100) DEFAULT NULL,
  `gate` varchar(100) DEFAULT NULL,
  `gre` varchar(100) DEFAULT NULL,
  `tofel` varchar(100) DEFAULT NULL,
  `others` varchar(100) DEFAULT NULL,
  `aos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futureplans`
--

INSERT INTO `futureplans` (`std_rollno`, `cat`, `cet`, `gate`, `gre`, `tofel`, `others`, `aos`) VALUES
('1', 'cat', 'cet', 'gate', 'gre', 'tofel', 'others', 'aos');

-- --------------------------------------------------------

--
-- Table structure for table `qualidetail`
--

DROP TABLE IF EXISTS `qualidetail`;
CREATE TABLE IF NOT EXISTS `qualidetail` (
  `std_rollno` varchar(100) NOT NULL,
  `sscdate` date NOT NULL DEFAULT current_timestamp(),
  `sscyear` varchar(100) DEFAULT NULL,
  `sem1attd` varchar(100) DEFAULT NULL,
  `sem1date` date NOT NULL DEFAULT current_timestamp(),
  `sem1sub` varchar(100) DEFAULT NULL,
  `sem2attd` varchar(100) DEFAULT NULL,
  `sem2date` date NOT NULL DEFAULT current_timestamp(),
  `sem2sub` varchar(100) DEFAULT NULL,
  `sem3attd` varchar(100) DEFAULT NULL,
  `sem3date` date NOT NULL DEFAULT current_timestamp(),
  `sem3sub` varchar(100) DEFAULT NULL,
  `sem4attd` varchar(100) DEFAULT NULL,
  `sem4date` date NOT NULL DEFAULT current_timestamp(),
  `sem4sub` varchar(100) DEFAULT NULL,
  `sem5attd` varchar(100) DEFAULT NULL,
  `sem5date` date NOT NULL DEFAULT current_timestamp(),
  `sem5sub` varchar(100) DEFAULT NULL,
  `sem6attd` varchar(100) DEFAULT NULL,
  `sem6date` date NOT NULL DEFAULT current_timestamp(),
  `sem6sub` varchar(100) DEFAULT NULL,
  `sem7attd` varchar(100) DEFAULT NULL,
  `sem7date` date NOT NULL DEFAULT current_timestamp(),
  `sem7sub` varchar(100) DEFAULT NULL,
  `sem8attd` varchar(100) DEFAULT NULL,
  `sem8date` date NOT NULL DEFAULT current_timestamp(),
  `sem8sub` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualidetail`
--

INSERT INTO `qualidetail` (`std_rollno`, `sscdate`, `sscyear`, `sem1attd`, `sem1date`, `sem1sub`, `sem2attd`, `sem2date`, `sem2sub`, `sem3attd`, `sem3date`, `sem3sub`, `sem4attd`, `sem4date`, `sem4sub`, `sem5attd`, `sem5date`, `sem5sub`, `sem6attd`, `sem6date`, `sem6sub`, `sem7attd`, `sem7date`, `sem7sub`, `sem8attd`, `sem8date`, `sem8sub`) VALUES
('1', '2020-09-11', 'ICSE', '23', '2020-09-09', 'bb', 'qqq', '2020-09-09', 'kk', 'kk', '1000-12-12', 'kn', 'kn', '2100-02-01', 'kn', 'kn', '0001-10-26', 'qq', 'www', '2020-09-26', 'www', 'aaa', '2020-09-03', 'kn', 'kjaskan', '2020-09-24', 'knknsk'),
('65', '2020-09-12', 'SSC', '23', '2020-09-03', 'm1', '78', '2020-09-02', 'm3', NULL, '2020-09-12', NULL, NULL, '2020-09-12', NULL, NULL, '2020-09-12', NULL, NULL, '2020-09-12', NULL, NULL, '2020-09-12', NULL, '100', '2020-09-12', 'nnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `std_rollno` varchar(20) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`std_rollno`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`std_rollno`, `std_name`, `std_email`, `std_pass`) VALUES
('2', 'pd', 'ak@gmail.com', '123'),
('1', 'hardik', 'akshay.morre@gmail.com', '123'),
('S193944106', 'Akshay more', 'moreakshay725@gmail.com', 'Akshay@123'),
('10', 'Akshay more', 'ak@gmail.com', '123'),
('65', 'hardik', 'ak@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE IF NOT EXISTS `studentinfo` (
  `std_rollno` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `monthaddm` date NOT NULL,
  `year` varchar(10) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `health` varchar(100) NOT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`std_rollno`, `name`, `mobile`, `address`, `bg`, `email`, `birthdate`, `monthaddm`, `year`, `hobbies`, `sports`, `health`) VALUES
('1', 'akshay', '1234567891', 'skkskskskksksk', 'a', 'ak@gmail.com', '2020-09-01', '2020-09-01', '', 'aaaa', 'bbbb', 'cccc'),
('65', 'hardik', '1234567891', 'mumbai', 'a', 'ak@gmail.com', '2020-09-25', '2020-09-12', 'second', 'nothing', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(20) NOT NULL,
  `t_email` varchar(20) NOT NULL,
  `t_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`tc_id`,`t_email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tc_id`, `t_name`, `t_email`, `t_pass`) VALUES
(3, 'teacher', 'teacher@gmai.com', '123'),
(4, 'teacher2', 'teacher2@gmai.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
