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
DROP DATABASE IF EXISTS test_site;
 
create database if not exists test_site character set utf8 collate utf8_unicode_ci;
use test_site;

grant all privileges on microcms.* to 'microcms_user'@'localhost' identified by 'secret';

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` VARCHAR(255) NOT NULL,
  `nom_produit` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `prix` float NOT NULL,
    PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;

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
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) DEFAULT NULL ,
  `name` VARCHAR(255) DEFAULT NULL,
  `email_address` VARCHAR(255) DEFAULT NULL,
  `phone_number` VARCHAR(255) DEFAULT NULL,
  `physical_address` VARCHAR(255) DEFAULT NULL,
PRIMARY KEY (`userid`)

) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `surname`, `name`, `email_address`, `phone_number`, `physical_address`) VALUES
(1, 'pseudo', 'mdp', 'surname',  'name', 'email_address', 'phone_number', 'physical_address'),
(2, 'remi', 'dull', 'surname',  'name', 'email_address', 'phone_number', 'physical_address'),
(3, 'test', 'test', 'surname',  'name', 'email_address', 'phone_number', 'physical_address');
INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(4, 'onlyusername', 'ANDpassword');

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `REFERENCE_PROFIL` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11)  NOT NULL UNIQUE,
  `COORDONNEE_BANCAIRE` VARCHAR(255) ,
   
PRIMARY KEY (`REFERENCE_PROFIL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 alter table profil add foreign key (userid) references users (userid) on delete restrict ;

INSERT INTO `profil` (`REFERENCE_PROFIL`,`userid`) values
(1,1),
(2,2);


CREATE TABLE `panier` (
  `REFERENCE_DU_PANIER` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11)  NOT NULL UNIQUE,-- un panier par client
   PRIMARY KEY (`REFERENCE_DU_PANIER`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 alter table profil add foreign key (userid) references users (userid) on delete restrict ;
 create index `DESTINE` on `panier` (`REFERENCE_DU_PANIER`);

CREATE TABLE `LIGNE_PANIER` (
  `REFERENCE_LIGNE` int(11) NOT NULL,
  `REFERENCE_DU_PANIER` int(11) NOT NULL ,
  `productid` int(11) NOT NULL ,
  `QUANTITE_DE_PELUCHE` int(11) NOT NULL DEFAULT 0,
   PRIMARY KEY (`REFERENCE_LIGNE`,REFERENCE_DU_PANIER)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
alter table ligne_panier add foreign key (REFERENCE_DU_PANIER) references panier (REFERENCE_DU_PANIER) on delete restrict ;
 alter table ligne_panier add foreign key (productid) references products (productid) on delete restrict ;

create index `DETAILLER_IDX` on `LIGNE_PANIER` (`REFERENCE_LIGNE`);
create index `AJOUTER8_AU_PANIER` on `LIGNE_PANIER` (`productid`);


insert into panier (`REFERENCE_DU_PANIER`,`userid`) values
(1,1),
(2,3);

insert into  LIGNE_PANIER (`REFERENCE_LIGNE`,`REFERENCE_DU_PANIER`,`productid`,`QUANTITE_DE_PELUCHE`) values
(1,1,1,1),
(2,1,3,2),
(3,1,1,1),
(4,1,2,1),
(1,2,1,5),
(2,2,1,4);



COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
