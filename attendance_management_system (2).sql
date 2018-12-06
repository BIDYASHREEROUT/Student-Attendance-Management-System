-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2018 at 07:53 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `ADMIN_LOGIN_ID` varchar(255) COLLATE utf8_bin NOT NULL,
  `ADMIN_PASSWORD` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ADMIN_LOGIN_ID`, `ADMIN_PASSWORD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `present` varchar(255) NOT NULL,
  `absent` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `on_leave` varchar(255) NOT NULL,
  `final_percentage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`student_id`, `student_name`, `subject`, `present`, `absent`, `total`, `on_leave`, `final_percentage`) VALUES
('B516014', 'Bidyashree Rout', 'JAVA', '30', '2', '35', 'yes', '90%'),
('B516014', 'Bidyashree Rout', 'IOT', '35', '0', '35', 'no', '100%'),
('B516014', 'Bidyashree Rout', 'RDBMS', '34', '1', '35', 'no', '98%');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_ce_iot`
--

DROP TABLE IF EXISTS `attendance_records_ce_iot`;
CREATE TABLE IF NOT EXISTS `attendance_records_ce_iot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records_ce_iot`
--

INSERT INTO `attendance_records_ce_iot` (`id`, `student_id`, `student_name`, `attendance_status`, `date`) VALUES
(1, 'B516014', 'Bidyashree Rout', 'Present', '2018-11-08'),
(2, 'B516016', 'Debabrata Choudhary', 'Present', '2018-11-08'),
(3, 'B516020', 'G.Bhagyalakshmi', 'Present', '2018-11-08'),
(4, 'B516038', 'Shaswat Satapathy', 'Absent', '2018-11-08'),
(5, 'B516039', 'Shivani Singh', 'Absent', '2018-11-08'),
(6, 'B516014', 'Bidyashree Rout', 'Present', '2018-11-16'),
(7, 'B516016', 'Debabrata Choudhary', 'Present', '2018-11-16'),
(8, 'B516020', 'G.Bhagyalakshmi', 'Absent', '2018-11-16'),
(9, 'B516038', 'Shaswat Satapathy', 'Absent', '2018-11-16'),
(10, 'B516039', 'Shivani Singh', 'Present', '2018-11-16'),
(11, 'B516033', 'Pawan', 'Present', '2018-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_ce_java`
--

DROP TABLE IF EXISTS `attendance_records_ce_java`;
CREATE TABLE IF NOT EXISTS `attendance_records_ce_java` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records_ce_java`
--

INSERT INTO `attendance_records_ce_java` (`id`, `student_id`, `student_name`, `attendance_status`, `date`) VALUES
(1, 'B516014', 'Bidyashree Rout', 'Present', '2018-11-08'),
(2, 'B516016', 'Debabrata Choudhary', 'Absent', '2018-11-08'),
(3, 'B516020', 'G.Bhagyalakshmi', 'Present', '2018-11-08'),
(4, 'B516038', 'Shaswat Satapathy', 'Absent', '2018-11-08'),
(5, 'B516039', 'Shivani Singh', 'Present', '2018-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_ce_rdbms`
--

DROP TABLE IF EXISTS `attendance_records_ce_rdbms`;
CREATE TABLE IF NOT EXISTS `attendance_records_ce_rdbms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records_ce_rdbms`
--

INSERT INTO `attendance_records_ce_rdbms` (`id`, `student_id`, `student_name`, `attendance_status`, `date`) VALUES
(1, 'B516014', 'Bidyashree Rout', 'Present', '2018-11-09'),
(2, 'B516016', 'Debabrata Choudhary', 'Present', '2018-11-09'),
(3, 'B516020', 'G.Bhagyalakshmi', 'Present', '2018-11-09'),
(4, 'B516038', 'Shaswat Satapathy', 'Absent', '2018-11-09'),
(5, 'B516039', 'Shivani Singh', 'Absent', '2018-11-09'),
(6, 'B516033', 'Pawan', 'Absent', '2018-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_cse_cd`
--

DROP TABLE IF EXISTS `attendance_records_cse_cd`;
CREATE TABLE IF NOT EXISTS `attendance_records_cse_cd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records_cse_cd`
--

INSERT INTO `attendance_records_cse_cd` (`id`, `student_id`, `student_name`, `attendance_status`, `date`) VALUES
(1, 'B116040', 'Shradhashree Patnaik', 'Present', '2018-11-09'),
(2, 'B116043', 'Shubra Bissoyi', 'Present', '2018-11-09'),
(3, 'B116024', 'Kaushiki Agrawal', 'Absent', '2018-11-09'),
(4, 'B116056', 'Alisha Poddar', 'Absent', '2018-11-09'),
(5, 'B116042', 'Rahul Bangar', 'Absent', '2018-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_cse_co`
--

DROP TABLE IF EXISTS `attendance_records_cse_co`;
CREATE TABLE IF NOT EXISTS `attendance_records_cse_co` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_cse_res`
--

DROP TABLE IF EXISTS `attendance_records_cse_res`;
CREATE TABLE IF NOT EXISTS `attendance_records_cse_res` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_it_oop`
--

DROP TABLE IF EXISTS `attendance_records_it_oop`;
CREATE TABLE IF NOT EXISTS `attendance_records_it_oop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_it_sp`
--

DROP TABLE IF EXISTS `attendance_records_it_sp`;
CREATE TABLE IF NOT EXISTS `attendance_records_it_sp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records_it_sp`
--

INSERT INTO `attendance_records_it_sp` (`id`, `student_id`, `student_name`, `attendance_status`, `date`) VALUES
(1, 'B416004', 'Aditya Prakash', 'Present', '2018-11-08'),
(2, 'B416042', 'Siddhant Nanda', 'Present', '2018-11-08'),
(3, 'B416050', 'Vallari Rastogi', 'Absent', '2018-11-08'),
(4, 'B416043', 'Sneha Das', 'Absent', '2018-11-08'),
(5, 'B416046', 'Swayam Prakash Pal', 'Present', '2018-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records_it_toc`
--

DROP TABLE IF EXISTS `attendance_records_it_toc`;
CREATE TABLE IF NOT EXISTS `attendance_records_it_toc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `Branch` varchar(11) NOT NULL,
  `Subject` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch`, `Subject`) VALUES
('CE', 'JAVA'),
('CE', 'RDBMS'),
('CE', 'IoT'),
('CSE', 'CO'),
('CSE', 'CD'),
('CSE', 'RES'),
('IT', 'TOC'),
('IT', 'OOP'),
('IT', 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` varchar(25) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `address`, `contact_no`, `email_id`, `branch`, `subject`) VALUES
('F12', 'Suraj Sharma', 'U.P.', '987678987', 'suraj@gmail.com', 'CE', 'IOT'),
('F01', 'Sanjay Saxena', 'Varanasi', '1111112221', 'sanjay@gmail.com', 'CE', 'JAVA'),
('F24', 'Bharati Mishra', 'Khurdha', '4433221155', 'bharati@gmail.com', 'CE', 'RDBMS'),
('F02', 'Amiya Sahu', 'Cuttack', '4343435678', 'amiya@gmail.com', 'CSE', 'CO'),
('F34', 'Rakesh Lenka', 'Bhubaneswar', '6565789454', 'rakesh@gmail.com', 'CSE', 'CD'),
('F13', 'Khirod Rout', 'Puri', '6666555521', 'khirod@gmail.com', 'CSE', 'RES'),
('F45', 'Sabyasachi Patra', 'Gothapatna', '6655442341', 'sabyasachi@gmail.com', 'IT', 'OOP'),
('F15', 'Tapan Sahoo', 'Dehradun', '9988776655', 'tapan@gmail.com', 'IT', 'TOC'),
('F50', 'Subhankar Ghatak', 'Kolkata', '1234509878', 'subhankar@gmail.com', 'IT', 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

DROP TABLE IF EXISTS `faculty_login`;
CREATE TABLE IF NOT EXISTS `faculty_login` (
  `F_ID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Faculty_Password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`F_ID`, `Faculty_Password`) VALUES
('surajsharma', 'suraj'),
('sanjaysaxena', 'sanjay'),
('bharatimishra', 'bharati'),
('amiyasahu', 'amiya'),
('rakeshlenka', 'rakesh'),
('khirodrout', 'khirod'),
('sabyasachipatra', 'sabyasachi'),
('tapansahoo', 'tapan'),
('subhankarghatak', 'subhankar');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(10) NOT NULL,
  `sname` varchar(25) DEFAULT NULL,
  `branch` varchar(15) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `sem` varchar(10) DEFAULT NULL,
  `mobno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `branch`, `address`, `dob`, `sex`, `sem`, `mobno`) VALUES
('B516014', 'Bidyashree Rout', 'CE', 'Pokhariput', '07-06-1997', 'Female', '1st', '9933112341'),
('B516016', 'Debabrata Choudhary', 'CE', 'Rourkela', '01-01-1997', 'Male', '1st', '5544333211'),
('B516020', 'G.Bhagyalakshmi', 'CE', 'Chandrashekharpur', '20-08-1997', 'Female', '1st', '6666666666'),
('B516038', 'Shaswat Satapathy', 'CE', 'Bhilai', '31-05-1998', 'Male', '1st', '5432112345'),
('B516039', 'Shivani Singh', 'CE', 'Bhopal', '15-10-1997', 'Female', '1st', '5432198765'),
('B116040', 'Shradhashree Patnaik', 'CSE', 'Bhadrak', '28-10-1997', 'Female', '1st', '8888899999'),
('B116043', 'Shubra Bissoyi', 'CSE', 'Berhampur', '05-05-1997', 'Female', '1st', '4444433333'),
('B116024', 'Kaushiki Agrawal', 'CSE', 'Gurgaon', '03-03-1997', 'Female', '1st', '3333333333'),
('B116056', 'Alisha Poddar', 'CSE', 'Bhadrak', '30-08-1997', 'Female', '1st', '6543211111'),
('B116042', 'Rahul Bangar', 'CSE', 'Delhi', '04-11-1996', 'Male', '1st', '5555544443'),
('B416004', 'Aditya Prakash', 'IT', 'Anugul', '06-12-1997', 'Male', '1st', '3333322211'),
('B416042', 'Siddhant Nanda', 'IT', 'Bhubaneswar', '20-02-1997', 'Male', '1st', '1232343451'),
('B416050', 'Vallari Rastogi', 'IT', 'Delhi', '31-12-1997', 'Female', '1st', '2345432987'),
('B416043', 'Sneha Das', 'IT', 'Rourkela', '02-09-1998', 'Female', '1st', '0000011111'),
('B416046', 'Swayam Prakash Pal', 'IT', 'Patia', '26-07-1997', 'Male', '1st', '3211234522'),
('B516033', 'Pawan', 'CE', 'UP', '07-06-1997', 'Male', '1st', '5432198765');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
CREATE TABLE IF NOT EXISTS `student_login` (
  `ID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Student_Password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`ID`, `Student_Password`) VALUES
('B516014', 'bidyashree'),
('B516016', 'Debabrata'),
('B516020', 'Bhagyalakshmi'),
('B516038', 'Shaswat'),
('B516039', 'Shivani'),
('B116040', 'Shradhashree'),
('B116043', 'Shubra'),
('B116024', 'Kaushiki'),
('B116056', 'Alisha'),
('B116042', 'Rahul'),
('B416004', 'Aditya'),
('B416042', 'Siddhant'),
('B416050', 'Vallari'),
('B416043', 'Sneha'),
('B416046', 'Swayam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
