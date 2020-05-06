-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 09.25
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
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang_buku` varchar(30) NOT NULL,
  `edisi_buku` varchar(5) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang_buku`, `edisi_buku`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Pemrograman Microsoft Visual Basic 6', 'Kurniadi Adi', '5', 'Elex Media Computindo', 2008),
(2, 'Pengenalan Teknologi Informasi', 'Kadir Abdul', '2', 'Andi Offset', 2005),
(3, 'Basis Data', 'Fathansyah', '1', 'Informatika Bandung', 2007),
(4, 'Etika Komputer', 'Wahyono Teguh', '2', 'Andi Offset', 2009),
(5, 'Sistem Operasi', 'Hariyanto Bambang', '4', 'Informatika bandung', 2009),
(6, 'Sistem Operasi', 'Hariyanto Bambang', '3', 'Informatika Bandung', 2007),
(7, 'Pengenalan Komputer', 'Hartono Jogiyanto', '5', 'Andi Offset', 2005),
(8, 'Arsitektur Komputer', 'Hartanto Sri', '1', 'Bsi Press', 2006),
(9, 'Pengantar Logika dan Algoritma', 'Yulikuspartono', '1', 'Andi Offset', 2004),
(10, 'Sistem Operasi', 'Binanto Iwan', '1', 'Andi Offset', 2005),
(11, 'Memahami Sistem Informasi', 'Witarto', '1', 'Informatika Bandung', 2004),
(12, 'Jaringan Komputer', 'Sukmaaji Anjik', '1', 'Andi Offset', 2008),
(13, 'Teknik Digital', 'Santosa P.Insap', '3', 'Andi Offset', 1996),
(14, 'Pemrograman Database Visual Basic.Net', 'Yuswanto', '1', 'Prestasi Pustaka', 2007),
(15, 'Perancangan Sistem Informasi dan Aplikasinya', 'Kristanto, Andri', '1', 'Gava Media', 2008);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
