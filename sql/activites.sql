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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`idActivite`, `nomActivite`, `descriptionActivite`, `tarifActivite`, `idHotel`, `imageActivite`, `localisation`, `adresseActivite`, `villeEtPaysActivite`, `imageActivite2`, `imageActivite3`, `idCategorie`) VALUES
(6, 'Donato', 'Un mot sur le restaurant Donato\r\n\r\nSPÃ‰CIALISTE ITALIENNE â€“ Proposant des produits frais, ce restaurant met Ã  votre disposition une cuisine typiquement italienne. Les repas y sont vraiment succulents et la carte est bien fournie. \r\n\r\nJOL', '15-30â‚¬', 13, 'restaurant_italien_barocco_61.jpg\r\n', '', '5 Passage Cardinet 75001', 'Paris,France', 'pate.jpg', 'pate2.jpg', 1),
(7, 'Pizza Oro', 'Un mot sur le restaurant Pizza Oro\r\n\r\nDANS LE 16E - Le restaurant Pizza Oro se trouve au 59 Rue de Boulainvilliers dans le 16e arrondissement de Paris, juste Ã  cÃ´tÃ© du jardin de Ranelagh, du mÃ©tro La Muette et de la station Boulainvilli', '20-40â‚¬', 14, '1.jpg', '', '59 Rue de Boulainvilliers 75016 ', 'Paris,France', '2.jpg', '3.jpg', 1),
(8, 'Pavillon ElysÃ©e CafÃ© LenÃ´tre', 'Un mot sur le restaurant Pavillon ElysÃ©e CafÃ© LenÃ´tre\r\n\r\nUn lieu culte dÃ©diÃ© Ã  la gastronomie. CrÃ©Ã© en 1900 pour l''exposition universelle face au Grand Palais, le Pavillon ElysÃ©e LenÃ´tre a Ã©tÃ© entiÃ¨rement repensÃ© en 2003 avec ', '30-60â‚¬', 12, '7.jpg', '', '10, avenue des Champs ElysÃ©es 75008 ', 'Paris,France', '5.jpg', '6.jpg', 2),
(9, 'Le CÃ¨dre ', 'BALLADE AU LIBAN - Venez donc dÃ©guster les spÃ©cialitÃ©s libanaises. SituÃ© Ã  proximitÃ© de la Bastille Ã  Paris, le restaurant Les Passagers de Beyrouth accueille ses hÃ´tes pour un voyage gustatif inoubliable. Une cuisine traditionnelle', '10-40â‚¬', 10, '8.jpg', '', '4 bd RÃ©publique, 71100 CHALON SUR SAÃ”NE', 'Chalon sur Saone', '9.jpg', '10.jpg', 3),
(10, 'Magokoro', 'Un mot sur le restaurant Magokoro\r\n\r\nSERVICE SOURIRE - Dans la petite salle de Magokoro, cantine de poche japonaise en plein cÅ“ur du 9Ã¨me arrondissement, Jacky et son Ã©pouse vous reÃ§oivent aux petits oignons. Avec son ambiance zen et se', '20-70â‚¬', 12, '11.jpg', '', '33, rue Lamartine 75009', 'Paris, France', '12.jpg', '13.jpg', 4),
(11, 'Tang - Charly Tang', 'Un mot sur le restaurant Tang - Charly Tang\r\n\r\nFUSION ASIATIQUE - En plein coeur du 16Ã¨me arrondissement de Paris, Ã  deux pas du TrocadÃ©ro, venez apprÃ©cier chez Tang la haute gastronomie chinoise. DÃ©gustez les grands standards revus pa', '10-40â‚¬', 14, '14.jpg', '', '125, rue de la Tour 75116 ', 'Paris, France', '15.jpg', '16.jpg', 5),
(12, 'Le siroquo - Restaurant Marocain Ã  Paris', 'Un restaurant marocain Ã  Paris\r\n\r\nC''est une vÃ©ritable invitation au voyage culinaire, que vous propose le restaurant marocain le Sirocco rue des gobelins Ã  Paris.\r\n\r\nVous serez accueillis avec chaleur dans un authentique cadre oriental, ', '20-60â‚¬', 13, '17.jpg', '', '8, Bis rue des Gobelins, 75013 Paris', 'Paris, France', '16.jpg', '18.jpg', 6),
(13, 'Les Souvenirs De Paris', 'Ce magasin de cadeaux et souvenirs propose un choix d''objets axÃ©s sur Paris, comme des magnets ou des sacs.', '5-100â‚¬', 14, '19.jpg', '', '103 Quai Branly, 75015', 'Paris, France', '20.jpg', '21.jpg', 12),
(14, 'MusÃ©e du Louvre ', 'Le musÃ©e du Louvre est un musÃ©e d''art et d''antiquitÃ©s situÃ© au centre de Paris dans le palais du Louvre.', '10-30â‚¬', 12, '23.jpg', '', 'lignes 1 station Palais-Royal musÃ©e du Louvre', 'Paris, France', '22.jpg', '24.jpg', 14),
(15, 'MusÃ©e d''Orsay', 'Le musÃ©e dâ€™Orsay est un musÃ©e national situÃ© dans le 7áµ‰ arrondissement de Paris, le long de la rive gauche de la Seine, inaugurÃ© en 1986 aprÃ¨s le rÃ©amÃ©nagement de l''ancienne gare d''Orsay, construite par Victor Laloux de 1898 Ã  1', '10-30â‚¬', 13, '27.jpg', '', '1 Rue de la LÃ©gion d''Honneur, 75007', 'Paris, France', '26.jpg', '25.jpg', 14),
(17, 'MusÃ©e GrÃ©vin', 'Le musÃ©e GrÃ©vin est un musÃ©e de cire privÃ© situÃ© dans le 9áµ‰ arrondissement de Paris, en France, et dans lequel sont regroupÃ©es des reproductions en cire de personnages cÃ©lÃ¨bres.', '5-15â‚¬', 10, '29.jpg', '', '10 Boulevard Montmartre, 75009', 'Paris, France', '', '', 14);

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
  MODIFY `idActivite` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
