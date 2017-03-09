-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 09 日 14:26
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `internship_tp`
--

-- --------------------------------------------------------

--
-- 表的结构 `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `acce_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `node_id` int(11) DEFAULT NULL,
  `levels` int(11) DEFAULT NULL,
  PRIMARY KEY (`acce_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `acce_user`
--

CREATE TABLE IF NOT EXISTS `acce_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acce_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(33) NOT NULL,
  `level` int(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `name`, `pid`, `level`) VALUES
(14, 'Men', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nodename` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(33) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(NULL, '1', '11'),
(NULL, '2', '22'),
(NULL, '3', '33'),
(NULL, '4', '44'),
(NULL, '5', '55'),
(NULL, '6', '66'),
(NULL, '7', '77'),
(NULL, '8', '88'),
(NULL, '9', '99'),
(NULL, '10', '1010'),
(NULL, '11', '1111'),
(NULL, '12', '1212');

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `locked` int(11) DEFAULT '0',
  `logintime` date DEFAULT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `locked`, `logintime`, `loginip`) VALUES
(1, 'zxy', 'b904cb9b0a0ac1d0f9db1471412fba1d', 0, '0000-00-00', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
