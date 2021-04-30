-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `first_name`, `last_name`, `email_add`, `comment`) VALUES
(1, 'Junko', 'Onoda', 'hello@japanheritage.com', 'Thank you!'),
(2, 'kJurt joph', 'sample', 'sample@gmail', 'i liek thius'),
(3, 'kyrson jeno', 'sample', 'sample@gmail', 'sample'),
(4, 'miitey', 'osijra', 'miitey@gmail', 'sample'),
(5, 'heout', 'sibeka', 'npesy@gmail', 'sample'),
(6, 'pthow', 'ainoel', 'ptnes@gmail', 'sample'),
(7, 'joiasj', 'aoineirn', 'djuen@gmail', 'thoiae'),
(8, 'Junko', 'Onoda', 'hello@gmail.com', 'OK'),
(9, 'Junko', 'Onoda', 'hello@gmail.com', 'NICE!'),
(10, 'Junko', 'Onoda', 'hello@gmail.com', 'NICE!'),
(11, 'Junko', 'Onoda', 'hello@gmail.com', 'NICE!'),
(12, 'Junko', 'Onoda', 'hello@gmail.com', 'NICE'),
(13, 'Hisae', 'Hana', 'hisa@gm.com', 'ok'),
(14, 'Hisae', 'Hana', 'hisa@gm.com', 'ok'),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, 'Shishio ', 'homare', 'hello@gmail.com', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `member_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `birth_day` date NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `pass_word` varchar(20) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `credit_num` varchar(50) NOT NULL,
  `passport` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`member_id`, `f_name`, `l_name`, `birth_day`, `phone_num`, `e_mail`, `pass_word`, `home_address`, `credit_num`, `passport`) VALUES
(1, 'Junko', 'Onoda', '2021-04-20', '1234', 'hello@gmail.com', '123456', 'Kobe', '9874', '0'),
(2, 'Masaharu', 'Fukuyama', '2016-07-26', '90', 'hello@gmail.com', '987654', 'Fukuoka', '1234-4678-9876-5432', 'AB9876543'),
(3, 'Haruka', 'Ayase', '2017-06-08', '123-456-789', 'ayase@gm.com', 'sample', 'Hiroshima Japan', '6544-7894-3214-7586', 'BE9873456'),
(4, 'Takeru', 'Sato', '2021-04-13', '090-8794-2165', 'takeru@gm.cm', '951874', 'Kyoto Japan', '6579-1234-6578-1245', 'PE9874657'),
(7, 'Junko', 'Onoda', '2021-04-15', '090-8794-2165', 'hello@gmail.com', '123456789', 'Kobe', '1234-4678-9876-5432', 'AB9876543'),
(8, 'Junko', 'Onoda', '2021-04-15', '090-8794-2165', 'hello@gmail.com', '123456789', 'Kobe', '1234-4678-9876-5432', 'AB9876543');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `airport` varchar(50) NOT NULL,
  `dep_date` date NOT NULL,
  `stay` int(10) NOT NULL,
  `persons` int(10) NOT NULL,
  `rooms` int(10) NOT NULL,
  `requirements` varchar(200) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `destination`, `airport`, `dep_date`, `stay`, `persons`, `rooms`, `requirements`, `member_id`) VALUES
(1, '', '', '2021-04-29', 0, 0, 0, '', 0),
(2, 'Shirakawago', 'Fukuoka', '2021-04-29', 2, 2, 1, 'Please', 0),
(3, 'Ithukushima', 'Fukuoka', '2021-04-29', 3, 2, 2, 'sample', 0),
(4, 'Shirakami', 'Kansai', '2021-04-23', 2, 3, 2, 'Nothing', 0),
(5, 'Shiretoko', 'Fukuoka', '2021-04-14', 1, 3, 2, 'Sample', 0),
(6, 'Fuji', 'Sendai', '2021-05-11', 1, 1, 1, 'Nothing', 5),
(7, 'Nikko', 'Shin-Chitose', '2021-04-16', 1, 2, 3, '', 5),
(8, 'Nikko', 'Shin-Chitose', '2021-04-16', 1, 2, 3, '', 5),
(9, 'Nikko', 'Shin-Chitose', '2021-04-16', 1, 2, 3, '', 5),
(10, 'Nikko', 'Shin-Chitose', '2021-04-16', 1, 2, 3, '', 5),
(11, 'Nikko', 'Shin-Chitose', '2021-04-16', 1, 2, 3, '', 5),
(12, 'Shirakawago', 'Haneda ?>', '2021-05-12', 1, 2, 1, 'OK', 0),
(13, 'Ogasawara', 'Fukuoka ?>', '2021-04-30', 2, 2, 2, 'Sample', 1),
(14, 'Yakushima', 'Haneda', '2021-05-12', 3, 2, 2, 'GOOOOOD', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
