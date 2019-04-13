-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2019 г., 13:56
-- Версия сервера: 5.6.37
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `consullocnew`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ngraj`
--

CREATE TABLE `ngraj` (
  `id` int(11) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pre_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `pre_surname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `pre_mname` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `nation_id` int(11) NOT NULL,
  `marital_status_id` int(11) NOT NULL,
  `consent_other_parent` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `conviction` varchar(50) NOT NULL,
  `conviction_date` date NOT NULL,
  `conviction_bywhom` varchar(100) NOT NULL,
  `conviction_reason` varchar(50) NOT NULL,
  `army` varchar(50) NOT NULL,
  `army_branch` varchar(100) NOT NULL,
  `army_date_start` date NOT NULL,
  `army_date_end` date NOT NULL,
  `army_place` varchar(100) NOT NULL,
  `army_status` varchar(50) NOT NULL,
  `last_uzb_address` varchar(100) NOT NULL,
  `doc_left_type` varchar(50) NOT NULL,
  `doc_series` varchar(10) NOT NULL,
  `doc_number` int(30) NOT NULL,
  `doc_date` date NOT NULL,
  `doc_bywhom` varchar(100) NOT NULL,
  `citizenship_take_id` int(11) NOT NULL,
  `reason_not_take` varchar(100) NOT NULL,
  `relatives_uzb_id` int(11) NOT NULL,
  `relatives_abroad_id` int(11) NOT NULL,
  `last_work_uzb` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passport_series` varchar(10) NOT NULL,
  `passport_number` int(11) NOT NULL,
  `cur_date` date NOT NULL,
  `children_id` int(11) NOT NULL,
  `birth_doc` text,
  `parent_doc` text,
  `foreign_passport` text,
  `photo` text NOT NULL,
  `comment` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ngraj`
--
ALTER TABLE `ngraj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ngraj`
--
ALTER TABLE `ngraj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
