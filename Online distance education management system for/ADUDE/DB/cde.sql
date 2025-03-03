-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2018 at 05:51 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cde`
--

-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS `cde` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cde`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `fname` VARCHAR(25) NOT NULL,
  `lname` VARCHAR(25) NOT NULL,
  `User_Id` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(25) NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `accounttype` VARCHAR(50) NOT NULL,
  `status` INT(20) NOT NULL,
  `isActive` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`User_Id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`fname`, `lname`, `User_Id`, `phone`, `username`, `password`, `accounttype`, `status`, `isActive`) VALUES
('Tehaye', 'Marie', '100', '+25191823423452', 'Tehaye', 'TGFrZXc=', 'Student', 6, 1),
('Awoke', 'Gebey', '101', '+25191823423400', 'Wagnew', 'TGFrZXc=', 'Student', 6, 1),
('Wassie', 'Molla', '105', '+2519186006799', 'Wall', 'TGFrZXc=', 'Student', 6, 1),
('Bahilu', 'Grma', '106', '+251920867456', 'Bahilu', 'QWJlYmU=', 'Student', 6, 1),
('Derge', 'Belay', '107', '+251918506787', 'Derge', 'TWVuZ2lzdA==', 'Student', 6, 1),
('Kebede', 'Belay', '108', '+2518776454433', 'Kebede', 'S2ViZWRl', 'Student', 6, 1),
('Abebaw', 'Gebeyehu', '110', '+2519186707897', 'Abebaw', '123', 'Student', 6, 1),
('Awoke', 'Alemayehu', '116', '+25190954665544', 'Awoke', 'U2VtdQ==', 'Student', 6, 1),
('Awoke', 'Alemayehu', '122', '+2519347777788', 'Awoke2', 'QmVsYXly', 'Student', 6, 1),
('Admasu', 'Zccccc', '138', '+25144323222222', 'Abe', 'TW9s', 'Student', 6, 1),
('Alemneh', 'Gebeyehu', '148', '+251998877766', 'Alemneh27', 'QmVsYXk=', 'Student', 6, 1),
('Abebaw', 'Gebeyehu', 'AB1234URT', '+2510918600679', 'AbebawIns', 'YWJlYmF3MTI=', 'Instructor', 7, 1),
('Awoke', 'Alemayehu', 'AD07008543UR', '+251918600679', 'abebe', 'YWJlYmF3', 'Registrar', 2, 1),
('Abebaw', 'Gebeyehu', 'BDU0700857UR', '+251918600679', 'admin', 'YWJlYmF3', 'admin', 1, 1),
('Abebaw', 'Gebyehu', 'Bdu078965Ur', '+251186790665', 'dep1', 'ZGVwYXJ0bWVudDE=', 'DeP-Head', 10, 1),
('Abile', 'Gzachew', 'BRT0700897YT', '+2518796755566', 'dep2', 'ZGVwYXJ0bWVudA==', 'DeP-Head', 10, 1),
('Himanot', 'Abere', 'Coordnatior', '0929765432', 'abcd', 'YWJjZA==', 'Coordnator', 3, 1),
('Andarg', 'Mulken', 'Instructor', '0928569653', 'Ins', '', 'Instructor', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `acourse`
--

CREATE TABLE IF NOT EXISTS `acourse` (
  `id` VARCHAR(50) NOT NULL,
  `dept` VARCHAR(25) NOT NULL,
  `sems` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `cname` VARCHAR(25) NOT NULL,
  `ccode` VARCHAR(25) NOT NULL,
  `prrqust` VARCHAR(25) NOT NULL DEFAULT 'none',
  KEY `id` (`id`),
  CONSTRAINT `acourse_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acourse`
--

INSERT INTO `acourse` (`id`, `dept`, `sems`, `year`, `cname`, `ccode`, `prrqust`) VALUES
('105', 'Information Technology', 1, 1, 'Database', 'dat1', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `RegId` INT(20) NOT NULL AUTO_INCREMENT,
  `photo` VARCHAR(255) NOT NULL,
  `grade` VARCHAR(255) NOT NULL,
  `firstname` VARCHAR(25) NOT NULL,
  `middlename` VARCHAR(25) NOT NULL,
  `lastname` VARCHAR(25) NOT NULL,
  `birthdate` DATE NOT NULL,
  `sex` ENUM('male', 'female') NOT NULL,
  `town` VARCHAR(25) NOT NULL,
  `woreda` VARCHAR(25) NOT NULL,
  `adress` VARCHAR(25) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `department` VARCHAR(25) NOT NULL,
  `phone` VARCHAR(25) NOT NULL,
  `status` INT(11) NOT NULL DEFAULT 0,
  `semister` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  PRIMARY KEY (`RegId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=133;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`RegId`, `photo`, `grade`, `firstname`, `middlename`, `lastname`, `birthdate`, `sex`, `town`, `woreda`, `adress`, `email`, `department`, `phone`, `status`, `semister`, `year`) VALUES
