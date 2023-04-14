-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 09:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk` varchar(44) NOT NULL,
  `ukuran` varchar(44) NOT NULL,
  `harga IDR` int(44) NOT NULL,
  `harga USD` int(11) NOT NULL,
  `gambar` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk`, `ukuran`, `harga IDR`, `harga USD`, `gambar`) VALUES
(1, 'Seeking for Comfort Small', '100 ml', 150000, 10, 'seeking for comfort.jpg'),
(2, 'Seeking for Comfort Large', '200 ml', 250000, 16, 'seeking for comfort.jpg'),
(3, 'Sweet French Vanilla Small', '100 ml', 150000, 10, 'sweet french vanilla.jpg'),
(4, 'Sweet French Vanilla Large', '200 ml', 250000, 16, 'sweet french vanilla.jpg'),
(5, 'Sleep Tight Lavender Small', '100 ml', 165000, 11, 'sleep tight lavender.jpg'),
(6, 'Sleep Tight Lavender Large', '200 ml', 265000, 17, 'sleep tight lavender.jpg'),
(7, 'Eternal Jasmine Blossom Small', '100 ml', 165000, 11, 'eternal jasmine blossom.jpg'),
(8, 'Eternal Jasmine Blossom Large', '200 ml', 265000, 17, 'eternal jasmine blossom.jpg'),
(9, 'Cookie Crumb Small', '100 ml', 150000, 10, 'cookie crumb.jpg'),
(10, 'Cookie Crumb Large', '200 ml', 250000, 16, 'cookie crumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
