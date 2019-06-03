-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 12:09 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `send` varchar(50) NOT NULL,
  `received` varchar(50) NOT NULL,
  `credit_send` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`send`, `received`, `credit_send`) VALUES
('Abhishek Kumar', 'Abhishek Tyagi', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `current_credit` int(10) NOT NULL,
  `cnt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `current_credit`, `cnt`) VALUES
('Abhishek Kumar', 'abhishektushar22@gmail.com', 169, 1),
('Abhishek Tyagi', 'abhishektyagi320@gmail.com', 441, 2),
('Anish Kachhap', 'anishamazone@gmail.com', 500, 11),
('Ankit Kumar', 'ankitkumar99@gmail.com', 681, 7),
('Deepak Nayak', 'deepaknayak123@gmail.com', 660, 3),
('Dipankar Debnath', 'dipankardbn120@gmail.com', 944, 4),
('kunal', 'kg123kunal@gmail.com', 450, 5),
('Nasif Arafat', 'nasifarafatlassi@gmail.com', 650, 8),
('Prashant Singh', 'raylucifer99@gmail.com', 500, 6),
('Tapas Das', 'tapasdas456@gmail.com', 491, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `cnt` (`cnt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cnt` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
