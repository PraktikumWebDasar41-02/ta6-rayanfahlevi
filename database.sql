-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 17.30
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('6701170061', '', '', '', '', 'Pilih', ''),
('6701170071', 'ucup', 'D3MI-41-02', 'laki-laki', 'Renang,Bola,Volly', 'FakultasIlmuTerapan', 'bogor'),
('6701174012', 'angga', 'D3MI-41-02', 'Dll', 'Renang,Bola,Volly,Badmint', 'IlmuTerapan', 'Semarang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
