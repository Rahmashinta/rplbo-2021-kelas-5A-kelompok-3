-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 09:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jumpp', 'naruto.jpg', '2021-11-13 04:48:29', '2021-11-28 18:27:36'),
(2, 'One Piece', 'one-piece', 'Eichi Oda', 'Gramedia', 'onepiece.jpg', '2021-11-13 04:48:29', '2021-11-13 04:48:29'),
(8, 'rubah udul', 'rubah-udul', 'o', 'o', '1637304074_38091d013cf435974bae.jpg', '2021-11-18 23:35:48', '2021-11-19 00:41:14'),
(12, 'Coba lagi', 'coba-lagi', 'coba', 'coba', '1637304120_6a8d3a9c9a2c9f14ad4e.jpg', '2021-11-19 00:41:41', '2021-11-19 00:42:00'),
(17, 'kkkkkkkkkk', 'kkkkkkkkkk', '', '', 'default.jpg', '2021-11-19 09:40:13', '2021-11-19 09:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-19-142443', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1637332310, 1),
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1637806368, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Arsipatra Saptono', 'Psr. Sudiarto No. 299, Pagar Alam 90504, Kepri', '1972-06-30 07:09:12', '2021-11-19 09:16:04'),
(2, 'Martani Najmudin', 'Dk. Salak No. 27, Malang 98938, Kaltara', '1994-10-17 21:57:04', '2021-11-19 09:16:04'),
(3, 'Yuliana Novitasari S.Pt', 'Kpg. Sutan Syahrir No. 194, Jayapura 37709, Pabar', '2020-02-28 22:05:41', '2021-11-19 09:16:04'),
(4, 'Ganjaran Tampubolon', 'Jln. S. Parman No. 873, Prabumulih 52129, Kaltim', '1994-06-22 20:15:25', '2021-11-19 09:16:04'),
(5, 'Dalima Pudjiastuti', 'Ds. Suharso No. 655, Probolinggo 51410, DIY', '1981-03-29 22:26:13', '2021-11-19 09:16:04'),
(6, 'Shakila Wastuti', 'Kpg. Yos Sudarso No. 120, Pekanbaru 79842, Bali', '1992-05-07 20:13:32', '2021-11-19 09:16:04'),
(7, 'Lanang Gamanto Gunawan S.Psi', 'Psr. Diponegoro No. 112, Malang 66649, Gorontalo', '2005-04-24 03:18:41', '2021-11-19 09:16:04'),
(8, 'Jaeman Jail Waluyo', 'Gg. Gading No. 193, Palu 88913, NTT', '2003-07-06 12:59:50', '2021-11-19 09:16:04'),
(9, 'Cindy Mayasari', 'Dk. Ahmad Dahlan No. 298, Cilegon 55400, Jambi', '2003-12-19 18:28:10', '2021-11-19 09:16:04'),
(10, 'Chelsea Padmasari', 'Dk. R.M. Said No. 453, Jambi 60304, Jambi', '2011-03-11 04:35:25', '2021-11-19 09:16:04'),
(11, 'Suci Utami S.E.', 'Ki. Umalas No. 505, Palu 86889, Sulut', '1977-04-22 02:00:59', '2021-11-19 09:16:04'),
(12, 'Nova Wulandari S.IP', 'Dk. Rajawali Barat No. 704, Parepare 89395, Kalsel', '1971-06-28 03:15:54', '2021-11-19 09:16:04'),
(13, 'Mustika Megantara S.Sos', 'Jln. Merdeka No. 82, Tual 63444, Riau', '1991-03-02 09:46:09', '2021-11-19 09:16:04'),
(14, 'Olivia Wastuti M.Farm', 'Kpg. Supomo No. 813, Jambi 11216, Sultra', '1991-07-18 00:43:48', '2021-11-19 09:16:04'),
(15, 'Rafi Budiyanto', 'Dk. Jend. Sudirman No. 799, Pekanbaru 98617, Sulteng', '2014-11-30 15:00:19', '2021-11-19 09:16:04'),
(16, 'Vivi Laksita', 'Kpg. Aceh No. 752, Solok 41506, Sulteng', '1985-04-25 06:00:11', '2021-11-19 09:16:04'),
(17, 'Ajiono Zulkarnain', 'Gg. Bakau No. 455, Parepare 70741, DIY', '1982-04-03 02:16:09', '2021-11-19 09:16:04'),
(18, 'Shakila Pertiwi', 'Jln. Gotong Royong No. 6, Binjai 74763, Papua', '2016-08-24 05:33:35', '2021-11-19 09:16:04'),
(19, 'Cinta Rahmi Wastuti', 'Jln. K.H. Maskur No. 171, Bekasi 70203, Sulsel', '1988-12-07 16:38:02', '2021-11-19 09:16:04'),
(20, 'Luis Wardaya Wijaya S.Gz', 'Ki. Bhayangkara No. 154, Kotamobagu 10828, Kaltim', '2007-05-24 12:39:47', '2021-11-19 09:16:04'),
(21, 'Belinda Laksita', 'Psr. Wahid No. 838, Administrasi Jakarta Utara 65956, Kaltim', '1997-10-26 20:08:38', '2021-11-19 09:16:05'),
(22, 'Darijan Kusumo', 'Psr. Cikutra Timur No. 571, Payakumbuh 76622, Jambi', '2008-01-24 23:48:56', '2021-11-19 09:16:05'),
(23, 'Bagus Sihotang', 'Jln. Basuki Rahmat  No. 977, Balikpapan 54782, DIY', '2008-10-09 08:58:24', '2021-11-19 09:16:05'),
(24, 'Puti Winarsih', 'Jr. Sukajadi No. 712, Balikpapan 75303, Maluku', '1974-05-13 21:27:50', '2021-11-19 09:16:05'),
(25, 'Kambali Irawan M.Ak', 'Psr. Sam Ratulangi No. 271, Banjar 93178, Pabar', '1992-07-01 18:03:29', '2021-11-19 09:16:05'),
(26, 'Ade Ardianto S.Gz', 'Jr. Kebonjati No. 463, Administrasi Jakarta Utara 24044, Babel', '1989-09-11 13:36:54', '2021-11-19 09:16:05'),
(27, 'Maida Carla Hasanah', 'Jr. Rajiman No. 568, Malang 55490, Pabar', '1977-12-01 05:22:34', '2021-11-19 09:16:05'),
(28, 'Sarah Shania Halimah', 'Dk. Fajar No. 157, Bekasi 91825, Kaltara', '1975-02-06 20:35:02', '2021-11-19 09:16:05'),
(29, 'Damar Widodo', 'Ki. K.H. Maskur No. 373, Gunungsitoli 25002, Bengkulu', '2007-07-21 01:14:26', '2021-11-19 09:16:05'),
(30, 'Bakiono Mandala S.Psi', 'Psr. Hasanuddin No. 722, Cilegon 52256, Babel', '1972-03-25 23:03:16', '2021-11-19 09:16:05'),
(31, 'Salimah Astuti', 'Jr. Baja Raya No. 312, Kotamobagu 78880, Sulsel', '1983-01-20 21:44:35', '2021-11-19 09:16:05'),
(32, 'Rosman Pranowo', 'Jln. Baranang No. 275, Solok 49423, Babel', '2012-10-24 15:44:07', '2021-11-19 09:16:05'),
(33, 'Gading Firgantoro', 'Psr. Baja Raya No. 550, Bekasi 70142, Gorontalo', '1992-03-21 08:49:44', '2021-11-19 09:16:05'),
(34, 'Violet Safitri', 'Kpg. Basmol Raya No. 505, Bontang 36465, Papua', '2020-09-01 21:46:56', '2021-11-19 09:16:05'),
(35, 'Cornelia Maryati', 'Kpg. Taman No. 499, Makassar 19847, NTT', '1988-03-09 14:47:17', '2021-11-19 09:16:05'),
(36, 'Ina Lestari', 'Ki. Rajawali Barat No. 219, Kediri 72337, Banten', '2008-07-21 04:55:44', '2021-11-19 09:16:05'),
(37, 'Paulin Vicky Laksmiwati S.E.', 'Jln. Suniaraja No. 377, Padangpanjang 45346, Jambi', '2009-11-13 01:30:42', '2021-11-19 09:16:05'),
(38, 'Panji Prasetyo M.Ak', 'Jln. Warga No. 437, Denpasar 80700, Sulut', '2009-09-04 18:48:59', '2021-11-19 09:16:05'),
(39, 'Jarwi Pratama', 'Dk. Warga No. 902, Langsa 89492, Gorontalo', '2019-10-01 15:15:29', '2021-11-19 09:16:05'),
(40, 'Uda Halim', 'Dk. Imam No. 334, Ambon 75813, Bengkulu', '1995-08-04 04:12:20', '2021-11-19 09:16:05'),
(41, 'Ifa Rahayu Mulyani S.H.', 'Gg. Jagakarsa No. 241, Ternate 22096, NTT', '1992-06-19 14:34:10', '2021-11-19 09:16:05'),
(42, 'Prasetya Olga Mandala S.Farm', 'Jln. Bakit  No. 424, Pekanbaru 66791, Bali', '2005-03-06 11:03:11', '2021-11-19 09:16:05'),
(43, 'Tami Patricia Maryati', 'Kpg. Badak No. 231, Tasikmalaya 92026, NTB', '1972-07-22 15:43:41', '2021-11-19 09:16:05'),
(44, 'Nrima Gada Wacana S.T.', 'Gg. Astana Anyar No. 518, Palembang 26560, Jatim', '2004-08-18 14:39:50', '2021-11-19 09:16:05'),
(45, 'Cengkal Hakim', 'Ki. Cikutra Timur No. 513, Lhokseumawe 23732, Bali', '1995-01-10 00:47:46', '2021-11-19 09:16:05'),
(46, 'Ibrahim Saragih', 'Jln. Barat No. 850, Bekasi 99416, Lampung', '1972-01-19 15:45:03', '2021-11-19 09:16:05'),
(47, 'Farhunnisa Laksmiwati', 'Ki. Yogyakarta No. 448, Kotamobagu 86091, Sumut', '1977-04-28 20:42:12', '2021-11-19 09:16:05'),
(48, 'Ayu Hasanah', 'Psr. Sam Ratulangi No. 920, Parepare 67184, Aceh', '1988-05-07 23:38:39', '2021-11-19 09:16:05'),
(49, 'Ilsa Aryani', 'Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 566, Banjarmasin 88761, Kaltara', '2002-11-06 21:31:14', '2021-11-19 09:16:05'),
(50, 'Kariman Rangga Widodo', 'Gg. Abdul. Muis No. 844, Kotamobagu 27755, Maluku', '2018-02-09 16:21:30', '2021-11-19 09:16:05'),
(51, 'Dewi Prastuti S.Sos', 'Ds. Yoga No. 699, Sabang 46805, Sumut', '1997-04-28 12:28:25', '2021-11-19 09:16:05'),
(52, 'Keisha Palastri', 'Jr. Ciwastra No. 847, Surabaya 46804, Sultra', '1989-02-19 22:56:33', '2021-11-19 09:16:05'),
(53, 'Maida Laksmiwati', 'Psr. Rajawali Timur No. 173, Tegal 25284, Kalteng', '1996-01-29 02:12:21', '2021-11-19 09:16:05'),
(54, 'Daru Gambira Siregar', 'Kpg. Jaksa No. 629, Semarang 14662, Sulbar', '1997-11-17 01:06:30', '2021-11-19 09:16:05'),
(55, 'Nadine Fathonah Mardhiyah S.Gz', 'Ds. Jend. Sudirman No. 302, Banjarbaru 40435, Kaltim', '2007-09-28 21:41:47', '2021-11-19 09:16:05'),
(56, 'Okta Gandi Sihombing S.Farm', 'Gg. Urip Sumoharjo No. 842, Langsa 10906, Riau', '1994-12-13 07:53:15', '2021-11-19 09:16:05'),
(57, 'Janet Talia Andriani', 'Psr. Industri No. 311, Sorong 94055, Kalbar', '2002-10-01 02:02:37', '2021-11-19 09:16:05'),
(58, 'Ciaobella Wulan Pudjiastuti', 'Jln. Moch. Toha No. 597, Administrasi Jakarta Pusat 39076, Jabar', '1981-11-29 04:52:57', '2021-11-19 09:16:05'),
(59, 'Nardi Oman Hardiansyah', 'Gg. Astana Anyar No. 662, Tarakan 77259, DKI', '1996-01-18 18:39:18', '2021-11-19 09:16:05'),
(60, 'Unjani Safitri', 'Kpg. Untung Suropati No. 215, Gunungsitoli 36517, Gorontalo', '1995-05-06 14:37:35', '2021-11-19 09:16:05'),
(61, 'Bakti Mandala S.IP', 'Jln. Bata Putih No. 47, Binjai 44697, Lampung', '1974-06-26 04:10:03', '2021-11-19 09:16:05'),
(62, 'Sabrina Clara Haryanti', 'Ds. HOS. Cjokroaminoto (Pasirkaliki) No. 432, Surabaya 42916, Sulut', '2015-12-13 07:50:00', '2021-11-19 09:16:05'),
(63, 'Tantri Zulaika', 'Ds. Setia Budi No. 537, Tanjung Pinang 14873, Jatim', '1997-11-03 03:10:38', '2021-11-19 09:16:05'),
(64, 'Embuh Ramadan', 'Jr. Acordion No. 446, Administrasi Jakarta Selatan 35719, Kaltara', '1976-09-13 12:31:33', '2021-11-19 09:16:05'),
(65, 'Cawisadi Gandi Tampubolon', 'Jln. Abang No. 35, Tebing Tinggi 97479, Sumsel', '2016-01-21 21:27:10', '2021-11-19 09:16:05'),
(66, 'Oni Purnawati', 'Gg. Cokroaminoto No. 620, Madiun 99877, Gorontalo', '2021-08-04 15:46:42', '2021-11-19 09:16:05'),
(67, 'Yuliana Farida S.Psi', 'Psr. Bakau Griya Utama No. 909, Pasuruan 70605, Kalteng', '1973-12-23 05:52:59', '2021-11-19 09:16:05'),
(68, 'Padma Wulandari', 'Ki. Baranang No. 384, Blitar 69419, Kepri', '2020-07-07 18:56:12', '2021-11-19 09:16:05'),
(69, 'Lanjar Lega Ramadan', 'Jr. Bak Air No. 405, Bandar Lampung 92601, DIY', '1973-03-19 18:12:34', '2021-11-19 09:16:05'),
(70, 'Bakidin Putra', 'Gg. Bata Putih No. 569, Surakarta 90673, Jatim', '2007-10-01 07:18:48', '2021-11-19 09:16:05'),
(71, 'Maimunah Winarsih M.M.', 'Ds. Bappenas No. 316, Tasikmalaya 64263, Papua', '1998-05-25 10:53:23', '2021-11-19 09:16:05'),
(72, 'Uli Yolanda', 'Jr. Baranang Siang No. 326, Malang 54898, Sumsel', '2016-04-18 01:53:31', '2021-11-19 09:16:05'),
(73, 'Calista Elisa Aryani', 'Ki. Basuki Rahmat  No. 273, Malang 75909, Jambi', '1972-01-21 02:25:27', '2021-11-19 09:16:05'),
(74, 'Jono Maras Budiman S.E.', 'Ds. Gatot Subroto No. 552, Batam 97803, Jabar', '1990-11-04 02:02:29', '2021-11-19 09:16:05'),
(75, 'Puspa Zulaika', 'Ds. B.Agam 1 No. 375, Cimahi 82197, Babel', '2018-11-07 17:34:00', '2021-11-19 09:16:05'),
(76, 'Caraka Hardiansyah', 'Kpg. Yos Sudarso No. 629, Pariaman 60174, Pabar', '2005-02-24 16:38:44', '2021-11-19 09:16:05'),
(77, 'Hardi Nababan S.T.', 'Psr. Asia Afrika No. 392, Gorontalo 81708, Jambi', '1993-06-16 20:03:02', '2021-11-19 09:16:05'),
(78, 'Ida Padmasari S.Farm', 'Jln. BKR No. 133, Subulussalam 36437, NTT', '2005-03-26 22:18:39', '2021-11-19 09:16:05'),
(79, 'Pranawa Gunarto', 'Psr. Ters. Buah Batu No. 903, Administrasi Jakarta Selatan 65174, DIY', '1972-05-27 12:25:13', '2021-11-19 09:16:05'),
(80, 'Kasiyah Pratiwi', 'Psr. Bank Dagang Negara No. 473, Makassar 20156, Sumsel', '1993-04-15 13:43:32', '2021-11-19 09:16:05'),
(81, 'Paulin Uyainah', 'Psr. Umalas No. 241, Bekasi 43449, Kalsel', '1980-05-22 18:21:33', '2021-11-19 09:16:05'),
(82, 'Kayla Purwanti', 'Ki. Jaksa No. 475, Batam 60955, Kaltim', '1975-11-11 07:18:02', '2021-11-19 09:16:05'),
(83, 'Mulyono Limar Maheswara', 'Dk. Ters. Jakarta No. 350, Malang 16239, Riau', '1983-01-09 18:44:03', '2021-11-19 09:16:05'),
(84, 'Yessi Usamah', 'Jr. Adisucipto No. 294, Metro 53505, Gorontalo', '1978-02-03 13:55:11', '2021-11-19 09:16:05'),
(85, 'Winda Wulandari', 'Jr. Bagis Utama No. 659, Gunungsitoli 10216, Riau', '1996-12-08 10:59:00', '2021-11-19 09:16:05'),
(86, 'Zamira Sadina Rahayu M.Ak', 'Gg. Ekonomi No. 455, Bandung 63771, Pabar', '1977-02-17 06:38:17', '2021-11-19 09:16:05'),
(87, 'Saka Hardiansyah', 'Jln. Daan No. 473, Kediri 76073, Aceh', '1994-11-04 03:03:28', '2021-11-19 09:16:05'),
(88, 'Lulut Thamrin', 'Ds. Jamika No. 133, Bogor 17967, Jateng', '2017-10-26 03:36:40', '2021-11-19 09:16:05'),
(89, 'Cinthia Nurdiyanti', 'Ds. B.Agam 1 No. 659, Bukittinggi 82783, Kepri', '2004-12-28 00:35:51', '2021-11-19 09:16:05'),
(90, 'Upik Purwadi Nainggolan', 'Jln. Bayam No. 262, Dumai 20853, Papua', '2021-11-02 03:50:25', '2021-11-19 09:16:05'),
(91, 'Nabila Carla Usamah S.Sos', 'Ds. Aceh No. 295, Batu 49950, Kaltara', '1978-08-20 20:21:12', '2021-11-19 09:16:05'),
(92, 'Danang Ajiono Suwarno M.Farm', 'Ki. Lembong No. 18, Palangka Raya 46793, Sumbar', '2019-07-25 02:40:22', '2021-11-19 09:16:05'),
(93, 'Icha Anggraini', 'Jr. Gajah No. 232, Banjarmasin 62156, Gorontalo', '2007-09-18 13:59:42', '2021-11-19 09:16:05'),
(94, 'Balijan Eja Pradana M.M.', 'Jr. Kusmanto No. 662, Bekasi 75020, NTT', '1973-09-21 23:10:53', '2021-11-19 09:16:05'),
(95, 'Kayun Sirait', 'Kpg. Zamrud No. 501, Sukabumi 55041, Sulteng', '1981-01-23 22:14:33', '2021-11-19 09:16:05'),
(96, 'Catur Limar Hutagalung', 'Jr. Rajawali Barat No. 652, Salatiga 73452, Pabar', '1984-11-10 22:10:29', '2021-11-19 09:16:05'),
(97, 'Rina Lestari', 'Ki. Urip Sumoharjo No. 433, Bogor 69316, Jateng', '1978-06-13 13:59:11', '2021-11-19 09:16:05'),
(98, 'Eli Suartini', 'Jln. Casablanca No. 121, Tegal 60430, Kepri', '2009-10-13 23:12:53', '2021-11-19 09:16:05'),
(99, 'Jane Uyainah S.Sos', 'Ds. Bara No. 68, Bukittinggi 95196, Aceh', '1979-11-14 21:42:06', '2021-11-19 09:16:05'),
(100, 'Hafshah Sudiati S.T.', 'Jr. Asia Afrika No. 609, Cilegon 72636, Sultra', '1997-06-17 00:01:41', '2021-11-19 09:16:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
