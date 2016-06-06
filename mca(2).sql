-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2016 at 02:42 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lbms', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `guardianname` text NOT NULL,
  `relation` text NOT NULL,
  `address` text NOT NULL,
  `guardianadd` text NOT NULL,
  `studentlandmark` text NOT NULL,
  `guardianoccupation` text NOT NULL,
  `familymember` text NOT NULL,
  `desableperson` text NOT NULL,
  `dob` varchar(20) NOT NULL,
  `visibletype` text NOT NULL,
  `blindnessage` text NOT NULL,
  `anydisability` text NOT NULL,
  `category` text NOT NULL,
  `previousschool` text NOT NULL,
  `residentical` text NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`firstname`, `lastname`, `fathername`, `mothername`, `guardianname`, `relation`, `address`, `guardianadd`, `studentlandmark`, `guardianoccupation`, `familymember`, `desableperson`, `dob`, `visibletype`, `blindnessage`, `anydisability`, `category`, `previousschool`, `residentical`, `id`) VALUES
('ddddd', 'h', 'd', 'jh', 'j', 'm', 'm ', 'm', '', '', ',', ',', ',', 's', '.', ',gf', 'g', 'f', 't', 69);

-- --------------------------------------------------------

--
-- Table structure for table `alamni`
--

CREATE TABLE IF NOT EXISTS `alamni` (
  `name` varchar(255) NOT NULL,
  `quali` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `preprof` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alamni`
--

INSERT INTO `alamni` (`name`, `quali`, `dist`, `preprof`, `id`) VALUES
('RATAN KR. DAS', '	B.A., SPL.B-ED	', 'HOOGHLY	Teacher,spl.school', 'Teacher,spl.school', 1),
('NANDITA BHATTACHARYA', 'M.A.,HIST,MUSIC,SPL-B.ED', 'kolkata', 'Teacher,spl.School', 2),
('TAPASI DAS', 'B.A.,SPL-B.ED', 'BURDWAN', 'Teacher', 3),
('ABHIJIT MUKHERJEE', 'B.A.,SPL-B.ED', 'HOWRAH', 'an employee of spl. School', 4);

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE IF NOT EXISTS `award` (
  `awrd` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`awrd`, `date`, `id`) VALUES
('BLIND CRICKET CHAMPIANSHIP ', '2016', 1),
('STATE AWARD FOR THE BEST SCHOOL ', '2012', 2),
('PRESENT SCHOOL TEACHER IN CHARGE WIN THE NATIONAL AWARD FOR THE SOCIAL WORK ', '1999', 3),
('hevvi school', '2015', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `msg`, `id`) VALUES
('hfghfg', 'vcxxx', '', ' ', 1),
('hfghfg', 'vcxxx', 'ggtggg', ' hhhhhh', 2),
('', '', '', '', 3),
('', '', '', '', 4),
('bghgh', 'ghgh', 'ghgfhgf', 'hgfghghh', 5),
('xyz', 'xyz@gmail.com', 'ggg', ' cbfghhfghhfh', 6);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `add`) VALUES
(1, 'ASHIM KUMAR ROY', 'CHANDANNAGAR'),
(2, 'SONALI BARMAN ROY', 'MAKHLA,HOOGHLY'),
(3, 'ANIMA MUKHERJEE', 'UTTARPARA,HOOGHLY'),
(4, 'HASHI GUPTA', 'UTTARPARA,HOOGHLY'),
(5, 'SUNIL ROY', 'HINDMOTOR,HOOGHLY'),
(6, 'REKHA MUKHERJEE', 'UTTARPARA,HOOGHLY'),
(13, 'sd', 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `description`) VALUES
(7, 'republic day', '0000-00-00', 'Republic Day celebrations in India. The parade takes place every year on the 26th of January at Rajpath'),
(8, 'ffffff', '0000-00-00', 'ffffff'),
(9, 'ffffff', '0000-00-00', 'fffff'),
(10, 'gggg', '0000-00-00', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `member_reg`
--

CREATE TABLE IF NOT EXISTS `member_reg` (
  `id` int(10) NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mail` text NOT NULL,
  `gender` text NOT NULL,
  `phone` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_reg`
--

INSERT INTO `member_reg` (`id`, `password`, `firstname`, `lastname`, `mail`, `gender`, `phone`) VALUES
(0, '123456', 'sovon', 'das', 'sovon@gmail.com', 'on', '99999');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `class` text NOT NULL,
  `name` text NOT NULL,
  `roll` text NOT NULL,
  `math` text NOT NULL,
  `beng` text NOT NULL,
  `eng` text NOT NULL,
  `hist` text NOT NULL,
  `geo` text NOT NULL,
  `sce` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`class`, `name`, `roll`, `math`, `beng`, `eng`, `hist`, `geo`, `sce`, `id`) VALUES
('1', 'sd', '1', '50', '50', '50', '50', '50', '50', 1),
('2', 'ss', '1', '60', '60', '60', '60', '60', '60', 2),
('1', 'sssd', '2', '50', '50', '50', '50', '50', '50', 3),
('2', 'dedss', '2', '60', '60', '60', '60', '60', '60', 4),
('3', 'SOVON', '1', '70', '80', '80', '90', '70', '70', 5),
('2', 'palas das', '2', '80', '70', '80', '80', '90', '70', 13);

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE IF NOT EXISTS `stuff` (
  `name` varchar(200) NOT NULL,
  `deg` varchar(50) NOT NULL,
  `qua` varchar(300) NOT NULL,
  `joining` date NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`name`, `deg`, `qua`, `joining`, `id`) VALUES
('pankaj kumar das', 'principal/retired ', 'B.A.Hons , Diploma in teaching for the Blind, P.R.O course completed', '2014-02-11', 3),
('BIDYUT PAL', 'Asst. Teacher/ Teacher in charge', 'B.Com(Hons in Economics) Diploma in teaching for the Blind', '2014-03-09', 4),
('`BIDYADHAR MALLICK', 'Asst. Teacher/Retired', 'B.A', '2015-08-09', 5),
('BULA PAL', 'Asst. Teacher/Retired', 'H.S', '2016-01-09', 6),
('SANJOY KR. DAS', 'Asst. Teacher/Retired', 'H.S', '2015-08-09', 7),
('CHINTA MONI MUKHERJEE', 'Asst. Teacher/Retired', 'H.S', '2016-01-09', 8),
('rabi das', 'teacher', 'm.a.', '0000-00-00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tech_reg`
--

CREATE TABLE IF NOT EXISTS `tech_reg` (
  `t_type` text NOT NULL,
  `id` int(20) NOT NULL,
  `password` text NOT NULL,
  `app_id` text NOT NULL,
  `j_date` date NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mail` text NOT NULL,
  `qualification` text NOT NULL,
  `gender` text NOT NULL,
  `loc` text NOT NULL,
  `phone` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_reg`
--

INSERT INTO `tech_reg` (`t_type`, `id`, `password`, `app_id`, `j_date`, `fname`, `lname`, `mail`, `qualification`, `gender`, `loc`, `phone`, `comments`) VALUES
('dff', 10, '', 'ddd', '0000-00-00', 'ddd', 'dddd', 'dddd@gmail.com', 'PHD', 'male', 'ANDHRA PRADESH', 'ddd', 'dddd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
