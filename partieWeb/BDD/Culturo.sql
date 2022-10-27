-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 oct. 2022 à 16:55
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `culturo`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `id_compte` int(3) NOT NULL,
  `id_type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `nom`, `prenom`, `id_compte`, `id_type`) VALUES
(1, 'Beyler', 'Wilson', 2, 2),
(2, 'Beyler', 'Wilson', 2, 2),
(3, 'Beyler', 'Wilson', 2, 2),
(4, 'Beyler', 'Wilson', 2, 2),
(5, 'Beyler', 'Wilson', 2, 2),
(6, 'Beyler', 'Wilson', 2, 2),
(7, 'Beyler', 'Wilson', 2, 2),
(8, 'Beyler', 'Olivier', 2, 2),
(9, 'Beyler', 'Olivier', 2, 2),
(10, 'Beyler', 'Olivier', 2, 2),
(11, 'Beyler', 'Cecile', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` int(12) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `mail`, `tel`, `mdp`) VALUES
(1, 'Beyler', 'Wilson', 'beyler.wilson@gmail.com', 783442122, '2020'),
(2, 'Astier', 'Quentin', 'astier.quentin@gmail.com', 904889033, 'ZZZ'),
(3, '38', 'wil', 'beyler.sss@gmail.com', 783442122, 'qqq');

-- --------------------------------------------------------

--
-- Structure de la table `type_billet`
--

CREATE TABLE `type_billet` (
  `id` int(3) NOT NULL,
  `prix` int(5) NOT NULL,
  `lib` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_billet`
--

INSERT INTO `type_billet` (`id`, `prix`, `lib`, `description`, `date`) VALUES
(1, 55, 'Le Puy-En-Velay', 'place permetant d\'assité l\'ensemble des activitées à l\'évènement principal ce déroulant au Puy-En-Velay (France) à l\'exeptions des concerts', '2022-10-05'),
(2, 70, 'Le Puy-En-Velay VIP', 'place permetant d\'assité l\'ensemble des ativitées à l\'évènement principal ce déroulant au Puy-En-Velay (France)', '2022-10-19');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `presentation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `pays`, `image`, `presentation`) VALUES
(1, 'ville1', 'France', 'uuu.png', 'rrrttyh'),
(2, 'ville2', 'France', 'zzz.png', 'ggggg'),
(3, 'ville3', 'English', 'zza.png', 'qqz'),
(4, 'ville4', 'France', 'aaa.png', 'ddd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_compte` (`id_compte`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_billet`
--
ALTER TABLE `type_billet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_billet`
--
ALTER TABLE `type_billet`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `billet_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id`),
  ADD CONSTRAINT `billet_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_billet` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
