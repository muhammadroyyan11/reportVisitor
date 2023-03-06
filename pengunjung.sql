-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 05:29 PM
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
-- Database: `pengunjung`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `dateTime` datetime NOT NULL,
  `wisata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `jumlah`, `golongan`, `dateTime`, `wisata_id`) VALUES
(1, 2, 'Dewasa', '2023-02-16 04:36:34', 1),
(2, 1, 'Anak', '2023-02-16 04:36:45', 1),
(3, 6, 'Dewasa', '2023-02-16 04:37:12', 1),
(4, 6, 'Anak', '2023-02-16 04:37:12', 1),
(5, 10, 'Dewasa', '2023-02-16 04:38:33', 2),
(6, 10, 'Anak', '2023-02-16 04:38:33', 1),
(7, 2, 'dewasa', '2023-02-26 08:54:30', 3),
(8, 1, 'Dewasa', '2023-02-26 04:16:33', 1),
(9, 0, 'Anak', '2023-02-26 04:16:42', 1),
(10, 14, 'Anak', '2023-02-26 04:25:35', 1),
(11, 2, 'Dewasa', '2023-03-03 02:21:16', 1),
(12, 2, 'Anak', '2023-03-03 02:21:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `wisata_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `role`, `password`, `is_active`, `wisata_id`) VALUES
(1, 'Administrator', 'admin', 'admin@admin.com', 1, '$2a$12$IdKRhrzKGD1lNCaLCVGfk.sqkR8LIkzr5yNbN6DlAMnQQnPChXRW.', 1, 0),
(2, 'User', 'user', 'user@user.com', 2, '$2a$12$jYPABfVC1znjp3QIMRYBduehjz0wcOyEZNQl0/kso//RopOrXESm2', 1, 1),
(3, 'Saya Testing', 'testing', 'royyan@mail.com', 2, '$2y$10$iW5BI5zIuk124YRA/UXbh.FPzC5Q0hP1eTAe6XQ18UXm6FqW4D.im', 1, 2),
(4, 'Saya User Testing', 'halo', 'halo@gmail.com', 2, '$2y$10$.bc16agPrG8NHSHNUldqKe8dPQHpcfLThzzybYfBAn25v.O/EkZeO', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `createdOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `createdOn`) VALUES
(1, 'Waduk Darma', '2023-02-14'),
(2, 'Balong Cigugur', '2023-02-14'),
(3, 'Balong Dalem', '2023-02-14'),
(4, 'Leuweung Monyet', '2023-02-14'),
(5, 'Cipaniis', '2023-02-14'),
(6, 'Talaga Remis', '2023-02-14'),
(7, 'Talaga Nilem', '2023-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`),
  ADD KEY `pengunjung_ibfk_1` (`wisata_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `wisata_id` (`wisata_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
