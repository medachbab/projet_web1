-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 30 mai 2024 à 10:55
-- Version du serveur : 10.5.20-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id22241174_baseetudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_table`
--

CREATE TABLE `admin_table` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail_admin` varchar(255) DEFAULT NULL,
  `hashed_pass` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'defaultusrimg.jpg',
  `e_mail_personnel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin_table`
--

INSERT INTO `admin_table` (`id_admin`, `nom`, `prenom`, `mail_admin`, `hashed_pass`, `photo`, `e_mail_personnel`) VALUES
(1, 'admin1', 'admin1', 'admin1.admin1@admin.uae.ac.ma', '', 'defaultusrimg.jpg', NULL),
(2, 'admin2', 'admin2', 'admin2.admin2@admin.uae.ac.ma', '12345', 'defaultusrimg.jpg', NULL),
(3, 'admin6', 'ad6', 'ad6.admin6@admin.uae.ac.ma', '$2y$10$Fpd4H9utEvLlobBeuSblU.l2jEOJNMuaCYqJFfrW7sFswwKzr4F1i', 'defaultusrimg.jpg', 'ad6.admin6@gmail.com'),
(4, 'admin7', 'ad7', 'ad7.admin7@admin.uae.ac.ma', '$2y$10$LCqkC/AGW4e/EEC2YUvuQultf5H.f72UxL5j73JdOH2HVMBKb5MRi', 'defaultusrimg.jpg', 'ad7.admin7@gmail.com'),
(5, 'admin8', 'ad8', 'ad8.admin8@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad8.admin8@gmail.com'),
(6, 'admin9', 'ad9', 'ad9.admin9@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad9.admin9@gmail.com'),
(7, 'admin10', 'ad10', 'ad10.admin10@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad10.admin10@gmail.com'),
(8, 'admin11', 'ad11', 'ad11.admin11@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad11.admin11@gmail.com'),
(9, 'admin12', 'ad12', 'ad12.admin12@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad12.admin12@gmail.com'),
(10, 'admin13', 'ad13', 'ad13.admin13@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad13.admin13@gmail.com'),
(11, 'admin14', 'ad14', 'ad14.admin14@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad14.admin14@gmail.com'),
(12, 'admin15', 'ad15', 'ad15.admin15@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad15.admin15@gmail.com'),
(13, 'admin16', 'ad16', 'ad16.admin16@admin.uae.ac.ma', NULL, 'defaultusrimg.jpg', 'ad16.admin16@gmail.com');

--
-- Déclencheurs `admin_table`
--
DELIMITER $$
CREATE TRIGGER `generate_email_adm` BEFORE INSERT ON `admin_table` FOR EACH ROW SET NEW.mail_admin = CONCAT(NEW.prenom, '.', NEW.nom, '@admin.uae.ac.ma')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `generate_pemail_admin` BEFORE INSERT ON `admin_table` FOR EACH ROW BEGIN
    IF NEW.e_mail_personnel IS NULL THEN
        SET NEW.e_mail_personnel = CONCAT(NEW.prenom, '.', NEW.nom, '@gmail.com');
    END IF;
END
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
