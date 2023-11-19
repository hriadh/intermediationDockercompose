-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 17 déc. 2022 à 23:49
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `intermediationphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `affecter`
--

CREATE TABLE `affecter` (
  `IdService` int(10) NOT NULL,
  `IdRDV` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demanderservice`
--

CREATE TABLE `demanderservice` (
  `IdUser` int(10) NOT NULL,
  `IdService` int(10) NOT NULL,
  `dateDemande` date NOT NULL,
  `heureDemande` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `proposerservice`
--

CREATE TABLE `proposerservice` (
  `IdUser` int(10) NOT NULL,
  `IdService` int(10) NOT NULL,
  `dateProposition` date NOT NULL,
  `heureProposition` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `IdRDV` int(10) NOT NULL,
  `dateDebut` timestamp NOT NULL DEFAULT current_timestamp(),
  `heureDebut` time(5) NOT NULL DEFAULT current_timestamp(),
  `dateFin` date NOT NULL,
  `heureFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `IdService` int(10) NOT NULL,
  `nomService` varchar(50) NOT NULL,
  `descriptionService` text NOT NULL,
  `cout` float NOT NULL,
  `dcreationService` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`IdService`, `nomService`, `descriptionService`, `cout`, `dcreationService`) VALUES
(1, 'Maintenance imprimante', 'Maintenance imprimante', 90, '2022-12-17 09:21:41'),
(2, 'Maintenance Pc', 'Maintenance des ordinateurs de bureau', 100, '2022-12-17 12:41:00'),
(3, 'Maintenance fax', 'Maintenance des fax', 55, '2022-12-17 18:05:11'),
(4, 'Installation à domicile', 'Installation des équipements informatique', 80, '2022-12-17 21:49:34');

-- --------------------------------------------------------

--
-- Structure de la table `testproposer`
--

CREATE TABLE `testproposer` (
  `IdProposition` int(11) NOT NULL,
  `dateProposition` date NOT NULL,
  `heureProposition` time NOT NULL,
  `IdService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `testproposer`
--

INSERT INTO `testproposer` (`IdProposition`, `dateProposition`, `heureProposition`, `IdService`) VALUES
(3, '2022-12-20', '00:20:22', 0),
(4, '2022-12-21', '00:20:22', 2),
(5, '2022-12-20', '09:00:00', 3),
(6, '2022-12-20', '19:35:00', 3),
(7, '2022-12-21', '00:20:22', 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUser` int(10) NOT NULL,
  `mdpUser` varchar(20) NOT NULL,
  `nomUser` varchar(30) NOT NULL,
  `PrenomUser` varchar(30) NOT NULL,
  `MailUser` varchar(40) NOT NULL,
  `MobileUser` int(10) NOT NULL,
  `AdresseUser` text NOT NULL,
  `profileUser` varchar(15) NOT NULL,
  `dcreationUser` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUser`, `mdpUser`, `nomUser`, `PrenomUser`, `MailUser`, `MobileUser`, `AdresseUser`, `profileUser`, `dcreationUser`) VALUES
(1, 'admin', 'HANNACHI', 'Riadh', 'admin@gmail.com', 29309902, 'chez admin', 'Admin', '2022-12-13 21:52:52'),
(2, '123Four', 'HANNACHI', 'Riadh', 'four@gmail.com', 29309902, 'chez four', 'Fournisseur', '2022-12-13 21:52:52'),
(3, '123Client', 'HANNACHI', 'Riadh', 'client@uvt.tn', 29309902, 'Chez client', 'Client', '2022-12-15 21:26:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD KEY `IdService` (`IdService`,`IdRDV`),
  ADD KEY `IdRDV` (`IdRDV`);

--
-- Index pour la table `demanderservice`
--
ALTER TABLE `demanderservice`
  ADD KEY `IdUser` (`IdUser`,`IdService`),
  ADD KEY `IdService` (`IdService`);

--
-- Index pour la table `proposerservice`
--
ALTER TABLE `proposerservice`
  ADD KEY `IdUser` (`IdUser`,`IdService`),
  ADD KEY `IdService` (`IdService`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`IdRDV`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`IdService`);

--
-- Index pour la table `testproposer`
--
ALTER TABLE `testproposer`
  ADD PRIMARY KEY (`IdProposition`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `IdRDV` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `IdService` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `testproposer`
--
ALTER TABLE `testproposer`
  MODIFY `IdProposition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD CONSTRAINT `affecter_ibfk_1` FOREIGN KEY (`IdRDV`) REFERENCES `rdv` (`IdRDV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `affecter_ibfk_2` FOREIGN KEY (`IdService`) REFERENCES `service` (`IdService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demanderservice`
--
ALTER TABLE `demanderservice`
  ADD CONSTRAINT `demanderservice_ibfk_1` FOREIGN KEY (`IdService`) REFERENCES `service` (`IdService`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demanderservice_ibfk_2` FOREIGN KEY (`IdUser`) REFERENCES `utilisateur` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `proposerservice`
--
ALTER TABLE `proposerservice`
  ADD CONSTRAINT `proposerservice_ibfk_1` FOREIGN KEY (`IdService`) REFERENCES `service` (`IdService`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposerservice_ibfk_2` FOREIGN KEY (`IdUser`) REFERENCES `utilisateur` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
