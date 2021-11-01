-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 02:48 PM
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
-- Database: `peminjamanalat`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `spesifikasi` text NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `asal_barang` text NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_regis` date NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kd_jenis` varchar(20) NOT NULL,
  `kategori_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_user`, `spesifikasi`, `jumlah`, `asal_barang`, `nama_barang`, `tgl_regis`, `lokasi`, `tempat`, `kd_jenis`, `kategori_barang`) VALUES
(1, 1, 'RAM 4GB, Memori 1TB, Windows 7', '2', 'Dana Sekolah', 'Asus X441U', '2021-01-31', 'Ruang Tata Usaha', 'Lemari perkakas baris ke 1', 'LPP001', 'Laptop'),
(102, 1, 'Ready-3D & HDMI resolusi 1024 x 768 (XGA)', '0', 'Dana Sekolah', 'Infocus DLP Projector In Black', '2021-02-24', 'Ruang Tata Usaha', 'Lemari perkakas baris ke 2', 'PRO001', 'Projector');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `id_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_detail`, `id_barang`, `jumlah`, `peminjam`, `status`, `kondisi`, `id_peminjaman`) VALUES
(106, 1, 1, 'JJ', 'Dikembalikan', 'rusak', 85);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `wkt_pinjam` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `wkt_pinjam`) VALUES
(85, 2, '2021-03-01', '2021-03-02', '09:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `kd_jenis` varchar(20) NOT NULL,
  `kategori_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`kd_jenis`, `kategori_barang`, `nama_barang`, `spesifikasi`) VALUES
('KMR001', 'Kamera', 'Kamera Canon', 'Lensa '),
('LPP001', 'Laptop', 'Asus X441U', 'RAM 4GB, Memori 1TB, Windows 7'),
('LPP002', 'Laptop', 'Lenovo idapad 310', '8 GB'),
('PRO001', 'Projector', 'Infocus DLP Projector In Black', 'Ready-3D & HDMI resolusi 1024 x 768 (XGA)'),
('PRO002', 'Projector ', 'Projector infocus', 'warna merah led');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `id_level`) VALUES
(1, 'Admin', 'admin', 'admin', '1'),
(2, 'Operator', 'aldi', 'aldi', '2'),
(3, 'Kepala Sekolah', 'kepsek', 'kepsek', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
