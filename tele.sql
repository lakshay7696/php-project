-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 04:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tele`
--

-- --------------------------------------------------------

--
-- Table structure for table `cll`
--

CREATE TABLE `cll` (
  `firstname` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cll`
--

INSERT INTO `cll` (`firstname`, `phone`, `email`, `address`) VALUES
('himanshu', '654987321', 'hs@gmail.com', 'sec4');

-- --------------------------------------------------------

--
-- Table structure for table `soet`
--

CREATE TABLE `soet` (
  `firstname` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soet`
--

INSERT INTO `soet` (`firstname`, `phone`, `email`, `address`) VALUES
('lakshay', '8130219717', 'abc@gmail.com', '31/9'),
('lc', '9468117799', 'a@gmail.com', '32/9'),
('aaa', '321654987', 'asda@gmail.com', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `sol`
--

CREATE TABLE `sol` (
  `firstname` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sol`
--

INSERT INTO `sol` (`firstname`, `phone`, `email`, `address`) VALUES
('karan', '123467892', 'kb@gmail.com', 'fbd\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `som`
--

CREATE TABLE `som` (
  `firstname` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `som`
--

INSERT INTO `som` (`firstname`, `phone`, `email`, `address`) VALUES
('adi', '321654987', 'ad@gmail.com', 'knl');

-- --------------------------------------------------------

--
-- Table structure for table `spa`
--

CREATE TABLE `spa` (
  `firstname` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spa`
--

INSERT INTO `spa` (`firstname`, `phone`, `email`, `address`) VALUES
('srv', '987654321', 'srv@gmail.com', 'ggn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `firstname`, `email`, `address`, `phone`, `type`) VALUES
('lakshay7696', '$2y$10$FYEfw3/pjKxPBjgzKINon.pMaN79DZ8neUSPtrLFkf2UOj/vElVQK', 'lakshay', 'abc@gmail.com', 'hno 31 sector 7', '8130219717', 'soet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
