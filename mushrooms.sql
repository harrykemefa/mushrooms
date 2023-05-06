-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2023 at 03:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mushrooms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL,
  `permissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `full_name`, `email`, `password`, `profile_image`, `join_date`, `last_login`, `permissions`) VALUES
(18, 'Harry Kemefa', 'harry@mushrooms.ng', '$2y$10$NiUzKL9QWact9bkH39LZ4elIhdMu9K9fyZsd5glG4e1fq2gOp0WIy', '/rent/images/team/3aa96cbc2d30938fac8adbf39ac69f80.jpg', '2020-05-02 15:14:13', '2023-05-06 16:28:03', 'admin,editor'),
(19, 'Rahim Momoh', 'jg@kagon.io', '$2y$10$9z3iL6g8hsERpTtWte2WmeyFlyClzN4MugUY2J9QY5J3VBWpIGJ/W', '', '2020-08-24 19:14:18', '2021-04-08 11:12:08', 'admin'),
(20, 'Oseiwe Ehiremhen', 'ehiremheno@gmail.com', '$2y$10$9z3iL6g8hsERpTtWte2WmeyFlyClzN4MugUY2J9QY5J3VBWpIGJ/W', NULL, '2020-08-24 19:21:45', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

DROP TABLE IF EXISTS `alerts`;
CREATE TABLE IF NOT EXISTS `alerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=599 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `sender_id`, `receiver_id`, `type`, `message`, `created`, `status`) VALUES
(598, 30, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:30:56', 0),
(597, 30, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:27:50', 0),
(596, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:27:21', 0),
(591, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:00:48', 0),
(592, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:06:50', 0),
(593, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:08:50', 0),
(594, 30, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:21:43', 0),
(595, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 08:27:05', 0),
(590, 26, 30, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:51:37', 1),
(589, 30, 26, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:51:37', 0),
(588, 64, 30, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:51:35', 1),
(587, 30, 64, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:51:35', 0),
(586, 66, 27, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 06:49:39', 0),
(585, 66, 63, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 06:49:35', 0),
(584, 64, 58, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:08:14', 1),
(564, 62, 58, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:23', 0),
(565, 62, 41, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:25', 0),
(566, 62, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:29', 0),
(567, 62, 26, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:31', 0),
(568, 62, 25, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:34', 0),
(570, 2, 57, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 06:37:06', 0),
(571, 2, 61, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 06:38:43', 0),
(572, 26, 62, 'flatmate', 'hey! You ve got a new match', '2021-10-06 06:42:20', 0),
(573, 62, 26, 'flatmate', 'hey! You ve got a new match', '2021-10-06 06:42:20', 0),
(574, 26, 58, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 06:42:40', 0),
(575, 26, 41, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 06:42:42', 0),
(576, 26, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 08:46:45', 0),
(577, 26, 30, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 08:46:53', 1),
(578, 64, 62, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 16:55:21', 0),
(579, 64, 30, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-12 20:51:45', 1),
(580, 64, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-12 20:51:54', 0),
(581, 64, 25, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-12 20:52:01', 0),
(582, 64, 58, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-11-30 06:07:32', 1),
(583, 58, 64, 'flatmate', 'hey! You ve got a new match', '2021-11-30 06:08:14', 0),
(569, 2, 61, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-10-06 06:36:49', 0),
(563, 62, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 09:37:21', 0),
(561, 30, 29, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 08:20:33', 0),
(560, 30, 58, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-26 07:48:18', 0),
(559, 30, 41, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-25 18:40:31', 0),
(557, 62, 30, 'flatmate', 'hey! You ve got a new match', '2021-08-25 17:50:03', 0),
(555, 30, 60, 'flatmate', 'hey! You ve got a new like, check to see who it is', '2021-08-25 17:48:26', 0),
(558, 30, 62, 'flatmate', 'hey! You ve got a new match', '2021-08-25 17:50:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
CREATE TABLE IF NOT EXISTS `amenities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `type`, `icon`) VALUES
(1, 'Power Supply', 'flaticon-electric'),
(2, 'Water Supply', 'flaticon-water-supply'),
(3, 'Gated Compound', 'flaticon-gate'),
(4, 'Security Service', 'flaticon-insurance'),
(5, 'Parking Space', 'flaticon-parking'),
(6, 'Balcony', 'flaticon-balcony'),
(7, 'Kitchen Access', 'flaticon-kitchen'),
(8, 'Waste Management', 'flaticon-garbage');

-- --------------------------------------------------------

--
-- Table structure for table `apt_favorite`
--

DROP TABLE IF EXISTS `apt_favorite`;
CREATE TABLE IF NOT EXISTS `apt_favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `favorite_type` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apt_favorite`
--

INSERT INTO `apt_favorite` (`id`, `sender_id`, `receiver_id`, `receiver_email`, `favorite_type`, `created`) VALUES
(50, 25, 35, 'kenny@gmail.com', 'renter', '2021-04-10 12:47:46'),
(58, 2, 27, 'osunde@gmail.com', 'renter', '2021-05-03 01:57:57'),
(75, 26, 43, 'Lmediakreations@gmail.com', 'renter', '2021-05-04 02:57:00'),
(76, 2, 42, 'kmediakreations@gmail.com', 'renter', '2021-05-04 20:38:15'),
(77, 2, 44, 'hmediakreations@gmail.com', 'renter', '2021-05-04 20:38:27'),
(78, 60, 42, 'kmediakreations@gmail.com', 'renter', '2021-06-25 12:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
CREATE TABLE IF NOT EXISTS `extra` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `renter_id` int(20) NOT NULL,
  `description` text NOT NULL,
  `amenities` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `renter_id`, `description`, `amenities`) VALUES
(7, 45, 'This is a good apartment i guess', '2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `favorite_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reciever_id` (`receiver_id`),
  KEY `sender_id` (`sender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=605 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `sender_id`, `receiver_id`, `favorite_type`) VALUES
(567, 30, 62, 'flatmate'),
(568, 62, 30, 'flatmate'),
(577, 62, 26, 'flatmate'),
(578, 62, 25, 'flatmate'),
(581, 2, 61, 'flatmate'),
(582, 26, 62, 'flatmate'),
(583, 26, 58, 'flatmate'),
(584, 26, 41, 'flatmate'),
(585, 26, 60, 'flatmate'),
(586, 26, 30, 'flatmate'),
(587, 64, 62, 'flatmate'),
(588, 64, 30, 'flatmate'),
(589, 64, 29, 'flatmate'),
(590, 64, 25, 'flatmate'),
(591, 64, 58, 'flatmate'),
(592, 58, 64, 'flatmate'),
(593, 66, 63, 'flatmate'),
(594, 66, 27, 'flatmate'),
(596, 30, 26, 'flatmate'),
(604, 30, 29, 'flatmate');

-- --------------------------------------------------------

--
-- Table structure for table `flatmates`
--

DROP TABLE IF EXISTS `flatmates`;
CREATE TABLE IF NOT EXISTS `flatmates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `profession` int(11) NOT NULL,
  `bio` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profile_image` text NOT NULL,
  `location` int(11) NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `move_date` date NOT NULL,
  `pets` int(11) NOT NULL,
  `smoking` int(11) NOT NULL,
  `user_type` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `flatmates_ibfk_1` (`location`),
  KEY `flatmates_ibfk_2` (`user_id`),
  KEY `profession` (`profession`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flatmates`
--

INSERT INTO `flatmates` (`id`, `user_id`, `gender`, `profession`, `bio`, `phone`, `profile_image`, `location`, `budget`, `move_date`, `pets`, `smoking`, `user_type`) VALUES
(25, 2, 'female', 2, 'Hii! I&#039;m a software developer with 9-5, baker and avid reader who loves to explore the city. Looking for  a chill, respectful, friendly roommate who is a also a young professional.', '09073864601', '/mates/images/users/fff2e7e7925a3c5de0b712338a7c2904.jpg', 2, '750000.00', '2021-03-25', 1, 0, 1),
(28, 21, 'female', 1, 'Igbo gal, born and rasied in Lagos. Looking for a roommate for a 2 bed/2 bath in Lekki ideally April - June move in date. Currently WFH for a consulting firm. Love to travel, go out to eat (especially brunchðŸ™‚), cook and Hang out. Would love to have a friendly, clean roommate with similar interests!', '09045632177', '/mates/images/users/eb1c6a265b85887a355962119d317701.jpeg', 2, '360000.00', '2021-04-23', 1, 0, 1),
(30, 25, 'male', 1, 'I&rsquo;m a young professional who works remotely for an engineering firm. I&rsquo;m social, and enjoy going out and experiencing new things. I&rsquo;m fairly tidy, and have a dog named Panda.', '08064371004', '/mates/images/users/7a42906066de59a2fef41b3ee7c4da2f.jpg', 2, '750000.00', '2021-06-24', 1, 0, 1),
(31, 26, 'male', 2, 'Hi! My name is Sam. I&#039;m a DJ &amp; Producer from Akwa Ibom. I&#039;m currently living in Lekki and actively looking for someone to move into my apartment to replace my current roommate once our lease is up on september 21st 2021.', '08064371004', '/mates/images/users/c23f0b0b7b1e101f1a5770438948e09a.jpeg', 2, '670000.00', '2021-09-21', 1, 1, 1),
(32, 27, 'female', 5, 'Hi to whoever is reading this. I am looking for new experiences in Lagos. Of course, I am fitting the clich&eacute; of being another 21y/o moving to the big city. Looking for a 2bed situation in Lagos Island to connect with others. I am very clean, 4/20 and friendly. I like to cook/bake and have self-care alone in my room from time to time. Between Modeling and Video production, I&#039;m mostly at home at night and early in the morning. Looking forward to it all.', '08137583356', '/mates/images/users/7a62decc790e38a1496b0b8b7edaa134.jpeg', 2, '650000.00', '2021-09-25', 1, 1, 1),
(34, 29, 'male', 3, 'Im a professional writer, i just moved back to lagos and i need a roommate to share a room with.', '08137583356', '/mates/images/users/876b82024023f2ce301aee99eb213426.jpg', 3, '750000.00', '2021-04-10', 0, 0, 1),
(35, 30, 'male', 2, 'go do something about it', '08064371004', '/mates/images/users/112e54c1b5fa5be86968dba1c526b357.jpeg', 2, '5000.00', '2021-03-25', 0, 1, 1),
(36, 41, 'male', 1, 'nothing to say here', '08124785032', '/mates/images/users/9672d1ad7935b6d5ae78874e74cfedc2.jpeg', 3, '30000.00', '2021-10-22', 0, 1, 2),
(37, 57, 'Female', 1, 'i am a bad guy', '0906979805', '/mates/images/users/1e5b9592358741f0175e05aa0957ced3.jpeg', 4, '4000.00', '2021-05-27', 0, 0, 2),
(38, 58, 'male', 1, 'hey people', '0905674839', '/mates/images/users/a90c5702c1c0ab0477ef3a7e587fe373.jpg', 3, '5000.00', '2021-09-30', 0, 0, 2),
(39, 60, 'male', 1, 'Mopay', '0908695873', '/mates/images/users/0a2617800cbde04f7684e5ff2d553cf2.jpg', 3, '60000.00', '2021-05-28', 0, 0, 1),
(40, 61, 'Female', 1, 'I am a very good web designer and programmer, you wont regret meeting me', '09045687092', '/mates/images/users/66f5487d97e73879ce530504aa88735f.jpg', 2, '6000.00', '2021-06-25', 0, 1, 2),
(41, 62, 'male', 2, 'go do something about your mental health bro', '0908080568', '/mates/images/users/5d82b038e6410c49811652f89becaa58.jpg', 3, '250000.00', '2021-07-23', 1, 1, 1),
(42, 63, 'Female', 3, 'i am here today', '08131883002', '/mates/images/users/66898e327114bf6d50246a937d86237a.jpeg', 4, '300000.00', '2021-10-01', 0, 0, 1),
(44, 64, 'male', 1, 'i see danger, danger wahala day.', '08137583356', '/mates/images/users/183425a92569daf418387ed5802ce5b7.jpg', 23, '20000.00', '2021-10-22', 0, 0, 2),
(45, 66, 'Female', 2, 'Im just looking for everything', '09066733306', '/mates/images/users/54fcd4d4f1ba5f28544fa7b20c7d44ce.jpg', 3, '50000.00', '2022-01-20', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `image` text,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `parent`, `image`, `description`) VALUES
(1, 'Lagos', 0, '', ''),
(2, 'Lekki', 1, '', ''),
(3, 'Yaba', 1, '', ''),
(4, 'Ikeja', 1, '', ''),
(5, 'Surulere', 1, '', ''),
(6, 'Ikoyi', 1, '', ''),
(7, 'VI', 1, '', ''),
(8, 'Epe', 1, '', ''),
(9, 'Festac', 1, '', ''),
(10, 'Bannana Island', 1, '', ''),
(11, 'Lagos Island', 1, '', ''),
(12, 'Omole Phase 1', 1, '', ''),
(13, 'Magodo Phase 1', 1, '', ''),
(14, 'Marina', 1, '', ''),
(15, 'Lekki Elf', 1, '', ''),
(16, 'Lekki-Chevron', 1, '', ''),
(17, 'Ikota', 1, '', ''),
(18, 'Ikeja Maryland', 1, '', ''),
(19, 'Eko Atlantic City', 1, '', ''),
(20, 'Dolphin Estate', 1, '', ''),
(21, 'Ajah', 1, '', ''),
(22, 'Ojota', 1, '', ''),
(23, 'Alaba', 1, '', ''),
(24, 'VGC', 1, '', ''),
(25, 'Lagos Mainland', 1, '', ''),
(26, 'Ikorodu', 1, '', ''),
(27, 'Eleko Beach', 1, '', ''),
(28, 'Isolo', 1, '', ''),
(29, 'Anthony', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `match_mates`
--

DROP TABLE IF EXISTS `match_mates`;
CREATE TABLE IF NOT EXISTS `match_mates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `match_mates`
--

INSERT INTO `match_mates` (`id`, `user_id`, `match_id`) VALUES
(126, 26, 30),
(125, 30, 26),
(124, 64, 30),
(123, 30, 64),
(122, 64, 58),
(121, 58, 64),
(120, 62, 26),
(119, 26, 62),
(118, 30, 62),
(117, 62, 30);

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`id`, `type`, `parent`, `icon`) VALUES
(1, 'professional', 0, ''),
(2, 'freelancer', 0, ''),
(3, 'NYSC', 0, ''),
(5, 'intern', 0, ''),
(6, 'student', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `recently_seen`
--

DROP TABLE IF EXISTS `recently_seen`;
CREATE TABLE IF NOT EXISTS `recently_seen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recently_seen`
--

INSERT INTO `recently_seen` (`id`, `sender_id`, `receiver_id`, `type`) VALUES
(108, 30, 27, 'flatmate'),
(107, 58, 58, 'flatmate'),
(106, 30, 57, 'flatmate'),
(105, 26, 41, 'flatmate'),
(104, 2, 41, 'flatmate'),
(103, 43, 41, 'flatmate'),
(102, 43, 43, 'flatmate'),
(101, 43, 29, 'flatmate'),
(100, 41, 29, 'flatmate'),
(99, 41, 41, 'flatmate'),
(98, 27, 29, 'flatmate'),
(97, 2, 21, 'flatmate'),
(96, 31, 26, 'flatmate'),
(95, 30, 2, 'flatmate'),
(94, 30, 21, 'flatmate'),
(93, 26, 30, 'flatmate'),
(92, 21, 2, 'flatmate'),
(91, 21, 26, 'flatmate'),
(90, 30, 30, 'flatmate'),
(89, 27, 30, 'flatmate'),
(88, 27, 25, 'flatmate'),
(87, 2, 30, 'flatmate'),
(86, 30, 29, 'flatmate'),
(85, 25, 21, 'flatmate'),
(84, 25, 29, 'flatmate'),
(83, 25, 25, 'flatmate'),
(82, 26, 29, 'flatmate'),
(81, 26, 25, 'flatmate'),
(80, 26, 26, 'flatmate'),
(79, 27, 27, 'flatmate'),
(78, 27, 2, 'flatmate'),
(77, 2, 25, 'flatmate'),
(76, 21, 25, 'flatmate'),
(75, 21, 21, 'flatmate'),
(74, 21, 29, 'flatmate'),
(73, 2, 26, 'flatmate'),
(72, 2, 2, 'flatmate'),
(71, 2, 29, 'flatmate'),
(70, 29, 27, 'flatmate'),
(69, 29, 2, 'flatmate'),
(68, 29, 29, 'flatmate'),
(109, 30, 28, 'flatmate'),
(110, 2, 27, 'flatmate'),
(111, 60, 60, 'flatmate'),
(112, 2, 58, 'flatmate'),
(113, 2, 60, 'flatmate'),
(114, 26, 2, 'flatmate'),
(115, 60, 2, 'flatmate'),
(116, 60, 58, 'flatmate'),
(117, 60, 57, 'flatmate'),
(118, 60, 30, 'flatmate'),
(119, 26, 60, 'flatmate'),
(120, 25, 62, 'flatmate'),
(121, 25, 60, 'flatmate'),
(122, 25, 58, 'flatmate'),
(123, 64, 58, 'flatmate'),
(124, 30, 25, 'flatmate'),
(125, 64, 25, 'flatmate'),
(126, 65, 25, 'flatmate'),
(127, 30, 64, 'flatmate'),
(128, 30, 58, 'flatmate'),
(129, 30, 62, 'flatmate'),
(130, 30, 26, 'flatmate'),
(131, 30, 60, 'flatmate'),
(132, 30, 41, 'flatmate');

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

DROP TABLE IF EXISTS `renters`;
CREATE TABLE IF NOT EXISTS `renters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL,
  `user_id` int(15) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `land_name` varchar(50) DEFAULT NULL,
  `land_phone` varchar(20) DEFAULT NULL,
  `location` int(11) NOT NULL,
  `address` text NOT NULL,
  `bath` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `space_type` int(11) NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `move_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renters`
--

INSERT INTO `renters` (`id`, `user_type`, `user_id`, `phone`, `full_name`, `email`, `land_name`, `land_phone`, `location`, `address`, `bath`, `bed`, `space_type`, `budget`, `move_date`, `status`) VALUES
(24, 3, NULL, '09045687790', 'jerry', 'jkemefa@gmail.com', NULL, NULL, 2, '', 1, 1, 2, '50000.00', '2021-07-29', 1),
(27, 3, NULL, '08064371004', 'Osunde Jenifer', 'osunde@gmail.com', NULL, NULL, 2, '', 1, 1, 3, '500000.00', '2021-10-30', 1),
(28, 3, NULL, '09073864601', 'Terry Waya', 'terry@gmail.com', NULL, NULL, 4, 'Plot 2 12th street bendel estate ddpa ugborikoko', 2, 1, 1, '700000.00', '2021-09-03', 0),
(35, 3, NULL, '08045698273', 'Kennedy', 'kenny@gmail.com', NULL, NULL, 4, 'No 82 afisiri road off delta palace hotel', 2, 2, 6, '1150000.00', '2021-08-26', 0),
(39, 3, NULL, '08064371004', 'Japa Daniel ', 'japa@gmail.com', NULL, NULL, 4, '', 1, 1, 6, '500000.00', '2021-10-29', 0),
(42, 3, NULL, '08064371004', 'Mills Harry ', 'kmediakreations@gmail.com', NULL, NULL, 3, '', 3, 2, 6, '50000.00', '2021-04-30', 0),
(43, 3, NULL, '08064371004', 'John Carter', 'Lmediakreations@gmail.com', NULL, NULL, 3, '', 1, 2, 8, '60000.00', '2021-05-21', 0),
(44, 3, NULL, '08064371004', 'Mills Harry', 'hmediakreations@gmail.com', NULL, NULL, 5, '', 2, 2, 1, '60000.00', '2021-06-25', 0),
(45, 3, NULL, '08064371004', 'Laura George', 'laurakreations@gmail.com', NULL, NULL, 4, '', 2, 2, 3, '700000.00', '2021-06-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

DROP TABLE IF EXISTS `seekers`;
CREATE TABLE IF NOT EXISTS `seekers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `space_type` int(11) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `bed` int(11) NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `move_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`id`, `email`, `full_name`, `phone`, `space_type`, `hood`, `bed`, `budget`, `move_date`) VALUES
(6, 'japa@gmail.com', 'Japa Daniel ', '08064371004', 6, '2,3,5', 1, '700000.00', '2021-08-27'),
(7, 'hmediakreations@gmail.com', 'Mills Harry', '08064371004', 2, '5', 1, '450000.00', '2021-04-23'),
(8, 'kmediakreations@gmail.com', 'Mills Harry', '08064371004', 1, '3', 1, '50000.00', '2021-04-30'),
(9, 'ykemefa@gmail.com', 'Kemefa harry', '08064371004', 1, '3,4,22', 1, '450000.00', '2021-08-26'),
(10, 'kejep@gmail.com', 'Jeroski', '08064371004', 2, '6', 2, '300000.00', '2021-09-30'),
(11, 'creations@gmail.com', 'Mills Harry', '08064371004', 2, '4,6,7', 1, '50000.00', '2021-08-26'),
(12, 'sam@gmail.com', 'Sam Otefe', '08064371004', 6, '2,3,5', 1, '500000.00', '2021-05-15'),
(14, 'jenny@gmail.com', 'Jenny Mills', '08064371004', 1, '5', 1, '700000.00', '2021-08-26'),
(15, 'pandy@gmail.com', 'pandy Olof', '08064371004', 6, '3,4,5', 2, '400099.00', '2021-06-30'),
(16, 'okon@gmail.com', 'Okon Okon', '08064371004', 2, '3,4,16', 2, '60000.00', '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `space`
--

DROP TABLE IF EXISTS `space`;
CREATE TABLE IF NOT EXISTS `space` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `space`
--

INSERT INTO `space` (`id`, `type`, `icon`, `description`) VALUES
(1, 'Bungalow', '', ''),
(2, 'Duplex', '', ''),
(3, 'Shared apartment', '', ''),
(4, 'Studio Apartment', '', ''),
(5, 'Hostel', '', ''),
(6, 'Flat', '', ''),
(7, 'Self contain', '', ''),
(8, 'Boys quarters', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sublets`
--

DROP TABLE IF EXISTS `sublets`;
CREATE TABLE IF NOT EXISTS `sublets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `photos` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sublets`
--

INSERT INTO `sublets` (`id`, `room_name`, `room_type`, `photos`, `user_id`) VALUES
(1, 'spare room', 'spare', '/mates/images/rooms/acaf92c4c3ced298a71bcbd612cf025d.jpg', 26);

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

DROP TABLE IF EXISTS `tab`;
CREATE TABLE IF NOT EXISTS `tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1614 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `sender_id`, `receiver_id`) VALUES
(1518, 2, 21),
(1517, 2, 27),
(1516, 2, 63),
(1515, 2, 57),
(1514, 2, 61),
(1552, 66, 27),
(1551, 66, 63),
(1550, 64, 58),
(1613, 30, 60),
(1438, 62, 58),
(1437, 62, 60),
(1612, 30, 62);

-- --------------------------------------------------------

--
-- Table structure for table `tour_request`
--

DROP TABLE IF EXISTS `tour_request`;
CREATE TABLE IF NOT EXISTS `tour_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `tour_date` date DEFAULT NULL,
  `tour_type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tour_request_ibfk_1` (`renter_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8_unicode_ci,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fb_user_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb_access_token` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `account_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `users_ibfk_1` (`user_type`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `profile_image`, `created`, `fb_user_id`, `fb_access_token`, `user_type`, `account_type`) VALUES
(2, 'jenny@gmail.com', 'Jenny', 'Mills', '$2y$10$zziAx/dhF5YpsniAoJI8eOaZ5AiY8eOhdGWOLuyhLMvWxqddocUaK', NULL, '2020-10-19 14:59:47', '', '', 1, 0),
(21, 'amara@gmail.com', 'Amara', 'Ofor', '$2y$10$lcnT0V8nX8Lq3LmjA7MJa.eX2pL6aTnFyyHjEXH55.7SwHJmNQ2CG', NULL, '2020-12-24 11:57:33', '', '', NULL, 0),
(25, 'deji@gmail.com', 'Deji', 'Jonathan', '$2y$10$AmvPgM5O0l2VX7UpjbvPKuKCv3sLYviACt3S.7BrosEnX7NupVmGe', NULL, '2021-01-14 15:47:56', '', '', NULL, 0),
(26, 'sam@gmail.com', 'Sam', 'Otefe', '$2y$10$NoX6J86pA6.8/RbsxnMJrexJR/Qpqkbi9UZHZyhKGPm92rZlhg4cS', NULL, '2021-02-04 22:11:35', '', '', 2, 0),
(27, 'petra@gmail.com', 'Petra', 'Jones', '$2y$10$QZIDEpH/7wKkMHreYRmQwOKjn4R8J1V5MGxiTFPmll22v0cq7V53S', NULL, '2021-02-15 17:45:15', '', '', 1, 0),
(29, 'jeremy@gmail.com', 'Jeremy', 'Williams', '$2y$10$YauHMODfS939A3fVQwfmz.w56OoAWC3G7jtzQkcHh4.eyCEssNoL2', NULL, '2021-03-06 10:39:58', '', '', 1, 0),
(30, 'okon@gmail.com', 'Okon', 'Okon', '$2y$10$Ql.a4NhXOOzEv7t.KwM5tOGHJaz11LG4rtVehXaW0ftdWEiZbaPti', NULL, '2021-03-16 01:41:01', '', '', 1, 0),
(31, 'lind@gmail.com', 'Jenny', 'Lind', '$2y$10$wDW6a/BvPXCA1pJm32rxKOGXTPvPcuJdclE0TAS9MLwQ69F7Tgu5i', NULL, '2021-03-24 15:28:05', '', '', NULL, 0),
(32, 'kelly@gmail.com', 'kelly', 'gone', '$2y$10$w7DisFhqTuIQG/c6ovTn7Obb/14aLML4UfIVKcb.OhJNDfZ0kHthG', NULL, '2021-03-27 11:19:37', '', '', NULL, 0),
(33, 'joke@gmail.com', 'joke', 'silva', '$2y$10$j10AQInKd7Gtf1Y2VgkI5uqQ7cRcvWq6VlMl8Je2zuA1CfyNp8Ylq', NULL, '2021-04-06 09:59:13', '', '', NULL, 0),
(34, 'harrykemefa@gmail.com', 'Juliet', 'Agbozi', '$2y$10$Lrzz9nQ90iIG3sv3CDGbyODbhXglGaSbO8Vn.CAv1LAhK0re8r0te', NULL, '2021-04-06 16:46:36', '', '', NULL, 0),
(35, 'shina@gmail.com', 'Kemefa', 'Kemefa', '$2y$10$BWzKujQyuMpeauXisx9zxOvYjz2sHj.fumKAfGogp1uBgn02l2eTO', NULL, '2021-04-07 01:53:59', '', '', NULL, 0),
(36, 'eze@gmail.com', 'Kelechi', 'eze', '$2y$10$5KQeqLKbhZggL.InjhjCU.xfxjieej8KJ1OzsPceQDm13vBIqGtyy', NULL, '2021-04-09 01:44:18', '', '', NULL, 0),
(37, 'kayla@gmail.com', 'kayla', '', '$2y$10$3A4S.KzkpIMPoVeYX6TqfeRybFKCfLtVQ0lTVt7TxDMFjj3sI2H62', NULL, '2021-04-09 22:56:28', '', '', NULL, 0),
(38, 'payla@gmail.com', 'Jenife Osunde', '', '$2y$10$60kYVzzyhRrvocJuUK5bd.DQJQJY4X0gfmMYRr7STokulQ8uEk72S', NULL, '2021-04-09 23:10:12', '', '', NULL, 0),
(39, 'kenny@gmail.com', 'Kennedy', '', '$2y$10$QWL51ojFigblN/5AQGIXgeWfCvyh6f399EbsgBKO1RiWsNBV4Dru6', NULL, '2021-04-10 12:46:50', '', '', NULL, 0),
(40, 'kim@gmail.com', 'Kim', 'Kardashian', '$2y$10$ps8mjw.Tw3M2PW76LOuba.JDndsjouKSkbbH7cNV3lbua0ju0PkuW', NULL, '2021-04-13 03:54:51', '', '', NULL, 0),
(41, 'japa@gmail.com', 'Japa Daniel', '', '$2y$10$HZFVIUW6j0PBPfJIIDnWX.tDf3RIaWieUpPyDteHXDHBCSelmF.Yy', NULL, '2021-04-15 16:19:40', '', '', 1, 0),
(42, 'hmediakreations@gmail.com', 'Mills Harry', '', '$2y$10$0nwQWtKPR4wPKoBsGu13XubV8MhfU74EBckwyo9NnL.CRWwYNqFPG', NULL, '2021-04-20 10:41:21', '', '', NULL, 0),
(54, 'keanu@gmail.com', 'Sarah', 'Doe', '$2y$10$MeHmq2xmekreDFCRHr7Nh.3IGskc3kTMxAjKNKPRJUoq4Wk9UNHlK', NULL, '2021-04-27 22:56:12', '', '', NULL, 0),
(55, 'kejep@gmail.com', 'Jeroski', '', '$2y$10$bfYls7Cpc.IVwgEwQgBf2e/znrlWHQuabyTy0qVA86/PdwdwLiyF6', NULL, '2021-04-27 22:59:45', '', '', NULL, 0),
(56, 'creations@gmail.com', 'Mills Harry', '', '$2y$10$z6lJ2NXyz9TOPyGXwTBn3O0CF2KxRiJ0LS0C7ibrTmJrmFPzlBDLy', NULL, '2021-04-30 16:34:21', '', '', NULL, 0),
(57, 'okowa@gmail.com', 'okowa', 'ifeanyi', '$2y$10$.RvemrDr.seAI6hzObq/muvrJgVGErZXgoeCSGvBMViUBCApAa7Q.', NULL, '2021-05-25 18:08:19', '', '', 2, 0),
(58, 'kerry@gmail.com', 'Kerry', 'Payne', '$2y$10$M14duuqaDJ6xVAOfKCsuTOsVp/L0flV0VWiszQ1AF7bxQ5Yyoxwh2', NULL, '2021-05-26 17:33:03', '', '', 2, 0),
(59, 'randy@gmail.com', 'randy', 'Olof', '$2y$10$8L/TWTAvMhWiU3euATK5e.rHgpjBxaTz889vmcFKnaJsv7A11rHmS', NULL, '2021-05-26 23:21:35', '', '', NULL, 0),
(60, 'pandy@gmail.com', 'pandy', 'Olof', '$2y$10$VTPoVT2co4oodhimHrzS1.Dpm.s.slMFj5MuU7qbept3ol70T.Fl.', NULL, '2021-05-26 23:21:51', '', '', 2, 0),
(61, 'katherine@gmail.com', 'Katherine', 'Howard', '$2y$10$Rt/J0N6fEh8q2AZ.O6amPO9z3oFGkMW6ZXe.pQ/v8vUzIYfRTBpga', NULL, '2021-06-03 09:19:47', '', '', 1, 0),
(62, 'lisa@gmail.com', 'Lisa ', 'Anne', '$2y$10$NmsGgBABYWaS/hWOaoLlIuXmUYY81ZUDhUNX7Rb09kOOwwOz01GOW', NULL, '2021-06-03 09:23:02', '', '', 2, 0),
(63, 'benny@gmail.com', 'benny', 'blanco', '$2y$10$Cy11cxsoj1j1yfXqiIorjejczL1hz9Ob7EHYqHhPYLjgsjnoBKc3y', NULL, '2021-09-29 12:41:05', '', '', 2, 0),
(64, 'oma@gmail.com', 'Oma', 'Mayuku', '$2y$10$xQ/42ocz.t1Ogh4QuDxLZOLzjTlni6YJepEnkrga5ht0eL4yLbc9i', NULL, '2021-10-06 09:27:04', '', '', 2, 0),
(65, 'yoma@gmail.com', 'Charles', 'Dickens', '$2y$10$vnSOnRQXPg47mJskXQnTIuy3iR3M/3xLNHIYn1Joxo2KIOP9o2g8u', NULL, '2021-11-30 06:39:44', '', '', NULL, 0),
(66, 'sarah@gmail.com', 'Sarah', 'Tavel', '$2y$10$jeabAy5D1Bsi8OIz3XSy.eWrFqra7.l3JVmtHKIRb2Gg2NEb.d9xu', NULL, '2021-11-30 06:45:43', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`, `icon`) VALUES
(1, 'roommate', 'nookons-user'),
(2, 'subletter', 'nookons-home'),
(3, 'renter', 'nookons-user'),
(4, 'landlord / caretaker', 'nookons-user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apt_favorite`
--
ALTER TABLE `apt_favorite`
  ADD CONSTRAINT `apt_favorite_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `renters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flatmates`
--
ALTER TABLE `flatmates`
  ADD CONSTRAINT `flatmates_ibfk_1` FOREIGN KEY (`location`) REFERENCES `location` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flatmates_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `flatmates_ibfk_3` FOREIGN KEY (`profession`) REFERENCES `profession` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour_request`
--
ALTER TABLE `tour_request`
  ADD CONSTRAINT `tour_request_ibfk_1` FOREIGN KEY (`renter_id`) REFERENCES `renters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tour_request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
