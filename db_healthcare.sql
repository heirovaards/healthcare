-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 04:38 PM
-- Server version: 10.3.10-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `roles`) VALUES
('admin1', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` varchar(50) NOT NULL,
  `disease_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`) VALUES
('1', 'communicable disease'),
('2', 'non-communicable disease');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` varchar(150) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `password`, `roles`) VALUES
('950605035987', 'zakiah', '123', '2');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `disease_name` varchar(200) NOT NULL,
  `disease_id` varchar(100) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_date` date NOT NULL,
  `patient_gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `disease_name`, `disease_id`, `patient_name`, `patient_date`, `patient_gender`) VALUES
(4, 'Fever', 'Communicable Disease', 'bgcweertyy', '2018-11-20', 'Female'),
(5, 'Fever', 'Communicable Disease', 'hjjk', '2018-11-22', 'Male'),
(6, 'Fever', 'Communicable Disease', 'bgcwere', '2018-11-19', 'Male'),
(7, 'Fever', 'Communicable Disease', 'adiraaa akdnasdsadad', '2018-11-14', 'Female'),
(8, 'High Blood Pressure', 'Non-Communicable Disease', 'jancuk', '2018-11-22', 'Female'),
(9, 'Fever', 'Communicable Disease', 'test', '2018-11-22', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `birthdate` date NOT NULL,
  `contact_no` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `email`, `gender`, `birthdate`, `contact_no`) VALUES
('nnn', 'nan@gmail.com', '', '2018-11-01', '2345'),
('nurul n', 'nurulnabihah6645@gmail.com', '', '2018-11-03', '2348');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
