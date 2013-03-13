-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2013 at 07:37 PM
-- Server version: 5.5.25a-log
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `entry_id`, `comment`) VALUES
(1, 1, 'there are too many people there\r\n'),
(2, 1, 'way too many people\r\n'),
(3, 4, 'This story is horrible. Just kidding, it''s awesome.');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `subject` text NOT NULL,
  `story` text NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`entry_id`, `date`, `subject`, `story`) VALUES
(1, '2013-03-06', 'junk', 'all i ate today is junk food'),
(2, '2013-03-06', 'martin the marshin', 'i met an alien named martin who sold me bugs'),
(3, '2013-03-06', 'asasldmnasd', 'lakslaksdlkasmdasdasd'),
(4, '2013-03-06', 'mug', 'i got mugged by a hobo when i went to buy clothes for my dog..'),
(5, '2013-03-06', 'mug', 'i got mugged by a hobo when i went to buy clothes for my dog..'),
(6, '2013-03-06', 'asdasd', 'asdsad'),
(7, '2013-03-06', 'asdsad', 'asdasdasd'),
(8, '2013-03-06', 'golfish', 'my grandma stepped ona golfdfish\r\n'),
(9, '2013-03-06', 'mug', 'i got mugged by a hobo when i went to buy clothes for my dog..'),
(10, '2013-03-08', 'Hydrofoil', 'Canada - During World War II, Baldwin worked on an experimental smoke laying hydrofoil (later called the Comox Torpedo) that was later superseded by other smoke-laying technology and an experimental target-towing hydrofoil. The forward two foil assemblies of what is believed to be the latter hydrofoil were salvaged in the mid-1960s from a derelict hulk in Baddeck, Nova Scotia by Colin MacGregor Stevens. These were donated to the Maritime Museum in Halifax, Nova Scotia. The Canadian Armed Forces built and tested a number of hydrofoils (e.g. Baddeck and two vessels named Bras d''Or), which culminated in the high-speed anti-submarine hydrofoil HMCS Bras d''Or in the late 1960s. However, the program was cancelled in the early 1970s due to a shift away from anti-submarine warfare by the Canadian military. The Bras d''Or was a surface-piercing type that performed well during her trials, reaching a maximum speed of 63 knots (117 km/h).Canada - During World War II, Baldwin worked on an experimental smoke laying hydrofoil (later called the Comox Torpedo) that was later superseded by other smoke-laying technology and an experimental target-towing hydrofoil. The forward two foil assemblies of what is believed to be the latter hydrofoil were salvaged in the mid-1960s from a derelict hulk in Baddeck, Nova Scotia by Colin MacGregor Stevens. These were donated to the Maritime Museum in Halifax, Nova Scotia. The Canadian Armed Forces built and tested a number of hydrofoils (e.g. Baddeck and two vessels named Bras d''Or), which culminated in the high-speed anti-submarine hydrofoil HMCS Bras d''Or in the late 1960s. However, the program was cancelled in the early 1970s due to a shift away from anti-submarine warfare by the Canadian military. The Bras d''Or was a surface-piercing type that performed well during her trials, reaching a maximum speed of 63 knots (117 km/h).'),
(11, '2013-03-08', 'Hydrofoil', 'Canada - During World War II, Baldwin worked on an experimental smoke laying hydrofoil (later called the Comox Torpedo) that was later superseded by other smoke-laying technology and an experimental target-towing hydrofoil. The forward two foil assemblies of what is believed to be the latter hydrofoil were salvaged in the mid-1960s from a derelict hulk in Baddeck, Nova Scotia by Colin MacGregor Stevens. These were donated to the Maritime Museum in Halifax, Nova Scotia. The Canadian Armed Forces built and tested a number of hydrofoils (e.g. Baddeck and two vessels named Bras d''Or), which culminated in the high-speed anti-submarine hydrofoil HMCS Bras d''Or in the late 1960s. However, the program was cancelled in the early 1970s due to a shift away from anti-submarine warfare by the Canadian military. The Bras d''Or was a surface-piercing type that performed well during her trials, reaching a maximum speed of 63 knots (117 km/h).Canada - During World War II, Baldwin worked on an experimental smoke laying hydrofoil (later called the Comox Torpedo) that was later superseded by other smoke-laying technology and an experimental target-towing hydrofoil. The forward two foil assemblies of what is believed to be the latter hydrofoil were salvaged in the mid-1960s from a derelict hulk in Baddeck, Nova Scotia by Colin MacGregor Stevens. These were donated to the Maritime Museum in Halifax, Nova Scotia. The Canadian Armed Forces built and tested a number of hydrofoils (e.g. Baddeck and two vessels named Bras d''Or), which culminated in the high-speed anti-submarine hydrofoil HMCS Bras d''Or in the late 1960s. However, the program was cancelled in the early 1970s due to a shift away from anti-submarine warfare by the Canadian military. The Bras d''Or was a surface-piercing type that performed well during her trials, reaching a maximum speed of 63 knots (117 km/h).'),
(12, '03/14/2013', 'Something', 'stuff'),
(13, '03/06/2013', 'Hydrofoil', 'Canada - During World War II, Baldwin worked on an experimental smoke laying hydrofoil (later called the Comox Torpedo) that was later superseded by other smoke-laying technology and an experimental '),
(14, '03/11/2013', 'i murdered a squirell', 'it blew up in my face'),
(15, '03/13/2013', 'cat cow rabbit', 'animals'),
(16, '03/05/2013', 'florida', 'i went to florida then came back the next day, stupid vacation'),
(17, '03/19/2013', 'asdasdas', 'the first time i killed a man\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
