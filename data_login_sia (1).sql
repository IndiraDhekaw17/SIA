-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 08:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_login_sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuns`
--

CREATE TABLE `akuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akuns`
--

INSERT INTO `akuns` (`id`, `kode_akun`, `nama_akun`, `saldo_awal`, `saldo_akhir`, `kategori`, `created_at`, `updated_at`) VALUES
(15, 5514, 'Beban Penyusutan Komputer & Elektronik', 0, 0, 'Pengeluaran', '2023-03-26 20:37:08', '2023-03-26 20:37:08'),
(16, 5513, 'Beban Penghapusan Piutang', 0, 0, 'Pengeluaran', '2023-03-26 20:37:57', '2023-03-26 20:37:57'),
(17, 5512, 'Beban Kewajiban Imbalan Kerja', 0, 0, 'Pengeluaran', '2023-03-26 20:38:24', '2023-03-26 20:38:24'),
(18, 5511, 'Beban Transfer Bank', 0, 0, 'Pengeluaran', '2023-03-26 20:39:15', '2023-03-26 20:39:15'),
(19, 5510, 'Beban Pajak Kendaraan & PBB', 0, 0, 'Pengeluaran', '2023-03-26 20:39:44', '2023-03-26 20:39:44'),
(20, 5509, 'Beban Perijinan dan Lisensi - SKA, SBU, dan IMB', 0, 0, 'Pengeluaran', '2023-03-26 21:03:48', '2023-03-26 21:03:48'),
(21, 5508, 'Beban Reparasi & Renovasi Rumah Tangga', 0, 0, 'Pengeluaran', '2023-03-26 21:04:18', '2023-03-26 21:04:18'),
(22, 5507, 'Beban Servis kendaraan & Servis Elektronik', 0, 0, 'Pengeluaran', '2023-03-26 21:04:48', '2023-03-26 21:04:48'),
(23, 5506, 'Perpustakaan & Langganan Media', 0, 0, 'Pengeluaran', '2023-03-26 21:05:31', '2023-03-26 21:05:31'),
(24, 5505, 'Beban Transportasi, Parkir & BBM', 0, 0, 'Pengeluaran', '2023-03-26 21:06:30', '2023-03-26 21:06:30'),
(25, 5504, 'Beban Keamanan & Iuran', 0, 0, 'Pengeluaran', '2023-03-26 21:06:50', '2023-03-26 21:06:50'),
(26, 5503, 'Beban Konsumsi & Rumah Tangga', 0, 0, 'Pengeluaran', '2023-03-26 21:09:18', '2023-03-26 21:09:18'),
(27, 5502, 'Beban Internet & Telekomunikasi', 0, 0, 'Pengeluaran', '2023-03-26 21:10:11', '2023-03-26 21:10:11'),
(28, 5501, 'Beban Listrik, PDAM, dan Sampah', 0, 0, 'Pengeluaran', '2023-03-26 21:10:51', '2023-03-26 21:10:51'),
(29, 5500, 'Beban ATK, FC & Percetakan', 0, 0, 'Pengeluaran', '2023-03-26 21:11:42', '2023-03-26 21:11:42'),
(30, 5401, 'Beban Sewa Lainnya', 0, 0, 'Pengeluaran', '2023-03-26 21:12:07', '2023-03-26 21:12:07'),
(31, 5400, 'Beban Sewa Kantor', 0, 0, 'Pengeluaran', '2023-03-26 21:12:43', '2023-03-26 21:12:43'),
(32, 5310, 'BPJS Ketenagakerjaan', 0, 0, 'Pengeluaran', '2023-03-26 21:13:05', '2023-03-26 21:13:05'),
(33, 5309, 'Asuransi & BPJS Ketenagakerjaan', 0, 0, 'Pengeluaran', '2023-03-26 21:13:42', '2023-03-26 21:13:42'),
(34, 5308, 'Pengobatan & Beban RS Karyawan', 0, 0, 'Pengeluaran', '2023-03-26 21:14:30', '2023-03-26 21:14:30'),
(35, 5307, 'Sumbangan untuk Karyawan', 0, 0, 'Pengeluaran', '2023-03-26 21:15:08', '2023-03-26 21:15:08'),
(36, 5306, 'Tunjangan Pelatihan Karyawan', 0, 0, 'Pengeluaran', '2023-03-26 21:15:43', '2023-03-26 21:15:43'),
(37, 5305, 'Tunjangan Pendidikan', 0, 0, 'Pengeluaran', '2023-03-26 21:16:13', '2023-03-26 21:16:13'),
(38, 5304, 'Tunjangan Hari Raya/Natal', 0, 0, 'Pengeluaran', '2023-03-26 21:17:43', '2023-03-26 21:17:51'),
(39, 5302, 'Bonus dan Insentif Karyawan', 0, 0, 'Pengeluaran', '2023-03-26 21:19:11', '2023-03-26 21:19:11'),
(40, 5301, 'Honor Pegawai Part Time / Harian', 0, 0, 'Pengeluaran', '2023-03-26 21:19:45', '2023-03-26 21:19:45'),
(41, 5300, 'Beban Gaji Pokok dan Tunjangan', 0, 0, 'Pengeluaran', '2023-03-26 21:20:05', '2023-03-26 21:20:05'),
(42, 5209, 'Beban Honorarium Pendukung Proyek', 0, 0, 'Pengeluaran', '2023-03-26 21:20:31', '2023-03-26 21:20:31'),
(43, 5208, 'Beban Honorarium Tenaga Ahli', 0, 0, 'Pengeluaran', '2023-03-26 21:20:56', '2023-03-26 21:20:56'),
(44, 5207, 'Beban Lembur Staf & TA - Program', 0, 0, 'Pengeluaran', '2023-03-26 21:21:23', '2023-03-26 21:21:23'),
(45, 5206, 'Beban ATK, cetak & Fotokopi Prog', 0, 0, 'Pengeluaran', '2023-03-26 21:21:54', '2023-03-26 21:21:54'),
(46, 5205, 'Beban Akomodasi, Konsumsi staf & TA - Prog', 0, 0, 'Pengeluaran', '2023-03-26 21:22:59', '2023-03-26 21:22:59'),
(47, 5204, 'Beban Transportasi, Perjalanan Staf, & TA - Prog', 0, 0, 'Pengeluaran', '2023-03-26 21:23:37', '2023-03-26 21:23:37'),
(48, 5203, 'Beban Pos & Telekomunikasi Prog', 0, 0, 'Pengeluaran', '2023-03-26 21:24:10', '2023-03-26 21:24:10'),
(49, 5202, 'Beban Perlengkapan & Peralatan', 0, 0, 'Pengeluaran', '2023-03-26 21:24:35', '2023-03-26 21:24:35'),
(50, 5201, 'Beban Mobilisasi & Demobilisasi Prog ( Pencarian data, Survei, Rakor, FGD & sejenisnya)', 0, 0, 'Pengeluaran', '2023-03-26 21:25:40', '2023-03-26 21:25:40'),
(51, 5105, 'Beban Pemasaran lainnya', 0, 0, 'Pengeluaran', '2023-03-26 21:26:35', '2023-03-26 21:26:35'),
(52, 5104, 'Beban ATK, cetak, Fotokopi Pemasaran, & Lelang', 0, 0, 'Pengeluaran', '2023-03-26 21:27:32', '2023-03-26 21:27:32'),
(53, 5103, 'Beban Akomodasi, Konsumsi, Lembur Pemasaran, & Lelang', 0, 0, 'Pengeluaran', '2023-03-26 21:28:17', '2023-03-26 21:28:17'),
(54, 5102, 'Beban Transportasi, Perjalanan Dinas Pemasaran, & Lelang', 0, 0, 'Pengeluaran', '2023-03-26 21:29:50', '2023-03-26 21:29:50'),
(55, 5101, 'Komisi/Fee Marketing', 0, 0, 'Pengeluaran', '2023-03-26 21:30:23', '2023-03-26 21:30:23'),
(56, 5100, 'Beban Iklan, Sponsorship & Promosi', 0, 0, 'Pengeluaran', '2023-03-26 21:31:18', '2023-03-26 21:31:18'),
(57, 5000, 'BEBAN USAHA', 0, 0, 'Pengeluaran', '2023-03-26 21:31:46', '2023-03-26 21:31:46'),
(58, 4030, 'Pendapatan Profit Share Ke Perusahaan Lain', 0, 0, 'Pengeluaran', '2023-03-26 21:32:57', '2023-03-26 21:32:57'),
(59, 4020, 'Pendapatan Profit Share dari Perusahaan Lain', 0, 0, 'Pendapatan', '2023-03-26 21:33:42', '2023-03-26 21:36:28'),
(60, 4010, 'Pendapatan Usaha Proyek Pengadaan', 0, 0, 'Pendapatan', '2023-03-26 21:34:40', '2023-03-26 21:36:20'),
(61, 4000, 'PENDAPATAN', 0, 0, 'Pendapatan', '2023-03-26 21:36:10', '2023-03-26 21:36:10'),
(62, 3450, 'Prive Pemilik 5', 0, 0, 'Pasiva', '2023-03-26 21:36:58', '2023-03-26 21:36:58'),
(63, 3430, 'Prive Pemilik 4', 0, 0, 'Pasiva', '2023-03-26 21:37:37', '2023-03-26 21:37:37'),
(64, 3420, 'Prive Pemilik 3', 0, 0, 'Pasiva', '2023-03-26 21:38:12', '2023-03-26 21:39:08'),
(65, 3410, 'Prive Pemilik 2', 0, 0, 'Pasiva', '2023-03-26 21:38:36', '2023-03-26 21:38:36'),
(66, 3400, 'Prive Pemilik 1', 0, 0, 'Pasiva', '2023-03-26 21:38:55', '2023-03-26 21:38:55'),
(67, 3300, 'Laba Tahun Berjalan', 0, 0, 'Pasiva', '2023-03-26 21:39:29', '2023-03-26 21:39:29'),
(68, 3200, 'Laba Ditahan', 0, 0, 'Pasiva', '2023-03-26 21:39:49', '2023-03-26 21:39:49'),
(69, 3140, 'Modal Pemilik 5', 0, 0, 'Pasiva', '2023-03-26 21:40:14', '2023-03-26 21:40:14'),
(70, 3130, 'Modal Pemilik 4', 0, 0, 'Pasiva', '2023-03-26 21:40:38', '2023-03-26 21:40:38'),
(71, 3120, 'Modal Pemilik 3 (10%)', 0, 0, 'Pasiva', '2023-03-26 21:41:05', '2023-03-26 21:41:05'),
(72, 3110, 'Modal Pemilik 2 (20%)', 0, 0, 'Pasiva', '2023-03-26 21:41:26', '2023-03-26 21:41:26'),
(73, 3100, 'Modal Pemilik 1 (70%)', 0, 0, 'Pasiva', '2023-03-26 21:41:51', '2023-03-26 21:41:51'),
(74, 2770, 'Kewajiban Imbalan Kerja', 0, 0, 'Pasiva', '2023-03-26 21:42:33', '2023-03-26 21:42:33'),
(75, 2760, 'Utang Jk Panjang', 0, 0, 'Pasiva', '2023-03-26 21:42:59', '2023-03-26 21:42:59'),
(76, 2750, 'Utang CU SS Kontrak 0031', 0, 0, 'Pasiva', '2023-03-26 21:43:18', '2023-03-26 21:43:18'),
(77, 2740, 'Utang Pemegang Saham', 0, 0, 'Pasiva', '2023-03-26 21:43:38', '2023-03-26 21:43:38'),
(78, 2730, 'Utang CU Sandya Swadaya 2', 0, 0, 'Pasiva', '2023-03-26 21:44:03', '2023-03-26 21:44:03'),
(79, 2720, 'Utang CU Sandya Swadaya 1', 0, 0, 'Pasiva', '2023-03-26 21:44:24', '2023-03-26 21:44:24'),
(80, 2710, 'Utang BPR Danagung Bakti', 0, 0, 'Pasiva', '2023-03-26 21:44:45', '2023-03-26 21:44:45'),
(81, 2230, 'Utang Pajak PB 1', 0, 0, 'Pasiva', '2023-03-26 21:45:05', '2023-03-26 21:45:05'),
(82, 2224, 'Utang Pajak PPh 4(2)', 0, 0, 'Pasiva', '2023-03-26 21:45:26', '2023-03-26 21:45:26'),
(83, 2223, 'Utang Pajak PPh 25', 0, 0, 'Pasiva', '2023-03-26 21:45:56', '2023-03-26 21:45:56'),
(84, 2222, 'Utang Pajak PPh 23', 0, 0, 'Pasiva', '2023-03-26 21:46:19', '2023-03-26 21:46:19'),
(85, 2221, 'Utang Pajak PPh 22', 0, 0, 'Pasiva', '2023-03-26 21:46:40', '2023-03-26 21:46:40'),
(86, 2220, 'Utang Pajak PPh 21', 0, 0, 'Pasiva', '2023-03-26 21:47:03', '2023-03-26 21:47:03'),
(87, 2210, 'PPN Keluaran', 0, 0, 'Pasiva', '2023-03-26 21:47:21', '2023-03-26 21:47:21'),
(88, 2320, 'Pendapatan diterima di Muka', 0, 0, 'Pasiva', '2023-03-26 21:47:42', '2023-03-26 21:47:42'),
(89, 2310, 'Uang Muka Proyek', 0, 0, 'Pasiva', '2023-03-26 21:48:02', '2023-03-26 21:48:02'),
(90, 2150, 'Utang Usaha Lain-lain', 0, 0, 'Pasiva', '2023-03-26 21:53:11', '2023-03-26 21:53:11'),
(91, 2140, 'Utang Honorarium Tenaga Ahli', 0, 0, 'Pasiva', '2023-03-26 21:53:47', '2023-03-26 21:53:47'),
(92, 2130, 'Utang Pekerjaan subkon', 0, 0, 'Pasiva', '2023-03-26 21:54:09', '2023-03-26 21:54:09'),
(93, 2120, 'Utang Tenaga Pendukung', 0, 0, 'Pasiva', '2023-03-26 21:54:32', '2023-03-26 21:54:32'),
(94, 2110, 'Utang Usaha', 0, 0, 'Pasiva', '2023-03-26 21:55:02', '2023-03-26 21:55:02'),
(95, 1710, 'Investasi (Bendera lain)', 0, 0, 'Aktiva', '2023-03-26 21:55:21', '2023-03-26 21:55:34'),
(96, 1640, 'Akumulasi Penyusutan Bangunan Tidak Permanen', 0, 0, 'Aktiva', '2023-03-26 21:56:37', '2023-03-26 21:56:37'),
(97, 1630, 'Akumulasi Penyusutan Kendaraan Bermotor', 0, 0, 'Aktiva', '2023-03-26 21:57:13', '2023-03-26 21:57:13'),
(98, 1620, 'Akumulasi Penyusutan Furnitur & Peralatan Lainnya', 0, 0, 'Aktiva', '2023-03-26 21:57:53', '2023-03-26 21:57:53'),
(99, 1610, 'Akumulasi Penyusutan Komputer & Elektronik', 0, 0, 'Aktiva', '2023-03-26 21:58:23', '2023-03-26 21:58:23'),
(100, 1600, 'PENYUSUTAN', 0, 0, 'Aktiva', '2023-03-26 21:58:41', '2023-03-26 21:58:41'),
(101, 1550, 'Inventaris Tanah', 0, 0, 'Aktiva', '2023-03-26 21:59:24', '2023-03-26 21:59:24'),
(102, 1540, 'Inventaris Bangunan Tidak Permanen', 0, 0, 'Aktiva', '2023-03-26 22:00:29', '2023-03-26 22:00:29'),
(103, 1530, 'Inventaris Kendaraan Bermotor', 0, 0, 'Aktiva', '2023-03-26 22:01:22', '2023-03-26 22:01:22'),
(104, 1520, 'Inventaris Furnitur & Peralatan lainnya', 0, 0, 'Aktiva', '2023-03-26 22:02:02', '2023-03-26 22:02:02'),
(105, 1510, 'Inventaris Komputer & Elektronik', 0, 0, 'Aktiva', '2023-03-26 22:02:36', '2023-03-26 22:02:36'),
(106, 1460, 'Uang Muka Operasional', 0, 0, 'Aktiva', '2023-03-26 22:03:06', '2023-03-26 22:03:06'),
(107, 1450, 'Uang Muka Proyek', 0, 0, 'Aktiva', '2023-03-26 22:03:29', '2023-03-26 22:03:29'),
(108, 1440, 'Uang Muka Perjalanan Dinas', 0, 0, 'Aktiva', '2023-03-26 22:03:51', '2023-03-26 22:03:51'),
(109, 1430, 'Uang Muka Pembelian/Supplier', 0, 0, 'Aktiva', '2023-03-26 22:04:21', '2023-03-26 22:04:21'),
(110, 1420, 'Asuransi dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:04:57', '2023-03-26 22:04:57'),
(111, 1410, 'Sewa Kantor dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:05:34', '2023-03-26 22:05:34'),
(112, 1310, 'Supplies ATK - Bahan Habis Pakai', 0, 0, 'Aktiva', '2023-03-26 22:06:08', '2023-03-26 22:06:08'),
(113, 1275, 'Pajak dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:06:38', '2023-03-26 22:06:38'),
(114, 1274, 'PPh 29 dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:06:59', '2023-03-26 22:06:59'),
(115, 1273, 'PPh 25 dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:07:30', '2023-03-26 22:07:30'),
(116, 1272, 'PPh 23 dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:07:54', '2023-03-26 22:07:54'),
(117, 1271, 'PPh 22 dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:08:19', '2023-03-26 22:08:19'),
(118, 1270, 'PPh 21 dibayar di Muka', 0, 0, 'Aktiva', '2023-03-26 22:09:10', '2023-03-26 22:09:10'),
(119, 1260, 'PPN Masukan', 0, 0, 'Aktiva', '2023-03-26 22:09:31', '2023-03-26 22:09:31'),
(120, 1250, 'Piutang Usaha Lain-lain', 0, 0, 'Aktiva', '2023-03-26 22:09:53', '2023-03-26 22:09:53'),
(121, 1240, 'Piutang Program', 0, 0, 'Aktiva', '2023-03-26 22:10:13', '2023-03-26 22:10:13'),
(122, 1230, 'Piutang Usaha Group (Mercy)', 0, 0, 'Aktiva', '2023-03-26 22:10:34', '2023-03-26 22:10:34'),
(123, 1220, 'Piutang Karyawan', 0, 0, 'Aktiva', '2023-03-26 22:10:54', '2023-03-26 22:10:54'),
(127, 1170, 'Rek CU SS 009', 0, 0, 'Aktiva', '2023-03-26 22:12:23', '2023-03-26 22:12:23'),
(129, 1150, 'Rek CU SS 004', 0, 0, 'Aktiva', '2023-03-26 22:13:29', '2023-03-26 22:13:29'),
(130, 1140, 'Rekening Bank CIMB Niaga', 0, 0, 'Aktiva', '2023-03-26 22:13:54', '2023-03-26 22:13:54'),
(131, 1130, 'Rekening Bank Mandiri', 0, 0, 'Aktiva', '2023-03-26 22:14:41', '2023-03-26 22:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `aruskas`
--

CREATE TABLE `aruskas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keuangans`
--

CREATE TABLE `keuangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kliens`
--

CREATE TABLE `kliens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klien` int(11) NOT NULL,
  `date` date NOT NULL,
  `nama_klien` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `ammount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kliens`
--

INSERT INTO `kliens` (`id`, `kode_klien`, `date`, `nama_klien`, `nama_perusahaan`, `alamat`, `ammount`, `created_at`, `updated_at`) VALUES
(9, 89, '2023-05-06', 'Aurora', 'PT. ABC Jaya', 'Bandung', 35000000, '2023-05-04 21:02:28', '2023-05-04 21:02:28'),
(10, 80, '2023-05-18', 'Jaehyun', 'PT. Waw', 'Bandung', 35000000, '2023-05-05 00:27:06', '2023-05-05 00:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `labarugis`
--

CREATE TABLE `labarugis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memorials`
--

CREATE TABLE `memorials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `debit` decimal(10,0) NOT NULL,
  `kredit` decimal(10,0) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memorials`
--

INSERT INTO `memorials` (`id`, `kode_akun`, `keterangan`, `debit`, `kredit`, `nama_akun`, `created_at`, `updated_at`) VALUES
(4, 4010, 'Diterima pembayaran uang dimuka', '0', '12000000', 'Pendapatan usaha proyek', '2023-04-12 05:31:24', '2023-04-12 05:31:24'),
(6, 1520, 'Pembelian peralatan secara kredit', '1200000', '0', 'Inventaris furniture dan peralatan lainnya', '2023-04-12 21:01:21', '2023-04-12 21:01:21'),
(7, 2110, 'Pembelian peralatan secara kredit', '0', '1200000', 'Hutang usaha', '2023-04-12 21:01:46', '2023-04-12 21:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_062833_create_kliens_table', 1),
(6, '2023_03_24_074959_create_table_voucher', 2),
(7, '2023_03_24_082721_create_table_akun', 3),
(8, '2023_03_24_082721_create_akun', 4),
(9, '2023_03_26_064940_create_table_akuns', 5),
(10, '2023_03_26_065634_create_akuns_table', 6),
(11, '2023_03_28_041015_create_penerimaans_table', 7),
(12, '2023_03_31_042630_create_pengeluaran_table', 8),
(13, '2023_03_31_042944_create_pengeluarans_table', 9),
(14, '2023_04_09_090958_create_labarugis_table', 10),
(15, '2023_04_12_030256_create_memorials_table', 10),
(16, '2023_04_12_032145_create_keuangans_table', 11),
(17, '2023_04_12_045608_create_aruskas_table', 11),
(18, '2023_04_12_135911_create_penutups_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` bigint(11) DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `debit` decimal(10,0) NOT NULL,
  `kredit` decimal(10,0) NOT NULL,
  `nama_akun` char(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `kode_akun`, `keterangan`, `debit`, `kredit`, `nama_akun`, `created_at`, `updated_at`) VALUES
