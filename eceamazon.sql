-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2019 at 12:29 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eceamazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username_admin` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `username_client` varchar(255) NOT NULL,
  `password` text,
  `pays` text,
  `adresse1` text,
  `adresse2` text,
  `code_postal` int(11) DEFAULT NULL,
  `ville` text,
  `telephone` int(10) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` text,
  PRIMARY KEY (`username_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`username_client`, `password`, `pays`, `adresse1`, `adresse2`, `code_postal`, `ville`, `telephone`, `date_naissance`, `email`) VALUES
('Wyrden', 'salut', 'france', '00 rue de quelque part', 'en haut', 0, 'paris', 0, '2019-04-10', 'alexis.saute@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL,
  `nom_item` text,
  `image` text,
  `vendeur` text,
  `categorie` text,
  `description` text,
  `nb_ventes` int(11) DEFAULT NULL,
  `modele` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `username_vendeur` varchar(255) NOT NULL,
  `password` text,
  `photo_profil` text,
  `photo_fond` text,
  `description` text,
  `email` text,
  PRIMARY KEY (`username_vendeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
