-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 01:40 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal10`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Riska ', '12345'),
('Rama', 'rama'),
('Melisa', 'mel');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `NamaDepan` varchar(25) NOT NULL,
  `NamaBelakang` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `film` varchar(20) NOT NULL,
  `wisata` varchar(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`NamaDepan`, `NamaBelakang`, `email`, `nim`, `kelas`, `hobi`, `film`, `wisata`, `tgl`) VALUES
('Melisa', 'Mel', 'Melisa@gmail.com', 738468378, 'd3mi4104', 'Menggambar, Gambar', 'Sci-Fi', 'Bromo', '2018-11-07'),
('Riska', 'Sintia', 'riskasd84@gmail.com', 2147483647, 'd3mi4101', 'Menggambar', 'Romance', 'Lombok', '2018-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
