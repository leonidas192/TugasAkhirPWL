-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2020 pada 08.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Ikan Lele', 'Ikan Lele merupakan ikan air tawar', 'Ikan Tawar', '25000', 25, 'lele.jpg'),
(3, 'Ikan Gurame', 'Ikan Gurame merupakan air tawar', 'Ikan Tawar', '30000', 15, 'gurame.jpg'),
(4, 'Ikan Nila', 'Ikan Nila merupakan Air Tawar', 'Ikan Tawar', '35000', 10, 'nila.jpeg'),
(5, 'Ikan Tongkol', 'Ikan Tongkol merupakan ikan laut', 'Ikan Laut', '20000', 35, 'tongkol.jpg'),
(6, 'Ikan Tuna', 'Ikan Tuna merupakan ikan laut', 'Ikan Laut', '40000', 9, 'tuna.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
