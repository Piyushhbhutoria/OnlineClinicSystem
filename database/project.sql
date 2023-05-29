-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2023 at 07:26 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `phone`, `password`) VALUES
(4, 'admin@gmail.com', '9830768030', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(90) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dp` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `dob`, `gender`, `address`, `phone`, `password`, `dp`) VALUES
(1, 'Piyushh Bhutoria', 'email@gmail.com', '2017-06-30', 'Male', 'anything.', '9830768030', '1234', 'clientdp/7729_Jason_Bradburyglass.jpg'),
(2, 'Piyush Bhutoria', 'piyush.bhutoria123@gmail.com', '1998-12-12', 'Male', '152/6 hardutt Rai Chamaria', '09830768030', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(90) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fees` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `dp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `dob`, `gender`, `address`, `phone`, `password`, `fees`, `category`, `dp`) VALUES
(1, 'Ross Gellar', 'ross@gmail.com', '2017-07-01', 'Male', 'F.R.I.E.N.D.S.', '9830768030', '1234', 500, 'Paleantologist', 'docdp/7729_Jason_Bradburyglass.jpg'),
(2, 'Piyush Bhutoria', 'piyush.bhutoria98@gmail.com', '1998-12-12', 'Male', '152/6 hardutt Rai Chamaria, A Block', '09830768030', '123456', 500, 'dentist', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_app`
--

CREATE TABLE `doctor_app` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `users_id` int(11) NOT NULL,
  `report` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_app`
--

INSERT INTO `doctor_app` (`id`, `doctor_id`, `app_date`, `app_time`, `users_id`, `report`, `status`) VALUES
(1, 1, '2019-12-12', '12:00:00', 1, '', 'Pending'),
(2, 1, '2019-09-25', '00:12:00', 1, '', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(20) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `test_cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_name`, `test_cost`) VALUES
(1, 'Haemoglobin', 150),
(4, 'Allergy', 500),
(5, ' Diabetes', 800),
(6, 'Blood Group Test', 200),
(7, 'Blood Test Package', 9500),
(8, 'Urine Test', 250),
(9, 'C.T.Scan(normal)', 1100),
(10, 'Ultrasonography', 750),
(11, 'Digital X-Ray', 500),
(12, 'Colour Doppler', 800),
(13, 'Digital E.E.G', 1200),
(14, 'Endoscopy', 3500),
(15, 'Health Check Up', 10000),
(16, 'E.C.G.', 200),
(17, 'Stool Test', 250),
(18, 'Colonoscopy', 8000),
(19, 'Angiography', 20000),
(20, 'Cholesterol Test', 500);

-- --------------------------------------------------------

--
-- Table structure for table `test_appointment`
--

CREATE TABLE `test_appointment` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_time` time NOT NULL,
  `test_date` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_appointment`
--

INSERT INTO `test_appointment` (`id`, `test_id`, `test_time`, `test_date`, `users_id`, `report`) VALUES
(1, 5, '12:12:00', '2019-09-12', 1, ''),
(2, 11, '12:12:00', '2019-09-24', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor_app`
--
ALTER TABLE `doctor_app`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `test_name` (`test_name`);

--
-- Indexes for table `test_appointment`
--
ALTER TABLE `test_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `users_id` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_app`
--
ALTER TABLE `doctor_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `test_appointment`
--
ALTER TABLE `test_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_app`
--
ALTER TABLE `doctor_app`
  ADD CONSTRAINT `doctor_app_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `doctor_app_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `test_appointment`
--
ALTER TABLE `test_appointment`
  ADD CONSTRAINT `test_appointment_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`),
  ADD CONSTRAINT `test_appointment_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
