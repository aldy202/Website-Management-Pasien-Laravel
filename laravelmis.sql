-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2023 pada 01.55
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
-- Database: `laravelmis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasiens`
--

CREATE TABLE `data_pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_perawatan` date NOT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pasiens`
--

INSERT INTO `data_pasiens` (`id`, `created_at`, `updated_at`, `nama`, `umur`, `gender`, `no_telp`, `tgl_perawatan`, `keluhan`, `tindakan`, `status`) VALUES
(1, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Mr. Walter Stokes V', 2, 'Laki-Laki', '+1 (463) 454-9887', '1990-05-19', 'Dedric McLaughlin DVM', 'Mr. Clark Kunde III', 'Tidak Rawat Inap'),
(2, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Osvaldo White V', 3, 'Perempuan', '+1-651-446-3641', '2006-11-13', 'Susana Altenwerth', 'Miss Libby Schuster PhD', 'Tidak Rawat Inap'),
(3, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Rita Metz', 2, 'Perempuan', '386.220.0012', '1998-07-13', 'Alison Bailey', 'Prof. Allison Schultz', 'Rawat Inap'),
(4, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Leanne Rodriguez', 20, 'Perempuan', '1-928-203-3502', '1974-04-08', 'Adeline Connelly III', 'Jed Green IV', 'Tidak Rawat Inap'),
(5, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Maida Klocko I', 10, 'Perempuan', '(254) 802-8597', '2009-01-14', 'Dominic Monahan', 'Dr. Ashton Dickens', 'Tidak Rawat Inap'),
(6, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Christ Padberg', 10, 'Laki-Laki', '+1.480.400.2030', '2001-08-17', 'Prof. Eloy Luettgen Jr.', 'Erick Hyatt', 'Tidak Rawat Inap'),
(7, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Whitney Thiel MD', 12, 'Perempuan', '+1-240-761-0415', '1973-07-02', 'Randal Hickle', 'Remington Feest Sr.', 'Tidak Rawat Inap'),
(8, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Ms. Fatima Jones', 5, 'Perempuan', '1-660-465-3637', '2012-04-04', 'Joshua Mertz', 'Prof. Carmen Sanford III', 'Rawat Inap'),
(9, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Lempi Graham I', 4, 'Perempuan', '1-616-721-6101', '1978-08-07', 'Shawna Schulist', 'Ms. Maude Rice DDS', 'Rawat Inap'),
(10, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Dr. Grant Hansen PhD', 8, 'Perempuan', '1-931-859-5542', '2017-05-17', 'Rae Reynolds', 'Dr. Margie Crooks Sr.', 'Rawat Inap'),
(11, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Jaylon Hilpert MD', 12, 'Laki-Laki', '+1-520-841-0058', '1975-11-09', 'Jade Fritsch', 'Tomasa Nader', 'Tidak Rawat Inap'),
(12, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Viola Beier', 3, 'Perempuan', '907.754.7113', '1985-04-19', 'Kim Hilpert', 'Marion Botsford', 'Tidak Rawat Inap'),
(13, '2023-02-17 17:51:36', '2023-02-17 17:51:36', 'Ashley Stracke', 2, 'Perempuan', '(614) 352-9141', '1993-10-02', 'Magnolia Corwin', 'Osborne Gutmann Jr.', 'Tidak Rawat Inap'),
(14, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Dorothy Hane', 9, 'Laki-Laki', '+15634190078', '1972-12-21', 'Ellsworth McClure', 'Murphy Bins', 'Tidak Rawat Inap'),
(15, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Braeden Wiza', 13, 'Laki-Laki', '1-606-313-0058', '1973-12-13', 'Macy Hermann MD', 'Prof. Rosario Lemke V', 'Tidak Rawat Inap'),
(16, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Prof. Ellie Botsford', 17, 'Laki-Laki', '+1-240-876-3999', '2001-06-04', 'Samara Kemmer', 'Deja Johnston', 'Tidak Rawat Inap'),
(17, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Fausto Carter', 18, 'Laki-Laki', '+1-925-257-4858', '1992-06-06', 'Lukas Schamberger', 'Ms. Lilla Feil MD', 'Rawat Inap'),
(18, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Dr. Austen Bernhard MD', 16, 'Perempuan', '1-305-221-5767', '2001-03-11', 'Owen Rosenbaum', 'Loren Christiansen', 'Tidak Rawat Inap'),
(19, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Prof. Hank Blick IV', 19, 'Laki-Laki', '+18489802361', '1989-07-12', 'Sophia Lind', 'Dr. Winnifred Daugherty', 'Tidak Rawat Inap'),
(20, '2023-02-17 17:51:37', '2023-02-17 17:51:37', 'Roma Koepp', 16, 'Perempuan', '972-460-8464', '2007-02-05', 'Dr. Amya Schoen', 'Bernice Predovic', 'Rawat Inap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tenaga_medis`
--

