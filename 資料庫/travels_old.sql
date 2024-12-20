-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-06-14 05:11:02
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `travels`
--

-- --------------------------------------------------------

--
-- 資料表結構 `accountpwd`
--

CREATE TABLE `accountpwd` (
  `account` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `accountpwd`
--

INSERT INTO `accountpwd` (`account`, `passwd`) VALUES
('555', '555');

-- --------------------------------------------------------

--
-- 資料表結構 `all_travels`
--

CREATE TABLE `all_travels` (
  `tid` int(11) NOT NULL,
  `tname` char(50) NOT NULL,
  `allpnum` int(50) NOT NULL,
  `pnum` int(20) NOT NULL,
  `locat` char(50) NOT NULL,
  `godate` date NOT NULL,
  `backdate` date NOT NULL,
  `amone` int(20) NOT NULL,
  `info` varchar(100) NOT NULL,
  `notes` char(20) NOT NULL,
  `getdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `all_travels`
--

INSERT INTO `all_travels` (`tid`, `tname`, `allpnum`, `pnum`, `locat`, `godate`, `backdate`, `amone`, `info`, `notes`, `getdate`) VALUES
(1, 'Japan', 1, 0, 'Japan', '2087-08-07', '2087-08-07', 1500, '2', '5', '2021-06-13'),
(2, 'Great', 10, 0, 'Britain', '2021-06-04', '2021-06-05', 2000, '1', '1', '2021-06-13'),
(3, 'Bali', 20, 0, 'Bali', '2021-05-01', '2021-05-02', 3000, '1', '1', '2021-06-13'),
(4, 'Best', 10, 0, 'Singapore', '2021-07-01', '2021-07-08', 4000, '1', '1', '0000-00-00'),
(5, 'MOAI MONUMENTS', 10, 0, 'MOAI', '2021-08-03', '2021-08-11', 5000, '1', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `mid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sex` char(6) NOT NULL DEFAULT '男',
  `old` char(10) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pid` char(10) NOT NULL,
  `account` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`mid`, `mname`, `name`, `sex`, `old`, `tel`, `email`, `pid`, `account`, `passwd`) VALUES
(1, 'bbb', '臫艽', 'Female', '999', '0987987987', 'asd@nutc.edu.tw', 's123456789', '123456', '665544'),
(2, 'abc', 'ab', '男', '20', '0911111111', 'a', 'bb', '123', '123'),
(3, 'a', 'abcd', 'Female', '15', 'aaa', 'abc@nutc.edu.tw', 'aaaaa', 'aaaa', 'aaaaa'),
(4, '測試員', 'pre', 'Man', '20', '0123456789', 'qazwsx@gmail.com', 'a', 'qqq', 'qqq');

-- --------------------------------------------------------

--
-- 資料表結構 `now_travels`
--

CREATE TABLE `now_travels` (
  `mmid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `tid` char(10) NOT NULL,
  `roomtype` char(6) NOT NULL,
  `num` int(10) NOT NULL,
  `godate` date NOT NULL,
  `backdate` date NOT NULL,
  `pnum` int(25) NOT NULL,
  `paytype` char(10) NOT NULL,
  `total` int(5) NOT NULL,
  `getdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `now_travels`
--

INSERT INTO `now_travels` (`mmid`, `mid`, `tid`, `roomtype`, `num`, `godate`, `backdate`, `pnum`, `paytype`, `total`, `getdate`) VALUES
(1, 1, '4', '單人', 4, '2021-07-01', '2021-07-08', 4, 'ATM', 16000, '2021-06-13'),
(2, 2, '1', '雙人', 3, '2087-08-07', '2087-08-07', 3, 'ATM', 4500, '2021-06-13'),
(4, 10, '10', '10', 10, '2021-06-04', '2021-06-05', 10, '10', 10, '0000-00-00'),
(11, 3, '3', '單人房', 4, '2021-05-01', '2021-05-02', 4, 'ATM', 12000, '2021-06-13'),
(12, 3, '4', '雙人房', 3, '2021-07-01', '2021-07-08', 6, '信用卡', 24000, '2021-06-13'),
(13, 3, '1', '雙人房', 3, '2087-08-07', '2087-08-07', 6, 'ATM', 9000, '2021-06-14');

-- --------------------------------------------------------

--
-- 資料表結構 `old_travels`
--

CREATE TABLE `old_travels` (
  `mid` int(11) NOT NULL,
  `tid` char(10) NOT NULL,
  `roomtype` char(6) NOT NULL,
  `num` int(10) NOT NULL,
  `godate` date NOT NULL,
  `backdate` date NOT NULL,
  `pnum` int(25) NOT NULL,
  `paytype` char(10) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `old_travels`
--

INSERT INTO `old_travels` (`mid`, `tid`, `roomtype`, `num`, `godate`, `backdate`, `pnum`, `paytype`, `total`) VALUES
(3, '3', '雙人房', 5, '2021-05-01', '2021-05-02', 10, 'ATM', 30000),
(4, '4', '單人房', 4, '2021-06-04', '2021-06-05', 4, 'ATM', 16000),
(3, '2', '雙人房', 4, '2021-06-04', '2021-06-05', 8, 'ATM', 16000),
(4, '3', '雙人房', 2, '2021-06-01', '2021-06-09', 4, 'ATM', 12000),
(1, '1', '雙人房', 3, '2021-06-04', '2021-06-05', 6, 'ATM', 9000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `all_travels`
--
ALTER TABLE `all_travels`
  ADD PRIMARY KEY (`tid`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- 資料表索引 `now_travels`
--
ALTER TABLE `now_travels`
  ADD PRIMARY KEY (`mmid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `now_travels`
--
ALTER TABLE `now_travels`
  MODIFY `mmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
