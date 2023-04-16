-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2022 at 11:02 AM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c9_stu_regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalInfo`
--

CREATE TABLE `personalInfo` (
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `FirstName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalInfo`
--

INSERT INTO `personalInfo` (`personalID`, `FirstName`, `LastName`, `Email`, `Gender`) VALUES
('S3101', 'Jirasak', 'Chao', 'ismail@gmail.com', 'Male'),
('S3102', 'Sarawut', 'Kunchai', 'ewaters@gmail.com', 'Male'),
('S3103', 'Pu', 'Pinthong', 'dbrobins@gmail.com', 'Male'),
('S3104', 'Sukanda', 'Souvanatong', 'donev@gmail.com', 'Female'),
('S3105', 'Theeradon', 'Thawan', 'aegreene@gmail.com', 'Male'),
('S3106', 'Kittipob', 'Chirathivat', 'rmcfarla@gmail.com', 'Male'),
('S3107', 'Mokkhavesa', 'Khumpai', 'dbindel@gmail.com', 'Male'),
('S3108', 'Natthapong', 'Yongjaiyut', 'seano@gmail.com', 'Male'),
('S3112', 'Songwut', 'Tawisuwan', 'dogdude@gmail.com', 'Male'),
('S3134', 'Pechanai', 'Saepong', 'nine.3434@gmail.com', 'Male'),
('S3144', 'Thiramon', 'Kachornsak', 'ngedmond@gmail.com', 'Female'),
('S3217', 'Thanatat', 'Poopat', 'pooh.3317@gmail.com', 'Male'),
('S3219', 'Tunwa', 'Satianrapapong', 'tunwa.3219@gmail.com', 'Male'),
('S3221', 'Teerasan ', 'Rattanaruengkul', 'bung3221@gmail.com', 'Male'),
('S3262', 'Jidapa', 'Thongnirun', 'aom.3262@gmail.com', 'Female'),
('S3271', 'Nunthanut', 'Kittirattanaviwat', 'pon.3271@gmail.com', 'Female'),
('S3401', 'Jon', 'Magpantay', 'jon.3401@gmail.com', 'Male'),
('S3429', 'Punnawich ', 'Jitkarun', 'palm.3429@gmail.com', 'Male'),
('S3431', 'Pornthep', 'Sangthongkhamsuk', 'kaijeaw.3431@gmail.com', 'Male'),
('S3449', 'Vananya ', 'Pruksapun', 'fern.3449@gmail.com', 'Female'),
('S3705', 'Kanoknan', 'Suchaoin', 'nan.3705@gmail.com', 'Female'),
('S3710', 'Nattaya', 'Songkhla', 'nat.3710@gmail.com', 'Female'),
('S3714', 'Noppamad', 'Tangmanee', 'fahsai.3714@gmail.com', 'Female'),
('S3720', 'Poonyanat', 'Nualon', 'aomsin.3720@gmail.com', 'Female'),
('S3728', 'Paemika', 'Prempree', 'mind.3728@gmail.com', 'Female'),
('S3744', 'Prapon', 'Rujiporn', 'pon.3744@gmail.com', 'Male'),
('S3801', 'Pongsakorn', 'Sookpan', 'pong.3801@gmail.com', 'Male'),
('S3804', 'Phichait', ' Yaennan', 'pom.3804@gmail.com', 'Male'),
('S3825', 'Marut', 'Wongprasertgan', 'march.3825@gmail.com', 'Male'),
('S3850', 'Sirirat', 'Midjareanthaworn', 'baitoei.3850@gmail.com', 'Female'),
('S3999', '3999Fname', '3999Lastname', '3999student@gmail.com', 'Male'),
('T1001', 'aaa', 'aaa', 'aaa@gmill.com', 'Male'),
('T1002', 'bbb', 'bbb', 'bbb@gmail.com', 'Female'),
('T1011', 'ccc', 'ccc', 'ccc@gmail.com', 'Male'),
('T1012', 'ddd', 'ddd', 'ddd@gmail.com', 'Female'),
('T1021', 'eee', 'eee', 'eee@gmail.com', 'Male'),
('T1022', 'fff', 'fff', 'fff@gmail.com', 'Female'),
('T9999', 'Teacher9999', 'Dummy9999', '9990teacher@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `role` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`personalID`, `role`) VALUES
('S3101', 'Student'),
('S3102', 'Student'),
('S3103', 'Student'),
('S3104', 'Student'),
('S3105', 'Student'),
('S3106', 'Student'),
('S3107', 'Student'),
('S3108', 'Student'),
('S3112', 'Student'),
('S3144', 'Student'),
('S3217', 'Student'),
('S3219', 'Student'),
('S3221', 'Student'),
('S3262', 'Student'),
('S3271', 'Student'),
('S3401', 'Student'),
('S3429', 'Student'),
('S3431', 'Student'),
('S3434', 'Student'),
('S3449', 'Student'),
('S3705', 'Student'),
('S3710', 'Student'),
('S3714', 'Student'),
('S3720', 'Student'),
('S3728', 'Student'),
('T1001', 'Teacher'),
('T1002', 'Teacher'),
('T1011', 'Teacher'),
('T1012', 'Teacher'),
('T1021', 'Teacher'),
('T1022', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `semesterGrade`
--

CREATE TABLE `semesterGrade` (
  `studentID` int(11) NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `GPA` int(11) NOT NULL,
  `totalCredit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semesterGrade`
--

INSERT INTO `semesterGrade` (`studentID`, `semesterID`, `GPA`, `totalCredit`) VALUES
(3101, '2022/1', 4, 6),
(3102, '2022/1', 3, 6),
(3103, '2022/1', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `StudentID` int(11) NOT NULL,
  `Status` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DegreeProgram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `DOB` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'Date of Birth',
  `IdentificationNum` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'National Number or Passport Number',
  `Faculty` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Department` varchar(100) CHARACTER SET utf8 NOT NULL,
  `AcadYear` int(11) NOT NULL,
  `Room` varchar(100) CHARACTER SET utf8 NOT NULL,
  `AdvisorID` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `GPAX` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`StudentID`, `Status`, `personalID`, `DegreeProgram`, `DOB`, `IdentificationNum`, `Faculty`, `Department`, `AcadYear`, `Room`, `AdvisorID`, `GPAX`) VALUES
