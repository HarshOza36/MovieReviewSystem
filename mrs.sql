-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 03:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cratings`
--

CREATE TABLE `cratings` (
  `rid` int(20) NOT NULL,
  `rates` int(5) DEFAULT NULL,
  `reviews` varchar(1000) DEFAULT NULL,
  `m_id` varchar(10) DEFAULT NULL,
  `c_id` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cratings`
--

INSERT INTO `cratings` (`rid`, `rates`, `reviews`, `m_id`, `c_id`) VALUES
(1, 3, 'Nice movie', 'M001', 'myname'),
(2, 4, 'great acting', 'M002', 'myname'),
(3, 4, 'what a great movie,great acting wow', 'M002', 'mucash'),
(4, 2, 'edited 2nd review movie is bad', 'M002', 'myname'),
(8, 5, 'everything is awesome!!!', 'M001', 'myname'),
(13, 4, 'Woody was a fearless leader in all three movies. Until this one. Yes he still had a heart of gold. But, he went from Bo Peeps hero and Sharif that she looked up to, to his whipping boy.', 'M009', 'myname'),
(12, 3, 'noice worth watching', 'M009', 'mucash'),
(14, 3, 'Watchable.', 'M007', 'RaGaCong'),
(15, 1, 'dont watch boring', 'M002', 'RaGaCong'),
(16, 5, 'speechless', 'M003', 'RaGaCong'),
(17, 3, 'wow nice', 'M002', 'Nehal'),
(18, 2, 'ehh boring :(', 'M002', 'RaGaCong'),
(20, 5, 'no words\r\n', 'M005', 'RaGaCong'),
(21, 5, 'I DONT WANNA GIVE SPOILERS BUT SPOILER ALERT NO DOUBLE ROLE\r\n', 'M005', 'RaGaCong'),
(22, 4, 'Do not miss this movie is best\r\n', 'M010', 'NaMoBJP'),
(23, 5, 'OH i cried  y did they kill iron man and black widow uff spoilers', 'M003', 'myname'),
(24, 4, 'TEST REVIEW FOR PRESENTATIOMN', 'M007', 'NaMoBJP'),
(25, 4, 'test fro interview\r\n', 'M004', 'NaMoBJP');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `f_name` varchar(10) DEFAULT NULL,
  `l_name` varchar(10) DEFAULT NULL,
  `dob` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `password`, `email`, `f_name`, `l_name`, `dob`) VALUES
('myname', 'mypass', 'mail@mail.com', 'fname', 'lname', '1956-01-01'),
('RaGaCong', 'congress', 'raga@cong.in', 'Rahul', 'Gandhi', '1975-07-15'),
('myusername', 'mypassc', 'mail@g.com', 'yesname', 'yesurna', '2006-06-13'),
('mucash', 'kingiam', 'jiomerelal@rel.com', 'Mukesh', 'Ambani', '1971-08-08'),
('NaMoBJP', 'bhajapa', 'bhaiyobeheno@gmail.com', 'Narendra', 'Modi', '1954-04-15'),
('abcTest', 'testpass', 'testmail@test.com', 'Test', 'User', '1931-03-01'),
('SRKing', 'mehundin', 'srk@kkr.com', 'ShahRukh', 'Khan', '1979-11-02'),
('testtest', 'passtest', 'test@tes.com', 'tet', 'stet', '1930-01-02'),
('Latesttest', 'testpass', 'email@test.com', 'New', 'Test', '1931-03-02'),
('TheKapil', 'shrmashow', 'tkss@sony.com', 'Kapil', 'Sharma', '1932-04-03'),
('udtaShahid', 'kapoorking', 'udtakapoor@gmail.com', 'Shahid', 'Kapoor', '1967-05-06'),
('helloworld', 'helloworld', 'hello@gmail.com', 'hello', 'world', '1999-11-09'),
('qwerty', 'qwerty12', 'qwerty@qwe.rty', 'qwe', 'rty', '1930-01-01'),
('Nehal', 'aksharr', 'hello@web.cm', 'hello', 'world', '1930-01-01'),
('Harsh', 'qwerty12', 'admin@admin.com', 'Admin', 'Iam', '1956-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mid` varchar(10) NOT NULL,
  `length` varchar(10) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `caste` varchar(90) DEFAULT NULL,
  `movie_name` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `length`, `genre`, `caste`, `movie_name`) VALUES
('M001', '149mins', 'Action', 'Robert Downey JR', 'Avengers Infinity War'),
('M002', '110mins', 'Romance', 'Emilia Clarke', 'Me Before You'),
('M003', '181mins', 'Action', 'Robert Downey JR', 'Avengers EndGame'),
('M004', '129mins', 'Action', 'Tom Holland', 'SpiderMan Far From Home'),
('M005', '144mins', 'Action', 'Shah Rukh Khan', 'Don 2'),
('M006', '122mins', 'Horror', 'Ali Fazal', 'Khamoshiyan'),
('M007', '139mins', 'Romance', 'Aayush Sharma', 'Loveyatri'),
('M008', '134mins', 'Romance', 'Aditya Roy Kapoor', 'Aashiqui 2'),
('M009', '100mins', 'Animated', 'Tom Hanks', 'Toy Story 4'),
('M010', '102mins', 'Animated', 'Owen Wilson', 'Cars 3');

-- --------------------------------------------------------

--
-- Table structure for table `ph_no`
--

CREATE TABLE `ph_no` (
  `cid` varchar(20) NOT NULL,
  `phone_no` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph_no`
--

INSERT INTO `ph_no` (`cid`, `phone_no`) VALUES
('abcTest', '2222288888'),
('asdfg', ''),
('Harsh', '1234565655'),
('helloworld', '1234567892'),
('Latesttest', '9878987678'),
('mucash', '9988722334'),
('myname', '9876543210'),
('myusername', '9999900000'),
('NaMoBJP', '9564576123'),
('Nehal', '1231231231'),
('qwerty', '3434567678'),
('RaGaCong', '8787665554'),
('SRKing', '9879878765'),
('testtest', '9879879877'),
('TheKapil', '9898976767'),
('udtaShahid', '6767856567');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `cid` varchar(20) NOT NULL,
  `q1` varchar(300) DEFAULT NULL,
  `q2` varchar(300) DEFAULT NULL,
  `q3` varchar(300) DEFAULT NULL,
  `q4` varchar(300) DEFAULT NULL,
  `q5` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`cid`, `q1`, `q2`, `q3`, `q4`, `q5`) VALUES
('myname', 'Looked a lot blue', 'Friends', 'Looks Complete', 'Moderately', 'Nah its fine'),
('RaGaCong', 'a', 'a', 'a', 'Will See', 'fg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cratings`
--
ALTER TABLE `cratings`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `ph_no`
--
ALTER TABLE `ph_no`
  ADD PRIMARY KEY (`cid`,`phone_no`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cratings`
--
ALTER TABLE `cratings`
  MODIFY `rid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
