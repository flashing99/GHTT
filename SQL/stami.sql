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


-- Export de la structure de la base pour inforca
CREATE DATABASE IF NOT EXISTS `inforca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inforca`;

-- Export de la structure de la table inforca. banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner_client_id` bigint(20) unsigned NOT NULL,
  `type` enum('image','code') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` enum('_blank','_self','_parent','_top') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stop` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 : Sans fin , 2 : Fin par nombre d''affichage, 3 : Par nombre de click, 4 : Par date',
  `displayed` int(11) DEFAULT NULL,
  `display_max` int(11) DEFAULT NULL,
  `clicked` int(11) DEFAULT NULL,
  `click_max` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `banners_banner_client_id_foreign` (`banner_client_id`),
  CONSTRAINT `banners_banner_client_id_foreign` FOREIGN KEY (`banner_client_id`) REFERENCES `banner_clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.banners : ~6 rows (environ)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `banner_client_id`, `type`, `name`, `filename`, `width`, `height`, `url`, `target`, `html_code`, `stop`, `displayed`, `display_max`, `clicked`, `click_max`, `start_date`, `end_date`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 'image', 'Nom de la bannière', '1_1604933896.png', 1100, 250, 'http://inforca.dev.com/admin/advertising/banners/1/edit', '_blank', NULL, '1', NULL, NULL, NULL, NULL, '2020-11-01', '2020-11-10', '1', '2020-11-09 14:58:16', '2020-11-10 15:40:28', NULL),
	(2, 1, 'image', 'Nom de la bannière 2', '2_1604934127.jpg', 160, 600, 'bbbbb', '_blank', NULL, '2', NULL, 1000, NULL, NULL, '2020-11-05', NULL, '1', '2020-11-09 15:02:07', '2020-11-09 15:07:49', NULL),
	(17, 1, 'code', 'Nom de la bannière 3', NULL, 86, 60, NULL, NULL, NULL, '3', NULL, NULL, NULL, 500, '2020-11-03', NULL, '1', '2020-11-10 14:53:04', '2020-11-10 14:53:37', NULL),
	(18, 1, 'code', 'Nom de la bannière 4', NULL, 100, 200, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, '2020-11-01', '2020-11-30', '1', '2020-11-10 15:07:34', '2020-11-10 15:07:34', NULL),
	(19, 1, 'image', 'Nom de la bannière 5', '19_1605024429.png', 600, 400, 'http://www.google.com', '_self', NULL, '1', NULL, NULL, NULL, NULL, '2020-11-02', '2020-11-10', '1', '2020-11-10 16:02:44', '2020-11-10 16:07:09', NULL),
	(20, 1, 'code', 'Nom de la bannière 06', NULL, 1100, 250, NULL, NULL, '<a href="javascript:goTo()" onmouseover="show(); return true" onmouseout="window.status=\'\'; return true"><img src="http://www.jsmadeeasy.com/javascripts/Banners/ultimateBanner/image2.gif" alt="Bannière" name="img" border="1" width="468" height="60"></a>', '1', NULL, NULL, NULL, NULL, '2020-11-01', '2020-11-11', '1', '2020-11-11 08:44:30', '2020-11-11 09:33:03', NULL);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Export de la structure de la table inforca. banner_clients
