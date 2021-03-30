-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 09:22
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `epitech`
--

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `nom` char(30) NOT NULL,
  `nomcompagnie` char(30) NOT NULL,
  `email` char(30) NOT NULL,
  `tel` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`nom`, `nomcompagnie`, `email`, `tel`) VALUES
('test', 'test', 'test', 'test'),
('test', 'test', 'test', 'test'),
('Lucas Feriel', 'Lucas Feriel', 'lucasferiel@hotmail.fr', '0754820737'),
('Lucas Feriel', 'Lucas', 'lucasferiel@hotmail.fr', '0754820737'),
('Maxime Gaspard', 'Behavour', 'maxime@hotmail.com', '0658965858'),
('Christopher Weaver', 'Bethesda', 'Bethesda@softworks.com', '0896545855'),
('Nicolo Laurent', 'Riot Games', 'Riot@Games.com', '0623125254'),
('Masafumi Miyamoto', 'Square Enix', 'Square@Enix.com', '0785485632'),
('Gabe Newell', 'Valve', 'Gabe@valve.com', '0635987454');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `username` char(30) NOT NULL,
  `mdp` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`username`, `mdp`) VALUES
('admin', 'admin'),
('test', '12345'),
('Maxime.Gaspar', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
