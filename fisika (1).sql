-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 20 Jan 2023 pada 04.53
-- Versi server: 8.0.31
-- Versi PHP: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

DROP TABLE IF EXISTS `tb_materi`;
CREATE TABLE IF NOT EXISTS `tb_materi` (
  `id_materi` int NOT NULL AUTO_INCREMENT,
  `nama_materi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `nama_materi`, `status`) VALUES
(1, 'Usaha', 1),
(2, 'Tuas Pengungkit', 1),
(3, 'Bidang Miring', 1),
(4, 'Katrol', 1),
(5, 'Roda Bergerigi', 1),
(6, 'Gaya', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rule` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat_user`, `username`, `no_hp`, `password`, `rule`, `updated_at`, `created_at`) VALUES
(4, 'Desi2', 'Madiun', 'Desi20', '081234543668', '$2y$10$A5Am8R/mU.ECkkrXLmxhV.JAJIsZ1lRfpWNM7dkjv4YAxrQ/q5bam', NULL, '2023-01-08 16:05:45', '2021-07-19 01:59:36'),
(5, 'Admin', 'Madiun', 'admin', '082134654678', '$2y$10$.tKSLj4jyOqotoWrNj7m8uQwGsohL16xxNZ1NCi5O7ivWp91RmiTS', '1', '2021-07-19 02:05:59', '2021-07-19 02:05:59'),
(7, 'Susan', 'Magetan', 'susan', '085345645334', '$2y$10$ZS/oz9wVsarHfc6APGxHuOwbfGSqyb8l4HzJ3GMRufuox.JbkL9BW', '2', '2021-07-19 02:08:57', '2021-07-19 02:08:57'),
(8, 'agus', 'ponorogo', 'Agus', '085785987965', '$2y$10$d8lVGUy0Z4JggH8ooGJseuhnM0oFh/yAOAglnA1GqWgyjBMVfnMxC', '2', '2021-07-21 02:07:21', '2021-07-21 02:07:21'),
(9, 'user', 'user', 'user', '87687687', '$2y$10$o5CFl9uwvBRZDJH.tJpU.eqCAMgSivJC7OJkxubI2xsygvVp.5cuK', '2', '2023-01-08 16:46:12', '2023-01-08 16:46:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
