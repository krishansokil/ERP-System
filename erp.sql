-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 25, 2021 at 08:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_faculty_signup`
--

CREATE TABLE `admin_faculty_signup` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_faculty_signup`
--

INSERT INTO `admin_faculty_signup` (`id`, `full_name`, `email`, `phone`, `password`, `image`, `dt`) VALUES
(7, 'Tufan Mukherjee', 'tufanmukherhi1@gmail.com', '9876543210', '$2y$10$c0s768p52hE/JJcfADPl6el1gtMZ83smaWNCK4x9XSMnEqSlZyva6', 0x736a2e706e67, '2021-04-19'),
(9, 'Dinesh Jain', 'dineshjain33@gmail.com', '1234567890', '$2y$10$LxiGbBTaDqFRHNBd4t.OLehTZiUk86ParE5vJccIgVmaQmcgYPeO.', 0x6d616e6b72697320636f70792e6a7067, '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_student_signup`
--

CREATE TABLE `admin_student_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_student_signup`
--

INSERT INTO `admin_student_signup` (`id`, `name`, `email`, `rollno`, `password`, `dob`, `mobile`, `gender`, `address`, `state`, `country`, `pincode`, `course`, `branch`, `semester`, `image`) VALUES
(28, 'manish goyal', 'goyalmanish3333@gmail.com', '17esbcs009', '$2y$10$3EsArLBcORbb2ZKQhiUWg.6rOOZlN5HNj/7OBwM2hot0wb0Mr3aWS', '1998-12-09', '7976517457', 'Male', 'plot no 2/5 flat no G-1 ganesh colony narsingh nagar jhotwara jaipur', 'Rajasthan', 'India', '302012', 'B.tech', 'Computer Science', 'VIIIth', 0x494d475f32303230313132325f3036333731385f3138362e6a7067),
(29, 'monu marmat', 'monumamat33@gmail.com', '17esbcs013', '$2y$10$UdGV/A/was6M81aI7WFqx.2I3RYHm8amh5h5ffgdyO9Yj01.VU7ae', '2021-04-20', '0123456789', 'Male', 'sawaimadhopur', 'Rajasthan', 'India', '302012', 'B.tech', 'Computer Science', 'VIIIth', 0x736a2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_signup`
--

CREATE TABLE `faculty_signup` (
  `id` int(100) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `dt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `course`, `branch`, `semester`, `notes`) VALUES
(1, 'B.tech', 'Computer Science', 'VIIIth', 'PCM notes.docx');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `lecture` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `name`, `rollno`, `faculty_name`, `lecture`, `attendance`, `dt`) VALUES
(22, 'manish goyal', '17esbcs009', 'Tufan Mukherjee', 'IVth', 'Present', '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `student_signup`
--

CREATE TABLE `student_signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course`, `branch`, `semester`, `subject`, `full_name`) VALUES
(14, 'B.tech', 'Computer Science', 'VIIIth', 'analysis of algorithim', 'Tufan Mukherjee'),
(19, 'B.tech', 'Computer Science', 'VIIIth', 'Artificial Intelligence', 'Dinesh Jain');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `course`, `branch`, `semester`, `type`, `image`) VALUES
(8, 'B.tech', 'Computer Science', 'VIIIth', 'Class', 0x736a2e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_faculty_signup`
--
ALTER TABLE `admin_faculty_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_student_signup`
--
ALTER TABLE `admin_student_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_signup`
--
ALTER TABLE `faculty_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_signup`
--
ALTER TABLE `student_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_faculty_signup`
--
ALTER TABLE `admin_faculty_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_student_signup`
--
ALTER TABLE `admin_student_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `faculty_signup`
--
ALTER TABLE `faculty_signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_signup`
--
ALTER TABLE `student_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
