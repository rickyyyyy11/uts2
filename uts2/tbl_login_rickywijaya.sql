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
-- Table structure for table `tbl_login_rickywijaya`
--

CREATE TABLE `tbl_login_rickywijaya` (
  `username_rickywijaya` varchar(20) NOT NULL,
  `password_rickywijaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login_rickywijaya`
--

INSERT INTO `tbl_login_rickywijaya` (`username_rickywijaya`, `password_rickywijaya`) VALUES
('ricky', 'ricky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login_rickywijaya`
--
ALTER TABLE `tbl_login_rickywijaya`
  ADD PRIMARY KEY (`username_rickywijaya`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
