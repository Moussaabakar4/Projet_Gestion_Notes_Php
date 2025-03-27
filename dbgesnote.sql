-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 04 Décembre 2017 à 08:32
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dbgesnote`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbnote`
--

CREATE TABLE IF NOT EXISTS `tbnote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `codematiere` varchar(30) NOT NULL,
  `controle` decimal(6,2) DEFAULT '555.00',
  `examen` decimal(6,2) DEFAULT NULL,
  `tp` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `tbnote`
--

INSERT INTO `tbnote` (`id`, `matricule`, `nom`, `prenom`, `codematiere`, `controle`, `examen`, `tp`) VALUES
(7, '8023', 'TEDD', 'KENNEDY', 'DRT55', '14.00', '16.00', '0.00'),
(12, '8867', 'MALIK', 'SIMMONS', 'DRT55', '11.00', '12.00', '18.00'),
(14, '8876', 'JULUIS', 'MORPHEUS', 'DRT55', '11.00', '8.00', '15.00'),
(16, '890', 'JEAN-LUC', 'BILODEAU', 'ALP25', '16.50', '11.00', '14.00'),
(18, '543', 'ISSAKA', 'DJIBRINE', 'ALP25', '12.00', '8.00', '13.00'),
(19, '788', 'ABDOULAYE', 'SEID', 'INM15', '12.00', '0.00', '0.00'),
(20, '708', 'ARSENE', 'ASKEIN', 'INM15', '14.00', '0.00', '0.00'),
(21, '748', 'LASSIMINGUE', 'YVES', 'INM15', '11.00', '0.00', '0.00'),
(22, '745', 'OUMAR', 'ABDELAZIZ', 'INM15', '13.00', '0.00', '0.00'),
(23, '746', 'TARGOTO', 'CHRISTIAN', 'INM15', '10.00', '0.00', '0.00'),
(24, '776', 'KAGONBE', 'BRUNO', 'INM15', '16.00', '0.00', '0.00'),
(25, '775', 'DJERAYOM', 'NECTO', 'INM15', '11.00', '0.00', '0.00'),
(26, '8855', 'MAHAT', 'ADOUM YACOUB', 'INM15', '11.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `actif` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `login`, `password`, `actif`) VALUES
(1, 'ginfo', 'admin-ginf', 1),
(2, 'gelec', 'ad-gelec', 1),
(3, 'gemeca', 'admin-gemeca', 1),
(4, 'generg', 'admin-gener', 1),
(5, 'telecom', 'admin-tele', 1),
(6, 'sbmpha', 'admin-sp', 1),
(7, 'stech', 'admin-ste', 1),
(8, 'chris', '1234', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `actif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `tb_user`
--

INSERT INTO `tb_user` (`id`, `login`, `password`, `actif`) VALUES
(1, 'chris', '1234', 1),
(2, 'ali', '1928', 1),
(3, 'franck', '0202', 1),
(4, 'wappy', '0707', 1),
(5, 'genie', '1992', 1),
(6, 'informatique', '2014', 1),
(7, 'lagartha', 'lothbrok', 1),
(8, 'kriskross', 'g-inf', 1),
(9, 'turbo', 'g-mec', 1),
(10, 'bacterie', 'passbm', 1),
(11, 'cable', 'g-elec', 1),
(12, 'moteur', 'g-meca', 1),
(13, 'panno', 'g-ener', 1),
(14, 'phone', 'tele-com', 1),
(15, 'boeuf', 'ste-ani', 1),
(16, 'chris', 'g-inf', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
