-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2013 at 10:23 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signmeup`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE IF NOT EXISTS `course_info` (
  `course_id` varchar(10) NOT NULL DEFAULT '',
  `course_name` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `class_location` varchar(20) DEFAULT NULL,
  `class_timings` varchar(50) DEFAULT NULL,
  `no_of_credits` int(10) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_name`, `semester`, `class_location`, `class_timings`, `no_of_credits`) VALUES
('EE101', 'Computer Organization and Architecture', 'Spring 2013', 'OHE 102', 'T, Th: 7.30AM - 8.45AM', 3),
('EE265', 'Introduction to Digital Logic', 'Spring 2013', 'OHE 166', 'T, F: 9.30AM - 10.45AM', 3),
('EE382', 'Linear Algebra', 'Spring 2013', 'SAL 344', 'W, Th: 12.30PM - 1.45PM', 3),
('EE467', 'Introduction to Computer Networks', 'Spring 2013', 'NOH 101', 'M, Th: 8.30AM - 9.45AM', 3),
('EE503', 'VLSI Design', 'Spring 2013', 'PHU 607', 'T, W: 10.30AM - 11.45AM', 3),
('CS101', 'Fundamentals of Computer Programming', 'Spring 2013', 'KLI 665', 'W, Th: 11.30AM - 12.45PM', 3),
('CS265', 'Object Oriented Programming', 'Spring 2013', 'VJN 222', 'T, F: 9.30AM - 10.45AM', 3),
('CS382', 'Operating Systems', 'Spring 2013', 'NOH 667', 'T, W: 7.30AM - 8.45AM', 3),
('CS467', 'Artificial Intelligence', 'Spring 2013', 'VKC 503', 'T, Th: 5.30PM - 7.45PM', 3),
('CS503', 'Analysis of Algorithms', 'Spring 2013', 'TTY 223', 'M, F: 3.30PM - 5.45PM', 3),
('BME101', 'Biomedical Programming', 'Spring 2013', 'YTH 423', 'M, T: 7.30AM - 8.45AM', 3),
('BME265', 'Medical Electronics', 'Spring 2013', 'DEX 223', 'W, Th: 9.30AM - 10.45AM', 3),
('BME382', 'Signals and Systems', 'Spring 2013', 'DEX 578', 'T, Th: 4.30PM - 6.45PM', 3),
('BME467', 'Biomedical Imaging', 'Spring 2013', 'VKC 405', 'T, F: 7.30AM - 8.45AM', 3),
('BME503', 'Neuroengineering', 'Spring 2013', 'OHE 301', 'M, W: 9.30AM - 10.45AM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `professor_info`
--

CREATE TABLE IF NOT EXISTS `professor_info` (
  `user_id` int(10) DEFAULT NULL,
  `office_location` varchar(100) DEFAULT NULL,
  `office_hours` varchar(50) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  KEY `foreignkey_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor_info`
--

INSERT INTO `professor_info` (`user_id`, `office_location`, `office_hours`, `subject`, `course_id`) VALUES
(6, 'ABC Building Room 101', 'T, Th: 9.30AM - 10.45AM', 'Computer Organization and Architecture', 'EE101'),
(6, 'ABC Building Room 101', 'T, Th: 9.30AM - 10.45AM', 'Introduction to Digital Logic', 'EE265'),
(7, 'CGH Building Room 444', 'Th, M: 5.30PM - 7.30PM', 'VLSI Design', 'EE503'),
(8, 'RRT Building Room 221', 'F, F: 3.30PM - 5.30PM', 'Fundamentals of Computer Programming', 'CS101'),
(8, 'RRT Building Room 221', 'F, F: 3.30PM - 5.30PM', 'Object Oriented Programming', 'CS265'),
(9, 'OPH Building Room 609', 'M, M: 4.30PM - 6.30PM', 'Operating Systems', 'CS382'),
(9, 'OPH Building Room 609', 'M, M: 4.30PM - 6.30PM', 'Artificial Intelligence', 'CS467'),
(10, 'FTY Building Room 134', 'W, W: 1.30PM - 3.30PM', 'Analysis of Algorithms', 'CS503'),
(11, 'ETR Building Room 455', 'Th, Th: 11.30AM - 1.30PM', 'Biomedical Programming', 'BME101'),
(11, 'ETR Building Room 455', 'Th, Th: 11.30AM - 1.30PM', 'Medical Electronics', 'BME265'),
(12, 'MNJ Building Room 101', 'T, T: 9.30AM - 11.30AM', 'Signals and Systems', 'BME382'),
(12, 'MNJ Building Room 101', 'T, T: 9.30AM - 11.30AM', 'Biomedical Imaging', 'BME467'),
(13, 'SAL Building Room 326', 'F, F: 12.30PM - 2.30PM', 'Neuroengineering', 'BME503'),
(5, 'XYZ Building Room 202', 'M, M: 11.30AM - 12.45PM', 'Linear Algebra', 'EE382'),
(5, 'XYZ Building Room 202', 'M, M: 11.30AM - 12.45PM', 'Introduction to Computer Networks', 'EE467');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE IF NOT EXISTS `student_courses` (
  `user_id` int(10) DEFAULT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_id` varchar(10) DEFAULT NULL,
  `semester` varchar(20) NOT NULL,
  `grade_type` varchar(20) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  KEY `foreignkey_user_id` (`user_id`),
  KEY `foreignkey_course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`user_id`, `faculty_id`, `course_id`, `semester`, `grade_type`, `grade`) VALUES
(1, 6, 'EE101', 'Fall 2012', 'letter grade', 'A-'),
(2, 6, 'EE101', 'Fall 2012', 'letter grade', 'B+'),
(3, 5, 'EE382', 'Fall 2012', 'letter grade', 'A'),
(14, 5, 'EE467', 'Fall 2012', 'letter grade', 'B'),
(1, 8, 'CS265', 'Fall 2012', 'letter grade', 'B+'),
(2, 8, 'CS265', 'Fall 2012', 'letter grade', 'A-'),
(3, 9, 'CS467', 'Fall 2012', 'letter grade', 'A'),
(14, 9, 'CS467', 'Fall 2012', 'letter grade', 'A-'),
(1, 10, 'CS503', 'Fall 2012', 'letter grade', 'B'),
(2, 10, 'CS503', 'Fall 2012', 'letter grade', 'B+'),
(3, 11, 'BME265', 'Fall 2012', 'letter grade', 'A-'),
(14, 11, 'BME265', 'Fall 2012', 'letter grade', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `user_id` int(10) DEFAULT NULL,
  `degree` varchar(70) NOT NULL,
  `major` varchar(70) NOT NULL,
  `gpa` decimal(3,2) DEFAULT NULL,
  `credits_earned` int(10) DEFAULT NULL,
  `credits_required_for_degree` int(10) DEFAULT NULL,
  KEY `foreignkey_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`user_id`, `degree`, `major`, `gpa`, `credits_earned`, `credits_required_for_degree`) VALUES
(1, 'MS', 'CS', 3.30, 9, 18),
(2, 'MS', 'EE', 3.40, 9, 18),
(3, 'BS', 'BME', 3.60, 9, 18),
(14, 'MS', 'CS', 3.50, 9, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `middle_name` varchar(70) DEFAULT NULL,
  `last_name` varchar(70) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `alternate_email` varchar(70) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(15) NOT NULL,
  `password` varchar(70) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_type`, `first_name`, `middle_name`, `last_name`, `user_email`, `alternate_email`, `address`, `phone_no`, `password`) VALUES
(1, 'admin', 'Admin', '', 'USC', 'admin@usc.edu', '', 'Student Union, USC', '1233214123', 'admin'),
(2, 'student', 'Abhinav', '', 'Mishra', 'abhi@usc.edu', 'abhi@yahoo.com', '1756 Scott St, LAKE CITY,FL 32056', '2132132132', 'abhinav'),
(3, 'student', 'Abhishek', 'Ratan', 'Tiwari', 'shek@usc.edu', 'abhishk@gmail.com', '1549 Alameda Ave, Adak,AK 99546', '3123123123', 'abhishek'),
(4, 'student', 'Aldrich', '', 'Stibel', 'ald@usc.edu', 'ald@gmail.com', '736 Bush St,VERNON HILLS,IL 60061', '3233233232', 'aldrich'),
(5, 'professor', 'Dennis', 'John', 'Lillee', 'dennis@usc.edu', 'dennis@yahoo.com', '70 Golden Gate Ave, SAN FRANCISCO, CA 94102', '4124124124', 'dennis'),
(6, 'professor', 'Davy', '', 'Hudson', 'davy@usc.edu', '', '1426 Guerrero St, NEW YORK ,NY 10010', '8128128123', 'davy'),
(7, 'professor', 'Tim', '', 'Johnson', 'tjohnson@usc.edu', '', '1555 Travis St, Columbus ,OH 10355', '6166165665', 'tjohnson'),
(8, 'professor', 'Bob', '', 'Forman', 'bforman@usc.edu', '', '159 45th St, San Jose ,CA 96610', '8126788123', 'bforman'),
(9, 'professor', 'Glenn', '', 'Hyde', 'ghyde@usc.edu', '', '1212 Jefferson St, San Antonio ,CA 98765', '4567456373', 'ghyde'),
(10, 'professor', 'Donna', '', 'Rickson', 'donrick@usc.edu', '', '156 Boardwalk, Santa Cruz ,CA 66679', '5679990343', 'donrick'),
(11, 'professor', 'Steve', '', 'Simpson', 'simpson@usc.edu', '', '665 Matena Way, Rodeo Drive ,TX 52223', '5677452111', 'simpson'),
(12, 'professor', 'Ali', '', 'Fezowsky', 'alif@usc.edu', '', '200 Zanker Way, Tuscan ,AZ 77653', '6221123344', 'alif'),
(13, 'professor', 'Brad', '', 'Womack', 'womack@usc.edu', '', '3345 University Ave, Los Angeles ,CA 90819', '1115554343', 'womack'),
(14, 'student', 'Yumin', '', 'Gong', 'yumin@usc.edu', '', '56th test street', '1111111111', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
