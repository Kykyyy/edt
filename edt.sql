-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 06 Juin 2013 à 10:07
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `edt`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE IF NOT EXISTS `batiment` (
  `id_bat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_bat` varchar(32) NOT NULL,
  PRIMARY KEY (`id_bat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

CREATE TABLE IF NOT EXISTS `creneau` (
  `id_promo` int(11) NOT NULL,
  `id_type_creneau` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `plage_horaire` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_ec` int(11) NOT NULL,
  `etat` varchar(32) NOT NULL,
  KEY `id_promo` (`id_promo`),
  KEY `id_type_creneau` (`id_type_creneau`),
  KEY `id_salle` (`id_salle`),
  KEY `plage_horaire` (`plage_horaire`),
  KEY `id_enseignant` (`id_enseignant`),
  KEY `id_ec` (`id_ec`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `date` date NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ec`
--

CREATE TABLE IF NOT EXISTS `ec` (
  `id_ec` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ec` varchar(32) NOT NULL,
  PRIMARY KEY (`id_ec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `id_enseignant` int(11) NOT NULL AUTO_INCREMENT,
  `nom_enseignant` varchar(50) NOT NULL,
  `prenom_ens` varchar(32) NOT NULL,
  `date_naissance_ens` date NOT NULL,
  `cv` varchar(32) NOT NULL,
  `id_numtypeposte` int(11) NOT NULL,
  PRIMARY KEY (`id_enseignant`),
  KEY `id_numtypeposte` (`id_numtypeposte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id_enseignant`, `nom_enseignant`, `prenom_ens`, `date_naissance_ens`, `cv`, `id_numtypeposte`) VALUES
(1, 'Laurent', 'Pierre', '0000-00-00', 'www.posteCV.com', 1),
(2, 'Doub', 'Piah', '0000-00-00', 'www.test.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_ec`
--

CREATE TABLE IF NOT EXISTS `enseignant_ec` (
  `id_enseignant` int(11) NOT NULL,
  `id_ec` int(11) NOT NULL,
  KEY `id_enseignant` (`id_enseignant`),
  KEY `id_ec` (`id_ec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_de_voeu`
--

CREATE TABLE IF NOT EXISTS `fiche_de_voeu` (
  `plage_horaire` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `commentaire_fiche` varchar(32) NOT NULL,
  KEY `plage_horaire` (`plage_horaire`),
  KEY `date` (`date`),
  KEY `id_enseignant` (`id_enseignant`),
  KEY `date_2` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_formation` varchar(32) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom_formation`) VALUES
(1, 'MIAGE');

-- --------------------------------------------------------

--
-- Structure de la table `formation_ue_ec`
--

CREATE TABLE IF NOT EXISTS `formation_ue_ec` (
  `id_formation` int(11) NOT NULL,
  `id_ue` int(11) NOT NULL,
  `id_ec` int(11) NOT NULL,
  `nb_heure_cm` int(11) NOT NULL,
  `nb_heure_td` int(11) NOT NULL,
  `coefficient` int(11) NOT NULL,
  KEY `id_formation` (`id_formation`),
  KEY `id_ue` (`id_ue`),
  KEY `id_ec` (`id_ec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `grade_niveau`
--

CREATE TABLE IF NOT EXISTS `grade_niveau` (
  `id_grade_formation` int(11) NOT NULL AUTO_INCREMENT,
  `lib_grade_formation` varchar(32) NOT NULL,
  PRIMARY KEY (`id_grade_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `grade_niveau`
--

INSERT INTO `grade_niveau` (`id_grade_formation`, `lib_grade_formation`) VALUES
(1, 'L3'),
(2, 'M1');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE IF NOT EXISTS `parcours` (
  `id_parcours` int(11) NOT NULL AUTO_INCREMENT,
  `lib_parcours` varchar(32) NOT NULL,
  PRIMARY KEY (`id_parcours`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `parcours`
--

INSERT INTO `parcours` (`id_parcours`, `lib_parcours`) VALUES
(1, 'Apprentissage'),
(2, 'Classique');

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `lib_periode` varchar(32) NOT NULL,
  `date_debut_periode` date NOT NULL,
  `date_fin_periode` date NOT NULL,
  `id_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_periode`),
  KEY `id_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `plage_horaire`
--

CREATE TABLE IF NOT EXISTS `plage_horaire` (
  `id_plage_horaire` int(11) NOT NULL AUTO_INCREMENT,
  `h_debut` time NOT NULL,
  `h_fin` time NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`id_plage_horaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `plage_horaire`
--

INSERT INTO `plage_horaire` (`id_plage_horaire`, `h_debut`, `h_fin`, `duree`) VALUES
(1, '16:00:00', '17:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promotion` int(11) NOT NULL AUTO_INCREMENT,
  `annee_promo` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  `id_parcours` int(11) NOT NULL,
  `id_grade_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_promotion`),
  KEY `id_formation` (`id_formation`),
  KEY `id_parcours` (`id_parcours`),
  KEY `id_grade_formation` (`id_grade_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `annee_promo`, `id_formation`, `id_parcours`, `id_grade_formation`) VALUES
(2, 2013, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(32) NOT NULL,
  `capacite_salle` int(11) NOT NULL,
  `id_bat` int(11) NOT NULL,
  `id_type_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_salle`),
  UNIQUE KEY `id_bat_2` (`id_bat`),
  KEY `id_bat` (`id_bat`),
  KEY `id_type_salle` (`id_type_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_creneau`
--

CREATE TABLE IF NOT EXISTS `type_creneau` (
  `id_type_creneau` int(11) NOT NULL AUTO_INCREMENT,
  `lib_type_creneau` varchar(32) NOT NULL,
  PRIMARY KEY (`id_type_creneau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_poste`
--

CREATE TABLE IF NOT EXISTS `type_poste` (
  `id_numtypeposte` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(32) NOT NULL,
  `nb_heures` int(11) NOT NULL,
  PRIMARY KEY (`id_numtypeposte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `type_poste`
--

INSERT INTO `type_poste` (`id_numtypeposte`, `description`, `nb_heures`) VALUES
(1, 'Secrétaire', 0),
(2, 'Responsable de formation', 0),
(3, 'Intervenants', 0),
(4, 'Chargé de mission CFA', 0),
(5, 'Etudiant', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_salle`
--

CREATE TABLE IF NOT EXISTS `type_salle` (
  `id_type_salle` int(11) NOT NULL AUTO_INCREMENT,
  `lib_type_salle` varchar(32) NOT NULL,
  PRIMARY KEY (`id_type_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

CREATE TABLE IF NOT EXISTS `ue` (
  `id_ue` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ue` varchar(32) NOT NULL,
  `quota_horaire_ue` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  PRIMARY KEY (`id_ue`),
  KEY `id_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(50) NOT NULL,
  `prenom_u` varchar(32) NOT NULL,
  `id_type_poste` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_type_poste` (`id_type_poste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `creneau_ibfk_8` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `creneau_ibfk_1` FOREIGN KEY (`id_promo`) REFERENCES `promotion` (`id_promotion`),
  ADD CONSTRAINT `creneau_ibfk_2` FOREIGN KEY (`id_type_creneau`) REFERENCES `type_creneau` (`id_type_creneau`),
  ADD CONSTRAINT `creneau_ibfk_3` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `creneau_ibfk_4` FOREIGN KEY (`plage_horaire`) REFERENCES `plage_horaire` (`id_plage_horaire`),
  ADD CONSTRAINT `creneau_ibfk_6` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`),
  ADD CONSTRAINT `creneau_ibfk_7` FOREIGN KEY (`id_ec`) REFERENCES `ec` (`id_ec`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`id_numtypeposte`) REFERENCES `type_poste` (`id_numtypeposte`);

--
-- Contraintes pour la table `enseignant_ec`
--
ALTER TABLE `enseignant_ec`
  ADD CONSTRAINT `enseignant_ec_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`),
  ADD CONSTRAINT `enseignant_ec_ibfk_2` FOREIGN KEY (`id_ec`) REFERENCES `ec` (`id_ec`);

--
-- Contraintes pour la table `fiche_de_voeu`
--
ALTER TABLE `fiche_de_voeu`
  ADD CONSTRAINT `fiche_de_voeu_ibfk_4` FOREIGN KEY (`date`) REFERENCES `date` (`date`),
  ADD CONSTRAINT `fiche_de_voeu_ibfk_1` FOREIGN KEY (`plage_horaire`) REFERENCES `plage_horaire` (`id_plage_horaire`),
  ADD CONSTRAINT `fiche_de_voeu_ibfk_3` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`);

--
-- Contraintes pour la table `formation_ue_ec`
--
ALTER TABLE `formation_ue_ec`
  ADD CONSTRAINT `formation_ue_ec_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `formation_ue_ec_ibfk_2` FOREIGN KEY (`id_ue`) REFERENCES `ue` (`id_ue`),
  ADD CONSTRAINT `formation_ue_ec_ibfk_3` FOREIGN KEY (`id_ec`) REFERENCES `ec` (`id_ec`);

--
-- Contraintes pour la table `periode`
--
ALTER TABLE `periode`
  ADD CONSTRAINT `periode_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_5` FOREIGN KEY (`id_grade_formation`) REFERENCES `grade_niveau` (`id_grade_formation`),
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `promotion_ibfk_4` FOREIGN KEY (`id_parcours`) REFERENCES `parcours` (`id_parcours`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`id_type_salle`) REFERENCES `type_salle` (`id_type_salle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salle_ibfk_2` FOREIGN KEY (`id_bat`) REFERENCES `salle` (`id_bat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ue`
--
ALTER TABLE `ue`
  ADD CONSTRAINT `ue_ibfk_2` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_type_poste`) REFERENCES `type_poste` (`id_numtypeposte`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
