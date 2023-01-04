-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table spsi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table spsi.informases
CREATE TABLE IF NOT EXISTS `informases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.informases: ~1 rows (approximately)
INSERT INTO `informases` (`id`, `judul`, `isi`, `tanggal`, `foto`, `created_at`, `updated_at`) VALUES
	(1, 'Informasi Pertama', 'DImohon kepada semua anggota agar dapat memahami informasi yang pertama kali diberikan ini.\r\nTerimakasih', '2023-01-01', '', '2023-01-01 08:47:47', '2023-01-01 08:47:47'),
	(3, 'Rapat Rutin', 'Rapat rutin mingguan, harus hadir semua.', '2023-01-01', 'informasi/1672590719.informasi.png', '2023-01-01 09:31:59', '2023-01-01 09:31:59');

-- Dumping structure for table spsi.kegiatans
CREATE TABLE IF NOT EXISTS `kegiatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.kegiatans: ~2 rows (approximately)
INSERT INTO `kegiatans` (`id`, `judul`, `isi`, `tanggal`, `tempat`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, 'Rapat Rutin', 'Rapat Rutin Mingguan wajib hadir semua', '2023-01-02', 'PT Dharma', 'Jl Cempaka No 18, Majalengka', '2023-01-01 09:50:59', '2023-01-01 09:50:59'),
	(2, 'Jalan Santai Bersama', 'Hadiri bersama jalan santai hari minggu nanti', '2023-01-04', 'Alun-alun majalengka', 'Jl Merbabu 2, Majalengka', '2023-01-01 09:52:11', '2023-01-01 09:52:11');

-- Dumping structure for table spsi.keluhans
CREATE TABLE IF NOT EXISTS `keluhans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_card` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.keluhans: ~0 rows (approximately)
INSERT INTO `keluhans` (`id`, `id_card`, `name`, `tanggal`, `isi`, `tanggapan`, `created_at`, `updated_at`) VALUES
	(1, 122232323, 'Ahmad', '2022/12/02', 'Gajinya kurang besar di PT ANU', 'Ok akan dipertimbangkan untuk di diskusikan', '2023-01-01 18:02:36', '2023-01-01 11:10:16'),
	(2, 122232323, 'Ahmad Kardun', '2023-01-02', 'Harus kuat, jangan mengeluh', 'belum ada', '2023-01-01 12:14:46', '2023-01-01 12:14:46');

-- Dumping structure for table spsi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(19, '2014_10_12_000000_create_users_table', 1),
	(20, '2014_10_12_100000_create_password_resets_table', 1),
	(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(22, '2019_08_19_000000_create_failed_jobs_table', 1),
	(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(24, '2023_01_01_041151_create_sessions_table', 1),
	(25, '2023_01_01_151532_create_informases_table', 2),
	(27, '2023_01_01_151901_create_pengundurans_table', 4),
	(28, '2023_01_01_151929_create_keluhans_table', 5),
	(29, '2023_01_01_151837_create_kegiatans_table', 6);

-- Dumping structure for table spsi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.password_resets: ~0 rows (approximately)

-- Dumping structure for table spsi.pengundurans
CREATE TABLE IF NOT EXISTS `pengundurans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_card` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.pengundurans: ~0 rows (approximately)
INSERT INTO `pengundurans` (`id`, `id_card`, `name`, `email`, `tanggal`, `alasan`, `status`, `created_at`, `updated_at`) VALUES
	(1, 122232323, 'Ahmad', 'ahmad2@gmail.com', '2022/12/02', 'Banyak kerjaan lain', 'Setujui', '2023-01-01 17:02:22', '2023-01-01 10:54:01'),
	(2, 122232323, 'Ahmad Kardun', 'ahmad@gmail.com', '2023-01-03', 'fefssfsafsfaf', 'pengajuan', '2023-01-01 12:04:32', '2023-01-01 12:04:32');

-- Dumping structure for table spsi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table spsi.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('ugcup8Sas4b272aoWeu56ssWijCzsqifrcolZq5U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYklubWRKcEVRMGRGZWhUR2k1eUFPRkhvOHRUR1R0U1JSOGdQNTRZYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9zcHNpLnRlc3QvbG9naW4iO319', 1672601549);

-- Dumping structure for table spsi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` bigint NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spsi.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `username`, `alamat`, `divisi`, `no_telp`, `nik`, `role`, `jk`, `agama`, `lahir`, `masuk`, `card`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'Ahmad Kardun', 'ahmad@gmail.com', '2023-01-01 00:28:48', '$2y$10$ydtHgpF3FBQeulW87v5oMOep69wIwFKn3y5TyqiTkz0aCI6BuDnZu', NULL, NULL, NULL, 'ahmad', 'Kalitanjung, No. 12 Cirebon', 'Humas', '0888823232', '12332323', 'pengguna', 'Laki-laki', 'Islam', '2006-02-14', '2023-01-01', 122232323, '7ZTLQw34qFKy4xt8BAeUMHT7hAXQRnuY7odrEHiTEpR8NJb7YiOkQqkKQ8GS', NULL, '2023-01-01 00:15:58', '2023-01-01 07:33:01'),
	(2, 'Admin Ahmad', 'ahmad2@gmail.com', '2023-01-01 00:46:12', '$2y$10$YXJpBeGWL2FG6VNDSREHTOToMq2bSGeTIxcJE5AVK3RmFfC4El5zq', NULL, NULL, NULL, 'ahmad', 'Kalitanjung, No. 12 Cirebon', 'Humas', '0888823232', '123323232', 'admin', 'Laki-laki', 'Islam', '2006-02-14', '2023-01-01', 1222323232, 'iK2OUim8X28vPb8zFmD4jMuubDOfyS1S5a0ZvDpBo1Pd4tysshi9uNy0YQvm', NULL, '2023-01-01 00:15:58', '2023-01-01 00:46:12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
