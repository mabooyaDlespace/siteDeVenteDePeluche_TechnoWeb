-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 déc. 2017 à 14:14
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbpeluches`
--
CREATE DATABASE IF NOT EXISTS `dbpeluches` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbpeluches`;

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`orderid`, `userid`, `productid`, `quantite`) VALUES
(47, 5, 5, 1),
(46, 5, 5, 1),
(45, 5, 5, 10),
(44, 5, 6, 4),
(43, 5, 6, 9),
(42, 5, 6, 6),
(41, 5, 1, 8),
(40, 5, 1, 10),
(39, 4, 1, 4),
(38, 4, 1, 16),
(37, 4, 2, 15),
(36, 5, 1, 24),
(35, 5, 1, 1),
(34, 5, 1, 1),
(33, 5, 1, 1),
(32, 5, 1, 8),
(31, 5, 1, 8),
(30, 5, 1, 14),
(29, 5, 1, 1),
(48, 5, 5, 1),
(49, 5, 5, 1),
(50, 5, 5, 1),
(51, 5, 5, 1),
(52, 5, 5, 1),
(53, 5, 5, 1),
(54, 5, 5, 1),
(55, 5, 5, 1),
(56, 5, 5, 1),
(57, 5, 5, 1),
(58, 4, 8, 15),
(59, 4, 5, 10),
(60, 5, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_produit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productid`, `categorie`, `nom_produit`, `description`, `image`, `prix`) VALUES
(1, 'peluches', 'Peluche Evoli', 'Decouvrez Evoli, un des personnages prefere de la saga Pokemon.\r\nLa peluche Evoli de 20 cm et toutes ses evolutions enfin disponible !', 'evoli', 30.99),
(2, 'peluches', 'Une autre peluche Evoli', 'Bla Bla Bla', 'evoli', 40.99),
(3, 'peluches', 'Peluche Pikachu', 'Bla Bla Bla', 'pikachu', 50.99),
(4, 'peluches', 'Peluche Pikachu', 'Bla Bla Bla (bis)', 'pikachu', 50.99),
(5, 'peluches', 'Peluche Noctali', 'Bla Bla Bla (bis)', 'noctali', 30.99),
(6, 'peluches', 'Peluche Aquali', 'Bla Bla Bla (bis)', 'aquali', 30.99),
(7, 'peluches', 'Peluche Pyroli', 'Bla Bla Bla (bis)', 'pyroli', 30.99),
(8, 'peluches', 'Peluche Voltali', 'Bla Bla Bla (bis)', 'voltali', 30.99);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `physical_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `email_address` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `physical_address`, `phone_number`, `email_address`, `name`, `surname`) VALUES
(1, 'pseudo', 'mdp', '', '', '', '', ''),
(2, 'remi', 'dull', '', '', '', '', ''),
(3, 'test', 'test', '', '', '', '', ''),
(4, 'DavidLaFarge', 'MissJirachi', '', '', '', '', ''),
(5, 'Loic', 'Loic', '', '', '', '', '');
--
-- Base de données :  `names`
--
CREATE DATABASE IF NOT EXISTS `names` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `names`;

-- --------------------------------------------------------

--
-- Structure de la table `name`
--

DROP TABLE IF EXISTS `name`;
CREATE TABLE IF NOT EXISTS `name` (
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `name`
--

INSERT INTO `name` (`name`) VALUES
('Hello'),
('Loic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
