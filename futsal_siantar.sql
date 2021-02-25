-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Feb 2021 pada 19.54
-- Versi server: 10.3.27-MariaDB-log-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mintoscr_futsal_siantar`
--

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
-- Struktur dari tabel `futsals`
--

CREATE TABLE `futsals` (
  `id_futsal` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fasilitas` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_view` int(8) DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `futsals`
--

INSERT INTO `futsals` (`id_futsal`, `nama`, `alamat`, `telepon`, `long`, `lat`, `admin`, `jam_buka`, `jam_tutup`, `foto`, `fasilitas`, `jumlah_view`, `id_user`, `created_at`, `updated_at`) VALUES
(17, 'Siantar Futsal', 'Jl. Sriwijaya No.63, Kel. Baru Kec. Siantar Utara Kota Pematangsiantar', '062226173', '99.069489', '2.963980', 'Dedek', '10:00:00', '22:00:00', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/futsal/20201122_141830-min.jpg', '<p><strong>Member :</strong></p>\r\n\r\n<ul style=\"list-style-type:square;\">\r\n	<li>Potongan Harga Perjam</li>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>\r\n\r\n<p><strong>Non Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>', 5, 4, '2020-11-28 05:34:36', '2021-02-08 06:18:22'),
(19, 'Rafam Futsal', 'Jl. Teratai No.61 Kel. Simarito, Kec. Siantar Barat, Kota Pematangsiantar', '082360459155', '99.046938', '2.954212', 'Fredy', '06:00:00', '24:00:00', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/futsal/20201122_144910-min.jpg', '<p><strong>Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Potongan Harga</li>\r\n	<li>Air Mineral 1 Kotak</li>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>\r\n\r\n<p><strong>Non Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>', 6, 4, '2020-11-28 05:50:19', '2021-02-08 06:18:39'),
(20, 'Mari Futsal', 'Jl. Melanthon SIregar, No. 75, Kel. Karo, Kec. Siantar Selatan, Kota Pematangsiantar', '082299204441', '99.068486', '2.947196', 'Wanda Kisame', '09:00:00', '22:00:00', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/futsal/20201122_150832-min.jpg', '<p><strong>Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Potongan Harga Perjam</li>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n</ul>\r\n\r\n<p><strong>Non Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n</ul>', 4, 4, '2020-11-28 06:11:27', '2021-02-17 04:34:01'),
(21, 'Bolon Futsal', 'Jl. Mufakatn No.35, Kel. Suka Dame, Kec. Siantar Utara, Kota Pematangsiantar', '085276887832', '99.065345', '2.968607', 'Frisda Tampubolon', '12:00:00', '22:00:00', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/futsal/20201122_173633-min.jpg', '<p><strong>Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Air Mineral 1 Kotak</li>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>\r\n\r\n<p><strong>Non Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>', 8, 4, '2020-11-28 06:20:03', '2021-02-17 04:35:36'),
(22, 'Mahkota Futsal', 'Jl. Kertas, Kel. Marihat baris, Ke. Siantar, Kab Simalungun', '087892687673', '99.087266', '2.959287', 'Asen', '10:00:00', '24:00:00', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/futsal/20201128_145801-min.jpg', '<p><strong>Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Potongan Harga</li>\r\n	<li>Air Mineral</li>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>\r\n\r\n<p><strong>Non Member :</strong></p>\r\n\r\n<ul>\r\n	<li>Toilet</li>\r\n	<li>Parkir</li>\r\n	<li>Kantin</li>\r\n</ul>', 9, 4, '2020-11-28 06:25:28', '2021-02-08 06:17:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangans`
--

