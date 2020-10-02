-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2020 at 09:40 AM
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
('1', 'Akshay', 'nknkkk', 'knkn', '50', '50', '50', 'knkn', 'ss', 'knkn', 'knknnn', 'knkn', 'knkn', '1234567896', '1234567896', '1234567896', 'ak@gmail.com', 'ak@gmail.com', 'ak@gmail.com'),
('2', 'Akshay', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('3', 'hardik', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ak@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pdf_file` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `pdf_file`) VALUES
(1, 'IP Assignment 01.pdf');

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
('1', 'yes', 'yes', 'no', 'yes', 'yes', 'nothing', '');

-- --------------------------------------------------------

--
-- Table structure for table `qualidetail`
--

DROP TABLE IF EXISTS `qualidetail`;
CREATE TABLE IF NOT EXISTS `qualidetail` (
  `std_rollno` varchar(100) NOT NULL,
  `sscmarks` varchar(100) DEFAULT NULL,
  `sscdate` date NOT NULL DEFAULT current_timestamp(),
  `sscboard` varchar(100) DEFAULT NULL,
  `dipmarks` varchar(100) DEFAULT NULL,
  `dipdate` date NOT NULL DEFAULT current_timestamp(),
  `sem1attd` varchar(100) DEFAULT NULL,
  `sem1date` date NOT NULL DEFAULT current_timestamp(),
  `sem1sub` varchar(100) DEFAULT NULL,
  `sem1per` varchar(100) DEFAULT NULL,
  `sem2attd` varchar(100) DEFAULT NULL,
  `sem2date` date NOT NULL DEFAULT current_timestamp(),
  `sem2sub` varchar(100) DEFAULT NULL,
  `sem2per` varchar(100) DEFAULT NULL,
  `sem3attd` varchar(100) DEFAULT NULL,
  `sem3date` date NOT NULL DEFAULT current_timestamp(),
  `sem3sub` varchar(100) DEFAULT NULL,
  `sem3per` varchar(100) DEFAULT NULL,
  `sem4attd` varchar(100) DEFAULT NULL,
  `sem4date` date NOT NULL DEFAULT current_timestamp(),
  `sem4sub` varchar(100) DEFAULT NULL,
  `sem4per` varchar(100) DEFAULT NULL,
  `sem5attd` varchar(100) DEFAULT NULL,
  `sem5date` date NOT NULL DEFAULT current_timestamp(),
  `sem5sub` varchar(100) DEFAULT NULL,
  `sem5per` varchar(100) DEFAULT NULL,
  `sem6attd` varchar(100) DEFAULT NULL,
  `sem6date` date NOT NULL DEFAULT current_timestamp(),
  `sem6sub` varchar(100) DEFAULT NULL,
  `sem6per` varchar(100) DEFAULT NULL,
  `sem7attd` varchar(100) DEFAULT NULL,
  `sem7date` date NOT NULL DEFAULT current_timestamp(),
  `sem7sub` varchar(100) DEFAULT NULL,
  `sem7per` varchar(100) DEFAULT NULL,
  `sem8attd` varchar(100) DEFAULT NULL,
  `sem8date` date NOT NULL DEFAULT current_timestamp(),
  `sem8sub` varchar(100) DEFAULT NULL,
  `sem8per` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualidetail`
--

INSERT INTO `qualidetail` (`std_rollno`, `sscmarks`, `sscdate`, `sscboard`, `dipmarks`, `dipdate`, `sem1attd`, `sem1date`, `sem1sub`, `sem1per`, `sem2attd`, `sem2date`, `sem2sub`, `sem2per`, `sem3attd`, `sem3date`, `sem3sub`, `sem3per`, `sem4attd`, `sem4date`, `sem4sub`, `sem4per`, `sem5attd`, `sem5date`, `sem5sub`, `sem5per`, `sem6attd`, `sem6date`, `sem6sub`, `sem6per`, `sem7attd`, `sem7date`, `sem7sub`, `sem7per`, `sem8attd`, `sem8date`, `sem8sub`, `sem8per`) VALUES
('1', '92', '2020-09-04', 'SSC', '85', '2020-09-19', '78', '2020-09-02', '', '99', 'qqq', '2020-09-09', 'kk', '75', 'kk', '1000-12-12', 'kn', '87', 'kn', '2100-02-01', 'kn', '85', '100', '0001-10-26', 'qq', '83', 'wwe', '2020-09-26', 'www', '86', 'aaa', '2020-09-03', 'kn', '90', 'kjaskan', '2020-09-24', 'knknsk', '95'),
('65', '80', '2020-09-12', 'SSC', '85', '2020-09-17', '100', '1111-11-11', 'pk', '50', '78', '2020-09-02', 'm3', '85', '100', '3333-11-22', 'mk', '90', NULL, '2020-09-12', NULL, NULL, NULL, '2020-09-12', NULL, NULL, NULL, '2020-09-12', NULL, NULL, NULL, '2020-09-12', NULL, NULL, '100', '2020-09-12', 'nnnnn', NULL);

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
('1', 'hardik', 'akshay.morre@gmail.com', '123'),
('2', 'Akshay', 'moreakshay725@gmail.com', '123'),
('5', 'abc', 'abc@gmail.com', '123'),
('4', 'rohit', 'rohit@gmail.com', '123'),
('3', 'rohit', 'rohit@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE IF NOT EXISTS `studentinfo` (
  `rollno` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `currentyear` varchar(100) DEFAULT NULL,
  `currentsem` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `bg` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `monthaddm` date NOT NULL DEFAULT current_timestamp(),
  `year` varchar(10) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `hobbie2` varchar(100) DEFAULT NULL,
  `hobbie3` varchar(100) DEFAULT NULL,
  `sports` varchar(100) DEFAULT NULL,
  `sport2` varchar(100) DEFAULT NULL,
  `health` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`rollno`, `name`, `m_name`, `l_name`, `mobile`, `dept`, `currentyear`, `currentsem`, `address`, `bg`, `email`, `birthdate`, `monthaddm`, `year`, `hobbies`, `hobbie2`, `hobbie3`, `sports`, `sport2`, `health`) VALUES
('1', 'Akshay', '', '', '', '', '', '', '', '', 'ak@gmail.com', '2020-10-02', '2020-10-02', '', '', '', '', 'football', '', ''),
('5', 'abc', 'bvc', 'nnm', '123456789', '', '', '', 'mumbail', 'a', 'abc@gmai.com', '2020-02-04', '2020-10-02', '', 'reading', 'playing', '', 'cricket', 'chess', ''),
('3', 'rohit', 'Sandeep', 'Sawnat', '', '', '', '', 'pune', '', '', '2020-10-01', '2020-10-01', '', '', '', '', '', '', ''),
('2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-01', '2020-10-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

DROP TABLE IF EXISTS `testing`;
CREATE TABLE IF NOT EXISTS `testing` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`name`, `email`, `photo`) VALUES
('Akshay more', 'ak@gmail.com', 'uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', 'uploads/299.jpg'),
('pd', 'akshay.morre@gmail.com', 'uploads/anastasia-dulgier-QboRVYU6sfQ-unsplash.jpg'),
('pd', 'akshay.morre@gmail.com', 'uploads/anastasia-dulgier-QboRVYU6sfQ-unsplash.jpg'),
('pd', 'akshay.morre@gmail.com', 'uploads/anastasia-dulgier-QboRVYU6sfQ-unsplash.jpg'),
('Akshay more', 'ak@gmail.com', 'uploads/patrick-t-kindt-DPYt6UBqgOg-unsplash.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/patrick-t-kindt-DPYt6UBqgOg-unsplash.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/patrick-t-kindt-DPYt6UBqgOg-unsplash.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg'),
('Akshay more', 'ak@gmail.com', './uploads/299.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