(3101, 'Normal', 'S3101', '01/02/2000', 'normal', '9999988874985', 'Engineering', 'Chemical', 2, 'B', 'T123456', NULL),
(3102, 'Normal', 'S3102', '22/02/2000', 'inter', '8875488005697', 'Engineering', 'Chemical', 2, 'A', 'T123456', NULL),
(3103, 'Normal', 'S3103', '11/01/2001', 'inter', '5988045617702', 'Engineering', 'Chemical', 2, 'B', 'T123456', NULL),
(3104, 'Normal', 'S3104', '01/02/2000', 'normal', '8749854547988', 'Engineering', 'Chemical', 2, 'B', 'T123456', NULL),
(3105, 'Normal', 'S3105', '21/11/2001', 'inter', '8749859999988', 'Engineering', 'Chemical', 2, 'A', 'T123456', NULL),
(3106, 'Normal', 'S3106', '02/12/2000', 'inter', '9998899885749', 'Engineering', 'Chemical', 2, 'B', 'T123456', NULL),
(3107, 'Normal', 'S3107', '06/04/2001', 'inter', '8002617545798', 'Engineering', 'Chemical', 2, 'A', 'T123456', NULL),
(3108, 'Normal', 'S3108', '25/08/2000', 'normal', '4985454798887', 'Engineering', 'Chemical', 2, 'A', 'T123456', NULL),
(3112, 'Normal', 'S3112', '30/04/2000', 'inter', '5457988002617', 'Engineering', 'Chemical', 2, 'B', 'T123456', NULL),
(3144, 'Normal', 'S3144', '04/06/2001', 'normal', '4547988874985', 'Engineering', 'Chemical', 2, 'A', 'T123456', NULL),
(3217, 'Normal', 'S3217', '05/03/2001', 'normal', '2475077255191', 'Engineering', 'Computer ', 2, 'A', 'T123456', NULL),
(3219, 'Normal', 'S3219', '04/12/2001', 'normal', '3445518639873  ', 'Engineering', 'Computer ', 2, 'A', 'T123456', NULL),
(3221, 'Normal', 'S3221', '05/11/2001', 'normal', '1557451783255', 'Engineering', 'Computer ', 2, 'A', 'T123456', NULL),
(3262, 'Normal', 'S3262', '23/04/2001', 'normal', '1842486300121', 'Engineering', 'Computer ', 2, 'A', 'T123456', NULL),
(3271, 'Normal', 'S3271', '12/02/2001', 'normal', '8428216742179  ', 'Engineering', 'Computer ', 2, 'A', 'T123456', NULL),
(3401, 'Normal', 'S3401', '01/05/2001', 'inter', '9873629296722  ', 'Engineering', 'Computer ', 2, 'B', 'T123456', NULL),
(3429, 'Normal', 'S3429', '07/09/2001', 'inter', '5397249002617  ', 'Engineering', 'Computer ', 2, 'B', 'T123456', NULL),
(3431, 'Normal', 'S3431', '18/09/2001', 'inter', '2703288117266', 'Engineering', 'Computer ', 2, 'B', 'T123456', NULL),
(3434, 'Normal', 'S3434', '04/07/2001', 'inter', '8434227997650', 'Engineering', 'Computer ', 2, 'B', 'T123456', NULL),
(3449, 'Normal', 'S3449', '12/03/2001', 'inter', '9355969097161', 'Engineering', 'Computer ', 2, 'B', 'T123456', NULL),
(3705, 'Normal', 'S3705', '12/04/2000', 'normal', '6254586494406', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3710, 'Normal', 'S3710', '24/06/2000', 'normal', '6558267039290', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3714, 'Normal', 'S3714', '30/06/2000', 'normal', '4245054524984', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3720, 'Normal', 'S3720', '18/11/2001', 'normal', '3700684860021', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3728, 'Normal', 'S3728', '02/05/2000', 'normal', '1935199536141', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3744, 'Normal', 'S3744', '04/05/2000', 'normal', '9434045287361', 'Engineering', 'Environment', 1, 'A', 'T123456', NULL),
(3801, 'Normal', 'S3801', '23/12/2000', 'inter', '2775426263507', 'Engineering', 'Environment', 1, 'B', 'T123456', NULL),
(3804, 'Normal', 'S3804', '02/05/2000', 'inter', '8580612890199', 'Engineering', 'Environment', 1, 'B', 'T123456', NULL),
(3825, 'Normal', 'S3825', '16/12/2001', 'inter', '4815123737613', 'Engineering', 'Environment', 1, 'B', 'T123456', NULL),
(3850, 'Normal', 'S3850', '05/01/2001', 'inter', '8454803266117', 'Engineering', 'Environment', 1, 'B', 'T123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjectGrade`
--

CREATE TABLE `subjectGrade` (
  `studentID` int(11) NOT NULL,
  `subjectID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `credit` float NOT NULL,
  `Grade` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectGrade`
--

INSERT INTO `subjectGrade` (`studentID`, `subjectID`, `semesterID`, `credit`, `Grade`) VALUES
(3101, 'CPE213', '2022/1', 3, NULL),
(3999, 'CPE213', '2022/1', 3, 4),
(3999, 'CPE231', '2022/1', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjectRegistration`
--

CREATE TABLE `subjectRegistration` (
  `studentID` int(11) NOT NULL,
  `subjectID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sectionID` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectRegistration`
--

INSERT INTO `subjectRegistration` (`studentID`, `subjectID`, `semesterID`, `sectionID`) VALUES
(3101, 'CPE213', '2022/1', 'CPE213/1i'),
(3999, 'CPE213', '2022/1', 'CPE213/1i'),
(3999, 'CPE231', '2022/1', 'CPE231/1i');

-- --------------------------------------------------------

--
-- Table structure for table `Subjects`
--

CREATE TABLE `Subjects` (
  `subjectID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subjectName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sectionID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `credits` int(11) NOT NULL,
  `yearRequirement` varchar(100) CHARACTER SET utf8 NOT NULL,
  `degreeProgram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `room` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subjects`
--

INSERT INTO `Subjects` (`subjectID`, `subjectName`, `sectionID`, `semesterID`, `credits`, `yearRequirement`, `degreeProgram`, `room`, `Seat`) VALUES
('CPE213', 'DataModel', 'CPE213/1i', '2022/1', 3, '2', 'inter', 'A', 37),
('CPE213', 'DataModel', 'CPE213/1n', '2022/1', 3, '2', 'normal', 'A', 40),
('CPE213', 'DataModel', 'CPE213/2i', '2022/1', 3, '2', 'inter', 'B', 40),
('CPE213', 'DataModel', 'CPE213/2n', '2022/1', 3, '2', 'normal', 'B', 40),
('CPE231', 'DataBase', 'CPE231/1i', '2022/1', 3, '2', 'inter', 'A', 38),
('CPE231', 'DataBase', 'CPE231/1n', '2022/1', 3, '2', 'normal', 'A', 40),
('CPE231', 'DataBase', 'CPE231/2i', '2022/1', 3, '2', 'inter', 'B', 40),
('CPE231', 'DataBase', 'CPE231/2n', '2022/1', 3, '2', 'normal', 'B', 40);

-- --------------------------------------------------------

--
-- Table structure for table `TA`
--

CREATE TABLE `TA` (
  `TAID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `TADepartment` varchar(100) CHARACTER SET utf8 NOT NULL,
  `TAFaculty` varchar(100) CHARACTER SET utf8 NOT NULL,
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TA`
--

INSERT INTO `TA` (`TAID`, `TADepartment`, `TAFaculty`, `personalID`) VALUES
('TA1048', '', '', ''),
('TA3101', 'Chemical', 'Engineering', 'S3101'),
('TA3999', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `TAassigned`
--

CREATE TABLE `TAassigned` (
  `TAID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sectionID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TAassigned`
--

INSERT INTO `TAassigned` (`TAID`, `sectionID`, `semesterID`) VALUES
('TA1048', 'CPE213/1i', '2022/1'),
('TA1048', 'CPE213/1n', '2022/1'),
('TA3999', 'CPE213/1i', '2022/1'),
('TA3999', 'CPE213/1n', '2022/1'),
('TA3999', 'CPE213/2i', '2022/1'),
('TA3999', 'CPE213/2n', '2022/1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacherDepartment` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacherFaculty` varchar(100) CHARACTER SET utf8 NOT NULL,
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `advisorID` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `teacherDepartment`, `teacherFaculty`, `personalID`, `advisorID`) VALUES
('1001', 'Computer', 'Enginneering', 'T1001', 'AD1001'),
('1002', 'Computer ', 'Enginneering', 'T1002', 'AD1002'),
('1011', 'Chemical', 'Enginneering', 'T1011', 'AD1011'),
('1012', 'Chemical', 'Enginneering', 'T1012', 'AD1012'),
('1021', 'Environment', 'Enginneering', 'T1021', 'AD1021'),
('1022', 'Environment', 'Enginneering', 'T1022', 'AD1022'),
('9999', 'Computer Engineer', 'Engineering', 'T9999', 'AD9999');

-- --------------------------------------------------------

--
-- Table structure for table `Teacherassigned`
--

CREATE TABLE `Teacherassigned` (
  `teacherID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sectionID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semesterID` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Teacherassigned`
--

INSERT INTO `Teacherassigned` (`teacherID`, `sectionID`, `semesterID`) VALUES
('9999', 'CPE213/1i', '2022/1'),
('9999', 'CPE213/1n', '2022/1'),
('9999', 'CPE231/1i', '2022/1'),
('9999', 'CPE231/1n', '2022/1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `personalID` varchar(100) CHARACTER SET utf8 NOT NULL,
  `super` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `personalID`, `super`) VALUES
('1048', '25d55ad283aa400af464c76d713c07ad', 'jiew@gmail.com', '1111', 0),
('3111', 'e10adc3949ba59abbe56e057f20f883e', 'asdfas@gmail.com', 'S1265', 0),
('3499', 'e10adc3949ba59abbe56e057f20f883e', 'aa@gmail.com', 'S13499', 0),
('3452', 'e10adc3949ba59abbe56e057f20f883e', 'aaaa@gmail.com', 'S2342', 0),
('3000', 'e10adc3949ba59abbe56e057f20f883e', 'iloveu@gmail.com', 'S3000', 0),
('3101', 'bfc985c5b738f5f0c551bbf8edb1540d', 'ismail@gmail.com', 'S3101', 0),
('3102', '509c900c7b51552cfa3c9bc8f8ca00c1', 'ewaters@gmail.com', 'S3102', 0),
('3103', 'b08f5a9c8ceba297b256c7d165b5fbf1', 'dbrobins@gmail.com', 'S3103', 0),
('3104', 'bc18729237d9e59b3e0cf9b1cb43d3f5', 'donev@gmail.com', 'S3104', 0),
('3105', 'c80edc7967be4990c94bf5fceee138e5', 'aegreene@gmail.com', 'S3105', 0),
('3106', 'e2675ae620041a15cf6618529e99527e', 'rmcfarla@gmail.com', 'S3106', 0),
('3107', 'c4a9d2e49a0f9fe7be332701b34e21b4', 'dbindel@gmail.com', 'S3107', 0),
('3108', 'd40b71a472ce28cc2d0a0b8196e5c81d', 'seano@gmail.com', 'S3108', 0),
('3112', '25d55ad283aa400af464c76d713c07ad', 'heckerman@aol.com', 'S3112', 0),
('3219', '716d32ce91a509eba40b3ee15268a97b', 'tunwa.3219@gmail.com', 'S3219', 0),
('3221', '8a51a27c02b1ac542d781f1d718f72b1', 'bung3221@gmail.com', 'S3221', 0),
('3262', '2eddc6f59e5a317c9887258d30d341ea', 'aom.3262@gmail.com', 'S3262', 0),
('3271', '030e52f3f6e8186062974aff8dae91be', 'pon.3271@gmail.com', 'S3271', 0),
('3317', '0413d4d9dca2ec3e5bc5eb7188a94f71', 'pooh.3317@gmail.com', 'S3317', 0),
('3401', '5f25f732ca8dec564d80ab4b516a2d9d', 'jon.3401@gmail.com', 'S3401', 0),
('3422', '2fba277fcdc99e08b5c357720c7ff6f2', 'dogdude@gmail.com', 'S3422', 0),
('3429', 'f2d33d5875cc7663f14930a90a31833d', 'palm.3429@gmail.com', 'S3429', 0),
('3431', '4b1aac17c6bc22b8d668567e3a6a511e', 'kaijeaw.3431@gmail.com', 'S3431', 0),
('3434', 'e5a4d2d47985e28b9e939a045ad01ee5', 'nine.3434@gmail.com', 'S3434', 0),
('3444', 'cd2e27cefe6760bd48aea2c87ec69b2b', 'ngedmond@gmail.com', 'S3444', 0),
('3449', '7934efeae3d0aaa69505852d6c122860', 'fern.3449@gmail.com', 'S3449', 0),
('3456', '81dc9bdb52d04dc20036dbd8313ed055', 'aaa@hotmail.com', 'S3456', 0),
('3705', 'f4f02846ed4080fad619de831496e121', 'nan.3705@gmail.com', 'S3705', 0),
('3710', 'cce0d54765d47ddb89bd48316ed43b9e', 'nat.3710@gmail.com', 'S3710', 0),
('3714', '1dfbd87bf787c9e8dda5957e767cf418', 'fahsai.3714@gmail.com', 'S3714', 0),
('3720', '2824135fa335d58d93159b30f8e43aba', 'aomsin.3720@gmail.com', 'S3720', 0),
('3728', '6215ce7d39091811e0c6be7eec547cee', 'mind.3728@gmail.com', 'S3728', 0),
('3744', '030e52f3f6e8186062974aff8dae91be', 'pon.3744@gmail.com', 'S3744', 0),
('3801', '81cb151efae766ee5c84f8a35a48c562', 'pong.3801@gmail.com', 'S3801', 0),
('3804', '7aadbec3399b49068e26f6699b8e904a', 'pom.3804@gmail.com', 'S3804', 0),
('3825', 'f735307ff1377530baef84c545176c39', 'march.3825@gmail.com', 'S3825', 0),
('3850', '87294eba6aa700625ffd1f75a013425f', 'baitoei.3850@gmail.com', 'S3850', 0),
('3999', '81dc9bdb52d04dc20036dbd8313ed055', 'studentdummy@gmail.com', 'S3999', 0),
('1001', '81dc9bdb52d04dc20036dbd8313ed055', 'aaa@gmill.com', 'T1001', 1),
('1002', '81dc9bdb52d04dc20036dbd8313ed055', 'bbb@gmail.com', 'T1002', 1),
('1011', '81dc9bdb52d04dc20036dbd8313ed055', 'ccc@gmail.com', 'T1011', 1),
('1012', '81dc9bdb52d04dc20036dbd8313ed055', 'ddd@gmail.com', 'T1012', 1),
('1021', '81dc9bdb52d04dc20036dbd8313ed055', 'eee@gmail.com', 'T1021', 1),
('1022', '81dc9bdb52d04dc20036dbd8313ed055', 'fff@gmail.com', 'T1022', 1),
('9999', '81dc9bdb52d04dc20036dbd8313ed055', 'teacherdummy999@gmail.com', 'T9999', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalInfo`
--
ALTER TABLE `personalInfo`
  ADD PRIMARY KEY (`personalID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`personalID`),
  ADD KEY `personalId` (`personalID`);

--
-- Indexes for table `semesterGrade`
--
ALTER TABLE `semesterGrade`
  ADD PRIMARY KEY (`semesterID`,`studentID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `PersonalID` (`personalID`);

--
-- Indexes for table `subjectGrade`
--
ALTER TABLE `subjectGrade`
  ADD PRIMARY KEY (`studentID`,`semesterID`,`subjectID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `subjectRegistration`
--
ALTER TABLE `subjectRegistration`
  ADD PRIMARY KEY (`studentID`,`subjectID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `Subjects`
--
ALTER TABLE `Subjects`
  ADD PRIMARY KEY (`subjectID`,`sectionID`,`degreeProgram`,`room`),
  ADD KEY `semesterID` (`semesterID`),
  ADD KEY `sectionID` (`sectionID`),
  ADD KEY `subjectName` (`subjectName`);

--
-- Indexes for table `TA`
--
ALTER TABLE `TA`
  ADD PRIMARY KEY (`TAID`),
  ADD KEY `personalID` (`personalID`);

--
-- Indexes for table `TAassigned`
--
ALTER TABLE `TAassigned`
  ADD PRIMARY KEY (`TAID`,`sectionID`),
  ADD KEY `TAID` (`TAID`),
  ADD KEY `sectionID` (`sectionID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`),
  ADD KEY `personalID` (`personalID`);

--
-- Indexes for table `Teacherassigned`
--
ALTER TABLE `Teacherassigned`
  ADD PRIMARY KEY (`teacherID`,`sectionID`),
  ADD KEY `teacherID` (`teacherID`),
  ADD KEY `sectionID` (`sectionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`personalID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;

--
-- AUTO_INCREMENT for table `subjectGrade`
--
ALTER TABLE `subjectGrade`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
