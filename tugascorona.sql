-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 06:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugascorona`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `jmlh_yes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `usia`, `jmlh_yes`) VALUES
(1, 'Abdul Hilman Thiusana', 17, 12);

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilihan`
--

CREATE TABLE `soal_pilihan` (
  `nomor` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawab_a` varchar(255) NOT NULL,
  `jawab_b` varchar(255) NOT NULL,
  `jawaban` enum('a','b') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_pilihan`
--

INSERT INTO `soal_pilihan` (`nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawaban`) VALUES
(1, 'Saya Pergi Keluar Rumah', '', '', 'a'),
(2, 'Saya Menggunakan Transportasi umum:online,angkot,taksi,kereta api', '', '', 'a'),
(3, 'Saya tidak memakai masker pada saat berkumpul dengan orang lain', '', '', 'a'),
(4, 'Saya berjabat tangan dengan orang lain ', '', '', 'a'),
(5, 'Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor.', '', '', 'a'),
(6, 'Saya menyentuh benda/uang yang juga orang lain sentuh ', '', '', 'a'),
(7, 'Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika :berbelanja,bekerja,belajar,beribadah ', '', '', 'a'),
(8, 'Saya makan diluar rumah(Warung/Restaurant)', '', '', 'a'),
(9, 'Saya tidak minum hangat & cuci tangan setelah sampai tujuan', '', '', 'a'),
(10, 'Saya berada di wilayah kelurahan yang tempat pasien tertular', '', '', 'a'),
(11, 'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang pintu (handel) pintu masuk rumah ', '', '', 'a'),
(12, 'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah', '', '', 'a'),
(13, 'Saya tidak menyediakan : tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga di rumah ', '', '', 'a'),
(14, 'Saya tidak segera merendam baju & celana bekas pakai di luar rumah ke dalam air panas/sabun', '', '', 'a'),
(15, 'Saya tidak segera mandi keramas setelah saya tiba di rumah ', '', '', 'a'),
(16, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah', '', '', 'a'),
(17, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit ', '', '', 'a'),
(18, 'Saya tidak jalan kaki/ berolah raga minimal 30 menit setiap hari ', '', '', 'a'),
(19, 'Saya jarang minum vitamin C & E, dan kurang tidur  ', '', '', 'a'),
(20, 'Usia saya diatas 60 tahun', '', '', 'a'),
(21, 'Saya mempunyai penyakit : jantung/diabetes/gangguan pernapasan kronik', '', '', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
