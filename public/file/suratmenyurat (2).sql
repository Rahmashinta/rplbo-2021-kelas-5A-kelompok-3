-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 05.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratmenyurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisisuratmasuk`
--

CREATE TABLE `disposisisuratmasuk` (
  `id` int(11) NOT NULL,
  `nomorSurat` varchar(100) NOT NULL,
  `tanggalSurat` date NOT NULL,
  `perihalSurat` varchar(100) NOT NULL,
  `asalSurat` varchar(100) NOT NULL,
  `penerimaDisposisi` varchar(100) NOT NULL,
  `sifatSurat` varchar(100) NOT NULL,
  `isiDisposisi` varchar(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `penerimaPengembalian` varchar(100) NOT NULL,
  `tanggalPengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `disposisisuratmasuk`
--

INSERT INTO `disposisisuratmasuk` (`id`, `nomorSurat`, `tanggalSurat`, `perihalSurat`, `asalSurat`, `penerimaDisposisi`, `sifatSurat`, `isiDisposisi`, `catatan`, `penerimaPengembalian`, `tanggalPengembalian`) VALUES
(8, '0425/77/234', '2021-11-21', 'Permohonan Pengiriman Utusan Kegiatan', 'Dinas Pendidikan Pemuda dan Olahraga', 'Wakil Kepala Sekolah', 'Segera', 'Hadiri', 'Mohon tidak memisahkan lembar disposisi dari suratnya', 'Staf Tata Usaha', '2021-12-01'),
(12, 'ASSA', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00'),
(13, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00'),
(14, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00'),
(15, '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00'),
(16, 'a', '2021-12-22', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `levelakses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `levelakses`) VALUES
(1, 'afiana', 'afiana', 'Afiana Nabilla Zulfa', 'Resepsionis'),
(2, 'rahma', 'rahma', 'Rahma Shinta', 'Staf Tata Usaha'),
(3, 'zahri', 'zahri', 'Firman Zahri', 'Kepala Tata Usaha'),
(4, 'aria', 'aria', 'Aria Lesmana', 'Kepala Sekolah'),
(6, 'lara', 'lara', 'lara', 'resepsionis'),
(7, 'budi', 'budi', 'budi', 'Resepsionis'),
(8, 'ani', 'ani', 'ani', 'Resepsionis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL,
  `penerimaSurat` varchar(100) NOT NULL,
  `nomorSurat` varchar(100) NOT NULL,
  `tanggalSurat` date NOT NULL,
  `perihalSurat` varchar(100) NOT NULL,
  `kategoriSurat` varchar(100) NOT NULL,
  `fileSurat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `penerimaSurat`, `nomorSurat`, `tanggalSurat`, `perihalSurat`, `kategoriSurat`, `fileSurat`) VALUES
(1, 'Wali Murid', '', '2021-11-21', 'Undangan Rapat', 'Rahasia', 'basis data SI (3).docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratlegalisir`
--

CREATE TABLE `suratlegalisir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tahunAjaran` varchar(100) NOT NULL,
  `fileSurat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratlegalisir`
--

INSERT INTO `suratlegalisir` (`id`, `nama`, `kelas`, `tahunAjaran`, `fileSurat`) VALUES
(1, 'Rahma Shinta', 'IX4', '2021', 'Skill Up .pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `asalSurat` varchar(100) NOT NULL,
  `nomorSurat` varchar(100) NOT NULL,
  `tanggalSurat` date NOT NULL,
  `perihalSurat` varchar(100) NOT NULL,
  `kategoriSurat` varchar(100) NOT NULL,
  `fileSurat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `asalSurat`, `nomorSurat`, `tanggalSurat`, `perihalSurat`, `kategoriSurat`, `fileSurat`) VALUES
(4, 'Dinas Pendidikan Pemuda dan Olahraga', '0425/77/234', '2021-11-21', 'permohonan pengiriman utusan kegiatan', 'Dinas', 'skenario.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disposisisuratmasuk`
--
ALTER TABLE `disposisisuratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratlegalisir`
--
ALTER TABLE `suratlegalisir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `disposisisuratmasuk`
--
ALTER TABLE `disposisisuratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `suratlegalisir`
--
ALTER TABLE `suratlegalisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
