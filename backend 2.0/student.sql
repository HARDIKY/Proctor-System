-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2020 at 05:13 AM
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
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_rollno` varchar(20) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`std_rollno`,`std_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`std_id`, `std_rollno`, `std_email`, `std_pass`) VALUES
(1, '21', 'Akshay', '12345'),
(1, '64', 'hardik', '1234'),
(1, '14', 'ak@gmail.com', '123'),
(1, '11', 'ak@gmail.com', '1234'),
(1, '12', 'ak@gmail.com', '123'),
(1, '13', 'ak@gmail.com', '123'),
(1, '23', 'ak@gmail.com', '123'),
(1, '69', 'ak@gmail.com', '123'),
(1, '60', 'akshay.more.forlogin@gmail.com', '12345'),
(1, '1', 'akshay.morre@gmail.com', '12345'),
(1, '2', 'akshay.more@zohomail.com', '123'),
(1, '3', 'ak@gmail.com', '123');

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
(2, '', '', ''),
(3, 'teacher', 'teacher@gmai.com', '123'),
(4, 'teacher2', 'teacher2@gmai.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
