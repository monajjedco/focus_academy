-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table focus.classes
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maximum_students` int(10) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table r2f.classes: ~0 rows (approximately)
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;

-- Dumping structure for table focus.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table focus.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
	(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
	(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
	(7, '2016_06_01_000004_create_oauth_clients_table', 2),
	(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table focus.oauth_access_tokens
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.oauth_access_tokens: ~4 rows (approximately)
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
	('4fa2edb21fdd22a4c7e4aa093b605de63830f5f6bf7380f16ddd86a9a72173bd0c8fc1d7f5553a36', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-24 20:12:46', '2021-05-24 20:12:46', '2022-05-24 20:12:46'),
	('6b775afd7e4e3e706df5ef5d1904bfc85cf1286fa64ae8b7674d10f622809d24034208a0a7f0484c', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-24 20:14:44', '2021-05-24 20:14:44', '2022-05-24 20:14:44'),
	('851d5a282efbaa30dee085c1dcdbd23ed8e5fe2c1c76c4a0fc58d0efa086c15ac98ca0b59e488103', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-24 20:13:25', '2021-05-24 20:13:25', '2022-05-24 20:13:25'),
	('930d5d9b7c2662fc05495884413fc441166ca2607553a5fb3ff694e5ea4b6729be3ed9a3ca019c33', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-24 19:57:31', '2021-05-24 19:57:31', '2022-05-24 19:57:31'),
	('9e8f826e47f86d3d7febc1964ea7f2df7182437e0daa5a77903237ce2ed85f0f7d00a8df27b651a2', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-24 22:29:08', '2021-05-24 22:29:08', '2022-05-24 22:29:08');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;

-- Dumping structure for table focus.oauth_auth_codes
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.oauth_auth_codes: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;

-- Dumping structure for table focus.oauth_clients
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.oauth_clients: ~2 rows (approximately)
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Laravel Personal Access Client', 'XTLYC961PtcI3d5CC6TCdYjTvgdXQc9JYpd9gxTf', NULL, 'http://localhost', 1, 0, 0, '2021-05-24 18:35:19', '2021-05-24 18:35:19'),
	(2, NULL, 'Laravel Password Grant Client', 'sr04hoLrf8LOVWNXuQ5Fla1rEGa7VGJp8RM0fKin', 'users', 'http://localhost', 0, 1, 0, '2021-05-24 18:35:19', '2021-05-24 18:35:19');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;

-- Dumping structure for table focus.oauth_personal_access_clients
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.oauth_personal_access_clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2021-05-24 18:35:19', '2021-05-24 18:35:19');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;

-- Dumping structure for table focus.oauth_refresh_tokens
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.oauth_refresh_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;

-- Dumping structure for table focus.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('novamnhaj@gmail.com', '$2y$10$E8myGkPSYsN1AoZ1drkJr.2CjnOzsN4YOillJ7iL4hZ0BUoo9g.M6', '2021-06-14 21:19:13');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table focus.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(355) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table focus.students: ~0 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Dumping structure for table focus.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table focus.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `api_token`, `email_verified_at`, `password`, `remember_token`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'Ahmad Mohammad Monajjed', 'novamnhaj@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOWU4ZjgyNmU0N2Y4NmQzZDdmZWJjMTk2NGVhN2YyZGY3MTgyNDM3ZTBkYWE1YTc3OTAzMjM3Y2UyZWQ4NWYwZjdkMDBhOGRmMjdiNjUxYTIiLCJpYXQiOjE2MjE4OTUzNDgsIm5iZiI6MTYyMTg5NTM0OCwiZXhwIjoxNjUzNDMxMzQ4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.NX1zol3KfCbYJTPHN_Ntm-q2iBy3OJryiWq-cXaZCGC0oA_2t_-8Wl-OfPBsZ-I45VAFr69rlufWDHB34TG8LGtzkmmxB3mjNRZ_osp87UKG0RFrPC4RXQdE-RQjqLZmkIAG4XwOwvBuGZxhFybqrLOWpFpK8WEEHBAMim5w4aAuvyuJHkwp8GMzGXV58ru4F4Ie7n-_rwnv0P1fkjm66kBC8l6H_E2OLsEQEUrTkUCfz00gWhcmHkVExz9pTkfV6ak4JW3EiRVX98Gzd6tj0ca3vGja6i78E0Fx_lgMW3L2GRynCQUzkuvIFn9daz6Cv_4WOeeLbc1ZG8KiCYTkTsi3GupZabUhwLDBFpophjHI-mUnV00qYtETLWIQqFHprTOutUf4iuP-HBcpUfZbX0zea8w_xILbmjTJO1ElD3buwXfB-gmWzhObcNDmQH4pEzrF_EyrJsVSsCq48tR8r04sGqGQ79HN2B308J49rMDsEpgCloTdZm7xLPSwXjS-8NOnJZqGA1wxKiwthdQb0M0n2WPt5TIpCSEguRigeEgyiuoOCI85h_WnNrEcVWpwXRNBrZLF9xI20Wg9qhW6pkS_uV3UmTspr8PNsKG9HNrUBvxuEgK0q_Lzc0SdcTb4rfiIhtphU_e5IFQT8vG8bbz8ncHROzlrmpqmY_PmyRs', NULL, '$2y$10$lB38FSQgXtLUOwsngL/FGuuN0w96JZzWPj18ZvJbmMKOn9DWDlH6W', 'gaXI1TLu7ur8BfKeaa2GknIWV0d0JkJYiypVL8ECY4HXnElSoPfSpmD9HUFI', 'support', '2021-05-24 18:48:56', '2021-05-24 18:48:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
