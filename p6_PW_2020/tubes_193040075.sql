-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 10.42
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `no`, `gambar`, `ukuran`, `warna`, `keterangan`, `harga`) VALUES
(1, 1, 'hijauarmy.jpg', 'M', 'Hijau Army', 'Tersedia', 100),
(2, 2, 'putih.jpg', 'M,L,XL', 'Putih', 'Tersedia', 100),
(3, 3, 'merah.jpg', 'L,XL', 'Merah', 'Habis', 100),
(4, 4, 'hitam.jpg', 'XL', 'Hitam', 'Habis', 100),
(5, 5, 'abuabu.jpg', 'S,M,L,XL', 'Abu Abu', 'Tersedia', 100),
(6, 6, 'biru.jpg', 'L,XL', 'Biru', 'Tersedia', 100),
(7, 7, 'birupolo.jpg', 'M,L', 'Biru', 'Habis', 130),
(8, 8, 'birus.jpg', 'S', 'Biru', 'Tersedia', 110),
(9, 9, 'kuning.jpg', 'S,M', 'Kuning', 'Habis', 110),
(10, 10, 'merahmaroon.jpg', 'M,L,XL', 'Merah Maroon', 'Habis', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
