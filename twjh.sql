-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 jan. 2024 à 04:01
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `twjh`
--

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE `dossier` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_ecole` int(11) DEFAULT NULL,
  `choix1` varchar(255) DEFAULT NULL,
  `choix2` varchar(255) DEFAULT NULL,
  `choix3` varchar(255) DEFAULT NULL,
  `statut_interne` varchar(255) DEFAULT NULL,
  `statut_externe` varchar(255) DEFAULT NULL,
  `date_depot` date DEFAULT NULL,
  `date_reponse` date DEFAULT NULL,
  `date_reponse_externe` date DEFAULT NULL,
  `id_cand_period` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `id_etudiant`, `id_ecole`, `choix1`, `choix2`, `choix3`, `statut_interne`, `statut_externe`, `date_depot`, `date_reponse`, `date_reponse_externe`, `id_cand_period`) VALUES
(1, 1, 1, NULL, NULL, NULL, '3', NULL, '2024-01-05', NULL, NULL, 0),
(2, 2, 1, NULL, NULL, NULL, '3', NULL, '2024-01-05', NULL, NULL, 0),
(3, 3, 1, NULL, NULL, NULL, '3', NULL, '2024-01-05', NULL, NULL, 0),
(4, 4, 1, NULL, NULL, NULL, '3', NULL, '2024-01-05', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `nom`, `adresse`) VALUES
(1, 'kaab', 'khjkhjkhjkhj');

-- --------------------------------------------------------

--
-- Structure de la table `ecole_cand_preiod`
--

CREATE TABLE `ecole_cand_preiod` (
  `id` int(11) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `tite` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ecole_cand_preiod`
--

INSERT INTO `ecole_cand_preiod` (`id`, `id_ecole`, `tite`, `date_debut`, `date_fin`) VALUES
(1, 0, 'dedo', '2024-01-18', '2024-02-10');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `CIN`, `nom`, `prenom`, `email`, `tel`, `adresse`, `ville`) VALUES
(6, 'sdqdq', 'kaab', 'khalil', NULL, NULL, NULL, NULL),
(7, 'cc969696', 'zayd', 'khalil', NULL, NULL, NULL, NULL),
(8, 'cc969696', 'zayd', 'khalil', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `cin` varchar(50) NOT NULL,
  `massar` varchar(15) NOT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `filiere` varchar(255) DEFAULT NULL,
  `ecole` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `cin`, `massar`, `niveau`, `filiere`, `ecole`, `email`, `tel`, `adresse`, `ville`) VALUES
(1, 'omari', 'bachir', 'kn12354', 'sds53513152', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `log` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `idrelate` int(11) NOT NULL,
  `stat` int(11) DEFAULT NULL,
  `acce` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`id`, `log`, `pass`, `idrelate`, `stat`, `acce`) VALUES
(15, 'admin', '$2y$10$HLCMdREgI0x2YzSVTYCswuC9ty23c.8CDmlMecOiDLNaLSEvJIC0O', 1, 1, 1),
(63, 'kaab6', '$2y$10$nys73W0xF8RJz3nu88WH8.2Sv4P4QDXUgTTtyyWv9v.ZrVBcprXn2', 6, 3, 1),
(64, 'zayd7', '$2y$10$vZ3e7rvv/tjIbTMsdeFew.Wp5pucB3l1aDQINd.sTW7Lda6/X6Yp6', 7, 3, 0),
(65, 'zayd8', '$2y$10$xHYsxsFzfDkYnrxkxx9Wdu8T.do4.kevE0FxBUlCCf6yKzVlQhAUO', 8, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `idu` int(11) DEFAULT NULL,
  `idr` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `lu` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecole_cand_preiod`
--
ALTER TABLE `ecole_cand_preiod`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ecole_cand_preiod`
--
ALTER TABLE `ecole_cand_preiod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
