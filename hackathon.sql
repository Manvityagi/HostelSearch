-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 02:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `house_no` varchar(30) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `emailid` varchar(30) NOT NULL,
  `offerid` varchar(30) NOT NULL,
  `orderid` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contactno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `emailid`, `password`, `contactno`) VALUES
('Sumit', 'bakshi', 'sumit121@gmail.com', '15487', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `facilties`
--

CREATE TABLE `facilties` (
  `name` int(11) NOT NULL,
  `hostelid` int(11) NOT NULL,
  `path` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ghaziabad`
--

CREATE TABLE `ghaziabad` (
  `name` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostelid` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostelimage`
--

CREATE TABLE `hostelimage` (
  `path` varchar(100) NOT NULL,
  `hostelid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `path` varchar(100) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamlanagar`
--

CREATE TABLE `kamlanagar` (
  `Name` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `path` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noida`
--

CREATE TABLE `noida` (
  `Name` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `northcampus`
--

CREATE TABLE `northcampus` (
  `Name` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offerimage`
--

CREATE TABLE `offerimage` (
  `path` varchar(100) NOT NULL,
  `offerid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offerid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offerid`, `name`, `price`, `description`, `availability`, `hostelid`) VALUES
('101', 'Maharaja sadan', '15000', 'Great rooms with all facilities', '3', '1101');

-- --------------------------------------------------------

--
-- Table structure for table `rohini`
--

CREATE TABLE `rohini` (
  `Name` varchar(30) NOT NULL,
  `hostelid` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rohini`
--

INSERT INTO `rohini` (`Name`, `hostelid`, `emailid`, `phoneno`, `path`) VALUES
('Maharaja sadan', '1101', 'arpit.jain@rocketmail.com', '9876543210', 'H1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `facilties`
--
ALTER TABLE `facilties`
  ADD PRIMARY KEY (`path`);

--
-- Indexes for table `ghaziabad`
--
ALTER TABLE `ghaziabad`
  ADD PRIMARY KEY (`hostelid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`path`);

--
-- Indexes for table `kamlanagar`
--
ALTER TABLE `kamlanagar`
  ADD PRIMARY KEY (`hostelid`);

--
-- Indexes for table `noida`
--
ALTER TABLE `noida`
  ADD PRIMARY KEY (`hostelid`);

--
-- Indexes for table `northcampus`
--
ALTER TABLE `northcampus`
  ADD PRIMARY KEY (`hostelid`);

--
-- Indexes for table `offerimage`
--
ALTER TABLE `offerimage`
  ADD PRIMARY KEY (`path`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexes for table `rohini`
--
ALTER TABLE `rohini`
  ADD PRIMARY KEY (`hostelid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
