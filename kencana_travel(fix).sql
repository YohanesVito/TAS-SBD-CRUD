-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 06:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kencana travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` varchar(2) NOT NULL,
  `diskon` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `diskon`) VALUES
('-', '0.00'),
('D1', '10000.00'),
('D2', '20000.00'),
('D3', '30000.00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`) VALUES
('KT001', 'Jason Jung', '0858321312'),
('KT002', 'Alfredo Gian Budiono', '0858321312'),
('KT003', 'Yonathan Christofer Darma', '0815734184'),
('KT004', 'James Joshua Septiadi. PY', '0858541310'),
('KT005', 'Jane Patricia Putri', '0814904857'),
('KT006', 'Daniel Kusuma Pratama', '0858907610'),
('KT007', 'Yoganica Tedjo Santoso', '0815031678'),
('KT008', 'Yossia Dwi Mahardika', '0858306336'),
('KT009', 'Daniel Candra Sugiyanto', '0858041319'),
('KT010', 'Carlos The Good Man . S', '0815951670'),
('KT011', 'Gabriel Manuel Tumakaka', '0858011790'),
('KT012', 'Immanuel Sindu Kristian P', '0858440079'),
('KT013', 'Joanes Vianney C', '0858323500'),
('KT014', 'Christan Farel Pamungkas', '0814821490'),
('KT015', 'Gideon Yunior Pamungkas', '0858093511'),
('KT016', 'Lukas Kurniawan', '0815010399'),
('KT017', 'Stevanus Visna Vembriarto', '0814900289'),
('KT018', 'Wisnu Rizal Wicaksono', '0858380511'),
('KT019', 'Michael Setiawan Sanjaya', '0858351116'),
('KT020', 'Yohanes Vito Rizki Darujati', '0815020588'),
('KT021', 'Elvira Effendi', '0858939920'),
('KT022', 'Renaldi Kristian Hartono', '0858390522'),
('KT023', 'Yacinthus Dheka Pratomo', '0858290689'),
('KT024', 'Ryo Altius Benito', '0814200655'),
('KT025', 'Sonny Christian', '0858801111'),
('KT026', 'Mishael Elian Dharmawan', '0858912099'),
('KT027', 'Petrus Affandi', '0858350422'),
('KT028', 'Romarthin Parningotan R', '0858311900'),
('KT029', 'Fifie July Agracetine', '0858670223'),
('KT030', 'Maria Isabella', '0858390922');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id_seat` varchar(3) NOT NULL,
  `seat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id_seat`, `seat`) VALUES
('S1', 1),
('S2', 2),
('S3', 3),
('S4', 4),
('S5', 5),
('S6', 6),
('S7', 7),
('S8', 8);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id_perjalanan` varchar(4) NOT NULL,
  `asal` varchar(12) NOT NULL,
  `tujuan` varchar(12) NOT NULL,
  `jam` time NOT NULL,
  `harga_tiket` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id_perjalanan`, `asal`, `tujuan`, `jam`, `harga_tiket`) VALUES
('T001', 'JAKARTA PUSA', 'JEBRES', '07:00:00', '300000.00'),
('T002', 'SERENGAN', 'YOGYAKARTA', '20:00:00', '100000.00'),
('T003', 'JEBRES', 'WONOGIRI', '09:15:00', '80000.00'),
('T004', 'SURAKARTA', 'KLATEN', '08:00:00', '40000.00'),
('T005', 'SURAKARTA', 'YOGYAKARTA', '07:30:00', '50000.00'),
('T006', 'LOMBOK BARAT', 'YOGYAKARTA', '21:00:00', '600000.00'),
('T007', 'SEMARANG', 'SURAKARTA', '06:30:00', '100000.00'),
('T008', 'LAMPUNG TENG', 'WONOGIRI', '08:30:00', '350000.00'),
('T009', 'SURAKARTA', 'PATI', '05:30:00', '100000.00'),
('T010', 'KALIMANTAN S', 'YOGYAKARTA', '22:00:00', '1750000.00'),
('T011', 'SULAWESI SEL', 'SURAKARTA', '20:30:00', '800000.00'),
('T012', 'PATI', 'YOGYAKARTA', '11:00:00', '100000.00'),
('T013', 'YOGYAKARTA', 'SEMARANG', '07:15:00', '100000.00'),
('T014', 'KLATEN', 'PATI', '08:00:00', '100000.00'),
('T015', 'WONOGIRI', 'SURAKARTA', '10:00:00', '80000.00'),
('T016', 'SURAKARTA', 'JAKARTA', '21:00:00', '400000.00'),
('T017', 'YOGYAKARTA', 'WONOGIRI', '06:15:00', '100000.00'),
('T018', 'BANJARNEGARA', 'YOGYAKARTA', '08:30:00', '80000.00'),
('T019', 'SURAKARTA', 'SEMARANG', '07:00:00', '100000.00'),
('T020', 'YOGYAKARTA', 'SEMARANG', '15:00:00', '100000.00'),
('T021', 'SURAKARTA', 'PATI', '11:30:00', '100000.00'),
('T022', 'KLATEN', 'SEMARANG', '17:00:00', '100000.00'),
('T023', 'YOGYAKARTA', 'SURAKARTA', '13:00:00', '50000.00'),
('T024', 'YOGYAKARTA', 'SEMARANG', '14:00:00', '100000.00'),
('T025', 'KALIMANTAN U', 'SEMARANG', '20:00:00', '800000.00'),
('T026', 'MAGELANG', 'JAKARTA', '09:00:00', '250000.00'),
('T027', 'SURAKARTA', 'SEMARANG', '19:00:00', '100000.00'),
('T028', 'YOGYAKARTA', 'JAKARTA', '08:15:00', '250000.00'),
('T029', 'KALIMANTAN U', 'JAKARTA', '19:00:00', '800000.00'),
('T030', 'NGAWI', 'MALANG', '06:30:00', '175000.00');

-- --------------------------------------------------------

--
-- Table structure for table `trip_order`
--

CREATE TABLE `trip_order` (
  `id_order` varchar(50) NOT NULL,
  `id_pelanggan` varchar(5) NOT NULL,
  `id_perjalanan` varchar(4) NOT NULL,
  `id_seat` varchar(3) NOT NULL,
  `id_diskon` varchar(2) DEFAULT NULL,
  `alamat_jemput` varchar(50) DEFAULT NULL,
  `alamat_antar` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_order`
