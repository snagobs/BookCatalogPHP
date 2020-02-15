-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 09:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(17, 'J. K. Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE IF NOT EXISTS `author_book` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`author_id`, `book_id`) VALUES
(17, 13);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `price`, `description`) VALUES
(13, 'Harry Potter', 35, 'Harry Potter is a series of seven novels written by British author J. K. Rowling. The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry''s struggle against Lord Voldemort, the Dark wizard who intends to become immortal, overthrow the Ministry of Magic, subjugate non-magic people and destroy anyone who stands in his way.\r\n\r\nSince the release of the first novel, Harry Potter and the Philosopher''s Stone, on 30 June 1997, the books have gained immense popularity, critical acclaim and commercial success worldwide. They attracted a wide adult audience, and have remained one of the preeminent cornerstones of young adult literature.[3] The series has also had some share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence depicted in the series. As of July 2013, the books have sold more than 450 million copies worldwide, making the series the best-selling book series in history, and have been translated into seventy-three languages.[4][5] The last four books consecutively set records as the fastest-selling books in history, with the final instalment selling roughly eleven million copies in the United States within twenty four hours of its release.\r\n\r\nA series of many genres, including fantasy, drama, coming of age and the British school story (which includes elements of mystery, thriller, adventure, horror and romance), it has many cultural meanings and references.[6] According to Rowling, the main theme is death.[7] There are also many other themes in the series, such as prejudice, corruption, and madness.[8]\r\n\r\nThe series was originally published in English by two major publishers, Bloomsbury in the United Kingdom and Scholastic Press in the United States. The play Harry Potter and the Cursed Child will open in London on 30 July 2016 at the Palace Theatre and its script will be published by Little, Brown in the United Kingdom on 31 July 2016, who also published Rowling''s adult novels and those written under her pen name Robert Galbraith.[9] The seven books were adapted into an eight-part film series by Warner Bros. Pictures, which is the second highest-grossing film series of all time as of August 2015. The series also originated much tie-in merchandise, making the Harry Potter brand worth in excess of $15 billion.[10]\r\n\r\nBecause of the success of the books and films, Harry Potter-themed areas, known as The Wizarding World of Harry Potter, have been created at several Universal Parks & Resorts theme parks around the world. The franchise continues to expand, with numerous supplemental books to accompany the films and the original novels, a studio tour in London that opened in 2012, a travelling exhibition that premiered in Chicago in 2009, a digital platform entitled Pottermore, on which J.K. Rowling updates the series with new information and insight, a sequel in the form of a stage play, and a trilogy of spin-off films premiering in November 2016, amongst many other developments.');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(5, 'Fantasy'),
(6, 'Drama'),
(7, 'Mystery'),
(8, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `genre_book`
--

CREATE TABLE IF NOT EXISTS `genre_book` (
  `genre_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_book`
--

INSERT INTO `genre_book` (`genre_id`, `book_id`) VALUES
(5, 13),
(6, 13),
(7, 13),
(8, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
