-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 01:38 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_b4s3`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa_tb`
--

CREATE TABLE `diagnosa_tb` (
  `id` int(11) NOT NULL,
  `kode_diagnos` varchar(25) NOT NULL,
  `name_diagnose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa_tb`
--

INSERT INTO `diagnosa_tb` (`id`, `kode_diagnos`, `name_diagnose`) VALUES
(1, 'Z00.0', 'PEMERIKSAAN KESEHATAN UMUM'),
(2, 'Z00.1', 'PEMERIKSAAN KESEHATAN ANAK RUTIN'),
(5, 'Z00.2', ''),
(7, 'Z00.3', ''),
(8, 'Z00.4', 'PEMERIKSAAN KEJIWAAN UMUM'),
(9, 'Z00.5', 'PEMERIKSAAN POTENSI DONOR ORGAN DAN JARINGAN'),
(10, 'Z00.6', ''),
(11, 'Z00.8', 'PEMERIKSAAN UMUM LAINNYA'),
(12, 'Z01.0', 'PEMERIKSAAN MATA DAN PENGELIHATAN'),
(13, 'Z01.1', 'PEMERIKSAAN TELINGA DAN PENDENGARAN'),
(14, 'Z01.2', 'PEMERIKSAAN GIGI'),
(15, 'Z01.3', 'PEMERIKSAAN TEKANAN DARAH'),
(16, 'tessss', 'svascv');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_pass` varchar(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id_user`, `user_name`, `user_pass`, `nama`, `email`) VALUES
(1, 'juno_jun', '12345', '', ''),
(2, 'byan', 'byan', 'byan', 'byan'),
(3, '22', '11', 'byan', 'byan'),
(4, 'asdf', 'asdf', 'asdf', 'asdf'),
(5, 'scac', '11', 'scac', 'acacs'),
(6, 'juno123', 'juno', 'juno elek', 'juno@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa_tb`
--
ALTER TABLE `diagnosa_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa_tb`
--
ALTER TABLE `diagnosa_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
