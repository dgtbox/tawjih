-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 jan. 2024 à 00:44
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
  `date_reponse_externe` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `id_etudiant`, `id_ecole`, `choix1`, `choix2`, `choix3`, `statut_interne`, `statut_externe`, `date_depot`, `date_reponse`, `date_reponse_externe`) VALUES
(1, 1, 1, NULL, NULL, NULL, '0', NULL, '2024-01-05', NULL, NULL),
(2, 2, 1, NULL, NULL, NULL, '1', NULL, '2024-01-05', NULL, NULL),
(3, 3, 1, NULL, NULL, NULL, '2', NULL, '2024-01-05', NULL, NULL),
(4, 4, 1, NULL, NULL, NULL, '3', NULL, '2024-01-05', NULL, NULL);

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
(1, 'bk456272', 'aziz', 'hamza', 'a@a.a', '0689456275', 'Avenue Bir Anzarane', 'tanger'),
(2, 'bk456272', 'aziz', 'hamza', 'a@a.a', '0689456275', 'Avenue Bir Anzarane', 'tanger'),
(3, 'bk456272', 'aziz', 'hamza', 'a@a.a', '0689456275', 'Avenue Bir Anzarane', 'tanger'),
(4, 'bk456272', 'aziz', 'hamza', 'a@a.a', '0689456275', 'Avenue Bir Anzarane', 'tanger'),
(5, 'cc969696', 'kaab', 'khalil', 'khalilkaab12@outlook.fr', '+212637462651', '92 op ferdaous gh23', 'aga');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
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

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `niveau`, `filiere`, `ecole`, `email`, `tel`, `adresse`, `ville`) VALUES
(1, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(2, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(3, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(4, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(5, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(6, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(7, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(8, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(9, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(10, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(11, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(12, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(13, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(14, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(15, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(16, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(17, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(18, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(19, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(20, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(21, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(22, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(23, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(24, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(25, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(26, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(27, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(28, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(29, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(30, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(31, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(32, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(33, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(34, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(35, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(36, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(37, 'azizi', '3bass', '1', '1', '1', 'azizi@a.a', '0645125374', 'Avenue Bir Anzarane, Dcheira El Jihadia 80000', 'agadir'),
(38, 'kaab', 'khalil', '1', '1', 'qalam', 'khalilkaab12@outlook.fr', '+212637462651', '92 op ferdaous gh23', 'aga');

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
(15, 'admin', '$2y$10$HLCMdREgI0x2YzSVTYCswuC9ty23c.8CDmlMecOiDLNaLSEvJIC0O', 1, 1, 1);

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
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
