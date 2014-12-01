-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 26 Novembre 2014 à 09:53
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
  `used` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(525) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `card`
--

INSERT INTO `card` (`id`, `used`, `name`, `text`, `color`) VALUES
(1, 0, 'connaissances encyclopédiques', 'l''arbitre prononce un mot de son choix .\r\nles adversaires ont 10 secondes pour écrire un mot qui le précédé alphabétiquement.\r\ncelui qui a le mot le plus prés remporte ce duel .\r\nen cas d’égalité , le premier à avoir posé son crayon gagne.', 'green'),
(2, 0, 'super poussée frontale', 'Debout et face a face, les concurrents placent leurs \nmains derrière leur dos après avoir coincé une carte \nentre leurs deux fronts au signal de l''arbitre ils reculent \nlégèrement. Le premier à rattraper la carte ainsi libérée \nRemporte le duel', 'green'),
(3, 0, 'super psuper', 'au signal, chaque concurrent révèle avec ses doigts un\n Nombre compris entre 1 et 3. Le premier à crier le nom du \nHéros correspondant à la somme des doigts remporte ce \nDuel\n2= superman 3=batman 4=spiderman 5=iron man 6=wolverine', 'green'),
(4, 0, 'pouvoir de métamorphose', 'Le concurrent qui imite le mieux le singe remporte ce duel.\nLes autres joueurs jugent', 'green'),
(5, 0, 'super créator', 'chaque concurrent dispose de 30 secondes pour fabriquer\nUn avion avec sa feuille de papier le concurrent dont l''avion\nVole le plus loin remporte le duel', 'green'),
(6, 0, 'super esquive des projectiles', 'les concurrents se livrent à un petit tournoi de limbo. \nVous pouvez employer un manche a balai ou un bout de  \nTissu (une serviette) comme barre. \nCelui qui peut passer le plus bas remporte ce duel', 'green'),
(7, 0, 'perception extrasensorielle', 'les concurrents se livrent à un duel de « roche – papier - ciseaux »\nLe gagnant remporte ce duel', 'green'),
(8, 0, 'pouvoir de métamorphose 2', 'le concurrent qui imite le mieux le premier ministre remporte ce duel.\n Les autres joueurs jugent', 'green'),
(9, 0, 'pouvoir de métamorphose 3', 'le concurrent qui imite le mieux un bébé qui pleure remporte ce duel.  \nLes autres joueurs jugent', 'green'),
(10, 0, 'super projectile', 'le concurrent qui franchit la plus grande distance en lançant une carte\nDe ce jeu remporte ce duel', 'green'),
(11, 0, 'saut prodigieux', 'chaque concurrent saute à pieds joints. Celui qui franchit la plus \nGrande distance remporte ce duel. \nAttention aux risques de chute !', 'green'),
(12, 0, 'super poumons', 'chaque concurrent se pince le nez. Celui qui retient son souffle le plus\nLongtemps remporte ce duel', 'green'),
(13, 0, 'pouvoir de métamorphose 4', 'le concurrent qui imite le mieux le cheval remporte ce duel. \n Les autres joueurs jugent', 'green'),
(14, 0, 'force brute', 'les concurrents se livrent à un bras de fer. \nCelui qui gagne remporte ce duel', 'green'),
(15, 0, 'super sauvetage', 'le premier concurrent qui serre dans ses bras la plus grande personne présente (autre qu''un concurrent) remporte ce duel.', 'orange'),
(16, 0, 'super endurance a la douleur', 'le premier concurrent qui s''arrche un cheveux remporte ce duel.', 'orange'),
(17, 0, 'super rédaction', 'le premier concurrent a écrire toutes les lettres de l''alphabet selon l''ordre inverse (en commencant par z), sans utiliser d''aide mémoire, remporte ce duel.', 'orange'),
(18, 0, 'super gadget', 'lisez cette phrase clairement et rapidement aux concurrents : « le premier concurrent qui insère une carte dans son pantalon (ou sa jupe!) et la fait ressortir par le bas remporte ce duel. »', 'orange'),
(19, 0, 'super connaissances', 'le premier concurrent qui rédige une liste de trois filmsayant remporté l''oscar, le césar ou le jutra du meilleur film remporte ce duel', 'orange'),
(20, 0, 'super sauvetage', 'le premier concurrent qui serre dans ses bras la plus petite personne présente (autre qu''un concurrent) remporte ce duel.', 'orange'),
(21, 0, 'super fessier ', 'lisez cette phrase clairement et rapidement aux concurrents : «  le premier concurrent qui fait un tour assis par terre sur ses fesses remporte ce duel. »', 'orange'),
(22, 0, 'super dactylo', 'le premier concurrent a rédiger lisiblement 6 fois la phrase suivante remporte ce duel. « je suis le plus rapide de tous ! ».', 'orange'),
(23, 0, 'super connaissances', 'lisez cette phrase clairement et rapidement aux concurrents : «  le premier concurrent qui trouve un mot contenant la premiere lettre du prénom des deux concurrents remporte ce duel ».', 'orange'),
(24, 0, 'super sauvetage', 'le premier concurrent qui souleve un autre joueur dans ses bras remporte ce duel.', 'orange'),
(25, 0, 'super connaissances', 'le premier concurrent qui rédige une liste de 4 jeux de société remporte ce duel.', 'orange'),
(26, 0, 'changement de costume', 'le premier concurrent qui retire ses chaussettes remporte ce duel.', ''),
(27, 0, 'pouvoir supra rotator', 'lisez cette phrase clairement et rapidement aux concurrents : « chaque concurrent pose sa main droite sur le sol et en fait le tour, puis fait de meme avec sa main gauche. Le premier revenu debout remporte ce duel. »', ''),
(28, 0, 'connaissances astrales', 'lisez cette phrase clairement et rapidement aux concurrents : « de quel signe du zodiaque seriez-vous si vous naissiez aujourd''hui ? ». le premier qui a la bonne réponse remporte ce duel.', '');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `max_point` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `game`
--

INSERT INTO `game` (`id`, `max_point`) VALUES
(1, 5);

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
  `compteur` int(11) DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Contenu de la table `player`
--

INSERT INTO `player` (`id`, `pseudo`, `compteur`, `checked`) VALUES
(3, 'BadCatin', 0, 1),
(4, 'yaka', 1, 1),
(5, 'badPute', 0, 1),
(6, 'superPoulet', 0, 1),
(7, 'captain LowD', 0, 1),
(8, 'superpute', 0, 0),
(9, 'supercatin', 0, 0),
(10, 'superNoob', 0, 0),
(11, 'Badguys', 0, 0),
(14, 'raslecul', 0, 0),
(64, 'pupute', 0, 0),
(67, 'Capitaine Chiottes', 0, 0),
(68, 'Super-Chiottes', 0, 0),
(69, 'glauque man', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `player_win`
--

CREATE TABLE IF NOT EXISTS `player_win` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `date_win` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `player_win`
--

INSERT INTO `player_win` (`id`, `pseudo`, `date_win`) VALUES
(1, 'super poulet loose', '2014-11-30 00:00:00'),
(19, 'BadCatin', '26-11-2014'),
(20, 'glauque man', '26-11-2014');

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
