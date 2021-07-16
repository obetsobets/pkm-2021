-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jul 2021 pada 00.29
-- Versi server: 8.0.22
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppv2_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int NOT NULL,
  `kode_provinsi` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `kode_provinsi`, `nama`) VALUES
(0, 'id-xx', '#N/A'),
(1, 'id-ac', 'Prov. Aceh'),
(2, 'id-ba', 'Prov. Bali'),
(3, 'id-bb', 'Prov. Bangka Belitung'),
(4, 'id-bt', 'Prov. Banten'),
(5, 'id-be', 'Prov. Bengkulu'),
(6, 'id-yo', 'Prov. D.I. Yogyakarta'),
(7, 'id-jk', 'Prov. D.K.I. Jakarta'),
(8, 'id-go', 'Prov. Gorontalo'),
(9, 'id-ja', 'Prov. Jambi'),
(10, 'id-jr', 'Prov. Jawa Barat'),
(11, 'id-jt', 'Prov. Jawa Tengah'),
(12, 'id-ji', 'Prov. Jawa Timur'),
(13, 'id-kb', 'Prov. Kalimantan Barat'),
(14, 'id-ks', 'Prov. Kalimantan Selatan'),
(15, 'id-kt', 'Prov. Kalimantan Tengah'),
(16, 'id-ki', 'Prov. Kalimantan Timur'),
(17, 'id-ku', 'Prov. Kalimantan Utara'),
(18, 'id-kr', 'Prov. Kepulauan Riau'),
(19, 'id-1024', 'Prov. Lampung'),
(20, 'id-ma', 'Prov. Maluku'),
(21, 'id-la', 'Prov. Maluku Utara'),
(22, 'id-nb', 'Prov. Nusa Tenggara Barat'),
(23, 'id-nt', 'Prov. Nusa Tenggara Timur'),
(24, 'id-pa', 'Prov. Papua'),
(25, 'id-ib', 'Prov. Papua Barat'),
(26, 'id-ri', 'Prov. Riau'),
(27, 'id-sr', 'Prov. Sulawesi Barat'),
(28, 'id-se', 'Prov. Sulawesi Selatan'),
(29, 'id-st', 'Prov. Sulawesi Tengah'),
(30, 'id-sg', 'Prov. Sulawesi Tenggara'),
(31, 'id-sw', 'Prov. Sulawesi Utara'),
(32, 'id-sb', 'Prov. Sumatera Barat'),
(33, 'id-sl', 'Prov. Sumatera Selatan'),
(34, 'id-su', 'Prov. Sumatera Utara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
