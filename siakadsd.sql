-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 08:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakadsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbalamat`
--

CREATE TABLE `tbalamat` (
  `id` int(11) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbekstrakulikuler`
--

CREATE TABLE `tbekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama_ekstra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbekstrakulikuler`
--

INSERT INTO `tbekstrakulikuler` (`id`, `nama_ekstra`) VALUES
(1, 'Voli');

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_guru` text NOT NULL,
  `jk` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`id`, `nip`, `nama_guru`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`) VALUES
(39, 222, 'Tegar', '', 'a', '0000-00-00', 'Jakarta', ''),
(40, 1551, 'Garda ', '', 'Bangkalan', '1999-06-12', 'Bangkalan', ''),
(41, 1212, 'a', 'Laki - Laki', 'a', '1999-11-11', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbgurumapel`
--

CREATE TABLE `tbgurumapel` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat_kelas` int(11) DEFAULT NULL,
  `nama_kelas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`id_kelas`, `tingkat_kelas`, `nama_kelas`) VALUES
(5, 1, '1 - A');

-- --------------------------------------------------------

--
-- Table structure for table `tbkepalasekolah`
--

CREATE TABLE `tbkepalasekolah` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkepalasekolah`
--

INSERT INTO `tbkepalasekolah` (`id`, `nip`, `nama_kepsek`, `alamat`, `tahun`, `foto`) VALUES
(3, 125123, 'Garda', 'aasdasdasda', '12512', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbmapel`
--

CREATE TABLE `tbmapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmapel`
--

INSERT INTO `tbmapel` (`id`, `nama_mapel`) VALUES
(5, 'Bahasa Indonesia'),
(6, 'Matematika'),
(7, 'Pendidikan Agama Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tbruangkelas`
--

CREATE TABLE `tbruangkelas` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsetmapel`
--

CREATE TABLE `tbsetmapel` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan_sebelumnya` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `wali_alamat` varchar(100) NOT NULL,
  `wali_pkj` varchar(50) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`id_siswa`, `nis`, `nisn`, `nama_siswa`, `jk`, `tmpt_lahir`, `tgl_lahir`, `agama`, `alamat`, `pendidikan_sebelumnya`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ortu`, `nama_wali`, `wali_alamat`, `wali_pkj`, `foto`, `created_at`, `updated_at`) VALUES
(1, 999992, 2021, 'Aji Prakoso', 'Laki - Laki', 'Bangkalan', '2021-12-08', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 99929, 1101, 'Budi Yanto', 'Laki - Laki', 'Sampang', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbwalikelas`
--

CREATE TABLE `tbwalikelas` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbwalikelas`
--

INSERT INTO `tbwalikelas` (`id`, `id_guru`, `id_kelas`) VALUES
(2, 40, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbalamat`
--
ALTER TABLE `tbalamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbekstrakulikuler`
--
ALTER TABLE `tbekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tbgurumapel`
--
ALTER TABLE `tbgurumapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbkepalasekolah`
--
ALTER TABLE `tbkepalasekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmapel`
--
ALTER TABLE `tbmapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbruangkelas`
--
ALTER TABLE `tbruangkelas`
  ADD UNIQUE KEY `id` (`id`,`id_kelas`,`id_siswa`) USING BTREE,
  ADD KEY `tbruangkelas_ibfk_1` (`id_kelas`),
  ADD KEY `tbruangkelas_ibfk_2` (`id_siswa`);

--
-- Indexes for table `tbsetmapel`
--
ALTER TABLE `tbsetmapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbwalikelas`
--
ALTER TABLE `tbwalikelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`,`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbalamat`
--
ALTER TABLE `tbalamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbekstrakulikuler`
--
ALTER TABLE `tbekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbgurumapel`
--
ALTER TABLE `tbgurumapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbkepalasekolah`
--
ALTER TABLE `tbkepalasekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbmapel`
--
ALTER TABLE `tbmapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbruangkelas`
--
ALTER TABLE `tbruangkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbsetmapel`
--
ALTER TABLE `tbsetmapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbwalikelas`
--
ALTER TABLE `tbwalikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbruangkelas`
--
ALTER TABLE `tbruangkelas`
  ADD CONSTRAINT `tbruangkelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbkelas` (`id_kelas`),
  ADD CONSTRAINT `tbruangkelas_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tbsiswa` (`id_siswa`);

--
-- Constraints for table `tbwalikelas`
--
ALTER TABLE `tbwalikelas`
  ADD CONSTRAINT `tbwalikelas_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbguru` (`id`),
  ADD CONSTRAINT `tbwalikelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tbkelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
