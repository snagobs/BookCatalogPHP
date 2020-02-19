-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2020 at 09:56 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

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

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(17, 'J. K. Rowlings'),
(19, 'Graf Drakula'),
(20, 'William Ourvell'),
(21, 'Garry Moor'),
(23, 'Ugolion Allosium'),
(24, 'Maria Dolores Hernando');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`author_id`, `book_id`) VALUES
(21, 16),
(20, 18),
(19, 20),
(17, 13),
(21, 21),
(20, 15),
(17, 24),
(23, 22),
(23, 17),
(19, 14),
(20, 14),
(21, 14);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `price`, `description`) VALUES
(13, 'Harry Potter and Big Red Pig', 357.88, 'Harry Potter is a series of seven novels written by British author J. K. Rowling. The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry\'s struggle against Lord Voldemort, the Dark wizard who intends to become immortal, overthrow the Ministry of Magic, subjugate non-magic people and destroy anyone who stands in his way.\r\n\r\nSince the release of the first novel, Harry Potter and the Philosopher\'s Stone, on 30 June 1997, the books have gained immense popularity, critical acclaim and commercial success worldwide. They attracted a wide adult audience, and have remained one of the preeminent cornerstones of young adult literature.[3] The series has also had some share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence depicted in the series. As of July 2013, the books have sold more than 450 million copies worldwide, making the series the best-selling book series in history, and have been translated into seventy-three languages.[4][5] The last four books consecutively set records as the fastest-selling books in history, with the final instalment selling roughly eleven million copies in the United States within twenty four hours of its release.\r\n\r\nA series of many genres, including fantasy, drama, coming of age and the British school story (which includes elements of mystery, thriller, adventure, horror and romance), it has many cultural meanings and references.[6] According to Rowling, the main theme is death.[7] There are also many other themes in the series, such as prejudice, corruption, and madness.'),
(14, 'How to make big money', 334.5, 'Chicago has many historic places to visit. Keith found the Chicago Water Tower impressive as it is one of the few remaining landmarks to have survived the Great Chicago Fire of 1871. Keith also took a walk through Jackson Park, a great outdoor space that hosted the Worldâ€™s Fair of 1892. The park is great for a leisurely stroll, and it still features some of the original architecture and replicas of monuments that were featured in the Worldâ€™s Fair.\r\n\r\nDuring the last part of his visit, Keith managed to climb the stairs inside of the Willis Tower, a 110-story skyscraper. Despite the challenge of climbing the many flights of stairs, Keith felt that reaching the top was worth the effort. From the rooftop, Keith received a gorgeous view of the cityâ€™s skyline with Lake Michigan in the background.'),
(15, 'True Love With Flowers', 665.9, 'Last April, John took a trip to Las Vegas, Nevada. Las Vegas is a popular destination in the western portion of the United States. The town is most popular for its casinos, hotels, and exciting nightlife.\r\n\r\nIn downtown Las Vegas, John spent a lot of time on The Strip, which is a 2.5 mile stretch of shopping, entertainment venues, luxury hotels, and fine dining experiences. This is probably the most commonly visited tourist area in the city. The Strip at night looks especially beautiful. All of the buildings light up with bright, neon, eye-catching signs to attract visitor attention.'),
(16, 'Alice and Cat', 121.1, 'Lucas goes to school every day of the week. He has many subjects to go to each school day: English, art, science, mathematics, gym, and history. His mother packs a big backpack full of books and lunch for Lucas.\r\n\r\nHis first class is English, and he likes that teacher very much. His English teacher says that he is a good pupil, which Lucas knows means that she thinks he is a good student.'),
(17, 'True Love', 900.9, 'In June 2099, Diane visited her friends who live in San Francisco, California. This was Dianeâ€™s first time in the city, and she enjoyed her opportunities to walk around and explore.\r\n\r\nOn the first day of her trip, Diane visited the Golden Gate Bridge. This red suspension bridge measures 1.7 miles in length. Diane and her friends did not walk across the bridge. However, they viewed it from the Golden Gate National Recreation Area, which offers hiking trails, picnicking areas, and presents spectacular views of the bridge and city. Diane and her friends made sure to take a group photograph here, featuring the bridge in the background.'),
(18, 'Wild Wild West', 677.7, 'The next day, Diane and her friends visited Alcatraz Island. This island is located 1.25 miles offshore in the San Francisco Bay. It used to serve as a lighthouse, military fort, and prison. Diane and her friends took a small tour boat across bay to reach the island. Their visit included a guided tour through the old military base and prison. They also took a walk around the island to appreciate some of the native wildlife in addition to the views of the city.'),
(20, 'How to make big money', 345.8, 'Diane and her friends spent the final day of her vist in San Franciscoâ€™s downtown area. Dianeâ€™s favorite part of her entire trip was taking a trolley to transport her up and down the hilly streets of San Francisco. Diane did a lot of shopping downtown on her last day. She and her friends celebrated the end of her visit by having dinner at one of San Franciscoâ€™s best restaurants.'),
(21, 'True Love With Flowers', 345.5, 'On the first day of her trip, Diane visited the Golden Gate Bridge. This red suspension bridge measures 1.7 miles in length. Diane and her friends did not walk across the bridge. However, they viewed it from the Golden Gate National Recreation Area, which offers hiking trails, picnicking areas, and presents spectacular views of the bridge and city. Diane and her friends made sure to take a group photograph here, featuring the bridge in the background.'),
(22, 'True Love With Flowers', 345.5, 'On the first day of her trip, Diane visited the Golden Gate Bridge. This red suspension bridge measures 1.7 miles in length. Diane and her friends did not walk across the bridge. However, they viewed it from the Golden Gate National Recreation Area, which offers hiking trails, picnicking areas, and presents spectacular views of the bridge and city. Diane and her friends made sure to take a group photograph here, featuring the bridge in the background.'),
(24, 'True Love With Flowers', 345.5, 'On the first day of her trip, Diane visited the Golden Gate Bridge. This red suspension bridge measures 1.7 miles in length. Diane and her friends did not walk across the bridge. However, they viewed it from the Golden Gate National Recreation Area, which offers hiking trails, picnicking areas, and presents spectacular views of the bridge and city. Diane and her friends made sure to take a group photograph here, featuring the bridge in the background.');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(5, 'Fantasy'),
(6, 'Drama'),
(7, 'Mystery'),
(9, 'Detective'),
(10, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `genre_book`
--

CREATE TABLE `genre_book` (
  `genre_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_book`
--

INSERT INTO `genre_book` (`genre_id`, `book_id`) VALUES
(9, 16),
(6, 18),
(7, 18),
(8, 18),
(5, 20),
(5, 13),
(6, 21),
(9, 21),
(6, 15),
(5, 24),
(7, 24),
(5, 22),
(7, 17),
(6, 14),
(7, 14),
(9, 14);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
