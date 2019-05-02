-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 13:23
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
  PRIMARY KEY (`id_achat`),
  KEY `id_panier` (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `nom_item`, `quantite`, `prix`, `id_panier`) VALUES
(1, 'Harry Potter', 1, 6, 1);

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
(1, 'cb', '2021-01-01', 0, 'Wyrden');

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
  `id_panier` int(11) NOT NULL,
  `id_carte_bancaire` int(11) NOT NULL,
  PRIMARY KEY (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`username_client`, `password`, `pays`, `adresse1`, `adresse2`, `code_postal`, `ville`, `telephone`, `date_naissance`, `email`, `nom`, `prenom`, `id_panier`, `id_carte_bancaire`) VALUES
('Wyrden', 'salut', 'france', '00 rue de quelque part', 'en haut', 0, 'paris', 0, '2019-04-10', 'alexis.saute@gmail.com', 'Saute', 'Alexis', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL,
  `username_vendeur` varchar(255) NOT NULL,
  `nom_item` text,
  `image` text,
  `categorie` text,
  `description` text,
  `nb_ventes` int(11),
  `modele` text,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id_item`),
  KEY `username_vendeur` (`username_vendeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_item`, `username_vendeur`, `nom_item`, `image`, `categorie`, `description`, `nb_ventes`, `modele`, `prix`) VALUES
(1, NULL, 'Harry Potter', NULL, 'Livre', 'Livre de haute qualité', NULL, 'Fantastique', 5);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL,
  `username_client` varchar(255) NOT NULL,
  `prix_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_panier`),
  KEY `username_client` (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `username_client`, `prix_total`) VALUES
(1, 'Wyrden', 20);

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
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`username_vendeur`) REFERENCES `vendeurs` (`username_vendeur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`username_client`) REFERENCES `clients` (`username_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
