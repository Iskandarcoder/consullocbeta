-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2019 г., 14:33
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
-- База данных: `consul_loc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sp_doctype_istreb`
--

CREATE TABLE `sp_doctype_istreb` (
  `sp_id` int(11) NOT NULL,
  `sp_name_cryl` varchar(100) DEFAULT NULL,
  `sp_name_ru` varchar(100) DEFAULT NULL,
  `sp_name_qrc` varchar(100) DEFAULT NULL,
  `sp_name_en` varchar(100) DEFAULT NULL,
  `sp_name_uz` varchar(100) DEFAULT NULL,
  `sp_name_qrl` varchar(100) DEFAULT NULL,
  `sp_active` int(11) NOT NULL,
  `sp_dateenter` datetime NOT NULL,
  `sp_scn` bigint(20) NOT NULL,
  `sp_idold` int(11) DEFAULT NULL,
  `sp_idfirst` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sp_doctype_istreb`
--

INSERT INTO `sp_doctype_istreb` (`sp_id`, `sp_name_cryl`, `sp_name_ru`, `sp_name_qrc`, `sp_name_en`, `sp_name_uz`, `sp_name_qrl`, `sp_active`, `sp_dateenter`, `sp_scn`, `sp_idold`, `sp_idfirst`) VALUES
(1, NULL, 'Документ о рождении', NULL, NULL, 'Tug`ilganlik haqidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL),
(2, NULL, 'Документ о браке', NULL, NULL, 'Nikoh to`g`risidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL),
(3, NULL, 'Документ о разводе', NULL, NULL, 'Ajrim to`g`risidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL),
(4, NULL, 'Документ о смерти', NULL, NULL, 'Vafot etganlik to`g`risidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL),
(5, NULL, 'Документ об образовании', NULL, NULL, 'Ta\'lim to`g`risidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL),
(6, NULL, 'Документ о пенсии', NULL, NULL, 'Nafaqa to`g`risidagi hujjat', NULL, 0, '0000-00-00 00:00:00', 0, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sp_doctype_istreb`
--
ALTER TABLE `sp_doctype_istreb`
  ADD PRIMARY KEY (`sp_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sp_doctype_istreb`
--
ALTER TABLE `sp_doctype_istreb`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
