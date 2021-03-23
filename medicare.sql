-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mars 2021 à 19:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `medicare`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'medical123');

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE IF NOT EXISTS `dossier` (
  `Num` int(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `medecinS` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `medecinT` varchar(100) NOT NULL,
  `dateCons` varchar(50) NOT NULL,
  `consultation` varchar(200) NOT NULL,
  `rapport` varchar(500) NOT NULL,
  PRIMARY KEY (`Num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `dossier`
--

INSERT INTO `dossier` (`Num`, `prenom`, `medecinS`, `service`, `medecinT`, `dateCons`, `consultation`, `rapport`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `willaya` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `medecin` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `montant` varchar(500) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `Num` int(100) NOT NULL,
  `dateC` varchar(10) NOT NULL,
  `consult` varchar(400) NOT NULL,
  `rapport` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id`, `Nom`, `prenom`, `birthday`, `lieu`, `adresse`, `ville`, `willaya`, `type`, `medecin`, `service`, `montant`, `user`, `pass`, `Num`, `dateC`, `consult`, `rapport`) VALUES
(1, ' ghomari', 'ikram', '2001-03-07', 'Sidi Bel AbbÃ¨s', 'la macta', 'Sidi Bel AbbÃ¨s', '22-Sidi Bel AbbÃ¨s', 'Femme', 'dr khalid malika', 'Cardiologie Neurologie ', 'Cardiologie: 9700 DA Neurologie: 1500 DA ', 'ikram_gh', 'ika123', 1, '2021-03-26', 'il faut faire 2 consultations', 'le patient est malade'),
(2, ' sekkal', 'schahrazed', '1990-08-26', 'Alger', 'bab zouar', 'Alger', '16-Alger', 'FemmeE', 'Dr Lokmane ', 'Cardiologie Dermatologie ', 'Cardiologie: 9700 DA Dermatologie: 2000 DA ', 'sekkal', 'sch123', 2, '2021-04-07', 'traitement', 'no report');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `numero` int(100) NOT NULL AUTO_INCREMENT,
  `service` varchar(50) NOT NULL,
  `medecinS` varchar(50) NOT NULL,
  `montant` varchar(100) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`numero`, `service`, `medecinS`, `montant`) VALUES
(1, 'Cardiologie', 'Dr Kassem Othmane', '9700 DA'),
(2, 'Neurologie', 'Dr Kacha Samira', '1500 DA'),
(3, 'Infectieux', 'Dr Bouacheria zineb', '1000 DA'),
(4, 'Dermatologie', 'Dr Lokmane ', '2000 DA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
