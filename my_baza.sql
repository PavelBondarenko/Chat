-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 21:20
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
-- База данных: `my_baza`
--
CREATE DATABASE IF NOT EXISTS `my_baza` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_baza`;

-- --------------------------------------------------------

--
-- Структура таблицы `wage`
--

CREATE TABLE `wage` (
  `Nom` int(11) NOT NULL,
  `FIO` varchar(50) NOT NULL,
  `ZP` float NOT NULL,
  `Dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wage`
--

INSERT INTO `wage` (`Nom`, `FIO`, `ZP`, `Dep`) VALUES
(1, 'Иванов ', 123456, 'WEB'),
(2, 'Бондаренко', 9000000000, 'WEB'),
(3, 'Жданов', 3, 'Такси'),
(4, 'Иванов Ярослав', 111, 'Бездельник'),
(5, 'Путин ', 9e18, 'Вор'),
(6, 'Сидоров', 5000000, 'Футболист'),
(7, 'Абрамович', 5435240000, 'миллиардер'),
(8, 'Ходорковский', 2342140, 'Бизнесмен'),
(9, 'Навэльный', 4215320, 'ФБК'),
(10, 'Трамп', 65254600, 'Президент');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
