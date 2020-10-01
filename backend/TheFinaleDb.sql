-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 09:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `familiydetail` (
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
  `semail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familiydetail`
--

INSERT INTO `familiydetail` (`std_rollno`, `fname`, `mname`, `sname`, `fage`, `mage`, `sage`, `fqua`, `mqua`, `squa`, `focc`, `mocc`, `socc`, `fph`, `mph`, `sph`, `femail`, `memail`, `semail`) VALUES
('1', 'Akshay', 'nknkkk', 'knkn', '50', '50', '50', 'knkn', 'ss', 'knkn', 'knknnn', 'knkn', 'knkn', '1234567896', '1234567896', '1234567896', 'ak@gmail.com', 'ak@gmail.com', 'ak@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(20) NOT NULL,
  `pdf_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `pdf_file`) VALUES
(1, 'IP Assignment 01.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `futureplans`
--

CREATE TABLE `futureplans` (
  `std_rollno` varchar(100) NOT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `cet` varchar(100) DEFAULT NULL,
  `gate` varchar(100) DEFAULT NULL,
  `gre` varchar(100) DEFAULT NULL,
  `tofel` varchar(100) DEFAULT NULL,
  `others` varchar(100) DEFAULT NULL,
  `aos` varchar(100) DEFAULT NULL
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

CREATE TABLE `qualidetail` (
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
  `sem8per` varchar(100) DEFAULT NULL
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

CREATE TABLE `register` (
  `std_rollno` varchar(20) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_pass` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`std_rollno`, `std_name`, `std_email`, `std_pass`) VALUES
('2', 'pd', 'ak@gmail.com', '123'),
('1', 'hardik', 'akshay.morre@gmail.com', '123'),
('S193944106', 'Akshay more', 'moreakshay725@gmail.com', 'Akshay@123'),
('10', 'Akshay more', 'ak@gmail.com', '123'),
('65', 'hardik', 'ak@gmail.com', '123'),
('23', 'nishant', 'akshay.morre@gmail.com', '23');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `std_rollno` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `currentyear` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `bg` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `monthaddm` date NOT NULL DEFAULT current_timestamp(),
  `year` varchar(10) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `sports` varchar(100) DEFAULT NULL,
  `health` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`std_rollno`, `name`, `mobile`, `dept`, `currentyear`, `address`, `bg`, `email`, `birthdate`, `monthaddm`, `year`, `hobbies`, `sports`, `health`) VALUES
('IT8', 'kkk', '123456789', 'IT', 'third', 'pune', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('IT7', 'hhf', '123456789', 'IT', 'third', 'pune', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('IT6', 'ghf', '123456789', 'IT', 'third', 'pune', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('C1', 'abc', '123456789', 'CE', 'first', 'pune', 'o', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('C2', 'qwe', '123456789', 'CE', 'first', 'pune', 'o', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('C3', 'rty', '123456789', 'CE', 'first', 'pune', 'o', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('C4', 'uio', '123456789', 'CE', 'first', 'thane', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'football', 'nothing'),
('C5', 'opo', '123456789', 'CE', 'first', 'thane', 'a', 'abc@gmail.com', '2020-09-05', '2020-09-12', 'first', 'nothing', 'cricket', 'nothing'),
('C6', 'asd', '123456789', 'CE', 'first', 'thane', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('C7', 'fgh', '123456789', 'CE', 'first', 'borivali', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('C8', 'hjk', '123456789', 'CE', 'first', 'borivali', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('C9', 'lkj', '123456789', 'CE', 'first', 'borivali', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('1', 'pd', '1234567891', 'IT', 'third', 'mumbai', 'w', 'ak@gmail.com', '2020-09-19', '2020-09-05', 'first', 'nothing', 'football', 'nothing'),
('M1', 'zxc', '123456789', 'ME', 'first', 'mumbai', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('M2', 'zxc', '123456789', 'ME', 'first', 'mumbai', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('M3', 'zxc', '123456789', 'ME', 'first', 'thane', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'basketball', 'nothing'),
('M4', 'zxc', '123456789', 'ME', 'first', 'thane', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'football', 'nothing'),
('M5', 'zxc', '123456789', 'ME', 'first', 'thane', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'second', 'nothing', 'football', 'nothing'),
('IT1', 'mkj', '123456789', 'IT', 'third', 'mumbai', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'second', 'nothing', 'cricket', 'nothing'),
('IT2', 'lllk', '123456789', 'IT', 'third', 'mumbai', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'second', 'nothing', 'cricket', 'nothing'),
('IT3', 'jklk', '123456789', 'IT', 'third', 'mumbai', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'second', 'nothing', 'cricket', 'nothing'),
('IT4', 'ghf', '123456789', 'IT', 'second', 'pune', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('IT5', 'aaa', '123456789', 'IT', 'second', 'pune', 'a', 'abc@gmail.com', '0000-00-00', '0000-00-00', 'first', 'nothing', 'cricket', 'nothing'),
('5', 'pd', '7276800872', 'IT', 'first', 'mumbai', 'a', 'ak@gmail.com', '2020-09-24', '2020-09-11', 'first', 'nothing', 'nothing', 'nothing'),
('pdd', 'Akshay more', '7276800872', 'IT', 'first', 'mumbai', 'a', 'ak@gmail.com', '1111-11-11', '1111-11-11', 'first', 'nothing', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tc_id` int(11) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_email` varchar(20) NOT NULL,
  `t_pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `testing` (
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familiydetail`
--
ALTER TABLE `familiydetail`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `futureplans`
--
ALTER TABLE `futureplans`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `qualidetail`
--
ALTER TABLE `qualidetail`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`std_rollno`) USING BTREE;

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tc_id`,`t_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
