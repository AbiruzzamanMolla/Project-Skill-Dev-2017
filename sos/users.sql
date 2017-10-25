-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 08:41 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_contect_number` varchar(11) NOT NULL,
  `user_bikas` varchar(12) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `dob` text NOT NULL,
  `nid` varchar(14) NOT NULL,
  `dobn` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_dis` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `village` varchar(30) NOT NULL,
  `upzilla` varchar(30) NOT NULL,
  `zilla` varchar(30) NOT NULL,
  `union` varchar(30) NOT NULL,
  `post_office` varchar(30) NOT NULL,
  `post_code` varchar(4) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `o_name` varchar(40) NOT NULL,
  `o_nid` varchar(20) NOT NULL,
  `o_num` varchar(11) NOT NULL,
  `m_num` varchar(11) NOT NULL,
  `chairman_number` varchar(11) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `user_video` varchar(100) NOT NULL,
  `chairman_cc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
