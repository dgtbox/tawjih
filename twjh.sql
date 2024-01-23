-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 jan. 2024 à 01:07
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
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `title`, `sub`, `content`, `created_at`, `image`) VALUES
(1, 'annonce 1test', NULL, 'waaaaaa awaaaaaaaaaa waaaaaaaaaaa', '2024-01-21 21:01:33', 0),
(2, 'annonce 1', NULL, 'waaaaaa awaaaaaaaaaa waaaaaaaaaaa', '2024-01-21 21:01:33', 0),
(3, 'annonce 1', NULL, 'waaaaaa awaaaaaaaaaa waaaaaaaaaaa', '2024-01-21 21:01:33', 0);

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
  `acuse` varchar(3) DEFAULT NULL,
  `statut_externe` varchar(255) DEFAULT NULL,
  `date_depot` date DEFAULT NULL,
  `date_reponse` date DEFAULT NULL,
  `date_reponse_externe` date DEFAULT NULL,
  `id_cand_period` int(11) NOT NULL,
  `com` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossier`
--

INSERT INTO `dossier` (`id`, `id_etudiant`, `id_ecole`, `choix1`, `choix2`, `choix3`, `statut_interne`, `acuse`, `statut_externe`, `date_depot`, `date_reponse`, `date_reponse_externe`, `id_cand_period`, `com`) VALUES
(14, 49, 2, NULL, NULL, NULL, '3', 'pdf', '0', '2024-01-17', '0000-00-00', '0000-00-00', 6, NULL),
(15, 50, 2, NULL, NULL, NULL, '3', 'jpg', '0', '2024-01-17', '0000-00-00', '0000-00-00', 7, NULL),
(16, 50, 2, NULL, NULL, NULL, '3', 'jpg', '0', '2024-01-17', '0000-00-00', '0000-00-00', 7, NULL),
(17, 48, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 6, NULL),
(18, 48, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(19, 49, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(20, 50, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(21, 51, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(22, 52, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(23, 53, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(24, 54, 2, NULL, NULL, NULL, '3', 'jpg', '0', '2024-01-17', '0000-00-00', '0000-00-00', 8, NULL),
(25, 48, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(26, 49, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(27, 50, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(28, 51, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(29, 52, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(30, 53, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, NULL),
(31, 54, 2, NULL, NULL, NULL, '2', NULL, '0', '2024-01-17', '0000-00-00', '0000-00-00', 15, 'probleme de dossier severe \r\nbesoin du bac'),
(32, 48, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(33, 49, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(34, 50, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(35, 51, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(36, 52, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(37, 53, 2, NULL, NULL, NULL, '0', NULL, '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(38, 54, 2, NULL, NULL, NULL, '3', 'jpg', '0', '2024-01-19', '0000-00-00', '0000-00-00', 16, NULL),
(39, 55, 2, NULL, NULL, NULL, '3', 'jpg', '0', '2024-01-21', '0000-00-00', '0000-00-00', 8, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `adresse` text NOT NULL,
  `image` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `nom`, `adresse`, `image`) VALUES
(2, 'Faculté de Médecine et de Pharmacie d\'Agadir', 'Agadir 80000', 0);

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
(6, 2, 'medcine 2024', '2024-01-08', '2024-02-08'),
(7, 2, 'ecole periode 2024', '2024-02-02', '2024-02-10'),
(8, 2, 'ecole periode 2028', '2024-01-18', '2024-01-18'),
(9, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(10, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(11, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(12, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(13, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(14, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(15, 2, 'islamyat', '2024-01-25', '2024-01-19'),
(16, 2, 'test', '2023-12-31', '2023-12-31');

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
(10, 'bk452132', 'zayd', 'v', NULL, NULL, NULL, NULL),
(11, 'bk452132', 'zayd', 'v', NULL, NULL, NULL, NULL);

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
  `ville` varchar(255) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `cin`, `massar`, `niveau`, `filiere`, `ecole`, `email`, `tel`, `adresse`, `ville`, `emp_id`) VALUES
(48, 'mohamed', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'mohamed', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'mohamed', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'kaab', 'khalil', 'bk452132', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'kaab', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'kaab', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(54, 'zayd', 'khalil', 'cc969696', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10),
(55, 'adil', 'moha', 'bk452132', 'ml415263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11);

-- --------------------------------------------------------

--
-- Structure de la table `fichier_etudiant`
--

CREATE TABLE `fichier_etudiant` (
  `id` int(11) NOT NULL,
  `nom_fichier_etudiant` varchar(255) NOT NULL,
  `date_fichier_etudiant` date NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `ext` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fichier_etudiant`
