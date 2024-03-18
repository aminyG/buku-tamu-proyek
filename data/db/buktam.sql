-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2021 at 01:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

USE bukutamu2;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Table structure for table `buktam`
CREATE TABLE `buktam` (
  `id_buktam` INT AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(50),
  `instansi` VARCHAR(50) NOT NULL,
  `hp` VARCHAR(12) NOT NULL,
  `menemui` ENUM('kepsek', 'humas', 'kurikulum', 'ketenagaan', 'sarana', 'tu', 'Lainnya') NOT NULL,
  `keperluan` TEXT NOT NULL,
  `tanggal` DATE NOT NULL DEFAULT CURRENT_DATE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `buktam`
INSERT INTO `buktam` (`nama`, `instansi`, `hp`, `menemui`, `keperluan`, `tanggal`) VALUES
('John Doe', 'PT. ABC', '081234567890', 'kepsek', 'Pertemuan terkait program kerjasama antara SMKN 2 dan perusahaan', '2024-03-15'),
('Jane Smith', 'Universitas XYZ', '085678901234', 'kurikulum', 'Konsultasi tentang kurikulum baru', '2024-03-15'),
('Alice Johnson', 'Perusahaan KLM', '087654321098', 'sarana', 'Permohonan perbaikan fasilitas laboratorium', '2024-03-14'),
('Bob Wilson', 'Kantor Pemerintah', '081234567890', 'humas', 'Wawancara untuk publikasi acara sekolah', '2024-03-14'),
('Charlie Brown', 'Lembaga Swadaya Masyarakat', '081234567890', 'Lainnya', 'Pertanyaan umum tentang pendaftaran siswa baru', '2024-03-13');

-- Table structure for table `login`
CREATE TABLE `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `login`
INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '123456');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
