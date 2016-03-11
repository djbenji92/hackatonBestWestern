-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 11 Mars 2016 à 01:26
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackathon`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `hotels`
--

INSERT INTO `hotels` (`idHotel`, `nomHotel`, `departementHotel`, `adresseHotel`, `descriptionHotel`, `imageHotel`, `villeEtPays`) VALUES
(10, 'BEST WESTERN Hotel de la Petite Verrerie, ', 75009, '19 Avenue des Grands Boulevards', 'Un Ã®lot de verdure au coeur de la Bourgogne du sud, le BEST WESTERN HÃ´tel de la Petite Verrerie est une ancienne dÃ©pendance du ChÃ¢teau de la Verrerie, rÃ©sidence des illustres maÃ®tres de forge, l', 'verrerie.jpg', 'Paris, France'),
(11, 'BEST WESTERN Hotel Le Moulin De Ducey,  Ducey', 50220, '1 Grande Rue, 50220', 'Dans la manche, en Normandie, proche du Mont saint Michel (15km) mais loin de son agitation, Ã  deux km de l''autoroute A84 (Rennes Caen), cet ancien moulin est devenu hÃ´tel de charme.', 'ducey.jpg', 'Ducey, France'),
(12, 'BEST WESTERN Hotel Sydney Opera, Paris', 75008, '50, Rue Des Mathurins,\r\n75008', 'Au coeur du quartier des affaires, des boutiques de luxe du Faubourg Saint HonorÃ©, des Grands Magasins du Boulevard Haussmann, des thÃ©Ã¢tres et des spectacles, le BEST WESTERN HÃ´tel Sydney OpÃ©ra b', 'opera.jpg', 'Paris, France'),
(13, 'BEST WESTERN Saint Martin Bastille, Paris ', 75011, '114 Boulevard Richard Lenoir', 'SituÃ© Ã  proximitÃ© du Canal Saint-Martin, prÃ¨s du quartier animÃ© de la rue Oberkampf, l''hÃ´tel BEST WESTERN Saint Martin Bastille bÃ©nÃ©ficie d''un emplacement idÃ©al en plein coeur de Paris. Clima', 'bastille.jpg', 'Paris, France'),
(14, 'BEST WESTERN Hotel Eiffel Auteuil, Paris', 75016, '11 Rue Claude Terrasse,\r\n75016', 'L''Ã©tablissement 3 Ã©toiles BEST WESTERN Eiffel Auteuil vous accueille Ã  5 minutes Ã  pied de la station de mÃ©tro Porte de Saint-Cloud, qui relie directement le TrocadÃ©ro et les meilleurs points de', 'boulogne.jpg', 'Paris, France');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`idHotel`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `idHotel` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
