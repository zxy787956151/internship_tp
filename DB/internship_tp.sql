-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 17 日 06:55
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
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- 转存表中的数据 `access`
--

INSERT INTO `access` (`id`, `role_id`, `node_id`, `level`, `module`) VALUES
(84, 8, 27, 3, NULL),
(83, 8, 14, 3, NULL),
(82, 8, 13, 3, NULL),
(81, 8, 16, 3, NULL),
(80, 8, 11, 3, NULL),
(79, 8, 10, 3, NULL),
(78, 8, 7, 3, NULL),
(77, 8, 6, 3, NULL),
(76, 8, 5, 3, NULL),
(75, 8, 4, 3, NULL),
(74, 8, 3, 3, NULL),
(73, 8, 26, 2, NULL),
(72, 8, 12, 2, NULL),
(71, 8, 9, 2, NULL),
(70, 8, 2, 2, NULL),
(69, 8, 15, 1, NULL),
(68, 8, 1, 1, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- 转存表中的数据 `checkout`
--

INSERT INTO `checkout` (`id`, `user_id`, `pid`, `count`, `time`) VALUES
(68, 18, 89, 2, '2017-04-14 18:56:45'),
(64, 18, 80, 1, '2017-04-13 22:42:09'),
(65, 18, 90, 4, '2017-04-13 22:43:23'),
(63, 18, 79, 10, '2017-04-13 22:26:39'),
(52, 18, 85, 10, '2017-04-06 20:07:52'),
(54, 18, 88, 24, '2017-04-06 20:07:52'),
(49, 18, 81, 17, '2017-04-06 19:30:44'),
(50, 18, 83, 29, '2017-04-06 19:30:44'),
(74, 18, 94, 4, '2017-04-24 15:42:50');

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
(48, 'Lenovo啊', 0, 1),
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
-- 表的结构 `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `node`
--

INSERT INTO `node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Admin', NULL, 1, '后台应用', 1, 0, 1),
(2, 'Rbac', NULL, 1, 'RBAC权限控制', 1, 1, 2),
(3, 'addRole', NULL, 1, '添加角色', 1, 2, 3),
(4, 'addUser', NULL, 1, '添加用户', 2, 2, 3),
(5, 'node', NULL, 1, '节点列表', 3, 2, 3),
(6, 'role', NULL, 1, '角色列表', 4, 2, 3),
(7, 'user', NULL, 1, '用户列表', 5, 2, 3),
(8, 'addNode', NULL, 1, '添加节点', 6, 2, 3),
(9, 'Product', NULL, 1, '商品管理', 2, 1, 2),
(10, 'add', NULL, 1, '添加商品', 1, 9, 3),
(11, 'delete', NULL, 1, '删除商品', 2, 9, 3),
(12, 'Menu', NULL, 1, '菜单管理', 3, 1, 2),
(13, 'index', NULL, 1, '菜单列表', 1, 12, 3),
(14, 'add', NULL, 1, '添加菜单', 2, 12, 3),
(15, 'Home', NULL, 1, '前端应用', 2, 0, 1),
(16, 'index', NULL, 1, '商品列表', 3, 9, 3),
(26, 'testControl', NULL, 1, '测试控制器', NULL, 15, 2),
(27, 'testFunction', NULL, 1, '测试方法', NULL, 26, 3);

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
  `detailsP` varchar(50) NOT NULL,
  `detailsC` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `photoname`, `photourl`, `mid`, `detailsP`, `detailsC`) VALUES
