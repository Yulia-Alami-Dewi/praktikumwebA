-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2020 pada 10.53
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination_makanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan_indonesia`
--

CREATE TABLE `makanan_indonesia` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(30) NOT NULL,
  `asal_makanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan_indonesia`
--

INSERT INTO `makanan_indonesia` (`id_makanan`, `nama_makanan`, `asal_makanan`) VALUES
(1, 'Rendang', 'Sumatera Barat'),
(2, 'Sate', 'Jawa'),
(3, 'Gado-Gado', 'Betawi'),
(4, 'Bika Ambon', 'Medan'),
(5, 'Pempek', 'Sumatera Selatan'),
(6, 'Kerak Telor', 'Jakarta'),
(7, 'Gudeg', 'Yogyakarta'),
(8, 'Mie Aceh', 'Aceh'),
(9, 'Gulai Ikan Patin', 'Jambi'),
(10, 'Otak-Otak', 'Kepulauan Riau'),
(11, 'Surabi', 'Jawa Barat'),
(12, 'Lumpia', 'Jawa Tengah'),
(13, 'Rujak Cingur', 'Jawa Timur'),
(14, 'Ayam Betutu', 'Bali'),
(15, 'Soto Banjar', 'Kalimantan Selatan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan_indonesia`
--
ALTER TABLE `makanan_indonesia`
  ADD PRIMARY KEY (`id_makanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
