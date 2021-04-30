-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 30 avr. 2021 à 01:10
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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
