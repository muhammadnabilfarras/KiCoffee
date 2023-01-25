-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 05:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kicoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_produk`
--

CREATE TABLE `riwayat_produk` (
  `Riwayat_idRiwayat` int(255) NOT NULL,
  `Produk_idProduk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_produk`
--

INSERT INTO `riwayat_produk` (`Riwayat_idRiwayat`, `Produk_idProduk`) VALUES
(69, 1),
(69, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_produk`
--
ALTER TABLE `riwayat_produk`
  ADD PRIMARY KEY (`Riwayat_idRiwayat`,`Produk_idProduk`),
  ADD KEY `Produk_idProduk` (`Produk_idProduk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat_produk`
--
ALTER TABLE `riwayat_produk`
  ADD CONSTRAINT `Produk_idProduk` FOREIGN KEY (`Produk_idProduk`) REFERENCES `produk` (`idProduk`),
  ADD CONSTRAINT `Riwayat_idRiwayat` FOREIGN KEY (`Riwayat_idRiwayat`) REFERENCES `riwayat` (`idRiwayat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
