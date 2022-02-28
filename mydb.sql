-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 10:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE `personnes` (
  `ID` char(65) NOT NULL,
  `First Name` varchar(65) NOT NULL,
  `Last Name` varchar(65) NOT NULL,
  `Date of Birth` date NOT NULL,
  `department` varchar(65) NOT NULL,
  `Salary` decimal(65,0) NOT NULL,
  `Function` varchar(65) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`ID`, `First Name`, `Last Name`, `Date of Birth`, `department`, `Salary`, `Function`, `Photo`) VALUES
('1', 'Kurtis', 'Kirlin', '1987-02-08', 'Solana Beach', '7245', 'Furniture Finisher', ''),
('13', 'oussama', 'FICGTALI', '2022-02-01', 'TANGER', '20000', 'Direct', 'back.png'),
('2', 'Noemie', 'Gerlach', '1994-05-24', 'Solana Beach', '7546', 'Welder', ''),
('3', 'Aurore', 'Schaefer', '1990-11-02', 'Solana Beach', '2042', 'Dentist', ''),
('4', 'Meagan', 'Kessler', '1985-04-12', 'Rancho Santa Fe', '7472', 'Graphic Designer', ''),
('5', 'Charity', 'Emard', '1994-03-04', 'San Diego', '6824', 'Construction', ''),
('6', 'Delbert', 'Prosacco', '1974-07-10', 'Del Mar', '9533', 'Metal Pourer and Caster', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