(80, 'apple1', '1', '58e4b4ec13893.png', '2017-04-05/', 55, '', ''),
(81, 'apple2', '2', '58e4b4fbbaf57.png', '2017-04-05/', 56, '', ''),
(78, 'lenovo1', '1', '58e4b4b30ac7b.png', '2017-04-05/', 52, '', ''),
(79, 'lenovo2', '2', '58e4b4c7f0252.png', '2017-04-05/', 54, '', ''),
(82, 'dell1', '1', '58e4b51919ea5.jpg', '2017-04-05/', 57, '', ''),
(83, 'dell2', '2', '58e4b52b4d3b1.jpg', '2017-04-05/', 58, '', ''),
(84, 'acer1', '1', '58e4b5c175d6c.png', '2017-04-05/', 59, '', ''),
(85, 'acer2', '2', '58e4b5e895f91.png', '2017-04-05/', 60, '', ''),
(86, 'asus1', '1', '58e4b61850a3a.jpg', '2017-04-05/', 64, '', ''),
(87, 'asus2', '2', '58e4b62c5573f.jpg', '2017-04-05/', 67, '', ''),
(88, 'Lenovo', '1111111', '58e4d8d4bec69.jpg', '2017-04-05/', 48, '', ''),
(89, 'Apple', '1111111111111111', '58e4d8ea8c6dc.jpg', '2017-04-05/', 49, '', ''),
(90, 'Lenovo的同类商品', '23333', '58e622c649f31.jpg', '2017-04-06/', 48, '', ''),
(91, '商品1', '1111', '58f0b6ac63390.png', '2017-04-14/', 48, '', ''),
(92, '带详细信息1', '213123', '58f0b74d16de9.png', '2017-04-14/', 48, '58f0b74d1b765.png', '&lt;p&gt;这里写你的文章内容!&lt;/p&gt;'),
(93, '带商品详细信息2', '123131', '58f0b7eeccf70.png', '2017-04-14/', 49, '58f0b7eed1636.png', '&lt;p&gt;这里写你的文章内容!&lt;/p&gt;'),
(94, '带详细信息3', '123123', '58f0b8a4f2f70.png', '2017-04-14/', 50, '58f0b8a5041d0.png', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 5'),
(95, '带详细信息4', '121231321', '58f0bcfa0a823.png', '2017-04-14/', 50, '58f0bcfa0e0ce.png', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;n'),
(96, '详细信息测试1', '213123', '58f0be60c1fc1.png', '2017-04-14/', 48, '58f0be60c8326.png', '&lt;p&gt;这里写你的文章内容!&lt;/p&gt;'),
(97, '详细信息测试2', '123213213', '58f0be9fe7c0d.png', '2017-04-14/', 49, '58f0be9feba84.png', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;环境卡萨丁很快就爱上当看见爱上大框架&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;安达市大多大所大奥奥奥奥奥奥大多大大大奥多&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;阿斯达所多撒多撒大多多所多所&lt;br/&gt;&lt;/p&gt;&lt;p&gt;阿斯达奥所大所多多撒多撒大所多大所多&lt;/p&gt;'),
(98, '详细信息测试3', '1212', '58f0bf7b3390e.png', '2017-04-14/', 51, '58f0bf7b376ba.png', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;供应计划根据银行国际化钢结构&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;尽快根据客观客户给客户给客户和规划和空格空格不就好GV结婚&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;根据国家和国际化国际化感觉很干净&lt;/p&gt;');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- 转存表中的数据 `prod_user`
--

INSERT INTO `prod_user` (`id`, `user_id`, `pid`, `count`) VALUES
(76, 18, 80, 8);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`role_id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`role_id`, `name`, `pid`, `status`, `remark`) VALUES
(6, 'Manager', NULL, 1, '普通管理员'),
(7, 'Editor', NULL, 1, '网站编辑'),
(8, 'SuperAdmin', NULL, 1, '超级管理员');

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(8, '58'),
(7, '64'),
(6, '64');

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
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `locked`, `logintime`, `loginip`) VALUES
(58, 'zxy', 'b904cb9b0a0ac1d0f9db1471412fba1d', 0, '2017-05-17 14:06:47', '127.0.0.1'),
(64, 'zzw', '8e98935d1fa50c074c443c5282f696e6', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(225) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `tell` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `userinfo`
--

INSERT INTO `userinfo` (`id`, `province`, `city`, `region`, `address`, `email`, `realname`, `tell`, `user_id`) VALUES
(24, '吉林省', '吉林市', '龙潭区', '北华大学6公寓男寝', '134300', '赵修宇', '13J43QKKKAA', 18),
(23, '吉林省', '吉林市', '龙潭区', '新山街', '134300', '张志伟', '13J43QKKKAA', 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
