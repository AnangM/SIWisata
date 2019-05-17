-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2019 at 02:12 AM
-- Server version: 10.2.24-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5864817_pti18_db7`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata_foto`
--

CREATE TABLE `wisata_foto` (
  `id` int(7) NOT NULL,
  `id_lokasi` int(7) DEFAULT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata_lokasi`
--

CREATE TABLE `wisata_lokasi` (
  `id` int(7) NOT NULL,
  `nama` text NOT NULL,
  `deskripsi` text NOT NULL,
  `lat` text NOT NULL,
  `lon` text NOT NULL,
  `htm` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata_moda`
--

CREATE TABLE `wisata_moda` (
  `id` int(7) NOT NULL,
  `moda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata_review`
--

CREATE TABLE `wisata_review` (
  `id` int(7) NOT NULL,
  `id_lokasi` int(7) DEFAULT NULL,
  `review` text NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata_transportasi`
--

CREATE TABLE `wisata_transportasi` (
  `id` int(7) NOT NULL,
  `id_moda` int(7) DEFAULT NULL,
  `id_lokasi` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--
--
-- Indexes for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `wisata_lokasi`
--
ALTER TABLE `wisata_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata_moda`
--
ALTER TABLE `wisata_moda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata_review`
--
ALTER TABLE `wisata_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `wisata_transportasi`
--
ALTER TABLE `wisata_transportasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_moda` (`id_moda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata_lokasi`
--
ALTER TABLE `wisata_lokasi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata_moda`
--
ALTER TABLE `wisata_moda`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata_review`
--
ALTER TABLE `wisata_review`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata_transportasi`
--
ALTER TABLE `wisata_transportasi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  ADD CONSTRAINT `wisata_foto_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `wisata_review`
--
ALTER TABLE `wisata_review`
  ADD CONSTRAINT `wisata_review_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `wisata_transportasi`
--
ALTER TABLE `wisata_transportasi`
  ADD CONSTRAINT `wisata_transportasi_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_transportasi_ibfk_2` FOREIGN KEY (`id_moda`) REFERENCES `wisata_moda` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
