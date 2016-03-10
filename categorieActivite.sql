-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Mars 2016 à 20:49
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorieActivite`
--

CREATE TABLE `categorieActivite` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorieActivite`
--

INSERT INTO `categorieActivite` (`idCategorie`, `nomCategorie`) VALUES
(1, 'Italien'),
(2, 'Français'),
(3, 'Libanais'),
(4, 'Japonais'),
(5, 'Chinois'),
(6, 'Marocain'),
(7, 'Mexicain'),
(8, 'Établissements'),
(9, 'Parcs d''exercices'),
(10, 'Salles indépendantes'),
(11, 'Mode et beauté'),
(12, 'Souvenirs'),
(13, 'Maison'),
(14, 'Musées'),
(15, 'Monuments'),
(16, 'Quartiers'),
(17, 'Cabarets'),
(18, 'Sorties'),
(19, 'Restaurants'),
(20, 'Clubs/boites de nuits'),
(21, 'Visites');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorieActivite`
--
ALTER TABLE `categorieActivite`
  ADD PRIMARY KEY (`idCategorie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorieActivite`
--
ALTER TABLE `categorieActivite`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;