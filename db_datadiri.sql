-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2019 pada 05.00
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datadiri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_table_data`
--

CREATE TABLE `db_table_data` (
  `id` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Nomor_Hp` varchar(50) NOT NULL,
  `Hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_table_data`
--

INSERT INTO `db_table_data` (`id`, `NIM`, `Nama`, `Tempat_Lahir`, `Tanggal_lahir`, `Alamat`, `Nomor_Hp`, `Hobi`) VALUES
(1, 'e1e118025', 'abab', 'kedari', '898', 'jkd098', '098', 'kj'),
(2, '', '', '', '2019-06-04', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_table_data`
--
ALTER TABLE `db_table_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_table_data`
--
ALTER TABLE `db_table_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
