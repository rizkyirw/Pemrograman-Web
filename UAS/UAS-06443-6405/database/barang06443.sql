-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 03:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang06443`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` varchar(16) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `kode`, `nama`, `harga`, `foto`) VALUES
(1, 'brg-001', 'Macbook Pro 2021', '25000000', 'macbook-2021.jpg'),
(2, 'brg-002', 'Minuman Tradisional Jahe Susu', '25000', 'Jahesu.png'),
(3, 'brg-003', 'Huawei Matebook 14', '17000000', '16716-laptop-huawei-matebook-14-huawei-matebook-14s.jpg'),
(4, 'brg-004', 'Keyboard Razer Huntsman', '800000', 'huntsman-box.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_jual`
--

CREATE TABLE `data_jual` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_jual` int(11) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `harga` int(50) NOT NULL,
  `total_harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jual`
--

INSERT INTO `data_jual` (`id`, `foto`, `kode`, `nama`, `jumlah_jual`, `tanggal_jual`, `harga`, `total_harga`) VALUES
(1, 'macbook-2021.jpg', 'brg-001', 'Macbook Pro 2021', 1, '2022-06-10', 25000000, 25000000),
(2, 'Jahesu.png', 'brg-002', 'Minuman Tradisional Jahe Susu', 2, '2022-06-21', 25000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jual`
--
ALTER TABLE `data_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_jual`
--
ALTER TABLE `data_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
