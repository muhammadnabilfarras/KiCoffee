-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 09:49 AM
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
  `hargaProduk` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `namaProduk`, `jumlahProduk`, `jenisProduk`, `hargaProduk`, `gambar`) VALUES
(1, 'Latte Art Machiato', 5, 'Coffee', 38000, 'coffee1.jpg'),
(2, 'Espresso', 5, 'Coffee', 25000, 'coffee2.jpg'),
(3, 'Coffee Milk', 5, 'Coffee', 23000, 'coffee3.jpg'),
(4, 'Lime Lemon', 5, 'non-Coffee', 25000, 'drink1.jpg'),
(5, 'Sugar Watermelon', 5, 'non-Coffee', 20000, 'drink2.jpg'),
(6, 'Manggo Juice', 5, 'non-Coffee', 28000, 'drink3.jpg'),
(7, 'Strawberry Cheese Cake', 5, 'Snack', 35000, 'food3.jpg'),
(8, 'Salad', 5, 'Snack', 20000, 'food4.jpg'),
(9, 'Toast Creamy Brule with Egg', 5, 'Snack', 40000, 'food5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
