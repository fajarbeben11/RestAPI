-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2020 pada 13.47
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `id_pengguna` varchar(10) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesan` varchar(10) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `nama_pemesan` varchar(15) NOT NULL,
  `email_pemesan` varchar(20) NOT NULL,
  `telp_pemesan` varchar(12) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesan`, `id_pengguna`, `nama_pemesan`, `email_pemesan`, `telp_pemesan`, `tgl_pesan`) VALUES
('APL000001', 'USER000001', 'Fajar Febrianto', 'fajarbeben@gmail.com', '089658416597', '2020-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`) VALUES
('USER000001', 'fajar_febrianto', 'fajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `bidang_industri` varchar(20) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `email_perusahaan` varchar(20) NOT NULL,
  `telp_perusahaan` varchar(12) NOT NULL,
  `tema` enum('Modern','Klasik','Elegan','Natural') NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_pemesanan`, `nama_perusahaan`, `bidang_industri`, `deskripsi_perusahaan`, `email_perusahaan`, `telp_perusahaan`, `tema`, `request`) VALUES
('USER000001', 'PT. Fajar Garment', 'Industri Garment', 'Memproduksi pakaian jadi dan perlengkapan pakaian                  ', 'fajar.garment@gmail.', '022658416597', 'Elegan', '-                            ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
