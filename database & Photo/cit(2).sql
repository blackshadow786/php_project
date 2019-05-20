-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 02:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(2) NOT NULL,
  `awesome_name` varchar(100) NOT NULL,
  `department_name` varchar(150) NOT NULL,
  `point_one` varchar(150) NOT NULL,
  `point_two` varchar(100) NOT NULL,
  `point_three` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `awesome_name`, `department_name`, `point_one`, `point_two`, `point_three`) VALUES
(1, 'fa-facebook', 'Computer', 'action', 'Address', 'Birthday'),
(2, 'fa-address-book', 'Civil', '100', 'qwe', 'jhdhud'),
(3, 'fa-laptop', 'Computer', 'head', '1000+', 'nothing'),
(4, 'fa-laptop', 'computer technology', 'Michel Kelin/HOD', '5 Members', '1500+ Students'),
(5, 'fa-building-o', 'Constraction', 'Michel Kelin/HOD', '5 Members', '500+ Studentsbers'),
(6, 'fa-car ', 'Mechanical', 'Birthday', '7', '500');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` int(10) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `gallary_img` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `tag`, `gallary_img`, `status`) VALUES
(8, 'classroom', '8.jpg', 1),
(9, 'campus', '9.jpg', 1),
(10, 'events', '10.jpg', 1),
(11, 'campus', '11.jpg', 1),
(12, 'classroom', '12.jpg', 1),
(13, 'events', '13.jpg', 1),
(14, 'classroom', '14.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `id` int(6) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_date` varchar(150) NOT NULL,
  `news_details` varchar(10000) NOT NULL,
  `news_image` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `added_by`, `news_title`, `news_date`, `news_details`, `news_image`, `status`) VALUES
(9, '3', 'Google News is', '2019-03-23', 'September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thousands of publishers and magazines. Google News is available on Android, iOS, and the web. A beta version was launched in September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thousands of publishers and magazines. Google News is availa', '9.jpg', 1),
(10, '1', 'September Googl', '2019-03-28', 'September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thousands of publishers and magazines. Google News is available on Android, iOS, and the web. A beta version was launched in September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thous', '10.jpg', 1),
(11, '1', 'Google News is a news aggregator', '2019-03-25', 'September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thousands of publishers and magazines. Google News is available on Android, iOS, and the web. A beta version was launched in September Google News is a news aggregator and app developed by Google. It presents a continuous, customizable flow of articles organized from thous', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(6) NOT NULL,
  `notice_date` varchar(20) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_date`, `notice_title`, `notice_details`) VALUES
(1, '2019-03-14', 'Today is off day', 'lorem ipsum'),
(2, '2019-03-15', 'kal ke class ase', 'emnitei\r\n\r\n\r\nWelcome to Pabna Polytechnic Institute'),
(3, '2019-03-05', 'nothing', 'lorem ipsum'),
(7, '2019-03-21', 'here', 'there is an error on your system'),
(8, '2019-03-21', 'nbb', 'Welcome to Pabna Polytechnic Institute,Pabna'),
(9, '2019-03-21', ' Pabna Polytechnic Institute', 'Welcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,PabnaWelcome to Pabna Polytechnic Institute,Pabna');

-- --------------------------------------------------------

--
-- Table structure for table `principals`
--

CREATE TABLE `principals` (
  `id` int(6) NOT NULL,
  `princ_name` varchar(50) NOT NULL,
  `notice_details` text NOT NULL,
  `inst_name` varchar(50) NOT NULL,
  `princ_img` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `principals`
--

INSERT INTO `principals` (`id`, `princ_name`, `notice_details`, `inst_name`, `princ_img`, `status`) VALUES
(5, 'Atiqur Rahman', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Pabna Polytechnic Institute', '5.jpg', 2),
(6, 'Moajjem Hossain ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Pabna Polytechnic Institute', '6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(2) NOT NULL,
  `inst_name` varchar(150) NOT NULL,
  `phn_number` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fb_link` varchar(150) NOT NULL,
  `twt_link` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `google_link` varchar(150) NOT NULL,
  `map_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `inst_name`, `phn_number`, `email`, `fb_link`, `twt_link`, `address`, `google_link`, `map_link`) VALUES
(1, 'Pabna Polytechnic Institute,Pabna', '+017 11 111 111', 'ppi@pabna.com', 'facebook.com/ppi', 'twitter.com/ppi', 'Gangkola,Pabna Sadar, Pabna', 'plus.google.com/ppi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.331621477172!2d89.23934861498644!3d24.019368284457457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b369a35dcfb%3A0x3c8cff0140e21bb8!2sPabna+Polytechnic+Institute!5e0!3m2!1sen!2sbd!4v1553076374373');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(6) NOT NULL,
  `slider_title` varchar(30) NOT NULL,
  `slider_image` varchar(40) NOT NULL DEFAULT 'defaultimage.jpeg',
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_image`, `status`) VALUES
(13, 'name', '13.jpg', 2),
(16, 'mmm', '16.jpg', 1),
(17, 'nnn', '17.jpg', 2),
(18, 'nnnnnn', '18.jpg', 2),
(19, 'new', '19.jpg', 1),
(21, ' program in the auditorium', '21.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) NOT NULL,
  `awesome_name` varchar(100) NOT NULL,
  `statname` varchar(100) NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `awesome_name`, `statname`, `amount`) VALUES
(1, 'fa fa-user-circle-o', 'Admin', 10),
(2, 'fa fa-university', 'Departments', 34),
(3, 'fa fa-facebook', 'Facebook', 56),
(4, 'fa fa-address-book', 'Address', 78),
(5, 'fa fa-graduation-cap', 'Students', 67),
(6, 'fa fa-birthday-cake', 'Birthday', 100);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `re_password` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `re_password`, `status`) VALUES
(1, 'Mirajul Islam', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Monirul Islam', 'moni@gmail.com', '3e78cd757358f098479bb9aa4da1dd54', '3e78cd757358f098479bb9aa4da1dd54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(150) NOT NULL,
  `re_pass` varchar(150) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `re_pass`, `role`) VALUES
(1, 'Nayan Hossain', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Mirajul islam', 'std@gmail.com', 'd2229cc70e64ae7c07361778573c4e0c', 'd2229cc70e64ae7c07361778573c4e0c', 2),
(3, 'Arif Hossain', 'arif@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'Hafizul Islam', 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Table structure for table `viewers`
--

CREATE TABLE `viewers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` longtext NOT NULL,
  `read_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viewers`
--

INSERT INTO `viewers` (`id`, `name`, `email`, `subject`, `message`, `read_status`) VALUES
(1, 'blank', 'users@gmail.com', 'This is not fair', 'There are some problem in your website.\r\nPlease resolve these issue as soon as possible..', 2),
(2, 'nayan', 'nayan@gmail.com', 'There should be anupdate', 'there are many beautiful girls in our country', 2),
(3, 'nayan', 'nayan@gmail.com', 'Nothing is working', 'SorrY!', 2),
(5, 'ba', 'vava@vgb.bom', 'vvad', 'vvsgsth', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principals`
--
ALTER TABLE `principals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `viewers`
--
ALTER TABLE `viewers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `principals`
--
ALTER TABLE `principals`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `viewers`
--
ALTER TABLE `viewers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
