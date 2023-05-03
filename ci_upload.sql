-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 10:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `judul`, `gambar`) VALUES
(1, 'gambar 1', 'Analysis-amico.png'),
(2, 'gambar 2', 'Resume-pana.png'),
(3, 'gambar 3', 'Resume-pana.png'),
(4, 'new gambar', '2021-05-01-new_gambar.png'),
(5, 'new', 'Resume-pana.png'),
(6, 'new 1', 'Analysis-amico.png'),
(7, 'new gambar', '2021-05-01-new_gambar.png'),
(8, 'new', '2021-05-01-new.jpg'),
(9, 'gambar 1', '2021-05-01-gambar_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
