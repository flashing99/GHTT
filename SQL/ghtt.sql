-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           10.2.6-MariaDB-log - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour ghtt
CREATE DATABASE IF NOT EXISTS `ghtt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ghtt`;

-- Export de la structure de la table ghtt. category_galleries
CREATE TABLE IF NOT EXISTS `category_galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.category_galleries : ~2 rows (environ)
/*!40000 ALTER TABLE `category_galleries` DISABLE KEYS */;
INSERT INTO `category_galleries` (`id`, `name`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Restauration', '1', '2021-04-07 11:13:56', '2021-04-07 11:13:56', NULL),
	(2, 'Animations', '1', '2021-04-07 11:13:56', '2021-04-07 11:13:56', NULL);
/*!40000 ALTER TABLE `category_galleries` ENABLE KEYS */;

-- Export de la structure de la table ghtt. events
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.events : ~0 rows (environ)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Export de la structure de la table ghtt. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Export de la structure de la table ghtt. galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0 : image, 1 : video',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_gallerie_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.galleries : ~1 rows (environ)
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`id`, `title`, `name`, `type`, `description`, `state`, `category_gallerie_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Test', '123456789.jpg', '0', NULL, '1', 1, '2021-04-07 15:40:41', '2021-04-07 15:40:41', NULL);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;

-- Export de la structure de la table ghtt. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.migrations : ~6 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_03_23_141424_create_profils_table', 1),
	(4, '2020_03_23_141425_create_users_table', 1),
	(5, '2021_04_07_094718_create_galleries_table', 2),
	(6, '2021_04_07_100135_create_category_galleries_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table ghtt. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de la structure de la table ghtt. profils
CREATE TABLE IF NOT EXISTS `profils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.profils : ~0 rows (environ)
/*!40000 ALTER TABLE `profils` DISABLE KEYS */;
/*!40000 ALTER TABLE `profils` ENABLE KEYS */;

-- Export de la structure de la table ghtt. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.roles : ~2 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrateur', '2020-09-20 11:59:42', '2020-09-20 11:59:42'),
	(2, 'Validateur', '2020-09-20 12:00:09', '2020-09-20 12:00:09');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Export de la structure de la table ghtt. role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.role_user : ~3 rows (environ)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2020-09-20 12:00:22', '2020-09-20 12:00:22'),
	(1, 2, NULL, NULL),
	(1, 3, NULL, NULL),
	(2, 1, '2020-09-20 12:00:44', '2020-09-20 12:00:44');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Export de la structure de la table ghtt. sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.sliders : ~4 rows (environ)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `order`, `title`, `text`, `manufacturer_id`, `picture`, `button_text`, `link`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 0, 'Titre de HP', 'Texte HP', 6, 'image.jpg', NULL, '#', '0', '2020-10-21 16:05:49', '2020-10-21 16:05:52', NULL),
	(2, 1, 'Lenovo ThinkPad L14', 'Taille d\'écran 14" | Processeur Intel Core i5 |Mémoire vive 8 Go ram...', 0, '4_1603360447.jpeg', 'En savoir plus', 'http:://www.google.com', '1', '2020-10-21 15:56:54', '2020-10-21 16:00:19', NULL),
	(3, 2, 'HP ENVY Laptop 13', 'Grâce à un affichage de 13.3 pouces de diagonale et une superbe', 0, '4_1603360557.jpeg', 'Découvrir', 'http:://www.google.com', '1', '2020-10-21 15:58:25', '2020-10-21 16:00:14', NULL),
	(4, 4, 'Titre n° 2 exemple', 'Une bref description exemple', 2, '4_1603360337.jpeg', 'Ok', 'http:://www.google.uk', '0', '2020-10-21 15:59:14', '2020-10-22 09:52:17', NULL);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Export de la structure de la table ghtt. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3' COMMENT '1: Mme, 2:Melle, 3:Mr',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil_id` bigint(20) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table ghtt.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `password`, `gender`, `email`, `email_verified_at`, `state`, `profil_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Maachi', 'Salim', NULL, '$2y$10$GhMyRZpGNeaVqaHK9i2VT.ZU15gLp1vpkgpKIi7CNCG3T9zoq/Q.u', '3', 'salim.maachi@gmail.com', NULL, '1', NULL, NULL, '2020-10-15 07:15:49', '2021-04-06 09:26:20', NULL),
	(2, 'Mouallem', 'Mohamed', NULL, '$2y$10$jWnv9II4UnsMQwNyj3y1Y.xonHFXaYAHoABqMO63AQ/2Pl6RMWs1S', '3', 'm.mouallem@gmail.com', NULL, '1', NULL, NULL, '2020-10-18 08:23:51', '2020-11-08 08:40:34', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
