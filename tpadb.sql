-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 02:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kode_item` varchar(5) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`id`, `nama_barang`, `kode_item`, `merk`, `jenis_barang`, `bahan`, `warna`, `tahun`, `harga`, `nama_bidang`) VALUES
(1, 'payung', 'A1234', 'cap badak', 'payung', 'kain', 'merah', '2019', 25000, 'admin'),
(2, 'PC', 'B1234', 'Asus', 'Komputer', 'Besi', 'Hitam', '2018', 4000000, 'TU'),
(3, 'Printer Canon', 'C2345', 'Canon', 'Printer', 'Plastik', 'Hitam', '2019', 1000000, 'Admin'),
(5, 'rak buku', 'r5674', 'abc', 'lemari', 'kayu', 'coklat', '2017', 4500000, 'QC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
