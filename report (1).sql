-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 11:05 AM
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
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(25) NOT NULL,
  `airway_bno` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `shipper` varchar(100) NOT NULL,
  `connection` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `trackno` varchar(100) NOT NULL,
  `carrier` varchar(100) NOT NULL,
  `record_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `airway_bno`, `date`, `shipper`, `connection`, `weight`, `destination`, `trackno`, `carrier`, `record_date`) VALUES
(42, '777777', '2019-03-04', 'aa', 'UPS', '43', 'dd', '5775', 'gfdfg', '2019-03-30'),
(43, '123456', '2019-03-04', 'gfg', 'ARAMEX', '43', 'fgfh', '1', 'cc', '2019-03-30'),
(44, '456321', '2019-04-02', 'gfg', 'DHL', '43', 'dd', '123', 'cc', '2019-04-01'),
(45, '123456', '2019-04-05', 'gfg', 'UPS', '575', 'dd', '1', 'gfdfg', '0000-00-00'),
(46, '554664', '2019-04-03', 'aa', 'FEDEX', '43', 'fgfh', '5775', 'cc', '2019-04-01'),
(47, '456987', '2019-04-09', 'ff', 'DTDC', '67', 'Mumbai', '523', 'gg', '2019-04-01'),
(48, '321654', '2019-04-10', 'gfg', 'TNT', '43', 'fgfh', '2', 'cc', '2019-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
