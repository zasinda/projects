-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkstore`
--

CREATE TABLE `produkstore` (
  `kode` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `stok` enum('habis','tersedia') NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkstore`
--

INSERT INTO `produkstore` (`kode`, `nama`, `kategori`, `harga`, `foto`, `detail`, `stok`, `tanggal_masuk`) VALUES
(1, 'Album Raisa', 'I-POP', 100000, 'raisa.jpeg', 'Album Raisa Handmade - CD terbatas.', 'tersedia', '2023-01-11 04:01:03'),
(2, 'Album 5SOS', 'WESTERN', 280000, '5soss.jpeg', 'Album 5SOS - Youngbload', 'tersedia', '2023-01-11 04:21:46'),
(3, 'Album EXO', 'K-POP', 285000, 'loveshot.jpeg', 'Album EXO - LOVE SHOT', 'tersedia', '2023-01-11 04:39:43'),
(4, 'Album Unity', 'I-POP', 295000, 'unity.jpg', 'Album Unity - In Diversity', 'tersedia', '2023-01-11 04:43:26'),
(5, 'Album BTS', 'K-POP', 280000, 'butter.jpeg', 'Album BTS -Butter', 'tersedia', '2023-01-11 04:44:32'),
(6, 'Album NCT', 'K-POP', 300000, 'nct.jpeg', 'NCT Resonance - Arrival ver.', 'tersedia', '2023-01-11 04:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `userstore`
--

CREATE TABLE `userstore` (
  `user_id` int(5) NOT NULL,
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstore`
--

INSERT INTO `userstore` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkstore`
--
ALTER TABLE `produkstore`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `userstore`
--
ALTER TABLE `userstore`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkstore`
--
ALTER TABLE `produkstore`
  MODIFY `kode` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userstore`
--
ALTER TABLE `userstore`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
