-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 30 avr. 2021 à 01:09
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ghtt`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `state` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0 : Annuler, 1 : reserver, 2 : confirmer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bookings`
--

INSERT INTO `bookings` (`id`, `lastname`, `firstname`, `mobile`, `state`, `created_at`, `updated_at`) VALUES
(1, 'nom1', 'prenom1', '0550447788', '1', '2021-04-01 07:23:33', '2021-04-01 07:23:33'),
(2, 'nom2', 'prenom2', '0660112233', '1', '2021-04-06 05:44:18', '2021-04-06 05:44:18'),
(3, 'nom3', 'prenom3', '0770778899', '1', '2021-04-10 06:12:06', '2021-04-10 06:12:06'),
(4, 'nom4', 'prenom4', '0560445566', '1', '2021-04-16 06:34:10', '2021-04-16 06:34:10');

-- --------------------------------------------------------

--
-- Structure de la table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `housing_id` bigint(20) NOT NULL,
  `housing_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `vat` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `state` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `adult`, `children`, `housing_id`, `housing_name`, `number`, `amount`, `vat`, `date_start`, `date_end`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 7, 'F1', 'F142', 1500.00, 17, '2021-04-01', '2021-04-05', '0', '2021-04-01 07:23:33', NULL),
(2, 2, 2, 0, 2, 'F2', 'F279', 15000.00, 17, '2021-04-07', '2021-04-15', '1', '2021-04-06 05:44:18', NULL),
(3, 3, 3, 1, 3, 'F3', 'F342', 3500.00, 17, '2021-04-11', '2021-04-18', '2', '2021-04-10 06:12:06', NULL),
(4, 4, 3, 2, 10, 'F4', 'F447', 7800.00, 17, '2021-04-16', '2021-04-20', '1', '2021-04-16 06:34:10', NULL),
(5, 4, 4, 1, 9, 'F4', 'F448', 7800.00, 17, '2021-04-16', '2021-04-20', '1', '2021-04-16 06:34:10', NULL),
(6, 4, 4, 2, 1, 'F4', 'F449', 7800.00, 17, '2021-04-16', '2021-04-20', '1', '2021-04-16 06:34:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category_galleries`
--

CREATE TABLE `category_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category_galleries`
--

