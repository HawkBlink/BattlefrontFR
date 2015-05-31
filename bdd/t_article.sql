-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 31 Mai 2015 à 02:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_article`
--

CREATE TABLE IF NOT EXISTS `t_article` (
  `art_title` varchar(100) NOT NULL,
  `art_content` varchar(2000) NOT NULL,
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `t_article`
--

INSERT INTO `t_article` (`art_title`, `art_content`, `art_id`) VALUES
('First article', 'Hi there! This is the very first article.', 1),
('Lorem ipsum in french', 'Lorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in french', 2),
('Lorem ipsum in french', 'Lorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in frenchLorem ipsum in french', 3),
('gsff', 'sdfgsdfg', 5),
('battlefron', 'pesey', 6),
('sdf', 'sfsdf', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
