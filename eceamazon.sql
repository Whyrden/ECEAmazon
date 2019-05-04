-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 mai 2019 à 19:33
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
  PRIMARY KEY (`id_achat`),
  KEY `id_panier` (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `nom_item`, `quantite`, `prix`, `id_panier`, `categorie`) VALUES
(0, 'Harry Potter', 1, 5, 1, 'Fantastique'),
(1, 'Harry Potter', 7, 35, 4, 'Fantastique'),
(2, 'DBZ', 2, 40, 4, 'livre'),
(3, 'DDU DU DDU DU', 6, 65, 1, 'musique'),
(4, 'Mein Kampf', 14, 65, 4, 'livre');

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
(1, 'cb', '2021-01-01', 0, 'Wyrden'),
(2, 'cb', '2021-01-12', 1234, 'kevin');

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
('oceane', 'aze', 'france', 'xxx', NULL, 93120, 'LA COURNEUVE', 101010101, '2019-05-03', 'kevinkann@hotmail.fr', 'KANN', 'Kevin'),
('tampon', 'azer', 'canada', 'xxx', NULL, 0, 'xxx', 101010101, '2019-05-03', 'tampon@gmail.com', 'tampon', 'tampon'),
('Wyrden', 'salut', 'france', '00 rue de quelque part', 'en haut', 0, 'paris', 0, '2019-04-10', 'alexis.saute@gmail.com', 'Saute', 'Alexis');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_item`, `nom_item`, `image`, `categorie`, `description`, `nb_ventes`, `modele`, `prix`, `username_vendeur`) VALUES
(1, 'Harry Potter', 'img/livre/harrypotter.jpg', 'Livre', 'Livre de haute qualité', NULL, 'Fantastique', 5, 'kvnknn'),
(2, 'Harry Potter', 'img/livre/harrypotter.jpg', 'Livre', 'Livre de haute qualité', NULL, 'Fantastique', 5, 'kvnknn'),
(4, 'SNSD GEE', 'img/musique/gee.jpg', 'musique', 'musique légendaire', 0, 'pop', 30, 'kvnknn'),
(5, 'SNSD GEE', 'img/musique/gee.jpg', 'musique', 'musique légendaire', 0, 'pop', 30, 'kvnknn');

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
(0, 'tampon', 15, 3),
(1, 'kevin', 70, 7),
(4, 'Wyrden', 140, 23),
(36, 'oceane', NULL, NULL);

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
  `username_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`username_vendeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`username_vendeur`, `password`, `photo_profil`, `photo_fond`, `description`, `email`, `nom`, `prenom`, `username_admin`) VALUES
('kvnknn', 'aze', NULL, NULL, 'Kevin le boss', 'kevinkann@ece.fr', 'Kann', 'Kevin', '');

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
