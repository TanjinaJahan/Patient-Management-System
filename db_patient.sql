-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 10:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `bill_no` int(30) NOT NULL,
  `date` int(50) NOT NULL,
  `room_charge` int(50) NOT NULL,
  `pathology_fees` int(50) NOT NULL,
  `doctor_fees` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_doctor`
--

CREATE TABLE `tb_doctor` (
  `d_id` int(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_doctor`
--

INSERT INTO `tb_doctor` (`d_id`, `d_name`, `dept`) VALUES
(0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_patient`
--

CREATE TABLE `tb_patient` (
  `p_id` int(30) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `p_age` varchar(50) NOT NULL,
  `p_gender` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_contact` int(50) NOT NULL,
  `admission_date` int(50) NOT NULL,
  `discharge_date` int(50) NOT NULL,
  `disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_patient`
--

INSERT INTO `tb_patient` (`p_id`, `p_name`, `password`, `p_age`, `p_gender`, `p_address`, `p_contact`, `admission_date`, `discharge_date`, `disease`) VALUES
(0, '', '', '', '', '', 0, 0, 0, ''),
(1, 'jjkm', '', 'jk', 'l;', 'gh', 0, 0, 0, 'jhj'),
(894, 'jjkkj', '', 'jjkjkk', 'hjhhjjkh', 'hhhjjh', 0, 0, 0, 'hjhjhjk'),
(6788, 'ghfgh', '', 'gfhfh', 'ghfgh', 'ghfghfh', 0, 0, 0, 'hfghfghngg'),
(45345, 'gguyguy', 'hjyjggkygg', 'huyguky', 'hhkjg', 'hgyg', 435453, 0, 0, 'dadad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `r_no` int(50) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `r_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `tb_doctor`
--
ALTER TABLE `tb_doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tb_patient`
--
ALTER TABLE `tb_patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`r_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
