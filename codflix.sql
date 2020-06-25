-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2020 at 07:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
                         `id` int(11) NOT NULL,
                         `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Science-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
                           `id` int(11) NOT NULL,
                           `user_id` int(11) NOT NULL,
                           `media_id` int(11) NOT NULL,
                           `start_date` datetime NOT NULL,
                           `finish_date` datetime DEFAULT NULL,
                           `watch_duration` int(11) NOT NULL DEFAULT '0' COMMENT 'in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `media_id`, `start_date`, `finish_date`, `watch_duration`) VALUES
(15, 19, 8, '2020-06-25 21:18:40', NULL, 0),
(16, 19, 2, '2020-04-22 23:31:47', NULL, 0),
(17, 20, 4, '2020-06-16 10:34:11', NULL, 0),
(18, 20, 3, '2020-04-21 10:42:32', NULL, 0),
(19, 20, 6, '2020-06-21 22:24:14', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
                         `id` int(11) NOT NULL,
                         `genre_id` int(11) NOT NULL,
                         `title` varchar(100) NOT NULL,
                         `type` varchar(20) NOT NULL,
                         `status` varchar(20) NOT NULL,
                         `release_date` date NOT NULL,
                         `summary` longtext NOT NULL,
                         `trailer_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `genre_id`, `title`, `type`, `status`, `release_date`, `summary`, `trailer_url`) VALUES
