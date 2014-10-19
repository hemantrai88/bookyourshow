-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2014 at 11:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookyourshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(5) NOT NULL AUTO_INCREMENT,
  `show_id` int(5) NOT NULL,
  `timing_id` int(5) NOT NULL,
  `seat_id` int(5) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `show_id`, `timing_id`, `seat_id`) VALUES
(1, 2, 6, 6),
(2, 2, 6, 4),
(3, 6, 22, 3),
(4, 6, 21, 5),
(5, 1, 3, 3),
(6, 5, 18, 3),
(7, 3, 9, 4),
(8, 5, 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `show_id` int(5) NOT NULL,
  `timing` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `show_id`, `timing`) VALUES
(1, 1, '01:30 pm'),
(2, 1, '02:30 pm'),
(3, 1, '03:30 pm'),
(4, 1, '04:30 pm'),
(5, 2, '01:40 pm'),
(6, 2, '02:40 pm'),
(7, 2, '03:40 pm'),
(8, 2, '04:40 pm'),
(9, 3, '01:50 pm'),
(10, 3, '02:50 pm'),
(11, 3, '03:50 pm'),
(12, 3, '04:50 pm'),
(13, 4, '02:00 pm'),
(14, 4, '03:00 pm'),
(15, 4, '04:00 pm'),
(16, 4, '05:00 pm'),
(17, 5, '02:10 pm'),
(18, 5, '03:10 pm'),
(19, 5, '04:10 pm'),
(20, 5, '05:10 pm'),
(21, 6, '02:20 pm'),
(22, 6, '03:20 pm'),
(23, 6, '04:20 pm'),
(24, 6, '05:20 pm');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `Title`, `Genre`, `Description`, `poster`, `thumbnail`) VALUES
(1, 'Extreme 3D', '3D Effects', 'Enjoy the amazing experience of 3D effects that might make your jump off your seats. Just remember, It''s not real :P', 'extreme3d.jpg', 'extremetb.jpg'),
(2, 'Katy Perry - Wide Awake', 'Music Video', 'Watch the 3D version of pop diva Katy Perry''s "Wide Awake" music video. Whether you like pop or not, you sure will like this ;)', 'wide_awake.jpg', 'wide_awake_tb.jpg'),
(3, 'Bob''s Big Break', 'Animation', 'Join B.O.B., Dr. Cockroach and The Missing Link for dynamite action and mind-blowing adventure. The good doctor celebrates B.O.B.''s birthday with a cake that''s just ''the bomb.'' After he swallows the explosive, B.O.B. mysteriously has the power to read other''s minds. Watch what happens next...', 'bobs_big_break.jpg', 'bobs_tb.jpg'),
(4, 'Inter Milan vs Lazio Highlights', 'Sports', 'Enjoy match highlights of a football match from Italy''s Serie A between Inter Milan and S.S. Lazio in 3D. It makes you feel better than being in the stadium. It makes you feel like you are on the pitch', 'inter_vs_lazio.jpg', 'inter-laziotb.jpg'),
(5, 'Delicious Fight', 'Comedy', '<p>Watch a party take an unexpected turn and end up being a battleground with food as weapon in 3D.</p>\n<p>SPOILER: You would have never seen food so up close before.</p>', 'food_fight_3d.jpg', 'food_fight_3d.jpg'),
(6, 'Assorted 3D', 'Random', 'An unsorted mix of amazing 3D videos that will drop your jaw, make you laugh and leave you mesmerized by the sheer brilience of the visual treat', 'extreme.jpg', 'extreme-tb.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
