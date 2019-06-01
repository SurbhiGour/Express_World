-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 07:46 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `express_track_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'express_world', 'express_world@2019');

-- --------------------------------------------------------

--
-- Table structure for table `create`
--

CREATE TABLE IF NOT EXISTS `create` (
  `id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create`
--

INSERT INTO `create` (`id`, `name`, `email`, `subject`, `message`) VALUES
(15, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'work information surbhi'),
(16, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'fasgsurbhi work information surbhi'),
(17, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'info@expressworldlogistics.com'),
(18, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'express@2019'),
(19, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'express@2019'),
(20, 'surbhi gour', 'surbhi@e-bc.in', 'work information surbhi', 'expressworld2019@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(25) NOT NULL,
  `airway_bno` varchar(100) NOT NULL,
  `txt_date` date NOT NULL,
  `shipper` varchar(100) NOT NULL,
  `connection` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `trackno` varchar(100) NOT NULL,
  `carrier` varchar(100) NOT NULL,
  `record_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `airway_bno`, `txt_date`, `shipper`, `connection`, `weight`, `destination`, `trackno`, `carrier`, `record_date`) VALUES
(1, '777777', '2019-03-04', 'aa', 'UPS', '43', 'dd', '5775', 'gfdfg', '2019-03-30'),
(2, '123456', '2019-03-04', 'gfg', 'ARAMEX', '43', 'indore', '1', 'cc', '2019-03-30'),
(3, '456321', '2019-04-02', 'gfg', 'DHL', '43', 'dd', '123', 'cc', '2019-04-01'),
(4, '123456', '2019-04-05', 'gfg', 'UPS', '575', 'dd', '1', 'gfdfg', '0000-00-00'),
(5, '554664', '2019-04-03', 'aa', 'FEDEX', '43', 'fgfh', '5775', 'cc', '2019-04-01'),
(6, '456987', '2019-04-09', 'ff', 'DTDC', '67', 'Mumbai', '523', 'gg', '2019-04-01'),
(8, '652366', '2019-04-02', 'surbhi', 'DTDC', '1.5', 'Mumbai', '523', 'pooja', '2019-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `t_id` int(11) NOT NULL,
  `t_abno1` varchar(10) NOT NULL,
  `t_abno2` varchar(10) NOT NULL,
  `t_carrier` varchar(100) NOT NULL,
  `t_tid` varchar(10) NOT NULL,
  `t_link` varchar(500) NOT NULL,
  `t_record_date` date NOT NULL,
  `t_update_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`t_id`, `t_abno1`, `t_abno2`, `t_carrier`, `t_tid`, `t_link`, `t_record_date`, `t_update_date`) VALUES
(1, '465', '798', 'fedex', '1000', 'http://www.fedex.com', '2017-05-02', '2017-05-03'),
(2, '159', '345', 'abc', '2000', 'http://www.abc.com', '2017-05-03', '2017-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `create`
--
ALTER TABLE `create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `create`
--
ALTER TABLE `create`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
