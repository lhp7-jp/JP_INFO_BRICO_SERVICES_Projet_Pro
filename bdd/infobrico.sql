-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 30 mars 2022 à 03:31
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infobrico`
--

-- --------------------------------------------------------

--
-- Structure de la table `jp_lawn`
--

CREATE TABLE `jp_lawn` (
  `lawn_id` int(11) NOT NULL,
  `lawn_date` date NOT NULL,
  `lawn_surface` int(11) NOT NULL,
  `lawn_materiel` tinyint(1) NOT NULL,
  `lawn_description` text NOT NULL,
  `lawn_mail` varchar(50) NOT NULL,
  `lawn_phone` varchar(10) NOT NULL,
  `lawn_answer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jp_lawn`
--

INSERT INTO `jp_lawn` (`lawn_id`, `lawn_date`, `lawn_surface`, `lawn_materiel`, `lawn_description`, `lawn_mail`, `lawn_phone`, `lawn_answer`) VALUES
(1, '2022-03-30', 77, 1, 'dfgdfgdfg', 'alexy.lepretre76@laposte.net', '0231443656', 0),
(2, '2022-03-30', 78, 1, '787887', 'toto@aze.fr', '7887788787', 0),
(3, '2022-03-30', 42, 0, 'Attention au chien', 'anousone@anousone.fr', '0231443656', 0),
(4, '2022-03-30', 78, 1, '788778', 'alexy.lepretre76@laposte.net', '0102010101', 0),
(5, '2022-03-30', 78, 1, 'azeaze', 'toto@aze.fr', '0102010101', 0),
(6, '2022-03-30', 78, 1, '7878', 'alexy.lepretre76@laposte.net', '0102010101', 0),
(7, '2022-03-30', 77, 1, 'dfdfg', 'alexy.lepretre76@laposte.net', '0231443656', 0),
(8, '2022-03-30', 788787, 0, '7887878787', 'alexy.lepretre76@laposte.net', '0102010101', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jp_lawn`
--
ALTER TABLE `jp_lawn`
  ADD PRIMARY KEY (`lawn_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jp_lawn`
--
ALTER TABLE `jp_lawn`
  MODIFY `lawn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
