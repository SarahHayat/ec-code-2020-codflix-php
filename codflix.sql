

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `codflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `id_episode` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `saison_id` int(11) NOT NULL,
  `name_episode` varchar(200) NOT NULL,
  `summary_episode` text NOT NULL,
  `time_episode` time DEFAULT NULL,
  `url_episode` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`id_episode`, `media_id`, `saison_id`, `name_episode`, `summary_episode`, `time_episode`, `url_episode`) VALUES
(1, 3, 1, 'Épisode 1 : Chapitre Un : La Disparition de Will Byers', 'Le 6 novembre 1983, à Hawkins dans l\'Indiana, une créature s\'échappe d\'un laboratoire du Département de l\'énergie, emportant un scientifique dans sa fuite. ', '00:45:28', 'https://www.youtube.com/embed/wbxXagCMIbU'),
(2, 3, 1, 'Épisode 2 : Chapitre Deux : La Barjot de Maple Street', 'Lucas, Mike et Dustin ramènent la fille chez Mike et la cachent dans le sous-sol. Elle commence à se confier à Mike, lui montrant son tatouage. ', '00:45:28', 'https://www.youtube.com/embed/uTnmPO2e21A'),
(3, 3, 1, 'Épisode 3 : Chapitre Trois : Petit papa Noël', 'Barbara est prisonnière d\'un monde parallèle, ressemblant au monde réel mais gris et envahi de racines noires. ', '00:45:28', 'https://www.youtube.com/embed/Bef89OEsksM'),
(4, 3, 1, 'Épisode 4 : Chapitre Quatre : Le Corps', 'Joyce et Jonathan se rendent à la morgue pour reconnaître le corps de Will. Joyce refuse de croire qu\'il s\'agit de son fils, laissant Jonathan se charger d\'organiser l\'enterrement. ', '00:45:28', 'https://www.youtube.com/embed/oV9E0QBo82s'),
(5, 3, 1, 'Épisode 5 : Chapitre Cinq : La Puce et l\'acrobate', 'Hopper infiltre le laboratoire et parvient à atteindre le sous-sol où il trouve le portail mais il se fait capturer et assommer. ', '00:45:28', 'https://www.youtube.com/embed/IsIGk23I1h4'),
(6, 3, 1, 'Épisode 6 : Chapitre Six : Le Monstre', 'Jonathan parvient à aider Nancy à sortir de la porte dans l\'arbre, qui se referme derrière elle. Jonathan décide de rester avec Nancy pour la nuit dans sa chambre, où Steve les voit de la fenêtre.', '00:45:28', 'https://www.youtube.com/embed/b-mdCoMxLRs'),
(7, 3, 1, 'Épisode 7 : Chapitre Sept : Le Bain', 'Lucas parvient à prévenir Mike par radio de l’arrivée des hommes du gouvernement. Il fuit à vélo avec Onze et Dustin, rejoignent Lucas et échappent à leurs poursuivants grâce à Onze qui renverse un de leurs fourgons. ', '00:45:28', 'https://www.youtube.com/embed/=vNXF6h3yfgM'),
(8, 3, 1, 'Épisode 8 : Chapitre Huit : Le Monde à l\'envers', 'Joyce et Hopper sont retenus dans les locaux du laboratoire où Brenner essaie d\'obtenir leur collaboration. Hopper passe un marché : en échange de l’accès au portail pour récupérer Will, il laisse le gouvernement récupérer Onze.', '00:45:28', 'https://www.youtube.com/embed/IsIGk23I1h4&t=14s'),
(9, 3, 2, 'Épisode 1 : Chapitre Un : MADMAX', 'À Pittsburgh, en 1984, un gang réussit à échapper à la police grâce à l’une de leurs membres, possédant des pouvoirs psychiques et portant un tatouage 008 au poignet.', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(10, 3, 2, 'Épisode 2 : Chapitre Deux : Des bonbons ou un sort, espèce de taré', 'Une série de flashbacks montre comment Onze a survécu : après avoir vaincu le Démogorgon, elle s\'est réveillée dans le Monde à l\'envers et a trouvé un passage vers le vrai monde.', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(11, 3, 2, 'Épisode 3 : Chapitre Trois : Le Batracien', 'Une série de flashbacks montre Hopper trouvant Onze dans les bois et la cachant dans la cabane de son grand-père. ', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(12, 3, 2, 'Épisode 4 : Chapitre Quatre : Will le Sage', 'Épuisé par ses crises et encore sous le choc d\'avoir été en contact avec le monstre, Will se confie à sa mère. ', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(13, 3, 2, 'Épisode 5 : Chapitre Cinq : Dig Dug', 'Hopper avance dans les tunnels du Monde à l\'envers, mais se retrouve piégé par les plantes grimpantes. ', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(14, 3, 2, 'Épisode 6 : Chapitre Six : L\'Espion', 'Will est amené au laboratoire, se tordant de douleur. Une fois apaisé et réveillé, il montre des signes de perte de mémoire.', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(15, 3, 2, 'Épisode 7 : Chapitre Sept : La Sœur perdue', 'À travers les souvenirs de Terry, Onze voit qu\'il y avait une autre fille détenue avec elle au laboratoire. ', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(16, 3, 2, 'Épisode 8 : Chapitre Huit : Le Flagelleur mental', 'Les Démo–chiens sortent des tunnels et commencent à envahir le laboratoire, massacrant quiconque se trouve sur leur chemin. ', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(17, 3, 2, 'Épisode 9 : Chapitre Neuf : Le Portail', 'Onze retrouve Mike, Dustin, Lucas, Hopper et Joyce, mais ignore sciemment Max. Comme elle a ouvert le portail, Onze peut également le refermer.', '00:45:28', 'https://www.youtube.com/embed/1DnvfH4suuI'),
(18, 4, 4, 'Épisode 1 : L\'Exil', 'Dans un futur lointain, 97 années après une guerre nucléaire qui a dévasté la surface de la Terre, les seuls humains ayant survécu vivent dans la flottille de stations spatiales en orbite appelée l\'Arche.', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(19, 4, 4, 'Épisode 2 : Signes de vie', 'Après avoir réussi à survivre à ses blessures, le chancelier apprend la supposée mort de son fils. ', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(20, 4, 4, 'Épisode 3 : Une question de courage', 'Dans un flashback un an plus tôt sur l\'Arche, on voit le père de Clarke découvrir le grave problème du système de survie et tout raconter à Abigail.', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(21, 4, 4, 'Épisode 4 : La Loi de Murphy', 'Lorsque Clarke enterre son ami d\'enfance Wells, Octavia et Jasper découvrent le couteau de Murphy à côté des doigts de Wells.', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(22, 4, 4, 'Épisode 5 : Une lueur d\'espoir', 'Raven a réussi à fuir à bord de la capsule tandis qu\'Abby se fait arrêter. Clarke et Finn sont dans les bois quand ils voient la capsule entrer dans l’atmosphère.', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(23, 4, 5, 'Épisode 1 : 48', 'Clarke remarque à travers le hublot de la porte de sa chambre blanche que l\'un de ses camarades a disparu de la pièce voisine. ', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(24, 4, 5, 'Épisode 2 : Mal des montagnes', 'Jaha se retrouve seul sur l\'Arche et décide de mettre fin à ses jours. Mais après avoir coupé l\'alimentation électrique, il entend des cris de bébé. ', '00:45:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(25, 4, 5, 'Épisode 3 : Actes et Conséquences', 'Dans la \"salle des prélèvements\", Clarke découvre Anya, la cheffe des Natifs, en cage et quasiment vidée de son sang.', '52:14:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(26, 4, 5, 'Épisode 4 : Les Meilleurs Ennemis', 'Jaha a atterrit en plein désert. Il est recueilli par une famille en exil car leur fils est défiguré. Il se lie avec l\'enfant, mais le père le livre à un inconnu en échange d\'une récompense.', '57:14:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0'),
(27, 4, 5, 'Épisode 5 : Expérimentations', 'Après avoir été prise pour une Terrienne, Clarke est ramenée au camp et soignée par sa mère. Peu après son réveil, Bellamy, Octavia, Monroe et Mel reviennent au camp. ', '50:14:28', 'https://www.youtube.com/embed/b6R6wM6dnQ0');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction'),
(4, 'comédie'),
(5, 'suspens');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds',
  `saison_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id_history`, `user_id`, `media_id`, `start_date`, `finish_date`, `watch_duration`, `saison_id`) VALUES
(204, 2, 1, '2020-06-25 17:54:57', NULL, 0, NULL),
(205, 2, 2, '2020-06-25 17:54:59', NULL, 0, NULL),
(206, 2, 6, '2020-06-25 17:55:00', NULL, 0, NULL),
(207, 2, 3, '2020-06-25 17:55:07', NULL, 0, 1),
(208, 2, 1, '2020-06-25 17:55:43', NULL, 0, NULL),
(209, 2, 1, '2020-06-25 17:58:12', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `summary` longtext NOT NULL,
  `trailer_url` varchar(100) NOT NULL,
  `duration` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`, `duration`) VALUES
