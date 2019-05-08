-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 mai 2019 à 21:04
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eceamazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

DROP TABLE IF EXISTS `achats`;
CREATE TABLE IF NOT EXISTS `achats` (
  `id_achat` int(11) NOT NULL,
  `nom_item` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  `categorie` text,
  `image` text,
  PRIMARY KEY (`id_achat`),
  KEY `id_panier` (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `nom_item`, `quantite`, `prix`, `id_panier`, `categorie`, `image`) VALUES
(0, 'Harry Potter', 2, 10, 0, 'Livre', 'img/livre/harrypotter.jpg'),
(307, 'Les trois mousquetaires', 3, 27, 0, 'livre', 'img/livre/lestroismousquetaires.jpg'),
(685, 'SNSD GEE', 3, 90, 1, 'musique', 'img/musique/gee.jpg'),
(696, 'Les Miserables', 3, 33, 1, 'livre', 'img/livre/lesmiserables');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username_admin` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`username_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username_admin`, `password`, `nom`, `prenom`) VALUES
('Oceane', 'aze', 'Oceane', 'Salmeron');

-- --------------------------------------------------------

--
-- Structure de la table `carte_bancaire`
--

DROP TABLE IF EXISTS `carte_bancaire`;
CREATE TABLE IF NOT EXISTS `carte_bancaire` (
  `numero` int(11) NOT NULL,
  `type` text,
  `expiration` date NOT NULL,
  `code` int(11) NOT NULL,
  `username_client` varchar(255) NOT NULL,
  PRIMARY KEY (`numero`),
  KEY `cb/client` (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte_bancaire`
--

INSERT INTO `carte_bancaire` (`numero`, `type`, `expiration`, `code`, `username_client`) VALUES
(1, 'visa', '2021-01-01', 4321, 'Wyrden'),
(2, 'visa', '2021-01-12', 1234, 'kevin');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `username_client` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `pays` text,
  `adresse1` text,
  `adresse2` text,
  `code_postal` int(11) DEFAULT NULL,
  `ville` text,
  `telephone` int(10) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`username_client`, `password`, `pays`, `adresse1`, `adresse2`, `code_postal`, `ville`, `telephone`, `date_naissance`, `email`, `nom`, `prenom`) VALUES
('kevin', 'aze', 'espagne', 'xxx', NULL, 93120, 'LA COURNEUVE', 782618723, '2019-05-02', 'kevinkann@hotmail.fr', 'KANN', 'Kevin'),
('tampon', 'azer', 'canada', 'xxx', NULL, 0, 'xxx', 101010101, '2019-05-03', 'tampon@gmail.com', 'tampon', 'tampon'),
('Wyrden', 'salut', 'france', '8 rue de machin', '...', 75015, 'paris', 101010101, '2019-04-10', 'alexis.saute@gmail.com', 'Saute', 'Alexis');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nom_item` text,
  `image` text,
  `categorie` text,
  `description` text,
  `nb_ventes` int(11) DEFAULT NULL,
  `modele` text,
  `prix` int(11) NOT NULL,
  `username_vendeur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_item`),
  KEY `username_vendeur` (`username_vendeur`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_item`, `nom_item`, `image`, `categorie`, `description`, `nb_ventes`, `modele`, `prix`, `username_vendeur`) VALUES
(1, 'TWICE - FANCY', 'img/musique/fancy.jpg', 'musique', 'Im A ONCE', 0, 'KPOP', 50, 'kvnknn'),
(2, 'Harry Potter', 'img/livre/harrypotter.jpg', 'Livre', 'Livre de haute qualite', 0, 'Roman', 5, 'kvnknn'),
(4, 'SNSD GEE', 'img/musique/gee.jpg', 'musique', 'musique legendaire', 3, 'pop', 30, 'kvnknn'),
(7, ' BOY WITH LUV', 'img/musique/boywithluv.jpg', 'musique', 'les best', 3, 'KPOP', 50, 'kvnknn'),
(9, 'Asterix - Mission Cleoplatre', 'img/livre/missioncleopatre.jpg', 'livre', 'Meilleure BC francaise', 0, 'BD', 9, 'kvnknn'),
(19, 'Les Miserables', 'img/livre/lesmiserables', 'livre', 'Roman de Victor Hugo', 3, 'Roman', 11, 'kvnknn'),
(21, 'Les trois mousquetaires', 'img/livre/lestroismousquetaires.jpg', 'livre', 'Alexandre Dumas', 0, 'Roman', 9, 'kvnknn');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL,
  `username_client` varchar(255) NOT NULL,
  `prix_total` int(11) DEFAULT NULL,
  `quantite_totale` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_panier`),
  KEY `username_client` (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `username_client`, `prix_total`, `quantite_totale`) VALUES
(0, 'tampon', 37, 5),
(1, 'kevin', 123, 6),
(4, 'Wyrden', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `username_vendeur` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `photo_profil` text,
  `photo_fond` text,
  `description` text,
  `email` text NOT NULL,
  `nom` text,
  `prenom` text,
  `username_admin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username_vendeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`username_vendeur`, `password`, `photo_profil`, `photo_fond`, `description`, `email`, `nom`, `prenom`, `username_admin`) VALUES
('alexis123', 'aze', 'boy.png', NULL, NULL, 'alexis@gmail.com', 'Alexis', 'Saute', 'Oceane'),
('kvnknn', 'aze', 'boy.png', 'img_chania.jpg', 'Kevin le boss', 'kevinkann@ece.fr', 'Kann', 'Kevin', 'Oceane');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `carte_bancaire`
--
ALTER TABLE `carte_bancaire`
  ADD CONSTRAINT `cb/client` FOREIGN KEY (`username_client`) REFERENCES `clients` (`username_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`username_vendeur`) REFERENCES `vendeurs` (`username_vendeur`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`username_client`) REFERENCES `clients` (`username_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
