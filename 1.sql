-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 04:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_nama`, `admin_password`, `admin_kontak`, `admin_level`) VALUES
(1, 'admin', 'Super Admin', '$2y$10$zp5LQSQmnP44FJQKJESfO.BfxWPV5T3VyKhTpkSwphQs.fg13chKu', '09999999999', 1),
(2, 'author', 'Admin', '$2y$10$1YUXH5x/3q2GkMu8Q3XDr.DW7YkxGKt10a6vDQzCSEBme/lnrAeuO', '08188889999', 2),
(3, 'admin1', 'fendy', '$2y$10$p3r/NCGv7E8ELleq.D1JEezOcQDzw.1UKbgI9fYTatyPcenb15aby', '085745847414', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak Ada Deskripsi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_deskripsi`) VALUES
(2, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kemasan`
--

CREATE TABLE `kemasan` (
  `kemasan_id` int(10) UNSIGNED NOT NULL,
  `kemasan_kode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemasan_deskripsi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak Ada Deskripsi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kemasan`
--

INSERT INTO `kemasan` (`kemasan_id`, `kemasan_kode`, `kemasan_deskripsi`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `keranjang_id` int(10) UNSIGNED NOT NULL,
  `keranjang_produk` int(10) UNSIGNED NOT NULL,
  `keranjang_pelanggan` int(10) UNSIGNED NOT NULL,
  `keranjang_jumlah` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`keranjang_id`, `keranjang_produk`, `keranjang_pelanggan`, `keranjang_jumlah`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2019_09_20_012558_create_pengunjung_table', 1),
(20, '2019_09_20_032926_create_admin_table', 1),
(21, '2019_09_20_033002_create_kategori_table', 1),
(22, '2019_09_20_033004_create_kemasan_table', 1),
(23, '2019_09_20_033007_create_produk_table', 1),
(24, '2019_09_20_034016_create_pelanggan_table', 1),
(25, '2019_09_20_041909_create_pesanan_table', 1),
(26, '2019_09_20_041959_create_transaksi_table', 1),
(27, '2019_09_20_145546_create_keranjang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(10) UNSIGNED NOT NULL,
  `pelanggan_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan_nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan_kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan_alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_email`, `pelanggan_password`, `pelanggan_nama`, `pelanggan_kontak`, `pelanggan_alamat`, `saldo`) VALUES
(1, 'a@gmail.com', '$2y$10$By6M2.57BnrUParzCsTgwerEPvZbeA3YMFMNP9P8tCVFQr45kmAai', 'a@gmail.com', '6', 'a', 185369),
(3, '1@gmail.com', '$2y$10$YehXz7kihlCE3OpZKlAXTOSei2mPiFLWYEfXx8I93rXhEaBg6SJxq', '1', '1', '1', 0),
(4, 'b@gmail.com', '$2y$10$XD9EM4T0y3FKnerxYBEDj.ksy9.WiEGJCijMp.HET0K6XjMeaS27i', 'b', '123', 'b', 50000),
(5, 'c@gmail.com', '$2y$10$mPP8Asm/lTTUatstnDyhju/PafAiVDIi68r1IHKEu8NPiPPAREZV.', 'c', '123', 'c', 20000),
(6, 'd@gmsil.com', '$2y$10$elcpcPfLB4b.qV2N01GSYOgwmuhKC0ij0NJ3WHakBK3WkAJqr.eVS', 'd', '123', 'd', 0),
(7, 'v@gmail.com', '$2y$10$1VhpvrMiYsivBZTtsNJ7pO67vOrRlyIGnfMTFxW.Rn0rwmR/ZMHim', 'v', '12', 'v', 0),
(8, 'fmarzuki20@gmail.com', '$2y$10$sj/QNoiN7FRNHa3o24jg/uj5QCeG7832XW3wiNmDEXVmtssEOKaP6', 'Fendy', '085101238186', 'jl kh a dahlan 12', 80000),
(9, 'tes@gmail.com', '$2y$10$ClVPSq86ZT.NmaEm5rfBRO9P9/EVuahJtI/LdkR/ljEP/4kwTpLfm', 'testing', '189238012930', 'jl kh adahsad', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `pengunjung_id` int(10) UNSIGNED NOT NULL,
  `pengunjung_lp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengunjung_perangkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengunjung_waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(10) UNSIGNED NOT NULL,
  `pesanan_pelanggan` int(10) UNSIGNED NOT NULL,
  `pesanan_produk` int(10) UNSIGNED NOT NULL,
  `pesanan_jumlah` int(11) NOT NULL,
  `pesanan_waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesanan_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(10) UNSIGNED NOT NULL,
  `produk_kategori` int(10) UNSIGNED NOT NULL,
  `produk_kemasan` int(10) UNSIGNED NOT NULL,
  `produk_nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_harga` double NOT NULL,
  `produk_deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak Ada Deskripsi',
  `produk_gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk_stok` int(11) NOT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_kategori`, `produk_kemasan`, `produk_nama`, `produk_harga`, `produk_deskripsi`, `produk_gambar`, `produk_stok`, `pemilik`) VALUES
(1, 2, 1, '1', 50000, '1', '1570377026_5d9a0d42f045e.jpg', 9, 'admin'),
(8, 2, 1, '8', 100000, 'Tidak Ada Deskripsi', '1570710452_5d9f23b4465ea.jpg', 8, 'admin'),
(9, 2, 1, 'p', 0, 'Tidak ada deskripsi', '1570802812_5da08c7c0840d.jpg', 10, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaksi_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_pelanggan` int(10) UNSIGNED NOT NULL,
  `transaksi_to` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_nominal` double NOT NULL,
  `transaksi_bank` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaksi_bayar` enum('Sudah Dibayar','Belum Dibayar','Tidak Valid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Dibayar',
  `transaksi_deskripsi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `transaksi_id`, `transaksi_pelanggan`, `transaksi_to`, `transaksi_nominal`, `transaksi_bank`, `transaksi_waktu`, `transaksi_bayar`, `transaksi_deskripsi`, `gambar`) VALUES
(2, 'pKtPCO8hSC', 1, 'admin', 369, 'BRI', '2019-10-07 02:30:12', 'Sudah Dibayar', 'top up', '1570712087_5d9f2a172f72f.jpg'),
(4, 'zb5P5eB40P', 1, 'admin', 70000, 'BNI', '2019-10-11 01:10:44', 'Sudah Dibayar', 'top up', '1570731078_5d9f74461e96e.jpg'),
(5, '3kFvqZXfHx', 1, 'admin', 100000, 'BCA', '2019-10-11 13:20:53', 'Sudah Dibayar', 'top up', '1570774873_5da01f596d21f.jpg'),
(6, 'swPUt8lGex', 1, 'admin', 5000, 'BRI', '2019-10-11 13:47:54', 'Sudah Dibayar', 'top up', '1570803354_5da08e9aebd72.jpg'),
(7, 's8AOIzvTQr', 4, 'admin', 50000, 'BRI', '2019-10-11 15:28:27', 'Sudah Dibayar', 'top up', NULL),
(8, 'ZJcdnqXNjU', 5, 'admin', 20000, 'BRI', '2019-10-11 15:31:22', 'Sudah Dibayar', 'top up', '1570782945_5da03ee142f3d.jpg'),
(9, 'cQ6JpjpII5', 7, 'admin', 0, 'BCA', '2019-10-11 20:58:11', 'Sudah Dibayar', 'top up', '1570802307_5da08a835b32f.jpg'),
(10, 'AHOdwcHZyy', 7, 'admin', 0, 'BRI', '2019-10-11 21:03:30', 'Sudah Dibayar', 'top up', '1570802632_5da08bc8f1d55.jpg'),
(11, 'NrqxhLfZUe', 1, 'admin', 10000, 'BRI', '2019-10-12 19:10:00', 'Sudah Dibayar', 'top up', '1571308902_5da84566a90c1.png'),
(12, 'GEBjPsIFqn', 8, 'admin', 80000, 'BCA', '2019-10-17 20:16:00', 'Sudah Dibayar', 'top up', '1571318173_5da8699d14058.png'),
(13, 'TqI9H2c8zK', 9, 'admin', 10000, 'BNI', '2019-10-17 20:55:23', 'Sudah Dibayar', 'top up', '1571320574_5da872febcfd1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_admin_username_unique` (`admin_username`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kemasan`
--
ALTER TABLE `kemasan`
  ADD PRIMARY KEY (`kemasan_id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `keranjang_keranjang_produk_foreign` (`keranjang_produk`),
  ADD KEY `keranjang_keranjang_pelanggan_foreign` (`keranjang_pelanggan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`),
  ADD UNIQUE KEY `pelanggan_pelanggan_email_unique` (`pelanggan_email`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `pesanan_pesanan_pelanggan_foreign` (`pesanan_pelanggan`),
  ADD KEY `pesanan_pesanan_produk_foreign` (`pesanan_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `produk_produk_kategori_foreign` (`produk_kategori`),
  ADD KEY `produk_produk_kemasan_foreign` (`produk_kemasan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_transaksi_pelanggan_foreign` (`transaksi_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kemasan`
--
ALTER TABLE `kemasan`
  MODIFY `kemasan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `keranjang_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `pengunjung_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_keranjang_pelanggan_foreign` FOREIGN KEY (`keranjang_pelanggan`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_keranjang_produk_foreign` FOREIGN KEY (`keranjang_produk`) REFERENCES `produk` (`produk_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_pesanan_pelanggan_foreign` FOREIGN KEY (`pesanan_pelanggan`) REFERENCES `pelanggan` (`pelanggan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_pesanan_produk_foreign` FOREIGN KEY (`pesanan_produk`) REFERENCES `produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_produk_kategori_foreign` FOREIGN KEY (`produk_kategori`) REFERENCES `kategori` (`kategori_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_produk_kemasan_foreign` FOREIGN KEY (`produk_kemasan`) REFERENCES `kemasan` (`kemasan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_transaksi_pelanggan_foreign` FOREIGN KEY (`transaksi_pelanggan`) REFERENCES `pelanggan` (`pelanggan_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
