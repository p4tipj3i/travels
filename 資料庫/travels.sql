-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-10-24 12:18:27
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `all_travels`
--

INSERT INTO `all_travels` (`tid`, `tname`, `allpnum`, `pnum`, `locat`, `godate`, `backdate`, `amone`, `info`, `notes`, `getdate`) VALUES
(1, 'Japan', 1, 0, 'Japan', '2021-07-14', '2021-07-18', 1500, '2', '5', '2024-10-23'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`mid`, `mname`, `name`, `sex`, `old`, `tel`, `email`, `pid`, `account`, `passwd`) VALUES
(1, 'aaa', '小明', '男', '20', '0912345678', 'asd@gmail.com', 'A123456789', '123456', '665544'),
(2, 'bbb', '小紅', '女', '20', '0911111111', 'bbb@gmail.com', 'B123456789', '123', '123'),
(3, 'ccc', '小華', '男', '25', '0922222222', 'ccc@gmail.com', 'C123456789', 'ccccc', 'ddddd'),
(4, 'ddd', '小花', '女', '20', '0955555555', 'ddd@gmail.com', 'D123456789', 'qqq', 'qqq');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `now_travels`
--

INSERT INTO `now_travels` (`mmid`, `mid`, `tid`, `roomtype`, `num`, `godate`, `backdate`, `pnum`, `paytype`, `total`, `getdate`) VALUES
(1, 1, '4', '單人房', 4, '2021-07-01', '2021-07-08', 4, 'ATM', 16000, '2024-10-23'),
(11, 3, '3', '單人房', 4, '2021-05-01', '2021-05-02', 4, 'ATM', 12000, '2021-06-13'),
(16, 3, '4', '雙人房', 3, '2021-07-01', '2021-07-08', 6, 'ATM', 24000, '0000-00-00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `mmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
