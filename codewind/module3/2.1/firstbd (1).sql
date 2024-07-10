-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 06 2024 г., 09:44
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
-- База данных: `firma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `firstbd`
--

CREATE TABLE `firstbd` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `firstbd`
--

INSERT INTO `firstbd` (`id`, `first_name`, `last_name`, `birthday`) VALUES
(1, 'Pew', 'Blind', '1994-07-30'),
(2, 'Johnny', 'Silver', '1950-04-04'),
(3, 'Bill', 'Scar', '1960-05-05'),
(4, 'Shimura', 'Kotokava', '1930-06-06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `firstbd`
--
ALTER TABLE `firstbd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `firstbd`
--
ALTER TABLE `firstbd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
