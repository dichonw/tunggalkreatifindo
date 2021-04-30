-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2021 pada 11.42
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tunggalkreatifindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_event`
--

CREATE TABLE `tabel_event` (
  `id_event` varchar(11) NOT NULL,
  `nm_event` varchar(100) NOT NULL,
  `kt_event` varchar(500) NOT NULL,
  `tgl_event` date NOT NULL,
  `gmb_event` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jasa`
--

CREATE TABLE `tabel_jasa` (
  `id_jasa` varchar(11) NOT NULL,
  `nm_jasa` varchar(100) NOT NULL,
  `kt_jasa` varchar(500) NOT NULL,
  `tarif_jasa` int(11) NOT NULL,
  `gmb_jasa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_partner`
--

CREATE TABLE `tabel_partner` (
  `id_partner` varchar(11) NOT NULL,
  `nm_partner` varchar(100) NOT NULL,
  `gmb_partner` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_slide`
--

CREATE TABLE `tabel_slide` (
  `id_slide` varchar(50) NOT NULL,
  `gbr_slide` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(50) NOT NULL,
  `nm_user` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `log` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nm_user`, `email`, `password`, `level`, `status`, `log`) VALUES
(1, 'Admin', 'admin@tunggalkreatifindo.com', 'cf40ba304ec6dee5cd53ccb5a1c6322b', 'admin', 'active', '2021-01-16 03:10:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_event`
--
ALTER TABLE `tabel_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `tabel_jasa`
--
ALTER TABLE `tabel_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `tabel_partner`
--
ALTER TABLE `tabel_partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `tabel_slide`
--
ALTER TABLE `tabel_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
