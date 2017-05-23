-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 16.21
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterlambatan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `pajak_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`id`, `nama_pemilik`, `keterlambatan`, `total`, `pajak_id`, `created_at`, `updated_at`) VALUES
(7, 'hakim', 2, 1000000, 1, '2017-05-19 10:06:01', '2017-05-19 10:23:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_plat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pemilik_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `no_plat`, `merk`, `pemilik_id`, `created_at`, `updated_at`) VALUES
(1, 'KT 1234 VK', 'yamaha', 1, '2017-05-19 05:27:46', '2017-05-19 05:27:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_16_132044_buat_table_login', 1),
('2017_05_16_132140_buat_table_pemilik', 1),
('2017_05_16_132326_buat_table_operator', 1),
('2017_05_16_132423_buat_table_petugas', 1),
('2017_05_16_134826_buat_table_kendaraan', 1),
('2017_05_16_135837_buat_table_stnk', 1),
('2017_05_16_140821_buat_table_pajak', 1),
('2017_05_16_141743_buat_table_denda', 1),
('2017_05_23_081510_sembarang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', 'admin', 'admin', '2017-05-01 16:00:00', '2017-05-23 06:20:27', 'JNO9a9RlePN5IRRfwjDXB7fg761eJWzGKWjCoa7hEv4Ta9x0nfCdUOPKzR3e'),
(2, 'rahman', 'rahman', 'user', '2017-05-09 16:00:00', '2017-05-23 06:06:55', 'bCjkIUZJXjttGdSUvZnwAFRIChiE5vYOJyriDG7bs1mZIHYM2QZjsAqh3ePL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pajak`
--

CREATE TABLE `pajak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_pajak` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `stnk_id` int(10) UNSIGNED NOT NULL,
  `petugas_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pajak`
--

INSERT INTO `pajak` (`id`, `nama_pemilik`, `total_pajak`, `tanggal_pembayaran`, `stnk_id`, `petugas_id`, `created_at`, `updated_at`) VALUES
(1, 'hakim', 1000000, '2017-05-01', 1, 1, '2017-05-18 16:00:00', '2017-05-18 16:00:00'),
(12, 'hakim', 10000000, '2017-09-12', 1, 1, '2017-05-19 06:45:09', '2017-05-19 06:45:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id`, `nama_pemilik`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'hakim', 'jalan pm noor', '082153456796', '2017-05-19 05:27:19', '2017-05-19 05:27:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_petugas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'rahman', 'jalan pm noor', '2017-05-19 05:26:18', '2017-05-19 05:26:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stnk`
--

CREATE TABLE `stnk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `kendaraan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `stnk`
--

INSERT INTO `stnk` (`id`, `nama_pemilik`, `merk`, `jenis`, `tanggal_pembayaran`, `kendaraan_id`, `created_at`, `updated_at`) VALUES
(1, 'hakim', '1', 'motor', '2017-09-12', 1, '2017-05-19 05:28:08', '2017-05-19 05:28:08'),
(5, 'hakim', '1', 'motor', '2017-09-12', 1, '2017-05-19 09:49:43', '2017-05-19 09:49:43'),
(6, 'hakim', '1', 'motor', '2017-08-08', 1, '2017-05-19 19:37:46', '2017-05-19 19:37:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('ADMIN','USER') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'zz', 'nmnm', 'c@gmail.cm', '$2y$10$GKHFqYFthLuh4NWbo7XO8OxMURhB2gzacmkcksvgUv0iaWIuTO8sq', 'USER', 'd4uvAI2BQrUAW9g0Nany8BO0yYBcLDdSd2sCzNvY5VmOBjP2YjeHn1qAsIcD', '2017-05-21 22:06:44', '2017-05-22 22:30:14'),
(10, 'admin', 'admin', 'admin@gmail.com', '$2y$10$hTVADsd7q6xKPDsbJ/6DWuc3tgRKhghO/C7YQF4oZyfrua8yRtu4W', 'ADMIN', 'qMnXy0f59UZKBfDPwn9yUIf17unciJrJy5J48JvOwKDAXgGUl0mU3DmM8aej', '2017-05-21 22:08:22', '2017-05-21 22:08:43'),
(11, 'hakim', 'hakim', 'hakim@gmail.com', '$2y$10$K7NhOxOrB0YKN4.lFB.lvujXOEEND40YIb9ic.7lhTPbXVnY3TPjq', 'USER', 'GNEMwB0TcaRwBWtCFb5HfJxdUEL7ZS69oqCczPaFqAC9pginGakqI6CFwdJw', '2017-05-21 22:34:02', '2017-05-21 22:36:30'),
(12, 'rahman', 'rahman', 'rahmanhakim2796@gmail.com', '$2y$10$exl3//5Xi9f0uGi9fIJyPuVtqr2q7tuOQEl2xkkUho/mbD5IDnQ7G', 'USER', 'Yqvvftjo4I7HRS0KzRGZdiGWN1uzO32RfSWBuuZ7Uw40Nx80d7wE7AqQrJCK', '2017-05-21 22:39:44', '2017-05-21 22:50:44'),
(13, 'gendul', 'gendul', 'gendulbau@yahoo.com', '$2y$10$TSzDyIIDNCvAoYzYasUVG.n/CRF.F.iS9Esx3WeoTOqpzrhon5m6y', 'USER', 'pGmhwA71kdDa49BTpDh6wGECSVAvgJHG2666Yeq7M199O1rqU7juUAU33pbg', '2017-05-21 23:18:59', '2017-05-21 23:19:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denda_pajak_id_foreign` (`pajak_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kendaraan_pemilik_id_foreign` (`pemilik_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pajak_petugas_id_foreign` (`petugas_id`),
  ADD KEY `pajak_stnk_id_foreign` (`stnk_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stnk`
--
ALTER TABLE `stnk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stnk_kendaraan_id_foreign` (`kendaraan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stnk`
--
ALTER TABLE `stnk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_pajak_id_foreign` FOREIGN KEY (`pajak_id`) REFERENCES `pajak` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_pemilik_id_foreign` FOREIGN KEY (`pemilik_id`) REFERENCES `pemilik` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pajak`
--
ALTER TABLE `pajak`
  ADD CONSTRAINT `pajak_petugas_id_foreign` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pajak_stnk_id_foreign` FOREIGN KEY (`stnk_id`) REFERENCES `stnk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stnk`
--
ALTER TABLE `stnk`
  ADD CONSTRAINT `stnk_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
