-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eariadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `utilityid` int(11) NOT NULL,
  `datearrival` varchar(50) NOT NULL,
  `status1` varchar(50) NOT NULL,
  `datefinished` varchar(50) NOT NULL,
  `timefinished` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

CREATE TABLE `concerns` (
  `id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `details` longtext NOT NULL,
  `status1` varchar(10) NOT NULL,
  `files` varchar(50) NOT NULL,
  `concerntype` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `estimatedatetime` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `mn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpno` varchar(11) NOT NULL,
  `room` varchar(2) NOT NULL,
  `bldg` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `expertise` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `fn`, `mn`, `ln`, `pass`, `cpno`, `room`, `bldg`, `pos`, `utype`, `expertise`) VALUES
(1, 'J-583', 'Dela Cruz', 'Luna', 'Juan', 'admin123', '09502909100', '2', 'Mahogany', 'Teacher 1', 'Admin', ''),
(2, 'J-584', 'Ada', 'Dillon', 'Horton', 'user1', '09112233448', '3', 'Mahogany', 'Teacher 1', 'User', ''),
(3, 'J-585', 'John', 'Berg', 'Smith', 'john', '09090909121', '4', 'Narra', 'Janitor', 'Utility', 'Cleaning'),
(4, 'J-586', 'Ben', 'Kelley', 'Roy', 'utiadmin123', '09123456789', '6', 'Narra', 'Office Aide', 'Utility Admin', ''),
(5, 'J-567', 'Isaac', 'Martinez', 'Grant', 'user12345', '09907723282', '3', 'Yakal', 'Teacher 1', 'User', ''),
(6, 'J-588', 'Ruben', 'Madison', 'Carr', 'utility123', '09818378219', '1', 'Kamagong', 'Utility Aide 1', 'Utility', 'Electrician'),
(7, 'J-589', 'Kathryn', 'Hobbs', 'Leon', 'utility1234', '09238482832', '3', 'Mahogany', 'Utility Aide 2', 'Utility', 'Technician'),
(8, 'J-590', 'Joanna', 'Riley', 'Lopez', 'utility12345', '09082929399', '', '', 'Utility Aide', 'Utility', 'Aircon Technician'),
(9, 'J-591', 'Kayleigh', 'Mendoza', 'Aban', 'utility12345', '09234499294', '', '', 'Utility Aide', 'Utility', 'Cleaning'),
(10, '', 'Harold', 'Barruga', 'Tamayo', 'utility34', '09234829488', '', '', 'Utility Aide', 'Utility', 'Computer Technician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concerns`
--
ALTER TABLE `concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `concerns`
--
ALTER TABLE `concerns`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
