-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2018 at 12:55 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(30) NOT NULL,
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Phoneno`, `Password`) VALUES
(2, 'admin@gmail.com', '9830768030', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Dp` varchar(90) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Phoneno` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Dp` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `doctor_app`;
CREATE TABLE IF NOT EXISTS `doctor_app` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Doc_name` text NOT NULL,
  `App_date` date NOT NULL,
  `App_time` time NOT NULL,
  `Users_id` int(11) NOT NULL,
  `User_name` text NOT NULL,
  `Report` text NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_app`
--

INSERT INTO `doctor_app` (`Id`, `Doc_name`, `App_date`, `App_time`, `Users_id`, `User_name`, `Report`, `Status`) VALUES
(6, 'Kushagra Agarwal', '2019-12-12', '12:00:00', 1, 'kushagra', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(50) NOT NULL,
  `test_cost` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `test_appointment`;
CREATE TABLE IF NOT EXISTS `test_appointment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Test_name` varchar(30) NOT NULL,
  `Test_time` time NOT NULL,
  `Test_date` date NOT NULL,
  `Users_id` int(11) NOT NULL,
  `Report` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
