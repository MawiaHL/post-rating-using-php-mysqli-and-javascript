# post-rating-using-php-mysqli-and-javascript
This is a very simple post rating using phpmysql and javascript. It uses mysql database for storing rating details like post id, rating, ipaddress of who rates, and date and time of rating. It's completely free.

# Hei hi ka zirlai te tana mawlmang taka ka siam a ni. database chu a hnuaia mi ang hian siam tur a ni ang:

-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 02:28 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratingzirna`
--

CREATE TABLE IF NOT EXISTS `ratingzirna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `hunlehni` datetime NOT NULL,
  `chhinchhiahna` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ratingzirna`
--

INSERT INTO `ratingzirna` (`id`, `pid`, `rating`, `hunlehni`, `chhinchhiahna`) VALUES
(1, 304, 3, '2015-02-12 02:18:08', 2130706433),
(2, 40, 4, '2015-02-12 02:25:54', 2130706433);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
