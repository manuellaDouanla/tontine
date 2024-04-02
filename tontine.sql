-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 02 avr. 2024 à 10:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tontine`
--

-- --------------------------------------------------------

--
-- Structure de la table `Association`
--

CREATE TABLE `Association` (
  `ID` int(11) NOT NULL,
  `denomination` text NOT NULL,
  `dateCreation` date NOT NULL,
  `fraisInscription` double NOT NULL,
  `plafondAssurance` int(6) NOT NULL,
  `sanctionBenef` int(4) NOT NULL,
  `sanctionNonBenef` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Association`
--

INSERT INTO `Association` (`ID`, `denomination`, `dateCreation`, `fraisInscription`, `plafondAssurance`, `sanctionBenef`, `sanctionNonBenef`) VALUES
(6, 'POO SAAaaa', '2024-03-23', 9, 50000, 11, 123);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID` int(11) NOT NULL,
  `CNI` varchar(20) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `Telephone` varchar(15) DEFAULT NULL,
  `Quartier` varchar(100) DEFAULT NULL,
  `FraisAdhesion` decimal(10,2) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID`, `CNI`, `Nom`, `Prenom`, `Telephone`, `Quartier`, `FraisAdhesion`, `created_date`) VALUES
(1, '1234567890', 'Doe', 'John', '0123456789666', 'Quartier A', 10000.00, '2024-03-31 23:00:00'),
(2, '9876543210', 'Smith', 'Jane', '9876543210', 'Quartier B', 75.00, '2024-03-31 23:00:00'),
(3, '4567890123', 'Johnson', 'Michael', '4567890123', 'Quartier C', 100.00, '2024-03-31 23:00:00'),
(4, 'dddd', 'dddd', 'dddd', '654538837', 'manu', 10000.00, '2024-03-31 23:00:00'),
(5, 'dddd', 'dddd', 'dddd', '694131028', 'dddd', 10000.00, '2024-03-31 23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `ID_paiement` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Date_paiement` date DEFAULT NULL,
  `Tranche1` decimal(10,2) DEFAULT NULL,
  `Tranche2` varchar(255) DEFAULT NULL,
  `Statut_paiement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`ID_paiement`, `Nom`, `Date_paiement`, `Tranche1`, `Tranche2`, `Statut_paiement`) VALUES
(160, 'yoh kellly', '2024-03-06', 0.00, '0', 'En Attente'),
(162, 'yoh kellly', '2024-03-06', 222.00, '50000', 'payé'),
(164, 'Douanla Manuella', '2024-02-28', 0.00, '0', 'En Attente'),
(168, 'Dounala Namekong Manuella', '2024-03-13', 1.00, '0', 'En cours'),
(169, 'kelly keole', '2023-01-06', 49999.00, '0', 'En cours'),
(170, 'kelly keole', '2024-03-07', 25000.00, '25000', 'Payé'),
(171, 'Dounala Namekong Manuella', '2024-03-06', 50000.00, '0', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `tontines`
--

CREATE TABLE `tontines` (
  `id_tontine` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `ordrebenef` varchar(255) DEFAULT NULL,
  `sanctionBenef` varchar(255) DEFAULT NULL,
  `sanctionNonBenef` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tontines`
--

INSERT INTO `tontines` (`id_tontine`, `code`, `Nom`, `montant`, `ordrebenef`, `sanctionBenef`, `sanctionNonBenef`, `created_date`) VALUES
(1, 'TNT001', 'Tontine A', 500.00, 'Ordre A2', '0', '4000', '2024-03-31 23:00:00'),
(2, 'TNT002', 'Tontine B', 1000.00, 'Ordre B', 'Sanction D', 'Sanction E', '2024-03-31 23:00:00'),
(3, 'TNT003', 'Tontine C', 750.00, 'Ordre C', 'Sanction F', 'Sanction G', '2024-03-31 23:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Association`
--
ALTER TABLE `Association`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`ID_paiement`);

--
-- Index pour la table `tontines`
--
ALTER TABLE `tontines`
  ADD PRIMARY KEY (`id_tontine`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Association`
--
ALTER TABLE `Association`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `ID_paiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT pour la table `tontines`
--
ALTER TABLE `tontines`
  MODIFY `id_tontine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
