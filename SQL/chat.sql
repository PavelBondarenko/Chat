-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2020 г., 21:26
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat`
--
CREATE DATABASE IF NOT EXISTS `chat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `chat`;

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `text` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `text`, `name`) VALUES
(1, 'Привет', 'Павел'),
(2, '231', 'dsfadf'),
(3, 'wer', 'rswder'),
(4, '4234', '4234'),
(5, 'rqwr', '4eq3w4'),
(6, '', ''),
(7, '243', '23'),
(9, 'Павел', 'кауйцука'),
(10, 'twfe', 'fasdf'),
(11, 'twfe', 'fasdf'),
(12, 'twfe', 'fasdf'),
(15, 'twfe', 'fasdf'),
(16, '4e3', '4234'),
(17, 'edqwe', 'eqwe'),
(18, 'fasdf', 'asdf'),
(19, 'fasdf', 'asdf'),
(20, 'fasdf', 'asdf'),
(21, 'fasdf', 'asdf'),
(22, 'eqew', '21421'),
(23, 'q23412', '41'),
(24, '4124', '124'),
(25, '4124', '4324'),
(26, 'sfdsdf', '12312'),
(27, '3123', '45');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
