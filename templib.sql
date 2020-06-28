-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 28 juin 2020 à 18:40
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

CREATE TABLE `template` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(2555) NOT NULL,
  `nbr_down` int(100) NOT NULL DEFAULT 0,
  `download` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `catégorie` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`id`, `name`, `description`, `image`, `nbr_down`, `download`, `preview`, `catégorie`) VALUES
(1, 'complex', 'A simple photo-oriented landing page. It will suit to any kind of business, bar, gastropub, blog. ', './templates/complex/Complex.jpg', 0, './templates/complex/complex.zip', './templates/complex', 0),
(2, 'Energy', 'Energy offers you severals layouts in order to present yourself and your experiences with simplicity and power thanks the one page template.', './templates/energy/Energy.jpg', 0, './templates/energy/energy.zip', './templates/energy/', 0),
(3, 'Savory', 'Savory is a flat and responsive site template with a clean and professional design', './templates/savory/Savory.jpg', 0, './templates/savory/savory.zip', './templates/savory/', 0),
(4, 'The Factory', 'The graphic design concept of Factory was made for startup who wants to spread their work to the world. Use it without limit !', './templates/factory/Factory.jpg', 0, './templates/factory/factory.zip', './templates/factory', 0),
(5, 'Mountain', 'Mountain electric template introduces your business with impact and design. Perfect for Design agencies and aesthetic projects.', './templates/mountain/Mountain.jpg', 0, './templates/mountain/mountain.zip', './templates/mountain', 0),
(6, 'Pure', 'A simple and efficient way to set your products or projects. It will suit to any kind of business, bar, gastropub, blog. ', './templates/pure/Pure.jpg', 0, './templates/pure/pure.zip', './templates/pure', 0),
(7, 'Univers', 'A simple and efficient way to set your products or projects. It will suit to any kind of business, bar, gastropub, blog. ', './templates/univers/Univers.jpg', 0, './templates/univers/univers.zip', './templates/univers', 0),
(8, 'Caminar', 'A simple, photo-oriented landing page with a lightbox gallery.', './templates/caminar/caminar.jpg', 0, './templates/caminar/caminar.zip', './templates/caminar', 1),
(9, 'Transitive', 'A clean business-oriented with a video banner.\r\nfull responsive template.', './templates/transitive/transitive.jpg', 0, './templates/transitive/transitive.zip', './templates/transitive', 1),
(10, 'Road Trip', 'A cool presentation-style template with big images and scroll effects.', './templates/roadtrip/roadtrip.jpg', 0, './templates/roadtrip/roadtrip.zip', './templates/roadtrip', 1),
(11, 'Hielo', 'A super slick landing page with a parallax (!!!) banner carousel.', './templates/hielo/hielo.jpg', 0, './templates/hielo/hielo.zip', './templates/hielo', 1),
(12, 'Epilogue', 'A slick landing page with clean lines and a minimalistic look and feel.', './templates/epilogue/epilogue.jpg', 0, './templates/epilogue/epilogue.zip', './templates/epilogue', 1),
(13, 'Full Motion', 'A full responsive video gallery template with a functional video lightbox.', './templates/fullmotion/fullmotion.jpg', 0, './templates/fullmotion/fullmotion.zip', './templates/fullmotion', 1),
(14, 'Industrious', 'A modern business-oriented design with a video banner.', './templates/industrious/industrious.jpg', 0, './templates/industrious/industrious.zip', './templates/industrious', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `user` tinytext NOT NULL,
  `mail` tinytext NOT NULL,
  `pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`uid`, `user`, `mail`, `pwd`) VALUES
(1, 'inawi', 'inawi@email.com', '$2y$10$sTf214wEBZ2ph2wobz95L.NYm2LfO6WZoinNxlHY9xS88xgDxn03.'),
(2, 'abdo', 'abdo@email.com', '$2y$10$7H7nzNN7DPEBlOz81K.hk.OSfPAZboc8DM09JakXZjD4rjmAuTHfu'),
(3, 'laanoui', 'laanoui@email.com', '$2y$10$HDlE/9HC/0UsmO9U2jsNLeyoXSawsFD6UKbLp6yB9U2jGQsPUBCny');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
