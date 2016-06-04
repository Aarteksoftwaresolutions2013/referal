-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2016 at 01:04 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cd_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@click-inc.in'),
(1, 'admin', 'admin', 'admin@click-inc.in'),
(0, 'admin', 'click12345', 'vijay.p@click-inc.in');

-- --------------------------------------------------------

--
-- Table structure for table `referel_value`
--

CREATE TABLE IF NOT EXISTS `referel_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `key_user_id` int(11) NOT NULL,
  `refered_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `referel_value`
--

INSERT INTO `referel_value` (`id`, `key`, `key_user_id`, `refered_user_id`) VALUES
(1, 'qdfbkr-e9jYav-5OyaUm-1JuJuY-3FFSvV', 1, 2),
(2, 'qdfbkr-e9jYav-5OyaUm-1JuJuY-3FFSvV', 1, 4),
(3, 'kq9Lkn-k3bG07-sN2C9s-xBqjW3-qp9siP', 2, 5),
(4, '4u1Ihj-RjBKLc-4fBEfA-3hr0H2-1lcVQ6', 4, 6),
(5, 'qv2syJ-gAkIna-fg5QpM-c8W9GK-ARVXtm', 5, 7),
(6, 'kq9Lkn-k3bG07-sN2C9s-xBqjW3-qp9siP', 2, 8),
(7, 'qv2syJ-gAkIna-fg5QpM-c8W9GK-ARVXtm', 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `refer_url`
--

CREATE TABLE IF NOT EXISTS `refer_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `refer_url`
--

INSERT INTO `refer_url` (`id`, `user_id`, `key`) VALUES
(1, 1, 'qdfbkr-e9jYav-5OyaUm-1JuJuY-3FFSvV'),
(2, 2, 'kq9Lkn-k3bG07-sN2C9s-xBqjW3-qp9siP'),
(3, 3, 'qA4FAc-biurB7-mMkrYi-vPIV3N-OkMQ5H'),
(4, 4, '4u1Ihj-RjBKLc-4fBEfA-3hr0H2-1lcVQ6'),
(5, 5, 'qv2syJ-gAkIna-fg5QpM-c8W9GK-ARVXtm'),
(6, 6, 'ZLA9Mo-a3BZBB-ChmD11-t3jKUK-0Mp2oV'),
(7, 7, 'yqSy60-SrxPLZ-NMJsGf-bR3Kmo-StMoJm'),
(8, 8, 'dLZncy-ALTkIo-0rXP5X-MpL3A2-XmMPCB'),
(9, 9, 'npTCtj-zQL19i-G3GD1A-gUu2h4-rS9Haz'),
(10, 10, 'yvMnh8-Fz9zO6-6Be9EN-XJmlwD-3c7Eom'),
(11, 11, 'tRNLN7-dCgiBE-kEFL5K-KwEEjb-xbTXsE'),
(12, 12, 'BXVsSd-9drQ2Q-iGbRTl-WF1wFe-smomzl'),
(13, 13, 't39cBi-5fNduh-niXhZz-h70WAR-KFErrs'),
(14, 14, 'WXF1MR-RSznh0-IC4vM8-Jags0E-563GWi'),
(15, 15, 'K7GxqH-7wRrgS-lNvPDV-khnT5C-FgCGBk'),
(16, 16, 'FgRnLz-IwyAJc-9iMZq9-ZlW5yi-nxYxDh'),
(17, 17, 'BjkeHL-uhWE3k-n5rNpk-HYn38m-9pyv8e'),
(18, 18, 'eNBWCH-2qS6Nj-N3SVwE-MC2To6-zyICa1'),
(19, 19, '2DdVMo-v9FD1j-s3E3ry-6dkKbm-CV68NL'),
(20, 20, 'MKvVSq-XUOXBp-ujAZmo-p3a1IH-kuPIOt'),
(21, 21, 'JsjegM-tnGEV0-IZ3iQe-5LXBua-2kYk5T');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `referred_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_name`, `password`, `referred_by`, `created`) VALUES
(1, 'mith', 'mith.dashore@gmail.com', 'mith', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-10 18:54:49'),
(2, 'pawan', 'pw@gmail.com', 'pw', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-10 18:55:33'),
(3, 'dsf', 'fdg@dfds.df', '5dfd', '426ea46b837dfe7e3cce38e9bfc8227d450325a8bf01145ad16726346c85745e', 0, '2016-02-10 18:59:11'),
(4, 'testA', 'test@testa.com', 'testa', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 10:20:23'),
(5, 'testb', 'testb@test.com', 'testb', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 10:33:57'),
(6, 'testc', 'testc@gmail.com', 'testc', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 10:35:07'),
(7, 'testd', 'testd@gmail.com', 'testd', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 10:41:11'),
(8, 'teste', 'teste@test.com', 'test', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 10:45:03'),
(9, 'testy', 'testy@test.com', 'testy', '517a9aabecb43406487425e570ecff8777ebf0a37e924322aa79e085ccaa4ffa', 0, '2016-02-12 11:58:15'),
(10, 'sfd', 'dsg@fhf.fgj', 'gfh', '351b126ef84c9cf1cf1af4b81249e6b6c034f9bab736f095a0875e12b4597be8', 0, '2016-02-16 13:24:56'),
(11, 'jljlk', 'jlkjkljklj@Klj.lkjk', 'kjhkjh', '10892c4a4df100870b151e429e0f7ba030ee3302fea65c8dc8e3d33cf5d47629', 0, '2016-02-16 15:17:26'),
(12, 'zdf', 'fdgd.dfh@fdgd.fhd', 'zfd', '82f1aca9e7c1855495fad35b60edd59943bccc303542304562fac3e517f88d9c', 0, '2016-02-16 15:24:34'),
(13, 'kjkljklj', 'jkjkljk@kjkjj.jlj', 'kljjk', 'f066a893c6bfb6a381434756dd6cf5617e16c865ce6176bc9cc1b8000ea1dbf6', 0, '2016-02-16 15:45:31'),
(14, 'kjkljkj', 'kjjkljklj@Kjj.lkjklj', 'jkjkj', '2a701c71e6ff4b08cc91cc15db8b456de022b322f3bc890d62bfdd3e8741d3f7', 0, '2016-02-16 15:53:30'),
(15, 'kljklj', 'kljjlkj@lkj.jklj', 'jkj', 'e0b15d8e50fdf3207e4e626abd61e740e32356ffc191e8799b9b9ff9ad4fcf1b', 0, '2016-02-16 15:57:15'),
(16, 'kkk', 'kljjlkjjkj@lkj.jklj', 'jkljkjkj', '70854e6135ca5dfbb0efab3a561af203752142f6c05c919046ca15c676a39ce3', 0, '2016-02-16 15:58:20'),
(17, 'jkjklj', 'kljjlkjjk@lkj.jklj', 'kjkjjj', '40974b013436d926717d2c16caaaa05e4df2badb4bcba0b9336bee43e64bd23b', 0, '2016-02-16 16:01:19'),
(18, 'ghfg', 'fgfhfg@dfd.dffd', 'fgjh', 'a097dec90fcb8c55c38affff8a49c17c31fa47d8d7a073244e294db1856141e6', 0, '2016-02-16 16:07:05'),
(19, 'gfjg', 'fgffgjh@dfd.dffd', 'fgj', 'e9324d1149a0dca3110f4b688a949451f0c8c736c45b291dad82c3a7f01e5cd2', 0, '2016-02-16 16:25:52'),
(20, 'sdgdf', 'sdg@fgh.ghj', 'sdfsdf', 'bd1e40ce5aff3937913d9e32a58fdcf46f4d286735c76097a617823a19ca4196', 0, '2016-02-16 18:34:32'),
(21, 'dsgd', 'sdsdf@dxfd.df', 'sdfg', '84740329b1248216fdb558956d9f93a32e810e3ddfe2b7e9dd46323d42b64a98', 0, '2016-02-16 18:40:05');
