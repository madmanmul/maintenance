-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 01:23 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_servis_lift`
--

CREATE TABLE `tbl_detail_servis_lift` (
  `id_proyek` int(4) NOT NULL,
  `id_uraian` int(4) NOT NULL,
  `nilai` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servis_lift`
--

CREATE TABLE `tbl_servis_lift` (
  `id_proyek` int(4) NOT NULL,
  `nama_proyek` varchar(30) NOT NULL,
  `no_proyek` varchar(20) NOT NULL,
  `spesifikasi` varchar(20) NOT NULL,
  `tipe_ctrl_panel` text NOT NULL,
  `tgl_servis` date NOT NULL,
  `servis_ke` varchar(10) NOT NULL,
  `jam_dtg` time NOT NULL,
  `jam_plg` time NOT NULL,
  `tipe_kontrak` text NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `leader` varchar(20) NOT NULL,
  `no_telp_leader` varchar(14) NOT NULL,
  `note_pt_helin` text NOT NULL,
  `note_customer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_uraian_lift`
--

CREATE TABLE `tbl_tipe_uraian_lift` (
  `tipe_uraian` char(4) NOT NULL,
  `kategori_uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipe_uraian_lift`
--

INSERT INTO `tbl_tipe_uraian_lift` (`tipe_uraian`, `kategori_uraian`) VALUES
('A', 'MACHINE ROOM'),
('B', 'HOISTWAY & TOP CAR'),
('C', 'CAR STATION'),
('D', 'PIT'),
('E', 'OPTIONAL FIXTURES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uraian_lift`
--

CREATE TABLE `tbl_uraian_lift` (
  `id_uraian` int(4) NOT NULL,
  `tipe_uraian` char(2) NOT NULL,
  `nama_uraian` text NOT NULL,
  `periode` varchar(10) NOT NULL,
  `standar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uraian_lift`
--

INSERT INTO `tbl_uraian_lift` (`id_uraian`, `tipe_uraian`, `nama_uraian`, `periode`, `standar`) VALUES
(1, 'A', 'Suhu Ruangan Mesin (By Owner) & Kebersihan', '2 Mg', '< 28 &deg; C'),
(2, 'A', 'Penerangan Ruangan Mesin (By Owner)', '2 Mg', 'Visual'),
(3, 'A', 'Tegangan Suplai Utama :R, S, T (By Owner)', '2 Mg', '380 V AC &plusmn; 5%'),
(4, 'A', 'Gear : Worm & Helical *3', '3 Bln', 'Visual / Manual'),
(5, 'A', 'Kondisi Main, Deflector dan Suspension Sheave *3', '6 Bln', 'Visual / Manual'),
(6, 'A', 'Rotary Encoder : Mesin Traksi & Governor *3', '3 Bln', 'Function / Manual'),
(7, 'A', 'Bearings : Gear Box & Motor *3', '6 Bln', 'Visual / Manual'),
(8, 'A', 'Jarak Kontak Brake & Switch', '2 Mg', 'Min < 3mm'),
(9, 'A', 'Ketebalan Lapisan Kanvas Brake', '2 Mg', 'Min > 5 mm'),
(10, 'A', 'Kondisi dan Batas Level Oli Gear Box', '2 Mg', 'Visual Level'),
(11, 'A', 'Wire Rope ; Main & Governor Rope *3', '6 Bln', '> 90%'),
(12, 'A', 'Motor Traksi', '2 Mg', 'Function / Manual'),
(13, 'A', 'Governor ( Pengetesan Pengereman & Switch ) *3', '3 Bln', 'Function / Manual'),
(14, 'A', 'Kekencangan Pin Terminal Blok / Soket', '3 Bln', 'Visual / Function'),
(15, 'A', 'Operasional Interphone', '3 Bln', 'Function / Manual'),
(16, 'A', 'Tegangan & Arus Aki untuk ARD / UPSL', '2 Mg', '12VDC'),
(17, 'A', 'Operasional ARD / UPSl *3', '2 Mg', 'Function'),
(18, 'A', 'Kontrol Panel ( Kontraktor, Relay, Timer, Sikring, dll)', '2 Mg', 'Function / Manual'),
(19, 'B', 'Kondisi di atas sangkar ; E - Stop & E - Exit Switch *3', '2 Mg', 'Function / Manual'),
(20, 'B', 'Kondisi Limit Switch ( Atas & Bawah ) *3', '3 Bln', 'Function / Manual'),
(21, 'B', 'Jarak Interlock Switch ( Pengait terhadap Penyangga )', '2 Mg', '3 &plusmn; 1 mm'),
(22, 'B', 'Tombol Luar, Indikator, Hall Lantern *3', '2 Mg', 'Function / Manual'),
(23, 'B', 'Kondisi Box Oli pada Rail Sangkar & Rail CWT *3', '1 Bln', 'Visual / Manual'),
(24, 'B', 'Teflon Guide Shoe / Roller Guide Sangkar & CWT *3', '9 Bln', 'Visual / Manual'),
(25, 'B', 'Kondisi dan Pergerakan Traveling Kabel', '6 Bln', 'Visual / Manual'),
(26, 'B', 'Ketegangan Main Wire Rope *1', '1 Bln', 'Visual / Manual'),
(27, 'B', 'Kondisi Baterai ESD & PC Board *3', '2 Mg', '12VDC'),
(28, 'B', 'Jarak Gate Lock Switch sebelum menutup penuh', '3 Bln', '10 ~ 25 mm'),
(29, 'B', 'Kondisi LCD + Bendera Sensor *3', '2 Mg', 'Function / Manual'),
(30, 'B', 'Kekencangan baut, sambungan dinding dan plafon', '6 Bln', 'Visual / Manual'),
(31, 'C', 'Car Operation Panel / OPB', '2 Mg', 'Function / Manual'),
(32, 'C', 'Fungsi Lampu Emergency / Inter Phone *3', '2 Mg', 'Function'),
(33, 'C', 'Sensor Safety Ray, Muntibeam, Saf-T-Edge *3', '2 Mg', 'Function'),
(34, 'C', 'Fan Sangkar / Air Condition *3', '2 Mg', 'Function'),
(35, 'C', 'Lampu penerangan sangkar (komplit set)', '2 Mg', 'Function / Visual'),
(36, 'C', 'Pintu Sangkar dan Material Pendukungnya', '2 Mg', 'Function / Manual'),
(37, 'D', 'Kondisi PIT (Pit Switch, Lampu Pit & Bersih) *3', '2 Mg', 'Visual / Manual'),
(38, 'D', 'Kondisi Pegas Penyangga / Oli Hidrolik ( Oli Level )', '6 Bln', 'Visual / Manual'),
(39, 'D', 'Jarak <i>Compensating Sheave</i> *1', '6 Bln', '250 &plusmn; 50 mm'),
(40, 'D', 'Fungsi Buffer / Compens / GOV s/w *3', '2 Mg', 'Function'),
(41, 'D', 'Kondisi Dumping Roller', '2 Mg', 'Visual / Manual'),
(42, 'D', 'Ketegangan Governor yang Diizinkan', '2 Mg', '250 ~ 300 mm'),
(43, 'D', 'Jarak CWT terhadap Buffer (sangkar di Top - Floor) *2', '1 Bln', 'Not MRI : 600 ~ 900 mm\r\nMRI     : 100 ~ 150 mm '),
(44, 'E', 'Supervisory Panel / Inter Phone *3 ', '6 Bln', 'Function'),
(45, 'E', 'Alarm Kebakaran / Sensor Gempa Bumi *3', '6 Bln', 'Function');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uid` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak` varchar(7) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `softDelete` int(1) NOT NULL,
  `uAddedBy` int(4) NOT NULL,
  `uTanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uid`, `username`, `password`, `hak`, `status`, `softDelete`, `uAddedBy`, `uTanggal`) VALUES
(1, 1000, 'ari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 1, 0, 1000, '2018-08-10'),
(5, 1001, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 1, 0, 1000, '2018-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_servis_lift`
--
ALTER TABLE `tbl_detail_servis_lift`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `tbl_servis_lift`
--
ALTER TABLE `tbl_servis_lift`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `tbl_uraian_lift`
--
ALTER TABLE `tbl_uraian_lift`
  ADD PRIMARY KEY (`id_uraian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_servis_lift`
--
ALTER TABLE `tbl_servis_lift`
  MODIFY `id_proyek` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_uraian_lift`
--
ALTER TABLE `tbl_uraian_lift`
  MODIFY `id_uraian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_servis_lift`
--
ALTER TABLE `tbl_servis_lift`
  ADD CONSTRAINT `tbl_servis_lift_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `tbl_detail_servis_lift` (`id_proyek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
