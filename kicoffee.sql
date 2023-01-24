-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 10:07 AM
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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(100) NOT NULL,
  `namaProduk` varchar(45) NOT NULL,
  `jumlahProduk` int(100) NOT NULL,
  `jenisProduk` varchar(45) NOT NULL,
  `hargaProduk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `jumlahProduk`, `jenisProduk`, `hargaProduk`) VALUES
(1, 'Latte Art Machiato', 5, 'Coffee', 38000),
(2, 'Espresso', 5, 'Coffee', 25000),
(3, 'Coffee Milk', 5, 'Coffee', 23000),
(4, 'Lime Lemon', 5, 'non-Coffee', 25000),
(5, 'Sugar Watermelon', 5, 'non-Coffee', 20000),
(6, 'Manggo Juice', 5, 'non-Coffee', 28000),
(7, 'Strawberry Cheese Cake', 5, 'Snack', 35000),
(8, 'Salad', 5, 'Snack', 20000),
(9, 'Toast Creamy Brule with Egg', 5, 'Snack', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `idRiwayat` int(11) NOT NULL,
  `namaPembeli` varchar(45) NOT NULL,
  `alamatPembeli` varchar(45) NOT NULL,
  `noTelp` int(20) NOT NULL,
  `pengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_produk`
--

CREATE TABLE `riwayat_produk` (
  `Riwayat_idRiwayat` int(255) NOT NULL,
  `Produk_idProduk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`idRiwayat`);

--
-- Indexes for table `riwayat_produk`
--
ALTER TABLE `riwayat_produk`
  ADD PRIMARY KEY (`Riwayat_idRiwayat`,`Produk_idProduk`),
  ADD KEY `Produk_idProduk` (`Produk_idProduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `idRiwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
