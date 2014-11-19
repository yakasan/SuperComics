-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 19 Novembre 2014 à 16:48
-- Version du serveur: 5.5.40-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `SuperComics`
--

-- --------------------------------------------------------

--
-- Structure de la table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` varchar(525) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `card`
--

INSERT INTO `card` (`id`, `name`, `text`, `color`) VALUES
(1, 'connaissances encyclopédiques', 'l''arbitre prononce un mot de son choix .\r\nles adversaires ont 10 secondes pour écrire un mot qui le précédé alphabétiquement.\r\ncelui qui a le mot le plus prés remporte ce duel .\r\nen cas d’égalité , le premier à avoir posé son crayon gagne.', 'green'),
(2, 'super poussée frontale', 'Debout et face a face, les concurrents placent leurs \nmains derrière leur dos après avoir coincé une carte \nentre leurs deux fronts au signal de l''arbitre ils reculent \nlégèrement. Le premier à rattraper la carte ainsi libérée \nRemporte le duel', 'green'),
(3, 'super psuper', 'au signal, chaque concurrent révèle avec ses doigts un\n Nombre compris entre 1 et 3. Le premier à crier le nom du \nHéros correspondant à la somme des doigts remporte ce \nDuel\n2= superman 3=batman 4=spiderman 5=iron man 6=wolverine', 'green'),
(4, 'pouvoir de métamorphose', 'Le concurrent qui imite le mieux le singe remporte ce duel.\nLes autres joueurs jugent', 'green'),
(5, 'super créator', 'chaque concurrent dispose de 30 secondes pour fabriquer\nUn avion avec sa feuille de papier le concurrent dont l''avion\nVole le plus loin remporte le duel', 'green'),
(6, 'super esquive des projectiles', 'les concurrents se livrent à un petit tournoi de limbo. \nVous pouvez employer un manche a balai ou un bout de  \nTissu (une serviette) comme barre. \nCelui qui peut passer le plus bas remporte ce duel', 'green'),
(7, 'perception extrasensorielle', 'les concurrents se livrent à un duel de « roche – papier - ciseaux »\nLe gagnant remporte ce duel', 'green'),
(8, 'pouvoir de métamorphose 2', 'le concurrent qui imite le mieux le premier ministre remporte ce duel.\n Les autres joueurs jugent', 'green'),
(9, 'pouvoir de métamorphose 3', 'le concurrent qui imite le mieux un bébé qui pleure remporte ce duel.  \nLes autres joueurs jugent', 'green'),
(10, 'super projectile', 'le concurrent qui franchit la plus grande distance en lançant une carte\nDe ce jeu remporte ce duel', 'green'),
(11, 'saut prodigieux', 'chaque concurrent saute à pieds joints. Celui qui franchit la plus \nGrande distance remporte ce duel. \nAttention aux risques de chute !', 'green'),
(12, 'super poumons', 'chaque concurrent se pince le nez. Celui qui retient son souffle le plus\nLongtemps remporte ce duel', 'green'),
(13, 'pouvoir de métamorphose 4', 'le concurrent qui imite le mieux le cheval remporte ce duel. \n Les autres joueurs jugent', 'green'),
(14, 'force brute', 'les concurrents se livrent à un bras de fer. \nCelui qui gagne remporte ce duel', 'green');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `max_point` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_player` int(11) NOT NULL,
  `id_round` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `compteur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `player_win`
--

CREATE TABLE IF NOT EXISTS `player_win` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_player` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `round`
--

CREATE TABLE IF NOT EXISTS `round` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_game` int(11) NOT NULL,
  `id_card` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
