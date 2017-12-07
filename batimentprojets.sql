-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Octobre 2017 à 13:34
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `batimentprojets`
--

-- --------------------------------------------------------

--
-- Structure de la table `etapes_projet`
--

CREATE TABLE `etapes_projet` (
  `id` int(11) NOT NULL,
  `nometape` varchar(255) NOT NULL,
  `idprojet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etapes_projet`
--

INSERT INTO `etapes_projet` (`id`, `nometape`, `idprojet`) VALUES
(1, 'pose echaffaudage', 1),
(2, 'fondation', 1),
(3, 'construction des mûr', 1),
(11, 'etape thomas', 1),
(12, 'ttttttttt', 1),
(13, 'ttttttttt', 1),
(14, 'ttttttttt', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nomclient` varchar(11) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_rendu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `nomclient`, `date_debut`, `date_rendu`) VALUES
(1, 'construction clinique', 'david', '2017-09-30', '2017-12-30'),
(2, 'construction_immeuble', 'thomas', '2017-10-11', '2018-02-14'),
(3, 'construction maison', 'jean', '2017-11-17', '2018-01-25');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(11) NOT NULL,
  `idprojet` int(11) NOT NULL,
  `nomtache` text NOT NULL,
  `idetape` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `taches`
--

INSERT INTO `taches` (`id`, `idprojet`, `nomtache`, `idetape`) VALUES
(1, 1, 'pose1', 1),
(2, 1, 'pose2', 1),
(12, 1, 'tache-10', 2),
(13, 1, 'tache-12', 2),
(18, 1, 'tacheetape1', 1),
(23, 1, 'tache-1-etape3', 3),
(25, 1, 'etape-1-tache5', 1),
(26, 1, 'etape-1-tache8', 1),
(27, 1, 'etape-1-tache9', 1),
(28, 1, 'etape-1-tache10', 1),
(29, 1, 'etape-tache3', 2),
(30, 1, 'tache-2-etape3', 3),
(31, 1, 'tache-3-etape4', 3),
(32, 1, 'tache-3-etape8', 3),
(33, 1, 'tache-5etape3', 3),
(34, 1, 'tache-25-etape2', 2),
(35, 1, 'etpae-1-tache-16', 1),
(36, 1, 'etpae-1-tache-17', 1),
(37, 1, 'etpae-1-tache-19', 1),
(38, 1, 'tachqcq', 1),
(39, 1, 'tachqcqq', 1),
(40, 1, 'etape-3teche15', 3),
(41, 1, 'etape-3teche15', 3),
(42, 1, 'gdffq', 2),
(43, 1, 'tache-5', 3),
(44, 1, 'tache-5', 3),
(45, 1, 'tache-5', 3),
(46, 1, 'tache-5', 3),
(47, 1, 'qxc', 1),
(48, 1, 'qxc', 1),
(49, 1, 'tache-thomas-1', 11),
(50, 1, 'tache-thomas-1', 11),
(51, 1, 'thomas-t1', 11),
(52, 1, 'thomas-t1', 11),
(53, 1, 'tachettttt', 12),
(54, 1, 'tachettttt', 12);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etapes_projet`
--
ALTER TABLE `etapes_projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etapes_projet`
--
ALTER TABLE `etapes_projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
