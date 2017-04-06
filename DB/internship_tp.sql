-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 06 日 13:22
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- 转存表中的数据 `checkout`
--

INSERT INTO `checkout` (`id`, `user_id`, `pid`, `count`, `time`) VALUES
(52, 18, 85, 9, '2017-04-06 20:07:52'),
(54, 18, 88, 24, '2017-04-06 20:07:52'),
(49, 18, 81, 8, '2017-04-06 19:30:44'),
(50, 18, 83, 28, '2017-04-06 19:30:44');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `name`, `pid`, `level`) VALUES
(55, '苹果1', 49, 2),
(54, '联想2', 48, 2),
(48, 'Lenovo', 0, 1),
(49, 'Apple', 0, 1),
(50, 'DELL ', 0, 1),
(51, 'Acer ', 0, 1),
(52, '联想1', 48, 2),
(56, '苹果2', 49, 2),
(57, '戴尔1', 50, 2),
(58, '戴尔2', 50, 2),
(59, '宏碁1', 51, 2),
(60, '宏碁2', 51, 2),
(61, 'ASUS ', 0, 1),
(62, 'HP ', 0, 1),
(63, 'Hasee ', 0, 1),
(64, '华硕1', 61, 2),
(65, '惠普1', 62, 2),
(66, '神舟1', 63, 2),
(67, '华硕2', 61, 2),
(68, '华硕3', 61, 2),
(69, '华硕4', 61, 2),
(70, '华硕5', 61, 2),
(71, '华硕6', 61, 2),
(72, '华硕7', 61, 2),
(73, '华硕8', 61, 2),
(74, '华硕9', 61, 2),
(75, '华硕10', 61, 2),
(76, '惠普2', 62, 2),
(77, '惠普3', 62, 2),
(78, '惠普4', 62, 2),
(79, '惠普5', 62, 2),
(80, '惠普6', 62, 2),
(81, '惠普7', 62, 2),
(82, '惠普8', 62, 2),
(83, '惠普9', 62, 2),
(84, '惠普10', 62, 2),
(85, '神舟2', 63, 2),
(86, '神舟3', 63, 2),
(87, '神舟4', 63, 2),
(88, '神舟5', 63, 2),
(89, '神舟6', 63, 2),
(90, '神舟7', 63, 2),
(91, '神舟8', 63, 2),
(92, '神舟9', 63, 2),
(93, '神舟10', 63, 2);

-- --------------------------------------------------------

--
-- 表的结构 `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `permission`
--

INSERT INTO `permission` (`id`, `permname`) VALUES
(1, '登录前端商城'),
(2, '登录后台'),
(3, '登录后台及管理所有功能'),
(9, '登录后台并操作用户结算');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photoname` varchar(50) NOT NULL,
  `photourl` varchar(50) NOT NULL,
  `mid` int(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `photoname`, `photourl`, `mid`) VALUES
(80, 'apple1', '1', '58e4b4ec13893.png', '2017-04-05/', 55),
(81, 'apple2', '2', '58e4b4fbbaf57.png', '2017-04-05/', 56),
(78, 'lenovo1', '1', '58e4b4b30ac7b.png', '2017-04-05/', 52),
(79, 'lenovo2', '2', '58e4b4c7f0252.png', '2017-04-05/', 54),
(82, 'dell1', '1', '58e4b51919ea5.jpg', '2017-04-05/', 57),
(83, 'dell2', '2', '58e4b52b4d3b1.jpg', '2017-04-05/', 58),
(84, 'acer1', '1', '58e4b5c175d6c.png', '2017-04-05/', 59),
(85, 'acer2', '2', '58e4b5e895f91.png', '2017-04-05/', 60),
(86, 'asus1', '1', '58e4b61850a3a.jpg', '2017-04-05/', 64),
(87, 'asus2', '2', '58e4b62c5573f.jpg', '2017-04-05/', 67),
(88, 'Lenovo', '1111111', '58e4d8d4bec69.jpg', '2017-04-05/', 48),
(89, 'Apple', '1111111111111111', '58e4d8ea8c6dc.jpg', '2017-04-05/', 49),
(90, 'Lenovo的同类商品', '23333', '58e622c649f31.jpg', '2017-04-06/', 48);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rolename`) VALUES
(1, '后台管理员'),
(2, '后台超级管理员'),
(3, '商城用户'),
(15, '用户结算处理管理员'),
(14, '终极管理员');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `role_perm`
--

INSERT INTO `role_perm` (`id`, `nodename`, `role_id`, `perm_id`) VALUES
(2, '后台登录及所有功能管理', 2, 3),
(3, '前端商城登录', 3, 1),
(39, '后台登录', 1, 2),
(50, 'rwer', 1, 2),
(49, '用户结算', 15, 9),
(48, '终极管理员使用所有权限', 14, 3),
(47, '终极管理员使用所有权限', 14, 2),
(46, '终极管理员使用所有权限', 14, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `locked`, `logintime`, `loginip`, `role_id`) VALUES
(15, 'zxy', 'b904cb9b0a0ac1d0f9db1471412fba1d', 0, '2017-04-06 21:03:18', '127.0.0.1', 2),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '17-03-11 12:22:05', '127.0.0.1', 1),
(18, 'zzw', 'fdea199d71b110a3533e55b6f25dee46', 0, '2017-04-06 20:33:07', '127.0.0.1', 3),
(19, 'xzf', '9fbb239f9faa3438aeb78f8bee213d17', 0, '17-03-11 01:11:44', '127.0.0.1', 3),
(41, 'ytt', '788707ea6128fa1175f72e90d6b5c158', 0, 'adad', ' adad', 3),
(39, 'taodaye', '8d2fd708287d36926125acc999d0606c', 0, 'adadad2', '2da', 3),
(42, 'zhaoxiuyu', 'b3f83843513d1eedf5f32859b1b13cc1', 0, '2017-03-25 19:37:50', '127.0.0.1', 1),
(43, 'liyan', 'c3d272f93cf13b993fb7da850086245e', 0, '', '', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
