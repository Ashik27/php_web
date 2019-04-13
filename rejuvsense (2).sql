-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 06:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rejuvsense`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(9, 'fgdfg', 'dfgdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `image`) VALUES
(13, 'RejuvSense', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES
(17, 'Seminar on GST', '15.jpg', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas '),
(18, 'Seminar on july 30', 'about-img.jpg', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas'),
(20, 'dafsdfdsf', '9 - Copy.jpg', 'dfsdfsv ssfdgsdgsdfgsdgsdv sdgsdgsdgsdgsdgsdgsd'),
(21, 'ggffhgdfgdg', 'ab.jpg', 'vcb cvbcvbcvbcbvb fcbv');

-- --------------------------------------------------------

--
-- Table structure for table `syllubus`
--

CREATE TABLE `syllubus` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllubus`
--

INSERT INTO `syllubus` (`id`, `title`, `image`, `content`) VALUES
(18, 'SSC', '9.jpg', 'Education Center'),
(19, 'PSC', '10.jpg', 'Education Center'),
(20, 'UPSC', '11.jpg', 'Education Center'),
(21, 'RRB', '8.jpg', 'Education Center'),
(22, 'BANK', '14.jpg', 'Education Center'),
(23, 'CLAT & Other Law Exams', '15.jpg', 'Examination Center');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'deepak', '12345'),
(3, 'priyanshu12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllubus`
--
ALTER TABLE `syllubus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `syllubus`
--
ALTER TABLE `syllubus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
