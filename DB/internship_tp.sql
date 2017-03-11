-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 11 日 06:56
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
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photoname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `photoname`) VALUES
(1, '1', '11', ''),
(2, '2', '22', ''),
(3, '3', '33', ''),
(4, '4', '44', ''),
(5, '5', '55', ''),
(6, '6', '66', ''),
(7, '7', '77', ''),
(8, '8', '88', ''),
(9, '9', '99', ''),
(10, '10', '1010', ''),
(11, '11', '1111', ''),
(12, '12', '1212', '');

-- --------------------------------------------------------

--
-- 表的结构 `prod_user`
--

CREATE TABLE IF NOT EXISTS `prod_user` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `user_id` int(33) NOT NULL,
  `pid` int(33) NOT NULL,
  `count` int(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `prod_user`
--

INSERT INTO `prod_user` (`id`, `user_id`, `pid`, `count`) VALUES
(1, 18, 1, 1),
(2, 18, 2, 2),
(3, 18, 4, 4),
(4, 18, 5, 5),
(5, 19, 1, 11),
(6, 19, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, '后台管理员'),
(2, '后台超级管理员'),
(3, '商城用户');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `locked` int(11) DEFAULT '0',
  `logintime` varchar(50) DEFAULT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  `role_id` int(33) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `locked`, `logintime`, `loginip`, `role_id`) VALUES
(15, 'zxy', 'b904cb9b0a0ac1d0f9db1471412fba1d', 0, '17-03-11 11:57:29', '127.0.0.1', 2),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '17-03-11 12:22:05', '127.0.0.1', 1),
(18, 'zzw', 'fdea199d71b110a3533e55b6f25dee46', 0, '17-03-11 12:22:38', '127.0.0.1', 3),
(19, 'xzf', '9fbb239f9faa3438aeb78f8bee213d17', 0, '17-03-11 01:11:44', '127.0.0.1', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
