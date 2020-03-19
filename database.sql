-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 12:40 PM
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
(1, 'Pranjal', 'pranjal@gmail.com', '1234554321', 'a513d589e07a466180f9328b060225e9', 'MASTERADMIN', NULL),
(12, 'Master2', 'master2@gmail.com', '252525252', '202cb962ac59075b964b07152d234b70', 'MASTERADMIN', '123'),
(11, 'Master', 'master@gmail.com', '12345555', '202cb962ac59075b964b07152d234b70', 'MASTERADMIN', '123'),
(10, 'Math teacher', 'math@gmail.com', '1234554321', '202cb962ac59075b964b07152d234b70', 'FACULTY', '123');

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
(4, 10, 5);

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
(48, 'master2@gmail.com', '2020-03-19 07:29:51', '::1');

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

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `mobile`, `class`, `gender`, `password`, `passwordVisibility`, `register_date`, `survey_date`, `isSurveyFill`) VALUES
(12, 'Abbas', 'Lakhotara', 'student@gmail.com', '585858', '12th', 'MALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-17 23:54:38', NULL, 'YES'),
(13, 'Student ', '2', 'student2@gmail.com', '25852', 'college', 'FEMALE', '202cb962ac59075b964b07152d234b70', '123', '2020-03-19 00:07:38', NULL, 'YES');

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
(1, 12, 1, 'home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here home Town come here ', NULL),
(2, 12, 2, 'iuh', NULL),
(3, 12, 3, 'ihknk', NULL),
(4, 12, 4, 'ihkjbk', NULL),
(5, 12, 5, 'Public transportation ', NULL),
(6, 12, 6, 'Others', 'others scope'),
(7, 12, 7, 'huj', NULL),
(8, 12, 8, 'ihh', NULL),
(9, 12, 9, 'hui', NULL),
(10, 12, 10, 'hihbkj', NULL),
(11, 12, 11, 'Books ', ''),
(12, 12, 12, 'NO', 'jhvbkjvj'),
(13, 12, 13, 'NO', NULL),
(14, 12, 14, 'NO', NULL),
(15, 12, 15, 'hjj', NULL),
(16, 12, 16, 'ihiuhi', NULL),
(17, 12, 17, 'NO', NULL),
(18, 12, 18, 'NO', NULL),
(19, 12, 19, 'NO', NULL),
(20, 12, 20, 'ohoio', NULL),
(21, 12, 21, 'YES ', ''),
(22, 13, 1, 'bhavnagar', NULL),
(23, 13, 2, 'no address', NULL),
(24, 13, 3, '2000', NULL),
(25, 13, 4, 'business', NULL),
(26, 13, 5, 'Personal vehicle ', NULL),
(27, 13, 6, 'Others ', 'online'),
(28, 13, 7, 'english', NULL),
(29, 13, 8, 'math', NULL),
(30, 13, 9, 'no difficulties', NULL),
(31, 13, 10, 'nice', NULL),
(32, 13, 11, 'Videos ', ''),
(33, 13, 12, 'NO', NULL),
(34, 13, 13, 'NO', NULL),
(35, 13, 14, 'NO', NULL),
(36, 13, 15, 'not', NULL),
(37, 13, 16, 'nice', NULL),
(38, 13, 17, 'NO', NULL),
(39, 13, 18, 'YES', NULL),
(40, 13, 19, 'NO', NULL),
(41, 13, 20, 'no idea', NULL),
(42, 13, 21, 'NO ', ''),
(43, 12, 1, '', NULL),
(44, 12, 2, '', NULL),
(45, 12, 3, '', NULL),
(46, 12, 4, '', NULL),
(47, 12, 5, 'Public transportation ', NULL),
(48, 12, 6, 'Ppts ', ''),
(49, 12, 7, '', NULL),
(50, 12, 8, '', NULL),
(51, 12, 9, '', NULL),
(52, 12, 10, '', NULL),
(53, 12, 11, 'Books ', ''),
(54, 12, 12, 'NO', NULL),
(55, 12, 13, 'NO', NULL),
(56, 12, 14, 'NO', NULL),
(57, 12, 15, '', NULL),
(58, 12, 16, '', NULL),
(59, 12, 17, 'NO', NULL),
(60, 12, 18, 'NO', NULL),
(61, 12, 19, 'NO', NULL),
(62, 12, 20, '', NULL),
(63, 12, 21, 'YES ', ''),
(64, 12, 1, '', NULL),
(65, 12, 2, '', NULL),
(66, 12, 3, '', NULL),
(67, 12, 4, '', NULL),
(68, 12, 5, 'Public transportation ', NULL),
(69, 12, 6, 'Ppts ', ''),
(70, 12, 7, '', NULL),
(71, 12, 8, '', NULL),
(72, 12, 9, '', NULL),
(73, 12, 10, '', NULL),
(74, 12, 11, 'Books ', ''),
(75, 12, 12, 'NO', NULL),
(76, 12, 13, 'NO', NULL),
(77, 12, 14, 'NO', NULL),
(78, 12, 15, '', NULL),
(79, 12, 16, '', NULL),
(80, 12, 17, 'NO', NULL),
(81, 12, 18, 'NO', NULL),
(82, 12, 19, 'NO', NULL),
(83, 12, 20, '', NULL),
(84, 12, 21, 'YES ', ''),
(85, 12, 1, '', NULL),
(86, 12, 2, '', NULL),
(87, 12, 3, '', NULL),
(88, 12, 4, '', NULL),
(89, 12, 5, 'Public transportation ', NULL),
(90, 12, 6, 'Ppts ', ''),
(91, 12, 7, '', NULL),
(92, 12, 8, '', NULL),
(93, 12, 9, '', NULL),
(94, 12, 10, '', NULL),
(95, 12, 11, 'Books ', ''),
(96, 12, 12, 'NO', NULL),
(97, 12, 13, 'NO', NULL),
(98, 12, 14, 'NO', NULL),
(99, 12, 15, '', NULL),
(100, 12, 16, '', NULL),
(101, 12, 17, 'NO', NULL),
(102, 12, 18, 'NO', NULL),
(103, 12, 19, 'NO', NULL),
(104, 12, 20, '', NULL),
(105, 12, 21, 'YES ', ''),
(106, 12, 1, '', NULL),
(107, 12, 2, '', NULL),
(108, 12, 3, '', NULL),
(109, 12, 4, '', NULL),
(110, 12, 5, 'Public transportation ', NULL),
(111, 12, 6, 'Ppts ', ''),
(112, 12, 7, '', NULL),
(113, 12, 8, '', NULL),
(114, 12, 9, '', NULL),
(115, 12, 10, '', NULL),
(116, 12, 11, 'Books ', ''),
(117, 12, 12, 'NO', NULL),
(118, 12, 13, 'NO', NULL),
(119, 12, 14, 'NO', NULL),
(120, 12, 15, '', NULL),
(121, 12, 16, '', NULL),
(122, 12, 17, 'NO', NULL),
(123, 12, 18, 'NO', NULL),
(124, 12, 19, 'NO', NULL),
(125, 12, 20, '', NULL),
(126, 12, 21, 'YES ', '');

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
(3, 'Annual Income ?', 'INPUT', NULL, NULL),
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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `facultysubjects`
--
ALTER TABLE `facultysubjects`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `studentsurvey`
--
ALTER TABLE `studentsurvey`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
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
