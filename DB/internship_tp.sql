-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 21 日 13:37
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
-- 表的结构 `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `user_id` int(33) NOT NULL,
  `pid` int(33) NOT NULL,
  `count` int(33) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `checkout`
--

INSERT INTO `checkout` (`id`, `user_id`, `pid`, `count`, `time`) VALUES
(35, 18, 45, 1, '2017-03-18 17:02:04'),
(36, 18, 46, 4, '2017-03-18 17:02:04'),
(39, 19, 47, 1, '2017-03-18 17:26:20'),
(40, 19, 48, 2, '2017-03-18 17:26:20');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `name`, `pid`, `level`) VALUES
(35, 'adad', 14, 2),
(36, 'bug', 14, 2),
(19, 'woman的菜单', 0, 1),
(14, 'Men', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `permission`
--

INSERT INTO `permission` (`id`, `permname`) VALUES
(1, '登录前端商城'),
(2, '登录后台'),
(3, '登录后台及管理所有功能'),
(4, '前端所有功能的操作');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photoname` varchar(50) NOT NULL,
  `mid` int(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `photoname`, `mid`) VALUES
(54, 'woman7', '123', '', 19),
(53, 'woman6', '12345', '', 19),
(52, 'woman5', '123', '', 19),
(51, 'woman4', '123', '', 19),
(50, 'woman3', 'adad', '', 19),
(49, 'woman2', '123123', '', 19),
(48, 'hurdles1', '213', '', 34),
(45, 'woman1', '312', '', 19),
(46, 'men1', '31', '', 14);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `prod_user`
--

INSERT INTO `prod_user` (`id`, `user_id`, `pid`, `count`) VALUES
(45, 41, 54, 2),
(44, 18, 47, 6),
(43, 18, 48, 2),
(42, 18, 46, 6),
(41, 18, 54, 3);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, '后台管理员啊大大'),
(2, '后台超级管理员'),
(3, '商城用户'),
(4, '前端商城超管'),
(6, '终极管理员'),
(8, '前端终极管理员');

-- --------------------------------------------------------

--
-- 表的结构 `role_perm`
--

CREATE TABLE IF NOT EXISTS `role_perm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nodename` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `perm_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `perm_id` (`perm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `role_perm`
--

INSERT INTO `role_perm` (`id`, `nodename`, `role_id`, `perm_id`) VALUES
(1, '后台登录', 1, 2),
(2, '后台登录及所有功能管理', 2, 3),
(3, '前端商城登录', 3, 1),
(4, '商城用户登陆后台看看', 3, 2),
(20, '想干啥干啥', 6, 2),
(19, '想干啥干啥', 6, 1),
(23, '前端也能进后台并管理', 8, 1),
(21, '想干啥干啥', 6, 3),
(22, '想干啥干啥', 6, 4),
(24, '前端也能进后台并管理', 8, 2),
(25, '前端也能进后台并管理', 8, 4);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `locked` int(11) NOT NULL DEFAULT '0',
  `logintime` varchar(50) NOT NULL,
  `loginip` varchar(30) NOT NULL,
  `role_id` int(33) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `locked`, `logintime`, `loginip`, `role_id`) VALUES
(15, 'zxy', 'b904cb9b0a0ac1d0f9db1471412fba1d', 0, '17-03-11 11:57:29', '127.0.0.1', 2),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '17-03-11 12:22:05', '127.0.0.1', 1),
(18, 'zzw', 'fdea199d71b110a3533e55b6f25dee46', 0, '17-03-11 12:22:38', '127.0.0.1', 3),
(19, 'xzf', '9fbb239f9faa3438aeb78f8bee213d17', 0, '17-03-11 01:11:44', '127.0.0.1', 3),
(41, 'ytt', '788707ea6128fa1175f72e90d6b5c158', 0, 'adad', ' adad', 3),
(39, 'taodaye', '8d2fd708287d36926125acc999d0606c', 0, 'adadad2', '2da', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