CREATE TABLE IF NOT EXISTS `banner_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.banner_clients : ~1 rows (environ)
/*!40000 ALTER TABLE `banner_clients` DISABLE KEYS */;
INSERT INTO `banner_clients` (`id`, `name`, `address`, `email`, `telephone`, `mobile`, `fax`, `note`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Client N°1', 'Chez lui', 'client@google.com', '021445566', '0770778899', '021445567', 'Je n\'est aucune remarque pour ce client', '1', '2020-11-02 10:25:31', '2020-11-02 10:25:31', NULL);
/*!40000 ALTER TABLE `banner_clients` ENABLE KEYS */;

-- Export de la structure de la table inforca. banner_zone
CREATE TABLE IF NOT EXISTS `banner_zone` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner_id` int(11) NOT NULL,
  `zone_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.banner_zone : ~12 rows (environ)
/*!40000 ALTER TABLE `banner_zone` DISABLE KEYS */;
INSERT INTO `banner_zone` (`id`, `banner_id`, `zone_id`) VALUES
	(1, 1, '1'),
	(2, 2, '2'),
	(3, 2, '3'),
	(4, 17, '1'),
	(5, 17, '2'),
	(6, 17, '3'),
	(7, 18, '1'),
	(9, 18, '3'),
	(10, 19, '1'),
	(11, 19, '2'),
	(12, 19, '3'),
	(13, 20, '1');
/*!40000 ALTER TABLE `banner_zone` ENABLE KEYS */;

-- Export de la structure de la table inforca. catalogs
CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.catalogs : ~0 rows (environ)
/*!40000 ALTER TABLE `catalogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogs` ENABLE KEYS */;

-- Export de la structure de la table inforca. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.categories : ~11 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `icon`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Imprimantes', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(2, 'Consomables', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(3, 'Serveurs', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(4, 'Pc de bureau', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(5, 'Pc Portables', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(6, 'Scanners', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(7, 'Matèriel Réseau', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(8, 'Station de travail', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(9, 'Support de stockage', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(10, 'Vidéo Projecteurs', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL),
	(11, 'Softwares', '', '1', '2020-10-25 00:00:00', '2020-10-25 00:00:00', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Export de la structure de la table inforca. contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.contacts : ~16 rows (environ)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `lastname`, `firstname`, `company`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'sqd', 'qsd', 'qsd', 'salim.maachi@gmail.com', '021445566', '!lqsknf', 'wMlfqs f!,qs f!k qsmkfjbskqfn sqmfjh sdlqj fldsnb f;sndb f;nsdb f;nsd b;fb!qsdnf! qsd,:!nqs dsd', '2020-11-03 15:41:18', '2020-11-03 15:41:18'),
	(2, 'sqd', 'qsd', 'qsd', 'salim.maachi@gmail.com', '021445566', '!lqsknf', 'wMlfqs f!,qs f!k qsmkfjbskqfn sqmfjh sdlqj fldsnb f;sndb f;nsdb f;nsd b;fb!qsdnf! qsd,:!nqs dsd', '2020-11-03 15:42:31', '2020-11-03 15:42:31'),
	(3, 'sqd', 'qsd', 'qsd', 'salim.maachi@gmail.com', '021445566', '!lqsknf', 'wMlfqs f!,qs f!k qsmkfjbskqfn sqmfjh sdlqj fldsnb f;sndb f;nsdb f;nsd b;fb!qsdnf! qsd,:!nqs dsd', '2020-11-03 15:49:54', '2020-11-03 15:49:54'),
	(4, 'sqd', 'qsd', 'qsd', 'salim.maachi@gmail.com', '021445566', '!lqsknf', 'wMlfqs f!,qs f!k qsmkfjbskqfn sqmfjh sdlqj fldsnb f;sndb f;nsdb f;nsd b;fb!qsdnf! qsd,:!nqs dsd', '2020-11-03 15:50:38', '2020-11-03 15:50:38'),
	(5, 'testNom', 'testPrénom', 'testSociété', 'test@test.com', '0770558899', 'Sujet de test', 'Message des test', '2020-11-03 16:02:09', '2020-11-03 16:02:09'),
	(6, 'TestNom', 'TestPrénom', 'TestSocitété', 'testmail@email.com', '0770112233', 'TestSujet', 'Test Message de contact\r\n\r\nMerci', '2020-11-04 09:19:44', '2020-11-04 09:19:44'),
	(7, 'TestNom', 'TestPrénom', 'TestSocitété', 'testmail@email.com', '0770112233', 'TestSujet', 'Test Message de contact\r\n\r\nMerci', '2020-11-04 09:22:08', '2020-11-04 09:22:08'),
	(8, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@inforca.com', '0770558877', 'TestObjet', 'Test message\r\n\r\nMerci', '2020-11-04 09:28:06', '2020-11-04 09:28:06'),
	(9, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:35:42', '2020-11-04 09:35:42'),
	(10, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:46:45', '2020-11-04 09:46:45'),
	(11, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:48:14', '2020-11-04 09:48:14'),
	(12, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:50:11', '2020-11-04 09:50:11'),
	(13, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:52:38', '2020-11-04 09:52:38'),
	(14, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:55:18', '2020-11-04 09:55:18'),
	(15, 'TestNom', 'TestPrénom', 'TestSociété', 'halim@email.com', '0550112233', 'TestObjet', 'Test message de contact.\r\n\r\nMerci', '2020-11-04 09:55:39', '2020-11-04 09:55:39'),
	(16, 'Maachi', 'Salim', 'Webcom', 'moi@mail.com', '0880997744', 'Mon objet ici', 'Mon message ici', '2020-11-04 10:34:38', '2020-11-04 10:34:38');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Export de la structure de la table inforca. dealers
CREATE TABLE IF NOT EXISTS `dealers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_register` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `function` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.dealers : ~2 rows (environ)
/*!40000 ALTER TABLE `dealers` DISABLE KEYS */;
INSERT INTO `dealers` (`id`, `company`, `legal_form`, `trade_register`, `adress`, `phone`, `lastname`, `firstname`, `username`, `password`, `function`, `email`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'azerty', 'EURL', 'qdsgfq', 'chez lui', '0770889944', 'mohamed', 'moh', 'dir@gmail.com', '123', 'Directeur Commerciale', 'dir@gmail.com', '0', '2020-10-22 15:04:32', '2020-11-05 14:10:07', NULL),
	(2, 'azerty3', 'SARL', 'hkghk45454', 'chez lui 3', '0330333333', 'mohamed 3', 'moh 3', 'dir3@gmail.com', '$2y$10$qjof/5iCUdDYTBkz6LfDAeYElFcUAn.5XTCjPhEBls6vLXqKP6Er6', 'PDG 3', 'dir3@gmail.com', '1', '2020-10-22 15:10:10', '2020-11-05 14:09:31', NULL);
/*!40000 ALTER TABLE `dealers` ENABLE KEYS */;

-- Export de la structure de la table inforca. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Export de la structure de la table inforca. image_products
CREATE TABLE IF NOT EXISTS `image_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.image_products : ~2 rows (environ)
/*!40000 ALTER TABLE `image_products` DISABLE KEYS */;
INSERT INTO `image_products` (`id`, `picture`, `product_id`, `state`, `created_at`, `updated_at`) VALUES
	(1, '1604848951.jpg', 1, '1', '2020-11-08 15:22:32', '2020-11-08 15:22:32'),
	(2, '1604848952.png', 1, '1', '2020-11-08 15:22:32', '2020-11-08 15:22:32');
