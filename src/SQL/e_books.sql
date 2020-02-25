-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 14 2019 г., 14:20
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `e_books`
--

CREATE TABLE `e_books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_german1_ci DEFAULT NULL,
  `author` varchar(255) COLLATE latin1_german1_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `genre` varchar(255) COLLATE latin1_german1_ci DEFAULT NULL,
  `format` varchar(255) COLLATE latin1_german1_ci DEFAULT NULL,
  `img` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Дамп данных таблицы `e_books`
--

INSERT INTO `e_books` (`id`, `name`, `author`, `price`, `genre`, `format`, `img`) VALUES
(5, 'Michael', 'Jordan', 29.99, 'baseball', 'asd', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OC81NzYvb3JpZ2luYWwvZGVuYWxpLXRvbnMtb2YtcG9vcC5qcGc='),
(6, 'Michael', 'Jordan', 29.99, 'baseball', 'asd', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OC81NzYvb3JpZ2luYWwvZGVuYWxpLXRvbnMtb2YtcG9vcC5qcGc='),
(7, 'Michael', 'Jordan', 29.99, 'baseball', 'asd', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OC81NzYvb3JpZ2luYWwvZGVuYWxpLXRvbnMtb2YtcG9vcC5qcGc='),
(8, 'Michael', 'Jordan', 29.99, 'baseball', 'asd', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OC81NzYvb3JpZ2luYWwvZGVuYWxpLXRvbnMtb2YtcG9vcC5qcGc='),
(9, 'Michael', 'Jordan', 29.99, 'baseball', 'asd', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5OC81NzYvb3JpZ2luYWwvZGVuYWxpLXRvbnMtb2YtcG9vcC5qcGc=');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `e_books`
--
ALTER TABLE `e_books`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
