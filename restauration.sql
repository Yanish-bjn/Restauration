-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 jan. 2020 à 10:07
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restauration`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `login`, `mdp`) VALUES
(1, 'Bhujun', 'Yanish', 'yanish3006@gmail.com', 'Bhujun', 'Yanish');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `sujet` varchar(128) COLLATE utf8_bin NOT NULL,
  `message` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(5, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(6, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(7, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(8, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(9, 'Bhujun', 'Yanish.bhujun@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(10, 'Bhujun', 'Yanish.Bhujun@gmail.com', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb'),
(11, 'Bhujun', 'Y.Bhujun@lprs.fr', 'aaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbb'),
(12, 'Bhujun', 'Y.Bhujun@lprs.fr', 'aaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbb'),
(13, 'Bhujun', 'Yanish.Bhujun@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(14, 'Bhujun', 'ai@hotmail.fr', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz'),
(15, 'Bhujun', 'Y.Bhujun@lprs.fr', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`ID`, `nom`, `mdp`, `email`, `telephone`) VALUES
(17, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(18, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(19, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(20, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(21, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(22, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(23, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(24, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(25, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(26, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(27, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(28, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(29, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(30, 'Bhujun', 'zesxdrcgtfvbnk,l', 'Yanish.Bhujun@gmail.com', '0000000000'),
(31, 'yanish', 'salut', 'yanish3006@gmail.com', '0000000000'),
(32, 'yanish', 'salut', 'yanish3006@gmail.com', '0000000000'),
(33, 'yanish', 'salut', 'yanish3006@gmail.com', '0000000000'),
(34, 'yanish', 'salut', 'yanish3006@gmail.com', '0000000000'),
(35, 'Bhujun', 'Bonour', 'yanish93@hormail.fr', '0000000000'),
(36, 'Bhujun', '39059867047c7a5032667b9c38739ef8', 'Yanish.Bhujun@gmail.com', '0000000000'),
(37, 'salut', '39059867047c7a5032667b9c38739ef8', 'Yanish.Bhujun@gmail.com', '0000000000');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise` varchar(250) NOT NULL,
  `poste` varchar(250) NOT NULL,
  `ville` varchar(250) NOT NULL,
  `profil` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

DROP TABLE IF EXISTS `postuler`;
CREATE TABLE IF NOT EXISTS `postuler` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `formation` varchar(300) COLLATE utf8_bin NOT NULL,
  `message` varchar(350) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `heure` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `menu` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `personne` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `telephone`, `heure`, `menu`, `personne`) VALUES
(4, 'Bhujun', '0000000000', '21H00', 'salade nicoise', '2'),
(5, 'Bhujun', '0000000000', '21H00', 'Burger frites maison', '2'),
(6, 'Bhujun', '0000000000', '12H00', 'Burger frites maison', '10'),
(7, 'salut', '0000000000', '12H00', 'salade nicoise', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
