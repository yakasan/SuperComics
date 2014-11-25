-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 25 Novembre 2014 à 09:53
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

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
(14, 'force brute', 'les concurrents se livrent à un bras de fer. \nCelui qui gagne remporte ce duel', 'green'),
(15, 'super sauvetage', 'le premier concurrent qui serre dans ses bras la plus grande personne présente (autre qu''un concurrent) remporte ce duel.', 'orange'),
(16, 'super endurance a la douleur', 'le premier concurrent qui s''arrche un cheveux remporte ce duel.', 'orange'),
(17, 'super rédaction', 'le premier concurrent a écrire toutes les lettres de l''alphabet selon l''ordre inverse (en commencant par z), sans utiliser d''aide mémoire, remporte ce duel.', 'orange'),
(18, 'super gadget', 'lisez cette phrase clairement et rapidement aux concurrents : « le premier concurrent qui insère une carte dans son pantalon (ou sa jupe!) et la fait ressortir par le bas remporte ce duel. »', 'orange'),
(19, 'super connaissances', 'le premier concurrent qui rédige une liste de trois filmsayant remporté l''oscar, le césar ou le jutra du meilleur film remporte ce duel', 'orange'),
(20, 'super sauvetage', 'le premier concurrent qui serre dans ses bras la plus petite personne présente (autre qu''un concurrent) remporte ce duel.', 'orange'),
(21, 'super fessier ', 'lisez cette phrase clairement et rapidement aux concurrents : «  le premier concurrent qui fait un tour assis par terre sur ses fesses remporte ce duel. »', 'orange'),
(22, 'super dactylo', 'le premier concurrent a rédiger lisiblement 6 fois la phrase suivante remporte ce duel. « je suis le plus rapide de tous ! ».', 'orange'),
(23, 'super connaissances', 'lisez cette phrase clairement et rapidement aux concurrents : «  le premier concurrent qui trouve un mot contenant la premiere lettre du prénom des deux concurrents remporte ce duel ».', 'orange'),
(24, 'super sauvetage', 'le premier concurrent qui souleve un autre joueur dans ses bras remporte ce duel.', 'orange'),
(25, 'super connaissances', 'le premier concurrent qui rédige une liste de 4 jeux de société remporte ce duel.', 'orange'),
(26, 'changement de costume', 'le premier concurrent qui retire ses chaussettes remporte ce duel.', ''),
(27, 'pouvoir supra rotator', 'lisez cette phrase clairement et rapidement aux concurrents : « chaque concurrent pose sa main droite sur le sol et en fait le tour, puis fait de meme avec sa main gauche. Le premier revenu debout remporte ce duel. »', ''),
(28, 'connaissances astrales', 'lisez cette phrase clairement et rapidement aux concurrents : « de quel signe du zodiaque seriez-vous si vous naissiez aujourd''hui ? ». le premier qui a la bonne réponse remporte ce duel.', '');

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
  `compteur` int(11) DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Contenu de la table `player`
--

