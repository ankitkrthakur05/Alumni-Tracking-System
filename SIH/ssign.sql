-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 05:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `ssign`
--

CREATE TABLE `ssign` (
  `sname` text NOT NULL,
  `sfname` text NOT NULL,
  `smname` text NOT NULL,
  `spass` varchar(18) NOT NULL,
  `sdate` int(2) NOT NULL,
  `smonth` text NOT NULL,
  `syear` int(4) NOT NULL,
  `srnumb` int(18) NOT NULL,
  `sbf` int(10) NOT NULL,
  `sbt` int(4) NOT NULL,
  `sphone` int(10) NOT NULL,
  `splace` varchar(100) NOT NULL,
  `smail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssign`
--

INSERT INTO `ssign` (`sname`, `sfname`, `smname`, `spass`, `sdate`, `smonth`, `syear`, `srnumb`, `sbf`, `sbt`, `sphone`, `splace`, `smail`) VALUES
('Himani', ' abc', 'xyz', 'jimmy420', 1, 'January', 2010, 123456, 2000, 2003, 2147483647, 'no', 'abc2gmail.com'),
('anmol', ' sunil', 'parmda', '123456', 31, 'December', 1999, 1903206, 2010, 2014, 2147483647, 'no', 'anmolsharma2404@gmail.com'),
('paras', ' abc', 'xyz', 'jimmy420', 1, 'January', 2010, 12345678, 2000, 2003, 2147483647, 'no', 'abc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ssign`
--
ALTER TABLE `ssign`
  ADD PRIMARY KEY (`srnumb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
