-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 26 fév. 2020 à 17:22
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

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
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
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
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `sujet` varchar(50) COLLATE utf8_bin NOT NULL,
  `message` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(5, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(6, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(7, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(8, 'Bhujun', 'Yanish.bhujun@gmail.com', 'Bonjour', 'Bonjourrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
(9, 'Bhujun', 'Yanish.bhujun@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(50) COLLATE utf8_bin NOT NULL,
  `role` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`ID`, `nom`, `mdp`, `email`, `telephone`, `role`) VALUES
(36, 'Bhujun', '202cb962ac59075b964b07152d234b70', 'yanish.bhujun@gmail.com', '0000000000', 'user'),
(37, 'yanish', '250cf8b51c773f3f8dc8b4be867a9a02', 'yanish3006@gmail.com', '0000000000', 'admin'),
(38, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa@gmail.com', '0000000000', 'user'),
(39, 'Yanish Bhujun', 'ab4f63f9ac65152575886860dde480a1', 'yanish.bhujun@gmail.com', '0782685300', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `heure` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `menu` varchar(50) NOT NULL,
  `personne` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `email`, `heure`, `menu`, `personne`) VALUES
(1, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'salade nicoise', '6'),
(2, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'salade nicoise', '6'),
(3, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'Burger frites maison', '6'),
(4, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'salade nicoise', '2'),
(5, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'Burger frites maison', '2'),
(6, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'Burger frites maison', '2'),
(7, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'Burger frites maison', '4'),
(8, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'salade nicoise', '8'),
(9, 'Yanish Bhujun', 'yanish3006@gmail.com', '12H00', 'salade nicoise', '2'),
(10, 'Yanish Bhujun', 'aa@gmail.com', '12H00', 'salade nicoise', '6'),
(11, 'Yanish Bhujun', 'aa@gmail.com', '12H00', 'salade nicoise', '2'),
(12, 'Yanish Bhujun', 'yanish.bhujun@gmail.com', '12H00', 'salade nicoise', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
