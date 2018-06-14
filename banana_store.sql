-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 14 Juin 2018 à 11:09
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `banana_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `photo` varchar(250) CHARACTER SET utf8 NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `photo`, `quantity`, `is_active`) VALUES
(1, 'Groot figurine pop', 20, 'Figurine pop Groot gardiens de la galaxie', 'https://static.fnac-static.com/multimedia/Images/FR/NR/7f/94/82/8557695/1540-1/tsp20170426094231/Figurine-Funko-Pop-Les-Gardiens-de-la-Galaxie-Vol-2-Groot-9-cm.jpg', 12, 1),
(2, 'Gargamel et Azrael figurine pop', 100, 'Figurine pop gargamel et azrael les schtroumpfs', 'https://www.bdaddik.com/3872-large_default/figurines-funko-pop-vinyl-les-schtroumpfs-gargamel-et-azrael-fk20141-2017.jpg', 10, 1),
(3, 'Gizmo figurine pop', 15, 'Figurine pop Gizmo des Gremlins\r\ntout doux', 'http://imagination.hic-sunt-dracones.fr/wp-content/uploads/2015/03/GIZMO_Gremlins-POPFunko_1024x1024-730x521.jpg', 50, 1),
(4, 'Son Goku figurine pop', 30, 'Figurine pop Son Goku Dragon Ball Z', 'http://edition-limitee.fr/images/2017/fig_dbz/Figurine-son-Goku-funko-pop-Rare-collection-Dragon-Ball-Z.jpg', 30, 1),
(5, 'Leeloo ', 20, 'Figurine pop Leeloo du 5eme élément', 'http://static.hitek.fr/img/actualite/2015/07/fifth4.jpg', 10, 1),
(6, 'Wonder Woman pop', 60, 'wonder woman figurine pop la plus forte', 'https://www.king-games.fr/28758-17476-home_default/figurine-funko-pop-justice-league-wonder-woman.jpg', 30, 0),
(7, 'figurine pop Chewbacca', 15, 'figurine pop Chewbacca star wars', 'https://s1.thcdn.com/productimg/600/600/11564440-1934570053394761.jpg', 29, 1),
(8, 'figurine pop minion trop mignnoooonnn !!!!', 100, 'figurine pop minion trop mignonnnnnn mais vraiment trop méchant', 'https://media.cdnws.com/_i/21693/16734/2642/36/figurine-moi-moche-et-mechant-funko-pop-hula-minion-9cm-1001-figurines.jpeg', 12, 1),
(9, 'Figurine pop chien', 15, 'Figurine pop chien . le chien le plus cool de la planète', 'https://www.lacitedesnuages.be/boutique/images_produits/fk11054-z.jpg', 154, 1),
(10, 'Figurine pop panda', 30, 'Figurine pop panda . le panda de kung fu panda! ', 'https://media.artoyz.net/shop/21829-large_default/funko-pop-po-kung-fu-panda.jpg', 12342, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`) VALUES
(1, 'rabillervictoire@nnn.com', 'zzzzz', 'Victoire', 'Rabiller'),
(2, 'radixlaurent@zzzzzz.com', 'zzzzzzz', 'Laurent', 'Radix'),
(3, 'beatricebbbbbb@zzzz.com', 'zazaza', 'Béatrice', 'Bbbbbbbb'),
(4, 'juliengggggg@zzzz.com', 'zzzzz', 'Julien', 'Gggggggg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
