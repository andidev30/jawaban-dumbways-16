-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2020 at 03:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_dumbways_16`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_author`
--

CREATE TABLE `tb_author` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_author`
--

INSERT INTO `tb_author` (`id`, `name`) VALUES
(1, 'andi'),
(2, 'dede'),
(3, 'yana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_content`
--

CREATE TABLE `tb_content` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_course` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_content`
--

INSERT INTO `tb_content` (`id`, `name`, `video_link`, `type`, `id_course`) VALUES
(3, 'web dev', 'http://videotutorial.com', 'premium', 12),
(4, 'starter', 'http://videodua.com', 'premium', 12),
(5, 'php programming', 'http://videotutorial.com/php', 'premium', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `id_author` bigint(20) NOT NULL,
  `duration` time NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`id`, `name`, `thumbnail`, `id_author`, `duration`, `description`) VALUES
(11, 'html learning', 'warga.jpeg', 3, '16:16:15', 'html for newbie'),
(12, 'css learning', 'warga.jpeg', 2, '16:16:12', 'css for newbie'),
(13, 'php part 1', 'warga.jpeg', 2, '16:16:15', 'php dev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_author`
--
ALTER TABLE `tb_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_content`
--
ALTER TABLE `tb_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_author`
--
ALTER TABLE `tb_author`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_content`
--
ALTER TABLE `tb_content`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
