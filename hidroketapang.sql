-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:58 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidroketapang`
--

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `nama`, `id_user`, `fasilitas`, `owner`, `alamat`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Akhi Barbershop', 1, '<p>Y</p>', 'Mufidz', 'Sungai Awan', 25000, 'app/images/barber/-1609943523-gS4o3.jpg', '2021-01-06 07:32:03', '2021-01-06 16:00:00'),
(6, 'BangSat Barbershop', 1, '<p>Disini kami akan membuat customer senyaman mungkin dengan fasilitas berikut :</p><ul><li>Ruangan ber-AC</li><li>Tempat ibadah</li><li>Musik</li><li>Free WiFi</li><li>Free keramas</li></ul><p>Dan disini juga memiliki beberapa karyawan ahli yakni :</p><ul><li>Rahmad Batubara</li><li>Okta Luhut Setiyadi</li><li>Rama Sihotang</li><li>Noberto Lasut</li></ul><p>Disini juga menjual beberapa produk asli produksi dari kami yakni</p><ul><li>Pomade TegapNyancang</li><li>Shampoo cap Tikus Curut</li><li>Vitamin rambut NyakDie</li></ul><p>dengan harga yang terjangkau</p><p><br></p><p>Silahkan mampir di Barbershop kami gaes :)</p>', 'Noberto', 'Mulia Baru', 30000, 'app/images/barber/-1609962391-4N3BY.jpg', '2021-01-06 12:46:31', '2021-01-06 12:46:31'),
(7, 'king', 1, '<p>spa</p>', 'alex', 'washington dc', 25000, 'app/images/barber/-1609969434-tEdcF.jpg', '2021-01-06 14:43:54', '2021-01-06 14:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Fade', 'app/images/hairstyle/-1609965752-EgUDw.jpg', '2021-01-06 13:42:32', '2021-01-06 13:42:32'),
(2, 'Short Back and Sides', 'app/images/hairstyle/-1609966609-V2Mf4.jpg', '2021-01-06 13:56:49', '2021-01-06 13:56:49'),
(3, 'Pompadour', 'app/images/hairstyle/-1609966674-f69Ba.jpg', '2021-01-06 13:57:54', '2021-01-06 13:57:54'),
(4, 'Undercut', 'app/images/hairstyle/-1609966719-m97L2.jpg', '2021-01-06 13:58:40', '2021-01-06 13:58:40'),
(5, 'Man Bun', 'app/images/hairstyle/-1609967019-h593V.jpg', '2021-01-06 14:03:39', '2021-01-06 14:03:39'),
(6, 'Top Knot', 'app/images/hairstyle/-1609967061-T3ip1.jpg', '2021-01-06 14:04:21', '2021-01-06 14:04:21'),
(7, 'Side Part', 'app/images/hairstyle/-1609967122-B9ktS.jpg', '2021-01-06 14:05:22', '2021-01-06 14:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rhmdardnt12', 'Rahmad', 'rahmadardianto69@gmail.com', '$2y$10$bGLAxW.r9DQ0SF4NpppT1efuRMk608fODCOK2WV2avkH5IQNVs582', NULL, '2021-01-06 02:07:42', '2021-01-06 02:07:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