--

INSERT INTO `trip_order` (`id_order`, `id_pelanggan`, `id_perjalanan`, `id_seat`, `id_diskon`, `alamat_jemput`, `alamat_antar`, `tanggal`) VALUES
('20201202008050584SLO-PTI0900/1067258', 'KT017', 'T009', 'S2 ', 'D1', 'Jl. Pahlawan No.15 Surakarta', 'Jl. Anggrek No. 99, Pati', '2020-12-02'),
('20201202008050584SLO-PTI0900/1067259', 'KT001', 'T009', 'S3 ', 'D3', 'Jl. Gunungsari No. 7 Surakarta', 'Jl. Anggrek No. 3, Pati', '2020-12-02'),
('20201204008050584SLO-SMG0900/1067260', 'KT012', 'T019', 'S4 ', 'D1', 'Jl. Mastrip No. 23 Surakarta', 'Jl. Ahmad Yani No. 22 Semarang', '2020-12-04'),
('20201204008050584YOG-SMG0900/1067261', 'KT010', 'T013', 'S1 ', '- ', 'Jl. Aditya No. 83 Yogyakarta', 'Jl. Ahmad Yani No. 93 Semarang', '2020-12-04'),
('20201205008050584KLT-PTI0900/1067263', 'KT005', 'T014', 'S5 ', 'D3', 'Jl. Pahlawan No.44 Klaten', 'Jl. Joyoboyo No 22 Pati', '2020-12-05'),
('20201205008050584YOG-SMG0900/1067262', 'KT008', 'T020', 'S6 ', '- ', 'Jl. Mastrip No. 33 Yogyakarta', 'Jl. Gajah Mada No. 9 Semarang', '2020-12-05'),
('20201209008050584PTI-YOG0900/1067264', 'KT015', 'T012', 'S8 ', '- ', 'Jl. Maja Pahit No 29 Pati', 'Jl. Ahmad Yani No. 21 Yogyakarta', '2020-12-09'),
('20201209008050584PTI-YOG0900/1067265', 'KT010', 'T012', 'S4 ', 'D2', 'Jl. Soekarno No. 82 Pati', 'Jl. Maja Pahit No. 39 Yogyakarta', '2020-12-09'),
('20201209008050584SLO-JKT0900/1067266', 'KT006', 'T016', 'S1 ', '- ', 'Jl. Anggrek No. 23 Surakarta', 'Jl. Hayam Wuruk No. 17 Jakarta', '2020-12-09'),
('20201211008050584SLO-JKT0900/1067267', 'KT007', 'T016', 'S7 ', 'D1', 'Jl. Aditya No. 235 Wonogiri', 'Jl. Ahmad Yani No. 193 Surakarta', '2020-12-11'),
('20201211008050584SLO-SMG0900/1067268', 'KT001', 'T027', 'S4 ', '- ', 'Jl. Gunungsari No. 27 Surakarta', 'Jl. Gajah Mada No. 129 Semarang', '2020-12-11'),
('20201212008050584SLO-PTI0900/1067269', 'KT012', 'T021', 'S7 ', 'D1', 'Jl. Mastrip No. 64 Surakarta', 'Jl. Joyoboyo No 12 Pati', '2020-12-12'),
('20201213008050584KLU-SMG0900/1067270', 'KT009', 'T025', 'S8 ', '- ', 'Jl. Mastrip No. 92, Tarakan, Kalimantan Utara Teng', 'Jl. Maja Pahit No. 34 Semarang', '2020-12-13'),
('20201214008050584JEB-WON0900/1067257', 'KT011', 'T003', 'S7 ', '- ', 'Jl. Melati No. 12, Jebres', 'Jl. Hayam Wuruk No. 12 Wonogiri', '2020-12-14'),
('20201214008050584KLU-SMG0900/1067271', 'KT019', 'T025', 'S6 ', '- ', 'Jl. Gunungsari No. 95, Tarakan, Kalimantan Utara', 'Jl. Joyoboyo No 93 Semarang', '2020-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id_seat`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indexes for table `trip_order`
--
ALTER TABLE `trip_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_diskon` (`id_diskon`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_perjalanan` (`id_perjalanan`),
  ADD KEY `fk_seat` (`id_seat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trip_order`
--
ALTER TABLE `trip_order`
  ADD CONSTRAINT `fk_diskon` FOREIGN KEY (`id_diskon`) REFERENCES `diskon` (`id_diskon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perjalanan` FOREIGN KEY (`id_perjalanan`) REFERENCES `trip` (`id_perjalanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seat` FOREIGN KEY (`id_seat`) REFERENCES `seat` (`id_seat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
