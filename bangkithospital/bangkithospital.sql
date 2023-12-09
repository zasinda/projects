-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2023 at 09:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangkithospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat_dokter` varchar(100) NOT NULL,
  `pengalaman_dokter` varchar(50) NOT NULL,
  `alumni_dokter` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_spesialis` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat_dokter`, `pengalaman_dokter`, `alumni_dokter`, `gambar`, `id_spesialis`) VALUES
(1, 'Dr. Ibnu Arbianto Pratama Sp.KK', 'Ring Road Utara', '5', 'Universitas Islam Indonesia', 'doctors-35.jpg', 5),
(2, 'Dr. Abdi Sp.KK', 'Ring Road Utara', '3', 'Universitas Kristen Duta Wacana', 'doctors-14.jpg', 5),
(3, 'Dr Rasera Sp.A', 'Ring Road Utara', '3', 'Universitas Kristen Duta Wacana', 'doctors-44.jpg', 1),
(4, 'Dr. Dzaka Sp.JP', 'Ring Road Utara', '5', 'Universitas Islam Indonesia', 'doctors-22.jpg', 3),
(5, 'Dr. Maulana Sp.A', 'Ring Road Utara', '4', 'Universitas Islam Indonesia', 'doctors-36.jpg', 1),
(6, 'Dr. Azumar Sp.B', 'Ring Road Utara', '4', 'Universitas Amikom', 'doctors-15.jpg', 2),
(7, 'Dr. Zhilal', 'Ring Road Utara', '1', 'Universitas Islam Indonesia', 'testimonials-51.jpg', 6),
(8, 'Dr. Rudolf', 'Ring Road Utara', '6', 'Universitas Islam Indonesia', 'testimonials-11.jpg', 6),
(9, 'Dr. Throik Sp.PD', 'Ring Road Utara', '3', 'Universitas Kristen Duta Wacana', 'testimonials-4.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hari` int NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `usr_member` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ps_member` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_member` varchar(50) NOT NULL,
  `nohp_member` varchar(50) NOT NULL,
  `alamat_member` varchar(50) NOT NULL,
  `nik_member` varchar(50) NOT NULL,
  `jk_member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_lengkap`, `usr_member`, `ps_member`, `email_member`, `nohp_member`, `alamat_member`, `nik_member`, `jk_member`) VALUES
(5, 'Anton Kwang', 'aton11', '9d11edfd89ee2ef7cfb82e994f00ee21', 'antonkwang67@gmail.com', '08569951144', 'Jalan bantul raya no 1', '2515484856456464', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int NOT NULL,
  `Nama_obat` varchar(50) NOT NULL,
  `Deskripsi_obat` text NOT NULL,
  `Harga_obat` int NOT NULL,
  `Stok` int NOT NULL,
  `Manufaktur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `riwayat_penyakit` varchar(70) NOT NULL,
  `nik_pasien` int NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `id_dokter` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `Jk_pasien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `riwayat_penyakit`, `nik_pasien`, `gol_darah`, `id_dokter`, `gambar`, `Jk_pasien`) VALUES
(1, 'Hartanto', 'Jogja', 'Psorasis, Eksim', 2147483647, 'O', 1, '', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` int NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `id_hari` int NOT NULL,
  `id_dokter` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `spesialis`) VALUES
(1, 'Anak - Sp.A'),
(2, 'Bedah - Sp.B'),
(3, 'Jantung dan Pembulu Darah - Sp.JP'),
(4, 'Penyakit Dalam - Sp.PD'),
(5, 'Kulit dan Kelamin - Sp.KK'),
(6, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `temujanji`
--

CREATE TABLE `temujanji` (
  `id_temujanji` int NOT NULL,
  `id_member` int NOT NULL,
  `id_dokter` int NOT NULL,
  `sesi` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `temujanji`
--
ALTER TABLE `temujanji`
  ADD PRIMARY KEY (`id_temujanji`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temujanji`
--
ALTER TABLE `temujanji`
  MODIFY `id_temujanji` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Constraints for table `temujanji`
--
ALTER TABLE `temujanji`
  ADD CONSTRAINT `temujanji_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `temujanji_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