(1, 1, 'Terminator Renaissance', 'film', 'disponible', '2009-06-03', 'En 2018, après l\'apocalypse qui a vu s\'affronter les hommes et les robots, John Connor est devenu le chef de la résistance humaine contre Skynet et son armée de Terminators. Sa vision du monde est pourtant remise en cause par l\'apparition de Marcus Wright, un inconnu qui se souvient seulement de s\'être trouvé dans le quartier des condamnés à mort. Connor doit découvrir si Marcus a été envoyé du futur ou s\'il est un rescapé du passé. Alors que Skynet prépare l\'assaut final, Connor et Marcus s\'engagent dans une odyssée qui va les mener au cœur même des opérations de Skynet. Ils y perceront le terrible secret qui se cache derrière l\'annihilation programmée de l\'humanité tout entière...', 'https://www.youtube.com/embed/xu9YTWZebLs'),
(2, 2, 'La Nonne', 'film', 'disponible', '2018-09-18', 'Quand on apprend le suicide d\'une jeune nonne dans une abbaye roumaine, la stupéfaction est totale dans l\'Église catholique. Le Vatican missionne aussitôt un prêtre au passé trouble et une novice pour mener l\'enquête. Risquant leur vie, les deux ecclésiastiques doivent affronter une force maléfique qui bouscule leur foi et menace de détruire leur âme. Bientôt, l\'abbaye est en proie à une lutte sans merci entre les vivants et les damnés…', 'https://www.youtube.com/embed/hxRjOBRINu0'),
(3, 3, 'Premier contact', 'film', 'disponible', '2016-11-10', 'Lorsque de mystérieux vaisseaux venus du fond de l’espace surgissent un peu partout sur Terre, une équipe d’experts est rassemblée sous la direction de la linguiste Louise Banks afin de tenter de comprendre leurs intentions.\r\nFace à l’énigme que constituent leur présence et leurs messages mystérieux, les réactions dans le monde sont extrêmes et l’humanité se retrouve bientôt au bord d’une guerre absolue. Louise Banks et son équipe n’ont que très peu de temps pour trouver des réponses. Pour les obtenir, la jeune femme va prendre un risque qui pourrait non seulement lui coûter la vie, mais détruire le genre humain…', 'https://www.youtube.com/embed/rcOKL69bKpQ'),
(4, 1, 'Mad Max : Fury Road', 'film', 'disponible', '2015-05-13', 'Max est capturé et fait prisonnier dans la Citadelle dirigée par Immortan Joe. C’est alors qu\'il se retrouve embarqué dans une course poursuite explosive.', 'https://www.youtube.com/embed/hEJnMQG9ev8'),
(5, 1, 'Terminator 2 : Le Jugement dernier', 'film', 'disponible', '1991-07-03', 'En 2029, après son échec pour éliminer Sarah Connor, Skynet programme un nouveau Terminator, le T-1000, pour retourner dans le passé et éliminer son fils John Connor, futur leader de la résistance humaine.\r\n\r\n', 'https://www.youtube.com/embed/Hh6UzyZkE4o'),
(6, 1, 'Skyfall', 'film', 'disponible', '2012-10-26', 'Laissé pour mort après une mission raté en Turquie, l\'agent britannique James Bond, réapparaît à Londres lorsqu\'il apprend qu\'un attentat a été commis contre le MI6. M est obligée de relocaliser l\'Agence. Son autorité est remise en cause par Mallory, le nouveau président de l\'ISC, le comité chargé du renseignement et de la sécurité. Avec l\'aide d\'Eve, un agent de terrain, Bond se lance sur la piste du mystérieux Silva, dont il doit identifier coûte que coûte les objectifs.', 'https://www.youtube.com/embed/6kw1UVovByw'),
(8, 3, 'Rick and Morty', 'serie', 'disponible', '2014-01-01', 'Rick est un scientifique âgé et déséquilibré qui a récemment renoué avec sa famille. Il passe le plus clair de son temps à entraîner son petit-fils Morty dans des aventures extraordinaires et dangereuses, à travers l\'espace et dans des univers parallèles.', 'https://www.youtube.com/embed/WNhH00OIPP0'),
(9, 2, 'parasite : la maxime', 'serie', 'disponible', '2014-01-01', 'Un jour, de mystérieuses sphères, abritant d\'étranges parasites, se répandent sur Terre. Rapidement, les entités prennent possession de certains habitants. Nul ne sait d\'où elles viennent, mais ce qui semble certain, c\'est qu\'elles sont là pour débarrasser le monde de l\'espèce humaine. Shinichi, jeune lycéen, est un « hôte » dont le cerveau a miraculeusement été épargné : et pour cause, Migi, son parasite, a pris possession de son bras droit ! Ce cas exceptionnel va déboucher sur une singulière cohabitation. Alors que Shinichi se découvre doté d\'incroyables facultés physiques, il prend aussi conscience de la menace qui plane sur ses proches... et sur l\'humanité tout entière.', 'https://www.youtube.com/embed/uM-tfHol0fE');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
                          `id` int(11) NOT NULL,
                          `media_id` int(11) NOT NULL,
                          `title` varchar(100) NOT NULL,
                          `duration` time NOT NULL,
                          `status` varchar(20) NOT NULL,
                          `season` int(11) NOT NULL,
                          `episode` int(11) NOT NULL,
                          `summary` longtext NOT NULL,
                          `video_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `media_id`, `title`, `duration`, `status`, `season`, `episode`, `summary`, `video_url`) VALUES
(1, 8, 'De la graine de héros', '00:05:22', 'disponible', 1, 1, 'saison 1, épisode 1 ', 'https://www.youtube.com/embed/o0n84rVCAMo'),
(2, 8, 'I, Croquette', '00:06:02', 'disponible', 1, 2, 'saison 1, épisode 2 ', 'https://www.youtube.com/embed/I4GFnCWfJ_U'),
(3, 8, 'Anatomy Park', '00:06:03', 'disponible', 1, 3, 'saison 1, épisode 3 ', 'https://www.youtube.com/embed/IeubGQdX1w4'),
(4, 8, 'Effet Rick-ochet ', '00:04:50', 'disponible', 2, 12, 'saison 2, épisode 12 ', 'https://www.youtube.com/embed/_Dbjx2m3Sys'),
(5, 8, 'Prout, l\'extra-terrestre', '00:03:24', 'disponible', 2, 13, 'saison 2, épisode 13 ', 'https://www.youtube.com/embed/c6acXdxPJ1Q'),
(6, 9, 'La Métamorphose', '00:20:11', 'disponible', 1, 1, 'épisode 1, saison 1', 'https://www.youtube.com/embed/VVPJDANmZ0o'),
(7, 9, 'Le Diable au corps', '00:22:16', 'disponible', 1, 2, 'épisode 2, saison 1', 'https://www.youtube.com/embed/VVPJDANmZ0o'),
(8, 9, 'Bonjour tristesse', '00:22:23', 'disponible', 2, 13, 'épisode 13, saison 2', 'https://www.youtube.com/embed/VVPJDANmZ0o'),
(9, 9, 'Le Gène égoïste', '00:24:43', 'disponible', 2, 14, 'épisode 14, saison 2', 'https://www.youtube.com/embed/VVPJDANmZ0o'),
(10, 9, 'La Foire des ténèbres', '00:27:32', 'disponible', 2, 15, 'épisode 15, saison 2', 'https://www.youtube.com/embed/VVPJDANmZ0o');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `email` varchar(254) NOT NULL,
                        `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(19, 'coding@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(20, 'hugo@gmail.com', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
    ADD PRIMARY KEY (`id`),
    ADD KEY `history_user_id_fk_media_id` (`user_id`),
    ADD KEY `history_media_id_fk_media_id` (`media_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
    ADD PRIMARY KEY (`id`),
    ADD KEY `media_genre_id_fk_genre_id` (`genre_id`) USING BTREE;

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
    ADD PRIMARY KEY (`id`),
    ADD KEY `stream_media_id_fk_media_id` (`media_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
    ADD CONSTRAINT `history_media_id_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `history_user_id_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
    ADD CONSTRAINT `media_genre_id_b1257088_fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Constraints for table `stream`
--
ALTER TABLE `stream`
    ADD CONSTRAINT `stream_media_id_32_fk_media_id` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);
