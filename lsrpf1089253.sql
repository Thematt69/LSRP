-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 20 nov. 2019 à 10:31
-- Version du serveur :  10.1.41-MariaDB-1~jessie
-- Version de PHP :  5.6.40-0+deb8u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lsrpf1089253`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` longtext COLLATE utf8_bin NOT NULL,
  `images` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '\\img\\Sans_titre.png',
  `newsletters` varchar(255) COLLATE utf8_bin DEFAULT 'OUI'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `utilisateur`, `mdp`, `prenom`, `nom`, `mail`, `description`, `images`, `newsletters`) VALUES
(22, 'Thematt69', 'thematt69', 'Aaron', 'Barton', 'devilliers.matthieu@gmail.com', 'Bla Bla Bla', '\\img\\Sans_titre.png', 'OUI');

-- --------------------------------------------------------

--
-- Structure de la table `compte_pvcb`
--

CREATE TABLE `compte_pvcb` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `vol` int(11) DEFAULT NULL,
  `jour` date DEFAULT NULL,
  `compagnie` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `depart_prevue` time DEFAULT NULL,
  `depart_reelle` time DEFAULT NULL,
  `arrive_prevue` time DEFAULT NULL,
  `arrive_reelle` time DEFAULT NULL,
  `parrain` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte_pvcb`
--

INSERT INTO `compte_pvcb` (`id`, `nom`, `mdp`, `prenom`, `telephone`, `mail`, `vol`, `jour`, `compagnie`, `depart_prevue`, `depart_reelle`, `arrive_prevue`, `arrive_reelle`, `parrain`) VALUES
(4, 'Devilliers', 'thematt69', 'Matthieu', '0645564845', 'devilliers.matthieu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte_pvcb`
--
ALTER TABLE `compte_pvcb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `compte_pvcb`
--
ALTER TABLE `compte_pvcb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
