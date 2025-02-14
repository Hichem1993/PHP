-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 14 fév. 2025 à 15:15
-- Version du serveur : 10.3.39-MariaDB-0ubuntu0.20.04.2
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dt_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `dt_creation`) VALUES
(1, 'Plats', 'Plat salé facile', '2025-02-14 09:37:29'),
(2, 'Entrée', 'Entrée chaude et froide', '2025-02-14 09:37:29'),
(3, 'Dessert', 'Pâtisserie Traditionnelle', '2025-02-14 09:38:49');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dt_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT NULL,
  `recette_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `email`, `message`, `dt_creation`, `is_active`, `recette_id`) VALUES
(1, 'benayedhicham@gmail.com', 'Super recette !!!', '2025-02-14 13:32:16', NULL, 1),
(2, 'benayedhicham@gmail.com', 'bablablaboaheazçdhzeaçdh', '2025-02-14 14:52:56', NULL, 1),
(3, 'benayedhicham@gmail.com', 'comment vas tu ??', '2025-02-14 14:53:08', NULL, 1),
(4, 'benayedhicham@gmail.com', 'comment vas tu ??', '2025-02-14 14:55:26', NULL, 1),
(5, 'toto@yahoo.fr', 'coucouc', '2025-02-14 14:56:56', NULL, 1),
(6, 'nada@yahoo.fr', 'Bravo', '2025-02-14 14:57:26', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `durre` smallint(6) NOT NULL,
  `dt_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `is_publie` tinyint(1) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `description`, `url_img`, `durre`, `dt_creation`, `is_publie`, `categorie_id`, `user_id`) VALUES
(1, 'Ojja fruit de mer', 'Emincer les oignons et les faire revenir dans l’huile de maïs. Ajouter l’ail et faire revenir le tout 2 minutes.\r\nAjouter le poivron et les tomates coupés en dés. Laisser mijoter 30 minutes et verser un verre d’eau ainsi que les épices et le persil haché.\r\nAjouter les fruits de mer et laisser mijoter encore 10 minutes.\r\nCasser les œufs et mélanger énergiquement. Couvrir la marmite et éteindre le feu.', 'Public/ojja.jpg', 1, '2025-02-14 09:40:49', NULL, 1, 1),
(2, 'Trio de salades', 'Un trio de salades à la tunisienne pour accompagner un plat d’émincé de bœuf ! la combinaison parfaite pour un bon Iftar.', 'Public/trio.jpg', 2, '2025-02-14 10:35:33', NULL, 2, 2),
(3, 'Assida', 'Assida zgougou', 'Public/zgougou.jpg', 5, '2025-02-14 11:52:52', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'redacteur',
  `dt_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `dt_creation`, `is_active`) VALUES
(1, 'benayedhicham@gmail.com', '$2y$10$Pag3Vn2r0/Wd9siAS8qZw.tIWQoMxph7yJKJCviXj33S9F90sRPKS', 'redacteur', '2025-02-14 08:29:46', NULL),
(2, 'nada@yahoo.fr', '$2y$10$jh5AnuHji0RZNPiMejjcGeLYSON9WHJtd6dwNVYy7kh1Uu08Hxlq2', 'redacteur', '2025-02-14 09:18:41', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recette_id` (`recette_id`);

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`recette_id`) REFERENCES `recettes` (`id`);

--
-- Contraintes pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD CONSTRAINT `recettes_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `recettes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
