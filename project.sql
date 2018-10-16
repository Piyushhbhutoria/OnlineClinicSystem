-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 10:39 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Phoneno`, `Password`) VALUES
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
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Dp` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `Name`, `Email`, `Dob`, `Gender`, `Address`, `Phoneno`, `Password`, `Dp`) VALUES
(1, 'kushagra', 'email@gmail.com', '2017-06-30', 'Male', 'anything', '9830768030', '1234', 'clientdp/7729_Jason_Bradburyglass.jpg'),
(2, 'Saharsh Modi', 'saharsh@gmail.com', '0000-00-00', 'Male', 'something', '9883085934', '1234', '');

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
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Dp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Email`, `Dob`, `Gender`, `Address`, `Phoneno`, `Password`, `Fees`, `Category`, `Dp`) VALUES
(1, 'Ross Gellar', 'ross@gmail.com', '2017-07-01', 'Male', 'F.R.I.E.N.D.S', '9830768030', '1234', 500, 'Paleantologist', 'docdp/7729_Jason_Bradburyglass.jpg'),
(3, 'Kushagra Agarwal', 'kushagra@gmail.com', '1999-03-27', 'Male', 'VIT University, Near Katpadi Road', '9568414264', '1234', 500, 'ECG', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_app`
--

CREATE TABLE `doctor_app` (
  `Id` int(11) NOT NULL,
  `Doc_name` text NOT NULL,
  `App_date` date NOT NULL,
  `App_time` time NOT NULL,
  `User_id` int(11) NOT NULL,
  `User_name` text NOT NULL,
  `Report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_app`
--

INSERT INTO `doctor_app` (`Id`, `Doc_name`, `App_date`, `App_time`, `User_id`, `User_name`, `Report`) VALUES
(4, 'Ross Gellar', '2018-12-12', '00:12:00', 1, 'test', ''),
(6, 'Kushagra Agarwal', '2019-12-12', '12:00:00', 1, 'kushagra', '');

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
(1, 'Haemoglobin', 1500),
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
  `Test_name` varchar(30) NOT NULL,
  `Test_time` time NOT NULL,
  `Test_date` date NOT NULL,
  `User_id` int(11) NOT NULL,
  `Report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_appointment`
--

INSERT INTO `test_appointment` (`Id`, `Test_name`, `Test_time`, `Test_date`, `User_id`, `Report`) VALUES
(3, 'Digital X-Ray', '12:00:00', '2018-12-12', 1, '');

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
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_appointment`
--
ALTER TABLE `test_appointment`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctor_app`
--
ALTER TABLE `doctor_app`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `test_appointment`
--
ALTER TABLE `test_appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
