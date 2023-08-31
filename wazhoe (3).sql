-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wazhoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `no_telp`, `password`) VALUES
(1, 'galih', 'ayalarifki@gmail.com', 2147483647, '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pemabayaran`
--

CREATE TABLE `bukti_pemabayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `jenis_khusus` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `Harga` double(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis`, `jenis_khusus`, `keterangan`, `image`, `Harga`) VALUES
(1, 'cleaning', 'fast clean', 'Treatment pencucian untuk membersihkan sepatu pada bagian upper dan midsole secara cepat', '../assets/kategori/fastclean.png', 50.000000),
(3, 'cleaning', 'deep clean', 'treatment pencucian untuk semua jenis sepatu untuk membersihkan noda secara detail pada setiap bagian', '../assets/kategori/deepclean.png', 45.000000),
(4, 'cleaning', 'deep cleaning express', 'treatment untuk semua jenis sepatu dengan membersihkan noda secara detail pada seluruh bagian dan aman untuk semua bahan dan dikerjakan selama 24 jam saja.', '../assets/kategori/deepcleanexpress.png', 60.000000),
(5, 'repaint', 'repaint boost', 'treatment pewarnaan khusus boost sepatu. aman untuk bahan boost. dilakukan untuk mengembalikan warna boost yang menguning', '../assets/kategori/repaintboost.png', 95.000000),
(6, 'other', 'whitening', 'treatment pencucian khusus untuk sepatu berbahan canvas dan mesh berwarna putih dengan noda kuning ataupun saus.', '../assets/kategori/whitening.png', 90.000000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `kategori` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Alamat` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `email`, `kategori`, `brand`, `quantity`, `Alamat`, `keterangan`) VALUES
(17, 'ayala', 'ayalarifki@gmail.com', '1', 'nike panda', 1, 'baturaja', 'antar'),
(19, 'galih', 'ayalarifki@gmail.com', 'deep clean', 'nike panda', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(50) NOT NULL,
  `item_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'ayala', 'ayalarifki@gmail.com', '202cb962ac59075'),
(2, 'admin', 'ayalarifki@gmail.com', 'e10adc3949ba59a'),
(3, 'admin', 'ayalarifki@gmail.com', '827ccb0eea8a706');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pemabayaran`
--
ALTER TABLE `bukti_pemabayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti_pemabayaran`
--
ALTER TABLE `bukti_pemabayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
