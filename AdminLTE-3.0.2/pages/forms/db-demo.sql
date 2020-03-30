-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 05:56 PM
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
-- Database: `db-demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`nombre`, `matricula`, `correo`, `telefono`) VALUES
('', '', '', NULL),
('', '', '', NULL),
('12313', '123123', '123123@313', NULL),
('12313', '123123', '123123@313', NULL),
('', '', '', NULL),
('', '', '', NULL),
('', '', '', NULL),
('', '', '', NULL),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datos2`
--

CREATE TABLE `datos2` (
  `clave` varchar(50) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos2`
--

INSERT INTO `datos2` (`clave`, `carrera`) VALUES
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `datos3`
--

CREATE TABLE `datos3` (
  `nombre` varchar(50) DEFAULT NULL,
  `grupo` varchar(59) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos3`
--

INSERT INTO `datos3` (`nombre`, `grupo`) VALUES
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `datos4`
--

CREATE TABLE `datos4` (
  `matricula` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos4`
--

INSERT INTO `datos4` (`matricula`, `nombre`, `correo`, `telefono`) VALUES
('', '', '', ''),
('12', '12', '', ''),
('12', '13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `datos5`
--

CREATE TABLE `datos5` (
  `clave` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datos5`
--

INSERT INTO `datos5` (`clave`, `nombre`) VALUES
('', NULL),
('', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