CREATE TABLE `lapangans` (
  `id_lapangan` bigint(20) UNSIGNED NOT NULL,
  `nama_lapangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pagi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_malam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_futsal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lapangans`
--

INSERT INTO `lapangans` (`id_lapangan`, `nama_lapangan`, `jenis_lantai`, `harga_pagi`, `harga_malam`, `foto1`, `foto2`, `foto3`, `id_futsal`, `created_at`, `updated_at`) VALUES
(33, 'Lapangan A', 'Rumput Sintetis', 'Rp. 60.000', 'Rp. 125.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/1.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/2.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/3.jpg', 17, '2020-11-30 07:29:03', '2020-12-01 08:27:29'),
(34, 'Lapangan B', 'Rumput Sintetis', 'Rp. 60.000', 'Rp. 125.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141419-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141403-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141359-min.jpg', 17, '2020-11-30 07:44:06', '2020-12-01 08:28:58'),
(35, 'Lapangan C', 'Rumput Sintetis', 'Rp. 75.000', 'Rp. 150.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141548-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141606-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_141609-min.jpg', 17, '2020-11-30 07:44:54', '2020-12-01 08:30:16'),
(36, 'Lapangan A', 'Puzzel', 'Rp. 70.000', 'Rp. 140.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_143949-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_144051-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_144109-min.jpg', 19, '2020-11-30 07:46:47', '2020-12-01 08:33:51'),
(37, 'Lapangan B', 'Puzzel', 'Rp. 70.000', 'Rp. 140.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_144230-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_144239-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_144207-min.jpg', 19, '2020-11-30 07:47:21', '2020-12-01 08:43:32'),
(38, 'Lapangan 1', 'Semen', 'Rp. 90.000', 'Rp. 110.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150604-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150657-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150554-min.jpg', 20, '2020-11-30 07:48:29', '2020-12-01 08:48:48'),
(39, 'Lapangan 2', 'Semen', 'Rp. 90.000', 'Rp. 110.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150709-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150717-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_150720-min.jpg', 20, '2020-11-30 07:48:57', '2020-12-01 08:50:32'),
(40, 'Lapangan A', 'Karpet', 'Rp. 70.000', 'Rp. 80.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173403-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173408-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173358-min.jpg', 21, '2020-11-30 07:52:05', '2020-12-01 08:54:52'),
(41, 'Lapangan B', 'Karpet', 'Rp. 80.000', 'Rp. 110.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173456-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173440-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201122_173521-min.jpg', 21, '2020-11-30 07:53:21', '2020-12-01 08:59:25'),
(42, 'Lapangan A', 'Ambal Belgia', 'Rp. 60.000', 'Rp. 125.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145345-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145348-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145403-min.jpg', 22, '2020-11-30 07:54:08', '2020-12-01 09:02:08'),
(43, 'Lapangan B', 'Ambal Belgia', 'Rp. 60.000', 'Rp. 125.000', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145526-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145532-min.jpg', 'http://sifutsal.miftahjuan.mintoscreative.com/storage/lapangan/20201128_145518-min.jpg', 22, '2020-11-30 07:54:41', '2020-12-01 09:04:28');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_10_10_102407_create_futsals_table', 1),
(23, '2020_10_10_102615_create_lapangans_table', 1);

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
(4, 'Administrator', 'admin@admin.com', NULL, '$2y$10$ylyZ.EFGkd.jWmKPyNr//.KY9RUUhMeJH2BzOREDkDqhtH3XiU1w6', '09MaF79dgMXer08mp7u7tHZwSecGpuTlwyVTVVfTMZgOczAbfpqnBvhKLH2A', '2020-10-16 06:02:38', '2020-10-20 02:52:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `futsals`
--
ALTER TABLE `futsals`
  ADD PRIMARY KEY (`id_futsal`),
  ADD KEY `futsals_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `lapangans`
--
ALTER TABLE `lapangans`
  ADD PRIMARY KEY (`id_lapangan`),
  ADD KEY `lapangans_id_futsal_foreign` (`id_futsal`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `futsals`
--
ALTER TABLE `futsals`
  MODIFY `id_futsal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `lapangans`
--
ALTER TABLE `lapangans`
  MODIFY `id_lapangan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `futsals`
--
ALTER TABLE `futsals`
  ADD CONSTRAINT `futsals_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lapangans`
--
ALTER TABLE `lapangans`
  ADD CONSTRAINT `lapangans_id_futsal_foreign` FOREIGN KEY (`id_futsal`) REFERENCES `futsals` (`id_futsal`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
