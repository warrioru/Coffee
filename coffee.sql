-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 10:56 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `id` int(11) NOT NULL,
  `cardtype` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `expirymonth` varchar(100) NOT NULL,
  `expiryyear` varchar(100) NOT NULL,
  `cvvcode` varchar(100) NOT NULL,
  `cardname` varchar(100) NOT NULL,
  `entercode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coffeprefdetails`
--

CREATE TABLE `coffeprefdetails` (
  `id` int(11) NOT NULL,
  `Bytaste` varchar(100) NOT NULL,
  `Grindbeans` varchar(100) NOT NULL,
  `Coffedrink` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Promocode` varchar(100) NOT NULL,
  `Coffeetype` varchar(100) NOT NULL,
  `Coffechose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `creditcardtype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `name`, `email`, `password`, `confirmpassword`, `address`, `postalcode`, `phone`, `creditcardtype`) VALUES
(1, 'hi', 'hi@hi.com', 'hi@hi.com', 'hi', 'hihihi', 'hihi', 'hihihi', 'visa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffeprefdetails`
--
ALTER TABLE `coffeprefdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coffeprefdetails`
--
ALTER TABLE `coffeprefdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
