-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 16 Décembre 2012 à 21:47
-- Version du serveur: 5.5.28
-- Version de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet1_stages`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE IF NOT EXISTS `demandes` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `eeid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `statut` enum('refus','acceptation') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `demandes`
--

INSERT INTO `demandes` (`did`, `eid`, `eeid`, `sid`, `statut`) VALUES
(1, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE IF NOT EXISTS `entreprises` (
  `eeid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nomC` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `prenomC` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `emailC` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `telC` varchar(15) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`eeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `entreprises`
--

INSERT INTO `entreprises` (`eeid`, `nom`, `nomC`, `prenomC`, `emailC`, `telC`) VALUES
(1, 'admin', 'admin', 'admin', '', ''),
(2, 'Aviva', 'Arthein', 'Yann', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `eid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`eid`, `nom`, `prenom`, `email`, `fid`) VALUES
(1, 'RONNY', 'Chris', 'ronny@yahoo.fr', 0),
(2, 'RONNY', 'Chris', '', 0),
(3, 'ddee', 'ddcec', '', 1),
(4, 'Eto''o', 'Samuel', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE IF NOT EXISTS `filieres` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_general_ci NOT NULL COMMENT 'Informatique',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `filieres`
--

INSERT INTO `filieres` (`fid`, `nom`) VALUES
(1, 'Informatique'),
(2, 'Droit'),
(3, 'efde'),
(4, 'efzerz');

-- --------------------------------------------------------

--
-- Structure de la table `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eeid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `titre` text COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `stages`
--

INSERT INTO `stages` (`sid`, `eeid`, `fid`, `cid`, `titre`, `description`) VALUES
(1, 0, 0, 0, 'Resaux', 'Ce stage est reserve aux informaticiens'),
(2, 0, 0, 0, 'Droit', 'Ce stage est reserve aux etudiants de droit'),
(3, 0, 0, 0, 'Reseaux', ',k,cfk,z,k,e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
