-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2020 at 03:52 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembayaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenispembayaran`
--

CREATE TABLE `tb_jenispembayaran` (
  `id_jenispembayaran` int(5) NOT NULL,
  `nama_jenispembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenispembayaran`
--

INSERT INTO `tb_jenispembayaran` (`id_jenispembayaran`, `nama_jenispembayaran`) VALUES
(1, 'SPP'),
(2, 'UTANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `nis` int(6) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `id_jenispembayaran` int(5) NOT NULL,
  `nominal_pembayaran` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `tgl_pembayaran`, `id_jenispembayaran`, `nominal_pembayaran`) VALUES
(1, 123, '2020-03-02', 1, 250000),
(3, 123, '2020-03-03', 1, 123213),
(4, 123, '2020-03-04', 1, 345),
(5, 123567, '2020-03-03', 1, 123213);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(6) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `kelas`) VALUES
(123, 'Muhammad Saiful', '12'),
(123567, 'MImin', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  ADD PRIMARY KEY (`id_jenispembayaran`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
