-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2015 at 11:33 AM
-- Server version: 5.6.26-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `donationID` int(11) NOT NULL AUTO_INCREMENT,
  `donateDate` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `contactNumber` varchar(10) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`donationID`,`donateDate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donationID`, `donateDate`, `amount`, `firstname`, `lastname`, `email`, `street`, `city`, `country`, `contactNumber`, `message`) VALUES
(1, '2015-11-20', '1000.00', 'Ashanthi', 'Abyerathna', 'ashanthi19993@gmail.com', 'B/47/G/1', 'Maradana', 'Sri Lanka', '0717633982', 'TEmp'),
(7, '2015-11-24', '52222.00', 'abcd', 'asfaf', 'as@sfa.com', 'dajfaj', 'sgbsga', 'sdgsgj', '0174852963', 'Temp'),
(8, '2015-11-24', '52222.00', 'abcd', 'asfaf', 'as@sfa.com', 'dajfaj', 'sgbsga', 'sdgsgj', '0174852963', 'Temp'),
(9, '2015-11-24', '5000.00', 'adamf', 'sfkafka', 'adad@hm.com', 'ada', 'jfjafja', 'fkak', '0717852963', 'Test'),
(11, '2015-11-24', '1000000.00', NULL, NULL, 'ashanthi1993@gmail.com', NULL, NULL, NULL, NULL, '12666'),
(12, '2015-11-27', '5000.00', 'dsbsfn', 'adjahj', 'aa@gmail.com', 'asfahdh', 'dhadga', 'daah', '0717852963', 'fdahfah'),
(13, '2015-11-27', '5000.00', 'dsbsfn', 'adjahj', 'aa@gmail.com', 'asfahdh', 'dhadga', 'daah', '0717852963', 'fdahfah'),
(14, '2015-11-27', '5000.00', 'dsbsfn', 'adjahj', 'aa@gmail.com', 'asfahdh', 'dhadga', 'daah', '0717852963', 'fdahfah'),
(15, '2015-11-27', '5000.00', 'dsbsfn', 'adjahj', 'aa@gmail.com', 'asfahdh', 'dhadga', 'daah', '0717852963', 'fdahfah'),
(16, '2015-11-27', '25696.00', NULL, NULL, 'ashanthi1993@gmail.com', NULL, NULL, NULL, NULL, 'assfadh'),
(17, '2015-11-27', '50000.00', NULL, NULL, 'ashanthi1993@gmail.com', NULL, NULL, NULL, NULL, 'fafah'),
(18, '2015-11-27', '25566565.00', 'fdahdh', 'fahfha', 'ad@hm.com', 'fhaf', 'dadjaj', 'danfnaj', '0174852963', 'fjsaf');

-- --------------------------------------------------------

--
-- Table structure for table `notificationusers`
--

CREATE TABLE IF NOT EXISTS `notificationusers` (
  `username` varchar(30) NOT NULL,
  `via` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationusers`
--

INSERT INTO `notificationusers` (`username`, `via`, `mobile`, `email`, `level`) VALUES
('bb', 'both', '077888822', 'iop@gmail.com', 'frequent'),
('mupp', 'sms', '8775543555', 'huyy@h.com', 'frequent'),
('muyo', 'sms', '8906555555', 'kio@h.com', 'frequent');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `status`) VALUES
('amoda', 'amodadissanayake@gmail.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
