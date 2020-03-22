-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 06:36 AM
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
(1, 'Pranjal Desai', 'pixelworkswebdesign2007@gmail.com', '9979086613', '042a1ecfb0a6761285eea3103dd1fac4', 'MASTERADMIN', 'pw2dmy07'),
(2, 'Math Teacher', 'math@gmail.com', '123455431', '202cb962ac59075b964b07152d234b70', 'FACULTY', '123'),
(3, 'English Teacher', 'english@gmail.com', '2585241525', '202cb962ac59075b964b07152d234b70', 'FACULTY', '123');

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

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `subject_id`, `name`, `file`) VALUES
(1, 1, 'Formula H2', '2203202056abv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `facultysubjects`
--

CREATE TABLE `facultysubjects` (
  `id` int(200) NOT NULL,
  `faculty_id` int(150) DEFAULT NULL,
  `subject_id` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultysubjects`
--

INSERT INTO `facultysubjects` (`id`, `faculty_id`, `subject_id`) VALUES
(1, 2, 1),
(2, 3, 2);

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
(1, 'pixelworkswebdesign2007@gmail.com', '2020-03-22 02:14:58', '::1'),
(2, 'abbasStudent@gmail.com', '2020-03-22 02:19:58', '::1'),
(3, 'pixelworkswebdesign2007@gmail.com', '2020-03-22 02:30:42', '::1'),
(4, 'student2@gmail.com', '2020-03-22 02:31:32', '::1'),
(5, 'pixelworkswebdesign2007@gmail.com', '2020-03-22 02:33:08', '::1'),
(6, 'math@gmail.com', '2020-03-22 02:35:06', '::1');

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

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`id`, `quiz_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(1, 1, 'What is Formula Code ?', 'H2', 'G6', 'F4', 'K8', 'A');

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

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `subject_id`, `date`) VALUES
(1, 'Formula H2 Quiz', 1, NULL);

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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `mobile`, `class`, `gr_no`, `gender`, `password`, `passwordVisibility`, `register_date`, `survey_date`, `isSurveyFill`) VALUES
(1, 'Abbas', 'Student', 'abbasStudent@gmail.com', '87458585', '1', '1', 'MALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-22 02:18:13', NULL, 'YES'),
(2, 'Student', '2', 'student2@gmail.com', '6541525252', '2', '2', 'FEMALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-22 02:31:22', NULL, 'YES');

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

--
-- Dumping data for table `studentsurvey`
--

INSERT INTO `studentsurvey` (`id`, `student_id`, `survey_id`, `value`, `otherValue`) VALUES
(1, 1, 1, 'town', NULL),
(2, 1, 2, 'address', NULL),
(3, 1, 3, 'annual', NULL),
(4, 1, 4, 'parents', NULL),
(5, 1, 5, 'Personal vehicle ', NULL),
(6, 1, 6, 'Ppts ', ''),
(7, 1, 7, '88 may be', NULL),
(8, 1, 8, 'math', NULL),
(9, 1, 9, 'no idea', NULL),
(10, 1, 10, 'no idea', NULL),
(11, 1, 11, 'Ppts ', ''),
(12, 1, 12, 'NO', NULL),
(13, 1, 13, 'NO', NULL),
(14, 1, 14, 'NO', NULL),
(15, 1, 15, 'couns', NULL),
(16, 1, 16, 'no idea', NULL),
(17, 1, 17, 'NO', NULL),
(18, 1, 18, 'NO', NULL),
(19, 1, 19, 'NO', NULL),
(20, 1, 20, 'no idea', NULL),
(21, 1, 21, 'YES ', ''),
(22, 2, 1, 'khkhbh', NULL),
(23, 2, 2, 'vhgvh', NULL),
(24, 2, 3, 'vhv', NULL),
(25, 2, 4, 'hj', NULL),
(26, 2, 5, 'Public transportation ', NULL),
(27, 2, 6, 'Ppts ', ''),
(28, 2, 7, 'nkn', NULL),
(29, 2, 8, 'njknk', NULL),
(30, 2, 9, 'kjnk', NULL),
(31, 2, 10, 'nkjnk', NULL),
(32, 2, 11, 'Books ', ''),
(33, 2, 12, 'NO', NULL),
(34, 2, 13, 'NO', NULL),
(35, 2, 14, 'NO', NULL),
(36, 2, 15, 'lknkkl', NULL),
(37, 2, 16, 'nkn', NULL),
(38, 2, 17, 'NO', NULL),
(39, 2, 18, 'NO', NULL),
(40, 2, 19, 'NO', NULL),
(41, 2, 20, ';,;,;', NULL),
(42, 2, 21, 'YES ', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(200) NOT NULL,
  `subject` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`) VALUES
(1, 'Mathematics'),
(2, 'English'),
(3, 'Hindi'),
(4, 'Data Structure');

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facultysubjects`
--
ALTER TABLE `facultysubjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studentsurvey`
--
ALTER TABLE `studentsurvey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