(100, '20180511_165415.jpg', '20180511_165416.jpg', 'Abrham', 'Minalu', 'Demeke', '1963-02-02', 'male', 'Metema', 'Bahir dar', 'Bahir dar', 'A@yahoo.com', 'Markating Managment', '+2518796544412', 0, 1, 1),
(102, '1.jpg', 'FP04.jpg', 'Abrshe', 'Gedamu', 'Belay', '1961-02-07', 'male', 'Motta', 'Bahir dar', 'Bahirdar', 'c@yahoo.com', 'Educational Planning', '+251918600674', 0, 1, 2010),
(103, 'FP03.jpg', '1.jpg', 'Awekie', 'Bayu', 'Wallie', '1999-11-29', 'female', 'East gojam', 'Markose', 'Bahir', 'Ab3409@gmail.com', 'Economices', '+25191860067945', 1, 1, 1),
(109, '', 'd.jpg', 'Abebaw', 'Gedefaw', 'Moll', '1977-09-07', 'female', 'Bahir dar', 'Mekele', 'Arba minch', 'Afvegr77@gmail.com', 'Mathmatices', '+25191800423452', 1, 1, 1),
(111, 'FP03.jpg', 'FP03.jpg', 'Gebria', 'Belaye', 'Lakew', '1974-01-08', 'male', 'Bahir dar', 'Mekele', 'Arba minch', 'g@yahoo.com', 'Educational Planning', '+2519876655443', 1, 1, 2010),
(114, 'Page 1.jpg', 'FP03.jpg', 'Abebech', 'Belay', 'Simchew', '1968-07-07', 'male', 'East gojam', 'Gonder', 'Bahir dar', 'rt@yahoo.com', 'Mathmatices', '+251918766089', 1, 1, 2010),
(117, 'Lab.jpg', 'Page 1.jpg', 'Himanot', 'Abere', 'Tsegaye', '1982-06-12', 'male', 'Wollo', 'Metema', 'Westgojam', 'hima@yahoo.com', 'Economices', '+2519292767890', 0, 1, 2010),
(118, 'Page 1.jpg', 'FP03.jpg', 'Awoke', 'Alemayehu', 'Semu', '1982-01-27', 'male', 'East gojam', 'Gonder', 'Chalia', 'awok@yahoo.com', 'Managment', '+25190954665544', 0, 1, 2010),
(119, 'FP01.jpg', 'Page 1.jpg', 'Abenezer', 'Denekew', 'Baila', '2018-06-04', 'male', 'Bahir dar', 'Bahir dar', 'Arba minch', 'trt@gmail.com', 'Educational Planning', '+251979687070', 0, 1, 1),
(123, '20180511_165415.jpg', '20180511_165416.jpg', 'Wfff', 'Agfgfgf', 'Tfgfdgdfgf', '2018-06-12', 'male', 'Sdfsd', 'Rfgfgf', 'Eghnghg', 'xdsdsdsds@hotmail.com', 'Markating Managment', '+25190952674873', 0, 1, 2),
(129, 're.pdf', 'Chapter one.ppt', 'Abebech', 'alamraw', 'yeshiwas', '2018-08-31', 'female', 'Metema', 'Mekele', 'Bahir', 'Abe45@yahoo.com', 'Economices', '+251888887589', 0, 1, 1),
(130, 'c1.ppt', 'Chapter one.ppt', 'Adddscs', 'Hdvdvvd', 'zx', '2018-06-12', 'male', 'Bahir dar', 'Gonder', 'Metema', 'ret@yahoo.com', 'English', '+251918600679', 0, 1, 1),
(131, 'WOKE.oxps', 'WOKE.oxps', 'Abeba', 'Negusia', 'ayalew', '2018-06-05', 'female', 'Gonder', 'Gonder', 'Bahir Dar', 'Abebw@yahoo.com', 'Accounting', '+251910678983', 0, 1, 2),
(132, 'WOKE.oxps', 'WOKE.oxps', 'Derge', 'Minalu', 'Lakew', '2018-06-29', 'male', 'Retta', 'Bahir dar', 'Metema', 'Metema@gmail.com', 'Accounting', '+251918670789', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `assign_instrctur_course`
--

CREATE TABLE IF NOT EXISTS `assign_instrctur_course` (
  `coo_id` VARCHAR(50) NOT NULL,
  `depname` VARCHAR(25) NOT NULL,
  `ins_id` VARCHAR(50) NOT NULL,
  `course_code` VARCHAR(25) NOT NULL,
  `credit_houre` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `semister` INT(11) NOT NULL,
  KEY `coo_id` (`coo_id`),
  KEY `ins_id` (`ins_id`),
  KEY `course_code` (`course_code`),
  CONSTRAINT `assign_instrctur_course_ibfk_1` FOREIGN KEY (`coo_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `assign_instrctur_course_ibfk_2` FOREIGN KEY (`ins_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign_instrctur_course`
--

INSERT INTO `assign_instrctur_course` (`coo_id`, `depname`, `ins_id`, `course_code`, `credit_houre`, `year`, `semister`) VALUES
('Coordnatior', 'Mathmatices', 'Instructor', 'Advanced1', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Regid` VARCHAR(50) NOT NULL,
  `course_code` VARCHAR(25) NOT NULL,
  `course_name` VARCHAR(25) NOT NULL,
  `crdite_houre` INT(11) NOT NULL,
  `pre_requst` VARCHAR(25) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`course_code`),
  KEY `Regid` (`Regid`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Regid`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Regid`, `course_code`, `course_name`, `crdite_houre`, `pre_requst`) VALUES
('AD07008543UR', '34wewesd', 'fsdfsd', 23, 'dddd'),
('AD07008543UR', 'Acou432', 'Intoductiontobisness', 5, 'bisness'),
('AD07008543UR', 'Advanced1', 'Advanceddatabase', 7, 'advanced');

-- --------------------------------------------------------

--
-- Table structure for table `curriculem`
--

CREATE TABLE IF NOT EXISTS `curriculem` (
  `cooid` VARCHAR(50) NOT NULL,
  `department` VARCHAR(25) NOT NULL,
  `course_name` VARCHAR(25) NOT NULL,
  `course_code` VARCHAR(25) NOT NULL,
  `crdite_houre` INT(11) NOT NULL,
  `Pre_requst` VARCHAR(25) NOT NULL DEFAULT 'none',
  `semister` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  PRIMARY KEY (`course_code`),
  KEY `cooid` (`cooid`),
  CONSTRAINT `curriculem_ibfk_1` FOREIGN KEY (`cooid`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curriculem`
--

INSERT INTO `curriculem` (`cooid`, `department`, `course_name`, `course_code`, `crdite_houre`, `Pre_requst`, `semister`, `year`) VALUES
('Coordnatior', 'Mathmatices', 'Advancedatabase', 'Advanced1', 5, 'none', 1, 2),
('Coordnatior', 'Accounting', 'database', 'dat1', 7, 'none', 1, 1),
('Coordnatior', 'Managment', 'Databese', 'Dat23', 4, 'Databas', 1, 3),
('Coordnatior', 'Economics', 'Econmices1', 'eco2', 7, 'none', 1, 1),
('Coordnatior', 'English', 'Englshe', 'eng12rt', 5, 'none', 1, 1),
('Coordnatior', 'Mathmatices', 'Mathesalgbra', 'lgebr12', 4, 'none', 1, 1),
('Coordnatior', 'Accounting', 'Mining', 'm12dg', 5, 'none', 2, 3),
('Coordnatior', 'Economices', 'markating', 'mar123rt', 4, 'none', 1, 1),
('Coordnatior', 'Mathmatices', 'Maths', 'Maths12', 3, 'none', 1, 1),
('Coordnatior', 'Managment', 'mangment Advanced', 'mg34', 3, 'none', 1, 1),
('Coordnatior', 'Managment', 'introdactionti mgt', 'mgt12', 5, 'none', 1, 1),
('Coordnatior', 'Managment', 'Mngment', 'mgt4', 2, 'princple', 2, 3),
('Coordnatior', 'Accounting', 'Princpl1', 'pr12', 7, 'none', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `note` VARCHAR(400) NOT NULL,
  `year` INT(11) NOT NULL,
  `semester` INT(11) NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`note`, `year`, `semester`, `start_date`, `end_date`) VALUES
('course add and drop', 1, 1, '2018-06-06', '2018-06-27'),
('Registration', 1, 1, '2018-06-20', '2018-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `dcourse`
--

CREATE TABLE IF NOT EXISTS `dcourse` (
  `id` VARCHAR(50) NOT NULL,
  `dept` VARCHAR(25) NOT NULL,
  `sems` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `cname` VARCHAR(25) NOT NULL,
  `ccode` VARCHAR(25) NOT NULL,
  `prrqust` VARCHAR(25) NOT NULL DEFAULT 'none',
  KEY `id` (`id`),
  CONSTRAINT `dcourse_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dcourse`
--

INSERT INTO `dcourse` (`id`, `dept`, `sems`, `year`, `cname`, `ccode`, `prrqust`) VALUES
('105', 'Managment', 1, 1, 'mangment Advanced', 'mg34', 'none'),
('105', 'Information Technology', 1, 1, 'Database', 'dat1', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `faculity` VARCHAR(25) NOT NULL,
  `regid` VARCHAR(50) NOT NULL,
  `depid` VARCHAR(25) NOT NULL,
  `depname` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`depid`),
  KEY `regid` (`regid`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`regid`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`faculity`, `regid`, `depid`, `depname`) VALUES
('Computing', 'AD07008543UR', '107', 'Information Technology'),
('computing', 'AD07008543UR', '2', 'Managment'),
('Education', 'AD07008543UR', '235', 'Mathmatices'),
('Fb', 'AD07008543UR', '29', 'Educational Planning'),
('FB', 'AD07008543UR', '5', 'Economices'),
('Computing', 'AD07008543UR', '6', 'English'),
('Fb', 'AD07008543UR', 'Account123', 'Accounting'),
('Fb', 'AD07008543UR', 'Mreket145', 'Markating Managment');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `comment` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `Email`, `comment`) VALUES
('Abebaw', 'Abebaw@gmail.com', 'csckjsjcjcjxzcxhchxcxcxc');

-- --------------------------------------------------------

--
-- Table structure for table `insassignment`
--

CREATE TABLE IF NOT EXISTS `insassignment` (
  `ins_id` VARCHAR(50) NOT NULL,
  `insname` VARCHAR(25) NOT NULL,
  `department` VARCHAR(25) NOT NULL,
  `year` INT(11) NOT NULL,
  `coursename` VARCHAR(25) NOT NULL,
  `term` INT(11) NOT NULL,
  `sumbtiondate` DATE NOT NULL,
  `Deadlinedate` DATE NOT NULL,
  `Filename` VARCHAR(300) NOT NULL,
  `tmp_name` VARCHAR(200) NOT NULL,
  `Filesize` FLOAT NOT NULL,
  `Filetype` VARCHAR(50) NOT NULL,
  KEY `ins_id` (`ins_id`),
  CONSTRAINT `insassignment_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insassignment`
--

INSERT INTO `insassignment` (`ins_id`, `insname`, `department`, `year`, `coursename`, `term`, `sumbtiondate`, `Deadlinedate`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('AB1234URT', 'Abebaw', 'Management', 1, 'Graphices', 1, '2018-06-06', '2018-06-20', 'Graphices', 'C:wamp\\tmp\\phpFA08.tmp', 699904, 'application/vnd.ms-powerpoint'),
('AB1234URT', 'Ayele', 'Management', 1, 'ComputerGraphices', 1, '2018-06-01', '2018-06-23', 'ComputerGraphices20180620072612.ppt', 'C:wamp\\tmp\\phpBBBC.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `CID` VARCHAR(50) NOT NULL,
  `coursename` VARCHAR(20) NOT NULL,
  `modulenum` INT(20) NOT NULL AUTO_INCREMENT,
  `department` VARCHAR(25) NOT NULL,
  `term` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `Filename` VARCHAR(300) NOT NULL,
  `tmp_name` VARCHAR(100) NOT NULL,
  `fileSize` FLOAT NOT NULL,
  `fileType` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`modulenum`),
  KEY `CID` (`CID`),
  CONSTRAINT `module_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=7;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`CID`, `coursename`, `modulenum`, `department`, `term`, `year`, `Filename`, `tmp_name`, `fileSize`, `fileType`) VALUES
('Coordnatior', 'Database', 1, 'Management', 1, 1, 'Database', 'C:wamp\\tmp\\php2D9A.tmp', 699904, 'application/vnd.ms-powerpoint'),
('Coordnatior', 'Database', 2, 'Management', 1, 1, 'Database', 'C:wamp\\tmp\\php5490.tmp', 699904, 'application/vnd.ms-powerpoint'),
('Coordnatior', 'datamining', 3, 'Accounting', 1, 1, 'datamining20180603110310.docx', 'C:wamp\\tmp\\php26D3.tmp', 13040, 'application/vnd.openxmlformats'),
('Coordnatior', 'Computergraphices', 6, 'English', 1, 1, 'Computergraphices', 'C:wamp\\tmp\\php10CB.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` INT(5) NOT NULL AUTO_INCREMENT,
  `test_id` INT(5) NOT NULL,
  `que_desc` VARCHAR(150) NOT NULL,
  `ans1` VARCHAR(75) NOT NULL,
  `ans2` VARCHAR(75) NOT NULL,
  `ans3` VARCHAR(75) NOT NULL,
  `ans4` VARCHAR(75) NOT NULL,
  `true_ans` INT(1) NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id` (`test_id`),
  CONSTRAINT `mst_question_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `mst_test` (`test_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=6;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'What is the difference between log and out', 'Action', 'Request', 'deadline', 'None', 3),
(2, 1, 'What is data mining', 'database', 'Datamining', 'Warehousing', 'None', 1),
(3, 1, 'What is database Describe', 'course', 'department', 'mining', 'student', 1),
(4, 1, 'What is the difference between C++ and PHP', 'Compiler', 'Interpreter', 'File', 'All', 1),
(5, 1, 'What is the difference between like and attract', 'Meaning', 'Value', 'Difference', 'none', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` VARCHAR(50) NOT NULL,
  `test_id` INT(5) NOT NULL,
  `test_date` DATE NOT NULL,
  `score` INT(11) NOT NULL,
  KEY `login` (`login`),
  KEY `test_id` (`test_id`),
  CONSTRAINT `mst_result_ibfk_1` FOREIGN KEY (`login`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `mst_result_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `mst_test` (`test_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('105', 1, '0000-00-00', 4),
('105', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` INT(5) NOT NULL AUTO_INCREMENT,
  `sub_name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=6;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'Data base'),
(2, 'Security'),
(3, 'Compiler');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` INT(5) NOT NULL AUTO_INCREMENT,
  `sub_id` INT(5) NOT NULL,
  `test_name` VARCHAR(50) NOT NULL,
  `total_que` INT(11) NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `sub_id` (`sub_id`),
  CONSTRAINT `mst_test_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `mst_subject` (`sub_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=3;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'final', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` VARCHAR(50) NOT NULL,
  `test_id` INT(5) NOT NULL,
  `que_des` VARCHAR(200) NOT NULL,
  `ans1` VARCHAR(70) NOT NULL,
  `ans2` VARCHAR(70) NOT NULL,
  `ans3` VARCHAR(70) NOT NULL,
  `ans4` VARCHAR(70) NOT NULL,
  `true_ans` INT(11) NOT NULL,
  `your_ans` INT(11) NOT NULL,
  KEY `sess_id` (`sess_id`),
  KEY `test_id` (`test_id`),
  CONSTRAINT `mst_useranswer_ibfk_1` FOREIGN KEY (`sess_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `mst_useranswer_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `mst_test` (`test_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ins_id` VARCHAR(50) NOT NULL,
  `stud_id` VARCHAR(50) NOT NULL,
  `course_name` VARCHAR(25) NOT NULL,
  `course_code` VARCHAR(25) NOT NULL,
  `year` INT(11) NOT NULL,
  `semister` INT(11) NOT NULL,
  `credit_hour` INT(11) NOT NULL,
  `assignment` DECIMAL(5,2) NOT NULL,
  `final` DECIMAL(5,2) NOT NULL,
  `total` DECIMAL(5,2) NOT NULL,
  `grade` VARCHAR(25) NOT NULL,
  `gpa` DECIMAL(3,2) NOT NULL,
  `status` INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `ins_id` (`ins_id`),
  KEY `stud_id` (`stud_id`),
  KEY `course_code` (`course_code`),
  CONSTRAINT `result_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `result_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `result_ibfk_3` FOREIGN KEY (`course_code`) REFERENCES `curriculem` (`course_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=43;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `ins_id`, `stud_id`, `course_name`, `course_code`, `year`, `semister`, `credit_hour`, `assignment`, `final`, `total`, `grade`, `gpa`, `status`) VALUES
(28, 'AB1234URT', '138', 'Maths', 'Maths12', 1, 1, 3, 23.00, 56.00, 79.00, 'B+', 3.50, 1),
(29, 'AB1234URT', '100', 'Maths', 'Maths12', 1, 1, 3, 23.00, 54.00, 77.00, 'B+', 3.50, 1),
(31, 'AB1234URT', '105', 'Databese', 'dat1', 1, 1, 4, 26.00, 60.00, 86.00, 'A', 4.00, 1),
(32, 'AB1234URT', '100', 'Princpl1', 'pr12', 1, 1, 5, 23.00, 67.00, 90.00, 'A+', 4.00, 1),
(33, 'Instructor', '105', 'mangment Advanced', 'mg34', 1, 1, 5, 30.00, 45.00, 75.00, 'B+', 3.50, 1),
(34, 'AB1234URT', '110', 'Mathesalgbra', 'lgebr12', 1, 1, 4, 30.00, 53.00, 83.00, 'A-', 3.75, 1),
(35, 'AB1234URT', '138', 'Mathesalgbra', 'lgebr12', 1, 1, 4, 27.00, 20.00, 47.00, 'C-', 1.50, 1),
(36, 'AB1234URT', '105', 'introdactionti mgt', 'mgt12', 1, 1, 5, 30.00, 40.00, 70.00, 'B', 3.00, 1),
(37, 'AB1234URT', '108', 'Princpl1', 'pr12', 1, 1, 7, 27.00, 27.00, 54.00, 'C', 2.00, 1),
(38, 'AB1234URT', '148', 'Princpl1', 'pr12', 1, 1, 7, 25.00, 36.00, 61.00, 'C+', 2.50, 1),
(39, 'AB1234URT', '110', 'Advancedatabase', 'Advanced1', 1, 1, 5, 5.00, 61.00, 66.00, 'B-', 2.75, 1),
(40, 'AB1234URT', '138', 'Advancedatabase', 'Advanced1', 1, 1, 5, 3.00, 18.00, 21.00, 'F', 0.00, 1),
(41, 'AB1234URT', '105', 'Databese', 'Dat23', 1, 1, 4, 30.00, 56.00, 86.00, 'A', 4.00, 0),
(42, 'AB1234URT', '116', 'Databese', 'Dat23', 1, 1, 4, 17.00, 39.00, 56.00, 'C', 2.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `User_Id` VARCHAR(50) NOT NULL,
  `stud_id` VARCHAR(50) NOT NULL,
  `firstname` VARCHAR(25) NOT NULL,
  `Middlename` VARCHAR(25) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `birthdate` DATE NOT NULL,
  `sex` ENUM('male', 'female') NOT NULL,
  `town` VARCHAR(25) NOT NULL,
  `woreda` VARCHAR(25) NOT NULL,
  `Adress` VARCHAR(25) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `department` VARCHAR(25) NOT NULL,
  `phone` VARCHAR(25) NOT NULL,
  `semester` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  PRIMARY KEY (`stud_id`),
  UNIQUE KEY `Email` (`Email`),
  KEY `User_Id` (`User_Id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`User_Id`, `stud_id`, `firstname`, `Middlename`, `lastname`, `birthdate`, `sex`, `town`, `woreda`, `Adress`, `Email`, `department`, `phone`, `semester`, `year`) VALUES
('AD07008543UR', '101', 'Wagnew', 'Gebey', 'Molla', '1995-03-01', 'male', 'Motta', 'Arba', 'Chalia', 'Afvegr09@gmail.com', 'English', '+25191823423400', 1, 1),
('AD07008543UR', '105', 'Wassie', 'Molla', 'Lakew', '1977-09-07', 'male', 'Weldia', 'Tigry', 'Weldia', 'Te7@gmail.com', 'Managment', '+2519186006799', 1, 1),
('AD07008543UR', '106', 'Bahilu', 'Grma', 'Abebe', '1994-01-27', 'male', 'Bahirdar', 'Chilga', 'Dbrabour', 'G@gmail.com', 'Economices', '+251920867456', 1, 1),
('AD07008543UR', '107', 'Derge', 'Belay', 'Mengist', '1970-02-27', 'male', 'Metema', 'Mekele', 'Metema', 'h@yahoo.com', 'Managment', '+251918506787', 1, 1),
('AD07008543UR', '108', 'Kebede', 'Belay', 'Kebede', '1980-07-20', 'male', 'Gonder', 'Metema', 'Chilgia', 'C@gmail.com', 'Accounting', '+2518776454433', 1, 1),
('AD07008543UR', '110', 'Abebaw', 'Gebeyehu', 'Zelalem', '1978-07-08', 'male', 'Bahir dar', 'Gonder', 'Arba minch', 'Abe@yahoo.com', 'Mathmatices', '+2519186707897', 1, 1),
('AD07008543UR', '116', 'Awoke', 'Alemayehu', 'Semu', '1982-01-27', 'male', 'East gojam', 'Gonder', 'Chalia', 'awok@yahoo.com', 'Managment', '+25190954665544', 1, 1),
('AD07008543UR', '122', 'Awoke', 'Alemayehu', 'Belayr', '2018-06-05', 'male', 'Bahir dar', 'Mekele', 'Metema', 'dsdsd@yahoo.com', 'Managment', '+2519347777788', 1, 1),
('AD07008543UR', '138', 'Admasu', 'Zccccc', 'Mol', '1981-06-01', 'male', 'Vcxcxcx', 'Vcxssss', 'Dfvfff', 'Metema@gmail.com', 'Mathmatices', '+25144323222222', 1, 1),
('AD07008543UR', '148', 'Alemneh', 'Gebeyehu', 'Belay', '1962-06-07', 'male', 'Bahir dar', 'Gonder', 'Bahir dar', 'Alemneh27@gmail.com', 'Accounting', '+251998877766', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentassignment`
--

CREATE TABLE IF NOT EXISTS `studentassignment` (
  `User_Id` VARCHAR(50) NOT NULL,
  `department` VARCHAR(30) NOT NULL,
  `year` INT(11) NOT NULL,
  `coursename` VARCHAR(30) NOT NULL,
  `term` INT(11) NOT NULL,
  `Sumbtiondate` DATE NOT NULL,
  `Filename` VARCHAR(300) NOT NULL,
  `tmp_name` VARCHAR(200) NOT NULL,
  `Filesize` FLOAT NOT NULL,
  `Filetype` VARCHAR(30) NOT NULL,
  KEY `User_Id` (`User_Id`),
  CONSTRAINT `studentassignment_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentassignment`
--

INSERT INTO `studentassignment` (`User_Id`, `department`, `year`, `coursename`, `term`, `Sumbtiondate`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('105', 'Accounting', 1, 'Intoductiontobisness', 2, '2018-06-05', '20180616120734.pptx', 'C:wamp\\tmp\\php848A.tmp', 195697, 'application/vnd.openxmlformats'),
('105', 'Managment', 1, 'Database', 2, '2018-06-05', 'Database20180616121050.ppt', 'C:wamp\\tmp\\php8171.tmp', 756736, 'application/vnd.ms-powerpoint'),
('105', 'Managment', 1, 'Database', 1, '2018-06-05', 'Database20180616121115.docx', 'C:wamp\\tmp\\phpE481.tmp', 31382, 'application/vnd.openxmlformats'),
('105', 'Accounting', 1, 'Database', 1, '2018-06-04', 'Database20180616121933.ppt', 'C:wamp\\tmp\\php7BBF.tmp', 774144, 'application/vnd.ms-powerpoint'),
('105', 'Managment', 1, 'Data base', 1, '2018-06-05', 'Data base20180620082109.pdf', 'C:wamp\\tmp\\phpDB63.tmp', 397404, 'application/pdf'),
('105', 'Markating Managment', 1, 'graphics', 1, '2018-06-04', 'graphics20180620070332.ppt', 'C:wamp\\tmp\\phpF8F6.tmp', 154112, 'application/vnd.ms-powerpoint'),
('105', 'Accounting', 1, 'datamining', 0, '0000-00-00', 'datamining20180622100823.ppt', 'C:wamp\\tmp\\php1CAF.tmp', 154112, 'application/vnd.ms-powerpoint'),
('105', 'Accounting', 2, 'Database', 1, '2018-06-27', 'Database20180622101631.ppt', 'C:wamp\\tmp\\php8E6A.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `reg_id` VARCHAR(50) NOT NULL,
  `stud_id` VARCHAR(50) NOT NULL,
  `depid` VARCHAR(25) NOT NULL,
  `course_code` VARCHAR(25) NOT NULL,
  `credit_hour` INT(11) NOT NULL,
  `accadamicYear` INT(11) NOT NULL,
  `year` INT(11) NOT NULL,
  `semister` INT(11) NOT NULL,
  KEY `reg_id` (`reg_id`),
  KEY `stud_id` (`stud_id`),
  KEY `course_code` (`course_code`),
  CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `account` (`User_Id`) ON DELETE CASCADE,
  CONSTRAINT `student_course_ibfk_3` FOREIGN KEY (`course_code`) REFERENCES `curriculem` (`course_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`reg_id`, `stud_id`, `depid`, `course_code`, `credit_hour`, `accadamicYear`, `year`, `semister`) VALUES
('Coordnatior', '148', 'Accounting', 'pr12', 4, 2009, 1, 1),
('Coordnatior', '105', 'Managment', 'mg34', 5, 2010, 1, 1),
('Coordnatior', '138', 'Mathmatices', 'Maths12', 3, 2010, 1, 1),
('Coordnatior', '105', 'Managment', 'dat1', 7, 2010, 1, 1),
('Coordnatior', '110', 'Mathmatices', 'Advanced1', 5, 2010, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `dates` DATE NOT NULL,
  `types` VARCHAR(50) NOT NULL,
  `info` VARCHAR(600) NOT NULL,
  PRIMARY KEY (`dates`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`dates`, `types`, `info`) VALUES
('2018-06-07', 'Registration', 'The registration date start in June 06/23/2018 and end in june 06/30/2018');

-- Reset SQL settings
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;