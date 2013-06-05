-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 28 Mai 2013 à 09:56
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
  `id_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_bat`),
  KEY `id_salle` (`id_salle`)
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
  `date` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `id_ec` int(11) NOT NULL,
  `etat` varchar(32) NOT NULL,
  KEY `id_promo` (`id_promo`),
  KEY `id_type_creneau` (`id_type_creneau`),
  KEY `id_salle` (`id_salle`),
  KEY `plage_horaire` (`plage_horaire`),
  KEY `date` (`date`),
  KEY `id_enseignant` (`id_enseignant`),
  KEY `id_ec` (`id_ec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `id_date` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `prenom_ens` varchar(32) NOT NULL,
  `date_naissance_ens` date NOT NULL,
  `cv` varchar(32) NOT NULL,
  PRIMARY KEY (`id_enseignant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `date` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `commentaire_fiche` varchar(32) NOT NULL,
  KEY `plage_horaire` (`plage_horaire`),
  KEY `date` (`date`),
  KEY `id_enseignant` (`id_enseignant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_formation` varchar(32) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_periode` (`id_periode`),
  KEY `id_promo` (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Structure de la table `grade_formation`
--

CREATE TABLE IF NOT EXISTS `grade_formation` (
  `id_grade_niveau` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  KEY `id_grade_niveau` (`id_grade_niveau`),
  KEY `id_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `grade_niveau`
--

CREATE TABLE IF NOT EXISTS `grade_niveau` (
  `id_grade_formation` int(11) NOT NULL AUTO_INCREMENT,
  `lib_grade_formation` varchar(32) NOT NULL,
  PRIMARY KEY (`id_grade_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE IF NOT EXISTS `parcours` (
  `id_parcours` int(11) NOT NULL AUTO_INCREMENT,
  `lib_parcours` varchar(32) NOT NULL,
  PRIMARY KEY (`id_parcours`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `parcours_formation`
--

CREATE TABLE IF NOT EXISTS `parcours_formation` (
  `id_parcours` int(11) NOT NULL,
  `id_formation` int(11) NOT NULL,
  KEY `id_parcours` (`id_parcours`),
  KEY `id_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `lib_periode` varchar(32) NOT NULL,
  `date_debut_periode` date NOT NULL,
  `date_fin_periode` date NOT NULL,
  `id_ue` int(11) NOT NULL,
  PRIMARY KEY (`id_periode`),
  KEY `id_ue` (`id_ue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `plage_horaire`
--

CREATE TABLE IF NOT EXISTS `plage_horaire` (
  `id_plage_horaire` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_plage_horaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promotion` int(11) NOT NULL AUTO_INCREMENT,
  `annee_promo` int(11) NOT NULL,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(32) NOT NULL,
  `capacite_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_salle`)
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
  `id_enseignant` int(11) NOT NULL,
  PRIMARY KEY (`id_numtypeposte`),
  KEY `id_enseignant` (`id_enseignant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `type_salle`
--

CREATE TABLE IF NOT EXISTS `type_salle` (
  `id_type_salle` int(11) NOT NULL AUTO_INCREMENT,
  `lib_type_salle` varchar(32) NOT NULL,
  `id_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_type_salle`),
  KEY `id_salle` (`id_salle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

CREATE TABLE IF NOT EXISTS `ue` (
  `id_ue` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ue` varchar(32) NOT NULL,
  `quota_horaire_ue` int(11) NOT NULL,
  PRIMARY KEY (`id_ue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD CONSTRAINT `batiment_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `creneau_ibfk_1` FOREIGN KEY (`id_promo`) REFERENCES `promotion` (`id_promotion`),
  ADD CONSTRAINT `creneau_ibfk_2` FOREIGN KEY (`id_type_creneau`) REFERENCES `type_creneau` (`id_type_creneau`),
  ADD CONSTRAINT `creneau_ibfk_3` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `creneau_ibfk_4` FOREIGN KEY (`plage_horaire`) REFERENCES `plage_horaire` (`id_plage_horaire`),
  ADD CONSTRAINT `creneau_ibfk_5` FOREIGN KEY (`date`) REFERENCES `date` (`id_date`),
  ADD CONSTRAINT `creneau_ibfk_6` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`),
  ADD CONSTRAINT `creneau_ibfk_7` FOREIGN KEY (`id_ec`) REFERENCES `ec` (`id_ec`);

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
  ADD CONSTRAINT `fiche_de_voeu_ibfk_1` FOREIGN KEY (`plage_horaire`) REFERENCES `plage_horaire` (`id_plage_horaire`),
  ADD CONSTRAINT `fiche_de_voeu_ibfk_2` FOREIGN KEY (`date`) REFERENCES `date` (`id_date`),
  ADD CONSTRAINT `fiche_de_voeu_ibfk_3` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`),
  ADD CONSTRAINT `formation_ibfk_2` FOREIGN KEY (`id_promo`) REFERENCES `promotion` (`id_promotion`);

--
-- Contraintes pour la table `formation_ue_ec`
--
ALTER TABLE `formation_ue_ec`
  ADD CONSTRAINT `formation_ue_ec_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `formation_ue_ec_ibfk_2` FOREIGN KEY (`id_ue`) REFERENCES `ue` (`id_ue`),
  ADD CONSTRAINT `formation_ue_ec_ibfk_3` FOREIGN KEY (`id_ec`) REFERENCES `ec` (`id_ec`);

--
-- Contraintes pour la table `grade_formation`
--
ALTER TABLE `grade_formation`
  ADD CONSTRAINT `grade_formation_ibfk_1` FOREIGN KEY (`id_grade_niveau`) REFERENCES `grade_niveau` (`id_grade_formation`),
  ADD CONSTRAINT `grade_formation_ibfk_2` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`);

--
-- Contraintes pour la table `parcours_formation`
--
ALTER TABLE `parcours_formation`
  ADD CONSTRAINT `parcours_formation_ibfk_1` FOREIGN KEY (`id_parcours`) REFERENCES `parcours` (`id_parcours`),
  ADD CONSTRAINT `parcours_formation_ibfk_2` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`);

--
-- Contraintes pour la table `periode`
--
ALTER TABLE `periode`
  ADD CONSTRAINT `periode_ibfk_1` FOREIGN KEY (`id_ue`) REFERENCES `ue` (`id_ue`);

--
-- Contraintes pour la table `type_poste`
--
ALTER TABLE `type_poste`
  ADD CONSTRAINT `type_poste_ibfk_1` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`);

--
-- Contraintes pour la table `type_salle`
--
ALTER TABLE `type_salle`
  ADD CONSTRAINT `type_salle_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
