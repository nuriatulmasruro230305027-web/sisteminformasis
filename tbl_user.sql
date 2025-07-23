-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2025 pada 11.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(11) NOT NULL,
  `namaLengkap` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idMhs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `namaLengkap`, `email`, `username`, `password`, `idMhs`) VALUES
(1, 'rindi antika', 'rindi@gmail.com', 'rindi', '$2y$10$VLASDawP7aumuDWuK.ND1edhceVg94eIdzhpAtvZx231g7p6WhqoS', NULL),
(2, '', NULL, 'saka1', '$2y$10$R/e8z8dCu2BEVD.4/9jm7ubZ5k1Kdzlh8VqEqI.CNR7ud0/N5iL7q', NULL),
(3, 'rindi', 'rindi@gmail.com', 'yulia', '$2y$10$lYVfnnaPy3yCbUro5jut1OvsSBG6.7dZSl92wms6IxcZubI/31vyC', NULL),
(4, '', NULL, 'nuri', '$2y$10$rWu/lzK6Lr7kS0YTGKzZYu1GsVjdAuW9U2.OVvH65Sp77A4cXBbfa', NULL),
(5, '', NULL, 'hizbi1', '$2y$10$tFsCjSaeoF6HuIO/zWSJs.zTG79CrXyOmRhB78w1XiWAZK/4zRBpe', NULL),
(6, 'laela febriana', 'laela@gmail.com', '230305026', '$2y$10$9Ejz8QRwQXn1GfB.0f8TZ.O8kI9jlh94fO0.Dz.mgfSDgRwjSIFmS', 8),
(7, 'yulia dwi wahyuni', 'yulia@gmail.com', '230305011', '$2y$10$uWTPNc8qjn13PS5DtHlAsuGVxuQaUcQAqGdl3VjrNRbIw8ISc57u2', 9),
(8, '', NULL, 'farihatun', '$2y$10$YUUbhQ7XSv4RdLfh0GaDRuq1Lpr/e8HtbcBJMg1/Z5.Um.18FO39y', NULL),
(9, '', NULL, 'ria', '$2y$10$mHuH39kCcbdJUg70bi0WJ./2aTLEgSFN4KIbhvc3Uc5IB9KKxrqNa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idMhs` (`idMhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`idMhs`) REFERENCES `tbl_mahasiswa` (`idMhs`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