INSERT INTO `player` (`id`, `pseudo`, `compteur`, `checked`) VALUES
(3, 'BadCatin', 0, 1),
(4, 'yaka', 0, 1),
(5, 'badPute', 0, 0),
(6, 'superPoulet', 0, 1),
(7, 'captain LowD', 0, 0),
(8, 'superpute', 0, 0),
(9, 'supercatin', 0, 0),
(10, 'superNoob', 0, 0),
(11, 'Badguys', 0, 0),
(14, 'raslecul', 0, 0),
(64, 'pupute', 0, 0),
(67, 'Capitaine Chiottes', 0, 0),
(68, 'Super-Chiottes', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `player_win`
--

CREATE TABLE IF NOT EXISTS `player_win` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `player_win`
--

INSERT INTO `player_win` (`id`, `pseudo`, `date`) VALUES
(1, 'Setowin', '2014-11-14'),
(2, 'mehdiwin', '2014-11-04'),
(3, 'alexiswin', '2014-11-12'),
(4, 'medericwin', '2014-11-05'),
(5, 'patricewin', '2014-11-07'),
(6, 'jeromewin', '2014-11-08'),
(7, 'catherinewin', '2014-11-01'),
(8, 'jeremie win', '2014-11-29'),
(9, 'super poulet loose', '2014-11-30'),
(10, 'super connard loose', '2014-11-19'),
(11, 'dead moule loose ', '2014-11-20'),
(12, 'captain HD loose', '0000-00-00'),
(13, 'super piwa win', '0000-00-00'),
(14, 'test win', '2014-11-08'),
(15, 'ha bon ha bon ha bon', '2014-11-09');

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
--
-- Base de données: `cakephp`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `validate` tinyint(1) DEFAULT '0',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `avatar` tinyint(1) NOT NULL DEFAULT '0',
  `avatarp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `token`, `validate`, `firstname`, `lastname`, `avatar`, `avatarp`) VALUES
(1, 'yaka', '057f75b84a71ef344d76aac62ac1802ae402032b', 'mehdichilla33@gmail.com', '', 1, '', '', 0, '');
--
-- Base de données: `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `id_utilisateur` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `ip`, `objet`, `date`, `message`, `id_utilisateur`) VALUES
(1, '192.168.1.14', 'test', '2014-10-12', 'ziehycgolzygczyeivclzegclezgcey\r\nzcgpziucbzen', 1),
(2, '192.168.1.154', 'test2', '2014-10-13', 'cvhugebfygvcbeuyfgoyfbcn\r\nrcggiuebvivevgn\r\nguvsnighobvnhtg,j,', 2),
(3, '192.168.1.19', 'test3', '2014-10-15', 'sdkucseurgbvyergfbscergfberc\r\nsceugfbdriugbsevrughbpsnc\r\nduhgbnièrgybvosnrgub\r\nugbsvidghnr,\r\nhbvunir', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'ficheux', 'alexis', 'repgarent@gmail.com', 'toto'),
(2, 'richon', 'jerome', 'jerome.richon@gmail.com', 'titi'),
(3, 'chilla', 'mehdi', 'mehdichilla33@gmail.com', 'Guizmo79260');
--
-- Base de données: `messagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `minimessagerie`
--

CREATE TABLE IF NOT EXISTS `minimessagerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `heure` time NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `minimessagerie`
--

INSERT INTO `minimessagerie` (`id`, `pseudo`, `heure`, `message`) VALUES
(1, 'Philippe', '10:04:00', 'Coucou'),
(2, 'Edouard', '10:05:00', 'salut'),
(3, 'Philippe', '10:07:00', 'comment va ? '),
(4, 'Edouard', '10:10:00', 'pas mal '),
(5, 'Philippe', '10:12:00', 'Dis donc, pour le pique nique de cet aprÃ¨s midi, t''as prÃ©vu les couverts?'),
(6, 'Edouard', '10:17:00', 'Keep cool , j''ai tout pris '),
(7, 'Philippe', '10:21:00', 'Super t''es un chef '),
(8, 'Edouard', '10:22:00', 'Ã  toute');
--
-- Base de données: `showroomgeek`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `support` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `release_date` int(4) NOT NULL,
  `version` int(10) NOT NULL,
  `pegi` int(11) NOT NULL,
  `dispo` tinyint(1) NOT NULL,
  `picture1` blob NOT NULL,
  `picture2` blob NOT NULL,
  `picture3` blob NOT NULL,
  `validate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `label`, `description`, `theme`, `editor`, `developer`, `support`, `type`, `release_date`, `version`, `pegi`, `dispo`, `picture1`, `picture2`, `picture3`, `validate`) VALUES
(2, 'assassin screed', 'des gens qui tue d''autres gens', '', 'ubisoft', 'ubisoft moreal', 'pc,ps3,ps4,xbox360,xbox one', '', 2014, 0, 16, 1, '', '', '', 0),
(3, 'test', 'desc test', 'theme test', 'testor', 'testator', 'testitator', 'testotitator', 2014, 3, 99, 1, '', '', '', 0),
(4, 'toto', 'dfs', 'qdsf', 'qdsf', 'dsqf', 'qdsf', '1', 0, 4, 3, 0, '', '', '', 0),
(5, 'qfs', 'qdsf', 'dsqf', 'sdqf', 'qsdf', 'dsf', '0', 2021, 4, 1, 0, '', '', '', 0),
(6, 'xcc', 'c', 'toto', 'xc', 'xc', 'xc', '2', 2028, 7, 2, 0, '', '', '', 0),
(7, 'ceciestuntest', 't', 'toto', 'qdsf', 'dsqf', 'dfs', '1', 0, 7, 1, 0, '', '', '', 0),
(8, 'seven', 'strategie', 'strategie', 'resp', 'dsuyc', 'lutfdtukv', '1', 0, 4, 2, 0, '', '', '', 0),
(9, 'testator', 'testerCombienDeTempsCapitaineHDResteEnVieLesPiedDansLeCimentAuFondDuneRivière', 'JeuxDeGroupe', 'TESTATITATOR', 'développeursAnonymes', 'IRL', '1', 2014, 1, 0, 0, '', '', '', 0),
(10, 'DansLaTeteDeMederic', 'Essayer De Pas Se Jeter Par La Fenetre Du Rdc En Decouvrant Ce Quil Sy Cache', 'Multi', 'grouveDesDeveloppeurAnonymes', 'DieuSeuLeSait', 'SiSeulementOnNousAidait', '2', 0, 1, 4, 0, '', '', '', 0),
(11, 'DansLaTeteDeMederic1', 'EssayerDePasSeJeterParLaFenetreDuRdcEnDecouvrantCeQuilSyCache', 'Multi546', 'grouveDesDeveloppeurAnonymes', 'DieuSeuLeSait', 'SiSeulementOnNousAidait', '2', 0, 1, 4, 0, '', '', '', 0),
(12, 'seven wonders', 'gfitf bugp ito', 'tgfd v', 'guè-t', 'ghfoufyg', 'miugpmiug', '0', 0, 6, 3, 0, '', '', '', 0),
(13, 'descendance 2', 'kgfk jhyg vyt;jyv fjctf', 'hvzog vu', 'y vy ', 'ygo vc ', 'jgo yut c', '1', 0, 4, 2, 0, '', '', '', 0),
(14, 'Pong', 'Jeu de ping pong vintage', 'Ping Pong', 'TaSoeur', 'MaSoeur', 'PC', '0', 0, 11, 0, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `games_users`
--

CREATE TABLE IF NOT EXISTS `games_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `games_users`
--

