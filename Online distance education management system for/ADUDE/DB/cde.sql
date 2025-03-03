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
/*!40101 SET NAMES utf8 */;

--
-- Database: `cde`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `User_Id` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `accounttype` varchar(50) NOT NULL,
  `status` int(20) NOT NULL,
  `isActive` int(1) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Awoke', 'Alemayehu', '122', '+2519347777788', 'Awoke', 'QmVsYXly', 'Student', 6, 1),
('Admasu', 'Zccccc', '138', '+25144323222222', 'Abe', 'TW9s', 'Student', 6, 1),
('Alemneh', 'Gebeyehu', '148', '+251998877766', 'Alemneh27', 'QmVsYXk=', 'Student', 6, 1),
('Abebaw', 'Gebeyehu', 'AB1234URT', '+2510918600679', 'Abebaw', 'YWJlYmF3MTI=', 'Instructor', 7, 1),
('Awoke', 'Alemayehu', 'AD07008543UR', '+251918600679', 'abebe', 'YWJlYmF3', 'Registrar', 2, 1),
('Abebaw', 'Gebeyehu', 'BDU0700857UR', '+251918600679', 'admin', 'YWJlYmF3', 'admin', 1, 1),
('Abebaw', 'Gebyehu', 'Bdu078965Ur', '+251186790665', 'dep', 'ZGVwYXJ0bWVudDE=', 'DeP-Head', 10, 1),
('Abile', 'Gzachew', 'BRT0700897YT', '+2518796755566', 'dep', 'ZGVwYXJ0bWVudA==', 'DeP-Head', 10, 1),
('Himanot', 'Abere', 'Coordnatior', '0929765432', 'abcd', 'YWJjZA==', 'Coordnator', 3, 1),
('Andarg', 'Mulken', 'Instructor', '0928569653', 'Ins', '', 'Instructor', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `acourse`
--

CREATE TABLE IF NOT EXISTS `acourse` (
  `id` varchar(50) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `sems` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `ccode` varchar(25) NOT NULL,
  `prrqust` varchar(25) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acourse`
--

INSERT INTO `acourse` (`id`, `dept`, `sems`, `year`, `cname`, `ccode`, `prrqust`) VALUES
('105', '', '1', '1', 'database', 'dat1', 'none'),
('105', '', '1', '1', 'databse', 'dat1', 'none'),
('105', 'Information Technology', '1', '1', 'Database', 'dat1', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `RegId` int(20) NOT NULL AUTO_INCREMENT,
  `photo` blob NOT NULL,
  `grade` blob NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `town` varchar(25) NOT NULL,
  `woreda` varchar(25) NOT NULL,
  `adress` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  `semister` varchar(25) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`RegId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`RegId`, `photo`, `grade`, `firstname`, `middlename`, `lastname`, `birthdate`, `sex`, `town`, `woreda`, `adress`, `email`, `department`, `phone`, `status`, `semister`, `year`) VALUES
(100, 0x32303138303531315f3136353431352e6a7067, 0x32303138303531315f3136353431362e6a7067, 'Abrham', 'Minalu', 'Demeke', '1963-02-02', 'male', 'Metema', 'Bahir dar', 'Bahir dar', 'A@yahoo.com', 'Markating Managment', '+2518796544412', 0, '1', '1'),
(102, 0x312e6a7067, 0x4650342e6a7067, 'Abrshe', 'Gedamu', 'Belay', '1961-02-07', 'male', 'Motta', 'Bahir dar', 'Bahirdar', 'c@yahoo.com', 'Educational Planning', '+251918600674', 0, '1', '2010'),
(103, 0x4650332e6a7067, 0x312e6a7067, 'Awekie', 'Bayu', 'Wallie', '1999-11-29', 'female', 'East gojam', 'Markose', 'Bahir', 'Ab3409@gmail.com', 'Economices', '+25191860067945', 1, '1', '1'),
(109, '', 0x642e6a7067, 'Abebaw', 'Gedefaw', 'Moll', '1977-09-07', 'female', 'Bahir dar', 'Mekele', 'Arba minch', 'Afvegr77@gmail.com', 'Mathmatices', '+25191800423452', 1, '1', '1'),
(111, 0x4650332e6a7067, 0x4650332e6a7067, 'Gebria', 'Belaye', 'Lakew', '1974-01-08', 'male', 'Bahir dar', 'Mekele', 'Arba minch', 'g@yahoo.com', 'Educational Planning', '+2519876655443', 1, '1', '2010'),
(113, 0x5061676520312e6a7067, 0x4650332e6a7067, 'Abebech', 'Belay', 'Simchew', '1968-07-07', 'male', 'East gojam', 'Gonder', 'Bahir dar', 'rt@yahoo.com', 'Mathmatices', '+251918766089', 0, '1', '2010'),
(114, 0x5061676520312e6a7067, 0x4650332e6a7067, 'Abebech', 'Belay', 'Simchew', '1968-07-07', 'male', 'East gojam', 'Gonder', 'Bahir dar', 'rt@yahoo.com', 'Mathmatices', '+251918766089', 1, '1', '2010'),
(115, 0x5061676520312e6a7067, 0x4650332e6a7067, 'Abebech', 'Belay', 'Simchew', '1968-07-07', 'male', 'East gojam', 'Gonder', 'Bahir dar', 'rt@yahoo.com', 'Mathmatices', '+251918766089', 1, '1', '2010'),
(117, 0x4c61622e6a7067, 0x5061676520312e6a7067, 'Himanot', 'Abere', 'Tsegaye', '1982-06-12', 'male', 'Wollo', 'Metema', 'Westgojam', 'hima@yahoo.com', 'Economices', '+2519292767890', 0, '1', '2010'),
(118, 0x5061676520312e6a7067, 0x4650332e6a7067, 'Awoke', 'Alemayehu', 'Semu', '1982-01-27', 'male', 'East gojam', 'Gonder', 'Chalia', 'awok@yahoo.com', 'Managment', '+25190954665544', 0, '1', '2010'),
(119, 0x4650312e6a7067, 0x5061676520312e6a7067, 'Abenezer', 'Denekew', 'Baila', '2018-06-04', 'male', 'Bahir dar', 'Bahir dar', 'Arba minch', 'trt@gmail.com', 'Educational Planning', '+251979687070', 0, '1', '1'),
(120, 0x4650312e6a7067, 0x5061676520312e6a7067, 'Abenezer', 'Denekew', 'Baila', '2018-06-04', 'male', 'Bahir dar', 'Bahir dar', 'Arba minch', 'trt@gmail.com', 'Educational Planning', '+251979687070', 0, '1', '1'),
(121, 0x4650312e6a7067, 0x5061676520312e6a7067, 'Abenezer', 'Denekew', 'Baila', '2018-06-04', 'male', 'Bahir dar', 'Bahir dar', 'Arba minch', 'trt@gmail.com', 'Educational Planning', '+251979687070', 0, '1', '1'),
(123, 0x32303138303531315f3136353431352e6a7067, 0x32303138303531315f3136353431362e6a7067, 'Wfff', 'Agfgfgf', 'Tfgfdgdfgf', '2018-06-12', 'male', 'Sdfsd', 'Rfgfgf', 'Eghnghg', 'xdsdsdsds@hotmail.com', 'Markating Managment', '+25190952674873', 0, '1', '2'),
(129, 0x72652e706466, 0x43686170746572206f6e652e707074, 'Abebech', 'alamraw', 'yeshiwas', '2018-08-31', 'female', 'Metema', 'Mekele', 'Bahir', 'Abe45@yahoo.com', 'Economices', '+251888887589', 0, '1', '1'),
(130, 0x63312e707074, 0x43686170746572206f6e652e707074, 'Adddscs', 'Hdvdvvd', 'zx', '2018-06-12', 'male', 'Bahir dar', 'Gonder', 'Metema', 'ret@yahoo.com', 'English', '+251918600679', 0, '1', '1'),
(131, 0x574f4b452e6f787073, 0x574f4b452e6f787073, 'Abeba', 'Negusia', 'ayalew', '2018-06-05', 'female', 'Gonder', 'Gonder', 'Bahir Dar', 'Abebw@yahoo.com', 'Accounting', '+251910678983', 0, '1', '2'),
(132, 0x574f4b452e6f787073, 0x574f4b452e6f787073, 'Derge', 'Minalu', 'Lakew', '2018-06-29', 'male', 'Retta', 'Bahir dar', 'Metema', 'Metema@gmail.com', 'Accounting', '+251918670789', 0, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `assign_instrctur_course`
--

CREATE TABLE IF NOT EXISTS `assign_instrctur_course` (
  `coo_id` varchar(50) NOT NULL,
  `depname` varchar(25) NOT NULL,
  `ins_id` varchar(50) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `credit_houre` int(11) NOT NULL,
  `year` varchar(23) NOT NULL,
  `semister` varchar(25) NOT NULL,
  KEY `coo_id` (`coo_id`),
  KEY `course_code` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_instrctur_course`
--

INSERT INTO `assign_instrctur_course` (`coo_id`, `depname`, `ins_id`, `course_code`, `credit_houre`, `year`, `semister`) VALUES
('Coordnatior', 'Mathmatices', 'Instructor', 'Advanced1', 4, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Regid` varchar(50) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `crdite_houre` int(11) NOT NULL,
  `pre_requst` varchar(25) NOT NULL,
  PRIMARY KEY (`course_code`),
  KEY `Regid` (`Regid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Regid`, `course_code`, `course_name`, `crdite_houre`, `pre_requst`) VALUES
('1234UR', '34wewesd', 'fsdfsd', 23, 'dddd'),
('Registrar', 'Acou432', 'Intoductiontobisness', 5, 'bisness'),
('Registrar', 'Advanced1', 'Advanceddatabase', 7, 'advanced');

-- --------------------------------------------------------

--
-- Table structure for table `curriculem`
--

CREATE TABLE IF NOT EXISTS `curriculem` (
  `cooid` varchar(50) NOT NULL,
  `department` varchar(25) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `crdite_houre` int(11) NOT NULL,
  `Pre_requst` varchar(25) NOT NULL,
  `semister` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  PRIMARY KEY (`course_code`),
  KEY `cooid` (`cooid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculem`
--

INSERT INTO `curriculem` (`cooid`, `department`, `course_name`, `course_code`, `crdite_houre`, `Pre_requst`, `semister`, `year`) VALUES
('Coordnatior', 'Mathmatices', 'Advancedatabase', 'Advanced1', 5, 'None', '1', '2'),
('Coordnatior', 'Accounting', 'database', 'dat1', 7, 'none', '1', '1'),
('Coordnatior', 'Managment', 'Databese', 'Dat23', 4, 'Databas', '1', '3'),
('Coordnatior', 'Economics', 'Econmices1', 'eco2', 7, 'none', '1', '1'),
('Coordnatior', 'English', 'Englshe', 'eng12rt', 5, 'None', '1', '1'),
('Coordnatior', 'Mathmatices', 'Mathesalgbra', 'lgebr12', 4, 'None', '1', '1'),
('Coordnatior', 'Accounting', 'Mining', 'm12dg', 5, 'none', '2', '3'),
('Coordnatior', 'Economices', 'markating', 'mar123rt', 4, 'none', '1', '1'),
('Coordnatior', 'Mathmatices', 'Maths', 'Maths12', 3, 'None', '1', '1'),
('Coordnatior', 'Managment', 'mangment Advanced', 'mg34', 3, 'none', '1', '1'),
('Coordnatior', 'Managment', 'introdactionti mgt', 'mgt12', 5, 'none', '1', '1'),
('Coordnatior', ' Managment', 'Mngment', 'mgt4', 2, 'princple', '2', '3'),
('Coordnatior', 'Accounting', 'Princpl1', 'pr12', 7, 'none', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `note` varchar(400) NOT NULL,
  `year` int(11) NOT NULL,
  `semister` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`note`, `year`, `semister`, `start_date`, `end_date`) VALUES
('course add and drop', 1, 1, '2018-06-06', '2018-06-27'),
('Rgistration', 1, 1, '2018-06-20', '2018-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `dcourse`
--

CREATE TABLE IF NOT EXISTS `dcourse` (
  `id` varchar(50) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `sems` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `ccode` varchar(25) NOT NULL,
  `prrqust` varchar(25) NOT NULL,
  KEY `dept` (`dept`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcourse`
--

INSERT INTO `dcourse` (`id`, `dept`, `sems`, `year`, `cname`, `ccode`, `prrqust`) VALUES
('2147483647', '', '1', '2', 'graphices12', 'Datamining1', 'cheh'),
('105', '', '1', '1', 'mangment Advanced', 'mg34', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'mg34', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'dat1', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'dat1', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'dat1', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'dat1', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'mg34', 'none'),
('105', '', '1', '1', 'mangment Advanced', 'mg34', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `faculity` varchar(25) NOT NULL,
  `regid` varchar(50) NOT NULL,
  `depid` varchar(25) NOT NULL,
  `depname` varchar(25) NOT NULL,
  PRIMARY KEY (`depid`),
  KEY `regid` (`regid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`faculity`, `regid`, `depid`, `depname`) VALUES
('Computing', 'AD07008543UR', '107', 'Information Technology'),
('computing', '1234UR', '2', 'Managment'),
('Education', 'Registrar', '235', 'Mathmatices'),
('Fb', 'Registrar', '29', 'Educational Planning'),
('FB', '1234UR', '5', 'Economices'),
('Computing', '1234UR', '6', 'English'),
('Fb', 'Registrar', 'Account123', 'Accounting'),
('Fb', 'Registrar', 'Mreket145', 'Markating Managment');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ins_id` varchar(50) NOT NULL,
  `insname` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `year` varchar(4) NOT NULL,
  `coursename` varchar(25) NOT NULL,
  `term` int(11) NOT NULL,
  `sumbtiondate` date NOT NULL,
  `Deadlinedate` date NOT NULL,
  `Filename` varchar(300) NOT NULL,
  `tmp_name` varchar(200) NOT NULL,
  `Filesize` float NOT NULL,
  `Filetype` varchar(50) NOT NULL,
  KEY `ins_id` (`ins_id`,`department`),
  KEY `dept` (`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insassignment`
--

INSERT INTO `insassignment` (`ins_id`, `insname`, `department`, `year`, `coursename`, `term`, `sumbtiondate`, `Deadlinedate`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('AB1234URT', 'Abebaw', 'Management', '1', 'Graphices', 1, '2018-06-06', '2018-06-20', 'Graphices', 'C:wamp	mpphpFA08.tmp', 699904, 'application/vnd.ms-powerpoint'),
('AB1234URT', 'Ayele', 'Management', '1', 'ComputerGraphices', 1, '2018-06-01', '2018-06-23', 'ComputerGraphices20180620072612.ppt', 'C:wamp	mpphpBBBC.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `CID` varchar(50) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `modulenum` int(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(25) NOT NULL,
  `term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `Filename` varchar(300) NOT NULL,
  `tmp_name` varchar(100) NOT NULL,
  `fileSize` float NOT NULL,
  `fileType` varchar(30) NOT NULL,
  PRIMARY KEY (`modulenum`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`CID`, `coursename`, `modulenum`, `department`, `term`, `year`, `Filename`, `tmp_name`, `fileSize`, `fileType`) VALUES
('Coordnatior', 'Database', 1, 'Management', '1', '1', 'Database', 'C:wamp	mpphp2D9A.tmp', 699904, 'application/vnd.ms-powerpoint'),
('Coordnatior', 'Database', 2, 'Management', '1', '1', 'Database', 'C:wamp	mpphp5490.tmp', 699904, 'application/vnd.ms-powerpoint'),
('Coordnatior', 'datamining', 3, 'Accounting', '1', '1', 'datamining20180603110310.docx', 'C:wamp	mpphp26D3.tmp', 13040, 'application/vnd.openxmlformats'),
('Coordnatior', 'Computergraphices', 6, 'Englishe', '1', '1', 'Computergraphices', 'C:wamp	mpphp10CB.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) NOT NULL,
  `que_desc` varchar(150) NOT NULL,
  `ans1` varchar(75) NOT NULL,
  `ans2` varchar(75) NOT NULL,
  `ans3` varchar(75) NOT NULL,
  `ans4` varchar(75) NOT NULL,
  `true_ans` int(1) NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(1, 1, 'Whit is the diffrence beetween log and out', 'Action', 'Requste', 'deadline', 'None', 3),
(2, 1, 'What is data mining', 'databse', 'Datamining', 'Wherhousing', 'None', 1),
(3, 1, 'what is database Describe', 'course', 'department', 'mining', 'student', 1),
(4, 1, 'What is the diffrence betewn C++ and PHP', 'Compiler', 'Interpreter', 'File', 'All', 1),
(5, 1, 'What is the differince beteewn like and attract', 'Menning', 'Value', 'Diffrence', 'none', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(50) NOT NULL,
  `test_id` int(5) NOT NULL,
  `test_date` date NOT NULL,
  `score` int(11) NOT NULL,
  KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(30) NOT NULL,
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `total_que` varchar(30) NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'final', '5');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(50) NOT NULL,
  `test_id` int(50) NOT NULL,
  `que_des` varchar(200) NOT NULL,
  `ans1` varchar(70) NOT NULL,
  `ans2` varchar(70) NOT NULL,
  `ans3` varchar(70) NOT NULL,
  `ans4` varchar(70) NOT NULL,
  `true_ans` int(11) NOT NULL,
  `your_ans` int(11) NOT NULL,
  KEY `sess_id` (`sess_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--


-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ins_id` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `semister` varchar(25) NOT NULL,
  `credit_hour` varchar(25) NOT NULL,
  `assignment` varchar(11) NOT NULL,
  `final` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `grade` varchar(25) NOT NULL,
  `gpa` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stud_id` (`stud_id`),
  KEY `course_code` (`course_code`),
  KEY `ins_id` (`ins_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `ins_id`, `stud_id`, `course_name`, `course_code`, `year`, `semister`, `credit_hour`, `assignment`, `final`, `total`, `grade`, `gpa`, `status`) VALUES
(28, 'AB1234URT', '138', 'Maths', 'Maths12', '1', '1', '3', '23', '56', '79', 'B+', '3.5', 1),
(29, 'AB1234URT', '100', 'Maths', 'Maths12', '1', '1', '3', '23', '54', '77', 'B+', '3.5', 1),
(31, 'AB1234URT', '105', 'Databese', 'dat1', '1', '1', '4', '26', '60', '86', 'A', '4', 1),
(32, 'AB1234URT', '100', 'Princpl1', 'pr12', '1', '1', '5', '23', '67', '90', 'A+', '4', 1),
(33, 'Instructor', '105', 'mangment Advanced', 'mg34', '1', '1', '5', '30', '45', '75', 'B+', '3.5', 1),
(34, 'AB1234URT', '110', 'Mathesalgbra', 'lgebr12', '1', '1', '4', '30', '53', '83', 'A-', '3.75', 1),
(35, 'AB1234URT', '138', 'Mathesalgbra', 'lgebr12', '1', '1', '4', '27', '20', '47', 'C-', '1.5', 1),
(36, 'AB1234URT', '105', 'introdactionti mgt', 'mgt12', '1', '1', '5', '30', '40', '70', 'B', '3', 1),
(37, 'AB1234URT', '108', 'Princpl1', 'pr12', '1', '1', '7', '27', '27', '54', 'C', '2', 1),
(38, 'AB1234URT', '148', 'Princpl1', 'pr12', '1', '1', '7', '25', '36', '61', 'C+', '2.5', 1),
(39, 'AB1234URT', '110', 'Advancedatabase', 'Advanced1', '1', '1', '5', '5', '61', '66', 'B-', '2.75', 1),
(40, 'AB1234URT', '138', 'Advancedatabase', 'Advanced1', '1', '1', '5', '3', '18', '21', 'F', '0', 1),
(41, 'AB1234URT', '105', 'Databese', 'Dat23', '1', '1', '4', '30', '56', '86', 'A', '4', 0),
(42, 'AB1234URT', '116', 'Databese', 'Dat23', '1', '1', '4', '17', '39', '56', 'C', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `User_Id` varchar(30) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `Middlename` varchar(25) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `town` varchar(25) NOT NULL,
  `woreda` varchar(25) NOT NULL,
  `Adress` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `department` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `simester` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `nnn` (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`User_Id`, `stud_id`, `firstname`, `Middlename`, `lastname`, `birthdate`, `sex`, `town`, `woreda`, `Adress`, `Email`, `department`, `phone`, `simester`, `year`) VALUES
('AD07008543UR', '101', 'Wagnew', 'Gebey', 'Molla', '1995-03-01', 'male', 'Motta', 'Arba ', 'Chalia', 'Afvegr09@gmail.com', 'English', '+25191823423400', '1', '1'),
('AD07008543UR', '105', 'Wassie', 'Molla', 'Lakew', '1977-09-07', 'male', 'Weldia', 'Tigry', 'Weldia', 'Te7@gmail.com', 'Managment', '+2519186006799', '1', '1'),
('AD07008543UR', '106', 'Bahilu', 'Grma', 'Abebe', '1994-01-27', 'male', 'Bahirdar', 'Chilga', 'Dbrabour', 'G@gmail.com', 'Economices', '+251920867456', '1', '1'),
('AD07008543UR', '107', 'Derge', 'Belay', 'Mengist', '1970-02-27', 'male', 'Metema', 'Mekele', 'Metema', 'h@yahoo.com', 'Managment', '+251918506787', '1', '1'),
('AD07008543UR', '108', 'Kebede', 'Belay', 'Kebede', '1980-07-20', 'male', 'Gonder', 'Metema', 'Chilgia', 'C@gmail.com', 'Accounting', '+2518776454433', '1', '1'),
('AD07008543UR', '110', 'Abebaw', 'Gebeyehu', 'Zelalem', '1978-07-08', 'male', 'Bahir dar', 'Gonder', 'Arba minch', 'Abe@yahoo.com', 'Mathmatices', '+2519186707897', '1', '1'),
('AD07008543UR', '116', 'Awoke', 'Alemayehu', 'Semu', '1982-01-27', 'male', 'East gojam', 'Gonder', 'Chalia', 'awok@yahoo.com', 'Managment', '+25190954665544', '1', '1'),
('AD07008543UR', '122', 'Awoke', 'Alemayehu', 'Belayr', '2018-06-05', 'male', 'Bahir dar', 'Mekele', 'Metema', 'dsdsd@yahoo.com', 'Managment', '+2519347777788', '1', '1'),
('AD07008543UR', '138', 'Admasu', 'Zccccc', 'Mol', '1981-06-01', 'male', 'Vcxcxcx', 'Vcxssss', 'Dfvfff', 'Metema@gmail.com', 'Mathmatices', '+25144323222222', '1', '1'),
('AD07008543UR', '148', 'Alemneh', 'Gebeyehu', 'Belay', '1962-06-07', 'male', 'Bahir dar', 'Gonder', 'Bahir dar', 'Metema@gmail.com', 'Accounting', '+251998877766', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `studentassignment`
--

CREATE TABLE IF NOT EXISTS `studentassignment` (
  `User_Id` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `coursename` varchar(30) NOT NULL,
  `term` int(11) NOT NULL,
  `Sumbtiondate` date NOT NULL,
  `Filename` varchar(300) NOT NULL,
  `tmp_name` varchar(200) NOT NULL,
  `Filesize` float NOT NULL,
  `Filetype` varchar(30) NOT NULL,
  KEY `User_Id` (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentassignment`
--

INSERT INTO `studentassignment` (`User_Id`, `department`, `year`, `coursename`, `term`, `Sumbtiondate`, `Filename`, `tmp_name`, `Filesize`, `Filetype`) VALUES
('105', 'Accounting', 1, 'Intoductiontobisness', 2, '2018-06-05', '20180616120734.pptx', 'C:wamp	mpphp848A.tmp', 195697, 'application/vnd.openxmlformats'),
('105', 'Managment', 1, 'Database', 2, '2018-06-05', 'Database20180616121050.ppt', 'C:wamp	mpphp8171.tmp', 756736, 'application/vnd.ms-powerpoint'),
('105', 'Managment', 1, 'Database', 1, '2018-06-05', 'Database20180616121115.docx', 'C:wamp	mpphpE481.tmp', 31382, 'application/vnd.openxmlformats'),
('105', 'Accounting', 1, 'Database', 1, '2018-06-04', 'Database20180616121933.ppt', 'C:wamp	mpphp7BBF.tmp', 774144, 'application/vnd.ms-powerpoint'),
('105', 'Managment', 1, 'Data base', 1, '2018-06-05', 'Data base20180620082109.pdf', 'C:wamp	mpphpDB63.tmp', 397404, 'application/pdf'),
('105', 'Markating Managment', 1, 'graphics', 1, '2018-06-04', 'graphics20180620070332.ppt', 'C:wamp	mpphpF8F6.tmp', 154112, 'application/vnd.ms-powerpoint'),
('105', 'Accounting', 1, 'datamining', 0, '0000-00-00', 'datamining20180622100823.ppt', 'C:wamp	mpphp1CAF.tmp', 154112, 'application/vnd.ms-powerpoint'),
('105', 'Select department', 1, 'ANNET', 2, '2018-06-27', 'ANNET20180622100907.ppt', '', 0, ''),
('105', 'Accounting', 2, 'Database', 1, '2018-06-27', 'Database20180622101631.ppt', 'C:wamp	mpphp8E6A.tmp', 154112, 'application/vnd.ms-powerpoint');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `reg_id` varchar(50) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `depid` varchar(25) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `accadamicYear` int(11) NOT NULL,
  `year` int(25) NOT NULL,
  `semister` int(25) NOT NULL,
  KEY `reg_id` (`reg_id`),
  KEY `stud_id` (`stud_id`),
  KEY `course_code` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`reg_id`, `stud_id`, `depid`, `course_code`, `credit_hour`, `accadamicYear`, `year`, `semister`) VALUES
('Coordnatior', '148', 'Accounting', 'pr12', 4, 2009, 1, 1),
('Coordnatior', '105', 'Managment', 'mg34', 5, 2010, 1, 1),
('Coordnatior', '138', 'Mathmatices', 'Maths12', 3, 2010, 1, 1),
('Coordnatior', '105', 'Managment', 'dat1', 7, 2010, 1, 1),
('Coordnatior', '110', 'Mathmatices', 'Advanced1', 5, 2010, 1, 1),
('Coordnatior', '105', 'Managment', 'Advanced1', 5, 2010, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `dates` date NOT NULL,
  `types` varchar(50) NOT NULL,
  `info` varchar(600) NOT NULL,
  PRIMARY KEY (`dates`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`dates`, `types`, `info`) VALUES
('2018-06-07', 'Registration', 'The registration date start in June 06/23/2018 and end in june 06/30/2018');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acourse`
--
ALTER TABLE `acourse`
  ADD CONSTRAINT `acourse_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `assign_instrctur_course`
--
ALTER TABLE `assign_instrctur_course`
  ADD CONSTRAINT `assign_instrctur_course_ibfk_1` FOREIGN KEY (`coo_id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `assign_instrctur_course_ibfk_4` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `curriculem`
--
ALTER TABLE `curriculem`
  ADD CONSTRAINT `curriculem_ibfk_1` FOREIGN KEY (`cooid`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `insassignment`
--
ALTER TABLE `insassignment`
  ADD CONSTRAINT `insassignment_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD CONSTRAINT `mst_question_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `mst_test` (`test_id`);

--
-- Constraints for table `mst_result`
--
ALTER TABLE `mst_result`
  ADD CONSTRAINT `mst_result_ibfk_1` FOREIGN KEY (`login`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD CONSTRAINT `mst_test_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `mst_subject` (`sub_id`);

--
-- Constraints for table `mst_useranswer`
--
ALTER TABLE `mst_useranswer`
  ADD CONSTRAINT `mst_useranswer_ibfk_1` FOREIGN KEY (`sess_id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`course_code`) REFERENCES `curriculem` (`course_code`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `nnn` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `studentassignment`
--
ALTER TABLE `studentassignment`
  ADD CONSTRAINT `studentassignment_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `account` (`User_Id`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `account` (`User_Id`),
  ADD CONSTRAINT `student_course_ibfk_3` FOREIGN KEY (`course_code`) REFERENCES `curriculem` (`course_code`);
