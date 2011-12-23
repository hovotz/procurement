-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2011 at 05:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `procurement`
--
CREATE DATABASE `procurement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `procurement`;

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(105, NULL, NULL, NULL, 'controllers', 1, 196),
(106, 105, NULL, NULL, 'Pages', 2, 15),
(107, 106, NULL, NULL, 'display', 3, 4),
(108, 106, NULL, NULL, 'add', 5, 6),
(109, 106, NULL, NULL, 'edit', 7, 8),
(110, 106, NULL, NULL, 'index', 9, 10),
(111, 106, NULL, NULL, 'view', 11, 12),
(112, 106, NULL, NULL, 'delete', 13, 14),
(113, 105, NULL, NULL, 'Departments', 16, 37),
(114, 113, NULL, NULL, 'index', 17, 18),
(115, 113, NULL, NULL, 'view', 19, 20),
(116, 113, NULL, NULL, 'add', 21, 22),
(117, 113, NULL, NULL, 'edit', 23, 24),
(118, 113, NULL, NULL, 'delete', 25, 26),
(119, 113, NULL, NULL, 'admin_index', 27, 28),
(120, 113, NULL, NULL, 'admin_view', 29, 30),
(121, 113, NULL, NULL, 'admin_add', 31, 32),
(122, 113, NULL, NULL, 'admin_edit', 33, 34),
(123, 113, NULL, NULL, 'admin_delete', 35, 36),
(124, 105, NULL, NULL, 'Groups', 38, 59),
(125, 124, NULL, NULL, 'index', 39, 40),
(126, 124, NULL, NULL, 'view', 41, 42),
(127, 124, NULL, NULL, 'add', 43, 44),
(128, 124, NULL, NULL, 'edit', 45, 46),
(129, 124, NULL, NULL, 'delete', 47, 48),
(130, 124, NULL, NULL, 'admin_index', 49, 50),
(131, 124, NULL, NULL, 'admin_view', 51, 52),
(132, 124, NULL, NULL, 'admin_add', 53, 54),
(133, 124, NULL, NULL, 'admin_edit', 55, 56),
(134, 124, NULL, NULL, 'admin_delete', 57, 58),
(135, 105, NULL, NULL, 'Items', 60, 81),
(136, 135, NULL, NULL, 'index', 61, 62),
(137, 135, NULL, NULL, 'view', 63, 64),
(138, 135, NULL, NULL, 'add', 65, 66),
(139, 135, NULL, NULL, 'edit', 67, 68),
(140, 135, NULL, NULL, 'delete', 69, 70),
(141, 135, NULL, NULL, 'admin_index', 71, 72),
(142, 135, NULL, NULL, 'admin_view', 73, 74),
(143, 135, NULL, NULL, 'admin_add', 75, 76),
(144, 135, NULL, NULL, 'admin_edit', 77, 78),
(145, 135, NULL, NULL, 'admin_delete', 79, 80),
(146, 105, NULL, NULL, 'ItemsRequests', 82, 103),
(147, 146, NULL, NULL, 'index', 83, 84),
(148, 146, NULL, NULL, 'view', 85, 86),
(149, 146, NULL, NULL, 'add', 87, 88),
(150, 146, NULL, NULL, 'edit', 89, 90),
(151, 146, NULL, NULL, 'delete', 91, 92),
(152, 146, NULL, NULL, 'admin_index', 93, 94),
(153, 146, NULL, NULL, 'admin_view', 95, 96),
(154, 146, NULL, NULL, 'admin_add', 97, 98),
(155, 146, NULL, NULL, 'admin_edit', 99, 100),
(156, 146, NULL, NULL, 'admin_delete', 101, 102),
(157, 105, NULL, NULL, 'ItemCategories', 104, 125),
(158, 157, NULL, NULL, 'index', 105, 106),
(159, 157, NULL, NULL, 'view', 107, 108),
(160, 157, NULL, NULL, 'add', 109, 110),
(161, 157, NULL, NULL, 'edit', 111, 112),
(162, 157, NULL, NULL, 'delete', 113, 114),
(163, 157, NULL, NULL, 'admin_index', 115, 116),
(164, 157, NULL, NULL, 'admin_view', 117, 118),
(165, 157, NULL, NULL, 'admin_add', 119, 120),
(166, 157, NULL, NULL, 'admin_edit', 121, 122),
(167, 157, NULL, NULL, 'admin_delete', 123, 124),
(168, 105, NULL, NULL, 'Requests', 126, 147),
(169, 168, NULL, NULL, 'index', 127, 128),
(170, 168, NULL, NULL, 'view', 129, 130),
(171, 168, NULL, NULL, 'add', 131, 132),
(172, 168, NULL, NULL, 'edit', 133, 134),
(173, 168, NULL, NULL, 'delete', 135, 136),
(174, 168, NULL, NULL, 'admin_index', 137, 138),
(175, 168, NULL, NULL, 'admin_view', 139, 140),
(176, 168, NULL, NULL, 'admin_add', 141, 142),
(177, 168, NULL, NULL, 'admin_edit', 143, 144),
(178, 168, NULL, NULL, 'admin_delete', 145, 146),
(179, 105, NULL, NULL, 'Units', 148, 169),
(180, 179, NULL, NULL, 'index', 149, 150),
(181, 179, NULL, NULL, 'view', 151, 152),
(182, 179, NULL, NULL, 'add', 153, 154),
(183, 179, NULL, NULL, 'edit', 155, 156),
(184, 179, NULL, NULL, 'delete', 157, 158),
(185, 179, NULL, NULL, 'admin_index', 159, 160),
(186, 179, NULL, NULL, 'admin_view', 161, 162),
(187, 179, NULL, NULL, 'admin_add', 163, 164),
(188, 179, NULL, NULL, 'admin_edit', 165, 166),
(189, 179, NULL, NULL, 'admin_delete', 167, 168),
(190, 105, NULL, NULL, 'Users', 170, 195),
(191, 190, NULL, NULL, 'login', 171, 172),
(192, 190, NULL, NULL, 'logout', 173, 174),
(193, 190, NULL, NULL, 'index', 175, 176),
(194, 190, NULL, NULL, 'view', 177, 178),
(195, 190, NULL, NULL, 'add', 179, 180),
(196, 190, NULL, NULL, 'edit', 181, 182),
(197, 190, NULL, NULL, 'delete', 183, 184),
(198, 190, NULL, NULL, 'admin_index', 185, 186),
(199, 190, NULL, NULL, 'admin_view', 187, 188),
(200, 190, NULL, NULL, 'admin_add', 189, 190),
(201, 190, NULL, NULL, 'admin_edit', 191, 192),
(202, 190, NULL, NULL, 'admin_delete', 193, 194);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, 'Administrators', 1, 2),
(2, NULL, 'Group', 2, 'Users', 3, 6),
(3, 2, 'User', 4, NULL, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros_acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`) VALUES
(1, 'CCS', 'College of Computer Studies'),
(2, 'COS', 'College of  Science');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Administrators'),
(2, 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE IF NOT EXISTS `item_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `code`, `name`) VALUES
(1, 'CES', 'Common Electrical Supplies'),
(2, 'CSS', 'Common School Supplies');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_category_id` int(11) unsigned NOT NULL,
  `unit_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_category_id`, `unit_id`, `name`, `price`) VALUES
(1, 2, 2, 'Ballpen', 20),
(2, 1, 1, 'Battery', 116.48),
(3, 2, 2, 'Computer', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `items_requests`
--

CREATE TABLE IF NOT EXISTS `items_requests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `request_id` int(11) unsigned NOT NULL,
  `item_id` int(11) unsigned NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items_requests`
--

INSERT INTO `items_requests` (`id`, `request_id`, `item_id`, `quantity`) VALUES
(1, 1, 3, 0),
(2, 4, 1, 0),
(3, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `requests`
--


-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `code`, `name`) VALUES
(1, 'box', 'box'),
(2, 'pc.', 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) unsigned NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `department_id`, `username`, `password`, `active`, `created`, `modified`) VALUES
(3, 2, 1, 'dhemaz', 'c93728249888be6e7bf53d8578f2f7184f1a75e1', 1, '2011-12-23 04:24:44', '2011-12-23 04:24:44'),
(4, 2, 2, 'chemie', '74cbc5e874e655996bcf1c514b87fef0590c2981', 1, '2011-12-23 04:58:51', '2011-12-23 04:58:51');
