-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 08:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skd27`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`, `role`) VALUES
(1, '@dmin123', '@dmin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `system` varchar(255) NOT NULL,
  `flight` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `pangkat`, `nrp`, `system`, `flight`, `tanggal`, `jam`) VALUES
(19, 'Muhammad Ikhwan Susanto', 'Serda ', '558287 ', 'ADM ', 'Flight B ', '2024-12-29', NULL),
(20, 'Dimas Yusuf Ramadani', 'Prada ', '559142  ', 'GSE ', 'Flight B ', '2025-01-01', NULL),
(26, 'Dimas Yusuf Ramadani', 'Prada ', '559142  ', 'GSE ', 'Flight B ', '2025-01-03', NULL),
(27, 'Dimas Yusuf Ramadani', 'Prada ', '559142  ', 'GSE ', 'Flight B ', '2025-01-07', '17:00:00'),
(28, 'Dimas Yusuf Ramadani', 'Prada ', '559142  ', 'GSE ', 'Flight B ', '2025-01-09', '08:37:00'),
(29, 'Dimas Yusuf Ramadani', 'Prada ', '559142  ', 'GSE ', 'Flight B ', '2025-01-10', '07:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `nrp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `system` varchar(255) NOT NULL,
  `flight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `pangkat`, `nrp`, `password`, `system`, `flight`) VALUES
(5, 'Dimas Yusuf Ramadani', 'Prada', '559142 ', '559142 ', 'GSE', 'Flight B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
