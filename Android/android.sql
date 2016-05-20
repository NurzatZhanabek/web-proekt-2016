-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 18:51
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `android`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `device` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `Email`, `device`) VALUES
(7, 'a.maks97@mail.ru', 'SumsungEdge'),
(8, 'a.maks97@mail.ru', 'SumsungEdge'),
(9, 'nurzat@mail.ru', 'SumsungEdge'),
(10, 'nurzat@mail.ru', 'SumsungEdge'),
(11, 'nurzat@mail.ru', 'SumsungEdge'),
(12, 'a.maks97@mail.ru', 'SumsungEdge'),
(13, 'nurzat@mail.ru', 'SumsungEdge'),
(14, 'a.maks97@mail.ru', 'SumsungEdge'),
(15, 'a.maks97@mail.ru', 'SumsungEdge'),
(16, 'a.maks97@mail.ru', 'SumsungEdge'),
(17, 'a.maks97@mail.ru', 'SumsungEdge'),
(18, 'a.maks97@mail.ru', 'SumsungEdge');

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(100) NOT NULL,
  `devices` varchar(200) NOT NULL,
  `information` varchar(200) NOT NULL,
  `point` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `devices`, `information`, `point`, `photo`) VALUES
(2, 'Sumsung', 'qwerty', '12', 'samsung.png');

-- --------------------------------------------------------

--
-- Структура таблицы `devices`
--

CREATE TABLE `devices` (
  `id` int(100) NOT NULL,
  `Device` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `Surname`, `Email`, `Pass`, `Gender`) VALUES
(1, 'jhbubu', 'uybubuyb', 'ububuyb@mad.re', 'jhbjbjhb', ''),
(2, 'Nurzat', 'Zhanabek', 'a.maks97@mail.ru', 'qwerty', ''),
(3, 'uosfbouiew', 'oawndiaw', 'afnfdiA@mail.ada', 'awedawdwae', ''),
(4, 'nurzat', 'zhanabek', 'nurzat@mail.ru', 'qwerty', ''),
(5, 'qwerty', 'asdfgh', 'nurzat@mail.ru', 'qwerty', ''),
(6, 'qweqwrwe', 'qwrqwerqw', 'nurzat@mail.ru', 'ASDASFSAF', ''),
(7, 'qweqwrwe', 'qwrqwerqw', 'nurzat@mail.ru', 'asdasfasf', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
