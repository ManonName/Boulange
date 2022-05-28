-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 mai 2022 à 15:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ordinateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `ordis`
--

DROP TABLE IF EXISTS `ordis`;
CREATE TABLE IF NOT EXISTS `ordis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(150) NOT NULL,
  `processeur` varchar(150) NOT NULL,
  `prix` float(10,2) NOT NULL,
  `ecran` varchar(150) NOT NULL,
  `vive` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `lien` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ordis`
--

INSERT INTO `ordis` (`id`, `denomination`, `processeur`, `prix`, `ecran`, `vive`, `image`, `lien`) VALUES
(1, 'Hp Victus', 'AMD Ryzen 5', 899.99, '16', '8', '01.png', 'https://www.boulanger.com/ref/1174820'),
(2, 'Hp ENVY', 'AMD Ryzen 5', 699.00, '13,3', '8', '02.png', 'https://www.boulanger.com/ref/1163913'),
(3, 'Asus TUF F15', 'i5-11400H', 949.99, '15.6', '8', '03.png', 'https://www.boulanger.com/ref/1163913'),
(4, 'Hp Victus 16', 'AMD Ryzen 5', 899.99, '16', '8', '04.png', 'https://www.boulanger.com/ref/1174820'),
(5, 'Asus S533UA', 'i5-11400H', 999.00, '15,6', '16', '05.png', 'https://www.boulanger.com/ref/1171023'),
(6, 'Macbook Pro 16', 'Apple M1 Pro', 2749.00, '16', '16', '06.png', 'https://www.boulanger.com/ref/1169812'),
(7, 'Macbook AIR New', 'Apple M1', 1099.00, '13.3', '8', '07.png', 'https://www.boulanger.com/ref/1155927'),
(8, 'Asus UX425EA', 'i5-1135G7', 749.00, '14', '8', '08.png', 'https://www.boulanger.com/ref/1173350'),
(9, 'Asus TUF506IE', 'AMD Ryzen 7 4800H', 1199.99, '15.6', '16', '09.png', 'https://www.boulanger.com/ref/1173814'),
(10, 'Dell Inspiron 15', 'i7-1165G7', 1199.00, '15.6', '16', '10.png', 'https://www.boulanger.com/ref/1162300'),
(11, ' Packard bell PB315', 'Intel N5030', 429.00, '15.6', '8', '11.png', 'https://www.boulanger.com/ref/1164111'),
(12, 'Packard bell PB114', 'Intel N4500', 329.00, '14', '4', '12.png', 'https://www.boulanger.com/ref/1164051');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
