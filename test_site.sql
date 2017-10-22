-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 20 oct. 2017 à 16:36
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_site`
--
create database if not exists test_site character set utf8 collate utf8_unicode_ci;
use test_site;

grant all privileges on microcms.* to 'microcms_user'@'localhost' identified by 'secret';

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `categorie` text NOT NULL,
  `nom_produit` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productid`, `categorie`, `nom_produit`, `description`, `image`, `prix`) VALUES
(1, 'peluches', 'Peluche Evoli', 'Une ravissante peluche qui ravira les grands et les petits', 'evoli', 169.99),
(2, 'peluches', 'Une autre peluche Evoli', 'Bla Bla Bla', 'evoli', 1),
(3, 'peluches', 'Peluche Pikachu', 'Bla Bla Bla', 'pikachu', 2),
(4, 'peluches', 'Peluche Pikachu', 'Bla Bla Bla (bis)', 'pikachu', 10);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `physical_address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `surname`, `name`, `email_address`, `phone_number`, `physical_address`) VALUES
(1, 'pseudo', 'mdp', '', '', '', '', ''),
(2, 'remi', 'dull', '', '', '', '', ''),
(3, 'test', 'test', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
