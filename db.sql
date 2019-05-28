-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2019 at 10:49 AM
-- Server version: 5.7.26-0ubuntu0.19.04.1
-- PHP Version: 7.2.17-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisatai_admin`
--

CREATE TABLE `wisatai_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwd` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisatai_admin`
--

INSERT INTO `wisatai_admin` (`id`, `username`, `passwd`, `nama`, `email`) VALUES
(1, 'admin', '$6$rounds=5000$S1w154t432$2/rDoSU2rLot06TqWhjRrUKoQ2Q.GxUiu6G1RHVv8MwJkj/xfYlbLMQzNb0SNn3t3DAzH23ydzN4SJhRmvAmg/', '', 'admin@localhost'),
(2, 'adminDua', '$6$rounds=5000$S1w154t432$VI8s4P0a0Vg01O1KudoAtTZuz/K6N5Yzfr/..RVuON2qFocBIKqLenrHVlSv.Dktjvant7YPnf1X0tMFqFYSo.', 'Admin', 'admin2@localhost'),
(3, 'wkwk', '$6$rounds=5000$S1w154t432$VlMtCN7hMo2JxJsg6wMlp99jCLduXpFQag8oDU0a/eVvC3Cfv4NB9QMJ4kGYomRdOLibQw71QynmkuyKS8/B81', 'wkwk    ', 'wkwk@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wisata_foto`
--

CREATE TABLE `wisata_foto` (
  `id` int(7) NOT NULL,
  `id_lokasi` int(7) DEFAULT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata_foto`
--

INSERT INTO `wisata_foto` (`id`, `id_lokasi`, `url`) VALUES
(1, NULL, 'https://www.google.com/maps/place/Kec.+Kraton,+Kota+Yogyakarta,+Daerah+Istimewa+Yogyakarta/@-7.8090256,110.363649,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipPnn720xLzTrn6oQWfeAaeDlqfI9i9oYpIt-zrj!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipPnn720xLzTrn6oQWfeAaeDlqfI9i9oYpIt-zrj%3Dw196-h120-k-no!7i4471!8i2730!4m5!3m4!1s0x2e7a5791a5339209:0x4027a76e35300d0!8m2!3d-7.8090256!4d110.363649#'),
(2, NULL, 'https://i2.wp.com/www.maioloo.com/maioloo/wp-content/uploads/2016/06/Keraton-Yogyakarta.jpg?fit=1200%2C800&ssl=1'),
(3, NULL, 'https://upload.wikimedia.org/wikipedia/id/6/6e/Pendopo_Magangan_Keraton_Surakarta.jpg'),
(4, 3, 'https://asset.kompas.com/crop/100x108:900x642/750x500/data/photo/2017/06/28/230214839.jpg'),
(5, 2, 'https://www.nativeindonesia.com/wp-content/uploads/2017/08/wisata-candi-borobudur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wisata_foto_pertunjukan`
--

CREATE TABLE `wisata_foto_pertunjukan` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `id_pertunjukan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata_foto_pertunjukan`
--

INSERT INTO `wisata_foto_pertunjukan` (`id`, `url`, `id_pertunjukan`) VALUES
(1, 'http://www.borobudursunrise.net/images/upload/image/Ramayana%20Ballet%20Baru2.png', 1);

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

--
-- Dumping data for table `wisata_lokasi`
--

INSERT INTO `wisata_lokasi` (`id`, `nama`, `deskripsi`, `lat`, `lon`, `htm`) VALUES
(2, 'Candi Borobudurr', 'Candi Budha Terbesar Di Duniahfkyf', '-7.6078738', '110.2015626', 50000),
(3, 'Candi Prambanann', 'Candi Prambanan', '-7.7520206', '110.4892787', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `wisata_moda`
--

CREATE TABLE `wisata_moda` (
  `id` int(7) NOT NULL,
  `moda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata_moda`
--

INSERT INTO `wisata_moda` (`id`, `moda`) VALUES
(1, 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `wisata_pertunjukan`
--

CREATE TABLE `wisata_pertunjukan` (
  `id` int(7) NOT NULL,
  `nama` text NOT NULL,
  `detail` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata_pertunjukan`
--

INSERT INTO `wisata_pertunjukan` (`id`, `nama`, `detail`, `lat`, `lon`) VALUES
(1, 'Ramayana Balet', 'Ramayana Balet with REAL FIREEEEE', '-7.7520206 ', '110.4892787');

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

--
-- Dumping data for table `wisata_review`
--

INSERT INTO `wisata_review` (`id`, `id_lokasi`, `review`, `rating`) VALUES
(1, NULL, 'Luar Byasahhhhhh', 4);

-- --------------------------------------------------------

--
-- Table structure for table `wisata_review_pertunjukan`
--

CREATE TABLE `wisata_review_pertunjukan` (
  `id` int(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` double NOT NULL,
  `id_pertunjukan` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata_review_pertunjukan`
--

INSERT INTO `wisata_review_pertunjukan` (`id`, `nama`, `comment`, `rating`, `id_pertunjukan`) VALUES
(1, 'anonim', 'Kyaaaaa sugoiiiii', 4, 1);

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
-- Dumping data for table `wisata_transportasi`
--

INSERT INTO `wisata_transportasi` (`id`, `id_moda`, `id_lokasi`) VALUES
(1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisatai_admin`
--
ALTER TABLE `wisatai_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `wisata_foto_pertunjukan`
--
ALTER TABLE `wisata_foto_pertunjukan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertunjukan` (`id_pertunjukan`);

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
-- Indexes for table `wisata_pertunjukan`
--
ALTER TABLE `wisata_pertunjukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata_review`
--
ALTER TABLE `wisata_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `wisata_review_pertunjukan`
--
ALTER TABLE `wisata_review_pertunjukan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertunjukan` (`id_pertunjukan`);

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
-- AUTO_INCREMENT for table `wisatai_admin`
--
ALTER TABLE `wisatai_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wisata_foto_pertunjukan`
--
ALTER TABLE `wisata_foto_pertunjukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata_lokasi`
--
ALTER TABLE `wisata_lokasi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wisata_moda`
--
ALTER TABLE `wisata_moda`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata_pertunjukan`
--
ALTER TABLE `wisata_pertunjukan`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata_review`
--
ALTER TABLE `wisata_review`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata_review_pertunjukan`
--
ALTER TABLE `wisata_review_pertunjukan`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata_transportasi`
--
ALTER TABLE `wisata_transportasi`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata_foto`
--
ALTER TABLE `wisata_foto`
  ADD CONSTRAINT `wisata_foto_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `wisata_foto_pertunjukan`
--
ALTER TABLE `wisata_foto_pertunjukan`
  ADD CONSTRAINT `wisata_foto_pertunjukan_ibfk_1` FOREIGN KEY (`id_pertunjukan`) REFERENCES `wisata_pertunjukan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wisata_review`
--
ALTER TABLE `wisata_review`
  ADD CONSTRAINT `wisata_review_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `wisata_review_pertunjukan`
--
ALTER TABLE `wisata_review_pertunjukan`
  ADD CONSTRAINT `wisata_review_pertunjukan_ibfk_1` FOREIGN KEY (`id_pertunjukan`) REFERENCES `wisata_pertunjukan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wisata_transportasi`
--
ALTER TABLE `wisata_transportasi`
  ADD CONSTRAINT `wisata_transportasi_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `wisata_lokasi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_transportasi_ibfk_2` FOREIGN KEY (`id_moda`) REFERENCES `wisata_moda` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
