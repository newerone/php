-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Sep 12, 2007, 02:40 PM
-- 伺服器版本: 5.0.24
-- PHP 版本: 5.1.6
-- 
-- 資料庫: `research`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `opinion`
-- 

CREATE TABLE `opinion` (
  `no` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `sum1` int(11) NOT NULL,
  `sum2` int(11) NOT NULL,
  `sum3` int(11) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 列出以下資料庫的數據： `opinion`
-- 

INSERT INTO `opinion` VALUES (1, '您對研討會場地的滿意度?', '滿意', '普通', '不滿意', 11, 13, 3);
INSERT INTO `opinion` VALUES (2, '您對接待人員服務態度?', '滿意', '普通', '不滿意', 15, 9, 3);
INSERT INTO `opinion` VALUES (3, '您對講師授課內容是否滿意?', '滿意', '普通', '不滿意', 15, 11, 1);
INSERT INTO `opinion` VALUES (4, '您對本次研討會膳食招待的滿意度?', '滿意', '普通', '不滿意', 13, 10, 4);
INSERT INTO `opinion` VALUES (5, '你對本次研討會整體的滿意度?', '滿意', '普通', '不滿意', 13, 11, 3);
