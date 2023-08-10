-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 03:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `movie` varchar(256) NOT NULL,
  `seats` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `datet` datetime NOT NULL,
  `showdate` varchar(64) NOT NULL,
  `showtime` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fbid` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `fmail` varchar(256) NOT NULL,
  `feedback` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`, `fname`, `fmail`, `feedback`) VALUES
(1, 'sriram', 'abc@xyz.com', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `foodandbev`
--

CREATE TABLE `foodandbev` (
  `fid` int(10) NOT NULL,
  `fimg` varchar(256) NOT NULL,
  `fdet` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodandbev`
--

INSERT INTO `foodandbev` (`fid`, `fimg`, `fdet`) VALUES
(1, 'images/fandb/popcorn.jpg', 'Popcorn - Rs. 120'),
(2, 'images/fandb/coffee.jpg', 'Coffee - Rs. 90'),
(3, 'images/fandb/nachos.jpg', 'Nachos - Rs. 100'),
(4, 'images/fandb/samosa.jpg', 'Samosas - Rs. 60'),
(5, 'images/fandb/cola.jpg', 'Coca Cola - Rs. 70');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` varchar(20) NOT NULL,
  `mname` varchar(256) NOT NULL,
  `mimg` varchar(256) NOT NULL,
  `trailer` varchar(256) NOT NULL,
  `synopsis` varchar(512) NOT NULL,
  `director` varchar(256) NOT NULL,
  `writer` varchar(256) NOT NULL,
  `cast` varchar(256) NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `mimg`, `trailer`, `synopsis`, `director`, `writer`, `cast`, `rating`) VALUES
('M01', 'Logan', 'images/Logan.jpg', 'https://www.youtube.com/embed/Div0iP65aZo', 'In a future where mutants are nearly extinct, an elderly and weary Logan leads a quiet life. But when Laura, a mutant child pursued by scientists, comes to him for help, he must get her to safety.', 'James Mangold', 'James Mangold (story by), Scott Frank (screenplay by)', 'Hugh Jackman, Patrick Stewart, Dafne Keen', '8.1'),
('M02', 'Star Wars - Episode V', 'images/Star Wars V.jpg', 'https://www.youtube.com/embed/JNwNXF9Y6kY', 'After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued by Darth Vader and a bounty hunter named Boba Fett all over the galaxy.', 'Irvin Kershner', 'Leigh Brackett (screenplay by), Lawrence Kasdan (screenplay by)', 'Mark Hamill, Harrison Ford, Carrie Fisher', '8.7'),
('M03', 'The Grand Budapest Hotel', 'images/The Grand Budapest Hotel.jpg', 'https://www.youtube.com/embed/1Fg5iWmQjwk', 'A writer encounters the owner of an aging high-class hotel, who tells him of his early years serving as a lobby boy in the hotel\'s glorious years under an exceptional concierge.', 'Wes Anderson', 'Stefan Zweig (inspired by the writings of), Wes Anderson (screenplay)', 'Ralph Fiennes, F. Murray Abraham, Mathieu Amalric', '8.1'),
('M04', 'Nightcrawler', 'images/Nightcrawler.jpg', 'https://www.youtube.com/embed/u1uP_8VJkDQ', 'When Louis Bloom, a con man desperate for work, muscles into the world of L.A. crime journalism, he blurs the line between observer and participant to become the star of his own story.\r\n', 'Dan Gilroy', 'Dan Gilroy', 'Jake Gyllenhaal, Rene Russo, Bill Paxton', '7.8'),
('M05', 'Kill Bill', 'images/Kill Bill.jpg', 'https://www.youtube.com/embed/7kSuas6mRpk', 'After awakening from a four-year coma, a former assassin wreaks vengeance on the team of assassins who betrayed her.', 'Quentin Tarantino', 'Quentin Tarantino', 'Uma Thurman, David Carradine, Daryl Hannah', '8.1'),
('M06', 'Boyhood', 'images/Boyhood.jpg', 'https://www.youtube.com/embed/Y0oX0xiwOv8', 'The life of Mason, from early childhood to his arrival at college.', 'Richard Linklater', 'Richard Linklater', 'Ellar Coltrane, Patricia Arquette, Ethan Hawke', '7.9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `phno`) VALUES
(1, 'sriram123', 'abc@xyz.com', '2a13e93dc69e31527d9576a2743d8c24', '9876543210'),
(2, 'sriram', 'xyz@abc.com', '2a13e93dc69e31527d9576a2743d8c24', '9876543210'),
(3, 'asdf', 'abd@xyz.com', '2a13e93dc69e31527d9576a2743d8c24', '9874563210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `foodandbev`
--
ALTER TABLE `foodandbev`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodandbev`
--
ALTER TABLE `foodandbev`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
