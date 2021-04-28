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


-- Export de la structure de la base pour gmao
CREATE DATABASE IF NOT EXISTS `gmao` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gmao`;

-- Export de la structure de la table gmao. clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.clients : ~2 rows (environ)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `nom`, `adresse`, `mobile`, `contact`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Cocacola', 'Tour ABC\r\nPins Maritimes, El Mohamadia-Alger', '0660778899', 'contact client 1, contact client 2', '2020-05-12 13:06:46', '2020-05-12 12:42:13', NULL),
	(2, 'test dfgfgggggggggggg', 'lqksnflqsf gggggggg', 'qsdml,qggg', 'qmdl,qgggggggggg', '2020-05-12 12:43:45', '2020-05-12 12:45:25', '2020-05-12 12:45:25'),
	(3, 'Samsung', 'lqmkshflm', '546546', 'qmfklqs', '2020-07-22 15:09:27', '2020-07-22 15:09:27', NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Export de la structure de la table gmao. equipements
CREATE TABLE IF NOT EXISTS `equipements` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero` bigint(20) NOT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `famille_id` bigint(20) unsigned NOT NULL,
  `sous_famille_id` bigint(20) unsigned DEFAULT 0,
  `site_id` bigint(20) unsigned NOT NULL,
  `zone_id` bigint(20) unsigned NOT NULL,
  `surface_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `fabriquant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_serie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anne_fabrication` year(4) DEFAULT NULL,
  `criticite` enum('1','2','3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `equipements_numero_unique` (`numero`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.equipements : ~12 rows (environ)
/*!40000 ALTER TABLE `equipements` DISABLE KEYS */;
INSERT INTO `equipements` (`id`, `numero`, `code`, `parent_id`, `designation`, `description`, `famille_id`, `sous_famille_id`, `site_id`, `zone_id`, `surface_id`, `client_id`, `fabriquant`, `numero_serie`, `model`, `anne_fabrication`, `criticite`, `lien_doc`, `etat`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 400001, 'Code 1', 0, 'Designation', 'Description', 2, 1, 1, 1, 1, 1, 'Fabriquant', 'Numero de série', 'Modèle', '2020', NULL, 'http://www.google.com', '1', '2020-05-19 09:50:33', '2020-05-20 11:08:41', NULL),
	(2, 400002, 'code 2', 1, 'Designation du code 2', 'ml,;', 2, 3, 1, 1, 1, 1, 'lmsdjf', 'qsfqs', 'qsfqs', '2020', NULL, '#', '1', '2020-05-19 10:06:27', '2020-05-19 10:06:27', NULL),
	(3, 400003, 'Code 3', 0, 'sdg', 'sdg', 4, 3, 1, 1, 2, 1, 'sdg', 'sdg', 'sdg', '2020', NULL, 'hhhh', '0', '2020-05-19 13:30:48', '2020-06-02 13:29:43', NULL),
	(4, 400004, '5', NULL, 'Designation', 'Description', 2, 3, 1, 1, 2, 1, 'Fabriquant', 'Numero de série', 'Modèle', '2021', NULL, 'http://www.google.dz', '1', '2020-05-20 10:33:34', '2020-12-03 14:49:38', NULL),
	(5, 400005, '98_+88_8898', 1, 'design', 'des', 2, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-05-20 11:31:24', '2020-11-08 16:13:35', NULL),
	(6, 400006, 'Code 6', 0, 'Designation 222', 'Description 222', 2, 1, 1, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-07-22 15:14:16', '2020-11-08 16:14:28', NULL),
	(94, 400009, '00_+00_0000', 1, 'designation 1', 'description 1', 2, NULL, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-02 09:24:25', '2020-12-02 09:24:25', NULL),
	(95, 400010, '00_+00_0001', 1, 'designation 2', 'description 2', 2, NULL, 1, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-02 09:24:25', '2020-12-02 09:24:25', NULL),
	(96, 400011, '00_+00_0002', 1, 'designation 3', 'description 3', 4, NULL, 1, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-02 09:24:25', '2020-12-02 09:24:25', NULL),
	(97, 400012, '00_+00_0003', 1, 'designation 4', 'description 4', 4, NULL, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-12-02 09:24:25', '2020-12-02 09:24:25', NULL),
	(121, 400121, '00_+00_0004', 3, 'designation 004', 'description 004', 2, 3, 2, 4, 3, 1, 'fab 004', 'n 004', 'm 004', '2019', '2', 'http://www,webcom.dz/doc.pdf', '1', '2020-12-09 09:46:08', '2020-12-09 09:46:08', NULL),
	(122, 400122, '00_+00_0005', 3, 'designation 005', 'description 005', 2, 3, 2, 4, 3, 1, 'fab 005', 'n 005', 'm 005', '2020', '2', 'http://www,webcom.dz/doc.pdf', '1', '2020-12-09 09:46:08', '2020-12-09 09:46:08', NULL);
/*!40000 ALTER TABLE `equipements` ENABLE KEYS */;

-- Export de la structure de la table gmao. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Export de la structure de la table gmao. familles
CREATE TABLE IF NOT EXISTS `familles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.familles : ~2 rows (environ)
/*!40000 ALTER TABLE `familles` DISABLE KEYS */;
INSERT INTO `familles` (`id`, `nom`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Test nom de famille d’équipement 2', '2020-05-12 13:57:06', '2020-05-12 14:05:41', NULL),
	(2, 'Famille 1', '2020-05-12 14:05:52', '2020-05-12 14:05:52', NULL),
	(3, 'azfrzar', '2020-05-12 14:06:01', '2020-05-12 14:06:05', '2020-05-12 14:06:05'),
	(4, 'Famille 2', '2020-05-17 09:27:24', '2020-05-17 13:28:04', NULL);
/*!40000 ALTER TABLE `familles` ENABLE KEYS */;

-- Export de la structure de la table gmao. gauges
CREATE TABLE IF NOT EXISTS `gauges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seuil_min` int(11) NOT NULL,
  `seuil_max` int(11) NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.gauges : ~0 rows (environ)
/*!40000 ALTER TABLE `gauges` DISABLE KEYS */;
INSERT INTO `gauges` (`id`, `seuil_min`, `seuil_max`, `etat`, `created_at`, `updated_at`) VALUES
	(1, 0, 20, '1', '2020-08-30 09:39:53', '2020-09-27 16:01:15');
/*!40000 ALTER TABLE `gauges` ENABLE KEYS */;

-- Export de la structure de la table gmao. interventions
CREATE TABLE IF NOT EXISTS `interventions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero` bigint(20) NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `date_realisation` date DEFAULT NULL,
  `equipement_id` bigint(20) unsigned NOT NULL,
  `priorite` enum('P1','P2','P3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P3' COMMENT 'P1 : Urgente, P2 : Moyenne, P3 : Normale',
  `etat` enum('O','V','R','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'O' COMMENT 'O : Ouverte, V : Validée, R : Retour au Demandeur & A : Annulée',
  `workorder_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.interventions : ~12 rows (environ)
/*!40000 ALTER TABLE `interventions` DISABLE KEYS */;
INSERT INTO `interventions` (`id`, `numero`, `designation`, `description`, `user_id`, `date_realisation`, `equipement_id`, `priorite`, `etat`, `workorder_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 2000001, 'Designation 01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis pretium justo, sit amet interdum purus. Fusce a blandit eros. Donec augue sem, lacinia sit amet ligula a, mattis mollis sapien. Mauris imperdiet tortor non nulla pharetra viverra. Donec posuere hendrerit urna. Maecenas et nisl nec tortor convallis egestas. Nulla mollis sed sem vitae rhoncus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fringilla ultricies diam. Proin lacinia ligula sed auctor aliquam.\r\n\r\nDuis non risus ut ipsum vehicula sollicitudin. Pellentesque blandit nulla ac ex vulputate, vel imperdiet purus interdum. Nulla eget tortor quis libero posuere pulvinar in at enim. Proin suscipit viverra dui, non consequat urna eleifend et. Donec iaculis, justo feugiat gravida eleifend, mauris nibh sollicitudin tellus, id sodales velit justo sit amet nulla. Donec eu lacus quis sapien auctor fermentum. Etiam nec nunc lobortis, tempus eros id, tincidunt ante.', 2, '2020-08-20', 1, 'P3', 'A', NULL, '2020-06-10 13:44:16', '2020-06-17 14:37:33', NULL),
	(2, 2000002, 'Designation 02', 'Retour au demandeur\r\nCet équipement est normal Merci', 2, '2020-07-16', 4, 'P2', 'R', NULL, '2020-06-17 15:11:52', '2020-06-17 15:32:06', NULL),
	(3, 2000003, 'Designation 03', NULL, 2, '2020-10-04', 5, 'P1', 'O', NULL, '2020-06-17 15:38:45', '2020-06-17 15:38:45', NULL),
	(4, 2000004, 'kgik', 'Description de la DI N° 4', 1, '2020-01-27', 1, 'P3', 'A', NULL, '2020-07-19 13:58:08', '2020-07-20 11:34:59', NULL),
	(5, 2000005, 'Répation des lampes', 'Toutes les lampes de l\'étage 14 ne s\'allume pas.', 2, '2020-07-20', 2, 'P2', 'V', 45, '2020-07-20 11:41:01', '2020-07-20 14:39:15', NULL),
	(6, 2000006, 'La chasse d\'eau qui fuit', 'Le flotteur doit être à la bonne hauteur pour assurer un remplissage correct du réservoir. Lorsque le flotteur du WC est trop bas, il empêche la fermeture du clapet et donc la chasse d\'eau fuit. Il en va de même si votre flotteur est en plastique et qu\'il se remplit d\'eau.', 2, '2020-07-20', 5, 'P3', 'V', 46, '2020-07-20 15:22:15', '2020-07-20 15:27:50', NULL),
	(7, 2000007, 'Coupure éléctrique', 'Panne de courant d\'un immeuble', 2, '2020-07-20', 3, 'P2', 'V', 47, '2020-07-20 15:43:46', '2020-07-21 13:00:20', NULL),
	(8, 2000008, 'Fenêtre cassée', 'L\'hypothèse de la vitre brisée, souvent appelée théorie de la vitre brisée, à son tour également dite de la fenêtre brisée ou du carreau cassé, est une explication ...', 2, '2020-07-21', 6, 'P3', 'O', 48, '2020-07-21 13:18:51', '2020-07-21 13:33:45', NULL),
	(9, 2000009, 'Designation', 'Description', 1, '2020-09-27', 1, 'P3', 'V', 50, '2020-09-27 16:07:39', '2020-09-27 16:15:45', NULL),
	(10, 2000010, 'Designation chdrfdf', 'Description dfhdfh', 1, '2020-09-27', 4, 'P3', 'V', 51, '2020-09-27 16:25:39', '2020-09-27 16:26:07', NULL),
	(11, 2000011, 'Designation', 'Description', 1, '2020-12-23', 1, 'P3', 'V', 52, '2020-10-01 08:33:49', '2020-10-01 08:42:01', NULL),
	(12, 2000012, 'Designation', 'Description', 1, '2020-10-14', 1, 'P3', 'V', 53, '2020-10-01 08:59:40', '2020-12-03 15:19:58', NULL);
/*!40000 ALTER TABLE `interventions` ENABLE KEYS */;

-- Export de la structure de la table gmao. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.migrations : ~21 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_05_05_082838_clients', 2),
	(5, '2020_05_05_083014_equipements', 2),
	(6, '2020_05_05_083105_etages', 2),
	(7, '2020_05_05_083125_familles', 2),
	(8, '2020_05_05_083201_sites', 2),
	(9, '2020_05_05_083254_sous_familles', 2),
	(10, '2020_05_05_083331_surfaces', 2),
	(11, '2020_05_05_094043_add_soft_deletes_to_user_table', 3),
	(13, '2020_05_19_081734_add_numero_to_equipements_table', 4),
	(14, '2020_06_09_074658_create_workers_table', 5),
	(15, '2020_06_09_131351_create_interventions_table', 6),
	(16, '2020_06_10_075618_create_workorders_table', 7),
	(17, '2020_06_10_091933_create_zones_table', 8),
	(18, '2020_06_10_101234_add_client_id_to_surfaces_table', 9),
	(19, '2020_06_17_134825_create_reponses_table', 10),
	(20, '2020_07_06_153820_create_worker_workorders_table', 11),
	(21, '2020_07_13_090635_create_preventives_table', 12),
	(25, '2020_07_15_080832_create_taches_table', 13),
	(26, '2020_08_30_092616_create_gauges', 14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table gmao. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.password_resets : ~1 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('f.bergad@webcom.dz', '$2y$10$PiZG2TKguVv1C/Y6.Ydg/OXruJahrWAHIxSqw3ysRUc9u5GTnKGvi', '2020-10-05 09:44:21'),
	('s.maachi@webcom.dz', '$2y$10$FN6nOm9pjICKyaKP6NEime.6D00c6rmllOK18VmqSzaRd3poVrtpa', '2020-10-05 10:05:38');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de la structure de la table gmao. preventives
CREATE TABLE IF NOT EXISTS `preventives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipement_id` bigint(20) unsigned NOT NULL,
  `frequence` int(11) NOT NULL,
  `unite` enum('H','J','M','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'H' COMMENT 'H : Heure, J : Jour, M : Mois, A : Année',
  `start_date` date NOT NULL,
  `taches` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_ressources` int(11) NOT NULL,
  `duree` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 : inactif, 1 : Actif',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `first_ot_date` timestamp NULL DEFAULT NULL,
  `next_exec_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preventives_equipement_id_foreign` (`equipement_id`),
  CONSTRAINT `preventives_equipement_id_foreign` FOREIGN KEY (`equipement_id`) REFERENCES `equipements` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.preventives : ~6 rows (environ)
/*!40000 ALTER TABLE `preventives` DISABLE KEYS */;
INSERT INTO `preventives` (`id`, `code`, `designation`, `equipement_id`, `frequence`, `unite`, `start_date`, `taches`, `nombre_ressources`, `duree`, `etat`, `user_id`, `first_ot_date`, `next_exec_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'MP-0001', 'Designation 01', 2, 3, 'M', '2020-07-14', 'Tache 01', 2, '03.50', '0', 1, '2020-07-14 13:03:28', NULL, '2020-07-13 11:01:41', '2020-12-13 16:42:04', NULL),
	(3, 'MP-0003', 'Designation 02', 3, 4, 'H', '2020-07-13', '- Tâche une ...\r\n- Tâche deux ...', 1, '01.50', '0', 1, NULL, NULL, '2020-07-13 14:00:27', '2020-12-13 16:42:04', NULL),
	(4, 'MP-0004', 'Designation 03', 4, 1, 'J', '2020-07-13', 'Tâche klqjbsf kqlsjf ljqsd fklbsd kfnb sdkn fknsdb fknb skdnb fkln bsdf', 5, '02.00', '0', 1, NULL, '2020-09-14 16:48:42', '2020-07-13 14:02:55', '2020-12-13 16:42:05', NULL),
	(5, 'MP-0005', 'Designation', 2, 1, 'M', '2020-08-26', 'Tâches', 3, '02.00', '0', 1, NULL, NULL, '2020-08-26 14:08:09', '2020-12-13 16:42:05', NULL),
	(6, 'MP-0006', 'Designation 6', 2, 1, 'H', '2020-12-13', 'Tâches', 3, '02.00', '0', 1, NULL, NULL, '2020-08-26 14:08:09', '2020-12-13 16:55:07', NULL),
	(7, 'MP-0007', 'Designation 7', 94, 1, 'H', '2020-12-13', 'Tâches 7', 2, '02.00', '1', 1, NULL, '2020-12-13 16:55:03', '2020-12-13 15:55:03', '2020-12-13 16:55:03', NULL);
/*!40000 ALTER TABLE `preventives` ENABLE KEYS */;

-- Export de la structure de la table gmao. reponses
CREATE TABLE IF NOT EXISTS `reponses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` enum('O','V','R','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'O' COMMENT 'O : Ouverte, V : Validée, R : Retour au Demandeur & A : Annulée',
  `user_id` bigint(20) unsigned NOT NULL,
  `intervention_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reponses_user_id_foreign` (`user_id`),
  KEY `reponses_intervention_id_foreign` (`intervention_id`),
  CONSTRAINT `reponses_intervention_id_foreign` FOREIGN KEY (`intervention_id`) REFERENCES `interventions` (`id`),
  CONSTRAINT `reponses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.reponses : ~2 rows (environ)
/*!40000 ALTER TABLE `reponses` DISABLE KEYS */;
INSERT INTO `reponses` (`id`, `description`, `etat`, `user_id`, `intervention_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'R Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis pretium justo, sit amet interdum purus. Fusce a blandit eros. Donec augue sem, lacinia sit amet ligula a, mattis mollis sapien. Mauris imperdiet tortor non nulla pharetra viverra. Donec posuere hendrerit urna.', 'A', 3, 1, '2020-06-17 14:37:33', '2020-06-17 14:37:33', NULL),
	(4, 'Retour au demandeur\r\nCet équipement est normal Merci', 'R', 3, 2, '2020-06-17 15:32:06', '2020-06-17 15:32:06', NULL),
	(7, 'J\'annule cette demande.\r\n\r\nMerci', 'A', 3, 4, '2020-07-20 11:34:59', '2020-07-20 11:34:59', NULL);
/*!40000 ALTER TABLE `reponses` ENABLE KEYS */;

-- Export de la structure de la table gmao. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table gmao.roles : ~3 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrateur', '2020-05-03 14:16:20', '2020-05-03 14:16:20'),
	(2, 'Commercial', '2020-05-03 14:16:29', '2020-05-03 14:16:29'),
	(3, 'Maintenance', '2020-05-03 15:38:52', '2020-05-03 15:38:52');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Export de la structure de la table gmao. role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table gmao.role_user : ~6 rows (environ)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2020-05-05 12:00:46', '2020-05-05 12:00:48'),
	(30, 1, '2020-05-05 12:00:53', '2020-05-05 12:00:54'),
	(2, 2, '2020-05-05 12:00:56', '2020-05-05 12:00:57'),
	(20, 1, '2020-06-10 12:46:04', '2020-06-10 12:46:05'),
	(3, 3, NULL, NULL),
	(3, 10, NULL, NULL),
	(2, 13, NULL, NULL);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Export de la structure de la table gmao. sites
CREATE TABLE IF NOT EXISTS `sites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.sites : ~8 rows (environ)
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` (`id`, `nom`, `etat`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Tour ABC', '1', '2020-05-11 09:36:45', '2020-05-11 09:36:47', NULL),
	(2, 'Tour Geneva', '1', '2020-05-11 09:38:39', '2020-05-11 09:38:40', NULL),
	(3, 'Tour Oslo', '0', '2020-05-11 09:38:59', '2020-09-27 15:51:01', NULL),
	(4, 'Hôtele Hilton', '0', '2020-05-11 09:39:15', '2020-09-27 15:50:54', NULL),
	(5, 'Flat Hôtel', '0', '2020-05-11 09:39:44', '2020-09-27 15:50:53', NULL),
	(6, 'ARDIS', '1', '2020-05-11 09:39:52', '2020-05-11 09:39:53', NULL),
	(11, 'aaaa', '0', '2020-05-11 09:20:14', '2020-05-11 09:22:47', '2020-05-11 09:22:47'),
	(12, 'Nouveau Site', '0', '2020-05-11 10:05:41', '2020-05-11 10:08:18', '2020-05-11 10:08:18');
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;

-- Export de la structure de la table gmao. sous_famille
CREATE TABLE IF NOT EXISTS `sous_famille` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.sous_famille : ~3 rows (environ)
/*!40000 ALTER TABLE `sous_famille` DISABLE KEYS */;
INSERT INTO `sous_famille` (`id`, `nom`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Sous Famille 1', '2020-05-17 09:29:25', '2020-05-18 13:52:36', NULL),
	(2, 'test1', '2020-05-17 09:30:29', '2020-05-17 09:30:35', '2020-05-17 09:30:35'),
	(3, 'Sous famille 2', '2020-05-18 13:52:30', '2020-05-18 13:52:30', NULL);
/*!40000 ALTER TABLE `sous_famille` ENABLE KEYS */;

-- Export de la structure de la table gmao. surfaces
CREATE TABLE IF NOT EXISTS `surfaces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.surfaces : ~2 rows (environ)
/*!40000 ALTER TABLE `surfaces` DISABLE KEYS */;
INSERT INTO `surfaces` (`id`, `nom`, `zone_id`, `client_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '100 m2', 1, 1, '2020-06-10 11:21:53', '2020-06-10 11:21:54', NULL),
	(2, '50 m2', 1, 1, '2020-06-10 11:22:52', '2020-06-10 11:22:53', NULL),
	(3, '500 m2', 4, 3, '2020-07-22 15:11:53', '2020-07-22 15:11:53', NULL);
/*!40000 ALTER TABLE `surfaces` ENABLE KEYS */;

-- Export de la structure de la table gmao. taches
CREATE TABLE IF NOT EXISTS `taches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `preventive_id` bigint(20) unsigned NOT NULL,
  `workorder_id` bigint(20) unsigned NOT NULL,
  `opened_ot_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `next_exec_date` timestamp NULL DEFAULT NULL,
  `frequance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taches_preventive_id_foreign` (`preventive_id`),
  KEY `taches_workorder_id_foreign` (`workorder_id`),
  CONSTRAINT `taches_preventive_id_foreign` FOREIGN KEY (`preventive_id`) REFERENCES `preventives` (`id`),
  CONSTRAINT `taches_workorder_id_foreign` FOREIGN KEY (`workorder_id`) REFERENCES `workorders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.taches : ~5 rows (environ)
/*!40000 ALTER TABLE `taches` DISABLE KEYS */;
INSERT INTO `taches` (`id`, `preventive_id`, `workorder_id`, `opened_ot_date`, `next_exec_date`, `frequance`, `etat`, `created_at`, `updated_at`) VALUES
	(1, 4, 42, '2020-07-15 14:04:26', '2020-07-15 13:57:00', '2 J', '0', '2020-07-15 13:51:52', '2020-07-15 14:04:26'),
	(2, 4, 43, '2020-07-15 14:05:23', NULL, '2 J', '1', '2020-07-15 14:04:26', '2020-07-15 14:04:26'),
	(3, 5, 49, '2020-08-26 14:08:30', NULL, '1 M', '1', '2020-08-26 14:08:30', '2020-08-26 14:08:30'),
	(4, 6, 54, '2020-12-13 16:42:10', NULL, '1 H', '1', '2020-12-13 16:42:10', '2020-12-13 16:42:10'),
	(5, 7, 55, '2020-12-13 16:56:16', '2020-12-13 17:56:16', '1 H', '1', '2020-12-13 16:56:16', '2020-12-13 16:56:16');
/*!40000 ALTER TABLE `taches` ENABLE KEYS */;

-- Export de la structure de la table gmao. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1: Mme, 2:Melle, 3:Mr',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.users : ~5 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `email`, `username`, `password`, `state`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Salim', 'Maachi', '3', 's.maachi@webcom.dz', NULL, '$2y$10$3OLB3uCmoi0aCd0Ak/XPtexeWpsj6.h0oa47ALxkRHWaYudZWrGoG', '1', NULL, 'XesL1bTZ4bXLGePFWRNjzVHc52ZHWhVHNyJsq30POzxFpYP42JSV6N60LyE9', '2020-05-03 13:52:26', '2020-10-05 09:47:55', NULL),
	(2, 'Halim', 'Bouaziz', '1', 'h.bouaziz@webcom.dz', 'halim', '$2y$10$ZhDFkClLLOf0dgSrQfzNlOZwLc62Lc0Yw0TKU1Xz5ZpPHjfX2w9qS', '1', NULL, NULL, '2020-05-03 13:52:26', '2020-07-22 10:16:46', NULL),
	(3, 'Farid', 'Bergad', '3', 'f.bergad@webcom.dz', NULL, '$2y$10$ZhDFkClLLOf0dgSrQfzNlOZwLc62Lc0Yw0TKU1Xz5ZpPHjfX2w9qS', '1', NULL, NULL, '2020-05-05 10:43:43', '2020-05-05 10:43:43', NULL),
	(10, 'Mohamed', 'Mouallem', '3', 'm.mouallem@webcom.dz', NULL, '$2y$10$NbNr0qnYuApEvnWbLGH09eR7.Vs4DH1FKhWFXT/eFvhAy3Pl4Ml3e', '0', NULL, NULL, '2020-05-05 12:07:57', '2020-07-22 10:43:46', NULL),
	(13, 'Touré', 'Mamadou', '3', 'mamadou@webcom.dz', NULL, '$2y$10$Z8JpLhLYnWDtjwGcREkY7uVxUP1/xpAJvy1XgObIvcGrduWpPLAnm', '0', NULL, NULL, '2020-07-22 10:44:57', '2020-09-15 10:29:56', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Export de la structure de la table gmao. workers
CREATE TABLE IF NOT EXISTS `workers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` bigint(20) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_recrutement` date DEFAULT NULL,
  `site_id` bigint(20) unsigned NOT NULL,
  `etat` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.workers : ~3 rows (environ)
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` (`id`, `code`, `nom`, `prenom`, `matricule`, `fonction`, `mobile`, `date_recrutement`, `site_id`, `etat`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 5001, 'Ben Mohamed', 'Mohamed', '558899 MAT', 'Sa Fonction', '0770448899', '1970-02-02', 1, 1, '2020-06-09 12:47:40', '2020-07-22 10:02:57', NULL),
	(2, 5002, 'Ben Ali', 'Ali', '445566', 'Electricien', '0770336699', '2015-06-15', 1, 1, '2020-06-09 12:49:20', '2020-07-22 10:02:56', NULL),
	(3, 5003, 'testnom1', 'testprenom1', '001122', 'Tech1', '0770889966', '2014-06-23', 2, 1, '2020-07-22 15:02:15', '2020-07-22 15:02:15', NULL);
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;

-- Export de la structure de la table gmao. worker_workorders
CREATE TABLE IF NOT EXISTS `worker_workorders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `worker_id` bigint(20) unsigned NOT NULL,
  `workorder_id` bigint(20) unsigned NOT NULL,
  `hours` double DEFAULT NULL,
  `work_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `worker_workorders_worker_id_foreign` (`worker_id`),
  KEY `worker_workorders_workorder_id_foreign` (`workorder_id`),
  CONSTRAINT `worker_workorders_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `workers` (`id`),
  CONSTRAINT `worker_workorders_workorder_id_foreign` FOREIGN KEY (`workorder_id`) REFERENCES `workorders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.worker_workorders : ~13 rows (environ)
/*!40000 ALTER TABLE `worker_workorders` DISABLE KEYS */;
INSERT INTO `worker_workorders` (`id`, `worker_id`, `workorder_id`, `hours`, `work_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(7, 1, 4, 1.11, '2020-05-16', '2020-07-12 14:19:32', '2020-07-12 14:19:32', NULL),
	(8, 1, 4, 6, '2020-07-15', '2020-07-12 14:19:32', '2020-07-12 14:19:32', NULL),
	(24, 1, 6, 2.22, '2019-12-28', '2020-07-12 14:41:14', '2020-07-12 14:41:14', NULL),
	(25, 2, 6, 6, '2020-02-03', '2020-07-12 14:41:14', '2020-07-12 14:41:14', NULL),
	(27, 1, 8, 5, '2020-05-09', '2020-07-12 15:07:22', '2020-07-12 15:07:22', NULL),
	(31, 1, 8, 2.5, '2019-06-10', '2020-07-12 15:12:29', '2020-07-12 15:12:29', NULL),
	(32, 1, 9, 2.5, '2019-06-10', '2020-07-12 15:12:29', '2020-07-12 15:12:29', NULL),
	(34, 1, 44, 5, '2019-08-15', '2020-07-12 15:12:29', '2020-07-12 15:12:29', NULL),
	(42, 1, 2, 2, '2020-07-13', '2021-02-14 16:28:33', '2021-02-14 16:28:33', NULL),
	(43, 2, 2, 1, '2020-07-13', '2021-02-14 16:28:33', '2021-02-14 16:28:33', NULL),
	(47, 1, 5, 1.25, '2020-05-16', '2021-02-15 13:44:14', '2021-02-15 13:44:14', NULL),
	(48, 2, 5, 1.5, '2020-05-10', '2021-02-15 13:44:14', '2021-02-15 13:44:14', NULL),
	(49, 1, 5, 2, '2019-06-10', '2021-02-15 13:44:14', '2021-02-15 13:44:14', NULL),
	(50, 1, 57, 2, '2021-02-15', '2021-02-15 14:52:35', '2021-02-15 14:52:35', NULL),
	(51, 2, 58, 1.25, '2021-02-15', '2021-02-15 15:05:18', '2021-02-15 15:05:18', NULL);
/*!40000 ALTER TABLE `worker_workorders` ENABLE KEYS */;

-- Export de la structure de la table gmao. workorders
CREATE TABLE IF NOT EXISTS `workorders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero` bigint(20) NOT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `date_realisation_souhaitee` date DEFAULT NULL,
  `date_debut_reelle` timestamp NULL DEFAULT NULL,
  `date_fin_reelle` timestamp NULL DEFAULT NULL,
  `duree` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Unité : Heure',
  `duree_reelle` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Unité : Heure',
  `equipement_id` bigint(20) unsigned NOT NULL,
  `priorite` enum('P1','P2','P3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P3' COMMENT 'P1 : Urgente, P2 : Moyenne, P3 : Normale',
  `type` enum('MP','MC','MA') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'MP : Maintenance Préventive, MC : Maintenance Corrective, MA : Maintenance Améliorative',
  `etat` enum('A','P','C','M','S','E','F','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A' COMMENT 'A : En Attente, P : Planifié, C : En cours, M : Attente Matériel, S : Attente Service, E : Equipement Non-Dispo, F : Fermé, N : Annulé',
  `intervention_id` bigint(20) unsigned DEFAULT NULL,
  `preventive_id` bigint(20) unsigned DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.workorders : ~26 rows (environ)
/*!40000 ALTER TABLE `workorders` DISABLE KEYS */;
INSERT INTO `workorders` (`id`, `numero`, `designation`, `description`, `user_id`, `date_realisation_souhaitee`, `date_debut_reelle`, `date_fin_reelle`, `duree`, `duree_reelle`, `equipement_id`, `priorite`, `type`, `etat`, `intervention_id`, `preventive_id`, `document`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 7000001, 'Designation', 'Description', 1, '2020-07-07', NULL, NULL, '02.00', NULL, 1, 'P3', 'MC', 'F', NULL, NULL, NULL, '2020-07-07 08:01:24', '2020-07-07 08:01:25', NULL),
	(2, 7000002, 'Designation 2 Edité', 'Description 2 Edité', 1, '2020-07-12', '2020-07-13 13:30:00', '2020-07-13 16:30:00', '03.00', NULL, 97, 'P3', 'MC', 'A', NULL, NULL, 'http://www.google.com', '2020-07-07 08:01:24', '2021-02-14 16:28:33', NULL),
	(3, 7000003, 'Desigbation 3', 'Description 3', 1, '2020-07-12', NULL, NULL, '00.00', NULL, 1, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-08 07:52:56', '2020-07-12 15:07:56', NULL),
	(4, 7000004, 'qs', 'qsfsq', 1, '2020-07-12', NULL, NULL, '05.00', NULL, 1, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-08 08:32:48', '2020-07-12 13:42:42', NULL),
	(5, 7000005, 'sdgsd', 'Tâches 5', 1, '2020-07-12', NULL, NULL, '05.00', NULL, 3, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-08 08:38:35', '2020-07-12 14:16:43', NULL),
	(6, 7000006, 'drheh 22', 'Tâches 6', 1, '2020-07-12', NULL, NULL, '05.00', NULL, 1, 'P3', 'MC', 'A', NULL, NULL, 'https://www.daikin.ch/content/dam/document-library/operation-manuals/heat/air-to-water-heat-pump-low-temperature/ehbh-cb/4PFR383117-1C_OM_EHBH-CB_EHBX-CB_EHVH-CB_EHVX-CB_Operation%20Manuals_French.pdf', '2020-07-08 09:14:50', '2020-07-12 14:41:13', NULL),
	(7, 7000007, 'Designation 7', 'Tâches 7', 1, '2020-07-12', NULL, NULL, '00.00', NULL, 1, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-12 15:01:02', '2020-07-12 15:01:02', NULL),
	(8, 7000008, 'Designation 8', 'Tâches 8', 1, '2020-07-12', NULL, NULL, '00.00', NULL, 5, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-12 15:03:12', '2020-07-12 15:03:12', NULL),
	(9, 7000009, 'qsdqsd', 'Tâches 9', 1, '2020-07-12', NULL, NULL, NULL, NULL, 5, 'P3', 'MC', 'A', NULL, NULL, NULL, '2020-07-12 15:21:03', '2020-07-12 15:21:03', NULL),
	(10, 7000010, 'qsfqsf', 'Tâches 10', 1, '2020-07-12', NULL, NULL, NULL, NULL, 1, 'P3', 'MC', 'N', NULL, NULL, NULL, '2020-07-12 15:24:31', '2020-07-19 15:04:31', NULL),
	(42, 7000042, 'Designation 03', 'Tâche klqjbsf kqlsjf ljqsd fklbsd kfnb sdkn fknsdb fknb skdnb fkln bsdf', 1, '2020-07-13', '2020-07-15 11:57:00', '2020-07-15 13:57:00', '02.00', NULL, 4, 'P3', 'MP', 'F', NULL, 4, 'https://www.daikin.ch/content/dam/document-library/operation-manuals/heat/air-to-water-heat-pump-low-temperature/ehbh-cb/4PFR383117-1C_OM_EHBH-CB_EHBX-CB_EHVH-CB_EHVX-CB_Operation%20Manuals_French.pdf', '2020-07-15 13:51:52', '2020-07-15 13:59:18', NULL),
	(43, 7000043, 'Designation 03', 'Tâche klqjbsf kqlsjf ljqsd fklbsd kfnb sdkn fknsdb fknb skdnb fkln bsdf', 1, '2020-07-13', NULL, NULL, '02.00', NULL, 4, 'P3', 'MP', 'A', NULL, 4, NULL, '2020-07-15 14:04:25', '2020-07-15 14:04:26', NULL),
	(44, 7000044, 'Répation des lampes', 'Toutes les lampes de l\'étage 14 ne s\'allume pas.', 3, '2020-07-20', NULL, NULL, NULL, NULL, 2, 'P2', 'MC', 'A', NULL, NULL, NULL, '2020-07-20 14:28:46', '2020-07-20 14:28:46', NULL),
	(45, 7000045, 'Répation des lampes', 'Toutes les lampes de l\'étage 14 ne s\'allume pas.', 3, '2020-07-20', NULL, NULL, NULL, NULL, 2, 'P2', 'MC', 'A', 5, NULL, NULL, '2020-07-20 14:39:15', '2020-07-20 14:39:15', NULL),
	(46, 7000046, 'La chasse d\'eau qui fuit', 'Le flotteur doit être à la bonne hauteur pour assurer un remplissage correct du réservoir. Lorsque le flotteur du WC est trop bas, il empêche la fermeture du clapet et donc la chasse d\'eau fuit. Il en va de même si votre flotteur est en plastique et qu\'il se remplit d\'eau.', 3, '2020-07-20', NULL, NULL, NULL, NULL, 5, 'P3', 'MC', 'A', 6, NULL, NULL, '2020-07-20 15:27:50', '2020-07-20 15:27:50', NULL),
	(47, 7000047, 'Coupure éléctrique', 'Panne de courant d\'un immeuble', 3, '2020-07-20', NULL, NULL, NULL, NULL, 3, 'P1', 'MC', 'A', 7, NULL, NULL, '2020-07-20 15:54:05', '2020-07-20 15:54:05', NULL),
	(48, 7000048, 'Fenêtre cassée', 'L\'hypothèse de la vitre brisée, souvent appelée théorie de la vitre brisée, à son tour également dite de la fenêtre brisée ou du carreau cassé, est une explication ...', 3, '2020-07-21', NULL, NULL, NULL, NULL, 2, 'P3', 'MC', 'F', 8, NULL, NULL, '2020-07-21 13:33:45', '2020-07-21 13:37:22', NULL),
	(49, 7000049, 'Designation', 'Tâches', 1, '2020-08-26', NULL, NULL, '02.00', NULL, 2, 'P3', 'MP', 'A', NULL, 5, NULL, '2020-08-26 14:08:30', '2020-08-26 14:08:30', NULL),
	(50, 7000050, 'Designation', 'Description', 1, '2020-09-27', NULL, NULL, NULL, NULL, 2, 'P3', 'MC', 'A', 9, NULL, NULL, '2020-09-27 16:15:45', '2020-09-27 16:15:45', NULL),
	(51, 7000051, 'Designation chdrfdf', 'Description dfhdfh', 1, '2020-09-27', NULL, NULL, NULL, NULL, 4, 'P3', 'MC', 'A', 10, NULL, 'http://www.google.com', '2020-09-27 16:26:07', '2020-09-27 16:26:07', NULL),
	(52, 7000052, 'Designation', 'Description', 1, '2020-10-01', NULL, NULL, NULL, NULL, 1, 'P3', 'MC', 'A', 11, NULL, NULL, '2020-10-01 08:42:00', '2020-10-01 08:42:01', NULL),
	(53, 7000053, 'Designation', 'Description', 1, '2020-12-03', NULL, NULL, NULL, NULL, 1, 'P3', 'MC', 'A', 12, NULL, NULL, '2020-12-03 15:19:58', '2020-12-03 15:19:58', NULL),
	(54, 7000054, 'Designation 6', 'Tâches', 1, '2020-12-13', NULL, NULL, '02.00', NULL, 2, 'P3', 'MP', 'A', NULL, 6, NULL, '2020-12-13 16:42:10', '2020-12-13 16:42:10', NULL),
	(55, 7000055, 'Designation 7', 'Tâches 7', 1, '2020-12-13', NULL, NULL, '02.00', NULL, 94, 'P3', 'MP', 'A', NULL, 7, NULL, '2020-12-13 16:56:16', '2020-12-13 16:56:16', NULL),
	(56, 7000056, 'Designation 8888', 'Description 8888', 1, '2021-02-14', NULL, NULL, '02.00', NULL, 96, 'P3', 'MC', 'A', NULL, NULL, 'http://www.google.dz', '2021-02-14 14:06:07', '2021-02-14 14:06:07', NULL),
	(57, 7000057, 'Designation', 'Description', 1, '2021-02-15', NULL, NULL, NULL, NULL, 96, 'P3', 'MC', 'A', NULL, NULL, 'http://www.google.com', '2021-02-15 14:52:35', '2021-02-15 14:52:35', NULL),
	(58, 7000058, 'Designation 58', 'Description 58', 1, '2021-02-15', '2021-02-15 14:00:00', '2021-02-15 15:15:00', '01.15', NULL, 97, 'P3', 'MC', 'A', NULL, NULL, 'https://fr.aliexpress.com/', '2021-02-15 15:05:18', '2021-02-15 15:05:18', NULL);
/*!40000 ALTER TABLE `workorders` ENABLE KEYS */;

-- Export de la structure de la table gmao. zones
CREATE TABLE IF NOT EXISTS `zones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table gmao.zones : ~9 rows (environ)
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
INSERT INTO `zones` (`id`, `nom`, `site_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Zone 01', 1, '2020-06-10 10:22:27', '2020-06-10 10:22:27', NULL),
	(2, 'Zone 2', 1, '2020-06-10 10:22:40', '2020-06-10 10:22:40', NULL),
	(3, 'Zone 3', 1, '2020-06-10 10:22:50', '2020-06-10 10:22:50', NULL),
	(4, 'Zone 1-2', 2, '2020-06-10 10:23:07', '2020-06-10 10:23:07', NULL),
	(5, 'Zone 2-2', 2, '2020-06-10 10:23:19', '2020-06-10 10:23:19', NULL),
	(6, 'Zone 4', 1, '2020-11-22 16:02:38', '2020-11-22 16:02:38', NULL),
	(7, 'Zone 4', 1, '2020-11-22 16:04:16', '2020-11-22 16:04:16', NULL),
	(8, 'Zone 4', 1, '2020-11-22 16:04:28', '2020-11-22 16:04:28', NULL),
	(9, 'Zone 4', 1, '2020-11-22 16:04:57', '2020-11-22 16:04:57', NULL);
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
