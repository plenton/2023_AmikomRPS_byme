-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: May 27, 2024 at 04:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_dos` varchar(255) NOT NULL,
  `id_dos` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`username`, `password`, `nama_dos`, `id_dos`, `foto`) VALUES
('Halim', '1234', 'Muhammad Abdul Halim', '22014875', 'desainrps.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_matkul`
--

CREATE TABLE `table_matkul` (
  `kode_matkul` int(15) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `materi_per1` varchar(1000) NOT NULL,
  `materi_per2` varchar(1000) NOT NULL,
  `materi_per3` varchar(1000) NOT NULL,
  `materi_per4` varchar(1000) NOT NULL,
  `materi_per5` varchar(1000) NOT NULL,
  `materi_per6` varchar(1000) NOT NULL,
  `materi_per7` varchar(1000) NOT NULL,
  `materi_per8` varchar(1000) NOT NULL,
  `materi_per9` varchar(1000) NOT NULL,
  `materi_per10` varchar(1000) NOT NULL,
  `materi_per11` varchar(1000) NOT NULL,
  `materi_per12` varchar(1000) NOT NULL,
  `materi_per13` varchar(1000) NOT NULL,
  `materi_per14` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_matkul`
--

INSERT INTO `table_matkul` (`kode_matkul`, `matkul`, `semester`, `prodi`, `deskripsi`, `materi_per1`, `materi_per2`, `materi_per3`, `materi_per4`, `materi_per5`, `materi_per6`, `materi_per7`, `materi_per8`, `materi_per9`, `materi_per10`, `materi_per11`, `materi_per12`, `materi_per13`, `materi_per14`) VALUES
(2201, 'Calculus I', 'semester genap', 'D3 TEKNIK INFORMATIKA', 'cccccccccccccccccc', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2202, 'Calculus', 'PILIH SEMESTER', 'D3 TEKNIK INFORMATIKA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2204, 'Logika', 'semester ganjil', 'S1 TENIK KOMPUTER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