INSERT INTO `games_users` (`id`, `game_id`, `user_id`) VALUES
(1, 2, 9),
(3, 4, 9),
(5, 4, 18),
(6, 9, 20),
(7, 10, 20),
(8, 11, 20);

-- --------------------------------------------------------

--
-- Structure de la table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `id_share` int(11) NOT NULL,
  `id_ask` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `shares`
--

INSERT INTO `shares` (`id`, `begin`, `end`, `id_share`, `id_ask`, `id_game`) VALUES
(1, '2014-11-12', '2014-11-25', 9, 17, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` int(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `avatar` blob NOT NULL,
  `token` varchar(255) NOT NULL,
  `validate` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `firstname`, `lastname`, `birthday`, `address`, `postcode`, `city`, `tel`, `avatar`, `token`, `validate`) VALUES
(1, 'SRG', 'aressan@msn.com', 'srg01234', '', '', '0000-00-00', '', 0, '', 0, '', '', 1),
(2, 'SRG2', 'aressan@msn.com', 'srg01234', '', '', '0000-00-00', '', 0, '', 0, '', '', 1),
(3, 'asa', 'asa@sss.com', 'adaadaada', '', '', '0000-00-00', '', 0, '', 0, '', '', 1),
(6, 'Gromy', 'aressan@msn.com', 'c8b37a72fd21ab9696e311d954f9c1795f6a3d56', 'GG', 'riri', '2014-10-29', 'nimportequoi', 16161, 'nain', 771, '', '', 1),
(9, 'sheldone', 'medric-vitrant@hotmail.fr', '02cae316d4404be4f30ff14c708b2241dffc022b', 'mederic', 'vitrant', '2014-10-28', '156 rue de perigueux', 16000, 'angoulême', 6262, '', '', 1),
(10, 'CaptainHD', 'sureaud.patrice@gmail.com', '22f6b1a257be80efc69886aaed4e74e7f2d46797', '', '', '0000-00-00', '', 0, '', 0, '', '', 1),
(18, 'repgarent', 'repgarent@gmail.com', '6dbfa7373ad23113ec73a6a7cd8563dd15e425d5', 'alexis', 'ficheux', '2014-10-29', '1 rue duny', 15000, 'angouleme', 546422554, '', '', 1),
(20, 'Seto', 'sylvain.lavayssiere@gmail.com', 'aeb76e71e94b123d767887354a38abeb50efd6ac', 'Sylvain', 'Lavayssiere', '2014-10-29', '11 rue des pendus, la CIFOP', 0, 'Angoulême', 0, '', '', 1),
(21, 'yakasan', 'mehdichilla33@gmail.com', 'b5545b885a17fa44b64437956610a1a263d16a34', '', '', '0000-00-00', '', 0, '', 0, '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