INSERT INTO `category_galleries` (`id`, `name`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Restauration', '1', '2021-04-07 09:13:56', '2021-04-07 09:13:56', NULL),
(2, 'Animations', '1', '2021-04-07 09:13:56', '2021-04-07 09:13:56', NULL),
(3, 'Hébergement', '1', '2021-04-23 10:02:16', '2021-04-23 10:02:18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category_housings`
--

CREATE TABLE `category_housings` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category_housings`
--

INSERT INTO `category_housings` (`id`, `name`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bungalows', '1', NULL, NULL, NULL),
(2, 'Chambres', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'name of image or Url video youtube',
  `type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 : image, 2 : video',
  `description` text COLLATE utf8mb4_unicode_ci,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_gallerie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `name`, `type`, `description`, `state`, `category_gallerie_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test02 2', '1_1619102111.jpg', '1', 'aa', '1', 1, '2021-04-22 12:35:11', '2021-04-22 21:19:05', '2021-04-22 21:19:05'),
(2, 'test02 2', '2_1619173828.jpg', '1', 'aa', '1', 1, '2021-04-22 12:35:12', '2021-04-23 08:30:28', NULL),
(3, 'Test titre AZERTY', 'https://www.youtube.com/watch?v=D0hiFIKUAvQ', '2', 'Test description AZERTY', '1', 1, '2021-04-22 12:38:40', '2021-04-23 08:45:10', NULL),
(4, 'Titre test 6', '4_1619173480.jpg', '1', 'Description test 6', '1', 1, '2021-04-22 13:15:34', '2021-04-23 08:24:40', NULL),
(5, 'Groupe HTT complexe touristique', 'https://www.youtube.com/watch?v=D0hiFIKUAvQ', '2', 'complexe touristique Cet Tipaza & Complexe touristique Zeralda \r\n Un cadre de vie d\'une beauté et une diversité extraordinaire, une restauration de qualité.\r\nDifférentes activités sportive Tennis, Volley Ball, Ski nautique, plongé soumarine, Piscine, Soirées dansantes, Théatre...', '1', 2, '2021-04-22 20:51:05', '2021-04-22 22:02:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `housings`
--

CREATE TABLE `housings` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `area` varchar(100) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `online` int(11) NOT NULL,
  `vip` int(11) NOT NULL,
  `description` text NOT NULL,
  `subcategory_housing_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `housings`
--

INSERT INTO `housings` (`id`, `name`, `number`, `area`, `floor`, `online`, `vip`, `description`, `subcategory_housing_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'F4', 'F449', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-22 15:28:17', NULL),
(2, 'F2', 'F279', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(3, 'F3', 'F342', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(4, 'F2', 'F280', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(5, 'F2', 'F277', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(6, 'F3', 'F341', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(7, 'F1', 'F142', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(8, 'F2', 'F281', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(9, 'F4', 'F448', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(10, 'F4', 'F447', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(11, 'F2', 'F275', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(12, 'F2', 'F276', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(13, 'F2', 'F274', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(14, 'F2', 'F273', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(15, 'F3', 'F340', 'ZONE-E La PinÃ©de', NULL, 1, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(16, 'F2', 'F272', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(17, 'F2', 'F271', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(18, 'F2', 'F270', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(19, 'F2', 'F269', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(20, 'F2', 'F268', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(21, 'F2', 'F267', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(22, 'F2', 'F266', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(23, 'F3', 'F339', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(24, 'F2', 'F265', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(25, 'F2', 'F264', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(26, 'F2', 'F263', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(27, 'F3', 'F338', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(28, 'F4', 'F446', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(29, 'F1', 'F140', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(30, 'F1', 'F141', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(31, 'F2', 'F261', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(32, 'F3', 'F337', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(33, 'F3', 'F336', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(34, 'F1', 'F139', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(35, 'F4', 'F445', 'ZONE-E La PinÃ©de', NULL, 0, 0, 'Villa D`hotes', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(36, 'F2', 'F259', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(37, 'F2', 'F260', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(38, 'F3', 'F335', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(39, 'F1', 'F138', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(40, 'F2', 'F258', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(41, 'F3', 'F333', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(42, 'F2', 'F257', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(43, 'F2', 'F256', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(44, 'F1', 'F137', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(45, 'F3', 'F331', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(46, 'F1', 'F136', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(47, 'F3', 'F330', 'ZONE-E La PinÃ©de', NULL, 0, 0, 'Villa VIP pied dans l`eau', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(48, 'F1', 'F135', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(49, 'F3', 'F329', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(50, 'F4', 'F444', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(51, 'F3', 'F332', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(52, 'F2', 'F255', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(53, 'F3', 'F334', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(54, 'F3', 'F328', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(55, 'F2', 'F252', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(56, 'F2', 'F253', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(57, 'F2', 'F254', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(58, 'F2', 'F250', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(59, 'F2', 'F251', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(60, 'F4', 'F443', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(61, 'F2', 'F248', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(62, 'F1', 'F143', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(63, 'F4', 'F442', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(64, 'F2', 'F249', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(65, 'F3', 'F327', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(66, 'F2', 'F247', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(67, 'F2', 'F246', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(68, 'F2', 'F245', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(69, 'F3', 'F326', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(70, 'F4', 'F441', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(71, 'F2', 'F244', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(72, 'F3', 'F325', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(73, 'F3', 'F378', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(74, 'F2', 'F262', 'ZONE-E La PinÃ©de', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(75, 'B4', 'B403', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(76, 'B3', 'B309', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(77, 'B3', 'B310', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(78, 'B4', 'B404', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(79, 'B3', 'B308', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(80, 'B3', 'B311', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(81, 'B2', 'B204', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(82, 'B2', 'B205', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(83, 'B1', 'B104', 'ZONE-B La Perle', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(84, 'B1', 'B105', 'ZONE-B La Perle', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(85, 'B3', 'B307', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(86, 'B3', 'B306', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(87, 'B2', 'B203', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(88, 'B1', 'B102', 'ZONE-B La Perle', NULL, 1, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-27 23:08:20', NULL),
(89, 'B4', 'B405', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(90, 'B4', 'B408', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(91, 'B3', 'B305', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(92, 'B4', 'B406', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(93, 'B1', 'B103', 'ZONE-B La Perle', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(94, 'B2', 'B206', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(95, 'B2', 'B207', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(96, 'B4', 'B407', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(97, 'B1', 'B101', 'ZONE-B La Perle', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(98, 'B3', 'B304', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(99, 'B4', 'B402', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(100, 'B3', 'B303', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(101, 'B2', 'B202', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(102, 'B2', 'B201', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(103, 'B4', 'B401', 'ZONE-B La Perle', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(104, 'B3', 'B302', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(105, 'B3', 'B301', 'ZONE-B La Perle', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(106, 'B2', 'B209', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(107, 'B2', 'B208', 'ZONE-B La Perle', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(108, 'D2', 'D228', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(109, 'D2', 'D229', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(110, 'D2', 'D227', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(111, 'D4', 'D423', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(112, 'D1', 'D131', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(113, 'D4', 'D424', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(114, 'D4', 'D425', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(115, 'D2', 'D232', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(116, 'D2', 'D235', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(117, 'D2', 'D234', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(118, 'D2', 'D236', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(119, 'D4', 'D428', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(120, 'B4', 'B405', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(121, 'D4', 'D429', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(122, 'D1', 'D129', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(123, 'D1', 'D130', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(124, 'D4', 'D430', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(125, 'D1', 'D127', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(126, 'D1', 'D128', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(127, 'D2', 'D238', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(128, 'D2', 'D239', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(129, 'D3', 'D320', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(130, 'D1', 'D124', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(131, 'D1', 'D125', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(132, 'D1', 'D126', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(133, 'D4', 'D431', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(134, 'D1', 'D120', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 11:08:49', NULL),
(135, 'D1', 'D121', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(136, 'D1', 'D122', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(137, 'D1', 'D123', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(138, 'D2', 'D240', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(139, 'D1', 'D116', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(140, 'D1', 'D117', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(141, 'D1', 'D118', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(142, 'D1', 'D119', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(143, 'D4', 'D432', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(144, 'D2', 'D231', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-22 15:28:14', NULL),
(145, 'D1', 'D115', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(146, 'D3', 'D321', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(147, 'D1', 'D110', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(148, 'D1', 'D111', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(149, 'D1', 'D112', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(150, 'D1', 'D114', 'ZONE-C', NULL, 1, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-27 23:07:36', NULL),
(151, 'D4', 'D433', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(152, 'D2', 'D233', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(153, 'D2', 'D237', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(154, 'D4', 'D422', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(155, 'D1', 'D132', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(156, 'D3', 'D319', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(157, 'D2', 'D226', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(158, 'D2', 'D224', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(159, 'D2', 'D225', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(160, 'D3', 'D318', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(161, 'D3', 'D317', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(162, 'D4', 'D421', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(163, 'D1', 'D107', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(164, 'D4', 'D419', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(165, 'D4', 'D420', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(166, 'D4', 'D418', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(167, 'D2', 'D223', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(168, 'D4', 'D417', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(169, 'D1', 'D108', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(170, 'D1', 'D109', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(171, 'D4', 'D426', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(172, 'D2', 'D222', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(173, 'C2', 'C214', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(174, 'C2', 'C215', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(175, 'C2', 'C210', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(176, 'C4', 'C415', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(177, 'C3', 'C315', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(178, 'C3', 'C316', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(179, 'C2', 'C216', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(180, 'C2', 'C217', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(181, 'C2', 'C218', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(182, 'C4', 'C416', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(183, 'C2', 'C211', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(184, 'C2', 'C212', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(185, 'C4', 'C414', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(186, 'C3', 'C314', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(187, 'C2', 'C219', 'ZONE-C', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(188, 'C4', 'C412', 'ZONE-C', NULL, 0, 1, ' ', 4, '2021-04-12 08:50:54', '2021-04-26 14:47:57', NULL),
(189, 'C4', 'C411', 'ZONE-C', NULL, 1, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-23 21:43:10', NULL),
(190, 'C4', 'C410', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(191, 'C3', 'C312', 'ZONE-C', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(192, 'C1', 'C106', 'ZONE-C', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(193, 'C4', 'C409', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(194, 'C4', 'C427', 'ZONE-C', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(195, 'E4', 'E443', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(196, 'E4', 'E435', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(197, 'E4', 'E440', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(198, 'E3', 'E324', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(199, 'E1', 'E133', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 1, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(200, 'E2', 'E241', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(201, 'E3', 'E323', 'ZONE-D La Corne D`argent', NULL, 0, 0, '', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(202, 'E4', 'E439', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(203, 'E2', 'E243', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(204, 'E4', 'E438', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(205, 'E2', 'E242', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 2, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(206, 'E4', 'E437', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(207, 'E4', 'E436', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 4, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL),
(208, 'E3', 'E322', 'ZONE-D La Corne D`argent', NULL, 0, 0, ' ', 3, '2021-04-12 08:50:54', '2021-04-12 08:50:54', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `housing_view`
--

CREATE TABLE `housing_view` (
  `id` bigint(20) NOT NULL,
  `housing_id` int(11) NOT NULL,
  `view_id` int(11) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Déchargement des données de la table `housing_view`
--

INSERT INTO `housing_view` (`id`, `housing_id`, `view_id`, `state`) VALUES
(1, 1, 4, '1'),
(2, 2, 4, '1'),
(3, 3, 4, '1'),
(4, 5, 4, '1'),
(5, 6, 4, '1'),
(6, 7, 4, '1'),
(7, 10, 4, '1'),
(8, 11, 4, '1'),
(9, 13, 4, '1'),
(10, 14, 4, '1'),
(11, 15, 4, '1'),
(12, 16, 4, '1'),
(13, 17, 4, '1'),
(14, 18, 4, '1'),
(15, 19, 4, '1'),
(16, 20, 4, '1'),
(17, 21, 4, '1'),
(18, 22, 4, '1'),
(19, 23, 4, '1'),
(20, 24, 4, '1'),
(21, 25, 4, '1'),
(22, 26, 4, '1'),
(23, 27, 4, '1'),
(24, 28, 4, '1'),
(25, 29, 4, '1'),
(26, 30, 4, '1'),
(27, 31, 4, '1'),
(28, 32, 4, '1'),
(29, 35, 4, '1'),
(30, 40, 4, '1'),
(31, 45, 4, '1'),
(32, 46, 4, '1'),
(33, 47, 4, '1'),
(34, 48, 4, '1'),
(35, 49, 4, '1'),
(36, 54, 4, '1'),
(37, 55, 4, '1'),
(38, 56, 4, '1'),
(39, 57, 4, '1'),
(40, 58, 4, '1'),
(41, 59, 4, '1'),
(42, 61, 4, '1'),
(43, 62, 4, '1'),
(44, 65, 4, '1'),
(45, 66, 4, '1'),
(46, 69, 4, '1'),
(47, 73, 4, '1'),
(48, 74, 4, '1'),
(49, 75, 3, '1'),
(50, 76, 3, '1'),
(51, 77, 1, '1'),
(52, 78, 1, '1'),
(53, 78, 2, '1'),
(54, 79, 3, '1'),
(55, 80, 1, '1'),
(56, 80, 4, '1'),
(57, 81, 1, '1'),
(58, 82, 2, '1'),
(59, 83, 1, '1'),
(60, 84, 1, '1'),
(61, 85, 3, '1'),
(62, 86, 1, '1'),
(63, 86, 3, '1'),
(64, 87, 1, '1'),
(65, 87, 3, '1'),
(66, 88, 3, '1'),
(67, 89, 1, '1'),
(68, 90, 2, '1'),
(69, 91, 1, '1'),
(70, 92, 1, '1'),
(71, 93, 1, '1'),
(72, 94, 2, '1'),
(73, 95, 2, '1'),
(74, 96, 1, '1'),
(75, 96, 4, '1'),
(76, 0, 1, '1'),
(77, 97, 1, '1'),
(78, 98, 1, '1'),
(79, 99, 1, '1'),
(80, 100, 1, '1'),
(81, 100, 4, '1'),
(82, 101, 1, '1'),
(83, 101, 4, '1'),
(84, 102, 1, '1'),
(85, 102, 4, '1'),
(86, 103, 1, '1'),
(87, 103, 4, '1'),
(88, 104, 1, '1'),
(89, 104, 4, '1'),
(90, 105, 1, '1'),
(91, 106, 2, '1'),
(92, 107, 1, '1'),
(93, 108, 4, '1'),
(94, 109, 2, '1'),
(95, 109, 4, '1'),
(96, 110, 4, '1'),
(97, 111, 4, '1'),
(98, 112, 1, '1'),
(99, 113, 4, '1'),
(100, 114, 4, '1'),
(101, 115, 2, '1'),
(102, 115, 4, '1'),
(103, 116, 1, '1'),
(104, 117, 4, '1'),
(105, 118, 1, '1'),
(106, 119, 1, '1'),
(107, 120, 1, '1'),
(108, 121, 1, '1'),
(109, 122, 1, '1'),
(110, 123, 1, '1'),
(111, 124, 4, '1'),
(112, 125, 1, '1'),
(113, 126, 1, '1'),
(114, 127, 1, '1'),
(115, 128, 1, '1'),
(116, 128, 3, '1'),
(117, 129, 1, '1'),
(118, 130, 1, '1'),
(119, 131, 1, '1'),
(120, 132, 1, '1'),
(121, 133, 1, '1'),
(122, 134, 1, '1'),
(123, 135, 1, '1'),
(124, 136, 1, '1'),
(125, 137, 1, '1'),
(126, 138, 1, '1'),
(127, 139, 1, '1'),
(128, 140, 1, '1'),
(129, 141, 1, '1'),
(130, 142, 1, '1'),
(131, 143, 1, '1'),
(132, 144, 1, '1'),
(133, 145, 1, '1'),
(134, 146, 1, '1'),
(135, 147, 1, '1'),
(136, 148, 1, '1'),
(137, 149, 1, '1'),
(138, 150, 1, '1'),
(139, 151, 2, '1'),
(140, 151, 3, '1'),
(141, 152, 4, '1'),
(142, 153, 1, '1'),
(143, 154, 4, '1'),
(144, 155, 1, '1'),
(145, 156, 3, '1'),
(146, 156, 4, '1'),
(147, 157, 4, '1'),
(148, 158, 4, '1'),
(149, 159, 4, '1'),
(150, 160, 4, '1'),
(151, 161, 4, '1'),
(152, 162, 1, '1'),
(153, 163, 1, '1'),
(154, 164, 4, '1'),
(155, 165, 3, '1'),
(156, 165, 4, '1'),
(157, 166, 1, '1'),
(158, 167, 1, '1'),
(159, 168, 1, '1'),
(160, 169, 1, '1'),
(161, 170, 1, '1'),
(162, 171, 1, '1'),
(163, 172, 1, '1'),
(164, 173, 4, '1'),
(165, 174, 4, '1'),
(166, 175, 1, '1'),
(167, 176, 1, '1'),
(168, 177, 3, '1'),
(169, 177, 4, '1'),
(170, 178, 4, '1'),
(171, 179, 4, '1'),
(172, 180, 4, '1'),
(173, 181, 4, '1'),
(174, 182, 4, '1'),
(175, 183, 1, '1'),
(176, 184, 1, '1'),
(177, 185, 1, '1'),
(178, 186, 1, '1'),
(179, 186, 3, '1'),
(180, 187, 1, '1'),
(181, 188, 1, '1'),
(182, 188, 3, '1'),
(183, 189, 1, '1'),
(184, 189, 2, '1'),
(185, 189, 3, '1'),
(186, 190, 1, '1'),
(187, 191, 1, '1'),
(188, 191, 2, '1'),
(189, 191, 3, '1'),
(190, 192, 1, '1'),
(191, 193, 1, '1'),
(192, 193, 3, '1'),
(193, 194, 1, '1'),
(194, 195, 4, '1'),
(195, 196, 4, '1'),
(196, 198, 4, '1'),
(197, 199, 4, '1'),
(198, 200, 4, '1'),
(199, 202, 4, '1'),
(200, 203, 4, '1'),
(201, 204, 4, '1'),
(202, 205, 4, '1'),
(203, 207, 4, '1'),
(204, 208, 4, '1');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_23_141424_create_profils_table', 1),
(4, '2020_03_23_141425_create_users_table', 1),
(5, '2021_04_07_094718_create_galleries_table', 2),
(6, '2021_04_07_100135_create_category_galleries_table', 2),
(7, '2021_04_13_084200_create_booking_details_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur', '2020-09-20 09:59:42', '2020-09-20 09:59:42'),
(2, 'Validateur', '2020-09-20 10:00:09', '2020-09-20 10:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-09-20 10:00:22', '2020-09-20 10:00:22'),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(2, 1, '2020-09-20 10:00:44', '2020-09-20 10:00:44'),
(2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `subcategory_housing_id` bigint(20) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `name`, `subcategory_housing_id`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Air conditioning', 1, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(2, 'Wifi', 1, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(3, 'Frigo', 1, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(4, 'Térasse privé', 1, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(5, 'Air conditioning', 2, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(6, 'Wifi', 2, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(7, 'Frigo', 2, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(8, 'Térasse privé', 2, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(9, 'Salle de séjour', 2, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(10, 'Air conditioning', 3, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(11, 'Wifi', 3, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(12, 'Frigo', 3, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(13, 'Térasse privé', 3, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(14, 'Salle de séjour', 3, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(15, 'Air conditioning', 4, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(16, 'Wifi', 4, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(17, 'Frigo', 4, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(18, 'Térasse privé', 4, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40'),
(19, 'Salle de séjour', 4, '1', '2021-04-27 22:13:39', '2021-04-27 22:13:40');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `order`, `title`, `text`, `manufacturer_id`, `picture`, `button_text`, `link`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ALLIANT CHARME ET CONFORT', 'Le complex Touristique C.E.T', 0, '1_1619729524.png', 'En savoir plus', 'http:/google.com', '1', '2021-04-29 17:11:51', '2021-04-29 18:52:59', '2021-04-29 18:52:59'),
(2, 1, 'ALLIANT CHARME ET CONFORT', 'Faites de votre séjour et de celui de vos proches un moment unique !', 0, '2_1619730856.png', 'En savoir plus', '#', '1', '2021-04-29 19:14:16', '2021-04-29 19:14:16', NULL),
(3, 2, 'Un lieu unique', 'Trouvez un deuxième chez vous, où que vous alliez', 0, '3_1619736982.png', 'En savoir plus', '#', '1', '2021-04-29 20:56:22', '2021-04-29 20:56:22', NULL),
(4, 3, 'COMPLEXE TOURISTIQUE CET', 'Profitez de la vie et faites vous plaisir!', 0, '4_1619741330.jpg', 'En savoir plus', '#', '1', '2021-04-29 22:08:50', '2021-04-29 22:08:50', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `subcategory_housings`
--

CREATE TABLE `subcategory_housings` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_housing_id` int(11) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `subcategory_housings`
--

INSERT INTO `subcategory_housings` (`id`, `name`, `category_housing_id`, `description`, `image`, `price`, `state`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'F1', 1, 'Description 1', 'f1.jpg', 1000, '1', '2021-04-23 10:03:33', '2021-04-23 10:03:33', NULL),
(2, 'F2', 1, 'Description 2', 'f2.jpg', 1500, '1', '2021-04-23 10:03:33', '2021-04-23 10:03:33', NULL),
(3, 'F3', 1, 'Description 3', 'f3.jpg', 2000, '1', '2021-04-23 10:03:33', '2021-04-23 10:03:33', NULL),
(4, 'F4', 1, 'Description 4', 'f4.jpg', 3000, '1', '2021-04-23 10:03:33', '2021-04-23 10:03:33', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3' COMMENT '1: Mme, 2:Melle, 3:Mr',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `state` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `password`, `gender`, `email`, `email_verified_at`, `state`, `profil_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Maachi', 'Salim', NULL, '$2y$10$GhMyRZpGNeaVqaHK9i2VT.ZU15gLp1vpkgpKIi7CNCG3T9zoq/Q.u', '3', 'salim.maachi@gmail.com', NULL, '1', NULL, NULL, '2020-10-15 05:15:49', '2021-04-06 07:26:20', NULL),
(2, 'Mouallem', 'Mohamed', NULL, '$2y$10$O5DbW5HK0IE/5LVdJUyuWOwsXi9tmUsGIFSR0aLtWhcDAQ6cgwFim', '3', 'm.mouallem@gmail.com', NULL, '1', NULL, NULL, '2020-10-18 06:23:51', '2020-11-08 07:40:34', NULL),
(3, 'moualem', 'moha', NULL, '$2y$10$9l91O8tf7c9sdGbjDNjmyOfOOl.C7a0bjL7nqgACG2KiCKrBUXa7C', '3', 'enafor99@gmail.com', NULL, '1', NULL, NULL, '2021-04-29 16:21:53', '2021-04-29 16:21:53', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id`, `name`, `state`) VALUES
(1, 'Vue sur Gazon', '1'),
(2, 'Vue sur Foret', '1'),
(3, 'Vue sur Piscine', '1'),
(4, 'Vue sur Mer', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_galleries`
--
ALTER TABLE `category_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category_housings`
--
ALTER TABLE `category_housings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `housings`
--
ALTER TABLE `housings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `housing_view`
--
ALTER TABLE `housing_view`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subcategory_housings`
--
ALTER TABLE `subcategory_housings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `category_galleries`
--
ALTER TABLE `category_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `category_housings`
--
ALTER TABLE `category_housings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `housings`
--
ALTER TABLE `housings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT pour la table `housing_view`
--
ALTER TABLE `housing_view`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `subcategory_housings`
--
ALTER TABLE `subcategory_housings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
