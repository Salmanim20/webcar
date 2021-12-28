-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `ttl` varchar(50) NOT NULL DEFAULT '0',
  `jk` varchar(50) NOT NULL DEFAULT '0',
  `alamat` varchar(50) NOT NULL DEFAULT '0',
  `telp` varchar(15) NOT NULL DEFAULT '0',
  `nik` varchar(50) NOT NULL DEFAULT '0',
  `ktp` longblob NOT NULL,
  `sim` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `ttl`, `jk`, `alamat`, `telp`, `nik`, `ktp`, `sim`) VALUES
(1, 'admin', '$2y$10$ihNZIHmWaxIHB00Zvvh38ui8p647hfI.VyMBkheo6DMX4oflyMpaK', 'Admin', 'Malang, 16 Juni 2000', 'Laki-laki', 'Jl. Brawijaya no. 20', '081234567890', '3571234567890', 0x4b54502e6a7067, 0x53494d2e706e67),
(2, 'qwerty', '$2y$10$sgPNF3ED4fn/pmVo1pxhIOTPf9590yg3MsNw8N8SZjTNXLI2yoPWm', 'qwerty', 'Malang, 16 Juni 2000', 'Laki-laki', 'Jl. Brawijaya no. 20', '081234567890', '3571234567890', 0x4b54502e6a7067, 0x53494d2e706e67),
(3, 'asd', '$2y$10$irLm6ZpdT8xPu0lpdB25ze/McIjVAq1zIUsztzZ0FvLeuaT0avpQO', 'asd', 'Malang, 16 Juni 2000', 'Laki-laki', 'Jl. Brawijaya no. 20', '081234567890', '3571234567890', 0x4b54502e6a7067, 0x53494d2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenis` varchar(50) NOT NULL DEFAULT '0',
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `jenis`, `harga`, `foto`, `deskripsi`) VALUES
(1, 'Daihatsu Terios', 300000, 'daihatsu terios.jpeg', 'Daihatsu Terios tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Daihatsu hadir dalam 14 varian. Bicara soal spesifikasi mesin Daihatsu Terios, ini ditenagai dua pilihan mesin Bensin berkapasitas 1496 cc. Terios tersedia dengan transmisi Manual and Otomatis tergantung variannya. Terios adalah Crossover 7 seater dengan panjang 4435 mm, lebar 1695 mm, wheelbase 2685 mm. serta ground clearance 220 mm.'),
(2, 'Honda BR-V', 325000, 'honda brv.jpg', 'Honda BRV tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Honda hadir dalam 8 varian. Bicara soal spesifikasi mesin Honda BRV, ini ditenagai dua pilihan mesin Bensin berkapasitas 1497 cc. BRV tersedia dengan transmisi Manual and CVT tergantung variannya. BRV adalah SUV 7 seater dengan panjang 4456 mm, lebar 1735 mm, wheelbase 2662 mm.'),
(3, 'Suzuki Ertiga', 285000, 'suzuki ertiga.png', 'Suzuki Ertiga tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Suzuki hadir dalam 14 varian. Bicara soal spesifikasi mesin Suzuki Ertiga, ini ditenagai dua pilihan mesin Bensin berkapasitas 1462 cc. Ertiga tersedia dengan transmisi Manual and Otomatis tergantung variannya. Juga, tergantung pilihan dan jenis bahan bakar, konsumsi BBM Ertiga mencapai 11.8 kmpl untuk perkotaan. Ertiga adalah MPV 7 seater dengan panjang 4470 mm, lebar 1735 mm, wheelbase 2740 mm. serta ground clearance 180 mm.'),
(4, 'Toyota Agya', 350000, 'toyota agya.jpg', 'Toyota Agya tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Toyota hadir dalam 10 varian. Bicara soal spesifikasi mesin Toyota Agya, ini ditenagai dua pilihan mesin Bensin berkapasitas 1197 cc. Agya tersedia dengan transmisi Manual and Otomatis tergantung variannya. Agya adalah Hatchback 5 seater dengan panjang 3660 mm, lebar 1600 mm, wheelbase 2450 mm.'),
(5, 'Suzuki Ignis', 250000, 'suzuki ignis.jpg', 'Suzuki Ignis tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Suzuki hadir dalam 8 varian. Bicara soal spesifikasi mesin Suzuki Ignis, ini ditenagai dua pilihan mesin Bensin berkapasitas 1197 cc. Ignis tersedia dengan transmisi Manual and Otomatis tergantung variannya. Ignis adalah Hatchback 5 seater dengan panjang 3700 mm, lebar 1690 mm, wheelbase 2435 mm. serta ground clearance 180 mm.'),
(6, 'Toyota Rush', 335000, 'toyota rush.png', 'Toyota Rush tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Toyota hadir dalam 8 varian. Bicara soal spesifikasi mesin Toyota Rush, ini ditenagai dua pilihan mesin Bensin berkapasitas 1496 cc. Rush tersedia dengan transmisi Manual and Otomatis tergantung variannya. Rush adalah SUV 7 seater dengan panjang 4435 mm, lebar 1695 mm, wheelbase 2685 mm.'),
(7, 'Honda Brio', 275000, 'honda brio.png', 'Honda Brio tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 14 varian. Bicara soal spesifikasi mesin Honda Brio, ini ditenagai dua pilihan mesin Bensin berkapasitas 1199 cc. Brio tersedia dengan transmisi Manual and CVT tergantung variannya. Brio adalah Hatchback 5 seater dengan panjang 3815 mm, lebar 1680 mm, wheelbase 2405 mm.'),
(8, 'Daihatsu Sigra', 315000, 'daihatsu sigra.jpg', 'Daihatsu Sigra tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Daihatsu hadir dalam 20 varian. Bicara soal spesifikasi mesin Daihatsu Sigra, ini ditenagai dua pilihan mesin Bensin berkapasitas 1197 cc. Sigra tersedia dengan transmisi Manual and Otomatis tergantung variannya. Sigra adalah MPV 7 seater dengan panjang 4070 mm, lebar 1655 mm, wheelbase 2525 mm. serta ground clearance 180 mm.');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `model`, `lokasi`, `harga`, `tgl`, `waktu`, `username`) VALUES
(1, 'Daihatsu Terios', 'Kota Kediri', 600000, '31-05-2021', '10:30 AM', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `pesan`, `username`, `nama`) VALUES
(2, 'test', 'admin', 'Admin'),
(3, 'pesan', 'admin', 'Admin'),
(4, 'pesan', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) UNSIGNED NOT NULL,
  `wil` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `wil`) VALUES
(1, 'Kab. Bangkalan'),
(2, 'Kab. Banyuwangi'),
(3, 'Kab. Blitar'),
(4, 'Kab. Bojonegoro'),
(5, 'Kab. Bondowoso'),
(6, 'Kab. Gresik'),
(7, 'Kab. Jember'),
(8, 'Kab. Jombang'),
(9, 'Kab. Kediri'),
(10, 'Kab. Lamongan'),
(11, 'Kab. Lumajang'),
(12, 'Kab. Madiun'),
(13, 'Kab. Magetan'),
(14, 'Kab. Malang'),
(15, 'Kab. Mojokerto'),
(16, 'Kab. Nganjuk'),
(17, 'Kab. Ngawi'),
(18, 'Kab. Pacitan'),
(19, 'Kab. Pamekasan'),
(20, 'Kab. Pasuruan'),
(21, 'Kab. Ponorogo'),
(22, 'Kab. Probolinggo'),
(23, 'Kab. Sampang'),
(24, 'Kab. Sidoarjo'),
(25, 'Kab. Situbondo'),
(26, 'Kab. Sumenep'),
(27, 'Kab. Trenggalek'),
(28, 'Kab. Tuban'),
(29, 'Kab. Tulungagung'),
(30, 'Kota Batu'),
(31, 'Kota Blitar'),
(32, 'Kota Kediri'),
(33, 'Kota Madiun'),
(34, 'Kota Malang'),
(35, 'Kota Mojokerto'),
(36, 'Kota Pasuruan'),
(37, 'Kota Probolinggo'),
(38, 'Kota Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
