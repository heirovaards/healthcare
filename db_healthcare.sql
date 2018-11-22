-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 05:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
  `patient_id` varchar(150) NOT NULL,
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
('12345', 'fever', 'Non-Communicable Disease', 'bgc', '2018-11-18', 'f'),
('123456', 'Fever', 'Communicable Disease', 'qwery', '2018-11-16', 'Male'),
('12345676543', 'Heart Attack', 'Non-Communicable Disease', 'asdfvcxz', '2018-11-02', 'Male'),
('324234354657', 'fever', 'Communicable Disease', 'bgcweertyy', '2018-11-20', 'Female'),
('456789', 'Fever', 'Communicable Disease', 'hjjk', '2018-11-22', 'Male'),
('96857302844', 'fever', 'Communicable Disease', 'bgcwere', '2018-11-19', 'm'),
('987908088', 'Heart Attack', 'Non-Communicable Disease', 'adiraaa', '2018-11-02', 'Female');

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
  ADD PRIMARY KEY (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
