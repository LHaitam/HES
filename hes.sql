-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 août 2023 à 10:30
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hes`
--

-- --------------------------------------------------------

--
-- Structure de la table `hes`
--

CREATE TABLE `hes` (
  `NbrPrsn` int(11) NOT NULL,
  `NbrJsA` int(11) NOT NULL,
  `GazYTD` int(11) NOT NULL,
  `GazPLAN` int(11) NOT NULL,
  `ConsoElecYTD` int(11) NOT NULL,
  `ConsoElecPLAN` int(11) NOT NULL,
  `ConsoEauYTD` int(11) NOT NULL,
  `ConsoEauPLAN` int(11) NOT NULL,
  `RecyclYTD` int(11) NOT NULL,
  `RecyclPLAN` int(11) NOT NULL,
  `DateAjout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
