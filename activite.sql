-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Mars 2016 à 20:50
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `idActivite` int(10) NOT NULL,
  `nomActivite` varchar(120) NOT NULL,
  `descriptionActivite` varchar(240) NOT NULL,
  `tarifActivite` varchar(50) NOT NULL,
  `idHotel` int(11) NOT NULL,
  `imageActivite` varchar(120) NOT NULL,
  `localisation` varchar(50) NOT NULL,
  `adresseActivite` varchar(100) NOT NULL,
  `villeEtPaysActivite` varchar(100) NOT NULL,
  `imageActivite2` varchar(120) NOT NULL,
  `imageActivite3` varchar(120) NOT NULL,
  `idCategorie` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`idActivite`, `nomActivite`, `descriptionActivite`, `tarifActivite`, `idHotel`, `imageActivite`, `localisation`, `adresseActivite`, `villeEtPaysActivite`, `imageActivite2`, `imageActivite3`, `idCategorie`) VALUES
(3, 'Golf', 'Venez découvrir le golf à travers un parcours inédit', '1', 6, 'fondNoir4.jpeg', '', 'rue de ...', 'Paris, blabla', '', '', 8),
(4, 'Verif donnee', 'description activite', '1', 9, 'fondNoir2.jpeg', '', 'verif adresse', 'verif ville', '', '', 14),
(5, 'Le Libanais', 'bienvenu dans la categorie de restauration, libanais, bla bla bla bla', '5', 8, 'fondNoir2.jpeg', '', '3 rue ...', 'Paris, France', '', '', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`idActivite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `idActivite` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;