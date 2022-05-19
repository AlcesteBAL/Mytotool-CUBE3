-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 19 mai 2022 à 15:51
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription_connexion_todo`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(8) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `identifiant`, `password`, `mail`) VALUES
(1, 'LukeSky', 'walker', 'lukesky@gmail.com'),
(4, 'bvcb', 'bv', 'bv'),
(2, 'Starlord', 'guardian', 'staguard@gmail.com'),
(5, 'bv', 'bv', 'bv');

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `importance` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `todo`
--

INSERT INTO `todo` (`id`, `titre`, `description`, `status`, `importance`, `user_id`) VALUES
(3, 'projet 1', 'Lorem ipsum', 'en cours', 'fort', NULL),
(4, '', '', '', '', NULL),
(29, '((', '(((', 'a faire', 'urgent', 1),
(5, 'test', 'test', 'test', 'testa', 2),
(6, 'test', 'test', 'test', 'testa', 2),
(32, 'frfrfrfrfr', 'frfrfrf', 'Fini', 'fort', 1),
(31, 'szszszs', 'szsz', 'a faire', 'fort', 1),
(10, 'projet x', '', '', '', 2),
(11, 'preojet t', '', '', '', 2),
(12, 'projtQ', 'fsdjfo', 'DFGFD', '1', 2),
(13, 'tr', 'srtg', 'strr', 'urgent', NULL),
(14, 'qsdfs', 'fsd', 'a faire', 'urgent', NULL),
(15, 'qsdfs', 'fsd', 'a faire', 'urgent', NULL),
(30, '\'\'\'', '\'\'\'', 'en cours', 'urgent', 1),
(28, 'oui', 'oui', 'a faire', 'urgent', 1),
(18, 'sfd', 'fds', 'a faire', 'urgent', 1),
(19, 'dsfs', 'fsd', 'a faire', 'urgent', 1),
(20, 'RTSET', 'SERT', 'a faire', 'urgent', 1),
(21, 'test', 'test', 'en cours', 'faible', 1),
(22, '\'f\'f\'', 'f\'f\'f\'f\'f', 'a faire', 'urgent', 1),
(23, 'f\'f\'f\'f', '\'f\'f\'f\'f\'', 'a faire', 'urgent', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
