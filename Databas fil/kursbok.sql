-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 05:39 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursbok`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
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

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`book_ISBN`, `book_title`, `book_author`, `book_edition`, `book_releashed_year`, `book_picture`) VALUES
('9781118093740', 'Systems Analysis and Design', 'Alan Dennis', '1', '2012', NULL),
('9781137265807', 'Business information systems', 'Paul Beynon-Davies', '2', '2013', NULL),
('9781408065822', 'B&W: How to Think Like a Programmer', 'Paul Vickers', '5', '2011', NULL),
('9789144013640', 'Datatyper och algoritmer', 'Lars-Erik Janlert', '2', '2000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `comment_comment`, `user_id`, `book_ISBN`) VALUES
(1, 'thundercats four loko crucifix, drinking vinegar kale chips bicycle rights next level bespoke listicle', 1, '9781118093740'),
(2, 'rights vape +1 semiotics sriracha. Small batch squid vexillologist mixtape', 1, '9781118093740');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_ISBN` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `review_comment` varchar(256) NOT NULL,
  `rating_by_user` int(255) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `book_ISBN` (`book_ISBN`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `book_ISBN`, `user_id`, `review_comment`, `rating_by_user`) VALUES
(1, '9781118093740', 1, 'lol3', 3),
(2, '9781118093740', 1, 'lol2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_book`
--

DROP TABLE IF EXISTS `user_book`;
CREATE TABLE IF NOT EXISTS `user_book` (
  `user_id_fk` int(255) NOT NULL,
  `book_ISBN_fk` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id_fk`,`book_ISBN_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_grade_table`
--

DROP TABLE IF EXISTS `user_grade_table`;
CREATE TABLE IF NOT EXISTS `user_grade_table` (
  `user_grade_level` int(1) NOT NULL,
  `user_grade_name` varchar(256) NOT NULL,
  PRIMARY KEY (`user_grade_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_grade_table`
--

INSERT INTO `user_grade_table` (`user_grade_level`, `user_grade_name`) VALUES
(1, 'normal'),
(2, 'moderator'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_uname`, `user_email`, `user_password`, `user_school`, `user_picture`, `user_level`) VALUES
(1, 'Swagemil', 'yourmum1337@hotmail.com', 'emil123', 'Uppsala Universitet', NULL, 3),
(2, 'Emil_Andersson', 'emil93@gmail.com', 'emil123', 'Uppsala Universitet', NULL, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `book_isbn_fk` FOREIGN KEY (`book_ISBN`) REFERENCES `book_table` (`book_ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_table`
--
ALTER TABLE `review_table`
  ADD CONSTRAINT `book_ISBN` FOREIGN KEY (`book_ISBN`) REFERENCES `book_table` (`book_ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`user_level`) REFERENCES `user_grade_table` (`user_grade_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
