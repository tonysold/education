-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 06 2024 г., 22:15
-- Версия сервера: 8.0.37-0ubuntu0.22.04.3
-- Версия PHP: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tonysoldDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employe`
--

CREATE TABLE `employe` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(255) NOT NULL,
  `salary` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `employe`
--

INSERT INTO `employe` (`id`, `name`, `birthday`, `position`, `salary`) VALUES
(1, 'Дима', '1988-03-25', 'дизайнер', 400),
(2, 'Петя', '1989-03-26', 'дизайнер', 500),
(3, 'Вася', '1990-05-26', 'верстальщик', 500),
(4, 'Коля', '1990-03-25', 'верстальщик', 1000),
(5, 'Иван', '1991-05-27', 'программист', 500),
(6, 'Кирилл', '1990-06-27', 'программист', 1000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
