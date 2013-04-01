-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2013 at 12:15 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
('EE450', 'Introduction to Computer Networks', 'SPRING 201', 'OHE 102', '7.30AM - 8.45AM', 3),
('CS402', 'Operating Systems', 'SPRING 201', 'OHE 301', '9.30AM - 10.45AM', 3);

-- --------------------------------------------------------

--
-- Table structure for table `professor_info`
--

CREATE TABLE IF NOT EXISTS `professor_info` (
  `user_id` int(10) DEFAULT NULL,
  `office_hours` varchar(50) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  KEY `foreignkey_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor_info`
--

INSERT INTO `professor_info` (`user_id`, `office_hours`, `subject`) VALUES
(4, '9.30AM - 10.45AM', 'Introduction to Computer Networks'),
(5, '11.30AM - 12.45PM', 'Operating Systems');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE IF NOT EXISTS `student_courses` (
  `user_id` int(10) DEFAULT NULL,
  `course_id` varchar(10) DEFAULT NULL,
  `semester` varchar(10) NOT NULL,
  `grade_type` varchar(20) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  KEY `foreignkey_user_id` (`user_id`),
  KEY `foreignkey_course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`user_id`, `course_id`, `semester`, `grade_type`, `grade`) VALUES
(1, 'CS402', 'SPRING 201', 'letter grade', 'A-'),
(2, 'EE450', 'SPRING 201', 'letter grade', 'B+');

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
(1, 'MS', 'CS', '3.50', 9, 27),
(2, 'MS', 'EE', '3.20', 8, 27),
(3, 'BS', 'CS', '3.60', 20, 52);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_type`, `first_name`, `middle_name`, `last_name`, `user_email`, `alternate_email`, `address`, `phone_no`, `password`) VALUES
(1, 'student', 'Abhinav', '', 'Mishra', 'abhi@usc.edu', 'abhi@yahoo.com', '1756 Scott St, LAKE CITY,FL 32056 ', '2132132132', 'abhinav'),
(2, 'student', 'Abhishek', 'Ratan', 'Tiwari', 'shek@usc.edu', 'abhishk@gmail.com', ' 1549 Alameda Ave, Adak,AK 99546 ', '3123123123', 'abhishek'),
(3, 'student', 'Aldrich', '', 'Stibel', 'ald@usc.edu', 'ald@gmail.com', ' 736 Bush St,VERNON HILLS,IL 60061 ', '3233233232', 'aldrich'),
(4, 'professor', 'Dennis', 'John', 'Lillee', 'dennis@usc.edu', 'dennis@yahoo.com', ' 70 Golden Gate Ave, SAN FRANCISCO, CA 94102 ', '4124124124', 'dennis'),
(5, 'professor', 'Davy', '', 'Hudson', 'davy@usc.edu', '', ' 1426 Guerrero St, NEW YORK ,NY 10010 ', '8128128123', 'davy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