(2, 4010, 'Diterima uang kas dari klien', '0', '1250000', 'Pendapatan Usaha Proyek Pengadaan', '2023-04-08 22:59:06', '2023-04-12 01:26:34'),
(5, 4520, 'Penerimaan pendapatan lain-lain', '0', '21000000', 'Pendapatan lain-lain', '2023-04-12 07:31:44', '2023-04-12 07:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `debit` decimal(10,0) NOT NULL,
  `kredit` decimal(10,0) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `kode_akun`, `keterangan`, `debit`, `kredit`, `nama_akun`, `created_at`, `updated_at`) VALUES
(1, 1120, 'Sewa Gedung', '130000000', '0', 'Beban Sewa Kantor', '2023-04-08 23:28:50', '2023-04-10 20:17:49'),
(5, 5500, 'Pembayaran biaya operasional kantor', '1300000', '0', 'Beban ATK, FC & Percetakan', '2023-04-12 07:34:50', '2023-04-12 07:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` varchar(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `debit` decimal(8,2) NOT NULL,
  `kredit` decimal(8,2) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penutups`
--

CREATE TABLE `penutups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `debit` decimal(10,0) NOT NULL,
  `kredit` decimal(10,0) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penutups`
--

INSERT INTO `penutups` (`id`, `kode_akun`, `keterangan`, `debit`, `kredit`, `nama_akun`, `created_at`, `updated_at`) VALUES
(2, 4010, 'Menutup perkiraan pendapatan', '1500000', '0', 'Pendapatan Usaha Proyek Pengadaan', '2023-04-12 07:37:11', '2023-04-12 07:37:11'),
(3, 8500, 'Menutup perkiraan pendapatan', '0', '1500000', 'IKHTISAR LABA RUGI', '2023-04-12 07:38:27', '2023-04-12 07:38:44'),
(4, 8500, 'Menutup perkiraan beban', '500000', '0', 'IKHTISAR LABA RUGI', '2023-04-12 21:03:55', '2023-04-12 21:03:55'),
(5, 5103, 'Menutup perkiraan beban', '0', '500000', 'Beban Akomodasi, Konsumsi staf & TA - Prog', '2023-04-12 21:04:30', '2023-04-12 21:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(5) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@syarif.com', 'admin', NULL, '$2y$10$ZjjLhFbIMoNFXYCPc8tReui.daeoGEYAj5XVsEqGKqWSBdTIHejda', '1', NULL, '2023-03-24 00:02:31', '2023-03-24 00:02:31'),
(2, 'Manager', 'pimpinan@syarif.com', 'manager', NULL, '$2y$10$Th/v00SG5fd1OczUoNog0.Rjaa4BW3YyYfDP8oKV1Sh7ZbTGFgPWu', '3', NULL, '2023-03-24 00:02:31', '2023-03-24 00:02:31'),
(3, 'manager', 'kasir@syarif.com', 'managertpp', NULL, '$2y$10$Vp8PcuHu5vQ/rDo2cKRRs.Z3I6EhnHbodh8Y3IkYYyJotYHWTCDca', '2', NULL, '2023-03-24 00:02:31', '2023-03-24 00:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `kode_voucher` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuns`
--
ALTER TABLE `akuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aruskas`
--
ALTER TABLE `aruskas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keuangans`
--
ALTER TABLE `keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kliens`
--
ALTER TABLE `kliens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labarugis`
--
ALTER TABLE `labarugis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memorials`
--
ALTER TABLE `memorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penutups`
--
ALTER TABLE `penutups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuns`
--
ALTER TABLE `akuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `aruskas`
--
ALTER TABLE `aruskas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keuangans`
--
ALTER TABLE `keuangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kliens`
--
ALTER TABLE `kliens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `labarugis`
--
ALTER TABLE `labarugis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memorials`
--
ALTER TABLE `memorials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penutups`
--
ALTER TABLE `penutups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
