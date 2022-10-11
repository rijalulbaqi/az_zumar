-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 02:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `jumlah` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `tanggal`, `dari`, `jumlah`, `keterangan`) VALUES
(10, '2021-09-27', 'Badri', '10000', 'Donasi'),
(11, '2021-09-26', 'Rijalul Baqi', '1000000', 'Donasi');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_foto`
--

INSERT INTO `galeri_foto` (`id`, `foto`, `judul`, `deskripsi`, `updated_at`, `created_at`) VALUES
(9, '1630320314Rectangle 28.png', 'Pramukaan dalam rangka memperingati hari pramuka', 'Semua disini menggunakan sragam pramuka dalam rangka memperingati hari pramuka tahun 2021', '2021-08-30 17:45:14', '2021-08-30 06:04:47'),
(10, '16303202542.png', 'Mengaji dalam rangka memperingati tahun baru islam', 'Di masjid ini semua yang ada disini mengaji bersama dan mengkhatamkan Al-Qur\'an', '2021-08-30 17:44:14', '2021-08-30 13:11:27'),
(12, '16303202121.png', 'Bermain Sepakbola dan Bermain kelereng dalam rangka HUT RI', 'Lorem dan lain lain kita semua bermain main dan lomba makan krupuk HUT RI', '2021-08-30 17:43:32', '2021-08-30 13:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_video`
--

