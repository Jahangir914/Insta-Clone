-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insta_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `insta-users`
--

CREATE TABLE `insta-users` (
  `S_no` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insta-users`
--

INSERT INTO `insta-users` (`S_no`, `user_email`, `user_name`, `user_username`, `user_password`) VALUES
(1, 'ali@gmail.com', 'Ali Khan', 'Ali Ahmed Khan', 'ali123'),
(2, 'usman@gmail.com', 'Usman Ali', 'iamusman', 'usman123'),
(3, 'mas@gmail.com', 'Mohtashim', 'Moti', 'abc123'),
(4, 'abdullah@gmail.com', 'Abdullah Kashif', 'iamabdullah', 'abdullah123'),
(5, 'sabeera@gmail.com', 'Sabeera Riaz', 'stylishsabeera', 'sab123');

-- --------------------------------------------------------

--
-- Table structure for table `insta_post`
--

CREATE TABLE `insta_post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insta_post`
--

INSERT INTO `insta_post` (`post_id`, `title`, `description`, `user_name`, `user_username`, `image`) VALUES
(4, 'lakl', 'lklzl\r\n', 'Ali Khan', 'Ali Ahmed Khan', 'wp2707576.jpg'),
(6, 'hello world', 'hey there', 'Abdullah Kashif', 'iamabdullah', 'wp2707576.jpg'),
(7, 'My second Post', 'I am back', 'Abdullah Kashif', 'iamabdullah', 'wp4676583.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insta-users`
--
ALTER TABLE `insta-users`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `insta_post`
--
ALTER TABLE `insta_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insta-users`
--
ALTER TABLE `insta-users`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insta_post`
--
ALTER TABLE `insta_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
