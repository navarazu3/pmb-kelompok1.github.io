-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 14.01
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  `is_logged_in` enum('0','1','','') NOT NULL,
  `is_activated` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `is_logged_in`, `is_activated`) VALUES
('admin', 'admin', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_bayar`
--

CREATE TABLE `konfirmasi_bayar` (
  `npm` int(8) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `npm` int(8) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(24) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `nohp_ortu` varchar(13) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `is_activated` enum('0','1') NOT NULL,
  `is_logged_in` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `konfirmasi_bayar`
--
ALTER TABLE `konfirmasi_bayar`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `npm` (`npm`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `npm` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
