-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 07:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `nama` varchar(30) NOT NULL,
  `alamat email` varchar(50) NOT NULL,
  `no telp` varchar(20) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magang`
--

INSERT INTO `magang` (`nama`, `alamat email`, `no telp`, `pesan`) VALUES
('ima', 'ima12@gmail.com', '085239313911', 'apakah masi ada'),
('kamu', 'kamu34@gmail.com', '082340179012', 'saya pesan 20');

-- --------------------------------------------------------

--
-- Table structure for table `magang1`
--

CREATE TABLE `magang1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_kirim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magang2`
--

CREATE TABLE `magang2` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magang2`
--

INSERT INTO `magang2` (`id`, `nama`, `email`, `no_telp`, `pesan`, `created_at`) VALUES
(2, 'fa', 'sadasd', '', 'dsasda', '2024-12-21 06:02:17'),
(3, 'dasdas', 'adsasda', '', 'daad', '2024-12-21 06:02:17'),
(4, 'bghg', 'ghgh2gmail.com', '085239313911', 'dasas', '2024-12-21 06:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `magang3`
--

CREATE TABLE `magang3` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `magang1`
--
ALTER TABLE `magang1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magang2`
--
ALTER TABLE `magang2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magang3`
--
ALTER TABLE `magang3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `magang2`
--
ALTER TABLE `magang2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `magang3`
--
ALTER TABLE `magang3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