(1, 2, 'Scream', 'film', 'available', '1997-07-16', 'Casey Becker, une belle adolescente, est seule dans la maison familiale. Elle s\'apprête à regarder un film d\'horreur, mais le téléphone sonne. Au bout du fil, un serial killer la malmène, et la force à jouer à un jeu terrible : si elle répond mal à ses questions portant sur les films d\'horreur, celui-ci tuera son copain. Sidney Prescott sait qu\'elle est l\'une des victimes potentielles du tueur de Woodsboro. Celle-ci ne sait plus à qui faire confiance.', 'https://www.youtube.com/embed/MIt2n6E7CUg', '01:30:31'),
(2, 3, 'Alien', 'film', 'available', '1979-06-15', 'Durant le voyage-retour du cargo spatial Nostromo après une mission commerciale de routine, l\'équipage, cinq hommes et deux femmes plongés en hibernation1 depuis dix mois sont tirés de leur léthargie plus tôt que prévu par l\'ordinateur de bord du vaisseau1. Ce dernier a en effet capté des signaux radio inconnus dans l\'espace1 et, du fait d\'une clause attenante à leur contrat de navigation, l\'équipage du vaisseau est tenu de vérifier tout indice de vie extraterrestre.\r\n\r\nMais, au cours de cette vérification sur une planète désertique, l\'officier Kane est attaqué par une forme de vie inconnue, une sorte de créature arachnide qui recouvre son visage en l\'étouffant avec sa queue2. Après avoir été délivré de la créature étrangère qui semble être morte, l\'équipage retrouve le sourire et fait un dernier repas tous ensemble avant de se rendormir2. Mais, lors du dîner, Kane est pris de convulsions et voit soudainement son abdomen perforé par une créature qui sort de son corps3 et qui s\'échappe dans les coursives du vaisseau4.\r\n\r\nUn jeu macabre du chat et de la souris débute alors entre l\'équipage et la créature, l\'« Alien ».', 'https://www.youtube.com/embed/o_rfh8wBnGE', '01:38:04'),
(3, 1, 'Stranger things', 'serie', 'available', '2016-07-15', 'En 1983, à Hawkins dans l\'Indiana, Will Byers disparaît de son domicile. Ses amis se lancent alors dans une recherche semée d\'embûches pour le retrouver. Pendant leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite.', 'https://www.youtube.com/embed/IZeBDCuApTo', '01:48:04'),
(4, 3, 'The 100', 'serie', 'available', '2014-03-19', 'Après une apocalypse nucléaire, les 318 survivants se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000 ; 97 ans plus tard, une centaine de jeunes délinquants redescendent sur Terre.', 'https://www.youtube.com/embed/YIx4nbTSV_Q', '02:08:04'),
(5, 5, 'Mirage', 'film', 'no available', '2020-09-01', 'Vera Durán, une femme heureuse en ménage, voit sa vie devenir un cauchemar lorsqu\'elle essaie d\'éviter un crime qui entraîne une série de réactions en chaîne.', 'https://www.youtube.com/embed/ZqHlAPHviNM', '01:50:04'),
(6, 4, 'Agent presque secret', 'film', 'available', '2016-08-24', 'Un ancien geek devenu agent d’élite à la CIA, revient chez lui à l’occasion de la réunion des anciens du lycée dont il était à l’époque le souffre-douleur. Se vantant d’être sur une affaire top secrète, il recrute alors pour le seconder le gars le plus populaire de sa promo d’alors, aujourd’hui comptable désabusé. Avant même que notre col blanc ne réalise ce dans quoi il s’est embarqué, il est trop tard pour faire marche arrière. Le voilà propulsé sans autre cérémonie par son nouveau « meilleur ami » dans le monde du contre-espionnage où, sous le feu croisé des balles et des trahisons, les statistiques de leur survie deviennent bien difficile à chiffrer… même pour un comptable.\r\n', 'https://www.youtube.com/embed/RLNeNnAkCrk', '01:47:24'),
(7, 1, 'Le loup de WallStreet', 'film', 'available', '2013-12-25', 'L’argent. Le pouvoir. Les femmes. La drogue. Les tentations étaient là, à portée de main, et les autorités n’avaient aucune prise. Aux yeux de Jordan et de sa meute, la modestie était devenue complètement inutile. Trop n’était jamais assez…', 'https://www.youtube.com/embed/Q3XL7l2LK7c', '02:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `saisons`
--

CREATE TABLE `saisons` (
  `id_saison` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `name_saison` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `saisons`
--

INSERT INTO `saisons` (`id_saison`, `media_id`, `name_saison`) VALUES
(1, 3, 'saison 1'),
(2, 3, 'saison 2'),
(4, 4, 'saison 1'),
(5, 4, 'saison 2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'coding@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(3, 'saraahyt@gmail.com', '799980b998ecaff82ca16eba2f11b8ca57adbdb80296d12b5bce92a13226a3e5');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id_episode`),
  ADD KEY `media_id` (`media_id`),
  ADD KEY `saison_id` (`saison_id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `history_user_id_fk_media_id` (`user_id`),
  ADD KEY `history_media_id_fk_media_id` (`media_id`),
  ADD KEY `saison_id` (`saison_id`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Index pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD PRIMARY KEY (`id_saison`),
  ADD KEY `media_id` (`media_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id_episode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `saisons`
--
ALTER TABLE `saisons`
  MODIFY `id_saison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `episodes_ibfk_2` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id_saison`);

--
-- Contraintes pour la table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`saison_id`) REFERENCES `saisons` (`id_saison`),
  ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Contraintes pour la table `saisons`
--
ALTER TABLE `saisons`
  ADD CONSTRAINT `saisons_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);
