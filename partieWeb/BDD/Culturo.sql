-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 08:48
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
  `id_type` int(3) NOT NULL,
  `concert` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `nom`, `prenom`, `id_compte`, `id_type`, `concert`) VALUES
(3, 'Beyler', 'Wilson', 2, 2, NULL),
(9, 'Beyler', 'Olivier', 2, 2, NULL),
(10, 'Beyler', 'Olivier', 1, 2, NULL),
(11, 'Beyler', 'Cecile', 3, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `chanteurs`
--

CREATE TABLE `chanteurs` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT './images_stars/chanteur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chanteurs`
--

INSERT INTO `chanteurs` (`id`, `nom`, `img`) VALUES
(27, 'Gotaga', './images_stars/chanteur'),
(28, 'David Getta', './images_stars/chanteur'),
(29, 'DjSnake', './images_stars/chanteur'),
(30, 'Harry Styles', './images_stars/chanteur');

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
  `image` varchar(100) NOT NULL DEFAULT './images/images villes/ville_',
  `presentation` varchar(500) NOT NULL,
  `numVille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `pays`, `image`, `presentation`, `numVille`) VALUES
(90, 'Le Puy-en-Velay', 'France', './images/images villes/ville_', 'Le Puy-en-Velay, anciennement Le Puy, est une commune française, préfecture du département de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019 et ses habitants sont appelés Ponots.', 1),
(91, 'Ségovie', 'Espagne', './images/images villes/ville_', 'Garde est une ville située dans le centre de la région de Beira, entre le Plateau Guarda-Sabugal et la Serra da Estrela. Il est la plus haute ville du Portugal, étant situé à 1056 mètres. Guard est une distance d\'environ 219 km de Porto et 356 kilomètres de la ville de Lisbonne. Le District de Guarda est bordé au nord par le district de Bragança, au sud avec le district de Castelo Branco et l\'ouest avec les districts de Coimbra et Viseu.', 2),
(92, 'Guarda', 'Portugal', './images/images villes/ville_', 'Le Puy-en-Velay, anciennement Le Puy, est une commune française, préfecture du département de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019 et ses habitants sont appelés Ponots.', 3),
(93, 'Sienne', 'Italie', './images/images villes/ville_', 'Sienne, ville située en Toscane, au centre de l\'Italie, se caractérise par ses bâtiments médiévaux en briques. Sur la Piazza del Campo, la place centrale en forme de coquillage, se dressent le Palazzo Pubblico, l\'hôtel de ville gothique, et la Torre del Mangia, tour étroite du XIVe siècle offrant une vue panoramique depuis son sommet en travertin blanc.', 4),
(94, 'Gummersebach', 'Allemange', './images/images villes/ville_', 'Gummersbach est une ville allemande du Haut-Berg, au sud-est du land de Rhénanie-du-Nord-Westphalie. Elle est située à 50 km à l\'Est de Cologne. Dans le passé, la ville était surnommée « la ville des tilleuls », la rue principale étant bordée de ces arbres.', 5),
(95, 'Deurne', 'Pays-Bas', './images/images villes/ville_', 'Deurne est une commune et un village des Pays-Bas de la province du Brabant-Septentrional. ', 6),
(96, 'Halmstad', 'Suède', './images/images villes/ville_', 'Halmstad est une ville de l\'ouest de la Suède, chef-lieu de la commune du même nom. Elle se situe dans le comté de Halland, sur les rives du Cattégat à l\'embouchure de Nissan, entre les villes de Falkenberg, au nord, et de Laholm, au sud. En 2005, on y dénombrait environ 55 000 habitants.', 7),
(97, 'Vresse-sur-Semois', 'Belgique', './images/images villes/ville_', 'Vresse-sur-Semois est une commune francophone de Belgique située en Wallonie dans la province de Namur, ainsi qu’une localité où siège son administration. Sa langue traditionnelle était le champenois.', 8),
(98, 'Leoben', 'Autriche', './images/images villes/ville_', 'Leoben est une ville de Styrie dans le centre de l\'Autriche sur la rivière Mur. C\'est la 19ᵉ ville la plus peuplée de son pays. Leoben est un centre industriel local et abrite l\'université de Leoben, spécialisée dans l\'exploitation de mines.', 9),
(99, 'Zakopane', 'Pologne', './images/images villes/ville_', 'Zakopane est une station de ski du sud de la Pologne, aux pieds des Tatras. Elle constitue un point de départ apprécié pour les sports d\'hiver, ainsi que pour l\'alpinisme et la randonnée en été. Les stations de ski voisines, Kasprowy Wierch et Gubałówka, sont accessibles via un téléphérique et un funiculaire, et offrent une vue panoramique sur la montagne. La ville est également connue pour ses chalets en bois du début du XXe siècle, symboles de l\'architecture de Zakopane.', 10),
(100, 'Kilkenny', 'Irlande', './images/images villes/ville_', 'Kilkenny est une ville de 26 512 habitants de la République d\'Irlande sur la Nore située à 150 km au sud-ouest de Dublin dans la province du Leinster. Kilkenny est le chef-lieu du comté du même nom.', 11),
(101, 'Kolding', 'Danemark', './images/images villes/ville_', 'Kolding est une ville portuaire du Danemark dans la région du Danemark-du-Sud. La ville compte 57 540 habitants au 1ᵉʳ janvier 2012.', 12),
(102, 'Sisak', 'Croatie', './images/images villes/ville_', 'Sisak est une ville et une municipalité située en Croatie centrale à la confluence des rivières Kupa, Save et Odra. Elle est le chef-lieu du Comitat de Sisak-Moslavina.', 13),
(103, 'Kutná Hora', 'République tchèque', './images/images villes/ville_', 'Kutná Hora est une ville de la région de Bohême centrale, en Tchéquie, et le chef-lieu du district de Kutná Hora. Sa population s\'élevait à 20 450 habitants en 2022.', 14);

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
-- Index pour la table `chanteurs`
--
ALTER TABLE `chanteurs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `chanteurs`
--
ALTER TABLE `chanteurs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_billet`
--
ALTER TABLE `type_billet`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
