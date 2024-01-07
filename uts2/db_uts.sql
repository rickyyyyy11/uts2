-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:06 AM
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
-- Database: `db_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbuts`
--

CREATE TABLE `dbuts` (
  `namapemesan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesanan` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbuts`
--

INSERT INTO `dbuts` (`namapemesan`, `alamat`, `nohp`, `email`, `pesanan`, `ukuran`, `jumlah`) VALUES
('Dira', 'kjgkjg', '09767890', 'rengstone10@gmail.com', 'Kaos', 'S', '15'),
('Ricky', 'Pamulang', '08383782793', 'ricky@gmail.com', 'Hem', 'XL', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbuts`
--
ALTER TABLE `dbuts`
  ADD PRIMARY KEY (`namapemesan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
