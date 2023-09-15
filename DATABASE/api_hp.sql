-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2023 pada 12.53
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_anggota` varchar(10) NOT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_anggota`, `telepon`, `alamat`, `email`, `status`) VALUES
(1, 'Adi Tiya Wiranda', 'A001', '089654715638', 'Kota Alam Permai', 'aditwiran19@gmail.com', 'Aktif'),
(2, 'Soebarjo', 'A002', '0896653781', 'Jl Imam Bonjol', 'soekbar@gmail.com', 'Tidak Aktif'),
(3, 'Jailani Ladjanidi', 'A003', '08966526324', 'Jl Megawati', 'jaijai@gmail.com', 'Aktif'),
(4, 'Ronaldo Speed', 'A004', '082345313132', 'Jl Pulang Kampung', 'CRgoat@gmail.com', 'Aktif'),
(5, 'Ivan Perisic', 'A005', '083435422435', 'Jl kencana', 'ivan1122@gmail.com', 'Aktif'),
(7, 'Fretz Butuan', 'A006', '083664456565', 'Jl jambu', 'fretzaja11@gmail.com', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE `hp` (
  `id` int(11) NOT NULL,
  `handphone` varchar(150) NOT NULL,
  `merk_hp` varchar(150) NOT NULL,
  `harga` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`id`, `handphone`, `merk_hp`, `harga`) VALUES
(1, 'Redmi 9', 'Redmi', 1800000),
(2, 'Samsung J1', 'Samsung', 2000000),
(3, 'Infinix Zero 5G', 'Infinix', 3000000),
(4, 'OPPO A96', 'OPPO', 3200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, '1234qwerty', 1, 0, 0, NULL, 0),
(2, 1, 'd7398ca2cc032fe855cbb28081d5af66', 1, 0, 0, NULL, 1),
(3, 2, '2d83d73c34a231e67a93bc21b323df58', 1, 0, 0, NULL, 1),
(4, 3, 'c74f868497e70eeebc5c37b4144c9a39', 1, 0, 0, NULL, 1),
(5, 4, '1c83a2c9798ac39d2f839f9dc64b30f7', 1, 0, 0, NULL, 1),
(6, 5, '5a036b08d2c7e164ff154d7d32f448c8', 1, 0, 0, NULL, 1),
(7, 6, '505e3ad8e0fe073996f2ef53e6da0eaf', 1, 0, 0, NULL, 1),
(8, 7, '9ae6b1cd677929024ac81022d9b37171', 1, 0, 0, NULL, 1),
(9, 8, '49e1a480b6257a35d709a4b1c4b640cf', 1, 0, 0, NULL, 1),
(10, 9, '673a5d92c85ee058b78cb2b5aecba39e', 1, 0, 0, NULL, 1),
(11, 10, '29012576140951be6990848be1243940', 1, 0, 0, NULL, 1),
(12, 11, '3497f47112924281988938d02255143c', 1, 0, 0, NULL, 1),
(13, 12, '629deea1c25832b295f43babda2e3588', 1, 0, 0, NULL, 1),
(14, 13, '894495577de6ffa4b268e6494b503f93', 1, 0, 0, NULL, 1),
(15, 14, '129c28752d0d312b4b5ce0f5de192329', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('A','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'Admin', 'admin123', 'A'),
(2, 'Adit', 'adi0510', '0510', 'P'),
(3, 'sarah', 'sarah123', 'argenjuara', 'P'),
(4, 'Messi', 'MesiiGOAT', '123messi', 'P'),
(7, 'Jordi Amat', 'Amat', 'indo21', 'P'),
(9, 'Agus', 'banten', '56565', 'P'),
(10, 'rafi', 'rafi', '123', 'P'),
(11, 'susu', 'aden', '12345', 'P'),
(12, 'Jenita Janet', 'Jenet', '12345', 'P'),
(13, 'Joko Sosilo ', 'SBY', '12345', 'P'),
(14, 'agus', 'agus', '123', 'P');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `hp`
--
ALTER TABLE `hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
