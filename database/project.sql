-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2019 at 09:38 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Phone`, `Password`) VALUES
(2, 'admin@gmail.com', '9830768030', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Dp` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `Name`, `Email`, `Dob`, `Gender`, `Address`, `Phone`, `Password`, `Dp`) VALUES
(1, 'Piyushh Bhutoria', 'email@gmail.com', '2017-06-30', 'Male', 'anything.', '9830768030', '1234', 'clientdp/7729_Jason_Bradburyglass.jpg'),
(8, 'Piyush Bhutoria', 'piyush.bhutoria123@gmail.com', '1998-12-12', 'Male', '152/6 hardutt Rai Chamaria', '09830768030', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Dp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Email`, `Dob`, `Gender`, `Address`, `Phone`, `Password`, `Fees`, `Category`, `Dp`) VALUES
(1, 'Ross Gellar', 'ross@gmail.com', '2017-07-01', 'Male', 'F.R.I.E.N.D.S.', '9830768030', '1234', 500, 'Paleantologist', 'docdp/7729_Jason_Bradburyglass.jpg'),
(4, 'Piyush Bhutoria', 'piyush.bhutoria98@gmail.com', '1998-12-12', 'Male', '152/6 hardutt Rai Chamaria, A Block', '09830768030', '123456', 500, 'dentist', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_app`
--

CREATE TABLE `doctor_app` (
  `Id` int(11) NOT NULL,
  `Doctor_id` int(11) NOT NULL,
  `App_date` date NOT NULL,
  `App_time` time NOT NULL,
  `Users_id` int(11) NOT NULL,
  `Report` text NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_app`
--

INSERT INTO `doctor_app` (`Id`, `Doctor_id`, `App_date`, `App_time`, `Users_id`, `Report`, `Status`) VALUES
(6, 1, '2019-12-12', '12:00:00', 1, '', ''),
(8, 1, '2019-09-25', '00:12:00', 1, '', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(20) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `test_cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Id` int(11) NOT NULL,
  `Test_id` int(11) NOT NULL,
  `Test_time` time NOT NULL,
  `Test_date` date NOT NULL,
  `Users_id` int(11) NOT NULL,
  `Report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_appointment`
--

INSERT INTO `test_appointment` (`Id`, `Test_id`, `Test_time`, `Test_date`, `Users_id`, `Report`) VALUES
(4, 5, '12:12:00', '2019-09-12', 1, ''),
(7, 11, '12:12:00', '2019-09-24', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctor_app`
--
ALTER TABLE `doctor_app`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Users_id` (`Users_id`),
  ADD KEY `Doctor_id` (`Doctor_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_appointment`
--
ALTER TABLE `test_appointment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Users_id` (`Users_id`),
  ADD KEY `Test_id` (`Test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_app`
--
ALTER TABLE `doctor_app`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `test_appointment`
--
ALTER TABLE `test_appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_app`
--
ALTER TABLE `doctor_app`
  ADD CONSTRAINT `doctor_app_ibfk_1` FOREIGN KEY (`Users_id`) REFERENCES `client` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_app_ibfk_2` FOREIGN KEY (`Doctor_id`) REFERENCES `doctor` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test_appointment`
--
ALTER TABLE `test_appointment`
  ADD CONSTRAINT `test_appointment_ibfk_1` FOREIGN KEY (`Users_id`) REFERENCES `client` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_appointment_ibfk_2` FOREIGN KEY (`Test_id`) REFERENCES `test` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
