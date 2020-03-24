-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 12:42 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data-mining-system-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(200) NOT NULL COMMENT 'id',
  `name` varchar(500) DEFAULT NULL COMMENT 'name',
  `email` varchar(500) DEFAULT NULL COMMENT 'email',
  `mobile` varchar(500) DEFAULT NULL COMMENT 'mobile',
  `password` varchar(500) DEFAULT NULL COMMENT 'password',
  `type` varchar(200) DEFAULT 'MASTERADMIN' COMMENT '"''MASTERADMIN'',''FACULTY''',
  `passwordVisibility` varchar(200) DEFAULT NULL COMMENT 'show passowrd'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `name`, `email`, `mobile`, `password`, `type`, `passwordVisibility`) VALUES
(1, 'Pranjal Desai', 'pixelworkswebdesign2007@gmail.com', '9979086613', '042a1ecfb0a6761285eea3103dd1fac4', 'MASTERADMIN', 'pw2dmy07');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(200) NOT NULL,
  `subject_id` int(150) DEFAULT NULL,
  `name` varchar(2000) DEFAULT NULL,
  `file` varchar(3000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facultysubjects`
--

CREATE TABLE `facultysubjects` (
  `id` int(200) NOT NULL,
  `faculty_id` int(150) DEFAULT NULL,
  `subject_id` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(200) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `date`, `address`) VALUES
(1, 'pixelworkswebdesign2007@gmail.com', '2020-03-22 20:42:03', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `id` int(200) NOT NULL,
  `quiz_id` int(150) DEFAULT NULL,
  `question` varchar(2000) DEFAULT NULL,
  `option_a` varchar(2000) DEFAULT NULL,
  `option_b` varchar(2000) DEFAULT NULL,
  `option_c` varchar(2000) DEFAULT NULL,
  `option_d` varchar(2000) DEFAULT NULL,
  `answer` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) DEFAULT NULL,
  `subject_id` int(150) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(200) NOT NULL COMMENT 'id',
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL COMMENT 'email',
  `mobile` varchar(500) DEFAULT NULL COMMENT 'mobile',
  `class` varchar(200) DEFAULT NULL,
  `gr_no` varchar(200) DEFAULT NULL,
  `gender` varchar(150) DEFAULT 'MALE' COMMENT 'MALE,FEMALE',
  `password` varchar(500) DEFAULT NULL COMMENT 'password',
  `passwordVisibility` varchar(200) DEFAULT NULL COMMENT 'show passowrd',
  `register_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `survey_date` varchar(200) DEFAULT NULL,
  `isSurveyFill` varchar(150) DEFAULT 'NO'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentsurvey`
--

CREATE TABLE `studentsurvey` (
  `id` int(200) NOT NULL,
  `student_id` int(150) DEFAULT NULL,
  `survey_id` int(150) DEFAULT NULL,
  `value` varchar(2000) DEFAULT NULL,
  `otherValue` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz`
--

CREATE TABLE `student_quiz` (
  `id` int(200) NOT NULL,
  `student_id` int(150) DEFAULT NULL,
  `quiz_id` int(150) DEFAULT NULL,
  `questions` int(150) DEFAULT NULL,
  `result` int(150) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(200) NOT NULL,
  `subject` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(200) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `value` varchar(150) DEFAULT 'INPUT' COMMENT 'TOGGLE,INPUT,CUSTOM_TOGGLE',
  `options` json DEFAULT NULL,
  `hasOther` varchar(2000) DEFAULT 'NO'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `title`, `value`, `options`, `hasOther`) VALUES
(1, 'Home Town ?', 'INPUT', NULL, NULL),
(2, 'Hostel address ?', 'INPUT', NULL, NULL),
(3, 'Annual Income of Parents ?', 'INPUT', NULL, NULL),
(4, 'Parents occupation ?', 'INPUT', NULL, NULL),
(5, 'Conveyance ?', 'CUSTOM_TOGGLE', '["Public transportation", "Personal vehicle"]', NULL),
(6, 'What learning technique do you prefer ?', 'CUSTOM_TOGGLE', '["Ppts", "Chalk & board", "Others"]', 'YES'),
(7, 'Which is your favourite class for current sem ?', 'INPUT', NULL, NULL),
(8, 'What subject is difficult for current sem ?', 'INPUT', NULL, NULL),
(9, 'What are your difficulties ?', 'INPUT', NULL, NULL),
(10, 'Feedback on current teaching techniques.', 'INPUT', NULL, NULL),
(11, 'What kind of study material do you prefer ?', 'CUSTOM_TOGGLE', '["Books", "Ppts", "Videos", "Others"]', 'YES'),
(12, 'Do you favour extra classes?', 'TOGGLE', NULL, NULL),
(13, 'Do you want acces to your faculty\'s video lectures ?', 'TOGGLE', NULL, NULL),
(14, 'Do you prefer one to one lectures ?', 'TOGGLE', NULL, NULL),
(15, 'What do you think about counseling ?', 'INPUT', NULL, NULL),
(16, 'Do you face any problems with your batchmates ?', 'INPUT', NULL, NULL),
(17, 'Do you have group discussions ?', 'TOGGLE', NULL, NULL),
(18, 'Do you think group discussions are efficient for you ?', 'TOGGLE', NULL, NULL),
(19, 'Do you face difficulties because of language ?', 'TOGGLE', NULL, NULL),
(20, 'What is efficient way of evaluation according to you ?', 'INPUT', NULL, NULL),
(21, 'Do you like existing assignment system ?', 'CUSTOM_TOGGLE', '["YES", "NO", "Why/why not"]', 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultysubjects`
--
ALTER TABLE `facultysubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsurvey`
--
ALTER TABLE `studentsurvey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_quiz`
--
ALTER TABLE `student_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facultysubjects`
--
ALTER TABLE `facultysubjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id';
--
-- AUTO_INCREMENT for table `studentsurvey`
--
ALTER TABLE `studentsurvey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_quiz`
--
ALTER TABLE `student_quiz`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
