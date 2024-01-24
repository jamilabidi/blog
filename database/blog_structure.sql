-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `Post_id` int(11) NOT NULL,
  `title` mediumtext DEFAULT NULL,
  `text_Post` longtext DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `authors_pseudo_id` varchar(45) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`Post_id`,`authors_pseudo_id`),
  KEY `fk_article_authors1_idx` (`authors_pseudo_id`),
  CONSTRAINT `fk_article_authors1` FOREIGN KEY (`authors_pseudo_id`) REFERENCES `authors` (`pseudo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `article_has_categorie`;
CREATE TABLE `article_has_categorie` (
  `categorie_Post_id` int(11) NOT NULL,
  `categorie_idcategorie` int(11) NOT NULL,
  PRIMARY KEY (`categorie_Post_id`,`categorie_idcategorie`),
  KEY `fk_article_has_categorie_categorie1_idx` (`categorie_idcategorie`),
  KEY `fk_article_has_categorie_article_idx` (`categorie_Post_id`),
  CONSTRAINT `fk_article_has_categorie_article` FOREIGN KEY (`categorie_Post_id`) REFERENCES `article` (`Post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_has_categorie_categorie1` FOREIGN KEY (`categorie_idcategorie`) REFERENCES `categorie` (`idcategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `pseudo_id` varchar(45) NOT NULL,
  `name` mediumtext DEFAULT NULL,
  `surname` mediumtext DEFAULT NULL,
  PRIMARY KEY (`pseudo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `comments_Contents` varchar(45) DEFAULT NULL,
  `authors_pseudo_id` varchar(45) NOT NULL,
  `article_Post_id` int(11) NOT NULL,
  `article_authors_pseudo_id` varchar(45) NOT NULL,
  `date_de_post` date DEFAULT NULL,
  PRIMARY KEY (`comment_id`,`authors_pseudo_id`,`article_Post_id`,`article_authors_pseudo_id`),
  KEY `fk_comments_authors1_idx` (`authors_pseudo_id`),
  KEY `fk_comments_article1_idx` (`article_Post_id`,`article_authors_pseudo_id`),
  CONSTRAINT `fk_comments_article1` FOREIGN KEY (`article_Post_id`, `article_authors_pseudo_id`) REFERENCES `article` (`Post_id`, `authors_pseudo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_authors1` FOREIGN KEY (`authors_pseudo_id`) REFERENCES `authors` (`pseudo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-01-24 09:51:24