CREATE TABLE `data_tenaga_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_tenaga_medis`
--

INSERT INTO `data_tenaga_medis` (`id`, `created_at`, `updated_at`, `nama`, `umur`, `email`, `no_telp`, `gender`) VALUES
(1, NULL, NULL, 'Chester O\'Keefe', 31, 'andres.rice@yahoo.com', '580.627.4989', 'Perempuan'),
(2, NULL, NULL, 'Name Mann DVM', 40, 'kelvin07@gmail.com', '+1-220-950-0735', 'Perempuan'),
(3, NULL, NULL, 'Krystel Harber', 30, 'koss.carol@yahoo.com', '(872) 365-6663', 'Perempuan'),
(4, NULL, NULL, 'Mrs. Camylle Blanda Jr.', 29, 'jaeden.robel@lesch.com', '269-923-3971', 'Laki-Laki'),
(5, NULL, NULL, 'Malika Nicolas PhD', 24, 'josh.grady@kuhlman.biz', '(818) 248-4159', 'Laki-Laki'),
(6, NULL, NULL, 'Shanon Dare I', 28, 'muhammad81@hartmann.com', '+14074223736', 'Laki-Laki'),
(7, NULL, NULL, 'Hilton Hintz V', 23, 'hillary.schuppe@yahoo.com', '+16785094569', 'Perempuan'),
(8, NULL, NULL, 'Kristin Lind', 22, 'labadie.florine@yahoo.com', '1-732-215-5264', 'Perempuan'),
(9, NULL, NULL, 'Dr. Gregoria Nienow IV', 30, 'paul69@kuhic.com', '+1 (984) 567-3172', 'Perempuan'),
(10, NULL, NULL, 'Mrs. Electa Prosacco PhD', 29, 'julius12@gmail.com', '+1.445.944.4727', 'Laki-Laki'),
(11, NULL, NULL, 'Oleta Gleichner', 34, 'jamison98@hotmail.com', '+1.956.690.2352', 'Perempuan'),
(12, NULL, NULL, 'Antonina O\'Kon I', 22, 'cdurgan@yahoo.com', '+1 (947) 935-8317', 'Perempuan'),
(13, NULL, NULL, 'Connor Satterfield', 33, 'geo.ullrich@hotmail.com', '574.227.4983', 'Perempuan'),
(14, NULL, NULL, 'Miss Marcia Brakus PhD', 27, 'npurdy@russel.org', '+1-281-348-1434', 'Laki-Laki'),
(15, NULL, NULL, 'Kelton O\'Hara', 33, 'njaskolski@gmail.com', '+1-631-282-7471', 'Perempuan'),
(16, NULL, NULL, 'Ibrahim Baumbach DDS', 18, 'robb68@gmail.com', '+16295092471', 'Perempuan'),
(17, NULL, NULL, 'Dr. Maxine Orn', 27, 'ubreitenberg@paucek.com', '762-991-7813', 'Perempuan'),
(18, NULL, NULL, 'Elisabeth Shanahan', 18, 'gokeefe@yahoo.com', '650-421-9284', 'Laki-Laki'),
(19, NULL, NULL, 'Jessika O\'Keefe', 32, 'ykoepp@gmail.com', '272-294-1251', 'Perempuan'),
(20, NULL, NULL, 'Miss Wava Harvey III', 29, 'adams.joshuah@gottlieb.com', '1-405-892-6347', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `nim` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_13_081436_create_mahasiswas_table', 1),
(6, '2023_01_07_024249_create_data_pasiens_table', 1),
(7, '2023_01_07_024311_add_fields_to_data_pasien_table', 1),
(8, '2023_01_07_035749_create_data_tenaga_medis_table', 1),
(9, '2023_01_07_035831_add_fields_to_data_tenaga_medis_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, 'Test User', 'test@gmail.com', '2023-02-17 17:51:36', 'qweqwe123', 'kmzGcPbSZ1', '2023-02-17 17:51:36', '2023-02-17 17:51:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pasiens`
--
ALTER TABLE `data_pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tenaga_medis`
--
ALTER TABLE `data_tenaga_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`nim`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `data_pasiens`
--
ALTER TABLE `data_pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `data_tenaga_medis`
--
ALTER TABLE `data_tenaga_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `nim` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
