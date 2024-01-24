-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `article` (`Post_id`, `title`, `text_Post`, `publicationDate`, `level`, `authors_pseudo_id`, `date_debut`, `date_fin`) VALUES
(1,	'sport',	'Le biathlon, mariage unique entre ski de fond et tir à la carabine, captive les amateurs de sports d\'hiver. Associant endurance physique et précision, ce sport exigeant trouve ses racines dans les traditions scandinaves. Les athlètes parcourent des distances impressionnantes, ponctuées par des séances de tir exigeant sang-froid et concentration. Les compétitions de biathlon, telles que la Coupe du Monde, offrent un spectacle palpitant où chaque tir manqué peut coûter cher. La symbiose entre effort physique et habileté au tir confère une dimension stratégique unique à cette discipline. Le biathlon, au-delà de son aspect compétitif, incarne la beauté de l\'hiver et la fusion parfaite entre l\'homme et la nature enneigée.',	'2023-01-22',	2,	'matteo23',	NULL,	NULL),
(2,	'le sport c\'est trop bien',	'Le monde du sport, vaste et diversifié, est une source infinie d\'inspiration et d\'émotion. Des stades rugissants aux compétitions acharnées, le sport transcende les frontières, unissant les peuples par la passion commune du jeu. Que ce soit sur le terrain de football, le court de tennis ou la piste d\'athlétisme, les athlètes repoussent constamment les limites de l\'exploit humain. Le sport va au-delà de la compétition, enseignant des valeurs telles que la discipline, la persévérance et l\'esprit d\'équipe. Des moments épiques, tels que les Jeux Olympiques, symbolisent l\'unité mondiale à travers la célébration du talent et de la diversité. À travers le sport, l\'humanité découvre sa force, sa grâce et sa capacité à relever des défis, créant ainsi des récits inoubliables qui transcendent le temps.',	'2024-01-23',	1,	'hel',	NULL,	NULL);

INSERT INTO `article_has_categorie` (`categorie_Post_id`, `categorie_idcategorie`) VALUES
(1,	3),
(2,	1);

INSERT INTO `authors` (`pseudo_id`, `name`, `surname`) VALUES
('andreaaaa',	'babou',	'andrea'),
('hel',	'toupi',	'helene'),
('imperator',	'doudou',	'augustin'),
('jam',	'abidi',	'jamil'),
('mateo',	'mateo23',	''),
('matteo23',	'doubidou',	'matteo'),
('val',	'doubidou',	'valentine');

INSERT INTO `categorie` (`idcategorie`, `name`) VALUES
(1,	'biathlon'),
(2,	'cracher de noyau'),
(3,	'escalade'),
(4,	'sport d\'ahuri'),
(5,	'loisir');

INSERT INTO `comments` (`comment_id`, `pseudo`, `comments_Contents`, `authors_pseudo_id`, `article_Post_id`, `article_authors_pseudo_id`, `date_de_post`) VALUES
(1,	'jam',	'sans avis',	'jam',	1,	'matteo23',	'2024-01-23'),
(2,	'matteo23',	'Bravo',	'matteo23',	1,	'matteo23',	'2024-01-22');

-- 2024-01-24 09:52:40
