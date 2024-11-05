-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 07:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpersama`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nokpguru` varchar(12) NOT NULL,
  `namaguru` varchar(50) NOT NULL,
  `jawatanguru` varchar(30) NOT NULL,
  `gambarguru` blob NOT NULL,
  `passwordguru` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nokpguru`, `namaguru`, `jawatanguru`, `gambarguru`, `passwordguru`) VALUES
('680912347890', 'Ali bin Abu', 'Ketua Guru Penasihat', 0x6d656e50726f66696c652e6a7067, '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `kodkeputusan` int(5) NOT NULL,
  `kodpertandingan` int(5) NOT NULL,
  `nokppeserta1` varchar(12) NOT NULL,
  `nokppeserta2` varchar(12) NOT NULL,
  `nokppeserta3` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`kodkeputusan`, `kodpertandingan`, `nokppeserta1`, `nokppeserta2`, `nokppeserta3`) VALUES
(11, 11, '091225108970', '780912123456', '780912345677');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `nokpmurid` varchar(12) NOT NULL,
  `namamurid` varchar(50) NOT NULL,
  `kelasmurid` varchar(30) NOT NULL,
  `jawatanmurid` varchar(30) NOT NULL,
  `gambarmurid` blob DEFAULT NULL,
  `yuran` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nokpmurid`, `namamurid`, `kelasmurid`, `jawatanmurid`, `gambarmurid`, `yuran`) VALUES
('010929091234', 'Sarah', '5 Sains Tulen', 'Ahli Biasa', NULL, 10.00),
('030908107925', 'Alex ', '5 Sains Teknologi', 'Pengerusi Persama', 0x706578656c732d6974616c6f2d6d656c6f2d323337393030342e6a7067, 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `kodpertandingan` int(5) NOT NULL,
  `kodprogram` int(5) NOT NULL,
  `namapertandingan` varchar(30) NOT NULL,
  `tarikhpertandingan` date NOT NULL,
  `gambarpertandingan` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`kodpertandingan`, `kodprogram`, `namapertandingan`, `tarikhpertandingan`, `gambarpertandingan`) VALUES
(11, 7, 'Science Show', '2020-10-01', 0x70686f746f5f323032302d30392d32325f30392d34372d31332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nokppeserta` varchar(12) NOT NULL,
  `kodpertandingan` int(5) NOT NULL,
  `namapeserta` varchar(30) NOT NULL,
  `kelaspeserta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nokppeserta`, `kodpertandingan`, `namapeserta`, `kelaspeserta`) VALUES
('091225108970', 11, 'Ali', '5 Sains Teknologi'),
('780912123456', 11, 'Fatin', '5 Sains Perakaunan'),
('780912345677', 11, 'Abu', '5 Sains Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `kodprogram` int(5) NOT NULL,
  `nokpguru` varchar(12) NOT NULL,
  `nokpmurid` varchar(12) NOT NULL,
  `namaprogram` varchar(30) NOT NULL,
  `tarikhmula` date NOT NULL,
  `tarikhtamat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`kodprogram`, `nokpguru`, `nokpmurid`, `namaprogram`, `tarikhmula`, `tarikhtamat`) VALUES
(7, '680912347890', '010929091234', 'Karnival Sains', '2020-09-29', '2020-10-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nokpguru`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`kodkeputusan`),
  ADD KEY `kodpertandingan` (`kodpertandingan`),
  ADD KEY `nokppeserta1` (`nokppeserta1`),
  ADD KEY `nokppeserta2` (`nokppeserta2`),
  ADD KEY `nokppeserta3` (`nokppeserta3`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nokpmurid`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`kodpertandingan`),
  ADD KEY `kodprogram` (`kodprogram`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nokppeserta`),
  ADD KEY `kodpertandingan` (`kodpertandingan`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`kodprogram`),
  ADD KEY `nokpguru` (`nokpguru`),
  ADD KEY `nokpmurid` (`nokpmurid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `kodkeputusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pertandingan`
--
ALTER TABLE `pertandingan`
  MODIFY `kodpertandingan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `kodprogram` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD CONSTRAINT `keputusan_ibfk_2` FOREIGN KEY (`kodpertandingan`) REFERENCES `pertandingan` (`kodpertandingan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keputusan_ibfk_3` FOREIGN KEY (`nokppeserta1`) REFERENCES `peserta` (`nokppeserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keputusan_ibfk_4` FOREIGN KEY (`nokppeserta2`) REFERENCES `peserta` (`nokppeserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keputusan_ibfk_5` FOREIGN KEY (`nokppeserta3`) REFERENCES `peserta` (`nokppeserta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `pertandingan_ibfk_1` FOREIGN KEY (`kodprogram`) REFERENCES `program` (`kodprogram`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`kodpertandingan`) REFERENCES `pertandingan` (`kodpertandingan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`nokpguru`) REFERENCES `guru` (`nokpguru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`nokpmurid`) REFERENCES `murid` (`nokpmurid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
