-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2023 pada 14.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industrikm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databases`
--

CREATE TABLE `databases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_usaha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omzet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijin` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jtk` int(50) NOT NULL,
  `pelpam` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(50) NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `masalah` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijins`
--

CREATE TABLE `ijins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ijinusaha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ijins`
--

INSERT INTO `ijins` (`id`, `ijinusaha`, `created_at`, `updated_at`) VALUES
(1, ' Nomor Induk Berusaha (NIB)', NULL, NULL),
(2, 'Surat Keterangan Domisili Usaha (SKDU)', NULL, NULL),
(3, 'Nomor Pokok Wajib Pajak (NPWP)', NULL, NULL),
(4, 'Izin Usaha Dagang (UD)', NULL, NULL),
(5, 'Surat Izin Tempat Usaha (SITU)', NULL, NULL),
(6, 'Surat Izin Prinsip', NULL, NULL),
(7, 'Surat Izin Usaha Industri (SIUI)', NULL, NULL),
(8, 'Surat Izin Usaha Perdagangan (SIUP)', NULL, NULL),
(9, 'Tanda Daftar Perusahaan (TDP)', NULL, NULL),
(10, 'Surat Izin Usaha Jasa Konstruksi (SIUJK)', NULL, NULL),
(11, 'HO (Surat izin gangguan)', NULL, NULL),
(12, 'Izin Mendirikan Bangunan (IMB)', NULL, NULL),
(13, ' Izin BPOM', NULL, NULL),
(14, 'Sertifikat Laik Fungsi (SLF)', NULL, NULL),
(15, 'Izin Lingkungan', NULL, NULL),
(16, ' Izin Lokasi', NULL, NULL),
(17, 'Tanda Daftar Usaha Pariwisata (TDUP)', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapanewons`
--

CREATE TABLE `kapanewons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kapanewon` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kapanewons`
--

INSERT INTO `kapanewons` (`id`, `kapanewon`, `created_at`, `updated_at`) VALUES
(3, 'Bantul', NULL, NULL),
(4, 'Dlingo', NULL, NULL),
(5, 'Imogiri', NULL, NULL),
(6, 'Jetis', NULL, NULL),
(7, 'Kasihan', NULL, NULL),
(8, 'Kretek', NULL, NULL),
(9, 'Pajangan', NULL, NULL),
(11, 'Piyungan', NULL, NULL),
(12, 'Pleret', NULL, NULL),
(13, 'Pundong', NULL, NULL),
(14, 'Sanden', NULL, NULL),
(15, 'Sedayu', NULL, NULL),
(16, 'Sewon', NULL, NULL),
(17, 'Srandakan', NULL, NULL),
(19, 'Banguntapan', '2023-03-02 05:54:18', '2023-03-02 05:54:18'),
(20, 'Banguntapan', '2023-03-02 05:54:34', '2023-03-02 05:54:34'),
(21, 'Bambanglipuro', '2023-03-02 06:14:46', '2023-03-02 06:14:46'),
(23, 'Pandak', '2023-03-02 06:18:57', '2023-03-02 06:18:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jproduk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_17_013837_create_usahas_table', 1),
(6, '2023_02_17_014911_create_kategoris_table', 2),
(7, '2023_02_17_015006_create_omzets_table', 2),
(8, '2023_02_17_015028_create_ijins_table', 2),
(9, '2023_02_17_015049_create_permasalahans_table', 2),
(10, '2023_02_17_023758_create_kapanewons_table', 2),
(11, '2023_02_17_030029_create_databases_table', 2),
(12, '2023_02_21_015825_create_ikms_table', 3),
(13, '2023_02_22_021701_create_omzets_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `omzets`
--

CREATE TABLE `omzets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `omzets`
--

INSERT INTO `omzets` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, '100Jutay', '2023-03-02 07:06:23', '2023-03-02 07:15:43');

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databases`
--
ALTER TABLE `databases`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ijins`
--
ALTER TABLE `ijins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kapanewons`
--
ALTER TABLE `kapanewons`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `omzets`
--
ALTER TABLE `omzets`
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
-- AUTO_INCREMENT untuk tabel `databases`
--
ALTER TABLE `databases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ijins`
--
ALTER TABLE `ijins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kapanewons`
--
ALTER TABLE `kapanewons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `omzets`
--
ALTER TABLE `omzets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
