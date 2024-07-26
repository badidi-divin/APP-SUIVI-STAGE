-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 14 Octobre 2021 à 13:02
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mukonaj`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `motdepasse`) VALUES
(1, 'dany', '123'),
(2, 'julie', '123');

-- --------------------------------------------------------

--
-- Structure de la table `code_entreprises`
--

CREATE TABLE IF NOT EXISTS `code_entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `annee` varchar(11) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `anneecode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(100) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `code_entreprise` varchar(50) NOT NULL,
  `code_entreprise2` varchar(100) NOT NULL,
  `annee_academique` varchar(50) NOT NULL,
  `s1_op` varchar(50) NOT NULL,
  `s1_ponct` varchar(50) NOT NULL,
  `s1_resp` varchar(50) NOT NULL,
  `s1_relat` varchar(50) NOT NULL,
  `s1_adp` varchar(50) NOT NULL,
  `s1_comp` varchar(50) NOT NULL,
  `s1_capa` varchar(50) NOT NULL,
  `s1_langage` varchar(50) NOT NULL,
  `s1_amour` varchar(50) NOT NULL,
  `s1_respb` varchar(50) NOT NULL,
  `s1_sens` varchar(50) NOT NULL,
  `s1_civisme` varchar(50) NOT NULL,
  `s1_total` varchar(50) NOT NULL,
  `s2_op` varchar(50) NOT NULL,
  `s2_ponct` varchar(50) NOT NULL,
  `s2_resp` varchar(50) NOT NULL,
  `s2_relat` varchar(50) NOT NULL,
  `s2_adp` varchar(50) NOT NULL,
  `s2_comp` varchar(50) NOT NULL,
  `s2_capa` varchar(50) NOT NULL,
  `s2_langage` varchar(50) NOT NULL,
  `s2_amour` varchar(50) NOT NULL,
  `s2_respb` varchar(50) NOT NULL,
  `s2_sens` varchar(50) NOT NULL,
  `s2_civisme` varchar(50) NOT NULL,
  `s2_total` varchar(50) NOT NULL,
  `s3_op` varchar(50) NOT NULL,
  `s3_ponct` varchar(50) NOT NULL,
  `s3_resp` varchar(50) NOT NULL,
  `s3_relat` varchar(50) NOT NULL,
  `s3_adp` varchar(50) NOT NULL,
  `s3_comp` varchar(50) NOT NULL,
  `s3_capa` varchar(50) NOT NULL,
  `s3_langage` varchar(50) NOT NULL,
  `s3_amour` varchar(50) NOT NULL,
  `s3_respb` varchar(50) NOT NULL,
  `s3_sens` varchar(50) NOT NULL,
  `s3_civisme` varchar(50) NOT NULL,
  `s3_total` varchar(50) NOT NULL,
  `s4_op` varchar(50) NOT NULL,
  `s4_ponct` varchar(50) NOT NULL,
  `s4_resp` varchar(50) NOT NULL,
  `s4_relat` varchar(50) NOT NULL,
  `s4_adp` varchar(50) NOT NULL,
  `s4_comp` varchar(50) NOT NULL,
  `s4_capa` varchar(50) NOT NULL,
  `s4_langage` varchar(50) NOT NULL,
  `s4_amour` varchar(50) NOT NULL,
  `s4_respb` varchar(50) NOT NULL,
  `s4_sens` varchar(50) NOT NULL,
  `s4_civisme` varchar(50) NOT NULL,
  `s4_total` varchar(50) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `totacote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
