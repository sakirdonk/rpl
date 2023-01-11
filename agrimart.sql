-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 11, 2023 at 10:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(100) DEFAULT NULL,
  `jawaban` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Untuk kripik kaca ada rasa apa saja?', 'Kita menyediakan 4 varian rasa yaitu Original, Cabe Ijo, Cabe Merah, dan Extra Pedas'),
(4, 'Rasa yang Terlaris itu apa?', 'Rasa yang paling laris itu Extra Pedas'),
(5, 'Ukuran ada yang berapa aja?', 'Kami menyediakan Keripik kaca dengan kemasan ukuran 50 gram dan 100 gram'),
(6, 'Harga berapa?', 'Harga tergantung dari ukuran 50 gram dengan harga 6.000 sedangkan 100 gram dengan harga 12.000'),
(7, 'Kalau beli banyak harganya bisa dikurangi gak?', 'Kita ada fitur paket hemat kak, beli paket (Kelipatan 10pcs) dapat diskon 10% + free ongkir');

-- --------------------------------------------------------

--
-- Table structure for table `harga_kota`
--

CREATE TABLE `harga_kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(45) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_kota`
--

INSERT INTO `harga_kota` (`id`, `nama_kota`, `harga`) VALUES
(1, 'Jakarta', 8000),
(2, 'Depok', 0),
(3, 'Bogor', 8000),
(4, 'Bekasi', 12000),
(5, 'Bandung', 16000),
(6, 'Sukabumi', 20000),
(7, 'Banjar', 20000),
(8, 'Tasikmalaya', 20000),
(9, 'Cimahi', 20000),
(10, 'Cirebon', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jumlah_pemesanan` int(11) DEFAULT NULL,
  `harga_kota_id` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `produk_id`, `user_id`, `alamat`, `jumlah_pemesanan`, `harga_kota_id`, `total_harga`, `tanggal_pemesanan`) VALUES
(1, 2, 1, 'Jl. Nangka', 2, 2, 24000, '2023-01-10'),
(3, 4, 1, 'Jl. Jakarta', 2, 5, 40000, '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `nama_produk` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama_produk`, `stock`, `harga`, `deskripsi`, `foto`) VALUES
(2, '0001', 'Keripik kaca original 100gram', 6, 12000, 'Rasa : Asin dan dan gurih, Berat  : 100 gram, Ukuran : 12x20 cm', '21.jpeg'),
(3, '0002', 'Keripik kaca cabe ijo 100gram', 6, 12000, 'Rasa : Sedikit pedas dan gurih, Berat  : 100 gram, Ukuran 12x20 cm', '100gr-cajo.jpeg'),
(4, '0003', 'Keripik kaca cabe merah 100gram', 6, 12000, 'Rasa : Pedas dan gurih, Berat  : 100 gram, Ukuran : 12x20 cm', '100gr-came.jpeg'),
(5, '0004', 'Keripik kaca extra pedas 100gram', 6, 12000, 'Rasa : Sangat pedas dan gurih, Berat : 100 gram, Ukuran : 12x20 cm', '100gr-expe.jpeg'),
(6, '0005', 'Keripik kaca original 50gram', 6, 6000, 'Rasa : Asin dan gurih, Berat : 50 gram, Ukuran : 9x13 cm', '50gr-ori.jpeg'),
(7, '0006', 'Keripik kaca cabe ijo 50gram', 6, 6000, 'Rasa : Sedikit pedas dan gurih, Berat : 50 gram, Ukuran : 9x13 cm', '50gr-cajo.jpeg'),
(8, '0007', 'Keripik kaca cabe merah 50gram', 6, 6000, 'Rasa : Pedas dan gurih, Berat : 50 gram, Ukuran : 9x13 cm', '50gr-came.jpeg'),
(9, '0008', 'Keripik kaca extra pedas 50gram', 6, 6000, 'Rasa : Sangat pedas dan gurih, Berat : 50 gram, Ukuran : 9x13 cm', '50gr-expe.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `proses_pengiriman`
--

CREATE TABLE `proses_pengiriman` (
  `id` int(11) NOT NULL,
  `nomor_pemesananan_id` int(11) DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `nomor_resi` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses_pengiriman`
--

INSERT INTO `proses_pengiriman` (`id`, `nomor_pemesananan_id`, `total_harga`, `nomor_resi`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL),
(3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `text` varchar(45) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `produk_id`, `text`, `rating`) VALUES
(1, 1, 2, 'Bergizi', 4.7),
(2, 2, 2, 'Enak, murah, pengiriman juga cepet', 4.5),
(3, 3, 3, 'Enak, murah, pengiriman juga cepet', 4.5),
(4, 4, 4, 'Enak, murah, pengiriman juga cepet', 4.2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `nohp` varchar(45) DEFAULT NULL,
  `membership` enum('ya','tidak') DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `nohp`, `membership`, `foto`) VALUES
(1, 'muha21240ti', 'c3082632621d05d7ffc366b81ebeab2c', '12313', 'user', '0827726427', 'tidak', NULL),
(2, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', 'admin', '08138986927', 'ya', NULL),
(3, 'Saira Tamara', 'b123d262390f476d987cb837c431881f', 'saira@gmail.com', 'user', '083678542678', 'ya', NULL),
(4, 'Fairuz Mumtaz', '9876975df1726466c02db08ea1b7a6aa', 'fairuz@gmail.com', 'user', '083253456738', 'tidak', NULL),
(5, 'Rafa Azzima', '637af7a9d60d3c9314c6996df1b6e197', 'rafa@gmail.com', 'user', '089765678765', 'tidak', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_kota`
--
ALTER TABLE `harga_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `harga_kota_id` (`harga_kota_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proses_pengiriman`
--
ALTER TABLE `proses_pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`harga_kota_id`) REFERENCES `harga_kota` (`id`),
  ADD CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
