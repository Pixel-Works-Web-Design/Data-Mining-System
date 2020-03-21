-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 05:12 AM
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
(10, 'Maths teacher', 'math@gmail.com', '1234554321', '202cb962ac59075b964b07152d234b70', 'FACULTY', '123'),
(13, 'Science teacher', 'science@gmail.com', '12', '202cb962ac59075b964b07152d234b70', 'FACULTY', '123'),
(14, 'Master 3', 'master3@gmail.com', '252525252', '827ccb0eea8a706c4c34a16891f84e7b', 'MASTERADMIN', '12345');

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
(1, 4, 'Science assignment', '2103202037abv.pdf'),
(2, 3, 'Math assignment', '2103202054abv.pdf');

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
(1, 4, 4),
(2, 5, 3),
(3, 6, 5),
(4, 10, 5),
(5, 13, 4);

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
(1, 'pranjal@gmail.com', '2020-03-17 05:34:26', '::1'),
(2, 'pranjal@gmail.com', '2020-03-17 05:37:37', '::1'),
(3, 'pranjal@gmail.com', '2020-03-17 05:37:55', '::1'),
(4, 'pranjal@gmail.com', '2020-03-17 05:38:42', '::1'),
(5, 'pranjal@gmail.com', '2020-03-17 05:38:49', '::1'),
(6, 'pranjal@gmail.com', '2020-03-17 21:50:00', '::1'),
(7, 'misam@gmail.com', '2020-03-17 22:39:21', '::1'),
(8, 'pappa@gmail.com', '2020-03-17 22:40:04', '::1'),
(9, 'master@gmail.com', '2020-03-17 23:55:20', '::1'),
(10, 'master2@gmail.com', '2020-03-17 23:56:05', '::1'),
(11, 'math@gmail.com', '2020-03-17 23:56:32', '::1'),
(12, 'student@gmail.com', '2020-03-18 00:01:08', '::1'),
(13, 'student@gmail.com', '2020-03-18 00:01:57', '::1'),
(14, 'master2@gmail.com', '2020-03-18 00:03:49', '::1'),
(15, 'pranjal@gmail.com', '2020-03-18 00:04:12', '::1'),
(16, 'math@gmail.com', '2020-03-18 00:04:51', '::1'),
(17, 'student@gmail.com', '2020-03-18 00:12:57', '::1'),
(18, 'student@gmail.com', '2020-03-18 00:13:53', '::1'),
(19, 'master2@gmail.com', '2020-03-18 00:14:07', '::1'),
(20, 'math@gmail.com', '2020-03-18 00:14:23', '::1'),
(21, 'pranjal@gmail.com', '2020-03-18 00:14:39', '::1'),
(22, 'master2@gmail.com', '2020-03-18 00:31:43', '::1'),
(23, 'math@gmail.com', '2020-03-18 00:54:31', '::1'),
(24, 'student@gmail.com', '2020-03-18 00:58:35', '::1'),
(25, 'student@gmail.com', '2020-03-18 01:07:36', '::1'),
(26, 'master2@gmail.com', '2020-03-18 01:07:53', '::1'),
(27, 'math@gmail.com', '2020-03-18 07:10:13', '::1'),
(28, 'student@gmail.com', '2020-03-18 07:13:17', '::1'),
(29, 'student@gmail.com', '2020-03-18 07:22:29', '::1'),
(30, 'student@gmail.com', '2020-03-18 07:22:45', '::1'),
(31, 'student@gmail.com', '2020-03-18 07:31:54', '::1'),
(32, 'student@gmail.com', '2020-03-18 07:32:25', '::1'),
(33, 'math@gmail.com', '2020-03-18 07:32:33', '::1'),
(34, 'student@gmail.com', '2020-03-18 07:32:41', '::1'),
(35, 'student@gmail.com', '2020-03-18 20:07:55', '::1'),
(36, 'student@gmail.com', '2020-03-18 23:53:44', '::1'),
(37, 'student@gmail.com', '2020-03-18 23:55:36', '::1'),
(38, 'master2@gmail.com', '2020-03-18 23:59:44', '::1'),
(39, 'student2@gmail.com', '2020-03-19 01:03:09', '::1'),
(40, 'master2@gmail.com', '2020-03-19 01:05:55', '::1'),
(41, 'master2@gmail.com', '2020-03-19 01:23:54', '::1'),
(42, 'master2@gmail.com', '2020-03-19 01:25:15', '::1'),
(43, 'master2@gmail.com', '2020-03-19 01:25:56', '::1'),
(44, 'master2@gmail.com', '2020-03-19 01:31:06', '::1'),
(45, 'student2@gmail.com', '2020-03-19 01:31:19', '::1'),
(46, 'math@gmail.com', '2020-03-19 01:32:32', '::1'),
(47, 'math@gmail.com', '2020-03-19 07:28:18', '::1'),
(48, 'master2@gmail.com', '2020-03-19 07:29:51', '::1'),
(49, 'master2@gmail.com', '2020-03-19 21:35:52', '::1'),
(50, 'master2@gmail.com', '2020-03-19 22:51:55', '::1'),
(51, 'abbasStudent@gmail.com', '2020-03-19 22:55:50', '::1'),
(52, 'misamStudent@gmaill.com', '2020-03-19 22:57:05', '::1'),
(53, 'master2@gmail.com', '2020-03-19 22:58:20', '::1'),
(54, 'master2@gmail.com', '2020-03-20 22:14:45', '::1'),
(55, 'pranjalStudent@gmail.com', '2020-03-20 22:45:21', '::1'),
(56, 'master2@gmail.com', '2020-03-20 22:47:30', '::1'),
(57, 'student4@gmail.com', '2020-03-20 22:48:04', '::1'),
(58, 'master2@gmail.com', '2020-03-20 22:52:04', '::1'),
(59, 'student5@gmail.com', '2020-03-20 22:53:11', '::1'),
(60, 'master2@gmail.com', '2020-03-20 23:05:07', '::1'),
(61, 'master2@gmail.com', '2020-03-20 23:23:37', '::1'),
(62, 'math@gmail.com', '2020-03-20 23:43:06', '::1'),
(63, 'math@gmail.com', '2020-03-21 00:04:54', '::1'),
(64, 'master2@gmail.com', '2020-03-21 00:12:22', '::1'),
(65, 'math@gmail.com', '2020-03-21 00:36:05', '::1'),
(66, 'math@gmail.com', '2020-03-21 00:41:36', '::1'),
(67, 'master2@gmail.com', '2020-03-21 00:42:43', '::1'),
(68, 'pranjal@gmail.com', '2020-03-21 00:59:19', '::1'),
(69, 'pixelworkswebdesign2007@gmail.com', '2020-03-21 01:00:40', '::1'),
(70, 'pixelworkswebdesign2007@gmail.com', '2020-03-21 01:02:09', '::1'),
(71, 'pixelworkswebdesign2007@gmail.com', '2020-03-21 01:06:21', '::1'),
(72, 'pixelworkswebdesign2007@gmail.com', '2020-03-21 01:07:29', '::1'),
(73, 'pixelworkswebdesign2007@gmail.com', '2020-03-21 01:07:39', '::1'),
(74, 'master3@gmail.com', '2020-03-21 01:08:25', '::1'),
(75, 'master3@gmail.com', '2020-03-21 01:08:53', '::1'),
(76, 'master3@gmail.com', '2020-03-21 01:09:00', '::1'),
(77, 'student4@gmail.com', '2020-03-21 01:10:49', '::1'),
(78, 'student4@gmail.com', '2020-03-21 01:11:25', '::1'),
(79, 'student4@gmail.com', '2020-03-21 01:11:42', '::1');

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
(1, 'Abbas', 'Student', 'abbasStudent@gmail.com', '123', '10', '1', 'FEMALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-19 22:54:22', NULL, 'YES'),
(2, 'Pankaj', 'Student', 'misamStudent@gmaill.com', '2252552', '12', '2', 'MALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-19 22:54:51', NULL, 'YES'),
(3, 'New', 'Student', 'pranjalStudent@gmail.com', '252525', '3', '3', 'MALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-19 22:55:22', NULL, 'YES'),
(4, 'Student4', '44', 'student4@gmail.com', '25', '6', '6', 'MALE', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '2020-03-20 22:47:57', NULL, 'YES'),
(5, 'Student', '5', 'student5@gmail.com', '8585', '7', '7', 'MALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-20 22:52:51', NULL, 'YES');

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
(2, 1, 2, 'hostel', NULL),
(3, 1, 3, 'annual', NULL),
(4, 1, 4, 'parent', NULL),
(5, 1, 5, 'Personal vehicle ', NULL),
(6, 1, 6, 'Ppts ', ''),
(7, 1, 7, 'fav', NULL),
(8, 1, 8, 'jhbkj', NULL),
(9, 1, 9, 'jbj', NULL),
(10, 1, 10, 'bjbjb', NULL),
(11, 1, 11, 'Books', ''),
(12, 1, 12, 'NO', NULL),
(13, 1, 13, 'NO', NULL),
(14, 1, 14, 'NO', NULL),
(15, 1, 15, 'kjbkb', NULL),
(16, 1, 16, 'jbjb', NULL),
(17, 1, 17, 'NO', NULL),
(18, 1, 18, 'NO', NULL),
(19, 1, 19, 'NO', NULL),
(20, 1, 20, 'lknkn', NULL),
(21, 1, 21, 'YES ', ''),
(22, 2, 1, 'knkjb\r\n', NULL),
(23, 2, 2, 'kjb', NULL),
(24, 2, 3, 'kjjkbjk', NULL),
(25, 2, 4, 'bkj', NULL),
(26, 2, 5, 'Public transportation ', NULL),
(27, 2, 6, 'Ppts ', ''),
(28, 2, 7, 'kjb', NULL),
(29, 2, 8, 'knkkl', NULL),
(30, 2, 9, 'jbjh', NULL),
(31, 2, 10, 'bjj', NULL),
(32, 2, 11, 'Books ', ''),
(33, 2, 12, 'NO', NULL),
(34, 2, 13, 'NO', NULL),
(35, 2, 14, 'NO', NULL),
(36, 2, 15, 'hbj', NULL),
(37, 2, 16, 'bjjhbj\r\n\r\n\r\n\r\n', NULL),
(38, 2, 17, 'NO', NULL),
(39, 2, 18, 'NO', NULL),
(40, 2, 19, 'NO', NULL),
(41, 2, 20, 'ljlkl', NULL),
(42, 2, 21, 'YES ', ''),
(43, 3, 1, 'kbkkjnkjn', NULL),
(44, 3, 2, 'bjkjkb', NULL),
(45, 3, 3, 'bkj', NULL),
(46, 3, 4, 'bk,nkj', NULL),
(47, 3, 5, 'Public transportation ', NULL),
(48, 3, 6, 'Ppts ', ''),
(49, 3, 7, 'knkbnk', NULL),
(50, 3, 8, 'jkbkj', NULL),
(51, 3, 9, 'bjkbkjb', NULL),
(52, 3, 10, 'kbjkj', NULL),
(53, 3, 11, 'Ppts ', ''),
(54, 3, 12, 'NO', NULL),
(55, 3, 13, 'NO', NULL),
(56, 3, 14, 'NO', NULL),
(57, 3, 15, 'lknk', NULL),
(58, 3, 16, 'kkj', NULL),
(59, 3, 17, 'NO', NULL),
(60, 3, 18, 'NO', NULL),
(61, 3, 19, 'NO', NULL),
(62, 3, 20, ', k k ', NULL),
(63, 3, 21, 'YES ', ''),
(64, 4, 1, 'jbhjvhjv', NULL),
(65, 4, 2, 'hvhvh', NULL),
(66, 4, 3, 'hvghgvh', NULL),
(67, 4, 4, 'vhgvhv', NULL),
(68, 4, 5, 'Public transportation ', NULL),
(69, 4, 6, 'Ppts ', ''),
(70, 4, 7, 'ojinikb', NULL),
(71, 4, 8, 'bjhbjk', NULL),
(72, 4, 9, 'jhbjkb', NULL),
(73, 4, 10, 'bjbkj', NULL),
(74, 4, 11, 'Videos ', ''),
(75, 4, 12, 'NO', NULL),
(76, 4, 13, 'NO', NULL),
(77, 4, 14, 'NO', NULL),
(78, 4, 15, 'lkkhnlkj', NULL),
(79, 4, 16, 'jbn k', NULL),
(80, 4, 17, 'NO', NULL),
(81, 4, 18, 'NO', NULL),
(82, 4, 19, 'NO', NULL),
(83, 4, 20, 'lklknk', NULL),
(84, 4, 21, 'YES ', ''),
(85, 5, 1, 'jbjvjhvh', NULL),
(86, 5, 2, 'hvh', NULL),
(87, 5, 3, 'vkjnkjn', NULL),
(88, 5, 4, 'hvbhb', NULL),
(89, 5, 5, 'Public transportation ', NULL),
(90, 5, 6, 'Ppts ', ''),
(91, 5, 7, 'knk', NULL),
(92, 5, 8, 'kbjbj', NULL),
(93, 5, 9, 'jbhj', NULL),
(94, 5, 10, 'bjhb', NULL),
(95, 5, 11, 'Others ', 'others value'),
(96, 5, 12, 'NO', NULL),
(97, 5, 13, 'NO', NULL),
(98, 5, 14, 'NO', NULL),
(99, 5, 15, 'lknjlnk', NULL),
(100, 5, 16, 'nkjn', NULL),
(101, 5, 17, 'NO', NULL),
(102, 5, 18, 'NO', NULL),
(103, 5, 19, 'NO', NULL),
(104, 5, 20, 'm;ll;m', NULL),
(105, 5, 21, 'YES ', '');

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
(4, 'Science'),
(3, 'Math'),
(5, 'Gujrati');

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `facultysubjects`
--
ALTER TABLE `facultysubjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studentsurvey`
--
ALTER TABLE `studentsurvey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
