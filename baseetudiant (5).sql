-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 mai 2024 à 01:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `baseetudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id_ab` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `num_etudiant` varchar(11) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `Absences` varchar(50) NOT NULL,
  `Num_Total_Abc` int(11) NOT NULL,
  `date_absences` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`id_ab`, `nom`, `prenom`, `gmail`, `num_etudiant`, `id_niveau`, `Absences`, `Num_Total_Abc`, `date_absences`) VALUES
(469, 'test', 'etudiant1', 'etudiant1.test@etu.uae.ac.ma', 'e1111', 2, '', 1, '2024-05-27'),
(470, 'etudiant2', 'test2', 'test2.etudiant2@etu.uae.ac.ma', 'e2222', 1, '', 0, '0000-00-00'),
(471, 'etudiant3', 'test3', 'test3.etudiant3@etu.uae.ac.ma', 'e3333', 3, '', 0, '0000-00-00'),
(472, 'etudiant33', 'test33', 'test33.etudiant33@etu.uae.ac.ma', 'e3334', 3, '', 0, '0000-00-00'),
(473, 'etudiant44', 'test44', 'test44.etudiant44@etu.uae.ac.ma', 'e3335', 3, '', 0, '0000-00-00'),
(474, 'etudiant1', 'etudiant1', 'etudiant1.etudiant1@etu.uae.ac.ma', 'F14151216', 3, '', 0, '0000-00-00'),
(475, 'etudiant2', 'etudiant2', 'etudiant2.etudiant2@etu.uae.ac.ma', 'F14151217', 4, '', 0, '0000-00-00'),
(476, 'etudiant3', 'etudiant3', 'etudiant3.etudiant3@etu.uae.ac.ma', 'F14151218', 5, '', 0, '0000-00-00'),
(477, 'etudiant4', 'etudiant4', 'etudiant4.etudiant4@etu.uae.ac.ma', 'F14151219', 6, '', 0, '0000-00-00'),
(478, 'etudiant5', 'etudiant5', 'etudiant5.etudiant5@etu.uae.ac.ma', 'F14151220', 7, '', 0, '0000-00-00'),
(479, 'etudiant6', 'etudiant6', 'etudiant6.etudiant6@etu.uae.ac.ma', 'F14151221', 8, '', 0, '0000-00-00'),
(480, 'etudiant7', 'etudiant7', 'etudiant7.etudiant7@etu.uae.ac.ma', 'F14151222', 9, '', 0, '0000-00-00'),
(481, 'etudiant8', 'etudiant8', 'etudiant8.etudiant8@etu.uae.ac.ma', 'F14151223', 10, '', 0, '0000-00-00'),
(482, 'etudiant9', 'etudiant9', 'etudiant9.etudiant9@etu.uae.ac.ma', 'F14151224', 11, '', 0, '0000-00-00'),
(483, 'etudiant10', 'etudiant10', 'etudiant10.etudiant10@etu.uae.ac.ma', 'F14151225', 3, '', 0, '0000-00-00'),
(484, 'etudiant11', 'etudiant11', 'etudiant11.etudiant11@etu.uae.ac.ma', 'F14151226', 4, '', 0, '0000-00-00'),
(485, 'etudiant12', 'etudiant12', 'etudiant12.etudiant12@etu.uae.ac.ma', 'F14151227', 5, '', 0, '0000-00-00'),
(486, 'etudiant13', 'etudiant13', 'etudiant13.etudiant13@etu.uae.ac.ma', 'F14151228', 6, '', 0, '0000-00-00'),
(487, 'etudiant14', 'etudiant14', 'etudiant14.etudiant14@etu.uae.ac.ma', 'F14151229', 7, '', 0, '0000-00-00'),
(488, 'etudiant15', 'etudiant15', 'etudiant15.etudiant15@etu.uae.ac.ma', 'F14151230', 8, '', 0, '0000-00-00'),
(489, 'etudiant16', 'etudiant16', 'etudiant16.etudiant16@etu.uae.ac.ma', 'F14151231', 9, '', 0, '0000-00-00'),
(490, 'etudiant17', 'etudiant17', 'etudiant17.etudiant17@etu.uae.ac.ma', 'F14151232', 10, '', 0, '0000-00-00'),
(491, 'etudiant18', 'etudiant18', 'etudiant18.etudiant18@etu.uae.ac.ma', 'F14151233', 11, '', 0, '0000-00-00'),
(492, 'etudiant19', 'etudiant19', 'etudiant19.etudiant19@etu.uae.ac.ma', 'F14151234', 3, '', 0, '0000-00-00'),
(493, 'etudiant20', 'etudiant20', 'etudiant20.etudiant20@etu.uae.ac.ma', 'J15141736', 4, '', 0, '0000-00-00'),
(494, 'etudiant21', 'etudiant21', 'etudiant21.etudiant21@etu.uae.ac.ma', 'J15141737', 5, '', 0, '0000-00-00'),
(495, 'etudiant22', 'etudiant22', 'etudiant22.etudiant22@etu.uae.ac.ma', 'J15141738', 6, '', 0, '0000-00-00'),
(496, 'etudiant23', 'etudiant23', 'etudiant23.etudiant23@etu.uae.ac.ma', 'J15141739', 7, '', 0, '0000-00-00'),
(497, 'etudiant24', 'etudiant24', 'etudiant24.etudiant24@etu.uae.ac.ma', 'J15141740', 8, '', 0, '0000-00-00'),
(498, 'etudiant25', 'etudiant25', 'etudiant25.etudiant25@etu.uae.ac.ma', 'J15141741', 9, '', 0, '0000-00-00'),
(499, 'etudiant26', 'etudiant26', 'etudiant26.etudiant26@etu.uae.ac.ma', 'J15141742', 10, '', 0, '0000-00-00'),
(500, 'etudiant27', 'etudiant27', 'etudiant27.etudiant27@etu.uae.ac.ma', 'J15141743', 11, '', 0, '0000-00-00'),
(501, 'etudiant28', 'etudiant28', 'etudiant28.etudiant28@etu.uae.ac.ma', 'J15141744', 3, '', 0, '0000-00-00'),
(502, 'etudiant29', 'etudiant29', 'etudiant29.etudiant29@etu.uae.ac.ma', 'J15141745', 4, '', 0, '0000-00-00'),
(503, 'etudiant30', 'etudiant30', 'etudiant30.etudiant30@etu.uae.ac.ma', 'J15141746', 5, '', 0, '0000-00-00'),
(504, 'etudiant31', 'etudiant31', 'etudiant31.etudiant31@etu.uae.ac.ma', 'J15141747', 6, '', 0, '0000-00-00'),
(505, 'etudiant32', 'etudiant32', 'etudiant32.etudiant32@etu.uae.ac.ma', 'J15141748', 7, '', 0, '0000-00-00'),
(506, 'etudiant33', 'etudiant33', 'etudiant33.etudiant33@etu.uae.ac.ma', 'J15141749', 8, '', 0, '0000-00-00'),
(507, 'etudiant34', 'etudiant34', 'etudiant34.etudiant34@etu.uae.ac.ma', 'J15141750', 9, '', 0, '0000-00-00'),
(508, 'etudiant35', 'etudiant35', 'etudiant35.etudiant35@etu.uae.ac.ma', 'J15141751', 10, '', 0, '0000-00-00'),
(509, 'etudiant36', 'etudiant36', 'etudiant36.etudiant36@etu.uae.ac.ma', 'J15141752', 11, '', 0, '0000-00-00'),
(510, 'etudiant37', 'etudiant37', 'etudiant37.etudiant37@etu.uae.ac.ma', 'J15141753', 3, '', 0, '0000-00-00'),
(511, 'etudiant38', 'etudiant38', 'etudiant38.etudiant38@etu.uae.ac.ma', 'J15141754', 4, '', 0, '0000-00-00'),
(512, 'etudiant39', 'etudiant39', 'etudiant39.etudiant39@etu.uae.ac.ma', 'J15141755', 5, '', 0, '0000-00-00'),
(513, 'etudiant40', 'etudiant40', 'etudiant40.etudiant40@etu.uae.ac.ma', 'J15141756', 6, '', 0, '0000-00-00'),
(514, 'etudiant41', 'etudiant41', 'etudiant41.etudiant41@etu.uae.ac.ma', 'J15141757', 7, '', 0, '0000-00-00'),
(515, '', '', '', '', 0, '', 0, '0000-00-00'),
(516, 'etudiant42', 'etudiant42', 'etudiant42.etudiant42@etu.uae.ac.ma', 'J15141758', 8, '', 0, '0000-00-00'),
(517, 'etudiant43', 'etudiant43', 'etudiant43.etudiant43@etu.uae.ac.ma', 'J15141759', 9, '', 0, '0000-00-00'),
(518, 'etudiant44', 'etudiant44', 'etudiant44.etudiant44@etu.uae.ac.ma', 'J15141760', 10, '', 0, '0000-00-00'),
(519, 'etudiant45', 'etudiant45', 'etudiant45.etudiant45@etu.uae.ac.ma', 'M15121656', 11, '', 0, '0000-00-00'),
(520, 'etudiant46', 'etudiant46', 'etudiant46.etudiant46@etu.uae.ac.ma', 'M15121657', 3, '', 0, '0000-00-00'),
(521, 'etudiant47', 'etudiant47', 'etudiant47.etudiant47@etu.uae.ac.ma', 'M15121658', 4, '', 0, '0000-00-00'),
(522, 'etudiant48', 'etudiant48', 'etudiant48.etudiant48@etu.uae.ac.ma', 'M15121659', 5, '', 0, '0000-00-00'),
(523, 'etudiant49', 'etudiant49', 'etudiant49.etudiant49@etu.uae.ac.ma', 'M15121660', 6, '', 0, '0000-00-00'),
(524, 'etudiant50', 'etudiant50', 'etudiant50.etudiant50@etu.uae.ac.ma', 'M15121661', 7, '', 0, '0000-00-00'),
(525, 'etudiant51', 'etudiant51', 'etudiant51.etudiant51@etu.uae.ac.ma', 'M15121662', 8, '', 0, '0000-00-00'),
(526, 'etudiant52', 'etudiant52', 'etudiant52.etudiant52@etu.uae.ac.ma', 'M15121663', 9, '', 0, '0000-00-00'),
(527, 'etudiant53', 'etudiant53', 'etudiant53.etudiant53@etu.uae.ac.ma', 'M15121664', 10, '', 0, '0000-00-00'),
(528, 'etudiant54', 'etudiant54', 'etudiant54.etudiant54@etu.uae.ac.ma', 'M15121665', 11, '', 0, '0000-00-00'),
(529, 'etudiant55', 'etudiant55', 'etudiant55.etudiant55@etu.uae.ac.ma', 'M15121666', 3, '', 0, '0000-00-00'),
(530, 'etudiant56', 'etudiant56', 'etudiant56.etudiant56@etu.uae.ac.ma', 'M15121667', 4, '', 0, '0000-00-00'),
(531, 'etudiant57', 'etudiant57', 'etudiant57.etudiant57@etu.uae.ac.ma', 'M15121668', 5, '', 0, '0000-00-00'),
(532, 'etudiant58', 'etudiant58', 'etudiant58.etudiant58@etu.uae.ac.ma', 'H15161362', 6, '', 0, '0000-00-00'),
(533, 'etudiant59', 'etudiant59', 'etudiant59.etudiant59@etu.uae.ac.ma', 'H15161363', 7, '', 0, '0000-00-00'),
(534, 'etudiant60', 'etudiant60', 'etudiant60.etudiant60@etu.uae.ac.ma', 'H15161364', 8, '', 0, '0000-00-00'),
(535, 'etudiant61', 'etudiant61', 'etudiant61.etudiant61@etu.uae.ac.ma', 'H15161365', 3, '', 0, '0000-00-00'),
(536, 'etudiant62', 'etudiant62', 'etudiant62.etudiant62@etu.uae.ac.ma', 'H15161366', 4, '', 0, '0000-00-00'),
(537, 'etudiant63', 'etudiant63', 'etudiant63.etudiant63@etu.uae.ac.ma', 'H15161367', 5, '', 0, '0000-00-00'),
(538, 'etudiant64', 'etudiant64', 'etudiant64.etudiant64@etu.uae.ac.ma', 'H15161368', 6, '', 0, '0000-00-00'),
(539, 'etudiant65', 'etudiant65', 'etudiant65.etudiant65@etu.uae.ac.ma', 'H15161369', 7, '', 0, '0000-00-00'),
(540, 'etudiant66', 'etudiant66', 'etudiant66.etudiant66@etu.uae.ac.ma', 'H15161370', 8, '', 0, '0000-00-00'),
(541, 'etudiant67', 'etudiant67', 'etudiant67.etudiant67@etu.uae.ac.ma', 'H15161371', 9, '', 0, '0000-00-00'),
(542, 'etudiant68', 'etudiant68', 'etudiant68.etudiant68@etu.uae.ac.ma', 'H15161372', 10, '', 0, '0000-00-00'),
(543, 'etudiant69', 'etudiant69', 'etudiant69.etudiant69@etu.uae.ac.ma', 'H15161373', 11, '', 0, '0000-00-00'),
(544, 'etudiant70', 'etudiant70', 'etudiant70.etudiant70@etu.uae.ac.ma', 'H15161374', 3, '', 0, '0000-00-00'),
(545, 'etudiant71', 'etudiant71', 'etudiant71.etudiant71@etu.uae.ac.ma', 'H15161375', 4, '', 0, '0000-00-00'),
(546, 'etudiant72', 'etudiant72', 'etudiant72.etudiant72@etu.uae.ac.ma', 'H15161376', 5, '', 0, '0000-00-00'),
(547, 'etudiant73', 'etudiant73', 'etudiant73.etudiant73@etu.uae.ac.ma', 'H15161377', 6, '', 0, '0000-00-00'),
(548, 'etudiant74', 'etudiant74', 'etudiant74.etudiant74@etu.uae.ac.ma', 'H15161378', 7, '', 0, '0000-00-00'),
(549, 'etudiant75', 'etudiant75', 'etudiant75.etudiant75@etu.uae.ac.ma', 'H15161379', 8, '', 0, '0000-00-00'),
(550, 'etudiant76', 'etudiant76', 'etudiant76.etudiant76@etu.uae.ac.ma', 'H15161380', 9, '', 0, '0000-00-00'),
(551, 'etudiant77', 'etudiant77', 'etudiant77.etudiant77@etu.uae.ac.ma', 'H15161381', 10, '', 0, '0000-00-00'),
(552, 'etudiant78', 'etudiant78', 'etudiant78.etudiant78@etu.uae.ac.ma', 'H15161382', 11, '', 0, '0000-00-00'),
(553, 'etudiant79', 'etudiant79', 'etudiant79.etudiant79@etu.uae.ac.ma', 'H15161383', 3, '', 0, '0000-00-00'),
(554, 'etudiant80', 'etudiant80', 'etudiant80.etudiant80@etu.uae.ac.ma', 'H15161384', 4, '', 0, '0000-00-00'),
(555, 'etudiant81', 'etudiant81', 'etudiant81.etudiant81@etu.uae.ac.ma', 'H15161385', 5, '', 0, '0000-00-00'),
(556, 'etudiant82', 'etudiant82', 'etudiant82.etudiant82@etu.uae.ac.ma', 'H15161386', 6, '', 0, '0000-00-00'),
(557, 'etudiant83', 'etudiant83', 'etudiant83.etudiant83@etu.uae.ac.ma', 'H15161387', 7, '', 0, '0000-00-00'),
(558, 'etudiant84', 'etudiant84', 'etudiant84.etudiant84@etu.uae.ac.ma', 'H15161388', 8, '', 0, '0000-00-00'),
(559, 'etudiant85', 'etudiant85', 'etudiant85.etudiant85@etu.uae.ac.ma', 'H15161389', 9, '', 0, '0000-00-00'),
(560, 'etudiant86', 'etudiant86', 'etudiant86.etudiant86@etu.uae.ac.ma', 'H15161390', 10, '', 0, '0000-00-00'),
(561, 'etudiant87', 'etudiant87', 'etudiant87.etudiant87@etu.uae.ac.ma', 'H15161391', 11, '', 0, '0000-00-00'),
(562, 'etudiant88', 'etudiant88', 'etudiant88.etudiant88@etu.uae.ac.ma', 'H15161392', 3, '', 0, '0000-00-00'),
(563, 'etudiant89', 'etudiant89', 'etudiant89.etudiant89@etu.uae.ac.ma', 'H15161393', 4, '', 0, '0000-00-00'),
(564, 'etudiant90', 'etudiant90', 'etudiant90.etudiant90@etu.uae.ac.ma', 'H15161394', 5, '', 0, '0000-00-00'),
(565, 'etudiant91', 'etudiant91', 'etudiant91.etudiant91@etu.uae.ac.ma', 'H15161395', 6, '', 0, '0000-00-00'),
(566, 'etudiant92', 'etudiant92', 'etudiant92.etudiant92@etu.uae.ac.ma', 'H15161396', 7, '', 0, '0000-00-00'),
(567, 'etudiant93', 'etudiant93', 'etudiant93.etudiant93@etu.uae.ac.ma', 'H15161397', 8, '', 0, '0000-00-00'),
(568, 'etudiant94', 'etudiant94', 'etudiant94.etudiant94@etu.uae.ac.ma', 'H15161398', 9, '', 0, '0000-00-00'),
(569, 'etudiant95', 'etudiant95', 'etudiant95.etudiant95@etu.uae.ac.ma', 'H15161399', 10, '', 0, '0000-00-00'),
(570, 'etudiant96', 'etudiant96', 'etudiant96.etudiant96@etu.uae.ac.ma', 'H15161400', 11, '', 0, '0000-00-00'),
(571, 'etudiant97', 'etudiant97', 'etudiant97.etudiant97@etu.uae.ac.ma', 'H15161401', 3, '', 0, '0000-00-00'),
(572, 'etudiant98', 'etudiant98', 'etudiant98.etudiant98@etu.uae.ac.ma', 'H15161402', 4, '', 0, '0000-00-00'),
(573, 'etudiant99', 'etudiant99', 'etudiant99.etudiant99@etu.uae.ac.ma', 'H15161403', 5, '', 0, '0000-00-00'),
(574, 'etudiant100', 'etudiant100', 'etudiant100.etudiant100@etu.uae.ac.ma', 'H15161404', 6, '', 0, '0000-00-00');

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

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `contenu_text` varchar(500) DEFAULT NULL,
  `contenu_multimedia` varchar(255) DEFAULT NULL,
  `date_heure_auto` datetime DEFAULT current_timestamp(),
  `id_module` int(11) DEFAULT NULL,
  `id_filiere` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL,
  `annonce_suprimer` int(11) DEFAULT 0,
  `date_supression` datetime DEFAULT NULL,
  `destiner_profs` int(11) DEFAULT NULL,
  `destiner_etd` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `objet`, `contenu_text`, `contenu_multimedia`, `date_heure_auto`, `id_module`, `id_filiere`, `id_niveau`, `annonce_suprimer`, `date_supression`, `destiner_profs`, `destiner_etd`, `id_admin`) VALUES
