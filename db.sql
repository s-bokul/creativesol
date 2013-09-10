-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 03:30 PM
-- Server version: 5.1.63-0ubuntu0.11.04.1
-- PHP Version: 5.3.5-1ubuntu7.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `flying_kites`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_report`
--

CREATE TABLE IF NOT EXISTS `data_report` (
  `rp_id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file` varchar(30) NOT NULL,
  `ins_date` date NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventcal`
--

CREATE TABLE IF NOT EXISTS `eventcal` (
  `id` varchar(20) NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventTitle` varchar(100) DEFAULT NULL,
  `eventContent` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcal`
--

INSERT INTO `eventcal` (`id`, `eventDate`, `eventTitle`, `eventContent`) VALUES
('EV-004', '2010-08-15', 'dfsdg', '<p>sgfsgf</p>'),
('EV-003', '2010-08-22', 'asd', '<p>asd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `global_set`
--

CREATE TABLE IF NOT EXISTS `global_set` (
  `gs_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(300) CHARACTER SET utf8 NOT NULL,
  `copyright` varchar(300) CHARACTER SET utf8 NOT NULL,
  `author` varchar(300) CHARACTER SET utf8 NOT NULL,
  `email_m` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Language` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Charset` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`gs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `global_set`
--

INSERT INTO `global_set` (`gs_id`, `title`, `email`, `description`, `keywords`, `copyright`, `author`, `email_m`, `Language`, `Charset`, `date`) VALUES
(1, 'Flying Kites', '', 'Flying Kites', 'Flying Kites', 'Flying Kites', 'Flying Kites', '', 'EN', 'UTF-8', '2013-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` varchar(20) NOT NULL,
  `menu_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `parent_menu_id` varchar(20) NOT NULL,
  `create_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_gallery` tinyint(4) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_name`, `content`, `parent_menu_id`, `create_date`, `is_active`, `is_gallery`, `order`) VALUES
('PG-001', 'Home', '', '0', '2013-02-26', 1, 0, 0),
('PG-002', 'Services', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>', '0', '2013-02-26', 1, 0, 1),
('PG-004', 'About Us', '', '0', '2013-02-26', 1, 0, 3),
('PG-005', 'Contact Us', '', '0', '2013-02-26', 1, 0, 4),
('PG-006', 'Advertising', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>', 'PG-002', '2013-09-10', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` varchar(20) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `create_date`, `is_active`) VALUES
('NW-001', 'ওয়েভ সাইট ভিজিটের নোটিশ', '<p style="text-align: justify;"><span style="font-size: large;">সকল শিক্ষক ও শিক্ষিকাগণকে ওয়েভ সাইট ভিজিট করে তাদের প্রোফাইল তথ্য যাচাইয়ের করা হল । প্রোফাইলে যদি কোন ভূল থাকে তাহলে জনাব মামুন স্যারকে অভহিত করার জন্য অনুরোধ করা হল ।</span></p>\r\n<p style="text-align: justify;"><span style="font-size: large;">অনুরোধক্রমে <br /></span></p>\r\n<p style="text-align: justify;"><span style="font-size: large;">প্রধানশিক্ষক, বিন্দুবাসিনী সরকারি বালিকা উচ্চ বিদাযালয়, টাংগাইল ।</span></p>', '2011-10-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` varchar(20) NOT NULL,
  `album_id` varchar(20) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `pic_dir` varchar(25) NOT NULL,
  `ins_date` date NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `album_id`, `title`, `description`, `pic_dir`, `ins_date`) VALUES
('PH-001', 'AL-001', '১ম ছবি', '', 'PH-001.jpg', '2011-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `photo_album`
--

CREATE TABLE IF NOT EXISTS `photo_album` (
  `album_id` varchar(20) NOT NULL,
  `album_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `create_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`album_id`),
  UNIQUE KEY `album_name` (`album_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_album`
--

INSERT INTO `photo_album` (`album_id`, `album_name`, `description`, `create_date`, `status`) VALUES
('AL-001', 'স্কুলের ছবি', '<p><strong>স্কুলের ছবি<br /></strong></p>', '2011-10-13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');
