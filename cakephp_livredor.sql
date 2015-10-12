-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Octobre 2015 à 17:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cakephp_livredor`
--

-- --------------------------------------------------------

--
-- Structure de la table `livredors`
--

CREATE TABLE IF NOT EXISTS `livredors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(52) NOT NULL,
  `text` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Contenu de la table `livredors`
--

INSERT INTO `livredors` (`id`, `pseudo`, `text`, `created`, `modified`) VALUES
(156, 'trucbidule', 'test', '2015-09-29 17:13:51', '0000-00-00 00:00:00'),
(155, 'machinchose', 're re re test', '2015-09-29 17:10:22', '0000-00-00 00:00:00'),
(154, 'Bidule', 're re test', '2015-09-29 17:07:21', '0000-00-00 00:00:00'),
(152, 'Truc', 'test', '2015-09-28 13:36:43', '0000-00-00 00:00:00'),
(153, 'Machin', 'Re test', '2015-09-29 16:49:17', '0000-00-00 00:00:00'),
(157, 'retruc', 're test', '2015-09-29 17:14:54', '0000-00-00 00:00:00'),
(158, 'rerebidule', 'test', '2015-09-29 17:16:03', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
