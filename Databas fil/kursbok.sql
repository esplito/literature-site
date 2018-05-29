-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 maj 2018 kl 10:50
-- Serverversion: 10.1.32-MariaDB
-- PHP-version: 7.2.5

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

CREATE TABLE `book_table` (
  `book_ISBN` varchar(255) NOT NULL,
  `book_title` varchar(256) NOT NULL,
  `book_author` varchar(256) NOT NULL,
  `book_edition` varchar(256) NOT NULL,
  `book_releashed_year` varchar(256) NOT NULL,
  `book_picture` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `book_table`
--

INSERT INTO `book_table` (`book_ISBN`, `book_title`, `book_author`, `book_edition`, `book_releashed_year`, `book_picture`) VALUES
('9781118093740', 'Systems Analysis and Design', 'Alan Dennis', '1', '2012', 'systems-analysis.jpg'),
('9781137265807', 'Business information systems', 'Paul Beynon-Davies', '2', '2013', 'business-information-systems.jpg'),
('9781408065822', 'B&W: How to Think Like a Programmer', 'Paul Vickers', '5', '2011', 'how-to-think-like-a-programmer.jpg'),
('9789144013640', 'Datatyper och algoritmer', 'Lars-Erik Janlert', '2', '2000', 'book.png');

-- --------------------------------------------------------

--
-- Tabellstruktur `comment_table`
--

CREATE TABLE `comment_table` (
  `comment_id` int(255) NOT NULL,
  `comment_comment` varchar(200) NOT NULL,
  `user_id` int(255) NOT NULL,
  `book_ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `comment_comment`, `user_id`, `book_ISBN`) VALUES
(4, 'Hur mycket gav ni fÃ¶r den hÃ¤r boken?', 3, '9781118093740'),
(5, 'UngefÃ¤r 300 kronor begagnad och sliten.', 4, '9781118093740'),
(7, 'Jag kÃ¶pte min fÃ¶r 800 kronor, men dÃ¥ var den ny.', 5, '9781118093740');

-- --------------------------------------------------------

--
-- Tabellstruktur `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `book_ISBN` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `review_comment` varchar(256) NOT NULL,
  `rating_by_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `review_table`
--

INSERT INTO `review_table` (`review_id`, `book_ISBN`, `user_id`, `review_comment`, `rating_by_user`) VALUES
(3, '9781118093740', 3, 'Mycket givande och lÃ¤ttlÃ¤st', 5),
(4, '9781137265807', 3, 'Bra bok med mÃ¥nga bilder', 4),
(5, '9781408065822', 3, 'Ger en okej fÃ¶rstÃ¥else inom programmering', 3),
(6, '9789144013640', 3, 'SvÃ¥r och trÃ¥kig', 1),
(7, '9781118093740', 5, 'En av de bÃ¤ttre bÃ¶ckerna inom det hÃ¤r Ã¤mnet', 4);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_book`
--

CREATE TABLE `user_book` (
  `user_id_fk` int(255) NOT NULL,
  `book_ISBN_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_grade_table`
--

CREATE TABLE `user_grade_table` (
  `user_grade_level` int(1) NOT NULL,
  `user_grade_name` varchar(256) NOT NULL
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

CREATE TABLE `user_table` (
  `user_id` int(255) NOT NULL,
  `user_uname` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_school` varchar(256) DEFAULT NULL,
  `user_picture` blob,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_uname`, `user_email`, `user_password`, `user_school`, `user_picture`, `user_level`) VALUES
(3, 'Tobias_Persson', 'TobiasPersson@mail.se', 'password', 'KTH', 0x44534330303239352e4a5047, 1),
(4, 'Emil_Andersson', 'EmilAndersson@mail.se', 'password', NULL, NULL, 2),
(5, 'Johan_Israelsson', 'JohanIsraelsson@mail.se', 'password', NULL, NULL, 3),
(6, 'Emil_Andersson', 'EmilEsplund@mail.se', 'password', NULL, NULL, 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`book_ISBN`);

--
-- Index för tabell `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `ISBN_fk` (`book_ISBN`),
  ADD KEY `user_id_fk` (`user_id`) USING BTREE;

--
-- Index för tabell `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `book_ISBN` (`book_ISBN`),
  ADD KEY `user_id` (`user_id`);

--
-- Index för tabell `user_book`
--
ALTER TABLE `user_book`
  ADD PRIMARY KEY (`user_id_fk`,`book_ISBN_fk`);

--
-- Index för tabell `user_grade_table`
--
ALTER TABLE `user_grade_table`
  ADD PRIMARY KEY (`user_grade_level`);

--
-- Index för tabell `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_level` (`user_level`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT för tabell `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT för tabell `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Restriktioner för tabell `review_table`
--
ALTER TABLE `review_table`
  ADD CONSTRAINT `book_ISBN` FOREIGN KEY (`book_ISBN`) REFERENCES `book_table` (`book_ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restriktioner för tabell `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_grade_table` (`user_grade_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
