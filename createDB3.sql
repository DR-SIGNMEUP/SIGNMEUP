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
  `semester` varchar(10) NOT NULL,
  `class_location` varchar(20) DEFAULT NULL,
  `class_timings` varchar(50) DEFAULT NULL,
  `no_of_credits` int(10) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_name`, `semester`, `class_location`, `class_timings`, `no_of_credits`) VALUES
('EE450', 'Introduction to Computer Networks', 'SPRING 201', 'OHE 102', 'T, Th: 7.30AM - 8.45AM', 3),
('CS402', 'Operating Systems', 'SPRING 201', 'OHE 301', 'M, W: 9.30AM - 10.45AM', 3);

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
(6, 'ABC Building Room 101', 'T, Th: 9.30AM - 10.45AM', 'Introduction to Computer Networks', 'EE450'),
(5, 'XYZ Building Room 202', 'M, W: 11.30AM - 12.45PM', 'Operating Systems', 'CS402');

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
(3, 5, 'CS402', 'Fall 2012', 'letter grade', 'A-'),
(2, 6, 'EE450', 'Fall 2012', 'letter grade', 'B+'),
(3, 6, 'EE450', 'Spring 2013', NULL, NULL),
(44, 0, 'CSCI 101L', '', NULL, NULL),
(44, 0, 'CSCI 570', '', NULL, NULL),
(2, 5, 'CS402', 'Spring 2013', NULL, NULL),
(44, 6, 'EE450', 'Spring 2013', NULL, NULL),
(4, 6, 'EE450', 'Spring 2013', NULL, NULL),
(44, 5, 'CS402', 'Spring 2013', NULL, NULL);

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
(1, 'MS', 'CS', 3.50, 9, 27),
(2, 'MS', 'EE', 3.20, 8, 27),
(3, 'BS', 'CS', 3.60, 20, 52),
(44, 'MS', 'CS', 0.00, 0, 27);

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
(3, 'student', 'Abhishek', 'Ratan', 'Tiwari', 'shek@usc.edu', 'abhishk@gmail.com', ' 1549 Alameda Ave, Adak,AK 99546', '3123123123', 'abhishek'),
(4, 'student', 'Aldrich', '', 'Stibel', 'ald@usc.edu', 'ald@gmail.com', ' 736 Bush St,VERNON HILLS,IL 60061', '3233233232', 'aldrich'),
(5, 'professor', 'Dennis', 'John', 'Lillee', 'dennis@usc.edu', 'dennis@yahoo.com', ' 70 Golden Gate Ave, SAN FRANCISCO, CA 94102', '4124124124', 'dennis'),
(6, 'professor', 'Davy', '', 'Hudson', 'davy@usc.edu', '', ' 1426 Guerrero St, NEW YORK ,NY 10010', '8128128123', 'davy'),
(44, 'student', 'Yumin', '', 'Gong', 'yumin@usc.edu', '', '56th test street', '111-111-1111', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
