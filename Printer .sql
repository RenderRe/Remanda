-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2024 г., 00:15
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Printer`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Catalog`
--

CREATE TABLE `Catalog` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `img` varchar(350) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Каталог таблицы';

--
-- Дамп данных таблицы `Catalog`
--

INSERT INTO `Catalog` (`id`, `name`, `img`, `price`) VALUES
(1, 'PLANTLIM', '/img/printer1.jpg', 10000),
(2, 'HP', '/img/printer2.jpg', 12000),
(3, 'XEROX', '/img/printer3.jpg', 8000),
(4, 'PANRUM M6502', '/img/printer4.webp', 12500),
(5, 'KYOCER FS-1025', '/img/printer5.jpg', 60000),
(6, 'XEROX WORKCENTER 3025BI', '/img/printer6.jpg', 21000),
(7, 'RICOH M C240FW', '/img/printer7.jpg', 53500),
(8, 'HP LASER MFP 136A', '/img/printer8.jpg', 18400),
(9, 'HUAWEI PIXLAB X1', '/img/printer9.jpg', 21000);

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'Dren', 'Prod');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Catalog`
--
ALTER TABLE `Catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Catalog`
--
ALTER TABLE `Catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
