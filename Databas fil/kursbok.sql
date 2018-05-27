-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 27 maj 2018 kl 15:18
-- Serverversion: 5.7.20
-- PHP-version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `kursbok`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `book_table`
--

DROP TABLE IF EXISTS `book_table`;
CREATE TABLE IF NOT EXISTS `book_table` (
  `book_ISBN` varchar(255) NOT NULL,
  `book_title` varchar(256) NOT NULL,
  `book_author` varchar(256) NOT NULL,
  `book_edition` varchar(256) NOT NULL,
  `book_releashed_year` varchar(256) NOT NULL,
  `book_picture` blob,
  PRIMARY KEY (`book_ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `comment_table`
--

DROP TABLE IF EXISTS `comment_table`;
CREATE TABLE IF NOT EXISTS `comment_table` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `comment_comment` varchar(200) NOT NULL,
  `user_id` int(255) NOT NULL,
  `book_ISBN` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `ISBN_fk` (`book_ISBN`),
  KEY `user_id_fk` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_ISBN` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `review_comment` varchar(256) NOT NULL,
  `rating_by_user` int(255) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `user_id_fk` (`user_id`,`book_ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_book`
--

DROP TABLE IF EXISTS `user_book`;
CREATE TABLE IF NOT EXISTS `user_book` (
  `user_id_fk` int(255) NOT NULL,
  `book_ISBN_fk` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id_fk`,`book_ISBN_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_grade_table`
--

DROP TABLE IF EXISTS `user_grade_table`;
CREATE TABLE IF NOT EXISTS `user_grade_table` (
  `user_grade_level` int(1) NOT NULL,
  `user_grade_name` varchar(256) NOT NULL,
  PRIMARY KEY (`user_grade_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `user_grade_table`
--

INSERT INTO `user_grade_table` (`user_grade_level`, `user_grade_name`) VALUES
(1, 'normal'),
(2, 'moderator'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Tabellstruktur `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_uname` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_school` varchar(256) DEFAULT NULL,
  `user_picture` blob,
  `user_level` int(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_level` (`user_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `book_isbn_fk` FOREIGN KEY (`book_ISBN`) REFERENCES `book_table` (`book_ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_grade_table` (`user_grade_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
