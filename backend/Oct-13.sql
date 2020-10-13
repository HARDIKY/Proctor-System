-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2020 at 05:58 PM
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
  `f_fname` varchar(100) DEFAULT NULL,
  `f_mname` varchar(100) DEFAULT NULL,
  `f_lname` varchar(100) DEFAULT NULL,
  `f_email` varchar(100) DEFAULT NULL,
  `f_mob` varchar(100) DEFAULT NULL,
  `f_age` varchar(100) DEFAULT NULL,
  `f_qua` varchar(100) DEFAULT NULL,
  `f_occ` varchar(100) DEFAULT NULL,
  `m_fname` varchar(100) DEFAULT NULL,
  `m_mname` varchar(100) DEFAULT NULL,
  `m_lname` varchar(100) DEFAULT NULL,
  `m_email` varchar(100) DEFAULT NULL,
  `m_mob` varchar(100) DEFAULT NULL,
  `m_age` varchar(100) DEFAULT NULL,
  `m_qua` varchar(100) DEFAULT NULL,
  `m_occ` varchar(100) DEFAULT NULL,
  `s1_fname` varchar(100) DEFAULT NULL,
  `s1_mname` varchar(100) DEFAULT NULL,
  `s1_lname` varchar(100) DEFAULT NULL,
  `s1_email` varchar(100) DEFAULT NULL,
  `s1_mob` varchar(100) DEFAULT NULL,
  `s1_age` varchar(100) DEFAULT NULL,
  `s1_qua` varchar(100) DEFAULT NULL,
  `s1_occ` varchar(100) DEFAULT NULL,
  `s2_fname` varchar(100) DEFAULT NULL,
  `s2_mname` varchar(100) DEFAULT NULL,
  `s2_lname` varchar(100) DEFAULT NULL,
  `s2_email` varchar(100) DEFAULT NULL,
  `s2_mob` varchar(100) DEFAULT NULL,
  `s2_age` varchar(100) DEFAULT NULL,
  `s2_qua` varchar(100) DEFAULT NULL,
  `s2_occ` varchar(100) DEFAULT NULL,
  `s3_fname` varchar(100) DEFAULT NULL,
  `s3_mname` varchar(100) DEFAULT NULL,
  `s3_lname` varchar(100) DEFAULT NULL,
  `s3_email` varchar(100) DEFAULT NULL,
  `s3_mob` varchar(100) DEFAULT NULL,
  `s3_age` varchar(100) DEFAULT NULL,
  `s3_qua` varchar(100) DEFAULT NULL,
  `s3_occ` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familiydetail`
--

INSERT INTO `familiydetail` (`std_rollno`, `f_fname`, `f_mname`, `f_lname`, `f_email`, `f_mob`, `f_age`, `f_qua`, `f_occ`, `m_fname`, `m_mname`, `m_lname`, `m_email`, `m_mob`, `m_age`, `m_qua`, `m_occ`, `s1_fname`, `s1_mname`, `s1_lname`, `s1_email`, `s1_mob`, `s1_age`, `s1_qua`, `s1_occ`, `s2_fname`, `s2_mname`, `s2_lname`, `s2_email`, `s2_mob`, `s2_age`, `s2_qua`, `s2_occ`, `s3_fname`, `s3_mname`, `s3_lname`, `s3_email`, `s3_mob`, `s3_age`, `s3_qua`, `s3_occ`) VALUES
('1', 'abc', 'abc', 'abc', 'a@gmail.com', '', '50', 'knkn', 'ss', 'knkn', 'knknnn', 'knkn', 'a@gmail.com', '1234567896', '10', '1234567896', 'ak@gmail.com', 'a', 'a', 'a', 'a@gmail.com', 'a', '10', 'a', 'a', 'a', 'a', 'a', 'a@gmail.com', 'a', '10', 'a', 'a', 'b', 'b', 'b', 'a@gmail.com', 'b', '10', 'cccccccc', 'cccccc'),
('10', 'abc', 'abc', 'abc', 'abc@gmail.com', '', '50', 'abc', 'abc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'abc', 'abc', 'abc', '', '', '12', '', '', '', '', '', '', '', '', '', ''),
('2', 'xyz', 'xyz', 'xyz', 'xyz@gmail.com', '', '50', 'xyz', 'xyz', 'abc', 'abc', 'abc', 'abc@gmail.com', '232323', '48', 'abc', 'abc', 'asd', 'asd', 'asd', 'asd@gmail.com', '454545', '25', 'asd', 'asd', 'aaaa', 'aaaaa', 'aaaaa', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `futureplans`
--

DROP TABLE IF EXISTS `futureplans`;
CREATE TABLE IF NOT EXISTS `futureplans` (
  `rollno` varchar(100) NOT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `cet` varchar(100) DEFAULT NULL,
  `gate` varchar(100) DEFAULT NULL,
  `gre` varchar(100) DEFAULT NULL,
  `tofel` varchar(100) DEFAULT NULL,
  `others` varchar(100) DEFAULT NULL,
  `aos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futureplans`
--

INSERT INTO `futureplans` (`rollno`, `cat`, `cet`, `gate`, `gre`, `tofel`, `others`, `aos`) VALUES
('1', 'No', 'Yes', 'No', 'Yes', 'Yes', 'nothing', ''),
('10', 'Yes', 'No', 'No', 'Yes', 'No', '', ''),
('2', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `ssc_cert` varchar(200) DEFAULT NULL,
  `dip_cert` varchar(200) DEFAULT NULL,
  `dip_leave_cert` varchar(200) DEFAULT NULL,
  `sem1_cert` varchar(200) DEFAULT NULL,
  `sem2_cert` varchar(200) DEFAULT NULL,
  `sem3_cert` varchar(200) DEFAULT NULL,
  `sem4_cert` varchar(200) DEFAULT NULL,
  `sem5_cert` varchar(200) DEFAULT NULL,
  `sem6_cert` varchar(200) DEFAULT NULL,
  `sem7_cert` varchar(200) DEFAULT NULL,
  `sem8_cert` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`std_rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualidetail`
--

INSERT INTO `qualidetail` (`std_rollno`, `sscmarks`, `sscdate`, `sscboard`, `dipmarks`, `dipdate`, `sem1attd`, `sem1date`, `sem1sub`, `sem1per`, `sem2attd`, `sem2date`, `sem2sub`, `sem2per`, `sem3attd`, `sem3date`, `sem3sub`, `sem3per`, `sem4attd`, `sem4date`, `sem4sub`, `sem4per`, `sem5attd`, `sem5date`, `sem5sub`, `sem5per`, `sem6attd`, `sem6date`, `sem6sub`, `sem6per`, `sem7attd`, `sem7date`, `sem7sub`, `sem7per`, `sem8attd`, `sem8date`, `sem8sub`, `sem8per`, `ssc_cert`, `dip_cert`, `dip_leave_cert`, `sem1_cert`, `sem2_cert`, `sem3_cert`, `sem4_cert`, `sem5_cert`, `sem6_cert`, `sem7_cert`, `sem8_cert`) VALUES
('1', '100', '2020-09-04', 'SSC', '85', '2020-09-19', '78', '2020-09-02', 'abc', '99', '75', '2020-09-09', 'abc', '75', '75', '2010-12-12', 'abc', '87', '75', '2100-02-01', 'abc', '85', '100', '2010-10-26', 'qq', '83', 'wwe', '2020-09-26', 'www', '86', 'aaa', '2020-09-03', 'kn', '90', 'kjaskan', '2020-09-24', 'knknsk', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', '2', '2020-10-10', 'CBSC', '100', '2020-10-10', '70', '2020-10-10', 'ss', '75', '', '2020-10-10', '', '', '', '2020-10-10', '', '', '', '2020-10-10', 'ss', '', '', '2020-10-10', '', '', '', '2020-10-10', '', '', '', '2020-10-10', '', '', '', '2020-10-10', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('10', NULL, '2020-10-13', NULL, NULL, '2020-10-13', NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, '2020-10-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('1', 'hardik', 'a@gmail.com', '123'),
('10', 'Rohit', 'rohit@gmail.com', '123'),
('2', 'pd', 'pd@gmail.com', '123');

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
  `sport3` varchar(100) DEFAULT NULL,
  `health` varchar(100) DEFAULT NULL,
  `idcard` varchar(200) DEFAULT NULL,
  `doc_cert` varchar(200) DEFAULT NULL,
  `hob1_cert` varchar(200) DEFAULT NULL,
  `hob2_cert` varchar(200) DEFAULT NULL,
  `hob3_cert` varchar(200) DEFAULT NULL,
  `sport1_cert` varchar(200) DEFAULT NULL,
  `sport2_cert` varchar(200) DEFAULT NULL,
  `sport3_cert` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`rollno`, `name`, `m_name`, `l_name`, `mobile`, `dept`, `currentyear`, `currentsem`, `address`, `bg`, `email`, `birthdate`, `monthaddm`, `year`, `hobbies`, `hobbie2`, `hobbie3`, `sports`, `sport2`, `sport3`, `health`, `idcard`, `doc_cert`, `hob1_cert`, `hob2_cert`, `hob3_cert`, `sport1_cert`, `sport2_cert`, `sport3_cert`) VALUES
('1', 'Hardik', 'abcc', 'Yewale', '10101010', 'Information Technology', 'First', 'SEM 1', 'Barcelona', 'a', 'hardik@gmail.com', '2020-10-01', '2010-10-10', 'First', 'cricket', 'Football', '', '', 'chess', 'volleyball', '', '', '', '', '', '', '', '', ''),
('2', 'pd', 'sdd', 'hero', '12343212', 'Mechanical Engineering', 'First', 'SEM 1', 'Amsterdam', 'o', 'pd@gmail.com', '1992-10-01', '2020-10-07', 'First', '', '', '', 'cricket', 'chess', '', 'handicapped', '', '', '', '', NULL, '', NULL, NULL),
('10', 'Rohit', 'abcc', 'abc', '1234567898', 'Information Technology', 'First', 'SEM 1', 'Munich', 'o', 'rohit@gmail.com', '2020-10-01', '2020-10-01', 'First', '', '', '', 'cricket', 'chess', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tc_id`, `t_name`, `t_email`, `t_pass`) VALUES
(6, 'teacher2', 't2@gmail.com', '123'),
(5, 'teacher1', 't1@gmail.com', '123');

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
