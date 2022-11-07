-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 10:31
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
(30, 'Harry Styles', './images_stars/chanteur'),
(35, 'Wilson', './images_stars/a702de9f66f5e62c96ffb49effaa8e04.pn'),
(36, 'Wilson', './images_stars/a702de9f66f5e62c96ffb49effaa8e04.pn'),
(37, 'Olivier', './images_stars/490f07ee24a68131ac6d2af884988e02.pn'),
(38, 'Olivier', './images_stars/490f07ee24a68131ac6d2af884988e02.pn'),
(39, 'ZZZ', './images_stars/244cac2b132fcbed21f0c70da36496b7.pn'),
(40, 'ZZZ', './images_stars/244cac2b132fcbed21f0c70da36496b7.pn'),
(44, 'qq', './images_stars/24e37f7ff088cea4482829c5e2c2e078.pn');

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
(2, 70, 'Le Puy-En-Velay VIP', 'place permetant d\'assité l\'ensemble des ativitées à l\'évènement principal ce déroulant au Puy-En-Velay (France)', '2022-10-19'),
(5, 72, 'Wilson', 'ZZZZZ', '2022-10-30');

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
(90, 'Le Puy-en-Velay', 'France', './images/images villes/ville_', 'Le Puy-en-Velay is a French commune, it is the prefecture of the Haute-Loire department in the Auvergne-Rhône-Alpes region. Le Puy-en-Velay had 19,215 inhabitants in 2019 and its inhabitants are called Ponots', 1),
(91, 'Ségovie', 'Segovia ', './images/images villes/ville_', 'Segovia is a historic city located northwest of Madrid, in the center of the Spanish region of Castile and León. Its settlement past is reflected in the richness of its architecture, including its medieval walls, Romanesque churches, former royal palace and Gothic cathedral. Its iconic Roman aqueduct features more than 160 arches, most of which are built from the original mortarless granite, and overlooks Plaza Azoguejo in the heart of the city.', 2),
(92, 'Guarda', 'Portugal', './images/images villes/ville_', 'Guarda is the highest town in Portugal with 1056m of altitude at its highest point, where the Torre de Menagem (Castle of Guarda) is located.\n\nGuarda is known for having one of the cleanest airs in the country and even received the award for \"First Iberian Bioclimatic City\" in 2022.\n\nA few minutes from the city, you can explore fauna and flora at the Serra da Estrela natural park and its mountain range where the highest point in Portugal (1993m) is located.\n\nDiscover our recommended places in th', 3),
(93, 'Siena', 'Italie', './images/images villes/ville_', 'Siena, a city located in Tuscany, central Italy, is characterized by its medieval brick buildings. In Piazza del Campo, the central shell-shaped square, stand the Palazzo Pubblico, the Gothic town hall, and the Torre del Mangia, a narrow 14th-century tower offering panoramic views from its white travertine top.', 4),
(94, 'Gummersbach ', 'Allemange', './images/images villes/ville_', 'Gummersbach is a German town in the Haut-Berg, in the south-east of the state of North Rhine-Westphalia. It is located 50 km east of Cologne. In the past, the city was nicknamed \"the city of lime trees\", the main street being lined with these trees.', 5),
(95, 'Deurne', 'Pays-Bas', './images/images villes/ville_', 'Deurne is a municipality and a village in the Netherlands in the province of North Brabant.', 6),
(96, 'Halmstad', 'Suède', './images/images villes/ville_', 'Halmstad is a city in western Sweden, capital of the municipality of the same name. It is located in the county of Halland, on the banks of the Kattegat at the mouth of Nissan, between the towns of Falkenberg, to the north, and Laholm, to the south. In 2005, there were approximately 55,000 inhabitants.', 7),
(97, 'Vresse-sur-Semois', 'Belgique', './images/images villes/ville_', 'Vresse-sur-Semois is a French-speaking municipality of Belgium located in Wallonia in the province of Namur, as well as a locality where its administration is based. Its traditional language was Champagne.', 8),
(98, 'Leoben', 'Autriche', './images/images villes/ville_', 'Leoben is a town in Styria in central Austria on the river Mur. It is the 19th most populated city in its country. Leoben is a local industrial center and home to Leoben University, which specializes in mining.', 9),
(99, 'Zakopane', 'Pologne', './images/images villes/ville_', 'Zakopane is a ski resort in southern Poland, at the foot of the Tatras. It is a popular starting point for winter sports, as well as for mountaineering and hiking in summer. The neighboring ski resorts, Kasprowy Wierch and Gubałówka, are accessible via cable car and funicular, and offer panoramic mountain views. The town is also known for its early 20th century wooden chalets, symbols of Zakopane architecture.', 10),
(100, 'Kilkenny', 'Irlande', './images/images villes/ville_', 'Kilkenny is a city of 26,512 inhabitants in the Republic of Ireland on the Nore located 150 km south-west of Dublin in the province of Leinster. Kilkenny is the county seat of the county of the same name.', 11),
(101, 'Kolding', 'Danemark', './images/images villes/ville_', 'Kolding is a Danish port city in the region of Southern Denmark. The city has 57,540 inhabitants on January 1, 2012.', 12),
(102, 'Sisak', 'Croatie', './images/images villes/ville_', 'Sisak is a town and municipality located in central Croatia at the confluence of the Kupa, Sava and Odra rivers. It is the capital of Sisak-Moslavina County.', 13),
(103, 'Kutná Hora', 'République tchèque', './images/images villes/ville_', 'Kutná Hora is a city in the Central Bohemian region of Czechia and the capital of the Kutná Hora district. Its population was 20,450 in 2022.', 14);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_billet`
--
ALTER TABLE `type_billet`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
