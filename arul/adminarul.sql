-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 04.38
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminarul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `poto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `nama`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `poto`) VALUES
(1, 'Isagi Yoichi', 'Laki-Laki', 'Isekai ', '019273017237', 'isagi@gmail.com', 'isagi.jpg'),
(2, 'Nagi Seishiro', 'Laki-Laki', 'Isekai', '0273487134', 'nagi@gmail.com', 'nagi.jpg'),
(9, 'Bachira', 'Laki-Laki', 'Isekai', '0685674564', 'bachira@gmail.com', 'bachira.jpg'),
(18, '', '', '', '', '', ''),
(19, '', '', '', '', '', ''),
(20, '', '', '', '', '', ''),
(21, '', 'Laki-Laki', '', '', '', ''),
(22, '', 'Laki-Laki', '', '', '', ''),
(23, '', 'Laki-Laki', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(20) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `no` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jenis_produk` varchar(100) NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `tnggal_exp` datetime(6) NOT NULL,
  `poto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`no`, `nama_produk`, `jenis_produk`, `harga_produk`, `stok`, `tnggal_exp`, `poto`) VALUES
(1, 'Ramen', 'Makanan', 'Rp.30,000', 32, '2023-03-07 07:57:32.000000', 'ramen.jpg'),
(2, 'Mochi', 'Makanan', 'Rp.10,000', 10, '2023-03-07 07:57:32.000000', 'mochi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
