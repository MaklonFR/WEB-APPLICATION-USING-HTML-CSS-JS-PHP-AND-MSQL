-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2023 pada 16.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah_001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id`, `keterangan`, `file`) VALUES
(1, 'SMKN Negeri 1 Kuwus merupakan sekolah pilihan masyrakat yang berhasrat menghasilkan insan yang cerdas, kompetetif dan unggul', 'gambar1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Maklon Frare', 'maklon@gmail.com', '111xxx11', '085253442233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `jk` varchar(10) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nama_guru`, `nip`, `jk`, `mapel`, `alamat`) VALUES
(1, 'Miseltus Jebabun', '19927728178720011', 'Laki-Laki', 'Basis Data', 'Desa Kasong'),
(2, 'Hardianus Hambut', '19937628179720012', 'Laki-Laki', 'Dasar Program Keahlian', 'Desa Ntalung'),
(3, 'Sofiana Ndoe', '199428376489289001', 'Perempuan', 'PPKn', 'Desa Coal'),
(4, 'Arnoldus Harbino', '19929283746257', 'Laki-Laki', 'Mulok', 'Desa Cancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `jumlah_kelas` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `nama_jurusan`, `jumlah_kelas`) VALUES
(16, 'Agribisnis Tanaman Pangan dan Hortikultura', '7'),
(18, 'Agribinis Ternak Ruminansia', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `jumlah_siswa` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama_kelas`, `jurusan`, `jumlah_siswa`) VALUES
(1, 'X RPL A', 'Rekayasa Perangkat Lunak', '31'),
(2, 'X RPL B', 'Rekayasa Perangkat Lunak', '24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `nisn` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama_siswa`, `nisn`, `nis`, `jk`, `kelas`, `jurusan`, `alamat`) VALUES
(1, 'Aldrian Kosea', '5029099010', '123451', 'Laki-Laki', 'X RPL A', 'Rekayasa Perangkat Lunak', 'Waning'),
(2, 'Putriana Malua', '5432909810', '123452', 'Perempuan', 'XI ATPH A', 'Agribisnis Tanaman Pangan dan Hortikultura', 'Golowelu'),
(3, 'Flavius Jantung', '5029009871', '123455', 'Laki-Laki', 'XI RPL B', 'Rekayasa Perangkat Lunak', 'Suka Kiong'),
(4, 'Alexander Manuputu', '5324356780', '123453', 'Laki-Laki', 'XII ATR A', 'Agribisnis Ternak Ruminansia', 'Desa Lewur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
