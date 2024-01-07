-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:51 AM
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
-- Database: `db_uts_06tplp007_rickywijaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsumen_rickywijaya`
--

CREATE TABLE `tbl_konsumen_rickywijaya` (
  `kd_konsumen_rickywijaya` varchar(11) NOT NULL,
  `nama_konsumen_rickywijaya` varchar(25) NOT NULL,
  `alamat_konsumen_rickywijaya` varchar(50) NOT NULL,
  `telp_konsumen_rickywijaya` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_konsumen_rickywijaya`
--

INSERT INTO `tbl_konsumen_rickywijaya` (`kd_konsumen_rickywijaya`, `nama_konsumen_rickywijaya`, `alamat_konsumen_rickywijaya`, `telp_konsumen_rickywijaya`) VALUES
('KD001', 'Ricky Wijaya', 'Pamulang', '08347284792');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_konsumen_rickywijaya`
--
ALTER TABLE `tbl_konsumen_rickywijaya`
  ADD PRIMARY KEY (`kd_konsumen_rickywijaya`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
