-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2020 at 01:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seiawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `account` char(10) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `permission` int(1) NOT NULL,
  `section` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`account`, `password`, `name`, `permission`, `section`) VALUES
('B061060016', '$2y$10$0j1eJCtJT5TsayFBthT6nunT/X6.mwY9MErqV3BGkr0LBA5/RYlDi', '王以珊', 5, 7),
('B084020020', '$2y$10$lyiDCR2QMmoElptLXNnZUe1KmxTUsMCNNKKxlJYM1vWx8SZFP2KzC', '黃祺雯', 4, 5),
('B097610001', '$2y$10$HavG6G3yLZNwpHaKC68oi.ipROD38AwuhR8TqBPL4CHKnt2h4kP16', '蔡恩琳', 4, 5),
('B097610002', '$2y$10$zChaSCGr4RqNnmFawEfRMOEhu15q.eyOm8CJ.78LC1ye0HgFP0grG', '趙于傑', 3, 1),
('B097610004', '$2y$10$wMhtVmPoQrN6sitPLLwwD.G.sLlbrgu7GG1b7yox8FK/uupQ4baQy', '張姿怡', 3, 1),
('B097610006', '$2y$10$AKUqvE48qmVQ0uWigb1FsuQhiLD14WC0tF8gRfLfDdjE4mlndplKu', '王鈺雪', 1, 3),
('B097610008', '$2y$10$aFO.LbaqwvcpPoAy1O1l5ujMiO2bQyr0xSapmJe3XCMYuUEZHO0U2', '方如瑩', 3, 1),
('B097610011', '$2y$10$Txm1B/lYtyc/bCTgUA7PouFY9dDfOGTmWbYYLSwGNc53yv4wVIZsK', '吳柏易', 1, 1),
('B097610013', '$2y$10$G8m.XdvvwNy9O6C8OVFZEetSHYgN2mN0tyWKX9SNHVGtIM/TTQ2U.', '李庭薇', 3, 6),
('B097610015', '$2y$10$lMHmWcBczioKyQ8vygascORw9/5Ps.Dj95hl/MkquHO/qsMxdKNaO', '陳韋亨', 2, 1),
('B097610017', '$2y$10$XPII/g3xSRpkCcuXe53YH.LWLT6c8Cudt.cgRX.7sOKtsufkAAzg6', '李孟臻', 2, 7),
('B097610019', '$2y$10$BVC75SATA6lF1P1H.5F7fOxC3z.09PXPT2kHfOUcYpeecAvC2//UW', '曾郁喬', 1, 7),
('B097610021', '$2y$10$Po7y.hKxOOIMfaojfBNm9eXTTZ36f3bpQAtX9M6Cp9qOm1TsX/1Xu', '張栢瑄', 6, 1),
('B097610024', '$2y$10$Y7zpS.wGqtJTUadBS/JB7e/sSVDHhJCg/9wXTQ4pZlaJ0wai3jmSy', '王毓璟', 2, 2),
('B097610026', '$2y$10$Jl4lwOAIhzQqZJdBJF6yz.SYJFy8axhv/yB2/iWqyIGY4CiOYjlKC', '施驊宸', 1, 1),
('B097610028', '$2y$10$GhRzUiz5NUL9H2RZ.96bqeocsNWiqJzBUcrO83jkYQ4nzeq5Rh1S2', '盧品亞', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `refresh` varchar(10) NOT NULL DEFAULT '0',
  `announce` text NOT NULL DEFAULT ' ',
  `admin_ann` text NOT NULL DEFAULT ' ',
  `admin` varchar(10) NOT NULL DEFAULT '0',
  `alert` text NOT NULL DEFAULT ' '
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`refresh`, `announce`, `admin_ann`, `admin`, `alert`) VALUES
('0', 'System is testing<br>系統測試中', 'System is testing<br>系統測試中', '0', 'Test message 測試訊息 ');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `timeline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user` char(10) NOT NULL,
  `type` int(1) NOT NULL,
  `activity` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `stu_id` char(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sec1` int(1) NOT NULL DEFAULT 0,
  `sec2` int(1) NOT NULL DEFAULT 0,
  `sec3` int(1) NOT NULL DEFAULT 0,
  `sec4` int(1) NOT NULL DEFAULT 0,
  `sec5` int(1) NOT NULL DEFAULT 0,
  `sec6` int(1) NOT NULL DEFAULT 0,
  `current` int(1) NOT NULL DEFAULT 0,
  `present` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