--

INSERT INTO `fichier_etudiant` (`id`, `nom_fichier_etudiant`, `date_fichier_etudiant`, `id_etudiant`, `ext`) VALUES
(3, 'bo', '2024-01-23', 76, 0),
(4, 'bo', '2024-01-23', 76, 0),
(5, 'bo', '2024-01-23', 76, 0),
(6, 'zeazedqsdqs', '2024-01-23', 76, 0),
(7, 'zeazedqsdqs', '2024-01-23', 54, 0);

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
(68, 'mohamed48', '$2y$10$GA5o4u6skLE1c31GswcQ7eYvSLun.F2edy5114ailNvJi7IjaMBeO', 48, 4, 1),
(69, 'mohamed49', '$2y$10$JhKzNp.GW0zDlqMLXhO1vueIDscs80gFHYZSZXU9ztR7DW0AU.AaK', 49, 4, 1),
(70, 'mohamed50', '$2y$10$HrrnBhhfl9Z0Y6KhV4T3LOorS0xrj1OdMfYWRjyJR.t7z/MuW6gSy', 50, 4, 1),
(71, 'zayd10', '$2y$10$HnBD8JERnCeRtGiqgpH.2.njxkZ0.JqLlPwfDNl4LmKpIWnmBtvLe', 10, 3, 1),
(72, 'zayd11', '$2y$10$4oAPp.DcyWCzMIzmgl//Te6TsHZPrXNJgSxSCxP6pIPgg7WJ77Xu2', 11, 3, 1),
(73, 'kaab51', '$2y$10$hgFEUEgNUvGYpltz4B91s.T/LC02hh1LM/vZaxZT9Exvuv4OH7btG', 51, 4, 1),
(74, 'kaab52', '$2y$10$XTHKQx2SzttEDQwxx.rt6.CjMN44xXTh0nevRS8edZAi4dgZLyY0.', 52, 4, 1),
(75, 'kaab53', '$2y$10$uRd1bdS9BsxqanvWWgQC.ONKHaXvWso.Tko59.owmmgexqIOfO3Ui', 53, 4, 1),
(76, 'zayd54', '$2y$10$78YC9Kmjx0By.dZ2vqW2jO/HordQuHrckwUaCXGJ9USNNVrLP.jAO', 54, 4, 1),
(77, 'adil55', '$2y$10$KFppvoU2jDiIanCDmg66iurKuLZUzl9Ll2GDvwSLiVocNqOPbHERG', 55, 4, 1);

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

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `sub`, `content`, `created_at`, `image`) VALUES
(1, 'POst 1', 'post 1 sub ', 'haa howa lpost lwl', '2024-01-21 17:34:09', 0);
INSERT INTO `post` (`id`, `title`, `sub`, `content`, `created_at`, `image`) VALUES
(2, 'post 2', 'post 2', 'hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpost2hada lpo', '2024-01-21 17:34:09', 1);
INSERT INTO `post` (`id`, `title`, `sub`, `content`, `created_at`, `image`) VALUES
(3, 'post 1', 'sdqs sdqdq sdqdqsdq', 'hada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\nhada howa lpost 1\r\n', '2024-01-21 17:38:19', 0),
(4, 'post 2', NULL, ' hada howa lpost 2', '2024-01-21 17:38:19', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `fichier_etudiant`
--
ALTER TABLE `fichier_etudiant`
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
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `dossier`
--
ALTER TABLE `dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ecole_cand_preiod`
--
ALTER TABLE `ecole_cand_preiod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `fichier_etudiant`
--
ALTER TABLE `fichier_etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