INSERT INTO `galeri_video` (`id`, `video`, `judul`, `deskripsi`, `updated_at`, `created_at`) VALUES
(17, 'https://www.youtube.com/embed/pUIFmbkYxmw', 'Mencoba', 'Mencoba', '2021-08-30 17:45:14', '2021-08-30 17:45:14'),
(19, 'https://www.youtube.com/embed/lGwWTCQkmQQ', 'Wajah Tok Dalang', 'Tok dalang adalah kakek upin ipin', '2021-08-30 17:45:14', '2021-08-30 17:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id` int(20) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `kegiatan` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id`, `tanggal`, `kegiatan`, `deskripsi`) VALUES
(15, '2021-08-30', 'Gatau', 'Kegiatan Ini Lancar'),
(16, '2021-09-08', 'Makan', 'Makan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `pemasukan` varchar(200) NOT NULL,
  `pengeluaran` varchar(200) NOT NULL,
  `saldo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`id`, `tanggal`, `uraian`, `pemasukan`, `pengeluaran`, `saldo`) VALUES
(6, '2021-09-26', 'Kotak Amala', '100000', '0', '110000'),
(7, '2021-09-26', 'Donasi Rijalul Baqi', '1000000', '0', '1110000'),
(8, '2021-09-26', 'Beli Besi', '0', '100000', '1010000'),
(9, '2021-10-09', 'Sembarang', '100000', '0', '1110000');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `membutuhkan` text NOT NULL,
  `kriteria` text NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `membutuhkan`, `kriteria`, `nomor`, `status`) VALUES
(1, 'Guru IPS', '<ol>\r\n	<li>Pria/Wanita</li>\r\n	<li>Beragama Islam</li>\r\n	<li>Rajin dan Cekatan</li>\r\n	<li>S1 Pendidikan IPS</li>\r\n</ol>', '628338821640', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_07_10_093453_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nomordonasi`
--

CREATE TABLE `nomordonasi` (
  `id` int(11) NOT NULL,
  `nomor_whatsapp` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomordonasi`
--

INSERT INTO `nomordonasi` (`id`, `nomor_whatsapp`, `deskripsi`) VALUES
(1, '6282338821642', '<p>Kami Menerima Donasi Berupa Uang, dan Barang atau Fasilitas</p>\r\n\r\n<p>No Rekening Yayasan Pendidikan Tahfidz Az-Zumar a/n yayasan tahfidz az-zumar</p>\r\n\r\n<p>BRI : 3569-224-0982-102</p>\r\n\r\n<p>BNI : 145-557-0984</p>\r\n\r\n<p>MANDIRI : 7659-099-2367</p>');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `isi_profil` text NOT NULL,
  `foto_struktur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `lembaga`, `foto_profil`, `isi_profil`, `foto_struktur`) VALUES
(1, 'Yayasan Az-Zumar', 'heroProfilYayasan.png', '<p>Yayasan ini berkembang sejak dulu dan semoga dapan memberikan manfaat bagi semua orang yang mendukung berdirinya yayasan ini</p>', 'STRUKTUR ORGANISASI SMPN 48 JKT 1.png'),
(2, 'TK', 'profilTK.png', '<p>Yayasan ini berkembang sejak dulu dan semoga dapan memberikan manfaat bagi semua orang yang mendukung berdirinya yayasan ini TK</p>\r\n\r\n<p>&nbsp;</p>', 'STRUKTUR18-R 1.png'),
(3, 'SD', 'Rectangle 9 (1).png', '<p>Yayasan ini berkembang sejak dulu dan semoga dapan memberikan manfaat bagi semua orang yang mendukung berdirinya yayasan ini SD</p>', 'Struktur-Organisasi-TK-Cendana-2020 1.png'),
(4, 'SMP', 'Rectangle 9 (2).png', '<p>Yayasan ini berkembang sejak dulu dan semoga dapan memberikan manfaat bagi semua orang yang mendukung berdirinya yayasan ini SMP</p>', 'strukturYayasan.png'),
(5, 'SMA', 'Rectangle 9.png', '<p>Yayasan ini berkembang sejak dulu dan semoga dapan memberikan manfaat bagi semua orang yang mendukung berdirinya yayasan ini SMA</p>', 'Untitled 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(20) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `kegiatan` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sd`
--

CREATE TABLE `sd` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `namapanggilan` varchar(20) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `jumlahsaudara` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nomortelepon` varchar(20) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tempatlahirayah` varchar(100) NOT NULL,
  `tanggallahirayah` varchar(100) NOT NULL,
  `agamaayah` varchar(20) NOT NULL,
  `pekerjaanayah` varchar(100) NOT NULL,
  `pendidikanayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tempatlahiribu` varchar(100) NOT NULL,
  `tanggallahiribu` varchar(100) NOT NULL,
  `agamaibu` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(100) NOT NULL,
  `pendidikanibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sd`
--

INSERT INTO `sd` (`id`, `namalengkap`, `namapanggilan`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `anakke`, `jumlahsaudara`, `alamat`, `nomortelepon`, `namaayah`, `tempatlahirayah`, `tanggallahirayah`, `agamaayah`, `pekerjaanayah`, `pendidikanayah`, `namaibu`, `tempatlahiribu`, `tanggallahiribu`, `agamaibu`, `pekerjaanibu`, `pendidikanibu`) VALUES
(3, 'Rijalul Baqi', 'Rijal', 'Malang', '2020-08-28', 'Laki-Laki', 'Islam', '1', '3', 'Pakisaji', '082338821640', 'Misdianto', 'Malang', '2020-08-28', 'Islam', 'Buruh', 'SD', 'Lilik', 'Malang', '2020-08-28', 'Islam', 'Buruh', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LKstmLPKP65BhSm70FBs4yXp8BkNGhdSvEYpm3OV', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR3RCME80cmhZUVVLSDBDQ2d6YVRmNHRaMTFXd09DQkdsQzRWVGhZNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvamVjdHBrbC9wdWJsaWMvZm90byI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhVTN2d2QvSnc2STF2eHQubDZDbE9PbGZrS2JQQWZ1WTg3Q0FneXU0OXZOSWlSdUpvZk00cSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYVUzdndkL0p3Nkkxdnh0Lmw2Q2xPT2xma0tiUEFmdVk4N0NBZ3l1NDl2TklpUnVKb2ZNNHEiO30=', 1642134572),
('zEvTGltq9PL3F4huAljcMOIEKrIROyrC3qgw732p', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOEpaam8wVUVITm1DYVJTdWdYeHJuaUdJM096QjI2UThRcjl1Y0pvQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb3dvbmdhbl9rZXJqYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhVTN2d2QvSnc2STF2eHQubDZDbE9PbGZrS2JQQWZ1WTg3Q0FneXU0OXZOSWlSdUpvZk00cSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYVUzdndkL0p3Nkkxdnh0Lmw2Q2xPT2xma0tiUEFmdVk4N0NBZ3l1NDl2TklpUnVKb2ZNNHEiO30=', 1633767018),
('zMVuIo3duQ2ntGR9S30NQPre2XEtq0TdcCg0vtkX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZzYxNWdlS2hSVFFHOHZjdWtERExGMVVNSzdXWDdWUmdpc3Zxb3lsRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ay9leHBvcnR0ayI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRhVTN2d2QvSnc2STF2eHQubDZDbE9PbGZrS2JQQWZ1WTg3Q0FneXU0OXZOSWlSdUpvZk00cSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYVUzdndkL0p3Nkkxdnh0Lmw2Q2xPT2xma0tiUEFmdVk4N0NBZ3l1NDl2TklpUnVKb2ZNNHEiO30=', 1638514406);

-- --------------------------------------------------------

--
-- Table structure for table `slide_foto`
--

CREATE TABLE `slide_foto` (
  `id` int(11) NOT NULL,
  `slide` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide_foto`
--

INSERT INTO `slide_foto` (`id`, `slide`, `foto`) VALUES
(1, 'Pertama', 'satu.jpeg'),
(2, 'Kedua', 'dua.jpg'),
(3, 'Ketiga', 'tiga.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sma`
--

CREATE TABLE `sma` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `namapanggilan` varchar(20) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `jumlahsaudara` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nomortelepon` varchar(20) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tempatlahirayah` varchar(100) NOT NULL,
  `tanggallahirayah` varchar(100) NOT NULL,
  `agamaayah` varchar(20) NOT NULL,
  `pekerjaanayah` varchar(100) NOT NULL,
  `pendidikanayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tempatlahiribu` varchar(100) NOT NULL,
  `tanggallahiribu` varchar(100) NOT NULL,
  `agamaibu` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(100) NOT NULL,
  `pendidikanibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sma`
--

INSERT INTO `sma` (`id`, `namalengkap`, `namapanggilan`, `nisn`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `anakke`, `jumlahsaudara`, `alamat`, `nomortelepon`, `namaayah`, `tempatlahirayah`, `tanggallahirayah`, `agamaayah`, `pekerjaanayah`, `pendidikanayah`, `namaibu`, `tempatlahiribu`, `tanggallahiribu`, `agamaibu`, `pekerjaanibu`, `pendidikanibu`) VALUES
(2, 'Rijalul Baqi', 'Rijal', '232423235', 'Malang', '2021-12-30', 'Laki-Laki', 'Islam', '1', '3', 'Pakisaji', '082338821640', 'Misdianto', 'Malang', '2021-12-31', 'Islam', 'Buruh', 'SD', 'Lilik', 'Malang', '2021-12-31', 'Islam', 'Buruh', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `smp`
--

CREATE TABLE `smp` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `namapanggilan` varchar(20) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `jumlahsaudara` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nomortelepon` varchar(20) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tempatlahirayah` varchar(100) NOT NULL,
  `tanggallahirayah` varchar(100) NOT NULL,
  `agamaayah` varchar(20) NOT NULL,
  `pekerjaanayah` varchar(100) NOT NULL,
  `pendidikanayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tempatlahiribu` varchar(100) NOT NULL,
  `tanggallahiribu` varchar(100) NOT NULL,
  `agamaibu` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(100) NOT NULL,
  `pendidikanibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smp`
--

INSERT INTO `smp` (`id`, `namalengkap`, `namapanggilan`, `nisn`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `anakke`, `jumlahsaudara`, `alamat`, `nomortelepon`, `namaayah`, `tempatlahirayah`, `tanggallahirayah`, `agamaayah`, `pekerjaanayah`, `pendidikanayah`, `namaibu`, `tempatlahiribu`, `tanggallahiribu`, `agamaibu`, `pekerjaanibu`, `pendidikanibu`) VALUES
(2, 'Rijalul Baqi', 'Rijal', '35928198', 'Malang', '1999-07-31', 'Laki-Laki', 'Islam', '1', '3', 'Pakisaji', '082338821640', 'Misdianto', 'Malang', '2021-12-31', 'Islam', 'Buruh', 'SD', 'Lilik', 'Malang', '2021-12-31', 'Islam', 'Buruh', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `murid` varchar(200) NOT NULL,
  `guru` varchar(200) NOT NULL,
  `ekstra` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `murid`, `guru`, `ekstra`) VALUES
(1, '561', '21', '7');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_pendaftaran`
--

CREATE TABLE `syarat_pendaftaran` (
  `id` int(11) NOT NULL,
  `syarat` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syarat_pendaftaran`
--

INSERT INTO `syarat_pendaftaran` (`id`, `syarat`, `status`) VALUES
(1, '<ul>\r\n	<li>Fotokopi A</li>\r\n	<li>Fotokopi B</li>\r\n	<li>Fotokopi C</li>\r\n	<li>Fotokopi D</li>\r\n	<li>Fotokopi E</li>\r\n</ul>', 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `namapanggilan` varchar(20) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `jumlahsaudara` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nomortelepon` varchar(20) NOT NULL,
  `namaayah` varchar(100) NOT NULL,
  `tempatlahirayah` varchar(100) NOT NULL,
  `tanggallahirayah` varchar(100) NOT NULL,
  `agamaayah` varchar(20) NOT NULL,
  `pekerjaanayah` varchar(100) NOT NULL,
  `pendidikanayah` varchar(100) NOT NULL,
  `namaibu` varchar(100) NOT NULL,
  `tempatlahiribu` varchar(100) NOT NULL,
  `tanggallahiribu` varchar(100) NOT NULL,
  `agamaibu` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(100) NOT NULL,
  `pendidikanibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`id`, `namalengkap`, `namapanggilan`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `anakke`, `jumlahsaudara`, `alamat`, `nomortelepon`, `namaayah`, `tempatlahirayah`, `tanggallahirayah`, `agamaayah`, `pekerjaanayah`, `pendidikanayah`, `namaibu`, `tempatlahiribu`, `tanggallahiribu`, `agamaibu`, `pekerjaanibu`, `pendidikanibu`) VALUES
(6, 'Rijalul Baqi', 'Rijal', 'Malang', '1999-07-31', 'Laki-Laki', 'Islam', '1', '3', 'Jl Tambaksari RT 06 RW 03 Desa Jatisari', '082338821640', 'Misdianto', 'Malang', '1973-08-18', 'Islam', 'Kuli', 'SD', 'Lilik', 'Malang', '1973-08-28', 'Islam', 'Buruh', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$aU3vwd/Jw6I1vxt.l6ClOOlfkKbPAfuY87CAgyu49vNIiRuJofM4q', '2021-07-10 02:45:41', '2021-07-10 02:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `yayasan`
--

CREATE TABLE `yayasan` (
  `id` int(11) NOT NULL,
  `foto_kepala` varchar(200) NOT NULL,
  `nama_kepala` varchar(200) NOT NULL,
  `sambutan` text NOT NULL,
  `foto_sekolah` varchar(300) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yayasan`
--

INSERT INTO `yayasan` (`id`, `foto_kepala`, `nama_kepala`, `sambutan`, `foto_sekolah`, `visi`, `misi`) VALUES
(1, 'fotokepala.png', 'Moh Abd Badri Rofailah, S.Kom', '<p>Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website yayasan ini dengan alamat www.yayasantahfidzazzumar.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Yayasan Pendidikan Tahfidz Az-Zumar yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas madrasah kami.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kami selaku pimpinan madrasah mengucapkan terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh yayasan. Dan tentunya Website yayasan kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>\r\n\r\n<p>Terima kasih semoga Allah &lsquo;Azza Wa Jalla menyertai doa kita semua amin.</p>\r\n\r\n<p>Wassalamualaikum Warahmatullah Wabarakatuh</p>', 'fotosekolah.png', '<p>Terwujudnya Insan Madrasah yang Religius, Cerdas, Terampil, Berprestasi dan Berwawasan Lingkungan Terwujudnya Insan Madrasah yang Religius, Cerdas, Terampil, Berprestasi dan Berwawasan LingkunganTerwujudnya Insan Madrasah yang Religius, Cerdas, Terampil, Berprestasi dan Berwawasan LingkunganTerwujudnya Insan Madrasah yang Religius, Cerdas, Terampil, Berprestasi dan Berwawasan Lingkungan</p>', '<p>Menanamkan aqidah Islam yang kuat melalui kegiatan keagamaan dan bermasyarakat dalam kehidupan sehari-hari. Meningkatkan mutu pendidikan dan pengajaran serta pembelajaran melalui integrasi dan interkoneksi keilmuan. Melaksanakan kegiatan pembelajaran dan bimbingan secara disiplin dan efektif guna mencapai prestasi akademik yang diinginkan. Melaksanakan kegiatan ekstrakurikuler yang berorientasi pada peningkatan prestasi dan pelatihan ketrampilan serta lebih menanamkan praktek kegiatan untuk bermasyarakat. Memberi bekal siswa/i untuk melanjutkan pendidikan ke perguruan tinggi atau berwirausaha. Meningkatkan kerja sama dengan perguruan tinggi dan masyarakat serta instansi terkait. Meningkatkan hubungan interaktif secara berkesinambungan dengan stakeholder yang ada. Melestarikan fungsi lingkungan, mencegah pencemaran, dan kerusakan lingkungan serta cinta alam.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomordonasi`
--
ALTER TABLE `nomordonasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd`
--
ALTER TABLE `sd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slide_foto`
--
ALTER TABLE `slide_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sma`
--
ALTER TABLE `sma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syarat_pendaftaran`
--
ALTER TABLE `syarat_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yayasan`
--
ALTER TABLE `yayasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nomordonasi`
--
ALTER TABLE `nomordonasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd`
--
ALTER TABLE `sd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_foto`
--
ALTER TABLE `slide_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sma`
--
ALTER TABLE `sma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smp`
--
ALTER TABLE `smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syarat_pendaftaran`
--
ALTER TABLE `syarat_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yayasan`
--
ALTER TABLE `yayasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