/*!40000 ALTER TABLE `image_products` ENABLE KEYS */;

-- Export de la structure de la table inforca. manufacturers
CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.manufacturers : ~8 rows (environ)
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
INSERT INTO `manufacturers` (`id`, `name`, `logo`, `state`, `created_at`, `updated_at`) VALUES
	(1, 'Asus', 'logo_assus.svg', '1', '2020-10-21 15:51:49', '2020-10-21 15:51:50'),
	(2, 'Dell', 'logo_dell.svg', '1', '2020-10-21 15:55:34', '2020-10-21 15:55:36'),
	(3, 'Eaton', 'logo_eaton.svg', '1', '2020-10-21 15:55:51', '2020-10-21 15:55:52'),
	(4, 'Elevate-imaging', 'logo_elevate-imaging.svg', '1', '2020-10-21 15:56:13', '2020-10-21 15:56:14'),
	(5, 'Fortinet', 'logo_fortinet.svg', '1', '2020-10-21 15:56:28', '2020-10-21 15:56:29'),
	(6, 'Hp', 'logo_hp.svg', '1', '2020-10-21 15:56:45', '2020-10-21 15:56:47'),
	(7, 'Lexmark', 'logo_lexmark.svg', '1', '2020-10-21 15:56:54', '2020-10-21 15:56:56'),
	(8, 'Vertiv', 'logo_vertiv.svg', '1', '2020-10-21 15:57:12', '2020-10-21 15:57:14');
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;

