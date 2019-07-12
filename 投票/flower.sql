-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Sep 18, 2018, 08:15 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `vote`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `voted`
-- 

CREATE TABLE `voted` (
  `votedID` tinyint(4) NOT NULL,
  `CHOICE1` int(11) NOT NULL,
  `CHOICE2` int(11) NOT NULL,
  `CHOICE3` int(11) NOT NULL,
  `CHOICE4` int(11) NOT NULL,
  `CHOICE5` int(11) NOT NULL,
  `CHOICE6` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `voted`
-- 

INSERT INTO `voted` VALUES (1, 48, 11, 48, 35, 59, 35);
