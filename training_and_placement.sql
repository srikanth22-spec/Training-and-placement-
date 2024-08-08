-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2021 at 01:34 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training_and_placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_note`
--

CREATE TABLE `add_note` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `rdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_note`
--

INSERT INTO `add_note` (`id`, `uname`, `com_name`, `contact`, `address`, `file`, `description`, `rdate`) VALUES
(2, 'cherry', 'HR', '987867546', 'thillai nagar, trichy', 'administrator.png', 'dfdfdfdf', 'Tue-May-21');

-- --------------------------------------------------------

--
-- Table structure for table `add_students`
--

CREATE TABLE `add_students` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rollno` bigint(20) NOT NULL,
  `dempatment` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `year` varchar(4) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  `percentage` float NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_students`
--

INSERT INTO `add_students` (`id`, `name`, `rollno`, `dempatment`, `address`, `year`, `fname`, `mname`, `contact`, `mailid`, `percentage`, `age`) VALUES
(1, 'cherry', 1001, 'B.SC. COMPUTER SCIEN', 'thillai nagar, trichy', '2019', 'mickey', 'minion', 9876756756, 'hr@extazee.in', 78, 23);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `compreg`
--

CREATE TABLE `compreg` (
  `id` int(11) NOT NULL,
  `comp_logo` varchar(500) NOT NULL,
  `reg_date` varchar(10) NOT NULL,
  `compname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mailid` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compreg`
--

INSERT INTO `compreg` (`id`, `comp_logo`, `reg_date`, `compname`, `address`, `mailid`, `phno`, `username`, `pass`, `status`) VALUES
(1, 'icon2.png', '', 'HR', 'thillai nagar, trichy', 'hr@extazee.in', 987867546, 'cherry', '1234', '0');

-- --------------------------------------------------------

--
-- Table structure for table `invite_request`
--

CREATE TABLE `invite_request` (
  `id` int(11) NOT NULL,
  `com_logo` varchar(1000) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `room_no` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite_request`
--

INSERT INTO `invite_request` (`id`, `com_logo`, `comp_name`, `contact`, `address`, `email`, `room_no`, `timing`, `status`, `rdate`) VALUES
(1, 'icon2.png', 'HR', '987867546', 'thillai nagar, trichy', 'hr@extazee.in', '109', '18:27', '1', 'Mon-May-21');