-- Export de la structure de la table inforca. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.migrations : ~21 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_10_14_135517_create_catalogs_table', 1),
	(4, '2020_10_14_135544_create_categories_table', 1),
	(5, '2020_10_14_135610_create_manufacturers_table', 1),
	(6, '2020_10_14_140819_create_categorie_manufacturer_table', 1),
	(7, '2020_10_14_140850_create_products_table', 1),
	(8, '2020_10_14_141014_create_image_products_table', 1),
	(9, '2020_10_14_141055_create_image_price_products_table', 1),
	(10, '2020_10_14_141113_create_newsletters_table', 1),
	(11, '2020_10_14_141211_create_news_table', 2),
	(12, '2020_10_14_141227_create_partners_table', 2),
	(13, '2020_10_14_141424_create_profils_table', 2),
	(14, '2020_10_14_141425_create_users_table', 3),
	(15, '2020_10_14_141437_create_sliders_table', 3),
	(16, '2020_10_15_095529_create_banner_clients_table', 4),
	(17, '2020_10_15_095530_create_banners_table', 5),
	(18, '2020_10_15_100414_create_zones_table', 5),
	(19, '2020_10_15_100719_create_banner_zone_table', 5),
	(20, '2020_10_18_140931_create_dealers_table', 6),
	(21, '2020_11_03_143906_create_contacts_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table inforca. news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.news : ~1 rows (environ)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `head`, `text`, `picture`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Sonatrach : Des tablettes et du matériel informatique offerts à des élèves des zones d’ombre', 'La société nationale des hydrocarbures Sonatrach a accompagné la rentrée scolaire de l’année en cours en offrant aux élèves scolarisés dans zones d’ombre plusieurs appareils et matériels, a indiqué le groupe public mardi dans un communiqué.', 'La société nationale des hydrocarbures Sonatrach a accompagné la rentrée scolaire de l’année en cours en offrant aux élèves scolarisés dans zones d’ombre plusieurs appareils et matériels, a indiqué le groupe public mardi dans un communiqué.\r\n\r\n« Par fidélité à la politique de la responsabilité sociale du groupe et dans le souhait d’accompagner la rentrée scolaire, le groupe Sonatrach a offert 500 tablettes et plusieurs matériels informatiques au profit du ministère de l’Education nationale en vue d’équiper les écoles pilotes désignées par la tutelle au niveau des zones d’ombre », précise Sonatrach dans le communiqué publié sur son compte officiel Facebook.\r\n\r\nA travers cette opération pilote, les élèves des écoles ciblées bénéficieront de moyens modernes leur facilitant le suivi des cours et permettant d’alléger leurs cartables, poursuit-on de même source.\r\n\r\nEn concrétisation de sa politique de solidarité avec les zones d’ombre, le groupe public a procédé à l’installation de chauffe-eaux solaires et l’équipement de salles informatiques avec raccordement au réseau internet au sein de plusieurs établissements scolaires dans les communes de Debdab à Illizi (5 primaires, 3 collèges et un lycée) et Oum Tiour à El Oued (2 primaires et un collège).\r\n\r\nDe telles opérations de solidarité dénotent « l’intérêt accordé par Sonatrach, voire sa participation efficace, à l’amélioration des conditions de scolarisation des élèves », a conclu le communiqué.\r\n\r\nAPS', '1604311568.jpg', '1', '2020-11-02 10:06:08', '2020-11-02 10:06:08', NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Export de la structure de la table inforca. newsletters
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newletters_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.newsletters : ~0 rows (environ)
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;

-- Export de la structure de la table inforca. partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.partners : ~2 rows (environ)
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` (`id`, `name`, `logo`, `link`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Hp', '1604306785.jpg', 'http://www.hp.com', '1', '2020-11-02 08:46:25', '2020-11-02 09:41:59', NULL),
	(4, 'Dell', '1604310608.png', 'https://www.delltechnologies.com/fr-fr/index.htm', '1', '2020-11-02 09:50:08', '2020-11-02 09:50:08', NULL);
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;

-- Export de la structure de la table inforca. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.password_resets : ~1 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('salim.maachi@gmail.com', '$2y$10$PYITnRuHbFGQ786MRjNd5OhsMunVrMyat5XjAtf50kbBv2LaV/EE6', '2020-10-15 07:17:02');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de la structure de la table inforca. price_products
CREATE TABLE IF NOT EXISTS `price_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `price_without_tax` double NOT NULL,
  `vat` double NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `price_products_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.price_products : ~0 rows (environ)
/*!40000 ALTER TABLE `price_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `price_products` ENABLE KEYS */;

-- Export de la structure de la table inforca. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `characteristic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_sheet` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` bigint(20) unsigned NOT NULL,
  `manufacturer_id` bigint(20) unsigned NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_categorie_id_foreign` (`categorie_id`),
  KEY `products_manufacturer_id_foreign` (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.products : ~1 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `characteristic`, `technical_sheet`, `spec`, `new`, `promotion`, `categorie_id`, `manufacturer_id`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Nom', 'Decription', '[{"key":"A","value":"1"},{"key":"B","value":"2"},{"key":"C","value":"3"}]', '1604848951.pdf', NULL, '0', '1', 3, 3, '1', '2020-11-08 15:22:31', '2020-11-08 15:22:31', NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Export de la structure de la table inforca. profils
CREATE TABLE IF NOT EXISTS `profils` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.profils : ~0 rows (environ)
/*!40000 ALTER TABLE `profils` DISABLE KEYS */;
/*!40000 ALTER TABLE `profils` ENABLE KEYS */;

-- Export de la structure de la table inforca. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.roles : ~2 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrateur', '2020-09-20 11:59:42', '2020-09-20 11:59:42'),
	(2, 'Validateur', '2020-09-20 12:00:09', '2020-09-20 12:00:09');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Export de la structure de la table inforca. role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.role_user : ~3 rows (environ)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2020-09-20 12:00:22', '2020-09-20 12:00:22'),
	(1, 2, NULL, NULL),
	(2, 1, '2020-09-20 12:00:44', '2020-09-20 12:00:44');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Export de la structure de la table inforca. sliders
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

-- Export de données de la table inforca.sliders : ~4 rows (environ)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` (`id`, `order`, `title`, `text`, `manufacturer_id`, `picture`, `button_text`, `link`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 0, 'Titre de HP', 'Texte HP', 6, 'image.jpg', NULL, '#', '0', '2020-10-21 16:05:49', '2020-10-21 16:05:52', NULL),
	(2, 1, 'Lenovo ThinkPad L14', 'Taille d\'écran 14" | Processeur Intel Core i5 |Mémoire vive 8 Go ram...', 0, '4_1603360447.jpeg', 'En savoir plus', 'http:://www.google.com', '1', '2020-10-21 15:56:54', '2020-10-21 16:00:19', NULL),
	(3, 2, 'HP ENVY Laptop 13', 'Grâce à un affichage de 13.3 pouces de diagonale et une superbe', 0, '4_1603360557.jpeg', 'Découvrir', 'http:://www.google.com', '1', '2020-10-21 15:58:25', '2020-10-21 16:00:14', NULL),
	(4, 4, 'Titre n° 2 exemple', 'Une bref description exemple', 2, '4_1603360337.jpeg', 'Ok', 'http:://www.google.uk', '0', '2020-10-21 15:59:14', '2020-10-22 09:52:17', NULL);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Export de la structure de la table inforca. users
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
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_profil_id_foreign` (`profil_id`),
  CONSTRAINT `users_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `password`, `gender`, `email`, `email_verified_at`, `state`, `profil_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Maachi', 'Salim', NULL, '$2y$10$PGNTtDUsBFlVQB85Z.xH6uPJWqDO8SA3gdrXFefFmoGzzICi7Ve46', '3', 'salim.maachi@gmail.com', NULL, '1', NULL, NULL, '2020-10-15 07:15:49', '2020-11-08 08:54:48', NULL),
	(2, 'Mouallem', 'Mohamed', NULL, '$2y$10$jWnv9II4UnsMQwNyj3y1Y.xonHFXaYAHoABqMO63AQ/2Pl6RMWs1S', '3', 'm.mouallem@gmail.com', NULL, '1', NULL, NULL, '2020-10-18 08:23:51', '2020-11-08 08:40:34', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Export de la structure de la table inforca. zones
CREATE TABLE IF NOT EXISTS `zones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table inforca.zones : ~3 rows (environ)
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
INSERT INTO `zones` (`id`, `name`, `width`, `height`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Center Home Page', 1100, 250, '1', '2020-11-02 10:27:57', '2020-11-02 10:27:57', NULL),
	(2, 'A droite des pages secondaires', 160, 600, '1', '2020-11-09 12:30:18', '2020-11-09 12:30:18', NULL),
	(3, 'En bas des pages secondaires', 600, 120, '1', '2020-11-09 12:30:18', '2020-11-09 12:30:18', NULL);
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
