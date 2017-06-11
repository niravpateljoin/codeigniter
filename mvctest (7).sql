-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2014 at 02:29 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvctest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'newadmin', 'd3698036132b78ae31c3f03d377758d8', 'admin', 'admin', 'admin@gmail.com'),
(2, 'newadmin', '80396443f055ea0c4fd9719ecefcc25a', 'newadmin', 'newadmin', 'newadmin@gmail.com'),
(6, 'admin', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'admin', 'admin', 'admsin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE IF NOT EXISTS `caste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religionid` int(11) NOT NULL,
  `caste_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `religionid`, `caste_name`) VALUES
(8, 2, 'sdsddddddd'),
(16, 5, 'fgffg'),
(18, 0, ''),
(19, 0, ''),
(20, 0, 'ss'),
(22, 0, ''),
(23, 0, ''),
(24, 0, ''),
(25, 0, ''),
(26, 0, ''),
(28, 0, ''),
(29, 0, ''),
(30, 0, 'sds'),
(31, 0, 'sssdsd'),
(33, 0, 'sdsd'),
(34, 2, 'sdfdsf'),
(35, 1, 'aaaaaaaaaaaa'),
(36, 4, 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `living`
--

CREATE TABLE IF NOT EXISTS `living` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `living_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `living`
--

INSERT INTO `living` (`id`, `living_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Australia'),
(4, 'Canada'),
(5, 'UK'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `mothertongue`
--

CREATE TABLE IF NOT EXISTS `mothertongue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mother_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mothertongue`
--

INSERT INTO `mothertongue` (`id`, `mother_name`) VALUES
(1, 'Gujarati'),
(2, 'Hindi'),
(3, 'English'),
(4, 'Punjabi'),
(5, 'Marathi'),
(6, 'Tamil'),
(7, 'Others'),
(10, 'Chinees');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_name`) VALUES
(1, 'Self'),
(2, 'Son'),
(3, 'Brother'),
(4, 'Sister'),
(5, 'Friend'),
(6, 'Relative'),
(7, 'Daughter');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `religion_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion_name`) VALUES
(1, 'Parsi'),
(2, 'Hindu'),
(3, 'Jain'),
(4, 'Khristi'),
(5, 'Muslim'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `religion` text NOT NULL,
  `mtongue` text NOT NULL,
  `livingin` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `profile`, `first_name`, `last_name`, `gender`, `dob`, `religion`, `mtongue`, `livingin`, `address`, `contact_no`) VALUES
(9, 'dfdfdf', 'paa@gmail.com', '', 'Relative', 'ddf', 'dfdf', 'female', '12/03/1992', 'Hindu', 'Hindi', 'Australia', '                   sdsd              ', 333333),
(16, 'dfdfgdf', 'p@gmail.com', '0', 'Sister', 'ssd', 'sdsd', 'male', '12/03/2014', 'Khristi', 'Marathi', 'UK', '         ', 0),
(17, 'sssssss', 'p@gmail.com', 'aaaaaaa', 'Friend', 'sdsd', 'sdsd', 'male', '12/03/1992', 'Others', 'Punjabi', 'USA', '   sdsdsd', 3434434);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
