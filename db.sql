-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Mars 2016 à 11:32
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
  `localisation` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`idActivite`, `nomActivite`, `descriptionActivite`, `tarifActivite`, `idHotel`, `imageActivite`, `localisation`) VALUES
(3, 'verif idhotel', 'heuuu', '1', 6, 'fondNoir4.jpeg', '');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `numeroClient` int(10) NOT NULL,
  `mdpNumClient` varchar(120) NOT NULL,
  `mdpEmail` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `dateNaissance` varchar(10) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`numeroClient`, `mdpNumClient`, `mdpEmail`, `email`, `nom`, `prenom`, `adresse`, `dateNaissance`, `telephone`, `statut`, `profession`) VALUES
(349718494, '', '90aa697edc5b1f72d548f051df81c4bf00e3fece', 'test2222', '', '', '', '', '', '', ''),
(467327898, '', '2538a1bc241561254b6f75f46895b1435fe46711', 'testCo', '', '', '', '', '', '', ''),
(674932210, '', '361c4be182c3039d49f4553864112df30a0256e9', 'testtttR43543T34', '', '', '', '', '', '', ''),
(1621487176, '', 'aa4ff641d5ac331787e3ee46c876f3cdf4bd2734', 'benji', '', '', '', '', '', '', ''),
(1986363645, '', '790db8fe15bff1f6ccd2465d42c895d16b9e8c26', 'test3', '', '', '', '', '', '', ''),
(2147483647, '', '7420e00a535963d1ffc571f6602c6d13dd0fb446', 'test', 'World', 'Hello', 'Paris, blablabla blabla', '01/01/2016', '0100000000', 'Membre Gold', 'Développeur');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `idHotel` int(10) NOT NULL,
  `nomHotel` varchar(60) NOT NULL,
  `departementHotel` int(2) NOT NULL,
  `adresseHotel` varchar(100) NOT NULL,
  `descriptionHotel` varchar(200) NOT NULL,
  `imageHotel` varchar(40) NOT NULL,
  `villeEtPays` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `hotels`
--

INSERT INTO `hotels` (`idHotel`, `nomHotel`, `departementHotel`, `adresseHotel`, `descriptionHotel`, `imageHotel`, `villeEtPays`) VALUES
(8, 'Hotel 2', 75, 'rue du ...', 'description de lhotel', 'fondNoir3.jpeg', 'Ville et pays');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`idActivite`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`numeroClient`);

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`idHotel`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `idActivite` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `idHotel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;