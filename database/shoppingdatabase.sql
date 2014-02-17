-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2013 年 05 月 31 日 13:38
-- 伺服器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `shoppingdatabase`
--

-- --------------------------------------------------------

--
-- 表的結構 `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Picture` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Price` int(10) NOT NULL,
  `Press` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `DateAdd` date DEFAULT NULL,
  `Sold` int(10) NOT NULL DEFAULT '0',
  `Description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '暫無',
  PRIMARY KEY (`Name`),
  KEY `DateAdd` (`DateAdd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `books`
--

INSERT INTO `books` (`Name`, `Author`, `Picture`, `Price`, `Press`, `DateAdd`, `Sold`, `Description`) VALUES
('4招搞定瘦身美肌', '樺舍文化', '4招搞定瘦身美肌.jpg', 78, '樺舍文化', '2013-04-26', 3, '暫無'),
('一看就懂！懂得說話，成就100分', '古木', '一看就懂！懂得說話，成就100分.jpg', 260, '心經典文化出版社', '2011-11-01', 1, '暫無'),
('你是哪種鳥？', '沈耿立', '你是哪種鳥？.jpg', 260, '商周出版社', '2013-05-09', 5, '暫無'),
('傳媒公共性與市場', '馮建三', '傳媒公共性與市場.jpg', 650, '巨流圖書公司', '2012-12-12', 0, '暫無'),
('公眾委製新聞的時代來臨', '胡元輝', '公眾委製新聞的時代來臨：weReport調查報導平台的意義與展望.jpg', 250, '允晨文化出版社', '2013-01-01', 2, '暫無'),
('國民身分與採訪衝擊', '李家文', '國民身分與採訪衝擊.jpg', 400, '上優文化出版社', '2013-03-01', 0, '暫無'),
('國際傳播與全球媒介Q&A', '李明賢', '國際傳播與全球媒介Q&A.jpg', 350, '風雲論壇出版社', '2013-03-05', 0, '暫無'),
('圖鑑百年文獻：晚清民國年間小報源流特點探究', '祝均宙', '圖鑑百年文獻：晚清民國年間小報源流特點探究.jpg', 500, 'Airiti Press Inc.', '2013-01-31', 0, '暫無'),
('如何思考性這件事', 'Alain de Botton', '如何思考性這件事.jpg', 240, '先覺出版社', '2012-12-27', 0, '暫無'),
('就是要賣出去', '深澤泰秀', '就是要賣出去.jpg', 300, '楓樹林出版社', '2013-05-13', 4, '暫無'),
('快不能解決的事', 'Carl Honore', '快不能解決的事.jpg', 350, NULL, NULL, 9, '暫無'),
('愈早懂經濟學愈好', '韓鎮守', '愈早懂經濟學愈好.jpg', 299, NULL, '2013-05-16', 7, '暫無'),
('戀人絮語', '羅蘭．巴特', '戀人絮語.jpg', 350, '商周出版社', '2010-07-22', 2, '暫無'),
('成功者的5種好樣子', '商業周刊', '成功者的5種好樣子.jpg', 300, '商業周刊', '2013-05-10', 1, '暫無'),
('我的母親手記', '井上靖', '我的母親手記.jpg', 280, NULL, NULL, 3, '暫無'),
('拉丁美洲：被切開的血管(修訂版)', '愛德華多．加萊亞諾', '拉丁美洲：被切開的血管(修訂版).jpg', 380, '南方家園出版社', '2013-04-20', 0, '暫無'),
('新聞與香港社會真相（增訂本）', '黃天賜', '新聞與香港社會真相（增訂本）.jpg', 350, '中華(香港)出版社', '2013-01-01', 0, '暫無'),
('方勵之自傳', '方勵之', '方勵之自傳.jpg', 800, NULL, '2013-05-01', 1, '暫無'),
('槍炮、病菌與鋼鐵：人類社會的命運', 'Jared Diamond', '槍炮、病菌與鋼鐵：人類社會的命運.jpg', 390, '時報出版社', '1998-10-20', 0, '暫無'),
('法醫．屍體．解剖室：犯罪搜查216問', 'D. P. Lyle', '法醫．屍體．解剖室：犯罪搜查216問.jpg', 380, '麥田出版社', '2013-01-31', 0, '暫無'),
('看千帆過盡', '王伯仁', '看千帆過盡.jpg', 500, '巨流圖書公司', '2013-03-01', 0, '暫無'),
('穿越火線：戰地記者用生命寫下的真相', '李子遲', '穿越火線：戰地記者用生命寫下的真相.jpg', 280, '大喜文化出版社', '2013-03-28', 0, '暫無'),
('網路到底在哪裡', 'Andrew Blum', '網路到底在哪裡.jpg', 300, '大塊文化出版社', '2013-05-27', 0, '暫無'),
('老哏玩出新創意', 'John Ingledew', '老哏玩出新創意.jpg', 400, '繆思出版社', NULL, 1, '暫無'),
('薄熙來王立軍案被掩藏的內幕', '新紀元周刊編輯群', '薄熙來王立軍案被掩藏的內幕.jpg', 398, '新紀元出版社', '2013-03-21', 0, '暫無'),
('被新聞出賣的世界', 'Ryan Holiday', '被新聞出賣的世界.jpg', 320, '臉譜出版社', '2013-02-18', 0, '暫無'),
('誰不想做有錢人：賺錢高手的黃金準則', '理查．譚普勒', '誰不想做有錢人：賺錢高手的黃金準則.jpg', 280, '久石文化出版社', '2013-05-09', 1, '暫無'),
('超高效心智圖學習法', '東尼．博贊', '超高效心智圖學習法.jpg', 260, '商周出版社', '2010-03-12', 0, '暫無'),
('飯店女經理社交客服術', '三輪康子', '飯店女經理社交客服術.jpg', 250, '春光出版社', '2013-05-04', 3, '暫無'),
('香港傳媒：新聞自由與政治轉變', '黎佩兒', '香港傳媒：新聞自由與政治轉變.jpg', 410, '天地圖書(香港)出版社', '2012-12-22', 0, '暫無');

-- --------------------------------------------------------

--
-- 表的結構 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Product_Name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Client_Mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Number` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Product_Name`,`Client_Mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `cart`
--

INSERT INTO `cart` (`Product_Name`, `Client_Mail`, `Number`) VALUES
('一看就懂！懂得說話，成就100分', 'vincentmelancholy@gmail.com', 2),
('快不能解決的事', 'vincentmelancholy@gmail.com', 3),
('成功者的5種好樣子', 'vincentmelancholy@gmail.com', 1),
('法醫．屍體．解剖室：犯罪搜查216問', 'asdf@gmail.com', 1),
('超高效心智圖學習法', 'asdf@gmail.com', 2);

-- --------------------------------------------------------

--
-- 表的結構 `client_data`
--

CREATE TABLE IF NOT EXISTS `client_data` (
  `Name` varchar(20) NOT NULL,
  `Mailbox` varchar(50) NOT NULL,
  `Gender` varchar(2) NOT NULL DEFAULT '男',
  `Password` varchar(20) NOT NULL,
  `Suggestion_Question` varchar(100) DEFAULT NULL,
  `QA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Mailbox`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `client_data`
--

INSERT INTO `client_data` (`Name`, `Mailbox`, `Gender`, `Password`, `Suggestion_Question`, `QA`) VALUES
('hellokitty', 'asdf@gmail.com', '女', '123', NULL, NULL),
('Vincent_Melancholy', 'vincentmelancholy@gmail.com', '男', '123', '你的職業是什麼？', '學生');

-- --------------------------------------------------------

--
-- 表的結構 `count`
--

CREATE TABLE IF NOT EXISTS `count` (
  `OrderCode` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`OrderCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `count`
--

INSERT INTO `count` (`OrderCode`) VALUES
(2);

-- --------------------------------------------------------

--
-- 表的結構 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `Name` varchar(20) NOT NULL,
  `Mailbox` varchar(50) NOT NULL,
  `Gender` varchar(2) NOT NULL DEFAULT '男',
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `manager`
--

INSERT INTO `manager` (`Name`, `Mailbox`, `Gender`, `Password`) VALUES
('root', '1353015987@qq.com', '男', '123');

-- --------------------------------------------------------

--
-- 表的結構 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `OrderNumber` int(10) NOT NULL,
  `Mailbox` varchar(50) NOT NULL,
  `TotalPrice` int(10) NOT NULL,
  `Address` varchar(350) NOT NULL,
  `OrderTime` datetime NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'waiting',
  PRIMARY KEY (`OrderNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `order`
--

INSERT INTO `order` (`OrderNumber`, `Mailbox`, `TotalPrice`, `Address`, `OrderTime`, `Status`) VALUES
(1, 'vincentmelancholy@gmail.com', 936, '廣東省廣州市番禺區廣州大學城外環東路381號', '2013-05-26 14:53:23', 'waiting'),
(2, 'asdf@gmail.com', 1200, '臺北市大安區基隆路 4 段 43 號', '2013-05-26 14:57:49', 'waiting');

-- --------------------------------------------------------

--
-- 表的結構 `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `OrderNumber` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Number` int(3) NOT NULL,
  PRIMARY KEY (`OrderNumber`,`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `orderdetail`
--

INSERT INTO `orderdetail` (`OrderNumber`, `Name`, `Number`) VALUES
(1, '4招搞定瘦身美肌', 2),
(1, '你是哪種鳥？', 3),
(2, '公眾委製新聞的時代來臨', 2),
(2, '戀人絮語', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
