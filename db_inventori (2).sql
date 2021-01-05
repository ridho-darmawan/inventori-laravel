-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2020 pada 16.59
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventori`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `kode_inventaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `barang_id`, `kode_inventaris`, `tanggal_keluar`, `keterangan`, `created_at`, `updated_at`) VALUES
(16, 7, 'inv-speaker-ruang piket-37', '0009-01-01', 'rusak', '2020-12-21 08:40:11', '2020-12-21 08:48:29'),
(17, 8, 'inv-kipas angin-ruang seni budaya-17', '0001-01-01', 'rusak', '2020-12-21 09:14:31', '2020-12-21 09:14:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuranCC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_pembelian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rangka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_bpkb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_dana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `kode`, `nama`, `kategori_id`, `merk`, `ukuranCC`, `bahan`, `tahun_pembelian`, `no_rangka`, `no_mesin`, `no_polisi`, `no_bpkb`, `jumlah`, `supplier_id`, `anggaran`, `sumber_dana`, `keterangan`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 'TV-1541980979', 'TV', '1', 'samsung', 'sfdfd', 'iy', '2020', 'uyu686', '686', '8768', '687', 23, '1', '12300000', 'dana bos', 'baru', '2020-12-17', '2020-12-16 11:33:11', '2020-12-21 08:48:53'),
(2, 'Kipas angin-2004243337', 'Kipas angin', '1', 'miyako', NULL, NULL, '2020', NULL, NULL, NULL, NULL, 12, '1', '1390000', 'dana hibah kemendikbud', 'baru', '2020-12-17', '2020-12-16 11:50:26', '2020-12-16 11:50:26'),
(3, 'infocus-568401799', 'infocus Touch', '1', 'epson', NULL, NULL, '2020', NULL, NULL, NULL, NULL, 12, '1', '1230000', 'bantuan dinas pendidikan riau', 'baru', '2020-12-18', '2020-12-18 00:56:30', '2020-12-20 02:38:20'),
(4, 'supra x 125-1107676455', 'supra x 125', '2', 'honda', NULL, NULL, '2020', '898', '989', '89', '898', 3, '1', '3121111', 'klk', 'klk', '0002-02-02', '2020-12-19 23:43:10', '2020-12-19 23:43:10'),
(5, 'dispenser-1262517366', 'dispenser', '1', 'miyako', 'sfa', 'afda', '2121', NULL, NULL, NULL, NULL, 4, '1', '3343432344', 'vxcvx', 'vxvxv', '0002-02-02', '2020-12-21 07:18:42', '2020-12-21 07:18:42'),
(6, 'ac-151384580', 'ac', '1', 'samsung', 'hkhk', 'hkhk', '2020', NULL, NULL, NULL, NULL, 4, '1', '343434', 'fdf', 'dfdf', '0009-09-09', '2020-12-21 07:25:53', '2020-12-21 07:25:53'),
(7, 'speaker-1149623313', 'speaker', '1', 'sdfsf', '8', 'dfa', '1211', NULL, NULL, NULL, NULL, 5, '1', '43434', 'sfs', 'dfsf', '0009-01-09', '2020-12-21 07:54:45', '2020-12-21 07:54:45'),
(8, 'kipas angin-920065910', 'kipas angin', '1', 'miyako', NULL, 'plastik', '2020', NULL, NULL, NULL, NULL, 3, '1', '750000', 'pemerintah', 'baru', '0001-01-01', '2020-12-21 09:12:25', '2020-12-21 09:12:25'),
(9, 'mouse-709591570', 'mouse', '1', 'robot', 'hgh', 'ghg', '2020', NULL, NULL, NULL, NULL, 5, '1', '9090909', 'hjhk', 'hhkhk', '0009-09-09', '2020-12-22 07:19:16', '2020-12-22 07:19:16'),
(10, 'ma', 'mesin air', '1', 'suzu', 'ere', 'rere', '2020', NULL, NULL, NULL, NULL, 5, '1', '454545', 'fdf', 'dfdf', '0001-09-01', '2020-12-22 07:33:11', '2020-12-22 07:33:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `created_at`, `updated_at`) VALUES
(1, 'heri susanto', '93284928492344', '2020-12-22 07:04:18', '2020-12-22 07:04:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_inventaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Dipinjam','Tersedia') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tersedia',
  `ruang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `kode_inventaris`, `barang_id`, `status`, `ruang_id`, `created_at`, `updated_at`) VALUES
(37, 'inv-ac-ruang seni budaya-95', '6', 'Tersedia', '1', '2020-12-21 08:38:07', '2020-12-21 09:06:31'),
(39, 'inv-kipas angin-ruang seni budaya-68', '8', 'Tersedia', '1', '2020-12-21 09:13:03', '2020-12-21 09:13:03'),
(41, 'inv-mouse-709591570--50', '9', 'Tersedia', '18', '2020-12-22 07:31:59', '2020-12-22 07:31:59'),
(42, 'inv-mouse-709591570--90', '9', 'Tersedia', '18', '2020-12-22 07:31:59', '2020-12-22 07:31:59'),
(43, 'inv-mouse-709591570--74', '9', 'Tersedia', '18', '2020-12-22 07:31:59', '2020-12-22 07:31:59'),
(44, 'inv-ma--45', '10', 'Tersedia', '18', '2020-12-22 07:33:35', '2020-12-22 07:33:35'),
(45, 'inv-ma--12', '10', 'Tersedia', '18', '2020-12-22 07:33:35', '2020-12-22 08:03:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'elektronik', '2020-12-16 10:08:22', '2020-12-16 10:08:22'),
(2, 'kendaraan', '2020-12-19 07:09:55', '2020-12-19 07:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`id`, `nama`, `kode_barang`, `barang_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(3, 'speaker', '', '7', 0, '2020-12-21 07:54:45', '2020-12-21 08:39:52'),
(4, 'kipas angin', '', '8', 1, '2020-12-21 09:12:25', '2020-12-21 09:13:03'),
(5, 'mouse', 'mou', '9', 2, '2020-12-22 07:19:16', '2020-12-22 07:31:59'),
(6, 'mesin air', 'ma', '10', 3, '2020-12-22 07:33:11', '2020-12-22 07:33:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_12_12_115954_create_kategori_table', 1),
(14, '2020_12_12_120220_create_supplier_table', 1),
(15, '2020_12_13_095503_create_ruang_table', 1),
(16, '2020_12_13_141943_create_barang_masuk_table', 1),
(17, '2020_12_13_142154_create_barang_keluar_table', 1),
(18, '2020_12_13_162422_create_peminjaman_table', 1),
(19, '2020_12_17_031241_create_inventaris_table', 2),
(20, '2020_12_21_132517_create_master_barang_table', 3),
(21, '2020_12_22_134846_create_guru_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'pj = penanggung jawab',
  `pemberi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventaris_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime DEFAULT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Dipinjam','Kembali') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dipinjam',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penerima_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `pj`, `pemberi`, `inventaris_id`, `tanggal_pinjam`, `tanggal_kembali`, `kondisi`, `status`, `created_at`, `updated_at`, `penerima_barang`) VALUES
(12, '1', 'ridho', 'inv-ma--12', '2020-12-22 14:49:22', '2020-12-22 15:05:54', 'baik', 'Kembali', '2020-12-22 07:49:22', '2020-12-22 08:05:54', 'dsds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ruangan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama`, `kode_ruangan`, `created_at`, `updated_at`) VALUES
(1, 'ruang seni budaya', 'rsb', '2020-12-16 10:10:34', '2020-12-22 07:25:13'),
(2, 'ruang piket', 'rp', '2020-12-16 10:10:45', '2020-12-22 07:25:20'),
(3, 'labor komputer', 'lk', '2020-12-16 10:10:59', '2020-12-22 07:25:28'),
(18, 'labor bahasa', 'lbh', '2020-12-22 07:24:25', '2020-12-22 07:24:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'central panam elektronik', 'jl garuda sakti', '89434434', '2020-12-16 10:08:12', '2020-12-16 10:08:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Belinda Laksita', 'susanti.eka@example.com', '2020-12-16 10:07:21', '$2y$10$DwUAflANuz9q89k7eVxyeOmIo398/bmqDEtsbExf1.Jh1I1ZepxMC', 'V1dlL92GLa', NULL, NULL),
(2, 'Kania Sarah Riyanti M.Kom.', 'fhastuti@example.org', '2020-12-16 10:07:21', '$2y$10$tgoJqJ6ZsHPYSo2QM99GTO.LxULvisap9glg6tJ9DzG4BJmG31WMO', 'vKIzr1OqviRP4lG3cifiAjQLqnbhDPANae3RyQ8kpfuV1N7UnXwu5xIlnExo', NULL, NULL),
(3, 'Reza Sinaga', 'paris38@example.net', '2020-12-16 10:07:21', '$2y$10$q/CWFHOPjzYp6GH6oZ.XjuSM2BPxAYQiFmVp3q658H3N9jFcGG/9G', 'fc74Gt6uzX', NULL, NULL),
(5, 'Karen Amalia Zulaika M.TI.', 'lalita.prasetya@example.org', '2020-12-16 10:07:21', '$2y$10$iW.cISr0JW9PQjs3IrX.SeWlrLwLFNk9KGYutGjdUZh.HXY3fWoj6', 'QnUmmb2WzX', NULL, NULL),
(6, 'Respati Cahyono Irawan S.Sos', 'darimin.sitorus@example.net', '2020-12-16 10:07:21', '$2y$10$8P50WXZMO/pGSm3gYZdlDOtpXlBKUFQFvQvqv1RPel3tH1pJeWmaa', 'KrXz56fS02', NULL, NULL),
(7, 'Bancar Nasim Zulkarnain S.IP', 'cemeti.samosir@example.net', '2020-12-16 10:07:21', '$2y$10$osTxaCuDflckllT/4ZC5v.eAinymznD1SIRgeU28p.2otbXaWy8a.', 'hzDFBggvxn', NULL, NULL),
(8, 'Ophelia Maimunah Widiastuti S.Ked', 'pwulandari@example.com', '2020-12-16 10:07:22', '$2y$10$QJUe8i/hqsozgO3Jvx/xSu7vM4ruIgQRDWsPIzICF4v3FutkVbMWC', 'iBHEdY1iVG', NULL, NULL),
(10, 'Tira Rini Uyainah', 'winarsih.nadine@example.com', '2020-12-16 10:07:22', '$2y$10$kvqIAuQt9g.z/83Gr0ABKOAFljRx/1bORhEhDIP8ar9/qcHqbtRki', 'CvuUimBjDY', NULL, NULL),
(11, 'Prabawa Parman Wahyudin S.E.I', 'sitompul.salsabila@example.com', '2020-12-16 10:07:22', '$2y$10$xC/u8QRu8M7UuMn9nvY6quN/PDg2DUAtKq98fppOML/jH0Tv0v5.G', 'mGXRekRJCd', NULL, NULL),
(14, 'Ira Susanti', 'faizah27@example.net', '2020-12-16 10:07:22', '$2y$10$/vYd2/ypmB9IBByLF6IvbOSNHbS4WjPylo391oe2i8cSI6hlFgq5W', 'zq9qYyeJnT', NULL, NULL),
(15, 'Aris Putra', 'dmardhiyah@example.net', '2020-12-16 10:07:22', '$2y$10$09bN9nKFd5/OalgORQkevO3CPl.Ohb5jZiE0EP3ep.cBfQNhbirQS', 'y85j07OruJ', NULL, NULL),
(16, 'ridho darmawan', 'ridho.rd849@gmail.com', NULL, '$2y$10$eWeVpFLc5jLVVDrNrD/ck.jFLskmweLegRp07rjUIDJtTbQm/3PBq', NULL, '2020-12-20 02:58:12', '2020-12-20 02:58:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barang_masuk_kode_unique` (`kode`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventaris_kode_inventaris_unique` (`kode_inventaris`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
