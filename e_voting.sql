-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 07:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `phone_number` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_id`, `LastName`, `FirstName`, `phone_number`, `email`, `password`) VALUES
(1, '9d190021a', 'Herrara', 'Lorenzo', 173763233, 'lorenzojayh@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate` int(11) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `group_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contactNo`, `email`, `password`) VALUES
('9d190021a', 'isabellebitay', '213214512', 'isabelle123@yahoo.co', '09217642288a'),
('D', 'Yoo', '1866257770', 'yoo171@gmail.com', 'At27736G'),
('D190094B', 'Yoo Lian Hao', '01866257770', 'lianhao171@gmail.com', 'AT27736G'),
('enzojay', 'enzo jay', '0173763233', 'lorenzojayherrera@ya', '09217642288'),
('test', 'testname', '123456789', 'test@yahoo.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `contactNo`, `email`) VALUES
('9d190021a', 'isabellebitay', '213214512', 'isabelle123@yahoo.co'),
('D', 'Yoo', '1866257770', 'yoo171@gmail.com'),
('D190094B', 'Yoo Lian Hao', '01866257770', 'lianhao171@gmail.com'),
('enzojay', 'enzo jay', '0173763233', 'lorenzojayherrera@ya'),
('test', 'testname', '123456789', 'test@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `voters_profile`
--

CREATE TABLE `voters_profile` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters_profile`
--

INSERT INTO `voters_profile` (`id`, `name`, `contactNo`, `email`) VALUES
('9d190021a', 'isabellebitay', '213214512', 'isabelle123@yahoo.co'),
('D', 'Yoo', '1866257770', 'yoo171@gmail.com'),
('D190094B', 'Yoo Lian Hao', '01866257770', 'lianhao171@gmail.com'),
('enzojay', 'enzo jay', '0173763233', 'lorenzojayherrera@ya'),
('test', 'testname', '123456789', 'test@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters_profile`
--
ALTER TABLE `voters_profile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