(1, 'gegegegege', 'gegegegegegegegegege', '664953cd399972.52041791.pdf', '2024-05-19 02:20:13', 8, NULL, NULL, 1, '2024-05-25 20:55:38', NULL, NULL, NULL),
(2, 'testtest', 'testtesttesttesttesttest', '6649548e51b7a3.00286979.pdf', '2024-05-19 02:23:26', 8, NULL, NULL, 1, '2024-05-26 13:35:43', NULL, NULL, NULL),
(3, 'test2', 'testtesttesttest', '66495529c41a75.16442618.pdf', '2024-05-19 02:26:01', 8, NULL, NULL, 1, '2024-05-26 13:34:45', NULL, NULL, NULL),
(4, 'annonce sur la reportaion des exams', 'annonce sur la reportaion des examsannonce sur la reportaion des examsannonce sur la ', '6649ecc47386e8.82257335.pdf', '2024-05-19 13:12:52', 8, NULL, NULL, 1, '2024-05-27 10:45:22', NULL, NULL, NULL),
(5, 'uedjhbjdebuedjhbjdeb', 'uedjhbjdebuedjhbjdebuedjhbjdebuedjhbjdeb', '664a716626c167.11647277.pdf', '2024-05-19 22:38:46', 8, NULL, NULL, 1, '2024-05-27 10:47:19', NULL, NULL, NULL),
(6, 'test mil', 'test millontest millontest millontest millontest millontest millon', '664a8539adb576.37452791.pdf', '2024-05-20 00:03:21', 8, NULL, NULL, 1, '2024-05-27 10:48:26', NULL, NULL, NULL),
(7, 'tfctctctf', 'tfctctctftfctctctftfctctctftfctctctftfctctctftfctctctf', '664a87df2efc83.88368414.pdf', '2024-05-20 00:14:39', 8, NULL, NULL, 0, '2024-05-25 15:27:10', NULL, NULL, NULL),
(8, 'hdjvjhvdf', 'hdjvjhvdfhdjvjhvdfhdjvjhvdfhdjvjhvdf', '664a89a70f5c39.31724352.pdf', '2024-05-20 00:22:15', 8, NULL, NULL, 0, '2024-05-25 15:28:38', NULL, NULL, NULL),
(9, 'tstir hd ch', 'rporttionb', '66520d39446532.81195792.pdf', '2024-05-25 17:09:29', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(10, 'tstéé2', 'ok lts s if it\'s snt', '66520e46bf7f56.14976202.pdf', '2024-05-25 17:13:58', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(11, 'gjhvjg', 'kuhijkj', '66520eecce80b4.26943978.pdf', '2024-05-25 17:16:44', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(12, 'tst3', 'bcbjkdjdbkcj', '665211093a3883.05284515.pdf', '2024-05-25 17:25:45', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(13, 'tst4', 'jfgjhjbkhb', '6652117fda2267.66833548.pdf', '2024-05-25 17:27:43', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(14, 'anonce au etudiant de cette filliere', 'aujourdui je veut veux vous dire que che clavier a finalement travailler dans ce moment', '665297eb83eb21.28496262.pdf', '2024-05-26 03:05:50', NULL, NULL, 1, 0, NULL, 0, 1, 1),
(15, 'jfklfkjlkl', 'lkfllkfklkk', '665392a7010931.79045588.pdf', '2024-05-26 20:51:03', 7, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(16, 'hi there', 'actualyit\'s a neutral feeling i dont know if i have to toleret a little bit more but i promese i will try my best to overcome this feeling.', '66543a507dd472.78681943.jpg', '2024-05-27 08:46:24', 8, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(17, 'hi hello hi and', 'fgzshjxvsgxs', NULL, '2024-05-27 10:23:37', NULL, NULL, 4, 0, NULL, 0, 1, 1),
(18, 'test22', 'test22test22test22test22test22', NULL, '2024-05-27 10:25:32', NULL, NULL, 4, 0, NULL, 1, 0, 1),
(19, 'test33.pytest33.pytest33.py', 'test33.pytest33.pytest33.pytest33.py', NULL, '2024-05-27 10:26:21', NULL, NULL, 6, 0, NULL, 1, 1, 1),
(20, 'test33.pytest33.pytest33.py', 'test33.pytest33.pytest33.pytest33.pytest33.pytest33.pytest33.py', NULL, '2024-05-27 10:27:38', NULL, NULL, 10, 0, NULL, 1, 1, 1),
(21, 'jjkfjfnhrijfr', 'frkfjkrllfjrf', NULL, '2024-05-27 14:33:59', NULL, NULL, 3, 1, '2024-05-27 16:09:05', 0, 1, 1),
(22, 'hi ther', 'cccccjhkjj', NULL, '2024-05-27 16:32:53', NULL, NULL, 2, 0, NULL, 0, 1, 1),
(23, 'hijkfjjfk', ' nfnnkjnjkfnlnf fnk', NULL, '2024-05-27 21:52:04', NULL, NULL, 1, 0, NULL, 0, 1, 4),
(24, 'annonce de poursuite', 'hi everyone i would like to say  that ...', NULL, '2024-05-30 10:25:32', NULL, NULL, 3, 0, '2024-05-30 07:36:41', 1, 1, 4),
(25, 'uujhkukhu', 'jyuhijhuuihiuhuk', '665611e4386ec3.59671304.jpg', '2024-05-28 18:18:28', 33, NULL, NULL, 1, '2024-05-28 19:46:13', NULL, NULL, NULL),
(26, 'jhjhhlhk', 'hkjhhkjhujhujhk', '665615f9eca6d6.24546020.jpg', '2024-05-28 18:35:54', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(27, 'jjhjkk', 'ijhkkkkh', '665616e27e9194.71377325.jpg', '2024-05-28 18:39:46', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(28, 'hjkik;hjik lklk', 'ijhjkiujij', '66561702da4ee7.84963846.jpg', '2024-05-28 18:40:18', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(29, 'uykjhu', 'kjksjjks', '665618495b7ea0.81437596.jpg', '2024-05-28 18:45:45', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(30, 'hfijkikj', 'fololojkl', NULL, '2024-05-30 07:32:30', NULL, NULL, 3, 0, '2024-05-28 19:59:19', 1, 1, 4),
(31, 'kjkhjj', 'jkjjkk', '6656343c1231f9.47001010.jpg', '2024-05-28 20:45:00', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(32, 'hjkikjjkkjjorno', 'iuhhkjkjhkj', NULL, '2024-05-31 00:39:25', NULL, NULL, 3, 0, '2024-05-30 10:25:23', 1, 1, 4),
(33, 'huhkj', 'kjkj', NULL, '2024-05-29 03:42:22', NULL, NULL, 3, 1, '2024-05-30 07:34:30', 0, 1, 4),
(34, 'hfhjiujkj', 'hhihuikjjkjkj ', NULL, '2024-05-29 03:50:42', NULL, NULL, 1, 0, NULL, 0, 1, 4),
(35, 'hhjhj', 'jhjhjh', NULL, '2024-05-29 04:04:59', NULL, NULL, 3, 1, '2024-05-30 07:34:33', 1, 1, 4),
(36, 'jfhjfjk', 'hrkrll', '6656a32f4dcf82.80482940.jpg', '2024-05-29 04:38:23', 33, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(37, 'KHJHKFJ', 'KKJRLKJFKR', NULL, '2024-05-30 09:25:10', NULL, NULL, 1, 0, NULL, 1, 1, 4),
(38, 'annonce test', 'annonce test  ', NULL, '2024-05-30 23:39:03', NULL, NULL, 3, 0, NULL, 1, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `id_cour` int(11) NOT NULL,
  `nom_cour` varchar(255) DEFAULT NULL,
  `id_module` int(11) DEFAULT NULL,
  `cours_suprimer` int(11) DEFAULT 0,
  `date_supression` datetime DEFAULT NULL,
  `date_publication_cours` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id_cour`, `nom_cour`, `id_module`, `cours_suprimer`, `date_supression`, `date_publication_cours`) VALUES
(1, NULL, NULL, 0, NULL, NULL),
(2, NULL, NULL, 0, NULL, NULL),
(4, '8_cour1.pdf', 8, 1, '2024-05-25 15:33:35', NULL),
(5, '3_electrostatique.pdf', 3, 0, NULL, NULL),
(6, '3_test.pdf', 3, 0, NULL, NULL),
(7, '8_part2.pdf', 8, 1, '2024-05-26 13:34:02', NULL),
(8, '8_uedjhbjdebuedjhbjdeb.pdf', 8, 1, '2024-05-26 13:55:21', NULL),
(9, '8_hi i kjjlklllkklj.pdf', 8, 0, NULL, NULL),
(10, '8_rkkrlrffl.pdf', 8, 0, NULL, NULL),
(11, '7_hith.pdf', 7, 1, '2024-05-27 07:26:16', NULL),
(12, '7_bases§de§l\'algebre2.pdf', 7, 0, NULL, NULL),
(13, '33_cours1.pdf', 33, 1, '2024-05-31 00:42:03', '2024-05-30 10:28:23'),
(14, '33_chapitre§1§web.pdf', 33, 0, '2024-05-30 09:02:15', '2024-05-30 09:26:59'),
(15, '33_hkjj.pdf', 33, 0, '2024-05-30 08:41:10', '2024-05-30 09:27:03'),
(16, '33_HKJFKF.jpg', 33, 0, '2024-05-30 09:03:24', '2024-05-30 09:27:06'),
(17, '34_chapitre§1.pdf', 34, 0, NULL, NULL),
(18, '34_chapitre§2.pdf', 34, 0, NULL, NULL),
(19, '33_KRKJKFRR.jpg', 33, 0, NULL, '2024-05-30 00:00:00'),
(20, '33_fgghdghfd.pdf', 33, 0, NULL, '2024-05-30 00:00:00'),
(21, '33_jhbjhjh.pdf', 33, 0, NULL, '2024-05-30 00:00:00'),
(22, '33_cours§test§.pdf', 33, 0, NULL, '2024-05-31 00:00:00'),
(23, '33_cours§tp.pdf', 33, 0, NULL, '2024-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant2`
--

CREATE TABLE `etudiant2` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `e_mail_personnel` varchar(255) DEFAULT NULL,
  `hashed_pass` varchar(255) DEFAULT NULL,
  `num_etudiant` varchar(40) NOT NULL,
  `id_niveau` int(11) DEFAULT NULL,
  `id_filiere` int(11) DEFAULT NULL,
  `mail_etudiant` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'defaultusrimg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant2`
--

INSERT INTO `etudiant2` (`id`, `nom`, `prenom`, `e_mail_personnel`, `hashed_pass`, `num_etudiant`, `id_niveau`, `id_filiere`, `mail_etudiant`, `photo`) VALUES
(8, 'etudiant33', 'test33', 'test33.etudiant33@gmail.com', '$2y$10$nhBF84Owm21JIbgn94XXDufoORF1yNGYQMRL3uQXbP4VM6P9MWrIq', '', 3, 2, 'test33.etudiant33@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(9, 'etudiant44', 'test44', 'test44.etudiant44@gmail.com', '$2y$10$alDCCsQTrOEVJ2bYVkYCYeNP8jxkV9wJnf1cpiHd.TnjDcq4Hi8Ti', '', 3, 2, 'test44.etudiant44@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(109, 'etudiant1', 'etudiant1', 'etudiant1.etudiant1@gmail.com', '$2y$10$v3CYuj7wmD47iOfh4NjMmuA8x3sfulvXWYyWrsepqjLo70NFk4wye', 'F14151216', 3, 2, 'etudiant1.etudiant1@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(110, 'etudiant2', 'etudiant2', 'etudiant2.etudiant2@gmail.com', NULL, 'J15141718', 4, 2, 'etudiant2.etudiant2@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(111, 'etudiant3', 'etudiant3', 'etudiant3.etudiant3@gmail.com', NULL, 'M15121614', 5, 2, 'etudiant3.etudiant3@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(112, 'etudiant4', 'etudiant4', 'etudiant4.etudiant4@gmail.com', NULL, 'H14151613', 6, 3, 'etudiant4.etudiant4@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(113, 'etudiant5', 'etudiant5', 'etudiant5.etudiant5@gmail.com', NULL, 'J14151216', 7, 3, 'etudiant5.etudiant5@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(114, 'etudiant6', 'etudiant6', 'etudiant6.etudiant6@gmail.com', NULL, 'K15141612', 8, 3, 'etudiant6.etudiant6@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(115, 'etudiant7', 'etudiant7', 'etudiant7.etudiant7@gmail.com', NULL, 'J14154121', 9, 4, 'etudiant7.etudiant7@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(116, 'etudiant8', 'etudiant8', 'etudiant8.etudiant8@gmail.com', NULL, 'H15161312', 10, 4, 'etudiant8.etudiant8@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(117, 'etudiant9', 'etudiant9', 'etudiant9.etudiant9@gmail.com', NULL, 'H15161313', 11, 4, 'etudiant9.etudiant9@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(118, 'etudiant10', 'etudiant10', 'etudiant10.etudiant10@gmail.com', NULL, 'H15161314', 3, 2, 'etudiant10.etudiant10@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(119, 'etudiant11', 'etudiant11', 'etudiant11.etudiant11@gmail.com', NULL, 'H15161315', 4, 2, 'etudiant11.etudiant11@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(120, 'etudiant12', 'etudiant12', 'etudiant12.etudiant12@gmail.com', NULL, 'H15161316', 5, 2, 'etudiant12.etudiant12@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(121, 'etudiant13', 'etudiant13', 'etudiant13.etudiant13@gmail.com', NULL, 'H15161317', 6, 3, 'etudiant13.etudiant13@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(122, 'etudiant14', 'etudiant14', 'etudiant14.etudiant14@gmail.com', NULL, 'H15161318', 7, 3, 'etudiant14.etudiant14@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(123, 'etudiant15', 'etudiant15', 'etudiant15.etudiant15@gmail.com', NULL, 'H15161319', 8, 3, 'etudiant15.etudiant15@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(124, 'etudiant16', 'etudiant16', 'etudiant16.etudiant16@gmail.com', NULL, 'H15161320', 9, 4, 'etudiant16.etudiant16@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(125, 'etudiant17', 'etudiant17', 'etudiant17.etudiant17@gmail.com', NULL, 'H15161321', 10, 4, 'etudiant17.etudiant17@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(126, 'etudiant18', 'etudiant18', 'etudiant18.etudiant18@gmail.com', NULL, 'H15161322', 11, 4, 'etudiant18.etudiant18@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(127, 'etudiant19', 'etudiant19', 'etudiant19.etudiant19@gmail.com', NULL, 'H15161323', 3, 2, 'etudiant19.etudiant19@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(128, 'etudiant20', 'etudiant20', 'etudiant20.etudiant20@gmail.com', NULL, 'H15161324', 4, 2, 'etudiant20.etudiant20@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(129, 'etudiant21', 'etudiant21', 'etudiant21.etudiant21@gmail.com', NULL, 'H15161325', 5, 2, 'etudiant21.etudiant21@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(130, 'etudiant22', 'etudiant22', 'etudiant22.etudiant22@gmail.com', NULL, 'H15161326', 6, 3, 'etudiant22.etudiant22@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(131, 'etudiant23', 'etudiant23', 'etudiant23.etudiant23@gmail.com', NULL, 'H15161327', 7, 3, 'etudiant23.etudiant23@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(132, 'etudiant24', 'etudiant24', 'etudiant24.etudiant24@gmail.com', NULL, 'H15161328', 8, 3, 'etudiant24.etudiant24@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(133, 'etudiant25', 'etudiant25', 'etudiant25.etudiant25@gmail.com', NULL, 'H15161329', 9, 4, 'etudiant25.etudiant25@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(134, 'etudiant26', 'etudiant26', 'etudiant26.etudiant26@gmail.com', NULL, 'H15161330', 10, 4, 'etudiant26.etudiant26@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(135, 'etudiant27', 'etudiant27', 'etudiant27.etudiant27@gmail.com', NULL, 'H15161331', 11, 4, 'etudiant27.etudiant27@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(136, 'etudiant28', 'etudiant28', 'etudiant28.etudiant28@gmail.com', NULL, 'H15161332', 3, 2, 'etudiant28.etudiant28@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(137, 'etudiant29', 'etudiant29', 'etudiant29.etudiant29@gmail.com', NULL, 'H15161333', 4, 2, 'etudiant29.etudiant29@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(138, 'etudiant30', 'etudiant30', 'etudiant30.etudiant30@gmail.com', NULL, 'H15161334', 5, 2, 'etudiant30.etudiant30@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(139, 'etudiant31', 'etudiant31', 'etudiant31.etudiant31@gmail.com', NULL, 'H15161335', 6, 3, 'etudiant31.etudiant31@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(140, 'etudiant32', 'etudiant32', 'etudiant32.etudiant32@gmail.com', NULL, 'H15161336', 7, 3, 'etudiant32.etudiant32@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(141, 'etudiant33', 'etudiant33', 'etudiant33.etudiant33@gmail.com', NULL, 'H15161337', 8, 3, 'etudiant33.etudiant33@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(142, 'etudiant34', 'etudiant34', 'etudiant34.etudiant34@gmail.com', NULL, 'H15161338', 9, 4, 'etudiant34.etudiant34@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(143, 'etudiant35', 'etudiant35', 'etudiant35.etudiant35@gmail.com', NULL, 'H15161339', 10, 4, 'etudiant35.etudiant35@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(144, 'etudiant36', 'etudiant36', 'etudiant36.etudiant36@gmail.com', NULL, 'H15161340', 11, 4, 'etudiant36.etudiant36@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(145, 'etudiant37', 'etudiant37', 'etudiant37.etudiant37@gmail.com', NULL, 'H15161341', 3, 2, 'etudiant37.etudiant37@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(146, 'etudiant38', 'etudiant38', 'etudiant38.etudiant38@gmail.com', NULL, 'H15161342', 4, 2, 'etudiant38.etudiant38@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(147, 'etudiant39', 'etudiant39', 'etudiant39.etudiant39@gmail.com', NULL, 'H15161343', 5, 2, 'etudiant39.etudiant39@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(148, 'etudiant40', 'etudiant40', 'etudiant40.etudiant40@gmail.com', NULL, 'H15161344', 6, 3, 'etudiant40.etudiant40@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(149, 'etudiant41', 'etudiant41', 'etudiant41.etudiant41@gmail.com', NULL, 'H15161345', 7, 3, 'etudiant41.etudiant41@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(150, 'etudiant42', 'etudiant42', 'etudiant42.etudiant42@gmail.com', NULL, 'H15161346', 8, 3, 'etudiant42.etudiant42@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(151, 'etudiant43', 'etudiant43', 'etudiant43.etudiant43@gmail.com', NULL, 'H15161347', 9, 4, 'etudiant43.etudiant43@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(152, 'etudiant44', 'etudiant44', 'etudiant44.etudiant44@gmail.com', NULL, 'H15161348', 10, 4, 'etudiant44.etudiant44@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(153, 'etudiant45', 'etudiant45', 'etudiant45.etudiant45@gmail.com', NULL, 'H15161349', 11, 4, 'etudiant45.etudiant45@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(154, 'etudiant46', 'etudiant46', 'etudiant46.etudiant46@gmail.com', NULL, 'H15161350', 3, 2, 'etudiant46.etudiant46@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(155, 'etudiant47', 'etudiant47', 'etudiant47.etudiant47@gmail.com', NULL, 'H15161351', 4, 2, 'etudiant47.etudiant47@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(156, 'etudiant48', 'etudiant48', 'etudiant48.etudiant48@gmail.com', NULL, 'H15161352', 5, 2, 'etudiant48.etudiant48@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(157, 'etudiant49', 'etudiant49', 'etudiant49.etudiant49@gmail.com', NULL, 'H15161353', 6, 3, 'etudiant49.etudiant49@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(158, 'etudiant50', 'etudiant50', 'etudiant50.etudiant50@gmail.com', NULL, 'H15161354', 7, 3, 'etudiant50.etudiant50@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(159, 'etudiant51', 'etudiant51', 'etudiant51.etudiant51@gmail.com', NULL, 'H15161355', 8, 3, 'etudiant51.etudiant51@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(160, 'etudiant52', 'etudiant52', 'etudiant52.etudiant52@gmail.com', NULL, 'H15161356', 9, 4, 'etudiant52.etudiant52@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(161, 'etudiant53', 'etudiant53', 'etudiant53.etudiant53@gmail.com', NULL, 'H15161357', 10, 4, 'etudiant53.etudiant53@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(162, 'etudiant54', 'etudiant54', 'etudiant54.etudiant54@gmail.com', NULL, 'H15161358', 11, 4, 'etudiant54.etudiant54@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(163, 'etudiant55', 'etudiant55', 'etudiant55.etudiant55@gmail.com', NULL, 'H15161359', 3, 2, 'etudiant55.etudiant55@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(164, 'etudiant56', 'etudiant56', 'etudiant56.etudiant56@gmail.com', NULL, 'H15161360', 4, 2, 'etudiant56.etudiant56@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(165, 'etudiant57', 'etudiant57', 'etudiant57.etudiant57@gmail.com', NULL, 'H15161361', 5, 2, 'etudiant57.etudiant57@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(166, 'etudiant58', 'etudiant58', 'etudiant58.etudiant58@gmail.com', NULL, 'H15161362', 6, 3, 'etudiant58.etudiant58@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(167, 'etudiant59', 'etudiant59', 'etudiant59.etudiant59@gmail.com', NULL, 'H15161363', 7, 3, 'etudiant59.etudiant59@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(168, 'etudiant60', 'etudiant60', 'etudiant60.etudiant60@gmail.com', NULL, 'H15161364', 8, 3, 'etudiant60.etudiant60@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(169, 'etudiant61', 'etudiant61', 'etudiant61.etudiant61@gmail.com', NULL, 'H15161365', 3, 2, 'etudiant61.etudiant61@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(170, 'etudiant62', 'etudiant62', 'etudiant62.etudiant62@gmail.com', NULL, 'H15161366', 4, 2, 'etudiant62.etudiant62@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(171, 'etudiant63', 'etudiant63', 'etudiant63.etudiant63@gmail.com', NULL, 'H15161367', 5, 2, 'etudiant63.etudiant63@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(172, 'etudiant64', 'etudiant64', 'etudiant64.etudiant64@gmail.com', NULL, 'H15161368', 6, 3, 'etudiant64.etudiant64@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(173, 'etudiant65', 'etudiant65', 'etudiant65.etudiant65@gmail.com', NULL, 'H15161369', 7, 3, 'etudiant65.etudiant65@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(174, 'etudiant66', 'etudiant66', 'etudiant66.etudiant66@gmail.com', NULL, 'H15161370', 8, 3, 'etudiant66.etudiant66@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(175, 'etudiant67', 'etudiant67', 'etudiant67.etudiant67@gmail.com', NULL, 'H15161371', 9, 4, 'etudiant67.etudiant67@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(176, 'etudiant68', 'etudiant68', 'etudiant68.etudiant68@gmail.com', NULL, 'H15161372', 10, 4, 'etudiant68.etudiant68@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(177, 'etudiant69', 'etudiant69', 'etudiant69.etudiant69@gmail.com', NULL, 'H15161373', 11, 4, 'etudiant69.etudiant69@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(178, 'etudiant70', 'etudiant70', 'etudiant70.etudiant70@gmail.com', NULL, 'H15161374', 3, 2, 'etudiant70.etudiant70@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(179, 'etudiant71', 'etudiant71', 'etudiant71.etudiant71@gmail.com', NULL, 'H15161375', 4, 2, 'etudiant71.etudiant71@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(180, 'etudiant72', 'etudiant72', 'etudiant72.etudiant72@gmail.com', NULL, 'H15161376', 5, 2, 'etudiant72.etudiant72@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(181, 'etudiant73', 'etudiant73', 'etudiant73.etudiant73@gmail.com', NULL, 'H15161377', 6, 3, 'etudiant73.etudiant73@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(182, 'etudiant74', 'etudiant74', 'etudiant74.etudiant74@gmail.com', NULL, 'H15161378', 7, 3, 'etudiant74.etudiant74@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(183, 'etudiant75', 'etudiant75', 'etudiant75.etudiant75@gmail.com', NULL, 'H15161379', 8, 3, 'etudiant75.etudiant75@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(184, 'etudiant76', 'etudiant76', 'etudiant76.etudiant76@gmail.com', NULL, 'H15161380', 9, 4, 'etudiant76.etudiant76@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(185, 'etudiant77', 'etudiant77', 'etudiant77.etudiant77@gmail.com', NULL, 'H15161381', 10, 4, 'etudiant77.etudiant77@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(186, 'etudiant78', 'etudiant78', 'etudiant78.etudiant78@gmail.com', NULL, 'H15161382', 11, 4, 'etudiant78.etudiant78@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(187, 'etudiant79', 'etudiant79', 'etudiant79.etudiant79@gmail.com', NULL, 'H15161383', 3, 2, 'etudiant79.etudiant79@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(188, 'etudiant80', 'etudiant80', 'etudiant80.etudiant80@gmail.com', NULL, 'H15161384', 4, 2, 'etudiant80.etudiant80@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(189, 'etudiant81', 'etudiant81', 'etudiant81.etudiant81@gmail.com', NULL, 'H15161385', 5, 2, 'etudiant81.etudiant81@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(190, 'etudiant82', 'etudiant82', 'etudiant82.etudiant82@gmail.com', NULL, 'H15161386', 6, 3, 'etudiant82.etudiant82@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(191, 'etudiant83', 'etudiant83', 'etudiant83.etudiant83@gmail.com', NULL, 'H15161387', 7, 3, 'etudiant83.etudiant83@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(192, 'etudiant84', 'etudiant84', 'etudiant84.etudiant84@gmail.com', NULL, 'H15161388', 8, 3, 'etudiant84.etudiant84@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(193, 'etudiant85', 'etudiant85', 'etudiant85.etudiant85@gmail.com', NULL, 'H15161389', 9, 4, 'etudiant85.etudiant85@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(194, 'etudiant86', 'etudiant86', 'etudiant86.etudiant86@gmail.com', NULL, 'H15161390', 10, 4, 'etudiant86.etudiant86@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(195, 'etudiant87', 'etudiant87', 'etudiant87.etudiant87@gmail.com', NULL, 'H15161391', 11, 4, 'etudiant87.etudiant87@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(196, 'etudiant88', 'etudiant88', 'etudiant88.etudiant88@gmail.com', NULL, 'H15161392', 3, 2, 'etudiant88.etudiant88@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(197, 'etudiant89', 'etudiant89', 'etudiant89.etudiant89@gmail.com', NULL, 'H15161393', 4, 2, 'etudiant89.etudiant89@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(198, 'etudiant90', 'etudiant90', 'etudiant90.etudiant90@gmail.com', NULL, 'H15161394', 5, 2, 'etudiant90.etudiant90@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(199, 'etudiant91', 'etudiant91', 'etudiant91.etudiant91@gmail.com', NULL, 'H15161395', 6, 3, 'etudiant91.etudiant91@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(200, 'etudiant92', 'etudiant92', 'etudiant92.etudiant92@gmail.com', NULL, 'H15161396', 7, 3, 'etudiant92.etudiant92@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(201, 'etudiant93', 'etudiant93', 'etudiant93.etudiant93@gmail.com', NULL, 'H15161397', 8, 3, 'etudiant93.etudiant93@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(202, 'etudiant94', 'etudiant94', 'etudiant94.etudiant94@gmail.com', NULL, 'H15161398', 9, 4, 'etudiant94.etudiant94@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(203, 'etudiant95', 'etudiant95', 'etudiant95.etudiant95@gmail.com', NULL, 'H15161399', 10, 4, 'etudiant95.etudiant95@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(204, 'etudiant96', 'etudiant96', 'etudiant96.etudiant96@gmail.com', NULL, 'H15161400', 11, 4, 'etudiant96.etudiant96@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(205, 'etudiant97', 'etudiant97', 'etudiant97.etudiant97@gmail.com', NULL, 'H15161401', 3, 2, 'etudiant97.etudiant97@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(206, 'etudiant98', 'etudiant98', 'etudiant98.etudiant98@gmail.com', NULL, 'H15161402', 4, 2, 'etudiant98.etudiant98@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(207, 'etudiant99', 'etudiant99', 'etudiant99.etudiant99@gmail.com', NULL, 'H15161403', 5, 2, 'etudiant99.etudiant99@etu.uae.ac.ma', 'defaultusrimg.jpg'),
(208, 'etudiant100', 'etudiant100', 'etudiant100.etudiant100@gmail.com', NULL, 'H15161404', 6, 3, 'etudiant100.etudiant100@etu.uae.ac.ma', 'defaultusrimg.jpg');

--
-- Déclencheurs `etudiant2`
--
DELIMITER $$
CREATE TRIGGER `generate_email_etu` BEFORE INSERT ON `etudiant2` FOR EACH ROW SET NEW.mail_etudiant = CONCAT(NEW.prenom, '.', NEW.nom, '@etu.uae.ac.ma')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `generate_pemail_etudiant2` BEFORE INSERT ON `etudiant2` FOR EACH ROW BEGIN
    IF NEW.e_mail_personnel IS NULL THEN
        SET NEW.e_mail_personnel = CONCAT(NEW.prenom, '.', NEW.nom, '@gmail.com');
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `email`, `photo`) VALUES
(9, 'naruto', 'naruto@gmail.com', 'naruto41.webp'),
(10, 'night moon', 'moonnignt@gmail.com', 'mnl2hd.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_filiere` int(11) NOT NULL,
  `nom_filiere` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_filiere`, `nom_filiere`) VALUES
(1, 'CP'),
(2, 'TDIA'),
(3, 'ID'),
(4, 'GI'),
(5, 'GC'),
(6, 'GEER'),
(7, 'GM'),
(8, 'GEE');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom_module` varchar(255) DEFAULT NULL,
  `num_semestre` int(11) DEFAULT NULL,
  `id_niveau` int(11) DEFAULT NULL,
  `nb_heures` int(11) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `id_semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `num_semestre`, `id_niveau`, `nb_heures`, `id_prof`, `id_semestre`) VALUES
(1, 'Algèbre 1 : Algèbre de basemodule1', 1, 1, 24, NULL, 1),
(2, 'Analyse 1 : Analyse réelle', 1, 1, 24, 2, 1),
(3, 'Physique 1 : Electrostatique et magnétostatique', 1, 1, 24, 3, 1),
(4, 'Mécanique 1 : Mécanique du point', 1, 1, 24, NULL, 1),
(5, 'Informatique 1 : Initiation à l’informatique', 1, 1, 24, NULL, 1),
(6, 'Langues et communications 1 : TEC Français & TEC Anglais', 1, 1, 24, NULL, 1),
(7, 'Algèbre 2 : Algèbre linéaire', 2, 1, 24, 3, 2),
(8, 'Analyse 2 : Equations différentielles et séries\r\n', 2, 1, 24, 2, 2),
(9, 'Physique 2 : Optique', 2, 1, 24, NULL, 2),
(10, 'Chimie 1 : Atomistique & Liaisons chimiques', 2, 1, 24, NULL, 2),
(11, 'Géologie : Géologie générale', 2, 1, 24, NULL, 2),
(12, 'Langues et communications 2 : TEC Français & TEC Anglais', 2, 1, 24, NULL, 2),
(13, 'Algèbre 3 : Algèbre quadratique', 3, 2, 24, NULL, 1),
(14, 'Analyse 3 : Fonctions de plusieurs variables', 3, 2, 24, NULL, 1),
(15, 'Physique 3 : Electrocinétique et Electromagnétisme', 3, 2, 24, NULL, 1),
(16, 'Mécanique 2 : Mécanique du solide', 3, 2, 24, NULL, 1),
(17, 'Informatique 2 : Programmation C', 3, 2, 24, NULL, 1),
(18, 'Langues et communications 3 : TEC Français & TEC Anglais', 3, 2, 24, NULL, 1),
(19, 'Mathématiques appliquées : Probabilités et statistiques descriptives & Analyse numérique', 4, 2, 24, NULL, 2),
(20, 'Analyse 4 : Intégrales et formes différentielles', 4, 2, 24, NULL, 2),
(21, 'Physique 4 : Thermodynamique et Statique des fluides', 4, 2, 24, NULL, 2),
(22, 'Electronique : Electronique analogique', 4, 2, 24, NULL, 2),
(23, 'Informatique 3 : Outils informatique', 4, 2, 24, NULL, 2),
(24, 'Chimie 2 : Thermochimie & Cristallochimie', 4, 2, 24, NULL, 2),
(25, 'Théorie des langages et compilation', 1, 3, 24, 14, 1),
(26, 'Systèmes d’Information et Bases de Données', 1, 3, 24, NULL, 1),
(27, 'Architecture des ordinateurs et systèmes d’exploitation', 1, 3, 24, NULL, 1),
(28, 'Structure de données et Algorithmique avancée', 1, 3, 24, 14, 1),
(29, 'Communication Professionnelle et Soft Skills 1', 1, 3, 24, NULL, 1),
(30, 'Architecture d\'entreprise et transformation digitale', 1, 3, 24, NULL, 1),
(31, 'Programmation Orientée Objet Java', 2, 3, 24, NULL, 2),
(32, 'Programmation Python / Programmation fonctionnelle', 2, 3, 24, NULL, 2),
(33, 'Développement Web', 2, 3, 24, 14, 2),
(34, 'Gestion de projets informatiques', 2, 3, 24, 14, 2),
(35, 'Industrie de numérique', 2, 3, 24, NULL, 2),
(36, 'Business, Marketing, and Management Principles for IT', 2, 3, 24, NULL, 2),
(37, 'Cloud computing', 3, 4, 24, NULL, 1),
(38, 'Cartographie des systèmes d\'information', 3, 4, 24, NULL, 1),
(39, 'Bases de Intelligence Artificielle', 3, 4, 24, NULL, 1),
(40, 'Architecture Logicielle et UML', 3, 4, 24, NULL, 1),
(41, 'Communication Professionnelle et Soft Skills 2', 3, 4, 24, NULL, 1),
(42, 'Gestion de projets digitaux', 3, 4, 24, NULL, 1),
(43, 'Applications de l’Intelligence Artificielle', 4, 4, 24, NULL, 2),
(44, 'Ingestion et stockage des données', 4, 4, 24, NULL, 2),
(45, 'Big data', 4, 4, 24, NULL, 2),
(46, 'Droit et sécurité des données', 4, 4, 24, NULL, 2),
(47, 'Cyber Security', 4, 4, 24, NULL, 2),
(48, 'La Veille Stratégique, Scientifique et Technologique', 5, 5, 24, NULL, 1),
(49, 'Gouvernance et Urbanisation des SI', 5, 5, 24, NULL, 1),
(50, 'DevOps', 5, 5, 24, NULL, 1),
(51, 'INNOVATION ENGINEERING & Digitalisation', 5, 5, 24, NULL, 1),
(52, 'WEB MARKETING ET CRM', 5, 5, 24, NULL, 1),
(53, 'Business English', 5, 5, 24, NULL, 1),
(54, 'Projet de Fin d\'Année (PFE)', 5, 5, 24, NULL, 1),
(55, 'Analyse numérique matricielle et Statistique Inférentielle', 1, 6, 24, NULL, 1),
(56, 'Théorie des langages et compilation', 1, 6, 24, NULL, 1),
(57, 'Systèmes d’Information et Bases de Données', 1, 6, 24, NULL, 1),
(58, 'Architecture des ordinateurs et systèmes d’exploitation (Computer Architectures and Organisation)', 1, 6, 24, NULL, 1),
(59, 'Communication Professionnelle et Soft Skills -I', 1, 6, 24, NULL, 1),
(60, 'Recherche d’Information (RI)', 1, 6, 24, NULL, 1),
(61, 'Programmation Orientée Objet Java', 2, 6, 24, NULL, 2),
(62, 'Data Mining', 2, 6, 24, NULL, 2),
(63, 'Statistique en grande dimension', 2, 6, 24, NULL, 2),
(64, 'Entreprenariat -I-', 2, 6, 24, NULL, 2),
(65, 'Modélisation Stochastique', 2, 6, 24, NULL, 2),
(66, 'Administration et Optimisation des Bases de Données', 2, 6, 24, NULL, 2),
(67, 'Intelligence Artificielle I – Machine Learning', 3, 7, 24, NULL, 1),
(68, 'Programmation Python / Programmation fonctionnelle', 3, 7, 24, NULL, 1),
(69, 'Architecture Logicielle et UML', 3, 7, 24, NULL, 1),
(70, 'Fondements du Big Data', 3, 7, 24, NULL, 1),
(71, 'Communication Professionnelle et Soft Skills -II-', 3, 7, 24, NULL, 1),
(72, 'Bases de données avancées', 3, 7, 24, NULL, 1),
(73, 'Big Data Avancées', 4, 7, 24, NULL, 2),
(74, 'Intelligence Artificielle II – Deep Learning', 4, 7, 24, NULL, 2),
(75, 'Data Warehouse et Data Lake', 4, 7, 24, NULL, 2),
(76, 'Programmation et architecture Parallèle', 4, 7, 24, NULL, 2),
(77, 'Traitement Automatique de Langue (TAL) naturelle et ses applications', 4, 7, 24, NULL, 2),
(78, 'Entreprenariat -II-', 4, 7, 24, NULL, 2),
(79, 'Big Data Visualisation', 5, 8, 24, NULL, 1),
(80, 'Business Intelligence et Veille Stratégique', 5, 8, 24, NULL, 1),
(81, 'Entreprenariat -III-', 5, 8, 24, NULL, 1),
(82, 'Social Network Mining', 5, 8, 24, NULL, 1),
(83, 'Web Marketing et CRM', 5, 8, 24, NULL, 1),
(84, 'Transformation digitale', 5, 8, 24, NULL, 1),
(85, 'Projet de Fin d\'Année (PFE)', 5, 8, 24, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id_niveau` int(11) NOT NULL,
  `nom_niveau` varchar(255) DEFAULT NULL,
  `id_filiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `nom_niveau`, `id_filiere`) VALUES
(1, 'AP1', 1),
(2, 'AP2', 1),
(3, 'TDIA1', 2),
(4, 'TDIA2', 2),
(5, 'TDIA3', 2),
(6, 'ID1', 3),
(7, 'ID2', 3),
(8, 'ID3', 3),
(9, 'GI1', 4),
(10, 'GI2', 4),
(11, 'GI3', 4),
(12, 'GC1', 5),
(13, 'GC2', 5),
(14, 'GC3', 5),
(15, 'GEER1', 6),
(16, 'GEER2', 6),
(17, 'GEER3', 6),
(18, 'GM1', 7),
(19, 'GM2', 7),
(20, 'GM3', 7),
(21, 'GEE1', 8),
(22, 'GEE2', 8),
(23, 'GEE3', 8);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id_notes` int(11) NOT NULL,
  `note1` float DEFAULT NULL,
  `note2` float DEFAULT NULL,
  `note3` float DEFAULT NULL,
  `id_module` int(11) DEFAULT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `pourcentage1` int(11) DEFAULT NULL,
  `pourcentage2` int(11) DEFAULT NULL,
  `pourcentage3` int(11) DEFAULT NULL,
  `moyenne` int(11) DEFAULT NULL,
  `valider` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id_notes`, `note1`, `note2`, `note3`, `id_module`, `id_etudiant`, `pourcentage1`, `pourcentage2`, `pourcentage3`, `moyenne`, `valider`) VALUES
(18, 12, 12, 14.3, 33, 8, 20, 30, 50, 13, 1),
(19, 14, 12, 13.3, 33, 9, 20, 30, 50, 13, 1),
(20, 14, 12, 18.3, 33, 109, 20, 30, 50, 16, 1),
(21, 10.3, 10, 10, 33, 118, 20, 30, 50, 10, 0),
(22, 13, 11, 13, 33, 127, 20, 30, 50, 12, 1),
(23, 12, 12, 12, 33, 136, 20, 30, 50, 12, 1),
(24, 13.3, 13, 12, 33, 145, 20, 30, 50, 13, 1),
(25, 13, 14, 12, 33, 154, 20, 30, 50, 13, 1),
(26, 13, 13, 13.3, 33, 163, 20, 30, 50, 13, 1),
(27, 13, 12.3, 16.3, 33, 169, 20, 30, 50, 14, 1),
(28, 12, 10, 10, 33, 178, 20, 30, 50, 10, 0),
(29, 12, 9, 10, 33, 187, 20, 30, 50, 10, 0),
(30, 10, 10, 10, 33, 196, 20, 30, 50, 10, 0),
(31, 11, 11, 11, 33, 205, 20, 30, 50, 11, 0);

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `id_prof` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail_prof` varchar(255) DEFAULT NULL,
  `hashed_pass` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'defaultusrimg.jpg',
  `e_mail_personnel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `nom`, `prenom`, `mail_prof`, `hashed_pass`, `photo`, `e_mail_personnel`) VALUES
(1, 'prof1', 'ensah', 'ensah.prof1@uae.ac.ma', '12345', 'defaultusrimg.jpg', NULL),
(2, 'prof1', 'test1', 'test1.prof1@uae.ac.ma', '12345', 'defaultusrimg.jpg', NULL),
(3, 'prof2', 'test2', 'test2.prof2@uae.ac.ma', '12345', 'defaultusrimg.jpg', NULL),
(14, 'prof1', 'prof1', 'prof1.prof1@uae.ac.ma', '$2y$10$g3upu.ayPSSwW4OS2F/6PedgWlAYWKfc7CHxeyWx5nlZy9P3903wy', 'defaultusrimg.jpg', 'prof1.prof1@gmail.com'),
(15, 'prof2', 'prof2', 'prof2.prof2@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof2.prof2@gmail.com'),
(16, 'prof3', 'prof3', 'prof3.prof3@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof3.prof3@gmail.com'),
(17, 'prof4', 'prof4', 'prof4.prof4@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof4.prof4@gmail.com'),
(18, 'prof5', 'prof5', 'prof5.prof5@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof5.prof5@gmail.com'),
(19, 'prof6', 'prof6', 'prof6.prof6@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof6.prof6@gmail.com'),
(20, 'prof7', 'prof7', 'prof7.prof7@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof7.prof7@gmail.com'),
(21, 'prof8', 'prof8', 'prof8.prof8@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof8.prof8@gmail.com'),
(22, 'prof9', 'prof9', 'prof9.prof9@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof9.prof9@gmail.com'),
(23, 'prof10', 'prof10', 'prof10.prof10@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof10.prof10@gmail.com'),
(24, 'prof11', 'prof11', 'prof11.prof11@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof11.prof11@gmail.com'),
(25, 'prof12', 'prof12', 'prof12.prof12@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof12.prof12@gmail.com'),
(26, 'prof13', 'prof13', 'prof13.prof13@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof13.prof13@gmail.com'),
(27, 'prof14', 'prof14', 'prof14.prof14@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof14.prof14@gmail.com'),
(28, 'prof15', 'prof15', 'prof15.prof15@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof15.prof15@gmail.com'),
(29, 'prof16', 'prof16', 'prof16.prof16@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof16.prof16@gmail.com'),
(30, 'prof17', 'prof17', 'prof17.prof17@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof17.prof17@gmail.com'),
(31, 'prof18', 'prof18', 'prof18.prof18@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof18.prof18@gmail.com'),
(32, 'prof19', 'prof19', 'prof19.prof19@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof19.prof19@gmail.com'),
(33, 'prof20', 'prof20', 'prof20.prof20@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof20.prof20@gmail.com'),
(34, 'prof21', 'prof21', 'prof21.prof21@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof21.prof21@gmail.com'),
(35, 'prof22', 'prof22', 'prof22.prof22@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof22.prof22@gmail.com'),
(36, 'prof23', 'prof23', 'prof23.prof23@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof23.prof23@gmail.com'),
(37, 'prof24', 'prof24', 'prof24.prof24@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof24.prof24@gmail.com'),
(38, 'prof25', 'prof25', 'prof25.prof25@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof25.prof25@gmail.com'),
(39, 'prof26', 'prof26', 'prof26.prof26@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof26.prof26@gmail.com'),
(40, 'prof27', 'prof27', 'prof27.prof27@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof27.prof27@gmail.com'),
(41, 'prof28', 'prof28', 'prof28.prof28@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof28.prof28@gmail.com'),
(42, 'prof29', 'prof29', 'prof29.prof29@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof29.prof29@gmail.com'),
(43, 'prof30', 'prof30', 'prof30.prof30@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof30.prof30@gmail.com'),
(44, 'prof31', 'prof31', 'prof31.prof31@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof31.prof31@gmail.com'),
(45, 'prof32', 'prof32', 'prof32.prof32@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof32.prof32@gmail.com'),
(46, 'prof33', 'prof33', 'prof33.prof33@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof33.prof33@gmail.com'),
(47, 'prof34', 'prof34', 'prof34.prof34@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof34.prof34@gmail.com'),
(48, 'prof35', 'prof35', 'prof35.prof35@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof35.prof35@gmail.com'),
(49, 'prof36', 'prof36', 'prof36.prof36@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof36.prof36@gmail.com'),
(50, 'prof37', 'prof37', 'prof37.prof37@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof37.prof37@gmail.com'),
(51, 'prof38', 'prof38', 'prof38.prof38@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof38.prof38@gmail.com'),
(52, 'prof39', 'prof39', 'prof39.prof39@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof39.prof39@gmail.com'),
(53, 'prof40', 'prof40', 'prof40.prof40@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof40.prof40@gmail.com'),
(54, 'prof41', 'prof41', 'prof41.prof41@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof41.prof41@gmail.com'),
(55, 'prof42', 'prof42', 'prof42.prof42@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof42.prof42@gmail.com'),
(56, 'prof43', 'prof43', 'prof43.prof43@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof43.prof43@gmail.com'),
(57, 'prof44', 'prof44', 'prof44.prof44@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof44.prof44@gmail.com'),
(58, 'prof45', 'prof45', 'prof45.prof45@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof45.prof45@gmail.com'),
(59, 'prof46', 'prof46', 'prof46.prof46@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof46.prof46@gmail.com'),
(60, 'prof47', 'prof47', 'prof47.prof47@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof47.prof47@gmail.com'),
(61, 'prof48', 'prof48', 'prof48.prof48@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof48.prof48@gmail.com'),
(62, 'prof49', 'prof49', 'prof49.prof49@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof49.prof49@gmail.com'),
(63, 'prof50', 'prof50', 'prof50.prof50@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof50.prof50@gmail.com'),
(64, 'prof51', 'prof51', 'prof51.prof51@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof51.prof51@gmail.com'),
(65, 'prof52', 'prof52', 'prof52.prof52@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof52.prof52@gmail.com'),
(66, 'prof53', 'prof53', 'prof53.prof53@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof53.prof53@gmail.com'),
(67, 'prof54', 'prof54', 'prof54.prof54@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof54.prof54@gmail.com'),
(68, 'prof55', 'prof55', 'prof55.prof55@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof55.prof55@gmail.com'),
(69, 'prof56', 'prof56', 'prof56.prof56@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof56.prof56@gmail.com'),
(70, 'prof57', 'prof57', 'prof57.prof57@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof57.prof57@gmail.com'),
(71, 'prof58', 'prof58', 'prof58.prof58@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof58.prof58@gmail.com'),
(72, 'prof59', 'prof59', 'prof59.prof59@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof59.prof59@gmail.com'),
(73, 'prof60', 'prof60', 'prof60.prof60@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof60.prof60@gmail.com'),
(74, 'prof61', 'prof61', 'prof61.prof61@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof61.prof61@gmail.com'),
(75, 'prof62', 'prof62', 'prof62.prof62@uae.ac.ma', NULL, 'defaultusrimg.jpg', 'prof62.prof62@gmail.com');

--
-- Déclencheurs `prof`
--
DELIMITER $$
CREATE TRIGGER `generate_email_prof` BEFORE INSERT ON `prof` FOR EACH ROW BEGIN
    SET NEW.mail_prof = CONCAT(NEW.prenom, '.', NEW.nom, '@uae.ac.ma');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `generate_pemail_prof` BEFORE INSERT ON `prof` FOR EACH ROW BEGIN
    IF NEW.e_mail_personnel IS NULL THEN
        SET NEW.e_mail_personnel = CONCAT(NEW.prenom, '.', NEW.nom, '@gmail.com');
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `date_debut`, `date_fin`) VALUES
(1, '2023-09-25', '2024-01-30'),
(2, '2024-02-01', '2024-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_log`
--

INSERT INTO `user_log` (`id`, `login`, `mdp`, `role`) VALUES
(1, 'user1', 'mdp1', 'etudiant'),
(2, 'user2', 'mdp2', 'scolarité'),
(3, 'user3', 'mdp3', 'etudiant'),
(4, 'user4', 'mdp4', 'scolarité');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id_ab`);

--
-- Index pour la table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_module` (`id_module`),
  ADD KEY `id_filiere` (`id_filiere`),
  ADD KEY `id_niveau` (`id_niveau`),
  ADD KEY `fk_admin_id` (`id_admin`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_module` (`id_module`);

--
-- Index pour la table `etudiant2`
--
ALTER TABLE `etudiant2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_module` (`id_niveau`),
  ADD KEY `fk_id_filiere` (`id_filiere`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_filiere`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`),
  ADD KEY `id_niveau` (`id_niveau`),
  ADD KEY `fk_prof_id` (`id_prof`),
  ADD KEY `fk_semestre_id` (`id_semestre`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id_niveau`),
  ADD KEY `id_filiere` (`id_filiere`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_notes`),
  ADD KEY `id_module` (`id_module`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id_prof`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Index pour la table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id_ab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=575;

--
-- AUTO_INCREMENT pour la table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `etudiant2`
--
ALTER TABLE `etudiant2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id_filiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id_niveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_notes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `prof`
--
ALTER TABLE `prof`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`),
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`),
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`id_admin`) REFERENCES `admin_table` (`id_admin`);

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`);

--
-- Contraintes pour la table `etudiant2`
--
ALTER TABLE `etudiant2`
  ADD CONSTRAINT `fk_id_filiere` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`),
  ADD CONSTRAINT `fk_id_module` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `fk_prof_id` FOREIGN KEY (`id_prof`) REFERENCES `prof` (`id_prof`),
  ADD CONSTRAINT `fk_semestre_id` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`),
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`);

--
-- Contraintes pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD CONSTRAINT `niveau_ibfk_1` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `module` (`id_module`),
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
